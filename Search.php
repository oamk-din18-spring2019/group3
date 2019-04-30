<style type="text/css">

select {
    margin-left:5px;
}
button {
    margin-left:5px;
    padding-left:1.5em;
    padding-right:1.5em;
    padding-top:0.6em;
    padding-bottom:0.6em;
}

</style>


<?php

class Search extends CI_Controller
{
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
        $data['title'] = 'Please fill in the details for your flight';
        $data['cityfrom'] = $this->flight_model->get_all_city_from();
        $data['cityto'] = $this->flight_model->get_all_city_to();
        
        $this->load->view('templates/header');
        $this->load->view('pages/sf', $data);
        $this->load->view('templates/footer');  
    }

}

?>