-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 05:44 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `real_estate`
--

CREATE TABLE `real_estate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `monthly_charges` float NOT NULL,
  `images` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `access` varchar(50) NOT NULL,
  `floor_space` float NOT NULL,
  `utility` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `real_estate`
--

INSERT INTO `real_estate` (`id`, `name`, `monthly_charges`, `images`, `address`, `access`, `floor_space`, `utility`, `description`) VALUES
(1, 'Property 1', 18000, '1.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Agrabad', 'Access info', 1600, 'Utility info', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(2, 'Property 2', 600, '2.jpg,a.jpg,b.jpg,c.jpg', 'Road no: 01,House no: 56,Prosanti R/A,Cornelhat,Ch', 'Access info', 1600, 'Utility info', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(3, 'Property 3', 18000, '3.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Road no: 01,House no: 56,Prosanti R/A,Cornelhat,Ch', 'Access info', 1600, 'Utility info', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(4, 'Property 4', 18000, '4.jpg,a.jpg,b.jpg,c.jpg,d.jpg', 'Road no: 01,House no: 56,Prosanti R/A,Cornelhat,Ch', 'Access info', 1600, 'Utility info', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(5, 'Property 5', 30000, '5.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Road no: 01,House no: 56,Prosanti R/A,Cornelhat,Ch', 'Access info', 1600, 'Utility info', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(6, 'Property 6', 18000, '6.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Road no: 01,House no: 56,Prosanti R/A,Cornelhat,Ch', 'Access info', 1600, 'Utility info', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(7, 'Property 7', 18000, '7.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Road no: 01,House no: 56,Prosanti R/A,Cornelhat,Ch', 'Access info', 1600, 'Utility info', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(8, 'Property 8', 18000, '8.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Road no: 01,House no: 56,Prosanti R/A,Cornelhat,Ch', 'Access info', 1600, 'Utility info', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(9, 'Property 9', 5000, '9.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Road no: 01,House no: 56,Prosanti R/A,Cornelhat,Ch', 'Access info', 1600, 'Utility info', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. '),
(10, 'Property 10', 8000, '10.jpg,a.jpg,b.jpg,c.jpg,d.jpg,e.jpg,f.jpg', 'Road no: 01,House no: 56,Prosanti R/A,Cornelhat,Ch', 'Access info', 1600, 'Utility info', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `real_estate`
--
ALTER TABLE `real_estate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `real_estate`
--
ALTER TABLE `real_estate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
