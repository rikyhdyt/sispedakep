<!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('kepala/kepala_home_c')?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Master
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Data Pegawai</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilihan:</h6>
            <a class="collapse-item active" href="<?php echo site_url('kepala/data_pegawai_c')?>">Pegawai Aktif</a>
            <a class="collapse-item" href="<?php echo site_url('kepala/data_cuti_c')?>">Cuti</a>
            <a class="collapse-item" href="<?php echo site_url('kepala/data_pensiun_c')?>">Pensiun</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Lainnya</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilihan:</h6>
            <a class="collapse-item" href="<?php echo site_url('kepala/data_jabatan_c')?>">Daftar Jabatan</a>
            <a class="collapse-item" href="<?php echo site_url('kepala/data_golongan_c')?>">Daftar Golongan</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Riwayat Pengajuan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pengajuan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilihan:</h6>
            <a class="collapse-item" href="<?php echo site_url('kepala/data_pengajuan_c/riwayat_cuti')?>">Cuti</a>
            <a class="collapse-item" href="<?php echo site_url('kepala/data_pengajuan_c/riwayat_pensiun')?>">Pensiun</a>
            <a class="collapse-item" href="<?php echo site_url('kepala/data_pengajuan_c/riwayat_jabatan')?>">Kenaikan Jabatan</a>
          
           
          </div>
        </div>
      </li>
 <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Daftar Pengajuan Aktif
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSide" aria-expanded="true" aria-controls="collapseSide">
          <i class="fas fa-fw fa-check-square"></i>
          <span>Pengajuan Aktif</span>
        </a>
        <div id="collapseSide" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilihan:</h6>
            <a class="collapse-item" href="<?php echo site_url('kepala/acc_cuti')?>">Cuti</a>
            <a class="collapse-item" href="<?php echo site_url('kepala/acc_pensiun')?>">Pensiun</a>
            <a class="collapse-item" href="<?php echo site_url('kepala/acc_jabatan')?>">Kenaikan Jabatan</a>
          
           
          </div>
        </div>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->