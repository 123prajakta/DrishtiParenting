-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 05:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drishtidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'Prajakta Patil', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `audiocd`
--

CREATE TABLE `audiocd` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sno`, `name`, `language`, `number`, `price`) VALUES
(1, 'Dot Cards(For 0 to 3 Months)', 'cards', 30, 500),
(3, 'Flash Card(0 to 3 Months)', 'Cards', 30, 500),
(1, 'Dot Cards(For 0 to 3 Months)', 'cards', 30, 500),
(1, 'Dot Cards(For 0 to 3 Months)', 'cards', 30, 500),
(1, 'Dot Cards(For 0 to 3 Months)', 'cards', 30, 500);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `radio1` text NOT NULL,
  `radio2` text NOT NULL,
  `radio3` text NOT NULL,
  `radio4` text NOT NULL,
  `radio5` text NOT NULL,
  `feed` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fname`, `phone`, `email`, `radio1`, `radio2`, `radio3`, `radio4`, `radio5`, `feed`) VALUES
(3, 'Prajakta', '7756595184', 'email', 'Good', 'Good', 'Excellent', 'Excellent', 'Excellent', 'Excellent overall Experience.'),
(4, 'Priyanka', '7894561235', 'priy@gmail.com', 'Good', 'Good', 'Excellent', 'Excellent', 'Excellent', 'very nice .'),
(5, 'Tanuja Mahato', '7756595184', 'tanu24665@gmail.com', 'Excellent', 'Excellent', 'Excellent', 'Good', 'Excellent', 'Amazing Sessions conducted and wonderful Teaching /Learning Process.'),
(6, 'Srishti Cheetri', '7894561235', 'sris1cheetri@gmail.com', 'Good', 'Excellent', 'Good', 'Good', 'Good', 'We enjoyed the teaching .Happy Parenting.'),
(7, 'Prajakta Patil', '9954525184', 'p@gmail.com', 'Good', 'Excellent', 'Good', 'Excellent', 'Excellent', 'Overall experience is good.'),
(8, 'Prajakta Patil', '9954525184', 'p@gmail.com', 'Good', 'Excellent', 'Good', 'Excellent', 'Excellent', 'Overall experience is good.');

-- --------------------------------------------------------

--
-- Table structure for table `followup`
--

CREATE TABLE `followup` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dos` date NOT NULL,
  `brief` varchar(300) NOT NULL,
  `implement` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `understanding` varchar(500) NOT NULL,
  `feel` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `followup`
--

INSERT INTO `followup` (`id`, `fname`, `dos`, `brief`, `implement`, `email`, `topic`, `understanding`, `feel`) VALUES
(1, 'Prajakta', '2021-04-18', ',jhh', 'sn,shh', 'prajakta2@gmail.com', 'n,nwjhkhj', 'jfdbhkh', 'kjfkgkw'),
(2, 'Prajakta Patil', '2021-04-20', 'Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class.', 'Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class', 'prajaktapatil@gmail.com', 'Garbhasanskar ', 'Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class', 'Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class'),
(3, 'Prajakta Patil ', '2021-04-21', 'Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class', 'Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class', 'p@gmail.com', 'Garbhasanskar ', 'Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class', 'Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class'),
(4, 'Prajakta Patil ', '2021-04-20', 'Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class', 'Drishti Parenting ISP The Art Of Parenting & Garbhasanskar ClassDrishti Parenting ISP The Art Of Parenting & Garbhasanskar ClassDrishti Parenting ISP The Art Of Parenting & Garbhasanskar Class', 'p@gmail.com', 'Garbhasanskar ', 'Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class', 'Drishti Parenting ISP The Art Of Parenting & Garbhasanskar Class');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `picsource` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`picsource`) VALUES
('gallery/IMG_20190130_130613.jpg'),
('gallery/IMG_20190130_130749.jpg'),
('gallery/IMG_20190130_130752.jpg'),
('gallery/IMG_20190130_124006.jpg'),
('gallery/IMG_20190130_124341.jpg'),
('gallery/IMG_20190130_122023.jpg'),
('gallery/IMG_20190130_131701.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`sno`, `name`, `language`, `number`, `price`) VALUES
(1, 'Dot Cards(For 0 to 3 Months)', 'cards', 30, 500),
(2, 'Dot Cards(3 and Above)', 'Cards', 111, 1300),
(3, 'Flash Card(0 to 3 Months)', 'Cards', 30, 500),
(4, 'Flash Cards (3 and above)Set-1', 'English', 220, 1100),
(5, 'Flash Cards (3 and above)Set-2', 'English', 500, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notify` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notify`) VALUES
(2, 'This is to inform that soon we are going to start our new batch from next month.'),
(5, 'Please register with the google form given in Registration form.'),
(6, 'Soon the Demo Session are going to be organize stay tuned.');

-- --------------------------------------------------------

--
-- Table structure for table `parentsbook`
--

CREATE TABLE `parentsbook` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `physical`
--

CREATE TABLE `physical` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `security` varchar(255) NOT NULL,
  `answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `password`, `cpassword`, `gender`, `email`, `phone`, `security`, `answer`) VALUES
('Anjili', 'Gupta', '111111', '111111', 'female', 'anjili@gmail.com', 7894561235, 'What is your Pet Name?', 'goddie'),
('Anjum', 'Sharma', '123123', '123123', 'female', 'anjum@gmail.com', 1451452365, 'What is your Pet Name?', 'puppy'),
('Prajakta', 'Patil', '111111', '111111', 'female', 'p@gmail.com', 7894561235, 'What is your Pet Name?', 'doggy'),
('Prajakta', 'Patil', '123123', '123123', 'female', 'patil@gmail.com', 7756595184, 'What is your Pet Name?', 'chester'),
('Ritu', 'Raj', '123456', '123456', 'female', 'rituraj@gmail.com', 7894561235, 'What is your Pet Name?', 'chester');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `experience` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `experience`) VALUES
(1, 'Prajakta', 'prajaktapatil@gmail.com', 'Excellent Sessions Conducted.'),
(3, 'Tanuja Mahato', 'tanu24665@gmail.com', 'Overall Wonderful Experience.'),
(5, 'Prajakta Patil ', 'p@gmail.com', 'Wonderful Experience.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `audiocd`
--
ALTER TABLE `audiocd`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followup`
--
ALTER TABLE `followup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parentsbook`
--
ALTER TABLE `parentsbook`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `physical`
--
ALTER TABLE `physical`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audiocd`
--
ALTER TABLE `audiocd`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `followup`
--
ALTER TABLE `followup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parentsbook`
--
ALTER TABLE `parentsbook`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physical`
--
ALTER TABLE `physical`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
