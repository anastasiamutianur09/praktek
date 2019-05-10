<?php

	include "koneksi.php";

	$id=$_GET["id"]; //membaca atau mendapatkan alamat id untuk dihapus
	$sql="DELETE from kecamatan where kode_kec='$id'"; //perintah menghapus data dari tabel
	$query=mysqli_query($koneksi,$sql);

	if($query){
		header('location:kecamatan.php');
	}

?>