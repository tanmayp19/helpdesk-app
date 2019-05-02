-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 08:10 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_uname` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_uname`, `admin_pass`) VALUES
(1, 'admin', 'admin'),
(3, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `tkt_id` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(30) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` text NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'NEW',
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `tkt_id`, `Name`, `Email`, `Mobile`, `Subject`, `Message`, `Status`, `Timestamp`) VALUES
(1, 'TKT-20181007-163155', 'Tanmay', 'tanmay.pvp.17@gmail.com', '(813) 849-0292', 'This Product is Not working', 'Lorem Ipsumï¿½is simply dummy text of the printing and typesetting industry.', 'CLOSED', '2018-10-07 16:31:55'),
(2, 'TKT-20181007-163155', 'Kunal', 'bmorrow@sbcglobal.net', '(904) 241-6862', 'When will the issue Be resolved', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley ', 'NEW', '2018-10-07 16:31:55'),
(3, 'TKT-20181007-163155', 'Anna', 'neonatus@yahoo.com', '(257) 420-0791', 'Urgent ', 'e content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opp', 'NEW', '2018-10-07 16:31:55'),
(4, 'TKT-20181007-163155', 'Anne', 'seebs@hotmail.com', '(828) 819-4834', 'That Product is Broken', 'odel text, and a search for \'lorem ipsum\' will uncover many web sites s', 'PENDING', '2018-10-07 16:31:55'),
(5, 'TKT-20181007-163155', 'Bernadette', 'storerm@att.net', '(485) 946-3173', 'Help Needed', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC', 'PENDING', '2018-10-07 16:31:55'),
(6, 'TKT-20181007-163155', 'Carol', 'nelson@msn.com', '(285) 487-9172', 'Return Product', 'There are many variations of passages of Lorem Ipsum available, but the majority ha', 'NEW', '2018-10-07 16:31:55'),
(7, 'TKT-20181007-163155', 'Caroline', 'chinthaka@msn.com', '(417) 917-0996', 'Replace Product', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', 'NEW', '2018-10-07 16:31:55'),
(8, 'TKT-20181007-163155', 'Dylan', 'burniske@icloud.com', '(442) 616-6270', 'That Product is Broken', 'ï¿½to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'CLOSED', '2018-10-07 16:31:55'),
(9, 'TKT-20181007-163155', 'Edward', 'drezet@me.com', '(902) 604-4049', 'Help Needed', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'NEW', '2018-10-07 16:31:55'),
(10, 'TKT-20181007-163155', 'Eric', 'roamer@me.com', '(661) 960-5096', 'Return Product', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyï¿½', 'PENDING', '2018-10-07 16:31:55'),
(11, 'TKT-20181007-163155', 'Jacob', 'ryanshaw@optonline.net', '(476) 743-4098', 'Replace Product', 'e content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opp', 'NEW', '2018-10-07 16:31:55'),
(12, 'TKT-20181007-163155', 'Jake', 'sfoskett@optonline.net', '(774) 831-0496', 'This Product is Not working', 'odel text, and a search for \'lorem ipsum\' will uncover many web sites s', 'PENDING', '2018-10-07 16:31:55'),
(13, 'TKT-20181007-163155', 'James', 'larry@comcast.net', '(406) 587-6983', 'When will the issue Be resolved', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC', 'PENDING', '2018-10-07 16:31:55'),
(14, 'TKT-20181007-163155', 'Jason', 'improv@aol.com', '(228) 737-9269', 'Urgent ', 'There are many variations of passages of Lorem Ipsum available, but the majority ha', 'PENDING', '2018-10-07 16:31:55'),
(15, 'TKT-20181007-163155', 'Joe', 'ubergeeb@comcast.net', '(943) 633-7637', 'Help Needed', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', 'NEW', '2018-10-07 16:31:55'),
(16, 'TKT-20181007-163155', 'Sagar', 'bartlett@yahoo.ca', '(405) 352-4303', 'Return Product', 'ï¿½to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'CLOSED', '2018-10-07 16:31:55'),
(17, 'TKT-20181007-163155', 'Michael', 'pplinux@verizon.net', '(682) 858-5769', 'Replace Product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'NEW', '2018-10-07 16:31:55'),
(18, 'TKT-20181007-163155', 'Nathan', 'mhoffman@att.net', '(554) 271-2394', 'This Product is Not working', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley ', 'NEW', '2018-10-07 16:31:55'),
(19, 'TKT-20181007-163155', 'Neil', 'cumarana@hotmail.com', '(928) 845-0011', 'When will the issue Be resolved', 'e content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opp', 'NEW', '2018-10-07 16:31:55'),
(20, 'TKT-20181007-163155', 'Piers', 'monkeydo@aol.com', '(919) 599-7229', 'Urgent ', 'odel text, and a search for \'lorem ipsum\' will uncover many web sites s', 'CLOSED', '2018-10-07 16:31:55'),
(21, 'TKT-20181007-163155', 'Richard', 'dprice@msn.com', '(880) 972-1654', 'Help Needed', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC', 'NEW', '2018-10-07 16:31:55'),
(22, 'TKT-20181007-163155', 'Robert', 'khris@mac.com', '(503) 663-9460', 'Return Product', 'There are many variations of passages of Lorem Ipsum available, but the majority ha', 'NEW', '2018-10-07 16:31:55'),
(23, 'TKT-20181007-163155', 'Simon', 'qmacro@comcast.net', '(686) 318-0222', 'Replace Product', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', 'NEW', '2018-10-07 16:31:55'),
(24, 'TKT-20181007-163155', 'Stephen', 'solomon@verizon.net', '(453) 935-7580', 'This Product is Not working', ' to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'NEW', '2018-10-07 16:31:55'),
(25, 'TKT-20181007-163155', 'Steven', 'mccurley@msn.com', '(986) 970-7116', 'When will the issue Be resolved', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC', 'NEW', '2018-10-07 16:31:55'),
(26, 'TKT-20181007-163155', 'Victor', 'maikelnai@icloud.com', '(495) 517-4710', 'Urgent ', 'There are many variations of passages of Lorem Ipsum available, but the majority ha', 'NEW', '2018-10-07 16:31:55'),
(27, 'TKT-20181007-163155', 'Warren', 'isaacson@yahoo.com', '(853) 739-7303', 'Help Needed', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', 'NEW', '2018-10-07 16:31:55'),
(28, 'TKT-20181007-163155', 'William', 'rupak@comcast.net', '(884) 762-9166', 'Return Product', ' to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'NEW', '2018-10-07 16:31:55'),
(29, 'TKT-20181007072430', 'Kunal', 'Kunal@something.com', '(473) 710-2864', 'This is not working ', 'adsfdsfsafsdsd', 'PENDING', '2018-10-07 17:24:30'),
(30, 'TKT-20181007072736', 'Vaibhav', 'vb@vb.com', '9292929929', 'pubg not working', 'I cant play pubg on my mobile', 'CLOSED', '2018-10-07 17:27:36'),
(31, 'TKT-20181007073313', 'Bill', 'bill@bill.com', '(205) 317-9921', 'That is not working', 'asdasdsadasdasdasdasdasdsad', 'NEW', '2018-10-07 17:33:13'),
(32, 'TKT-20181007074502', 'John', 'john@something.com', '(453) 200-8698', 'Resolve this issue ASAP', 'asdasdsadasdasdsadaasxcascacxcdcxcxzcccxczxz', 'NEW', '2018-10-07 17:45:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
