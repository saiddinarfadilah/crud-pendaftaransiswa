<?php 
    include("config.php");

    if (isset($_GET['id'])) {
    //ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db,$sql);
    // cek keberhasilan query
        if ($query) {
            header('Location: index.php?status=sukses');
        } else {
            header('Location: index.php?status=gagal');
        }
    } else {
        die("Akses dilarang..");
    }
?>