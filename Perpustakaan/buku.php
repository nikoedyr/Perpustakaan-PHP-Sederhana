<!DOCTYPE html>
<?php 
	include 'koneksi.php';
	$query = "select * from data_buku";
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
	
	<h3>SELAMAT DATANG DI HALAMAN DATA BUKU</h3>
	<a href="tambah_buku.php">Tambah Buku</a> <br/><br/>
	<?php
		$nomor = 1;
	?>
	<font size="3">
	<table class="table" border="1" width="80%">
		<thead>
			<td>No</td>
			<td>Kode Buku</td>
			<td>Judul</td>
			<td>Pengarang</td>
			<td>Penerbit</td>
			<td>Tahun</td>
			<td>Jumlah Buku</td>
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
			<td><?php echo $rows[3] ?></td>
			<td><?php echo $rows[4] ?></td>
			<td><?php echo $rows[5] ?></td>
			<td>
				<a href="edit_buku.php?kode=<?php echo $rows[0]?>" title="edit">Edit</a>
				 || 
				<a href="hapus_buku.php?kode=<?php echo $rows[0]?>" title="Delete" onclick="return confirm('Apakah Anda yakin akan menghapus data buku dengan Judul <?php echo $rows[1]; ?> ini? ')">
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