<?php 
require 'functions.php';

//jika tidak ada nim di url
if(!isset($_GET['nim'])){
    header("Location: index.php");
    exit;
}
// ambil nim dari url
$nim = $_GET['nim'];

// query tbnilai berdasarkan nim
$m = query("SELECT * FROM tbnilai WHERE nim= $nim");

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
    <title>ubah Data Nilai Mahasiswa</title>
</head>
<body>
    <h3>Form ubah Data </h3>
    <form action="" method="POST">
        
        <ul>
            <li>
                    <label>
                        Nim : 
                        <input type="text" name="nim" value="<?= $m['nim']; ?>" autofocus required >
                    </label>
            </li>
            <li>
                <label>
                    <label>
                        Nama :
                        <input type="text" name="nama_mhs" required value="<?= $m['nama_mhs']; ?>">
                    </label>
            </li>
            <li>
                <label>
                   Matakuliah
                    <input type="text" name="matakuliah" required value="<?= $m['matakuliah']; ?>">
                </label>
            </li>
            <li>
                <label>
                    UTS
                    <input type="text" name="uts" required value="<?= $m['uts']; ?>">
                </label>
            </li>
            <li>
                <label>
                    UAS
                    <input type="text" name="uas" required value="<?= $m['uas']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Tugas
                    <input type="text" name="tugas" required value="<?= $m['tugas']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Kehadiran
                    <input type="text" name="jmlhadir" required value="<?= $m['jmlhadir']; ?>">
                </label>
            </li>
            <li>
                <button type="submit" name="ubah">UBAH</button>
            </li>
        </ul>
    </form>
</body>
</html>