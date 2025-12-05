-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 07:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_player`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Navin', 'admin@gmail.com', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `album_name` varchar(300) DEFAULT NULL,
  `album_image` varchar(300) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `album_name`, `album_image`, `cat_id`) VALUES
(9, 'Eminem Songs', 'eminem-press-photo-2019-aqu-billboard-1548-1587659998.jpg', 3),
(10, 'Kaka Songs', 'crop_480x480_1605848234_3539739 (1).jpg', 7),
(11, 'Arjit Singh', '20_05_2021-arijit_singh_21660518.jpg', 6),
(12, 'Taylor Swift', 'Taylor_Swift_-_Taylor_Swift.png', 3),
(13, 'Neha kakkar', 'Art-350.jpg', 6),
(14, 'Rihanna Hits', 'rihana.jpg', 3),
(15, 'Group Love', 'grouplove.png', 3),
(16, 'Maninder', 'e0ce1d2838b62a45b663ac32427e5856.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `artist_name` varchar(300) DEFAULT NULL,
  `artist_image` varchar(300) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `artist_name`, `artist_image`, `cat_id`) VALUES
(19, 'Taylor Swift ', 'unnamed.jpg', 3),
(20, 'Adele', 'images.jpg', 3),
(21, 'neha kakkar', 'NJTfV1eu_400x400.jpg', 6),
(22, 'kaka', '118796718_780447325831261_1391537039809605216_n.jpg', 7),
(23, 'eminem ', 'Eminem-Eminem-Singing-Wallpapers.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `title` varchar(1500) NOT NULL,
  `artist` varchar(1500) NOT NULL,
  `image` varchar(1500) NOT NULL,
  `audio` varchar(1500) NOT NULL,
  `lyrics` varchar(1500) NOT NULL,
  `view` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `category_id`, `album_id`, `title`, `artist`, `image`, `audio`, `lyrics`, `view`) VALUES
(24, 0, 7, 'Eminem', '23', 'eminem-press-photo-2019-aqu-billboard-1548-1587659998.jpg', 'Eminem - Love The Way You Lie (ft. Rihanna) (1).mp3', 'Testing', 5),
(25, 0, 7, 'Eminem ', '23', 'eminem-press-photo-2019-aqu-billboard-1548-1587659998.jpg', 'Eminem - Love The Way You Lie (ft. Rihanna) (1).mp3', 'Just gonna stand there and watch me burn?\r\nWell, thats alright, because I like the way it hurts\r\nJust gonna stand there and hear me cry?\r\nWell, thats alright, because I love the way you lie\r\nI love the way you lie', 4),
(26, 0, 8, 'Love The Way You Lie', '23', 'eminem-press-photo-2019-aqu-billboard-1548-1587659998.jpg', 'Eminem - Love The Way You Lie (ft. Rihanna).mp3', 'Just gonna stand there and watch me burn?\r\nWell, thats alright, because I like the way it hurts\r\nJust gonna stand there and hear me cry?\r\nWell, thats alright, because I love the way you lie\r\nI love the way you lie', 1),
(27, 0, 9, 'Love The Way You Lie', '23', 'love the way.jfif', 'Eminem - Love The Way You Lie (ft. Rihanna) (1).mp3', 'Just gonna stand there and watch me burn?\r\nWell, thats alright, because I like the way it hurts\r\nJust gonna stand there and hear me cry?\r\nWell, thats alright, because I love the way you lie\r\nI love the way you lie', 9),
(28, 0, 10, 'Libas', '22', 'crop_480x480_1605848234_3539739 (1).jpg', 'Libaas_1.mp3', 'Billo Bagge Billeyan Da Ki Karengi\r\nBagge Bagge Billeyan Da Ki Karengi\r\nBillo Bagge Billeyan Da Ki Karengi\r\nNi Mera Maarda Ubaale Khoon Ang Ang Ton\r\nHo Ho Ho Ho..', 7),
(29, 0, 10, 'Temporary pyar', '22', 'ab67616d0000b273ef6d4ada657b92a6c90e5823.jfif', 'Temporary_Pyar_Original_1.mp3', 'Rovengi Mukkadran Nu Heere Meriye,\r\n\r\nJe Heereyan De Haar Jeha Yaar Kho Geya,\r\n\r\nHun Mainu Das Kinna Pyaar Kardi,\r\n\r\nLabdi Phirengi Je Faraar Ho Geya,\r\n\r\nMera Ae Gulaab Manzoor Karle,\r\n\r\nSach Kehnae Mainu Sacha Pyaar Ho Geya,\r\n\r\nSide Te Tu Apna Garoor Kar Lai,\r\n\r\nWekh Aaj Maithon Izhaar Ho Geya,\r\n\r\nDarling Umaraan Da Wada Karde,\r\n\r\nDarling Umaraan Da Wada Karde...', 8),
(30, 0, 12, 'Blank space', '19', 'TS_APP_IPAD_HOME_11_01.0.0.jpg', '[MP3DOWNLOAD.TO] Taylor Swift - Blank Space-64k.mp3', 'Nice to meet you, where you been?\r\nI could show you incredible things\r\nMagic, madness, heaven, sin\r\nSaw you there and I thought\r\nOh, my God, look at that face\r\nYou look like my next mistake\r\nLoves a game, wanna play? Ay', 14),
(31, 0, 13, 'Mile ho tum ', '21', 'srch_hungama_48181045.jpg', 'Taylor Swift Daylight (englishsongs.wapkiz.com).mp3', '   Testing', 7),
(32, 0, 12, 'testing', '19', 'unnamed.jpg', 'Taylor Swift Daylight (englishsongs.wapkiz.com).mp3', '                    testing testing', 9);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(3, 'English'),
(6, 'Hindi'),
(7, 'Panjabi');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `audioid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id`, `userid`, `audioid`) VALUES
(6, 7, 24),
(7, 8, 25),
(8, 8, 28),
(9, 8, 28),
(10, 13, 30),
(11, 14, 29),
(12, 15, 30);

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `podcost_id` int(11) NOT NULL,
  `podcast_title` varchar(1500) NOT NULL,
  `podcast_host` varchar(1500) NOT NULL,
  `podcast_image` varchar(1500) NOT NULL,
  `podcast_audio` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`podcost_id`, `podcast_title`, `podcast_host`, `podcast_image`, `podcast_audio`) VALUES
(1, 'Eminem', 'Eminem', 'eminem-press-photo-2019-aqu-billboard-1548-1587659998.jpg', 'Eminem - Love The Way You Lie (ft. Rihanna) (1).mp3'),
(3, 'test', 'admin', 'unnamed.jpg', 'Taylor Swift Gorgeous (englishsongs.online).mp3');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `first_name` varchar(300) DEFAULT NULL,
  `last_name` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `mobile`, `password`, `first_name`, `last_name`) VALUES
(7, 'navin', 'navin11@gmail.com', '', '111111', 'navin', 'Pawar'),
(8, 'mahi', 'mahi@gmail.com', '', '111111', 'mahi', 'mahi'),
(9, 'bala', 'bala@gmail.com', '', '111111', 'bala', 'pawar'),
(10, 'lala', 'lala@gmail.com', '', '111111', 'lala', 'Pawar'),
(11, 'love', 'love@gmail.com', '', '111111', 'love', 'pawar'),
(12, 'rajesg', 'rajesh@gmail.com', '', '111111', 'rajesh', 'Pawar'),
(13, 'navin123', 'navin123@gmail.com', '', '111111', 'navin', 'Pawar'),
(14, 'sakid', 'sakid@gmail.com', '', '111111', 'sakid', 'moh'),
(15, 'nupur', 'nupur@gmail.com', '', '111111', 'nupur', 'gohite'),
(16, 'RAHUL', 'rahul@gmail.com', '', '111111', 'rahul', 'baghel'),
(17, 'anamika', 'ana@gmail.com', '', '111111', 'anamika', 'patel'),
(18, 'aapp', 'agriy@gmail.com', '', '111111', 'aeeee', 'baghel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`podcost_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `podcost_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
