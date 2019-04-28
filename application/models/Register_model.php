<?php
class Register_model extends CI_Model{
    function is_used($nip, $email){
        $this->db->where('nip', $nip);
        $this->db->or_where('email', $email);
        $this->db->limit(1);
        $this->db->from('tbl_user');
        if($this->db->count_all_results() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function fill_data($nip, $satker, $email, $password, $level)
    {
        $data = array(
            'username' => $nip,
            'satker' => $satker,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'level' => $level,
            'photo' => 'user-default.png'
        );
        $this->db->insert('tbl_user', $data);
    }
    function get_satker(){
        $data = array();
        $data['satker'] = array();
        $query = $this->db->get('satker');
        foreach ($query->result_array() as $row) {
            array_push($data['satker'], $row);
        }
        return $data;
    }
}