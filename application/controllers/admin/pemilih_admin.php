<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_voting');
	}

	public function index(){		
		$data['title'] = 'Pemilih - Admin | e-Voting';
		$data['content'] = 'pemilih';

		if($this->session->userdata('akses') != "login"){
			redirect(base_url("admin/login_admin"));
		}

		$this->load->view('admin/v_head.php', $data);
		$this->load->view('admin/v_navbar.php');
		
		$this->load->database();
		$jumlah_data = $this->m_voting->jumlah_data('tbl_pemilih')->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = base_url('admin/pemilih_admin/index/');
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['pemilih'] = $this->m_voting->data('tbl_pemilih',$config['per_page'],$from)->result();
  		$data['jml_pemilih'] = $this->m_voting->jumlah_data('tbl_pemilih')->num_rows();

  		$this->load->view('admin/v_pemilih.php',$data);
		$this->load->view('admin/v_footer.php');
	}

	function aksi_tambah(){
		$id_pemilih = $this->input->post('id_pemilih');
		$status = $this->input->post('status');
 
		$data = array(
			'id_pemilih' => $id_pemilih,
			'status' => $status);

		$this->m_voting->input_data($data,'tbl_pemilih');
		$this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Data Pemilih berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/pemilih_admin');
	}

	function aksi_hapus($id_pemilih){
		$id_pemilih = $this->input->post('id_pemilih');
		$where = array('id_pemilih' => $id_pemilih);
		$this->m_voting->hapus_data($where,'tbl_pemilih');
		$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Data pemilih Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/pemilih_admin');
	}

	function aksi_ubah(){
		$id_pemilih = $this->input->post('id_pemilih');
		$status = $this->input->post('status');
 
		$data = array(
			'id_pemilih' => $id_pemilih,
			'status' => $status);

		$where = array(
			'id_pemilih' => $id_pemilih
		);

		$this->m_voting->update_data($where,$data,'tbl_pemilih');
		$this->session->set_flashdata('notif','<div class="alert alert-warning" role="alert"> Data pemilih berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/pemilih_admin');
	}
}