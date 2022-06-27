<!doctype html>
<?php 
include("db.php");
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Checkout example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/img/logo.png" alt="" width="72" height="57">
      <h2>Informasi Akun</h2>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Foto Profil</span>
         
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
            <?php 
                
                $uid = $_SESSION['uid'];
                try {
                    $user1 = $auth->getUser($uid);
                    
               if($user1->photoUrl != NULL){
            
            ?>
              <img src="<?= $user1->photoUrl ?>" alt="" width="250" height="300">
            <?php 
               }else{
                   echo "Perbarui Data Foto";
               }
               
                } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
                    echo $e->getMessage();
                }
            ?>
            </div>
            
          </li>
        </ul>

        <form class="card p-2" method="POST" enctype="multipart/form-data" action="proses.php">

          <div class="input-group">
            <input type="file" class="form-control" name="foto" placeholder="Promo code">
            <input type="submit" class="update btn btn-secondary" name="fupdate" value="Update">
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Profil</h4>
        <form class="needs-validation" method="POST" action="proses.php" novalidate>
            <?php 
                
                
                try {
                    $user = $auth->getUser($uid);
                    
               
            
            ?>
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" name="nama" placeholder="" value="<?= $user->displayName ?>" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="<?= $user->email ?>" placeholder="you@example.com" disabled>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <div class="col-sm-12">
              <label for="firstName" class="form-label">Nomor Handphone</label>
              <input type="text" class="form-control" id="firstName" name="no_hp" placeholder="+62xxxxx" value="<?= $user->phoneNumber ?>" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
          </div>
          <hr class="my-4">
           <input type="submit" value="Update Profil" name="update" class="w-100 btn btn-primary btn-lg">         
           
          <?php 
             } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
                echo $e->getMessage();
            }
          ?>
        </form>
        <hr class="my-4">
        <a href="data/" class="w-100 btn btn-primary btn-lg">Kembali</a>
      </div>
    </div>
  </main>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 PT. MITRA JUA ABADI</p>
  </footer>
</div>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <?php
        if(isset($_SESSION['sukses']) && $_SESSION['sukses'] != ''){
        ?>
        <script>
            swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
            button: "Aww yiss!",
            });
        </script>
        <?php
        unset($_SESSION['sukses']);
        }
      
      ?>
      <?php
        if(isset($_SESSION['update']) && $_SESSION['update'] != ''){
        ?>
        <script>
            swal({
            title: "<?= $_SESSION['title'] ?>",
            text: "<?= $_SESSION['update'] ?>",
            icon: "<?= $_SESSION['icon'] ?>",
           
            });
        </script>
        <?php
        unset($_SESSION['update']);
        unset($_SESSION['title']);
        unset($_SESSION['icon']);
        }
      
      ?>
  </body>
</html>
