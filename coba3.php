<!DOCTYPE html>
<html>
<head>
    <title>Pengelolaan Data Mahasiswa</title>
    <style>
        body {
            background-color: #4CAF50;
            color: white;
            font-family: Arial, sans-serif;
        }
        form {
            margin: 50px auto;
            width: 300px;
            padding: 10px;
            background: #333;
            border-radius: 8px;
        }
        input[type="text"], input[type="date"], select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 20px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"], input[type="reset"] {
            width: 45%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Pengelolaan Data Mahasiswa</h2>
    <form action="submit_data.php" method="post">
        Nama: <input type="text" name="nama" required><br>
        Alamat: <input type="text" name="alamat" required><br>
        Jenis Kelamin: <input type="radio" name="jenis_kelamin" value="Laki-Laki" required>Laki-Laki
                       <input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan<br>
        Pekerjaan: <select name="pekerjaan" required>
            <option value="Pelajar">Pelajar</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Pekerja">Pekerja</option>
            <option value="Lainnya">Lainnya</option>
        </select><br>
        Hobi: <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga
              <input type="checkbox" name="hobi[]" value="Musik">Musik
              <input type="checkbox" name="hobi[]" value="Jalan-Jalan">Jalan-Jalan<br>
        <input type="submit" value="Kirim">
        <input type="reset" value="Batal">
    </form>
</body>
</html>
