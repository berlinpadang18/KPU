<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <hr>
    <?php if($user['prodi'] == "Farmasi" | $user['fakultas'] == "Sains dan Teknologi" | $user['fakultas'] == "Ekonomi" | $user['fakultas'] == "Sastra" |  $user['prodi'] == "Sejarah" |  $user['prodi'] == "psikologi"): ?>
    <center>
        <h1>Pemilihan Calon BEM Universitas</h1>
    </center>
    <br>
    <div class="row">
        <?php foreach ($data as $row): ?>
            <?php if ($row['organisasi'] == 'BEMU'): ?>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-default">
                        <center>
                            <div class="card shadow-sm p-2 mb-5">
                                <img class="card-img-top " src="<?= base_url('assets/img/calon/') . $row['foto'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['ketua'] . ' - ' . $row['wakil']; ?></h5>
                                    <p class="card-text"><?= $row['organisasi']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="modal" href="#detail<?= $row['id']; ?>" class="btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-info-sign"></span> Visi dan Misi
                                    </a>
                                    <?php if ($user['status'] == 1): ?>
                                        <a href="#" class=" btn btn-primary btn-sm" onclick="validate('<?=  $row['ketua']; ?> - <?=  $row['wakil']; ?>')"
                                           value="<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-info-sign"></span>
                                            Pilih </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
    <?php else: ?>
    <center>
        <h1>Pemilihan Calon BEM Universitas</h1>
    </center>
    <br>
    <div class="row">
        <?php foreach ($data as $row): ?>
            <?php if ($row['organisasi'] == 'BEMU'): ?>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-default">
                        <center>
                            <div class="card shadow-sm p-2 mb-5">
                                <img class="card-img-top " src="<?= base_url('assets/img/calon/') . $row['foto'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['ketua'] . ' - ' . $row['wakil']; ?></h5>
                                    <p class="card-text"><?= $row['organisasi']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="modal" href="#detail<?= $row['id']; ?>" class="btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-info-sign"></span> Visi dan Misi
                                    </a>
                                    <?php if ($user['status'] == 1): ?>
                                        <a href="#" class="btn btn-primary btn-sm" onclick="validate('<?=  $row['ketua']; ?> - <?=  $row['wakil']; ?>')"
                                           value="<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-info-sign"></span>
                                            Pilih </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
    <?php endif ?>
    
    <?php if( $user['prodi'] == "Farmasi" | $user['fakultas'] == "Sains dan Teknologi" | $user['prodi'] == "Sejarah" | $user['fakultas'] == "Ekonomi" | $user['fakultas'] == "Sastra" |  $user['prodi'] == "psikologi") : ?>
    <hr>
    <center>
        <h1>Pemilihan Calon BEM Fakultas : <?= $user['fakultas'] ?></h1>
    </center>
    <br>
    <div class="row">
        <?php foreach ($bemf as $row): ?>
            <?php if ($row['organisasi'] == 'BEMF'): ?>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-default">
                        <center>
                        <div class="card shadow-sm p-2 mb-5">
                                <img class="card-img-top" src="<?= base_url('assets/img/calon/') . $row['foto'] ?>"
                                     style="height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['ketua'] . ' - ' . $row['wakil']; ?></h5>
                                    <p class="card-text"><?= $row['organisasi']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="modal" href="#detail<?= $row['id']; ?>" class="btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-info-sign"></span> Visi dan Misi
                                    </a>
                                    <?php if ($user['statusBEMF'] == 1): ?>
                                        <a href="#" class=" btn btn-primary btn-sm" onclick="validate('<?=  $row['ketua']; ?> - <?=  $row['wakil']; ?>')"
                                           value="<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-info-sign"></span>
                                            Pilih </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
    <?php else: ?>
    <center>
        <h1>Pemilihan Calon BEM Fakultas : <?= $user['fakultas'] ?></h1>
    </center>
    <br>
    <div class="row">
        <?php foreach ($bemf as $row): ?>
            <?php if ($row['organisasi'] == 'BEMF'): ?>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-default">
                        <center>
                        <div class="card shadow-sm p-2 mb-5">
                                <img class="card-img-top" src="<?= base_url('assets/img/calon/') . $row['foto'] ?>"
                                     style="height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['ketua'] . ' - ' . $row['wakil']; ?></h5>
                                    <p class="card-text"><?= $row['organisasi']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="modal" href="#detail<?= $row['id']; ?>" class="btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-info-sign"></span> Visi dan Misi
                                    </a>
                                    <?php if ($user['statusBEMF'] == 1): ?>
                                        <a href="#" class=" btn btn-primary btn-sm" onclick="validate('<?=  $row['ketua']; ?> - <?=  $row['wakil']; ?>')"
                                           value="<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-info-sign"></span>
                                            Pilih </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
    <?php endif ?>
    <hr>

    <?php 
    if ($user['prodi'] == "Farmasi"):
    ?>
    <center>
        <h1>Pemilihan Calon DPMF : <?= $user['prodi'] ?></h1>
    </center>
    <br>
    <div class="row">
        <?php foreach ($hm as $row): ?>
            <?php if ($row['organisasi'] == 'HM'): ?>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-default">
                        <center>
                        <div class="card shadow-sm p-2 mb-5">
                                <img class="card-img-top" src="<?= base_url('assets/img/calon/') . $row['foto'] ?>"
                                     style="height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['ketua'] . ' - ' . $row['wakil']; ?></h5>
                                    <p class="card-text"><?= $row['organisasi']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="modal" href="#detail<?= $row['id']; ?>" class="btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-info-sign"></span> Visi dan Misi
                                    </a>
                                    <?php if ($user['statusHM'] == 1): ?>
                                        <a href="#" class="  btn btn-primary btn-sm" onclick="validate('<?=  $row['ketua']; ?> - <?=  $row['wakil']; ?>')"
                                           value="<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-info-sign"></span>
                                            Pilih </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
    <?php elseif( $user['prodi'] == "Psikologi"): ?>
    <center>
        <h1>Pemilihan Calon DPMF : <?= $user['prodi'] ?></h1>
    </center>
    <br>
    <div class="row">
        <?php foreach ($hm as $row): ?>
            <?php if ($row['organisasi'] == 'HM'): ?>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-default">
                        <center>
                        <div class="card shadow-sm p-2 mb-5">
                                <img class="card-img-top" src="<?= base_url('assets/img/calon/') . $row['foto'] ?>"
                                     style="height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['ketua'] . ' - ' . $row['wakil']; ?></h5>
                                    <p class="card-text"><?= $row['organisasi']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="modal" href="#detail<?= $row['id']; ?>" class="btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-info-sign"></span> Visi dan Misi
                                    </a>
                                    <?php if ($user['statusHM'] == 1): ?>
                                        <a href="#" class="  btn btn-primary btn-sm" onclick="validate('<?=  $row['ketua']; ?> - <?=  $row['wakil']; ?>')"
                                           value="<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-info-sign"></span>
                                            Pilih </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
    <?php elseif( $user['prodi'] == "Teknik Mesin"): ?>
        <center>
        <h1>Pemilihan Calon Ketua Keluarga Mahasiswa Teknik Mesin</h1>
    </center>
    <br>
    <div class="row">
        <?php foreach ($hm as $row): ?>
            <?php if ($row['organisasi'] == 'HM'): ?>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-default">
                        <center>
                        <div class="card shadow-sm p-3 mb-5">
                                <img class="card-img-top" src="<?= base_url('assets/img/calon/') . $row['foto'] ?>"
                                     style="height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['ketua'] . ' - ' . $row['wakil']; ?></h5>
                                    <p class="card-text"><?= $row['organisasi']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="modal" href="#detail<?= $row['id']; ?>" class="btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-info-sign"></span> Visi dan Misi
                                    </a>
                                    <?php if ($user['statusHM'] == 1): ?>
                                        <a href="#" class=" btn btn-primary btn-sm" onclick="validate('<?=  $row['ketua']; ?> - <?=  $row['wakil']; ?>')"
                                           value="<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-info-sign"></span>
                                            Pilih </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
