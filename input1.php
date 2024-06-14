<html>
    <head>
    <title>Masukan Data</title>
</head>
<body>
    <h1>masukan identitas anda</h1>
    <form action="hasil1.php" method="post">
    <pre>
        Npm             : <input type="text"name="npm">
        Nama            : <input type="text"name="nama">
        Alamat          : <textarea name="alamat" rows="5" cols="40"></textarea>
        Jenis Kelamin   : <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
        Agama           : <select name="agama">
        <option value="Islam">ISLAM</option>
        <option value="Kristen">KRISTEN</option>
        </select>
        Sekolah Asal    : <input type="text"name="sekolah_asal">
        <input type="submit" value="SIMPAN"><input type="reset" value="Batal">
    </pre>
    </form>
    </body>
</html>