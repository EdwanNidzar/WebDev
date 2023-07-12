-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2023 at 01:03 PM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinecourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `duration` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `duration`) VALUES
(1, 'HTML Dasar', 'Seri mengenai bagaimana membuat website menggunakan bahasa HTML.', '13 Video'),
(2, 'CSS Dasar', 'Belajar CSS Dasar', '10 Video'),
(3, 'Belajar PHP untuk PEMULA', 'Belajar PHP Dasar', '25 Video');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
CREATE TABLE IF NOT EXISTS `materials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `courses_id` int NOT NULL,
  `title_material` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description_material` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `embed_link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_id` (`courses_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `courses_id`, `title_material`, `description_material`, `embed_link`) VALUES
(1, 1, 'Pendahuluan HTML', 'Pendahuluan mengenai HTML.', 'https://youtu.be/NBZ9Ro6UKV8'),
(2, 1, 'Hello World!', 'Di video ini kita akan membuat website sederhana pertama kita.. Hello World! :D menggunakan aplikasi notepad pada windows', 'https://youtu.be/1NicaVOCXHA'),
(3, 1, 'Code Editor', 'Code Editor yang akan digunakan pada mata kuliah Pemrograman Web 1 adalah Sublime Text 3.', 'https://youtu.be/3sLSi9L5nWE'),
(4, 2, 'Pendahuluan', 'di video pertama ini kita akan belajar mengenai pendahuluan CSS, apa itu CSS, definisinya dan manfaatnya apa.. ', 'https://youtu.be/CleFk3BZB3g'),
(5, 2, 'Anatomi CSS', 'Sama seperti HTML, CSS juga memiliki anatomi / struktur dari tiap-tiap deklarasinya. Anatomi tersebut terdiri dari : selector, property, value', 'https://youtu.be/8lXDi2Mxp9c');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
