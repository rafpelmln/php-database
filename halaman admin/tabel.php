<?php
    require "services/connect.php";

    // ambil fungsi di connect.php
    // query("SELECT * FROM users");
     // Ambil data dari tabel users (query)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
</head>
<body>
    <h1>Data akun</h1>

    <table border="1" cellpadding="10" cellsspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <!-- buat nomer -->
        <?php $i = 1;?>
        <?php
        // <!-- buat manggil data ke tabel -->
            while( $row = mysqli_fetch_assoc($result)) :
         ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="#">Ubah</a> |
                <a href="#">Hapus</a>
            </td>
            <td><?= $row["username"]; ?></td>
            <td><?= $row["passwor"]; ?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile; ?>
    </table>
</body>
</html>