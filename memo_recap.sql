-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 05:56 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `memo_recap`
--
CREATE DATABASE IF NOT EXISTS `memo_recap` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `memo_recap`;

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE IF NOT EXISTS `assets` (
  `asset_id` varchar(4) NOT NULL,
  `file` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `owner` varchar(4) NOT NULL,
  `privacy` varchar(8) NOT NULL,
  `upload_date` date NOT NULL,
  PRIMARY KEY (`asset_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`asset_id`, `file`, `category`, `owner`, `privacy`, `upload_date`) VALUES
('0001', 'qaqo.jpg', 'user_images/', '0001', 'private', '2017-09-28'),
('0002', 'bg.jpg', 'backgrounds/', '0001', 'private', '2017-09-28'),
('0003', 'WIN_20170915_13_59_24_Pro.jpg', 'user_images/', '0001', 'private', '2017-09-29'),
('0004', 'heart.png', 'stickers/', '0001', 'public', '2017-09-29'),
('0005', 'circle.png', 'shapes/', '0001', 'public', '2017-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `scrapbooks`
--

CREATE TABLE IF NOT EXISTS `scrapbooks` (
  `scrapbook_id` varchar(4) NOT NULL,
  `user_id` varchar(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `json` longtext NOT NULL,
  PRIMARY KEY (`scrapbook_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scrapbooks`
--

INSERT INTO `scrapbooks` (`scrapbook_id`, `user_id`, `name`, `json`) VALUES
('0001', '0001', 'colors', '{"height":"512px", "width":"768px" , "pages":{"0":{"bg":"0004","0-0001":{"x": "225", "y": "96", "w": "337px", "h": "337px", "z": "1","a": "1"}},"1":{"bg":"0002","1-0003":{"x": "125", "y": "197", "w": "462px", "h": "274px", "z": "1","a": "0"}},"2":{"bg":"rgb(144, 255, 144)","2-0004":{"x": "76", "y": "222", "w": "175px", "h": "175px", "z": "1","a": "337"},"4-0003":{"x": "132", "y": "85", "w": "364.094px", "h": "243px", "z": "2","a": "27"},"3-0005":{"x": "420", "y": "111", "w": "210px", "h": "210px", "z": "3","a": "35"}}}}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `password`) VALUES
('jb', 'Johnrey Bacal', '0010');

('0001', '0001', 'colors', '{"height":"512px", "width":"768px" , "pages":{"0":{"bg":"0001","0-0002":{"x": "150", "y": "273", "w": "100px", "h": "100px", "z": "1","a": "0"}},"1":{"bg":"rgb(225, 225, 225)"},"2":{"bg":"rgb(225, 225, 225)"},"3":{"bg":"rgb(225, 225, 225)"}}}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
