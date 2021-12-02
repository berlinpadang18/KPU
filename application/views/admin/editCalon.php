<!-- Begin Page Content -->
<?php //echo($data[0]['fakultaswakil']);die;?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/editCalon/' . $data[0]['id']); ?>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nama">Nama Ketua</label>
                                <input name="nama1" type="text" class="form-control" value="<?= $data[0]['ketua'] ?>"
                                       readonly>
                                       <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Wakil</label>
                                <input name="nama2" type="text" class="form-control" value="<?= $data[0]['wakil'] ?>"
                                       readonly>
                                       <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fakultas">Fakultas Ketua</label>
                                            <select class="form-control" id="fakultas1" name="fakultas1">
                                                <?php foreach ($fakult as $row): ?>
                                                    <?php if ($row->fakultas == $data[0]['fakultasketua']): ?>
                                                        <option selected><?= $row->fakultas ?></option>
                                                    <?php endif ?>
                                                    <option><?= $row->fakultas ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fakultas">Fakultas Wakil</label>
                                            <select class="form-control" id="fakultas2" name="fakultas2">
                                                <?php foreach ($fakult as $row): ?>
                                                    <?php if ($row->fakultas == $data[0]['fakultaswakil']): ?>
                                                        <option selected><?= $row->fakultas ?></option>
                                                    <?php endif ?>
                                                    <option><?= $row->fakultas ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="organisasi">Organisasi</label>
                                <input name="organisasi" type="text" class="form-control"
                                       value="<?= $data[0]['organisasi'] ?>">
                                       <?= form_error('organisasi', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class=" form-group">
                                <label for="foto">Foto</label>
                                <input type="file" id="image" name="image" class="form-control"
                                       onchange="loadFile1(event)" value="<?= $data[0]['foto'] ?>">
                                <img src="<?= base_url('assets/img/calon/') . $data[0]['foto'] ?>" id="output1"
                                     class="img-responsive" style="height: 300px;">
                                <p style="text-justify">Ukuran Foto 3x4, dengan format JPG. Ukuran file foto
                                    tidak boleh lebih
                                    dari 500 KB. Kualitas gambar harus cukup tajam dan fokus. Posisi badan dan
                                    kepala tegak sejajar menghadap kamera. Proporsi wajah antara 25% - 50% dari
                                    foto. Tidak ada bagian kepala yang terpotong dan wajah tidak boleh tertutupi
                                    ornamen. Kepala terletak di tengah secara horisontal (jarak kepala ke batas kiri
                                    kurang lebih sama dengan jarak kepala ke batas kanan)</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="visi">Visi</label>
                                <textarea name="visi" class="form-control" id="visi" cols="30"
                                          rows="10"> <?= $data[0]['visi'] ?></textarea>
                                          <?= form_error('visi', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="misi">Misi</label>
                                <textarea name="misi" class="form-control" id="misi" cols="30"
                                          rows="10"><?= $data[0]['misi'] ?></textarea>
                                          <?= form_error('misi', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/calon'); ?>" class="btn btn-secondary"> Kembali </a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->