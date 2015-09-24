<?php

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('settings_model');
		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->library('form_validation'); 
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}

	public function index()
	{
        $data = array();
        $data['title'] = 'News archive';

		$plazo = '';
		$value = '';
		$amort = 1;
		$type  = 1;
		$month = date('m');
		$year  = date('Y');
		$datex = '';
		$datas = array();

		$totalCapital = 0;
		$totalIntere  = 0;
		$totalSeguro  = 0;
		$totalCuota   = 0;

		// Setting
		$settings = $this->settings_model->get_settings(1);
		
		// Var POST
		$post = $this->input->post(null, true);

		if (!empty($post)) 
		{
			$type  = $post['type'];
			$value = $post['value'];
			$dia   = $post['dia'];
			$amort = $post['amort'];
			$periodo = $post['periodo'];
			
			if (!empty($dia)) {
				$days = $dia;
				$date = date('Y-m').'-'.$dia;
			} else {
				$days = date('d');
				$date = date('Y-m-d');
			}
			
			$dayin = date('t', mktime(0, 0, 0, $month, 1, $year)) - $days;
			
			if ($value <= 0) {
				$this->session->set_flashdata('error', 'Monto en Cero');
				redirect('/credits?error');
			} else if ($value < $settings['credit_'.$type.'_mmin'] || $value > $settings['credit_'.$type.'_mmax']) {
				$this->session->set_flashdata('error', 'Monto min y max no valido');
				redirect('/credits?error');
			}
			
			$plazo = $post['plazo'];
			if ($plazo <= 0) {
				$this->session->set_flashdata('error', 'Plazo en Cero');
				redirect('/credits?error');
			} else if ($plazo < $settings['credit_'.$type.'_pmin'] || $plazo > $settings['credit_'.$type.'_pmax']) {
				$this->session->set_flashdata('error', 'Plazo min y max no valido');
				redirect('/credits?error');
			}
			
			$credit_seguro = $settings['credit_'.$type.'_seguro'];
			$saldo = $post['value'];
			
			// Tasa Efectiva
			if ($value <= $settings['base_max']) {
				$efect = $settings['base_efectiva'];
			} else if ($value >= $settings['simple_min'] && $value <= $settings['simple_max']) {
				$efect = $settings['simple_efectiva'];
			} else if ($value >= $settings['ampliada_min']) {
				$efect = $settings['ampliada_efectiva'];
			}
			
			// Tasa Nomina
			$p1 = 1+($efect)/100;
			$p2 = (30/360);
			$p3 = (360/30)*100;
			$pow = pow($p1, $p2) - 1;
			$tasa = round($pow * $p3, 2);

			// Cuota
			$I1 = $tasa / 12 / 100;
			$I2 = $I1 + 1;
			$I2 = pow($I2, -$plazo);
			$cuotas = round(($I1 * $value) / (1 - $I2), 2);
			$seguro = round(($credit_seguro / 100) * $value / 12, 2);
			
			$m = 0;
			for ($i = 1; $i <= $plazo; $i++) 
			{
				$array = array();
				
				if ($periodo == 52) {
					$m += 7;
				} else if ($periodo == 24) {
					$m += 15;
				} else if ($periodo == 12) {
					$m += 1;
				} else if ($periodo == 6) {
					$m += 2;
				} else if ($periodo == 4) {
					$m += 3;
				} else if ($periodo == 3) {
					$m += 4;
				} else if ($periodo == 2) {
					$m += 6;
				} else if ($periodo == 1) {
					$m += 12;
				}
				
				if ($periodo <= 12) {
					$suma = 'month';
				} else {
					$suma = 'day';
				}
				
				$date_next = strtotime('+'.$m.' '.$suma, strtotime($date));
				$date_next = date('Y-m-d', $date_next);
				$date_day  = strtolower(date('l', strtotime($date_next))); // Saturday, Sunday

				if ($date_day == 'saturday') {
					$date_next = strtotime('-1 day', strtotime($date_next));
					$date_next = date('Y-m-d', $date_next);
				}

				if ($date_day == 'sunday') {
					$date_next = strtotime('+1 day', strtotime($date_next));
					$date_next = date('Y-m-d', $date_next);
				}
				
				if (!empty($datex)) {
					$resta = strtotime($datex) - strtotime($date_next);
					$days_diff = intval($resta / 60 / 60 / 24);
				} else {
					$days_diff = $dayin;
				}
				
				$intere = abs(round(($saldo * $tasa) / 36000 * $days_diff, 2));
				$datex  = $date_next;
				
				if ($amort == 1) {
					$capital = abs(round($cuotas - $intere, 2));
				} else {
					$capital = round($value / $plazo, 2);
				}
				
				if ($saldo < $capital) {
					$capital = $saldo;
					$saldo   = 0;
				} else {
					$saldo = abs($saldo - $capital);
				}
				
				$cuota = abs($capital + $intere + $seguro);
				
				$array['days']    = abs($days_diff);
				$array['fecha']   = $date_next;
				$array['saldo']   = $saldo;
				$array['capital'] = $capital;
				$array['intere']  = $intere;
				$array['seguro']  = $seguro;
				$array['cuota']   = $cuota;
				
				$totalCapital += $capital;
				$totalIntere  += $intere;
				$totalSeguro  += $seguro;
				$totalCuota   += $cuota;
				
				// Add Array
				$datas[] = $array;
			}
			
			$value = '';
		}
		
		$data['datas']        = $datas;
		$data['credits']      = $settings;
		$data['totalCapital'] = $totalCapital;
		$data['totalIntere']  = $totalIntere;
		$data['totalSeguro']  = $totalSeguro;
		$data['totalCuota']   = $totalCuota;
		
        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
	}
}