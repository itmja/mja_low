<?php 
include("cdb.php");
require '../../../mail/PHPMailer.php';
require '../../../mail/SMTP.php';
require '../../../mail/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
session_start();
$email = $_SESSION['email'];
$id = $_SESSION['uid'];
$job = $_GET['job'];
$no =  $_GET['no'];
$date = date('hms');
$nomor =  $no.$date;
$cekda =  mysqli_query($koneksi, "SELECT * FROM biodata_lo WHERE uid = '$id'");
if ($cekda->num_rows > 0) {
    $cekup =  mysqli_query($koneksi, "SELECT * FROM berkas WHERE uid = '$id'");
    if ($cekup->num_rows > 0) {

        $cek =  mysqli_query($koneksi, "SELECT * FROM lamar WHERE uid = '$id' AND id_job='$job'");
        if ($cek->num_rows > 0) {
            header("Location:../job.php?msg=msg");

        } else {
            $lamar = mysqli_query($koneksi,"INSERT INTO `lamar` (`id_lamar`, `id_job`, `uid`, `no_lamar`) VALUES (NULL, '$job', '$id', '$nomor');");
            if($lamar) { 
                include "phpqrcode/qrlib.php"; 
                $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
                if (!file_exists($tempdir)) //Buat folder bername temp
                mkdir($tempdir);

                //ambil logo
                $logopath="../../../assets/img/logo.png";

            //isi qrcode jika di scan
                $codeContents = "http://localhost/lowongan/lamar.php?id=".$id."&job=".$job; 

                //simpan file qrcode
                QRcode::png($codeContents, $tempdir.$id.$job.'.png', QR_ECLEVEL_H, 10,4);


                // ambil file qrcode
                $QR = imagecreatefrompng($tempdir.$id.$job.'.png');

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
                $save = imagepng($QR,$tempdir.$id.$job.'.png');
                if ($save) {
                    
                    // $user = $auth->getUser($id);
                    $mail = new PHPMailer();
                    $mail->isSMTP();
                    $mail->Host = "smtp.gmail.com";
                    $mail->SMTPAuth = "true";
                    $mail->SMTPSecure = "tls";
                    $mail->Port = "587";
                    $mail->Username = "noreply@mitrajasa.com";
                    $mail->Password = "JaWaRa321";
                    $mail->setFrom($email);
                    $mail->addAddress($email);
                    $mail->addAttachment($tempdir.$id.$job.'.png', $no.'.png');
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Lowongan Mitra Jua Abadi';
                    $mail->Body    = '
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
                                    <p class="form-control">
                                        <b>Lowongan Mitra</b>
                                        <br>
                                        <br>
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
                    ';
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    if ($mail->Send()) {
                    echo "Send";

                    }else{
                        echo "Error";
                    }

                    $mail->smtpClose();
                }
                

                header('Location: ../job.php');
            } else {
            
            header('Location: ../job.php');
            }
        }
    } else {
        header("Location:../job.php?msg2=msg2");
    }  
} else {
    header("Location:../job.php?msg1=msg1");


}

?>