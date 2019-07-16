<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_voting');
	}

	public function index(){		
		$data['title'] = 'Kandidat - Admin | e-Voting';
		$data['content'] = 'kandidat';

		if($this->session->userdata('akses') != "login"){
			redirect(base_url("admin/login_admin"));
		}

		$this->load->view('admin/v_head.php', $data);
		$this->load->view('admin/v_navbar.php');
		
		$this->load->database();
		$jumlah_data = $this->m_voting->jumlah_data('tbl_kandidat')->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = base_url('admin/kandidat_admin/index/');
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['kandidat'] = $this->m_voting->data('tbl_kandidat',$config['per_page'],$from)->result();
  		$data['jml_kandidat'] = $this->m_voting->jumlah_data('tbl_kandidat')->num_rows();

  		$this->load->view('admin/v_kandidat.php',$data);
		$this->load->view('admin/v_footer.php');
	}

	function aksi_tambah(){
		$id_kandidat = $this->input->post('id_kandidat');
		$nama_kandidat = $this->input->post('nama_kandidat');
		$visi = $this->input->post('visi');
		$misi = $this->input->post('misi');
		$foto = $this->input->post('foto');
 
		$data = array(
			'id_kandidat' => $id_kandidat,
			'nama_kandidat' => $nama_kandidat,
			'visi' => $visi,
			'misi' => $misi,
			'foto' => $foto
		);
		$this->m_voting->input_data($data,'tbl_kandidat');
		$this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Data Kandidat berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/kandidat_admin');
	}

	function aksi_hapus($id_kandidat){
		$id_kandidat = $this->input->post('id_kandidat');
		$where = array('id_kandidat' => $id_kandidat);
		$this->m_voting->hapus_data($where,'tbl_kandidat');
		$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Data Kandidat Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/kandidat_admin');
	}

	function aksi_ubah(){
		$id_kandidat = $this->input->post('id_kandidat');
		$nama_kandidat = $this->input->post('nama_kandidat');
		$visi = $this->input->post('visi');
		$misi = $this->input->post('misi');
		$foto = $this->input->post('foto');
 
		$data = array(
			'id_kandidat' => $id_kandidat,
			'nama_kandidat' => $nama_kandidat,
			'visi' => $visi,
			'misi' => $misi,
			'foto' => $foto
		);

		$where = array(
			'id_kandidat' => $id_kandidat
		);

		$this->m_voting->update_data($where,$data,'tbl_kandidat');
		$this->session->set_flashdata('notif','<div class="alert alert-warning" role="alert"> Data Kandidat berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/kandidat_admin');
	}
}