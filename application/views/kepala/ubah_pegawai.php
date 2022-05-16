
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Pegawai</h1>
            
          </div>

<!-- DataTales Example -->
<div class="row">

<div class="col-lg-6">
<div class="card shadow mb-4">

 <?php  $y=2;
     foreach ($data->result_array() as $baris) { ?>
<div class="card-body">
 <div class="form-body">
 	<form action="<?php echo site_url('kepala/data_pegawai_c/ubahdata')?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">NIP/NIDP</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="nip" placeholder="Masukan NIP/NIDP" class="form-control" value="<?php echo $baris['nip'];?>">
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Nama Pegawai</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="nm_pegawai" placeholder="Masukan Nama Pegawai" class="form-control" value="<?php echo $baris['nm_pegawai'];?>" required="" >
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Jabatan</label></strong>
                    <div class="col-md-12">
                    <select name="plh_jabatan" class="form-control m-bot15" required="" >
                    <option  value="<?php echo $baris['jabatan'];?>"><?php echo $baris['nm_jabatan'];?></option>
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
                    <select name="plh_golongan" class="form-control m-bot15">
                   <option  value="<?php echo $baris['golongan'];?>"><?php echo $baris['nm_gol'];?></option>
                     <option  value="">Tidak Ada</option>
                    <?php foreach ($data2 as $row) { ?>
                    <option value="<?php echo $row->id;?>"><?php echo $row->nm_gol;?></option>
                    <?php }?>
                    </select>
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Password Akun</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="psw" placeholder="Masukan Nama Pegawai" class="form-control" value="<?php echo $baris['password'];?>" required="" >
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Gaji</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="gaji" placeholder="Masukan gaji" class="form-control" value="<?php echo $baris['gaji'];?>" required="" >
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Jenis Kelamin</label></strong>
                    <div class="col-md-12">
                    <select name="jekel" class="form-control m-bot15" required="" >
                    <option value="<?php echo $baris['jekel'];?>"><?php echo $baris['jekel'];?></option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                    </select>
                    </div>
                    </div>
                    </div>

					<div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5" required="" >Tanggal Masuk</label></strong>
                    <div class="col-md-12">
                    <input type="date" name="tgl_masuk" placeholder="Tanggal Masuk" class="form-control" value="<?php echo $baris['tgl_masuk'];?>">
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
                    <strong><label class="control-label col-md-5">Tanggal Lahir</label></strong>
                    <div class="col-md-12">
                    <input type="date" name="tgl_lahir"  class="form-control" value="<?php echo $baris['tgl_lahir'];?>" required="" >
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Tempat Lahir</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="tmpt_lhr" placeholder="Masukan Tempat Lahir" class="form-control" value="<?php echo $baris['tmpt_lahir'];?>" required="" >
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Email</label></strong>
                    <div class="col-md-12">
                    <input type="email" name="email" placeholder="Masukan email" class="form-control" value="<?php echo $baris['email'];?>" required="" >
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Nomor HP</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="no_hp" placeholder="Masukan no. HP" class="form-control" value="<?php echo $baris['no_hp'];?>" required="" >
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Alamat</label></strong>
                    <div class="col-md-12">
                    <textarea type="text" name="alamat" placeholder="Masukan alamat" class="form-control" value="<?php echo $baris['alamat'];?>" required="" ></textarea> 
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Pendidikan Terakhir</label></strong>
                    <div class="col-md-12">
                    <select name="plh_jekel" class="form-control m-bot15" required="" >
                    <option  value="<?php echo $baris['pendidikan'];?>"><?php echo $baris['pendidikan'];?></option>
                    <option  value="S3">S3</option>
                    <option  value="S2">S2</option>
                    <option  value="S1">S1</option>
                    <option  value="D3">D3</option>
                    <option  value="SMA">SMA</option>
                    </select>
                    </div>
                    </div>
                    </div>
                     
<input type="hidden" name="id" value="<?php echo $baris['nip'];?>"></input>
<div class="form-body" align="right">
	<div class="form-group">
<button class="btn btn-primary btn-md" type="submit"><span class="fa fa-save" ></span> Simpan</button>
</div>
</div>

	</div>
</div>
</div>
</div>
<?php $y++; }?>