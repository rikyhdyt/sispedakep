<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Riwayat Pengajuan Pensiun</h1>
            
          </div>
<!-- DataTales Example -->



<!-- /.container-fluid -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<!--isi form-->
<form class="form-horizontal" action="<?php echo site_url('admin/data_pengajuan_c/cetak_pensiun')?>" method="post" enctype="multipart/form-data" role="form">
 
  <div class="row">
                    <div class="form-group">
                    <label class="control-label col-md-5">Dari</label>
                    <div class="col-md-11">
                    <input type="date" name="dari" class="form-control" required="">
                    </div>
                    </div>

                      <div class="form-group">
                    <label class="control-label col-md-10">Sampai</label>
                    <div class="col-md-11">
                    <input type="date" name="sampai" class="form-control" required="">
                    </div>
                    </div>
                   
                     
                    </div>
                    <button type="submit" class="btn btn-success btn-md"><span class="fa fa-print" target="_blank"></span> Cetak Laporan</button>
                  
                    </form>
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

        </tr>
        
       <?php } ?>
    </tbody>
</table>
<br>

</div>
</div>
</div>

