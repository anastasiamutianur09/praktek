<?php

	include_once("koneksi.php");

	$kode_kab=$_POST["kode_kab"];
	$kode_kec=$_POST["kode_kec"];
	$nama_kec=$_POST["nama_kec"];

	$sql="insert into kecamatan values('$kode_kab','$kode_kec','$nama_kec')";
	$query=mysqli_query($koneksi,$sql);
	if($query){
	header('location:kecamatan.php');
}
?>
	