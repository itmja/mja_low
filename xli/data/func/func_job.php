<?php 
include "cdb.php";

if(isset($_POST['submit'])){
    $nama= $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $d = date("Y/m/d");
    $kd = "JOB.$d";
    $sq = "INSERT INTO new_job (kode_job,id_kjob,deskripsi)VALUES('$kd','$nama','$deskripsi')";
    $a = mysqli_query($koneksi, $sq);
    if($a){
        header('Location: ../job.php');
    }
}
    $id = $_GET['id'];
    $hpus = mysqli_query($koneksi,"DELETE FROM new_job WHERE id_job='$id'");
    if($hpus){
        header('Location: ../job.php');
    }


?>