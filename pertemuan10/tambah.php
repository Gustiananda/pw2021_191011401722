<?php 
require 'functions.php';

if(isset($_POST['tambah'])){
    if(tambah($_POST) > 0){
        echo " <script>
        alert ('data berhasil ditambahkan!');
        document.location.href = 'latihan3.php';
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
    <title>Tambah Data Nilai Mahasiswa</title>
</head>
<body>
    <h3>Form Tambah Data </h3>
    <form action="" method="POST">
        
        <ul>
            <li>
                    <label>
                        Nim : 
                        <input type="text" name="nim" autofocus required>
                    </label>
            </li>
            <li>
                <label>
                    <label>
                        Nama :
                        <input type="text" name="nama_mhs" required>
                    </label>
            </li>
            <li>
                <label>
                   Matakuliah
                    <input type="text" name="matakuliah" required>
                </label>
            </li>
            <li>
                <label>
                    UTS
                    <input type="text" name="uts" required>
                </label>
            </li>
            <li>
                <label>
                    UAS
                    <input type="text" name="uas" required>
                </label>
            </li>
            <li>
                <label>
                    Tugas
                    <input type="text" name="tugas" required>
                </label>
            </li>
            <li>
                <label>
                    Kehadiran
                    <input type="text" name="jmlhadir" required>
                </label>
            </li>
            <li>
                <button type="submit" name="tambah">SIMPAN</button>
            </li>
        </ul>
    </form>
</body>
</html>