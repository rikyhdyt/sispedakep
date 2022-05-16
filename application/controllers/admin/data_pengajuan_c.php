<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengajuan_c extends CI_Controller {

	public function index()
	{
		
	}

public function riwayat_cuti()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='admin/peng_cuti_v';
		$isi['sidebar']='admin/sidebar/peng_cuti_aktif';
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_cuti on tb_pegawai.nip=peng_cuti.nip_peg where log='0' or log='2'");
		$this->load->view('admin/home_admin',$isi);
	}

	public function riwayat_jabatan()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='admin/peng_jabatan_v';
		$isi['sidebar']='admin/sidebar/peng_jabatan_aktif';
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai join tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id JOIN peng_jabatan on tb_pegawai.nip=peng_jabatan.nip_peg where log='0' or log='2'");
		$this->load->view('admin/home_admin',$isi);
	}

	public function riwayat_pensiun()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='admin/peng_pensiun_v';
		$isi['sidebar']='admin/sidebar/peng_pensiun_aktif';
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_pensiun on tb_pegawai.nip=peng_pensiun.nip_peg where log='0' or log='2'");
		$this->load->view('admin/home_admin',$isi);
	}

	public function cetak_cuti(){

	$satu=$this->input->post('dari');
	$dua=$this->input->post('sampai');
	$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_cuti on tb_pegawai.nip=peng_cuti.nip_peg where tgl_ajukan between '$satu' and '$dua' ");
	$isi['dari']=$this->input->post('dari');
	$isi['sampai']=$this->input->post('sampai');

	$this->load->view('admin/cetak/cetak_cuti',$isi);

	}

	public function cetak_jabatan(){

	$satu=$this->input->post('dari');
	$dua=$this->input->post('sampai');
	$isi['data1']=$this->db->query("SELECT * from tb_pegawai join tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id  JOIN peng_jabatan on tb_pegawai.nip=peng_jabatan.nip_peg where log='0' and tgl_ajukan between '$satu' and '$dua' ");
	$isi['dari']=$this->input->post('dari');
	$isi['sampai']=$this->input->post('sampai');

	$this->load->view('admin/cetak/cetak_jabatan',$isi);

	}

	public function cetak_pensiun(){

	$satu=$this->input->post('dari');
	$dua=$this->input->post('sampai');
	$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_pensiun on tb_pegawai.nip=peng_pensiun.nip_peg where tgl_ajukan between '$satu' and '$dua' ");
	$isi['dari']=$this->input->post('dari');
	$isi['sampai']=$this->input->post('sampai');

	$this->load->view('admin/cetak/cetak_pensiun',$isi);

	}
}