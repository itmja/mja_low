<?php 

include("head.php"); ?>

<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <img class="me-3" src="../../assets/img/logo.png" alt="" width="48" height="38">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Mitra Kerja</h1>
      <!-- <small>Since 2011</small> -->
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Recent updates</h6>
   
    <hr>
    <?php 
      $cek = "SELECT * FROM biodata_lo WHERE uid ='$_SESSION[uid]'";
      $query = mysqli_query($koneksi, $cek);
      $ls =mysqli_num_rows($query);
      if ($ls === 1) {
    ?>
     <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
      </svg>

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark"><?php echo $_SESSION['header']; ?></strong>
        Selamat Datang Di Lowongan Mitra Jua Abadi !
      </p>
    </div>
    <?php
      }else{
       
    ?>
      <div class="col-md-12">
        <form action="func/cek_nik.php" method="POST">
          <div class="row g-3">
            <div class="col-sm-9">
              <!-- <label for="firstName"  class="form-label">NIK</label> -->
              <input type="text" name="nik" placeholder="NIK xxxxxx" class="form-control" id="firstName" placeholder="" value="">
              <div class="invalid-feedback">
              Valid first name is required.
              </div>
            </div>
            <div class="col-sm-3">
              <button class="btn btn-warning">Cek NIK</button>
            </div>
          </div>
        </form>
      </div>
   <?php } ?>
  </div>
</main>
<?php include "foot.php" ?>