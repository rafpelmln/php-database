<?php
    include "service/database.php";

    if (isset($_POST['login'])) {
       $username = $_POST['username'];
       $password = $_POST['passwor'];

    //    sekarang kita bikin biar sesuai sama data nge compare

    // nyari data sesuai yang ada di base data
    $sql = "SELECT * FROM users WHERE username = '$username' AND passwor='$password'";
    

    // nge compare kalo ada
    $result = $db-> query($sql);
    // kalo data base lebih dai 0 alias ada maka 
    
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        header("location: dashboard.php");
    } else {
        echo "Data tidak ditemukan";
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
    <h3>Masuk Akun</h3>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="passwor">
        <button type="submit" name="login">Masuk Sekarang</button>
    </form>
    <?php include "layout/footer.html"?>
</body>
</html>