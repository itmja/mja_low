<?php 
    session_start();
    include("db.php");

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $clearTextPassword = $_POST['pass'];
        
        try {
           
            $user = $auth->getUserByEmail("$email");
            try {
                $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
             
                $idTokenString = $signInResult->idToken();;

                try {
                    $verifiedIdToken = $auth->verifyIdToken($idTokenString);
                    $uid = $verifiedIdToken->claims()->get('sub');
                    $email = $auth->getUser($uid);
                    $_SESSION['email'] = $email->email;
                    $_SESSION['uid'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['sukses'] = "Anda berhasil Login";
                    $_SESSION['header'] = "Anda berhasil Login";
                    $_SESSION['status'] = "Logged in Success";
                    header('Location: data/index.php');
                    // exit();

                } catch (InvalidToken $e) {
                    $_SESSION['gagal'] = "Maaf Ada kesalahan !!";
                    header('Location: index.php');
                    echo 'The token is invalid: '.$e->getMessage();
                } catch (\InvalidArgumentException $e) {
                    $_SESSION['gagal'] = "Maaf Ada kesalahan !!";
                    header('Location: index.php');
                    echo 'The token could not be parsed: '.$e->getMessage();
                }
            } catch (Exception $e) {
                
                $_SESSION['gagal'] = "Maaf Ada kesalahan !!";
                header('Location: index.php');
                

            }
            
            
        } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
            echo $e->getMessage();
        }
    }else{

    }
    if(isset($_POST['registrasi'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $userProperties = [
            'email' => $email,
            'password' => $pass,
            'displayName' => $name,
        ];
        
        $createdUser = $auth->createUser($userProperties);
        if($createdUser){
            header('Location: index.php');
        }else{
            
        }
    }

    if(isset($_POST['fupdate'])){
       $file = $_FILES['foto']['name'];
       $random_no = rand(1111.9999);
       $uid = $_SESSION['uid'];
       $user = $auth->getUser($uid);
       $new_image = $random_no.$file;
       $old_image = $user->photoUrl;
       if($file != NULL){
            $filename = 'uploads/'.$new_image;

       }else{
            $filename = $old_image;
       }
        $properties = [
            'photoUrl' => $filename
        ];
        $updatedUser = $auth->updateUser($uid, $properties);
        if($updatedUser){
            if($file != NULL){
                move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/".$new_image);
                if($old_image != NULL){
                    unlink($old_image);
                }
            }
            $_SESSION['sukses'] = "Data Berhasil di simpan";
            header('Location: akun.php');
        }    
    }
    if(isset($_POST['update'])){
        $nama = $_POST['nama'];
        $uid = $_SESSION['uid'];
        $no_hp = $_POST['no_hp'];
        $properties = [
            'displayName' => $nama,
            'phoneNumber' => $no_hp
        ];
        try {
            $updatedUser = $auth->updateUser($uid, $properties);
            if($updatedUser){
                $_SESSION['update'] = "Data Berhasil di Perbarui";
                $_SESSION['title'] = "Sukses";
                $_SESSION['icon'] = "success";
                header('Location: akun.php');
            }
        } catch (\Throwable $th) {
            $_SESSION['title'] = "Gagal";
            $_SESSION['icon'] = "warning";
            $_SESSION['update'] = "Gagal Meperbarui No Hp Format Salah Gunakan Format +62xxxxxx";
            header('Location: akun.php');
        }
    }

?>