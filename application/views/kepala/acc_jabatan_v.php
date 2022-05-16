<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Pengajuan Kenaikan Jabatan</h1>
            
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
            <th>NIP/NIDP</th>
            <th>Nama</th>
            <th>Jabatan Sekarang</th>
            <th> Alasan Pengajuan</th>
            <th>SK Golongan</th>
              <th>Tanggal diajukan</th>
            <th>Status</th>
              <th>Aksi</th>
            </tr>
    </thead>
    <tbody>
        <tr> 
         <?php
            $no = 1;
            foreach ($data->result() as $row){
                ?>   
            <td><?php echo $row->nip;?></td>
            <td><?php echo $row->nm_pegawai;?></td>
             <td><?php echo $row->nm_jabatan;?></td>
               <td><?php echo $row->alasan;?></td>
                 <td><a href="<?php echo site_url().'/kepala/acc_jabatan/download/'.$row->id; ?>"><?php echo $row->file_sk;?> </a></td>
            <td><?php echo $row->tgl_ajukan;?> </td>
            <td><?php echo $row->status;?></td>
 <td>
             	<a href="#" data-toggle="modal" data-target="#accKenaikan<?php echo $no;?>" class="btn btn-success btn-md">ACC</a>
            
            <a href="#" data-toggle="modal" data-target="#tolakKenaikan<?php echo $no;?>" class="btn btn-danger btn-md">Tolak</a></td>
        </tr>
        
       <?php } ?>
    </tbody>
</table>
<br>

</div>
</div>
</div>


<?php  $y=1;
     foreach ($data->result_array() as $row) { ?>
<div class="modal fade" id="tolakKenaikan<?php echo $y;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menolak pengajuan ini ?</h5>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
          <form class="form-horizontal" action="<?php echo site_url('kepala/acc_jabatan/tolak_jabatan')?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">Tekan "Tolak" untuk menolak pengajuan</div>
         <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nip" value="<?php echo $row['nip_peg'];?>">
          <input type="hidden" name="file_sk" value="<?php echo $row['file_sk'];?>">
          <input type="hidden" name="alasan" value="<?php echo $row['alasan'];?>">
          <input type="hidden" name="tgl_ajukan" value="<?php echo $row['tgl_ajukan'];?>">
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
           <button class="btn btn-danger" type="submit">Tolak</button>
        </div>
      </div>
    </div>
</form>
  </div>
 <?php $y++; }?>

 <?php  $z=1;
     foreach ($data->result_array() as $row) { ?>
<div class="modal fade" id="accKenaikan<?php echo $z;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Terima Pengajuan Kenaikan Jabatan ?</h5>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
          <form class="form-horizontal" action="<?php echo site_url('kepala/acc_jabatan/terima_jabatan')?>" method="post" enctype="multipart/form-data" role="form">
      <div class="modal-body">
        	<div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">NIP</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="nip" class="form-control" value="<?php echo $row['nip'];?>" readonly>
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Nama Pegawai</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="nm_pegawai" class="form-control" value="<?php echo $row['nm_pegawai'];?>" readonly>
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Golongan</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="nm_gol" class="form-control" value="<?php echo $row['nm_gol'];?>" readonly>
                    </div>
                    </div>
                    </div>

                     <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Jabatan Sekarang</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="nm_jabatan" class="form-control" value="<?php echo $row['nm_jabatan'];?> - <?php echo $row['pns'];?>" readonly>
                    </div>
                    </div>
                    </div>

                     <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-10">Jabatan yang dipromosikan</label></strong>
                    <div class="col-md-12">
                    <select name="plh_jabatan" class="form-control m-bot15" required="">
                    <option  value="">--Pilih Jabatan--</option>
                    <?php foreach ($data1 as $baris) { ?>
                    <option value="<?php echo $baris->id;?>"><?php echo $baris->nm_jabatan;?> - <?php echo $baris->pns;?></option>
                    <?php }?>
                    </select>
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Gaji Sekarang (Rp)</label></strong>
                    <div class="col-md-12">
                    <input type="text" name="gaji_lama" class="form-control" value="<?php echo $row['gaji'];?>" readonly>
                    </div>
                    </div>
                    </div>

                     <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Gaji Baru</label></strong>
                    <div class="col-md-12">
                    <input type="number" name="gaji" class="form-control" placeholder="Masukan jumlah gaji baru">
                    </div>
                    </div>
                    </div>
         <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          
          <input type="hidden" name="file_sk" value="<?php echo $row['file_sk'];?>">
          <input type="hidden" name="alasan" value="<?php echo $row['alasan'];?>">
          <input type="hidden" name="tgl_ajukan" value="<?php echo $row['tgl_ajukan'];?>">

           <input type="hidden" name="plh_golongan" value="<?php echo $row['golongan'];?>">
           <input type="hidden" name="jekel" value="<?php echo $row['jekel'];?>">
           <input type="hidden" name="tgl_masuk" value="<?php echo $row['tgl_masuk'];?>">
           <input type="hidden" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>">
           <input type="hidden" name="tmpt_lahir" value="<?php echo $row['tmpt_lahir'];?>">
           <input type="hidden" name="email" value="<?php echo $row['email'];?>">
           <input type="hidden" name="no_hp" value="<?php echo $row['no_hp'];?>">
           <input type="hidden" name="alamat" value="<?php echo $row['alamat'];?>">
           <input type="hidden" name="pendidikan" value="<?php echo $row['pendidikan'];?>">
           <input type="hidden" name="pensiun" value="<?php echo $row['pensiun'];?>">

        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
           <button class="btn btn-success" type="submit">Terima</button>
        </div>
      </div>
    </div>
</form>
  </div>
 <?php $y++; }?>