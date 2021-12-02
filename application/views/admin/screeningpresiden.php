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
                        <th>FAKULTAS</th>
                        <th>PRODI</th>
                        <th>ANGKATAN</th>
                        <th>DETAIL</th>
                        <th>HASIL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($presiden as $row) : ?>
                    <?php $sql = "SELECT * FROM presiden WHERE nama LIKE '".$row['nama']."'" ;
                        $pre = $this->db->query($sql)->result_array();
                    ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?php echo $pre[0]['nama']; ?></td>
                            <td><?php echo $pre[0]['fakultas']; ?></td>
                            <td><?php echo $pre[0]['prodi']; ?></td>
                            <td><?php echo $pre[0]['angkatan']; ?></td>
                            <td class="text-center"><a href="<?php echo base_url(); ?>admin/alasanCalon?id=<?=$pre[0]['id'];?>&user=presiden"
                                           class="btn btn-success ">Detail</a> </td>
                            <td><?php
                                echo $this->db->query($sql)->num_rows();
                                ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <a href="<?= base_url('admin/screening'); ?>" class="btn btn-secondary btn-user"> Kembali</a>

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