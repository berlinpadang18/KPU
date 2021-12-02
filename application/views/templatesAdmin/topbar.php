<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Topbar Logo -->
            <ul class="navbar-nav ml">
                <a class="nav-link" href="http://www.usd.ac.id" target="_blank">
                    <img style="height: 50px" alt="USD" src="<?= base_url('assets/') ?>img/logoUSD.png">
                </a>
                <a class="nav-link" href="http://www.usd.ac.id/dpmu " target="_blank">
                    <img style="height: 50px;" alt="DPMU" src="<?= base_url('assets/') ?>img/logoDPMU.png">
                </a>
                <a class="nav-link box-shadow" href="http://www.instagram.com/kpuusd" target="_blank">
                    <img style="height: 50px;" alt="KPU" src="<?= base_url('assets/') ?>img/logoKPU.png">
                </a>
            </ul>

            <!-- Sidebar Toggle (Topbar) -->
            

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama'] ?></span>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <i class="fas fa-user"></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                         aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('admin/profile'); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->