<?php

class Settings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('settings_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['settings'] = $this->settings_model->get_settings();
        $data['title'] = 'Setting';

        $this->load->view('templates/header', $data);
        $this->load->view('settings/index', $data);
        $this->load->view('templates/footer');
	}

	public function view($id = null)
	{
		$data['settings_item'] = $this->settings_model->get_settings($id);

        if (empty($data['settings_item']))
        {
			show_404();
        }

        $data['title'] = 'Setting';

        $this->load->view('templates/header', $data);
        $this->load->view('settings/view', $data);
        $this->load->view('templates/footer');
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create';

		$this->form_validation->set_rules('valor', 'Valor', 'required');

		if ($this->form_validation->run() === false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('settings/create');
			$this->load->view('templates/footer');
		} 
		else {
			$this->settings_model->set_settings();
			$this->load->view('settings/success');
		}
	}
	
	public function update($id = null)
	{
		$this->form_validation->set_rules('valor', 'Valor', 'required');

		if ($this->form_validation->run() === false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('settings/update');
			$this->load->view('templates/footer');
		} 
		else {
			$this->settings_model->updateData();
			$this->load->view('settings/success');
		}
	}
}