<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepala_home_c extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='kepala/konten_kepala';
		$isi['sidebar']='kepala/sidebar/home_k_aktif';
		$isi['totalpeg']= $this->Mcontent->jumlahpegawai();
		$isi['totalcuti']= $this->Mcontent->jumlahcuti();
		$isi['totalpensiun']= $this->Mcontent->jumlahpensiun();
		$isi['riwayatcuti']= $this->Mcontent->jumlahriwayatcuti();
		$isi['riwayatjabatan']= $this->Mcontent->jumlahriwayat_kenaikanjabatan();
		$isi['riwayatpensiun']= $this->Mcontent->jumlahriwayatpensiun();
		$isi['cutiaktif']= $this->Mcontent->jumlahcuti_aktif();
		$isi['pensiunaktif']= $this->Mcontent->jumlahpensiun_aktif();
		$isi['jabatanaktif']= $this->Mcontent->jumlahkenaikanjabatan_aktif();
		$tanggal=date('Y-m-d');
		$this->Mpegawai->cuti_selesai($tanggal);
		$this->load->view('kepala/home_kepala',$isi);
	}
}
