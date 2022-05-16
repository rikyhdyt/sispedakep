<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Golongan</h1>
            
          </div>
<!-- DataTales Example -->



<!-- /.container-fluid -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
	 <button data-toggle="modal" data-target="#tambah-data" class="btn btn-primary" type="button">Tambah Data</button>
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
            <th>Nama Golongan</th>
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
            <td><?php echo $row->nm_gol;?></td>
            <td align="center">
             <a ><button data-toggle="modal" data-target="#ubahData<?php echo $no;?>" type="button" class="btn btn-warning btn-md"><span class="fa fa-edit"></span></button></a>
                    <a href="#" data-toggle="modal" data-target="#hapusModal" class="btn btn-danger btn-md"><span class="fa fa-trash"></span></a>                
            </td>
        </tr>
        
        <?php } ?>
    
    </tbody>
</table>
<br>
<!--
<td style="width:760px;" rowspan="2"><button type="submit" class="btn btn-success btn-lg" target="_blank"><span class="fa fa-file" ></span> Export Excel</button></td>
<!--</form>-->
</div>
</div>
</div>

<div class="modal fade" id="tambah-data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data golongan</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
  
        <form class="form-horizontal" action="<?php echo site_url('admin/data_golongan_c/tambahgolongan')?>" method="post" enctype="multipart/form-data" role="form">
        
        <div class="modal-body">
        	<div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Nama Golongan</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="nm_gol" placeholder="Masukan Nama Golongan" class="form-control">
                    </div>
                    </div>
                    </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <button class="btn btn-primary" type="submit"> Simpan </button>
        </div>
      </div>
    </div>
  </div>
</form>
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
          <a class="btn btn-primary" href="<?php echo site_url('admin/data_golongan_c/hapusgolongan/').$row->id;?>">Hapus</a>
        </div>
      </div>
    </div>
  </div>


<?php  $y=2;
     foreach ($data->result_array() as $row) { ?>
  <div class="modal fade" id="ubahData<?php echo $y;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Data Golongan</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form class="form-horizontal" action="<?php echo site_url('admin/data_golongan_c/ubahgolongan')?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">
        
        <div class="form-body">
        	<input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Nama Golongan</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="nm_gol" placeholder="Masukan Nama Jabatan" class="form-control" value="<?php echo $row['nm_gol'];?>">
                    </div>
                    </div>
                    </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <button class="btn btn-primary" type="submit"> Simpan </button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
 <?php $y++; }?>