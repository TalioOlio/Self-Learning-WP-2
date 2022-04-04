<?php
    session_start();
    session_destroy();

    session_start();
    $_SESSION['isLogin'] = false;
    header("Location: welcome.php");
?>