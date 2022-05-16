<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pengajuan Pensiun</h1>
            
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
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

    <thead>
        <tr>
        	<th>No</th>
            <th>NIP/NIDP</th>
            <th>Nama</th>
             <th>Tanggal Masuk</th>
            <th>Jenis Pensiun</th>
             <th>Alasan</th>
             <th>Tanggal diajukan</th>
            <th>Status</th>
            <th>Aksi</th>
            </tr>
    </thead>
    <tbody>
        <tr> 
         <?php
            $no = 1;
            foreach ($data1->result() as $row){
                ?>   
                 <td><?php echo $no++;?></td>
            <td><?php echo $row->nip;?></td>
            <td><?php echo $row->nm_pegawai;?></td>
             <td><?php echo $row->tgl_masuk;?></td>
              <td><?php echo $row->jenis;?></td>
               <td><?php echo $row->alasan;?></td>
            <td><?php echo $row->tgl_ajukan;?> </td>
            <td><?php echo $row->status;?></td>
<td>
             	<a href="#" data-toggle="modal" data-target="#accPensiun<?php echo $no;?>" class="btn btn-success btn-md">ACC</a>
            
            <a href="#" data-toggle="modal" data-target="#tolakPensiun<?php echo $no;?>" class="btn btn-danger btn-md">Tolak</a></td>
        </tr>
        
       <?php } ?>
    </tbody>
</table>
<br>

</div>
</div>
</div>

<?php  $y=2;
     foreach ($data1->result_array() as $row) { ?>
<div class="modal fade" id="tolakPensiun<?php echo $y;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menolak pengajuan ini ?</h5>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
          <form class="form-horizontal" action="<?php echo site_url('kepala/acc_pensiun/tolak_pensiun')?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">Tekan "Tolak" untuk menolak pengajuan</div>
         <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nip" value="<?php echo $row['nip_peg'];?>">
          <input type="hidden" name="jenis" value="<?php echo $row['jenis'];?>">
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

 <?php  $z=2;
     foreach ($data1->result_array() as $row) { ?>
<div class="modal fade" id="accPensiun<?php echo $z;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menerima pengajuan ini ?</h5>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
          <form class="form-horizontal" action="<?php echo site_url('kepala/acc_pensiun/terima_pensiun')?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">Tekan "Terima" untuk menolak pengajuan</div>
         <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nip" value="<?php echo $row['nip_peg'];?>">
          <input type="hidden" name="jenis" value="<?php echo $row['jenis'];?>">
          <input type="hidden" name="alasan" value="<?php echo $row['alasan'];?>">
          <input type="hidden" name="tgl_ajukan" value="<?php echo $row['tgl_ajukan'];?>">

          <input type="hidden" name="golongan" value="<?php echo $row['golongan'];?>">
           <input type="hidden" name="jekel" value="<?php echo $row['jekel'];?>">
           <input type="hidden" name="tgl_masuk" value="<?php echo $row['tgl_masuk'];?>">
           <input type="hidden" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>">
           <input type="hidden" name="tmpt_lahir" value="<?php echo $row['tmpt_lahir'];?>">
           <input type="hidden" name="email" value="<?php echo $row['email'];?>">
           <input type="hidden" name="no_hp" value="<?php echo $row['no_hp'];?>">
           <input type="hidden" name="alamat" value="<?php echo $row['alamat'];?>">
           <input type="hidden" name="pendidikan" value="<?php echo $row['pendidikan'];?>">
           <input type="hidden" name="nip"  value="<?php echo $row['nip'];?>" >
           <input type="hidden" name="nm_pegawai" value="<?php echo $row['nm_pegawai'];?>" >
           <input type="hidden" name="gaji" value="<?php echo $row['gaji'];?>" >
            <input type="hidden" name="jabatan" value="<?php echo $row['jabatan'];?>" >
        
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
           <button class="btn btn-danger" type="submit">Terima</button>
        </div>
      </div>
    </div>
</form>
  </div>
 <?php $y++; }?>
