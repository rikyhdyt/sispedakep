<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pegawai_c extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='kepala/data_pegawai_v';
		$isi['sidebar']='kepala/sidebar/data_pegawai_aktif';
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id JOIN tb_user on tb_pegawai.nip=tb_user.username where pensiun='Tidak' ");
		$this->load->view('kepala/home_kepala',$isi);
	}

	public function form_tambah()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='kepala/tambah_pegawai';
		$isi['sidebar']='kepala/sidebar/data_pegawai_aktif';
		$isi['data']=$this->Madmin->pilihpegawai();
		$isi['data1']=$this->Madmin->pilihjabatan();
		$isi['data2']=$this->Madmin->pilihgolongan();
		$this->load->view('kepala/home_kepala',$isi);
	}

	public function tambahdata()
	{
		$this->form_validation->set_rules('nip','NIP','required|trim|is_unique[tb_pegawai.nip]',
			[
			'required'=>'NIP/NIDP harus diisi',
			'is_unique'=> 'NIP/NIDP telah digunakan',
			
			]);
if ($this->form_validation->run()==false){
	$this->Msecurity->getsecurity();
		$isi['content']='kepala/tambah_pegawai';
		$isi['sidebar']='kepala/sidebar/data_pegawai_aktif';
		$isi['data']=$this->Madmin->pilihpegawai();
		$isi['data1']=$this->Madmin->pilihjabatan();
		$isi['data2']=$this->Madmin->pilihgolongan();
		$this->load->view('kepala/home_kepala',$isi);
	}
	else{
		$data= array(
			'nip'=>$this->input->post('nip'),
			'nm_pegawai'=>$this->input->post('nm_pegawai'),
			'jabatan'=>$this->input->post('plh_jabatan'),
            'golongan'=>$this->input->post('plh_golongan'),
            'gaji'=>$this->input->post('gaji'),
            'pensiun'=>'Tidak',
            'jekel'=>$this->input->post('plh_jekel'),
            'tgl_masuk'=>$this->input->post('tgl_masuk'),

			
			);
		$this->Madmin->tambahpegawai($data);

		$dt= array(
		'username'=>$this->input->post('nip'),
		'password'=>$this->input->post('psw'),
		'level'=>'3'

			);
		$this->Madmin->tambahuser($dt);
		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Data berhasil ditambahkan
									</div>');
		redirect('kepala/data_pegawai_c');
	}
}

	public function hapusdata($row){
	$this->Madmin->hapuspegawai($row);
	$this->Madmin->hapususer($row);
	$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-times-circle"></i> Data berhasil dihapus
								</div>');
	redirect('kepala/data_pegawai_c');

}

public function form_ubah($row)
	{
		$this->Msecurity->getsecurity();
		$isi['content']='kepala/ubah_pegawai';
		$isi['sidebar']='kepala/sidebar/data_pegawai_aktif';
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id JOIN tb_user on tb_pegawai.nip=tb_user.username where nip='$row'");
		$isi['data1']=$this->Madmin->pilihjabatan();
		$isi['data2']=$this->Madmin->pilihgolongan();
		$this->load->view('kepala/home_kepala',$isi);
	}

	public function ubahdata()
	{
		$id=$this->input->post('id');
		$data= array(
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
            'pensiun'=>'Tidak',
            
			);
		$this->Madmin->ubahpegawai($data,$id);

$id=$this->input->post('id');
		$dt= array(
		'username'=>$this->input->post('nip'),
		'password'=>$this->input->post('psw'),
		'level'=>'3'

			);
		$this->Madmin->ubahuser($dt,$id);
		$this->session->set_flashdata('info', '<div class="alert alert-warning alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Data berhasil diubah
									</div>');
		redirect('kepala/data_pegawai_c');
	}
}