<hr>
<?php elseif ($user['fakultas'] == "Sains dan Teknologi" | $user['prodi'] == "Sejarah" | $user['fakultas'] == "Ekonomi" | $user['fakultas'] == "Sastra" |  $user['prodi'] == "psikologi"): ?>
<center>
        <h1>Pemilihan Calon Himpunan Program Studi : <?= $user['prodi'] ?></h1>
    </center>
    <br>
    <div class="row">
        <?php foreach ($hm as $row): ?>
            <?php if ($row['organisasi'] == 'HM'): ?>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-default">
                        <center>
                        <div class="card shadow-sm p-3 mb-5">
                                <img class="card-img-top" src="<?= base_url('assets/img/calon/') . $row['foto'] ?>"
                                     style="height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['ketua'] . ' - ' . $row['wakil']; ?></h5>
                                    <p class="card-text"><?= $row['organisasi']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="modal" href="#detail<?= $row['id']; ?>" class=" btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-info-sign"></span> Visi dan Misi
                                    </a>
                                    <?php if ($user['statusHM'] == 1): ?>
                                        <a href="#" class=" btn btn-primary btn-sm" onclick="validate('<?=  $row['ketua']; ?> - <?=  $row['wakil']; ?>')"
                                           value="<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-info-sign"></span>
                                            Pilih </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
    <?php else: ?>
    <center>
        <h1>Pemilihan Calon Himpunan Program Studi : <?= $user['prodi'] ?></h1>
    </center>
    <br>
    <div class="row">
        <?php foreach ($hm as $row): ?>
            <?php if ($row['organisasi'] == 'HM'): ?>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-default">
                        <center>
                        <div class="card shadow-sm p-3 mb-5">
                                <img class="card-img-top" src="<?= base_url('assets/img/calon/') . $row['foto'] ?>"
                                     style="height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['ketua'] . ' - ' . $row['wakil']; ?></h5>
                                    <p class="card-text"><?= $row['organisasi']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="modal" href="#detail<?= $row['id']; ?>" class="btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-info-sign"></span> Visi dan Misi
                                    </a>
                                    <?php if ($user['statusHM'] == 1): ?>
                                        <a href="#" class=" btn btn-primary btn-sm" onclick="validate('<?=  $row['ketua']; ?> - <?=  $row['wakil']; ?>')"
                                           value="<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-info-sign"></span>
                                            Pilih </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
