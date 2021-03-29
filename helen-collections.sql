# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: helen-collections
# Generation Time: 2021-03-29 11:10:23 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL DEFAULT '',
  `product_name` varchar(255) NOT NULL DEFAULT '',
  `business_name` varchar(255) NOT NULL DEFAULT '',
  `currency` enum('£','$') DEFAULT NULL,
  `price` float(3,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `image`, `product_name`, `business_name`, `currency`, `price`)
VALUES
	(1,'images/wa-cafe-matcha-roll.jpg','Matcha Roll','WA Cafe','£',4.30),
	(2,'images/tombo-london-sundae.jpg','London Sundae','Tombo','£',6.60),
	(3,'images/ichiba-matcha-cookies.jpg','Matcha Cookies','Ichiba','£',4.99),
	(4,'images/sakurado-matcha-mille-crepe-cake.jpg','Matcha Mille Crepe Cake','Sakurado','£',6.50),
	(5,'images/wa-cafe-rusk-matcha.jpg','Rusk Matcha','WA Cafe','£',5.00),
	(6,'images/japan-centre-matcha-green-tea-melon.webp','Matcha Green Tea Melon Pan','Japan Centre','£',2.99);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
