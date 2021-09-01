 <?php echo view('parsial/header');
    $i = 0;
    $sumc1 = $sumNo[0]['sumc1'];
    $sumc2 = $sumNo[0]['sumc2'];
    $sumc3 = $sumNo[0]['sumc3'];
    $sumc4 = $sumNo[0]['sumc4'];

    echo view('parsial/sidebar'); ?>
 <div class="main-content">
     <!-- page title area start -->
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
             <div class="col-lg-12 mt-5">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="header-title">Data Alternatif</h4>
                         <a class="btn text-white sbg1 my-1" href="/Proses/tambah"> <i class="fa fa-plus"></i> Tambah</a>
                         <div class="single-table">
                             <div class="table-responsive ">
                                 <table class="table text-center">
                                     <thead class="text-uppercase text-light sbg1">
                                         <tr>
                                             <th>#</th>
                                             <th>Nama Puskemas</th>
                                             <th>Pelayanan (C1)</th>
                                             <th>Kebersihan Lingkungan (C2)</th>
                                             <th>Tenaga Kesehatan (C3)</th>
                                             <th>Alat Fasilitas Medis (C4)</th>
                                             <th><i class="fa fa-gear"></i></th>
                                         </tr>
                                     </thead>
                                     <tbody class="text-center">
                                         <?php $i = 0;
                                            foreach ($pus as $nilai) { ?>
                                             <tr>
                                                 <td><?= ++$i ?></td>
                                                 <td><?= $nilai['nama_puskesmas'] ?></td>
                                                 <td><?= $nilai['pilihan_c1'] ?></td>
                                                 <td><?= $nilai['pilihan_c2'] ?></td>
                                                 <td><?= $nilai['pilihan_c3'] ?></td>
                                                 <td><?= $nilai['pilihan_c4'] ?></td>
                                                 <td><a href="/proses/hapus/<?= $nilai['id_nilai'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a></td>
                                             </tr>
                                         <?php } ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-12 mt-5">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="header-title">Rating Kecocokan</h4>
                         <div class="single-table">
                             <div class="table-responsive ">
                                 <table class="table text-center">
                                     <thead class="text-uppercase text-light sbg3">
                                         <tr>
                                             <th>#</th>
                                             <th>Nama Puskemas</th>
                                             <th>Pelayanan (C1)</th>
                                             <th>Kebersihan Lingkungan (C2)</th>
                                             <th>Tenaga Kesehatan (C3)</th>
                                             <th>Alat Fasilitas Medis (C4)</th>
                                         </tr>
                                     </thead>
                                     <tbody class="text-center">
                                         <?php $i = 0;
                                            foreach ($pus as $nilai) { ?>
                                             <tr>
                                                 <td><?= ++$i ?></td>
                                                 <td><?= $nilai['nama_puskesmas'] ?></td>
                                                 <td><?= $nilai['bobot_c1'] ?></td>
                                                 <td><?= $nilai['bobot_c2'] ?></td>
                                                 <td><?= $nilai['bobot_c3'] ?></td>
                                                 <td><?= $nilai['bobot_c4'] ?></td>
                                             </tr>
                                         <?php } ?>
                                         <tr class="bold">
                                             <td colspan="2"> Total</td>
                                             <td> <b><?= $sumc1 ?></b></td>
                                             <td> <b><?= $sumc2 ?></b></td>
                                             <td> <b><?= $sumc3 ?></b></td>
                                             <td> <b><?= $sumc4 ?></b></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-12 mt-5">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="header-title">Hasil Normalisasi</h4>
                         <div class="single-table">
                             <div class="table-responsive ">
                                 <table class="table text-center">
                                     <thead class="text-uppercase sbg4">
                                         <tr>
                                             <th>#</th>
                                             <th>Nama Puskemas</th>
                                             <th>Pelayanan (C1)</th>
                                             <th>Kebersihan Lingkungan (C2)</th>
                                             <th>Tenaga Kesehatan (C3)</th>
                                             <th>Alat Fasilitas Medis (C4)</th>
                                             <th class="sbg1 text-white">Nilai Ranking</th>
                                         </tr>
                                     </thead>
                                     <tbody class="text-center">
                                         <?php $i = 0;
                                            $bobot1 = 0;
                                            foreach ($pus as $p) {
                                                $sc1 = $p['bobot_c1'] / $sumc1;
                                                $sc2 = $p['bobot_c2'] / $sumc2;
                                                $sc3 = $p['bobot_c3'] / $sumc3;
                                                $sc4 = $p['bobot_c4'] / $sumc4;
                                                $bobot = $sc1 + $sc2 + $sc3 + $sc4 ?>
                                             <tr>
                                                 <td><?= ++$i ?></td>
                                                 <td><?= $p['nama_puskesmas'] ?></td>
                                                 <td> <?= $sc1 ?></td>
                                                 <td> <?= $sc2 ?></td>
                                                 <td> <?= $sc3 ?></td>
                                                 <td> <?= $sc4 ?></td>
                                                 <td class="sbg4"> <b><?= $bobot ?></b></td>
                                             <?php
                                                if ($bobot > $bobot1) {
                                                    $bobot1 = $bobot;
                                                    $resName =  $p['nama_puskesmas'];
                                                    $resBobot = $bobot;
                                                }
                                            } ?>
                                             </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- nanti di parse bobot -->
             <div class="col-lg-12 mt-5">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="header-title">Kesimpulan</h4>
                         <div>
                             <h5> Dari proses perhitungan data yang telah diperoleh, maka hasil pemilihan puskesmas sehat dengan nilai tertinggi adalah <span style="color:blue"><?= $resName ?></span> dengan Nilai <span style="color:blue"><?= $resBobot ?></span>.</h5>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>



 <?php echo view('parsial/footer'); ?>