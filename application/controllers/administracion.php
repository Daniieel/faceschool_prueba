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
	public function login()
	{
		$this->load->view("layouts/header");
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
			redirect(base_url('administracion/login'));
		}else{
			$newdata = array(
			 'username' => $validacion->usuario,
			 'logged_in' => TRUE
			 );
			$this->session->set_userdata($newdata);
			
			redirect(base_url('administracion/admin'));
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('administracion/login'));
	}

	public function admin()
	{
		$this->load->view("layouts/header");
		$this->load->view('administracion/admin');
		$this->load->view("layouts/footer");
	}

	public function seleccionar_colegio_mod()
	{
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegios']= $this->uum->get_colegios();// carga los colegios
		$dato['comunas']= $this->uum->get_comunas();

		$this->load->view("layouts/header");
		$this->load->view('administracion/seleccionar_colegio_mod', $dato);
		$this->load->view("layouts/footer");
	}

	public function modificar_colegio()
	{
		$this->load->model("colegio_model","uum"); //cargo la base de datos
		$dato['colegios']= $this->uum->get_colegios();// carga los colegios
		$dato['comunas']= $this->uum->get_comunas();

		$this->load->view("layouts/header");
		$this->load->view('administracion/modificar_colegio', $dato);
		$this->load->view("layouts/footer");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */