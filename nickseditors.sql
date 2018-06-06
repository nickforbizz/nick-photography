-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 07:51 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nickseditors`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentstable`
--

CREATE TABLE `commentstable` (
  `id` int(11) NOT NULL,
  `comments` varchar(300) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentstable`
--

INSERT INTO `commentstable` (`id`, `comments`, `email`) VALUES
(1, 'What a wonderful site', 'nickforbizz@gmail.com'),
(2, 'pliz add more videos', 'nickforbizz@gmail.com'),
(3, 'hello', 'infoatrealelsie@gmail.com'),
(4, 'its Gab what is up with the site', 'tunizcabs@gmail.com'),
(5, 'its coming up dude its the best mann', 'academiaproff@gmail.com'),
(6, 'im thinking that i dont think', 'kkaka@gmail.com'),
(7, 'im thinking that i dont think ef', 'edfg@gmail.com'),
(8, 'am high', 'edfg@gmail.com'),
(9, 'walalaaa', 'ben@gmail.com'),
(10, 'awesome', 'ben@gmail.com'),
(11, 'tough work', 'nioll@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `count_ip`
--

CREATE TABLE `count_ip` (
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `count_ip`
--

INSERT INTO `count_ip` (`count`) VALUES
(10);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `link` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `link`, `name`) VALUES
(1, 'imageUploads/1514756943', 'art'),
(2, 'imageUploads/1514788810', 'dispesion'),
(3, 'imageUploads/1514789163', 'text'),
(4, 'imageUploads/1514789296', 'background'),
(5, 'imageUploads/1514789397', 'manupalation'),
(6, 'imageUploads/1514789590', 'background'),
(7, 'imageUploads/1514790162', 'art'),
(8, 'imageUploads/1514790494', 'text'),
(9, 'imageUploads/1514799540', 'fat Ass'),
(10, 'imageUploads/1514799704', 'dope chicks'),
(11, 'imageUploads/1514799901', 'pussy'),
(12, 'imageUploads/1514800771', 'resident evil'),
(13, 'imageUploads/1514800893', 'nature'),
(14, 'imageUploads/1514801051', 'jhjj'),
(15, 'imageUploads/1514958628', 'bike'),
(16, 'imageUploads/1514958639', 'bike'),
(17, 'imageUploads/1514958786', 'suckers'),
(18, 'imageUploads/1514958796', 'suckers'),
(19, 'imageUploads/1514958961', 'wolf'),
(20, 'imageUploads/1514958980', 'wolf');

-- --------------------------------------------------------

--
-- Table structure for table `ip_visits`
--

CREATE TABLE `ip_visits` (
  `ip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ip_visits`
--

INSERT INTO `ip_visits` (`ip`) VALUES
('::1'),
('192.168.43.1'),
('192.168.43.189'),
('192.168.43.22'),
('192.168.43.148'),
('192.168.43.79'),
('192.168.43.46'),
('127.0.0.1'),
('127.0.0.1'),
('192.168.43.80'),
('192.168.43.9');

-- --------------------------------------------------------

--
-- Table structure for table `softwares`
--

CREATE TABLE `softwares` (
  `id` int(11) NOT NULL,
  `software` varchar(64) NOT NULL,
  `softwareTitle` varchar(70) NOT NULL,
  `About` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `userName`, `password`, `email`) VALUES
(1, 'Nicholas', 'Waruingi', 'nick', 'nick', 'nickforbizz@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `videoupload`
--

CREATE TABLE `videoupload` (
  `id` int(11) NOT NULL,
  `uploadName` varchar(70) NOT NULL,
  `About` varchar(200) NOT NULL,
  `videoTitle` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videoupload`
--

INSERT INTO `videoupload` (`id`, `uploadName`, `About`, `videoTitle`) VALUES
(1, 'uploads/1514799092', 'inspiration', 'blender for noobs'),
(2, 'uploads/1514799263', 'hiphop', 'funky hiphop instrumenta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentstable`
--
ALTER TABLE `commentstable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count_ip`
--
ALTER TABLE `count_ip`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `softwares`
--
ALTER TABLE `softwares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videoupload`
--
ALTER TABLE `videoupload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentstable`
--
ALTER TABLE `commentstable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `softwares`
--
ALTER TABLE `softwares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `videoupload`
--
ALTER TABLE `videoupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
