/*
SQLyog Community v11.51 (32 bit)
MySQL - 5.7.13 : Database - yona-cms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`yona-cms` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `yona-cms`;

/*Table structure for table `condition` */

DROP TABLE IF EXISTS `condition`;

CREATE TABLE `condition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `condition` */

insert  into `condition`(`id`,`name`,`status`) values (1,'=',1),(2,'!=',1),(3,'>=',1),(4,'<=',1),(5,'>',1),(6,'<',1);

/*Table structure for table `message` */

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `datesent` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `message` */

insert  into `message`(`id`,`subject`,`detail`,`datesent`,`name`,`email`,`tel`,`status`) values (1,'ไป อบจ. ไม่ถูก','ขอรายละเอียดการเดินทางด้วยคับ','27/11/2559 เวลา [16:27:57]','แมน','man@gmail.com','088-886-288',1),(3,'ทดสอบส่งข้อความ','ทดสอบส่งข้อความ','03/12/2559 เวลา [06:58:17]','ทดสอบ','test@gmail.com','0863438220',1),(5,'ขอความช่วยเหลือ','ขอความช่วยเหลือ','03/12/2559 เวลา [07:08:22]','helpme','helpme@gmil.com','0863438220',0),(6,'ช่วยนำทาง','ช่วยนำทาง','03/12/2559 เวลา [14:10:08]','ช่วยนำทาง','help@gmil.com','0863438220',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
