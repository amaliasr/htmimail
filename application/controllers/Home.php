<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Home extends CI_Controller {
 	public function __construct()
 	{
 		parent::__construct();
 		//Do your magic here
 		$this->load->library('session');
		if($this->session->userdata('logged_in')){
			$sess_data = $this->session->userdata('logged_in');
		}else{
			redirect('admin','refresh');
		}
 	}
 
 	public function index()
 	{
 		$this->load->library('session');
 		$data['tampil'] = $this->m_global->tampil('pengurus','id_pengurus');
 		$this->load->view('for_user/home',$data);
 	}

 
 }
