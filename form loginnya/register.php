<?php
    include "service/database.php";
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['passwor'];

            // masukkan data ke tabel user dengan filt nya username dan pw
        $sql = "INSERT INTO users (username, passwor) VALUES ('$username', '$password')";

        // kalo si data kekirim akan memunculkan
        if($db-> query($sql)){
            echo "Data tersimpan!";
            //kalo gmasuk
        }else { 
            echo "Data gagal masuk";
        } 
       
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html"?>
    <h3>Daftar Akun</h3>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="passwor">
        <button type="submit" name="register">Daftar Sekarang</button>
    </form>
    <?php include "layout/footer.html"?>
</body>
</html>