<?php
    session_start();
    $_SESSION['isLogin'] = false;
    
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

        if (strlen($_POST['nik']) != 16) {
            $_SESSION['nikError'] = "nomor NIK tidak valid";
            $validationError = true;
        } else {
            $_SESSION['nik'] = $_POST['nik'];

            $STR_QUERY = "SELECT nik FROM users WHERE nik = '".$_POST["nik"]."'";
            $query = mysqli_query($connection, $STR_QUERY);
            $row = mysqli_fetch_array($query);
            if(is_null($row)) {
                $_SESSION['nik'] = $_POST['nik'];
            } else { 
                $_SESSION['nikError'] = "Nomor NIK sudah terdaftar";
                $validationError = true;               
            }
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

         if (strlen($_POST['username']) < 6) {
            $_SESSION["usernameError"] = "username minimal terdiri dari 6 karakter";
            $validationError = true;
         }
        else {
            $STR_QUERY = "SELECT username FROM users WHERE username = '".$_POST['username']."'";
            $query = mysqli_query($connection, $STR_QUERY);
            $row = mysqli_fetch_array($query);
            if(is_null($row)) {
                $_SESSION['usernameRegister'] = $_POST['username'];
            } else {
                $_SESSION['usernameError'] = "username sudah digunakan";
                $validationError = true;               
            }

        }

        if (strlen($_POST['password1']) < 8) {
            $_SESSION['password1Error'] = "Password minimal terdiri dari 8 karakter";
            $validationError = true;
        } else {
            $_SESSION['password1Register'] = $_POST['password1'];
        }

        if ($_POST['password2'] != $_POST['password1'] ) {
            $_SESSION['password2Error'] = "Password 2 wajib sama dengan password 1";
            $validationError = true;
        } else if (strlen($_POST['password2']) < 8){
            $_SESSION['password2Error'] = "Password minimal terdiri dari 8 karakter";
            $validationError = true;
        } else {
            $_SESSION['password2'] = $_POST['password2'];
        }

        $_SESSION['alamat'] = $_POST['alamat'];       

        if (strlen($_POST['kodePos']) != 5) {
            $_SESSION["kodePosError"] = "Kode pos tidak valid";
            $validationError = true;
        } else {
            $_SESSION['kodePos'] = $_POST['kodePos'];
        }
        

        if($validationError){
            header("Location: register.php");
        } else {
            $fileName = $_FILES['fotoProfil']['name'];
            $nameTemp = $_FILES['fotoProfil']['tmp_name'];
            
            $dirUpload = "PhotoFolder/";
            
            $uploaded = move_uploaded_file($nameTemp, $dirUpload.$fileName);
            
            $_SESSION['fotoProfil'] = $fileName;      
            $STR_QUERY = "INSERT INTO users VALUES ( 
            '".$_SESSION['namaDepan']."', 
            '".$_SESSION['namaTengah']."', 
            '".$_SESSION['namaBelakang']."', 
            '".$_SESSION['tempatLahir']."', 
            '".$_SESSION['tglLahir']."', 
            '".$_SESSION['nik']."', 
            '".$_SESSION['wargaNegara']."',
            '".$_SESSION['email']."', 
            '".$_SESSION['noHp']."', 
            '".$_SESSION['usernameRegister']."', 
            '".$_SESSION['password1Register']."', 
            '".$_SESSION['alamat']."', 
            '".$_SESSION['kodePos']."', 
            '".$_SESSION['fotoProfil']."')";

            $query = mysqli_query($connection, $STR_QUERY);
            if($query){
                echo "Registrasi Berhasil";
                header("Location: welcome.php");
            }
            else{
                echo "Registrasi Gagal <br/>".mysqli_error($connection);
            }

        }        
    }

?>