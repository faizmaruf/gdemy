-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 15, 2020 at 03:55 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_testing_gdemy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_kelas`
--

CREATE TABLE `tbl_detail_kelas` (
  `id_materi` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_materi` varchar(255) NOT NULL,
  `link_materi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_kelas`
--

INSERT INTO `tbl_detail_kelas` (`id_materi`, `id_kelas`, `nama_materi`, `link_materi`) VALUES
(1, 1, 'pengenalan microsoft word', '<iframe src=\"https://www.youtube.com/embed/TVbzngJPqEQ?modestbranding=1&showinfo=0&rel=0\" width=\"560\" height=\"315\" frameborder=\"0\"></iframe>'),
(3, 2, 'Membuat Form', '<iframe src=\"https://www.youtube.com/embed/TVbzngJPqEQ?modestbranding=1&showinfo=0&rel=0\" width=\"560\" height=\"315\" frameborder=\"0\"></iframe>'),
(4, 4, 'Pengenalan Header & Footer', '<iframe src=\"https://www.youtube.com/embed/TVbzngJPqEQ?modestbranding=1&showinfo=0&rel=0\" width=\"560\" height=\"315\" frameborder=\"0\"></iframe>'),
(5, 5, 'Pengenalan Paragraf', '<iframe src=\"https://www.youtube.com/embed/TVbzngJPqEQ?modestbranding=1&showinfo=0&rel=0\" width=\"560\" height=\"315\" frameborder=\"0\"></iframe>'),
(6, 6, 'Pengenalan Numbering', '<iframe src=\"https://www.youtube.com/embed/TVbzngJPqEQ?modestbranding=1&showinfo=0&rel=0\" width=\"560\" height=\"315\" frameborder=\"0\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pilihkelas`
--

CREATE TABLE `tbl_pilihkelas` (
  `id_kelas` int(11) NOT NULL,
  `id_viewkelas` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama_kelas` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_kelas` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_progres`
--

CREATE TABLE `tbl_progres` (
  `id_kelas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `materi_terakhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nuptk` varchar(255) NOT NULL,
  `image` varchar(128) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_viewkelas`
--

CREATE TABLE `tbl_viewkelas` (
  `id_viewkelas` int(11) NOT NULL,
  `nama_viewkelas` varchar(256) NOT NULL,
  `deskripsi_viewkelas` text NOT NULL,
  `gambar_viewkelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_viewkelas`
--

INSERT INTO `tbl_viewkelas` (`id_viewkelas`, `nama_viewkelas`, `deskripsi_viewkelas`, `gambar_viewkelas`) VALUES
(1, 'Microsoft Office Word', 'MS Word merupakan software untuk menulis dokumen yang paling banyak digunakan', 'word.png'),
(2, 'Microsoft Office Excel', 'MS Excel adalah program spreadsheet yang dapat digunakan untuk mengolah data. ', 'excel.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_kelas`
--
ALTER TABLE `tbl_detail_kelas`
  ADD PRIMARY KEY (`id_materi`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_kelas_2` (`id_kelas`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pilihkelas`
--
ALTER TABLE `tbl_pilihkelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_viewkelas` (`id_viewkelas`);

--
-- Indexes for table `tbl_progres`
--
ALTER TABLE `tbl_progres`
  ADD PRIMARY KEY (`id_kelas`,`id_user`);

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
-- Indexes for table `tbl_viewkelas`
--
ALTER TABLE `tbl_viewkelas`
  ADD PRIMARY KEY (`id_viewkelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_kelas`
--
ALTER TABLE `tbl_detail_kelas`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pilihkelas`
--
ALTER TABLE `tbl_pilihkelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_user_token`
--
ALTER TABLE `tbl_user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_viewkelas`
--
ALTER TABLE `tbl_viewkelas`
  MODIFY `id_viewkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
