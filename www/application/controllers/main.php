<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
    {
    		parent::__construct();
    		$this->load->model(array('user_model'));
    		$this->load->database();
    		$this->load->library('session');

    }

	function index()
	{
		$this->load->view('main_page');
	}

	function sign_up()
	{
		$data = $this->input->post();
		$error = $this->user_model->sign_up($data);
		print_r($error);
	}

	function sign_in()
	{
		/*$this->load->helper('url');
		redirect($_SERVER['REQUEST_URI'], 'refresh');*/

		//redirect(site_url('/main/testing'));
		//redirect('/main/testing');
		//redirect($this->uri->uri_string());
		$data = $this->input->post();
		//print_r($data);
		$error = $this->user_model->get_profile($data);
		$this->session->set_userdata('idUser', $error[0]->idUser);
		//echo json_encode($error);
		echo json_encode($error);
		//if($error == 'true') echo json_encode('/main/testing');
		//$this->testing();
	}

	function testing()
	{
		$this->load->view('test_page');
	}

	function find_specialist()
    {
    	$this->load->view('find_specialist');
    }

	function check_require()
    {
    	$this->load->view('check_require');
    }

	function rating()
    {
    	$this->load->view('rating');
    }

	function transaction_requires()
    {
    	$this->load->view('transaction_requires');
    }

	function transaction_tests()
    {
    	$this->load->view('transaction_tests');
    }

	function save_result()
	{
		$data['answers'] = serialize($this->input->post());
		$id = $this->session->userdata("idUser");
		$this->user_model->save_result($data, $id);
	}
}
