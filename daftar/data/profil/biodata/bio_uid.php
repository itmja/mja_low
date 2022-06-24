
<form class="needs-validation" method="POST" action="func/func_pro.php">
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="firstName"  class="form-label">Nama Depan</label>
          <input type="text" name="namadp" class="form-control" id="firstName" placeholder="" value="<?= $a['nama_depan'] ?>" disabled>
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-6">
          <label for="lastName"  class="form-label">Nama Belakang</label>
          <input type="text" name="namabk" class="form-control" id="lastName" placeholder="" value="<?= $a['nama_belakang'] ?>" disabled>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-3">
          <label for="jk" class="form-label">Jenis Kelamin</label>
          <select name="jk" value="<?= $a['jk'] ?>"value="<?= $a['nama_belakang'] ?>" class="form-control" disabled id="">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-3">
          <label for="agama" class="form-label">Agama</label>
          <select name="agama" value="<?= $a['agama'] ?>" class="form-control" disabled id="">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
          </select>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-3">
          <label for="tempatl" class="form-label">Tempat Lahir</label>
          <input type="text" name="tempatl" class="form-control" id="tempatl" placeholder="" disabled value="<?= $a['tempat_l'] ?>" required="">
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-3">
          <label for="tgll" class="form-label">Tanggal Lahir</label>
          <input type="text" name="tgll" class="form-control" id="tgll" placeholder="" disabled value="<?= $a['tgl_l'] ?>" required="">
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-3">
          <label for="tb" class="form-label">Tingggi Badan</label>
          <input type="text" name="tb" class="form-control" id="tb" placeholder="" disabled value="<?= $a['tb'] ?>" required="">
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-3">
          <label for="bb" class="form-label">Berat Badan</label>
          <input type="text" name="bb" class="form-control" id="bb" placeholder="" disabled value="<?= $a['bb'] ?>" required="">
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-3">
          <label for="kwn" class="form-label">Kewarganegaraan</label>
          <input type="text" name="kwn" class="form-control" id="kwn" placeholder="" disabled value="<?= $a['kwn'] ?>" required="">
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-3">
          <label for="sb" class="form-label">Suku Bangsa</label>
          <input type="text" name="sb" class="form-control" id="sb" placeholder="" disabled value="<?= $a['sb'] ?>" required="">
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-3">
          <label for="statusk" class="form-label">Status Perkawinan</label>
          <select name="statusk" value="<?= $a['status_p'] ?>" class="form-control" id="" disabled>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Menikah">Menikah</option>
            <option value="Cerai">Cerai</option>
           
          </select>
          
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-6">
          <label for="ibu_k" class="form-label">Ibu Kandung</label>
          <input type="text" name="ibu_k" class="form-control" id="ibu_k" placeholder="" value="<?= $a['ibu_kandung'] ?>" required="" disabled>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-3">
          <label for="pendik" class="form-label">Pendidikan</label>
          <select class="form-control" value="<?= $a['pendik'] ?>" name="pendik" id="" disabled>
            <?php
              $pendik = $a['pendik'];
              if($pendik !== ""){
              $data = mysqli_query($koneksi,"select * from pendik where id_pendik='$pendik'");
              $d = mysqli_fetch_array($data)

            ?> 
                <option value="<?= $d['id_pendik'] ?>"><?= $d['nama'] ?></option>
                
            <?php
              $data1 = mysqli_query($koneksi,"SELECT * from pendik WHERE NOT id_pendik='$pendik'");
              while($e = mysqli_fetch_array($data1)){
              ?>
               <option value="<?= $e['id_pendik'] ?>"><?= $e['nama'] ?></option>
              <?php
              }
              $data1 = mysqli_query($koneksi,"SELECT * from pendik");
              while($c = mysqli_fetch_array($data1)){
              ?>
               <option value="<?= $c['id_pendik'] ?>"><?= $c['nama'] ?></option>
              <?php
              }
            }
            ?>
          </select>
         
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          <select class="form-control" value="<?= $a['jurusan'] ?>" name="pendik" id="" disabled>
            <?php
              $jurusan = $a['jurusan'];
              if($pendik !== ""){
              $data = mysqli_query($koneksi,"select * from jurusan where id_jur='$jurusan'");
              $d = mysqli_fetch_array($data)

            ?> 
                <option value="<?= $d['id_jur'] ?>"><?= $d['jurusan'] ?></option>
                
            <?php
              $data1 = mysqli_query($koneksi,"SELECT * from jurusan WHERE NOT id_jur='$jurusan'");
              while($e = mysqli_fetch_array($data1)){
              ?>
               <option value="<?= $e['id_jur'] ?>"><?= $e['jurusan'] ?></option>
              <?php
              }
              $data1 = mysqli_query($koneksi,"SELECT * from jurusan");
              while($c = mysqli_fetch_array($data1)){
              ?>
               <option value="<?= $c['id_jur'] ?>"><?= $c['jurusan'] ?></option>
              <?php
              }
            }
            ?>
          </select>
         
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-6">
          <label for="no_kk" class="form-label">No. KK</label>
          <input type="text" name="no_kk" class="form-control" id="no_kk" placeholder="" value="<?= $a['no_kk'] ?>" required="" disabled>
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-6">
          <label for="no_ktp" class="form-label">No. KTP</label>
          <input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="" value="<?= $a['no_ktp'] ?>" required="" disabled>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-9">
          <label for="alamatr" class="form-label">Alamat Rumah</label>
          <input type="text" name="alamatr" class="form-control" id="alamatr" placeholder="" value="<?= $a['alm_rumah'] ?>" required="" disabled>
          <div class="invalid-feedback">
          Valid first name is required.
          </div>
        </div>
        <div class="col-sm-9">
          <label for="alamatk" class="form-label">Alamat Kos</label>
          <input type="text" name="alamatk" class="form-control" id="alamatk" placeholder="" value="<?= $a['alm_kos'] ?>" required="" disabled>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-6">
          <label for="no_rek" class="form-label">No. Rekening</label>
          <input type="text" name="no_rek" class="form-control" id="no_rek" placeholder="" value="<?= $a['no_rekening'] ?>" required="" disabled>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-6">
          <label for="nama_bank" class="form-label">Nama Bank</label>
          <select name="nama_bank" value="<?= $a['nama_bank'] ?>" class="form-control" id="" disabled>
            <option value="MANDIRI">MANDIRI</option>
            <option value="BCA">BCA</option>
            <option value="BNI">BNI</option>
            <option value="BANK JATIM">BANK JATIM </option>
            <option value="BANK MEGA">BANK MEGA</option> 
          </select>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-sm-6">
          <label for="no_hp" class="form-label">No. HP</label>
          <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="" value="<?= $a['no_hp'] ?>" required="" disabled>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
      </div> 
            </br>
            <!-- <input type="submit" class="btn btn-warning" value="Simpan" name="daftar" />        -->
      <!-- <button class="btn btn-warning" type="submit">Simpan</button> -->
    </form>