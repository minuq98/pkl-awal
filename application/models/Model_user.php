<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
	
	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function logger_data($number,$offset,$key = '')
	{
		if($key != ''){
		 $this->db->like('type', strtolower($key), 'BOTH');
		 $this->db->or_like('title', strtolower($key), 'BOTH');
		}				
		$this->db->order_by('createdAt','desc');
		return $query = $this->db->get('logger',$number,$offset)->result();		
	}

 	function get_table($table)
 	{
 		$this->db->order_by('hit','desc');
 		return $this->db->get($table,5) ;
 	}

	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function check($where,$table)
	{		
		return $this->db->get_where($table,$where);
	}

	function unique_check($where,$table)
	{		
		return $this->db->get_where($table,$where)->num_rows();
	}

	function count_user()
	{
		return $this->db->count_all_results('user');
	}		

	function count_url()
	{
		return $this->db->count_all_results('url');
	}

	function count_logger($key='')
	{
		if($key != ''){
		 $this->db->like('type', strtolower($key), 'BOTH');
		 $this->db->or_like('title', strtolower($key), 'BOTH');
		}				
		return $this->db->get('logger')->num_rows();
	}		

	function count_max()
	{
		$max =  $this->db->select_max('hit')->from('url')->get()->row_array();
		return $this->db->select('*')->from('url')->join('user','user.id= url.id_user')->where(['hit'=>$max['hit']])->get()->row();
	}		

	function count_max_user($id)
	{
		$max =  $this->db->select_max('hit')->from('url')->where(['id_user'=> $id])->get()->row_array();
		$count = $this->unique_check(['id_user'=>$id],'url');
		if($count > 0){
			return $this->db->select('*')->from('url')->join('user','user.id = url.id_user')->where(['hit'=>$max['hit']]	)->get()->row();
		}else return 0;

	}	

	function get_short_url($short) 
	{
		$this->db->where(['short_url' => $short]);
		return $this->db->get('url');
	}
}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */