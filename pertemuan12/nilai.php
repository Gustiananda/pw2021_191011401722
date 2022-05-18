<?php
require 'functions.php';
if(isset($_POST['tambah'])){

  if(tambah($_POST) > 0){
      echo ' 
      <script>
      alert ("Berhasil ditambahkan ke Database");
      </script>
      ';
  }else{
      echo ' 
      <script>
      alert ("Gagal ditambahkan ke Database");
      document.location.href = "tambah.php";
      </script>';
  }
}

$hasil= query('SELECT * FROM tbnilai')
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
    <link rel="stylesheet" href="style.css">
    <title>Nilai</title>
</head>
<body>
<div class="container">
    <center>
    <h3>Detail Nilai Mahasiswa</h3>
    </center>
    <div class="table-responsive">
<table class="table table-hover">
    <form action="" method="POST">
    <section>
    <div class="container overflow-hidden">
        <div class="row text-center">
          <div class="col">
          </div> 
        </div>
    </div>         
    </section>
    <section>
        <div class="container tbl w-100">
          <div class="table-responsive">
            <table class="table align-items-center">
              <thead>
                <tr>
                  <th >NIM</th>
                  <th >Nama</th>
                  <th >Mata Kuliah</th>
                  <th >Tugas</th>
                  <th >UTS</th>
                  <th >UAS</th>
                  <th >Kehadiran</th>
                  <th >Nilai Akhir</th>
                  <th >Grade</th>
                </tr>
              </thead>
              <tbody>
              <?php $i = 1;
        foreach($hasil as $data) : ?>
                <tr>
                  <td><?= $data['nim']; ?></td>
                  <td><?= $data['nama_mhs']; ?></td>
                  <td><?= $data['matakuliah']; ?></td>
                  <td><?= $data['tugas']; ?></td>
                  <td><?= $data['uts']; ?></td>
                  <td><?= $data['uas']; ?></td>
                  <td><?= $data['jmlhadir']; ?></td>
                  <td><?= $data['nilai_akhir'];?></td>
                  <td><?= $data['grade'];?></td>
                  <td>
            <a href="index.php">Kembali</a> </a> 
            </td>
            <?php endforeach; ?>
                </tr>
              </tbody>
          </div>
         </div>
      </section>
</table>
</body>
</html>