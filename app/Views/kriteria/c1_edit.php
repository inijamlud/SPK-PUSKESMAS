<?php echo view('parsial/header'); ?>

<?php echo view('parsial/sidebar'); ?>
<div class="main-content">
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-12 clearfix py-4">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Kriteria Pelayanan (C1)</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li><span>Kriteria</span></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- page title area end -->
    <div class="main-content-inner">
        <!-- sales report area start -->
        <div class="row">

            <!-- map area start -->
            <div class="col-lg-10 mt-5">
                <h4 class="header-title">Edit Kriteria Pelayanan (C1)</h4>
                <?php $i = 0;
                   foreach ($c1 as $p) { ?>
                <form action="/Kriteria/proses_editc1/<?= $p['id_c1'] ?>" method="post">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8 form-group">
                                    <label for="plhc1">Kriteria</label>
                                    <input type="text" name="plhc1" id="plhc1" class="form-control"
                                        value="<?= $p['pilihan_c1'] ?>">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="bc1">Bobot</label>
                                    <input type="text" name="bc1" id="bc1" class="form-control"
                                        value="<?= $p['bobot_c1'] ?>">
                                </div>
                                <div class="col-12 form-group">
                                    <button class="btn text-white sbg1">Submit</button>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



<?php echo view('parsial/footer'); ?>