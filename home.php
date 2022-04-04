<?php 
    session_start();
    if($_SESSION['isLogin'] == false) {
        header("Location: welcome.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/home.css">
    <title>Home | Pengelolaan Keuangan</title>
</head>
<body>
    <nav>
        <div class="navbar-left">
            <h4>Financial Management</h4>
        </div>
        <div class="navbar-right">
            <a href="./home.php">Home</a>
            <a href="./profile.php">Profile</a>
            <a href="./logout.php">Logout</a>
        </div>
    </nav>
   
    <div class="banner-desc">
        <?php print "<h1>Welcome ".$_SESSION['row']['namaDepan']." ".$_SESSION['row']['namaTengah']." ".$_SESSION['row']['namaBelakang'].", to Financial Management Application</h1>" ?>
        <p>Manage your financial throughly with us. Managing financial is important to maintain our financial condition</p>
        <img src="" alt="">
    </div>

    <div class="banner-text">
        <p class="text1">Explore the new world of financial management with us now!</p>
        <p class="text2">Plan your financial income and expenses!</p>
    </div>
</body>
</html>
