<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Mahasiswa extends CI_Controller {

	// public function __construct(){
	// 	parent::__construct();
	// 	$this->load->database();
	// }

	// setiap key yang di simpan dalam array, ketika di kirim ke view maka otomatis berubah menjadi variabel
	// $data['isi'] = '...' maka saat di view menjadi= $isi

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
		// $this->load->library('Security');
	}

	public function index()
	{
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		if( $this->input->post('cari') ) 
		{
			$data['mahasiswa'] = $this->Mahasiswa_model->cariData();
		}

		$data['konten'] = 'index';
		$this->load->view('template', $data);
	}

	public function tambah()
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required'); 
		$this->form_validation->set_rules('nrp', 'Nrp', 'required|numeric'); 
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 

		if ( $this->form_validation->run() == FALSE ) 
		{
			$data['konten'] = 'tambah_data';
			$this->load->view('template', $data);
		} else 
		{
			$this->Mahasiswa_model->tambahData();
			$this->session->set_flashdata('pesan', 'Ditambahkan !');
			redirect('data_mahasiswa');
		}
	}

	// variabel id untuk mengambil data dari url/parameter
	public function hapus($id)
	{
		// parameter $id di atas di tangkap dan masuk ke mahasiswa model
		$this->Mahasiswa_model->hapusData($id);
		$this->session->set_flashdata('pesan', 'di hapus');
		redirect('data_mahasiswa');
	}

	public function detail($id)
	{
		$data['konten'] = 'detail_mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$this->load->view('template', $data);
	}

	public function edit($id){

		$data['konten'] = 'edit_data';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['prodi'] = ['Teknik Informatika', 'Teknik Industri', 'Teknik Mesin'];

		$this->form_validation->set_rules('nama', 'Nama', 'required'); 
		$this->form_validation->set_rules('nrp', 'Nrp', 'required|numeric'); 
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template', $data);
		} else {
			$this->Mahasiswa_model->editData();
			$this->session->set_flashdata('pesan', 'Diedit !');
			redirect('data_mahasiswa');
		}
		
	}


}

?>