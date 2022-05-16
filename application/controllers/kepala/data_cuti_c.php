<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_cuti_c extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='admin/data_cuti_v';
		$isi['sidebar']='kepala/sidebar/data_cuti_aktif';
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id join peng_cuti on peng_cuti.nip_peg=tb_pegawai.nip where log='2' ");
		$this->load->view('kepala/home_kepala',$isi);
	}
}