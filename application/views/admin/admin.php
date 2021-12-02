<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card-body">
        <div class="row">
            <div class="col-auto mr-auto">
                <h2 class=""><?= $title ?></h2>
            </div>
            <?php if ($user['role'] == 5): ?>
                <div class="col-auto ml-3">
                    <a href="http://" class="btn btn-success pull-right" data-toggle="modal" data-target="#exampleModal">
                        <span class="glyphicon glyphicon-upload"></span> Tambah
                        Admin</a>
                </div>
            <?php endif; ?>
        </div>
        <hr>

        <?= $this->session->flashdata('message'); ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="tabelku" width="100%">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>USERNAME</th>
                        <th>NAMA</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $row) : ?>
                        <?php if ($row['role'] != 5): ?>
                            <tr>
                                <td class="text-center"><?= $i ?></td>
                                <td><?php echo $row['user']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <?php if ($user['role'] == 5): ?>
                                    <td>
                                        <a href="<?php echo base_url(); ?>admin/editAdmin/<?= $row['id']; ?>"
                                           class="badge badge-success ">Edit</a>
                                        <a href="<?php echo base_url(); ?>admin/deleteAdmin/<?= $row['id']; ?>"
                                           class="badge badge-danger"
                                           onclick="return confirm('Are you sure you want to delete <?= $row['id']; ?>?');">Delete</a>
                                    </td>
                                <?php else: ?>
                                    <td></td>
                                <?php endif; ?>
                            </tr>

                            <?php $i++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal Start -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?php echo base_url("admin/tambahAdmin") ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp"
                               placeholder="Enter nama">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                               aria-describedby="emailHelp" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                               aria-describedby="emailHelp" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="mail">Mail</label>
                        <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp"
                               placeholder="Enter mail">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal End -->

</div>
<!-- End of Main Content -->

<script type="text/javascript">
    $(document).ready(function () {
        $('#tabelku').dataTable({
            "scrollY": "400px",
            "scrollCollapse": true,
            "paging": true,
            "bAutoWidth": false,
            "bInfo": false,
            "language": {
                "emptyTable": "Data Kosong"
            },
            "lengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
        });
    });
</script>