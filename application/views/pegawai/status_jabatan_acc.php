<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Status Pengajuan Kenaikan Jabatan</h1>
            
          </div>
<!-- DataTales Example -->



<!-- /.container-fluid -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
	<div class="btn-group">
	<a href="<?php echo site_url('pegawai/status_jabatan_c/cek_jabatan')?>" class="btn btn-info btn-md">Pengajuan Aktif</a>
	<a href="<?php echo site_url('pegawai/status_jabatan_c/riwayat_k_jabatan')?>" class="btn btn-info btn-md">Riwayat Pengajuan</a>
	</div>
<!--isi form-->
<h6 class="m-0 font-weight-bold text-primary"></h6>
</div>
<div class="card-body">
    <h5><div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-check-circle"></i> Cetak surat untuk menyelesaikan proses pengajuan
                  </div></h5>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

    <thead>
        <tr>
        	
            <th>NIP/NIDP</th>
            <th>Nama</th>
              <th>Tanggal diajukan</th>
            <th>Status</th>
            <th>Cetak</th>
            </tr>
    </thead>
    <tbody>
        <tr> 
         <?php
            $no = 1;
            foreach ($data1->result() as $row){
                ?>   
                 
            <td><?php echo $row->nip;?></td>
            <td><?php echo $row->nm_pegawai;?></td>
            <td><?php echo $row->tgl_ajukan;?> </td>
            <td><?php echo $row->status;?></td>
              <td align="center"><a href="<?php echo site_url('pegawai/status_jabatan_c/cetak_surat_jabatan/');?>" class="btn btn-success btn-md"><span class="fa fa-print"></span></a></td>
           
            
          
        </tr>
        
       <?php } ?>
    </tbody>
</table>
<br>

</div>
</div>
</div>

