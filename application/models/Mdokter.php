<?php

class Mdokter extends CI_Model{

	public function tampil_dokter(){
		// $query = $this->db->get("dokter");
		// return $query->result();
		$query = $this->db->get('dokter');
		        return $query->result();
	}

	public function tambah_data($data){
		$this->db->insert("dokter",$data);
	}

	public function delete_data($id){
		$this->db->where("id",$id);
		$this->db->delete("dokter");
	}

	public function getDokterById($id)
	{
		return $this->db->get_where('dokter', ['id' => $id])->row_array();
	}

	public function ubahDataDokter()
	{
		$data = [
			"nama" => $this->input->post('nama',true),
			"spesialis" => $this->input->post('spesialis',true),
			"shift" => $this->input->post('shift',true),
				
		];

		$this->db->where('id',$this->input->post('id'));
		$this->db->update('dokter',$data);
	}
}
