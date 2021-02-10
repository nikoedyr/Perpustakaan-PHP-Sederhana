<!DOCTYPE html>
<?php 
	include 'koneksi.php';
	$query = "select * from data_siswa";
	$data = mysqli_query($koneksi, $query) or die('Kesalahan pada query: '.$query);
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
	
	<h3>SELAMAT DATANG DI HALAMAN DATA SISWA</h3>
	<a href="tambah_siswa.php">Tambah Siswa</a> <br/><br/>
	<?php
		$nomor = 1;
	?>
	<font size="3">
	<table class="table" border="1" width="50%">
		<thead>
			<td>No</td>
			<td>NISN</td>
			<td>Nama</td>
			<td>Jenis Kelamin</td>
			<td>Kelas</td>
			<td>Aksi</td>
		</thead>
		<?php 
			while($rows = mysqli_fetch_array($data)) { 
		?>
		<tr>
			<td><?php echo $nomor ?></td>
			<td><?php echo $rows[0] ?></td>
			<td><?php echo $rows[1] ?></td>
			<td><?php echo $rows[2] ?></td>
			<td>
				<a href="edit_siswa.php?NISN=<?php echo $rows[0]?>" title="edit">Edit</a>
				 || 
				<a href="hapus_siswa.php?NISN=<?php echo $rows[0]?>" title="Delete" onclick="return confirm('Apakah Anda yakin akan menghapus data siswa dengan Nama <?php echo $rows[1]; ?> ini? ')">
					Delete
				</a>
			</td>
		</tr>
		<?php 
			$nomor += 1;
			} 
		?>
	</table>
  </body>
</html>