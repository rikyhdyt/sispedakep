<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_c extends CI_Controller {

	public function index()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pegawai/pengajuan_v';
		$isi['sidebar']='pegawai/sidebar/pengajuan_aktif';
		$user=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id where nip=$user ")->row_array();
		$this->load->view('pegawai/home_pegawai_v',$isi);
	}


	public function form_cuti()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pegawai/pengajuan_cuti_v';
		$isi['sidebar']='pegawai/sidebar/pengajuan_aktif';
		$user=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id where nip=$user ")->row_array();
		$this->load->view('pegawai/home_pegawai_v',$isi);
	}

	public function form_cuti_disetujui()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pegawai/pengajuan_cuti_v';
		$isi['sidebar']='pegawai/sidebar/pengajuan_aktif';
		$user=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id where nip=$user ")->row_array();
		$this->load->view('pegawai/home_pegawai_v',$isi);
	}

	public function form_naikjabat()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pegawai/pengajuan_jabatan_v';
		$isi['sidebar']='pegawai/sidebar/pengajuan_aktif';
		$user=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id where nip=$user ")->row_array();
		$this->load->view('pegawai/home_pegawai_v',$isi);
	}

	public function form_pensiun()
	{
		$this->Msecurity->getsecurity();
		$isi['content']='pegawai/pengajuan_pensiun_v';
		$isi['sidebar']='pegawai/sidebar/pengajuan_aktif';
		$user=$this->session->userdata('username');
		$isi['data']=$this->db->query("SELECT * from tb_pegawai JOIN tb_jabatan on tb_pegawai.jabatan=tb_jabatan.id join tb_golongan on tb_pegawai.golongan=tb_golongan.id where nip=$user ")->row_array();
		$this->load->view('pegawai/home_pegawai_v',$isi);
	}

	public function ajukanJabatan()
	{ 

		$file_sk = $_FILES['file_sk'];
		if ($file_sk =''){}
			else{
			$config['upload_path'] ='./dokumen';
			$config['allowed_types'] = 'pdf|doc|docx';
			$config['max_size']     = '1024';
			$this->load->library('upload', $config);
			if( ! $this->upload->do_upload('file_sk')){
			if( ! $this->upload->do_upload('syarat')){
			$this->session->set_flashdata('notif', 'Ukuran file yang anda unggah terlalu besar');
			redirect('pegawai/pengajuan_c/form_naikjabat');  
			}else{
				$file_sk=$this->upload->data('file_name');
			}
		}

		$user=$this->session->userdata('username');
		$tanggal=date('Y-m-d');
		
		$data= array(
			'nip_peg'=>$user,
			'status'=>'Belum ditinjau',
			'log'=>'1',
			'file_sk'=>$file_sk,
            'alasan'=>$this->input->post('alasan'),
            'tgl_ajukan'=>$tanggal,
       

			);
		$this->Mpegawai->delete_k_jabatan($user, $data);
		$this->Mpegawai->tambah_k_jabatan($data);

		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Permintaan kenaikan jabatan berhasil diajukan
									</div>');
		redirect('pegawai/pengajuan_c/form_naikjabat'); 
	}}

	public function ajukanCuti(){

		$syarat= $_FILES['syarat'];
		if ($syarat=''){}
			else{
			$config['upload_path'] ='./dokumen';
			$config['allowed_types'] = 'pdf|doc|docx';
			$config['max_size']     = '1024';
			$this->load->library('upload', $config);
			if( ! $this->upload->do_upload('syarat')){
			$this->session->set_flashdata('notif', 'Ukuran file yang anda unggah terlalu besar');
			redirect('pegawai/pengajuan_c/form_cuti');  
			}else{
				$syarat=$this->upload->data('file_name');
			}
		}

		$user=$this->session->userdata('username');
		$tanggal=date('Y-m-d');
		
		$data= array(
			'nip_peg'=>$user,
			'status'=>'Belum ditinjau',
			'log'=>'1',
			'syarat'=>$syarat,
			'jns_cuti'=>$this->input->post('jns_cuti'),
            'dari'=>$this->input->post('dari'),
            'sampai'=>$this->input->post('sampai'),
            'tgl_ajukan'=>$tanggal,
			);
		$this->Mpegawai->delete_cuti($user, $data);
		$this->Mpegawai->tambah_cuti($data);

		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Pengajuan cuti berhasil diajukan
									</div>');
		redirect('pegawai/pengajuan_c/form_cuti'); 


	}

	public function ajukanPensiun(){

		$user=$this->session->userdata('username');
		$tanggal=date('Y-m-d');
		
		$data= array(
			'nip_peg'=>$user,
			'status'=>'Belum ditinjau',
			'log'=>'1',
			'jenis'=>$this->input->post('jenis'),
			'alasan'=>$this->input->post('alasan'),
            'tgl_ajukan'=>$tanggal,
			);
		$this->Mpegawai->delete_pensiun($user, $data);
		$this->Mpegawai->tambah_pensiun($data);

		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Pengajuan cuti pensiun
									</div>');
		redirect('pegawai/pengajuan_c/form_pensiun'); 


	}

	

	
    
}