<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pengajuan Cuti</h1>
            
          </div>
<!-- DataTales Example -->



<!-- /.container-fluid -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-body">
    <h5><?php echo $this->session->flashdata('info');?></h5>
<div class="form-body">
                    <div class="form-group">
                      <form action="<?php echo site_url('pegawai/pengajuan_c/ajukanCuti')?>" method="post" enctype="multipart/form-data" role="form">
                    <strong><label class="control-label col-md-5">Jenis Cuti</label></strong>
                    <div class="col-md-12">
                    <select name="jns_cuti" class="form-control m-bot15" required="">
                    <option  value="">--Pilih--</option>
                    <option  value="Cuti hamil/bersalin">Cuti hamil/bersalin</option>
                    <option  value="Cuti sakit">Cuti sakit</option>
                     <option  value="Cuti sakit">Cuti besar</option>
                      <option  value="Cuti sakit">Cuti alasan penting</option>
                       <option  value="Cuti sakit">Cuti diluar tanggungan negara</option>
                        <option  value="Cuti sakit">Cuti tahunan</option>
                    </select>
                    </div>
                    </div>
                    </div>

          <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Dari</label></strong>
                    <div class="col-md-12">
                    <input type="date" name="dari" class="form-control" required="">
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-5">Sampai</label></strong>
                    <div class="col-md-12">
                    <input type="date" name="sampai" class="form-control" required="">
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <strong><label class="control-label col-md-7">Kelengkapan Dokumen <small>(surat izin cuti/surat keterangan dokter)</small></label></strong>
                    <div class="col-md-12">
                    <input type="file" name="syarat" class="form-control" accept=".doc,.pdf,.docx" required="">
                    <small><font color="red">*Ukuran Maksimal : 1 MB<br>*Semua dokumen dimasukan dalam satu file<br><?php echo $this->session->flashdata('notif');?></font></small>
                  
                    </div>
                    </div>
                    </div>

<div class="form-body" align="right">
<button class="btn btn-primary btn-md" type="submit"><span class="fa fa-save" ></span> Simpan</button>
</div>
</form>
</div>
</div>



