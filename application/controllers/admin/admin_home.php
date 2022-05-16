<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='admin/home_content';
		$isi['sidebar']='admin/sidebar/home_aktif';
		$isi['totalpeg']= $this->Mcontent->jumlahpegawai();
		$isi['totalcuti']= $this->Mcontent->jumlahcuti();
		$isi['totalpensiun']= $this->Mcontent->jumlahpensiun();
		$isi['riwayatcuti']= $this->Mcontent->jumlahriwayatcuti();
		$isi['riwayatjabatan']= $this->Mcontent->jumlahriwayat_kenaikanjabatan();
		$isi['riwayatpensiun']= $this->Mcontent->jumlahriwayatpensiun();
		$tanggal=date('Y-m-d');
		$this->Mpegawai->cuti_selesai($tanggal);
		$this->load->view('admin/home_admin',$isi);
	}
}
