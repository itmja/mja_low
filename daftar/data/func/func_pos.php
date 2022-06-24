<?php 
    include("cdb.php");
    session_start();
    if (isset($_POST['add'])) {
        $posisi = $_POST['posisi'];
        $uid = $_SESSION['uid'];
        $sql= "INSERT INTO `posisi` (`id_posisi`, `uid`, `id_job`) VALUES (NULL, '$uid', '$posisi');";
        $query = mysqli_query($koneksi, $sql);
        if( $query ) {
            
            header('Location: ../profil.php');
        } else {
           
           header('Location: ../profil.php');
        }
    }
    $id = $_GET['id'];
    $hpusor = mysqli_query($koneksi,"DELETE FROM posisi WHERE id_posisi='$id'");
    if( $hpusor) {    
        header('Location: ../profil.php');
    } else {
       
       header('Location: ../profil.php');
    }
?>