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
        <h1>Formulir Pendaftaran</h1>
    </head>

    <form action="proses_daftar.php" method="post">
        <fieldset>
            <p>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" placeholder="nama lengkap">
            </p>
            <p>
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" ></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <label ><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</label>
                <label ><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama:</label>
                <select name="agama" >
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                </select>
            </p>
            <p>
                <label for="asal_sekolah">Asal Sekolah:</label>
                <input type="text" name="asal_sekolah" placeholder="sekolah asal">
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar">
            </p>
        </fieldset>
    </form>

</body>
</html>