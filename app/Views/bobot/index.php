 <?php echo view('parsial/header'); ?>

 <?php echo view('parsial/sidebar'); ?>
 <div class="main-content">
     <!-- page title area start -->
     <div class="page-title-area">
         <div class="row align-items-center">
             <div class="col-sm-12 clearfix py-4">
                 <div class="breadcrumbs-area clearfix">
                     <h4 class="page-title pull-left">Bobot</h4>
                     <ul class="breadcrumbs pull-left">
                         <li><a href="<?= base_url() ?>">Home</a></li>
                         <li><span>Bobot</span></li>
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
                                     <div class="seofct-icon"><i class="ti-briefcase"></i> Data Bobot</div>
                                     <h2>2,315</h2>
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
                         <h4 class="header-title">Daftar Bobot</h4>
                         <a class="btn text-white sbg1 my-2" href="/bobot/tambah"> <i class="fa fa-plus"></i>
                             Tambah</a>
                         <div class="single-table">
                             <div class="table-responsive">
                                 <table class="table text-center">
                                     <thead class="text-uppercase text-light sbg1">
                                         <tr>
                                             <th>#</th>
                                             <th>id kriteria</th>
                                             <th>pilihan</th>
                                             <th>bobot</th>
                                             <th>Aksi</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php $i = 0;
                                            foreach ($bobot as $p) { ?>
                                         <tr>
                                             <td><?= ++$i ?></td>
                                             <td><?= $p['id_kriteria'] ?></td>
                                             <td><?= $p['pilihan'] ?></td>
                                             <td><?= $p['bobot'] ?></td>
                                             <td><a href="/proses/edit/<?= $p['id_nilai'] ?>"
                                                     class="btn btn-sm btn-success mr-2"><i class="fa fa-edit"></i>
                                                 </a><a href="/proses/hapus/<?= $p['id_nilai'] ?>"
                                                     class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a></td>
                                         </tr>
                                         <?php } ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>

             <!-- nanti di parse bobot -->
             <div class="col-lg-6 mt-5">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="header-title">Kriteria A</h4>
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
                                         <tr>
                                             <td>1</td>
                                             <td>Sangat Bersih</td>
                                             <td>20</td>
                                             <td><a href="" class="btn btn-sm btn-success mr-2"><i
                                                         class="fa fa-edit"></i> </a><a href=""
                                                     class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a></td>
                                         </tr>

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
                         <h4 class="header-title">Kriteria B</h4>
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
                                         <tr>
                                             <td>1</td>
                                             <td>Sangat Bersih</td>
                                             <td>20</td>
                                             <td><a href="" class="btn btn-success"><i class="ti-edit"></i> Edit</a>
                                             </td>
                                         </tr>

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