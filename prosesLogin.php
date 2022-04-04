<?php
    session_start();
    include("config.php");
    $_SESSION['row'] = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_SESSION)) {
            $STR_QUERY = "SELECT * FROM users WHERE 
                username = '".$_POST['usernameLogin']."' AND 
                password = '".$_POST['password1Login']."'";
            $query = mysqli_query($connection, $STR_QUERY);
            $row = mysqli_fetch_array($query);
            if(!is_null($row)) {
                echo "Login berhasil! Anda kan diarahkan ke halaman utama";
                $_SESSION['row'] = $row;
                $_SESSION['isLogin'] = true;
                header('Location: home.php');
            } else {
                echo "Silahkan cek kembali username dan password anda";
                $_SESSION['isLogin'] = false;
            }
        } else {
            echo "Silahkan lakukan registrasi terlebih dahulu untuk dapat melakukan login";
            $_SESSION['isLogin'] = false;
            header('Location: welcome.php');
        }

    }
?>
