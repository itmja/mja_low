<form action="func/func_upload.php" method="POST" enctype="multipart/form-data">
    <div class="row g-3">
        <div class="col-sm-4">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Berkas" value="" required="">
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-4">
          <select name="jenis" class="form-control" id="">
              <option value="">... Jenis File ...</option>
              <?php
                   
                $no =1;
                $jen = mysqli_query($koneksi,"SELECT * FROM jenis_berkas");
                while($j = mysqli_fetch_array($jen)){              
              ?>
              <option value="<?= $j['id_jen'] ?>"><?= $j['jenis'] ?></option>
            <?php } ?>
          </select>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-2">
         
          <input type="file" class="form-control" id="" name="file"  placeholder="" value="" required="">
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-2">
          
          <input type="submit" class="btn btn-warning" value="Tambah" name="add" >
         
        </div>
        
      </div>  
</form>