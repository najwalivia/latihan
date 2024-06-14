<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah_asal = $_POST['sekolah_asal'];

        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<style>";
        echo " th, td {";
        echo "border: 1px solid black;";
        echo "}";
        echo "</style>";
        echo "</head>";
        echo "<body>";

        echo "<h2>Hasil Input</h2>";

        echo "<table style='width:20%'>";
        echo "<tr>";
        echo "<th>Npm</th>";
        echo "<td>" . $npm . "</td>";
        echo "<tr>";
        echo "<th>Nama</th>";
        echo "<td>" . $nama . "</td>";
        echo "<tr>";
        echo "<th>Alamat</th>";
        echo "<td>" . $alamat . "</td>";
        echo "<tr>";
        echo "<th>Jenis Kelamin</th>";
        echo "<td>" . $jenis_kelamin . "</td>";
        echo "<tr>";
        echo "<tr>";
        echo "<th>Agama</th>";
        echo "<td>" . $agama . "</td>";
        echo "<tr>";
        echo "<th>Pendidikan</th>";
        echo "<td>" . $sekolah_asal . "</td>";
        echo "<tr>";
        echo "</table>";
        echo "</body>";
        echo "</html>";

    }