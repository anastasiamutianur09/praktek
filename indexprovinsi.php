<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		Provinsi</title>
<script>
	function hanyaAngka(evt) {
		var charCode = (evt.which) ? evt.which: event.keyCode
		if(charCode > 31 && (charCode < 48 || charCode > 57)) {
			alert ("Masukkan data berupa angka !! ")
			return false;
		} else {
			return true;
		}
	}
</script>
</head>
<body>
	
<form action="simpanprovinsi.php" method="POST">
		<table>
			<tr>
				<td>Kode Provinsi</td>
				<td><input type="text" name="kode_provinsi" onkeypress="return hanyaAngka(event )"> </td>
			</tr>
		
			<tr>
				<td>Nama Provinsi</td>
			<td><input type="text" name="nama_provinsi" /></td>
			</tr>

			<tr></tr>
			<tr>
				<td><input type="submit" value="Simpan" /></td>
				<td><input type="submit" value="Batal" /></td>
			</tr>
		</table>
			
	</form>
	</form>

<strong>Data Provinsi</strong>
	<table border="1">
		<tr>
			<td>Kode Provinsi</td>
			<td>Nama Provinsi</td>
			<td>Aksi</td>
		</tr>

<?php

	include "koneksi.php";
	
	$sql="select * from provinsi";
	$query=mysqli_query($koneksi,$sql);

	while($data=mysqli_fetch_array($query)){

		echo"<tr>";
		echo"<td>$data[0]</td>";
		echo"<td>$data[1]</td>";
		echo"<td><a href=./editprovinsi.php?id=$data[0]>Edit</a>|<a href=./hapusprovinsi.php?id=$data[0]>Hapus</a></td>";
		echo"</tr>";	
	}
?>

</table>
</body>
</html>