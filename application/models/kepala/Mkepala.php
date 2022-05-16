<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkepala extends CI_Model {

	public function acccuti($data,$id){
		$this->db->where('id',$id);
		$this->db->update('peng_cuti',$data);
		return true;
	}

	public function accjabatan_pengajuan($data,$id){
		$this->db->where('id',$id);
		$this->db->update('peng_jabatan',$data);
		return true;
	}

	public function accjabatan_pegawai($dt,$nip){
		$this->db->where('nip',$nip);
		$this->db->update('tb_pegawai',$dt);
		return true;
	}

	public function download_syarat($id){
  $query = $this->db->get_where('peng_cuti',array('id'=>$id));
  return $query->row_array();
 }

 public function download_sk($id){
  $query = $this->db->get_where('peng_jabatan',array('id'=>$id));
  return $query->row_array();
 }

 public function accpensiun($data,$id){
		$this->db->where('id',$id);
		$this->db->update('peng_pensiun',$data);
		return true;
	}
}