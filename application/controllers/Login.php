<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('for_user/login');
	}
	public function register()
	{
		$this->load->view('for_user/register');
	}
	public function DoLogin()
	{
		$this->load->library('session');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$login = $this->m_global->login($username,$password);

		if ($login->num_rows() == 1) {
			foreach ($login->result() as $sess) {
				$sess_data['logged_in'] = 'LogIn';
				$sess_data['id_pengurus'] = $sess->id_pengurus;
				$sess_data['username'] = $sess->username;
				$sess_data['nama'] = $sess->nama;
			}

			$this->session->set_userdata('logged_in',$sess_data);
			redirect('home','refresh');
		}
		else{
			redirect(site_url('login'),'refresh');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */