<!doctype html>
<?php 
include("daftar/data/func/cdb.php");
session_start(); 
?>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Owl Carousel Theme Default CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Box Icon CSS-->
        <link rel="stylesheet" href="assets/css/boxicon.min.css">
        <!-- Flaticon CSS-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/st.css">
		<!-- Dark CSS -->
        <link rel="stylesheet" href="assets/css/dark.css">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Title CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <title>Rekrutmen - PT. MITRA JUA ABADI</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/logo.png">  
		
	</head>
	
  	<body>
		
		<!-- Pre-loader Start -->
		<div class="loader-content">
            <div class="d-table">
                <div class="d-table-cell">
					<div class="sk-circle">
						<div class="sk-circle1 sk-child"></div>
						<div class="sk-circle2 sk-child"></div>
						<div class="sk-circle3 sk-child"></div>
						<div class="sk-circle4 sk-child"></div>
						<div class="sk-circle5 sk-child"></div>
						<div class="sk-circle6 sk-child"></div>
						<div class="sk-circle7 sk-child"></div>
						<div class="sk-circle8 sk-child"></div>
						<div class="sk-circle9 sk-child"></div>
						<div class="sk-circle10 sk-child"></div>
						<div class="sk-circle11 sk-child"></div>
						<div class="sk-circle12 sk-child"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pre-loader End -->

		<!-- Navbar Area Start -->
		<div class="navbar-area">
			<!-- Menu For Mobile Device -->
			<div class="mobile-nav">
				<a href="index.html" class="logo">
					<img src="assets/img/logo.png" alt="logo">
				</a>
			</div>
		
			<!-- Menu For Desktop Device -->
			<div class="main-nav">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="index.html">
							<img src="assets/img/logo.png" alt="logo">
						</a>
						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto">
								<li class="nav-item">
									<a href="index.php" class="nav-link">Beranda</a>
								</li>
								<li class="nav-item">
									<a href="about.php" class="nav-link">Tentang</a>
								</li>
								<li class="nav-item">
									<a href="job.php" class="nav-link">Perkerjaan</a>
								</li>                
								<li class="nav-item">
									<a href="contact.php" class="nav-link">Hubungi Kami</a>
								</li>
							</ul>

							<div class="other-option">
                            <?php if(isset($_SESSION['uid'])) { ?>
                                <div class="dropdown text-end">
                                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                                    </a>
                                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                                        <li><a class="dropdown-item" href="daftar/">Dashboard</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="daftar/data/logout.php">Sign out</a></li>
                                    </ul>
                                </div>
                            <?php } else {?>
                                <div class="text-end">
                                    <a class="signup-btn" href="daftar/regrister.php">Daftar</a>  
                                    <a class="signin-btn" href="daftar/">Login</a>
                                   
                                </div>
                            <?php } ?>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>