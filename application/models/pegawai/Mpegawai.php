<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpegawai extends CI_Model {

	public function tambah_k_jabatan($data){
$this->db->insert('peng_jabatan',$data);
		return true;	
	}

	public function delete_k_jabatan($user)
		{
		$this->db->where('nip_peg',$user);
		$this->db->where('log','1');
		return $this->db->delete('peng_jabatan');
		
    }

    public function tambah_cuti($data){
$this->db->insert('peng_cuti',$data);
		return true;	
	}

	public function delete_cuti($user)
		{
		$this->db->where('nip_peg',$user);
		$this->db->where('log','1');
		return $this->db->delete('peng_cuti');
		
    }
    public function tambah_pensiun($data){
$this->db->insert('peng_pensiun',$data);
		return true;	
	}

	public function delete_pensiun($user)
		{
		$this->db->where('nip_peg',$user);
		$this->db->where('log','1');
		return $this->db->delete('peng_pensiun');
		
    }

    public function cek_status_cuti($username)
    {
    	$where="nip_peg='$username' and log='1' or log='2'";
    	$this->db->where($where);
    	$query=$this->db->get('peng_cuti');
		if($query->num_rows()>0)
		{
			if ($query->num_rows()>0){
			foreach ($query->result() as $row){
				$sess = array ('nip_peg'=>$row->nip_peg, 'status'=>$row->status ,'log'=>$row->log);
			}
				$this->session->set_userdata($sess);
				if ($row->log=='1'){
					redirect('pegawai/status_cuti_c');
				}
				elseif ($row->log=='2'){
					redirect('pegawai/status_cuti_c/cuti_disetujui');

				}
				
			}
		}
		else
		 {
		redirect('pegawai/status_cuti_c');
    }
}

    public function cek_status_jabatan($username)
    {

    	$where="nip_peg='$username' and log='1' or log='2'";
    	$this->db->where($where);
    	$query=$this->db->get('peng_jabatan');
		if($query->num_rows()>0)
		{
			if ($query->num_rows()>0){
			foreach ($query->result() as $row){
				$sess = array ('nip_peg'=>$row->nip_peg, 'status'=>$row->status ,'log'=>$row->log);
			}
				$this->session->set_userdata($sess);
				if ($row->log=='1'){
					redirect('pegawai/status_jabatan_c');
				}
				elseif ($row->log=='2'){
					redirect('pegawai/status_jabatan_c/jabatan_disetujui');

				}
				
			}
		}
		else
		 {
		redirect('pegawai/status_jabatan_c');
    }
    	
    }

    public function cek_status_pensiun($username)
    {
    	$where="nip_peg='$username' and log='1' or log='2'";
    	$this->db->where($where);
    	$query=$this->db->get('peng_pensiun');
		if($query->num_rows()>0)
		{
			if ($query->num_rows()>0){
			foreach ($query->result() as $row){
				$sess = array ('nip_peg'=>$row->nip_peg, 'status'=>$row->status ,'log'=>$row->log);
			}
				$this->session->set_userdata($sess);
				if ($row->log=='1'){
					redirect('pegawai/status_pensiun_c');
				}
				elseif ($row->log=='2'){
					redirect('pegawai/status_pensiun_c/pensiun_disetujui');

				}
				
			}
		}
		else
		 {
		redirect('pegawai/status_pensiun_c');
    }
    	
    }

    public function update_log_jabatan($username){
    	$this->db->set('log', '0');
    	$where="nip_peg='$username' and log='2'";
		$this->db->where($where);
		$this->db->update('peng_jabatan');
		return true;
    }

    public function update_log_pensiun($username){
    	$this->db->set('log', '0');
    	$where="nip_peg='$username' and log='2'";
		$this->db->where($where);
		$this->db->update('peng_pensiun');
		return true;
    }

    public function cuti_selesai($tanggal){
    	$this->db->set('log', '0');
    	$where="sampai<'$tanggal' and log='2'";
		$this->db->where($where);
		$this->db->update('peng_cuti');
		return true;
    }
}