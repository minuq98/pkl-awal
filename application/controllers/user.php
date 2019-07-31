<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url());
		}
		
		$this->load->model('Model_user');
		
		date_default_timezone_set("Asia/Bangkok");//		
	}

	public function index()
	{
		$this->load->view('s');	
	}

	public function pagination()
	{
		$this->load->library('Pagination');
		
		$config['per_page']	= 7;
 		$config['first_link']       = 'First';	
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        
        
        return $config;
	}

	public function logger()
	{
		$search_text ="";
		if (count($_GET) > 0){
		 	$config['suffix'] =  http_build_query($_GET, '', "&");
			$search_text = $this->input->get('key');		
		}

  		
   		$config = $this->pagination();
 	   	$count = $this->Model_user->count_logger($search_text);
		

		$config['base_url'] = base_url('log');
			$config['reuse_query_string'] = true;
		if($this->input->post('reset') != null){
			$config['reuse_query_string'] = false;
		}
		$config['total_rows'] = $count;
		$this->pagination->initialize($config);
	
		$data['page'] = $this->uri->segment(2);
		$data['per_page'] = $config['per_page'];
 		$data['user']=$this->Model_user->logger_data($config['per_page'],$data['page'],$search_text);



		$this->load->view('admin_panel/header', $data, FALSE);
		$this->load->view('admin_panel/side_bar', $data, FALSE);
		$this->load->view('admin_panel/logger', $data);	
		$this->load->view('admin_panel/footer', $data, FALSE);
	

	}

	public function show_user()
	{	
		
   		$config = $this->pagination();
 	   	$count = $this->Model_user->count_user();
		
		$config['base_url'] = base_url('tampilkan_user');
	
		$config['total_rows'] = $count;
		$this->pagination->initialize($config);
	
		$where = array('id !=' => $this->session->userdata('id'));
		$data['from'] = $this->uri->segment(2);
 		$data['user'] =  
		$this->Model_user->get_limit($config['per_page'],$data['from'],$where,"user")->result();

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
		$where = array('id' => $id);
		$data=$this->Model_user->check($where,'user')->row_array();
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');

		if (md5($this->input->post('password')) == $data['password'] ||
			empty(md5($this->input->post['password']))) {
			$password =  md5($this->input->post('password'));			
		} else {$password = $data['password'];}

		$email = $this->input->post('email');
		if ((!stristr($email,"@") OR !stristr($email,"."))){
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
		

		$where_username = array('username '=> $username);
		$user = $this->Model_user->unique_check( $where_username,"user");
		$self = $this->Model_user->check( $where_username,"user")->row_array();

		if ($user == 0 || $username == $self['username']){
			$this->Model_user->update_data($where,$data,'user');
		}
	
		redirect('profil');
	}

	public function dashboard_admin(){
		$data['user']=$this->Model_user->count_user();
		$data['url']=$this->Model_user->count_url();
		$id = $this->session->userdata('id');

		$dataUrl = $this->Model_user->get_table('url')->result();
			$chartLabel = [];
			$chartValue = [];

		$redirect = $this->Model_user->get_logger('redirect');
			$infoRedirect = [];
			$warningRedirect = [];
			$criticalRedirect = [];
			$debugRedirect = [];
			$waktuRedirect = [];

		$login =$this->Model_user->get_logger('login');
			$infoLogin = [];
			$warningLogin =[];
			$criticalLogin =[];
			$debugLogin = [];
			$waktuLogin =[];


		foreach($dataUrl as $row) {
			array_push($chartLabel, $row->short_url);
			array_push($chartValue, $row->hit);
		}

		foreach ($redirect as $row) {
			if($row->date != date('Y-m-d')){
				array_push($infoRedirect, $row->info);
				array_push($warningRedirect, $row->warning);
				array_push($criticalRedirect, $row->critical);
				array_push($debugRedirect, $row->debug);
				array_push($waktuRedirect , $row->date);
			} 

		}

		foreach ($login as $row) {
			if ( $row->date !=  date('Y-m-d') ) {	
				array_push($infoLogin, $row->info);
				array_push($warningLogin, $row->warning);
				array_push($criticalLogin, $row->critical);
				array_push($debugLogin, $row->debug);
				array_push($waktuLogin, $row->date);
			} 

		}

		$data['chartLabel'] = json_encode($chartLabel);
		$data['chartValue'] = json_encode($chartValue);

		$data['infoLogin'] =json_encode($infoLogin);
		$data['warningLogin'] = json_encode($warningLogin);
		$data['criticalLogin'] = json_encode($criticalLogin);
		$data['debugLogin']= json_encode($debugLogin);
		$data['waktuLogin'] =json_encode($waktuLogin);

		$data['infoRedirect'] =json_encode($infoRedirect);
		$data['warningRedirect'] = json_encode($warningRedirect);
		$data['criticalRedirect'] = json_encode($criticalRedirect);
		$data['debugRedirect']= json_encode($debugRedirect);
		$data['waktuRedirect']	= json_encode($waktuRedirect);	

		$data['most_visited_mine'] = $this->Model_user->count_max_user($id);
		$data['most_visited']=$this->Model_user->count_max();

		$this->load->view('admin_panel/header',$data);
		$this->load->view('admin_panel/side_bar',$data);
		$this->load->view('admin_panel/admin_dashboard',$data);

	}


	public function detail()
	{ 

		$data['title'] = $this->input->post('title');		
		$date = date('Y-m-d'); 
		
		if($this->input->post('date') != null) {
				$date = $this->input->post('date');
		}


		$where = array(
			'date_format(createdAt,"%Y-%m-%d")' => $date,
			'title' => $data['title']
		);
		$data['data'] =$this->Model_user->check($where,'logger')->result();
		$waktu = [];
		$count = [];
		$log =[];

			$i=0;
		foreach ($data['data'] as $row) {
			$desc = json_decode($row->descript);
			array_push($log, $desc);

			if ( in_array(date("H", strtotime($row->createdAt)), $waktu)   ){
				$add = end($count)+1;				
				array_pop($count);
				array_push($count, $add);

			} else {
			array_push($waktu, date("H", strtotime($row->createdAt)) );
			array_push($count, 1);
			}
			$i++;


		}
		$data['waktu'] = json_encode($waktu);
		$data['count'] = json_encode($count);
		$data['log'] = $log;
		$data['dateJson'] =json_encode($date);
		$data['date'] = $date;
		
		$this->load->view('admin_panel/header',$data);
		$this->load->view('admin_panel/side_bar',$data);
		$this->load->view('admin_panel/detail', $data);
	

	}
	public function get_data_user()
	{
		$this->load->view('admin_panel/header');
		$this->load->view('admin_panel/side_bar');
		$this->load->view('user/input');
		$this->load->view('admin_panel/footer');
	} 


	function add_user()
	{	
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
 		$email = $this->input->post('email');
 	
 		if( (!stristr($email,"@") OR !stristr($email,"."))){
 				redirect('tambah_user');
 		}

		$is_admin = $this->input->post('is_admin');
		$updatedAt	 = date('Y-m-d G:i:s');
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'is_admin' => $is_admin,
			'updatedAt' => $updatedAt
		);

		$where_username = array('username '=> $username);
		$user = $this->Model_user->unique_check( $where_username,"user");

		if ($user != 0)
			redirect('tambah_user');
		else {
			$this->Model_user->input_data($data,'user');
			redirect('tampilkan_user');
		}
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
		$count = $this->input->post('count');
		if (md5($this->input->post('password')) == $data['password']) {
			$password = $data['password'] ||empty( md5($password));
		} else {
			$password =  md5($this->input->post('password'));
		}

		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'is_admin' => $is_admin,
			'count' => $count,
			'updatedAt' => date('Y-m-d G:i:s')
		);
		

		$where = array('id' => $id);
		$where_username = array('username'=> $username);
		$user = $this->Model_user->unique_check( $id,"user");
	
		if ($user == 0){ 
			$this->Model_user->update_data($where,$data,'user');
		}
		
		redirect('tampilkan_user');
	}

	public function show_url()
	{


 	   	$count = $this->Model_user->count_url();
		
		$config = $this->pagination();
		$config['base_url'] = base_url('url');
	
		$config['total_rows'] = $count;
		$this->pagination->initialize($config);
	
		$where = array('id_user' => $this->session->userdata('id'));
		$data['from'] = $this->uri->segment(2);

 		$data['user'] =  
		$this->Model_user->get_limit($config['per_page'],$data['from'],$where,"url")->result();
	
		
		$this->load->view('admin_panel/header', $data, FALSE);
		$this->load->view('admin_panel/side_bar', $data, FALSE);
		$this->load->view('url/show', $data, FALSE);
		$this->load->view('admin_panel/footer', $data, FALSE);
	}

	public function get_data_url()
	{
		$this->load->view('admin_panel/header');
		$this->load->view('admin_panel/side_bar');
		$this->load->view('url/input');
		$this->load->view('admin_panel/footer');
	} 

	
	function random_string($length = 10) 
	{
   		$random=  substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);

   		$check=$this->Model_user->unique_check(['short_url'=>$random],'url'); 	
   	
   			if ($check >0)
   				return $this->random_string();
   			else 
   				return $random;
   	}
	

	function add_url(){
		$url = $this->input->post('url');
		if (!filter_var($url, FILTER_VALIDATE_URL)) {
			redirect('tambah_url');
		}

		$id_user = $this->session->userdata('id');
		$short = $this->random_string();
		$url = $this->input->post('url');
		$updatedAt	 = date('Y-m-d G:i:s');
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
		
		$data = array(
			'id_user' => $id_user,
			'short_url' => $short_url,
			'hit' => $hit,
			'updatedAt'=> $updatedAt,	             
		);		
		$where = array('id' => $id);

		$this->form_validation->set_rules('short_url','Short Url','required|min_length[3]|max_length[25]|is_unique[url.short_url]');
 
		if ($this->form_validation->run() != false) 
		$this->Model_user->update_data($where,$data,'url');

		redirect('url');
	}


	public function dashboard_user(){
		$data['url']=$this->Model_user->count_url();
		$id = $this->session->userdata('id');
		$data['most_visited'] = $this->Model_user->count_max();
		$data['most_visited_mine']=$this->Model_user->count_max_user($id);

		$dataUrl = $this->Model_user->check(['id_user'=> $this->session->userdata('id')],'url')->result();
			$chartLabel = [];
			$chartValue = [];

		foreach($dataUrl as $row) {
			array_push($chartLabel, $row->short_url);
			array_push($chartValue, $row->hit);
		}

		$data['chartLabel'] = json_encode($chartLabel);
		$data['chartValue'] = json_encode($chartValue);
		
		$this->load->view('admin_panel/header',$data);
		$this->load->view('admin_panel/side_bar',$data);
		$this->load->view('admin_panel/user_dashboard',$data);
		
	}
	

}