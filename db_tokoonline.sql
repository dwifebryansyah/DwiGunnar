-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2019 pada 18.45
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
-- Database: `db_tokoonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acl_phinxlog`
--

CREATE TABLE `acl_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `acl_phinxlog`
--

INSERT INTO `acl_phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20141229162641, 'CakePhpDbAcl', '2019-08-07 19:55:20', '2019-08-07 19:55:32', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `acos`
--

CREATE TABLE `acos` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 142),
(2, 1, NULL, NULL, 'Error', 2, 3),
(3, 1, NULL, NULL, 'Groups', 4, 15),
(4, 3, NULL, NULL, 'index', 5, 6),
(5, 3, NULL, NULL, 'view', 7, 8),
(6, 3, NULL, NULL, 'add', 9, 10),
(7, 3, NULL, NULL, 'edit', 11, 12),
(8, 3, NULL, NULL, 'delete', 13, 14),
(9, 1, NULL, NULL, 'Pages', 16, 25),
(10, 9, NULL, NULL, 'display', 17, 18),
(11, 1, NULL, NULL, 'Users', 26, 41),
(12, 11, NULL, NULL, 'index', 27, 28),
(13, 11, NULL, NULL, 'view', 29, 30),
(14, 11, NULL, NULL, 'add', 31, 32),
(15, 11, NULL, NULL, 'edit', 33, 34),
(16, 11, NULL, NULL, 'delete', 35, 36),
(17, 11, NULL, NULL, 'login', 37, 38),
(18, 11, NULL, NULL, 'logout', 39, 40),
(19, 1, NULL, NULL, 'Acl', 42, 43),
(20, 1, NULL, NULL, 'Bake', 44, 45),
(21, 1, NULL, NULL, 'DebugKit', 46, 73),
(22, 21, NULL, NULL, 'Composer', 47, 50),
(23, 22, NULL, NULL, 'checkDependencies', 48, 49),
(24, 21, NULL, NULL, 'MailPreview', 51, 58),
(25, 24, NULL, NULL, 'index', 52, 53),
(26, 24, NULL, NULL, 'sent', 54, 55),
(27, 24, NULL, NULL, 'email', 56, 57),
(28, 21, NULL, NULL, 'Panels', 59, 64),
(29, 28, NULL, NULL, 'index', 60, 61),
(30, 28, NULL, NULL, 'view', 62, 63),
(31, 21, NULL, NULL, 'Requests', 65, 68),
(32, 31, NULL, NULL, 'view', 66, 67),
(33, 21, NULL, NULL, 'Toolbar', 69, 72),
(34, 33, NULL, NULL, 'clearCache', 70, 71),
(35, 1, NULL, NULL, 'Migrations', 74, 75),
(36, 1, NULL, NULL, 'WyriHaximus\\TwigView', 76, 77),
(37, 9, NULL, NULL, 'index', 19, 20),
(38, 1, NULL, NULL, 'Barangs', 78, 89),
(39, 38, NULL, NULL, 'index', 79, 80),
(40, 38, NULL, NULL, 'view', 81, 82),
(41, 38, NULL, NULL, 'add', 83, 84),
(42, 38, NULL, NULL, 'edit', 85, 86),
(43, 38, NULL, NULL, 'delete', 87, 88),
(44, 1, NULL, NULL, 'Categories', 90, 101),
(45, 44, NULL, NULL, 'index', 91, 92),
(46, 44, NULL, NULL, 'view', 93, 94),
(47, 44, NULL, NULL, 'add', 95, 96),
(48, 44, NULL, NULL, 'edit', 97, 98),
(49, 44, NULL, NULL, 'delete', 99, 100),
(50, 1, NULL, NULL, 'Josegonzalez\\Upload', 102, 103),
(51, 9, NULL, NULL, 'category', 21, 22),
(52, 9, NULL, NULL, 'viewCategory', 23, 24),
(53, 1, NULL, NULL, 'Keranjangs', 104, 115),
(54, 53, NULL, NULL, 'index', 105, 106),
(55, 53, NULL, NULL, 'view', 107, 108),
(56, 53, NULL, NULL, 'add', 109, 110),
(57, 53, NULL, NULL, 'edit', 111, 112),
(58, 53, NULL, NULL, 'delete', 113, 114),
(59, 1, NULL, NULL, 'Orders', 116, 129),
(60, 59, NULL, NULL, 'index', 117, 118),
(61, 59, NULL, NULL, 'view', 119, 120),
(62, 59, NULL, NULL, 'add', 121, 122),
(63, 59, NULL, NULL, 'edit', 123, 124),
(64, 59, NULL, NULL, 'delete', 125, 126),
(65, 1, NULL, NULL, 'OrdersDetails', 130, 141),
(66, 65, NULL, NULL, 'index', 131, 132),
(67, 65, NULL, NULL, 'view', 133, 134),
(68, 65, NULL, NULL, 'add', 135, 136),
(69, 65, NULL, NULL, 'edit', 137, 138),
(70, 65, NULL, NULL, 'delete', 139, 140),
(71, 59, NULL, NULL, 'transaksi', 127, 128);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aros`
--

CREATE TABLE `aros` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Groups', 1, NULL, 1, 4),
(2, NULL, 'Groups', 2, NULL, 5, 8),
(3, 1, 'Users', 1, NULL, 2, 3),
(4, 2, 'Users', 2, NULL, 6, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(11) NOT NULL,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '1', '1', '1', '1'),
(3, 2, 16, '-1', '-1', '-1', '-1'),
(4, 2, 15, '-1', '-1', '-1', '-1'),
(5, 2, 14, '-1', '-1', '-1', '-1'),
(6, 2, 12, '-1', '-1', '-1', '-1'),
(7, 2, 3, '-1', '-1', '-1', '-1'),
(8, 2, 44, '-1', '-1', '-1', '-1'),
(9, 2, 38, '-1', '-1', '-1', '-1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `code_item` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `file` varchar(250) NOT NULL,
  `file_dir` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `category_id`, `name`, `harga`, `stok`, `code_item`, `date`, `file`, `file_dir`) VALUES
(1, 2, 'AK-47', 9000, 5, 'AK47', '2019-11-19', 'ak47.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(2, 1, 'AR-15', 5000, 4, 'AR15', '2019-08-08', 'ar-15.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(3, 1, 'M40', 6500, -1, 'M40', '2019-08-08', 'assault.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(4, 3, 'Baretta', 15000, 3, 'B4r3tt4', '2019-08-08', 'barrett_m82.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(5, 1, 'D5', 4500, 9, 'D5', '2019-08-08', 'd5.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(7, 3, 'Sniper Kacung', 10000, -1, 'Snipernup1', '2019-08-08', 'kacung.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(8, 3, 'L96', 12000, 8, 'L96', '2019-08-08', 'l96.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(9, 3, 'L1S4YANG', 20000, 2, 'L1S4I', '2019-08-08', 'lisai.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(10, 2, 'MP-40', 7000, 7, 'MP40', '2019-08-08', 'mp40.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(11, 1, 'Assault Kacung', 50000, 5, 'Assault4', '2019-08-08', 'nobassault.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(12, 4, 'Shotgun Biasa', 8500, 12, 'Sh0tgun', '2019-08-08', 'nobshotgun.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(13, 2, 'P90MC', 12000, 6, 'P90MC', '2019-08-08', 'p90mc.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(15, 5, 'Gratis-an', 100000, 100, 'Grat1s', '2019-08-08', 'surs.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(16, 5, 'Flux', 2500, 18, 'Flux2', '2019-08-08', 'flux.jpg', 'webroot\\assets\\barangs\\20190808\\'),
(17, 4, 'SGPutar', 12000, 86, 'SGP88', '2019-08-08', 'win-m1887-sl-silver.jpg', 'webroot\\assets\\barangs\\20190808\\');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`) VALUES
(1, 'Assault Rifle'),
(2, 'Submachine Gun'),
(3, 'Sniper Rifle'),
(4, 'Shotgun'),
(5, 'Secondary');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Admin', '2019-08-08 03:06:51', '2019-08-08 03:07:40'),
(2, 'Pengguna', '2019-08-08 03:07:19', '2019-08-08 03:07:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjangs`
--

CREATE TABLE `keranjangs` (
  `id` int(11) NOT NULL,
  `barang_id` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `catatan_pembeli` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `code` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `total_price` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `change_money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `code`, `date`, `total_price`, `bayar`, `change_money`) VALUES
(3, 'BR00001', '2019-08-08', 11500, 200000, 188500),
(4, 'BR00002', '2019-08-08', 5000000, 10000000, 5000000),
(6, 'BR00004', '2019-08-08', 14500, 150000, 135500),
(7, 'BR00005', '2019-08-08', 12500, 14000, 1500),
(8, 'BR00006', '2019-08-08', 16500, 17000, 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_details`
--

CREATE TABLE `orders_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `catatan_pembeli` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders_details`
--

INSERT INTO `orders_details` (`id`, `order_id`, `barang_id`, `qty`, `catatan_pembeli`) VALUES
(1, 4, 15, 50, 'jjj'),
(2, 5, 15, 50, 'jjj'),
(3, 6, 14, 1, '1'),
(4, 7, 6, 1, 'dawdaw'),
(5, 7, 7, 1, 'Hilih'),
(6, 8, 7, 1, 'tidak ada'),
(7, 8, 3, 1, 'warna pink');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(60) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, 'gunnar', '$2y$10$3dzPXC41XSACfpCDgJJV9OQKyb5Gfle0T3U8AfBZMkVoqSiVOLA3u', 1, '2019-08-08 03:08:12', '2019-08-08 03:08:12'),
(2, 'roger', '$2y$10$cql90K/ucuhDQlRnBxeCkeqnz3pX5uEw/xdqwrr.EjTaib9x1yctO', 2, '2019-08-08 03:08:32', '2019-08-08 03:08:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acl_phinxlog`
--
ALTER TABLE `acl_phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indeks untuk tabel `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indeks untuk tabel `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  ADD KEY `aco_id` (`aco_id`);

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `keranjangs`
--
ALTER TABLE `keranjangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
