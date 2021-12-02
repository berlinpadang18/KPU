<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <hr>
    <div class="row">
        <div class="col-lg-6">
        <?php echo form_open_multipart('admin/changeName/' . $user['id']); ?>
        
        <?= $this->session->flashdata('message'); ?>
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" value="<?= $user['user'] ?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'] ?>" >
                    <?= form_error('nama', '<small class="text-danger pl-2">', '</small>') ?>
                </div>
            </div>
            <div>
            <button type="submit" class="btn btn-primary" >Change Name</button>
            </div>


        </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->