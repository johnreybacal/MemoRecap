-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 06:18 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE IF NOT EXISTS `assets` (
  `asset_id` varchar(4) NOT NULL,
  `file` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `privacy` varchar(8) NOT NULL,
  `upload_date` date NOT NULL,
  PRIMARY KEY (`asset_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--


INSERT INTO `assets` (`asset_id`, `file`, `category`, `username`, `privacy`, `upload_date`) VALUES
('0001', 'qaqo.jpg', 'user_images/', 'jb', 'private', '2017-09-28'),
('0002', 'bg.jpg', 'backgrounds/', 'jb', 'private', '2017-09-28'),
('0003', 'WIN_20170915_13_59_24_Pro.jpg', 'user_images/', 'jb', 'private', '2017-09-29'),
('0004', 'heart.png', 'stickers/', 'jb', 'public', '2017-09-29'),
('0005', 'circle.png', 'shapes/', 'jb', 'public', '2017-09-29'),
('0006', 'potiboi.jpg', 'user_images/', 'jb', 'public', '2017-10-04'),
('0007', 'default.png', 'user_images/', 'bj', 'public', '2017-10-06'),
('0008', 'sonofabitch.png', 'stickers/', 'bj', 'public', '2017-10-06'),
('0009', 'received_1344786008898466.jpeg', 'user_images/', 'bj', 'public', '2017-10-06'),
('0010', 'received_1439947566088904.jpeg', 'user_images/', 'jb', 'public', '2017-10-07');


-- --------------------------------------------------------

--
-- Table structure for table `scrapbooks`
--

CREATE TABLE IF NOT EXISTS `scrapbooks` (
  `scrapbook_id` varchar(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `privacy` varchar(8) NOT NULL,
  `view_counter` int(5) NOT NULL,
  `json` longtext NOT NULL,
  PRIMARY KEY (`scrapbook_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scrapbooks`
--


INSERT INTO `scrapbooks` (`scrapbook_id`, `username`, `name`, `privacy`, `view_counter`, `json`) VALUES
('0001', 'jb', 'colors', 'public', 8, '{"height":"512px", "width":"768px" , "pages":{"0":{"bg":"0002","0-0001":{"x": "169", "y": "29", "w": "337px", "h": "322px", "z": "1","a": "312"},"5-0002":{"x": "37", "y": "291", "w": "270px", "h": "161px", "z": "2","a": "346"},"6-0006":{"x": "526", "y": "226", "w": "166px", "h": "166px", "z": "3","a": "41"}},"1":{"bg":"0002","1-0003":{"x": "182", "y": "103", "w": "462px", "h": "274px", "z": "1","a": "0"}},"2":{"bg":"rgb(144, 255, 144)","2-0004":{"x": "138", "y": "85", "w": "175px", "h": "175px", "z": "1","a": "337"},"4-0003":{"x": "287", "y": "154", "w": "364.094px", "h": "243px", "z": "2","a": "27"},"3-0005":{"x": "780", "y": "1365", "w": "210px", "h": "210px", "z": "3","a": "35"}}}}'),
('0002', 'bj', 'nani', 'public', 4, '{"height":"512px", "width":"768px" , "pages":{"0":{"bg":"0006","0-0005":{"x": "325", "y": "272", "w": "143px", "h": "134px", "z": "1","a": "324"},"1-0004":{"x": "357", "y": "119", "w": "100px", "h": "100px", "z": "2","a": "187"},"6-0006":{"x": "14", "y": "74", "w": "292px", "h": "269px", "z": "3","a": "0"},"8-0004":{"x": "504", "y": "74", "w": "100px", "h": "100px", "z": "4","a": "333"},"9-0005":{"x": "475", "y": "220", "w": "100px", "h": "100px", "z": "5","a": "221"},"13-0004":{"x": "233", "y": "237", "w": "100px", "h": "100px", "z": "6","a": "187"}},"1":{"bg":"rgb(255, 221, 204)","3-0006":{"x": "182", "y": "91", "w": "292px", "h": "269px", "z": "1","a": "307"},"4-0006":{"x": "377", "y": "135", "w": "377px", "h": "269px", "z": "2","a": "0"},"5-0006":{"x": "31", "y": "100", "w": "292px", "h": "269px", "z": "3","a": "24"},"2-0004":{"x": "180", "y": "141", "w": "100px", "h": "100px", "z": "4","a": "0"},"8-0006":{"x": "175", "y": "72", "w": "377px", "h": "269px", "z": "5","a": "303"}},"2":{"bg":"rgb(225, 225, 225)","11-0004":{"x": "76", "y": "169", "w": "100px", "h": "100px", "z": "1","a": "304"},"12-0004":{"x": "371", "y": "98", "w": "100px", "h": "100px", "z": "2","a": "304"}},"3":{"bg":"rgba(0, 0, 0, 0)","10-0006":{"x": "230", "y": "109", "w": "100px", "h": "100px", "z": "1","a": "33"}}}}'),
('0003', 'jb', 'let the bodis hit th', 'public', 1, '{"height":"640px", "width":"768px" , "pages":{"0":{"bg":"0001","0-0003":{"x": "195", "y": "101", "w": "434px", "h": "268px", "z": "2","a": "22"},"1-0004":{"x": "121", "y": "162", "w": "100px", "h": "100px", "z": "3","a": "334"},"2-0002":{"x": "59", "y": "309", "w": "307px", "h": "196px", "z": "1","a": "343"}},"1":{"bg":"rgb(225, 225, 225)"},"2":{"bg":"rgb(225, 225, 225)"},"3":{"bg":"rgb(225, 225, 225)"}}}'),
('0004', 'jb', 'lj', 'public', 4, '{"height":"512px", "width":"768px" , "pages":{"0":{"bg":"0007","0-0001":{"x": "60", "y": "38", "w": "100px", "h": "100px", "z": "1","a": "0"},"1-0006":{"x": "289", "y": "37", "w": "100px", "h": "100px", "z": "2","a": "0"}},"1":{"bg":"rgb(255, 221, 204)","2-0007":{"x": "134", "y": "226", "w": "50px", "h": "50px", "z": "3","a": "22"},"3-0008":{"x": "41", "y": "72", "w": "275px", "h": "275px", "z": "2","a": "22"},"4-0004":{"x": "483", "y": "312", "w": "50px", "h": "50px", "z": "4","a": "338"},"5-0008":{"x": "360", "y": "161", "w": "267px", "h": "267px", "z": "1","a": "338"}},"2":{"bg":"0004","6-0007":{"x": "60", "y": "281", "w": "100px", "h": "100px", "z": "1","a": "0"},"7-0006":{"x": "290", "y": "283", "w": "100px", "h": "100px", "z": "2","a": "0"},"8-0001":{"x": "521", "y": "284", "w": "100px", "h": "100px", "z": "3","a": "0"}}}}'),
('0005', 'jb', 'privet drive', 'private', 3, '{"height":"512px", "width":"768px" , "pages":{"0":{"bg":"rgb(225, 225, 225)","2-0001":{"x": "583", "y": "267", "w": "100px", "h": "100px", "z": "3","a": "0"},"3-0001":{"x": "325", "y": "141", "w": "245px", "h": "245px", "z": "3","a": "51"},"4-0001":{"x": "201", "y": "272", "w": "100px", "h": "100px", "z": "4","a": "0"}},"1":{"bg":"rgb(225, 225, 225)"},"2":{"bg":"rgb(225, 225, 225)"}}}');


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dp` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--


INSERT INTO `users` (`username`, `name`, `password`, `dp`) VALUES
('bj', 'bacal johnrey', '321', 'default.png'),
('jb', 'Johnrey C. Bacal', '123', 'received_1344786008898466.jpeg');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
