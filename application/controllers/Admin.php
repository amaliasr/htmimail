<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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
		$this->load->view('for_admin/arsip_admin');
	}
	public function admin_DoAdd(){
			$foto = "IMG_".time();
			$config['upload_path'] = './upload/original';
	        $config['allowed_types'] = 'jpg|jpeg|png';
	        $config['max_size']      = '1024';
	        $config['file_name'] = $foto;

	        $this->load->library('upload', $config);
	        $image_data = $this->upload->data();

	        if (! $this->upload->do_upload('gambar')){ // name="upload"
				echo $this->upload->display_errors();
		 	}else{

	            $image_data = $this->upload->data();

	            $data = array(
						'tgl_posting'	=> $this->input->post('tgl_posting'),
						'judul'			=> $this->input->post('judul'),
						'content'		=> $this->input->post('content'),
						'gambar'		=> $image_data['file_name']
					);

	            $this->m_global->tambah('berita',$data);

	            $config['source_image']		= $image_data['full_path'];
	            $config['new_image']      	= './upload/kecil';
	            $config['maintain_ratio'] 	= true;
	            $config['width']          	= 100;
	            $config['height']         	= 180;

	            // kemudian panggil fungsi initialize() sebelum fungsi resize()
	            // kalau tidak, hanya akan menghasilkan 1 file saja
	            $this->image_lib->initialize($config);
	            $this->image_lib->resize();

	            redirect('admin','refresh');
		 	}
		}
	public function request()
	{
		$this->load->view('for_admin/arsip_request');
	}
	public function data()
	{
		$data['tampil'] = $this->m_global->tampil_data();
		$this->load->view('for_admin/arsip_data',$data);
	}
	public function akun()
	{
		$data['tampil'] = $this->m_global->tampil_pengurus();
		$this->load->view('for_admin/arsip_akun',$data);
	}
	public function akun_add()
	{
		$data['tampil'] = $this->m_global->tampil('jabatan','id_jabatan');
		$this->load->view('for_admin/arsip_akun_add',$data);
	}
	public function akun_doAdd()
	{
		$data = array(
						'nama_pengurus' => $this->input->post('nama'),
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password'),
						'id_jabatan' => $this->input->post('jabatan')
					);
			$this->m_global->tambah('pengurus',$data);
			redirect('admin/akun','refresh');
	}
	public function akun_delete($id){
		$this->m_global->hapus($id,'pengurus','id_pengurus');
			redirect('admin/akun','refresh');
	}
	public function akun_edit($id)
	{
		$data['jabatan'] = $this->m_global->tampil('jabatan','id_jabatan');
		$data['tampil'] = $this->m_global->tampil_pengurus_id($id);
		$this->load->view('for_admin/arsip_akun_edit',$data);
	}
	public function akun_doEdit($id){
			$data = array(
						'nama_pengurus' => $this->input->post('nama'),
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password'),
						'id_jabatan' => $this->input->post('jabatan')
					);
			$this->m_global->edit($id,'pengurus',$data,'id_pengurus');
			redirect('admin/akun','refresh');
	}
	public function organisasi()
	{
		$data['tampil'] = $this->m_global->tampil('organisasi','id_organisasi');
		$this->load->view('for_admin/arsip_organisasi',$data);
	}
	public function organisasi_add()
	{
		$this->load->view('for_admin/arsip_organisasi_add');
	}
	public function organisasi_doAdd()
	{
		$data = array(
						'nama' => $this->input->post('nama')
					);
			$this->m_global->tambah('organisasi',$data);
			redirect('admin/organisasi','refresh');
	}
	public function organisasi_delete($id)
	{
		$this->m_global->hapus($id,'organisasi','id_organisasi');
			redirect('admin/organisasi','refresh');
	}
	public function organisasi_edit($id)
	{
		$data['tampil'] = $this->m_global->tampil_id($id,'organisasi','id_organisasi');
		$this->load->view('for_admin/arsip_organisasi_edit',$data);
	}
	public function organisasi_doEdit($id){
			$data = array(
						'nama' => $this->input->post('nama')
					);
			$this->m_global->edit($id,'organisasi',$data,'id_organisasi');
			redirect('admin/organisasi','refresh');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */