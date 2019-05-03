<?php

Class admin_database extends CI_Model {

	public function flights(){
		$this->db->select('*');
		$this->db->from('flight');
		$query = $this->db->get();
		if ($query->num_rows() > 0) 
		{
			return $query;
		}else{
			return false;
		}
	}
	// get records on the base of flight id
	public function getFlightData($id){
		$condition = "fid="."'".$id."'";
		$this->db->select('*');
		$this->db->from('flight');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() > 0) 
		{
			return $query->result_array();
		}else{
			return false;
		}
	}

	// insert flight data
	public function insertNewFlight($data){
		if($this->db->insert('flight', $data)){
			return true;
		}else{
			return false;
		}
	}

	// update flight information after editing
	public function updateflight($data,$fid){
		$this->db->where('fid',$fid);
		if($this->db->update('flight',$data))
		{
			return true;
		}else{
			return false;
		}
	}

	// delete flight on the base of id
	public function destroyflight($id){
		$this->db->where('fid', $id);
    	if($this->db->delete('flight')){
    		return true;
    	}else{
    		return false;
    	}
	}

	public function search_fid($id,$id1,$id2){
		$condition = "city_from="."'".$id."' and city_to='".$id1."' and time='".$id2."'";
		$this->db->select('*');
		$this->db->from('flight');
		$this->db->where($condition);
		$query = $this->db->get();
		if ($query->num_rows() > 0) 
		{
			return $query->result_array();
		}else{
			return false;
		}
	}


}

?>