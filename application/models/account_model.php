<?php


Class Account_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

// Read data from database to show data in admin page
public function read_user_information($Email) {

$condition = "EMAIL =" . "'" . $Email . "'";
$this->db->select('*');
$this->db->from('users');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}

}

?>