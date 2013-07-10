-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2013 at 08:41 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `toolbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`name`),
  KEY `app_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `devices_android`
--

CREATE TABLE `devices_android` (
  `token` varchar(255) NOT NULL,
  `appname` varchar(127) NOT NULL,
  `appver` varchar(32) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(127) NOT NULL,
  `model` varchar(127) NOT NULL,
  `sysver` varchar(32) NOT NULL,
  `badge` tinyint(8) NOT NULL,
  `alert` varchar(127) NOT NULL,
  `sound` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `devices_ios`
--

CREATE TABLE `devices_ios` (
  `token` varchar(255) NOT NULL,
  `appname` varchar(127) NOT NULL,
  `appver` varchar(32) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(127) NOT NULL,
  `model` varchar(127) NOT NULL,
  `sysver` varchar(32) NOT NULL,
  `badge` tinyint(8) NOT NULL,
  `alert` varchar(127) NOT NULL,
  `sound` varchar(255) NOT NULL,
  PRIMARY KEY (`token`),
  UNIQUE KEY `token` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `pass`, `fullname`, `email`) VALUES
('admin', 'admin', 'Bui Duc Hieu', 'duchieu.bka@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
