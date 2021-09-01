 <?php echo view('parsial/header'); ?>

 <?php echo view('parsial/sidebar'); ?>
 <div class="main-content">
     <div class="page-title-area">
         <div class="row align-items-center">
             <div class="col-sm-12 clearfix py-4">
                 <div class="breadcrumbs-area clearfix">
                     <h4 class="page-title pull-left">Puskesmas</h4>
                     <ul class="breadcrumbs pull-left">
                         <li><a href="<?= base_url() ?>">Home</a></li>
                         <li><span>Puskesmas</span></li>
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
                    foreach ($puskes as $p) { ?>
                     <form action="/Puskesmas/proses_edit/<?= $p['id_puskesmas'] ?>" method="post">
                         <div class="card">
                             <div class="card-body">
                                 <h4 class="header-title">Tambah Puskesmas</h4>
                                 <div class="row">
                                     <div class="col-6 form-group">
                                         <label for="nama_pus">Nama Puskesmas</label>
                                         <input type="text" name="nama_pus" id="nama_pus" class="form-control" value="<?= $p['nama_puskesmas'] ?>">
                                     </div>
                                     <div class="col-8 form-group">
                                         <label for="alamat">Alamat Puskesmas</label>
                                         <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $p['alamat'] ?>">
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