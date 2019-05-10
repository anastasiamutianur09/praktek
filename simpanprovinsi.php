<?php

	include_once("koneksi.php");
	
	$kode_provinsi = $_POST['kode_provinsi'];
	$nama_provinsi = $_POST['nama_provinsi'];
	
	//menambahkan data yang disimpan ke database
	$sql="insert into provinsi values('$kode_provinsi','$nama_provinsi')"; 
	$query=mysqli_query($koneksi,$sql);

	if(mysqli_num_rows($query) == ""){
		header('location:indexprovinsi.php');
	}else{
			echo "Kode dan Nama tidak Sesuai!!".$query;
	}

?>