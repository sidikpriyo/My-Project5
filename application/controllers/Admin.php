<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status')!="admin_login") 
		{
			redirect (base_url().'login?alert=belum_login');	
		}
	}

	function index() {
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_index');
		$this->load->view('admin/v_footer');
	}
	//Bagian Password
	function logout() {
		$this->session->sess_destroy();
		redirect (base_url().'login/?alert=logout');
	}
	function ganti_password() {
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_ganti_password');
		$this->load->view('admin/v_footer');
	}

	function ganti_password_aksi() {
		$baru = $this->input->post('password_baru');
		$ulang = $this->input->post('password_ulang');

		$this->form_validation->set_rules('password_baru','Password Baru','required|matches[password_ulang]');
		$this->form_validation->set_rules('password_ulang', 'Ulangi Password', 'required');
		if ($this->form_validation->run()!=false) 
		{
			$id = $this->session->userdata('id');
			$where = array('id'=>$id);
			$data = array('password'=>($baru));
			$this->M_data->update_data($where,$data,'admin');
			redirect (base_url().'admin/ganti_password/?alert=sukses');
		} else 
		{
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_ganti_password');
			$this->load->view('admin/v_footer');
		}
	}
	//Bagian CRUD Petugas
	function petugas() {
		$data['petugas'] = $this->M_data->get_data('m_petugas')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_petugas',$data);
		$this->load->view('admin/v_footer');
	}

	function petugas_tambah() {
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_petugas_tambah');
		$this->load->view('admin/v_footer');
	}

	function petugas_tambah_aksi() {
		$id = $this->input->post('id_petugas');
		$nama = $this->input->post('nama_petugas'); //m_biodata_pegawai_nama
		$username = $this->input->post('username'); 
		$password = $this->input->post('password');
		$data = array(
			'id_petugas'=> $id,
			'nama_petugas' => $nama,
			'username' => $username,
			'password' => $password
		);
		$this->M_data->insert_data($data,'m_petugas');
		redirect (base_url().'admin/petugas');
	}

	function petugas_edit($id) {
		$where = array('id_petugas'=>$id);

		$data['petugas'] = $this->M_data->edit_data($where, 'm_petugas')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_petugas_edit',$data);
		$this->load->view('admin/v_footer');
	}

	function petugas_update() {
		$id = $this->input->post('id_petugas');
		$nama = $this->input->post('nama_petugas');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('id_petugas'=>$id);
		//cek password di isi apa tidak

		if ($password=="") {
			$data = array(
				
				'nama_petugas'=>$nama,
				'username'=>$username
			);
			$this->M_data->update_data($where,$data,'m_petugas');
		}else {
			$data = array(
				// 'nik'=>$nik,
				'nama_petugas'=>$nama,
				'username'=>$username,
				'password'=>$password
			);
			$this->M_data->update_data($where,$data,'m_petugas');
		}
		redirect (base_url().'admin/petugas');
	}

	function petugas_hapus($id) {
		$where = array('id_petugas'=>$id);
		$this->M_data->delete_data($where,'m_petugas');
		redirect (base_url().'admin/petugas');
	}
}
?>