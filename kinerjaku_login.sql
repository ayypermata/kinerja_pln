-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Agu 2019 pada 15.59
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinerjaku_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perspektif`
--

CREATE TABLE `perspektif` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama_perspektif` varchar(255) NOT NULL,
  `no` varchar(128) NOT NULL,
  `bobot` decimal(65,0) NOT NULL,
  `bobot_real` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perspektif`
--

INSERT INTO `perspektif` (`id`, `kode`, `nama_perspektif`, `no`, `bobot`, `bobot_real`) VALUES
(1, '1', 'Perspektif Pelanggan', 'I', '0', '0'),
(2, '2', 'Perspektif Efektifitas Produk dan Proses', 'II', '0', '0'),
(3, '3', 'Perspektif SDM', 'III', '0', '0'),
(4, '4', 'Perspektif Keuangan dan Pasar', 'IV', '0', '0'),
(5, '5', 'Perspektif Kepemimpinan', 'V', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perspektif_isi`
--

CREATE TABLE `perspektif_isi` (
  `id` int(255) NOT NULL,
  `kode_perspektif` varchar(128) NOT NULL,
  `nomor` int(255) NOT NULL,
  `indikator` varchar(128) NOT NULL,
  `polaritas` int(1) NOT NULL,
  `satuan` varchar(128) NOT NULL,
  `bobot` decimal(65,0) NOT NULL,
  `target_tahunan` decimal(65,0) NOT NULL,
  `target_bulanan` decimal(65,0) NOT NULL,
  `real` decimal(65,0) NOT NULL,
  `capaian` int(100) NOT NULL,
  `real_bobot` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perspektif_isi`
--

INSERT INTO `perspektif_isi` (`id`, `kode_perspektif`, `nomor`, `indikator`, `polaritas`, `satuan`, `bobot`, `target_tahunan`, `target_bulanan`, `real`, `capaian`, `real_bobot`) VALUES
(1, '1', 1, 'Jumlah Penambahan Pelanggan R', 3, 'Pelanggan', '3', '23398', '5076', '3831', 75, '2'),
(2, '2', 1, 'FGTM', 3, '%', '2', '100', '100', '0', 0, '0'),
(3, '3', 1, 'HCR', 3, '%', '2', '100', '100', '0', 0, '0'),
(4, '4', 1, 'BPP', 3, '%', '2', '100', '100', '0', 0, '0'),
(5, '5', 1, 'Implementasi K2', 3, '%', '2', '100', '100', '0', 0, '0'),
(6, '2', 2, 'Rasio Kerusakan Trafo', 3, '%', '2', '100', '100', '0', 0, '0'),
(8, '1', 2, 'Peningkatan Penjualan Tenaga Listrik Non Subsidi', 0, '', '0', '0', '0', '0', 0, '0'),
(9, '1', 0, 'a. Percepatan Penyambungan Pelanggan\r\n', 3, 'Pelanggan', '3', '100', '100', '100', 100, '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Vatanz', 'muh0_0yusuf@yahoo.com', 'Tercyduck_170911_0185.jpg', '$2y$10$cTgTLZiOlaXAlpJ6RfdGwuhM3sEOrg1JyBPPC1Ztlkz0aj7k7Xs9W', 1, 1, 1553708457),
(5, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$KMppMyxo5YU5PklWZCyr9.YK5Fjh9pQ0wRBkyhfZagtt7cz0OcSki', 2, 1, 1554051173),
(8, 'erik', 'erik@gmail.com', 'default.jpg', '$2y$10$cDXDgDw16mr7nKryOPbIv.raBvQ/Tq2OtiM0xYmcbk5Fdt8ftCv1a', 2, 0, 1554129483),
(11, 'Vatanzjr', 'muh0.0yusuf@gmail.com', 'default.jpg', '$2y$10$Xo/OrzE8oGmHNgW1AIhrf.o7dlSnoDCCxJI20NDcE2/WP.fodThFu', 2, 1, 1554133012),
(13, 'Ayu Permata Sari', 'ayypermata@gmail.com', 'default.jpg', '$2y$10$UzkgTYS3TJMQii5DytIYdeGZhnzQyT1We4Kq0bVBbiEe9hvoaeirG', 2, 0, 1554134700),
(14, 'Ayu Permata Sari', 'ayupermatasari115@gmail.com', 'default.jpg', '$2y$10$Q.1hvD0vjL8JcywEuEvc2eLKUPKQoX4fPTEW26ieHhca8gqMdVRQS', 2, 0, 1554134756),
(17, 'Vatanzjr', 'vatanz.my@gmail.com', 'default.jpg', '$2y$10$tK/qNftDErp1tDQjw4ziBuWASrzSXNbvwjqwkTXp3rb8uXciKZ0By', 2, 1, 1554135592),
(18, 'Sebastian Oktaviano mio', 'sebastianoktaviano@gmail.com', '2019-oneal-mayhem-ambush-jersey-orange.jpg', '$2y$10$Am0BRT/IWGZP4vYyLxWUW.fdTLeYVxZdTF.XSJ4bIl.uKq8wBSKhe', 2, 1, 1554178603),
(19, 'Azhar Firdaus', 'kotaksurat.azhar@gmail.com', 'default.jpg', '$2y$10$8yce3idq98kMI3sX.4gVEOU5Bc.5qBrF4pjzGhlcE8cyRP0xQADxi', 2, 1, 1554301243),
(20, 'Agus Salman', 'agussalman@ptbppid.com', 'default.jpg', '$2y$10$YUb2PNPkKZRvTnOUxDg4mOiXl11ImXiFt.0YHdl7DuyYPQQmYFCNC', 2, 1, 1555667838);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(5, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Super Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(9, 2, 'Dashboard Kinerja', 'user/kinerja', 'fas fa-fw fa-chart-line', 1),
(10, 2, 'Profilku', 'user', 'fas fa-fw fa-users', 1),
(11, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(12, 2, 'Ubah Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(13, 3, 'Perspektif Isi', 'menu/kpi', 'fas fa-fw fa-folder-open', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(5, 'ayypermata@gmail.com', 'JFB6gi6DSCwQOrtjZ4RhGb/fO4zpt2wtO9TJBvvvKjo=', 1554134700),
(6, 'ayupermatasari115@gmail.com', 'ROM3/HN4DaE/HOjLhCXy/2WOy5qCfzAg5LaKli9K2Nw=', 1554134756),
(7, 'vatanz.my@gmail.com', '0w1p/ghmWBd0oj4K9P+iDYkPUnde7W1gAgmyHM8ktnM=', 1554289754),
(8, 'vatanz.my@gmail.com', 'AVFuIkKOyXkAP2SNKZbyYQLhaBOOYPvReCGwYkjulA4=', 1554291254);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perspektif`
--
ALTER TABLE `perspektif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perspektif_isi`
--
ALTER TABLE `perspektif_isi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perspektif`
--
ALTER TABLE `perspektif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `perspektif_isi`
--
ALTER TABLE `perspektif_isi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
