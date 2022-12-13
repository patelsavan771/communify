-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220622.7403cffab4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 10:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `communify`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `name`, `email`, `password`) VALUES
(18, 'Savan Patel', 'patelsavan771@gmail.com', '912ec803b2ce49e4a541068d495ab570'),
(19, 'Harsh Nishad', 'harsh22nishad@gmail.com', '912ec803b2ce49e4a541068d495ab570'),
(20, 'Kevin Vagdoda', 'kd@gmail.com', '912ec803b2ce49e4a541068d495ab570'),
(21, 'marmik', 'marmik@gmail.com', '912ec803b2ce49e4a541068d495ab570'),
(22, 'Gareeb', 'gareeb771@gmail.com', '912ec803b2ce49e4a541068d495ab570');

-- --------------------------------------------------------

--
-- Table structure for table `communities`
--

CREATE TABLE `communities` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `url` varchar(50) NOT NULL,
  `tagline` varchar(100) NOT NULL,
  `membership` varchar(10) NOT NULL,
  `visibility` varchar(20) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `communities`
--

INSERT INTO `communities` (`id`, `name`, `url`, `tagline`, `membership`, `visibility`, `category`) VALUES
(13, 'Technical Spain', 'ts.fam.com', 'free learning', 'open', 'discoverable', 'coding, design, hacking');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `date` varchar(20) NOT NULL,
  `body` varchar(300) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author`, `email`, `date`, `body`, `likes`) VALUES
(13, 'Savan Patel', 'patelsavan771@gmail.com', '16/05/2022 ,06:12 am', 'Hello Guys, Welcome to our community.\r\n(first post ever)', 0),
(14, 'Savan Patel', 'patelsavan771@gmail.com', '16/05/2022 ,06:13 am', 'you can share and discuss your ideas and queries.', 0),
(15, 'Harsh Nishad', 'harsh22nishad@gmail.com', '16/05/2022 ,06:14 am', 'hey guys, Nice to be here....', 0),
(16, 'Savan Patel', 'patelsavan771@gmail.com', '16/05/2022 ,06:18 am', 'hello harsh, you are welcome here...', 0),
(17, 'Harsh Nishad', 'harsh22nishad@gmail.com', '16/05/2022 ,06:18 am', 'thank you :)', 0),
(18, 'Kevin Vagdoda', 'kd@gmail.com', '16/05/2022 ,06:19 am', 'Good Morning Guys!!!\r\nAny one know about PHP feed, I need it in my project.🙌', 0),
(19, 'marmik', 'marmik@gmail.com', '16/05/2022 ,08:32 am', 'hello', 0),
(20, 'Gareeb', 'gareeb771@gmail.com', '24/05/2022 ,05:28 am', 'good morning ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT ' ',
  `email` varchar(80) NOT NULL,
  `phone` varchar(15) NOT NULL DEFAULT '0',
  `img_path` varchar(50) NOT NULL DEFAULT 'uploads/default.jpg',
  `about` varchar(200) NOT NULL DEFAULT ' ',
  `expertise` varchar(100) NOT NULL DEFAULT ' ',
  `industries` varchar(100) NOT NULL DEFAULT '.',
  `linkedin` varchar(100) NOT NULL DEFAULT ' ',
  `github` varchar(100) NOT NULL DEFAULT '.',
  `tweeter` varchar(100) NOT NULL DEFAULT '.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `name`, `email`, `phone`, `img_path`, `about`, `expertise`, `industries`, `linkedin`, `github`, `tweeter`) VALUES
(8, 'Savan Patel', 'patelsavan771@gmail.com', '9874563210', 'uploads/6281ced6eaa495.74098851.jpg', ' 3rd year CSE student', ' Java, PHP', 'IT, Design', ' ', '.', '.'),
(9, 'Harsh Nishad', 'harsh22nishad@gmail.com', '9726090948', 'uploads/6281d05ad0c330.70186604.jpeg', ' Learner', ' Python', 'IOT', ' ', '.', '.'),
(10, 'Kevin Vagdoda', 'kd@gmail.com', '9624993519', 'uploads/6281d136424fc6.36564499.jpeg', ' King of Chemical', ' Chemical, Organics', 'Chemical, Pharma, IT', ' ', '.', '.'),
(11, 'marmik', 'marmik@gmail.com', '0', 'uploads/default.jpg', ' level 3 tester', ' ', '.', ' ', '.', '.'),
(12, 'Gareeb', 'gareeb771@gmail.com', '4568', 'uploads/628c5111c57608.72214878.jpg', ' level 3 tester', ' IT, CAD', '.IT, MECH', ' ', '.', '.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `communities`
--
ALTER TABLE `communities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



