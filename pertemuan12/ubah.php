<?php 
require 'functions.php';

// ambil nim dari url
$id = $_GET['id'];

// query tbnilai berdasarkan nim
$mahasiswa = query("SELECT * FROM tbnilai WHERE id = $id")[0];

//jika tidak ada nim di url
if(!isset($_GET['id'])){
    header("Location: index.php");
    exit;
}
if(isset($_POST['ubah'])){
    if(ubah($_POST) > 0){
        echo " <script>
        alert ('data berhasil diubah!');
        document.location.href = 'index.php';
        </script>";
    }else{
        echo "data gagal diubah!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>ubah Data Nilai Mahasiswa</title>
</head>
<body>
<section id="form">
<div class="container">
<div class="row text-center">
    <h3>Form ubah Data </h3>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
    <div class="container overflow-hidden">
          <div class="row gx-2">
            <div class="col">
            <div class="bl">
              <div class="p-4">
                <div class="mb-3">
                <center>
                <div class="form-group">
                <label for="name" class="form-label-sm">
                        NIM :  </label>
                        <div class="form-group">
                        <input type="text" name="nim" style="  width: 20%;" autofocus required value="<?= $mahasiswa['nim'] ?>"><br></div>
                
                <label for="name" class="form-label-sm">
                        Nama : </label>
                        <div class="form-group">
                        <input type="text" name="nama_mhs" style="  width: 20%; margin: 8px 0;"required  value="<?= $mahasiswa['nama_mhs'];?>"><br></div>
               
                <label for="name" class="form-label-sm">
                        Mata Kuliah :</label>
                        <div class="form-group">
                         <input type="text" name="matakuliah" style="  width: 20%;margin: 8px 0;" required  value="<?= $mahasiswa['matakuliah'];?>"><br></div>
                
                <label for="name" class="form-label-sm">
                Uts :</label>
                    <div class="form-group">
                    <input type="text" name="uts" style="  width: 20%;margin: 8px 0;" required  value="<?= $mahasiswa['uts'];?>"><br>
  
                <label for="name" class="form-label-sm">
                    Uas : </label>
                    <div class="form-group">
                    <input type="text" name="uas" style="  width: 20%;margin: 8px 0;" required  value="<?= $mahasiswa['uas'];?>"><br></div>

                    <label for="name" class="form-label-sm">
                    tugas : </label>
                    <div class="form-group">
                    <input type="text" name="tugas" style="  width: 20%;margin: 8px 0;" required  value="<?= $mahasiswa['tugas'];?>"><br>
                   
                    <label for="name" class="form-label-sm">
                    Kehadiran : </label>
                    <div class="form-group">
                    <input type="text" name="jmlhadir" style="  width: 20%;margin: 8px 0;" required  value="<?= $mahasiswa['jmlhadir'];?>"><br>
                  
                    <label for="name" class="form-label-sm">
                    Nilai Akhir: </label>
                    <div class="form-group">
                    <input type="text" name="akhir" style="  width: 20%;margin: 8px 0;" required  value="<?= $mahasiswa['nilai_akhir'];?>" readonly><br>

                    <label for="name" class="form-label-sm">
                    Grade : </label>
                    <div class="form-group">
                    <input type="text" name="grade" style="  width: 20%;margin: 8px 0;" required  value="<?= $mahasiswa['grade'];?>"readonly><br>

  <div>
                <button class="btn btn-primary" type="submit" name="ubah" width="20px"> <span class="glyphicon glyphicon-floppy-disk"></span> Ubah</button>
  </div>
    </form>
    </form>
</body>
</html>