<hr>
    <?php endif; ?>

    <?php 

    if ($user['prodi'] == "Pendidikan Matematika" | $user['prodi'] == "Pendidikan Kimia" | $user['prodi'] == "Pendidikan Biologi" | $user['prodi'] == "Pendidikan Fisika" ): ?>
 
    <center>
        <h1>Pemilihan Calon Himpunan : JPMIPA</h1>
    </center>
    <br>
    <div class="row">
        <?php foreach ($jpmipa as $row): ?>
            <?php if ($row['organisasi'] == 'JPMIPA'): ?>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="panel panel-default">
                        <center>
                        <div class="card shadow-sm p-2 mb-5">
                                <img class="card-img-top" src="<?= base_url('assets/img/calon/') . $row['foto'] ?>"
                                     style="height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['ketua'] . ' - ' . $row['wakil']; ?></h5>
                                    <p class="card-text"><?= $row['organisasi']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="modal" href="#detail<?= $row['id']; ?>" class="btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-info-sign"></span> Visi dan Misi
                                    </a>
                                    <?php if ($user['statusJPMIPA'] == 1): ?>
                                        <a href="#" class=" btn btn-primary btn-sm" onclick="validate('<?=  $row['ketua']; ?> - <?=  $row['wakil']; ?>')"
                                           value="<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-info-sign"></span>
                                            Pilih </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
    <?php else: ?>
    
    <?php endif; ?>
    <br>
</div>




<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script src="<?php echo base_url() ?>assets/js/sweetalert.min.js"></script>
<script>
                                            function validate(a) {
                                                
                                            var id = a;
                                                swal({
                                                    title: "Apa anda yakin?",
                                                    text: "Memilih " + id,
                                                    type: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonColor: "#DD6B55",
                                                    confirmButtonText: "Yakin",
                                                    closeOnConfirm: false
                                                }, function () {
                                                    swal("Berhasil Memilih", "Terimakasih Sudah Berpastisipasi.", "success");
                                                    $(location).attr('href', '<?php echo base_url() ?>user/pilihBEMU/' + id);
                                                });
                                            }
