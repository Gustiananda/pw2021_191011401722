
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Detail Nilai Mahasiswa</h3>

<table width="300" border="1" border="#0033FF" bgcolor="#FF6600" cellpadding="10" cellspacing="0">
    <form action="" method="POST">
   
        <tr>
        <td><?php 
            $a=$_POST['nim'];
            $nama_mhs=$_POST['nama_mhs'];
            $matakuliah=$_POST['matakuliah'];
            $jmlhadir=$_POST['jmlhadir'];
            $tugas=$_POST['tugas'];
            $uts=$_POST['uts'];
            $uas=$_POST['uas'];
            $nilai_akhir=(0.1*$jmlhadir)+(0.2*$tugas)+(0.3*$uts)+(0.4*$uas);
            if($nilai_akhir >= 80)
            $j=("A") AND $i=("LULUS");
            else
            if($nilai_akhir >= 70)
            $j=("B") AND $i=("LULUS");
            else
            if($nilai_akhir >= 60)
            $j=("C") AND $i=("LULUS");
            else
            if($nilai_akhir >= 50)
            $j=("D") AND $i=("TIDAK LULUS");
            else
            $j=("E") AND $i=("TIDAK LULUS");
            echo "nim : '$a'<br>";
            echo "nama_mhs : '$nama_mhs'<br>";
            echo "matakuliah: '$matakuliah'<br>";
            echo "nilai akhir : '$nilai_akhir'<br>";
            echo "Grade : '$j'<br>";
            echo "Keterangan : '$i'<br>";
            ?></td>
            <td>
            <a href="index.php">Kembali</a> </a> 
            </td>
        </tr>
</table>
</body>
</html>