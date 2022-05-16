<?php 
require 'functions.php';

$mhsID = $_GET['mhsID'];

if(hapus($mhsID) > 0){
    echo " <script>
    alert ('data berhasil dihapus!');
    document.location.href = 'index.php';
    </script>";
}else{
    echo "data gagal dihapus!";
}
?>