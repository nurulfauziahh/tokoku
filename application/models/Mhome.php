<?php

class Mhome extends CI_Model{

	public function tampil_dokter(){
		// $query = $this->db->get("dokter");
		// return $query->result();
		$query = $this->db->get('dokter');
		        return $query->result();
	}


	public function getDokterById($id)
	{
		return $this->db->get_where('dokter', ['id' => $id])->row_array();
	}

	
}
