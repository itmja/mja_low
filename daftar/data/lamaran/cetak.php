<?php
    $id = $_GET['id'];
    $no= $_GET['no'];
    $nama = $_GET['nama'];
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    // echo $url;
    include "phpqrcode/qrlib.php"; 
    $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
    if (!file_exists($tempdir)) //Buat folder bername temp
    mkdir($tempdir);

    //ambil logo
    $logopath="../../../assets/img/logo.png";

 //isi qrcode jika di scan
    $codeContents = $url; 

    //simpan file qrcode
    QRcode::png($codeContents, $tempdir.$id.$no.'.png', QR_ECLEVEL_H, 10,4);


    // ambil file qrcode
    $QR = imagecreatefrompng($tempdir.$id.$no.'.png');

    // memulai menggambar logo dalam file qrcode
    $logo = imagecreatefromstring(file_get_contents($logopath));
    
    imagecolortransparent($logo , imagecolorallocatealpha($logo , 0, 0, 0, 127));
    imagealphablending($logo , false);
    imagesavealpha($logo , true);

    $QR_width = imagesx($QR);
    $QR_height = imagesy($QR);

    $logo_width = imagesx($logo);
    $logo_height = imagesy($logo);

    // Scale logo to fit in the QR Code
    $logo_qr_width = $QR_width/8;
    $scale = $logo_width/$logo_qr_width;
    $logo_qr_height = $logo_height/$scale;

    imagecopyresampled($QR, $logo, $QR_width/2.3, $QR_height/2.3, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);

    // Simpan kode QR lagi, dengan logo di atasnya
    imagepng($QR,$tempdir.$id.$no.'.png');
    
    // menampilkan file qrcode 
    // echo '<div align="center"><h2>Create QR Code With Logo PHP</h2>';
    // echo '<img src="'.$tempdir.'qrwithlogo.png'.'" />';
    // echo '<br><a href="https://www.maribelajarcoding.com">maribelajarcoding.com</a><div>';
    // $uri = $_SERVER['REQUEST_URI'];
    // echo $uri; // Outputs: URI
    
     // Outputs: Full URL
    
    // $query = $_SERVER['QUERY_STRING'];
    // echo $query;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/offcanvas-navbar/">
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
            <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../../css/styles.css" rel="stylesheet" />
        <title>E - Lowongan</title>
    </head>
    <body>
        <div class="row">
            <center>
                <img src="<?= $tempdir.$id.$no.'.png' ?>" class="mb-4"  width="500" height="500">
            </center>
            <center>
                <p class="form-control">
                    <b>Lowongan Mitra</b>
                    <br><?= $nama ?>
                    <br><?= $no ?>
                </p>
            </center>
            
            <center>
                <p class="form-control">
                    Terima Kasih
                <br>
                    PT. MITRA JUA ABADI
                </p>
            </center>
           
        </div>
        <center>
            <button id="btnPrint" class="btn btn-primary">Print</button>
        </center>
        <script>
            const $btnPrint = document.querySelector("#btnPrint");
            $btnPrint.addEventListener("click", () => {
                window.print();
            });
        </script>
        <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="offcanvas.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../../../js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
</html>