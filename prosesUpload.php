<?php
    $fileName = $_FILES['fotoProfil']['name'];
    $nameTemp = $_FILES['fotoProfil']['nameTemp'];

    $dirUpload = "PhotoFolder/";

    $uploaded = move_uploaded_file($nameTemp, $dirUpload.$fileName);
?>