<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark toggled" id=" accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center text-white">
    <div class="sidebar-brand-icon">
          <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN KPU</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
<!--
/*
    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('user/screening') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Screening</span></a>
    </li>
*/
-->
    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('user') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pemilihan</span></a>
    </li>
    <?php
    $query = "SELECT * FROM dt_kandidat WHERE nim LIKE '" . $user['nim'] . "'";
    if ($this->db->query($query)->num_rows() > 0) :
        ?>
        <li class="nav-item ">
            <a class="nav-link" href="<?= base_url('user/kadidat') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Kandidat</span></a>
        </li>
    <?php endif ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/profile') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/logout') ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> -->

</ul>
<!-- End of Sidebar -->