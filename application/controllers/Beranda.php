<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index(){
		$data['konten'] = 'beranda';
		$this->load->view('template', $data);
	}
}