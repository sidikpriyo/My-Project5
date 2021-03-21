<?php

class M_pendaftaran extends CI_Model{

public function tampil_data()
	{
		$this->db->select('pindah_agama.*, m_data.nik, m_data.nama, m_data.kode_pos, m_data.id_agama, m_data.jenis_kelamin, m_petugas.nama_petugas');
  		$this->db->from('pindah_agama');
  		$this->db->join('m_data', 'm_data.nik = pindah_agama.nik');
  		$this->db->join('m_petugas', 'm_petugas.id_petugas = pindah_agama.id_petugas');
  		$query = $this->db->get();
		return $query->result();
	}

	public function input_data($data, $table){
		$this->db->insert($table, $data);
	}

	public function data_penduduk(){
		$this->db->select('nik, nama, kode_pos, id_agama, jenis_kelamin');
		$this->db->from('m_data');
		$this->db->order_by("nama", "asc");
		$query = $this->db->get();
		return $query->result();
	}
	public function cari_nama($id){
		return	$this->db->get_where('m_data',['nik'=>$id])->row_array();
	}
	//hapus data
	function delete_data($where,$table) {
		$this->db->delete($table,$where);
	}

	public function data($idpindah_agama){
		return $this->db->query("select m_data.*, pindah_agama.*, m_petugas.* from pindah_agama join m_data on pindah_agama.nik = m_data.nik join m_petugas on pindah_agama.id_petugas = m_petugas.id_petugas where pindah_agama.idpindah_agama=$idpindah_agama");

		// return $this->db->query("select data_diri.*, nota_setor.* from nota_setor join data_diri on nota_setor.no_induk = data_diri.no_induk where nota_setor.id_nota=$id_nota");
	}

}

//SELECT idpindah_agama, tanggal, m_data.nik, m_data.nama, m_data.kode_pos, m_data.id_agama, m_data.jenis_kelamin, m_petugas.nama_petugas FROM pindah_agama JOIN m_data on pindah_agama.nik=m_data.nik JOIN m_petugas ON pindah_agama.id_petugas=m_petugas.id_petugas

?>