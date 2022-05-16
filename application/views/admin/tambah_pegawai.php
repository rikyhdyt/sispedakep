
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Pegawai</h1>
            
          </div>

<!-- DataTales Example -->
<div class="row">

<div class="col-lg-6">
<div class="card shadow mb-4">

 
<div class="card-body">
 <div class="form-body">
 	<form action="<?php echo site_url('admin/data_pegawai_c/tambahdata')?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">NIP/NIDP</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="nip" placeholder="Masukan NIP/NIDP" class="form-control" maxlength="18">
                     <?= form_error('nip','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Nama Pegawai</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="nm_pegawai" placeholder="Masukan Nama Pegawai" class="form-control" required="">
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Jabatan</label></strong>
                    <div class="col-md-12">
                    <select name="plh_jabatan" class="form-control m-bot15" required="">
                    <option  value="">--Pilih Jabatan--</option>
                    <?php foreach ($data1 as $row) { ?>
                    <option value="<?php echo $row->id;?>"><?php echo $row->nm_jabatan;?></option>
                    <?php }?>
                    </select>
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Golongan</label></strong>
                    <div class="col-md-12">
                    <select name="plh_golongan" class="form-control m-bot15" required="">
                    <option  value="">--Pilih Golongan--</option>
                     <option  value="">Tidak Ada</option>
                    <?php foreach ($data2 as $row) { ?>
                    <option value="<?php echo $row->id;?>"><?php echo $row->nm_gol;?></option>
                    <?php }?>
                    </select>
                    </div>
                    </div>
                    </div>

                    


</div>
</div>
</div>

<div class="col-lg-6">
<div class="card shadow mb-4">

 
<div class="card-body">
<div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Gaji</label></strong>
                    <div class="col-md-12">
                    <input type="number" name="gaji" placeholder="Masukan gaji" class="form-control" required="">
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Jenis Kelamin</label></strong>
                    <div class="col-md-12">
                    <select name="plh_jekel" class="form-control m-bot15" required="">
                    <option  value="">--Pilih Jenis Kelamin--</option>
                    <option  value="L">Laki-laki</option>
                    <option  value="P">Perempuan</option>
                    </select>
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Tanggal Masuk</label></strong>
                    <div class="col-md-12">
                    <input type="date" name="tgl_masuk" placeholder="Tanggal Masuk" class="form-control" required="">
                    </div>
                    </div>
                    </div>

<input type="hidden" name="psw" value="<?php  
 $string="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-";  
 echo substr(str_shuffle($string),0,12);  
 ?>  "></input>
                     

<br>
<div class="form-body" align="right">
	<div class="form-group">
<button class="btn btn-primary btn-md" type="submit"><span class="fa fa-save" ></span> Simpan</button>
</div>
</div>

	</div>
</div>
</div>
</div>