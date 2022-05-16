<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pengajuan Kenaikan Jabatan</h1>
            
          </div>
<!-- DataTales Example -->



<!-- /.container-fluid -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-body">
    <h5><?php echo $this->session->flashdata('info');?></h5>
<div class="form-body">
                    <div class="form-group">
                         <form action="<?php echo site_url('pegawai/pengajuan_c/ajukanJabatan')?>" method="post" enctype="multipart/form-data" role="form">
                    <strong><label class="control-label col-md-5">Alasan</label></strong>
                    <div class="col-md-12">
                    <textarea type="text" name="alasan" placeholder="Jelaskan alasan Anda mengiginkan kenaikan jabatan" class="form-control" required=""></textarea> 
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-7">SK Golongan</label></strong>
                    <div class="col-md-12">
                    <input type="file" name="file_sk" id="file_sk" class="form-control" accept=".doc,.pdf,.docx" required="" >
                     <small><font color="red">*Ukuran Maksimal : 1 MB<br><?php echo $this->session->flashdata('notif');?></font></small>
                   
                    </div>
                    </div>
                    </div>

<div class="form-body" align="right">
<button class="btn btn-primary btn-md" type="submit"><span class="fa fa-save" ></span> Simpan</button>
</div>
</form>
</div>
</div>



