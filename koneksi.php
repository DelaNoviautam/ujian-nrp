<?php
$konek=mysqli_connect("localhost","root","","db_sistem_kasir");
if($konek){
		// echo "berhasill";
	}else{
		echo '<script>window.alert("tidak terkoneksi")</script>'; 
	}