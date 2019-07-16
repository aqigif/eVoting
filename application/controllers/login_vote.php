<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_vote extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');//mengaktifkan helper url
        $this->load->model('m_voting');//menghubungkan ke model m_voting
	}

	public function index(){				
		$data['title'] = 'e-Voting | SMK Negeri 1 Kawali';
		$data['content'] = 'beranda';
		$data['kandidat'] = $this->m_voting->tampil_data('tbl_kandidat')->result();
		
		/*menampilkan login page pemilhan*/
		$this->load->view('v_head.php');
		$this->load->view('v_navbar.php');
		$this->load->view('v_home.php', $data);
		$this->load->view('v_login.php');
		$this->load->view('v_footer.php');
		/*menampilkan login page pemilhan*/
	}	

	public function aksi_login(){
		$id_pemilih = $this->input->post('id_pemilih');//mengambil data yang diinputkan user
		$where = array(
			'id_pemilih' => $id_pemilih
			);
		$cek = $this->m_voting->ambil_data("tbl_pemilih",$where)->num_rows();//mengecek data user
		if($cek > 0){
			$data_session = array( //mengatur session
				'id_pemilih' => $id_pemilih,
				'akses' => "login");

			$cek_data = $this->m_voting->ambil_data("tbl_pemilih",$where)->result();//mengecek status akses
			foreach($cek_data as $status){ 
				if ($status->status != '1') {
					redirect(base_url("login_vote/sudah"));
				}else{
					$this->session->set_userdata($data_session);
					redirect(base_url("voting"));
				} 
			}
		}else{
			redirect(base_url("login_vote/salah"));
		}
	}

	public function aksi_simulasi(){
		redirect(base_url("simulasi"));
	}

	public function sudah(){
		$this->session->sess_destroy();
		$data['h2'] = "Maaf";
		$data['p'] = "Sepertinya ID Pemilih yang anda masukkan salah atau telah digunakan<br>Klik <a href='".base_url()."login_vote'>Kembali</a> untuk mencoba lagi";
		$data['back'] = "<a href='".base_url()."login_vote'><h2>Kembali</h2></a>";

		$this->load->view('v_head.php', $data);
		$this->load->view('v_end.php', $data);
		$this->load->view('v_footer.php');
	}

	public function salah(){
		$this->session->sess_destroy();
		$data['h2'] = "Maaf";
		$data['p'] = "Sepertinya ID Pemilih yang anda masukkan salah atau telah digunakan<br>Klik <a href='".base_url()."login_vote'>Kembali</a> untuk mencoba lagi";
		$data['back'] = "<a href='".base_url()."login_vote'><h2>Kembali</h2></a>";

		$this->load->view('v_head.php', $data);
		$this->load->view('v_end.php', $data);
		$this->load->view('v_footer.php');
	}
}
?>