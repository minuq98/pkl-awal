<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_url');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['user'] = $this->M_url->tampil()->result();
		$this->load->view('header', $data, FALSE);
		$this->load->view('a_side_bar', $data, FALSE);
		$this->load->view('u_tampil', $data, FALSE);
		$this->load->view('footer', $data, FALSE);
	}
	public function tambahU(){
		$this->load->view('u_input');
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
	$this->load->view('u_edit',$data);

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
 
 //var_dump($where['id']) or die;
	$this->M_url->update_data($where,$data,'url');

	redirect('user/index');
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */