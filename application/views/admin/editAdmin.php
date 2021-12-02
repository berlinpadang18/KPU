<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg-6">

            <?php echo form_open_multipart('admin/editAdmin/' . $admin[0]['id']); ?>

            <div class="form-group">
                <label for="name" class="col-sm-2 col-form-label">Username</label>
                <input type="text" class="form-control" id="name" name="username" value="<?= $admin[0]['user'] ?>">
                <?= form_error('name', '<small class="text-danger pl-2">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" class="form-control" id="current_password" name="current_password">
                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="new_password1">New Password</label>
                <input type="password" class="form-control" id="password1" name="password1">
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="new_password2">Repeat Password</label>
                <input type="password" class="form-control" id="password2" name="password2">
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block"> Simpan  </button>
            <a href="<?= base_url('admin/admin'); ?>" class="btn btn-secondary btn-user btn-block"> Kembali</a>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->