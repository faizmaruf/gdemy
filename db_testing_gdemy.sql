-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 13, 2020 at 11:59 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_testing_gdemy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_materi_1`
--

CREATE TABLE `tbl_detail_materi_1` (
  `id_materi1` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_materi1` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_materi_2`
--

CREATE TABLE `tbl_detail_materi_2` (
  `id_materi2` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_materi2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `nama`, `email`, `image`, `user_password`, `is_active`, `created_at`) VALUES
(14, '', 'abinugroho53@gmail.com', 'img.jpg', '$2y$10$rB82tO2uYV.bz0GyUYDZtuQ/3VnWnkS6q7Gl8UmkDmSo5/kYyEDzi', 1, 1594582445),
(15, '', 'faizfaizmaruf@gmail.com', '', '123', 0, 0),
(21, '', 'makan@gmail.com', '', '123', 0, 0),
(22, '', 'kiki@duyulovemi', '', '123', 0, 0),
(23, '', 'kiki@duyulovemi', '', '123', 0, 0),
(24, '', 'kiki@duyulovemivdkak', '', '22', 0, 0),
(25, '', 'kiki@duyulovemivdkakjkjk', '', '111', 0, 0),
(26, '', 'faizvskndknd@ndsjvnjk', '', '111', 0, 0),
(27, '', 'faiz@gmail', '', '123', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_token`
--

CREATE TABLE `tbl_user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(256) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_token`
--

INSERT INTO `tbl_user_token` (`id`, `email`, `token`, `created_at`) VALUES
(2, 'abinugroho53@gmail.com', 'QajNqxCCeQBpp73u/hO4O5LfNsrsy6Lc9Aqe0C9FtkQ=', 1594582466);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_materi_1`
--
ALTER TABLE `tbl_detail_materi_1`
  ADD PRIMARY KEY (`id_materi1`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_detail_materi_2`
--
ALTER TABLE `tbl_detail_materi_2`
  ADD PRIMARY KEY (`id_materi2`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_token`
--
ALTER TABLE `tbl_user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_materi_1`
--
ALTER TABLE `tbl_detail_materi_1`
  MODIFY `id_materi1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_detail_materi_2`
--
ALTER TABLE `tbl_detail_materi_2`
  MODIFY `id_materi2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_user_token`
--
ALTER TABLE `tbl_user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
