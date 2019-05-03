<?php

class Flight_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    function get_all_city_from() // for choosing what city you are in (drop-down menu)
    {
        $query = $this->db->query('SELECT DISTINCT city_from FROM flight');

        return $query->result();
    }

    function get_all_city_to() // for choosing what city you go to (drop-down menu)
    {
        $query = $this->db->query('SELECT DISTINCT city_to FROM flight');

        return $query->result();
    }
    

    public function get_flights($from = FALSE, $to = FALSE) // after a flight has been chosen (which flight you want to buy)
    {
        if($from === FALSE || $to === FALSE)
        {
            return FALSE;
        }

        $query = $this->db->get_where('flight', array('city_from' => $from, 'city_to' => $to));

        return $query->result_array();
    }
    public function flight_exists($from = FALSE, $to = FALSE, $time = FALSE) // check if this flight really exists or if the user
    {                                                                       // has typed in some random flight info into the URL
        if($from === FALSE || $to === FALSE || $time === FALSE)
        {
            return FALSE;
        }
        $query = $this->db->get_where('flight', array('city_from' => $from, 'city_to' => $to, 'time' => $time));
        
        if(count($query->result_array()) > 0)
            return TRUE;
        return FALSE;
    }


}

?>