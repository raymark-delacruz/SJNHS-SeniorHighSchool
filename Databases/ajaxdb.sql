-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 03:21 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajaxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `chat_person_name` varchar(100) NOT NULL,
  `chat_value` varchar(100) NOT NULL,
  `chat_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `chat_person_name`, `chat_value`, `chat_time`) VALUES
(1, 'Connie', 'hi', '13:11:43'),
(2, 'Sir', 'hello', '13:13:41'),
(3, 'JoJo', 'par', '10:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(0, 'none'),
(7, 'Grade 7'),
(8, 'Grade 8'),
(9, 'Grade 9'),
(10, 'Grade 10'),
(11, 'Grade 11'),
(12, 'Grade 12');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(7) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rws` int(200) NOT NULL,
  `pagbasa` int(200) NOT NULL,
  `research` int(200) NOT NULL,
  `stat` int(200) NOT NULL,
  `perdev` int(200) NOT NULL,
  `physics` int(200) NOT NULL,
  `net` int(200) NOT NULL,
  `pe` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `name`, `rws`, `pagbasa`, `research`, `stat`, `perdev`, `physics`, `net`, `pe`) VALUES
(1, 'John Rico Bernardo', 70, 70, 70, 70, 70, 70, 70, 70),
(2, 'Raymark E. dela Cruz', 80, 81, 82, 83, 84, 85, 86, 87),
(3, 'John Vincent Dela Cruz', 99, 99, 99, 99, 99, 99, 100, 99);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_country` varchar(100) NOT NULL,
  `user_status` varchar(100) NOT NULL DEFAULT '0',
  `user_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_country`, `user_status`, `user_role`) VALUES
(1, 'Raymark', 'red@email.com', 'red', '11', '0', 'admin'),
(2, 'Renzo', 'renzo@email.com', 'renzo', '12', '0', 'student'),
(3, 'Marvin', 'marvin@email.com', 'marvin', '11', '0', 'student'),
(4, 'Romel', 'romel@email.com', 'romel', '11', '0', 'student'),
(5, 'Nervin', 'nervin@email.com', 'nervin', '11', '0', 'student'),
(6, 'Taichi', 'taichi@email.com', 'taichi', '11', '0', 'student'),
(7, 'John Vincent', 'jv@email.com', 'JV', '11', '0', 'student'),
(8, 'Sir', 'sir@email.com', 'sir', '0', '0', 'teacher'),
(9, 'Eldrin', 'eldrin@email.com', 'eldrin', '11', '0', 'student'),
(10, 'Rico', 'rico@email.com', 'rico', '11', '0', 'student'),
(11, 'John Marc', 'jm@email.com', 'jm', '11', '0', 'student'),
(12, 'Jienel', 'jienel@email.com', 'jienel', '11', '0', 'student'),
(13, 'Aj', 'aj@email.com', 'aj', '11', '0', 'student'),
(14, 'Bryan', 'bryan@email.com', 'panget', '11', '0', 'student'),
(15, 'Rence', 'rence@email.com', 'rence', '11', '0', 'student'),
(16, 'Jomar', 'jomar@email.com', 'jomar', '11', '0', 'student'),
(17, 'Connie', 'connie@email.com', 'ko', '11', '0', 'student'),
(18, 'JoJo', 'jojo@email.com', 'jojo', '12', '0', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `UX_Constraint` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
