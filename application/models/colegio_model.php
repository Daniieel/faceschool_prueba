<?php 
class Colegio_model extends CI_Model {
	function get_usuarios(){
		$query = $this->db->query("SELECT * FROM Usuario LIMIT 1");
		return $query->row();
	}
 }
?>