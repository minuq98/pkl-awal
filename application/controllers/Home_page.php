<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_page extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_user');
		$this->load->library('user_agent' );
	}

	public function index()	
	{
		$this->load->view('landing');
	}	

	public function log($title,$type,$detail)
	{
		if ($this->agent->is_browser()) {
			$agent = $this->agent->browser();

			$desc = [
				'ip' => $this->input->ip_address(),
				'browser' => $agent,
				'version' =>$this->agent->version(),
				'platform' => $this->agent->platform(),
			];
			$data = array(
				'title'=>$title,
				'descript'=>json_encode(array_merge($desc,$detail)),
				'type'=>$type,
				'createdAt'=>date('Y-m-d G:i:s'),
				
			);
			 $this->Model_user->input_data($data,'logger');
		} elseif ($this->agent->is_mobile()) {			
			$agent = $this->agent->mobile();
			$desc = [
				'ip' => $this->input->ip_address(),
				'mobile' => $agent,
				'platform' => $this->agent->platform(),
			];
			$data = array(
				'title' => $title,
				'descript' => json_encode(array_merge($desc,$detail)),
				'type' => $type,
				'createdAt' => date('Y-m-d G:i:s')
			);
			return $data;
			 $this->Model_user->input_data($data,'logger');			
		} else {
			$agent = 'Data user gagal di dapatkan';
		}

	}

	public function shorturl($short)
	{
		$url = $this->Model_user->get_short_url($short);
		if ($url->num_rows() == 1 ) {
			// echo $url->num_rows();exit;
			foreach ($url->result() as $row) {

				$access = intval($row->hit);

			}

			// $this->log('redirect','info',['url' => $url->row()->url]);
			$data= array('hit' => $access + 1);		
			$short = array('short_url' => $short);

			$this->log('redirect','info',['url' => $url->row()->url]);

			$this->Model_user->update_data($short ,$data ,'url');
			$this->load->view('countdown', ['url' => $url->row()]);
		} else {
			echo show_404();
		}
	}

	public function redirect () {
		$url = $this->input->post('url');

		redirect($url);
	}


	public function login(){
		$this->load->view('admin_panel/login');
	}

	public function action_login(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->Model_user->check($where,"user")->num_rows();
		$is = $this->Model_user->check($where,"user")->row_array();
		
		$admin =$this->Model_user->check(['username' => $username],"user");
		$user =$this->Model_user->check(['password' => md5($password)],"user");		    				
		if($cek > 0 && $this->form_validation->run() != false  ) {
			$data_session = array(
				'id' => $is['id'],
				'status' => "login",
				'is'	=> $is['is_admin'],				
				);
 
			$this->session->set_userdata($data_session);
 			$this->log('login','info',array('user' => $is['username']));
 				if ( $is['is_admin']=="admin") 			
					redirect(base_url("beranda_admin"));
 				else
 					redirect(base_url("beranda_user"));

		} else if ( $admin->row_array()['count'] == 3){ 
			$this->load->view('errors/html/terblokir');
			$this->log('login','warning',array_merge($where,['inform' => 'Terbanned']));
		} else if ( $admin->num_rows() == 1 && $user->num_rows() == 0 && $admin->row_array()['is_admin'] !== 'admin' ) {
			$data = $admin->row_array()['count'];
			$data++;
			$this->Model_user->update_data(['username'=>$username],['count'=> $data],'user');		
			$this->session->set_flashdata('errorLogin', true);
			$this->log('Gagal Log in','warning',array_merge($where,['inform' => 'gagal_login']));
			$this->load->view('admin_panel/login');			
		} else {
			$this->session->set_flashdata('errorLogin', true);
			$this->load->view('admin_panel/login');
		}
	}
 
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}




}
