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
                    <input type="text" class="form-control" id="nim" name="nim" value="<?= $kandidat[0]['nim']; ?>"
                           readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $kandidat[0]['nama']; ?>"
                           readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nowa" class="col-sm-2 col-form-label">nowa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nowa" name="nowa" value="<?= $kandidat[0]['nowa']; ?>"
                           readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email"
                           value="<?= $kandidat[0]['email']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prodi" name="prodi"
                           value="<?= $kandidat[0]['prodi']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fakultas" name="fakultas"
                           value="<?= $kandidat[0]['fakultas']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="visi" class="col-sm-2 col-form-label">Visi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="visi" name="visi"
                              readonly><?= $kandidat[0]['visi']; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="misi" class="col-sm-2 col-form-label">Misi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="misi" name="misi" row="10"
                              readonly><?= $kandidat[0]['misi']; ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <img src="<?= base_url('assets/img/kandidat/') . $kandidat[0]['foto'] ?>" id="output1"
                     class="img-responsive" style="height: 300px;">

            </div>
            <div class="form-group">
                <a href="<?= base_url('admin/kadidat'); ?>" class="btn btn-secondary btn-user btn-block"> Kembali</a>

            </div>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->