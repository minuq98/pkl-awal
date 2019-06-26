<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('M_user');

}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	function aksi_login(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->M_user->cek_login("user",$where)->num_rows();
		$is = $this->M_user->cek_login("user",$where)->row_array();
	
        if($is['is_admin'] == "not"){
				$is['is_admin'] = "User";	
				}
					
		if($cek > 0 && $this->form_validation->run() != false){
 
			$data_session = array(
				'id' => $is['id'],
				'nama' => $username,
				'status' => "login",
				'is'	=> $is['is_admin'],
				
				);
 
			$this->session->set_userdata($data_session);
 
 			if ( $is['is_admin']=="admin") {
 			
			redirect(base_url("index.php/admin/dashboard"));
 	
 			}
 			else{
 				redirect(base_url("index.php/admin/dashboardU"));
 			}
		}else{
			$this->load->view('welcome_message');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
