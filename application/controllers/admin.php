<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	if($this->session->userdata('status') != "login"){
			redirect(base_url());
		}
		$this->load->model('M_user');
		$this->load->model('M_url');
	
	}
	public function index()
	{

		$data['user'] = $this->M_user->tampil()->result();
		
		$this->load->view('header', $data, FALSE);
		$this->load->view('a_side_bar', $data, FALSE);
		$this->load->view('a_tampil', $data, FALSE);
		$this->load->view('footer', $data, FALSE);
	 }
	 public function profil(){
	 	$where = array(
			'username' => $this->session->userdata('nama')
			);
	
	 $data['user'] = $this->M_user->cek_login("user",$where)->result();
	$this->load->view('header',$data);
	 $this->load->view('a_side_bar',$data);
	 $this->load->view('profile',$data);
	 $this->load->view('footer',$data);

	 }
	public function dashboard()
	{
		$data['user']=$this->M_user->jumlah_user();
		$data['url']=$this->M_url->jumlah_url();
		$this->load->view('header',$data);
		$this->load->view('a_side_bar',$data);
		$this->load->view('a_dashboard',$data);
		$this->load->view('footer',$data);		
	}
	public function tambah(){
	$this->load->view('header');
	$this->load->view('a_side_bar');
	$this->load->view('a_input');
	$this->load->view('footer');
	} 
	function tambah_user(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
 		$email = $this->input->post('email');
		$is_admin = $this->input->post('is_admin');
		$createdAt	 = $this->input->post('createdAt');
		$updatedAt	 = $this->input->post('updatedAt');
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'is_admin' => $is_admin,
			);
		$this->M_user->input_data($data,'user');
		redirect('admin/index');
	}
	function edit($id){
	$where = array('id' => $id);
	$data['user'] = $this->M_user->edit_data($where,'user')->result();
	$this->load->view('header', $data, FALSE);
	$this->load->view('a_side_bar', $data, FALSE);
	$this->load->view('a_edit',$data);
	$this->load->view('footer', $data, FALSE);
	}
	function hapus($id){
	$where = array('id' => $id);
	$this->M_user->hapus_data($where,'user');
	redirect('admin/index');
	}	
	function update(){
			$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
 		$email = $this->input->post('email');
		$is_admin = $this->input->post('is_admin');
		$createdAt	 = $this->input->post('createdAt');
		$updatedAt	 = $this->input->post('updatedAt');
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'is_admin' => $is_admin,
			);
		
	$where = array(
		'id' => $id
	);
 
	$this->M_user->update_data($where,$data,'user');

	redirect('admin/index');
	}

	public function indexU()
	{
		$data['user'] = $this->M_url->tampil()->result();
		$this->load->view('header', $data, FALSE);
		$this->load->view('a_side_bar', $data, FALSE);
		$this->load->view('u_tampil', $data, FALSE);
		$this->load->view('footer', $data, FALSE);
	}
	public function tambahU(){
		$this->load->view('header');
		$this->load->view('a_side_bar');
		$this->load->view('u_input');
		$this->load->view('footer');
	} 
	function tambah_userU(){
		$id_user = $this->input->post('id_user');
		$short_url = $this->input->post('short_url');
		$url = $this->input->post('url');
 		$hit = $this->input->post('hit');
		$createdAt	 = $this->input->post('createdAt');
		$updatedAt	 = $this->input->post('updatedAt');
		$data = array(
			'id_user' => $id_user,
			'short_url' => $short_url,
			'url' => $url,
			'hit' => $hit,

			);
		$this->M_url->input_data($data,'url');
		redirect('user/index');
	}
	function hapusU($id){
	$where = array('id' => $id);
	$this->M_url->hapus_data($where,'url');
	redirect('user/index');
	}	
	function editU($id){
	$where = array('id' => $id);
	$data['user'] = $this->M_url->edit_data($where,'url')->result();
	$this->load->view('header', $data, FALSE);
	$this->load->view('a_side_bar', $data, FALSE);
	$this->load->view('u_edit',$data);
	$this->load->view('footer', $data, FALSE);
	}
	function updateU(){
			$id = $this->input->post('id');
		 $id_user = $this->input->post('id_user');
		$short_url =$this->input->post('short_url');
		$url = $this->input->post('url');
 		$hit = $this->input->post('hit');

		$createdAt	 = $this->input->post('createdAt');
		$updatedAt	 = $this->input->post('updatedAt');
		$data = array(
			'id_user' => $id_user,
			'short_url' => $short_url,
			'url' => $url,
			'hit' => $hit,
			);
		
	$where = array(
		'id' => $id
	);
 
	$this->M_url->update_data($where,$data,'url');

	redirect('user/index');
	}

	public function dashboardU()
	{
		$data['url']=$this->M_url->jumlah_url();
		$this->load->view('header',$data);
		$this->load->view('a_side_bar',$data);
		$this->load->view('u_dashboard',$data);
		$this->load->view('footer',$data);		
	}
	

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */