<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Siswa</title>
</head>
<body>
    <header>
        <h1>Register</h1>
    </header>

    <nav>
        <a href="#">[+] Tambah</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // buat variabel number untuk counter agar nanti jika dihapus nomor tetap ascending 
                $number = 0;
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    // counter number
                    $number++;
                    // nomor akan tersusun pada saat dicetak dilayar
                    echo "<td>".$number."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['asal_sekolah']."</td>";
                    
                    echo "<td>";
                        echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                        echo "<a href='form-edit.php?id=".$siswa['id']."'>Hapus</a> | ";
                    echo "</td>";

                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query); ?></p>
</body>
</html>