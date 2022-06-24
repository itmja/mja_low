<?php 
include "head.php";

?>
<main class="container">
 

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Recent updates</h6>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Job</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <?php
                        $sql = "SELECT new_job.id_job,new_job.deskripsi,new_job.kode_job,kategori_job.nama_job,new_job.tgl FROM new_job INNER JOIN kategori_job ON kategori_job.id_job = new_job.id_kjob";
                        $a = mysqli_query($koneksi, $sql);
                        while ($r = mysqli_fetch_array($a)) {
                    ?>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1<?php echo $r['id_job']; ?>">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="../../assets/img/portfolio/cabin.png" alt="..." />
                            <h2><?= $r['nama_job'] ?></h2>
                        </div>
                    </div>
                    <div class="portfolio-modal modal fade" id="portfolioModal1<?php echo $r['id_job']; ?>" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                <div class="modal-body text-center pb-5">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <?php
                                                    $id = $r['id_job'];
                                                    $sq1 = "SELECT new_job.id_job,new_job.deskripsi,new_job.kode_job,kategori_job.nama_job,new_job.tgl FROM new_job INNER JOIN kategori_job ON kategori_job.id_job = new_job.id_kjob WHERE new_job.id_job='$id'";
                                                    $t = mysqli_query($koneksi, $sq1);
                                                    while ($l = mysqli_fetch_array($t)) {
                                                ?>
                                                <!-- Portfolio Modal - Title-->
                                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?= $l['nama_job'] ?></h2>
                                                <!-- Icon Divider-->
                                                <div class="divider-custom">
                                                    <div class="divider-custom-line"></div>
                                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                    <div class="divider-custom-line"></div>
                                                </div>
                                                <!-- Portfolio Modal - Image-->
                                                <img class="img-fluid rounded mb-5" src="../../assets/img/portfolio/cabin.png" alt="..." />
                                                <!-- Portfolio Modal - Text-->
                                                <p class="mb-4"><?= $l['deskripsi'] ?></p>
                                                <?php } ?>
                                                <a href="func/lamar.php?id=<?php echo $_SESSION['uid']; ?>&job=<?= $r['id_job'] ?>&no=<?= $r['kode_job'] ?>" class="btn btn-primary">Lamar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
</main>

<?php include "foot.php" ?>