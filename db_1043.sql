-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Des 2017 pada 07.41
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_1043`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya`
--

CREATE TABLE `biaya` (
  `id_biaya` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tagihan` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biaya`
--

INSERT INTO `biaya` (`id_biaya`, `uid`, `id_member`, `tagihan`, `status`) VALUES
(1542, 9, 1, 10000, 'Sudah'),
(1543, 18, 4, 10000, 'Belum'),
(1545, 22, 10, 10000, 'Belum'),
(1546, 9, 1, 10000, 'Sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(11) NOT NULL,
  `nama_kurir` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama_kurir`, `phone`, `uid`) VALUES
(1, 'edi', 141412, 11),
(2, 'ujang', 12414, 12),
(3, 'gor', 121241241, 10),
(4, 'baba', 141341, 14),
(5, 'dada', 12341234, 15),
(6, 'Anton', 8124455, 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_session`
--

CREATE TABLE `login_session` (
  `uid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','member','kurir','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_session`
--

INSERT INTO `login_session` (`uid`, `username`, `password`, `level`) VALUES
(8, 'admin', 'admin', 'admin'),
(9, 'martin1', 'martin1', 'member'),
(10, 'koala', 'koala', 'member'),
(11, 'edi', 'edi', 'kurir'),
(12, 'bujang', 'bujang', 'kurir'),
(13, 'Mick', 'Mick', 'member'),
(14, 'baba', 'baba', 'kurir'),
(15, 'dada', 'dada', 'kurir'),
(16, 'MRZ', 'MRZ', 'admin'),
(17, 'jeje', 'jeje', 'member'),
(18, 'Dhea', 'Dhea', 'member'),
(19, 'Raudya', 'Raudya', 'member'),
(20, 'Kloe', 'Kloe', 'member'),
(21, 'Anton', 'Anton', 'kurir'),
(22, 'ema', 'ema', 'member'),
(23, 'MRA', 'mramra', 'admin'),
(24, 'MRZ', 'mmzmmz', 'admin'),
(25, 'Gul', 'Gul', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama`, `lokasi`, `uid`) VALUES
(1, 'martin', 'Gobah', 9),
(2, 'koala', 'gobah', 10),
(3, 'jeje', 'Gobah', 17),
(4, 'Dhea', 'Panam', 18),
(5, 'Raudya', 'Kulim', 19),
(9, 'Kloe', 'Kloe', 20),
(10, 'ema', 'riau', 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sampah`
--

CREATE TABLE `sampah` (
  `id_sampah` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_kurir` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `detail` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sampah`
--

INSERT INTO `sampah` (`id_sampah`, `uid`, `id_member`, `id_kurir`, `lokasi`, `tanggal`, `detail`, `status`) VALUES
(1396, 9, 1, 1, 'Gobah', '2017-08-19', 'Non Organik', 'Sudah'),
(1397, 18, 4, 4, 'Panam', '2017-08-19', 'Organik', 'Belum'),
(1398, 22, 10, 2, 'Riau', '2017-08-19', 'Non Organik', 'Belum'),
(1402, 9, 1, 1, 'gobah', '2017-08-10', 'Organik', 'Sudah'),
(1403, 9, 1, 4, 'Gobaha', '2017-12-14', 'Non Organik', 'Belum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`id_biaya`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `a` (`uid`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `login_session`
--
ALTER TABLE `login_session`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`id_sampah`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_kurir` (`id_kurir`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biaya`
--
ALTER TABLE `biaya`
  MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1547;
--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login_session`
--
ALTER TABLE `login_session`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sampah`
--
ALTER TABLE `sampah`
  MODIFY `id_sampah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1404;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `biaya`
--
ALTER TABLE `biaya`
  ADD CONSTRAINT `a` FOREIGN KEY (`uid`) REFERENCES `login_session` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biaya_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kurir`
--
ALTER TABLE `kurir`
  ADD CONSTRAINT `kurir_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `login_session` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `login_session` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sampah`
--
ALTER TABLE `sampah`
  ADD CONSTRAINT `sampah_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sampah_ibfk_2` FOREIGN KEY (`id_kurir`) REFERENCES `kurir` (`id_kurir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sampah_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `login_session` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
