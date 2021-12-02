<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-auto mr-auto">
            <h2 class=""><?= $title ?></h2>
        </div>
        <div class="col-auto ml-3">
            <a href="http://" class="btn btn-success pull-right" data-toggle="modal" data-target="#exampleModal">
                <span class="glyphicon glyphicon-upload"></span> Tambah Calon</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <?php foreach ($data as $row): ?>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-default">
                    <center>
                        <div class="card shadow-sm p-2 mb-5">
                            <img class="card-img-top" src="<?= base_url('assets/img/calon/') . $row['foto'] ?>"
                                 style="height: 200px;">
                            <div class="card-body">
                                <h6 class="card-title"><?= $row['ketua'] . ' - ' . $row['wakil']; ?></h6>
                                <p class="card-text"><?php
                                    if ($row['organisasi'] == 'BEMU') {
                                        echo $row['organisasi'];
                                    } elseif ($row['organisasi'] == 'BEMF') {
                                        echo $row['organisasi'] . ' - ' . $row['fakultasketua'];
                                    } elseif ($row['organisasi'] == 'JPMIPA') {
                                        echo $row['organisasi'];
                                    } else {
                                        echo $row['organisasi'] . ' - ' . $row['prodiketua'];;
                                    }
                                    ?></p>

                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url('admin/detailCalon/') . $row['id']; ?>"
                                   class="btn btn-info btn-sm">Detail</a>
                                <a href="<?= base_url('admin/editCalon/') . $row['id']; ?>"
                                   class="btn btn-primary btn-sm">Edit</a>
                                <a href="<?= base_url('admin/hapusCalon/') . $row['id']; ?>" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Are you sure you want to delete <?= $row['ketua'] . ' - ' . $row['wakil']; ?>?');">Hapus</a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        <?php endforeach ?>
        
    </div>
                                    <br>
</div>
</div>
<!-- /.container-fluid -->


<!-- End of Main Content -->




<!-- Modal Start -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Calon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <a href="<?= base_url('admin/addCalonPresiden'); ?>" class="btn btn-secondary btn-user btn-block"> Tambah Calon Presiden</a>
                </div>
                <div class="form-group">
                    <a href="<?= base_url('admin/addCalonGubernur'); ?>" class="btn btn-secondary btn-user btn-block"> Tambah Calon Gubernur</a>
                </div>
                <div class="form-group">
                    <a href="<?= base_url('admin/addCalonHM'); ?>" class="btn btn-secondary btn-user btn-block"> Tambah Calon Himpunan</a>
                </div>
                <div class="form-group">
                    <a href="<?= base_url('admin/addCalonJPMIPA'); ?>" class="btn btn-secondary btn-user btn-block"> Tambah Calon JPMIPA</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
