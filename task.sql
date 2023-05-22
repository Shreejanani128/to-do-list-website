-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 12:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `task` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `username`, `task`, `description`) VALUES
(1, 'admin', 'Arrange and Organize Meetings', 'No office can function without meetings. In fact, \"The Office\" cast spent much of their time meeting in the conference room. An important office duty is scheduling meetings, creating meeting agendas and documenting the meeting outcomes. '),
(2, 'user1', 'Perform Data Entry', 'It’s common to include data entry in the description of office duties that create a well-oiled machine. You can liken data entry with record keeping. '),
(3, 'user2', 'Oversee the Books', 'Tracking expenses and income is a critical office duty. Penn Foster College even offers a course in bookkeeping that teaches the basics about recording payments, depositing money and other bookkeeping tasks. Without the oversight of financial management, '),
(4, 'user3', 'Manage the Mail', 'Incoming mail may contain new orders, important contracts and other correspondence that is time-sensitive. Prompt response to inquiries is an important office duty. Managing the mail isn’t confined to snail mail. Email inquiries that come through a chat box or general email account may generate new leads and raise issues that need an immediate response.'),
(3, 'user2', 'Organizational tasks ', 'All types of administrative roles involve carrying out organizational tasks. Adapting to shifting and competing priorities with ease, and maintaining databases, filing systems, and emails is key to keeping any office running smoothly.   Here are the most common organizational skills and tasks associated with administrative jobs:  Maintaining multiple calendars  Setting appointments  Filing various documents and maintaining databases  Creating filing systems ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
