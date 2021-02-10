<?php
	$koneksi = mysqli_connect("localhost","root","","db_perpustakaan");
 
	//cek koneksi
	if (mysqli_connect_errno()){
		echo "Koneksi basis data gagal : " . mysqli_connect_error();
	}
?>


