<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');//mengaktifkan helper url
        $this->load->model('m_voting');//menghubungkan ke model m_voting
	}

	public function index(){				
		$data['title'] = 'Login - Admin | e-Voting';
		$data['content'] = 'login';

		/*menampilkan login page pemilhan*/
		$this->load->view('admin/v_head.php');
		$this->load->view('admin/v_login.php');
		$this->load->view('admin/v_footer.php');
		/*menampilkan login page pemilhan*/
	}	

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		//mengambil data yang diinputkan user
		$where = array(
			'username' => $username
			);
		$cek = $this->m_voting->ambil_data("tbl_admin",$where)->num_rows();//mengecek data user
		if($cek > 0){
			$data_session = array( //mengatur session
				'username' => $username,
				'password' => $password,
				'akses' => "login");

			$this->session->set_userdata($data_session);
			redirect(base_url("admin/dashboard_admin"));
			
		}
		else{
			redirect(base_url("admin/login_admin/salah"));
		}
	}

	public function salah(){
		$this->session->sess_destroy();
		$data['h2'] = "Maaf";
		$data['p'] = "Sepertinya ID yang anda masukkan salah atau telah digunakan<br>Klik <a href='".base_url()."login_vote'>Kembali</a> untuk mencoba lagi";
		$data['back'] = "<a href='".base_url()."login_vote'><h2>Kembali</h2></a>";

		$this->load->view('admin/v_head.php', $data);
		$this->load->view('v_end.php', $data);
		$this->load->view('admin/v_footer.php');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url("admin/login_admin/"));
	}
}
?>