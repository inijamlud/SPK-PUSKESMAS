 <?php echo view('parsial/header'); ?>

 <?php echo view('parsial/sidebar'); ?>
 <div class="main-content">
     <!-- page title area start -->
     <div class="page-title-area">
         <div class="row align-items-center">
             <div class="col-sm-12 clearfix py-4">
                 <div class="breadcrumbs-area clearfix">
                     <h4 class="page-title pull-left">Kriteria</h4>
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
             <!-- seo fact area start -->
             <div class="col-lg-12">
                 <div class="row">
                     <div class="col-md-12 mt-5 mb-1">
                         <div class="card">
                             <div class="seo-fact sbg3">
                                 <div class="p-4 d-flex justify-content-between align-items-center">
                                     <div class="seofct-icon"><i class="ti-list"></i> Data Kriteria</div>
                                     <h2>4</h2>
                                 </div>
                                 <canvas id="seolinechart1" height="50"></canvas>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- map area start -->


             <!-- nanti di parse bobot -->
             <div class="col-lg-6 mt-5">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="header-title">C1 Pelayanan</h4>
                         <div class="single-table">
                             <div class="table-responsive">
                                 <table class="table text-center">
                                     <thead class="text-uppercase text-light sbg1">
                                         <tr>
                                             <th>#</th>
                                             <th>Kriteria</th>
                                             <th>Bobot</th>
                                             <th>Aksi</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php $i = 0;
                                            foreach ($c1 as $p) { ?>
                                             <tr>
                                                 <td><?= ++$i ?></td>
                                                 <td><?= $p['pilihan_c1'] ?></td>
                                                 <td><?= $p['bobot_c1'] ?></td>
                                                 <td><a href="/kriteria/editc1/<?= $p['id_c1'] ?>" class="btn btn-sm btn-success mr-2"><i class="fa fa-edit"></i>
                                             </tr>
                                         <?php } ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 mt-5">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="header-title">C2 Kebersihan Lingkungan</h4>
                         <div class="single-table">
                             <div class="table-responsive">
                                 <table class="table text-center">
                                     <thead class="text-uppercase text-light sbg1">
                                         <tr>
                                             <th>#</th>
                                             <th>Kriteria</th>
                                             <th>Bobot</th>
                                             <th>Aksi</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php $i = 0;
                                            foreach ($c2 as $p) { ?>
                                             <tr>
                                                 <td><?= ++$i ?></td>
                                                 <td><?= $p['pilihan_c2'] ?></td>
                                                 <td><?= $p['bobot_c2'] ?></td>
                                                 <td><a href="/kriteria/editc2/<?= $p['id_c2'] ?>" class="btn btn-sm btn-success mr-2"><i class="fa fa-edit"></i>
                                             </tr>
                                         <?php } ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>

             <div class="col-lg-6 mt-5">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="header-title">C3 Jumlah Tenaga Kerja</h4>
                         <div class="single-table">
                             <div class="table-responsive">
                                 <table class="table text-center">
                                     <thead class="text-uppercase text-light sbg1">
                                         <tr>
                                             <th>#</th>
                                             <th>Kriteria</th>
                                             <th>Bobot</th>
                                             <th>Aksi</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php $i = 0;
                                            foreach ($c3 as $p) { ?>
                                             <tr>
                                                 <td><?= ++$i ?></td>
                                                 <td><?= $p['pilihan_c3'] ?></td>
                                                 <td><?= $p['bobot_c3'] ?></td>
                                                 <td><a href="/kriteria/editc3/<?= $p['id_c3'] ?>" class="btn btn-sm btn-success mr-2"><i class="fa fa-edit"></i>
                                             </tr>
                                         <?php } ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-6 mt-5">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="header-title">C4 Alat Fasilitas Medis</h4>
                         <div class="single-table">
                             <div class="table-responsive">
                                 <table class="table text-center">
                                     <thead class="text-uppercase text-light sbg1">
                                         <tr>
                                             <th>#</th>
                                             <th>Kriteria</th>
                                             <th>Bobot</th>
                                             <th>Aksi</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php $i = 0;
                                            foreach ($c4 as $p) { ?>
                                             <tr>
                                                 <td><?= ++$i ?></td>
                                                 <td><?= $p['pilihan_c4'] ?></td>
                                                 <td><?= $p['bobot_c4'] ?></td>
                                                 <td><a href="/kriteria/editc4/<?= $p['id_c4'] ?>" class="btn btn-sm btn-success mr-2"><i class="fa fa-edit"></i>
                                             </tr>
                                         <?php } ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>



 <?php echo view('parsial/footer'); ?>