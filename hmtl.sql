-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2021 pada 09.26
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
  `id` int(11) NOT NULL,
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

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id`, `nama`, `profil`, `deskripsi`, `tujuan`, `created_at`, `updated_at`) VALUES
(1, 'Pengurus Harian', '', '', '', '2021-12-15 13:22:19', '2021-12-15 13:22:19'),
(2, 'Unit Pengembangan dan  Manajemen Organisasi', '', '', '', '2021-12-15 13:22:19', '2021-12-15 13:22:19'),
(3, 'Unit Kantor Media  dan Informasi', '', '', '', '2021-12-15 13:22:19', '2021-12-15 13:22:19'),
(4, 'Bidang Riset dan Inovasi', '', '', '', '2021-12-15 13:22:19', '2021-12-15 13:22:19'),
(5, 'Bidang Pendidikan dan Penalaran', '', '', '', '2021-12-15 13:22:19', '2021-12-15 13:22:19'),
(6, 'Bidang Pengembangan Sumber  Daya Mahasiswa', '', '', '', '2021-12-15 13:26:01', '2021-12-15 13:26:01'),
(7, 'Bidang Kesejahteraan  Mahasiswa', '', '', '', '2021-12-15 13:26:01', '2021-12-15 13:26:01'),
(8, 'Bidang Pengabdian Masyarakat', '', '', '', '2021-12-15 13:26:01', '2021-12-15 13:26:01'),
(9, 'Bidang Hubungan Masyarakat', '', '', '', '2021-12-15 13:26:01', '2021-12-15 13:26:01'),
(10, 'Bidang Minat, Bakat, dan  Kegemaran', '', '', '', '2021-12-15 13:26:01', '2021-12-15 13:26:01'),
(11, 'Bidang Ekonomi dan  Bisnis', '', '', '', '2021-12-15 13:26:01', '2021-12-15 13:26:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biro`
--

CREATE TABLE `biro` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deskripsi` varchar(1024) NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `angkatan_ketua` int(11) NOT NULL,
  `wakil` varchar(50) NOT NULL,
  `angkatan_wakil` int(11) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `line` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biro`
--

INSERT INTO `biro` (`id`, `nama`, `logo`, `deskripsi`, `ketua`, `angkatan_ketua`, `wakil`, `angkatan_wakil`, `ig`, `yt`, `line`, `twitter`, `fb`, `web`, `created_at`, `updated_at`) VALUES
(1, 'Ikatan Pecinta Alam Lingkungan', '1639579720_4ee46dfce9401fed3b18.jpg', 'Biro IPAL (Ikatan Pecinta Alam Lingkungan) merupakan biro di jurusan Teknik Lingkungan Universitas Diponegoro yang berdiri di bidang kepencinta alaman. berdiri pada tanggal 11 November 2000 yang diprakarsai oleh Khusnul Sambodja. IPAL sendiri memiliki prinsip yaitu \"Save Water Plant Trees\"', 'Anisatul Fitria', 2018, 'Farid Ikhsanudin Irawan', 2018, 'http://instagram.com/ipalundip', 'https://www.youtube.com/channel/UCeYMwbnnPh89yne74a9J3MA', '', '', '', '', '2021-12-15 13:30:31', '2021-12-15 08:48:40'),
(2, 'Kelompok Studi Lingkungan', '1639579739_0dc7258802dd304dc009.jpg', 'Kelompok Studi Lingkungan, atau biasa disingkat KSL, adalah suatu perkumpulan para mahasiswa Teknik Lingkungan Universitas Diponegoro yang memiliki jiwa cinta lingkungan yang kuat serta berkomitmen untuk menjadikan lingkungan Indonesia ini menjadi lebih baik dan indah yang dimulai dari hal-hal yang dasar di sekitar kampus, lalu membagikan ilmu yang dipunyai dan didapatkan untuk masyarakat sekitar, serta berorientasi pada bagaimana meningkatkan indeks prestasi mahasiswa, menjadi kelompok riset mahasiswa untuk mendukung UNDIP sebagai research university.', 'Ayunindya W. Putri H.', 2019, 'Farah Ardica C.', 2019, 'https://www.instagram.com/kslundip/', 'https://www.youtube.com/channel/UCCx9rQXLlhMlZuUE0YBWb1A', '', 'https://twitter.com/ksl_undip?lang=id', 'https://id-id.facebook.com/KSLUndip/', 'http://kslundip.wordpress.com', '2021-12-15 13:30:31', '2021-12-15 08:48:59'),
(3, 'Hayatun Nufus', '1639579568_90f71c69a88042297433.jpg', 'HN (Hayatun Nufus) merupakan Biro erohanian Islam Teknik Lingkungan yang bergerak dalam lembaga dakwah kampus. ', 'Fakhri Aulia Azmi Razzy', 2019, 'Anas Fikri Muliawan', 2019, 'http://instagram.com/hayatunnufus_tl', '', '', '', '', '', '2021-12-15 13:30:31', '2021-12-15 08:46:08');

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

