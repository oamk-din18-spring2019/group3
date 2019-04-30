<?php

session_start();


defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->model('Signup_model');
        $this->load->helper('form');
		$this->load->library('form_validation');
		
    }


    
    
    public function index()
    {
  
          $this->load->view('signup');
    }

    public function login(){
      
      //refer to model and add all the info in the db
      $data = array(
        'FNAME' => $this->input->post('FirstName'),
        'LNAME' => $this->input->post('LastName'),
        'EMAIL' => $this->input->post('Email'),
        'PASS' => $this->input->post('Password'),
        'ADDRESS' => $this->input->post('Address'),
        'PCODE' => $this->input->post('PostCode')
      );
      $result = $this->Signup_model->registration_insert($data);

      // redirect to the page you need
      redirect('login/user_login_process');
    }




    public function new_user_registration()
    {
      
      // field name, error message, validation rules
      $this->form_validation->set_rules('FirstName', 'First Name', 'trim|required');
      $this->form_validation->set_rules('LastName', 'Last Name', 'trim|required');
      $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('Address', 'Address', 'trim|required');
      $this->form_validation->set_rules('PostCode', 'Post Code', 'trim|required');
      $this->form_validation->set_rules('Password', 'Password', 'trim|required|min_length[4]|max_length[32]');
     
      if($this->form_validation->run() == FALSE) {
        $this->load->view('signup');
      } else {
        $data = array(
            'FNAME' => $this->input->post('FirstName'),
            'LNAME' => $this->input->post('LastName'),
            'EMAIL' => $this->input->post('Email'),
            'PASS' => $this->input->post('Password'),
            'ADDRESS' => $this->input->post('Address'),
            'PCODE' => $this->input->post('PostCode')
    );
    
    redirect('login/user_login_process');

    $result = $this->Signup_model->registration_insert($data);
    if ($result == TRUE) {
    $data['message_display'] = 'Registration Successfully !';
    $this->load->view('login_form', $data);
    print_r($data);
    } else {
    $data['message_display'] = 'Username already exist!';
    $this->load->view('signup', $data);
    print_r($data);
            }
        }
    }

}

?>





       
        
    





