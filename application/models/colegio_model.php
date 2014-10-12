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

	function get_colegio($colegio_id){ //para traer un colegio
		$query = $this->db->query("SELECT * FROM colegio WHERE id_colegio='$colegio_id' LIMIT 1");
		return $query->row();
	}
 }
?>