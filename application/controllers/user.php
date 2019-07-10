<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url());
		}
		$this->load->model('Model_user');
		date_default_timezone_set("Asia/Bangkok");//
			
	}


	public function index(){
		$this->load->view('s');
	}

	public function aksi(){
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');
 
		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			$this->load->view('s');
		}
	}
	
	public function show_user()
	{
		$where = array('id !=' => $this->session->userdata('id'));
		$data['user'] = 
			$this->Model_user->check($where,"user")->result();		
		$this->load->view('admin_panel/header', $data, FALSE);
		$this->load->view('admin_panel/side_bar', $data, FALSE);
		$this->load->view('user/show', $data, FALSE);
		$this->load->view('admin_panel/footer', $data, FALSE);
	 }

	public function profile(){
	 	$where = array('id' => $this->session->userdata('id'));
	  	$data['user'] = 
	  		$this->Model_user->check($where,"user")->result();
		$this->load->view('admin_panel/header',$data);
	 	$this->load->view('admin_panel/side_bar',$data);
	 	$this->load->view('profile/show',$data);
	 	$this->load->view('admin_panel/footer',$data);

	 }

	public function edit_profile(){
		$where = array('id' => $this->session->userdata('id'));
		$data['user'] = 
			$this->Model_user->check($where,'user')->result();
		$this->load->view('admin_panel/header', $data, FALSE);
		$this->load->view('admin_panel/side_bar', $data, FALSE);
		$this->load->view('profile/edit',$data);
		$this->load->view('admin_panel/footer', $data, FALSE);
	}

	public function update_profile(){
		$id = $this->session->userdata('id');
	
		$w = array('id' => $id);
		$data=$this->Model_user->check($w,'user')->row_array();
	
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		if( md5($this->input->post('password')) == $data['password'] ||
			empty(md5($this->input->post['password'])))
		{$password =  md5($this->input->post('password'));			
		}else {$password = $data['password'];}

		$email = $this->input->post('email');
		if( (!stristr($email,"@") OR !stristr($email,"."))){
 				redirect('profil');
 		}
		$updatedAt	 = date('Y-m-d G:i:s');;
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'updatedAt' => $updatedAt
			);
		
		$where = array('id' => $id);

		$u = array(	'username '=> $username);
		$user = $this->Model_user->unique_check( $u,"user");
		$self = $this->Model_user->check( $u,"user")->row_array();

		if($user == 0 || $username == $self['username'])
			{$this->Model_user->update_data($where,$data,'user');}
	
		redirect('profil');
	}

	public function dashboard_admin(){
		$data['user']=$this->Model_user->count_user();
		$data['url']=$this->Model_user->count_url();
		$id = $this->session->userdata('id');
		$data['most_visited_mine'] = $this->Model_user->count_max_user($id);
	
		$data['most_visited']=$this->Model_user->count_max();
		$this->load->view('admin_panel/header',$data);
		$this->load->view('admin_panel/side_bar',$data);
		$this->load->view('admin_panel/admin_dashboard',$data);
		$this->load->view('admin_panel/footer',$data);		
	}

	public function get_data_user(){
		$this->load->view('admin_panel/header');
		$this->load->view('admin_panel/side_bar');
		$this->load->view('user/input');
		$this->load->view('admin_panel/footer');
	} 


	function add_user(){						
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
 		$email = $this->input->post('email');
 		if( (!stristr($email,"@") OR !stristr($email,"."))){
 				redirect('tambah_user');
 		}

		$is_admin = $this->input->post('is_admin');
		$updatedAt	 = date('Y-m-d G:i:s');;

		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'is_admin' => $is_admin,
			'updatedAt' => $updatedAt
		);

		$u = array(	'username '=> $username);

		$user = $this->Model_user->unique_check( $u,"user");

		if(  $user != 0  )
			{redirect('tambah_user');}
		else			
			{$this->Model_user->input_data($data,'user');
			redirect('tampilkan_user');}

	}	

	function edit_user($id){
		$where = array('id' => $id);
		$data['user'] = 
			$this->Model_user->check($where,'user')->result();
		$this->load->view('admin_panel/header', $data, FALSE);
		$this->load->view('admin_panel/side_bar', $data, FALSE);
		$this->load->view('user/edit',$data);
		$this->load->view('admin_panel/footer', $data, FALSE);
	}

	function delete_user($id){
		$where = array('id' => $id);
		$this->Model_user->delete_data($where,'user');
		redirect('tampilkan_user');
	}

	function update_user() {
		$id = $this->input->post('id');
		$nama=$this->input->post('nama');
		$username= $this->input->post('username');
		$password=$this->input->post('password');

		$email = $this->input->post('email');
		$is_admin = $this->input->post('is_admin');
		$data=$this->Model_user->check( $id,'user')->row_array();
		
		if( md5($this->input->post('password')) == $data['password']){
				$password = $data['password'] ||empty( md5($password));
		}else {
				$password =  md5($this->input->post('password'));
		}
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'is_admin' => $is_admin,
			'updatedAt' => date('Y-m-d G:i:s')
			);
		$where = array('id' => $id);
		
		$u = array(	'username '=> $id);
		$user = $this->Model_user->unique_check( $u,"user");
	
		if($user == 0  )
			{ $this->Model_user->update_data($where,$data,'user');
			 }
		redirect('tampilkan_user');
	}

	public function show_url(){
		$id = array('id_user'=> $this->session->userdata('id'));
		$data['user'] = $this->Model_user->check($id,'url')->result();
		$this->load->view('admin_panel/header', $data, FALSE);
		$this->load->view('admin_panel/side_bar', $data, FALSE);
		$this->load->view('url/show', $data, FALSE);
		$this->load->view('admin_panel/footer', $data, FALSE);
	}

	public function get_data_url(){
		$this->load->view('admin_panel/header');
		$this->load->view('admin_panel/side_bar');
		$this->load->view('url/input');
		$this->load->view('admin_panel/footer');
	} 

	
	function random_string($length = 10) {
   		$random=  substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);

   		$check=$this->Model_user->unique_check(['short_url'=>$random],'url'); 	
   			if($check >0)
   				{return $this->random_string();
   			}else
   			{ return $random;}
   	}
	

	function add_url(){
		$url = $this->input->post('url');

		if(!filter_var($url, FILTER_VALIDATE_URL)){
			redirect('tambah_url');

		}

		$id_user = $this->session->userdata('id');
		$short = $this->random_string();
		$url = $this->input->post('url');

		$updatedAt	 = date('Y-m-d G:i:s');;
		
		$data = array(
			'id_user' => $id_user,
			'short_url' =>$short,
			'url' => $url,
			'updatedAt' => $updatedAt
			);

		$this->Model_user->input_data($data,'url');
		redirect('url');
	}


	
	function delete_url($id){
		$where = array('id' => $id);
		$this->Model_user->delete_data($where,'url');
		redirect('url');
	}	

	function edit_url($id){
		$where = array('id' => $id);
		$data['user'] = 
		$this->Model_user->check($where,'url')->result();
		$this->load->view('admin_panel/header', $data, FALSE);
		$this->load->view('admin_panel/side_bar', $data, FALSE);
		$this->load->view('url/edit',$data);
		$this->load->view('admin_panel/footer', $data, FALSE);
	}

	function update_url(){
		$id = $this->input->post('id');
		$id_user = $this->session->userdata('id');
		$short_url =$this->input->post('short_url');
		$updatedAt	 = date('Y-m-d G:i:s');
		$hit = intval($this->input->post('hit'));
		$hit++;
		// var_dump($hit) or die;
		$data = array(
			'id_user' => $id_user,
			'short_url' => $short_url,
			'hit' => $hit,
			'updatedAt'=> $updatedAt,
			             
			);
		
		$where = array('id' => $id);


		$this->form_validation->set_rules('short_url','Short Url','required|min_length[3]|max_length[25]|is_unique[url.short_url]');
 
		if($this->form_validation->run() != false){
		$this->Model_user->update_data($where,$data,'url');}
		redirect('url');
	}


	public function dashboard_user(){
		$data['url']=$this->Model_user->count_url();
		$id = $this->session->userdata('id');
		$data['most_visited'] = $this->Model_user->count_max();
		$data['most_visited_mine']=$this->Model_user->count_max_user($id);

		$this->load->view('admin_panel/header',$data);
		$this->load->view('admin_panel/side_bar',$data);
		$this->load->view('admin_panel/user_dashboard',$data);
		$this->load->view('admin_panel/footer',$data);		
	}
	

}