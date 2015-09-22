<?php

class Settings_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_settings($id = false)
	{
		$query = $this->db->get_where('credit_settings', array('id' => $id));
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
			
			// Credit 1
			'credit_1_mmin' => $this->input->post('credit_1_mmin'),
			'credit_1_mmax' => $this->input->post('credit_1_mmax'),
			'credit_1_pmin' => $this->input->post('credit_1_pmin'),
			'credit_1_pmax' => $this->input->post('credit_1_pmax'),
			'credit_1_seguro' => $this->input->post('credit_1_seguro'),
			
			// Credit 2
			'credit_2_mmin' => $this->input->post('credit_2_mmin'),
			'credit_2_mmax' => $this->input->post('credit_2_mmax'),
			'credit_2_pmin' => $this->input->post('credit_2_pmin'),
			'credit_2_pmax' => $this->input->post('credit_2_pmax'),
			'credit_2_seguro' => $this->input->post('credit_2_seguro'),
			
			// Credit 3
			'credit_3_mmin' => $this->input->post('credit_3_mmin'),
			'credit_3_mmax' => $this->input->post('credit_3_mmax'),
			'credit_3_pmin' => $this->input->post('credit_3_pmin'),
			'credit_3_pmax' => $this->input->post('credit_3_pmax'),
			'credit_3_seguro' => $this->input->post('credit_3_seguro'),
			
			// Credit 4
			'credit_4_mmin' => $this->input->post('credit_4_mmin'),
			'credit_4_mmax' => $this->input->post('credit_4_mmax'),
			'credit_4_pmin' => $this->input->post('credit_4_pmin'),
			'credit_4_pmax' => $this->input->post('credit_4_pmax'),
			'credit_4_seguro' => $this->input->post('credit_4_seguro'),
			
			// Credit 5
			'credit_5_mmin' => $this->input->post('credit_5_mmin'),
			'credit_5_mmax' => $this->input->post('credit_5_mmax'),
			'credit_5_pmin' => $this->input->post('credit_5_pmin'),
			'credit_5_pmax' => $this->input->post('credit_5_pmax'),
			'credit_5_seguro' => $this->input->post('credit_5_seguro'),
			
			// Credit 6
			'credit_6_mmin' => $this->input->post('credit_6_mmin'),
			'credit_6_mmax' => $this->input->post('credit_6_mmax'),
			'credit_6_pmin' => $this->input->post('credit_6_pmin'),
			'credit_6_pmax' => $this->input->post('credit_6_pmax'),
			'credit_6_seguro' => $this->input->post('credit_6_seguro'),
			
		);

		$this->db->where('id', $id);
		
		return $this->db->update('credit_settings', $data);
	}
}