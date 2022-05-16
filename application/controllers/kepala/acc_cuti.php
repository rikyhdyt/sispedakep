<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acc_cuti extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='kepala/acc_cuti_v';
		$isi['sidebar']='kepala/sidebar/acc_cuti_aktif';
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_cuti on tb_pegawai.nip=peng_cuti.nip_peg where log='1'");
		$this->load->view('kepala/home_kepala',$isi);
	}
public function terima_cuti()
	{
	$id=$this->input->post('id');
		$data= array(
		'nip_peg'=>$this->input->post('nip'),
		'jns_cuti'=>$this->input->post('jns_cuti'),
		'dari'=>$this->input->post('dari'),
		'sampai'=>$this->input->post('sampai'),
		'syarat'=>$this->input->post('syarat'),
		'tgl_ajukan'=>$this->input->post('tgl_ajukan'),
		'status'=>'Diterima',
		'log'=>'2'

			);
		$this->Mkepala->acccuti($data,$id);
		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Pengajuan berhasil diterima
									</div>');
		redirect('kepala/acc_cuti');
	}

	public function tolak_cuti()
	{
	$id=$this->input->post('id');
		$data= array(
		'nip_peg'=>$this->input->post('nip'),
		'jns_cuti'=>$this->input->post('jns_cuti'),
		'dari'=>$this->input->post('dari'),
		'sampai'=>$this->input->post('sampai'),
		'syarat'=>$this->input->post('syarat'),
		'tgl_ajukan'=>$this->input->post('tgl_ajukan'),
		'status'=>'Tidak Diterima',
		'log'=>'0'

			);
		$this->Mkepala->acccuti($data,$id);
		$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Pengajuan berhasil ditolak
									</div>');
		redirect('kepala/acc_cuti');
	}
		
public function download($id){
    $this->load->helper('download');
    $fileinfo = $this->Mkepala->download_syarat($id);
    $file = 'dokumen/'.$fileinfo['syarat'];
    force_download($file, NULL);
}
	}