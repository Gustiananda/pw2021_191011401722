<?php 
require 'functions.php';
$mahasiswa = query('SELECT * FROM tbnilai');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Pemrograman Web 2</title>
</head>
<body>
    <center>
<div class="container">
    <h3>DAFTAR NILAI MAHASISWA</h3>
    <div class="table-responsive">
<table class="table table-hover">
              <thead>
        <tr>
            <th>#</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Matakuliah</th>
            <th>Uts</th>
            <th>Uas</th>
            <th>Tugas</th>
            <th>jmlhadir</th>
            <th >Nilai Akhir</th>
            <th >Grade</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;
        foreach($mahasiswa as $m) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $m['nim']; ?></td>
            <td><?= $m['nama_mhs']; ?></td>
            <td><?= $m['matakuliah']; ?></td>
            <td><?= $m['uts']; ?></td>
            <td><?= $m['uas']; ?></td>
            <td><?= $m['tugas']; ?></td>
            <td><?= $m['jmlhadir']; ?></td>
            <td><?= $m['nilai_akhir'];?></td>
            <td><?= $m['grade'];?></td>
            <td>
            <a href="ubah.php?id=<?= $m['id'];?>"><span class="glyphicon glyphicon-edit"></a> | 
            <a href="hapus.php?nim=<?= $m['nim'];?>" 
                onclick="return confirm('apakah anda yakin?');"><span class="glyphicon glyphicon-floppy-remove"></span></a> |
                <a href="index.php"><span class="glyphicon glyphicon-retweet"></span></a> </a> 
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>