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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<center>
<div class="container">
    <h2>DAFTAR MAHASISWA</h2><br>
</center>
<div class="table-responsive">
<table class="table table-hover">
              <thead>
        <tr>
            <th>No</th>
            <th>ID Mhs</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Job Date</th>
            <th>Age</th>
            <th>Aksi</th>

        </tr>
        </thead>
        <?php $i = 1;
        foreach($mahasiswa as $m) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $m['mhsID']; ?></td>
            <td><?= $m['firstname']; ?></td>
            <td><?= $m['lastname']; ?></td>
            <td><?= $m['job_date']; ?></td>
            <td><?= $m['age']; ?></td>
            <td>
                <a href="ubah.php?mhsID=<?= $m['mhsID'];?>"<span class="glyphicon glyphicon-edit"></span></a> | 
                <a href="hapus.php?mhsID=<?= $m['mhsID'];?>"onclick="return confirm('apakah anda yakin?');"> <span class="glyphicon glyphicon-floppy-remove"></span></a> |
                <a href="index.php">Kembali</a> <span class="glyphicon glyphicon-back"></span>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>