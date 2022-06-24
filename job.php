<?php include "head.php" ?>

        <!-- Page Title Start -->
        <section class="page-title title-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Pekerjaan</h2>
                    <ul>
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>Pekerjaan</li>
                    </ul>
                </div>
            </div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </section>
        <!-- Page Title End -->

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
    
        <!-- Subscribe Section Start -->

        <!-- Subscribe Section End -->

        <!-- Footer Section Start -->
		<?php include "footer.php" ?>