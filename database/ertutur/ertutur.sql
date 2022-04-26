-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 08:56 AM
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
-- Database: `ertutur`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_merga`
--

CREATE TABLE `all_merga` (
  `id_all_merga` int(11) NOT NULL,
  `all_merga` varchar(50) NOT NULL,
  `id_merga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_merga`
--

INSERT INTO `all_merga` (`id_all_merga`, `all_merga`, `id_merga`) VALUES
(1, 'Barus', 1),
(2, 'Bukit', 1),
(3, 'Gurusinga', 1),
(4, 'Jung', 1),
(5, 'Kaban', 1),
(6, 'Kacaribu', 1),
(7, 'Karo Sekali', 1),
(8, 'Kemit', 1),
(9, 'Ketaren', 1),
(10, 'Purba', 1),
(11, 'Samura', 1),
(12, 'Sinubulan', 1),
(13, 'Sinuhaji', 1),
(14, 'Sinukaban', 1),
(15, 'Sinulingga', 1),
(16, 'Sinuraya', 1),
(17, 'Sitepu', 1),
(18, 'Surbakti', 1),
(19, 'Ajartambun', 2),
(20, 'Babo', 2),
(21, 'Beras', 2),
(22, 'Capah', 2),
(23, 'Garamata', 2),
(24, 'Gurupati', 2),
(25, 'Jadibata', 2),
(26, 'Jawak', 2),
(27, 'Manik', 2),
(28, 'Pase', 2),
(29, 'Seragih', 2),
(30, 'Sugihen', 2),
(31, 'Sinusinga', 2),
(32, 'Suka', 2),
(33, 'Munthe', 2),
(34, 'Tumangger', 2),
(35, 'Bondong', 3),
(36, 'Gana-gana', 3),
(37, 'Gerneng', 3),
(38, 'Gersang', 3),
(39, 'Jampang', 3),
(40, 'Pekan', 3),
(41, 'Sibero', 3),
(42, 'Silangit', 3),
(43, 'Tambak', 3),
(44, 'Tambun', 3),
(45, 'Tegor', 3),
(46, 'Tendang', 3),
(47, 'Tua', 3),
(48, 'Berahmana', 4),
(49, 'Bunuhaji', 4),
(50, 'Busok', 4),
(51, 'Colia', 4),
(52, 'Depari', 4),
(53, 'Gurukinayan', 4),
(54, 'Kapour', 4),
(55, 'Keling', 4),
(56, 'Keloko', 4),
(57, 'Kembaren', 4),
(58, 'Meliala', 4),
(59, 'Muham', 4),
(60, 'Pandebayang', 4),
(61, 'Pandia', 4),
(62, 'Pelawi', 4),
(63, 'Sinulaki', 4),
(64, 'Sinupayung', 4),
(65, 'Tekang', 4),
(66, 'Maha', 4),
(67, 'Bangun', 5),
(68, 'Banjerang', 5),
(69, 'Kacinambun', 5),
(70, 'Keliat', 5),
(71, 'Laksa Bangun', 5),
(72, 'Mano', 5),
(73, 'Namohaji', 5),
(74, 'Pencawan', 5),
(75, 'Pinem', 5),
(76, 'Sebayang', 5),
(77, 'Singarimbun', 5),
(78, 'Sinurat', 5),
(79, 'Sukatendel', 5),
(80, 'Tanjung', 5),
(81, 'Teger', 5),
(82, 'Ulun Jandi', 5),
(83, 'Uwir', 5),
(84, 'Perbesi', 5),
(85, 'Penggarus', 5);

-- --------------------------------------------------------

--
-- Table structure for table `merga`
--

CREATE TABLE `merga` (
  `id_merga` int(11) NOT NULL,
  `merga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merga`
--

INSERT INTO `merga` (`id_merga`, `merga`) VALUES
(1, 'Karo'),
(2, 'Ginting'),
(3, 'Tarigan'),
(4, 'Sembirring'),
(5, 'Perangin-angin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_merga`
--
ALTER TABLE `all_merga`
  ADD PRIMARY KEY (`id_all_merga`);

--
-- Indexes for table `merga`
--
ALTER TABLE `merga`
  ADD PRIMARY KEY (`id_merga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_merga`
--
ALTER TABLE `all_merga`
  MODIFY `id_all_merga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `merga`
--
ALTER TABLE `merga`
  MODIFY `id_merga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
