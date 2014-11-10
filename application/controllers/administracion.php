<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administracion extends CI_Controller {

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
	
	public function __construct()
	     {
	          parent::__construct();
	          $this->dato['alert']="";
	          // Your own constructor code
	     }
	public function login()
	{
		if ($this->input->get('err')== "1") {
			$this->dato['alert']= array(
			'alert' => "danger",
			'mensaje' => "Usuario y/o contraseña inválida"
			);
		}
		// carga los colegios
		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/login');
		$this->load->view("layouts/footer");

	}
	public function login_action()
	{
		$usuario=$this->input->post("usuario");
		$contraseña=$this->input->post("contrasena");
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$validacion=$this->uum->get_administracion_login($usuario, $contraseña);

		if ($validacion==FALSE) {
			redirect(base_url('administracion/login?err=1'));
		}else{
			$newdata = array(
			 'username' => $validacion->usuario,
			 'logged_in' => TRUE
			 );
			$this->session->set_userdata($newdata);
			
			redirect(base_url('administracion/admin?sus=1'));
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('administracion/login'));
	}

	public function admin()
	{
		if($this->input->get('sus')=="1"){
			$this->dato['alert'] = array(
			'alert' => "success",
			'mensaje' => "Has iniciado sesión correctamente"
			);
		}
		$this->autorizar();
		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/admin');
		$this->load->view("layouts/footer");
	}

	public function agregar_colegio()
	{
		$this->autorizar();

		//guardo en un array todos los datos que insertaron en el formulario anterior
		$colegio = array(
			'nombre' => $this->input->post('nombre'), //con el name de cada input obtengo los valores de cada uno
			'region' => $this->input->post('region'),
			'provincia' => $this->input->post('provincia'),
			'comuna' => $this->input->post('comuna'),
			'direccion' => $this->input->post('direccion'),
			'telefono' => $this->input->post('telefono'),
			'pagina_web' => $this->input->post('pagina_web'),
			'dependencia' => $this->input->post('dependencia'),
			'promedio_psu' => $this->input->post('promedio_psu'),
			'grupo_socioeco' => $this->input->post('grupo_socioeco'),
			'prom_simce_4bas_leng' => $this->input->post('prom_simce_4bas_leng'),
			'prom_simce_4bas_mate' => $this->input->post('prom_simce_4bas_mate'),
			'prom_simce_4bas_cienc' => $this->input->post('prom_simce_4bas_cienc'),
			'prom_simce_2med_leng' => $this->input->post('prom_simce_2med_leng'),
			'prom_simce_2med_mate' => $this->input->post('prom_simce_2med_mate'),
			'religion' => $this->input->post('religion'),
			'idioma' => $this->input->post('idioma'),
			'latitud' => $this->input->post('latitud'),
			'longitud' => $this->input->post('longitud'),
			
			);
	

		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$this->uum->agregar_colegio($colegio); //agrego el colegio asignado 


		redirect(base_url('administracion/admin'));

	}
	public function seleccionar_colegio_mod()
	{
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegios']= $this->uum->get_colegios();// carga los colegios
		$dato['comunas']= $this->uum->get_comunas();

		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/seleccionar_colegio_mod', $dato);
		$this->load->view("layouts/footer");
	}

	public function modificar_colegio()
	{
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegios']= $this->uum->get_colegios();// carga los colegios
		$dato['comunas']= $this->uum->get_comunas();

		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/modificar_colegio', $dato);
		$this->load->view("layouts/footer");
	}

	public function nose(){
		$this->autorizar();
		$colegio = array(
			'nombre' => $this->input->post('nombre'), //con el name de cada input obtengo los valores de cada uno
			'region' => $this->input->post('region'),
			'provincia' => $this->input->post('provincia'),
			'comuna' => $this->input->post('comuna'),
			'direccion' => $this->input->post('direccion'),
			'telefono' => $this->input->post('telefono'),
			'pagina_web' => $this->input->post('pagina_web'),
			'dependencia' => $this->input->post('dependencia'),
			'promedio_psu' => $this->input->post('promedio_psu'),
			'grupo_socioeco' => $this->input->post('grupo_socioeco'),
			'prom_simce_4bas_leng' => $this->input->post('prom_simce_4bas_leng'),
			'prom_simce_4bas_mate' => $this->input->post('prom_simce_4bas_mate'),
			'prom_simce_4bas_cienc' => $this->input->post('prom_simce_4bas_cienc'),
			'prom_simce_2med_leng' => $this->input->post('prom_simce_2med_leng'),
			'prom_simce_2med_mate' => $this->input->post('prom_simce_2med_mate'),
			'religion' => $this->input->post('religion'),
			'idioma' => $this->input->post('idioma'),
			'latitud' => $this->input->post('latitud'),
			'longitud' => $this->input->post('longitud'),
			
			);
	
		//var_dump($colegio);
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$this->uum->modificar_colegio($colegio, $this->input->post('id_colegio')); //agrego el colegio asignado 


		redirect(base_url('administracion/seleccionar_colegio_mod'));
	}

	public function index()  //para modificar colegio (intento)
	{
		$this->autorizar();
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		//carago una consulta
		$dato['colegios']= $this->uum->get_colegios();

		$this->load->view('layouts/header');
		$this->load->view('administracion/index',$dato);
		$this->load->view('layouts/footer');
	}

	public function modificar_show() //intento
	{
		$this->load->helper('url');
		$colegio_id = $this->input->get("colegio"); 
		
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegio']= $this->uum->get_colegio($colegio_id); 

		$this->load->view("layouts/header",$this->dato);
		$this->load->view('administracion/modificar_show', $dato);
		$this->load->view("layouts/footer");
	}


	
	private function autorizar(){
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect(base_url('administracion/login'));
		}
	}
}

