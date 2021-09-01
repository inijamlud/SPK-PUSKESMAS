 <?php echo view('parsial/header'); ?>

 <?php echo view('parsial/sidebar'); ?>
 <div class="main-content">
     <!-- page title area start -->
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
             <!-- seo fact area start -->
             <div class="col-lg-12">
                 <div class="row">
                     <div class="col-md-12 mt-5 mb-1">
                         <div class="card">
                             <div class="seo-fact sbg1">
                                 <div class="p-4 d-flex justify-content-between align-items-center">
                                     <div class="seofct-icon"><i class="ti-briefcase"></i> Data Puskesmas</div>
                                     <h2><?= $jml_puskes ?></h2>
                                 </div>
                                 <canvas id="seolinechart1" height="50"></canvas>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- map area start -->
             <div class="col-lg-12 mt-5">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="header-title">Daftar Puskesmas</h4>
                         <a class="btn text-white sbg1 my-2" href="/puskesmas/tambah"> <i class="fa fa-plus"></i> Tambah</a>
                         <div class="single-table">
                             <div class="table-responsive">
                                 <table class="table text-center">
                                     <thead class="text-uppercase text-light sbg1">
                                         <tr>
                                             <th>#</th>
                                             <th>Nama Puskesmas</th>
                                             <th>Alamat</th>
                                             <th>Aksi</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php $i = 0;
                                            foreach ($puskes as $p) { ?>
                                             <tr>
                                                 <td><?= ++$i ?></td>
                                                 <td><?= $p['nama_puskesmas'] ?></td>
                                                 <td><?= $p['alamat'] ?></td>
                                                 <td><a href="/puskesmas/edit/<?= $p['id_puskesmas'] ?>" class="btn btn-sm btn-success mr-2"><i class="fa fa-edit"></i> </a><a href="/puskesmas/hapus/<?= $p['id_puskesmas'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a></td>
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