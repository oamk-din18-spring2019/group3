<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_database');
        $this->load->model('account_model');
    }


    
    
    public function index()
    {
  
          $this->load->view('account');
    }   
    

}




?>