<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Petugas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status')!="petugas_login") {
		redirect (base_url().'login?alert=belum_login');
		}
	}

	function index() {
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_index');
		$this->load->view('petugas/v_footer');
	}

	function logout() {
		$this->session->sess_destroy();
		redirect (base_url().'login/?alert=logout');
	}

	function ganti_password() {
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_ganti_password');
		$this->load->view('petugas/v_footer');
	}

	function ganti_password_aksi() {
		$baru = $this->input->post('password_baru');
		$ulang = $this->input->post('password_ulang');

		$this->form_validation->set_rules('password_baru','Password Baru','required|matches[password_ulang]');
		$this->form_validation->set_rules('password_ulang', 'Ulangi Password', 'required');
		if ($this->form_validation->run()!=false) 
		{
			$id = $this->session->userdata('id');
			$where = array('id_petugas'=>$id);
			$data = array('password'=>($baru));
			$this->M_data->update_data($where,$data,'m_petugas');
			redirect (base_url().'petugas/ganti_password/?alert=sukses');
		} else 
		{
			$this->load->view('petugas/v_header');
			$this->load->view('petugas/v_ganti_password');
			$this->load->view('petugas/v_footer');
		}
	}

	//ambil data pindah agama dengan restAPI
	var $API="";
	function ambilpenduduk() {
	$this->API="http://localhost/rest_server_kel5/index.php/datadiri/";
	$this->load->library('curl');
	$data['penduduk'] = json_decode($this->curl->simple_get($this->API.'/050_6a_kel5'));

	$this->load->view('petugas/v_header');
	$this->load->view('petugas/v_penduduk',$data);
	$this->load->view('petugas/v_footer');
	}

	//insert biodata mahasiswa ke simperpus
	function api_input() {
		$this->API="http://localhost/rest_server_kel5/index.php/datadiri/";
		$this->load->library('curl');
		$data = json_decode($this->curl->simple_get($this->API.'/050_6a_kel5'));
		$this->db->trans_begin();
		foreach ($data as $row) {
			$data = array(
			"nik"=>$row->nik,
			"nama"=>$row->nama,
			"kode_pos"=>$row->kode_pos,
			"id_agama"=>$row->agama,
			"jenis_kelamin"=>$row->jenis_kelamin
			);
			$this->M_data->insert_data($data,'m_data');
		}
		if ($this->db->trans_status() === False) {
			$this->db->trans_rollback();
			redirect(base_url().'petugas/anggota');
		} else {
			$this->db->trans_commit();
			redirect(base_url().'petugas/anggota');
		}
	}

	function anggota() {
	$data['anggota'] = $this->M_data->get_data('m_data')->result();
	$this->load->view('petugas/v_header');
	$this->load->view('petugas/v_anggota',$data);
	$this->load->view('petugas/v_footer');
	}

	function hapus_anggota() {
		$this->db->empty_table('m_data');
		redirect(base_url().'petugas/anggota');
	}

	//cetak kartu anggota
	function anggota_kartu($id) {
	//mengambil data berdasarkan id
		$where = array('nik'=>$id);
		$data['anggota'] = $this->M_data->edit_data($where,'m_data')->result();
		$this->load->view('petugas/v_anggota_kartu',$data);
		//$this->load->view('petugas/v_anggota_kartu');
	}

	//menampilkan data petugas pindah agama
	function daftar_petugas() {
		$data['petugas'] = $this->M_data->get_data('m_petugas')->result();
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_petugas',$data);
		$this->load->view('petugas/v_footer');

	}
	//membuat CRUD pendaftaran pindah agama
	function pindah_agama() {
		$data['kacau'] = $this->M_pendaftaran->tampil_data();
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_pindah_agama',$data);
		$this->load->view('petugas/v_footer');
	}
	// create data BELUM BERFUNGSI
	function plus_pendaftaran() {
		$data['dd_bidang'] = $this->M_pendaftaran->data_penduduk();
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_pindah_agamaplus',$data);
		$this->load->view('petugas/v_footer');
	}

	function tambah_aksipendaftaran() {
		$nik = $this->input->post('nik');
		$id_petugas = $this->input->post('id_petugas');
		$agama_pindah = $this->input->post('agama_pindah');
		$tanggal = $this->input->post('tanggal');
		
		$array = ['nik'=>$nik,
					'agama_pindah'=>$agama_pindah,
					'tanggal'=>$tanggal,
					'id_petugas'=>$id_petugas
					];

		$this->M_pendaftaran->input_data($array, 'pindah_agama');
		redirect('petugas/pindah_agama');
	}

	public function find_note(){
		$nama = $this->input->post('nama');
		echo json_encode($this->M_data->cari_nama($nama));
	}
	function hapus($id) {
		$where = array('idpindah_agama'=>$id);
		$this->M_pendaftaran->delete_data($where,'pindah_agama');
		redirect(base_url().'petugas/pindah_agama');
	}
	
	public function cetak($idpindah_agama)
	{
		
		$data['pendaftaran'] = $this->M_pendaftaran->data($idpindah_agama)->row();
		$this->load->view('petugas/v_cetak',$data);
	}


}
?>