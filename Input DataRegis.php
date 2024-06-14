<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input DataRegis</title>
</head>
<body>
<form action="tampildata.php"method="post">
<b>Pengelolan Data Registrasi</b>
<br>
<pre>
Nama :<input type="text"nama" size="25" maxlength="50">
Alamat :<input type="text"alamat" size="25" maxlength="50">
Tempat Lahir :<input type="text"tempat lahir" size="25" maxlength="50">
Tanggal Lahir :<input type="text"tanggal lahir" size="25" maxlength="50">
</pre>
Jenis Kelamin :<input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki
Jenis Kelamin :<input type="radio" name="jeniskel" value="Perempuan">Perempuan
<p>
Pendidikan :<input type="text"pendidikan" size="25" maxlength="50"
<p>
<input type="submit"value="submit"><input tye="reset"value="cancel">
</form>    
</body>
</html>