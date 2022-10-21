-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2022 pada 08.13
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inobel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bab`
--

CREATE TABLE `tb_bab` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bab`
--

INSERT INTO `tb_bab` (`id`, `judul`, `gambar`) VALUES
(1, 'Rupa Rupa Kawruh', 'cabin.png'),
(2, 'Kawruh liya-liya', 'cake.png'),
(3, 'Kawruh Basa', 'circus.png'),
(4, 'Tembung-tembung', 'game.png'),
(5, 'Wayang/Perwayangan', 'safe.png'),
(6, 'Hanacaraka', 'submarine.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id` int(11) NOT NULL,
  `id_bab` int(11) DEFAULT NULL,
  `nama` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_opening`
--

CREATE TABLE `tb_opening` (
  `id` int(11) NOT NULL,
  `salam` text DEFAULT NULL,
  `nama_apk` text DEFAULT NULL,
  `nama_sekolah` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_opening`
--

INSERT INTO `tb_opening` (`id`, `salam`, `nama_apk`, `nama_sekolah`) VALUES
(1, 'Sugeng rawuh wonten ing', 'Aplikasi Pepak Digital', 'SDN Setonopande 1 Kota Kediri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`, `password`, `active`) VALUES
(1, 'admin', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bab`
--
ALTER TABLE `tb_bab`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_opening`
--
ALTER TABLE `tb_opening`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bab`
--
ALTER TABLE `tb_bab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_opening`
--
ALTER TABLE `tb_opening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
