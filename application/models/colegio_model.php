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

	function get_regiones(){
		$query = $this->db->query("SELECT * FROM region");
		return $query->result();
	}
	function get_dependencias(){
		$query = $this->db->query("SELECT * FROM dependencia");
		return $query->result();
	}
	function get_colegios_por_comuna($nombre_comuna){ //sacar los colegios filtrados por comuna
		$query = $this->db->query("SELECT * FROM colegio WHERE comuna='$nombre_comuna' ");
		return $query->result();
	}

	function get_administracion_login($usuario, $contraseña){
		$query = $this->db->query("SELECT * FROM admin WHERE usuario ='$usuario' and contraseña = '$contraseña' LIMIT 1");
		if ($query->num_rows == 1) {
			return $query->row();
		}else{
			return FALSE;
		}
	}
	function agregar_colegio($colegio){
		  $this->db->insert('Colegio',$colegio);
	}

	function modificar_colegio($colegio,$id){
		$this->db->where('id_colegio', $id);
		return $this->db->update('Colegio', $colegio);
	}

	function eliminar_colegio($id){
		$this->db->where('id_colegio',$id);
        return $this->db->delete('colegio');
	}

	function get_religiones(){
		$query = $this->db->query("SELECT * FROM religion");
		return $query->result();
	}

	function get_colegios_por_religion($nombre_religion){ //sacar los colegios filtrados por comuna
		$query = $this->db->query("SELECT * FROM colegio WHERE religion='$nombre_religion' ");
		return $query->result();
	}

	function get_idiomas(){
		$query = $this->db->query("SELECT * FROM idioma");
		return $query->result();
	}

	function get_colegios_por_idioma($nombre_idioma){ //sacar los colegios filtrados por comuna
		$query = $this->db->query("SELECT * FROM colegio WHERE idioma='$nombre_idioma' ");
		return $query->result();
	}

	function filtro($comuna, $religion, $dependencia, $idioma, $region){
		$query = "SELECT * FROM colegio ";
		$band = false;
		//comuna
		if ($comuna!= "Todos" and $band== false) {
			$query = $query."WHERE comuna='$comuna' ";
			$band = true;
		}elseif($comuna!= "Todos" and $band== true){
			$query = $query."and comuna='$comuna' ";
		}

		//religion
		if ($religion!= "Todos" and $band== false) {
			$query = $query."WHERE religion='$religion' ";
			$band = true;
		}elseif($religion!= "Todos" and $band== true){
			$query = $query."and religion='$religion' ";
		}

		//dependencia
		if ($dependencia!= "Todos" and $band== false) {
			$query = $query."WHERE dependencia='$dependencia' ";
			$band = true;
		}elseif($dependencia!= "Todos" and $band== true){
			$query = $query."and dependencia='$dependencia' ";
		}

		//idioma
		if ($idioma!= "Todos" and $band== false) {
			$query = $query."WHERE idioma='$idioma' ";
			$band = true;
		}elseif($idioma!= "Todos" and $band== true){
			$query = $query."and idioma='$idioma' ";
		}

		//region
		if ($region!= "Todos" and $band== false) {
			$query = $query."WHERE region='$region' ";
			$band = true;
		}elseif($region!= "Todos" and $band== true){
			$query = $query."and region='$region' ";
		}

		$consulta = $this->db->query($query);
		return $consulta->result();
	}

	function agregar_me_gusta($me_gusta){
			
		$this->db->insert('me_gusta',$me_gusta);
		
	  
	}

	function like_colegio($id_colegio, $ip_usuario){
		$query =$this->db->query("SELECT * from me_gusta WHERE id_colegio='$id_colegio' AND 
			ip_usuario='$ip_usuario'");
		if ($query->num_rows() > 0 ){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}
?>