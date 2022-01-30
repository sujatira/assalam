-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 08:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
  `oleh` varchar(255) NOT NULL,
  `alasan_penolakan` text NOT NULL,
  `tanggal_acc` varchar(128) NOT NULL,
  `periksa_oleh` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `id_user`, `judul`, `isi`, `tanggal`, `status`, `tmb`, `oleh`, `alasan_penolakan`, `tanggal_acc`, `periksa_oleh`) VALUES
(489, 4, 'asasa', '', '1641483887', 0, '', 'Andi Sujati Rahman', 'Tidak ada gambar dan isi konten', '1641521986', 'Admin Jami Assalam'),
(491, 13, '', '', '1641519500', 0, '', 'Admin Jami Assalam', '', '', ''),
(494, 13, '', '', '1641520915', 0, '', 'Admin Jami Assalam', '', '1641521032', ''),
(497, 4, 'Kegiatan Kurban 2021 ', 'Assalamualaikum jamaah Assalam, alhamdulillah tahun ini ditengah tengah pandemic corona kita sebagai warga Muslim jemaah Assalam masih bisa menunaikan ibadah kurban dimana tahun ini hwan kurban meningkat daripada tahun sebelumnya dan susunan kepanitian pun lebih rapi ', '1641561236', 1, 'sapi.jpg', 'Andi Sujati Rahman', '', '1641567884', 'Andi Sujati Rahman'),
(498, 4, '', '', '1642608476', 0, '', 'Andi Sujati Rahman', '', '', ''),
(499, 4, 'Masjid Bagus', 'asasas\r\naasud\r\ndvbdvbdvbhbsdvdh ddbv hdvdvdvhdbvd vdvdvd\r\nvdvdv', '1642608835', 1, 'download (1).jpg', 'Andi Sujati Rahman', '', '1642853536', 'Andi Sujati Rahman');

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
(508, 489, ''),
(509, 490, ''),
(510, 491, ''),
(511, 494, ''),
(512, 495, ''),
(513, 496, 'wp3796958-genei-ryodan-wallpapers.jpg'),
(514, 497, 'sapi2.jpg'),
(515, 497, 'sapi3.jpg'),
(516, 498, ''),
(517, 499, 'download (1).jpg'),
(518, 499, 'download (2).jpg'),
(519, 499, 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_infaq`
--

CREATE TABLE `tbl_infaq` (
  `id_infaq` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nominal` int(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `bukti` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `total` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_infaq`
--

INSERT INTO `tbl_infaq` (`id_infaq`, `nama`, `nominal`, `keterangan`, `tanggal`, `bukti`, `kategori`, `total`) VALUES
(5, 'Rudi Tabuti', 500000, 'Infak/sedekah yang diberikan langsung ke marbot yang nantinya akan diteruskan ke Bendahara Masjid Jami Assalam untuk diinput', '1624695438', '', '', 0),
(6, 'Asep Irama', 20000, 'Infak mingguan', '1641521032', '', '', 0),
(7, 'Andi SR', 0, 'asas', '1642868173', '', 'sdsd', 0),
(8, 'dsdsd', 0, 'addsfdffadfa', '1642868205', '', 'sdsd', 0),
(9, 'Andi SR', 0, 'qwqwqw', '1642868394', '', 'asas', 0),
(10, 'Andi SR', 1111, 'ddsd', '1642868631', '', 'asas', 0),
(11, 'Andi SR', 1111, 'sdsdsd', '1642868698', '', 'Dari jemaah', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kas`
--

CREATE TABLE `tbl_kas` (
  `id_kas` int(128) NOT NULL,
  `total_kas` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `keterangan` varchar(128) NOT NULL,
  `alasan_penolakan` text NOT NULL,
  `oleh` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengajuan`
--

INSERT INTO `tbl_pengajuan` (`id_pengajuan`, `nama_pengajuan`, `jumlah_pengajuan`, `tanggal_pengajuan`, `status_pengajuan`, `keterangan`, `alasan_penolakan`, `oleh`) VALUES
(21, 'Pembelian jam', 50000, '1641487035', 1, 'untuk kelengkapan jam dinding masjid', '', ''),
(22, 'Beli Bedug', 45000000, '1641566001', 1, 'untuk pembelian bedug', '', ''),
(23, 'Beli sejadah', 12000000, '1641566110', 2, 'diperlukan sejadah baru karena yang lama sudah mendekati tidak layak pakai', 'masih bagus kok', '');

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
(4, 'Andi Sujati Rahman', 'andi@gmail.com', '$2y$10$hRpqFXHnpckEtNCrnZdUCufPYIjlQR9Y37QOE35fh0j2ReBIu7DM6', 'download.png', '1620695438', 1, 'Administator'),
(5, 'Santi Sinta', 'santi@gmail.com', '$2y$10$1rC0JZWGdZh5pfusez1FDeUqBmfWtvq4Geo8puxwXwi0jpbBf.a3G', 'default.jpg', '1624695438', 2, 'Bendahara'),
(6, 'Rendi Ranggaa', 'rendi@gmail.com', '$2y$10$ROEO/sa3nzn/T94ZCpQzh.nGpTWKtTbNqQjQyWEGFWdeDIA1YEObG', 'heheheheehehe.png', '1625695438', 3, 'Member'),
(13, 'Admin Jami Assalam', 'admin2@gmail.com', '$2y$10$e5z3elt7o8YD8h9D5H4OjO.y6VR5w7epn/0U8LzkxDkHK7aajkl2u', 'default.jpg', '1641486117', 1, 'Administator');

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
(6, 'Menu'),
(7, 'Aksi');

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
(3, 3, 'Profil Saya', 'user', 'fa-fw fas fa-user', 1, ''),
(4, 3, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 0, ''),
(5, 2, 'Dashboard Bendahara', 'bendahara', '', 1, ''),
(6, 4, 'Artikel', 'menu', 'fas fa-fw fa-bars', 1, ''),
(7, 4, 'Approve Artikel', 'menu/approve', 'fas fa-fw fa-clipboard-check', 0, ''),
(8, 4, 'List Akun', 'menu/user', 'fas fa-fw fa-list-ol', 1, ''),
(9, 5, 'Data Kas', 'bendahara/kas', 'fas fa-fw fa-hand-holding-usd', 1, ''),
(10, 5, 'Pemasukan', 'bendahara/pemasukan_kas', 'fas fa-fw fa-plus', 1, ''),
(11, 5, 'Pengeluaran', 'bendahara/pengeluaran_kas', 'fas fa-fw fa-minus', 1, ''),
(12, 6, 'Artikel Saya', 'usermenu', 'fas fa-fw fa-bars', 1, ''),
(13, 4, 'Approval Keuangan', 'menu/approval_pengeluaran', 'fas fa-fw fa-coins', 1, ''),
(14, 4, 'Info Kas', 'menu/info_kas', 'fas fa-fw fa-money-bill-wave', 1, '');

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
  ADD PRIMARY KEY (`id_infaq`);

--
-- Indexes for table `tbl_kas`
--
ALTER TABLE `tbl_kas`
  ADD PRIMARY KEY (`id_kas`);

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
  MODIFY `id_artikel` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500;

--
-- AUTO_INCREMENT for table `tbl_artikel_user`
--
ALTER TABLE `tbl_artikel_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=520;

--
-- AUTO_INCREMENT for table `tbl_infaq`
--
ALTER TABLE `tbl_infaq`
  MODIFY `id_infaq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_kas`
--
ALTER TABLE `tbl_kas`
  MODIFY `id_kas` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id_pengajuan` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user_access_menu`
--
ALTER TABLE `tbl_user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user_menu`
--
ALTER TABLE `tbl_user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_sub_menu`
--
ALTER TABLE `tbl_user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
