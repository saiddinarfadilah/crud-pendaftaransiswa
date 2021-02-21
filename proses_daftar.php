<?php 
    include("config.php");

    // cek tombol daftar sudah di klik atau belum
    if (isset($_POST['daftar'])) {
        // ambil data dari formulir yang sudah diisi 
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $asal_sekolah = $_POST['asal_sekolah'];

        // buat query data tersebut
        $sql = "INSERT INTO calon_siswa(nama,alamat,jenis_kelamin,agama,asal_sekolah) VALUE ('$nama','$alamat','$jenis_kelamin','$agama','$asal_sekolah') ";
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