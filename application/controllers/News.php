<?php

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');
		$this->load->library('form_validation'); 
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}

	public function index()
	{
        $data['title'] = 'News archive';

		$date = date('Y-m-d');
		$date_next = strtotime('+1 month', strtotime($date));
		$date_next = date('Y-m-d', $date_next);
		$date_day  = strtolower(date('l', strtotime($date_next))); // Saturday, Sunday
		
		if ($date_day == 'saturday') {
			$date_next = strtotime('+2 day', strtotime($date_next));
			$date_next = date('Y-m-d', $date_next);
		}
		
		if ($date_day == 'sunday') {
			$date_next = strtotime('+1 day', strtotime($date_next));
			$date_next = date('Y-m-d', $date_next);
		}
		
		$post = $this->input->post(null, true);
		
		if (!empty($post)) {
			$post['intere'] = round(($post['value'] * 24.46) / 36000 * 22, 2);
			$post['seguro'] = round((2.5 / 100) * ($post['value'] / 12), 2);
			$post['capital'] = round((2.5 / 100) * ($post['value'] / 12), 2);
			print_r($post);
			die();
		}
		
        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
	}

	public function view($slug = null)
	{
		$data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item']))
        {
			show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a news item';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');

		if ($this->form_validation->run() === false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('news/create');
			$this->load->view('templates/footer');

		} else {
			$this->news_model->set_news();
			$this->load->view('news/success');
		}
	}
}