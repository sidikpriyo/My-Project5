<?php

class M_data extends CI_Model{

	//menampilkan data
	function get_data($table) {
		return $this->db->get($table);
	}
	//insert data
	function insert_data($data,$table) {
		$this->db->insert($table,$data);
	}
	//edit data
	function edit_data($where,$table) {
		return $this->db->get_where($table,$where);
	}
	//post edit data
	function update_data($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	//hapus data
	function delete_data($where,$table) {
		$this->db->delete($table,$where);
	}
	//db cek login
	function cek_login($table,$where) {
		return $this->db->get_where($table,$where);
	}
}
?>