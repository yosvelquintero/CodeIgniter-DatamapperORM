-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.24-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-12-10 13:47:54
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for ci
DROP DATABASE IF EXISTS `ci`;
CREATE DATABASE IF NOT EXISTS `ci` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ci`;


-- Dumping structure for table ci.ci_groups
DROP TABLE IF EXISTS `ci_groups`;
CREATE TABLE IF NOT EXISTS `ci_groups` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table ci.ci_groups: ~3 rows (approximately)
/*!40000 ALTER TABLE `ci_groups` DISABLE KEYS */;
INSERT INTO `ci_groups` (`id`, `name`, `created`, `updated`) VALUES
	(1, 'Administrator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'Manager', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'Editor', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `ci_groups` ENABLE KEYS */;


-- Dumping structure for table ci.ci_sessions
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table ci.ci_sessions: ~3 rows (approximately)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
	('3101ee6468552006fc1dc38d50adc125', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0', 1354824089, ''),
	('66e7f5b3e70c49f0435648d3dccd907a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0', 1355154400, ''),
	('c5500d9b9182e97e6e0ea017ec98925a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0', 1354809598, '');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;


-- Dumping structure for table ci.ci_users
DROP TABLE IF EXISTS `ci_users`;
CREATE TABLE IF NOT EXISTS `ci_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` char(40) NOT NULL,
  `salt` varchar(32) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table ci.ci_users: ~2 rows (approximately)
/*!40000 ALTER TABLE `ci_users` DISABLE KEYS */;
INSERT INTO `ci_users` (`id`, `group_id`, `name`, `username`, `email`, `password`, `salt`, `created`, `updated`) VALUES
	(1, 1, 'demo name', 'user', 'user@gmail.com', '07d895a2ff5b819e754ca0f8c95b7e3cf6d875e3', '77828201b5c94f8e2872cdeae7b4f9c5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 2, 'Herman Placeres', 'herman', 'herman@gmail.com', '869b18ef8fb7b909a66b490c076279760a515946', '3d72cef3c0f6d0d17b153ad0d125a691', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `ci_users` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
