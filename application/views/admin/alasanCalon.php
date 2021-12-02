<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card-body">
        <div class="row">
            <div class="col-auto mr-auto">
                <h2 class=""><?= $title ?></h2>
            </div>
        </div>

        <hr>
        <?= $this->session->flashdata('message'); ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="tabelku" width="100%">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>NAMA</th>
                        <th>ALASAN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td>
                            <?php $query = "SELECT nama FROM user WHERE id = ".$row['idUser'];
                            $users = $this->db->query($query)->result();
                            // var_dump($users);die;
                            echo($users[0]->nama); ?></td>
                            <td><?php echo $row['alasan']; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php if($jenis == 'presiden'): ?>
        <a href="<?= base_url('admin/screeningpresiden'); ?>" class="btn btn-secondary btn-user"> Kembali</a>

        <?php elseif($jenis == 'gubernur'): ?>
        <a href="<?= base_url('admin/screeninggubernur'); ?>" class="btn btn-secondary btn-user"> Kembali</a>

        <?php elseif($jenis == 'himpunan'): ?>
        <a href="<?= base_url('admin/screeninghimpunan'); ?>" class="btn btn-secondary btn-user"> Kembali</a>

        <?php endif ?>

    </div>
</div>
<!-- /.container-fluid -->

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