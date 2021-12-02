<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <hr>
    <div class="row">
        <div class="col-lg-6">
            <?php echo form_open_multipart('user/kadidat'); ?>

            <div class="form-group row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim" value="<?= $kadidat[0]['nim'] ?>"
                           readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $kadidat[0]['nama'] ?>"
                           readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nowa" class="col-sm-2 col-form-label">nowa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nowa" name="nowa" value="<?= $kadidat[0]['nowa'] ?>">
                    <?= form_error('nowa', '<small class="text-danger pl-2">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $kadidat[0]['email'] ?>">
                    <?= form_error('email', '<small class="text-danger pl-2">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prodi" name="prodi" value="<?= $kadidat[0]['prodi'] ?>"
                           readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fakultas" name="fakultas"
                           value="<?= $kadidat[0]['fakultas'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="visi" class="col-sm-2 col-form-label">Visi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="visi"
                              name="visi"><?= $kadidat[0]['visi'] ?></textarea>
                              <?= form_error('visi', '<small class="text-danger pl-2">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="misi" class="col-sm-2 col-form-label">Misi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="misi" name="misi"
                              row="5"><?= $kadidat[0]['misi'] ?></textarea>
                              <?= form_error('misi', '<small class="text-danger pl-2">', '</small>') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" id="image" name="image" class="form-control" onchange="loadFile1(event)">
                <img src="<?= base_url('assets/img/kandidat/') . $kadidat[0]['foto'] ?>" id="output1"
                     class="img-responsive" style="height: 300px;">
                <p style="text-justify">Ukuran Foto 3x4, dengan format JPG. Ukuran file Pasfoto
                    tidak boleh lebih
                    dari 500 KB. Kualitas gambar harus cukup tajam dan fokus. Posisi badan dan
                    kepala tegak sejajar menghadap kamera. Proporsi wajah antara 25% - 50% dari
                    foto. Tidak ada bagian kepala yang terpotong dan wajah tidak boleh tertutupi
                    ornamen. Kepala terletak di tengah secara horisontal (jarak kepala ke batas kiri
                    kurang lebih sama dengan jarak kepala ke batas kanan)</p>
            </div>
            <div>
                <button type="submit" class="btn btn-primary block">Edit</button>
            </div>

            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->