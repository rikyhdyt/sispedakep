<!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('pegawai/home_pegawai_c')?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Profil</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item ">
        <a class="nav-link " href="<?php echo site_url('pegawai/pengajuan_c')?>"  data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-file"></i>
          <span>Pengajuan</span>
        </a>
        
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Status Pengujan</span>
        </a>
        <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilihan:</h6>
           <a class="collapse-item" href="<?php echo site_url('pegawai/status_cuti_c/cek_cuti')?>">Cuti</a>
            <a class="collapse-item active" href="<?php echo site_url('pegawai/status_jabatan_c/cek_jabatan')?>">Jabatan</a>
            <a class="collapse-item" href="<?php echo site_url('pegawai/status_pensiun_c/cek_pensiun')?>">Pensiun</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      
     

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->