<?php
// session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
// Load form helper library
$this->load->helper('form');

// Load Database
$this->load->database();

// Load form validation library
$this->load->library('form_validation');

// Load session library
$this->load->library('session');

// Load database
$this->load->model('Signup_model');


    
    }



    public function index()
	{
		$this->load->view('signup');
	}

    function show_users()
    {
    $this->load->model('Signup_model');
    $data['users']=$this->Signup_model->get_users();
    $data['page']='account_info';
    $this->load->view('account_info');
    }


function add_user()
{
    print_r($this->input->post());
    $this->load->model('Signup_model');
    
    $insert_data=array(
        "UID"=>$this->input->post('UID'),
        "EMAIL"=>$this->input->post('EMAIL'),
        "PASS"=>$this->input->post('PASS'),
        "FNAME"=>$this->input->post('FNAME'),
        "LNAME"=>$this->input->post('LNAME'),
        "ADDRESS"=>$this->input->post('ADDRESS'),
        "PCODE"=>$this->input->post('PCODE'),
        "TID"=>$this->input->post('TID')
    );
$result=$this->Signup_model->add_user($insert_data);
$data['page']=$result ? 'flights' : 'error';
$this->load->view('signup', $data);


}



}








