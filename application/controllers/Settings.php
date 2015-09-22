<?php

class Settings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('settings_model');
		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->library('form_validation'); 
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}

	public function index()
	{
		$data['title'] = 'Setting';
		
		$post = $this->input->post(null, true);
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		if (!empty($post)) {
			$this->form_validation->set_rules('base_min', 'Base Min', 'required');
			$this->form_validation->set_rules('base_max', 'Base Max', 'required');
			$this->form_validation->set_rules('base_efectiva', 'Base Efectiva', 'required');
			
			$this->form_validation->set_rules('simple_min', 'Simple Min', 'required');
			$this->form_validation->set_rules('simple_max', 'Simple Max', 'required');
			$this->form_validation->set_rules('simple_efectiva', 'Simple Efectiva', 'required');

			$this->form_validation->set_rules('ampliada_min', 'Ampliada Min', 'required');
			$this->form_validation->set_rules('ampliada_efectiva', 'Ampliada Efectiva', 'required');
			
			if ($this->form_validation->run() === false)
			{
				$this->session->set_userdata($post);
				redirect('/settings?error');
			} 
			else {
				$this->settings_model->updateData();
				$this->load->view('settings/success');
			}
		}
		
		$data['settings'] = $this->settings_model->get_settings(1);
        
        $this->load->view('templates/header', $data);
        $this->load->view('settings/index', $data);
        $this->load->view('templates/footer');
	}
}