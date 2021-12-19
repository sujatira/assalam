-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2021 at 03:11 AM
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
  `id_artikel` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `status` int(128) NOT NULL,
  `tmb` varchar(255) NOT NULL,
  `oleh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `id_user`, `judul`, `isi`, `tanggal`, `status`, `tmb`, `oleh`) VALUES
(283, 4, 'Himbauan pakai masker', 'dfsdfsdfdsgsdgsgsgsgfg. dgsggsdgds. sddssdgdsgdsgd. \r\ngssdgsg', '1638874134', 1, 'msjd1.png', 'Andi Sujati Rahman'),
(284, 4, 'fff', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores commodi esse nesciunt illo velit ab! Tempore quo nobis veniam, magnam adipisci qui neque corrupti, magni perferendis officia explicabo sed ea!\r\n', '1638874613', 2, 'bg.jpg', 'Andi Sujati Rahman'),
(285, 4, '', '', '1639150901', 0, '', 'Andi Sujati Rahman'),
(286, 6, '', '', '1639151283', 0, '', 'Rendi Ranggaa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel_user`
--

CREATE TABLE `tbl_artikel_user` (
  `id` int(255) NOT NULL,
  `id_artikel` int(255) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gambar`
--

INSERT INTO `tbl_gambar` (`id_gambar`, `id_artikel`, `gambar`) VALUES
(269, 283, 'Screenshot_2021-03-18_15-52-53.png'),
(270, 283, 'Screenshot_2021-06-03_10-10-59.png'),
(271, 283, 'Screenshot_2021-07-01_13-05-04.png'),
(272, 284, 'msjd4.png'),
(273, 284, 'Screenshot_2021-05-05_22-29-42.png'),
(274, 285, ''),
(275, 286, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_infaq`
--

CREATE TABLE `tbl_infaq` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nominal` int(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_infaq`
--

INSERT INTO `tbl_infaq` (`id`, `nama`, `nominal`, `keterangan`, `tanggal`, `bukti`) VALUES
(1, 'Dodi Hermansyah', 400000, 'Transfer', '2021-07-02', 'bukti.jpg'),
(2, 'Agus Purwanto', 120000, 'Sumbangan untuk parfume masjid', '2021-12-01', ''),
(3, 'Pengurus', 300000, 'Parkir bulanan', '2021-12-01', ''),
(4, 'Andi', 3000000, 'sumbangan tahunan', '2021-12-02', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan`
--

CREATE TABLE `tbl_pengajuan` (
  `id_pengajuan` int(128) NOT NULL,
  `nama_pengajuan` varchar(128) NOT NULL,
  `jumlah_pengajuan` int(128) NOT NULL,
  `tanggal_pengajuan` varchar(255) NOT NULL,
  `status_pengajuan` int(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengajuan`
--

INSERT INTO `tbl_pengajuan` (`id_pengajuan`, `nama_pengajuan`, `jumlah_pengajuan`, `tanggal_pengajuan`, `status_pengajuan`, `keterangan`) VALUES
(1, 'Pengajuan untuk beli sejadah', 200000, '1638874134', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
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

INSERT INTO `tbl_user` (`id_user`, `nama`, `email`, `password`, `image`, `date_create`, `role_id`, `sebagai`) VALUES
(4, 'Andi Sujati Rahman', 'andi@gmail.com', '$2y$10$hRpqFXHnpckEtNCrnZdUCufPYIjlQR9Y37QOE35fh0j2ReBIu7DM6', 'asr.jpg', '1620695438', 1, 'Administator'),
(5, 'Santi Sinta', 'santi@gmail.com', '$2y$10$1rC0JZWGdZh5pfusez1FDeUqBmfWtvq4Geo8puxwXwi0jpbBf.a3G', 'default.jpg', '1624695438', 2, 'Bendahara'),
(6, 'Rendi Ranggaa', 'rendi@gmail.com', '$2y$10$ROEO/sa3nzn/T94ZCpQzh.nGpTWKtTbNqQjQyWEGFWdeDIA1YEObG', 'heheheheehehe.png', '1625695438', 3, 'Member'),
(8, 'Aku', 'aku@gmail.com', '$2y$10$llSTpilzPUjUdtx147aJaenWeoL0a5qbKcsHGaT.wFlMfYBpenoWq', 'default.jpg', '1628695438', 3, 'Member'),
(9, 'Cucun', 'cucun@gmail.com', '$2y$10$5FTXP12kaJjMtVwz0/aECuPJSYJOsApDUeDV3HPZgGPq0VowUmq.e', 'default.jpg', '1631057701', 3, 'Member'),
(10, 'asasas', 'asa@gmail.com', '$2y$10$ID58NkBZZ010Kc/UXUCNfevm3HM61L6WySSjKLEMnv3gdxT6VzW9q', 'default.jpg', '1632580305', 3, 'Member'),
(11, 'Ilham Maulana', 'ilhammaulana09@gmail.com', '$2y$10$/TPGVXFfpBGzjUxx81oKPeynKUIjWAkft/MbNgr/hd4zyzAjUZmhK', 'default.jpg', '1633565058', 3, 'Member');

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
  `is_active` int(1) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_sub_menu`
--

INSERT INTO `tbl_user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`, `status`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-code-branch', 1, ''),
(3, 3, 'My Profile', 'user', 'fa-fw fas fa-user', 1, ''),
(4, 3, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 0, ''),
(5, 2, 'Dashboard Bendahara', 'bendahara', '', 1, ''),
(6, 4, 'Artikel', 'menu', 'fas fa-fw fa-bars', 1, ''),
(7, 4, 'Approve Artikel', 'menu/approve', 'fas fa-fw fa-clipboard-check', 0, ''),
(8, 4, 'List Akun', 'menu/user', 'fas fa-fw fa-list-ol', 1, ''),
(9, 5, 'Kelola Data Infak', 'bendahara/kas', 'fas fa-fw fa-hand-holding-usd', 1, ''),
(10, 5, 'Pemasukan', 'infak/pemasukan', 'fas fa-fw fa-file-invoice-dollar', 0, ''),
(11, 5, 'Pengeluaran', 'infak/pengeluaran', 'fas fa-fw fa-money-check-alt', 0, ''),
(12, 6, 'Artikel Saya', 'usermenu', 'fas fa-fw fa-bars', 1, ''),
(13, 4, 'Approval Keuangan', 'menu/approval_pengeluaran', 'fas fa-fw fa-file-invoice-dollar', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_artikel_user`
--
ALTER TABLE `tbl_artikel_user`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

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
  MODIFY `id_artikel` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `tbl_artikel_user`
--
ALTER TABLE `tbl_artikel_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `tbl_infaq`
--
ALTER TABLE `tbl_infaq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id_pengajuan` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user_access_menu`
--
ALTER TABLE `tbl_user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
