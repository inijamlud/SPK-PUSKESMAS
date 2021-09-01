 <?php echo view('parsial/header'); ?>

 <?php echo view('parsial/sidebar'); ?>
 <div class="main-content">
     <!-- page title area start -->
     <div class="page-title-area">
         <div class="row align-items-center">
             <div class="col-sm-12 clearfix py-4">
                 <div class="breadcrumbs-area clearfix">
                     <h4 class="page-title pull-left">Dashboard</h4>
                     <ul class="breadcrumbs pull-left">
                         <li><a href="<?= base_url() ?>">Home</a></li>
                         <li><span>Dashboard</span></li>
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
                     <div class="col-md-6 mt-5 mb-3">
                         <div class="card">
                             <div class="seo-fact sbg1">
                                 <div class="p-4 d-flex justify-content-between align-items-center">
                                     <div class="seofct-icon"><i class="ti-briefcase"></i> Data Puskesmas</div>
                                     <h2><?= $jml_pus ?></h2>
                                 </div>
                                 <canvas id="seolinechart1" height="50"></canvas>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6 mt-md-5 mb-3">
                         <div class="card">
                             <div class="seo-fact sbg3">
                                 <div class="p-4 d-flex justify-content-between align-items-center">
                                     <div class="seofct-icon"><i class="ti-list"></i> Data Kriteria</div>
                                     <h2>4</h2>
                                 </div>
                                 <canvas id="seolinechart2" height="50"></canvas>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-12 col-lg-8 mt-5">
                 <div class="card">
                     <div class="card-body bg2">
                         <h4 class="header-title text-white">Sistem Pendukung Keputusan Pemilihan Puskesmat Sehat</h4>
                         <div class="testimonial-carousel owl-carousel">
                             <div class="tst-item">
                                 <div class="tstu-content">
                                     <h4 class="tstu-name">Pusat Kesehatan Masyarakat (Puskesmas) adalah salah satu sarana pelayanan kesehatan masyarakat yang amat penting di Indonesia. </h4>
                                 </div>
                             </div>
                             <div class="tst-item">
                                 <div class="tstu-content">
                                     <h4 class="tstu-name">Puskesmas adalah unit pelaksana teknis dinas kabupaten/kota yang bertanggung jawab menyelenggarakan pembangunan kesehatan di suatu wilayah kerja.</h4>
                                 </div>
                             </div>
                             <div class="tst-item">
                                 <div class="tstu-content">
                                     <h4 class="tstu-name">Menjamin diselenggarakannya pelayanan kesehatan primer kepada pasien dan masyarakat, meningkatkan pendidikan pada staf fasyankes primer untuk memberikan pelayanan terbaik bagi masyarakat.</h4>
                                 </div>
                             </div>
                             <div class="tst-item">
                                 <div class="tstu-content">
                                     <h4 class="tstu-name">Sistem Pendukung Keputusan kelayakan Puskesmas sehat dengan metode SAW.</h4>
                                 </div>
                             </div>
                             <div class="tst-item">
                                 <div class="tstu-content">
                                     <h4 class="tstu-name">Bertujuan membantu dalam penentuan keputusan dalam mengambil keputusan dan menentukan secara tepat dan akurat yang layak sebagai Puskesmas Sehat.</h4>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>



 <?php echo view('parsial/footer'); ?>