-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2021 pada 17.44
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

CREATE TABLE `arsip` (
  `id_arsip` int(11) NOT NULL,
  `id_library` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `namafile` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `downloads` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `profil` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biro`
--

CREATE TABLE `biro` (
  `id_biro` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `angkatan_ketua` int(11) NOT NULL,
  `wakil` varchar(50) NOT NULL,
  `angkatan_wakil` int(11) NOT NULL,
  `ig` varchar(255) DEFAULT NULL,
  `yt` varchar(255) DEFAULT NULL,
  `line` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeriukm`
--

CREATE TABLE `galeriukm` (
  `id` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender`
--

CREATE TABLE `kalender` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `library`
--

CREATE TABLE `library` (
  `id_library` int(11) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `sks` int(11) DEFAULT NULL,
  `kategori` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `highlight` varchar(5) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `judul`, `highlight`, `preview`, `kategori`, `isi`, `foto`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'Ini Judul', 'yes', 'test', 'berita terkini', 'Ini isi', 'covid-09_generated.jpg', '', '2021-12-05 03:47:45', '2021-12-05 03:47:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `nim` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ig` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `isActive` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `pesan` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `telp`, `subject`, `pesan`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Iwan Suryaningrat', 'iwan.suryaningrat28@gmail.com', '088802851811', 'Ini Subject', 'Ini Pesan', 'Replied', '2021-12-12 11:56:27', '2021-12-12 04:59:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE `proker` (
  `id_proker` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `highlight` varchar(5) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `nim` int(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prokerbiro`
--

CREATE TABLE `prokerbiro` (
  `id_prokerbiro` int(11) NOT NULL,
  `id_biro` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `creted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukm`
--

CREATE TABLE `ukm` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `jadwal` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `ketua` varchar(50) NOT NULL,
  `angkatan_ketua` int(11) NOT NULL,
  `wakil` varchar(50) NOT NULL,
  `angkatan_wakil` int(11) NOT NULL,
  `pencapaian` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indeks untuk tabel `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id_arsip`),
  ADD KEY `arsip` (`id_library`);

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `biro`
--
ALTER TABLE `biro`
  ADD PRIMARY KEY (`id_biro`);

--
-- Indeks untuk tabel `galeriukm`
--
ALTER TABLE `galeriukm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ukm` (`id_ukm`);

--
-- Indeks untuk tabel `kalender`
--
ALTER TABLE `kalender`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id_library`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `bidang` (`id_bidang`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id_proker`),
  ADD KEY `pengurus` (`nim`);

--
-- Indeks untuk tabel `prokerbiro`
--
ALTER TABLE `prokerbiro`
  ADD PRIMARY KEY (`id_prokerbiro`),
  ADD KEY `prokerbiro` (`id_biro`);

--
-- Indeks untuk tabel `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biro`
--
ALTER TABLE `biro`
  MODIFY `id_biro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeriukm`
--
ALTER TABLE `galeriukm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kalender`
--
ALTER TABLE `kalender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `library`
--
ALTER TABLE `library`
  MODIFY `id_library` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `proker`
--
ALTER TABLE `proker`
  MODIFY `id_proker` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prokerbiro`
--
ALTER TABLE `prokerbiro`
  MODIFY `id_prokerbiro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `arsip`
--
ALTER TABLE `arsip`
  ADD CONSTRAINT `arsip` FOREIGN KEY (`id_library`) REFERENCES `library` (`id_library`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `galeriukm`
--
ALTER TABLE `galeriukm`
  ADD CONSTRAINT `ukm` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD CONSTRAINT `bidang` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD CONSTRAINT `pengurus` FOREIGN KEY (`nim`) REFERENCES `pengurus` (`nim`) ON DELETE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `prokerbiro`
--
ALTER TABLE `prokerbiro`
  ADD CONSTRAINT `prokerbiro` FOREIGN KEY (`id_biro`) REFERENCES `biro` (`id_biro`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
