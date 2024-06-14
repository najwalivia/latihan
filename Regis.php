<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
<?php
<h1>Form Registrasi:</h1>
<form action="?php echo $_SERVER_SELF['PHP_SELF'];?" method="post">
<pre>
Isikan data dibawah ini    :
Isikan Nama                :<input type="text" name="nama" size="25">
Isikan Alamat              :<textarea input type="text" name="alamat" size="25" rows="5" cols="35"></textarea>
Isikan Tempat Lahir        :<input type="text" name="tempat" size="25">
Isikan Tanggal Lahir       :<input type="text" name="tanggal" size="25"></font></pre>
Jenis Kelamin              :<input type="radio" name="jenis" value="Laki-Laki">Laki-Laki<input type="radio" name="jenis" value="Perempuan">Perempuan<p>
Pendidikan      <select name="Pendidikan">
                <option value="-pilih-">
                <option value="S1">S1
                </select>
<p><input type="Submit" value="Submit"><input type="reset" value="Cancel">  
</pre>
</form>
</body>
</html>