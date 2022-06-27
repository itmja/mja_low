<?php include "head.php" ?>
        <!-- Navbar Area End -->

        <!-- Page Title Start -->
        <section class="page-title title-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Job Details</h2>
                    <ul>
                        <li>
                            <a href="index.php">Beranda</a>
                        </li>
                        <li>Lowongan Detail</li>
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
        <?php
            $id = $_GET['id'];
            $sql = "SELECT *,kategori_job.nama_job FROM new_job INNER JOIN kategori_job ON kategori_job.id_job = new_job.id_kjob WHERE new_job.id_job = '$id'";
            $a = mysqli_query($koneksi, $sql);
            while ($r = mysqli_fetch_array($a)) {
        ?>
        <!-- Job Details Section Start -->
        <section class="job-details ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="job-details-text">
                                    <div class="job-card">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <div class="company-logo">
                                                    <img src="assets/img/logo.png" alt="logo">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="job-info">
                                                    <h3><?= $r['nama_job'] ?></h3>
                                                    <ul>
                                                        <li>
                                                            <i class='bx bx-location-plus'></i>
                                                            <?= $r['jk'] ?>
                                                        </li>
                                                        <li>
                                                            <i class='bx bx-filter-alt' ></i>
                                                            <?= $r['peng'] ?>
                                                        </li>
                                                        <li>
                                                            <i class='bx bx-briefcase' ></i>
                                                            <?= $r['lulusan'] ?>
                                                        </li>
                                                    </ul>
                                                    
                                                    <span>
                                                        <i class='bx bx-paper-plane' ></i>
                                                        Tanggal Penutupan: <?= $r['tgl_t'] ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="details-text">
                                        <h3>Description</h3>
                                        <p><?= $r['deskripsi'] ?>.</p>

                                        <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
                                    </div>
                                    
                                    <!-- <div class="details-text">
                                        <h3>Requirements</h3>
                                       <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                        <ul>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                Work experience
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                Skills (soft skills and/or technical skills)
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                WPersonal qualities and attributes.
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                Support software roll-outs to production.
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                Guide and mentor junior engineers. Serve as team lead if appropriate.

                                            </li>
                                        </ul>
                                    </div> -->

                                    <div class="details-text">
                                        <h3>Lowongan Detail</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td><span>Perusahaan : </span></td>
                                                            <td>PT. MITRA JUA ABADI</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Lokasi Penempatan : </span></td>
                                                            <td><?= $r['penempatan'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Jam Kerja : </span></td>
                                                            <td><?= $r['jam_kerja'] ?></td>
                                                        </tr>
                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td><span>Pendidikan : </span></td>
                                                            <td><?= $r['lulusan'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Jenis Kelamin : </span></td>
                                                            <td><?= $r['jk'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Pengalaman : </span></td>
                                                            <td><?= $r['peng'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Usia Maximal</span></td>
                                                            <td><?= $r['umur'] ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="theme-btn">
                                        <a href="daftar/data/func/lamar.php?id=<?php echo $_SESSION['uid']; ?>&job=<?= $id ?>&no=<?= $r['kode_job'] ?>" class="default-btn">Lamar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <?php } ?>
        <!-- Job Details Section End -->

        <!-- Job Section End -->   
       
        <!-- Job Section End -->
    
        <!-- Subscribe Section Start -->
        <!-- <section class="subscribe-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="section-title">
                            <h2>Get New Job Notifications</h2>
                            <p>Subscribe & get all related jobs notification</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
    
                            <button class="default-btn sub-btn" type="submit">
                                Subscribe
                            </button>
    
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Subscribe Section End -->

        <!-- Footer Section Start -->
        <?php include "footer.php" ?>