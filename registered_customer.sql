-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2015 at 05:08 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registered_customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
`id_no` int(150) NOT NULL,
  `date_reg` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id_no`, `date_reg`, `fname`, `mname`, `sname`, `position`, `email`, `contact`, `username`, `password`) VALUES
(1, '2015-08-29', 'kams', 'corpuz', 'samonte', 'employee', 'kamiljadecorpuz@yahoo.com', '09076500907', 'kams', '123'),
(4, '2015-08-22', 'paul', 'abubo', 'samonte', 'customer', 'gm_zeus14@yahoo.com', '09485567458', 'paul', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `accounts_emp`
--

CREATE TABLE IF NOT EXISTS `accounts_emp` (
`id_no` int(150) NOT NULL,
  `date_reg` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20150003 ;

--
-- Dumping data for table `accounts_emp`
--

INSERT INTO `accounts_emp` (`id_no`, `date_reg`, `fname`, `mname`, `sname`, `position`, `email`, `contact`, `username`, `password`) VALUES
(20150001, '2015-08-29', 'kamil jade', 'aquino', 'corpuz', 'employee', 'kamssamonte@yahoo.com', '09076500907', 'kamil', '123456'),
(20150002, '2015-08-29', 'kk', 'kk', 'kk', 'employee', 'kamiljadecorrrrrrpuz@yahoo.com', '111111111111', 'kk', 'kk');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(159) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2015002 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `code`) VALUES
(2015001, 'admin_2015');

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE IF NOT EXISTS `code` (
`id` int(150) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`id`, `code`) VALUES
(1, 'pvr_emp_2015');

-- --------------------------------------------------------

--
-- Table structure for table `cottages`
--

CREATE TABLE IF NOT EXISTS `cottages` (
`id` int(150) NOT NULL,
  `Medium_Cottage` int(20) NOT NULL,
  `Small_Cottage` int(20) NOT NULL,
  `Twin_Exotic` int(20) NOT NULL,
  `Single_Huts_Exotic` int(20) NOT NULL,
  `pavillion_day` int(20) NOT NULL,
  `pavillion_night` int(20) NOT NULL,
  `cottage_bbq_big` int(20) NOT NULL,
  `cottage_bbq_small` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cottages`
--

