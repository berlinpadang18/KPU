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
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>PRODI</th>
                        <th>FAKULTAS</th>
                        <th>VOTE PRES</th>
                        <th>VOTE BEMF</th>
                        <th>VOTE HM</th>
                        <th>VOTE JPMIPA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dataValid as $row) : ?>
                        <tr>
                            <td class="text-center"><?= $i ?></td>
                            <td><?php echo $row['nim']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['prodi']; ?></td>
                            <td><?php echo $row['fakultas']; ?></td>
                            
                            
                            <?php if ($row['status'] != 1): ?>
                                <td class="text-center"><a href="javascript:void(0)" class="btn btn-success btn-circle btn-md">
                                <i class="fas fa-check"></i>
                                </a></td>
                            <?php else: ?>
                                <td class="text-center"><a href="javascript:void(0)" class="btn btn-danger btn-circle btn-md">
                                <i class="fas fa-exclamation-triangle"></i>
                                </a></td>
                            <?php endif; ?>

                            <?php if ($row['statusBEMF'] != 1): ?>
                                <td class="text-center"><a href="javascript:void(0)" class="btn btn-success btn-circle btn-md">
                                <i class="fas fa-check"></i>
                                </a></td>
                            <?php else: ?>
                                <td class="text-center"><a href="javascript:void(0)" class="disabled btn btn-danger btn-circle btn-md">
                                <i class="fas fa-exclamation-triangle"></i>
                                </a></td>
                            <?php endif; ?>

                            <?php if ($row['statusHM'] != 1): ?>
                                <td class="text-center"><a href="javascript:void(0)" class="btn btn-success btn-circle btn-md">
                                <i class="fas fa-check"></i>
                                </a></td>
                            <?php else: ?>
                                <td class="text-center"><a href="javascript:void(0)" class="btn btn-danger btn-circle btn-md">
                                <i class="fas fa-exclamation-triangle"></i>
                                </a></td>
                            <?php endif; ?>

                            <?php if ($row['statusJPMIPA'] != 1): ?>
                                <td class="text-center"><a href="javascript:void(0)" class="btn btn-success btn-circle btn-md">
                                <i class="fas fa-check"></i>
                                </a></td>
                            <?php else: ?>
                                <td class="text-center"><a href="javascript:void(0)" class="btn btn-danger btn-circle btn-md">
                                <i class="fas fa-exclamation-triangle"></i>
                                </a></td>
                            <?php endif; ?>
                            
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


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