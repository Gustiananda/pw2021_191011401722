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
    mysqli_query($conn, $query )or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function hapus($nim){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM tbnilai WHERE nim='$nim'")or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    $conn = koneksi();
$nim = htmlspecialchars($data['nim']);
$nama_mhs = htmlspecialchars ($data['nama_mhs']);
$matakuliah = htmlspecialchars ($data['matakuliah']);
$uts = htmlspecialchars ($data['uts']);
$uas = htmlspecialchars ($data['uas']);
$tugas = htmlspecialchars ($data['tugas']);
$jmlhadir = htmlspecialchars ($data['jmlhadir']);



    $query = "UPDATE tbnilai SET 
            nim = '$nim',
            nama_mhs = '$nama_mhs',
            matakuliah = '$matakuliah',
            uts = '$uts',
            uas = '$uas',
            tugas = '$tugas',
            jmlhadir = '$jmlhadir',
            WHERE nim = $nim";
    mysqli_query($conn, $query )or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

?>