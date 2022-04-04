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
    <link rel="stylesheet" href="./style/profile.css">
    <title>Profile | Pengelolaan Keuangan</title>
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

    <div class="main">
        <div class="profile">
            <h1>Profile Detail</h1>
            <a href="./EditProfile.php">Edit Profile</a><br><br>
            <div class="profile-photo">
                <img src="./PhotoFolder/<?php echo $_SESSION['row']['fotoProfil']?>" alt="" height="200px">
            </div>
            <p></p>
                <div class="profile-container">
                    <div class="profile-left">
                        <div class="profile-items">
                            <label for="namaDepan">Nama Depan</label><br>
                            <?php print "<p>".$_SESSION['row']['namaDepan']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="tempatLahir">Tempat Lahir</label><br>
                            <?php print "<p>".$_SESSION['row']['tempatLahir']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="wargaNegara">Warga Negara</label><br>
                            <?php print "<p>".$_SESSION['row']['wargaNegara']."<p>" ?>
                        </div>
                    </div>
    
                    <div class="profile-middle">
                        <div class="profile-items">
                            <label for="namaTengah">Nama Tengah</label><br>
                            <?php print "<p>".$_SESSION['row']['namaTengah']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="tglLahir">Tgl Lahir</label><br>
                            <?php print "<p>".$_SESSION['row']['tglLahir']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="email">Email</label><br>
                            <?php print "<p>".$_SESSION['row']['email']."<p>" ?>
                        </div>
                    </div>
        
                    <div class="profile-right">
                        <div class="profile-items">
                            <label for="namaBelakang">Nama Belakang</label><br>
                            <?php print "<p>".$_SESSION['row']['namaBelakang']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="nik">NIK</label><br>
                            <?php print "<p>".$_SESSION['row']['nik']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="noHp">No HP</label><br>
                            <?php print "<p>".$_SESSION['row']['noHp']."<p>" ?>
                        </div>
                    </div>
                </div>
        
                <div class="profile-container-2">
                    <div class="profile-2-items">
                        <label for="alamat">Alamat</label><br>
                        <?php print "<p>".$_SESSION['row']['alamat']."<p>" ?>
                    </div>
                    <div class="profile-2-items">
                        <div class="register-items">
                            <label for="kodePos">Kode Pos</label><br>
                            <?php print "<p>".$_SESSION['row']['kodePos']."<p>" ?>
                        </div>
                    </div>
                </div>
        </div>

    </div>

</body>
</html>
