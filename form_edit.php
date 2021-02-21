<?php 
    // koneksi database
    include("config.php");

    // cek id di query string
    if (!isset($_GET['id'])) {
        header('Location: list_siswa.php');
    }

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk mengambil data data dari database
    $sql = "SELECT * FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db,$sql);
    $siswa = mysqli_fetch_assoc($query);

    // jika data yang diedit tidak ditemukan
    if (mysqli_num_rows($query) < 1) {
        die("Data tidak ditemukan..");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Siswa</title>
</head>
<body>
    <head>
        <h1>Formulir Edit Pendaftaran</h1>
    </head>

    <form action="proses_edit.php" method="post">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id']; ?>">

            <p>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" value="<?php echo $siswa['nama']; ?>" placeholder="nama lengkap">
            </p>
            <p>
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" ><?php echo $siswa['alamat'];?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <?php $jenis_kelamin = $siswa['jenis_kelamin']; ?>
                <label ><input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php echo ($jenis_kelamin == 'Laki-Laki') ? "checked": "" ?>>Laki-Laki</label>
                <label ><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jenis_kelamin == 'Perempuan') ? "checked": "" ?>>Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama:</label>
                <?php $agama = $siswa['agama']; ?>
                <select name="agama" >
                    <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                </select>
            </p>
            <p>
                <label for="asal_sekolah">Asal Sekolah:</label>
                <input type="text" name="asal_sekolah" value="<?php echo $siswa['asal_sekolah'];?>" placeholder="sekolah asal">
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan">
            </p>
        </fieldset>
    </form>

</body>
</html>