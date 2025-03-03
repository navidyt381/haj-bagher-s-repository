-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2025 at 07:09 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parsnovindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsly`
--

DROP TABLE IF EXISTS `newsly`;
CREATE TABLE IF NOT EXISTS `newsly` (
  `imageurl` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newsly`
--

INSERT INTO `newsly` (`imageurl`, `title`, `description`, `id`) VALUES
('images/InShot_۲۰۲۴۰۱۱۷_۱۰۲۷۲۸۵۶۱ - Copy.png', 'گوز', 'عضله', 9),
('images/InShot_۲۰۲۴۰۱۱۷_۱۰۲۶۱۹۷۶۹.png', 'دامتر استاپ', 'تو اتق منی؟', 8);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`title`, `price`, `image`, `id`) VALUES
('گوشی a12', '7500000', '', 3),
('مادر برد asus prime b760m-k', '8200000', '', 2),
('نان', '4200000', 'images/InShot_۲۰۲۴۰۱۱۷_۱۰۲۶۱۹۷۶۹.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

DROP TABLE IF EXISTS `table`;
CREATE TABLE IF NOT EXISTS `table` (
  `name` varchar(48) NOT NULL,
  `family` varchar(48) NOT NULL,
  `email` varchar(48) NOT NULL,
  `password` varchar(48) NOT NULL,
  `repassword` varchar(48) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`name`, `family`, `email`, `password`, `repassword`, `id`) VALUES
('نوید', 'طاهری', 'hajbagher@gmail.com', '1234', '1234', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
