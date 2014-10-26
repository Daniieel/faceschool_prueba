<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		//$dato['usuarios']= $this->uum->get_usuarios(); //cargo una consulta
		$dato['colegios']= $this->uum->get_colegios();// carga los colegios
		
		$this->load->view('layouts/header');
		$this->load->view('mapa/index',$dato);
		$this->load->view('layouts/footer');


	}
	public function colegios_por_comuna()
	{
		$comuna =$this->input->get("comuna");
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegios']= $this->uum->get_colegios_por_comuna();// carga los colegios
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */