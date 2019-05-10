<?php
	include "koneksi.php";

	$id=$_GET["id"];
	$sql="select * from kecamatan where kode_kab='$id'";
	$query=mysqli_query($koneksi,$sql);
	$data=mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">
	<head>
  		<title>Edit Kabupaten</title>
 	</head>
<body>
	<form method="post" action="ubahkecamatan.php">
	<table>
		<tr>
			<td>Kode Kabupaten</td>
			<td>:</td>
			<td><input type="text" name="kode_kab" value="<?php echo $data[0]; ?>"></td>
		</tr>
		
		<tr>
			<td>Kode Kecamatan</td>
			<td>:</td>
			<td><input type="text" name="kode_kec" value="<?php echo $data[1]; ?>"></td>
		</tr>

		<tr>
			<td>Nama Kecamatan</td>
			<td>:</td>
			<td><input type="text" name="nama_kec" value="<?php echo $data[2]; ?>"></td>
		</tr>
		<tr>
			<td><input type="reset" value="Batal"></td>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
  
  </form>
	  <strong>Data Kecamatan</strong>
	  <table border="1">
		<tr>
			<td>Kode Kabupaten</td>
			<td>Kode Kecamatan</td>
			<td>Nama Kecamatan</td>
			<td>Aksi</td>
		 </tr>
	  <?php
		  
		  include "koneksi.php";
		  
		  $sql="select * from kecamatan";
		  $query=mysqli_query($koneksi,$sql);
		  while($data=mysqli_fetch_array($query)){
			  echo"<tr>";
				echo"<td>$data[0]</td>";
				echo"<td>$data[1]</td>";
				echo"<td>$data[2]</td>";
				echo"<td><a href=./editkecamatan.php?id=$data[0]>Edit</a>|<a href=./hapuskecamatan.php?id=$data[0]>Hapus</a></td>";
			  echo"</tr>";
		  }
	  ?>
  </table>
  </body>
  </html>