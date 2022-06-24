<?php 
    include("cdb.php");
    session_start();
    if (isset($_POST['add'])) {
        $nama = $_POST['nama'];
        $bidang = $_POST['bidang'];
        $jabatan =$_POST['jabatan'];
        $gaji = $_POST['gaji'];
        $dari = $_POST['dari'];
        $sampai = $_POST['sampai'];
        $ket = $_POST['ket'];
        $uid = $_SESSION['uid'];
        $sql= "INSERT INTO `peng_biodata` (`id_peng`, `uid`, `nama_peng`, `bidang`, `jabatan`, `gaji`, `dari`, `sampai`, `ket`) VALUES (NULL, '$uid', '$nama', '$bidang', '$jabatan', '$gaji', '$dari', '$sampai', '$ket');";
        $query = mysqli_query($koneksi, $sql);
        if( $query ) {
            
            header('Location: ../profil.php');
        } else {
           
           header('Location: ../profil.php');
        }
    }
    $id = $_GET['id'];
    $hpusor = mysqli_query($koneksi,"DELETE FROM peng_biodata WHERE id_peng='$id'");
    if( $hpusor) {    
        header('Location: ../profil.php');
    } else {
       
       header('Location: ../profil.php');
    }
?>