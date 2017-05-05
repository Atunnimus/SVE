<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{

		$data['header']['title'] = ("SVE - Administración");

		$this->load->view('adminviews/headerAdm', $data['header']);
		$this->load->view('adminviews/main');
		$this->load->view('footer');
	}

	public function entidad()
	{
		$data['header']['title'] = ("SVE - Entidad");
		$this->load->view('adminviews/headerAdm', $data['header']);
		$this->load->view('adminviews/entidad');
		$this->load->view('footer');
	}

	public function entidadNueva()
	{
		$data['header']['title'] = ("SVE - Nueva Entidad");
		$this->load->view('adminviews/headerAdm', $data['header']);
		$this->load->view('adminviews/entidad_nueva');
		$this->load->view('footer');
	}

	public function orgcolegiado()
	{
		$data['header']['title'] = ("SVE - Órgano Colegiado");
		$this->load->view('adminviews/headerAdm', $data['header']);
		$this->load->view('adminviews/orgColegiado');
		$this->load->view('footer');
	}

	public function orgcolegiadoNuevo()
	{
		$data['header']['title'] = ("SVE - Nuevo Órgano Colegiado");
		$this->load->view('adminviews/headerAdm', $data['header']);
		$this->load->view('adminviews/orgColegiado_nuevo');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */