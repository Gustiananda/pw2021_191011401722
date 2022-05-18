<?php
 $conn = mysqli_connect('localhost', 'root','','lat_dbase');

 if($conn){
    echo "Database Berhasil terkoneksi";
}else{
    echo "Database tidak berhasil";
}

 function query($query){
     global $conn;
     $result = mysqli_query($conn, $query);
     $rows = [];
     while( $row = mysqli_fetch_assoc($result)){
         $rows[] = $row;
     }
     return $rows;
 }

 function tambah($data){
    global $conn;

    $nim = $data['nim'];
    $nama =$data['nama'];
    $mk = $data['matakuliah'];
    $nt = $data['tugas'];
    $nuts = $data['uts'];
    $nuas = $data['uas'];
    $nk = $data['jmlhadir'];
    $akhir=(20*$nt+10*$nk+35*$nuts+35*$nuas)/100;
 
  
  if(($akhir<=100)&&($akhir>=81)) {$angka="A";}
         else if(($akhir<=80)&&($akhir>=71)) {$angka="B";}
         else if(($akhir<=70)&&($akhir>=61)) {$angka="C";}
         else if(($akhir<=60)&&($akhir>=51)) {$angka="D";}
         else if(($akhir<=50)&&($akhir>=0)) {$angka="E";}
  
    $query = "INSERT INTO tbnilai
                VALUES 
                ('$nim','$nama','$mk','$nt','$nuts','$nuas','$nk','$akhir','$angka')";
  
    mysqli_query($conn, $query);
  
    return mysqli_affected_rows($conn);
  }

?>