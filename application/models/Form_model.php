<?php
class Form_model extends CI_Model{
    function get_id($username){
        $query = $this->db->get_where("tbl_user", array("username" => $username), 1);
        foreach ($query->result() as $row) {
            $user_id = $row->user_id;
        }
        return $user_id;
    }
}