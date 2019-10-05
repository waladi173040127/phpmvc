<?php 
class About extends Controller{
	public function index($nama = 'Waladi', $pekerjaan = 'Mahasiswa'){
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['judul'] = 'About Me';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/header');
		
	}
	public function page(){
		$data['judul'] = 'My page';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/header');
	}
}