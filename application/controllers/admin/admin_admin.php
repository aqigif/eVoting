<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_voting');
		$this->load->library('pagination');
	}

	public function index(){		
		$data['title'] = 'Admin - Admin | e-Voting';
		$data['content'] = 'admin';

		if($this->session->userdata('akses') != "login"){
			redirect(base_url("admin/login_admin"));
		}

		$this->load->view('admin/v_head.php', $data);
		$this->load->view('admin/v_navbar.php');
		
		$this->load->database();
		$jumlah_data = $this->m_voting->jumlah_data('tbl_admin')->num_rows();
		$config['base_url'] = base_url('admin_admin/index/');
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['admin'] = $this->m_voting->data('tbl_admin',$config['per_page'],$from)->result();
  		$data['jml_admin'] = $this->m_voting->jumlah_data('tbl_admin')->num_rows();

  		$this->load->view('admin/v_admin.php',$data);
		$this->load->view('admin/v_footer.php');
	}

	function aksi_tambah(){
		$id_admin = $this->input->post('id_admin');
		$nama_admin = $this->input->post('nama_admin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$pertanyaan = $this->input->post('pertanyaan');
		$jawaban = $this->input->post('jawaban');
		

		$data = array(
			'id_admin' => $id_admin,
			'nama_admin' => $nama_admin,
			'username' => $username,
			'password' => md5($password),
			'pertanyaan' => $pertanyaan,
			'jawaban' => $jawaban);

		$this->m_voting->input_data($data,'tbl_admin');
		$this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Data Admin berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/admin_admin');
	}

	function aksi_hapus($id_admin){
		$id_admin = $this->input->post('id_admin');
		$where = array('id_admin' => $id_admin);
		$this->m_voting->hapus_data($where,'tbl_admin');
		$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Data admin Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/admin_admin');
	}

	function aksi_ubah(){
		$id_admin = $this->input->post('id_admin');
		$nama_admin = $this->input->post('nama_admin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$pertanyaan = $this->input->post('pertanyaan');
		$jawaban = $this->input->post('jawaban');
		

		$data = array(
			'id_admin' => $id_admin,
			'nama_admin' => $nama_admin,
			'username' => $username,
			'password' => md5($password),
			'pertanyaan' => $pertanyaan,
			'jawaban' => $jawaban);

		$where = array(
			'id_admin' => $id_admin
		);

		$this->m_voting->update_data($where,$data,'tbl_admin');
		$this->session->set_flashdata('notif','<div class="alert alert-warning" role="alert"> Data admin berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/admin_admin');
	}
}