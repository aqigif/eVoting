<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_voting extends CI_Model{

	function tampil_data($table){
		return $this->db->get($table);
	}

	function ambil_data($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function data($table,$number,$offset){
		return $query = $this->db->get($table,$number,$offset);		
	}
 
	function jumlah_data($table){
		return $this->db->get($table);
	}
}