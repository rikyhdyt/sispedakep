
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Pegawai</h1>
            
          </div>

<!-- DataTales Example -->
<div class="row">

<div class="col-lg-6">
<div class="card shadow mb-4">

<div class="card-body">
 <div class="form-body">
 	<form action="<?php echo site_url('pegawai/home_pegawai_c/ubahdata')?>" method="post" enctype="multipart/form-data" role="form">
          <input type="hidden" name="id" value="<?= $data['nip']?>"></input>
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">NIP/NIDP</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="nip" placeholder="Masukan NIP/NIDP" class="form-control" value="<?= $data['nip']?>" readonly>
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Nama Pegawai</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="nm_pegawai" placeholder="Masukan Nama Pegawai" class="form-control" value="<?= $data['nm_pegawai']?>" readonly >
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Jabatan</label></strong>
                    <div class="col-md-12">
                    <select name="plh_jabatan" class="form-control m-bot15" readonly>
                    <option  value="<?= $data['jabatan']?>"><?= $data['nm_jabatan']?></option>
                    </select>
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Golongan</label></strong>
                    <div class="col-md-12">
                    <select name="plh_golongan" class="form-control m-bot15" readonly>
                   <option  value="<?= $data['golongan']?>"><?= $data['nm_gol']?></option>
                    </select>
                    </div>
                    </div>
                    </div>


                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Gaji</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="gaji" placeholder="Masukan gaji" class="form-control" value="<?= $data['gaji']?>" readonly >
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Jenis Kelamin</label></strong>
                    <div class="col-md-12">
                    <select name="jekel" class="form-control m-bot15" readonly >
                    <option value="<?= $data['jekel']?>"><?= $data['jekel']?></option>
                    </select>
                    </div>
                    </div>
                    </div>

					<div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5" required="" >Tanggal Masuk</label></strong>
                    <div class="col-md-12">
                    <input type="date" name="tgl_masuk" placeholder="Tanggal Masuk" class="form-control" value="<?= $data['tgl_masuk']?>" readonly>
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
                    <input type="date" name="tgl_lahir"  class="form-control" value="<?= $data['tgl_lahir']?>" required="" >
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Tempat Lahir</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="tmpt_lhr" placeholder="Masukan Tempat Lahir" class="form-control" value="<?= $data['tmpt_lahir']?>" required="" >
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Email</label></strong>
                    <div class="col-md-12">
                    <input type="email" name="email" placeholder="Masukan email" class="form-control" value="<?= $data['email']?>" required="" >
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Nomor HP</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="no_hp" placeholder="Masukan no. HP" class="form-control" value="<?= $data['no_hp']?>" required="" >
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Alamat</label></strong>
                    <div class="col-md-12">
                    <textarea type="text" name="alamat" placeholder="Masukan alamat" class="form-control" required="" ><?= $data['alamat']?></textarea> 
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Pendidikan Terakhir</label></strong>
                    <div class="col-md-12">
                    <select name="pendidikan" class="form-control m-bot15" required="" >
                    <option  value="<?= $data['pendidikan']?>"><?= $data['pendidikan']?></option>
                    <option  value="S3">S3</option>
                    <option  value="S2">S2</option>
                    <option  value="S1">S1</option>
                    <option  value="D3">D3</option>
                    <option  value="SMA">SMA</option>
                    </select>
                    </div>
                    </div>
                    </div>
                     
<input type="hidden" name="id" value=""></input>
<div class="form-body" align="right">
	<div class="form-group">
<button class="btn btn-primary btn-md" type="submit"><span class="fa fa-save" ></span> Simpan</button>
</div>
</div>

	</div>
</div>
</div>
</div>
