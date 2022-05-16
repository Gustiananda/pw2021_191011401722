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
$mhsID = htmlspecialchars($data['mhsID']);
$firstname = htmlspecialchars ($data['firstname']);
$lastname = htmlspecialchars ($data['lastname']);
$jobdate = htmlspecialchars ($data['jobdate']);
$age = htmlspecialchars ($data['age']);



    $query = "INSERT INTO tbl_mhs VALUES ('$mhsID' ,'$firstname' ,'$lastname','$jobdate','$age')";
    mysqli_query($conn, $query )or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function hapus($mhsID){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM tbl_mhs WHERE mhsID='$mhsID'")or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    $conn = koneksi();
    $mhsID = htmlspecialchars($data['mhsID']);
    $firstname = htmlspecialchars ($data['firstname']);
    $lastname = htmlspecialchars ($data['lastname']);
    $jobdate = htmlspecialchars ($data['jobdate']);
    $age = htmlspecialchars ($data['age']);



    $query = "UPDATE tbl_mhs SET 
            mhsID = '$mhsID',
            firstname = '$firstname',
            lastname = '$lastname',
            jobdate = '$jobdate',
            age = '$age'
            WHERE mhsID = $mhsID";
    mysqli_query($conn, $query )or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

?>