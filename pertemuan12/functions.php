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

$akhir=(20*$tugas+10*$jmlhadir+35*$uts+35*$uas)/100;
 
  
  if(($akhir<=100)&&($akhir>=81)) {$grade="A";}
         else if(($akhir<=80)&&($akhir>=71)) {$grade="B";}
         else if(($akhir<=70)&&($akhir>=61)) {$grade="C";}
         else if(($akhir<=60)&&($akhir>=51)) {$grade="D";}
         else if(($akhir<=50)&&($akhir>=0)) {$grade="E";}

    $query = "INSERT INTO tbnilai VALUES ('$nim' ,'$nama_mhs' ,'$matakuliah','$uts','$uas','$tugas','$jmlhadir','$akhir','$grade')";
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
    $id = $data['id'];
$nim = $data['nim'];
$nama_mhs =$data['nama_mhs'];
$matakuliah =  $data['matakuliah'];
$uts =  $data['uts'];
$uas =  $data['uas'];
$tugas =  $data['tugas'];
$jmlhadir =  $data['jmlhadir'];

$nilai_akhir=(20*$tugas+10*$jmlhadir+30*$uts+40*$uas)/100;
if(($nilai_akhir<=100)&&($nilai_akhir>=81)) {$grade="A";}
else if(($nilai_akhir<=80)&&($nilai_akhir>=71)) {$grade="B";}
else if(($nilai_akhir<=70)&&($nilai_akhir>=61)) {$grade="C";}
else if(($nilai_akhir<=60)&&($nilai_akhir>=51)) {$grade="D";}
else if(($nilai_akhir<=50)&&($nilai_akhir>=0)) {$grade="E";}

   $query = "UPDATE tbnilai SET 
    nim = '$nim',
    nama_mhs= '$nama_mhs', 
    matakuliah='$matakuliah', 
    uts='$uts', 
    uas='$uas', 
    tugas='$tugas', 
    jmlhadir='$jmlhadir',
    nilai_akhir='$nilai_akhir',
    grade='$grade' 
            WHERE id=$id";
    mysqli_query($conn, $query)or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

?>