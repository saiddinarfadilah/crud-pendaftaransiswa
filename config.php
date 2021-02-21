<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $name_database = "registrasi_siswa";

    $db = mysqli_connect($server, $user, $password, $name_database);

    if (!$db) {
        die("Gagal terhubung dengan database: ".mysqli_connect_error());
    }
?>