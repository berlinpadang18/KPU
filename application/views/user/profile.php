<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <hr>
    <div class="row">
        <div class="col-lg-6">

            <div class="form-group row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim" value="<?= $user['nim'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'] ?>" readonly>
                    <?= form_error('nama', '<small class="text-danger pl-2">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fakultas" name="fakultas"
                           value="<?= $user['fakultas'] ?>" readonly>
                           <?= form_error('fakultas', '<small class="text-danger pl-2">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prodi" name="prodi" value="<?= $user['prodi'] ?>"
                           readonly>
                           <?= form_error('prodi', '<small class="text-danger pl-2">', '</small>') ?>
                </div>
            </div>
            <div>
                <a href="<?= base_url('user/changepassword') ?>" class="btn btn-primary">Change Password</a>

            </div>


        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->