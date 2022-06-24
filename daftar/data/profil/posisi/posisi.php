<br>
<form action="func/func_pos.php" method="POST">
    <div class="row g-3">
        <div class="col-sm-4">
          
          <select name="posisi" id="" class="form-control" placeholder="Posisi">
            <option value="">- Pilih Posisi -</option>
              <?php 
                $job = mysqli_query($koneksi,"SELECT * FROM kategori_job ");
                while($d = mysqli_fetch_array($job)){
              ?>
              <option value="<?= $d['id_job'] ?>"><?= $d['nama_job'] ?></option>
              <?php } ?>
          </select>
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-3">
         
          <input type="submit" class="btn btn-warning" name="add" placeholder="" value="Tambah" required="">
         
        </div>
        
      </div>  
    </form>
    </br>

    <table class="table">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Posisi</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
        <?php   
            $no =1;
            $or = mysqli_query($koneksi,"SELECT *,kategori_job.nama_job FROM posisi INNER JOIN kategori_job ON kategori_job.id_job = posisi.id_job WHERE uid='$uid'");
            while($o = mysqli_fetch_array($or)){
        ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $o['nama_job'] ?></td>
            <td>
                <a href="func/func_pos.php?id=<?php echo $o['id_posisi']; ?>" class="btn btn-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                    </svg>
                </a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
    </table>