<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_login extends CI_model {

	public function ambillogin($username,$pass)
	{
		
		$this->db->where('username',$username);
		$this->db->where('password',$pass);
		$query = $this->db->get('tb_user');
		if($query->num_rows()>0)
		{
			if ($query->num_rows()>0){
			foreach ($query->result() as $row){
				$sess = array ('username'=>$row->username, 'password'=>$row->password, 'level'=>$row->level);
			}
				$this->session->set_userdata($sess);
				if ($row->level=='1'){
					redirect('kepala/kepala_home_c');
				}
				
				elseif ($row->level=='2'){
					redirect('admin/admin_home');

				}
				elseif ($row->level=='3'){
					redirect('pegawai/home_pegawai_c');

				}
				
			}
		}
		else
		 {
		 	$this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Nama Pengguna atau Kata Sandi yang dimasukan salah !
									</div>');
		redirect('login');
		}

		 }
	}