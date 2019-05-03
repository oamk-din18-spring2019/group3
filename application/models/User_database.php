<?php
Class user_database extends CI_Model {
        public function usersInfo(){
                $this->db->select('*');
                $this->db->from('users');
                $query = $this->db->get();
                if ($query->num_rows() > 0) 
		{
			return $query;
		}else{
			return false;
		}
        }
        public function get_user_info($id){
                $condition = "EMAIL="."'".$id."'";
                $this->db->select('*');
                $this->db->from('users');
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
        public function updateuserinfo($data,$uid) {
                $this->db->where('uid',$uid);
                if ($this->db->update('uid',$data)) {
                        return true;
                } else {
                        return false;
                }
        }
        public function get_booked_flight($id) {
                $condition = "UID="."'".$id."'";
                $this->db->select('*');
                $this->db->from('userflight');
                $this->db->where($condition);
                $query = $this->db->get();
                if ($query->num_rows() > 0){
                        return $query->result_array();
                } else {
                        return false;
                }
        } 
        
        public function insert_info($data) {
                if($this->db->insert('userflight',$data)){
                        return true;
                } else {
                        return false;
                }
        } 
} 

?>