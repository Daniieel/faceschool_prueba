<?php 
class Colegio_model extends CI_Model {
	function get_usuarios(){ //funcion para tener todos los usuarios
		$query = $this->db->query("SELECT * FROM Usuario LIMIT 1");
		return $query->row();
	}

	function get_colegios(){ //funcion para traer colegios
		$query = $this->db->query("SELECT id_colegio, nombre, provincia, region, comuna, direccion, telefono, pagina_web, dependencia,promedio_psu, grupo_socioeco, prom_simce_4bas_leng, prom_simce_4bas_mate, prom_simce_4bas_cienc, prom_simce_2med_leng, prom_simce_2med_mate, religion, idioma, replace(latitud,',','.') as latitud, replace(longitud,',','.') as longitud FROM colegio");
		return $query->result();
	}

	function get_colegio($colegio_id){ //para traer un colegio
		$query = $this->db->query("SELECT * FROM colegio WHERE id_colegio='$colegio_id' LIMIT 1");
		return $query->row();
	}

	function get_comunas(){
		$query = $this->db->query("SELECT * FROM comuna");
		return $query->result();
	}

}
?>