<?php include "head.php" ?>
		<!-- Navbar Area End -->

		<!-- Banner Section Start -->
		<div class="banner-section">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container"> 
						<div class="banner-content text-center">
							<p>Temukan Pekerjaan, Pekerjaan & Peluang Karir</p>
							<h1>Dapatkan Pekerjaan Keinginan Anda!</h1>

							<!-- <form class="banner-form">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail1">Keyword:</label>
											<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Job Title">
										</div>
									</div>
				
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail2">Location:</label>
											<input type="text" class="form-control" id="exampleInputEmail2" placeholder="City or State">
										</div>
									</div>
				
									<div class="col-md-4">
										<button type="submit" class="find-btn">
											Find A Job
											<i class='bx bx-search'></i>
										</button>
									</div>
								</div>
							</form> -->

							<ul class="keyword">
								<li>Trending Keywords:</li>
								<li><a href="#">Automotive,</a></li>
								<li><a href="#">Education,</a></li>
								<li><a href="#">Health</a></li>
								<li>and</li>
								<li><a href="#">Care Engineering</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Banner Section End -->

		<!-- Category Section Start -->
		<section class="categories-section pt-100 pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>Pilih Kategori Anda</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-6">
						<a href="job-list.html">
							<div class="category-card">
								<i class='flaticon-accounting'></i>
								<h3>Administrasi</h3>
								<p>301 open position</p>
							</div>
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6">
						<a href="job-list.html">
							<div class="category-card">
								<i class='flaticon-worker'></i>
								<h3>Operator Produksi</h3>
								<p>210 open position</p>
							</div>
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6">
						<a href="job-list.html">
							<div class="category-card">
								<i class='flaticon-wrench-and-screwdriver-in-cross'></i>
								<h3>Maintenence</h3>
								<p>281 open position</p>
							</div>
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6">
						<a href="job-list.html">
							<div class="category-card">
								<i class='flaticon-worker'></i>
								<h3>Supervisor</h3>
								<p>122 open position</p>
							</div>
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6">
						<a href="job-list.html">
							<div class="category-card">
								<i class='flaticon-heart'></i>
								<h3>Cleaning Service</h3>
								<p>335 open position</p>
							</div>
						</a>
					</div>

					<div class="col-lg-3  col-md-4 col-sm-6">
						<a href="job-list.html">
							<div class="category-card">
								<i class='flaticon-worker'></i>
								<h3>Satuan Pengamanan (SATPAM)</h3>
								<p>401 open position</p>
							</div>
						</a>
					</div>

					<div class="col-lg-3  col-md-4 col-sm-6 offset-md-2 offset-lg-0">
						<a href="job-list.html">
							<div class="category-card">
								<i class='flaticon-wrench-and-screwdriver-in-cross'></i>
								<h3>Teknisi Mesin</h3>
								<p>100 open position</p>
							</div>
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6">
						<a href="job-list.html">
							<div class="category-card">
								<i class='flaticon-wrench-and-screwdriver-in-cross'></i>
								<h3>Teknisi Listrik</h3>
								<p>201 open position</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Category Section End -->

		<!-- Jobs Section Start -->
		<section class="job-section pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>Pekerjaan yang Mungkin Anda Minati</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
				</div>

				<div class="row">
				<?php
                        $sql = "SELECT *,kategori_job.nama_job FROM new_job INNER JOIN kategori_job ON kategori_job.id_job = new_job.id_kjob WHERE status='y'";
                        $a = mysqli_query($koneksi, $sql);
                        while ($r = mysqli_fetch_array($a)) {
                    ?>
					<div class="col-sm-6">
						<div class="job-card">
							<div class="row align-items-center">
								<div class="col-lg-3">
									<div class="thumb-img">
										<a href="job-details.html">
											<img src="assets/img/company-logo/1.png" alt="company logo">
										</a>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="job-info">
										<h3>
											<a href="job-details.html"><?= $r['nama_job'] ?></a>
										</h3>
										<ul>
											
											<i class="bi bi-mortarboard"></i>
											<?= $r['lulusan'] ?>
											</li>
											<li>
											<i class="bi bi-person-lines-fill"></i>
											<?= $r['peng'] ?>
											</li>
											<li>
												<i class='bi bi-gender-ambiguous' ></i>
												<?= $r['jk'] ?>
											</li>
										</ul>
									</div>
								</div>

								
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
		</section>
		<!-- Jobs Section End -->

		<!-- Way To Use Section Start -->
		<section class="use-section pt-100 pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>Cara termudah Untuk Menggunakan</h2>
				</div>

				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="use-text">
							<span>1</span>
							<i class='flaticon-website'></i>
							<h3>Daftar & Isi Biodata</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
						</div>
					</div>

					<div class="col-md-4 col-sm-6">
						<div class="use-text">
							<span>2</span>
							<i class='flaticon-recruitment'></i>
							<h3>Cari Perkerjaan</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0">
						<div class="use-text">
							<span>3</span>
							<i class='flaticon-login'></i>
							<h3>Lamar</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Way To Use Section End -->

		<!-- Footer Section Start -->
	<?php include "footer.php" ?>	