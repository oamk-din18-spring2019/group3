<?php
class Checkout extends CI_Controller
{
    function _remap($method, $args) // this function lets us take the cities and departure time as arguments from the url
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
        $data['title'] = 'Payment page for booking';
        $success = FALSE;

        if($method == null || $args == null || (count($args) < 3))
        {
            // no arguments in url, redirect to /search/
            echo 'Bad url<br>';
        } else {
            if($this->flight_model->flight_exists($method, $args[0], $args[2]) === TRUE)
            {
                $success = TRUE;
            } else {
                // redirect here also
                echo 'Flight doesn\'t exist<br>';
            }
        }

        $this->load->view('templates/header');
        if($success === FALSE)
        {
            $this->load->helper('url');
            redirect('search/', 'refresh');
        } else {
            $data['city_from'] = $method;
            $data['city_to'] = $args[0];
            $data['passengers'] = $args[1];
            $data['time'] = $args[2];
            $this->load->view('pages/checkoutview', $data);
        }
        $this->load->view('templates/footer');
    }
}
?>