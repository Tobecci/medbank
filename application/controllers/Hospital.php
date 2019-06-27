<?php 

class Hospital extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		echo 'hello world';
	}

	public function register_patient()
	{
		
	}

	public function update_patient()
	{
		
	}
}
