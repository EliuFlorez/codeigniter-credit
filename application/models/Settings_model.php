<?php

class Settings_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_settings($id = false)
	{
		if ($id === false)
		{
			$query = $this->db->get('settings');
			return $query->result_array();
		}

		$query = $this->db->get_where('settings', array('id' => $id));
		return $query->row_array();
	}
	
	public function set_settings()
	{
		$this->load->helper('url');

		$data = array(
			'valor' => $this->input->post('valor'),
		);

		return $this->db->insert('settings', $data);
	}
	
	public function updateData()
	{
		$this->load->helper('url');

		$id = $this->input->post('id');
		$data = array(
			'valor' => $this->input->post('valor'),
		);

		$this->db->where('id', $id);
		
		return $this->db->update('settings', $data);
	}
}