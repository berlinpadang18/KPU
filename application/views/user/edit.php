<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg-6">

            <?php echo form_open_multipart('user/edit'); ?>

            <div class="form-group row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim" value="<?= $user['nim'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['nama'] ?>">
                    <?= form_error('name', '<small class="text-danger pl-2">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fakultas" name="fakultas"
                           value="<?= $user['fakultas'] ?>">
                           <?= form_error('fakultas', '<small class="text-danger pl-2">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prodi" name="prodi" value="<?= $user['prodi'] ?>">
                    <?= form_error('prodi', '<small class="text-danger pl-2">', '</small>') ?>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-auto">
                    <a href="<?= base_url('user/profile'); ?>" class="btn btn-secondary">Back</a>
                </div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->