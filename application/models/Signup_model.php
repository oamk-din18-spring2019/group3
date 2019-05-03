<?php

Class signup_model extends CI_Model {

// Insert registration data in database
public function registration_insert($data) {

// Query to check whether username already exist or not
$condition = "EMAIL =" . "'" . $data['EMAIL'] . "'";
$this->db->select('*');
$this->db->from('users');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {

// Query to insert data in database
$this->db->insert('users', $data);
if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}

}

?>