INSERT INTO `cottages` (`id`, `Medium_Cottage`, `Small_Cottage`, `Twin_Exotic`, `Single_Huts_Exotic`, `pavillion_day`, `pavillion_night`, `cottage_bbq_big`, `cottage_bbq_small`) VALUES
(1, 6, 4, 2, 3, 1, 1, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
`id` int(150) NOT NULL,
  `date_today` varchar(50) NOT NULL,
  `datetime_today` varchar(50) NOT NULL,
  `id_resort` varchar(50) NOT NULL,
  `encoder` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `date_transaction` varchar(50) NOT NULL,
  `from_time` varchar(50) NOT NULL,
  `to_time` varchar(50) NOT NULL,
  `extended_hours` varchar(50) NOT NULL,
  `Medium_Cottage` int(50) NOT NULL,
  `Small_Cottage` int(50) NOT NULL,
  `Twin_Exotic` int(50) NOT NULL,
  `Single_Huts_Exotic` int(50) NOT NULL,
  `pavillion_day` int(50) NOT NULL,
  `pavillion_night` int(50) NOT NULL,
  `cottage_bbq_small` int(50) NOT NULL,
  `cottage_bbq_big` int(50) NOT NULL,
  `add_person_promo` int(50) NOT NULL,
  `payprocess` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `adult` int(50) NOT NULL,
  `kids` int(50) NOT NULL,
  `total_entrants` int(50) NOT NULL,
  `tot_ent` int(50) NOT NULL,
  `tot_pay` int(50) NOT NULL,
  `cash_tendered` int(50) NOT NULL,
  `client_change` int(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `date_today`, `datetime_today`, `id_resort`, `encoder`, `status`, `fname`, `mname`, `sname`, `contact`, `date_transaction`, `from_time`, `to_time`, `extended_hours`, `Medium_Cottage`, `Small_Cottage`, `Twin_Exotic`, `Single_Huts_Exotic`, `pavillion_day`, `pavillion_night`, `cottage_bbq_small`, `cottage_bbq_big`, `add_person_promo`, `payprocess`, `payment`, `adult`, `kids`, `total_entrants`, `tot_ent`, `tot_pay`, `cash_tendered`, `client_change`) VALUES
(1, '2015-08-22', '1440247110', 'pvr', 'customer', 'pending', 'kams', 'corpuz', 'samonte', '09076500907', '2015-08-06', '00:07', '12:00', ' ', 1, 1, 2, 2, 1, 1, 0, 0, 0, 'On-Process', 'Installment', 0, 0, 0, 0, 15200, 0, 0),
(2, '2015-08-22', '1440254219', 'pvr', 'customer', 'pending', 'kams', 'corpuz', 'samonte', '09076500907', '2015-08-22', '23:00', '06:00', ' ', 2, 0, 0, 0, 0, 0, 0, 0, 0, 'On-Process', 'Installment', 5, 6, 0, 0, 1000, 0, 0),
(8, '2015-08-24', '1440409981', 'pvr', 'customer', 'pending', 'kams', 'corpuz', 'samonte', '09076500907', '2015-09-04', '7:30', '18:00', '', 2, 0, 0, 0, 0, 0, 0, 0, 0, 'On-Process', 'Installment', 7, 7, 14, 1400, 2400, 0, 0),
(9, '2015-08-27', '1440687924', 'pvr', 'customer', 'pending', 'kams', 'corpuz', 'samonte', '09076500907', '2015-09-05', '18:00', '23:00', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 'On-Process', 'Installment', 6, 6, 12, 1440, 1940, 0, 0),
(11, '2015-08-27', '1440691748', 'pvr', 'employee', 'pending', 'jayzel', 'samalea', 'brin', '093248858858', '2015-08-14', '13:00', '23:30', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 'On-Process', 'Installment', 7, 5, 12, 2720, 24170, 0, 0),
(12, '2015-08-27', '1440693231', 'pvr', '20150001 - corpuz', 'pending', 'd', 'd', 'd', 'd', '2015-08-28', '9:30', '21:30', '', 2, 1, 1, 1, 1, 1, 2, 1, 2, 'On-Process', 'Installment', 4, 4, 8, 1760, 26160, 30000, 0),
(13, '2015-08-27', '1440694519', 'pvr', '20150001 - corpuz', 'pending', 'y', 'y', 'y', 'y', '2015-08-31', '13:00', '23:30', '', 0, 0, 0, 0, 0, 0, 0, 0, 11, 'Walk-In', 'Full Payment', 5, 7, 12, 0, 2200, 2500, 300),
(14, '2015-08-29', '1440869132', 'pvr', '20150001 - corpuz', 'succesful', 'y', 'y', 'y', 'y', '2015-08-31', '7:30', '18:00', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Walk-In', 'Full Payment', 1, 1, 2, 200, 21650, 22000, 350),
(15, '2015-08-30', '1440936549', 'pvr', '2015001 - admin_2015', 'pending', 'kams', 'corpuz', 'samonte', '09076500907', '2015-08-06', '18:00', '23:00', '', 2, 2, 1, 2, 1, 1, 2, 3, 10, 'Walk-In', 'Full Payment', 12, 14, 26, 3080, 38630, 40000, 1370);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
 ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `accounts_emp`
--
ALTER TABLE `accounts_emp`
 ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cottages`
--
ALTER TABLE `cottages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
MODIFY `id_no` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `accounts_emp`
--
ALTER TABLE `accounts_emp`
MODIFY `id_no` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20150003;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(159) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2015002;
--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
MODIFY `id` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cottages`
--
ALTER TABLE `cottages`
MODIFY `id` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
MODIFY `id` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
