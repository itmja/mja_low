<?php
    include("cdb.php");
    session_start();

    // $nama_dp = $_POST['namadp'];
    // $nama_bk = $_POST['namabk'];
    // $jk = $_POST['jk'];
    // $agama = $_POST['agama'];
    // $tempat_l = $_POST['tempatl'];
    // $tgll = $_POST['tgll'];
    // $tb = $_POST['tb'];
    // $bb = $_POST['bb'];
    // $kwn = $_POST['kwn'];
    // $sb = $_POST['sb'];
    // $statusk = $_POST['statusk'];
    // $ibu_k = $_POST['ibu_k'];
    // $pendik = $_POST['pendik'];
    // $no_kk = $_POST['no_kk'];
    // $no_ktp = $_POST['no_ktp'];
    // $alm_r = $_POST['alamatr'];
    // $alm_k = $_POST['alamatk'];
    // $no_rek = $_POST['no_rek'];
    // $nm_bank = $_POST['nama_bank'];
    // $no_hp = $_POST['no_hp'];

    // echo $nama_dp;
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
    

    // $q = mysqli_query($koneksi, "INSERT INTO biodata_lo (kode_lo,nama_depan,nama_belakang,jk,agama,tempat_l,tgl_l,kwn,tb,bb,sb,status_k,no_kk,no_ktp,ibu_kandung,alm_rumah,alm_kos,no_hp,no_rekening,nama_bank,pendik)VALUES('$kode','$nama_dp','$nama_bk','$jk','$agama','$tempat_l','$tgll','$kwn','$tb','$bb','$sb','$statusk','$no_kk','$no_ktp','$ibu_k','$alm_r','$alm_k','$no_hp','$no_rek','$nm_bank','$pendik')");

    if(isset($_POST['daftar'])){

        $nama_dp = $_POST['namadp'];
        $nama_bk = $_POST['namabk'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $tempat_l = $_POST['tempatl'];
        $tgl1 = $_POST['tgll'];
        $datecreate = date_create($tgl1);
        $tgll = date_format($datecreate,"Y-m-d");
        $tb = $_POST['tb'];
        $bb = $_POST['bb'];
        $kwn = $_POST['kwn'];
        $sb = $_POST['sb'];
        $statusk = $_POST['statusk'];
        $ibu_k = $_POST['ibu_k'];
        $pendik = $_POST['pendik'];
        $jurusan = $_POST['jurusan'];
        $no_kk = $_POST['no_kk'];
        $no_ktp = $_POST['no_ktp'];
        $alm_r = $_POST['alamatr'];
        $alm_k = $_POST['alamatk'];
        $no_rek = $_POST['no_rek'];
        $nm_bank = $_POST['nama_bank'];
        $no_hp = $_POST['no_hp'];
        $uid = $_SESSION['uid'];
      
        // $data = mysqli_query($koneksi,"select * from pendik");
        // while($d = mysqli_fetch_array($data)){
        //     echo $d['nama'];
        // }
        $q = mysqli_query($koneksi, "INSERT INTO biodata_lo (nama_depan,nama_belakang,jk,agama,tempat_l,tgl_l,kwn,tb,bb,sb,status_k,no_kk,no_ktp,ibu_kandung,alm_rumah,alm_kos,no_hp,no_rekening,nama_bank,pendik)VALUES('$nama_dp','$nama_bk','$jk','$agama','$tempat_l','$tgll','$kwn','$tb','$bb','$sb','$statusk','$no_kk','$no_ktp','$ibu_k','$alm_r','$alm_k','$no_hp','$no_rek','$nm_bank','$pendik')");

      
        $sql = "INSERT INTO `biodata_lo` (`id_bio`, `kode_lo`, `nama_depan`, `nama_belakang`, `jk`, `agama`, `tempat_l`, `tgl_l`, `kwn`, `tb`, `bb`, `sb`, `status_p`, `no_kk`, `no_ktp`, `ibu_kandung`, `alm_rumah`, `alm_kos`, `no_hp`, `no_rekening`, `nama_bank`, `pendik`, `jurusan`, `uid`) VALUES (NULL, '$kode', '$nama_dp', '$nama_bk', '$jk', '$agama', '$tempat_l', '$tgll', '$kwn', '$tb', '$bb', '$sb', '$statusk', '$no_kk', '$no_ktp', '$ibu_k', '$alm_r', '$alm_r', '$no_hp', '$no_rek', '$nm_bank', '$pendik','$jurusan', '$uid');";
        $query = mysqli_query($koneksi, $sql);
    
       
        if( $query ) {
           
            header('Location: ../profil.php');
        } else {
          
           header('Location: ../profil.php');
        }
    
    
    } else {
        die("Akses dilarang...");
    }
?>