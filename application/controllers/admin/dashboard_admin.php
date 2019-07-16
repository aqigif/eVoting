<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_voting');
	}

	public function index(){		
		$data['title'] = 'Dashboard - Admin | e-Voting';
		$data['content'] = 'dashboard';

		if($this->session->userdata('akses') != "login"){
			redirect(base_url("admin/login_admin"));
		}

		$this->load->view('admin/v_head.php', $data);
		$this->load->view('admin/v_navbar.php');
		
		$data['kandidat'] = $this->m_voting->tampil_data('tbl_kandidat')->result();
		$data['jml_suara'] = $this->m_voting->tampil_data('tbl_suara')->num_rows();
		$data['jml_kandidat'] = $this->m_voting->tampil_data('tbl_kandidat')->num_rows();
		$data['jml_pemilih'] = $this->m_voting->tampil_data('tbl_pemilih')->num_rows();
  		$this->load->view('admin/v_dashboard.php',$data);

		$this->load->view('admin/v_footer.php');
	}
}
