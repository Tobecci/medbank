<?php 

class Patient extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
	$this->generate_userid();
	}

	public function get_records()
	{

	}

	public function generate_userid()
	{
		$id = uniqid('patient',true);
		return $id;
	}

	public function register()
	{

		$this->load->model('patient_model');

		//comment out this section on production
		$_POST['name'] = 'john doe';
		$_POST['dob'] = 'john doe';
		$_POST['phone'] = 'john doe';
		$_POST['email'] = 'john doe';
		$_POST['address'] = 'john doe';
		$_POST['gender'] = 'john doe';
		$_POST['ethnicity'] = 'john doe';
		$_POST['language'] = 'john doe';
		$_POST['genotype'] = 'john doe';
		$_POST['blood_group'] = 'john doe';
		$_POST['height'] = 'john doe';
		$_POST['nationality'] = 'john doe';
		$_POST['religion'] = 'john doe';
		$_POST['registered_hospital'] = 'john doe';
		$_POST['medical_history'] = 'john doe';
		$_POST['next_of_kin'] = 'john doe';
		
		
		$name = $this->input->post('name',true);
		$dob = $this->input->post('dob',true);
		$phone = $this->input->post('phone',true);
		$email = $this->input->post('email',true);
		$address = $this->input->post('address',true);
		$gender = $this->input->post('gender',true);
		$ethnicity = $this->input->post('ethnicity',true);
		$language = $this->input->post('language',true);
		$genotype = $this->input->post('genotype',true);
		$blood_group = $this->input->post('blood_group',true);
		$height = $this->input->post('height',true);
		$nationality = $this->input->post('nationality',true);
		$religion = $this->input->post('religion',true);
		$registered_hospital = $this->input->post('registered_hospital',true);
		$medical_history = $this->input->post('medical_history',true);
		$next_of_kin = $this->input->post('next_of_kin',true);
		$patient_id = $this->generate_userid();

		$data = array(
			'name' => $name,
			'dob' => $dob,
			'phone' => $phone,
			'email' => $email,
			'address' => $address,
			'gender' => $gender,
			'ethnicity' => $ethnicity,
			'language' => $language,
			'genotype' => $genotype,
			'blood_group'  => $blood_group,
			'height' => $height,
			'nationality' => $nationality,
			'religion' => $religion,
			'registered_hospital' => $registered_hospital,
			'medical_history' => $medical_history,
			'next_of_kin' => $next_of_kin,
			'patient_id' => $patient_id,
		);

		$result = $this->patient_model->add_patient($data);
		if($result)
		{
			
			echo 'patient added to the database';
		}
		else
		{
			echo 'patient not added to the database';
		}
	}

}
