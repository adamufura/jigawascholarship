-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 07:18 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jigawascholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$EXmv0xJAu8jQWEKwNzYtz./Vgl0WVCNMy4btAF8WDnhcMtZNcU.2m');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiaries`
--

CREATE TABLE `beneficiaries` (
  `id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ref_id` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'In Review',
  `payment` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`id`, `email`, `ref_id`, `status`, `payment`, `remark`, `start_date`, `expiry_date`) VALUES
(1, 'nas@gmail.com', '8f14e45fceea167a5a36', 'In Review', '', '', '0000-00-00', '0000-00-00'),
(2, 'adam@gmail.com', 'eccbc87e4b5ce2fe2830', 'Awarded', '700,000', 'Congrats, Adam.', '2022-02-21', '2023-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `indigene` text NOT NULL,
  `ssce` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `email`, `indigene`, `ssce`) VALUES
(1, 'nas@gmail.com', '../documents/indigene36660e59856b4de58a219bcf4e27eba3.pdf', '../documents/ssce3416a75f4cea9109507cacd8e2f2aefc.docx'),
(2, 'adam@gmail.com', '../documents/indigeneb6f0479ae87d244975439c6124592772.docx', '../documents/ssce59c33016884a62116be975a9bb8257e3.docx');

-- --------------------------------------------------------

--
-- Table structure for table `education_history`
--

CREATE TABLE `education_history` (
  `id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `primary_education` varchar(200) NOT NULL,
  `primary_date` date NOT NULL,
  `secondary_education` varchar(200) NOT NULL,
  `secondary_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_history`
--

INSERT INTO `education_history` (`id`, `email`, `primary_education`, `primary_date`, `secondary_education`, `secondary_date`) VALUES
(1, 'nas@gmail.com', 'Kaduna Children School', '2022-02-17', 'DEmonstration Secondary School Zaria', '2022-03-03'),
(2, 'adam@gmail.com', 'Gombe High School', '2022-02-03', 'FSC Sokoto', '2022-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `school` varchar(200) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`id`, `email`, `school`, `department`) VALUES
(1, 'nas@gmail.com', 'Alqalam University Katsina', 'Computer Sceince'),
(2, 'adam@gmail.com', 'AUK', 'Software Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `state` varchar(15) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'assets/images/avatars/avatar.png	',
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `phone`, `sex`, `marital_status`, `state`, `lga`, `ward`, `avatar`, `password`) VALUES
(1, 'nas@gmail.com', 'Nasir', 'El Rufai', '081234556767889', 'Male', 'Single', 'Kaduna', 'Zaria', 'ABU', 'assets/images/avatars/avatar.png	', '$2y$10$mdb.6YjT8mLB20Y9ZsdG0eXhEXtaGS5uLe5aGjVQuJpnMAaNqZj8i'),
(2, 'adam@gmail.com', 'Adamu', 'Suleiman', '08166644083', 'Male', 'select', 'Gombe', 'Gombe City', 'Pantami', 'assets/images/avatars/adam@gmail.com.jpg', '$2y$10$jsHlkpWrruj47UHWqzDhI.gNBjRLz0ygaSBIlhniUMod1VQHZtcTW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_history`
--
ALTER TABLE `education_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education_history`
--
ALTER TABLE `education_history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `institution`
--
ALTER TABLE `institution`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
