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
    <title>Document</title>
</head>
<body>
    <center>
    <h3>DAFTAR MAHASISWA</h3>
    
    <a href="tambah.php" class="btn btn-info btn-dark"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Data Mahasiswa</a><hr>
    <br><br>
    </center>
    <div class="table-responsive">
  <table class="table">
        <tr>
            <th>No</th>
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
      
</div>
        <?php endforeach; ?>
    </table>
</body>
</html>