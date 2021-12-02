<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <hr>
    <div class="row">
        <div class="col-lg-6">
        <?= $this->session->flashdata('message'); ?>
            <div class="form-group row">
                <label for="nim" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim" value="<?= $user['user'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'] ?>" readonly>
                    <?= form_error('nama', '<small class="text-danger pl-2">', '</small>') ?>
                </div>
            </div>
            <div>
            <a href="<?= base_url('admin/changePassword') ?>" class="btn btn-primary">Change Password</a>
            <?php if($user['role'] == 5): ?>
            <a href="<?= base_url('admin/changeName/').$user['id'] ?>" class="btn btn-success">Change Name</a>

            <?php endif; ?>
            </div>


        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->