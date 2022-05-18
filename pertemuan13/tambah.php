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
    <title>Tambah DataMahasiswa</title>
</head>
<body>
<section id="form">
<div class="container">
<div class="row text-center">
    <h3>Form Tambah Data </h3>
    </div>
    <form action="" method="POST">
    <div class="container overflow-hidden">
          <div class="row gx-2">
            <div class="col">
            <div class="bl">
              <div class="p-4">
                <div class="mb-3">
                <center>
                <div class="form-group">
                <label for="name" class="form-label-sm">
                        ID Mhs :  </label>
                        <div class="form-group">
                        <input type="text" name="mhsID" style="  width: 20%;" autofocus required><br></div>
                
                <label for="name" class="form-label-sm">
                        firstname : </label>
                        <div class="form-group">
                        <input type="text" name="firstname" style="  width: 20%; margin: 8px 0;" autofocus required><br></div>
               
                <label for="name" class="form-label-sm">
                        lastname :</label>
                        <div class="form-group">
                         <input type="text" name="lastname" style="  width: 20%;margin: 8px 0;" required><br></div>
                
                <label for="name" class="form-label-sm">
                    jobdate :</label>
                    <div class="form-group">
                    <input type="date" name="jobdate" style="  width: 20%;margin: 8px 0;" required><br>
  
                <label for="name" class="form-label-sm">
                    age : </label>
                    <div class="form-group">
                    <input type="text" name="age" style="  width: 20%;margin: 8px 0;" required><br>
  <div>
                <button class="btn btn-primary" type="submit" name="tambah" width="20px">SIMPAN</button>
  </div>
    </form>
</table>
</body>
</html>