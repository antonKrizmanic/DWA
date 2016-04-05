/*
SQLyog Community v12.15 (64 bit)
MySQL - 5.7.8-rc : Database - fantastic_beasts
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fantastic_beasts` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_croatian_ci */;

USE `fantastic_beasts`;

/*Table structure for table `proizvod` */

DROP TABLE IF EXISTS `proizvod`;

CREATE TABLE `proizvod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vrstaProizvoda` varchar(60) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

/*Data for the table `proizvod` */

insert  into `proizvod`(`id`,`vrstaProizvoda`) values 
(1,'Hrana'),
(2,'Poslastice'),
(3,'Oprema'),
(4,'Higijena'),
(5,'Ostalo');

/*Table structure for table `proizvodi` */

DROP TABLE IF EXISTS `proizvodi`;

CREATE TABLE `proizvodi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `tipZivotinje` int(11) DEFAULT NULL,
  `tipProizvoda` int(11) DEFAULT NULL,
  `opisProizvoda` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `cijena` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipZivotinje` (`tipZivotinje`),
  KEY `proizvodi_ibfk_2` (`tipProizvoda`),
  CONSTRAINT `proizvodi_ibfk_1` FOREIGN KEY (`tipZivotinje`) REFERENCES `zivotinje` (`id`),
  CONSTRAINT `proizvodi_ibfk_2` FOREIGN KEY (`tipProizvoda`) REFERENCES `proizvod` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

/*Data for the table `proizvodi` */

insert  into `proizvodi`(`id`,`naziv`,`tipZivotinje`,`tipProizvoda`,`opisProizvoda`,`cijena`) values 
(1,'10x ROYAL CANIN Urban Life Junior - vrećica 150 g',1,1,'Hrana za štenad','75.58'),
(3,'AKVARIJ Nadir',1,3,'Distributer vode 3L','81.48'),
(7,'KRAKVET Poslastica za psa',1,2,'Čips za žvakanje','49.00'),
(8,'AQUA EL Midikani 800',5,3,'Vanjski filter','454.90'),
(9,'AKVARIJ',2,4,'Akvarij za mačke','41.18'),
(10,'Beaphar kitty-milk, Federkur (Paganol)',4,1,'vitamin dodatak za hranu za ptice 50 ml','33.52'),
(11,'KRAKVET',2,3,'Gradajući pijesak od bentonita compact morski 10l','39.21'),
(12,'Držač voća',3,3,'Držač svježe hrane od kromiranog metala za vješanje na rešetke kaveza za higijensko hranjenje, brine za zabavu i kretanje pri jedenju.','11.60'),
(13,'Poidełko za papige',4,3,'dimenzije: 3 x 6,7 x 11 cm','12.39'),
(14,'ANIMONDA Cat Snack Piletina i laneno sjeme 45g',2,2,'Ukusne mačje grickalice marke Animonda su napravljene od čistog pilećeg mesa koje je pažljivo pečeno. ','19.09');

/*Table structure for table `zivotinje` */

DROP TABLE IF EXISTS `zivotinje`;

CREATE TABLE `zivotinje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazivZivotinje` varchar(10) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

/*Data for the table `zivotinje` */

insert  into `zivotinje`(`id`,`nazivZivotinje`) values 
(1,'pas'),
(2,'Mačka'),
(3,'Glodavci'),
(4,'Ptice'),
(5,'Ribice'),
(6,'Gmazovi'),
(7,'Ostalo');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
