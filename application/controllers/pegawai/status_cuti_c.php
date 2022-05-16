<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_cuti_c extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pegawai/status_cuti';
		$isi['sidebar']='pegawai/sidebar/status_cuti_aktif';
		$user=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN peng_cuti on tb_pegawai.nip=peng_cuti.nip_peg where nip=$user")->row_array();
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_cuti on tb_pegawai.nip=peng_cuti.nip_peg where nip=$user and log='1'");
		$this->load->view('pegawai/home_pegawai_v',$isi);
		
	}

	public function cek_cuti()
	{
		$username=$this->session->userdata('username');
		$this->load->model('Mpegawai');
		$this->Mpegawai->cek_status_cuti($username);
	}

	public function cuti_disetujui()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pegawai/status_cuti_acc';
		$isi['sidebar']='pegawai/sidebar/status_cuti_aktif';
		$user=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN peng_cuti on tb_pegawai.nip=peng_cuti.nip_peg where nip=$user")->row_array();
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_cuti on tb_pegawai.nip=peng_cuti.nip_peg where nip=$user and log='2'");
		$this->load->view('pegawai/home_pegawai_v',$isi);
		
	}

	public function riwayat_p_cuti()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pegawai/status_cuti';
		$isi['sidebar']='pegawai/sidebar/status_cuti_aktif';
		$user=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN peng_cuti on tb_pegawai.nip=peng_cuti.nip_peg where nip=$user")->row_array();
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_cuti on tb_pegawai.nip=peng_cuti.nip_peg where nip=$user and log='0'");
		$this->load->view('pegawai/home_pegawai_v',$isi);
		
	}

	public function cetak_surat_cuti()
	{
		$isi['tanggal']=date('Y-m-d');
		$username=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai join tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id JOIN peng_cuti on tb_pegawai.nip=peng_cuti.nip_peg where nip=$username and log='2'")->row_array();
		$isi['kepala']=$this->db->query("SELECT * from tb_pegawai where jabatan='1'")->row_array();
		$this->load->view('pegawai/cetak/surat_cuti',$isi);
	}
}