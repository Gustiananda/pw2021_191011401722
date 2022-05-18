<?php 

// koneksi DB
$conn = mysqli_connect('localhost' , 'root', '' , 'lat_dbase');
// Query
$result = mysqli_query($conn, "SELECT * FROM tbnilai");
// Ubah Data ke ARRAY
$rows = [];
while ($row = mysqli_fetch_assoc($result)){
 $rows[]= $row;
}
//
$mahasiswa = $rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>DAFTAR NILAI MAHASISWA</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Matakuliah</th>
            <th>Uts</th>
            <th>Uas</th>
            <th>Tugas</th>
            <th>jmlhadir</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;
        foreach($mahasiswa as $m) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $m['nim']; ?></td>
            <td><?= $m['nama_mhs']; ?></td>
            <td><?= $m['matakuliah']; ?></td>
            <td><?= $m['uts']; ?></td>
            <td><?= $m['uas']; ?></td>
            <td><?= $m['tugas']; ?></td>
            <td><?= $m['jmlhadir']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>