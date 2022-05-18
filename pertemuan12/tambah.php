<?php 
require 'functions.php';

if(isset($_POST['tambah'])){
    if(tambah($_POST) > 0){
        echo " <script>
        alert ('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>";
    }else{
        echo "data gagal ditambahkan!";
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
    <title>Tambah Data Nilai </title>
</head>
<body>
<section id="form">
<div class="container">
<div class="row text-center">
    <h3>Form Tambah Data </h3>
    <form action="nilai.php" method="POST">
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
                        <input type="text" name="nim" style="  width: 20%;" autofocus required><br></div>
                
                <label for="name" class="form-label-sm">
                        Nama : </label>
                        <div class="form-group">
                        <input type="text" name="nama_mhs" style="  width: 20%; margin: 8px 0;" autofocus required><br></div>
               
                <label for="name" class="form-label-sm">
                        Mata Kuliah :</label>
                        <div class="form-group">
                         <input type="text" name="matakuliah" style="  width: 20%;margin: 8px 0;"autofocus required><br></div>
                
                <label for="name" class="form-label-sm">
                Uts :</label>
                    <div class="form-group">
                    <input type="text" name="uts" style="  width: 20%;margin: 8px 0;" required><br>
  
                <label for="name" class="form-label-sm">
                    Uas : </label>
                    <div class="form-group">
                    <input type="text" name="uas" style="  width: 20%;margin: 8px 0;" required><br></div>

                    <label for="name" class="form-label-sm">
                    tugas : </label>
                    <div class="form-group">
                    <input type="text" name="tugas" style="  width: 20%;margin: 8px 0;" required><br>
                   
                    <label for="name" class="form-label-sm">
                    Kehadiran : </label>
                    <div class="form-group">
                    <input type="text" name="jmlhadir" style="  width: 20%;margin: 8px 0;" required><br>
  <div>
                <button class="btn btn-primary" type="submit" name="tambah" width="20px"> <span class="glyphicon glyphicon-floppy-disk"></span> SIMPAN</button>
  </div>
    </form>
</body>
</html>