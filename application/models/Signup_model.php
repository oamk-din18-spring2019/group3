<?php

Class Signup_model extends CI_Model

{


function get_users()
{
    $this->db->select('*');
    $this->db->from('users');
    return $this->db->get()->result_array();

}

function add_user($insert_data)
{
    $this->db->db_debug = false;
    $this->db->insert('users',$insert_data);
    $test=$this->db->affected_rows();
    if($test ==1)
    {
        return true;
    }
    else {
        return false;
    }
}


}