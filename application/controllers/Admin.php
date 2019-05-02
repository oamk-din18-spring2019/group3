<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->load->model('admin_database');
	}

	// Form to insert a new flight
	public function flightForm()
	{
		$this->load->view('insert');
	}

	// insert a new flight schedual in database
	public function insertNewFlight()
	{
		$data = array(
			'city_from' => $this->input->post('city_from'),
			'city_to' => $this->input->post('city_to'),
			'time' => $this->input->post('time'),
			'price' => $this->input->post('price')
		);
		$insert = $this->admin_database->insertNewFlight($data);
		if($insert != false){
			$this->session->set_userdata('message','Record inserted successfuly!');
			redirect('admin');
		}else{
			$this->session->set_userdata('message','Some thing went wrong.Please try again!');
			redirect('admin');
		}
	}
	// edit the flight schedual
	public function edit($id){
		// var_dump($id);
		$result = $this->admin_database->getFlightData($id);
		// $data = $result->result();
		// var_dump($data[0]->fid);
		// die;
		$this->load->view('edit',['data' => $result->result()]);
		// die;
	}
	// update flight information after edditing
	public function updateFlight()
	{
		$fid = $this->input->post('fid');
		$data = array(
			'city_from' => $this->input->post('city_from'),
			'city_to' => $this->input->post('city_to'),
			'time' => $this->input->post('time'),
			'price' => $this->input->post('price')
		);
		$update = $this->admin_database->updateflight($data,$fid);
		if($update != false)
		{
			$this->session->set_userdata('message','Record updated successfuly!');
			redirect('admin');
		}else{
			$this->session->set_userdata('message','Some thing went wrong.Please try again!');
			redirect('admin');
		}
	}
	// delete a flight on the basis of flight id
	public function delete($id){
		$destroy = $this->admin_database->destroyflight($id);
		if ($destroy !=false) {
		// var_dump($destroy);
		// die;
			$this->session->set_userdata('message','Record deleted successfuly!');
			redirect('admin');
		}else{
			$this->session->set_userdata('message','Record deleted successfuly!');
			redirect('admin');
		}
	}

}

?>
