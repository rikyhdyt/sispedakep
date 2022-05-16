<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_pegawai_c extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pegawai/profil_pegawai';
		$isi['sidebar']='pegawai/sidebar/profil_aktif';
		$user=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id where nip=$user ")->row_array();
		$this->load->view('pegawai/home_pegawai_v',$isi);
		$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Harap isi data dengan lengkap dan pastikan data benar
									</div>');
	}

	public function form_ubah()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pegawai/edit_data';
		$isi['sidebar']='pegawai/sidebar/profil_aktif';
		$user=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id where nip=$user ")->row_array();
		$this->load->view('pegawai/home_pegawai_v',$isi);
	}

	public function ubahdata()
	{
		$id=$this->input->post('nip');
		$data= array(
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
            'pensiun'=>'Tidak'
			);
		$this->Madmin->ubahpegawai($data,$id);
		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Data berhasil diubah
									</div>');
		redirect('pegawai/home_pegawai_c');
	}

	
}
