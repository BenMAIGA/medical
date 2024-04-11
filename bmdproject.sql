-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 11:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmdproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `code` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district`, `code`) VALUES
(1, 'Arusha', 1),
(2, 'Arumeru', 1),
(3, 'Ngorongoro', 1),
(4, 'Longido', 1),
(5, 'Monduli', 1),
(6, 'Karatu', 1),
(7, 'Kinondoni', 2),
(8, 'Ilala', 2),
(9, 'Temeke', 2),
(10, 'Kigamboni', 2),
(11, 'Ubungo', 2),
(12, 'Chamwino', 3),
(13, 'Dodoma', 3),
(14, 'Chemba', 3),
(15, 'Kondoa', 3),
(16, 'Bahi', 3),
(17, 'Mpwapwa', 3),
(18, 'Kongwa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `eventdata`
--

CREATE TABLE `eventdata` (
  `event` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `dedicate` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `date1` varchar(255) NOT NULL,
  `sms` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventdata`
--

INSERT INTO `eventdata` (`event`, `sub`, `photo`, `dedicate`, `city`, `place`, `date`, `date1`, `sms`, `code`, `id`) VALUES
('DON BIRTHDAY', 'Birthday 28 party ', '590.jpg', 'Family and Friends', 'Singida', 'misuna', '2023-07-27', '2023-07-28', 'Let make all the moment shine even more and more with our brand sapport to make the music fell like home and dance like original', '123-456-789', 1),
('DANSING FERSTVOR', 'Dancing charring', 'black.jpg', 'Mwanza youth group', 'Mwanza', 'Kisesa', '2023-07-26', '2023-07-31', 'Let make all the moment shine even more and more with our brand sapport to make the music fell like home and dance like original', '789-456-123', 2),
('HAPPY MOTHER\'S DAY', 'Mother Africa', 'MUM.jpg', 'Tanzanian Mother\'s', 'Morogoro', 'Marinyi', '2023-08-01', '2023-08-03', 'Let make all the moment shine even more and more with our brand sapport to make the music fell like home and dance like original', '456-123-789', 3),
('THE BEST AFRICAN DESIGNER', 'African designer new year', 'Business.jpg', 'youth African designer', 'Dar es salaam', 'Mlimani city', '2023-09-08', '2023-09-16', 'Let make all the moment shine even more and more with our brand sapport to make the music fell like home and dance like original', '123-789-456', 4);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(255) NOT NULL,
  `Region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `Region`) VALUES
(1, 'Arusha'),
(2, 'Dar es salaam'),
(3, 'Dodoma'),
(4, 'Geita'),
(5, 'Iringa'),
(6, 'Kagera'),
(7, 'Katavi'),
(8, 'Kigoma'),
(9, 'Kilimanjaro'),
(10, 'Lindi'),
(11, 'Manyara'),
(12, 'Tanga'),
(13, 'Mara'),
(14, 'Mbeya'),
(15, 'Morogoro'),
(16, 'Mtwara'),
(17, 'Mwanza'),
(18, 'Njombe'),
(19, 'Pwani'),
(20, 'Ruvuma'),
(21, 'Rukwa'),
(22, 'Shinyanga'),
(23, 'Simiyu'),
(24, 'Singida'),
(25, 'Songwe'),
(26, 'Tabora');

-- --------------------------------------------------------

--
-- Table structure for table `webdata`
--

CREATE TABLE `webdata` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `brand` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `distr` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `tin` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `phone1` int(255) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webdata`
--

INSERT INTO `webdata` (`id`, `category`, `brand`, `name`, `pass`, `file`, `zone`, `city`, `distr`, `ward`, `email`, `link`, `link1`, `link2`, `other`, `tin`, `phone`, `phone1`) VALUES
(1, 'Mc', 'Mc Kivumbi ', 'Anodi mathayo', '7410', '4504439.jpg', '', 'Morogoro', 'Chemba', '', 'kivumbi@gmail.com', 'https://facebook.com/komanya', 'https://instagram.com/komanya', 'https://twitter.com/komanya', 'Let make all the moment shine even more and more with our brand sapport to make the music fell like home and dance like original', '123-456-789', 655874555, 756335654),
(2, 'Dancer', 'Dancing Club ', 'Musa Machambe', '9630', 'u-logo.jpg', '', 'Kigoma', 'Karatu', '', 'club@gmail.com', 'https://home.com', 'https://home.com', 'https://home.com', 'Let make all the moment shine even more and more with our brand sapport to make the music fell like home and dance like original', '789-456-123', 716589545, 743658954),
(3, 'Dj', 'Dj mwantum best', 'Bestinas Mwantuma', '7530', 'bakery_logo.jpg', '', 'Dodoma', 'Chamwino', '', 'mwantum@gmail.com', 'https://home.com', 'https://home.com', 'https://home.com', 'Let make all the moment shine even more and more with our brand sapport to make the music fell like home and dance like original', '456-123-789', 627456685, 715684256),
(4, 'Designer', 'The Great Maker', 'Emily John', '7610', 'flower-logo.jpg', '', 'Mwanza', 'Mpwapwa', '', 'emily@gmail.com', 'https://facebook.com/tina', 'https://instagram.com/tina', 'https://twitter.com/tina', 'Let make all the moment shine even more and more with our brand sapport to make the music fell like home and dance like original', '123-789-456', 789532655, 735466228);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventdata`
--
ALTER TABLE `eventdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webdata`
--
ALTER TABLE `webdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `eventdata`
--
ALTER TABLE `eventdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `webdata`
--
ALTER TABLE `webdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
