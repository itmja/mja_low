
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-10">
                    <h4 class="card-title">Job</h4>
                  </div>
                  <div class="col-sm-2">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah Job
                  </button>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div>
                  <table id="list" class="table table-striped table-bordered">
                    <thead class=" text-primary">
                        <tr>
                          <th>No</th>
                          <th>Kode Job</th>
                          <th>Jenis Job</th>
                          <th>Jumlah Pelamar</th>
                          <th>Tanggal Add</th>
                          <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no = 1;
                        $sql = "SELECT new_job.id_job,new_job.deskripsi,new_job.kode_job,kategori_job.nama_job,new_job.tgl FROM new_job INNER JOIN kategori_job ON kategori_job.id_job = new_job.id_kjob";
                        $r = mysqli_query($koneksi, $sql);
                        while ($a = mysqli_fetch_array($r)) {

                        ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $a['kode_job'] ?></td>
                          <td><?= $a['nama_job'] ?></td>
                          <td></td>
                          <td><?= $a['tgl'] ?></td>
                          <td><a href="" class="btn btn-primary">Detail Pelamar</a><a href="func/func_job.php?id=<?php echo $a['id_job']; ?>" class="btn btn-warning">Hapus</a></td>
                        </tr>
                          <?php
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Job</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="func/func_job.php" method="POST">  
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Kategori Job</label>
                  <select multiple class="form-control" name="nama" id="exampleFormControlSelect2">
                    <?php
                      $sql1 = "SELECT * FROM kategori_job";
                      $b = mysqli_query($koneksi, $sql1);
                      while ($t = mysqli_fetch_array($b)) {
                      ?>
                      <option value="<?= $t['id_job'] ?>"><?= $t['nama_job'] ?> </option>
                      <?php
                      }
                    
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="Submit" name="submit" value="Add" class="btn btn-primary">
                </div>
              </form>
              </div>
              
            </div>
          </div>
        </div>
