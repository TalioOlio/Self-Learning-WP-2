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
    <link rel="stylesheet" href="./style/register.css">
    <title>Edit Profile | Pengelolaan Keuangan</title>
</head>
<body>

    <div class="register">
        <h1>Pengelolaan Keuangan</h1>
        <p>Profile Update</p><br><br>

        <form action="./prosesUpdate.php" method="POST" enctype="multipart/form-data">
            <div class="register-form">
                <div class="register-left">
                    <div class="register-items">
                        <label for="namaDepan">Nama Depan</label><br>
                        <input type="text" name="namaDepan" id="namaDepan" placeholder="<?php echo $_SESSION['row']['namaDepan']?>" required><br>
                        <span><?php if(isset($_SESSION['namaDepanError'])) echo $_SESSION['namaDepanError'] ?></span>
                    </div>

                    <div class="register-items">
                        <label for="tempatLahir">Tempat Lahir</label><br>
                        <input type="text" name="tempatLahir" id="tempatLahir" placeholder="<?php echo $_SESSION['row']['tempatLahir']?>" required>
                        <span><?php if(isset($_SESSION['tempatLahirError'])) echo $_SESSION['tempatLahirError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="wargaNegara">Warga Negara</label><br>
                        <input type="text" name="wargaNegara" id="wargaNegara" placeholder="<?php echo $_SESSION['row']['wargaNegara']?>" required><br>
                        <span><?php if(isset($_SESSION['wargaNegaraError'])) echo $_SESSION['wargaNegaraError'] ?></span>
                    </div>
                </div>

                <div class="register-middle">
                    <div class="register-items">
                        <label for="namaTengah">Nama Tengah</label><br>
                        <input type="text" name="namaTengah" id="namaTengah" placeholder="<?php echo $_SESSION['row']['namaTengah']?>" required><br>
                        <span><?php if(isset($_SESSION['namaTengahError'])) echo $_SESSION['namaTengahError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="tglLahir">Tgl Lahir</label><br>
                        <input type="date" name="tglLahir" id="tglLahir" placeholder="<?php echo $_SESSION['row']['tglLahir']?>" required><br>
                        <span><?php if(isset($_SESSION['tglLahirError'])) echo $_SESSION['tglLahirError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="email">Email</label><br>
                        <input type="email" name="email" id="email" placeholder="<?php echo $_SESSION['row']['email']?>" required>
                    </div>
                </div>
    
                <div class="register-right">
                    <div class="register-items">
                        <label for="namaBelakang">Nama Belakang</label><br>
                        <input type="text" name="namaBelakang" id="namaBelakang" placeholder="<?php echo $_SESSION['row']['namaBelakang']?>" required><br>
                        <span><?php if(isset($_SESSION['namaBelakangError'])) echo $_SESSION['namaBelakangError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="nik">NIK</label><br>
                        <input type="text" name="nik" id="nik" placeholder="<?php echo $_SESSION['row']['nik']?>" readonly><br>
                        <span><?php if(isset($_SESSION['nikError'])) echo $_SESSION['nikError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="noHp">No HP</label><br>
                        <input type="text" name="noHp" id="noHp" placeholder="<?php echo $_SESSION['row']['noHp']?>" required><br>
                        <span><?php if(isset($_SESSION['noHpError'])) echo $_SESSION['noHpError'] ?></span>
                    </div>
                </div>
            </div>
    
            <div class="register-form-2">
                <div class="register-2-left">
                    <label for="alamat">Alamat</label><br>
                    <textarea name="alamat" id="alamat" placeholder="<?php echo $_SESSION['row']['alamat']?>" cols="64" rows="7" required></textarea>
                </div>
                <div class="register-2-right">
                    <div class="register-items">
                        <label for="kodePos">Kode Pos</label><br>
                        <input type="text" name="kodePos" id="kodePos" placeholder="<?php echo $_SESSION['row']['kodePos']?>"" required><br>
                        <span><?php if(isset($_SESSION['kodePosError'])) echo $_SESSION['kodePosError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="fotoProfil">Foto Profil</label><br>
                        <input type="file" name="fotoProfil" id="fotoProfil" accept="image/png, image/jpg, image/jpeg" required>
                    </div>
                </div>
            </div>

            <div class="submit-form">
                <input class="submit" type="submit" value="Update Profile">
            </div>
        </form>
    </div>
</body>
</html>