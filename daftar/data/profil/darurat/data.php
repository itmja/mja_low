<br>
<form action="func/func_dar.php" method="POST">
    <div class="row g-3">
        <div class="col-sm-4">
          
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="" required="">
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-4">
          
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="" required="">
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-2">
         
          <input type="text" class="form-control" id="no_hp" name="no_hp"  placeholder="No. Hp" value="" required="">
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-2">
          
          <input type="submit" class="btn btn-warning" value="Tambah" name="add" >
         
        </div>
        
      </div>  
    </form>
</br>

    <table class="table">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>No. Hp</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
       <?php   
            $no =1;
            $dar = mysqli_query($koneksi,"SELECT * FROM bio_darurat WHERE uid='$uid'");
            while($t = mysqli_fetch_array($dar)){
       ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $t['nama_leng'] ?></td>
            <td><?= $t['alamat'] ?></td>
            <td><?= $t['no_hp'] ?></td>
            <td>
                <a href="func/func_dar.php?id=<?php echo $t['id_dar']; ?>" class="btn btn-warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                </svg>
                </a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
    </table>