
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                
                <div class="row">
                    <div class="col-md-5 pr-1">
                    <h4 class="card-title">Data Pelamar</h4>
                    </div>
                    <div class="col-sm-6 pr-1">
                      <form action="pelamar.php" method="POST">
                        <div class="input-group mb-3">
                          <select name="pendik" class="form-control" id="">
                            <option value="">Cari Pendidikan</option>
                            <?php
                              $sql2 = "SELECT * FROM pendik";
                              $qu = mysqli_query($koneksi, $sql2);
                              while($u = mysqli_fetch_array($qu)){
                            ?>
                              <option value="<?= $u['id_pendik'] ?>"><?= $u['nama'] ?></option>
                            <?php   
                              }
                            ?>
                          </select>
                          <input type="submit" class="btn-outline-secondary" name="cari" value="Cari">
                        </div>
                         <div class="input-group mb-3">
                          <select name="jurusan" class="form-control" id="">
                            <option value="">Cari Jurusan</option>
                            <?php
                              $sql2 = "SELECT * FROM jurusan";
                              $qu = mysqli_query($koneksi, $sql2);
                              while($u = mysqli_fetch_array($qu)){
                            ?>
                              <option value="<?= $u['id_jur'] ?>"><?= $u['jurusan'] ?></option>
                            <?php   
                              }
                            ?>
                          </select>
                          <input type="submit" class="btn-outline-secondary" name="cari" value="Cari">
                        </div>
                      </form>
                    </div>
                </div>    
              </div>
              <div class="card-body">
                <div>
                  <table id="example" class="table table-striped table-bordered">
                    <thead class=" text-primary">
                      <th>No</th>
                      <th>Nama Lengkap</th>
                      <th>Jenis Kelamin</th>
                      <th>No. Hp</th>
                      <th>Pendidikan</th>
                      <th>#</th>
                    </thead>
                    <tbody>
                        <?php
                            $no =1;
                            if(isset($_POST['cari'])){
                              $pendik = $_POST['pendik'];
                              $jurusan = $_POST['jurusan'];
                              $sql = "SELECT biodata_lo.id_bio,biodata_lo.nama_depan,biodata_lo.nama_belakang,biodata_lo.jk,biodata_lo.no_hp,biodata_lo.pendik,pendik.nama  FROM biodata_lo INNER JOIN pendik ON pendik.id_pendik = biodata_lo.pendik WHERE id_pendik LIKE '%$pendik%' AND jurusan LIKE '%$jurusan%'";
                            }else{
                              $sql = "SELECT biodata_lo.id_bio,biodata_lo.nama_depan,biodata_lo.nama_belakang,biodata_lo.jk,biodata_lo.no_hp,biodata_lo.pendik,pendik.nama  FROM biodata_lo INNER JOIN pendik ON pendik.id_pendik = biodata_lo.pendik";
                            }
                            $query = mysqli_query($koneksi, $sql);
                            while($o = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $o['nama_depan'] ?> <?= $o['nama_belakang'] ?></td>
                            <td><?= $o['jk'] ?></td>
                            <td><?= $o['no_hp'] ?></td>
                            <td><?= $o['nama'] ?></td>
                            <td><a href="detail.php?id=<?php echo $o['id_bio']; ?>" class="btn btn-warning">Detail</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
