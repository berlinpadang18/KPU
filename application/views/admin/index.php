<?php
?>
<!-- Theme style -->
  <script src="<?= base_url('assets/') ?>css/sb-admin-2.min.css"></script>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary bg- shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $valid->valid; ?></div>
                    <br>
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mahasiswa yang sudah memilih</div>
                    </div>
                    <div class="col-auto">
                    <br>
                      <i class="fas fa-users fa-3x text-gray-500"></i>
                    </div>
                  </div>
                  <br>
                </div>
                <a href="<?php echo base_url('admin/ValidMahasiswa'); ?>" class="card-footer bg-primary font-weight-bold shadow-md text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $invalid->invalid; ?></div>
                    <br>
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Mahasiswa yang belum memilih</div>
                    </div>
                    <div class="col-auto">
                    <br>
                      <i class="fas fa-danger fa-4x text-gray-500"></i>
                    </div>
                  </div>
                  <br>
                </div>
                <a href="<?php echo base_url('admin/inValidMahasiswa'); ?>" class="card-footer bg-danger text-white font-weight-bold shadow-md">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->
