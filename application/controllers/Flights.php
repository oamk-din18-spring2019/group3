<style type="text/css">

button {
    padding-left:2em;
    padding-right:2em;
    padding-top:2em;
    padding-bottom:2em;
}

</style>

<?php
class Flights extends CI_Controller
{
    function _remap($method, $args) // this function lets us take the cities as arguments from the url
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
        $data['title'] = 'Please select a flight';
        $data['times'] = TRUE;
        $success = FALSE;

        // method is the first argument, args[0] is the second argument. Anything else (args[1], args[2], ...) is ignored

        // if there are less than 2 arguments (city_from and city_to)
        if($method == null || $args == null)
        {
            $data['times'] = FALSE;

        } else {
            $success = $data['flights'] = $this->flight_model->get_flights($method, $args[0]);
        }


                // This block handles the number of passengers
                if(count($args) < 2)
                {
                    $success = FALSE;
                    echo 'No information was given about how many passengers you would like to book for';
                }

                else if( ($args[1] < 1 || $args[1] > 5) )
                {
                    $success = FALSE;
                    echo 'Number of passengers should be between 1 and 5';
                }

                else $data['passengers'] = $args[1];


        if($success === FALSE)
        {
            $data['times'] = FALSE;
        }

        else { // get the flights' times and prices

            $time_array = array();
            $price_array = array();
            $arriv_array = array();

            for($i=0; $i<count($data['flights']); ++$i)
            {
                array_push($time_array, $data['flights'][$i]['time']);
                array_push($price_array, $data['flights'][$i]['price']);
                array_push($arriv_array, $data['flights'][$i]['artime']);
            }

        }


        //$this->load->view('templates/header');
        
        if($data['times'] != FALSE) // executes if we had the city_from and city_to arguments
        {
            $data['times'] = $time_array;
            $data['prices'] = $price_array;
            $data['method'] = $method;
            $data['arg'] = $args[0];
            $data['arrivs'] = $arriv_array;
            $this->load->view('flightview', $data);
        } else {
            $this->load->helper('url');
            redirect('search/', 'refresh');

            //$this->load->view('pages/sf', $data);
        }

        //$this->load->view('templates/footer');  
    }
}

?>