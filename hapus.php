<?php 
$id=$_GET['apanih'];
include "koneksi.php";
mysqli_query($konek,'DELETE FROM login1 WHERE nama="'.$id.'"');
header("location:lihat_pengguna.php");