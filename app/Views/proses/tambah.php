 <?php echo view('parsial/header'); ?>

 <?php echo view('parsial/sidebar'); ?>
 <div class="main-content">
     <div class="page-title-area">
         <div class="row align-items-center">
             <div class="col-sm-12 clearfix py-4">
                 <div class="breadcrumbs-area clearfix">
                     <h4 class="page-title pull-left">Nilai / Proses SPK</h4>

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
                 <form action="<?= base_url() ?>/Proses/simpan" method="post">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="header-title">Tambah Nilai Alternatif </h4>
                             <div class="row">
                                 <div class="col-10 form-group">
                                     <label for="id_pus">Nama Puskesmas</label>
                                     <select name="id_pus" id="id_pus" class="form-control">
                                         <?php foreach ($pus as $ds) { ?>
                                             <option value="<?= $ds['id_puskesmas']; ?>"><?= $ds['nama_puskesmas'] ?></option>
                                         <?php } ?>
                                     </select>

                                 </div>
                                 <div class="col-8 form-group">
                                     <label for="k1">Pelayanan</label>
                                     <select name="k1" id="k1" class="form-control">
                                         <?php foreach ($k1 as $k1) { ?>
                                             <option value="<?= $k1['id_c1'] ?>"><?= $k1['pilihan_c1'] ?></option>
                                         <?php } ?>
                                     </select>
                                 </div>
                                 <div class="col-8 form-group">
                                     <label for="k2">Kebersihan Lingkungan</label>
                                     <select name="k2" id="k2" class="form-control">
                                         <?php foreach ($k2 as $k2) { ?>
                                             <option value="<?= $k2['id_c2'] ?>"><?= $k2['pilihan_c2'] ?></option>
                                         <?php } ?>
                                     </select>
                                 </div>
                                 <div class="col-8 form-group">
                                     <label for="k3">Jumlah Tenaga Kerja</label>
                                     <select name="k3" id="k3" class="form-control">
                                         <?php foreach ($k3 as $k3) { ?>
                                             <option value="<?= $k3['id_c3'] ?>"><?= $k3['pilihan_c3'] ?></option>
                                         <?php } ?>
                                     </select>
                                 </div>
                                 <div class="col-8 form-group">
                                     <label for="k4">Alat Fasilitas Medis</label>
                                     <select name="k4" id="k4" class="form-control">
                                         <?php foreach ($k4 as $k4) { ?>
                                             <option value="<?= $k4['id_c4'] ?>"><?= $k4['pilihan_c4'] ?></option>
                                         <?php } ?>
                                     </select>
                                 </div>
                                 <div class="col-12 form-group">
                                     <button class="btn text-white sbg1">Submit</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </form>

             </div>
         </div>
     </div>
 </div>



 <?php echo view('parsial/footer'); ?>