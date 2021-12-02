<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <hr>
    <div class="row">
     <?php
    $presiden = $this->db->query("SELECT * FROM presiden WHERE idUser LIKE " . $user['id'] . " ")->num_rows();
    $gubernur = $this->db->query("SELECT * FROM gubernur WHERE idUser LIKE " . $user['id'] . " ")->num_rows();
    $himpunan = $this->db->query("SELECT * FROM himpunan WHERE idUser LIKE " . $user['id'] . " ")->num_rows();
    if ($presiden == 0) : ?>
    <div class="col">
    <div class="card" style="width: 18rem;">
       <div class="card-body">
            <center>
            <h5 class="card-title">SCREENING PRESIDEN</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?= base_url('user/screeningpresiden') ?>" class="btn btn-primary btn-user btn-block">Presiden</a>       
         </center>
        </div>
    </div>
    </div>
    <?php endif ?>

    <?php if ($gubernur == 0) : ?>
    <div class="col">
    <div class="card" style="width: 18rem;">
       <div class="card-body">
            <center>
            <h5 class="card-title">SCREENING GUBERNUR</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?= base_url('user/screeninggubernur') ?>" class="btn btn-primary btn-user btn-block">Gubernur</a>     
         </center>
        </div>
    </div>
    </div>
        
    <?php endif ?>

    <?php if ($himpunan == 0) : ?>
    <div class="col">
    <div class="card" style="width: 18rem;">
       <div class="card-body">
            <center>
            <h5 class="card-title">SCREENING HIMPUNAN</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="<?= base_url('user/screeninghimpunan') ?>" class="btn btn-primary btn-user btn-block">Himpunan</a>    
         </center>
        </div>
    </div>
    </div>
       
    <?php endif ?>
    <?php if ($himpunan == 1 && $presiden == 1 && $gubernur == 1) : ?>
    <div style="width: 70rem;">
       <div class="card-body">
            <center>
            <h1 class="card-text">Terimakasih atas partisipasinya..</h1>
         </center>
        </div>
    </div>
    <?php endif ?>
    </div>
   
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
