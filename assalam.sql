-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2021 at 04:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assalam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `judul`, `isi`, `tanggal`) VALUES
(18, 'dada', 'dada', '2021-08-12 00:00:00'),
(19, 'dada', 'dada', '2021-08-12 00:00:00'),
(20, 'dada', 'dada', '2021-08-12 00:00:00'),
(21, 'dada', 'dada', '2021-08-12 00:00:00'),
(22, 'adad', 'adada', '2021-08-12 00:00:00'),
(23, 'adad', 'adada', '2021-08-12 00:00:00'),
(24, 'adad', 'adada', '2021-08-12 00:00:00'),
(25, 'adad', 'adada', '2021-08-12 00:00:00'),
(26, 'adad', 'adada', '2021-08-12 00:00:00'),
(27, 'adad', 'adada', '2021-08-12 00:00:00'),
(28, 'adad', 'adada', '2021-08-12 00:00:00'),
(29, 'SASASASA', 'SASASASASA', '2021-08-12 00:00:00'),
(30, 'SASASASA', 'SASASASASA', '2021-08-12 00:00:00'),
(31, 'SASASASA', 'SASASASASA', '2021-08-12 00:00:00'),
(32, 'yoyoyoy', 'oyoyoyoyoyo', '2021-08-12 00:00:00'),
(33, 'yoyoyoy', 'oyoyoyoyoyo', '2021-08-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_infaq`
--

CREATE TABLE `tbl_infaq` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nominal` int(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_infaq`
--

INSERT INTO `tbl_infaq` (`id`, `nama`, `nominal`, `keterangan`, `tanggal`) VALUES
(1, 'Dodi Hermansyah', 400000, 'tf', '2021-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `date_create` varchar(128) NOT NULL,
  `role_id` int(1) NOT NULL,
  `sebagai` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `email`, `password`, `image`, `date_create`, `role_id`, `sebagai`) VALUES
(4, 'Andi Sujati Rahman', 'andi@gmail.com', '$2y$10$hRpqFXHnpckEtNCrnZdUCufPYIjlQR9Y37QOE35fh0j2ReBIu7DM6', 'default.jpg', '1620695438', 1, 'Administator'),
(5, 'Santi Wulansari', 'santi@gmail.com', '$2y$10$1rC0JZWGdZh5pfusez1FDeUqBmfWtvq4Geo8puxwXwi0jpbBf.a3G', 'default.jpg', '1624695438', 2, 'Bendahara'),
(6, 'Rendi Hendroyono', 'rendi@gmail.com', '$2y$10$ROEO/sa3nzn/T94ZCpQzh.nGpTWKtTbNqQjQyWEGFWdeDIA1YEObG', 'default.jpg', '1625695438', 3, 'Member'),
(7, 'test', 'test@gmail.com', '1995Test', '', '', 3, 'Member'),
(8, 'Aku', 'aku@gmail.com', '$2y$10$llSTpilzPUjUdtx147aJaenWeoL0a5qbKcsHGaT.wFlMfYBpenoWq', 'default.jpg', '1628695438', 3, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_access_menu`
--

CREATE TABLE `tbl_user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(128) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_access_menu`
--

INSERT INTO `tbl_user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 2, 3),
(5, 2, 2),
(7, 3, 3),
(8, 1, 4),
(9, 1, 0),
(10, 2, 5),
(11, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_menu`
--

CREATE TABLE `tbl_user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_menu`
--

INSERT INTO `tbl_user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Bendahara'),
(3, 'User'),
(4, 'Menu'),
(5, 'Menu'),
(6, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_sub_menu`
--

CREATE TABLE `tbl_user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_sub_menu`
--

INSERT INTO `tbl_user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-code-branch', 1),
(3, 3, 'My Profile', 'user', 'fa-fw fas fa-user', 1),
(4, 3, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(5, 2, 'Dashboard Bendahara', 'bendahara', '', 1),
(6, 4, 'Artikel', 'menu', 'fas fa-fw fa-bars', 1),
(7, 4, 'Approve Artikel', 'menu/approve', 'fas fa-fw fa-clipboard-check', 1),
(8, 4, 'List Akun', 'menu/user', 'fas fa-fw fa-list-ol', 1),
(9, 5, 'Kelola Infak', 'infak', 'fas fa-fw fa-hand-holding-usd', 1),
(10, 5, 'Pemasukan', 'infak/pemasukan', 'fas fa-fw fa-file-invoice-dollar', 1),
(11, 5, 'Pengeluaran', 'infak/pengeluaran', 'fas fa-fw fa-money-check-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tbl_infaq`
--
ALTER TABLE `tbl_infaq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_access_menu`
--
ALTER TABLE `tbl_user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_menu`
--
ALTER TABLE `tbl_user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_sub_menu`
--
ALTER TABLE `tbl_user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_infaq`
--
ALTER TABLE `tbl_infaq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user_access_menu`
--
ALTER TABLE `tbl_user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user_menu`
--
ALTER TABLE `tbl_user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_sub_menu`
--
ALTER TABLE `tbl_user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
