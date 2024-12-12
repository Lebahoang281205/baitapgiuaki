-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 02:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsv_lebahoang`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_student`
--

CREATE TABLE `table_student` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` int(20) NOT NULL,
  `hometown` varchar(255) NOT NULL,
  `level_id` int(20) NOT NULL,
  `group_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_student`
--

INSERT INTO `table_student` (`id`, `full_name`, `dob`, `gender`, `hometown`, `level_id`, `group_id`) VALUES
(1, 'Lê Bá Hoàng', '2024-12-11', 1, 'Ha Noi', 3, 2),
(2, 'Đặng Thành Vinh', '2024-12-10', 1, 'Ha Noi', 3, 2),
(3, 'Nguyễn Phúc Lộc', '2024-12-03', 1, 'Ha Noi', 3, 2),
(4, 'Nguyễn Quang Thành', '2024-12-05', 1, 'Ha Noi', 3, 2),
(5, 'Lê Văn Nam', '2024-12-09', 1, 'Ha Noi', 3, 2),
(6, 'Trần Thế Vũ', '2024-12-08', 1, 'Ha Noi', 3, 2),
(7, 'Nguyễn Duy Minh', '2024-12-08', 1, 'Ha Noi', 3, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
