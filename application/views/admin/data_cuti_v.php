<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pegawai Cuti</h1>
            
          </div>
<!-- DataTales Example -->



<!-- /.container-fluid -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<!--isi form-->
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
             <th>Jenis Cuti</th>
            <th>Dari</th>
            <th>Sampai</th>
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
            <td><?php echo $row->jns_cuti;?></td>
            <td><?php echo $row->dari;?></td>
            <td><?php echo $row->sampai;?></td>
            
            <td align="center">
             <a ><button data-toggle="modal" data-target="#lihatData<?php echo $no;?>" type="button" class="btn btn-success btn-md"><span class="fa fa-eye"></span></button></a>
                                    
            </td>
        </tr>
        
        <?php } ?>
    
    </tbody>
</table>
<br>

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