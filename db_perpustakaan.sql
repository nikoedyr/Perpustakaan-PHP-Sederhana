-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Nov 2020 pada 02.11
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buku`
--

CREATE TABLE `data_buku` (
  `Kode_buku` int(11) NOT NULL,
  `Judul` varchar(50) DEFAULT NULL,
  `Pengarang` varchar(50) DEFAULT NULL,
  `Penerbit` varchar(50) DEFAULT NULL,
  `Tahun` int(5) DEFAULT NULL,
  `Jumlah_buku` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_buku`
--

INSERT INTO `data_buku` (`Kode_buku`, `Judul`, `Pengarang`, `Penerbit`, `Tahun`, `Jumlah_buku`) VALUES
(1, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka Yogyakarta', 2005, 5),
(2, 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia Jakarta', 2009, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `NISN` int(11) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Jenis_kelamin` varchar(10) DEFAULT NULL,
  `Kelas` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`NISN`, `Nama`, `Jenis_kelamin`, `Kelas`) VALUES
(1111, 'Rudi Sanjaya', 'Laki-laki', 'XII RPL'),
(1112, 'Kartika Dewi', 'Perempuan', 'XII RPL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `Kode_transaksi` int(11) NOT NULL,
  `NISN` int(11) DEFAULT NULL,
  `Kode_buku` int(11) DEFAULT NULL,
  `Tanggal_pinjam` date DEFAULT NULL,
  `Tanggal_kembali` date DEFAULT NULL,
  `Status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_transaksi`
--

INSERT INTO `data_transaksi` (`Kode_transaksi`, `NISN`, `Kode_buku`, `Tanggal_pinjam`, `Tanggal_kembali`, `Status`) VALUES
(1, 1111, 1, '2020-10-12', '2020-10-19', 'Belum Dikembalikan'),
(2, 1112, 2, '2020-10-13', '2020-10-20', 'Belum Dikembalikan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`Kode_buku`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`NISN`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`Kode_transaksi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
