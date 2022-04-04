<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "finance_users";

    $connection = mysqli_connect($server, $username, $password, $db_name); 

    if($connection) {
        echo "Koneksi berhasil";
    } else {
        throw new Exception("Mysql Connection Error:" .mysqli_connect_error());
    }
?>