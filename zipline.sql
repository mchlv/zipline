-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 01, 2019 at 12:31 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zipline`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
CREATE TABLE IF NOT EXISTS `applicants` (
  `id` mediumint(55) NOT NULL AUTO_INCREMENT,
  `strFirstName` varchar(255) NOT NULL,
  `strLastName` varchar(255) NOT NULL,
  `strEmail` varchar(255) NOT NULL,
  `strPosition` varchar(255) DEFAULT NULL,
  `arrSeasons` varchar(255) DEFAULT NULL,
  `arrHours` varchar(255) DEFAULT NULL,
  `strImage` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `strFirstName`, `strLastName`, `strEmail`, `strPosition`, `arrSeasons`, `arrHours`, `strImage`) VALUES
(75, 'Homer', 'Simpson', 'dsfsd', 'Kiosk Attendant', 'Summer', 'Morning,Afternoon', 'rainbowt.png'),
(82, 'Michelle', 'fds', 'dsfsd', 'Kiosk Attendant', 'Spring', 'Evening', 'ORH92S1.jpg'),
(72, 'Bart', 'Simpson', 'dsfsd', 'Kiosk Attendant', 'Summer', 'Morning', 'prev1.jpg'),
(78, 'Grandpa', 'Simpson', 'lisa@gmail.com', 'Kiosk Attendant', 'Summer,Fall', 'Afternoon,Evening', 'three-wise-monkeys-desktop.jpg'),
(79, 'Mojo', 'The Helper Monkey', 'mojo@gmail.com', 'Kiosk Attendant', 'Summer,Fall', 'Afternoon,Evening', 'three-wise-monkeys-desktop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(55) NOT NULL AUTO_INCREMENT,
  `strUsername` varchar(255) NOT NULL,
  `strPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `strUsername`, `strPassword`) VALUES
(1, 'michelle', '$2y$10$xnpqhiFu5YxjAVSYeFfDiOff5D8X4CSN6fgv0Zrjtd4DvHTrEuwdi'),
(3, 'charlie', '$2y$10$tTkKbKWt1RFGqUTP8ivlweMXLtB5eXgvv3nizP92.bnqiPcjz/yR2'),
(4, 'miche', '$2y$10$Gmi8I7vcHKGuHWxabnw6rONmr25Im12V2x6X3atzOgTnpo0/1Jli2'),
(5, 'charlie', '$2y$10$coXrYWtsIO6T1Y98IMTvQOOpksoJtlyQEl4v5NqisTxtS.terXAuK'),
(6, 'charlie', '$2y$10$B3Xh1oyCUZHPVPrO8WvxyeJ0pQp9aRbt4jt3Jst2/UGqCK2u95Aue'),
(7, 'lalala', '$2y$10$YrAitLcm9QtZ/8dmmSEdxOzIehfySkjp5KxJislCGAmwtGDVS7Dl.'),
(8, 'lalala', '$2y$10$8SN08hL8Ea1yeE8bsJcG9Of2wwGHuX1/GyjkMUVkzrtMA92GM4sjG'),
(9, 'friend', '$2y$10$Drg4aGrkI/V/zS7xkr.Bz.XwM9tHKALRvann6Pa9xu3fTT05e39R2'),
(10, 'friend', '$2y$10$iKBV8c/5qMzgFwSTZlClEuPRw8DcA3Pw7xgIxYzHK7hDbgtWCZXd.'),
(11, 'michedfd', '$2y$10$w4dFFUYDQQcOzBc7fMY4FelO64kpyovLerl72XvgLCpE4WAkGWcW6'),
(12, 'miche@gmail.com', '$2y$10$SfGe4yMSeRoiIq4LsulANeYlAB3.lYODxxDmRhe2AmeKBtaCvBoJ6'),
(13, 'nathan@vanarts.com', '$2y$10$Gz8sotWgp1RB9EKXdJKlVObAWtMbODDuGUuTLh7kWYli34vfdQC2q');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
