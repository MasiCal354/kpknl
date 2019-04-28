<?php
class Register extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('register_model');
	}
	function index(){
		$data = $this->register_model->get_satker();
		$this->load->view('register_view', $data);
	}
	function regis(){
		$nip = $this->input->post('nip', TRUE);
		$satker = $this->input->post('satker', TRUE);
		$email = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);
		$level = $this->input->post('level', TRUE);
		if($this->register_model->is_used($nip, $email)){
			echo $this->session->set_flashdata('msg','NIP or Email is already used');
			redirect('register');
		}else{
			$this->register_model->fill_data($nip, $satker, $email, $password, $level);
			redirect('login');
		}
	}
}