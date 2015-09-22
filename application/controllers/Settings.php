<?php

class Settings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('settings_model');
		$this->load->model('users_model');
		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->library('form_validation'); 
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}

	public function index()
	{
		if (!isset($this->session->userdata['logged_in'])) {
			redirect('/settings/login');
		}
		
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
			
			// Credits 1
			$this->form_validation->set_rules('credit_1_mmin', '1-Credit Min', 'required');
			$this->form_validation->set_rules('credit_1_mmax', '1-Credit Max', 'required');
			$this->form_validation->set_rules('credit_1_pmin', '1-Plazo Min', 'required');
			$this->form_validation->set_rules('credit_1_pmax', '1-Plazo Max', 'required');
			$this->form_validation->set_rules('credit_1_seguro', '1-Seguro', 'required');
			
			// Credits 2
			$this->form_validation->set_rules('credit_2_mmin', '2-Credit Min', 'required');
			$this->form_validation->set_rules('credit_2_mmax', '2-Credit Max', 'required');
			$this->form_validation->set_rules('credit_2_pmin', '2-Plazo Min', 'required');
			$this->form_validation->set_rules('credit_2_pmax', '2-Plazo Max', 'required');
			$this->form_validation->set_rules('credit_2_seguro', '2-Seguro', 'required');
			
			// Credits 3
			$this->form_validation->set_rules('credit_3_mmin', '3-Credit Min', 'required');
			$this->form_validation->set_rules('credit_3_mmax', '3-Credit Max', 'required');
			$this->form_validation->set_rules('credit_3_pmin', '3-Plazo Min', 'required');
			$this->form_validation->set_rules('credit_3_pmax', '3-Plazo Max', 'required');
			$this->form_validation->set_rules('credit_3_seguro', '3-Seguro', 'required');
			
			// Credits 4
			$this->form_validation->set_rules('credit_4_mmin', '4-Credit Min', 'required');
			$this->form_validation->set_rules('credit_4_mmax', '4-Credit Max', 'required');
			$this->form_validation->set_rules('credit_4_pmin', '4-Plazo Min', 'required');
			$this->form_validation->set_rules('credit_4_pmax', '4-Plazo Max', 'required');
			$this->form_validation->set_rules('credit_4_seguro', '4-Seguro', 'required');
			
			// Credits 5
			$this->form_validation->set_rules('credit_5_mmin', '5-Credit Min', 'required');
			$this->form_validation->set_rules('credit_5_mmax', '5-Credit Max', 'required');
			$this->form_validation->set_rules('credit_5_pmin', '5-Plazo Min', 'required');
			$this->form_validation->set_rules('credit_5_pmax', '5-Plazo Max', 'required');
			$this->form_validation->set_rules('credit_5_seguro', '5-Seguro', 'required');
			
			// Credits 6
			$this->form_validation->set_rules('credit_6_mmin', '6-Credit Min', 'required');
			$this->form_validation->set_rules('credit_6_mmax', '6-Credit Max', 'required');
			$this->form_validation->set_rules('credit_6_pmin', '6-Plazo Min', 'required');
			$this->form_validation->set_rules('credit_6_pmax', '6-Plazo Max', 'required');
			$this->form_validation->set_rules('credit_6_seguro', '6-Seguro', 'required');
			
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
	
	public function login()
	{
		$this->form_validation->set_rules('username', 'Nombre de usuario', 'required');
		$this->form_validation->set_rules('password', 'Contraseña', 'required');

		$data['title'] = 'Iniciar sesion';
		
		$this->load->view('templates/header', $data);
		
		if ($this->form_validation->run() == false) {
			if (isset($this->session->userdata['logged_in'])) {
				redirect('/settings');
			} else {
				$this->load->view('settings/login');
			}
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$result = $this->users_model->login($username, $password);
			
			if (!empty($result)) {
				$username = $this->input->post('username');
				
				$session_data = array(
					'username' => $username
				);
				
				// Add user data in session
				$this->session->set_userdata('logged_in', $session_data);
				redirect('/settings');
			} else {
				$data = array(
					'errors' => 'Nombre de usuario o Contraseña Invalido'
				);
				$this->load->view('settings/login', $data);
			}
		}
		
		$this->load->view('templates/footer');
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		$this->login();
	}
}