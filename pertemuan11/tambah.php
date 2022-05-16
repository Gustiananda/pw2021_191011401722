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
    <title>Tambah DataMahasiswa</title>
</head>
<body>
    <h3>Form Tambah Data </h3>
    <form action="" method="POST">
    <table border="1" cellpadding="10" cellspacing="0">
        <ul>
            <li>
                    <label>
                        ID Mahasiswa : 
                        <input type="text" name="mhsID" style="  width: 20%;
  padding: 6px 10px;
  margin: 8px 0;
  box-sizing: border-box;" autofocus required>
                    </label>
            </li>
            <li>
                <label>
                    <label>
                        firstname :
                        <input type="text" name="firstname" style="  width: 20%;
  padding: 6px 10px;
  margin: 8px 0;
  box-sizing: border-box;" autofocus required>
                    </label>
            </li>
            <li>
                <label>
                   lastname :
                    <input type="text" name="lastname" style="  width: 20%;
  padding: 6px 10px;
  margin: 8px 0;
  box-sizing: border-box;" required>
                </label>
            </li>
            <li>
                <label>
                    jobdate :
                    <input type="date" name="jobdate" style="  width: 20%;
  padding: 6px 10px;
  margin: 8px 0;
  box-sizing: border-box;" required>
                </label>
            </li>
            <li>
                <label>
                    age :
                    <input type="text" name="age" style="  width: 20%;
  padding: 6px 10px;
  margin: 8px 0;
  box-sizing: border-box;" required>
                </label>
            </li>
            <li>
            <li>
                <button type="submit" name="tambah">SIMPAN</button>
            </li>
        </ul>
    </form>
</table>
</body>
</html>