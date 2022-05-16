<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM tbl_mhs");
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
    <h3>DAFTAR MAHASISWA</h3>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>ID Mahasiswa</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;
        foreach($mahasiswa as $m) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $m['mhsID']; ?></td>
            <td><?= $m['firstname']; ?></td>
            <td><?= $m['lastname']; ?></td>
            <td>
                <a href="latihan2.php?nim=<?= $m['mhsID'];?>">Lihat Detail</a> 

            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>