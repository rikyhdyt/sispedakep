<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_golongan_c extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='kepala/data_golongan_v';
		$isi['sidebar']='kepala/sidebar/data_golongan_aktif';
		$isi['data']=$this->db->get('tb_golongan');
		$this->load->view('kepala/home_kepala',$isi);
	}

	public function tambahgolongan()
	{
		$data= array(
		'nm_gol'=>$this->input->post('nm_gol'),

			);
		$this->Madmin->tambahgolongan($data);
		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Data berhasil ditambahkan
									</div>');
		redirect('kepala/data_golongan_c');
	}

public function ubahgolongan()
	{
	$id=$this->input->post('id');
		$data= array(
		'nm_gol'=>$this->input->post('nm_gol'),

			);
		$this->Madmin->ubahgolongan($data,$id);
		$this->session->set_flashdata('info', '<div class="alert alert-warning alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Data berhasil diubah
									</div>');
		redirect('kepala/data_golongan_c');
	}
public function hapusgolongan($row){
	$this->Madmin->hapusgolongan($row);
	$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-times-circle"></i> Data berhasil dihapus
								</div>');
	redirect('kepala/data_golongan_c');
}
}