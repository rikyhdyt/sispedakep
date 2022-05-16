<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pensiun_c extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='admin/data_pensiun_v';
		$isi['sidebar']='admin/sidebar/data_pensiun_aktif';
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id where pensiun='Pensiun' ");
		$this->load->view('admin/home_admin',$isi);
	}
}