-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for weberte_db
CREATE DATABASE IF NOT EXISTS `weberte_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `weberte_db`;

-- Dumping structure for table weberte_db.member_reguler
CREATE TABLE IF NOT EXISTS `member_reguler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table weberte_db.member_reguler: ~3 rows (approximately)
/*!40000 ALTER TABLE `member_reguler` DISABLE KEYS */;
INSERT INTO `member_reguler` (`id`, `fullname`, `id_number`, `email`, `password`) VALUES
	(1, 'Rahmanto Prabowo', '1602152408950001', 'rahmantoprabowo@helio.id', '6901eca97d203f9f87c4a9c9888976b9'),
	(2, 'stark', '1234', 'iron.man@avenger.com', 'e10adc3949ba59abbe56e057f20f883e'),
	(3, 'thor', '123', 'thor@avenger.com', 'e10adc3949ba59abbe56e057f20f883e');
/*!40000 ALTER TABLE `member_reguler` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
