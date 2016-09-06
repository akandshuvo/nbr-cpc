-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2016 at 08:49 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpc`
--

-- --------------------------------------------------------

--
-- Table structure for table `after_sale_service_location`
--

CREATE TABLE `after_sale_service_location` (
  `id` int(16) NOT NULL,
  `division` varchar(32) NOT NULL,
  `district` varchar(32) NOT NULL,
  `upazilla` varchar(32) NOT NULL,
  `thana` varchar(32) NOT NULL,
  `post_code` varchar(32) NOT NULL,
  `area_village` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `after_sale_service_location`
--

INSERT INTO `after_sale_service_location` (`id`, `division`, `district`, `upazilla`, `thana`, `post_code`, `area_village`) VALUES
(1, 'dhaka', 'dhaka', 'mirpur', 'mirpur', '1216', 'Mirpur 12');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `file` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `root` varchar(16) NOT NULL,
  `sub_root` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`id`, `file`, `type`, `size`, `location`, `date`, `root`, `sub_root`) VALUES
(21, '[kat.cr]blindspot.s01e21.hdtv.x264.lol.ettv.torrent-81589', 'application/x-bittorrent', '3.103515625', '../../docs/retailer_location/', '2016-05-12 10:25:54', '', ''),
(50, '-[kat.cr]blindspot.s01e21.hdtv.x264.lol.ettv.torrent', 'application/x-bittorrent', '3.103515625', '../../docs/dth/product/', '2016-05-12 14:52:05', 'dth', 'product'),
(51, '05.12.16-[kat.cr]blindspot.s01e21.hdtv.x264.lol.ettv.torrent', 'application/x-bittorrent', '3.103515625', '../../docs/dth/product/', '2016-05-12 14:57:20', 'dth', 'product'),
(52, '[kat.cr]blindspot.s01e21.hdtv.x264.lol.ettv.torrent-20882', 'application/x-bittorrent', '3.103515625', '../../docs/dth/services/', '2016-05-12 15:05:01', 'dth', 'services'),
(53, '05.12.16-[kat.cr]blindspot.s01e21.hdtv.x264.lol.ettv.torrent', 'application/x-bittorrent', '3.103515625', '../../docs/dth/product/', '2016-05-12 15:05:15', 'dth', 'product'),
(54, '05.12.16-[kat.cr]blindspot.s01e21.hdtv.x264.lol.ettv.torrent', 'application/x-bittorrent', '3.103515625', '../../docs/dth/product/', '2016-05-12 15:07:09', 'dth', 'product'),
(55, '05.12.16-[kat.cr]blindspot.s01e21.hdtv.x264.lol.ettv.torrent', 'application/x-bittorrent', '3.103515625', '../../docs/dth/product/', '2016-05-12 15:07:28', 'dth', 'product'),
(56, '05.12.16-[kat.cr]blindspot.s01e21.hdtv.x264.lol.ettv.torrent', 'application/x-bittorrent', '3.103515625', '../../docs/dth/services/', '2016-05-12 15:07:53', 'dth', 'services'),
(57, '17-20-54-bexcom.sql', 'application/octet-stream', '8.2880859375', '../../docs/dth/product/', '2016-05-12 15:20:54', 'dth', 'product'),
(58, '17-21-03-bexcom.sql', 'application/octet-stream', '8.2880859375', '../../docs/dth/product/', '2016-05-12 15:21:03', 'dth', 'product'),
(59, '05.12.16-bexcom.sql', 'application/octet-stream', '8.2880859375', '../../docs/dth/services/', '2016-05-12 15:23:12', 'dth', 'services'),
(60, '12-12-28-daily-task-list-protected.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', '12.5283203125', '../../docs/after_sale_service_location/', '2016-05-14 10:12:28', 'after_sale_servi', 'after_sale_servi'),
(61, '14-07-31-polygon-moon-hill.jpg', 'image/jpeg', '6588.2099609375', '../../docs/package/packs_1&2/', '2016-07-30 12:07:31', 'package', 'packs_1&2'),
(62, '11-19-41-13082586_550642875109420_4503702616730778440_n.jpg', 'image/jpeg', '31.4599609375', '../../docs/', '2016-08-28 09:19:41', 'dth', 'product'),
(63, '11-20-50-13082586_550642875109420_4503702616730778440_n.jpg', 'image/jpeg', '31.4599609375', '../../docs/', '2016-08-28 09:20:50', 'dth', 'product'),
(64, '11-33-53-13512055_574909542682753_52230809824533956_n.jpg', 'image/jpeg', '147.3955078125', '../../docs/', '2016-08-28 09:33:53', 'dth', 'product'),
(65, '11-34-01-13509001_1324239677605006_4406297751256220056_n.jpg', 'image/jpeg', '87.294921875', '../../docs/', '2016-08-28 09:34:02', 'dth', 'product'),
(66, '11-34-11-13627235_586790761494631_4116790572462430447_n.jpg', 'image/jpeg', '100.4404296875', '../../docs/', '2016-08-28 09:34:11', 'dth', 'product'),
(67, '11-34-22-13512055_574909542682753_52230809824533956_n.jpg', 'image/jpeg', '147.3955078125', '../../docs/', '2016-08-28 09:34:22', 'dth', 'product'),
(68, '11-36-39-1.jpg', 'image/jpeg', '66.9326171875', '../../docs/', '2016-08-28 09:36:39', 'dth', 'product'),
(69, '11-36-45-10.jpg', 'image/jpeg', '21.779296875', '../../docs/', '2016-08-28 09:36:45', 'dth', 'product'),
(70, '11-36-55-13077042_1661613193978423_5752666871824291979_n.jpg', 'image/jpeg', '50.197265625', '../../docs/', '2016-08-28 09:36:55', 'dth', 'product'),
(71, '11-37-00-13082586_550642875109420_4503702616730778440_n.jpg', 'image/jpeg', '31.4599609375', '../../docs/', '2016-08-28 09:37:00', 'dth', 'product'),
(72, '11-37-07-13512055_574909542682753_52230809824533956_n.jpg', 'image/jpeg', '147.3955078125', '../../docs/', '2016-08-28 09:37:07', 'dth', 'product'),
(73, '11-48-28-capture.png', 'image/png', '173.572265625', '../../docs/', '2016-08-28 09:48:28', 'dth', 'product'),
(74, '11-54-47-coffee-mug.jpg', 'image/jpeg', '4149.7578125', '../../docs/', '2016-08-28 09:54:47', 'dth', 'product'),
(75, '13-35-59-coffee-mug.jpg', 'image/jpeg', '4149.7578125', '../../docs/', '2016-08-28 11:35:59', 'dth', 'product'),
(76, '13-36-50-coffee-mug.jpg', 'image/jpeg', '4149.7578125', '../../docs/', '2016-08-28 11:36:50', 'dth', 'product'),
(77, 'coffee mug.jpg', 'image/jpeg', '4149.7578125', '../../docs/', '2016-08-28 11:42:40', 'dth', 'product'),
(78, '123456789_01.jpg', 'image/jpeg', '4149.7578125', '../../docs/', '2016-08-28 11:53:43', 'dth', ''),
(79, '123456789_01.jpg', 'image/jpeg', '4149.7578125', '../../docs/', '2016-08-28 11:57:01', 'dth', ''),
(80, '123456789_01.jpg', 'image/jpeg', '4149.7578125', '../../docs/', '2016-08-28 12:00:48', 'dth', '123456789'),
(81, 'deepika02_03.jpg', 'image/jpeg', '87.294921875', '../../docs/', '2016-08-28 12:04:37', 'dth', 'deepika02'),
(82, 'deepika01_01.jpg', 'image/jpeg', '50.197265625', '../../docs/', '2016-08-28 12:04:50', 'dth', 'deepika01'),
(83, 'deepika01_02.jpg', 'image/jpeg', '31.4599609375', '../../docs/', '2016-08-28 12:04:59', 'dth', 'deepika01'),
(84, 'deepika01_03.jpg', 'image/jpeg', '67.4755859375', '../../docs/', '2016-08-28 12:05:09', 'dth', 'deepika01'),
(85, 'deepika02_01.jpg', 'image/jpeg', '117.298828125', '../../docs/', '2016-08-28 12:05:18', 'dth', 'deepika02'),
(86, 'deepika02_02.jpg', 'image/jpeg', '53.1005859375', '../../docs/', '2016-08-28 12:05:24', 'dth', 'deepika02'),
(87, 'deepika02_03.jpg', 'image/jpeg', '87.294921875', '../../docs/', '2016-08-28 12:05:32', 'dth', 'deepika02'),
(88, 'deepika01_01.jpg', 'image/jpeg', '50.197265625', '../../docs/', '2016-08-29 06:41:40', 'dth', 'deepika01'),
(89, 'deepika01_02.jpg', 'image/jpeg', '31.4599609375', '../../docs/', '2016-08-29 06:41:47', 'dth', 'deepika01'),
(90, 'deepika01_03.jpg', 'image/jpeg', '67.4755859375', '../../docs/', '2016-08-29 06:41:54', 'dth', 'deepika01'),
(91, 'deepika02_01.jpg', 'image/jpeg', '117.298828125', '../../docs/', '2016-08-29 06:42:01', 'dth', 'deepika02'),
(92, 'deepika02_02.jpg', 'image/jpeg', '53.1005859375', '../../docs/', '2016-08-29 06:42:08', 'dth', 'deepika02'),
(93, 'deepika02_03.jpg', 'image/jpeg', '87.294921875', '../../docs/', '2016-08-29 06:42:14', 'dth', 'deepika02'),
(94, 'deepika01_01.jpg', 'image/jpeg', '50.197265625', '../../docs/', '2016-08-29 06:49:51', 'dth', 'deepika01'),
(95, 'deepika01_02.jpg', 'image/jpeg', '31.4599609375', '../../docs/', '2016-08-29 06:50:08', 'dth', 'deepika01'),
(96, 'deepika01_03.jpg', 'image/jpeg', '67.4755859375', '../../docs/', '2016-08-29 06:50:16', 'dth', 'deepika01'),
(97, 'deepika02_01.jpg', 'image/jpeg', '117.298828125', '../../docs/', '2016-08-29 06:50:22', 'dth', 'deepika02'),
(98, 'deepika02_02.jpg', 'image/jpeg', '53.1005859375', '../../docs/', '2016-08-29 06:50:30', 'dth', 'deepika02'),
(99, 'deepika02_03.jpg', 'image/jpeg', '87.294921875', '../../docs/', '2016-08-29 06:50:36', 'dth', 'deepika02');

-- --------------------------------------------------------

--
-- Table structure for table `installer_address`
--

CREATE TABLE `installer_address` (
  `id` int(11) NOT NULL,
  `division` varchar(32) NOT NULL,
  `district` varchar(32) NOT NULL,
  `upazilla` varchar(32) NOT NULL,
  `thana` varchar(32) NOT NULL,
  `post_code` varchar(32) NOT NULL,
  `area_village` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retailer_location`
