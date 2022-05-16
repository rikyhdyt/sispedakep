<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Pengajuan Cuti</h1>
            
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
        	<th>No. </th>
            <th>NIP/NIDP</th>
            <th>Nama</th>
            <th>Jenis Cuti</th>
            <th>Dari</th>
            <th>Sampai</th>
              <th>Tanggal diajukan</th>
              <th>Dokumen</th>
            
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
             <td><?php echo $row->jns_cuti;?></td>
               <td><?php echo $row->dari;?></td>
                 <td><?php echo $row->sampai;?></td>
            <td><?php echo $row->tgl_ajukan;?> </td>
             <td><a href="<?php echo site_url().'/kepala/acc_cuti/download/'.$row->id; ?>"><?php echo $row->syarat;?> </a></td>
          
         
             <td>
             	<a href="#" data-toggle="modal" data-target="#accPengajuan<?php echo $no;?>" class="btn btn-success btn-md">ACC</a>
            
            <a href="#" data-toggle="modal" data-target="#tolakModal<?php echo $no;?>" class="btn btn-danger btn-md">Tolak</a></td>

           
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
<div class="modal fade" id="accPengajuan<?php echo $y;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menerima pengajuan ini ?</h5>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
          <form class="form-horizontal" action="<?php echo site_url('kepala/acc_cuti/terima_cuti')?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">Tekan "Terima" untuk menerima pengajuan</div>
         <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nip" value="<?php echo $row['nip_peg'];?>">
          <input type="hidden" name="jns_cuti" value="<?php echo $row['jns_cuti'];?>">
          <input type="hidden" name="dari" value="<?php echo $row['dari'];?>">
          <input type="hidden" name="sampai" value="<?php echo $row['sampai'];?>">
          <input type="hidden" name="syarat" value="<?php echo $row['syarat'];?>">
          <input type="hidden" name="tgl_ajukan" value="<?php echo $row['tgl_ajukan'];?>">
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
           <button class="btn btn-success" type="submit">Terima</button>
        </div>
      </div>
    </div>
</form>
  </div>
 <?php $y++; }?>


  <?php  $z=2;
     foreach ($data1->result_array() as $row) { ?>
<div class="modal fade" id="tolakModal<?php echo $z;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menolak pengajuan ini ?</h5>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
          <form class="form-horizontal" action="<?php echo site_url('kepala/acc_cuti/tolak_cuti')?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">Tekan "Terima" untuk menolak pengajuan</div>
         <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nip" value="<?php echo $row['nip_peg'];?>">
          <input type="hidden" name="jns_cuti" value="<?php echo $row['jns_cuti'];?>">
          <input type="hidden" name="dari" value="<?php echo $row['dari'];?>">
          <input type="hidden" name="sampai" value="<?php echo $row['sampai'];?>">
          <input type="hidden" name="syarat" value="<?php echo $row['syarat'];?>">
          <input type="hidden" name="tgl_ajukan" value="<?php echo $row['tgl_ajukan'];?>">
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
           <button class="btn btn-danger" type="submit">Tolak</button>
        </div>
      </div>
    </div>
</form>
  </div>
 <?php $z++; }?>
