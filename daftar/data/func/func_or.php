<?php 
    include("cdb.php");
    session_start();
    if (isset($_POST['add'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jabatan =$_POST['jabatan'];
        $dari = $_POST['dari'];
        $sampai = $_POST['sampai'];
        $ket = $_POST['ket'];
        $uid = $_SESSION['uid'];
        $sql= "INSERT INTO `or_biodata` (`id_or`, `uid`, `nama_or`, `alm_or`, `jabatan`, `dari`, `sampai`, `ket`) VALUES (NULL, '$uid', '$nama', '$alamat', '$jabatan', '$dari', '$sampai', '$ket');";
        $query = mysqli_query($koneksi, $sql);
        if( $query ) {
            
            header('Location: ../profil.php');
        } else {
           
           header('Location: ../profil.php');
        }
    }
    $id = $_GET['id'];
    $hpusor = mysqli_query($koneksi,"DELETE FROM or_biodata WHERE id_or='$id'");
    if( $hpusor) {    
        header('Location: ../profil.php');
    } else {
       
       header('Location: ../profil.php');
    }
?>