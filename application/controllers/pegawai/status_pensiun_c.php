<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_pensiun_c extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pegawai/status_pensiun';
		$isi['sidebar']='pegawai/sidebar/status_pensiun_aktif';
		$user=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN peng_pensiun on tb_pegawai.nip=peng_pensiun.nip_peg where nip=$user")->row_array();
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_pensiun on tb_pegawai.nip=peng_pensiun.nip_peg where nip=$user and log='1'");
		$this->load->view('pegawai/home_pegawai_v',$isi);
		
	}

	public function cek_pensiun()
	{
		$username=$this->session->userdata('username');
		$this->load->model('Mpegawai');
		$this->Mpegawai->cek_status_pensiun($username);
	}

	public function pensiun_disetujui()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pegawai/status_pensiun_acc';
		$isi['sidebar']='pegawai/sidebar/status_pensiun_aktif';
		$user=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN peng_pensiun on tb_pegawai.nip=peng_pensiun.nip_peg where nip=$user")->row_array();
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_pensiun on tb_pegawai.nip=peng_pensiun.nip_peg where nip=$user and log='2' ");
		$this->load->view('pegawai/home_pegawai_v',$isi);
		
	}

	public function riwayat_pensiun()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pegawai/status_pensiun';
		$isi['sidebar']='pegawai/sidebar/status_pensiun_aktif';
		$user=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN peng_pensiun on tb_pegawai.nip=peng_pensiun.nip_peg where nip=$user")->row_array();
		$isi['data1']=$this->db->query("SELECT * from tb_pegawai JOIN peng_pensiun on tb_pegawai.nip=peng_pensiun.nip_peg where nip=$user and log='0' ");
		$this->load->view('pegawai/home_pegawai_v',$isi);
		
	}

	public function cetak_surat_pensiun()
	{
		$isi['tanggal']=date('d-m-Y');
		$username=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai join tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id JOIN peng_pensiun on tb_pegawai.nip=peng_pensiun.nip_peg where nip=$username and log='2'")->row_array();
		$isi['kepala']=$this->db->query("SELECT * from tb_pegawai join tb_jabatan on tb_jabatan.id=tb_pegawai.jabatan join tb_golongan on tb_golongan.id=tb_pegawai.golongan where jabatan='1'")->row_array();

		$this->load->model('Mpegawai');
		$this->Mpegawai->update_log_pensiun($username);
		$this->load->view('pegawai/cetak/surat_pensiun',$isi);
	}
}