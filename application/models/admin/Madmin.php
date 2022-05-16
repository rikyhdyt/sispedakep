<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

    public function pilihjabatan(){
		$query=$this->db->query('SELECT * FROM tb_jabatan ORDER BY nm_jabatan');
		return $query->result();
	}

	 public function pilihgolongan(){
		$query=$this->db->query('SELECT * FROM tb_golongan');
		return $query->result();
	}
	 public function pilihpegawai(){
		$query=$this->db->query('SELECT * FROM tb_pegawai ');
		return $query->result();
	}

	 public function tambahpegawai($data){
		$this->db->insert('tb_pegawai',$data);
		return true;	
    }

     public function tambahuser($dt){
		$this->db->insert('tb_user',$dt);
		return true;	
    }

    public function hapususer($row)
		{
		$this->db->where('username',$row);
		return $this->db->delete('tb_user');
    }

    public function hapuspegawai($row)
		{
		$this->db->where('nip',$row);
		return $this->db->delete('tb_pegawai');
		
    }
    public function ubahpegawai($data,$id){
		$this->db->where('nip',$id);
		$this->db->update('tb_pegawai',$data);
		return true;
	}
	public function ubahuser($dt,$id){
		$this->db->where('username',$id);
		$this->db->update('tb_user',$dt);
		return true;
	}

	public function tambahjabatan($data){
		$this->db->insert('tb_jabatan',$data);
		return true;	
    }

    public function ubahjabatan($data,$id){
		$this->db->where('id',$id);
		$this->db->update('tb_jabatan',$data);
		return true;
	}

	public function hapusjabatan($row)
		{
		$this->db->where('id',$row);
		return $this->db->delete('tb_jabatan');
		
    }

    public function tambahgolongan($data){
		$this->db->insert('tb_golongan',$data);
		return true;	
    }

    public function ubahgolongan($data,$id){
		$this->db->where('id',$id);
		$this->db->update('tb_golongan',$data);
		return true;
	}

	public function hapusgolongan($row)
		{
		$this->db->where('id',$row);
		return $this->db->delete('tb_golongan');
		
    }

}