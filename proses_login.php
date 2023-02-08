<?php
$pengguna=$_POST["user_name"];
$password=$_POST["password"];
include "koneksi.php";
$kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna WHERE nama_pengguna="'.$pengguna.'" AND sandi_pengguna="'.$password.'"');
if(mysqli_num_rows($kueri)>0){
	// ini nanti di redirect ke halaman utama
	header("location:login.html");
}else{
		// ini nanti di redirect ke halaman login
	header("location:lihat_pengguna.php");	
}
