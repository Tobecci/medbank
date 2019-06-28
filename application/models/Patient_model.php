<?php

class Patient_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function add_patient($data)
	{
		$result = $this->db->insert('patients',$data);
		return $result;
	}

}
