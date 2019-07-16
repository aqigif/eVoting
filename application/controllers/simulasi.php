<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simulasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('m_voting');
	}

	public function index(){				
		$data['title'] = 'e-Voting | SMK Negeri 1 Kawali';
		$data['content'] = 'simulasi';

		$data['kandidat'] = $this->m_voting->tampil_data('tbl_kandidat')->result();

		$this->load->view('v_head.php', $data);
		$this->load->view('v_simulasi.php', $data);
		$this->load->view('v_footer.php');
	}

	public function aksi_pilih(){
		redirect(base_url("simulasi/logout"));
	}

	public function logout(){
		$this->session->sess_destroy();
		$data['h2'] = 'Terima Kasih Anda telah melakukan simulasi';
		$data['p'] = 'Berdoalah dengan keras supaya pilihan anda nanti yang menjadi Ketua OSIS';
		$data['back'] = "";

		$this->load->view('v_head.php', $data);
		$this->load->view('v_end.php');
		$this->load->view('v_footer.php');
	}
}
?>