<?php
class Login_model extends CI_Model{
 
  function validate($username,$password){
    $this->db->where('username',$username);
    $result = $this->db->get('tbl_user',1);
    $data = $result->row_array();
    if(password_verify($password, $data['password']) == FALSE){
    	return FALSE;
    }else{
    	return $result;
    }
  }
}