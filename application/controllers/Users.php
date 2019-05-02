<?php
        class Users extends CI_Controller {
                
                public function __construct() 
	        {
                        parent::__construct();
                        // Load form helper library
                        $this->load->helper('form');
                        $this->load->helper('url');

                        // Load Database
                        $this->load->database();

                        // Load form validation library
                        $this->load->library('form_validation');

                        // Load session library
                        $this->load->library('session');

                        // Load database
                        $this->load->model('user_database');
                }
                
                public function edit($id){
                        $result = $this->user_database->get_user_info($id);
                        $this->load->view('user_edit',['data' => $result->result()]);
                }

                public function user(){
                        $this->load->view('UserPage');
                }

        }
?>