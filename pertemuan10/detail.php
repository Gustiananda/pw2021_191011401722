<?php 
require 'functions.php';

//
$nim = $_GET['nim'];

//query berdasarkan nim
$m = query("SELECT * FROM tbnilai WHERE nim = $nim");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Detail Nilai Mahasiswa</h3>

    <ul>
        <li>Nim : 123</li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Matakuliah :<?= $m['matakuliah']; ?></li>
        <li>Uts : <?= $m['uts']; ?></li>
        <li>Uas : <?= $m['uas']; ?></li>
        <li>Tugas : <?= $m['tugas']; ?></li>
        <li>Jmlhadir : <?= $m['jmlhadir']; ?></li>

        <li><a href="">Edit</a> | <a href="">hapus</a> </li>
        <li><a href="latihan3.php">Kembali ke Daftar Mahasiswa</a></li>
    </ul>
</body>
</html>