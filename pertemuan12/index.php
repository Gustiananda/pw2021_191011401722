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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Pemrograman Web 2</title>
</head>
<body>
    <center>
    <h3>DAFTAR NILAI MAHASISWA<hr width="50%"></h3>

    <a href="tambah.php" class="btn btn-info btn-dark" style="color:black ;font-family:'Segoe UI',sans-serif ;"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Data Nilai Mahasiswa</a>
    <br><br>
    </center>
    <section>
        <div class="container tbl w-100">
          <div class="table-responsive">
            <table class="table align-items-center">
              <thead>
        <tr class="table-secondary">
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
                <a href="latihan2.php?nim=<?= $m['nim'];?>"><span class="glyphicon glyphicon-new-window"></span> Lihat Detail</a> 

            </td>
        </tr>
              </thead>
        <?php endforeach; ?>
    </table>
</body>
</html>