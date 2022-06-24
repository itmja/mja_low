<?php include "head.php" ?>
<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-warning rounded shadow-sm">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Profil</h1>
      <small>Lengkapi Data Anda</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Biodata</h6>
    <?php 
      $uid = $_SESSION['uid'];
      $data = mysqli_query($koneksi,"select * from biodata_lo where uid='$uid'");
      $a = mysqli_fetch_array($data);
      if ($a) {
        include "profil/biodata/bio_uid.php";
      }else{
        include "profil/biodata/bio_not.php";
      }
    ?>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Kontak Darurat</h6>
     <?php
      include "profil/darurat/data.php";
     ?> 
  </div>
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Posisi Yang Di Inginkan</h6>
     <?php
      include "profil/posisi/posisi.php";
     ?> 
  </div>
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Organisasi Yang Pernah di Ikuti</h6>
    <?php
      include "profil/organisasi/or_uid.php";
     ?> 
  </div>
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Pengalaman Kerja</h6>
    <?php
      include "profil/pengalaman/peng_uid.php";
     ?> 
  </div>
</main>
<?php include "foot.php" ?>
