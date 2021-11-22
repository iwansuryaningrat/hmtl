-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2021 pada 21.05
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmtl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--
-- Kesalahan membaca struktur untuk tabel hmtl.arsip: #1932 - Table 'hmtl.arsip' doesn't exist in engine
-- Kesalahan membaca data untuk tabel hmtl.arsip: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hmtl`.`arsip`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--
-- Kesalahan membaca struktur untuk tabel hmtl.bidang: #1932 - Table 'hmtl.bidang' doesn't exist in engine
-- Kesalahan membaca data untuk tabel hmtl.bidang: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hmtl`.`bidang`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `biro`
--
-- Kesalahan membaca struktur untuk tabel hmtl.biro: #1932 - Table 'hmtl.biro' doesn't exist in engine
-- Kesalahan membaca data untuk tabel hmtl.biro: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hmtl`.`biro`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabinet`
--
-- Kesalahan membaca struktur untuk tabel hmtl.kabinet: #1932 - Table 'hmtl.kabinet' doesn't exist in engine
-- Kesalahan membaca data untuk tabel hmtl.kabinet: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hmtl`.`kabinet`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender`
--
-- Kesalahan membaca struktur untuk tabel hmtl.kalender: #1932 - Table 'hmtl.kalender' doesn't exist in engine
-- Kesalahan membaca data untuk tabel hmtl.kalender: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hmtl`.`kalender`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `library`
--
-- Kesalahan membaca struktur untuk tabel hmtl.library: #1932 - Table 'hmtl.library' doesn't exist in engine
-- Kesalahan membaca data untuk tabel hmtl.library: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hmtl`.`library`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--
-- Kesalahan membaca struktur untuk tabel hmtl.news: #1932 - Table 'hmtl.news' doesn't exist in engine
-- Kesalahan membaca data untuk tabel hmtl.news: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hmtl`.`news`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--
-- Kesalahan membaca struktur untuk tabel hmtl.pengurus: #1932 - Table 'hmtl.pengurus' doesn't exist in engine
-- Kesalahan membaca data untuk tabel hmtl.pengurus: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hmtl`.`pengurus`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--
-- Kesalahan membaca struktur untuk tabel hmtl.pesan: #1932 - Table 'hmtl.pesan' doesn't exist in engine
-- Kesalahan membaca data untuk tabel hmtl.pesan: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hmtl`.`pesan`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--
-- Kesalahan membaca struktur untuk tabel hmtl.proker: #1932 - Table 'hmtl.proker' doesn't exist in engine
-- Kesalahan membaca data untuk tabel hmtl.proker: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hmtl`.`proker`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukm`
--
-- Kesalahan membaca struktur untuk tabel hmtl.ukm: #1932 - Table 'hmtl.ukm' doesn't exist in engine
-- Kesalahan membaca data untuk tabel hmtl.ukm: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hmtl`.`ukm`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
