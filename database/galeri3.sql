-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 05:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galeri3`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `albumid` int(11) NOT NULL,
  `namaalbum` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggaldibuat` datetime NOT NULL,
  `photo` text NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`albumid`, `namaalbum`, `deskripsi`, `tanggaldibuat`, `photo`, `userid`) VALUES
(34, 'Banten', 'Banten adalah sebuah provinsi di Pulau Jawa, Indonesia. Provinsi ini beribu kota di Kota Serang. Provinsi ini merupakan provinsi yang paling barat di Pulau Jawa. Provinsi ini sebelumnya pernah menjadi bagian dari Provinsi Jawa Barat, tetapi provinsi ini menjadi wilayah pemekaran sejak tahun 2000, dengan keputusan Undang-Undang Nomor 23 Tahun 2000', '2024-01-23 07:56:53', 'provinsi-banten.jpg', 11),
(47, 'jakarta', 'huqe2ori', '2024-02-07 11:18:45', 'jakarta.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `fotoid` int(11) NOT NULL,
  `judulfoto` varchar(255) NOT NULL,
  `deskripsifoto` text NOT NULL,
  `tanggalunggah` datetime NOT NULL,
  `lokasifile` text NOT NULL,
  `albumid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`fotoid`, `judulfoto`, `deskripsifoto`, `tanggalunggah`, `lokasifile`, `albumid`, `userid`) VALUES
(21, 'bandeng', 'makanan banten', '2024-02-05 11:17:20', 'makanan.jpg', 34, 11),
(22, 'pangsi', 'pakaian adat banten', '2024-02-05 11:20:29', 'Pakaian-Adat-Banten-Pangsi.webp', 34, 11),
(23, 'Sulah Nyanda', 'Rumah yang unik karena memiliki desain yang menyatu dengan alam. Ditinjau dari struktur bangunannya, rumah adat Banten ini secara keseluruhan dibuat dari bahan material yang berasal dari alam.', '2024-02-05 11:21:04', 'Sulah Nyanda.webp', 34, 11),
(24, ' Tarian Ngebaksakeun', 'Gerak tari ini mengadaptasi pijakan silat terumbu yang merupakan salah satu gaya bela diri dari Kabupaten Pandeglang. Biasanya, masyarakat Banten menyuguhkan tari ngebaksakeun untuk membuka suatu acara atau menyambut tamu penting. Durasi tariannya pun terbilang singkat, yakni sekitar 5 menit saja.\r\nSaat menampilkan tarian mereka, para penari ngebaksakeun akan menggunakan kostum atasan berwarna biru. Untuk bawahannya, ada kombinasi kain samping cokelat bercorak dan celana putih. Keunikan lain dari ngebaksakeun adalah tarian ini juga identik dengan pertunjukan debus, yang juga menjadi ciri khas Banten.', '2024-02-05 11:21:41', 'tarian.jpg', 34, 11);

-- --------------------------------------------------------

--
-- Table structure for table `komentarfoto`
--

CREATE TABLE `komentarfoto` (
  `komentarid` int(11) NOT NULL,
  `fotoid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `isikomentar` text NOT NULL,
  `tanggalkomentar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `likefoto`
--

CREATE TABLE `likefoto` (
  `likeid` int(11) NOT NULL,
  `fotoid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `tanggallike` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likefoto`
--

INSERT INTO `likefoto` (`likeid`, `fotoid`, `userid`, `tanggallike`) VALUES
(13, 23, 13, '0000-00-00 00:00:00'),
(14, 23, 11, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `namalengkap` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `email`, `namalengkap`, `alamat`) VALUES
(11, 'witri', '$2y$10$6xL1Ycj8hM9qKdsAQY3y8.cIV8NzpZkX5QXAxFNY9PetqL447NOxG', 'w@gmail.com', 'witricantik', 'hati adit'),
(13, 'nurul', '$2y$10$D5SCyzNyQI/VcMKsK6WQs.NzwbKSq/Ly1JnAK41N7WpzIDR4syTVK', 'n@gmail.com', 'nurul love adit', 'hati adit'),
(19, 'resti', '$2y$10$Q.wb.dOEGNGniOKBq6BNeucYdUhMC9WhWz8WTRYaDYTwAGiCjVbJ6', 'r@gmail.com', 'restii', 'gatau'),
(20, 'sisca', '$2y$10$2HJCJWVix2ZqoAaABFU4r.cHe8z.Ag8gp3.Of9.OrAKq2JKGzc842', 's@gmail.com', 'ehbfhqiw', 'nfeihw'),
(21, 'sisca', '$2y$10$PW6JPH2VqzSg6XqnftVeOOOt5XRFR7OfxttDv5PQYugrRmZvPvyOS', 's@gmail.com', 'ehbfhqiw', 'nfeihw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`albumid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`fotoid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `albumid` (`albumid`);

--
-- Indexes for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD PRIMARY KEY (`komentarid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `fotoid` (`fotoid`);

--
-- Indexes for table `likefoto`
--
ALTER TABLE `likefoto`
  ADD PRIMARY KEY (`likeid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `fotoid` (`fotoid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `albumid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `fotoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  MODIFY `komentarid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `likefoto`
--
ALTER TABLE `likefoto`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foto_ibfk_2` FOREIGN KEY (`albumid`) REFERENCES `album` (`albumid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD CONSTRAINT `komentarfoto_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentarfoto_ibfk_2` FOREIGN KEY (`fotoid`) REFERENCES `foto` (`fotoid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likefoto`
--
ALTER TABLE `likefoto`
  ADD CONSTRAINT `likefoto_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likefoto_ibfk_2` FOREIGN KEY (`fotoid`) REFERENCES `foto` (`fotoid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
