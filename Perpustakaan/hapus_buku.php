<?php 
	include 'koneksi.php';
	
	$kode = $_GET['kode'];
	mysqli_query($koneksi,"delete from data_buku where Kode_buku='$kode'");
	header("location:buku.php");
?>