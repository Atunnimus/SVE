<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$data['header']['title'] = ("SVE");

		$this->load->view('header', $data['header']);
		$this->load->view('main');
		$this->load->view('footer');
	}

	public function votacion()
	{
		$data['header']['title'] = ("SVE - Votación");

		$this->load->view('adminviews/headerAdm', $data['header']);
		$this->load->view('electorviews/votacion');
		$this->load->view('footer');
	}

	public function monitoreo()
	{
		$data['header']['title'] = ("SVE - Monitoreo");

		$this->load->view('adminviews/headerAdm', $data['header']);
		$this->load->view('monitorviews/monitor');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */