<?php

	include "koneksi.php";
	
	$id=$_GET["id"]; //membaca atau mendapatkan alamat id untuk dihapus
	$sql="select * from provinsi where kode_provinsi='$id'";
	$query=mysqli_query($koneksi,$sql);
	$data=mysqli_fetch_array($query);

?>

<!doctype html>
<html lang="en">
	<head>
		<title>Edit Provinsi</title>
	</head>
<body>

	<form method="post" action="ubahprovinsi.php">
		<table>
			<tr>
				<td>Kode Provinsi</td>
				<td>:</td>
				<td><input type="text" name="kode_provinsi" value="<?php echo $data[0]; ?>"></td>
			</tr>

			<tr>
				<td>Nama Provinsi</td>
				<td>:</td>
				<td><input type="text" name="nama_provinsi" value="<?php echo $data[1]; ?>"></td>
			</tr>
			
			<tr>
				<td><input type="reset" value="Batal"></td>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
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