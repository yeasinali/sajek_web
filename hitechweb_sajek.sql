-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 04:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hitechweb_sajek`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(155) NOT NULL,
  `hotel_image` varchar(255) NOT NULL,
  `hotel_address` varchar(255) NOT NULL,
  `hotel_manager` varchar(155) NOT NULL,
  `hotel_contact` varchar(155) NOT NULL,
  `hotel_condition` varchar(50) NOT NULL,
  `hotel_rent` varchar(200) NOT NULL,
  `hotel_rent_time` varchar(200) NOT NULL,
  `longitude` varchar(155) NOT NULL,
  `latitude` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`hotel_id`, `hotel_name`, `hotel_image`, `hotel_address`, `hotel_manager`, `hotel_contact`, `hotel_condition`, `hotel_rent`, `hotel_rent_time`, `longitude`, `latitude`) VALUES
(8, 'Sajek Hotel2', 'images/69768rice.jpg', 'khulna,dhak', 'yeasina', '0173392843', 'AC', '3000', '4H', '2323.4545', '2323.4545');

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `ad_id` int(11) NOT NULL,
  `ad_title` varchar(255) NOT NULL,
  `ad_url` varchar(255) NOT NULL,
  `ad_footer` varchar(255) NOT NULL,
  `ad_p_page` varchar(255) NOT NULL,
  `ad_cat` int(11) NOT NULL,
  `ad_st` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` longtext NOT NULL,
  `cat_mate_title` varchar(255) NOT NULL,
  `cat_mate_description` varchar(255) NOT NULL,
  `cat_mate_key` varchar(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_seo_url` varchar(255) NOT NULL,
  `cat_top` int(5) NOT NULL,
  `cat_parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `Information_id` int(11) NOT NULL,
  `Information_title` varchar(255) NOT NULL,
  `Information_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`Information_id`, `Information_title`, `Information_description`) VALUES
(1, 'about ', 'sdafsa');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sl_id` int(11) NOT NULL,
  `sl_name` varchar(255) NOT NULL,
  `sl_url` varchar(255) NOT NULL,
  `sl_date` date NOT NULL,
  `sl_img` varchar(255) NOT NULL,
  `sl_status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sl_id`, `sl_name`, `sl_url`, `sl_date`, `sl_img`, `sl_status`) VALUES
(14, 'silder', '', '2015-11-10', 'images/slide1.jpg', 1),
(15, 'silder2', 'silder2', '2015-11-10', 'images/slide2.jpg', 1),
(16, 'dsf', 'dsf', '2015-11-10', 'images/slide3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transports`
--

CREATE TABLE `transports` (
  `tansport_id` int(11) NOT NULL,
  `tansport_name` varchar(155) NOT NULL,
  `tansport_img` varchar(255) NOT NULL,
  `tansport_place` varchar(155) NOT NULL,
  `tansport_time` varchar(155) NOT NULL,
  `tansport_rent` varchar(155) NOT NULL,
  `tansport_mobile` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transports`
--

INSERT INTO `transports` (`tansport_id`, `tansport_name`, `tansport_img`, `tansport_place`, `tansport_time`, `tansport_rent`, `tansport_mobile`) VALUES
(9, 'shoag poribon', 'images/83097tarequl.jpg', 'sdf', '4h', '300', '01733928438'),
(10, 'shoag poribon', 'images/57385rice.jpg', 'dfgd', 'dfg', 'fdgdf', 'ddf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(155) NOT NULL,
  `user_last_name` varchar(155) NOT NULL,
  `user_age` varchar(3) NOT NULL,
  `user_sex` varchar(5) NOT NULL,
  `user_date_of_birth` varchar(255) NOT NULL,
  `user_about` longtext NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_username` varchar(155) NOT NULL,
  `user_password` varchar(155) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_address2` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `user_r_date` date NOT NULL,
  `user_solt` varchar(155) NOT NULL,
  `user_status` varchar(155) NOT NULL,
  `user_session_id` varchar(255) NOT NULL,
  `user_agent` varchar(155) NOT NULL,
  `user_ip` varchar(155) NOT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_age`, `user_sex`, `user_date_of_birth`, `user_about`, `user_email`, `user_username`, `user_password`, `user_address`, `user_address2`, `user_img`, `user_r_date`, `user_solt`, `user_status`, `user_session_id`, `user_agent`, `user_ip`, `user_role`) VALUES
(1, 'yeasin', 'ali', '', '', '', '', 'ssadi2011@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', 'images/16158rice.jpg', '0000-00-00', '7cbbc409ec990f19c78c75bd1e06f215', '1', '3gfcd7aqidfb6kdrbvhpqp1sc1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '::1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`Information_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `transports`
--
ALTER TABLE `transports`
  ADD PRIMARY KEY (`tansport_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`,`user_session_id`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `Information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `transports`
--
ALTER TABLE `transports`
  MODIFY `tansport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
