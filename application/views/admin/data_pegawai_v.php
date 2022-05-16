
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pegawai</h1>
            
          </div>
<!-- DataTales Example -->



<!-- /.container-fluid -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<!--isi form-->
 <a href="<?php echo site_url('admin/data_pegawai_c/form_tambah')?>" class="btn btn-primary btn-md">Tambah Data</a>
  <a href="<?php echo site_url('admin/data_pegawai_c/cetak_laporan')?>" class="btn btn-success btn-md" target="_blank target"> Cetak Laporan</a>
<h6 class="m-0 font-weight-bold text-primary"></h6>


</div>
<div class="card-body">
<h5><?php echo $this->session->flashdata('info');?></h5>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

    <thead>
        <tr>
            <th>No</th>
            <th>NIP/NIDP</th>
            <th>Nama</th>
            <th>Jabatan</th>
              <th>PNS</th>
            <th>Golongan</th>
            <th>Aksi</th>
            </tr>
    </thead>
    <tbody>
        <tr>  
        <?php
            $no = 1;
            foreach ($data->result() as $row){
                ?>  
            <td><?php echo $no++;?></td>
            <td><?php echo $row->nip;?></td>
            <td><?php echo $row->nm_pegawai;?></td>
            <td><?php echo $row->nm_jabatan;?></td>
            <td><?php echo $row->pns;?></td>
            <td><?php echo $row->nm_gol;?></td>
            
            <td align="center">
             <a ><button data-toggle="modal" data-target="#lihatData<?php echo $no;?>" type="button" class="btn btn-info btn-md"><span class="fa fa-eye"></span></button></a>
             
             <a href="<?php echo site_url('admin/data_pegawai_c/form_ubah/').$row->nip;?>" type="button" class="btn btn-warning btn-md"><span class="fa fa-edit"></span></a>
            
            <a href="#" data-toggle="modal" data-target="#hapusModal" class="btn btn-danger btn-md"><span class="fa fa-trash"></span></a>
            
                                     
            </td>
        </tr>
        
        <?php } ?>
    
    </tbody>
</table>
<br>


</div>
</div>
</div>

<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin Menghapus Data Ini?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Tekan "Hapus" untuk menghapus data</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="<?php echo site_url('admin/data_pegawai_c/hapusdata/').$row->nip;?>">Hapus</a>
        </div>
      </div>
    </div>
  </div>

<?php  $y=2;
     foreach ($data->result_array() as $row) { ?>
  <div class="modal fade" id="lihatData<?php echo $y;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rincian Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"><strong>NIP</strong> : <?php echo $row['nip'];?>
        <br>
        <strong>Nama</strong>  : <?php echo $row['nm_pegawai'];?>
        <br>
        <strong>Jabatan</strong>  : <?php echo $row['nm_jabatan'];?>
        <br>
        <strong>Password Akun</strong>  : <?php echo $row['password'];?>
        <br>
        <strong>Golongan</strong>  : <?php echo $row['nm_gol'];?>
        <br>
        <strong>Gaji</strong>  : Rp. <?php echo $row['gaji'];?>
        <br>
        <strong>Jenis Kelamin</strong>  : <?php echo $row['jekel'];?>
        <br>
        <strong>Tanggal Masuk</strong>  : <?php echo $row['tgl_masuk'];?>
        <br>
        <strong>Tempat Lahir</strong>  : <?php echo $row['tmpt_lahir'];?>
        <br>
        <strong>email</strong>  : <?php echo $row['email'];?>
        <br>
        <strong>Nomor HP</strong>  : <?php echo $row['no_hp'];?>
        <br>
        <strong>Alamat</strong>  : <?php echo $row['alamat'];?>
        <br>
        <strong>Pendidikan</strong>  : <?php echo $row['pendidikan'];?>
        </div>
         
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
    
        </div>
      </div>
    </div>
  </div>

<?php $y++; }?>

