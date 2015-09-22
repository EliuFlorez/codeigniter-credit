<?php

class Users_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function login($username, $password)
	{
		$query = $this->db->get_where('credit_users', array('username' => $username, 'password' => $password));
		
		return $query->row_array();
	}
}