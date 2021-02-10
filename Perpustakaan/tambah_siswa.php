<!DOCTYPE html>
<?php 
	include 'koneksi.php';
?>
<html>
  <head>
    <title>Perpustakaan</title>
  </head>
  <body>
  	<table width="50%" border="1" align="center">
		<tr>
		<td><a href="home.php">Home</a></td>
		<td><a href="siswa.php">Siswa</a></td>
		<td><a href="buku.php">Buku</a></td>
		<td><a href="transaksi.php">Transaksi</a></td>
		<td><a href="index.php">Logout</a></td>
		<tr>
	</table>
	
	<h3>SELAMAT DATANG DI HALAMAN TAMBAH DATA SISWA</h3>
	
	<form method="post">
		<table width="100%" height="100%">
			<tr>
				<td width="20%">NISN</td>
				<td> : <input type="text" name="nisn" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td> : <input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : 
					<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
					<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td> : <input type="text" name="kelas" required></td>
			</tr>
		</table>
		<input type="submit" name="simpan" value="Simpan Data Siswa">
	</form>
  </body>
</html>

<?php
	if (isset($_POST['simpan'])) {
		
		$nisn=$_POST['nisn'];
		$nama=$_POST['nama'];
		$jenis_kelamin=$_POST['jenis_kelamin'];
		$kelas=$_POST['kelas'];
		
		$hasil=mysqli_query($koneksi, "INSERT INTO data_siswa VALUES ('$nisn','$nama','$jenis_kelamin','$kelas')") or die(
			"<script language=\"JavaScript\">alert(\"Penyimpanan data siswa gagal !\");</script>
			<META HTTP-EQUIV=Refresh CONTENT=\"0.1; URL=tambah_siswa.php\">"
			);

		echo "<script language=\"JavaScript\">alert(\"Data Siswa Tersimpan !\");</script>";
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1; URL=siswa.php\">");

 	}
?>