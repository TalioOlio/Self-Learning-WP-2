<?php
    session_start();
    print_r($_SESSION);
    if($_SESSION['isLogin'] == true) {
        header("Location: home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/register.css">
    <title>Register | Pengelolaan Keuangan</title>
</head>
<body>

    <div class="register">
        <h1>Pengelolaan Keuangan</h1>
        <p>Kelola keuangan bersama kami di aplikasi pengelolaan keuangan. Daftarkan dirimu segera!</p><br><br>

        <form action="./prosesRegister.php" method="POST" enctype="multipart/form-data">
            <div class="register-form">
                <div class="register-left">
                    <div class="register-items">
                        <label for="namaDepan">Nama Depan</label><br>
                        <input type="text" name="namaDepan" id="namaDepan" placeholder="Nama Depan" required><br>
                        <span><?php if(isset($_SESSION['namaDepanError'])) echo $_SESSION['namaDepanError'] ?></span>
                    </div>

                    <div class="register-items">
                        <label for="tempatLahir">Tempat Lahir</label><br>
                        <input type="text" name="tempatLahir" id="tempatLahir" placeholder="Tempat Lahir" required>
                        <span><?php if(isset($_SESSION['tempatLahirError'])) echo $_SESSION['tempatLahirError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="wargaNegara">Warga Negara</label><br>
                        <input type="text" name="wargaNegara" id="wargaNegara" placeholder="Warga Negara" required><br>
                        <span><?php if(isset($_SESSION['wargaNegaraError'])) echo $_SESSION['wargaNegaraError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="username">Username</label><br>
                        <input type="text" name="username" id="username" placeholder="Username" required><br>
                        <span><?php if(isset($_SESSION['usernameError'])) echo $_SESSION['usernameError'] ?></span>
                    </div>
                </div>

                <div class="register-middle">
                    <div class="register-items">
                        <label for="namaTengah">Nama Tengah</label><br>
                        <input type="text" name="namaTengah" id="namaTengah" placeholder="Nama Tengah" required><br>
                        <span><?php if(isset($_SESSION['namaTengahError'])) echo $_SESSION['namaTengahError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="tglLahir">Tgl Lahir</label><br>
                        <input type="date" name="tglLahir" id="tglLahir" required><br>
                        <span><?php if(isset($_SESSION['tglLahirError'])) echo $_SESSION['tglLahirError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="email">Email</label><br>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="register-items">
                        <label for="password1">Password 1</label><br>
                        <input type="password" name="password1" id="password1" placeholder="Password 1" required><br>
                        <span><?php if(isset($_SESSION['password1Error'])) echo $_SESSION['password1Error'] ?></span>
                    </div> 
                </div>
    
                <div class="register-right">
                    <div class="register-items">
                        <label for="namaBelakang">Nama Belakang</label><br>
                        <input type="text" name="namaBelakang" id="namaBelakang" placeholder="Nama Belakang" required><br>
                        <span><?php if(isset($_SESSION['namaBelakangError'])) echo $_SESSION['namaBelakangError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="nik">NIK</label><br>
                        <input type="text" name="nik" id="nik" placeholder="NIK" required><br>
                        <span><?php if(isset($_SESSION['nikError'])) echo $_SESSION['nikError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="noHp">No HP</label><br>
                        <input type="text" name="noHp" id="noHp" placeholder="No HP" required><br>
                        <span><?php if(isset($_SESSION['noHpError'])) echo $_SESSION['noHpError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="password2">Password 2</label><br>
                        <input type="password" name="password2" id="password2" placeholder="Password 2" required><br>
                        <span><?php if(isset($_SESSION['password2Error'])) echo $_SESSION['password2Error'] ?></span>
                    </div>
                </div>
            </div>
    
            <div class="register-form-2">
                <div class="register-2-left">
                    <label for="alamat">Alamat</label><br>
                    <textarea name="alamat" id="alamat" cols="64" rows="7" required></textarea>
                </div>
                <div class="register-2-right">
                    <div class="register-items">
                        <label for="kodePos">Kode Pos</label><br>
                        <input type="text" name="kodePos" id="kodePos" placeholder="Kode Pos" required><br>
                        <span><?php if(isset($_SESSION['kodePosError'])) echo $_SESSION['kodePosError'] ?></span>
                    </div>
                    <div class="register-items">
                        <label for="fotoProfil">Foto Profil</label><br>
                        <input type="file" name="fotoProfil" id="fotoProfil" accept="image/png, image/jpg, image/jpeg" required>
                    </div>
                </div>
            </div>

            <div class="submit-form">
                <input class="submit" type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>