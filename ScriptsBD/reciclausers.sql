-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2018 at 02:36 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fedesoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `reciclausers`
--

CREATE TABLE `reciclausers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perfilId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reciclausers`
--

INSERT INTO `reciclausers` (`id`, `email`, `password`, `status`, `name`, `perfilId`, `created_at`, `updated_at`) VALUES
(1, 'mauricio@mail.com', '123456', 1, 'mauricio suarez', 1, NULL, NULL),
(2, 'archivo@mail.com', '1234', 1, 'Pedro Perez', 1, '2018-10-23 06:37:58', '2018-10-23 06:37:58'),
(3, 'colombia@fedesoft.com', '82677463', 1, 'Fedesoft Colombia', 1, '2018-10-23 06:38:56', '2018-10-23 06:38:56'),
(4, 'mauricio@fedesoft.com', '568821093', 1, 'Mauricio Perez', 1, '2018-10-23 06:39:55', '2018-10-23 06:39:55'),
(5, 'mariapaula@fedesoft.com', '24723467', 1, 'Maria Paula', 1, '2018-10-23 07:07:40', '2018-10-23 07:07:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reciclausers`
--
ALTER TABLE `reciclausers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reciclausers_perfilid_foreign` (`perfilId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reciclausers`
--
ALTER TABLE `reciclausers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reciclausers`
--
ALTER TABLE `reciclausers`
  ADD CONSTRAINT `reciclausers_perfilid_foreign` FOREIGN KEY (`perfilId`) REFERENCES `reciclaperfils` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
