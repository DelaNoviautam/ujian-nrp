<!DOCTYPE html>
<html>
<head>
	<title>Halaman beranda</title>
	<style type="text/css">
		ul {  
			list-style-type: none;  
		}
		a:link { text-decoration: none; }
	</style>
<body style="background-color:grey;">
	</body>

</head>
<body >
	<table  width="100%">
		<tr>
			
				<h1>SELAMAT DATANG DIHALAMAN RUMAH SAYA</h1>
			
		</tr>
		<tr>
			<body>
				<center>
		<table bgcolor="F6DDCC">
			<td width="35%">
			<b><u>MENU SEBELAH KIRI</u></b><br>
			</body>
			<ul>
				<li>
					<a href="lihat_pengguna.php">Lihat Pengguna</a>
				</li>
				<li>
					<a href="tambah_pengguna.php">Tambah Pengguna</a>
				</li>
				<li>
					<a href="hapus_pengguna.php">Hapus Pengguna</a>
				</li>
				<li>
					<a href="edit_pengguna.php">Edit Pengguna</a>
				</li>
			</ul>
			</td>
			<td>

			<table><b><u>LIST PENGGUNA</u></b><br></table>


			<?php 
				include "koneksi.php";
				$kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna');
				?>
				<table border="1">
					
					<tr>

						<td>
							<b>
							NO
						</b>
						</td>
						<td>
							<b>
							Nama Pengguna
						</b>
						</td>
						<td>
							<b>
							Sandi Pengguna
							</b>
						</td>
					</tr>

				<?php
				while($row = mysqli_fetch_array($kueri)){
					echo"<tr><td>";
					echo $row['no_pengguna'];
					echo"<tr><td>";
					echo $row['nama_pengguna'];
					echo"</td><td>";
					echo $row['sandi_pengguna'];
					echo"</td>
					<td>";
					//echo"
						//<a href='hapus.php?apanih=".$row['katasandi']."		'>hapus</a>
					//";
					//echo"&nbsp&nbsp&nbsp
						//<a href='update_data.php?id=".$row['katasandi']."&nama=".$row['nama']."&katasandi=".$row['katasandi']."		'>edit</a>
					//";

				}
			?>
			</table>
			<br>
			<button><a  href="tambah_pengguna.php">Tambah pengguna</a></button>
			</td>
		</tr>
	</table>
</body>
</html>