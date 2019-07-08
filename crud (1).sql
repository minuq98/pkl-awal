-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2019 pada 05.31
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `url`
--

CREATE TABLE `url` (
  `id` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `short_url` varchar(10) NOT NULL,
  `url` varchar(255) NOT NULL,
  `hit` int(255) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `url`
--

INSERT INTO `url` (`id`, `id_user`, `short_url`, `url`, `hit`, `createdAt`, `updatedAt`) VALUES
(11, 1, 'oyilu', 'http://youtube.com', 1, '2019-07-04 11:40:40', '2019-07-05 14:45:45'),
(12, 1, 'oyis', 'http://google.com', 18, '2019-07-04 15:15:29', '2019-07-05 15:17:07'),
(17, 1, 'lCFe2DPiuY', 'http://facebook.com', 0, '2019-07-05 15:18:27', '2019-07-05 15:18:27'),
(19, 7, 'Kjn0Ei2Qpq', 'http://facebook.com', 0, '2019-07-07 22:13:06', '2019-07-07 22:13:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` enum('user','admin') NOT NULL DEFAULT 'user',
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `is_admin`, `createdAt`, `updatedAt`) VALUES
(1, 'admin', 'admin', 'superuser@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2019-06-22 15:04:43', '2019-07-05 16:02:55'),
(7, 'udin', 'udin', 'udin', '6bec9c852847242e384a4d5ac0962ba0', 'user', '2019-07-01 11:13:55', '2019-07-01 11:13:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `short_url` (`short_url`,`url`),
  ADD UNIQUE KEY `short_url_2` (`short_url`,`url`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `url`
--
ALTER TABLE `url`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `url`
--
ALTER TABLE `url`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
