<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Profil</h1>
            
          </div>
<!-- DataTales Example -->



<!-- /.container-fluid -->

<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="card-body">
<h5><div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-check-circle"></i> Harap isi data dengan lengkap dan pastikan data benar
                  </div></h5>
<strong>NIP/NIDP</strong>  : <?= $data['nip']?> 
 <hr class="sidebar-divider">
 <strong>Nama</strong>  : <?= $data['nm_pegawai']?>
 <hr class="sidebar-divider">
 <strong>Jabatan</strong>  : <?= $data['nm_jabatan']?> - <?= $data['pns']?>
 <hr class="sidebar-divider">
 <strong>Golongan</strong>  : <?= $data['nm_gol']?>
 <hr class="sidebar-divider">
 <strong>Gaji</strong>  : Rp. <?= $data['gaji']?>
        <hr class="sidebar-divider">
        <strong>Jenis Kelamin</strong>  : <?= $data['jekel']?>
        <hr class="sidebar-divider">
        <strong>Tanggal Masuk</strong>  : <?= $data['tgl_masuk']?>
        <hr class="sidebar-divider">
        <strong>Tempat Lahir</strong>  : <?= $data['tmpt_lahir']?>
        <hr class="sidebar-divider">
          <strong>Tanggal Lahir</strong>  : <?= $data['tgl_lahir']?>
        <hr class="sidebar-divider">
        <strong>email</strong>  : <?= $data['email']?>
        <hr class="sidebar-divider">
        <strong>Nomor HP</strong>  : <?= $data['no_hp']?>
        <hr class="sidebar-divider">
        <strong>Alamat</strong>  : <?= $data['alamat']?>
      <hr class="sidebar-divider">
        <strong>Pendidikan</strong>  : <?= $data['pendidikan']?>
         <hr class="sidebar-divider">
        
         	<a href="<?php echo site_url('pegawai/home_pegawai_c/form_ubah')?>" class="btn btn-primary btn-lg"><span "></span> Ubah Data </a>
         
         
</div>
</div>