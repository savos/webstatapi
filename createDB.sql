
-- Dumping database structure for webstatapi
CREATE DATABASE IF NOT EXISTS `webstatapi`;
USE `webstatapi`;

-- Dumping structure for table webstatapi.webstat
CREATE TABLE IF NOT EXISTS `webstat` (
  `id` int NOT NULL,
  `website` varchar(50) NOT NULL DEFAULT '',
  `visits` int NOT NULL DEFAULT '0',
  `month` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table webstatapi.webstat: ~0 rows (approximately)
DELETE FROM `webstat`;
INSERT INTO `webstat` (`id`, `website`, `visits`, `month`) VALUES
	(1, 'analytics.com', 0, '2021-06-01'),
	(2, 'analytics.com', 111, '2021-07-01'),
	(3, 'analytics.com', 222, '2021-08-01'),
	(4, 'Positive guys', 11, '2021-07-01'),
	(5, 'Positive guys', 22, '2021-08-01');

