<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapa extends CI_Controller {
	
	public function __construct()
	     {
	          parent::__construct();
	          $this->dato['alert']="";
	          // Your own constructor code
	     }
	public function index()
	{
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		//$dato['usuarios']= $this->uum->get_usuarios(); //cargo una consulta
		$dato['colegios']= $this->uum->get_colegios();// carga los colegios
		$dato['comunas']= $this->uum->get_comunas();
		$dato['religiones']= $this->uum->get_religiones();
		$dato['idiomas']= $this->uum->get_idiomas();

		$this->load->view('layouts/header',$this->dato);
		$this->load->view('mapa/index',$dato);
		$this->load->view('layouts/footer');


	}

	public function filtro()
	{
		$comuna =$this->input->get("comuna");
		$religion =$this->input->get("religion");
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$colegios= $this->uum->filtro($comuna, $religion);
		echo json_encode($colegios);
	}

	public function colegios_por_religion()
	{
		$religion =$this->input->get("religion");
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		if ($religion == "Todos") {
			$colegios = $this->uum->get_colegios();
		}else{
			$colegios= $this->uum->get_colegios_por_religion($religion);// carga los colegios
		}
		echo json_encode($colegios);
	}		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */