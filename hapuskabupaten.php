<?php

	include "koneksi.php";

	$id=$_GET["id"]; //membaca atau mendapatkan alamat id untuk dihapus
	$sql="DELETE from kabupaten where kode_kab='$id'"; //perintah menghapus data dari tabel
	$query=mysqli_query($koneksi,$sql);

	if($query){
		header('location:kabupaten.php');
	}

?>