<?php
class Summary extends CI_Controller
{

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

    function _remap($method, $args)
    {
        if(method_exists($this, $method))
        {
            $this->$method($args);
        }
        else
        {
            $this->index($method, $args);
        }
    }
    public function index($method = null, array $args = null)
    {
        $data['title'] = 'Your booking summary';
        $success = FALSE;
        if($method == null || $args == null || (count($args) < 2))
        {
            // no arguments in url, redirect to /search/
            echo 'Bad url, redirecting<br>';
        } else {
                $success = TRUE;
                $data['city_from'] = $method;
                $data['city_to'] = $args[0];
                $data['passengers'] = $args[1];
                $data['time'] = $args[2];
                $data['arriv'] = $args[3];
        }
        $this->load->view('templates/header');
        if($success === FALSE)
        {
            $this->load->helper('url');
            redirect('Search/index', 'refresh');
        } else {
            $this->load->view('summaryview', $data);
        }
        $this->load->view('templates/footer');
    }
}
?>