<?php 
    include("config.php");

    // cek tombol daftar sudah di klik atau belum
    if (isset($_POST['simpan'])) {
        // ambil data dari formulir yang sudah diisi 
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $asal_sekolah = $_POST['asal_sekolah'];

        // buat query data tersebut
        $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama',asal_sekolah='$asal_sekolah' WHERE id=$id ";
        $query = mysqli_query($db,$sql);

        // cek keberhasilan query
        if ($query) {
            header('Location: list_siswa.php');
        } else {
            die("Gagal mengedit..");
        }
    } else {
        die("Akses dilarang..");
    }
?>