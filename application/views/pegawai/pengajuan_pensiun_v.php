<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pengajuan Pensiun</h1>
            
          </div>
<!-- DataTales Example -->



<!-- /.container-fluid -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-body">
    <h5><?php echo $this->session->flashdata('info');?></h5>

<div class="form-body">
                    <div class="form-group">
                      <form action="<?php echo site_url('pegawai/pengajuan_c/ajukanPensiun')?>" method="post" enctype="multipart/form-data" role="form">
                    <strong><label class="control-label col-md-5">Jenis Pensiun</label></strong>
                    <div class="col-md-12">
                    <select name="jenis" class="form-control m-bot15" required="">
                    <option  value="">--Pilih--</option>
                    <option  value="BUP">BUP-Batas Usia Pensiun</option>
                    <option  value="ATS">APS-Atas Permintaan Sendiri</option>
                    
                    </select>
                    </div>
                    </div>
                    </div>

<div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Alasan</label></strong>
                    <div class="col-md-12">
                    <textarea type="input" name="alasan" placeholder="Jelaskan alasan Anda mengajukan pensiun" class="form-control" required=""></textarea> 
                    </div>
                    </div>
                    </div>

<div class="form-body" align="right">
<button class="btn btn-primary btn-md" type="submit"><span class="fa fa-save" ></span> Simpan</button>
</div>
</form>
</div>
</div>



