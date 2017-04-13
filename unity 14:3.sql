-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2017 at 12:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unity`
--

-- --------------------------------------------------------

--
-- Table structure for table `color_translate`
--

CREATE TABLE `color_translate` (
  `id` int(11) NOT NULL,
  `bootstrap_color` enum('red','yellow','blue','green','black','white') COLLATE utf8_unicode_ci NOT NULL,
  `bootstrap_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'class = '''''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `color_translate`
--

INSERT INTO `color_translate` (`id`, `bootstrap_color`, `bootstrap_code`) VALUES
(1, 'red', 'class = \'danger\''),
(2, 'yellow', 'class = \'warning\''),
(3, 'blue', 'class = \'info\''),
(4, 'green', 'class = \'success\''),
(5, 'black', 'class = \'active\''),
(6, 'white', '');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `start` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `end` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `status`, `start`, `end`) VALUES
('X', 'active', '1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive','reserve') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('primary','secondary','switch1','switch2') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `line` enum('A','B') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `start` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `end` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tps` int(3) NOT NULL DEFAULT '30'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `status`, `type`, `line`, `start`, `end`, `tps`) VALUES
('12A', 'active', 'primary', 'A', '1', '2', 30),
('12B', 'inactive', 'secondary', 'B', '1', '2', 30);

-- --------------------------------------------------------

--
-- Table structure for table `select_section`
--

CREATE TABLE `select_section` (
  `id` int(11) NOT NULL,
  `route` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('primary','secondary','swtich1','switch2') COLLATE utf8_unicode_ci NOT NULL,
  `move` int(11) NOT NULL,
  `start` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `end` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `select_track`
--

CREATE TABLE `select_track` (
  `id` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `section_status` enum('active','inactive','reserve') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `section_type` enum('primary','secondary','switch1','switch2') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `track` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'tbd'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`name`, `info`) VALUES
('1', 'tbd'),
('2', 'tbd'),
('3', 'tbd');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `id` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('Normal','Switch') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `line` enum('A','B') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','slow','stop','broken','reserveA','reserveB') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maxspd` int(3) NOT NULL DEFAULT '50',
  `length` int(3) NOT NULL DEFAULT '250',
  `color` enum('red','yellow','black','white','blue','green') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'white',
  `tpt` int(5) NOT NULL DEFAULT '5',
  `bootstrap` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`id`, `type`, `line`, `status`, `maxspd`, `length`, `color`, `tpt`, `bootstrap`) VALUES
('12A01', 'Normal', 'A', 'reserveA', 50, 250, 'blue', 5, 'class = \'info\''),
('12A02', 'Normal', 'A', 'reserveA', 50, 250, 'blue', 5, 'class = \'info\''),
('12A03', 'Normal', 'A', 'reserveA', 50, 250, 'blue', 5, 'class = \'info\''),
('12A04', 'Normal', 'A', 'reserveA', 50, 250, 'blue', 5, 'class = \'info\''),
('12B01', 'Normal', 'B', 'active', 50, 250, 'white', 5, ''),
('12B02', 'Normal', 'B', 'active', 50, 250, 'white', 5, ''),
('12B03', 'Normal', 'B', 'broken', 50, 250, 'black', 5, 'class = \'active\''),
('12B04', 'Normal', 'B', 'reserveA', 50, 250, 'blue', 5, 'class = \'info\''),
('23A01', 'Normal', 'A', 'active', 50, 250, 'white', 5, ''),
('23A02', 'Normal', 'A', 'active', 50, 250, 'white', 5, ''),
('23A03', 'Normal', 'A', 'active', 50, 250, 'white', 5, ''),
('23B01', 'Normal', 'B', 'active', 50, 250, 'white', 5, ''),
('23B02', 'Normal', 'B', 'active', 50, 250, 'white', 5, ''),
('23B03', 'Normal', 'B', 'active', 50, 250, 'white', 5, ''),
('9988', 'Normal', 'A', 'active', 0, 0, '', 0, ''),
('999', 'Normal', 'A', 'active', 0, 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `track_color`
--

CREATE TABLE `track_color` (
  `id` int(11) NOT NULL,
  `status` enum('active','slow','stop','broken','reserveA','reserveB') COLLATE utf8_unicode_ci NOT NULL,
  `color` enum('red','yellow','black','white','blue','green') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `track_color`
--

INSERT INTO `track_color` (`id`, `status`, `color`) VALUES
(1, 'active', 'white'),
(2, 'slow', 'yellow'),
(3, 'stop', 'red'),
(4, 'broken', 'black'),
(5, 'reserveA', 'blue'),
(7, 'reserveB', 'green');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `track_start` (`start`),
  ADD KEY `track_end` (`end`),
  ADD KEY `id` (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `select_section`
--
ALTER TABLE `select_section`
  ADD KEY `start_station` (`start`),
  ADD KEY `end_station` (`end`),
  ADD KEY `section` (`section`);

--
-- Indexes for table `select_track`
--
ALTER TABLE `select_track`
  ADD KEY `section_status` (`section_status`),
  ADD KEY `track_select` (`track`),
  ADD KEY `section_type` (`section_type`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`name`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `type` (`type`),
  ADD KEY `status_2` (`status`);

--
-- Indexes for table `track_color`
--
ALTER TABLE `track_color`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `color` (`color`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `track_end` FOREIGN KEY (`end`) REFERENCES `station` (`name`),
  ADD CONSTRAINT `track_start` FOREIGN KEY (`start`) REFERENCES `station` (`name`);

--
-- Constraints for table `select_section`
--
ALTER TABLE `select_section`
  ADD CONSTRAINT `end_station` FOREIGN KEY (`end`) REFERENCES `station` (`name`),
  ADD CONSTRAINT `section` FOREIGN KEY (`section`) REFERENCES `section` (`id`),
  ADD CONSTRAINT `start_station` FOREIGN KEY (`start`) REFERENCES `station` (`name`);

--
-- Constraints for table `select_track`
--
ALTER TABLE `select_track`
  ADD CONSTRAINT `section_status` FOREIGN KEY (`section_status`) REFERENCES `section` (`status`),
  ADD CONSTRAINT `section_type` FOREIGN KEY (`section_type`) REFERENCES `section` (`type`),
  ADD CONSTRAINT `track_select` FOREIGN KEY (`track`) REFERENCES `track` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
