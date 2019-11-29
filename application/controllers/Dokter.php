
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mdokter');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		
		// $this->load->model('Mdokter');
		
	}

	public function tampil(){
		$data['judul'] = 'Daftar Dokter';
		$this->load->view('templates/header', $data);
		$data['dat'] = $this->Mdokter->tampil_dokter();
		$this->load->view('vdokter',$data);
		$this->load->view('templates/footer');
		
		
	}

	public function tambah_data(){
		$this->load->view('vtambah_data');
	}

	public function tambah_data_action(){
		$insert = array(
			'nama' => $this->input->post("nama"),
			'spesialis' => $this->input->post("spesialis"),
			'shift' => $this->input->post("shift"),
		);
		$this->Mdokter->tambah_data($insert);
		redirect('Dokter/tampil');
	}

	public function delete_data($id){
		$this->Mdokter->delete_data($id);
		redirect('Dokter/tampil');
	}

	public function ubah($id)
	{
		//$data['judul'] = 'Form Ubah Data Mahasiswa';
		$data['dokter'] = $this->Mdokter->getDokterById($id);
		//$data['jurusan'] = ['Informatika','Mesin','Pangan'];



		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('spesialis','Spesialis','required');
		$this->form_validation->set_rules('shift','Shift','required');

		if($this->form_validation->run()==false){
			$this->load->view('vubah_data',$data);

		}else{

			$this->Mdokter->ubahDataDokter();
			$this->session->set_flashdata('flash','Diubah');
			redirect('Dokter/tampil');
		}
	}
}
