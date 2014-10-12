<?php 
class Colegio_model extends CI_Model {
	function get_usuarios(){ //funcion para tener todos los usuarios
		$query = $this->db->query("SELECT * FROM Usuario LIMIT 1");
		return $query->row();
	}

	function get_colegios(){ //funcion para traer colegios
		$query = $this->db->query("SELECT * FROM colegio");
		return $query->result();
	}
 }
?>