--

CREATE TABLE `retailer_location` (
  `id` int(11) NOT NULL,
  `division` varchar(32) NOT NULL,
  `district` varchar(32) NOT NULL,
  `upazilla` varchar(32) NOT NULL,
  `thana` varchar(32) NOT NULL,
  `post_code` varchar(32) NOT NULL,
  `area_village` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `prefix` varchar(64) NOT NULL,
  `size` varchar(64) NOT NULL,
  `type` varchar(64) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload_location`
--

CREATE TABLE `upload_location` (
  `id` int(11) NOT NULL,
  `file` varchar(252) NOT NULL,
  `type` varchar(252) NOT NULL,
  `size` varchar(252) NOT NULL,
  `location` varchar(252) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `root` varchar(64) NOT NULL,
  `sub_root` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_id` varchar(16) NOT NULL,
  `password` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logout_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_id`, `password`, `level`, `login_time`, `logout_time`) VALUES
(1, 'Shovon Rahman Shuvo', '2145', 123456, 1, '2016-03-13 11:01:15', '0000-00-00 00:00:00'),
(2, 'Sirajum Monir Parvez', '1735', 123456, 3, '2016-05-12 06:52:13', '2016-03-13 10:55:25'),
(3, 'Md Ashraf Hossain', '2345', 123456, 2, '2016-03-12 18:00:00', '2016-03-12 18:00:00'),
(4, 'Faruque', '00123', 123456, 4, '2016-05-12 06:52:18', '0000-00-00 00:00:00'),
(5, 'Sirajum Monir Parvez', '1735', 123456, 1, '2016-05-12 08:28:18', '0000-00-00 00:00:00'),
(6, 'Ashraf Hossain', '3145', 2145, 1, '2016-05-12 08:29:20', '0000-00-00 00:00:00'),
(7, 'Sirajum Monir Parvez', '1835', 565656556, 1, '2016-05-14 13:43:37', '0000-00-00 00:00:00'),
(8, 'test_1234', '1234', 123456, 4, '2016-08-28 09:31:03', '0000-00-00 00:00:00'),
(9, 'test_1234', '12345', 123456, 4, '2016-08-28 09:31:03', '0000-00-00 00:00:00'),
(10, 'test_1234', '12346', 123456, 4, '2016-08-28 09:31:03', '0000-00-00 00:00:00'),
(11, 'test_1234', '12347', 123456, 4, '2016-08-28 09:31:03', '0000-00-00 00:00:00'),
(12, 'test_1234', '12348', 123456, 4, '2016-08-28 09:31:03', '0000-00-00 00:00:00'),
(13, 'Asif Ibne Islam', '3349', 123456, 1, '2016-09-05 09:51:06', '0000-00-00 00:00:00'),
(14, 'Asif Ibne Islam', '123456789', 123456, 1, '2016-09-05 10:19:04', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `after_sale_service_location`
--
ALTER TABLE `after_sale_service_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retailer_location`
--
ALTER TABLE `retailer_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_location`
--
ALTER TABLE `upload_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `after_sale_service_location`
--
ALTER TABLE `after_sale_service_location`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `retailer_location`
--
ALTER TABLE `retailer_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `upload_location`
--
ALTER TABLE `upload_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
