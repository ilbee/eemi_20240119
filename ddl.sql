CREATE DATABASE IF NOT EXISTS `eemi_20231030` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `eemi_20231030`;

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;