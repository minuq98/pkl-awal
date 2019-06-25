<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	function  tampil(){
		return $this->db->get('user');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function jumlah_user(){
		return $this->db->count_all_results('user');
	}		
}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */