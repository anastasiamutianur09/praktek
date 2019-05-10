<?php

	include "koneksi.php";

	//menampilkan data yang sudah tersimpan
	$kode_provinsi=$_POST["kode_provinsi"];
	$nama_provinsi=$_POST["nama_provinsi"];

	//perintah mengubah data
	$sql="UPDATE provinsi set nama_provinsi='$nama_provinsi' where kode_provinsi='$kode_provinsi'";
	$query=mysqli_query($koneksi,$sql);

	if($query){
		header('location:indexprovinsi.php');
	}

?>