<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    // default yang atas dari php nya
    $database_name = "buku_formulir";

    $db = mysqli_connect($hostname, $username, $password, $database_name);

        // "jika koneksi db error, maka"
    if($db-> connect_error) {
        echo "Koneksi databasse rusak";
        die("error!");
    }
?>