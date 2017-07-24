-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for exchange
CREATE DATABASE IF NOT EXISTS `exchange` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `exchange`;

-- Dumping structure for table exchange.files
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `upload_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `original_file_name` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `encoded_file_name` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `file_size` int(11) NOT NULL,
  `crypt` text COLLATE utf8mb4_bin NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='File exchange service. Uploaded files';

-- Dumping data for table exchange.files: 14 rows
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` (`id`, `upload_time`, `original_file_name`, `encoded_file_name`, `file_size`, `crypt`) VALUES
	(2, '2017-07-24 20:24:15', 'Penguins.jpg', '5aeb1f62f6cd496dc81c07d58b82f143.jpg', 777835, ''),
	(3, '2017-07-24 20:24:57', 'Penguins.jpg', '5aeb1f62f6cd496dc81c07d58b82f143.jpg', 777835, ''),
	(4, '2017-07-24 20:25:12', 'Penguins.jpg', '5aeb1f62f6cd496dc81c07d58b82f143.jpg', 777835, ''),
	(5, '2017-07-24 20:25:45', 'Penguins.jpg', '5aeb1f62f6cd496dc81c07d58b82f143.jpg', 777835, ''),
	(6, '2017-07-24 20:25:58', 'Penguins.jpg', '5aeb1f62f6cd496dc81c07d58b82f143.jpg', 777835, ''),
	(7, '2017-07-24 20:26:16', 'Penguins.jpg', '5aeb1f62f6cd496dc81c07d58b82f143.jpg', 777835, ''),
	(8, '2017-07-24 20:29:51', 'Penguins.jpg', '5aeb1f62f6cd496dc81c07d58b82f143.jpg', 777835, ''),
	(9, '2017-07-24 20:31:10', 'Penguins.jpg', '5aeb1f62f6cd496dc81c07d58b82f143.jpg', 777835, ''),
	(10, '2017-07-24 20:31:47', 'Tulips.jpg', '79958cabcbd8ab4afe3279374677ede2.jpg', 620888, ''),
	(11, '2017-07-24 20:33:04', 'Tulips.jpg', '79958cabcbd8ab4afe3279374677ede2.jpg', 620888, ''),
	(12, '2017-07-24 20:35:00', 'Tulips.jpg', '79958cabcbd8ab4afe3279374677ede2.jpg', 620888, ''),
	(13, '2017-07-24 20:35:17', 'Tulips.jpg', '79958cabcbd8ab4afe3279374677ede2.jpg', 620888, ''),
	(14, '2017-07-24 20:37:12', 'Tulips.jpg', '79958cabcbd8ab4afe3279374677ede2.jpg', 620888, ''),
	(15, '2017-07-24 20:37:35', 'Tulips.jpg', '79958cabcbd8ab4afe3279374677ede2.jpg', 620888, ''),
	(16, '2017-07-24 21:14:51', 'Lighthouse.jpg', 'bcb3798d312ed46335afe6b1c0ebd398.jpg', 561276, '14858895711fee60e3ef35e9b26619f1'),
	(17, '2017-07-24 21:16:53', 'Koala.jpg', 'c4cf192ff255dddf4cc2018dc622f834.jpg', 780831, '3b0f496b3e8eb79bcd5d22939f1aba0c');
/*!40000 ALTER TABLE `files` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
