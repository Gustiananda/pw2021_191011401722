<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM tbnilai");
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
    <h3>DAFTAR NILAI MAHASISWA</h3>

    <a href="tambah.php">Tambah Data Nilai Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;
        foreach($mahasiswa as $m) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $m['nim']; ?></td>
            <td><?= $m['nama_mhs']; ?></td>
            <td>
                <a href="latihan2.php?nim=<?= $m['nim'];?>">Lihat Detail</a> 

            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>