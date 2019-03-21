-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2019 at 02:24 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fargomine`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

DROP TABLE IF EXISTS `balance`;
CREATE TABLE IF NOT EXISTS `balance` (
  `balance_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `balance_total` int(30) NOT NULL,
  PRIMARY KEY (`balance_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`balance_id`, `user_id`, `balance_total`) VALUES
(26, 19, 575);

-- --------------------------------------------------------

--
-- Table structure for table `escrow`
--

DROP TABLE IF EXISTS `escrow`;
CREATE TABLE IF NOT EXISTS `escrow` (
  `esID` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(60) NOT NULL,
  `esAmount` varchar(60) NOT NULL,
  `esDate` varchar(60) NOT NULL,
  `esStatus` varchar(60) NOT NULL,
  `esBlockChain` varchar(60) NOT NULL,
  `esBitcoin` varchar(60) NOT NULL,
  `esConfirm` varchar(60) NOT NULL DEFAULT 'Not Confirmed',
  PRIMARY KEY (`esID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `escrow`
--

INSERT INTO `escrow` (`esID`, `user_id`, `esAmount`, `esDate`, `esStatus`, `esBlockChain`, `esBitcoin`, `esConfirm`) VALUES
(9, '19', '2000', '1552648028', 'Selling', '33bVpw5mjkS4pQBB2srXYU5xeRxhs89vmc', '0.12810658467845  ', 'Not Confirmed'),
(10, '19', '2000', '1552910873', 'Not Sold', '33bVpw5mjkS4pQBB2srXYU5xeRxhs89vmc', '0.5019551151736  ', 'Not Confirmed'),
(11, '19', '5000', '1552910894', 'Not Sold', '33bVpw5mjkS4pQBB2srXYU5xeRxhs89vmc', '', 'Not Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `txID` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(6) NOT NULL,
  `txType` varchar(128) NOT NULL,
  `amount` varchar(24) NOT NULL,
  `time` varchar(60) DEFAULT NULL,
  `status` varchar(60) NOT NULL DEFAULT 'Pending',
  `roi` varchar(60) NOT NULL,
  `invested` varchar(60) NOT NULL,
  `admin_btc` varchar(60) NOT NULL,
  `expected_time` varchar(60) NOT NULL,
  `txComplete` varchar(60) NOT NULL,
  PRIMARY KEY (`txID`)
) ENGINE=MyISAM AUTO_INCREMENT=10249 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`txID`, `user_id`, `txType`, `amount`, `time`, `status`, `roi`, `invested`, `admin_btc`, `expected_time`, `txComplete`) VALUES
(10248, '19', 'Deposit', '500', '1552918230', 'Pending', '0.018772714985131497', '0.12515143323421', '1BoatSLRHtKNngkdXEeobR76b53LETtpyT', '1554127830', 'Admin BTC');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(60) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone_number` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(60) NOT NULL,
  `state` varchar(60) NOT NULL,
  `block_chain` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `dob` varchar(60) NOT NULL,
  `profile_pic_path` varchar(100) NOT NULL,
  `admin` int(3) NOT NULL DEFAULT '0',
  `status` varchar(60) NOT NULL DEFAULT 'new',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `surname`, `email`, `phone_number`, `gender`, `country`, `state`, `block_chain`, `password`, `dob`, `profile_pic_path`, `admin`, `status`) VALUES
(30, 'Paul', 'Breakthrough', 'test@gmail.com', '7053016947', 'male', 'NG', 'Choose One...', '123', '$2y$10$O3U3Mv/pO4l3sfhFaUz3POz.1YxwrdmVjV.SeUj1q5/DatDaOSvPm', 'none', 'uploads/dd0d8ea2e960d1e7fd3b746d0ca0727e51a53e501a977bbb29ddbe1b720ae805.jpeg', 0, 'new'),
(11, 'Breakthrough', 'Paul', 'paulbreakthrough@gmail.com', '08063123693', 'male', 'AF', 'Enugu', '33bVpw5mjkS4pQBB2srXYU5xeRxhs89vmc', '$2y$10$YM2zcG9QyZQmTNrpAEgm2OXUVZJDCewENeXDCgZYBsKmTFR4mw2zS', '03/05/2019', 'uploads/152691b3701cda98fb2757b28b457f7aa91816e66b4445a7dfff5fce9f9e8365.png', 1, 'old'),
(24, 'emmanuel', 'ikenna', 'stanfugy@gmail.com', '08063123693', 'male', 'AF', 'Enugu', '123456789', '$2y$10$MyWnklWOArBwzE7MQsmwEeTUKma9983ZmPSc8cLW15FoxQAmF42Aq', '03/08/2019', 'uploads/a7b0196e4bb7f3484562f355e7093fed57005b90f416add3643ddfccf9a5bc29.jpeg', 0, 'new'),
(23, 'Nkechi', 'Oko', 'okocomfortn@gmail.com', '08063123693', 'male', 'AF', 'Enugu', '123', '$2y$10$WsiRRd37hqb9Nk7fpCEzfunpwa6XxDWOx2aMItcY3G2zw8RVLDOmm', '03/08/2019', 'uploads/3c9585115bc8d9761fd20e7e8675e906616070939fe67884341705e7bf4f1412.jpeg', 0, 'new'),
(19, 'Innocent', 'Ikart', 'ikart@gmail.com', '08063123693', 'male', 'AF', 'Enugu', '33bVpw5mjkS4pQBB2srXYU5xeRxhs89vmc', '$2y$10$45zYuGIZv3O2/8aZ9zZ35e/5KrOI/8Bd45t0vaXQ99HJuOHdQGXcu', '03/08/2019', 'uploads/cb1285f6e8d593e3121a58bc94712224aaaf37fc32266ee18da90fe15a888d7d.jpeg', 0, 'new'),
(25, 'paul', 'alex', 'alex@gmail.com', '08063123693', 'male', 'AF', 'Enugu', '123', '$2y$10$9LDDETWjGsK1Fub/ShZudefUPEws64AEI6xGNvehb.OAxcoQ4TLN.', '03/09/2019', 'uploads/192acbfd7b4bd2b3e47c518b82cda25c1f3d794827e99641e9055df13ee2395d.jpeg', 0, 'new');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
