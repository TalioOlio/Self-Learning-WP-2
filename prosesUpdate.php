<?php
    session_start();
    
    include("config.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Validation
        $validationError = false;
        $_SESSION['namaDepanError'] = $_SESSION['namaTengahError'] = $_SESSION['namaBelakangError'] = $_SESSION['tempatLahirError'] = $_SESSION['tglLahirError'] = $_SESSION['nikError'] = $_SESSION['wargaNegaraError'] = $_SESSION['noHpError'] = $_SESSION['usernameError'] = $_SESSION['password1Error'] = $_SESSION['password2Error'] = $_SESSION['kodePosError'] = "";

        if(!ctype_alpha($_POST['namaDepan'])) {
            $_SESSION['namaDepanError'] = "Nama wajib dalam bentuk karakter";
            $validationError = true;
        } else{
            $_SESSION['namaDepan'] = $_POST['namaDepan'];
        }

        if (!ctype_alpha($_POST['namaTengah'])) {
            $_SESSION['namaTengahError'] =  "Nama wajib dalam bentuk karakter";
            $validationError = true;
        } else {
            $_SESSION['namaTengah'] = $_POST['namaTengah'];
        }        

        if (!ctype_alpha($_POST['namaBelakang'])) {
            $_SESSION['namaBelakangError'] = "Nama wajib dalam bentuk karakter";
            $validationError = true;
        } else {
            $_SESSION['namaBelakang'] = $_POST['namaBelakang'];
        }

        if (!ctype_alpha($_POST['tempatLahir'])) {
            $_SESSION['tempatLahirError'] = "Tempat lahir wajib dalam bentuk karakter";
            $validationError = true;
        } else {
            $_SESSION['tempatLahir'] = $_POST['tempatLahir'];
        }

        $tglLahir_temp = date('m/d/Y', strtotime($_POST['tglLahir']));

        if ($tglLahir_temp > date('m/d/Y')) {
            $_SESSION['tglLahirError'] = "Tanggal lahir tidak valid";
            $validationError = true;
        } else {
            $_SESSION['tglLahir'] = $_POST['tglLahir'];
        }

        if (!ctype_alpha($_POST['wargaNegara'])) {
            $_SESSION['wargaNegaraError'] = "Nama negara wajib dalam bentuk karakter";
            $validationError = true;
        } else {
            $_SESSION['wargaNegara'] = $_POST['wargaNegara'];
        }

        $_SESSION['email'] = $_POST['email'];

        if (strlen($_POST['noHp']) != 11 && strlen($_POST['noHp']) != 12) {
            $_SESSION['noHpError'] = "No HP wajib terdiri dari 11 - 12 digit";
            $validationError = true;
        } else {
            $_SESSION['noHp'] = $_POST['noHp'];
        }

        $_SESSION['alamat'] = $_POST['alamat'];       

        if (strlen($_POST['kodePos']) != 5) {
            $_SESSION['kodePosError'] = "Kode pos tidak valid";
            $validationError = true;
        } else {
            $_SESSION['kodePos'] = $_POST['kodePos'];
        }     

        if($validationError){
            header("Location: EditProfile.php");
        } else {
            $fileName = $_FILES['fotoProfil']['name'];
            $nameTemp = $_FILES['fotoProfil']['tmp_name'];
            
            $dirUpload = "PhotoFolder/";
            
            $uploaded = move_uploaded_file($nameTemp, $dirUpload.$fileName);
            
            $_SESSION['fotoProfil'] = $fileName;      
            $STR_QUERY = "UPDATE users SET 
                `namaDepan` = '".$_SESSION['namaDepan']."', 
                `namaTengah` = '".$_SESSION['namaTengah']."', 
                `namaBelakang` = '".$_SESSION['namaBelakang']."', 
                `tempatLahir` = '".$_SESSION['tempatLahir']."', 
                `tglLahir` = '".$_SESSION['tglLahir']."', 
                `email` = '".$_SESSION['email']."', 
                `noHp` = '".$_SESSION['noHp']."', 
                `alamat` = '".$_SESSION['alamat']."', 
                `kodePos` = '".$_SESSION['kodePos']."', 
                `fotoProfil` = '".$_SESSION['fotoProfil']."'
                WHERE `username` = '".$_SESSION['row']['username']."'";

            $query = mysqli_query($connection, $STR_QUERY);

            if($query){
                $STR_QUERY = "SELECT * FROM users WHERE username = '".$_SESSION['usernameRegister']."'";
                $query = mysqli_query($connection, $STR_QUERY);
                $row = mysqli_fetch_array($query);

                $_SESSION['row'] = $row;
                echo "Profile Update Berhasil";
                header("Location: profile.php");
            }
            else{
                echo "Profile Update Gagal <br/>".mysqli_error($connection);
                header("Location: profile.php");
            }

        }        
    }

?>