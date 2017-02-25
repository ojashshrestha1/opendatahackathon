-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2017 at 10:15 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `allhospital_list`
--

CREATE TABLE IF NOT EXISTS `allhospital_list` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `District` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `allhospital_list`
--

INSERT INTO `allhospital_list` (`id`, `name`, `location`, `District`) VALUES
(1, 'Ayurvedic Hospital', 'Nardevi', 'ktm'),
(2, 'B & B Hospital', 'Gwarko', 'ktm'),
(3, 'Bankali Hospital', 'Gaushala', 'ktm'),
(4, 'Bhaktapur Hospital', 'Dudhpati, Bhaktapur', 'Bhaktapur'),
(5, 'Bir Hospital', 'Tundikhel', 'ktm'),
(6, 'Nepal Police Hospital', 'Maharajganj', 'ktm'),
(7, 'B.P. Koirala Institute of Health Sciences', 'Dharan', 'sunsari'),
(8, 'Capital Hospital', 'Putalisadak', 'ktm'),
(9, 'Chhetrapati Free Hospital', 'Chhetrapati', 'ktm'),
(10, 'Devi Ma Kunja Ayurvedic Hospital', 'Bhaktapur', 'Bhaktapur'),
(11, 'Dr. Iwamura Memorial Hospital And Research Centre', 'Bhaktapur', 'Bhaktapur');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_type`
--

CREATE TABLE IF NOT EXISTS `hospital_type` (
  `type_id` int(30) NOT NULL AUTO_INCREMENT,
  `Public` varchar(200) NOT NULL,
  `Community` varchar(200) NOT NULL,
  `Other health facility` varchar(200) NOT NULL,
  `Non-Public health facility` varchar(200) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hospital_type`
--

INSERT INTO `hospital_type` (`type_id`, `Public`, `Community`, `Other health facility`, `Non-Public health facility`) VALUES
(1, 'BNB hospital', 'loksewa community hospital', 'polio drop by samaj sudar', 'WHO'),
(2, 'kjbdd', 'sjdfbg', 'skjb', 'kjsf');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `Sn` int(30) NOT NULL AUTO_INCREMENT,
  `Zone` varchar(200) NOT NULL,
  `public` int(30) NOT NULL,
  `community` int(30) NOT NULL,
  `other health facility` int(30) NOT NULL,
  `non public health facility` int(30) NOT NULL,
  PRIMARY KEY (`Sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Sn`, `Zone`, `public`, `community`, `other health facility`, `non public health facility`) VALUES
(1, 'Eastern', 50, 20, 14, 22),
(2, 'Western', 12, 23, 33, 11),
(3, 'Mid-Western', 43, 76, 88, 44),
(4, 'Far-Western', 62, 22, 33, 43);

-- --------------------------------------------------------

--
-- Table structure for table `public_category`
--

CREATE TABLE IF NOT EXISTS `public_category` (
  `Pcat_id` int(200) NOT NULL AUTO_INCREMENT,
  `Hospitals` varchar(200) NOT NULL,
  `Primary health care` varchar(200) NOT NULL,
  `Health post` varchar(200) NOT NULL,
  `Sub_healthpost` varchar(200) NOT NULL,
  `Outreach_clinic` varchar(200) NOT NULL,
  `EPI_clinic` varchar(200) NOT NULL,
  PRIMARY KEY (`Pcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `public_category`
--

INSERT INTO `public_category` (`Pcat_id`, `Hospitals`, `Primary health care`, `Health post`, `Sub_healthpost`, `Outreach_clinic`, `EPI_clinic`) VALUES
(1, 'om hospital', 'lok primary health care', 'lok Health pos', 'lok sub', 'lok outreach', 'lok epi');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `public_category`
--
ALTER TABLE `public_category`
  ADD CONSTRAINT `public_category_ibfk_1` FOREIGN KEY (`Pcat_id`) REFERENCES `hospital_type` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
