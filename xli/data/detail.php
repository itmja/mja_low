<?php include "head.php" ?>
<?php
      $id = $_GET['id'];
      $sqlq = "SELECT *,pendik.nama FROM biodata_lo INNER JOIN pendik ON pendik.id_pendik = biodata_lo.pendik WHERE id_bio='$id'";
      $data = mysqli_query($koneksi,$sqlq);
      $a = mysqli_fetch_array($data);
      $uid = $a['uid'];

      
      

      


?>
    <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/damir-bosnjak.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title"><?= $a['nama_depan'] ?> <?= $a['nama_belakang'] ?></h5>
                  </a>
                  <p class="description">
                    <?= $a['no_hp'] ?>
                  </p>
                </div>
                <p class="description text-center">
                  "I like the way you work it <br>
                  No diggity <br>
                  I wanna bag it up"
                </p>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                      <h5>12<br><small>Files</small></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                      <h5>2GB<br><small>Used</small></h5>
                    </div>
                    <div class="col-lg-3 mr-auto">
                      <h5>24,6$<br><small>Spent</small></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Berkas Lamaran</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled team-members">
                  <?php
                    $deteil = mysqli_query($koneksi,"SELECT *,jenis_berkas.jenis FROM berkas INNER JOIN jenis_berkas ON jenis_berkas.id_jen = berkas.id_jenis WHERE uid='$uid'");
                    while($n = mysqli_fetch_array($deteil)){ 
                  ?>
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                        <?php
                            $filename = $n['detail'];
                            $ext = pathinfo($filename, PATHINFO_EXTENSION);
                            if ($ext === 'doc' || $ext === 'docx') {
                        ?>
                            <img src="../../daftar/data/func/uploads/docs.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        <?php
                            }elseif($ext === 'PDF'){
                        ?>  
                            
                            <img src="../../daftar/data/func/uploads/pdf.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        <?php } ?>
                          
                        </div>
                      </div>
                      <div class="col-md-7 col-7">
                        <?= $n['nama_berkas'] ?>
                        <br />
                        <span class="text-muted"><small><?= $n['jenis'] ?></small></span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <a href="../../daftar/data/func/uploads/<?= $n['detail'] ?>" class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-download"></i></a>
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Biodata</h5>
              </div>
              <div class="card-body">
                <form>
              
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nama Depan</label>
                        <input type="text" class="form-control" placeholder="Company" value="<?= $a['nama_depan'] ?>" disabled>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Nama Belakang</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="<?= $a['nama_belakang'] ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" placeholder="Company" value="<?= $a['jk'] ?>" disabled>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Agama</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="<?= $a['agama'] ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" placeholder="Company" value="<?= $a['tempat_l'] ?>" disabled>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="<?= $a['tgl_l'] ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tinggi Badan</label>
                        <input type="text" class="form-control" placeholder="Company" value="<?= $a['tb'] ?>" disabled>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Berat Badan</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="<?= $a['bb'] ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Kewarganegaraan</label>
                        <input type="text" class="form-control" placeholder="Company" value="<?= $a['kwn'] ?>" disabled>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Suku Bangsa</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="<?= $a['sb'] ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Status Perkawinan</label>
                        <input type="text" class="form-control" placeholder="Company" value="<?= $a['status_p'] ?>" disabled>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Ibu Kandung</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="<?= $a['ibu_kandung'] ?>" disabled>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Pendidikan</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="<?= $a['nama'] ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>No. KK</label>
                        <input type="text" class="form-control" placeholder="Company" value="<?= $a['no_kk'] ?>" disabled>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>No KTP</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="<?= $a['no_ktp'] ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alamat Rumah</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="<?= $a['alm_rumah'] ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alamat Kos</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="<?= $a['alm_kos'] ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Nomer Hanphone</label>
                        <input type="text" class="form-control" placeholder="City" value="<?= $a['no_hp'] ?>" disabled>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Nomer Rekening</label>
                        <input type="text" class="form-control" placeholder="Country" value="<?= $a['no_rekening'] ?>" disabled>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Nama Bank</label>
                        <input type="text" class="form-control" placeholder="ZIP Code" value="<?= $a['nama_bank'] ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Cetak Biodata</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include "foot.php" ?>      