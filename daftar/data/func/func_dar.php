<?php 
    include("cdb.php");
    session_start();
    if (isset($_POST['add'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $uid = $_SESSION['uid'];
        $sql= "INSERT INTO `bio_darurat` (`id_dar`, `uid`, `nama_leng`, `alamat`, `no_hp`) VALUES (NULL, '$uid', '$nama', '$alamat', '$no_hp')";
        $query = mysqli_query($koneksi, $sql);
        if( $query ) {
            
            header('Location: ../profil.php');
        } else {
           
           header('Location: ../profil.php');
        }
    }
    $id = $_GET['id'];
    $hpus = mysqli_query($koneksi,"DELETE FROM bio_darurat WHERE id_dar='$id'");
    if( $hpus ) {    
        header('Location: ../profil.php');
    } else {
       
       header('Location: ../profil.php');
    }
?>