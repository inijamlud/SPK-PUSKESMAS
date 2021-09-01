 <?php echo view('parsial/header'); ?>

 <?php echo view('parsial/sidebar'); ?>
 <div class="main-content">
     <div class="page-title-area">
         <div class="row align-items-center">
             <div class="col-sm-12 clearfix py-4">
                 <div class="breadcrumbs-area clearfix">
                     <h4 class="page-title pull-left">Nilai/Proses SPK</h4>
                     <ul class="breadcrumbs pull-left">
                         <li><a href="<?= base_url() ?>">Home</a></li>
                         <li><span>Nilai/Proses SPK</span></li>
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
                 <?php $i = 0;
                    foreach ($nilai as $p) { ?>
                 <form action="/Proses/proses_edit/<?= $p['id_nilai'] ?>" method="post">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="header-title">Edit Nilai</h4>
                             <div class="row">
                                 <div class="col-6 form-group">
                                     <label for="id_pus">ID Puskesmas </label>
                                     <input type="text" name="id_pus" id="id_pus" class="form-control"
                                         value="<?= $p['id_puskesmas'] ?>">
                                 </div>
                                 <div class="col-6 form-group">
                                     <label for="id_krit">ID Kriteria </label>
                                     <input type="text" name="id_krit" id="id_krit" class="form-control"
                                         value="<?= $p['id_kriteria'] ?>">
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