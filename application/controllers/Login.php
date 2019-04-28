<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}
	function index(){
		$this->load->view('login_view');
	}
	function auth(){
		$username    = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		$validate = $this->login_model->validate($username,$password);
		if($validate){
			$data  = $validate->row_array();
			$name  = $data['username'];
			$email = $data['email'];
			$level = $data['level'];
			$photo = $data['photo'];
			$sesdata = array(
				'username'  => $name,
				'email'     => $email,
				'level'     => $level,
				'photo'     => $photo,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			redirect('page');
		}else{
			echo $this->session->set_flashdata('msg','Username or Password is Wrong');
			redirect('login');
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}