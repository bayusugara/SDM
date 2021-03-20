-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Mar 2021 pada 04.22
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pretest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_artis`
--

CREATE TABLE `biodata_artis` (
  `uuid` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `alamat_tinggal` varchar(255) DEFAULT NULL,
  `id_kecamatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `biodata_artis`
--

INSERT INTO `biodata_artis` (`uuid`, `nama`, `tempat_lahir`, `tanggal_lahir`, `foto`, `alamat_tinggal`, `id_kecamatan`) VALUES
('1', 'Bayu Sugara', 'Pekanbaru', '1996-05-26', 'user.png', 'Pekanbaru', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata_artis`
--
ALTER TABLE `biodata_artis`
  ADD PRIMARY KEY (`uuid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
