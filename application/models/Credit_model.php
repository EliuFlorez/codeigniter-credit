<?php

class Credit_model extends CI_Model {

	function __construct() 
	{
		parent::__construct();
	}    

	public function insert($post)
	{
		$data = array(
			'valor' => $post['valor'],
		);
		
		$query = $this->db->insert_string('credits', $data);
		$this->db->query($query);
		
		return $this->db->insert_id();
	}

	public function all() {
		$query = $this->db->get('credits');
		$result = $query->result();
		return $result;
	}

	public function getData($id)
	{
		$query = $this->db->get_where('credits', array('id' => $id), 1);
		
		if ($this->db->affected_rows() > 0) {
			$row = $query->row();
			return $row;
		} else {
			error_log('no user found getData('.$id.')');
			return false;
		}
	}

	public function update($post)
	{
		$data = array(
			'valor' => $post['valor'],
		);
		
		$this->db->where('id', $post['id']);
		$this->db->update('credits', $data);
		
		$success = $this->db->affected_rows();

		if (!$success) {
			error_log('Unable to update('.$post['id'].')');
			return false;
		}

		$credit_info = $this->getData($post['id']);
		
		return $credit_info;
	}
}