--
-- Dumping data untuk tabel `kalender`
--

INSERT INTO `kalender` (`id`, `kategori`, `tanggal`, `kegiatan`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'kegiatan', '2021-12-16', 'LPJ Biro', 'Ini Keterangan', '2021-12-15 10:45:23', '2021-12-15 05:48:23'),
(3, 'akademik', '2021-12-16', 'UAS', 'UAS Semester Ganjil', '2021-12-15 05:20:17', '2021-12-15 05:20:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
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
(1, 'Ini Judul', 'yes', 'test', 'berita terkini', '<br>', 'news-1.jpg', '', '2021-12-05 03:47:45', '2021-12-15 06:08:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `pengurus` varchar(50) NOT NULL,
  `bidangid` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `isActive` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`id`, `nim`, `pengurus`, `bidangid`, `jabatan`, `angkatan`, `foto`, `ig`, `linkedin`, `twitter`, `isActive`, `created_at`, `updated_at`) VALUES
(2, '21080119130057', 'Laura Haqq Syuura', 1, 'Wakil Ketua Himpunan', 2019, '', '', '', '', '', '2021-12-15 17:46:19', '2021-12-15 17:46:19'),
(3, '21080119120010', 'Hanif Kusumasasmita', 1, 'Ketua Himpunan', 2019, '1639635898_a94d9c49f0f2f15a6878.png', '', '', '', 'Ya', '2021-12-15 22:21:48', '2021-12-16 00:24:58');

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
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `telp`, `subject`, `pesan`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Iwan Suryaningrat', 'iwan.suryaningrat28@gmail.com', '088802851811', 'ini subject', 'ini pesan', 'Unread', '2021-12-17 07:10:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE `proker` (
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
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
-- Dumping data untuk tabel `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `date`, `hits`, `online`, `time`) VALUES
(1, '::1', '2021-12-16', 2, '2021-12-16 08:37:24', '2021-12-16 08:37:24'),
(2, '::1', '2021-12-17', 8, '2021-12-17 02:20:38', '2021-12-17 02:20:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`),
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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bidang` (`bidangid`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengurus` (`nim`);

--
-- Indeks untuk tabel `prokerbiro`
--
ALTER TABLE `prokerbiro`
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `biro`
--
ALTER TABLE `biro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `galeriukm`
--
ALTER TABLE `galeriukm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kalender`
--
ALTER TABLE `kalender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `proker`
--
ALTER TABLE `proker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prokerbiro`
--
ALTER TABLE `prokerbiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `arsip`
--
ALTER TABLE `arsip`
  ADD CONSTRAINT `arsip` FOREIGN KEY (`id_library`) REFERENCES `library` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `galeriukm`
--
ALTER TABLE `galeriukm`
  ADD CONSTRAINT `ukm` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD CONSTRAINT `bidang` FOREIGN KEY (`bidangid`) REFERENCES `bidang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD CONSTRAINT `pengurus` FOREIGN KEY (`nim`) REFERENCES `pengurus` (`id`);

--
-- Ketidakleluasaan untuk tabel `prokerbiro`
--
ALTER TABLE `prokerbiro`
  ADD CONSTRAINT `prokerbiro` FOREIGN KEY (`id_biro`) REFERENCES `biro` (`id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
