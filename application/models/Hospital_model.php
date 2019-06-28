<?php
class Hospital_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();

	}	

	public function register_hospital($data)
	{
		$result = $this->db->insert('hospitals',$data);
		return $result;
	}

}
