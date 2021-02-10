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
	
	<h3>SELAMAT DATANG DI HALAMAN TAMBAH DATA BUKU</h3>
	
	<form method="post">
		<table width="100%" height="100%">
			<tr>
				<td width="20%">Kode Buku</td>
				<td> : <input type="text" name="kode" required></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td> : <input type="text" name="judul" required></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td> : <input type="text" name="pengarang" required></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td> : <input type="text" name="penerbit" required></td>
			</tr>
			<tr>
				<td>Tahun</td>
				<td> : <input type="text" name="tahun" required></td>
			</tr>
			<tr>
				<td>Jumlah Buku</td>
				<td> : <input type="text" name="jumlah" required></td>
			</tr>
		</table>
		<input type="submit" name="simpan" value="Simpan Data Buku">
	</form>
  </body>
</html>

<?php
	if (isset($_POST['simpan'])) {
		
		$kode=$_POST['kode'];
		$judul=$_POST['judul'];
		$pengarang=$_POST['pengarang'];
		$penerbit=$_POST['penerbit'];
		$tahun=$_POST['tahun'];
		$jumlah=$_POST['jumlah'];
		
		$hasil=mysqli_query($koneksi, "INSERT INTO data_buku VALUES ('$kode','$judul','$pengarang','$penerbit','$tahun','$jumlah')") or die(
			"<script language=\"JavaScript\">alert(\"Penyimpanan data buku gagal !\");</script>
			<META HTTP-EQUIV=Refresh CONTENT=\"0.1; URL=tambah_buku.php\">"
			);

		echo "<script language=\"JavaScript\">alert(\"Data Buku Tersimpan !\");</script>";
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1; URL=buku.php\">");

 	}
?>