<?php 
	include 'koneksi.php';
	
	$nisn = $_GET['NISN'];
	mysqli_query($koneksi,"delete from data_siswa where NISN='$nisn'");
	header("location:siswa.php");
?>