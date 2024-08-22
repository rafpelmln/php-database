<?php
    // Connect data
    $conn = mysqli_connect ("localhost", "root", "", "buku_formulir");

//    function query($query) {
//         $result = mysqli_query($conn, $query)
//    }


 // Ambil data dari tabel users (query)
 $result = mysqli_query($conn, "SELECT * FROM users");
    
 // Ambil data (fetch) dari tabel users
 // mysqli_fetch_row() // [nomer]
 // mysqli_fetch_assoc() [field]
 // mysqli_fetch_array() [keduanya]
 // mysqli_fetch_object() []

 // while( $usr = mysqli_fetch_assoc($result)) {
     // var_dump($usr/*["username"] buat nampilin 1 field*/);
 // }
?>