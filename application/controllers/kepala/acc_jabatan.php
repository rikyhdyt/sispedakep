<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acc_jabatan extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='kepala/acc_jabatan_v';
		$isi['sidebar']='kepala/sidebar/acc_jabatan_aktif';
		$isi['data']=$this->db->query("SELECT * from tb_pegawai join tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id JOIN peng_jabatan on tb_pegawai.nip=peng_jabatan.nip_peg where log='1'");
		$isi['data1']=$this->Madmin->pilihjabatan();
		$this->load->view('kepala/home_kepala',$isi);
	}

	public function tolak_jabatan()
	{
	$id=$this->input->post('id');
		$data= array(
		'nip_peg'=>$this->input->post('nip'),
		'file_sk'=>$this->input->post('file_sk'),
		'alasan'=>$this->input->post('alasan'),
		'tgl_ajukan'=>$this->input->post('tgl_ajukan'),
		'status'=>'Tidak Diterima',
		'log'=>'0'

			);
		$this->Mkepala->accjabatan_pengajuan($data,$id);
		$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Pengajuan kenaikan jabatan berhasil ditolak
									</div>');
		redirect('kepala/acc_jabatan');
	}

	public function terima_jabatan()
	{

	$nip=$this->input->post('nip');
	$dt=array(
	'nip'=>$this->input->post('nip'),
			'nm_pegawai'=>$this->input->post('nm_pegawai'),
			'jabatan'=>$this->input->post('plh_jabatan'),
            'golongan'=>$this->input->post('plh_golongan'),
            'gaji'=>$this->input->post('gaji'),
            'jekel'=>$this->input->post('jekel'),
            'tgl_masuk'=>$this->input->post('tgl_masuk'),
            'tgl_lahir'=>$this->input->post('tgl_lahir'),
            'tmpt_lahir'=>$this->input->post('tmpt_lhr'),
            'email'=>$this->input->post('email'),
            'no_hp'=>$this->input->post('no_hp'),
            'alamat'=>$this->input->post('alamat'),
            'pendidikan'=>$this->input->post('pendidikan'),
            'pensiun'=>$this->input->post('pensiun'),
	);
	$this->Mkepala->accjabatan_pegawai($dt,$nip);

	$id=$this->input->post('id');
		$data= array(
		'nip_peg'=>$this->input->post('nip'),
		'file_sk'=>$this->input->post('file_sk'),
		'alasan'=>$this->input->post('alasan'),
		'tgl_ajukan'=>$this->input->post('tgl_ajukan'),
		'status'=>'Diterima',
		'log'=>'2'

			);
		$this->Mkepala->accjabatan_pengajuan($data,$id);
		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Pengajuan kenaikan jabatan berhasil diterima
									</div>');
		redirect('kepala/acc_jabatan');
	}

	public function download($id){
    $this->load->helper('download');
    $fileinfo = $this->Mkepala->download_sk($id);
    $file = 'dokumen/'.$fileinfo['file_sk'];
    force_download($file, NULL);
}
}