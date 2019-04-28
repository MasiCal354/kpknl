<?php

class Form extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('form_model');
	}
	
	function update_satker($id){
		$nama_satker = $this->input->post('nama_satker', TRUE);
		$alamat_satker = $this->input->post('alamat_satker', TRUE);
		$data = array(
			'nama_satker' => $nama_satker,
			'alamat_satker' => $alamat_satker
		);
		$this->db->where('satker_id', $id);
		$this->db->update('satker', $data);
		redirect('page/satker');
	}

	function add_profile(){
		$nip = $this->input->post('nip', TRUE);
		$user_group = $this->input->post('user_group', TRUE);
		$phone = $this->input->post('phone', TRUE);
		$full_name = $this->input->post('full_name', TRUE);
		$korwil = $this->input->post('korwil', TRUE);
		$eselon = $this->input->post('eselon', TRUE);
		$kl = $this->input->post('kl', TRUE);
		$kpknl = $this->input->post('kpknl', TRUE);
		$kanwil = $this->input->post('kanwil', TRUE);
		$user_id = $this->form_model->get_id($nip);
		$data = array(
			"user_id" => $user_id,
			"nip" => $nip,
			"user_group" => $user_group,
			"phone" => $phone,
			"full_name" => $full_name,
			"korwil" => $korwil,
			"eselon" => $eselon,
			"kl" => $kl,
			"kpknl" => $kpknl,
			"kanwil" => $kanwil
		);
		$this->db->insert("user_detail", $data);
		redirect("page/profile");
	}

	function edit_profile(){
		$nip = $this->input->post('nip', TRUE);
		$user_group = $this->input->post('user_group', TRUE);
		$phone = $this->input->post('phone', TRUE);
		$full_name = $this->input->post('full_name', TRUE);
		$korwil = $this->input->post('korwil', TRUE);
		$eselon = $this->input->post('eselon', TRUE);
		$kl = $this->input->post('kl', TRUE);
		$kpknl = $this->input->post('kpknl', TRUE);
		$kanwil = $this->input->post('kanwil', TRUE);
		$user_id = $this->form_model->get_id($nip);
		$data = array(
			"nip" => $nip,
			"user_group" => $user_group,
			"phone" => $phone,
			"full_name" => $full_name,
			"korwil" => $korwil,
			"eselon" => $eselon,
			"kl" => $kl,
			"kpknl" => $kpknl,
			"kanwil" => $kanwil
		);
		$this->db->where("user_id", $user_id);
		$this->db->update("user_detail", $data);
		redirect("page/profile");
	}

	function insert_satker(){
		$nama_satker = $this->input->post('nama_satker', TRUE);
		$alamat_satker = $this->input->post('alamat_satker', TRUE);
		$data = array(
			'nama_satker' => $nama_satker,
			'alamat_satker' => $alamat_satker
		);
		$this->db->insert('satker', $data);
		redirect('page/satker');
	}

	function delete_satker($id){
		$this->db->delete('satker', array('satker_id' => $id));
		redirect('page/satker');
	}
}

?>