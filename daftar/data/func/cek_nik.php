<?php 
    include("cdb.php");
    session_start();
    $query = mysqli_query($koneksi, "SELECT max(kode_lo) as kodeTerbesar FROM biodata_lo");
    $data = mysqli_fetch_array($query);
    $kode = $data['kodeTerbesar'];
    
    // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
    // dan diubah ke integer dengan (int)
    $urutan = (int) substr($kode, 3, 3);
    
    // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
    $urutan++;
    
    // membentuk kode barang baru
    // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
    // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
    // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
    $huruf = "REG";
    $date = date("Y/m/d");
    $kode = $huruf . $date . sprintf("%03s", $urutan);
    $nik = $_POST['nik'];
    $cek = "SELECT *,xin_hrsale_module_attributes_values.attribute_value FROM xin_employees INNER JOIN xin_hrsale_module_attributes_values ON xin_hrsale_module_attributes_values.user_id = xin_employees.user_id WHERE module_attributes_id ='1' AND attribute_value='$nik'";
    $query = mysqli_query($koneksi1, $cek);
    $ls = mysqli_num_rows($query);
    // echo $ls;
    if ($ls === 0) {
        header('Location: ../profil.php');
    }else{
        while ($r = mysqli_fetch_array($query)) {
            if ($r['gender'] === "Female") {
               $gender = "Perempuan";
            }else{
                $gender = "Laki-Laki";
            }
           $sql = "INSERT INTO `biodata_lo` (`id_bio`, `kode_lo`, `nama_depan`, `nama_belakang`, `jk`, `agama`, `tempat_l`, `tgl_l`, `kwn`, `tb`, `bb`, `sb`, `status_p`, `no_kk`, `no_ktp`, `ibu_kandung`, `alm_rumah`, `alm_kos`, `no_hp`, `no_rekening`, `nama_bank`, `pendik`, `jurusan`, `uid`) VALUES (NULL, '$kode', '$r[first_name]', '$r[last_name]', '$gender', '', '$r[tempat_l]', '$r[date_of_birth]', '$r[state]', '', '', '', '', '', '$r[attribute_value]', '', '$r[address]', '', '$r[contact_no]', '', '', '','', '$_SESSION[uid]');";
           $query = mysqli_query($koneksi, $sql);
        }
        header('Location: ../profil.php');
    }
    // while ($r = mysqli_fetch_array($query)) {
    //     // echo $r['attribute_value'];
    //     if ($r['attribute_value'] === null) {
    //         header('Location: ../profil.php');
    //     }else{
    //         echo $r['attribute_value'];
    //     }
    // }
?>