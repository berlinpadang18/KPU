<!-- Begin Page Content -->
<div class="container-fluid">
    <?php $fakult = ['Keguruan dan Ilmu Pendidikan']; ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/AddcalonJPMIPA'); ?>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nama">Nama Ketua</label>
                                <input name="nama1" type="text" class="form-control" placeholder="Nama Ketua">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Wakil</label>
                                <input name="nama2" type="text" class="form-control" placeholder="Nama Wakil">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fakultas">Fakultas</label>
                                            <select class="form-control" id="fakultas1" name="fakultas1">
                                                <option>-</option>
                                                <?php foreach ($fakult as $row): ?>
                                                    <option><?= $row ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="row">
                            <div class="col">
                                <label for="prodi">Prodi Ketua</label>
                                <select class="form-control" id="prodi1" name="prodi1">
                                    <option>-</option>
                                    <?php
                                    $sql = $this->db->get('prodi')->result();
                                    foreach ($sql as $row):
                                        ?>
                                        <option value="<?= $row->nama_prodi ?>"><?= $row->nama_prodi ?></option>
                                    <?php endforeach ?>
                                </select>
                                </div>
                                <div class="col">
                                <label for="prodi">Prodi Wakil</label>
                                <select class="form-control" id="prodi2" name="prodi2">
                                    <option>-</option>
                                    <?php
                                    $sql = $this->db->get('prodi')->result();
                                    foreach ($sql as $row):
                                        ?>
                                        <option value="<?= $row->nama_prodi ?>"><?= $row->nama_prodi ?></option>
                                    <?php endforeach ?>
                                </select>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" id="image" name="image" class="form-control"
                                       onchange="loadFile1(event)">
                                <img src="" id="output1" class="img-responsive" style="height: 300px;">
                                <p style="text-justify">Ukuran Foto 3x4, dengan format JPG. Ukuran file Pasfoto
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
                                <textarea name="visi" class="form-control" id="visi" cols="30" rows="10"
                                          placeholder="Visi"></textarea>
                                          <?= form_error('visi', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="misi">Misi</label>
                                <textarea name="misi" class="form-control" id="misi" cols="30" rows="10"
                                          placeholder="Misi"></textarea>
                                          <?= form_error('misi', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/calon'); ?>" class="btn btn-secondary"> Kembali </a>
                    <input type="reset" class="btn btn-warning" value="Reset">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<script>
    $('#fakultas1').change(function () {
        var id = $(this).val();
        prodi(id);
    });

    function prodi(id) {
        $.ajax({
            url: "<?php echo base_url(); ?>admin/prodi",
            method: "POST",
            data: {
                id: id
            },
            async: false,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value="' + data[i].nama_prodi + '">' + data[i].nama_prodi + '</option>';
                }
                html += '<option value="">-</option>';
                $('#prodi').html(html);
            }
        });

    }
</script>