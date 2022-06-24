<form action="func/func_peng.php" method="POST">
    <div class="row g-3">
        <div class="col-sm-3">
        
          <input type="text" class="form-control" name="nama" id="firstName" placeholder="Nama Perusahaan" value="" required="">
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-3">
         
          <input type="text" class="form-control" name="bidang" id="lastName" placeholder="Bidang Usaha" value="" required="">
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-3">
         
          <input type="text" class="form-control" name="jabatan" id="jk" placeholder="Jabatan Terakhir" value="" required="">
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-3">
         
          <input type="text" class="form-control" name="gaji" id="jk" placeholder="Gaji Terakhir" value="" required="">
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-3">
          
          <input type="text" class="form-control" name="dari" id="jk" placeholder="Dari" value="" required="">
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-3">
         
          <input type="text" class="form-control" name="sampai" id="jk" placeholder="Sampai" value="" required="">
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-3">
         
          <input type="text" class="form-control" name="ket" id="jk" placeholder="Alasan Berhenti" value="" required="">
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-3">
         
          <input type="submit" class="btn btn-warning" name="add" id="jk" value="Tambah" required="">
         
        </div>
      </div>  
    </form>
    </br>

    <table class="table">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Nama Perusahaan</th>
            <th>Bidang Usaha</th>
            <th>Jabatan Terakhir</th>
            <th>Gaji Terakhir</th>
            <th>Dari</th>
            <th>Sampai</th>
            <th>Keterangan</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
        <?php   
            $no =1;
            $peng = mysqli_query($koneksi,"SELECT * FROM peng_biodata WHERE uid='$uid'");
            while($l = mysqli_fetch_array($peng)){
        ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $l['nama_peng'] ?></td>
            <td><?= $l['bidang'] ?></td>
            <td><?= $l['jabatan'] ?></td>
            <td><?= $l['gaji'] ?></td>
            <td><?= $l['dari'] ?></td>
            <td><?= $l['sampai'] ?></td>
            <td><?= $l['ket'] ?></td>
            <td>
                <a href="func/func_peng.php?id=<?php echo $l['id_peng']; ?>" class="btn btn-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                    </svg>
                </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
    </table>