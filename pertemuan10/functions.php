<?php 

function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'lat_dbase');
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
while ($row = mysqli_fetch_assoc($result)){
 $rows[]= $row;
}
return $rows;
}

function tambah($data)
{
    $conn = koneksi();
$nim = htmlspecialchars($data['nim']);
$nama_mhs = htmlspecialchars ($data['nama_mhs']);
$matakuliah = htmlspecialchars ($data['matakuliah']);
$uts = htmlspecialchars ($data['uts']);
$uas = htmlspecialchars ($data['uas']);
$tugas = htmlspecialchars ($data['tugas']);
$jmlhadir = htmlspecialchars ($data['jmlhadir']);

    $query = "INSERT INTO tbnilai VALUES ('$nim' ,'$nama_mhs' ,'$matakuliah','$uts','$uas','$tugas','jmlhadir')";
    mysqli_query($conn, $query );
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
?>