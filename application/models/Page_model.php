<?php
class Page_model extends CI_Model{
	function get_all_satker(){
		$data = array();
		$data['satker'] = array();
		$query = $this->db->get('satker');
		foreach ($query->result_array() as $row) {
			array_push($data['satker'], $row);
		}
		return $data;
	}
	
	function get_satker($id){
		$data = array();
		$query = $this->db->get_where('satker', array('satker_id' => $id), 1);
		foreach ($query->result_array() as $row) {
			$data['satker_id'] = $row['satker_id'];
			$data['nama_satker'] = $row['nama_satker'];
			$data['alamat_satker'] = $row['alamat_satker'];
		}
		return $data;
	}

	function get_user_detail($username){
		$data = array();
		$query = $this->db->get_where('user_detail', array('nip' => $username), 1);
		if($query->num_rows() == 0){
			return False;
		}
		foreach ($query->result_array() as $row) {
			$data['nip'] = $row['nip'];
			$data['user_group'] = $row['user_group'];
			$data['phone'] = $row['phone'];
			$data['full_name'] = $row['full_name'];
			$data['korwil'] = $row['korwil'];
			$data['eselon'] = $row['eselon'];
			$data['kl'] = $row['kl'];
			$data['kpknl'] = $row['kpknl'];
			$data['kanwil'] = $row['kanwil'];
		}
		return $data;
	}
}