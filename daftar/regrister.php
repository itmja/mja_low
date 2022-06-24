<!doctype html>
<?php 
//   session_start();
//   if(isset($_SESSION['uid'])) {
//     header("Location: data/index.php");
//   }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Registrasi</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
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
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin" >
  <form action="proses.php" method="POST">
    
    <img class="mb-4" src="../assets/img/logo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Lengkapi Data Tersebut</h1>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputValue" name="name" placeholder="">
      <label for="floatingInput">Nama Lengkap</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInputValue" name="email" placeholder="">
      <label for="floatingInput">Email</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingInputValue" name="pass" placeholder="Password">
      <label for="floatingInput">Password</label>
    </div>
    
    <input type="submit" name="registrasi" value="Daftar" class="w-100 btn btn-lg btn-success">
   
    <!-- <p>© IT Specialist <a href="https://mitrajuaabadi.co.id/" target="_blank">PT. MITRA JUA ABADI</a></p> -->
  </form>
  <br>
  <br>
  <div class="copyright-text text-center">
	<p>© IT Specialist <a href="https://mitrajuaabadi.co.id/" target="_blank">PT. MITRA JUA ABADI</a></p>
  </div>
</main>
  </body>
</html>

