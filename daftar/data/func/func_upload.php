<?php 
    include("cdb.php");
    session_start();
    $files = $_FILES;

    $folderUpload = "./uploads";
    
    # periksa apakah folder sudah ada
    if (!is_dir($folderUpload)) {
        # jika tidak maka folder harus dibuat terlebih dahulu
        mkdir($folderUpload, 0777, $rekursif = true);
    }
    $fileFoto = (object) @$_FILES['file'];
    $filename = $_FILES['file']['name'];
    // echo "{$folderUpload}/{$fileFoto->name}";
    $uploadFotoSukses = move_uploaded_file(
        $fileFoto->tmp_name, "{$folderUpload}/{$fileFoto->name}"
    ); 
    if (isset($_POST['add'])) {
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $uid = $_SESSION['uid'];
        $dfile = "{$folderUpload}/{$fileFoto->name}";
        
        $sql= "INSERT INTO `berkas` (`id_up`, `uid`, `nama_berkas`, `id_jenis`, `lokasi`, `detail`) VALUES (NULL, '$uid', '$nama', '$jenis', '$dfile', '$filename');";
        $query = mysqli_query($koneksi, $sql);
        if( $query ) {
            header('Location: ../upload.php');
        } else {
           header('Location: ../upload.php');
        }
    }

?>