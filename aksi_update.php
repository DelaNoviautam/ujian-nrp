<?php 
include "koneksi.php";
$id=$_POST['D.w'];
$nama=$_POST['nama'];
$password=$_POST['boleeeh'];
if(empty($nama)&&empty($password)){ //fungsi gerbang and yaitu true dua kondisi harus bernilai true
	echo "<script language='javascript'>alert('Maaf Tidak Ada Perubahan Data')
		window.location.href='lihat_pengguna.php'
	</script>";
		
}else if(empty($nama)){
	mysqli_query($konek,"UPDATE tbl_pengguna SET sandi_pengguna='".$password."' WHERE id_pengguna='".$id."'");
	header("location:lihat_pengguna.php");
}else if ($nama($password)){
mysqli_query($konek,"UPDATE tbl_pengguna SET nama_pengguna='".$nama."',sandi_pengguna='".$password."' WHERE id_pengguna='".$id."'");
header("location:lihat_pengguna.php");
}
else{
	mysqli_query($konek,"UPDATE tbl_pengguna SET nama_pengguna='".$nama."' WHERE id_pengguna='".$id."'");
	header("location:lihat_pengguna.php");
}

//note: rubah tampilan menjadi json!
//jso php.