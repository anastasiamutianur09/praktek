<?php

	include "koneksi.php";

	$id=$_GET["id"];
	$sql="DELETE from provinsi where kode_provinsi='$id'";
	$query=mysqli_query($koneksi,$sql);

		if($query){
			header('location:indexprovinsi.php');
		}

?>