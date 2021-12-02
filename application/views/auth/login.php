</style>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<div lang="en" class="container">
    <!-- Outer Row -->

    <!-- Logo -->

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class = "text-center">
                <br>
        <a class = "card-body p-10" href="http://www.usd.ac.id" target="_blank">
                    <img style="height: 70px"  alt="USD" src="<?= base_url('assets/') ?>img/logoUSD.png">
                <a class = "card-body p-10" href="http://www.usd.ac.id/dpmu " target="_blank">
                    <img style="height: 70px;" alt="DPMU" src="<?= base_url('assets/') ?>img/logoDPMU.png">
                <a class = "card-body p-10" href="http://www.instagram.com/kpuusd" target="_blank">
                    <img style="height: 70px;" alt="KPU" src="<?= base_url('assets/') ?>img/logoKPU.png">
        </a>
      
</div>
</div>

<div class ="col-lg-5">
    <div class = "text-center">
        <br>
        <h1 class = "h4 text-white font-weight-bold" style="text-shadow: 5px 5px 5px #000">KOMISI PEMILIHAN UMUM</h1>
        <h1 class = "h4 text-white font-weight-bold" style="text-shadow: 5px 5px 5px #000">UNIVERSITAS SANATA DHARMA</h1>

        

            <div class="card o-hidden border-0 shadow-lg p-3 mb-5 bg-white rounded my-5 ">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>

                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username"
                                               placeholder="NIM" name="username" value="<?= set_value('username') ?>">
                                               <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password"
                                               placeholder="Password" name="password">
                                               <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>

                                </form>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="copyright text-white font-weight-bold" style="text-shadow: 2px 2px 2px #000">
        <span>KPU SANATA DHARMA <?= date('Y'); ?>
                <br>Copyright &copy; <?= date('Y'); ?> </span>
                <br><br><a data-toggle="modal" href="#aboutModal">ABOUT US</a><br>
        </div>
        
        </div>
    </div>
</div>
<div class="modal fade " id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-auto" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ABOUT US</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="row">
  <div class="col-sm-5">Front-End Developer :</div>
  <div class="col-sm-7"><a href = "https://www.instagram.com/elstchrts/" target="_blank">Benediktus Rony Agung Kusuma</a></div>
</div>
<div class="row">
  <div class="col-sm-5"></div>
  <div class="col-sm-7"><a href = "https://www.instagram.com/josepedrofebiannn/" target="_blank">Jose Pedro Febian</a></div>
</div>
<div class="row">
  <div class="col-sm-5">Back-End Developer :</div>
  <div class="col-sm-7"><a href = "https://www.instagram.com/samlekomcan/" target="_blank">M. Ikhsan Abimanyu</a></div>
</div>
<div class="row">
  <div class="col-sm-5"></div>
  <div class="col-sm-7"><a href = "https://www.instagram.com/ucokdai18/" target="_blank">Berlin Ravelino Hugo Padang</a></div>
    </div>
        </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>