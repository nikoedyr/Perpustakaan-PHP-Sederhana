<!DOCTYPE html>
<?php 
	include 'koneksi.php';
	$nisn= $_GET['NISN'];
	$query = "select * from data_siswa where NISN='$nisn'";
	$data = mysqli_query($koneksi, $query) or die('Kesalahan pada query: '.$query);
	$data_siswa = mysqli_fetch_array($data);
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
	
	<h3>SELAMAT DATANG DI HALAMAN EDIT DATA SISWA</h3>
	
	<form method="post">
		<table width="100%" height="100%">
			<tr>
				<td width="20%">NISN</td>
				<td> : <input type="text" name="nisn" value="<?php echo $data_siswa[0] ?>" readonly></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td> : <input type="text" name="nama" value="<?php echo $data_siswa[1] ?>" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : 
					<?php
						$jenis_kelamin = $data_siswa[2];
						if($jenis_kelamin=='Laki-laki'){
					?>
						<input type="radio" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki
						<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
					<?php
						} else {
					?>
						<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
						<input type="radio" name="jenis_kelamin" value="Perempuan" checked>Perempuan
					<?php
						}
					?>
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td> : <input type="text" name="kelas" value="<?php echo $data_siswa[3] ?>" required></td>
			</tr>
		</table>
		<input type="submit" name="simpan" value="Simpan Edit Data Siswa">
	</form>
  </body>
</html>

<?php
	if (isset($_POST['simpan'])) {
		
		$nisn=$_POST['nisn'];
		$nama=$_POST['nama'];
		$jenis_kelamin=$_POST['jenis_kelamin'];
		$kelas=$_POST['kelas'];
		
		$hasil=mysqli_query($koneksi, "UPDATE data_siswa set Nama='$nama', Jenis_kelamin='$jenis_kelamin', kelas='$kelas' where NISN='$nisn'") or die(
			"<script language=\"JavaScript\">alert(\"Penyimpanan edit data siswa gagal !\");</script>
			<META HTTP-EQUIV=Refresh CONTENT=\"0.1; URL=edit_siswa.php\">"
			);

		echo "<script language=\"JavaScript\">alert(\"Edit Data Siswa Tersimpan !\");</script>";
		echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1; URL=siswa.php\">");

 	}
?>