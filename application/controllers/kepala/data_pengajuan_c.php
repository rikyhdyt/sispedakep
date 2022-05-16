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
		$isi['sidebar']='kepala/sidebar/peng_cuti_aktif';
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_cuti on tb_pegawai.nip=peng_cuti.nip_peg where log='0' or log='2'");
		$this->load->view('kepala/home_kepala',$isi);
	}

	public function riwayat_jabatan()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='admin/peng_jabatan_v';
		$isi['sidebar']='kepala/sidebar/peng_jabatan_aktif';
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai join tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id JOIN peng_jabatan on tb_pegawai.nip=peng_jabatan.nip_peg where log='0' or log='2'");
		$this->load->view('kepala/home_kepala',$isi);
	}

	public function riwayat_pensiun()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='admin/peng_pensiun_v';
		$isi['sidebar']='kepala/sidebar/peng_pensiun_aktif';
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_pensiun on tb_pegawai.nip=peng_pensiun.nip_peg where log='0' or log='2'");
		$this->load->view('kepala/home_kepala',$isi);
	}
}