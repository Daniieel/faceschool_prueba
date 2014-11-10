<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colegio extends CI_Controller {

	public function __construct()
	     {
	          parent::__construct();
	          $this->dato['alert']="";
	          // Your own constructor code
	     }
	public function show()
	{
		$this->load->helper('url');
		$colegio_id = $this->input->get("colegio"); 
		
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegio']= $this->uum->get_colegio($colegio_id); 

		$this->load->view("layouts/header",$this->dato);
		$this->load->view('colegio/show', $dato);
		$this->load->view("layouts/footer");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */