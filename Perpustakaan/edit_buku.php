<!DOCTYPE html>
<?php 
	include 'koneksi.php';
	$kode= $_GET['kode'];
	$query = "select * from data_buku where Kode_buku='$kode'";
	$data = mysqli_query($koneksi, $query) or die('Kesalahan pada query: '.$query);
	$data_buku = mysqli_fetch_array($data);
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
	
	<h3>SELAMAT DATANG DI HALAMAN EDIT DATA BUKU</h3>
	
	<form method="post">
		<table width="100%" height="100%">
			<tr>
				<td width="20%">Kode Buku</td>
				<td> : <input type="text" name="kode" value="<?php echo $data_buku[0] ?>" readonly></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td> : <input type="text" name="judul" value="<?php echo $data_buku[1] ?>" required></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td> : <input type="text" name="pengarang" value="<?php echo $data_buku[2] ?>" required></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td> : <input type="text" name="penerbit" value="<?php echo $data_buku[3] ?>" required></td>
			</tr>
			<tr>
				<td>Tahun</td>
				<td> : <input type="text" name="tahun" value="<?php echo $data_buku[4] ?>" required></td>
			</tr>
			<tr>
				<td>Jumlah Buku</td>
				<td> : <input type="text" name="jumlah" value="<?php echo $data_buku[5] ?>" required></td>
			</tr>
		</table>
		<input type="submit" name="simpan" value="Simpan Edit Data Buku">
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
		
		$hasil=mysqli_query($koneksi, "UPDATE data_buku set Judul='$judul', Pengarang='$pengarang', Penerbit='$penerbit', Tahun='$tahun', Jumlah_buku='$jumlah' where Kode_buku='$kode'") or die(
			"<script language=\"JavaScript\">alert(\"Penyimpanan edit data buku gagal !\");</script>
			<META HTTP-EQUIV=Refresh CONTENT=\"0.1; URL=tambah_buku.php\">"
			);

		echo "<script language=\"JavaScript\">alert(\"Edit Data Buku Tersimpan !\");</script>";
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1; URL=buku.php\">");

 	}
?>