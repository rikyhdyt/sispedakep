<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_jabatan_c extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='kepala/data_jabatan_v';
		$isi['sidebar']='kepala/sidebar/data_jabatan_aktif';
		$isi['data']=$this->db->get('tb_jabatan');
		$this->load->view('kepala/home_kepala',$isi);
	}

	public function tambahjabatan()
	{
		$data= array(
		'nm_jabatan'=>$this->input->post('nm_jabatan'),
		'pns'=>$this->input->post('pns'),

			);
		$this->Madmin->tambahjabatan($data);
		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Data berhasil ditambahkan
									</div>');
		redirect('kepala/data_jabatan_c');
	}

public function ubahjabatan()
	{
	$id=$this->input->post('id');
		$data= array(
		'nm_jabatan'=>$this->input->post('nm_jabatan'),
		'pns'=>$this->input->post('pns'),

			);
		$this->Madmin->ubahjabatan($data,$id);
		$this->session->set_flashdata('info', '<div class="alert alert-warning alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Data berhasil diubah
									</div>');
		redirect('kepala/data_jabatan_c');
	}
public function hapusjabatan($row){
	$this->Madmin->hapusjabatan($row);
	$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-times-circle"></i> Data berhasil dihapus
								</div>');
	redirect('kepala/data_jabatan_c');
}

}
