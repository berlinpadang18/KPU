<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
    <div class="sidebar-brand-icon">
          <i class="fas fa-home fa-lg"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN KPU</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Hasil Pemilihan</span></a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
          <div class="bg-white py-9 collapse-inner rounded">

          <div class="collapse-item" >
            <div class="btn-group">
            <a class="btn btn-primary" href="<?= base_url('admin/chartPresiden') ?>">
            Presiden Univ
            </a>
             </div>
             </div>
             <hr class="collapse-divider">
            <h6 class="collapse-header">BEM:</h6>
        
            <!--<a class="collapse-item active" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
            Buttons</a> collapse-item -->
            
            <div class="collapse-item" >
            <div class="btn-group dropright">
            <a class="btn btn-primary"  href="<?= base_url('admin/chartBEMFST') ?>">
            FST
            </a>
           <!--  <div class="dropdown-menu ">
             <a class="dropdown-item" href="#">Action</a>
             <a class="dropdown-item" href="#">Another action</a>
             </div> -->
             </div>
            </div>

            <div class="collapse-item" >
            <div class="btn-group dropright">
            <a class="btn btn-primary"  href="<?= base_url('admin/chartBEMFFarmasi') ?>">
            Fakultas Farmasi
            </a>
             </div>
             </div>

             <div class="collapse-item" >
            <div class="btn-group dropright">
            <a class="btn btn-primary"  href="<?= base_url('admin/chartBEMFPsikologi') ?>">
            Fakultas Psikologi
            </a>
             </div>
             </div>

             <div class="collapse-item" >
            <div class="btn-group dropright">
            <a class="btn btn-primary"  href="<?= base_url('admin/chartBEMFEkonomi') ?>">
            Fakultas Ekonomi
            </a>
             </div>
             </div>
             
             <div class="collapse-item" >
            <div class="btn-group dropright">
            <a class="btn btn-primary"  href="<?= base_url('admin/chartBEMFKIP') ?>">
            FKIP
            </a>
             </div>
             </div>
             
             <div class="collapse-item" >
            <div class="btn-group dropright">
            <a class="btn btn-primary"  href="<?= base_url('admin/chartBEMFTeologi') ?>">
            Fakultas Teologi
            </a>
             </div>
             </div>

             <hr class="collapse-divider">
            <h6 class="collapse-header">DPM:</h6>
        
            <!--<a class="collapse-item active" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
            Buttons</a> collapse-item -->
            
            <div class="collapse-item" >
            <div class="btn-group dropright">
            <a class="btn btn-primary"  href="<?= base_url('admin/chartDPMFarmasi') ?>">
            Fakultas Farmasi
            </a>
           <!--  <div class="dropdown-menu ">
             <a class="dropdown-item" href="#">Action</a>
             <a class="dropdown-item" href="#">Another action</a>
             </div> -->
             </div>
            </div>

            <div class="collapse-item" >
            <div class="btn-group dropright">
            <a class="btn btn-primary"  href="<?= base_url('admin/chartDPMPsikologi') ?>">
            Fakultas Psikologi
            </a>
           <!--  <div class="dropdown-menu ">
             <a class="dropdown-item" href="#">Action</a>
             <a class="dropdown-item" href="#">Another action</a>
             </div> -->
             </div>
            </div>


             <hr class="collapse-divider">
            <h7 class="collapse-header">HIMPUNAN MAHASISWA:</h7>
            <div class="collapse-item" >
            <div class="btn-group dropright">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            FST
            </button>
             <div class="dropdown-menu ">
             <a class="dropdown-item" href="<?= base_url('admin/chartHMInformatika') ?>">Informatika</a>
             <a class="dropdown-item" href="<?= base_url('admin/chartHMTeknikElektro') ?>">Teknik Elektro</a>
             <a class="dropdown-item" href="<?= base_url('admin/chartHMTeknikMesin') ?>">Teknik Mesin</a>
             <a class="dropdown-item" href="<?= base_url('admin/chartHMMatematikaMurni') ?>">Matematika</a>
             </div>
             </div>
            </div>

            <div class="collapse-item" >
            <div class="btn-group dropright">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            FKIP
            </button>
             <div class="dropdown-menu ">
        
             <a class="dropdown-item" href="<?= base_url('admin/chartHMPendEkonomi_Akuntansi') ?>">Pend.Ekonomi & Pend.Akuntansi</a>
                <a class="dropdown-item" href="<?= base_url('admin/chartHMPendMatematika') ?>">Pendidikan Matematika</a>
                <a class="dropdown-item" href="<?= base_url('admin/chartHMPendBiologi') ?>">Pendidikan Biologi</a>
                <a class="dropdown-item" href="<?= base_url('admin/chartHMPendFisika') ?>">Pendidikan Fisika</a>
                <a class="dropdown-item" href="<?= base_url('admin/chartHMHIMKA') ?>">Ilmu Pendidikan Agama Katolik</a>
                <a class="dropdown-item" href="<?= base_url('admin/chartHMPSEJ') ?>">Pendidikan Sejarah</a>
                <a class="dropdown-item" href="<?= base_url('admin/chartHMPBI') ?>">Pendidikan Bahasa Inggris</a>
                <a class="dropdown-item" href="<?= base_url('admin/chartHMPBSI') ?>">Pendidikan Bahasa dan Sastra Indonesia</a>
                <a class="dropdown-item" href="<?= base_url('admin/chartHMPGSD') ?>">Pendidikan Guru Sekolah Dasar</a>
                <a class="dropdown-item" href="<?= base_url('admin/chartHMJPMIPA') ?>">JPMIPA</a>
             </div>
             </div>
            </div>

            <div class="collapse-item" >
            <div class="btn-group dropright">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            SASTRA
            </button>
             <div class="dropdown-menu ">
             <a class="dropdown-item" href="<?= base_url('admin/chartHMSejarah') ?>">Sejarah</a>
             <a class="dropdown-item" href="<?= base_url('admin/chartHMSASING') ?>">Sastra Inggris</a>
             <a class="dropdown-item" href="<?= base_url('admin/chartHMSASINDO') ?>">Sastra Indonesia</a>
             </div>
             </div>
            </div>

            <div class="collapse-item" >
            <div class="btn-group dropright">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            EKONOMI 
            </button>
             <div class="dropdown-menu ">
             <a class="dropdown-item" href="<?= base_url('admin/chartHMEkonomi') ?>">Ekonomi</a>
             <a class="dropdown-item" href="<?= base_url('admin/chartHMAkuntansi') ?>">Akuntansi</a>
             <a class="dropdown-item" href="<?= base_url('admin/chartHMManajemen') ?>">Manajemen</a>
             </div>
             </div>
            </div>

            <!--<a class="collapse-item" href="cards.html">Cards</a> -->
          </div>
        </div>
    </li>
   
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/user') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Mahasiswa</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/admin') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Admin</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kadidat') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Kandidat Terpilih</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/screening') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Screening</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/calon') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Calon</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->