<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acc_pensiun extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='kepala/acc_pensiun_v';
		$isi['sidebar']='kepala/sidebar/acc_pensiun_aktif';
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_pensiun on tb_pegawai.nip=peng_pensiun.nip_peg where log='1'");
		$this->load->view('kepala/home_kepala',$isi);
	}

	public function tolak_pensiun()
	{
	$id=$this->input->post('id');
		$data= array(
		'nip_peg'=>$this->input->post('nip'),
		'jenis'=>$this->input->post('jenis'),
		'alasan'=>$this->input->post('alasan'),
		'tgl_ajukan'=>$this->input->post('tgl_ajukan'),
		'status'=>'Tidak Disetujui',
		'log'=>'0'

			);
		$this->Mkepala->accpensiun($data,$id);
		$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Pengajuan pensiun berhasil ditolak
									</div>');
		redirect('kepala/acc_pensiun');
	}

	public function terima_pensiun()
	{

	$nip=$this->input->post('nip');
	$dt=array(
	'nip'=>$this->input->post('nip'),
			'nm_pegawai'=>$this->input->post('nm_pegawai'),
			'jabatan'=>$this->input->post('jabatan'),
            'golongan'=>$this->input->post('golongan'),
            'gaji'=>$this->input->post('gaji'),
            'jekel'=>$this->input->post('jekel'),
            'tgl_masuk'=>$this->input->post('tgl_masuk'),
            'tgl_lahir'=>$this->input->post('tgl_lahir'),
            'tmpt_lahir'=>$this->input->post('tmpt_lhr'),
            'email'=>$this->input->post('email'),
            'no_hp'=>$this->input->post('no_hp'),
            'alamat'=>$this->input->post('alamat'),
            'pendidikan'=>$this->input->post('pendidikan'),
            'pensiun'=>'Pensiun',
	);
	$this->Mkepala->accjabatan_pegawai($dt,$nip);

	$id=$this->input->post('id');
		$data= array(
		'nip_peg'=>$this->input->post('nip'),
		'jenis'=>$this->input->post('jenis'),
		'alasan'=>$this->input->post('alasan'),
		'tgl_ajukan'=>$this->input->post('tgl_ajukan'),
		'status'=>'Disetujui',
		'log'=>'2'

			);
		$this->Mkepala->accpensiun($data,$id);
		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Pengajuan kenaikan jabatan berhasil diterima
									</div>');
		redirect('kepala/acc_pensiun');
	}

	
}