</script>

<!-- BEMU -->
<?php foreach ($data as $row): ?>
    <?php if ($row['organisasi'] == 'BEMU'): ?>
        <!-- Visi dan Misi -->
        <div class="modal fade" id="detail<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Visi dan Misi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table>
                            <tr>
                                <td>Nama Calon</td>
                                <td>&nbsp;</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td><?= $row['ketua'] . ' - ' . $row['wakil']; ?></td>
                            </tr>
                            <tr>
                                <td>Fakultas</td>
                                <td>&nbsp;</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td><?= $row['fakultasketua'] . ' - ' . $row['fakultaswakil']; ?></td>
                            </tr>
                            <tr>
                                <td>Organisasi</td>
                                <td>&nbsp;</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td><?= $row['organisasi']; ?></td>
                            </tr>
                        </table><br>
                        <b>VISI :</b>
                        <div><?= $row['visi']; ?></div>
                        <b>MISI :</b>
                        <div><?= $row['misi']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
<?php endforeach ?>
<!-- END BEMU -->

<!-- BEMF -->
<?php foreach ($bemf as $row): ?>
    <?php if ($row['organisasi'] == 'BEMF'): ?>
        <!-- Visi dan Misi -->
        <div class="modal fade" id="detail<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Visi dan Misi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table>
                            <tr>
                                <td>Nama Calon</td>
                                <td>&nbsp;</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td><?= $row['ketua'] . ' - ' . $row['wakil']; ?></td>
                            </tr>
                            <tr>
                                <td>Fakultas</td>
                                <td>&nbsp;</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td><?= $row['fakultasketua'] . ' - ' . $row['fakultaswakil']; ?></td>
                            </tr>
                            <tr>
                                <td>Organisasi</td>
                                <td>&nbsp;</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td><?= $row['organisasi']; ?></td>
                            </tr>
                        </table><br>
                        <b>VISI :</b>
                        <div><?= $row['visi']; ?></div>
                        <b>MISI :</b>
                        <div><?= $row['misi']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
<?php endforeach ?>
<!-- END BEMF -->

<!-- HM -->
<?php foreach ($hm as $row): ?>
    <?php if ($row['organisasi'] == 'HM' ): ?>
        <!-- Visi dan Misi -->
        <div class="modal fade" id="detail<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Visi dan Misi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table>
                            <tr>
                                <td>Nama Calon</td>
                                <td>&nbsp;</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td><?= $row['ketua'] . ' - ' . $row['wakil']; ?></td>
                            </tr>
                            <tr>
                                <td>Fakultas</td>
                                <td>&nbsp;</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td><?= $row['fakultasketua'] . ' - ' . $row['fakultaswakil']; ?></td>
                            </tr>
                            <tr>
                                <td>Organisasi</td>
                                <td>&nbsp;</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td><?= $row['organisasi']; ?></td>
                            </tr>
                        </table><br>
                        <b>VISI :</b>
                        <div><?= $row['visi']; ?></div>
                        <b>MISI :</b>
                        <div><?= $row['misi']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
<?php endforeach ?>

<?php foreach ($jpmipa as $row): ?>
    <?php if ($row['organisasi'] == 'JPMIPA' ): ?>
        <!-- Visi dan Misi -->
        <div class="modal fade" id="detail<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Visi dan Misi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table>
                            <tr>
                                <td>Nama Calon</td>
                                <td>&nbsp;</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td><?= $row['ketua'] . ' - ' . $row['wakil']; ?></td>
                            </tr>
                            <tr>
                                <td>Fakultas</td>
                                <td>&nbsp;</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td><?= $row['prodiketua'] . ' - ' . $row['prodiwakil']; ?></td>
                            </tr>
                            <tr>
                                <td>Organisasi</td>
                                <td>&nbsp;</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td><?= $row['organisasi']; ?></td>
                            </tr>
                        </table><br>
                        <b>VISI :</b>
                        <div><?= $row['visi']; ?></div>
                        <b>MISI :</b>
                        <div><?= $row['misi']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
<?php endforeach ?>
<!-- END HM -->