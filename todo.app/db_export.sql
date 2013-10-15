-- phpMyAdmin SQL Dump
-- version 4.0.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2013 at 02:06 AM
-- Server version: 5.5.32-0ubuntu0.12.04.1
-- PHP Version: 5.3.10-1ubuntu3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buchheim`
--

-- --------------------------------------------------------

--
-- Table structure for table `TASK`
--

CREATE TABLE IF NOT EXISTS `TASK` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(100) NOT NULL,
  `DATE` date NOT NULL,
  `DESCRIPTION` varchar(535) DEFAULT NULL,
  `STATUS` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tasks for the todo list.' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `TASK`
--

INSERT INTO `TASK` (`ID`, `TITLE`, `DATE`, `DESCRIPTION`, `STATUS`) VALUES
(1, 'Test', '2013-10-10', 'sadasdasd adsasdasdasd', 1),
(2, 'Testtest', '2013-10-09', 'xyasdasd qwedqwewqe sad<DS', 1),
(3, 'I''m a Task.', '2013-10-09', 'This is some very useful description.', 0),
(4, 'Testtest', '2013-10-09', 'xyasdasd qwedqwewqe sad<DS', 1),
(6, 'I''m a task too.', '2013-10-25', 'More useful information.', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
