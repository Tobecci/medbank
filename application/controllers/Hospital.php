<?php 

class Hospital extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('hospital_model');
	}

	public function index()
	{

		$this->login();
	}

	public function register_patient()
	{
		$data['logout_url'] = base_url('hospital/logout');
		$data['add_url'] = base_url('hospital/register_patient');	
		$this->load->view('register_patient',$data);
	}

	public function dashboard()
	{
		$data['logout_url'] = base_url('hospital/logout');
		$data['add_url'] = base_url('hospital/register_patient');
		$this->load->view('dashboard',$data);
	}

	public function logout()
	{
			//empty the session array and destroy the session
			$_SESSION = [];
			session_destroy();
			$data['error'] = '';
			$this->load->view('login', $data);
	}


	public function generate_userid()
	{
		$id = uniqid('hospital',true);
		return $id;
	}

	public function register()
	{
		$data['error'] = "";
		//if all fields are filled
		if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['hospital_name']) && !empty($_POST['type']) && !empty($_POST['location']))
		{
			extract($_POST);
			$val = array(
				'username' => $username,
				'password' => password_hash($password,PASSWORD_DEFAULT),
				'name' => $hospital_name,
				'type' => $type,
				'location' => $location,
				'hospital_id' => $this->generate_userid(),
			);
		 $result = $this->hospital_model->register_hospital($val);
		 if($result)
		 {
		 redirect('hospital/dashboard','refresh');

		 }
		 else 
		 {
			$data['error'] = 'some fields are empty';
			$this->load->view('register',$data);
		 }
		}
		//if some fields are empty
		else
		{
			// $data['error'] = 'some fields are empty';
			$this->load->view('register',$data);
		}
	}

	public function login()
	{
		//if all fields are filled
		if(!empty($_POST['username']) && !empty($_POST['password']))
		{
			extract($_POST);
			$result = $this->db->get_where('hospitals',array('username' => $username));
			if($result->num_rows() == 1)
			{
				$db_row = $result->row_array();
				$db_pass = $db_row['password'];
				//user and pass are correct
				if(password_verify($password,$db_pass))
				{
					// $this->load->view('dashboard');
					redirect('hospital/dashboard','refresh');
				}
				//if pass is incorrect
				else
				{
					$data['error'] = 'username or password is incorrect';
					$this->load->view('login',$data);
				}
			}
			else
			{
				$data['error'] = 'username or password is incorrect';
				$this->load->view('login',$data);
			}
		}
		//if some fields are empty
		else
		{
			$data['error'] = '';
			$this->load->view('login',$data);
		}

	}

	public function update_patient()
	{
		
	}
}
