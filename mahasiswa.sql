-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2018 pada 12.08
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `baru`
--

CREATE TABLE `baru` (
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` varchar(25) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `moto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `baru`
--

INSERT INTO `baru` (`nim`, `nama`, `kelamin`, `prodi`, `fakultas`, `asal`, `moto`) VALUES
(123242, 'sadds', 'laki-laki', 'IF', 'terapan', 'sdfsfsd', 'sdfdsfsf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `baru`
--
ALTER TABLE `baru`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
