<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voting extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('m_voting');
	}

	public function index(){				
		$data['title'] = 'e-Voting | SMK Negeri 1 Kawali';
		$data['content'] = 'beranda';

		if($this->session->userdata('akses') != "login"){
			redirect(base_url("login_vote"));
		}
		$data['kandidat'] = $this->m_voting->tampil_data('tbl_kandidat')->result();

		$this->load->view('v_head.php', $data);
		$this->load->view('v_voting.php', $data);
		$this->load->view('v_footer.php');
	}

	public function aksi_pilih(){
		$id_pemilih = $this->session->userdata("id_pemilih");
		$status = "0";
			$data1 = array('status' => $status);
			$where = array('id_pemilih' => $id_pemilih);

		$id_kandidat = $this->input->post('id_kandidat');
		$waktu = date("Y-m-d H:i:s");
		$poin = '1';
 
		$data2 = array(
			'id_pemilih' => $id_pemilih,
			'id_kandidat' => $id_kandidat,
			'waktu' => $waktu,
			'poin' => $poin
			);

		$this->m_voting->input_data($data2,'tbl_suara');
		$this->m_voting->update_data($where,$data1,'tbl_pemilih');
		redirect(base_url("voting/logout"));
	}

	public function logout(){
		$this->session->sess_destroy();
		$data['h2'] = 'Terima Kasih Anda telah memilih';
		$data['p'] = 'Berdoalah dengan keras supaya pilihan anda yang menjadi Ketua EXIT';
		$data['back'] = "";

		$this->load->view('v_head.php', $data);
		$this->load->view('v_end.php');
		$this->load->view('v_footer.php');
	}

}
?>