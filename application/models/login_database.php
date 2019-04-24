<?php

Class Login_Database extends CI_Model {

	// Read data using username and password
	public function login($data) {

		$condition = "user_email =" . "'" . $data['EMAIL'] . "' AND " . "user_password =" . "'" . $data['PASS'] . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			return true;
		}else {
			return false;
		}
	}

	// Read data from database to show data in admin page
	public function read_user_information($email)
	{

		$condition = "user_email =" . "'" . $email . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			return $query->result();
		}else{
			return false;
		}
	}

}

?>