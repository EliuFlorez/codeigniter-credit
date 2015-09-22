<?php

class Settings_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_settings($id = false)
	{
		$query = $this->db->get_where('settings', array('id' => $id));
		return $query->row_array();
	}
	
	public function updateData()
	{
		$this->load->helper('url');

		$id = $this->input->post('id');
		$data = array(
			// Base
			'base_min' => $this->input->post('base_min'),
			'base_max' => $this->input->post('base_max'),
			'base_efectiva' => $this->input->post('base_efectiva'),
			'base_nomina'   => $this->input->post('base_nomina'),
			
			// Simple
			'simple_min' => $this->input->post('simple_min'),
			'simple_max' => $this->input->post('simple_max'),
			'simple_efectiva' => $this->input->post('simple_efectiva'),
			'simple_nomina'   => $this->input->post('simple_nomina'),
			
			// Ampliada
			'ampliada_min' => $this->input->post('ampliada_min'),
			'ampliada_max' => $this->input->post('ampliada_max'),
			'ampliada_efectiva' => $this->input->post('ampliada_efectiva'),
			'ampliada_nomina'   => $this->input->post('ampliada_nomina'),
		);

		$this->db->where('id', $id);
		
		return $this->db->update('settings', $data);
	}
}