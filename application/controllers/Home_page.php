<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_page extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_user');
	}

	public function index()	{
		$this->load->view('landing');
	}

	public function shorturl($short){
		
		$url = $this->Model_user->get_short_url($short);
		$access = intval($url->row()->hit);
		$count= $access + 1;
		$data= array('hit' => $count);		
		$short = array('short_url' => $short);
		$hit = $this->Model_user->update_data($short ,$data , 'url');

		if($url->num_rows() ==1	) {

			 redirect($url->row()->url);
		}

	}


	function login(){
		$this->load->view('admin_panel/login');
	}
	function action_login(){

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
	
    				
		if($cek > 0 && $this->form_validation->run() != false){
			$data_session = array(
				'id' => $is['id'],
				'status' => "login",
				'is'	=> $is['is_admin'],				
				);
 
			$this->session->set_userdata($data_session);
 
 				if ( $is['is_admin']=="admin") {			
					redirect(base_url("beranda_admin"));
 				}else{
 					redirect(base_url("beranda_user"));}
		}else{
			$this->load->view('admin_panel/login');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}





/*	public function index() //called by default
    	{
    	//data to be sent to the view 🙂
        $data = array(); 
        if($this->input->post('url'))//did the user post a URL to be shorten?
        {
//            $this->load->model('short_url_model');//load the model which deals with data for short URLs
            $short_url=$this->Model_url->store_long_url();//store the URL and get back the shorten URL
            
            if($short_url)//using PHP's awesome power
            {
                $data['short_url']=$short_url;
            }
            else //there was an error
            {
                $data['error']=validation_errors();
            }
        }

        $this->load->view('get_url', $data);//load the single view get_url and send any data to it
    }

    public function get_shorty() //this function is called by the routes file using the 404_override 🙂
    {
        $this->load->model('Model_url'); //load the model for dealing with short URLs
        $shorty=$this->uri->segment(1);//get the segment the user requested e.g. Nw from http://short.local/Nw
         redirect($this->Model_url->get_long_url($shorty));//direct the user to the long URL the short URL is connected to 🙂 MAGIC
    }

    public function error_404() //a little error for when users enter an invalid short URL
    {
        $data['error']='Whoops cannot find that URL!';
        $this->load->view('get_url', $data);//load our single view 🙂
    }
*/


	// function a(){
	// 	$this->load->view('v_form');
	// }

	// function aksi(){
	// 	$this->form_validation->set_rules('nama','Nama','required');
	// 	$this->form_validation->set_rules('email','Email','required');
	// 	$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');
 		 
	// 	if($this->form_validation->run() != false){
	// 		echo "Form validation oke";
	// 	}else{
	// 		$this->load->view('v_form');
	// 	}
	// }


}
