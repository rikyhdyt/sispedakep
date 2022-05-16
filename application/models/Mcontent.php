<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcontent extends CI_model {
    
    public function jumlahpegawai(){
        $sql="select count(nip) as id from tb_pegawai where pensiun='Tidak'";
        $q = $this->db->query($sql);
        if ($q->num_rows()>0)
        {
        return $q->row()->id;
        }else{
            return 0;
        }
    }

    public function jumlahcuti(){
        $sql="select count(id) as id from peng_cuti where log='2'";
        $q = $this->db->query($sql);
        if ($q->num_rows()>0)
        {
        return $q->row()->id;
        }else{
            return 0;
        }
    }

    public function jumlahpensiun(){
        $sql="select count(nip) as id from tb_pegawai where pensiun='Pensiun'";
        $q = $this->db->query($sql);
        if ($q->num_rows()>0)
        {
        return $q->row()->id;
        }else{
            return 0;
        }
    }

    public function jumlahriwayatcuti(){
        $sql="select count(id) as id from peng_cuti where log='0'";
        $q = $this->db->query($sql);
        if ($q->num_rows()>0)
        {
        return $q->row()->id;
        }else{
            return 0;
        }
    }

     public function jumlahriwayat_kenaikanjabatan(){
        $sql="select count(id) as id from peng_jabatan where log='0' or log='2'";
        $q = $this->db->query($sql);
        if ($q->num_rows()>0)
        {
        return $q->row()->id;
        }else{
            return 0;
        }
    }

    public function jumlahriwayatpensiun(){
        $sql="select count(id) as id from peng_pensiun where log='0'";
        $q = $this->db->query($sql);
        if ($q->num_rows()>0)
        {
        return $q->row()->id;
        }else{
            return 0;
        }
    }

    public function jumlahcuti_aktif(){
        $sql="select count(id) as id from peng_cuti where log='1'";
        $q = $this->db->query($sql);
        if ($q->num_rows()>0)
        {
        return $q->row()->id;
        }else{
            return 0;
        }
    }

    public function jumlahkenaikanjabatan_aktif(){
        $sql="select count(id) as id from peng_jabatan where log='1'";
        $q = $this->db->query($sql);
        if ($q->num_rows()>0)
        {
        return $q->row()->id;
        }else{
            return 0;
        }
    }

    public function jumlahpensiun_aktif(){
        $sql="select count(id) as id from peng_pensiun where log='1'";
        $q = $this->db->query($sql);
        if ($q->num_rows()>0)
        {
        return $q->row()->id;
        }else{
            return 0;
        }
    }
}