<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>KPU SANATA DHARMA <?= date('Y'); ?>
                <br>Copyright &copy; 2020 </span>
                <br><br><a data-toggle="modal" href="#aboutModal">ABOUT US</a>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('admin/logout') ?>">Logout</a>
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
  <div class="col-sm-7"><a href = "https://www.instagram.com/elstchrts/" target="_blank">Benediktus Rony Agung Kusuma</a><a><br>(089685089047)</a></div>
</div>
<div class="row">
  <div class="col-sm-5"></div>
  <div class="col-sm-7"><a href = "https://www.instagram.com/josepedrofebiannn/" target="_blank">Jose Pedro Febian</a><a><br>(082153263842)</a></div>
</div>
<div class="row">
  <div class="col-sm-5">Back-End Developer :</div>
  <div class="col-sm-7"><a href = "https://www.instagram.com/samlekomcan/" target="_blank">M. Ikhsan Abimanyu</a><a><br>(082340092048)</a></div>
</div>
<div class="row">
  <div class="col-sm-5"></div>
  <div class="col-sm-7"><a href = "https://www.instagram.com/ucokdai18/" target="_blank">Berlin Ravelino Hugo Padang</a><a><br>(081247964129)</a></div>
</div>
</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="<?= base_url('assets/') ?>js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>