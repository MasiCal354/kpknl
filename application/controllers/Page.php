<?php
class Page extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('page_model');
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('login');
		}
	}

	function index(){
		$data['title'] = "Dashboard";
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['photo'] = $this->session->userdata('photo');
		$this->load->view('templates/header', $data);
		$this->load->view('dashboard_view');
		$this->load->view('templates/footer');
	}

	function profile(){
		$data['title'] = "Profil Pengguna";
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['photo'] = $this->session->userdata('photo');
		$data['user_detail'] = $this->page_model->get_user_detail($data['username']);

		$this->load->view('templates/header', $data);
		$this->load->view('profile_view');
		$this->load->view('templates/footer');
	}

	function add_profile(){
		$data['title'] = "Tambah Profil Pengguna";
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['photo'] = $this->session->userdata('photo');

		$this->load->view('templates/header', $data);
		$this->load->view('add_profile_view');
		$this->load->view('templates/footer');
	}

	function edit_profile(){
		$data['title'] = "Ubah Profil Pengguna";
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['photo'] = $this->session->userdata('photo');
		$data['user_detail'] = $this->page_model->get_user_detail($data['username']);
		
		$this->load->view('templates/header', $data);
		$this->load->view('edit_profile_view');
		$this->load->view('templates/footer');
	}

	function satker(){
		$data['title'] = "Satuan Kerja";
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['photo'] = $this->session->userdata('photo');
		$data_satker = $this->page_model->get_all_satker();
		$this->load->view('templates/header', $data);
		if($data['level'] == 1){
			$this->load->view('satker_view', $data_satker);
		}else{
			$this->load->view('403_view');
		}
		$this->load->view('templates/footer');
	}

	function edit_satker($id){
		$data['title'] = "Ubah Satuan Kerja";
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['photo'] = $this->session->userdata('photo');
		$data['satker'] = $this->page_model->get_satker($id);
		$this->load->view('templates/header', $data);
		if($data['level'] == 1){
			$this->load->view('edit_satker_view', $data_satker);
		}else{
			$this->load->view('403_view');
		}
		$this->load->view('templates/footer');
	}

	function add_satker(){
		$data['title'] = "Tambah Satuan Kerja";
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['photo'] = $this->session->userdata('photo');
		$this->load->view('templates/header', $data);
		if($data['level'] == 1){
			$this->load->view('add_satker_view', $data_satker);
		}else{
			$this->load->view('403_view');
		}
		$this->load->view('templates/footer');
	}

	function psp($type){
		$data['title'] = "Penetapan Status Penggunaan";
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['photo'] = $this->session->userdata('photo');
		$this->load->view("templates/header", $data);
		if($type == "tanah"){
			$this->load->view('tanah');
		}else if($type == "bangunan"){
			$this->load->view('bangunan');
		}else if($type == "tanbang"){
			$this->load->view('tanbang');
		}else if($type == "lainnya"){
			$this->load->view('lainnya');
		}else{
			$this->load->view('404_view');
		}
		$this->load->view("templates/footer");
	}
}