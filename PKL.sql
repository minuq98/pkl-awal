-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2019 pada 07.07
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
-- Struktur dari tabel `logger`
--

CREATE TABLE `logger` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descript` text NOT NULL,
  `type` enum('info','warning','critical','debug') NOT NULL DEFAULT 'info',
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `logger`
--

INSERT INTO `logger` (`id`, `title`, `descript`, `type`, `createdAt`) VALUES
(1, 'login', '::1,,Windows 10', 'info', '0000-00-00 00:00:00'),
(2, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '0000-00-00 00:00:00'),
(3, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '0000-00-00 00:00:00'),
(4, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-09 00:00:00'),
(5, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-09 12:59:14'),
(6, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-09 13:06:31'),
(7, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-09 13:29:58'),
(8, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-09 14:07:57'),
(9, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-09 14:08:20'),
(10, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-09 14:09:16'),
(11, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-09 14:47:38'),
(12, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'warning', '2019-07-09 15:46:54'),
(13, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'warning', '2019-07-09 15:47:20'),
(14, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'warning', '2019-07-09 15:50:26'),
(15, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'warning', '2019-07-09 15:50:26'),
(16, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'warning', '2019-07-09 15:50:33'),
(17, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'warning', '2019-07-09 15:52:17'),
(18, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'warning', '2019-07-09 15:59:22'),
(19, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'warning', '2019-07-09 16:00:01'),
(20, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-09 16:00:42'),
(21, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-10 10:52:27'),
(22, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-10 12:27:51'),
(23, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-10 12:42:20'),
(24, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-10 12:45:51'),
(25, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-10 22:49:27'),
(26, 'login', '::1,Chrome 75.0.3770.100,Windows 10', 'info', '2019-07-11 10:19:24'),
(27, 'login', '[\"::1\",\"Chrome 75.0.3770.100\",\"Windows 10\"]', 'info', '2019-07-11 12:46:43'),
(28, 'login', '[\"::1\",\"Chrome 75.0.3770.100\",\"Windows 10\"]', 'info', '2019-07-11 13:00:43'),
(29, 'login', '[\"::1\",\"Chrome 75.0.3770.100\",\"Windows 10\"]', 'info', '2019-07-11 13:33:36'),
(30, 'login', '[\"::1\",\"Chrome 75.0.3770.100\",\"Windows 10\"]', 'info', '2019-07-11 13:42:00'),
(31, 'login', '[\"::1\",\"Chrome 75.0.3770.100\",\"Windows 10\"]', 'info', '2019-07-11 14:18:46'),
(32, 'login', '[\"::1\",\"Chrome 75.0.3770.100\",\"Windows 10\"]', 'info', '2019-07-11 14:51:26'),
(33, 'login', '[\"::1\",\"Chrome 75.0.3770.100\",\"Windows 10\"]', 'info', '2019-07-11 14:55:50'),
(34, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-11 15:10:21'),
(35, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-11 15:13:00'),
(36, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-11 17:14:57'),
(37, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-11 21:10:00'),
(38, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-12 09:26:39'),
(39, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-12 13:00:31'),
(40, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-12 15:11:29'),
(41, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-13 08:37:02'),
(42, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-13 10:05:05'),
(43, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-13 10:51:47'),
(44, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-13 19:26:26'),
(45, 'login', '{\"ip\":\"127.0.0.1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-15 16:40:37'),
(46, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-15 22:12:30'),
(47, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-16 16:01:30'),
(48, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-16 19:48:33'),
(49, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome 75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-17 10:10:23'),
(50, 'info', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.100\",\"platform\":\"Windows 10\"}', '', '2019-07-17 15:46:24'),
(51, 'info', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.100\",\"platform\":\"Windows 10\"}', '', '2019-07-17 15:46:25'),
(52, 'info', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.100\",\"platform\":\"Windows 10\"}', '', '2019-07-17 15:46:59'),
(53, 'info', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.100\",\"platform\":\"Windows 10\"}', '', '2019-07-17 15:47:01'),
(54, 'info', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.100\",\"platform\":\"Windows 10\"}', '', '2019-07-17 15:47:52'),
(55, 'info', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.100\",\"platform\":\"Windows 10\"}', '', '2019-07-17 15:47:53'),
(56, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-17 15:54:17'),
(57, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-17 15:54:18'),
(58, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-17 15:57:26'),
(59, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.100\",\"platform\":\"Windows 10\"}', 'info', '2019-07-17 15:57:27'),
(60, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\"}', 'info', '2019-07-18 13:38:49'),
(61, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\"}', 'info', '2019-07-18 13:38:57'),
(62, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\"}', 'info', '2019-07-18 13:44:01'),
(63, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\"}', 'info', '2019-07-18 13:44:03'),
(64, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\"}', 'info', '2019-07-18 13:46:12'),
(65, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\"}', 'info', '2019-07-18 13:46:25'),
(66, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\"}', 'info', '2019-07-18 13:47:38'),
(67, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":null}', 'info', '2019-07-18 21:27:55'),
(68, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":null}', 'info', '2019-07-18 21:27:56'),
(69, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":null}', 'info', '2019-07-18 21:28:20'),
(70, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":null}', 'info', '2019-07-18 21:28:21'),
(71, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":null}', 'info', '2019-07-18 21:28:34'),
(72, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":null}', 'info', '2019-07-18 21:29:27'),
(73, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":null}', 'info', '2019-07-18 21:29:28'),
(74, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"id\":\"12\",\"id_user\":\"1\",\"short_url\":\"oyis\",\"url\":\"http:\\/\\/google.com\",\"hit\":\"43\",\"createdAt\":\"2019-07-04 15:15:29\",\"updatedAt\":\"2019-07-05 15:17:07\"}}', 'info', '2019-07-18 21:30:48'),
(75, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"id\":\"12\",\"id_user\":\"1\",\"short_url\":\"oyis\",\"url\":\"http:\\/\\/google.com\",\"hit\":\"44\",\"createdAt\":\"2019-07-04 15:15:29\",\"updatedAt\":\"2019-07-05 15:17:07\"}}', 'info', '2019-07-18 21:30:49'),
(76, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"\"}', 'info', '2019-07-18 21:37:25'),
(77, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"http:\\/\\/google.com\"}', 'info', '2019-07-18 21:42:14'),
(78, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"http:\\/\\/google.com\"}', 'info', '2019-07-18 21:42:15'),
(79, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"http:\\/\\/google.com\"}', 'info', '2019-07-18 21:43:41'),
(80, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"http:\\/\\/google.com\"}', 'info', '2019-07-18 21:43:43'),
(81, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"http:\\/\\/google.com\"}', 'info', '2019-07-18 21:45:19'),
(82, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"http:\\/\\/google.com\"}', 'info', '2019-07-18 21:45:20'),
(83, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"http:\\/\\/google.com\"}', 'info', '2019-07-18 21:46:08'),
(84, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"http:\\/\\/google.com\"}', 'info', '2019-07-18 21:46:08'),
(85, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"http:\\/\\/google.com\"}', 'info', '2019-07-18 21:47:08'),
(86, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"http:\\/\\/google.com\"}', 'info', '2019-07-18 21:47:09'),
(87, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":null}', 'info', '2019-07-18 22:01:51'),
(88, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":null}', 'info', '2019-07-18 22:01:51'),
(89, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":[{\"id\":\"12\",\"id_user\":\"1\",\"short_url\":\"oyis\",\"url\":\"http:\\/\\/google.com\",\"hit\":\"57\",\"createdAt\":\"2019-07-04 15:15:29\",\"updatedAt\":\"2019-07-05 15:17:07\"}]}', 'info', '2019-07-18 22:05:15'),
(90, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":[{\"id\":\"12\",\"id_user\":\"1\",\"short_url\":\"oyis\",\"url\":\"http:\\/\\/google.com\",\"hit\":\"58\",\"createdAt\":\"2019-07-04 15:15:29\",\"updatedAt\":\"2019-07-05 15:17:07\"}]}', 'info', '2019-07-18 22:05:16'),
(91, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"http:\\/\\/google.com\"}', 'info', '2019-07-18 22:06:07'),
(92, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"http:\\/\\/google.com\"}', 'info', '2019-07-18 22:07:35'),
(93, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"user\":\"admin\"}}', 'info', '2019-07-18 22:12:36'),
(94, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"user\":\"admin\"}}', 'info', '2019-07-18 22:13:58'),
(95, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"url\":\"http:\\/\\/google.com\"}}', 'info', '2019-07-18 22:14:45'),
(96, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"url\":\"http:\\/\\/google.com\"}}', 'info', '2019-07-18 22:14:46'),
(97, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"url\":\"http:\\/\\/google.com\"}}', 'info', '2019-07-18 22:28:41'),
(98, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-19 10:41:48'),
(99, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 10:43:34'),
(100, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 10:43:34'),
(101, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 10:43:57'),
(102, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/youtube.com\"}', 'info', '2019-07-19 10:43:59'),
(103, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 10:44:23'),
(104, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-19 10:52:03'),
(105, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"username\":\"udin\",\"password\":\"6c0cbf5029aed0af395ac4b864c6b095\",\"inform\":\"Terbanned\"}', 'warning', '2019-07-19 10:52:33'),
(106, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-19 10:52:55'),
(107, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-19 11:07:17'),
(108, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"user\":\"admin\"}}', 'info', '2019-07-19 11:09:50'),
(109, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"user\":\"admin\"}}', 'info', '2019-07-19 11:13:12'),
(110, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"user\":\"admin\"}}', 'info', '2019-07-19 11:15:26'),
(111, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"user\":\"admin\"}}', 'info', '2019-07-19 11:15:33'),
(112, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"\"}', 'warning', '2019-07-19 11:17:21'),
(113, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"\"}', 'warning', '2019-07-19 11:17:27'),
(114, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":\"\"}', 'warning', '2019-07-19 11:17:33'),
(115, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"username\":\"udin\",\"password\":\"49299ca918b02a430d8e677cbaea192d\",\"inform\":\"Terbanned\"}}', 'warning', '2019-07-19 11:21:42'),
(116, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"username\":\"udin\",\"password\":\"d123ac087b796ae08cd8d63556fbc487\",\"inform\":\"gagal_login\"}}', 'warning', '2019-07-19 11:22:11'),
(117, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"username\":\"udin\",\"password\":\"59b466fd93164953e56bdd1358dc0044\",\"inform\":\"gagal_login\"}}', 'warning', '2019-07-19 11:22:17'),
(118, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"username\":\"udin\",\"password\":\"7847e49db9e68eca24751c5a175a2e07\",\"inform\":\"gagal_login\"}}', 'warning', '2019-07-19 11:22:20'),
(119, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"username\":\"udin\",\"password\":\"21232f297a57a5a743894a0e4a801fc3\",\"inform\":\"Terbanned\"}}', 'warning', '2019-07-19 11:22:23'),
(120, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"0\":{\"user\":\"admin\"}}', 'info', '2019-07-19 11:23:12'),
(121, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-19 11:25:53'),
(122, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-19 14:36:54'),
(123, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 14:55:55'),
(124, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 14:57:12'),
(125, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 14:57:13'),
(126, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 14:57:57'),
(127, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 14:57:58'),
(128, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:00:09'),
(129, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:00:10'),
(130, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:03:33'),
(131, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:03:33'),
(132, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:04:15'),
(133, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:04:17'),
(134, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:04:25'),
(135, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:04:31'),
(136, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:04:45'),
(137, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:05:31'),
(138, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:05:48'),
(139, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:05:50'),
(140, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:06:34'),
(141, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:06:34'),
(142, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:08:00'),
(143, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:08:16'),
(144, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:08:17'),
(145, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:09:30'),
(146, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:09:31'),
(147, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:10:01'),
(148, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:10:02'),
(149, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:10:07'),
(150, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:10:11'),
(151, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:10:14'),
(152, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:10:22'),
(153, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:10:26'),
(154, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:11:33'),
(155, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:11:34'),
(156, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:11:40'),
(157, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:11:50'),
(158, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:12:08'),
(159, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:12:34'),
(160, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:12:34'),
(161, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:13:02'),
(162, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:13:04'),
(163, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:15:14'),
(164, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:15:22'),
(165, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:15:33'),
(166, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-19 15:15:33'),
(167, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"username\":\"udin\",\"password\":\"8e1e02ca3401f4667cd586cdf03758fd\",\"inform\":\"Terbanned\"}', 'warning', '2019-07-21 20:54:50'),
(168, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"username\":\"udin\",\"password\":\"8e1e02ca3401f4667cd586cdf03758fd\",\"inform\":\"Terbanned\"}', 'warning', '2019-07-21 20:55:53'),
(169, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-22 06:22:34'),
(170, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-22 09:51:15'),
(171, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"username\":\"udin\",\"password\":\"6bec9c852847242e384a4d5ac0962ba0\",\"inform\":\"Terbanned\"}', 'warning', '2019-07-22 10:52:42'),
(172, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-22 18:23:36'),
(173, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-23 05:29:30'),
(174, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-23 11:03:12'),
(175, 'redirect', '', 'critical', '2019-06-23 00:00:00'),
(176, 'redirect', '', 'critical', '2019-06-23 00:00:00'),
(177, 'redirect', '', 'warning', '2019-06-23 00:00:00'),
(178, 'redirect', '', 'critical', '2019-06-23 00:00:00'),
(179, 'redirect', '', 'debug', '2019-06-23 00:00:00'),
(180, 'redirect', '', 'debug', '2019-06-23 00:00:00'),
(181, 'redirect', '', 'debug', '2019-06-23 00:00:00'),
(182, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-23 18:12:07'),
(183, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-24 10:18:51'),
(184, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-24 13:02:01'),
(185, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'critical', '2019-07-24 18:49:33'),
(186, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-25 10:08:27'),
(187, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-25 16:47:12'),
(188, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-25 20:00:09'),
(189, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-25 20:00:14'),
(190, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-25 20:40:29'),
(191, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"username\":\"udin\",\"password\":\"6bec9c852847242e384a4d5ac0962ba0\",\"inform\":\"Terbanned\"}', 'warning', '2019-07-25 21:16:48'),
(192, 'Gagal Log in', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"username\":\"udin\",\"password\":\"6bec9c852847242e384a4d5ac0962ba0\",\"inform\":\"gagal_login\"}', 'warning', '2019-07-25 21:17:26'),
(193, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"udin\"}', 'info', '2019-07-25 21:18:18'),
(194, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-25 21:22:19'),
(195, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-26 11:22:04'),
(196, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-26 20:06:52'),
(197, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"udin\"}', 'info', '2019-07-26 20:23:40'),
(198, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-27 14:06:35'),
(199, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-28 15:10:04'),
(200, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-29 18:49:48'),
(201, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-30 12:40:49'),
(202, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-30 19:03:02'),
(203, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-30 21:30:56'),
(204, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-30 21:31:42'),
(205, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-30 21:58:10'),
(206, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-31 10:25:45'),
(207, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 11:09:54'),
(208, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 11:09:55'),
(209, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-31 11:17:48'),
(210, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 11:18:17'),
(211, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 11:18:18'),
(212, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 11:19:18'),
(213, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 11:19:19'),
(214, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 11:21:25'),
(215, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 11:44:57'),
(216, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 11:44:58'),
(217, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-31 11:45:08'),
(218, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-31 11:48:11'),
(219, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-31 14:26:51'),
(220, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-31 14:27:16'),
(221, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 14:32:38'),
(222, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 14:32:46'),
(223, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 14:33:03'),
(224, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 14:33:03'),
(225, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 14:36:02'),
(226, 'redirect', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"url\":\"http:\\/\\/google.com\"}', 'info', '2019-07-31 14:36:02'),
(227, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-31 17:15:46'),
(228, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-31 17:28:31'),
(229, 'Gagal Log in', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"username\":\"udin\",\"password\":\"6bec9c852847242e384a4d5ac0962ba0\",\"inform\":\"gagal_login\"}', 'warning', '2019-07-31 18:35:56'),
(230, 'Gagal Log in', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"username\":\"udin\",\"password\":\"6bec9c852847242e384a4d5ac0962ba0\",\"inform\":\"gagal_login\"}', 'warning', '2019-07-31 18:36:01'),
(231, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"nidu\"}', 'info', '2019-07-31 18:36:06'),
(232, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"nidu\"}', 'info', '2019-07-31 18:37:34'),
(233, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"nidu\"}', 'info', '2019-07-31 18:38:17'),
(234, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"nidu\"}', 'info', '2019-07-31 19:05:23'),
(235, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"nidu\"}', 'info', '2019-07-31 19:12:43'),
(236, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"nidu\"}', 'info', '2019-07-31 19:25:48'),
(237, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-31 19:47:51'),
(238, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"nidu\"}', 'info', '2019-07-31 19:50:31'),
(239, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-31 20:20:59'),
(240, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"nidu\"}', 'info', '2019-07-31 20:23:27'),
(241, 'login', '{\"ip\":\"::1\",\"browser\":\"Chrome\",\"version\":\"75.0.3770.142\",\"platform\":\"Windows 10\",\"user\":\"admin\"}', 'info', '2019-07-31 20:38:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `url`
--

CREATE TABLE `url` (
  `id` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `short_url` varchar(10) NOT NULL,
  `url` varchar(255) NOT NULL,
  `hit` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `url`
--

INSERT INTO `url` (`id`, `id_user`, `short_url`, `url`, `hit`, `createdAt`, `updatedAt`) VALUES
(11, 1, 'oyilu', 'http://youtube.com', 10, '2019-07-04 11:40:40', '2019-07-05 14:45:45'),
(12, 1, 'oyis', 'http://google.com', 127, '2019-07-04 15:15:29', '2019-07-05 15:17:07'),
(17, 1, 'oyi', 'http://facebook.com', 14, '2019-07-05 15:18:27', '2019-07-11 17:32:45'),
(18, 1, 'mang', 'http://facebook.com', 0, '2019-07-11 17:28:08', '2019-07-11 17:32:52'),
(19, 1, 'ntab', 'http://facebook.com', 1, '2019-07-11 17:28:17', '2019-07-11 17:33:00'),
(20, 1, 'tqK8JRgO6V', 'http://facebook.com', 6, '2019-07-11 17:28:42', '2019-07-11 17:28:42'),
(21, 1, '6ekqvgCBHI', 'http://facebook.com', 2, '2019-07-11 17:30:19', '2019-07-11 17:30:19'),
(23, 7, 'itu', 'http://facebook.com', 5, '2019-07-26 20:44:21', '2019-07-26 20:44:41'),
(24, 1, 'iKPFSZ7vQy', 'http://facebook.com', 0, '2019-07-30 19:03:17', '2019-07-30 19:03:17'),
(25, 1, 'GQ3qhVmlNO', 'http://facebook.com', 0, '2019-07-31 14:29:08', '2019-07-31 14:29:08'),
(26, 1, 'VGmRCZLgcT', 'http://youtube.com', 0, '2019-07-31 14:29:49', '2019-07-31 14:29:49'),
(27, 1, 'HUsj4Xvyqw', 'http://youtube.com', 0, '2019-07-31 14:30:09', '2019-07-31 14:30:09');

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
  `is_admin` enum('user','admin','') DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `is_admin`, `createdAt`, `updatedAt`, `count`) VALUES
(1, 'admin', 'admin', 'superuser@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2019-06-22 15:04:43', '2019-07-05 16:02:55', 0),
(7, 'udin1', 'udin', 'udin@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '2019-07-01 11:13:55', '2019-07-31 10:27:33', 3),
(8, 'adjkdn', 'reply', 'reply@gmail.com', 'e84afaab83ecb301b3d97ce4174d2773', 'user', '2019-07-26 21:04:55', '2019-07-26 21:04:55', 0),
(9, 'nindu', 'nindu', 'nindu@gmail.com', '3b8d2b96fc2b1f17cf29267eb3414396', 'user', '2019-07-26 21:05:24', '2019-07-26 21:05:24', 0),
(10, 'nidu', 'nidu', 'nidu@gmail.com', '880ff5f67336eceb9eb1ae2056c379db', 'user', '2019-07-26 21:05:41', '2019-07-26 21:05:41', 0),
(11, 'dino', 'dino', 'dino@gmail.com', 'b246ff693d453c3b1a3049752da2bc75', 'user', '2019-07-26 21:06:09', '2019-07-26 21:06:09', 0),
(12, 'saur', 'saur', 'saur@gmail.com', '4648bdc53b2abcd85734f55a21a2c22b', 'user', '2019-07-26 21:06:49', '2019-07-26 21:06:49', 0),
(13, 'minuq', 'minuq', 'minuq@gmail.com', '0babd47d3c6f2bad09965bfbf7fbd89c', 'user', '2019-07-28 17:16:05', '2019-07-28 17:16:05', 0),
(14, 'minuq1', 'mi', 'mi@gmail.com', '29bfe372865737fe2bfcfd3618b1da7d', 'user', '2019-07-28 17:16:49', '2019-07-28 17:16:49', 0),
(15, 'miu', 'miu', 'miu@gmail.com', '5e902eeb8472009f2b3414fbc28be132', 'user', '2019-07-28 17:17:10', '2019-07-28 17:17:10', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `logger`
--
ALTER TABLE `logger`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `logger`
--
ALTER TABLE `logger`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT untuk tabel `url`
--
ALTER TABLE `url`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
