-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2016 at 11:08 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cas225`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `comment` longtext NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id`, `username`, `comment`, `datetime`) VALUES
(1, 'instructor', 'I hope you are finding how to work with databases as exciting as I do!', '2016-05-10 03:46:59'),
(2, 'student', 'I am a happy student, because I like my class!', '2016-05-10 03:46:59'),
(3, 'jjones', 'I am very excited to be creating an entry in your guestbook!', '2016-05-10 03:48:29'),
(4, 'ssmart', 'I am the smartest student in my class.', '2016-05-10 03:48:29'),
(6, 'jjones', 'What?!!', '2016-05-26 21:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `permissions` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `firstname`, `lastname`, `email`, `password`, `permissions`) VALUES
('instructor', 'Ron', 'Bekey', 'rbekey@pcc.edu', '789b49606c321c8cf228d17942608eff0ccc4171', 'admin'),
('jjones', 'Joe', 'Jones', 'jjones@email.com', '789b49606c321c8cf228d17942608eff0ccc4171', 'user'),
('ssmart', 'Sally', 'Smart', 'ssmart@email.com', '789b49606c321c8cf228d17942608eff0ccc4171', 'user'),
('student', 'Joshua', 'Boyan', 'joshua.boyan@pcc.edu', '789b49606c321c8cf228d17942608eff0ccc4171', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
