# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.14)
# Database: yona-cms
# Generation Time: 2016-09-26 10:34:57 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admin_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admin_user`;

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `officeid` int(11) DEFAULT NULL,
  `role` enum('journalist','editor','admin','cc-user','cc-admin','cc-approver') NOT NULL DEFAULT 'journalist',
  `login` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `work on` (`officeid`),
  CONSTRAINT `work on` FOREIGN KEY (`officeid`) REFERENCES `office` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `admin_user` WRITE;
/*!40000 ALTER TABLE `admin_user` DISABLE KEYS */;

INSERT INTO `admin_user` (`id`, `officeid`, `role`, `login`, `email`, `name`, `password`, `active`)
VALUES
	(1,3,'admin','admin','web@wezoom.net','Admin Name','$2y$10$rX2C0Ak2deW430Wzlud8HeoNe0pFl.8yYwOwyI/xCKIENd0vKmEgm',1),
	(3,3,'cc-approver','Approver1','approver1@gmail.com','Suebtas Limsaihua','$2y$10$cnpmEXOYkcGLVEEe4xkIpet.eqVej0drzXyELH4uYrB4N/nu63Dtq',1),
	(4,3,'cc-admin','Admin1','admin@gmail.com','Admin Clinic Center1','$2y$10$FcZKX6fmqNAcGluNkzbMoOTTpHf6FNCxtWshA6aR5K/TJQpHDg/lm',1),
	(5,3,'cc-user','User1','user1@gmail.com','User Clinic Center1','$2y$10$d6uI7D1p414ifBpO16SIxOemGzlYhz9mIJxD4FqTmVrArVsrcJUTq',1),
	(6,9,'cc-user','user2','user2@test.com','user2','$2y$10$WyZ3r3GidjJggsXWSNWppujgfgtzWqzeXYm1aWxp9FfI5i1Dtf.Lm',1),
	(8,1,'cc-user','user01',NULL,'เจ้าหน้าที่องค์การบริหารส่วนจังหวัดระยอง','$2y$10$YaAG1mnnTU9ynhIKtL14BOTOnPydqfmX8Y676X/igxXjV1CkttHse',1),
	(9,2,'cc-user','user02',NULL,'เจ้าหน้าที่เทศบาลนครระยอง','$2y$10$TyXczEknWvvgdr1N37d.q.vASdEJxG1D0XOwkfV.UqY4/nR807PNu',1),
	(10,3,'cc-user','user03',NULL,'เจ้าหน้าที่เทศบาลเมืองมาบตาพุด','$2y$10$6hx5wIt0uf2tE61Wy2LOzuNIn2BMFzzTmI5q6qMLGB4YRjX8HncQG',1),
	(11,4,'cc-user','user04',NULL,'เจ้าหน้าที่เทศบาลตำบลแกลงกะเฉด','$2y$10$rtGTbBnkBSkwSJS3jbaXfu2WF98p0NfiVSCHFufSbAQt7akoNRCdW',1),
	(12,5,'cc-user','user05',NULL,'เจ้าหน้าที่เทศบาลตำบลทับมา','$2y$10$YJ6JE9jQBN3jKmaQRgoaGO4V3RZU08jM/k0HEGv0HHZT7nwsP.aNe',1),
	(13,6,'cc-user','user06',NULL,'เจ้าหน้าที่เทศบาลตำบลบ้านเพ','$2y$10$mxC3ea4h0dRwf96JcxyqN.eO34RmGKovA.FWc3tevfI4uJQW3QSs6',1),
	(14,7,'cc-user','user07',NULL,'เจ้าหน้าที่เทศบาลตำบลน้ำคอก','$2y$10$27OLx8V5N9YBo9xUtl0ZAe.jdjSgQXQGdZP0RQ7eots0kP/utUWbW',1),
	(15,8,'cc-user','user08',NULL,'เจ้าหน้าที่เทศบาลตำบลเนินพระ','$2y$10$WXKgrxjFd/0ROb.Lz0HB2Owf8205qPn5bs5zFON4HTN/4XWhTzFG.',1),
	(16,9,'cc-user','user09',NULL,'เจ้าหน้าที่เทศบาลตำบลเชิงเนิน','$2y$10$0ZSg6q9I1OPHfGSSpAKtl.fHCD1PsfU.S/t1tHEpIotARDZSCRa8a',1),
	(17,10,'cc-user','user10',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลนาตาขวัญ','$2y$10$ZhnUZ7pJ5iGl1fk6No3QF.co4ED2NivADXfaxEEIMQNRRh6sBz2T6',1),
	(18,11,'cc-user','user11',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลบ้านแลง','$2y$10$uy3RM3qOJ9PLicscrJYIdegJv1HvIDVu6GX4651gKa/.jBZHJwLQ.',1),
	(19,12,'cc-user','user12',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลสำนักทอง','$2y$10$Sa23trRB14V/iykMW3M7GON1MtaNSFpGbQP1MK1yQ1aMBg97xWM8e',1),
	(20,13,'cc-user','user13',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลกะเฉด','$2y$10$lxG/OrkP8Ngy2AZeM5aGfeXj53ZxMl3Jmkwkq4puec6L6ACCO5hhi',1),
	(21,14,'cc-user','user14',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลแกลง','$2y$10$DwNxoJwu6UbuyaURnjfybuoHOaei.5ugNmONbfBpsEKi92ASzS/OK',1),
	(22,15,'cc-user','user15',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลตะพง','$2y$10$E67HuM4PJSkrEz1MrNQ3Q.cyXBirzGZuOAuwF5lOI0gPEYEvVI0uS',1),
	(23,16,'cc-user','user16',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลเพ','$2y$10$swcWFhUi775uDyRfuQqH7.cIa7zeLHU9A0Hy9G0kL/yuXTIlRENUG',1),
	(24,17,'cc-user','user17',NULL,'เจ้าหน้าที่เทศบาลตำบลกองดิน','$2y$10$AVpAzm8Mub01.RchgHSBWuInvmcLhs5EUlB2Ab/21lXeKvL.jBSlW',1),
	(25,18,'cc-user','user18',NULL,'เจ้าหน้าที่เทศบาลตำบลทุ่งควายกิน','$2y$10$pv15tyKo8MRKjKlJ0gu6fuL4LR7rT3X2aKTX42zWIdMm.QZpI76rK',1),
	(26,19,'cc-user','user19',NULL,'เจ้าหน้าที่เทศบาลตำบลบ้านนา','$2y$10$hxM7nrE1u7xvDsvIZtukFe00gy5t2jSgeCU8.GDrvsX3LMBMvZk8C',1),
	(27,20,'cc-user','user20',NULL,'เจ้าหน้าที่เทศบาลตำบลเมืองแกลง','$2y$10$Xp7vJ5N2ORX244bu0F55KupNyZDaOGaORhty41wAFHtWdixqdP5Wm',1),
	(28,21,'cc-user','user21',NULL,'เจ้าหน้าที่เทศบาลตำบลเนินฆ้อ','$2y$10$vG89mFFukQxqroHlRndLfemPDBiQtViPOrIXCiVmwq9DOe2XmNDoK',1),
	(29,22,'cc-user','user22',NULL,'เจ้าหน้าที่เทศบาลตำบลสองสลึง','$2y$10$ecNg6UIbXlSCKIMpe4J2g.qehdSrpFif6RG86YM1Ozk8.OVDieWn.',1),
	(30,23,'cc-user','user23',NULL,'เจ้าหน้าที่เทศบาลตำบลปากน้ำประแส','$2y$10$iJ6Z4Zwt0Bj4Mm8cLPTepOXJWhVOKNAty/tom4PEmmEJ22dnio28G',1),
	(31,24,'cc-user','user24',NULL,'เจ้าหน้าที่เทศบาลตำบลสุนทรภู่','$2y$10$Dakrr.bXqSGK/Cfq8YHbsOwPTS/TtpCUGSXhBBWJPauEo7yUAqBki',1),
	(32,25,'cc-user','user25',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลกระแสบน','$2y$10$Rlfn6PQc2BevdQfL9csPweM0fLFPRYV/Cmy1Dzbzxtp4lWo6zZGZ.',1),
	(33,26,'cc-user','user26',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลชากโดน','$2y$10$bLVAX4.TWM0PvzNKjC2qZeUayARk9MZXb9Z1MTxaMgCGbn.tYu9mi',1),
	(34,27,'cc-user','user27',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลทางเกวียน','$2y$10$e83fug6ZOu8nim1TYGi0T.4Wx5ei5wAvBhDVS9fkBfa1a503i1kG2',1),
	(35,28,'cc-user','user28',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลทุ่งควายกิน','$2y$10$e2aRmTeoakQ6/UfK8a4ho.2xu6rTq0/UHeenJFrRmz4OL1OTMipPK',1),
	(36,29,'cc-user','user29',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลพังราด','$2y$10$.6Jbuh3b0Pnqnx83QyjdTum6uhg.jAmVK.TuSY1LEchMLMlZ/73Ay',1),
	(37,30,'cc-user','user30',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลวังหว้า','$2y$10$9Uj5sO44msQezo/Cv6EteOb.yTRUuLemE0eP0scMDkRex4Jlay7iq',1),
	(38,31,'cc-user','user31',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลคลองปูน','$2y$10$TPDvVjOStLvO8k8NsN.tb.QQP98aDtRYCim75fXPxn3/G6YcuANcG',1),
	(39,32,'cc-user','user32',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลกองดิน','$2y$10$yuFXsR12/ApRFg7FW1kqHOolyBPOTvurLg691U4kwVvsxQSX9iXIm',1),
	(40,33,'cc-user','user33',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลห้วยยาง','$2y$10$JzZTtkk/kLubFsFIFGdsBOVKiPwZeiV1XJaOY/nX16oGDYYIi3dW.',1),
	(41,34,'cc-user','user34',NULL,'เจ้าหน้าที่เทศบาลตำบลมาบข่า','$2y$10$8ttV.LL95vtDNKQQ1UAKY.Ln07dXPuy3IQSQhM8/WZx3q27/ZU9TC',1),
	(42,35,'cc-user','user35',NULL,'เจ้าหน้าที่เทศบาลตำบลมะขามคู่','$2y$10$Gik308j0S6yGtQkBUPN6/OYakaf/3NlyPEjBtn.U9u/h7kURfdyE2',1),
	(43,36,'cc-user','user36',NULL,'เจ้าหน้าที่เทศบาลตำบลมาบข่าพัฒนา','$2y$10$GwKOxd042QF.3s09aD3FZ..LarUj2fLNjezVrivYDFRH3P3uz02X.',1),
	(44,37,'cc-user','user37',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลนิคมพัฒนา','$2y$10$f3TFsiu07yQjNZRW3nXiVOHTDJ0gz1HkhNVCa08WX4ocXskUkHt0a',1),
	(45,38,'cc-user','user38',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลพนานิคม','$2y$10$0Ra2FqRTjvltL76qfATg3egZ8.slH6RVpLXG4yhrGb9st/L4.2YTa',1),
	(46,39,'cc-user','user39',NULL,'เจ้าหน้าที่เทศบาลตำบลชำฆ้อ','$2y$10$fhmlg.fi7SkWcIN5rmdlLOWdaZ6wUTDDUeOqveVrOpwVdo/3NUy.K',1),
	(47,40,'cc-user','user40',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลเขาชะเมา','$2y$10$RZcNKA70srdfwmN8h7uk..VykZAJdNLMDufPYJpae65WTCvNn4Rh6',1),
	(48,41,'cc-user','user41',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลเขาน้อย','$2y$10$BP1crnE556ZXGLc6C4PMmOlu4qFZolhw0pjuiVEHOSTBlpB4Q/IKu',1),
	(49,42,'cc-user','user42',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลน้ำเป็น','$2y$10$8VsjNynMYbQslnZ6Y5i7NudtFDRYQU.4pRxCRmVNXMkSqEN.8HZf2',1),
	(50,43,'cc-user','user43',NULL,'เจ้าหน้าที่เทศบาลตำบลชุมแสง','$2y$10$UFNXvSmFkSXRvr2RLk40SuQwhgOqzQSgucZrdJz4uYlUs45MsoCU6',1),
	(51,44,'cc-user','user44',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลชุมแสง','$2y$10$RlZtdHHacOsoKqnsMSPSiOxEIIP1OTdM41L054YgABR.OcGaw1rl.',1),
	(52,45,'cc-user','user45',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลป่ายุบใน','$2y$10$2Xqy0RnVy1XNCF1tc6u/jewdExP8Jt5/yxilwLKTNlWfCis.kAL.y',1),
	(53,46,'cc-user','user46',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลวังจันทร์','$2y$10$DUlggxXiwLbmH1OVYI9kluQ78hDumTlJx9indxHyXkgqTlZo6/X0O',1),
	(54,47,'cc-user','user47',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลพลงตาเอี่ยม','$2y$10$9zO1xbGYmXezEqmikEAbwekPTN440N8Gf6RbYSpJpqvXwQNCBri3e',1),
	(55,48,'cc-user','user48',NULL,'เจ้าหน้าที่เทศบาลเมืองบ้านฉาง','$2y$10$DyyqEyxBz5UXg9g9k7yEo.CxENpjOsHzZEiAVFY9It1zpUYE03V42',1),
	(56,49,'cc-user','user49',NULL,'เจ้าหน้าที่เทศบาลตำบลบ้านฉาง','$2y$10$WxDCe9M9F6nNW.o98bA/k.7YknN8L3Zs/5RR/cMXUKRtatQWIz.Uq',1),
	(57,50,'cc-user','user50',NULL,'เจ้าหน้าที่เทศบาลตำบลพลา','$2y$10$rtw.dCTwz81JusFDj3wHkug36ydJ3kOfJ6VD4CEpHA2xSRdf/B1oC',1),
	(58,51,'cc-user','user51',NULL,'เจ้าหน้าที่เทศบาลตำบลสำนักท้อน','$2y$10$V7qtuzlHAmojkaAM93V6ZOkabyIXL.RB./7Ica2IEZj54svb2LvSC',1),
	(59,52,'cc-user','user52',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลสำนักท้อน','$2y$10$n/We/9877s2XwZsW4HloOOmpf7xwpRGpOr44IdifMeF1Eg7Sh/uBC',1),
	(60,53,'cc-user','user53',NULL,'เจ้าหน้าที่เทศบาลตำบลบ้านปลวกแดง','$2y$10$YqDqmMzkBtbr3OYVjfWdcekE3D4X13ooSQNAbRRYcs9v4Jr0oTN42',1),
	(61,54,'cc-user','user54',NULL,'เจ้าหน้าที่เทศบาลตำบลจอมพลเจ้าพระยา','$2y$10$.DzszPCr10LFEj6bpjanZem/byitqiTHRX5ucEm8gcBj.7Hof/f8y',1),
	(62,55,'cc-user','user55',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลปลวกแดง','$2y$10$iqbUZ3iOyD3ZymNWRZddBeG9sNBu1Aqllt94GnBCNNV8MloQ.QLG6',1),
	(63,56,'cc-user','user56',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลตาสิทธิ์','$2y$10$EmVKrOtTaIzpZbQkFqgdReulsVbqOyyBrMtu/aR93G6B7i/Pwg75i',1),
	(64,57,'cc-user','user57',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลละหาร','$2y$10$WrMIozb/x6evQ1k9MBWdnu/QB6l3f66pXNfqRjz44LlUtBhsU4LhW',1),
	(65,58,'cc-user','user58',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลแม่น้ำคู้','$2y$10$NvYTDtPbx0Y7fcicUazFYO9rZfubpflE4/nWR3V9rDq9d1m4upt/u',1),
	(66,59,'cc-user','user59',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลมาบยางพร','$2y$10$qybfSjcZR4y3fRNfPnTwf.lwxDqehfwVasNUOHqwu9mMg6Mn06FXO',1),
	(67,60,'cc-user','user60',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลหนองไร่','$2y$10$4I4oMGVN1yANgCr1H/4Z3ucfSnr0EwsQB0kGfRt4XTD7OVhLM75cm',1),
	(68,61,'cc-user','user61',NULL,'เจ้าหน้าที่เทศบาลตำบลบ้านค่าย','$2y$10$aS.5XYmfiAM/RGvSmp15V.8rdKmoLokW9Aul5q.2UnlY/3XEJL1Z.',1),
	(69,62,'cc-user','user62',NULL,'เจ้าหน้าที่เทศบาลตำบลบ้านค่ายพัฒนา','$2y$10$OCr8XhD4IbcKsewyOD8AXOZbYmgHw0R.Bs6BTa5FxlUPJ77D2RIRm',1),
	(70,63,'cc-user','user63',NULL,'เจ้าหน้าที่เทศบาลตำบลชากบก','$2y$10$keA7.Yt024i4ZhCvnggz0uua5CLFUx3/WOR6yOXkc.w22JSt1RJl2',1),
	(71,64,'cc-user','user64',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลตาขัน','$2y$10$xygn2Oh/dUsQ/R/4.gsBPOGIjqKt9gXhu5EN5GZ.uKfOFY5IB/7Vi',1),
	(72,65,'cc-user','user65',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลหนองตะพาน','$2y$10$a0OyDElBQKFufJAbBxWa9u.84rjHTQ4RB6KAipuATFhGZT6IBq9KK',1),
	(73,66,'cc-user','user66',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลหนองละลอก','$2y$10$GxExRz9I4qRQFnaJQxznyehH3y2onLOqmgZYe30VzoiCDUDIIBCpm',1),
	(74,67,'cc-user','user67',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลหนองบัว','$2y$10$YXUXjyIjIDmoyI5diIVcrebfPKtew0MP02IpiBE9WRES1cAzDigCm',1),
	(75,68,'cc-user','user68',NULL,'เจ้าหน้าที่องค์การบริหารส่วนตำบลบางบุตร','$2y$10$CaaWJ9HcFZ1mlHTKYEbq1OTiQbKCUv846KtNAeh9Zrae4XrvWGlX6',1);

/*!40000 ALTER TABLE `admin_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table amphur
# ------------------------------------------------------------

DROP TABLE IF EXISTS `amphur`;

CREATE TABLE `amphur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `amphur` WRITE;
/*!40000 ALTER TABLE `amphur` DISABLE KEYS */;

INSERT INTO `amphur` (`id`, `name`)
VALUES
	(1,'อำเภอเมือง'),
	(2,'อำเภอแกลง'),
	(3,'อำเภอนิคมพัฒนา'),
	(4,'อำเภอเขาชะเมา'),
	(5,'อำเภอวังจันทร์'),
	(6,'อำเภอบ้านฉาง'),
	(7,'อำเภอปลวกแดง'),
	(8,'อำเภอบ้านค่าย');

/*!40000 ALTER TABLE `amphur` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table answer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `answer`;

CREATE TABLE `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(255) NOT NULL,
  `discovery_surveyid` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index answer in survey` (`discovery_surveyid`),
  KEY `index answer in question` (`questionid`),
  CONSTRAINT `answer in question` FOREIGN KEY (`questionid`) REFERENCES `question` (`id`),
  CONSTRAINT `answer in survey` FOREIGN KEY (`discovery_surveyid`) REFERENCES `discovery_survey` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `answer` WRITE;
/*!40000 ALTER TABLE `answer` DISABLE KEYS */;

INSERT INTO `answer` (`id`, `answer`, `discovery_surveyid`, `questionid`)
VALUES
	(7,'1000',1,2),
	(8,'100',1,8),
	(9,'10',1,10),
	(10,'1',1,9),
	(11,'10',1,7),
	(12,'3',1,13),
	(13,'4',1,15),
	(14,'20',1,12),
	(15,'30',1,14),
	(16,'40',1,16),
	(17,'2',1,11),
	(18,'1',1,17),
	(19,'83343',1,108),
	(20,'110031',1,118),
	(21,'15776',1,133),
	(22,'16887',1,138),
	(23,'16665',1,128),
	(24,'7332',1,123),
	(25,'42',1,153),
	(26,'10',1,143),
	(27,'26',1,148),
	(28,'58',1,158),
	(29,'69999',1,103),
	(30,'42',1,173),
	(31,'122576',1,113),
	(32,'26',1,168),
	(33,'10',1,163),
	(34,'58',1,178),
	(35,'empty',1,355),
	(36,'309',1,56),
	(37,'7',1,25),
	(38,'0',1,381),
	(39,'2',1,26),
	(40,'2',1,28),
	(41,'1',1,30),
	(42,'4',1,27),
	(43,'รถไฟฟ้า',1,32),
	(44,'6',1,74),
	(45,'6',1,75),
	(46,'11',1,76),
	(47,'44',1,80),
	(48,'66',1,83),
	(49,'ประเพณี1',1,84),
	(50,'111',1,86),
	(51,'jan',1,85),
	(52,'22222',1,104),
	(53,'11111',1,99),
	(54,'33333',1,109),
	(55,'5555',1,114),
	(56,'55555',1,100),
	(57,'55566',1,105),
	(58,'55577',1,110),
	(59,'55588',1,115),
	(60,'66',1,225),
	(61,'55',1,228),
	(62,'888',1,227),
	(63,'2',1,58),
	(64,'3',1,59),
	(65,'1',1,77),
	(66,'1',2,2),
	(67,'1',2,28),
	(68,'7',2,25),
	(69,'1',2,26),
	(70,'2',2,30),
	(71,'3',2,32),
	(72,'2',2,27),
	(73,'2',2,29),
	(74,'2',2,31),
	(75,'2',2,33),
	(76,'1',2,9),
	(77,'2',2,7),
	(78,'1',2,11),
	(79,'1',2,10),
	(80,'2',2,8),
	(81,'1',2,12),
	(82,'1',3,2),
	(83,'4',1,60),
	(84,'5',1,61),
	(85,'122',1,57),
	(93,'เชิงเนิน',1,3),
	(95,'แกลง',1,4),
	(96,'ปากน้ำ',1,5),
	(97,'เชิงเนิน',1,6),
	(98,'เพ',1,3),
	(99,'1',1,21),
	(100,'2',1,22),
	(101,'3',1,23),
	(102,'4',1,24),
	(103,'มหาไทย',1,397),
	(104,'มหาไทย',1,398),
	(105,'2',1,18),
	(106,'มหาไทย',1,399),
	(107,'4',1,20),
	(108,'3',1,19),
	(109,'111',1,35),
	(110,'2',1,33),
	(111,'2',1,31),
	(112,'3',1,29),
	(113,'100',1,34),
	(114,'11',1,36),
	(115,'22',1,37),
	(116,'33',1,38),
	(117,'44',1,39),
	(118,'55',1,40),
	(119,'66',1,41),
	(120,'77',1,42),
	(121,'88',1,43),
	(122,'99',1,44),
	(123,'11',1,45),
	(124,'22',1,46),
	(125,'33',1,47),
	(126,'44',1,48),
	(127,'11',1,49),
	(128,'22',1,50),
	(129,'33',1,51),
	(130,'44',1,52),
	(131,'55',1,53),
	(132,'66',1,54),
	(133,'78',1,55),
	(134,'22',1,62),
	(135,'33',1,63),
	(136,'44',1,64),
	(137,'55',1,65),
	(138,'66',1,66),
	(139,'77',1,67),
	(140,'888',1,68),
	(141,'88',1,69),
	(142,'99',1,70),
	(143,'111',1,71),
	(144,'222',1,72),
	(145,'333',1,73),
	(146,'22',1,78),
	(147,'33',1,79),
	(148,'44',1,81),
	(149,'555',1,82),
	(150,'ประเพณี2',1,87),
	(151,'ประเพณี3',1,90),
	(152,'ประเพณี4',1,93),
	(153,'ประเพณี5',1,96),
	(154,'jan',1,88),
	(155,'feb',1,91),
	(156,'jul',1,94),
	(157,'mar',1,97),
	(158,'222',1,89),
	(159,'333',1,92),
	(160,'444',1,95),
	(161,'555',1,98),
	(162,'1111',1,101),
	(163,'2222',1,106),
	(164,'333',1,111),
	(165,'4444',1,116),
	(166,'2222',1,102),
	(167,'3333',1,107),
	(168,'33333',1,112),
	(169,'44444',1,117),
	(170,'1111',1,119),
	(171,'2222',1,124),
	(172,'3333',1,129),
	(173,'4444',1,134),
	(174,'2222',1,120),
	(175,'3333',1,125),
	(176,'4444',1,130),
	(177,'5555',1,135),
	(178,'666',1,121),
	(179,'7777',1,126),
	(180,'7777',1,131),
	(181,'6666',1,136),
	(182,'3333',1,122),
	(183,'3333',1,127),
	(184,'222',1,132),
	(185,'222',1,137),
	(186,'1',1,139),
	(187,'2',1,140),
	(188,'3',1,141),
	(189,'4',1,142),
	(190,'5',1,144),
	(191,'6',1,145),
	(192,'7',1,146),
	(193,'8',1,147),
	(194,'9',1,149),
	(195,'10',1,150),
	(196,'11',1,151),
	(197,'12',1,152),
	(198,'13',1,154),
	(199,'14',1,155),
	(200,'15',1,156),
	(201,'16',1,157),
	(202,'1',1,159),
	(203,'2',1,160),
	(204,'3',1,161),
	(205,'4',1,162),
	(206,'5',1,164),
	(207,'6',1,165),
	(208,'7',1,166),
	(209,'8',1,167),
	(210,'9',1,169),
	(211,'10',1,170),
	(212,'11',1,171),
	(213,'12',1,172),
	(214,'13',1,174),
	(215,'14',1,175),
	(216,'15',1,176),
	(217,'16',1,177),
	(218,'2',1,180),
	(219,'1',1,179),
	(220,'3',1,181),
	(221,'4',1,182),
	(222,'5',1,183),
	(223,'6',1,184),
	(224,'7',1,185),
	(225,'8',1,187),
	(226,'สนามฟุตซอล',1,186),
	(227,'11',1,235),
	(228,'22',1,236),
	(229,'33',1,237),
	(230,'11',1,239),
	(231,'111',1,238),
	(232,'22',1,242),
	(233,'333',1,246),
	(234,'444',1,250),
	(235,'555',1,254),
	(236,'22',1,243),
	(237,'33',1,247),
	(238,'444',1,251),
	(239,'55',1,255),
	(240,'11',1,240),
	(241,'111',1,241),
	(242,'222',1,244),
	(243,'222',1,245),
	(244,'444',1,248),
	(245,'222',1,249),
	(246,'222',1,252),
	(247,'222',1,253),
	(248,'111',1,256),
	(249,'222',1,257),
	(250,'222',1,258),
	(251,'111',1,262),
	(252,'111',1,266),
	(253,'1',1,259),
	(254,'1',1,263),
	(255,'1',1,267),
	(256,'1',1,271),
	(257,'1',1,275),
	(258,'1',1,270),
	(259,'1',1,274),
	(260,'1',1,260),
	(261,'2',1,264),
	(262,'3',1,268),
	(263,'4',1,272),
	(264,'5',1,276),
	(265,'2',1,261),
	(266,'2',1,265),
	(267,'3',1,269),
	(268,'4',1,273),
	(269,'5',1,277),
	(270,'1',1,278),
	(271,'2',1,282),
	(272,'3',1,286),
	(273,'4',1,290),
	(274,'5',1,294),
	(275,'1',1,279),
	(276,'2',1,283),
	(277,'3',1,287),
	(278,'4',1,291),
	(279,'5',1,295),
	(280,'1',1,280),
	(281,'2',1,284),
	(282,'3',1,288),
	(283,'4',1,292),
	(284,'5',1,296),
	(285,'12',1,281),
	(286,'13',1,285),
	(287,'14',1,289),
	(288,'15',1,293),
	(289,'16',1,297),
	(290,'1',1,302),
	(291,'1',1,298),
	(292,'2',1,306),
	(293,'2',1,310),
	(294,'3',1,314),
	(295,'1',1,299),
	(296,'1',1,303),
	(297,'2',1,307),
	(298,'2',1,311),
	(299,'3',1,315),
	(300,'1',1,300),
	(301,'2',1,304),
	(302,'2',1,308),
	(303,'3',1,312),
	(304,'4',1,316),
	(305,'1',1,301),
	(306,'2',1,305),
	(307,'3',1,309),
	(308,'4',1,313),
	(309,'5',1,317),
	(310,'1',1,318),
	(311,'1',1,319),
	(312,'1',1,320),
	(313,'1',1,321),
	(314,'1',1,322),
	(315,'1',1,323),
	(316,'2',1,324),
	(317,'3',1,325),
	(318,'4',1,326),
	(319,'5',1,327),
	(320,'1',1,373),
	(321,'2',1,374),
	(322,'222',1,375),
	(323,'111',1,376),
	(324,'0',3,103),
	(325,'0',3,128),
	(326,'0',3,108),
	(327,'0',3,118),
	(328,'0',3,133),
	(329,'0',3,138),
	(330,'0',3,123),
	(331,'0',3,113),
	(332,'0',3,153),
	(333,'0',3,148),
	(334,'0',3,173),
	(335,'0',3,168),
	(336,'0',3,143),
	(337,'0',3,163),
	(338,'0',3,158),
	(339,'0',3,178),
	(340,'ตะพง',3,3);

/*!40000 ALTER TABLE `answer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table approval
# ------------------------------------------------------------

DROP TABLE IF EXISTS `approval`;

CREATE TABLE `approval` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sessionid` int(11) DEFAULT NULL,
  `approve_date` date DEFAULT NULL,
  `level` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `discovery_surveyid` int(11) NOT NULL,
  `admin_userid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index approval on` (`discovery_surveyid`),
  KEY `index user approval on` (`admin_userid`),
  KEY `index approve in` (`sessionid`),
  CONSTRAINT `approval on` FOREIGN KEY (`discovery_surveyid`) REFERENCES `discovery_survey` (`id`),
  CONSTRAINT `approve in session group` FOREIGN KEY (`sessionid`) REFERENCES `group_session` (`id`),
  CONSTRAINT `user approval on` FOREIGN KEY (`admin_userid`) REFERENCES `admin_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `approval` WRITE;
/*!40000 ALTER TABLE `approval` DISABLE KEYS */;

INSERT INTO `approval` (`id`, `sessionid`, `approve_date`, `level`, `order`, `comment`, `status`, `discovery_surveyid`, `admin_userid`)
VALUES
	(1,1,'2016-09-05',1,16,NULL,2,1,3),
	(2,1,'2016-09-25',2,6,NULL,1,1,4);

/*!40000 ALTER TABLE `approval` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table boundary
# ------------------------------------------------------------

DROP TABLE IF EXISTS `boundary`;

CREATE TABLE `boundary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `boundary` WRITE;
/*!40000 ALTER TABLE `boundary` DISABLE KEYS */;

INSERT INTO `boundary` (`id`, `name`)
VALUES
	(1,'North'),
	(2,'South'),
	(3,'West'),
	(4,'East');

/*!40000 ALTER TABLE `boundary` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table boundary_office
# ------------------------------------------------------------

DROP TABLE IF EXISTS `boundary_office`;

CREATE TABLE `boundary_office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `close_officeid` int(11) NOT NULL,
  `boundaryid` int(11) NOT NULL,
  `owner_officeid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index set boundary office with` (`boundaryid`),
  KEY `index owner office by` (`owner_officeid`),
  KEY `index is close office on` (`close_officeid`),
  CONSTRAINT ` owner office by` FOREIGN KEY (`owner_officeid`) REFERENCES `office` (`id`),
  CONSTRAINT `is close office on` FOREIGN KEY (`close_officeid`) REFERENCES `office` (`id`),
  CONSTRAINT `set boundary office with` FOREIGN KEY (`boundaryid`) REFERENCES `boundary` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table boundary_tambon
# ------------------------------------------------------------

DROP TABLE IF EXISTS `boundary_tambon`;

CREATE TABLE `boundary_tambon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `close_tambonid` int(11) unsigned NOT NULL,
  `boundaryid` int(11) NOT NULL,
  `owner_officeid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index set boundary tambon with` (`boundaryid`),
  KEY `index owner office by` (`owner_officeid`),
  KEY `index is close tambol on` (`close_tambonid`),
  CONSTRAINT `boundary_tambon_ibfk_1` FOREIGN KEY (`owner_officeid`) REFERENCES `office` (`id`),
  CONSTRAINT `boundary_tambon_ibfk_2` FOREIGN KEY (`close_tambonid`) REFERENCES `tambon` (`id`),
  CONSTRAINT `boundary_tambon_ibfk_3` FOREIGN KEY (`boundaryid`) REFERENCES `boundary` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `boundary_tambon` WRITE;
/*!40000 ALTER TABLE `boundary_tambon` DISABLE KEYS */;

INSERT INTO `boundary_tambon` (`id`, `close_tambonid`, `boundaryid`, `owner_officeid`)
VALUES
	(6,6,2,9),
	(7,7,3,9),
	(8,5,4,9),
	(17,2,1,3),
	(19,6,2,3),
	(20,4,3,3),
	(21,2,4,3),
	(22,5,1,3),
	(23,3,1,9);

/*!40000 ALTER TABLE `boundary_tambon` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_configuration
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_configuration`;

CREATE TABLE `cms_configuration` (
  `key` varchar(50) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `cms_configuration` WRITE;
/*!40000 ALTER TABLE `cms_configuration` DISABLE KEYS */;

INSERT INTO `cms_configuration` (`key`, `value`)
VALUES
	('ADMIN_EMAIL','webmaster@localhost'),
	('DEBUG_MODE','1'),
	('DISPLAY_CHANGELOG','1'),
	('PROFILER','1'),
	('TECHNICAL_WORKS','0'),
	('WIDGETS_CACHE','1');

/*!40000 ALTER TABLE `cms_configuration` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_javascript
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_javascript`;

CREATE TABLE `cms_javascript` (
  `id` varchar(20) NOT NULL,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `cms_javascript` WRITE;
/*!40000 ALTER TABLE `cms_javascript` DISABLE KEYS */;

INSERT INTO `cms_javascript` (`id`, `text`)
VALUES
	('body','<!-- custom javascript code or any html -->'),
	('head','<!-- custom javascript code or any html -->');

/*!40000 ALTER TABLE `cms_javascript` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `discovery_surveyid` int(11) NOT NULL,
  `admin_userid` int(11) NOT NULL,
  `sessionid` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index comment on` (`discovery_surveyid`),
  KEY `index user comment on` (`admin_userid`),
  KEY `index comment in` (`sessionid`),
  CONSTRAINT `comment in` FOREIGN KEY (`sessionid`) REFERENCES `session` (`id`),
  CONSTRAINT `comment on` FOREIGN KEY (`discovery_surveyid`) REFERENCES `discovery_survey` (`id`),
  CONSTRAINT `user comment on` FOREIGN KEY (`admin_userid`) REFERENCES `admin_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;

INSERT INTO `comment` (`id`, `description`, `discovery_surveyid`, `admin_userid`, `sessionid`, `date`, `status`)
VALUES
	(2,'eeee\n\n\nhhh\n\njjjj',1,3,1,'2016-09-02 17:06:49',2),
	(3,'abc\n123yy\nuuuuu',1,3,2,'2016-09-02 17:06:49',1),
	(4,'แก้ไขข้อมูล',1,4,1,'2016-09-02 17:06:49',1),
	(5,'2.1',1,3,3,'2016-09-15 11:30:52',2),
	(6,'2.2-2.3',1,3,4,'2016-09-15 11:42:36',1),
	(7,'2.4',1,3,5,'2016-09-15 12:03:15',1),
	(8,'2.5',1,3,6,'2016-09-15 12:03:21',1),
	(9,'กกกกหห',1,4,2,'2016-09-25 13:38:01',NULL);

/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table discovery_survey
# ------------------------------------------------------------

DROP TABLE IF EXISTS `discovery_survey`;

CREATE TABLE `discovery_survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `officeid` int(11) DEFAULT NULL,
  `surveyid` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index do` (`officeid`),
  KEY `index make survey` (`surveyid`),
  CONSTRAINT `do` FOREIGN KEY (`officeid`) REFERENCES `office` (`id`),
  CONSTRAINT `make survey` FOREIGN KEY (`surveyid`) REFERENCES `survey` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `discovery_survey` WRITE;
/*!40000 ALTER TABLE `discovery_survey` DISABLE KEYS */;

INSERT INTO `discovery_survey` (`id`, `officeid`, `surveyid`, `description`, `status`)
VALUES
	(1,3,1,NULL,2),
	(2,4,1,NULL,0),
	(3,9,1,NULL,0),
	(4,1,1,NULL,0);

/*!40000 ALTER TABLE `discovery_survey` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table group_session
# ------------------------------------------------------------

DROP TABLE IF EXISTS `group_session`;

CREATE TABLE `group_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `group_session` WRITE;
/*!40000 ALTER TABLE `group_session` DISABLE KEYS */;

INSERT INTO `group_session` (`id`, `name`)
VALUES
	(1,'ด้านสภาพทั่วไป'),
	(2,'ด้านโครงสร้างพื้นฐาน'),
	(3,'ด้านเศรษฐกิจ'),
	(4,'ด้านสังคม'),
	(5,'ด้านสาธารณสุข'),
	(6,'ด้านคุณภาพชีวิตและความปลอดภัยในทรัพย์สิน'),
	(7,'ด้านการป้องกันและบรรเทาสาธารณภัย'),
	(8,'ด้านสิ่งแวดล้อมและทรัพยากรธรรมชาติ'),
	(9,'ด้านการเมือง การบริหาร');

/*!40000 ALTER TABLE `group_session` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table language
# ------------------------------------------------------------

DROP TABLE IF EXISTS `language`;

CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iso` varchar(10) NOT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `short_name` varchar(10) DEFAULT NULL,
  `url` varchar(20) DEFAULT NULL,
  `sortorder` int(11) DEFAULT NULL,
  `primary` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `iso` (`iso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;

INSERT INTO `language` (`id`, `iso`, `locale`, `name`, `short_name`, `url`, `sortorder`, `primary`)
VALUES
	(1,'ru','ru_RU','Русский','Рус','ru',3,'0'),
	(2,'en','en_EN','English','Eng','en',1,'1'),
	(3,'uk','uk_UA','Українська','Укр','uk',2,'0');

/*!40000 ALTER TABLE `language` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `root` enum('top') NOT NULL DEFAULT 'top',
  `parent_id` int(11) DEFAULT NULL,
  `work_title` varchar(255) DEFAULT NULL,
  `depth` tinyint(2) NOT NULL DEFAULT '0',
  `left_key` int(11) DEFAULT NULL,
  `right_key` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`work_title`),
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table menu_translate
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menu_translate`;

CREATE TABLE `menu_translate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foreign_id` int(11) NOT NULL,
  `lang` varchar(20) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`id`),
  KEY `foreign_id` (`foreign_id`),
  CONSTRAINT `menu_translate_ibfk_1` FOREIGN KEY (`foreign_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table newstype
# ------------------------------------------------------------

DROP TABLE IF EXISTS `newstype`;

CREATE TABLE `newstype` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table office
# ------------------------------------------------------------

DROP TABLE IF EXISTS `office`;

CREATE TABLE `office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `amphurid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `manage by` (`name`),
  KEY `mange by` (`amphurid`),
  KEY `index manage by` (`amphurid`),
  CONSTRAINT `manage by amphur` FOREIGN KEY (`amphurid`) REFERENCES `amphur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `office` WRITE;
/*!40000 ALTER TABLE `office` DISABLE KEYS */;

INSERT INTO `office` (`id`, `name`, `amphurid`)
VALUES
	(1,'องค์การบริหารส่วนจังหวัดระยอง',1),
	(2,'เทศบาลนครระยอง',1),
	(3,'เทศบาลเมืองมาบตาพุด',1),
	(4,'เทศบาลตำบลแกลงกะเฉด',1),
	(5,'เทศบาลตำบลทับมา',1),
	(6,'เทศบาลตำบลบ้านเพ',1),
	(7,'เทศบาลตำบลน้ำคอก',1),
	(8,'เทศบาลตำบลเนินพระ',1),
	(9,'เทศบาลตำบลเชิงเนิน',1),
	(10,'องค์การบริหารส่วนตำบลนาตาขวัญ',1),
	(11,'องค์การบริหารส่วนตำบลบ้านแลง',1),
	(12,'องค์การบริหารส่วนตำบลสำนักทอง',1),
	(13,'องค์การบริหารส่วนตำบลกะเฉด',1),
	(14,'องค์การบริหารส่วนตำบลแกลง',1),
	(15,'องค์การบริหารส่วนตำบลตะพง',1),
	(16,'องค์การบริหารส่วนตำบลเพ',1),
	(17,'เทศบาลตำบลกองดิน',2),
	(18,'เทศบาลตำบลทุ่งควายกิน',2),
	(19,'เทศบาลตำบลบ้านนา',2),
	(20,'เทศบาลตำบลเมืองแกลง',2),
	(21,'เทศบาลตำบลเนินฆ้อ',2),
	(22,'เทศบาลตำบลสองสลึง',2),
	(23,'เทศบาลตำบลปากน้ำประแส',2),
	(24,'เทศบาลตำบลสุนทรภู่',2),
	(25,'องค์การบริหารส่วนตำบลกระแสบน',2),
	(26,'องค์การบริหารส่วนตำบลชากโดน',2),
	(27,'องค์การบริหารส่วนตำบลทางเกวียน',2),
	(28,'องค์การบริหารส่วนตำบลทุ่งควายกิน',2),
	(29,'องค์การบริหารส่วนตำบลพังราด',2),
	(30,'องค์การบริหารส่วนตำบลวังหว้า',2),
	(31,'องค์การบริหารส่วนตำบลคลองปูน',2),
	(32,'องค์การบริหารส่วนตำบลกองดิน',2),
	(33,'องค์การบริหารส่วนตำบลห้วยยาง',2),
	(34,'เทศบาลตำบลมาบข่า',3),
	(35,'เทศบาลตำบลมะขามคู่',3),
	(36,'เทศบาลตำบลมาบข่าพัฒนา',3),
	(37,'องค์การบริหารส่วนตำบลนิคมพัฒนา',3),
	(38,'องค์การบริหารส่วนตำบลพนานิคม',3),
	(39,'เทศบาลตำบลชำฆ้อ',4),
	(40,'องค์การบริหารส่วนตำบลเขาชะเมา',4),
	(41,'องค์การบริหารส่วนตำบลเขาน้อย',4),
	(42,'องค์การบริหารส่วนตำบลน้ำเป็น',4),
	(43,'เทศบาลตำบลชุมแสง',5),
	(44,'องค์การบริหารส่วนตำบลชุมแสง',5),
	(45,'องค์การบริหารส่วนตำบลป่ายุบใน',5),
	(46,'องค์การบริหารส่วนตำบลวังจันทร์',5),
	(47,'องค์การบริหารส่วนตำบลพลงตาเอี่ยม',5),
	(48,'เทศบาลเมืองบ้านฉาง',6),
	(49,'เทศบาลตำบลบ้านฉาง',6),
	(50,'เทศบาลตำบลพลา',6),
	(51,'เทศบาลตำบลสำนักท้อน',6),
	(52,'องค์การบริหารส่วนตำบลสำนักท้อน',6),
	(53,'เทศบาลตำบลบ้านปลวกแดง',7),
	(54,'เทศบาลตำบลจอมพลเจ้าพระยา',7),
	(55,'องค์การบริหารส่วนตำบลปลวกแดง',7),
	(56,'องค์การบริหารส่วนตำบลตาสิทธิ์',7),
	(57,'องค์การบริหารส่วนตำบลละหาร',7),
	(58,'องค์การบริหารส่วนตำบลแม่น้ำคู้',7),
	(59,'องค์การบริหารส่วนตำบลมาบยางพร',7),
	(60,'องค์การบริหารส่วนตำบลหนองไร่',7),
	(61,'เทศบาลตำบลบ้านค่าย',8),
	(62,'เทศบาลตำบลบ้านค่ายพัฒนา',8),
	(63,'เทศบาลตำบลชากบก',8),
	(64,'องค์การบริหารส่วนตำบลตาขัน',8),
	(65,'องค์การบริหารส่วนตำบลหนองตะพาน',8),
	(66,'องค์การบริหารส่วนตำบลหนองละลอก',8),
	(67,'องค์การบริหารส่วนตำบลหนองบัว',8),
	(68,'องค์การบริหารส่วนตำบลบางบุตร',8);

/*!40000 ALTER TABLE `office` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table page
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page`;

CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;

INSERT INTO `page` (`id`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,'index','2014-08-03 15:18:47','2016-07-08 09:18:24'),
	(2,'contacts','2014-08-03 22:25:13','2015-06-18 16:08:00');

/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table page_translate
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page_translate`;

CREATE TABLE `page_translate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foreign_id` int(11) NOT NULL,
  `lang` varchar(20) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`id`),
  KEY `foreign_id` (`foreign_id`),
  KEY `lang` (`lang`),
  CONSTRAINT `page_translate_ibfk_1` FOREIGN KEY (`foreign_id`) REFERENCES `page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `page_translate_ibfk_2` FOREIGN KEY (`lang`) REFERENCES `language` (`iso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `page_translate` WRITE;
/*!40000 ALTER TABLE `page_translate` DISABLE KEYS */;

INSERT INTO `page_translate` (`id`, `foreign_id`, `lang`, `key`, `value`)
VALUES
	(1,1,'ru','title','Главная'),
	(2,1,'ru','meta_title','Главная'),
	(3,1,'ru','meta_description','meta-описание главной страницы'),
	(4,1,'ru','meta_keywords',''),
	(5,1,'ru','text','<h1>Yona CMS</h1>\r\n<p>Yona CMS - система управления контентом с открытым исходным кодом. Написана на <a href=\"http://phalconphp.com/\" target=\"_blank\">Phalcon PHP Framework</a>&nbsp;(версия 1.3.x).</p>\r\n<p>Имеет удобную модульную структуру. Предназначена для разработки как простых сайтов, так и крупных порталов и веб-приложений. Благодаря простой конфигурации и архитектуре, может быть легко модифицирована под любую задачу.</p>\r\n<p>Официальный репозиторий на&nbsp;<a href=\"https://github.com/oleksandr-torosh/yona-cms\" target=\"_blank\">Github</a></p>\r\n<h2>Подзаголовок</h2>\r\n<p>Съешь еще этих мягких французских булок да выпей чаю.&nbsp;Съешь еще этих мягких французских булок да выпей чаю.&nbsp;Съешь еще этих мягких французских булок да выпей чаю.&nbsp;Съешь еще этих мягких французских булок да выпей чаю.&nbsp;Съешь еще этих мягких французских булок да выпей чаю.&nbsp;Съешь еще этих мягких французских булок да выпей чаю.&nbsp;</p>\r\n<h3>Под-подзаголовок</h3>\r\n<p>Список:</p>\r\n<ul>\r\n<li>Первый&nbsp;пункт</li>\r\n<li>Второй пукт<br />\r\n<ul>\r\n<li>Вложенный уровень второго пункта</li>\r\n<li>Еще один</li>\r\n</ul>\r\n</li>\r\n<li>Третий пункт</li>\r\n</ul>\r\n<p>Таблица</p>\r\n<table class=\"table\" style=\"width: 100%;\">\r\n<tbody>\r\n<tr><th>Заглавие</th><th>Заглавие</th><th>Заглавие</th></tr>\r\n<tr>\r\n<td>Текст в ячейке</td>\r\n<td>Текст в ячейке</td>\r\n<td>Текст в ячейке</td>\r\n</tr>\r\n<tr>\r\n<td>Текст в ячейке</td>\r\n<td>Текст в ячейке</td>\r\n<td>Текст в ячейке</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Числовой список:</p>\r\n<ol>\r\n<li>Первый</li>\r\n<li>Второй</li>\r\n<li>Третий</li>\r\n</ol>'),
	(6,1,'en','title','Homepage'),
	(7,1,'en','meta_title','Homepage'),
	(8,1,'en','meta_description','meta-description of homepage'),
	(9,1,'en','meta_keywords',''),
	(10,1,'en','text','<h1>Yona CMS</h1>\r\n<p>Yona CMS - open source content management system. Written in <a href=\"http://phalconphp.com/\" target=\"_blank\">Phalcon PHP Framework</a>&nbsp;(version 1.3.x).</p>\r\n<p>Has a convenient modular structure. It is intended for the design of simple sites, and major portals and web applications. Thanks to its simple configuration and architecture, can be easily modified for any task.</p>\r\n<p>The official repository on&nbsp;<a href=\"https://github.com/oleksandr-torosh/yona-cms\" target=\"_blank\">Github</a></p>\r\n<h2>Subtitle</h2>\r\n<p>Proin aliquet eros vel magna semper facilisis. Nunc tellus urna, bibendum vitae malesuada vel, molestie non lectus. Suspendisse sit amet ante arcu. Maecenas interdum eu neque eu dapibus. Sed maximus elementum tortor at dapibus. Phasellus rhoncus odio vel suscipit dapibus. Nullam sed luctus mauris. Nunc blandit vitae nisl at malesuada. Sed ac est ut diam hendrerit sodales quis et massa. Proin aliquet vitae massa luctus ultricies. Nullam accumsan leo nibh, non varius tortor elementum auctor. Fusce sollicitudin a dui porttitor euismod. Ut at iaculis neque, nec finibus diam. Integer pharetra vehicula urna vitae imperdiet.</p>\r\n<h3>sub-subtitle</h3>\r\n<p>List:</p>\r\n<ul>\r\n<li>รูปแบบ</li>\r\n<li>Second item<br />\r\n<ul>\r\n<li>Inner level of second item</li>\r\n<li>Another one</li>\r\n</ul>\r\n</li>\r\n<li>Third item</li>\r\n</ul>\r\n<p>Table</p>\r\n<table class=\"table\" style=\"width: 100%;\">\r\n<tbody>\r\n<tr><th>Header</th><th>Header</th><th>Header</th></tr>\r\n<tr>\r\n<td>Text in cell</td>\r\n<td>Text in cell</td>\r\n<td>Text in cell</td>\r\n</tr>\r\n<tr>\r\n<td>Text in cell</td>\r\n<td>Text in cell</td>\r\n<td>Text in cell</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Decimal list:</p>\r\n<ol>\r\n<li>First</li>\r\n<li>Second</li>\r\n<li>Third</li>\r\n</ol>'),
	(11,2,'ru','title','Контакты'),
	(12,2,'ru','meta_title','Контакты'),
	(13,2,'ru','meta_description',''),
	(14,2,'ru','meta_keywords',''),
	(15,2,'ru','text','<h2>Контакты</h2>\r\n<p><a href=\"http://yonacms.com\">http://yonacms.com</a></p>'),
	(16,2,'en','title','Contacts'),
	(17,2,'en','meta_title','Contacts'),
	(18,2,'en','meta_description',''),
	(19,2,'en','meta_keywords',''),
	(20,2,'en','text','<h1>Contacts</h1>\r\n<p><a href=\"http://yonacms.com\">http://yonacms.com</a></p>'),
	(21,1,'uk','title','Головна'),
	(22,1,'uk','meta_title','Головна'),
	(23,1,'uk','meta_description','meta-description головної сторінки'),
	(24,1,'uk','meta_keywords',''),
	(25,1,'uk','text','<h1>Yona CMS</h1>\r\n<p>Yona CMS - система керування&nbsp;контентом з відкритим&nbsp;програмним кодом. Написана на <a href=\"http://phalconphp.com/\" target=\"_blank\">Phalcon PHP Framework</a>&nbsp;(версія 1.3.x).</p>\r\n<p>Має зручну&nbsp;модульную структуру. Призначена для розробки як простих сайтів, так і великих&nbsp;порталів та веб-застосунків. Завдяки&nbsp;простій конфігурації і архитектурі, може бути легко модифікована під будь-яку&nbsp;задачу.</p>\r\n<p>Офіційний репозиторій на&nbsp;<a href=\"https://github.com/oleksandr-torosh/yona-cms\" target=\"_blank\">Github</a></p>\r\n<h2>Підзаголовок</h2>\r\n<p>З\'їж ще цих м\'яких французьких булок і випий чаю.&nbsp;З\'їж ще цих м\'яких французьких булок і випий чаю.&nbsp;З\'їж ще цих м\'яких французьких булок і випий чаю.&nbsp;З\'їж ще цих м\'яких французьких булок і випий чаю.&nbsp;З\'їж ще цих м\'яких французьких булок і випий чаю.&nbsp;З\'їж ще цих м\'яких французьких булок і випий чаю.&nbsp;З\'їж ще цих м\'яких французьких булок і випий чаю.&nbsp;З\'їж ще цих м\'яких французьких булок і випий чаю.&nbsp;З\'їж ще цих м\'яких французьких булок і випий чаю.&nbsp;З\'їж ще цих м\'яких французьких булок і випий чаю.&nbsp;</p>\r\n<h3>Під-підзаголовок</h3>\r\n<p>Список:</p>\r\n<ul>\r\n<li>Перший&nbsp;пункт</li>\r\n<li>Другий&nbsp;пукт<br />\r\n<ul>\r\n<li>Вкладений рівень другого пункту</li>\r\n<li>Ще один</li>\r\n</ul>\r\n</li>\r\n<li>Третій пункт</li>\r\n</ul>\r\n<p>Таблиця</p>\r\n<table class=\"table\" style=\"width: 100%;\">\r\n<tbody>\r\n<tr><th>Заголовок</th><th>Заголовок</th><th>Заголовок</th></tr>\r\n<tr>\r\n<td>Текст в&nbsp;комірці</td>\r\n<td>Текст в&nbsp;комірці</td>\r\n<td>Текст в&nbsp;комірці</td>\r\n</tr>\r\n<tr>\r\n<td>Текст в&nbsp;комірці</td>\r\n<td>Текст в&nbsp;комірці</td>\r\n<td>Текст в&nbsp;комірці</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Числовий список:</p>\r\n<ol>\r\n<li>Перший</li>\r\n<li>Другий</li>\r\n<li>Третій</li>\r\n</ol>'),
	(26,2,'uk','title','Контакти'),
	(27,2,'uk','meta_title','Контакти'),
	(28,2,'uk','meta_description',''),
	(29,2,'uk','meta_keywords',''),
	(30,2,'uk','text','<h1>Контакти</h1>\r\n<p><a href=\"http://yonacms.com\">http://yonacms.com</a></p>');

/*!40000 ALTER TABLE `page_translate` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table publication
# ------------------------------------------------------------

DROP TABLE IF EXISTS `publication`;

CREATE TABLE `publication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `preview_inner` enum('1','0') DEFAULT '1',
  `preview_src` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`),
  CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `publication_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `publication` WRITE;
/*!40000 ALTER TABLE `publication` DISABLE KEYS */;

INSERT INTO `publication` (`id`, `type_id`, `slug`, `created_at`, `updated_at`, `date`, `preview_inner`, `preview_src`)
VALUES
	(1,1,'phalcon-132-released','2014-08-22 10:33:26','2015-06-26 16:48:36','2014-08-19 00:00:00','0','img/original/publication/0/1.jpg'),
	(2,1,'phalcon-community-hangout','2014-08-22 10:42:08','2015-06-26 16:48:44','2014-08-21 00:00:00','1','img/original/publication/0/2.jpg'),
	(3,2,'builtwith-phalcon','2014-11-05 18:00:20','2015-06-26 16:48:53','2014-11-05 00:00:00','1','img/original/publication/0/3.jpg'),
	(4,2,'vtoraya-statya','2014-11-06 18:23:17','2015-06-26 16:49:02','2014-11-06 00:00:00','0','img/original/publication/0/4.jpg'),
	(5,1,'new-modular-widgets-system','2015-04-29 10:42:49','2015-06-30 17:12:13','2015-06-05 14:32:44','0','img/original/publication/0/5.jpg');

/*!40000 ALTER TABLE `publication` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table publication_translate
# ------------------------------------------------------------

DROP TABLE IF EXISTS `publication_translate`;

CREATE TABLE `publication_translate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foreign_id` int(11) NOT NULL,
  `lang` varchar(20) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`id`),
  KEY `foreign_id` (`foreign_id`),
  KEY `lang` (`lang`),
  CONSTRAINT `publication_translate_ibfk_1` FOREIGN KEY (`foreign_id`) REFERENCES `publication` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `publication_translate_ibfk_2` FOREIGN KEY (`lang`) REFERENCES `language` (`iso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `publication_translate` WRITE;
/*!40000 ALTER TABLE `publication_translate` DISABLE KEYS */;

INSERT INTO `publication_translate` (`id`, `foreign_id`, `lang`, `key`, `value`)
VALUES
	(1,1,'ru','title','Релиз Phalcon 1.3.2'),
	(2,1,'ru','meta_title','Релиз Phalcon 1.3.2'),
	(3,1,'ru','meta_description',''),
	(4,1,'ru','meta_keywords',''),
	(5,1,'ru','text','<p>Релиз Phalcon 1.3.2. Дальше текст на английском...</p>\r\n<p>We are today releasing the much awaited 1.3.2 version.&nbsp;</p>\r\n<p>This version has a ton of contributions from our community and fixes to the framework. We thank everyone that has worked on this release, especially with their contributions both to 1.3.2 and our work in progress 2.0.0.</p>\r\n<p>Many thanks to dreamsxin, <a href=\"https://github.com/mruz\">mruz</a>, <a href=\"https://github.com/kjdev\">kjdev</a>, <a href=\"https://github.com/Cinderella-Man\">Cinderella-Man</a>, <a href=\"https://github.com/andreadelfino\">andreadelfino</a>, <a href=\"https://github.com/kfll\">kfll</a>, <a href=\"https://github.com/brandonlamb\">brandonlamb</a>, <a href=\"https://github.com/zacek\">zacek</a>, <a href=\"https://github.com/joni\">joni</a>, <a href=\"https://github.com/wandersonwhcr\">wandersonwhcr</a>, <a href=\"https://github.com/kevinhatry\">kevinhatry</a>, <a href=\"https://github.com/alkana\">alkana</a> and many others that have contributed either on <a href=\"https://github.com/phalcon/cphalcon\">Github or through discussion in our </a><a href=\"http://forum.phalconphp.com/\">forum</a>.</p>\r\n<p>The changelog can be found <a href=\"https://github.com/phalcon/cphalcon/blob/master/CHANGELOG\">here</a>.</p>\r\n<p>We also have a number of pull requests that have not made it to 1.3.2 but will be included to 1.3.3. We need to make sure that the fix or feature that each pull request offers are present both in 1.3.3 but also in 2.0.0</p>\r\n<p>A big thank you once again to our community! You guys are awesome!</p>\r\n<p>&lt;3 Phalcon Team</p>'),
	(6,2,'ru','title','Видеовстреча сообщества Phalcon'),
	(7,2,'ru','meta_title','Видеовстреча сообщества Phalcon'),
	(8,2,'ru','meta_description',''),
	(9,2,'ru','meta_keywords',''),
	(10,2,'ru','text','<p>Видеовстреча сообщества Phalcon.&nbsp;Дальше текст на английском...</p>\r\n<p>Yesterday (2014-04-05) we had our first Phalcon community hangout. The main purpose of the hangout was to meet the community, discuss about what Phalcon is and what our future steps are, and hear news, concerns, success stories from the community itself.</p>\r\n<p>We are excited to announce that the first Phalcon community hangout was a great success!</p>\r\n<p>We had an awesome turnout from all around the world, with members of the community filling the hangout (10 concurrent users) and more viewing online, asking questions and interacting with the team.</p>\r\n<p>We talked about where we are, where we came from and what the future steps are with Zephir and Phalcon 2.0. Contributions, bugs and NFRs were also topics in our discussion, as well as who are team and how Phalcon is funded.</p>\r\n<p>More hangouts will be scheduled in the near future, hopefully making this a regular event for our community. We will also cater for members of the community that are not English speakers, by creating hangouts for Spanish speaking, Russian etc. The goal is to engage as many members as possible!</p>\r\n<p>The love and trust you all have shown to our framework is what drives us to make it better, push performance, introduce more features and make Phalcon the best PHP framework there is.&nbsp;</p>\r\n<p>For those that missed it, the video is below.</p>'),
	(11,1,'en','title','Phalcon 1.3.2 Released'),
	(12,1,'en','meta_title','Phalcon 1.3.2 Released'),
	(13,1,'en','meta_description',''),
	(14,1,'en','meta_keywords',''),
	(15,1,'en','text','<p>We are today releasing the much awaited 1.3.2 version.&nbsp;</p>\r\n<p>This version has a ton of contributions from our community and fixes to the framework. We thank everyone that has worked on this release, especially with their contributions both to 1.3.2 and our work in progress 2.0.0.</p>\r\n<p>Many thanks to dreamsxin, <a href=\"https://github.com/mruz\">mruz</a>, <a href=\"https://github.com/kjdev\">kjdev</a>, <a href=\"https://github.com/Cinderella-Man\">Cinderella-Man</a>, <a href=\"https://github.com/andreadelfino\">andreadelfino</a>, <a href=\"https://github.com/kfll\">kfll</a>, <a href=\"https://github.com/brandonlamb\">brandonlamb</a>, <a href=\"https://github.com/zacek\">zacek</a>, <a href=\"https://github.com/joni\">joni</a>, <a href=\"https://github.com/wandersonwhcr\">wandersonwhcr</a>, <a href=\"https://github.com/kevinhatry\">kevinhatry</a>, <a href=\"https://github.com/alkana\">alkana</a> and many others that have contributed either on <a href=\"https://github.com/phalcon/cphalcon\">Github or through discussion in our </a><a href=\"http://forum.phalconphp.com/\">forum</a>.</p>\r\n<p>The changelog can be found <a href=\"https://github.com/phalcon/cphalcon/blob/master/CHANGELOG\">here</a>.</p>\r\n<p>We also have a number of pull requests that have not made it to 1.3.2 but will be included to 1.3.3. We need to make sure that the fix or feature that each pull request offers are present both in 1.3.3 but also in 2.0.0</p>\r\n<p>A big thank you once again to our community! You guys are awesome!</p>\r\n<p>&lt;3 Phalcon Team</p>'),
	(16,1,'uk','title','Реліз Phalcon 1.3.2'),
	(17,1,'uk','meta_title','Реліз Phalcon 1.3.2'),
	(18,1,'uk','meta_description',''),
	(19,1,'uk','meta_keywords',''),
	(20,1,'uk','text','<p>Реліз Phalcon 1.3.2. Далі текст англійською...</p>\r\n<p>We are today releasing the much awaited 1.3.2 version.&nbsp;</p>\r\n<p>This version has a ton of contributions from our community and fixes to the framework. We thank everyone that has worked on this release, especially with their contributions both to 1.3.2 and our work in progress 2.0.0.</p>\r\n<p>Many thanks to dreamsxin, <a href=\"https://github.com/mruz\">mruz</a>, <a href=\"https://github.com/kjdev\">kjdev</a>, <a href=\"https://github.com/Cinderella-Man\">Cinderella-Man</a>, <a href=\"https://github.com/andreadelfino\">andreadelfino</a>, <a href=\"https://github.com/kfll\">kfll</a>, <a href=\"https://github.com/brandonlamb\">brandonlamb</a>, <a href=\"https://github.com/zacek\">zacek</a>, <a href=\"https://github.com/joni\">joni</a>, <a href=\"https://github.com/wandersonwhcr\">wandersonwhcr</a>, <a href=\"https://github.com/kevinhatry\">kevinhatry</a>, <a href=\"https://github.com/alkana\">alkana</a> and many others that have contributed either on <a href=\"https://github.com/phalcon/cphalcon\">Github or through discussion in our </a><a href=\"http://forum.phalconphp.com/\">forum</a>.</p>\r\n<p>The changelog can be found <a href=\"https://github.com/phalcon/cphalcon/blob/master/CHANGELOG\">here</a>.</p>\r\n<p>We also have a number of pull requests that have not made it to 1.3.2 but will be included to 1.3.3. We need to make sure that the fix or feature that each pull request offers are present both in 1.3.3 but also in 2.0.0</p>\r\n<p>A big thank you once again to our community! You guys are awesome!</p>\r\n<p>&lt;3 Phalcon Team</p>'),
	(21,2,'en','title','Phalcon Community Hangout'),
	(22,2,'en','meta_title','Phalcon Community Hangout'),
	(23,2,'en','meta_description',''),
	(24,2,'en','meta_keywords',''),
	(25,2,'en','text','<p>Yesterday (2014-04-05) we had our first Phalcon community hangout. The main purpose of the hangout was to meet the community, discuss about what Phalcon is and what our future steps are, and hear news, concerns, success stories from the community itself.</p>\r\n<p>We are excited to announce that the first Phalcon community hangout was a great success!</p>\r\n<p>We had an awesome turnout from all around the world, with members of the community filling the hangout (10 concurrent users) and more viewing online, asking questions and interacting with the team.</p>\r\n<p>We talked about where we are, where we came from and what the future steps are with Zephir and Phalcon 2.0. Contributions, bugs and NFRs were also topics in our discussion, as well as who are team and how Phalcon is funded.</p>\r\n<p>More hangouts will be scheduled in the near future, hopefully making this a regular event for our community. We will also cater for members of the community that are not English speakers, by creating hangouts for Spanish speaking, Russian etc. The goal is to engage as many members as possible!</p>\r\n<p>The love and trust you all have shown to our framework is what drives us to make it better, push performance, introduce more features and make Phalcon the best PHP framework there is.&nbsp;</p>\r\n<p>For those that missed it, the video is below.</p>'),
	(26,2,'uk','title','Відеозустріч спільноти Phalcon'),
	(27,2,'uk','meta_title','Відеозустріч спільноти Phalcon'),
	(28,2,'uk','meta_description',''),
	(29,2,'uk','meta_keywords',''),
	(30,2,'uk','text','<p>Відеозустріч спільноти Phalcon. Далі текст англійською...</p>\r\n<p>Yesterday (2014-04-05) we had our first Phalcon community hangout. The main purpose of the hangout was to meet the community, discuss about what Phalcon is and what our future steps are, and hear news, concerns, success stories from the community itself.</p>\r\n<p>We are excited to announce that the first Phalcon community hangout was a great success!</p>\r\n<p>We had an awesome turnout from all around the world, with members of the community filling the hangout (10 concurrent users) and more viewing online, asking questions and interacting with the team.</p>\r\n<p>We talked about where we are, where we came from and what the future steps are with Zephir and Phalcon 2.0. Contributions, bugs and NFRs were also topics in our discussion, as well as who are team and how Phalcon is funded.</p>\r\n<p>More hangouts will be scheduled in the near future, hopefully making this a regular event for our community. We will also cater for members of the community that are not English speakers, by creating hangouts for Spanish speaking, Russian etc. The goal is to engage as many members as possible!</p>\r\n<p>The love and trust you all have shown to our framework is what drives us to make it better, push performance, introduce more features and make Phalcon the best PHP framework there is.&nbsp;</p>\r\n<p>For those that missed it, the video is below.</p>'),
	(31,3,'ru','title','BuiltWith Phalcon'),
	(32,3,'ru','meta_title','BuiltWith Phalcon'),
	(33,3,'ru','meta_description',''),
	(34,3,'ru','meta_keywords',''),
	(35,3,'ru','text','<p>Today we are launching a new site that would help us spread the word about Phalcon and show where Phalcon is used, whether this is production applications, hobby projects or tutorials.</p>\r\n<p>Introducing <a href=\"http://builtwith.phalconphp.com/\">builtwith.phalconphp.com</a></p>\r\n<p>Taking the example from our friends at <a href=\"http://www.angularjs.org/\">AngularJS</a> we have cloned their <a href=\"https://github.com/angular/builtwith.angularjs.org\">repository</a> and we have Phalcon-ized it. Special thanks to the <a href=\"http://en.wikipedia.org/wiki/AngularJS\">AngularJS</a>team as well as <a href=\"https://github.com/oaass\">Ole Aass</a> (<a href=\"http://oleaass.com/\">website</a>) who is leading the project.</p>\r\n<p>The new site has a very easy interface that users can navigate to and even search for projects with tags.&nbsp;</p>\r\n<p>You can add your own project by simply cloning our <a href=\"https://github.com/phalcon/builtwith\">repository</a> and adding your project as well as a logo and screenshots and then issue a pull request for it to appear in the live site.</p>\r\n<p>Looking forward to seeing your projects listed up there!</p>\r\n<p>&lt;3 The Phalcon Team</p>'),
	(36,4,'ru','title','Вторая статья'),
	(37,4,'ru','meta_title','Вторая статья'),
	(38,4,'ru','meta_description',''),
	(39,4,'ru','meta_keywords',''),
	(40,4,'ru','text','<p>Текст второй статьи</p>'),
	(41,3,'en','title','BuiltWith Phalcon'),
	(42,3,'en','meta_title','BuiltWith Phalcon'),
	(43,3,'en','meta_description',''),
	(44,3,'en','meta_keywords',''),
	(45,3,'en','text','<p>Today we are launching a new site that would help us spread the word about Phalcon and show where Phalcon is used, whether this is production applications, hobby projects or tutorials.</p>\r\n<p>Introducing <a href=\"http://builtwith.phalconphp.com/\">builtwith.phalconphp.com</a></p>\r\n<p>Taking the example from our friends at <a href=\"http://www.angularjs.org/\">AngularJS</a> we have cloned their <a href=\"https://github.com/angular/builtwith.angularjs.org\">repository</a> and we have Phalcon-ized it. Special thanks to the <a href=\"http://en.wikipedia.org/wiki/AngularJS\">AngularJS</a>team as well as <a href=\"https://github.com/oaass\">Ole Aass</a> (<a href=\"http://oleaass.com/\">website</a>) who is leading the project.</p>\r\n<p>The new site has a very easy interface that users can navigate to and even search for projects with tags.&nbsp;</p>\r\n<p>You can add your own project by simply cloning our <a href=\"https://github.com/phalcon/builtwith\">repository</a> and adding your project as well as a logo and screenshots and then issue a pull request for it to appear in the live site.</p>\r\n<p>Looking forward to seeing your projects listed up there!</p>\r\n<p>&lt;3 The Phalcon Team</p>'),
	(46,3,'uk','title','BuiltWith Phalcon'),
	(47,3,'uk','meta_title','BuiltWith Phalcon'),
	(48,3,'uk','meta_description',''),
	(49,3,'uk','meta_keywords',''),
	(50,3,'uk','text','<p>Today we are launching a new site that would help us spread the word about Phalcon and show where Phalcon is used, whether this is production applications, hobby projects or tutorials.</p>\r\n<p>Introducing <a href=\"http://builtwith.phalconphp.com/\">builtwith.phalconphp.com</a></p>\r\n<p>Taking the example from our friends at <a href=\"http://www.angularjs.org/\">AngularJS</a> we have cloned their <a href=\"https://github.com/angular/builtwith.angularjs.org\">repository</a> and we have Phalcon-ized it. Special thanks to the <a href=\"http://en.wikipedia.org/wiki/AngularJS\">AngularJS</a>team as well as <a href=\"https://github.com/oaass\">Ole Aass</a> (<a href=\"http://oleaass.com/\">website</a>) who is leading the project.</p>\r\n<p>The new site has a very easy interface that users can navigate to and even search for projects with tags.&nbsp;</p>\r\n<p>You can add your own project by simply cloning our <a href=\"https://github.com/phalcon/builtwith\">repository</a> and adding your project as well as a logo and screenshots and then issue a pull request for it to appear in the live site.</p>\r\n<p>Looking forward to seeing your projects listed up there!</p>\r\n<p>&lt;3 The Phalcon Team</p>'),
	(51,4,'en','title','Second article'),
	(52,4,'en','meta_title','Second article'),
	(53,4,'en','meta_description',''),
	(54,4,'en','meta_keywords',''),
	(55,4,'en','text','<p>Second article text</p>'),
	(56,4,'uk','title','Друга стаття'),
	(57,4,'uk','meta_title','Друга стаття'),
	(58,4,'uk','meta_description',''),
	(59,4,'uk','meta_keywords',''),
	(60,4,'uk','text','<p>Текст другої статті</p>'),
	(61,5,'en','title','New modular widgets system'),
	(62,5,'en','meta_title','New widgets system'),
	(63,5,'en','meta_description',''),
	(64,5,'en','meta_keywords',''),
	(65,5,'en','text','<p>Here is the new features of YonaCMS - \"System of modular widgets\".</p>\r\n<p>Now, in any of your modules, you can create dynamic widgets with their business logic and templates. Forget about dozens of separate helper and the need to do the same routine operations! Also, this scheme will maintain cleanliness and order in the code for your project.</p>\r\n<p>Call each widget can be produced directly from the template Volt with the transfer set of parameters. Each widget is automatically cached and does not lead to additional load on the database. Caching can be disabled in the administrative panel, see Admin -&gt; Settings, option \"Widgets caching\". Automatic regeneration of the cache is carried out after 60 seconds.</p>\r\n<p>As an example of such a call is made to the widget template\'s main page /app/modules/Index/views/index.volt</p>\r\n<pre>{{Helper.widget (\'Publication\'). LastNews ()}}</pre>\r\n<p><br />Files widget:<br />/app/modules/Publication/Widget/PublicationWidget.php - inherits \\ Application \\ Widget \\ AbstractWidget<br />/app/modules/Publication/views/widget/last-news.volt - template output</p>\r\n<p>The main class of the widget - \\ Application \\ Widget \\ Proxy<br />It is possible to set the default value for time caching.</p>\r\n<p>This system will be very useful for developers who have a lot of individual information units, as well as those who want to keep your code clean and easy tool to use.</p>'),
	(66,5,'ru','title','Новая система модульных виджетов'),
	(67,5,'ru','meta_title','Новая система виджетов'),
	(68,5,'ru','meta_description',''),
	(69,5,'ru','meta_keywords',''),
	(70,5,'ru','text','<p>Представляем вам новый функционал от YonaCMS - \"Систему модульных виджетов\".</p>\r\n<p>Теперь в любом из ваших модулей вы можете создать динамические виджеты со своей бизнес-логикой и шаблонами. Забудьте о десятках отдельных хелперов и необходимости делать одни и те же рутинные операции! Также эта схема позволит поддерживать чистоту и порядок в коде вашего проекта.</p>\r\n<p>Вызов каждого виджета может быть произведен непосредственно с шаблона Volt с передачей набора параметров. Каждый виджет автоматически кешируется и не влечет дополнительной нагрузки на базу данных. Кеширование можно отключить в административной панели в разделе Admin -&gt; Settings, опция \"Widgets caching\". Автоматическая перегенерация кеша осуществляется через 60 секунд.</p>\r\n<p>В качестве примера сделан вызов такого виджета в шаблоне главной страницы /app/modules/Index/views/index.volt</p>\r\n<pre>{{ helper.widget(\'Publication\').lastNews() }}</pre>\r\n<p><br />Файлы виджета:<br />/app/modules/Publication/Widget/PublicationWidget.php - наследует класс \\Application\\Widget\\AbstractWidget<br />/app/modules/Publication/views/widget/last-news.volt - шаблон вывода</p>\r\n<p>Основной класс системы виджетов - \\Application\\Widget\\Proxy<br />В нем можно установить дефолтное значение времени кеширования.</p>\r\n<p>Данная система будет очень полезна для разработчиков, которые имеют много отдельных информационных блоков, а также тем, кто хочет поддерживать свой код в чистоте и пользоваться удобным инструментом.</p>'),
	(71,5,'uk','title','Нова система модульних віджетів'),
	(72,5,'uk','meta_title','Нова система віджетів'),
	(73,5,'uk','meta_description',''),
	(74,5,'uk','meta_keywords',''),
	(75,5,'uk','text','<p>Представляємо вам новий функціонал від YonaCMS - \"Систему модульних віджетів\".</p>\r\n<p>Тепер в будь-якому з ваших модулів ви можете створити динамічні віджети з власною&nbsp;бізнес-логікою і шаблонами. Забудьте про десятки окремих хелперів та необхідності робити одні і ті ж самі рутинні операції! Також ця схема дозволить підтримувати чистоту і порядок у коді вашого проекту.</p>\r\n<p>Виклик кожного віджета може бути проведений безпосередньо з шаблону Volt з передачею набору параметрів. Кожен віджет автоматично кешуєтся і не тягне додаткового навантаження на базу даних. Кешування можна відключити в адміністративній панелі в розділі Admin -&gt; Settings, опція \"Widgets caching\". Автоматична перегенерація кеша здійснюється через 60 секунд.</p>\r\n<p>Як приклад зроблений виклик такого віджета в шаблоні головної сторінки /app/modules/Index/views/index.volt</p>\r\n<pre>{{Helper.widget (\'Publication\'). LastNews ()}}</pre>\r\n<p><br />Файли віджету:<br />/app/modules/Publication/Widget/PublicationWidget.php - успадковує клас \\ Application \\ Widget \\ AbstractWidget<br />/app/modules/Publication/views/widget/last-news.volt - шаблон виводу</p>\r\n<p>Основний клас системи віджетів - \\ Application \\ Widget \\ Proxy<br />У ньому можна встановити дефолтне значення часу кешування.</p>\r\n<p>Дана система буде дуже корисною для розробників, які мають багато окремих інформаційних блоків, а також тим, хто хоче підтримувати свій код в чистоті і користуватися зручним інструментом.</p>');

/*!40000 ALTER TABLE `publication_translate` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table publication_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `publication_type`;

CREATE TABLE `publication_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) DEFAULT NULL,
  `limit` int(4) DEFAULT NULL,
  `format` enum('list','grid') DEFAULT NULL,
  `display_date` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `publication_type` WRITE;
/*!40000 ALTER TABLE `publication_type` DISABLE KEYS */;

INSERT INTO `publication_type` (`id`, `slug`, `limit`, `format`, `display_date`)
VALUES
	(1,'news',10,'grid','1'),
	(2,'articles',10,'list','0');

/*!40000 ALTER TABLE `publication_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table publication_type_translate
# ------------------------------------------------------------

DROP TABLE IF EXISTS `publication_type_translate`;

CREATE TABLE `publication_type_translate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foreign_id` int(11) NOT NULL,
  `lang` varchar(20) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`id`),
  KEY `foreign_id` (`foreign_id`),
  KEY `lang` (`lang`),
  CONSTRAINT `publication_type_translate_ibfk_1` FOREIGN KEY (`foreign_id`) REFERENCES `publication_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `publication_type_translate_ibfk_2` FOREIGN KEY (`lang`) REFERENCES `language` (`iso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `publication_type_translate` WRITE;
/*!40000 ALTER TABLE `publication_type_translate` DISABLE KEYS */;

INSERT INTO `publication_type_translate` (`id`, `foreign_id`, `lang`, `key`, `value`)
VALUES
	(1,1,'ru','head_title','Новости'),
	(2,1,'ru','meta_description',''),
	(3,1,'ru','meta_keywords',''),
	(4,1,'ru','seo_text',''),
	(54,1,'en','title','News'),
	(55,1,'en','head_title','News'),
	(56,1,'en','meta_description',''),
	(57,1,'en','meta_keywords',''),
	(58,1,'en','seo_text',''),
	(59,1,'uk','title','Новини'),
	(60,1,'uk','head_title','Новини'),
	(61,1,'uk','meta_description',''),
	(62,1,'uk','meta_keywords',''),
	(63,1,'uk','seo_text',''),
	(64,1,'ru','title','Новости'),
	(65,2,'ru','title','Статьи'),
	(66,2,'ru','head_title','Статьи'),
	(67,2,'ru','meta_description',''),
	(68,2,'ru','meta_keywords',''),
	(69,2,'ru','seo_text',''),
	(70,2,'en','title','Articles'),
	(71,2,'en','head_title','Articles'),
	(72,2,'en','meta_description',''),
	(73,2,'en','meta_keywords',''),
	(74,2,'en','seo_text',''),
	(75,2,'uk','title','Статті'),
	(76,2,'uk','head_title','Статті'),
	(77,2,'uk','meta_description',''),
	(78,2,'uk','meta_keywords',''),
	(79,2,'uk','seo_text','');

/*!40000 ALTER TABLE `publication_type_translate` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table question
# ------------------------------------------------------------

DROP TABLE IF EXISTS `question`;

CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sessionid` int(11) DEFAULT NULL,
  `no` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index session in` (`sessionid`),
  CONSTRAINT `session in` FOREIGN KEY (`sessionid`) REFERENCES `session` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;

INSERT INTO `question` (`id`, `sessionid`, `no`, `description`, `status`)
VALUES
	(1,1,'1.1','แผนที่แสดงอาณาเขตการปกครอง',1),
	(2,1,'1.2','พื้นที่',1),
	(3,1,'1.3.1','อาณาเขตทางทิศเหนือ ติดต่อกับ',1),
	(4,1,'1.3.2','อาณาเขตทางทิศใต้ ติดต่อกับ',1),
	(5,1,'1.3.3','อาณาเขตทางทิศตะวันตก ติดต่อกับ',1),
	(6,1,'1.3.4','อาณาเขตทางทิศตะวันออก ติดต่อกับ',1),
	(7,2,'1.2.1.1','ชาย',1),
	(8,2,'1.2.1.2','หญิง',1),
	(9,2,'1.2.2.1','เด็ก (ทารก - 17 ปี) ชาย',1),
	(10,2,'1.2.2.2','เด็ก (ทารก - 17 ปี) หญิง',1),
	(11,2,'1.2.3.1','วัยรุ่น (18 - 25 ปี) ชาย',1),
	(12,2,'1.2.3.2','วัยรุ่น (18 - 25 ปี) หญิง',1),
	(13,2,'1.2.4.1','ผู้ใหญ่ (26 - 60 ปี) ชาย',1),
	(14,2,'1.2.4.2','ผู้ใหญ่ (26 - 60 ปี) หญิง',1),
	(15,2,'1.2.5.1','คนชรา (60 ปี ขึ้นไป) ชาย',1),
	(16,2,'1.2.5.2','คนชรา (60 ปี ขึ้นไป) หญิง',1),
	(17,2,'1.2.6.1','ประชากรแฝงจำนวน',1),
	(18,2,'1.2.7.1','ประชากรแฝง(ต่างด้าว)',1),
	(19,2,'1.2.8.1','ประชากรที่พิการหรือทุพพลภาพหรือป่วยเรื้อรังในเขตพี้นที่ จำนวน',1),
	(20,2,'1.2.9','ความหนาแน่นของประชากร',1),
	(21,2,'1.2.10','ประชากรที่ประกอบอาชีพเกษตรกรรมจำนวน',1),
	(22,2,'1.2.11','ประชากรที่ประกอบอาชีพรับจ้างในโรงงานอุตสาหกรรมจำนวน',1),
	(23,2,'1.2.12','ประชากรที่ประกอบอาชีพอื่นจำนวน',1),
	(24,2,'1.2.13','สถานที่ท่องเที่ยวที่สำคัญในเขตพื้นที่รับผิดชอบจำนวน',1),
	(25,3,'2.1.1','ถนนจำนวน',1),
	(26,3,'2.1.2.1','จำนวน 1',1),
	(27,3,'2.1.2.2','ระยะทาง 1',1),
	(28,3,'2.1.3.1','จำนวน 2',1),
	(29,3,'2.1.3.2','ระยะทาง 2',1),
	(30,3,'2.1.4.1','จำนวน 3',1),
	(31,3,'2.1.4.2','ระยะทาง 3',1),
	(32,3,'2.1.5.1','ประเภทถนน 4',1),
	(33,3,'2.1.5.2','จำนวน 4',1),
	(34,3,'2.1.5.3','ระยะทาง 4',1),
	(35,3,'2.1.6','สะพาน',1),
	(36,4,'2.2.1','รถโดยสารที่ให้บริการจำนวน',1),
	(37,4,'2.2.2','อื่นๆ',1),
	(38,4,'2.3.1','ที่ทำการไปรษณีย์',1),
	(39,4,'2.3.2','สถานีวิทยุกระจายเสียง',1),
	(40,4,'2.3.3','สถานีวิทยุโทรทัศน์',1),
	(41,4,'2.3.4','สื่อมวลชนในพื้นที่/หนังสือพิมพ์',1),
	(42,4,'2.3.5','การให้บริการอินเตอร์เน็ต',1),
	(43,4,'2.3.6','ระบบเสียงตามสาย/หอกระจายข่าวในพื้นที่',1),
	(44,4,'2.3.7','หน่วยงานที่มีข่ายวิทยุสื่อสารในพื้นที่',1),
	(45,5,'2.4.1','ครัวเรือนที่ใช้ไฟฟ้า',1),
	(46,5,'2.4.2','พื้นที่ที่ได้รับบริการไฟฟ้า ร้อยละ',1),
	(47,5,'2.4.3','ไฟฟ้าส่องสว่างสารธารณะ จำนวน',1),
	(48,5,'2.4.4','จุด/ครอบคลุมถนน',1),
	(49,6,'2.5.1','พื้นที่พักอาศัย',1),
	(50,6,'2.5.2','พื้นที่พาณิชยกรรม',1),
	(51,6,'2.5.3','พื้นที่ตั้งหน่วยงานของรัฐ',1),
	(52,6,'2.5.4','สวนสาธารณะ/นันทนาการ',1),
	(53,6,'2.5.5','พื้นที่เกษตรกรรม',1),
	(54,6,'2.5.6','พื้นที่ตั้งสถานศึกษา',1),
	(55,6,'2.5.7','พื้นที่ว่าง',1),
	(56,6,'2.5.8','พื้นที่ทั้งหมด',1),
	(57,7,'3.1','รายได้เฉลี่ยประชากร',1),
	(58,7,'3.2.1','สถานีบริการน้ำมัน',1),
	(59,7,'3.2.2','ศูนย์การค้า/ห้างสรรพสินค้า',1),
	(60,8,'3.2.3','ตลาดสด',1),
	(61,8,'3.2.4','ร้านค้าทั่วไป',1),
	(62,8,'3.3.1','สถานธนานุบาล',1),
	(63,8,'3.3.2','ท่าเทียบเรือ',1),
	(64,8,'3.3.3','โรงฆ่าสัตว์',1),
	(65,9,'3.4.1','โรงแรม',1),
	(66,9,'3.4.2','ธนาคาร',1),
	(67,9,'3.4.3','โรงภาพยนตร์',1),
	(68,9,'3.4.4','สถานที่จำหน่ายอาหาร ตาม พ.ร.บ. สาธารณสุข',1),
	(69,10,'3.5.1','โรงงาน จำนวน',1),
	(70,10,'3.5.2','แรงงาน จำนวน',1),
	(71,11,'3.6.1','แหล่งท่องเที่ยว จำนวน',1),
	(72,11,'3.6.2','นักท่องเที่ยว จำนวน',1),
	(73,11,'3.6.3','รายได้จากการท่องเที่ยว จำนวน',1),
	(74,12,'4.1','ชุมชน จำนวน ',1),
	(75,12,'4.2','ครัวเรือน จำนวน ',1),
	(76,13,'4.3.1','ผู้นับถือศาสนาพุทธ ร้อยละ',1),
	(77,13,'4.3.2','วัด จำนวน ',1),
	(78,13,'4.3.3','ผู้นับถือศาสนาอิสลาม ร้อยละ',1),
	(79,13,'4.3.4','มัสยิด จำนวน',1),
	(80,13,'4.3.5','ผู้นับถือศาสนาคริสต์ ร้อยละ',1),
	(81,13,'4.3.6','โบสถ์ทางคริสต์ศาสนา จำนวน',1),
	(82,13,'4.3.7','ผู้นับถือศาสนาอื่นๆ ร้อยละ',1),
	(83,13,'4.3.8','ผู้ไม่นับถือศาสนาใดเลย ร้อยละ',1),
	(84,14,'4.4.1.1','ชื่อประเพณี 1',1),
	(85,14,'4.4.1.2','เดือน',1),
	(86,14,'4.4.1.3','กิจกรรมโดยสังเขป',1),
	(87,14,'4.4.2.1','ชื่อประเพณี 2',1),
	(88,14,'4.4.2.2','เดือน',1),
	(89,14,'4.4.2.3','กิจกรรมโดยสังเขป',1),
	(90,14,'4.4.3.1','ชื่อประเพณี 3',1),
	(91,14,'4.4.3.2','เดือน',1),
	(92,14,'4.4.3.3','กิจกรรมโดยสังเขป',1),
	(93,14,'4.4.4.1','ชื่อประเพณี 4',1),
	(94,14,'4.4.4.2','เดือน',1),
	(95,14,'4.4.4.3','กิจกรรมโดยสังเขป',1),
	(96,14,'4.4.5.1','ชื่อประเพณี 5',1),
	(97,14,'4.4.5.2','เดือน',1),
	(98,14,'4.4.5.3','กิจกรรมโดยสังเขป',1),
	(99,15,'4.5.1.1.1','จำนวนโรงเรียน ท้องถิ่น',1),
	(100,15,'4.5.1.1.2','จำนวนโรงเรียน สพฐ.',1),
	(101,15,'4.5.1.1.3','จำนวนโรงเรียน กรมสามัญฯ',1),
	(102,15,'4.5.1.1.4','จำนวนโรงเรียน กรมอาชีวฯ',1),
	(103,15,'4.5.1.1.5','รวม',1),
	(104,15,'4.5.1.2.1','จำนวนห้องเรียน ท้องถิ่น',1),
	(105,15,'4.5.1.2.2','จำนวนห้องเรียน สพฐ.',1),
	(106,15,'4.5.1.2.3','จำนวนห้องเรียน กรมสามัญฯ',1),
	(107,15,'4.5.1.2.4','จำนวนห้องเรียน กรมอาชีวฯ',1),
	(108,15,'4.5.1.2.5','รวม',1),
	(109,15,'4.5.1.3.1','จำนวนนักเรียน ท้องถิ่น',1),
	(110,15,'4.5.1.3.2','จำนวนนักเรียน สพฐ.',1),
	(111,15,'4.5.1.3.3','จำนวนนักเรียน กรมสามัญฯ',1),
	(112,15,'4.5.1.3.4','จำนวนนักเรียน กรมอาชีวฯ',1),
	(113,15,'4.5.1.3.5','รวม',1),
	(114,15,'4.5.1.4.1','จำนวนครู อาจารย์ ท้องถิ่น',1),
	(115,15,'4.5.1.4.2','จำนวนครู อาจารย์ สพฐ.',1),
	(116,15,'4.5.1.4.3','จำนวนครู อาจารย์ กรมสามัญฯ',1),
	(117,15,'4.5.1.4.4','จำนวนครู อาจารย์ กรมอาชีวฯ',1),
	(118,15,'4.5.1.4.5','รวม',1),
	(119,15,'4.5.2.1.1','จำนวนโรงเรียน ท้องถิ่น',1),
	(120,15,'4.5.2.1.2','จำนวนโรงเรียน สพฐ.',1),
	(121,15,'4.5.2.1.3','จำนวนโรงเรียน กรมสามัญฯ',1),
	(122,15,'4.5.2.1.4','จำนวนโรงเรียน กรมอาชีวฯ',1),
	(123,15,'4.5.2.1.5','รวม',1),
	(124,15,'4.5.2.2.1','จำนวนห้องเรียน ท้องถิ่น',1),
	(125,15,'4.5.2.2.2','จำนวนห้องเรียน สพฐ.',1),
	(126,15,'4.5.2.2.3','จำนวนห้องเรียน กรมสามัญฯ',1),
	(127,15,'4.5.2.2.4','จำนวนห้องเรียน กรมอาชีวฯ',1),
	(128,15,'4.5.2.2.5','รวม',1),
	(129,15,'4.5.2.3.1','จำนวนนักเรียน ท้องถิ่น',1),
	(130,15,'4.5.2.3.2','จำนวนนักเรียน สพฐ.',1),
	(131,15,'4.5.2.3.3','จำนวนนักเรียน กรมสามัญฯ',1),
	(132,15,'4.5.2.3.4','จำนวนนักเรียน กรมอาชีวฯ',1),
	(133,15,'4.5.2.3.5','รวม',1),
	(134,15,'4.5.2.4.1','จำนวนครู อาจารย์ ท้องถิ่น',1),
	(135,15,'4.5.2.4.2','จำนวนครู อาจารย์ สพฐ.',1),
	(136,15,'4.5.2.4.3','จำนวนครู อาจารย์ กรมสามัญฯ',1),
	(137,15,'4.5.2.4.4','จำนวนครู อาจารย์ กรมอาชีวฯ',1),
	(138,15,'4.5.2.4.5','รวม',1),
	(139,15,'4.5.3.1.1','จำนวนโรงเรียน ท้องถิ่น',1),
	(140,15,'4.5.3.1.2','จำนวนโรงเรียน สพฐ.',1),
	(141,15,'4.5.3.1.3','จำนวนโรงเรียน กรมสามัญฯ',1),
	(142,15,'4.5.3.1.4','จำนวนโรงเรียน กรมอาชีวฯ',1),
	(143,15,'4.5.3.1.5','รวม',1),
	(144,15,'4.5.3.2.1','จำนวนห้องเรียน ท้องถิ่น',1),
	(145,15,'4.5.3.2.2','จำนวนห้องเรียน สพฐ.',1),
	(146,15,'4.5.3.2.3','จำนวนห้องเรียน กรมสามัญฯ',1),
	(147,15,'4.5.3.2.4','จำนวนห้องเรียน กรมอาชีวฯ',1),
	(148,15,'4.5.3.2.5','รวม',1),
	(149,15,'4.5.3.3.1','จำนวนนักเรียน ท้องถิ่น',1),
	(150,15,'4.5.3.3.2','จำนวนนักเรียน สพฐ.',1),
	(151,15,'4.5.3.3.3','จำนวนนักเรียน กรมสามัญฯ',1),
	(152,15,'4.5.3.3.4','จำนวนนักเรียน กรมอาชีวฯ',1),
	(153,15,'4.5.3.3.5','รวม',1),
	(154,15,'4.5.3.4.1','จำนวนครู อาจารย์ ท้องถิ่น',1),
	(155,15,'4.5.3.4.2','จำนวนครู อาจารย์ สพฐ.',1),
	(156,15,'4.5.3.4.3','จำนวนครู อาจารย์ กรมสามัญฯ',1),
	(157,15,'4.5.3.4.4','จำนวนครู อาจารย์ กรมอาชีวฯ',1),
	(158,15,'4.5.3.4.5','รวม',1),
	(159,15,'4.5.4.1.1','จำนวนโรงเรียน ท้องถิ่น',1),
	(160,15,'4.5.4.1.2','จำนวนโรงเรียน สพฐ.',1),
	(161,15,'4.5.4.1.3','จำนวนโรงเรียน กรมสามัญฯ',1),
	(162,15,'4.5.4.1.4','จำนวนโรงเรียน กรมอาชีวฯ',1),
	(163,15,'4.5.4.1.5','รวม',1),
	(164,15,'4.5.4.2.1','จำนวนห้องเรียน ท้องถิ่น',1),
	(165,15,'4.5.4.2.2','จำนวนห้องเรียน สพฐ.',1),
	(166,15,'4.5.4.2.3','จำนวนห้องเรียน กรมสามัญฯ',1),
	(167,15,'4.5.4.2.4','จำนวนห้องเรียน กรมอาชีวฯ',1),
	(168,15,'4.5.4.2.5','รวม',1),
	(169,15,'4.5.4.3.1','จำนวนนักเรียน ท้องถิ่น',1),
	(170,15,'4.5.4.3.2','จำนวนนักเรียน สพฐ.',1),
	(171,15,'4.5.4.3.3','จำนวนนักเรียน กรมสามัญฯ',1),
	(172,15,'4.5.4.3.4','จำนวนนักเรียน กรมอาชีวฯ',1),
	(173,15,'4.5.4.3.5','รวม',1),
	(174,15,'4.5.4.4.1','จำนวนครู อาจารย์ ท้องถิ่น',1),
	(175,15,'4.5.4.4.2','จำนวนครู อาจารย์ สพฐ.',1),
	(176,15,'4.5.4.4.3','จำนวนครู อาจารย์ กรมสามัญฯ',1),
	(177,15,'4.5.4.4.4','จำนวนครู อาจารย์ กรมอาชีวฯ',1),
	(178,15,'4.5.4.4.5','รวม',1),
	(179,16,'4.6.1','สนามกีฬาอเนกประสงค์ จำนวน ',1),
	(180,16,'4.6.2','สนามฟุตบอล จำนวน ',1),
	(181,16,'4.6.3','สนามบาสเกตบอล จำนวน ',1),
	(182,16,'4.6.4','สนามตะกร้อ จำนวน',1),
	(183,16,'4.6.5','สระว่ายน้ำ จำนวน',1),
	(184,16,'4.6.6','ห้องสมุดประชาชน จำนวน',1),
	(185,16,'4.6.7','สนามเด็กเล่น จำนวน',1),
	(186,16,'4.6.8.1','อื่นๆ (ระบุ) ',1),
	(187,16,'4.6.8.2','จำนวน',1),
	(188,17,'5.1.1.1','สังกัดท้องถิ่น จำนวน ',1),
	(189,17,'5.1.1.2','เตียงคนไข้ จำนวน ',1),
	(190,17,'5.1.2.1','สังกัดเอกชน จำนวน ',1),
	(191,17,'5.1.2.2','เตียงคนไข้ จำนวน ',1),
	(192,17,'5.1.3.1','สังกัดกระทรวงสาธารณสุข',1),
	(193,17,'5.1.3.2','เตียงคนไข้ จำนวน ',1),
	(194,17,'5.2','คลินิกเอกชน จำนวน ',1),
	(195,18,'5.3.1','แพทย์ จำนวน',1),
	(196,18,'5.3.2','พยาบาล จำนวน',1),
	(197,18,'5.3.3','ทันตแพทย์ จำนวน',1),
	(198,18,'5.3.4','เภสัชกร จำนวน',1),
	(199,18,'5.3.5','เจ้าพนักงานส่งเสริมสาธารณสุข จำนวน',1),
	(200,18,'5.3.6','พนักงานอนามัย จำนวน',1),
	(201,18,'5.3.7','เจ้าพนักงานสุขาภิบาล จำนวน',1),
	(202,18,'5.3.8','เจ้าพนักงานสาธารณสุขชุมชน จำนวน',1),
	(203,18,'5.3.9','อสม จำนวน',1),
	(204,18,'5.3.10.1','อื่นๆ (ระบุ)',1),
	(205,18,'5.3.10.2','จำนวน',1),
	(206,19,'5.4.1.1','ท้องถิ่น',1),
	(207,19,'5.4.1.2','ผู้ป่วยใน',1),
	(208,19,'5.4.1.3','ผู้ป่วยนอก',1),
	(209,19,'5.4.2.1','เอกชน',1),
	(210,19,'5.4.2.2','ผู้ป่วยใน',1),
	(211,19,'5.4.2.3','ผู้ป่วยนอก',1),
	(212,19,'5.4.3.1','กระทรวงสาธารณสุข',1),
	(213,19,'5.4.3.2','ผู้ป่วยใน',1),
	(214,19,'5.4.3.3','ผู้ป่วยนอก',1),
	(215,19,'5.4.4','คลินิกเอกชน',1),
	(216,20,'5.5.1.1','อุบัติเหตุ',1),
	(217,20,'5.5.1.2','คิดเป็นงบประมาณในการรักษาทั้งสิ้น',1),
	(218,20,'5.5.2.1','สาเหตุอื่น',1),
	(219,20,'5.5.2.2','คิดเป็นงบประมาณในการรักษาทั้งสิ้น',1),
	(220,21,'5.6.1','ประเภทการเจ็บป่วย อันดับ 1',1),
	(221,21,'5.6.2','ประเภทการเจ็บป่วย อันดับ 2',1),
	(222,21,'5.6.3','ประเภทการเจ็บป่วย อันดับ 3',1),
	(223,21,'5.6.4','ประเภทการเจ็บป่วย อันดับ 4',1),
	(224,21,'5.6.5','ประเภทการเจ็บป่วย อันดับ 5',1),
	(225,22,'6.1','คดีเด็กและเยาวชนที่ถูกดำเนินคดี จำนวน',1),
	(226,22,'6.2','คดีอุกฉกรรจ์และสะเทือนขวัญ จำนวน',1),
	(227,22,'6.3','คดีชีวิต ร่างกายและเพศ จำนวน',1),
	(228,22,'6.4','คดียาเสพติด',1),
	(229,22,'6.5','คดีเกี่ยวกับปราบปรามการค้าประเวณี จำนวน',1),
	(230,22,'6.6','คดีการมีและเผยแพร่วัตถุลามก จำนวน',1),
	(231,22,'6.7','อุบัติเหตุบนท้องถนน จำนวน',1),
	(232,22,'6.8','ผู้ประสบอันตรายหรือเจ็บป่วยเนื่องจากการทำงาน จำนวน',1),
	(233,22,'6.9','ผู้ประสบภัยที่เป็นนักท่องเที่ยวต่างชาติ จำนวน',1),
	(234,23,'7.1','สถิติเพลิงไหม้ในรอบปี (1 ม.ค. - 31 ธ.ค.) จำนวน',1),
	(235,23,'7.2.1','คิดเป็นผู้เสียชีวิต',1),
	(236,23,'7.2.2','บาดเจ็บ',1),
	(237,23,'7.2.3','ทรัพย์สินมูลค่า',1),
	(238,24,'7.3.1.1','จุน้ำได้ (ลบ.ม.) 1',1),
	(239,24,'7.3.1.2','ที่มา 1',1),
	(240,24,'7.3.1.3','ได้มาเมื่อ พ.ศ. 1',1),
	(241,24,'7.3.1.4','ราคา(ถ้าซื้อมา) 1',1),
	(242,24,'7.3.2.1','จุน้ำได้ (ลบ.ม.) 2',1),
	(243,24,'7.3.2.2','ที่มา 2',1),
	(244,24,'7.3.2.3','ได้มาเมื่อ พ.ศ. 2',1),
	(245,24,'7.3.2.4','ราคา(ถ้าซื้อมา) 2',1),
	(246,24,'7.3.3.1','จุน้ำได้ (ลบ.ม.) 3',1),
	(247,24,'7.3.3.2','ที่มา 3',1),
	(248,24,'7.3.3.3','ได้มาเมื่อ พ.ศ. 3',1),
	(249,24,'7.3.3.4','ราคา(ถ้าซื้อมา) 3',1),
	(250,24,'7.3.4.1','จุน้ำได้ (ลบ.ม.) 4',1),
	(251,24,'7.3.4.2','ที่มา 4',1),
	(252,24,'7.3.4.3','ได้มาเมื่อ พ.ศ. 4',1),
	(253,24,'7.3.4.4','ราคา(ถ้าซื้อมา) 4',1),
	(254,24,'7.3.5.1','จุน้ำได้ (ลบ.ม.) 5',1),
	(255,24,'7.3.5.2','ที่มา 5',1),
	(256,24,'7.3.5.3','ได้มาเมื่อ พ.ศ. 5',1),
	(257,24,'7.3.5.4','ราคา(ถ้าซื้อมา) 5',1),
	(258,24,'7.4.1.1','จุน้ำได้ (ลบ.ม.) 1',1),
	(259,24,'7.4.1.2','ที่มา 1',1),
	(260,24,'7.4.1.3','ได้มาเมื่อ พ.ศ. 1',1),
	(261,24,'7.4.1.4','ราคา(ถ้าซื้อมา) 1',1),
	(262,24,'7.4.2.1','จุน้ำได้ (ลบ.ม.) 2',1),
	(263,24,'7.4.2.2','ที่มา 2',1),
	(264,24,'7.4.2.3','ได้มาเมื่อ พ.ศ. 2',1),
	(265,24,'7.4.2.4','ราคา(ถ้าซื้อมา) 2',1),
	(266,24,'7.4.3.1','จุน้ำได้ (ลบ.ม.) 3',1),
	(267,24,'7.4.3.2','ที่มา 3',1),
	(268,24,'7.4.3.3','ได้มาเมื่อ พ.ศ. 3',1),
	(269,24,'7.4.3.4','ราคา(ถ้าซื้อมา) 3',1),
	(270,24,'7.4.4.1','จุน้ำได้ (ลบ.ม.) 4',1),
	(271,24,'7.4.4.2','ที่มา 4',1),
	(272,24,'7.4.4.3','ได้มาเมื่อ พ.ศ. 4',1),
	(273,24,'7.4.4.4','ราคา(ถ้าซื้อมา) 4',1),
	(274,24,'7.4.5.1','จุน้ำได้ (ลบ.ม.) 5',1),
	(275,24,'7.4.5.2','ที่มา 5',1),
	(276,24,'7.4.5.3','ได้มาเมื่อ พ.ศ. 5',1),
	(277,24,'7.4.5.4','ราคา(ถ้าซื้อมา) 5',1),
	(278,24,'7.5.1.1','สูง (เมตร) 1',1),
	(279,24,'7.5.1.2','ที่มา 1',1),
	(280,24,'7.5.1.3','ได้มาเมื่อ พ.ศ. 1',1),
	(281,24,'7.5.1.4','ราคา(ถ้าซื้อมา) 1',1),
	(282,24,'7.5.2.1','สูง (เมตร) 2',1),
	(283,24,'7.5.2.2','ที่มา 2',1),
	(284,24,'7.5.2.3','ได้มาเมื่อ พ.ศ. 2',1),
	(285,24,'7.5.2.4','ราคา(ถ้าซื้อมา) 2',1),
	(286,24,'7.5.3.1','สูง (เมตร) 3',1),
	(287,24,'7.5.3.2','ที่มา 3',1),
	(288,24,'7.5.3.3','ได้มาเมื่อ พ.ศ. 3',1),
	(289,24,'7.5.3.4','ราคา(ถ้าซื้อมา) 3',1),
	(290,24,'7.5.4.1','สูง (เมตร) 4',1),
	(291,24,'7.5.4.2','ที่มา 4',1),
	(292,24,'7.5.4.3','ได้มาเมื่อ พ.ศ. 4',1),
	(293,24,'7.5.4.4','ราคา(ถ้าซื้อมา) 4',1),
	(294,24,'7.5.5.1','สูง (เมตร) 5',1),
	(295,24,'7.5.5.2','ที่มา 5',1),
	(296,24,'7.5.5.3','ได้มาเมื่อ พ.ศ. 5',1),
	(297,24,'7.5.5.4','ราคา(ถ้าซื้อมา) 5',1),
	(298,24,'7.6.1.1','สูง (เมตร) 1',1),
	(299,24,'7.6.1.2','ที่มา 1',1),
	(300,24,'7.6.1.3','ได้มาเมื่อ พ.ศ. 1',1),
	(301,24,'7.6.1.4','ราคา(ถ้าซื้อมา) 1',1),
	(302,24,'7.6.2.1','สูง (เมตร) 2',1),
	(303,24,'7.6.2.2','ที่มา 2',1),
	(304,24,'7.6.2.3','ได้มาเมื่อ พ.ศ. 2',1),
	(305,24,'7.6.2.4','ราคา(ถ้าซื้อมา) 2',1),
	(306,24,'7.6.3.1','สูง (เมตร) 3',1),
	(307,24,'7.6.3.2','ที่มา 3',1),
	(308,24,'7.6.3.3','ได้มาเมื่อ พ.ศ. 3',1),
	(309,24,'7.6.3.4','ราคา(ถ้าซื้อมา) 3',1),
	(310,24,'7.6.4.1','สูง (เมตร) 4',1),
	(311,24,'7.6.4.2','ที่มา 4',1),
	(312,24,'7.6.4.3','ได้มาเมื่อ พ.ศ. 4',1),
	(313,24,'7.6.4.4','ราคา(ถ้าซื้อมา) 4',1),
	(314,24,'7.6.5.1','สูง (เมตร) 5',1),
	(315,24,'7.6.5.2','ที่มา 5',1),
	(316,24,'7.6.5.3','ได้มาเมื่อ พ.ศ. 5',1),
	(317,24,'7.6.5.4','ราคา(ถ้าซื้อมา) 5',1),
	(318,25,'7.7','เรือยนต์ดับเพลิง จำนวน',1),
	(319,25,'7.8','เครื่องดับเพลิงชนิดหาบหาม จำนวน',1),
	(320,25,'7.9','พนักงานดับเพลิง จำนวน',1),
	(321,25,'7.10','อาสาสมัครป้องกัน และบรรเทาสาธารณภัย จำนวน',1),
	(322,25,'7.11','ผู้ฝึกซ้อมบรรเทาสาธารณภัยปีที่ผ่านมา จำนวน',1),
	(323,26,'8.1.1.1','อุณหภูมิสูงสุด ',1),
	(324,26,'8.1.1.2','อุณหภูมิต่ำสุด',1),
	(325,26,'8.1.2','อุณหภูมิเฉลี่ยต่อเดือน มี.ค. - มิ.ย.',1),
	(326,26,'8.1.3','อุณหภูมิเฉลี่ยต่อเดือน ก.ค. - ต.ค.',1),
	(327,26,'8.1.4','อุณหภูมิเฉลี่ยต่อเดือน พ.ย. - ก.พ.',1),
	(328,27,'8.2.1.1','ปริมาณน้ำฝนเฉลี่ย  พ.ศ.',1),
	(329,27,'8.2.1.2','ต่ำสุด',1),
	(330,27,'8.2.1.3','สูงสุด',1),
	(331,27,'8.2.2.1','ปริมาณน้ำฝนเฉลี่ย  พ.ศ.',1),
	(332,27,'8.2.2.2','ต่ำสุด',1),
	(333,27,'8.2.2.3','สูงสุด',1),
	(334,27,'8.2.3.1','ปริมาณน้ำฝนเฉลี่ย  พ.ศ.',1),
	(335,27,'8.2.3.2','ต่ำสุด',1),
	(336,27,'8.2.3.3','สูงสุด',1),
	(337,28,'8.4','คลอง ลำธาร ห้วย จำนวน คลอง ลำธาร ห้วย จำนวน ',1),
	(338,29,'8.5.1','พื้นที่น้ำท่วมถึง คิดเป็นร้อยละ ',1),
	(339,29,'8.5.2.1','ระยะเวลาเฉลี่ยที่น้ำท่วมขังนานที่สุด ',1),
	(340,29,'8.5.2.2','วัน ประมาณช่วงเดือน ',1),
	(341,29,'8.5.2.3','ถึง',1),
	(342,29,'8.5.3','เครื่องสูบน้ำ เครื่องที่1 เส้นผ่านศูนย์กลาง',1),
	(343,29,'8.5.4','เครื่องสูบน้ำ เครื่องที่2 เส้นผ่านศูนย์กลาง',1),
	(344,30,'8.6.1','ปริมาณน้ำเสีย',1),
	(345,30,'8.6.2.1','ระบบบำบัดน้ำเสียที่ใช้ (ระบุ)',1),
	(346,30,'8.6.2.2','รวม',1),
	(347,30,'8.6.3','น้ำเสียที่บำบัดได้ จำนวน',1),
	(348,30,'8.6.4','ค่าอินทรีย์สาร (BOD) ในคลอง/ทางระบายน้ำสายหลัก',1),
	(349,31,'8.7.1','ปริมาณขยะ',1),
	(350,31,'8.7.2','รถยนต์ที่ใช้จัดเก็บขยะ รวม',1),
	(351,31,'8.7.3','รถเก็บขนขยะ ขนาดความจุ',1),
	(352,31,'8.7.4','ได้มาเมื่อ พ.ศ.',1),
	(353,31,'8.7.5','ขยะที่เก็บขนได้ จำนวน',1),
	(354,31,'8.7.6','ขยะที่กำจัดได้ จำนวน',1),
	(355,31,'8.7.7','กองบนพื้น',1),
	(356,31,'8.7.8','กองบนพื้นแล้วเผา',1),
	(357,31,'8.7.9','หมักทำปุ๋ย',1),
	(358,31,'8.7.10','ฝังกลบอย่างถูกสุขลักษณะ',1),
	(359,31,'8.7.11','เผาในเตาขยะ',1),
	(360,31,'8.7.12','อื่นๆ (ระบุ)',1),
	(361,31,'8.7.13.1','ที่ดินสำหรับกำจัดขยะที่กำลังใช้ทั้งหมด จำนวน ',1),
	(362,31,'8.7.13.2','ตั้งอยู่ที่ ',1),
	(363,31,'8.7.14','ห่างจากเขตชุมชนเป็นระยะทาง',1),
	(364,31,'8.7.15','ที่ดินสำหรับกำจัดขยะที่ใช้ไปแล้ว จำนวน ',1),
	(365,31,'8.7.16','คาดว่าสามารถกำจัดขยะได้อีก จำนวน ',1),
	(366,31,'8.7.17.1.1','ท้องถิ่นจัดซื้อเองเมื่อ พ.ศ.',1),
	(367,31,'8.7.17.1.2','ราคา',1),
	(368,31,'8.7.17.2.1','เช่าที่ดินเอกชน ตั้งแต่ พ.ศ.',1),
	(369,31,'8.7.17.2.2','ปัจจุบันเช่าปีละ',1),
	(370,31,'8.7.18','อื่นๆ (ระบุ)',1),
	(371,31,'8.7.19','ที่ดินสำรองที่เตรียมไว้สำหรับกำจัดขยะ จำนวน',1),
	(372,31,'8.7.20','ที่ตั้งสำรองที่เตรียมไว้สำหรับกำจัดขยะห่างจากท้องถิ่นเป็นระยะทาง',1),
	(373,32,'9.1','สมาชิกสภาท้องถิ่น มีจำนวนคน',1),
	(374,32,'9.2','ข้าราชการ พนักงานท้องถิ่นทั้งหมด มีจำนวน',1),
	(375,33,'9.3.1','รับจริง(บาท)',1),
	(376,33,'9.3.2','จ่ายจริง(บาท)',1),
	(377,34,'9.4.1','ภาษีบำรุงท้องที่',1),
	(378,34,'9.4.2','ภาษีโรงเรือนและที่ดิน',1),
	(379,34,'9.4.3','ภาษีป้าย',1),
	(380,34,'9.4.4','อื่นๆ',1),
	(381,34,'9.4.5','การจัดเก็บรายได้ของท้องถิ่น ทั้งหมด',1),
	(382,35,'9.5.1','ชื่อผลิตภัณฑ์',1),
	(383,35,'9.5.2','จำนวน',1),
	(384,35,'9.5.3','ผลผลิตจาก	',1),
	(385,36,'9.6','บทบาท/การมีส่วนร่วมของประชาชนในกิจกรรมทางการเมืองและการบริหารอื่นๆ',1),
	(386,28,'8.4.1','คลอง ลำธาร ห้วย 1',1),
	(387,28,'8.4.2','คลอง ลำธาร ห้วย 2',1),
	(388,28,'8.4.3','คลอง ลำธาร ห้วย 3',1),
	(389,28,'8.4.4','คลอง ลำธาร ห้วย 4',1),
	(390,28,'8.4.5','คลอง ลำธาร ห้วย 5',1),
	(391,28,'8.4.6','คลอง ลำธาร ห้วย 6',1),
	(392,28,'8.4.7','คลอง ลำธาร ห้วย 7',1),
	(393,28,'8.4.8','คลอง ลำธาร ห้วย 8',1),
	(394,28,'8.4.9','คลอง ลำธาร ห้วย 9',1),
	(395,28,'8.4.10','คลอง ลำธาร ห้วย 10',1),
	(396,31,'8.7.12.2','วิธี',1),
	(397,2,'1.2.6.2','ที่มาของข้อมูลของประชากรแฝงจำนวน',1),
	(398,2,'1.2.7.2','ที่มาของข้อมูลของประชากรแฝง(ต่างด้าว)',1),
	(399,2,'1.2.8.2','ที่มาของข้อมูลของประชากรที่พิการหรือทุพพลภาพหรือป่วยเรื้อรังในเขตพี้นที่ จำนวน',1);

/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table seo_manager
# ------------------------------------------------------------

DROP TABLE IF EXISTS `seo_manager`;

CREATE TABLE `seo_manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `head_title` varchar(500) DEFAULT NULL,
  `meta_description` varchar(500) DEFAULT NULL,
  `meta_keywords` varchar(500) DEFAULT NULL,
  `seo_text` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `seo_manager` WRITE;
/*!40000 ALTER TABLE `seo_manager` DISABLE KEYS */;

INSERT INTO `seo_manager` (`id`, `url`, `head_title`, `meta_description`, `meta_keywords`, `seo_text`, `created_at`, `updated_at`)
VALUES
	(1,'/news','Latest News','Greate latest and fresh news!','news, latest news, fresh news','<p>Presenting your attention the latest news!</p>','2014-09-30 10:39:23','2015-07-02 11:28:57'),
	(2,'/contacts.html','Yona CMS Contacts','','','','2015-05-21 16:33:14','2015-07-02 11:19:40');

/*!40000 ALTER TABLE `seo_manager` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table session
# ------------------------------------------------------------

DROP TABLE IF EXISTS `session`;

CREATE TABLE `session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `group_session_id` int(11) DEFAULT NULL,
  `label` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `group_by` (`group_session_id`),
  CONSTRAINT `group_by` FOREIGN KEY (`group_session_id`) REFERENCES `group_session` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;

INSERT INTO `session` (`id`, `name`, `group_session_id`, `label`)
VALUES
	(1,'ลักษณะที่ตั้ง',1,'1.1'),
	(2,'ประชากร',1,'1.2'),
	(3,'การคมนาคม',2,'2.1'),
	(4,'ระบบขนส่งและการสื่อสาร',2,'2.2-2.3'),
	(5,'ไฟฟ้า',2,'2.4'),
	(6,'ลักษณะการใช้ที่ดิน',2,'2.5'),
	(7,'ด้านเศรษฐกิจ',3,'3.1-3.2'),
	(8,'สถานประกอบการพาณิชย์',3,'3.3'),
	(9,'สถานประกอบด้านบริการ',3,'3.4'),
	(10,'การอุตสหกรรม',3,'3.5'),
	(11,'การท่องเที่ยว',3,'3.6'),
	(12,'ชุมชนและครอบครัว',4,'4.1-4.2'),
	(13,'ศาสนา',4,'4.3'),
	(14,'วัฒนาธรรม',4,'4.4'),
	(15,'การศึกษา',4,'4.5'),
	(16,'กีฬา',4,'4.6'),
	(17,'โรงพยาบาลและคลินิก',5,'5.1-5.2'),
	(18,'บุคลากรทางการแพทย์',5,'5.3'),
	(19,'ผู้เข้ารับการรักษา',5,'5.4'),
	(20,'สาเหตุการเจ็บป่วย',5,'5.5'),
	(21,'ประเภทการเจ็บป่วย',5,'5.6'),
	(22,'ด้านคุณภาพชีวิตและความปลอดภัยในทรัพย์สิน',6,'6.1'),
	(23,'สถิติเพลิงไหม้และความสูญเสียชีวิต',7,'7.1-7.2'),
	(24,'ชนิดรถต่างๆ',7,'7.3-7.6'),
	(25,'เรือยนต์ เครื่องดับเพลิงและพนักงานดับเพลิง',7,'7.7-7.11'),
	(26,'อุณหภูมิ',8,'8.1'),
	(27,'ปริมาณน้ำฝนสูงสุด - ต่ำสุด',8,'8.2-8.3'),
	(28,'คลอง ลำธาร ห้วย',8,'8.4'),
	(29,'การระบายน้ำ',8,'8.5'),
	(30,'น้ำเสีย',8,'8.6'),
	(31,'ขยะ',8,'8.7'),
	(32,'สมาชิกและข้าราชการสภาท้องถิ่น',9,'9.1-9.2'),
	(33,'รายรับ-รายจ่ายขององค์กรปกครองส่วนท้องถิ่น',9,'9.3'),
	(34,'การจัดเก็บรายได้ของท้องถิ่น',9,'9.4'),
	(35,'การดำเนินกิจการพาณิชย์ขององค์กร',9,'9.5'),
	(36,'บทบาท/การมีส่วนร่วมของประชาชน',9,'9.6');

/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table survey
# ------------------------------------------------------------

DROP TABLE IF EXISTS `survey`;

CREATE TABLE `survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `survey` WRITE;
/*!40000 ALTER TABLE `survey` DISABLE KEYS */;

INSERT INTO `survey` (`id`, `no`, `description`, `start`, `end`)
VALUES
	(1,'1/2559','dd','2016-01-01','2016-12-31');

/*!40000 ALTER TABLE `survey` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table survey_status
# ------------------------------------------------------------

DROP TABLE IF EXISTS `survey_status`;

CREATE TABLE `survey_status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table tambon
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tambon`;

CREATE TABLE `tambon` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `amphurid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKAmphur` (`amphurid`),
  CONSTRAINT `FKAmphur` FOREIGN KEY (`amphurid`) REFERENCES `amphur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tambon` WRITE;
/*!40000 ALTER TABLE `tambon` DISABLE KEYS */;

INSERT INTO `tambon` (`id`, `name`, `amphurid`)
VALUES
	(1,'ท่าประดู่',1),
	(2,'เชิงเนิน',1),
	(3,'ตะพง',1),
	(4,'ปากน้ำ',1),
	(5,'เพ',1),
	(6,'แกลง',1),
	(7,'บ้านแลง',1),
	(8,'นาตาขวัญ',1),
	(9,'เนินพระ',1),
	(10,'กะเฉด',1),
	(11,'ทับมา',1),
	(12,'น้ำคอก',1),
	(13,'ห้วยโป่ง',1),
	(14,'มาบตาพุด',1),
	(15,'สำนักทอง',1);

/*!40000 ALTER TABLE `tambon` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table translate
# ------------------------------------------------------------

DROP TABLE IF EXISTS `translate`;

CREATE TABLE `translate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang` varchar(20) DEFAULT NULL,
  `phrase` varchar(500) DEFAULT NULL,
  `translation` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`),
  CONSTRAINT `translate_ibfk_1` FOREIGN KEY (`lang`) REFERENCES `language` (`iso`) ON DELETE CASCADE ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `translate` WRITE;
/*!40000 ALTER TABLE `translate` DISABLE KEYS */;

INSERT INTO `translate` (`id`, `lang`, `phrase`, `translation`)
VALUES
	(1,'ru','Ошибка валидации формы','Ошибка валидации формы'),
	(2,'ru','Подробнее','Подробнее'),
	(3,'ru','Назад к перечню публикаций','Назад к перечню публикаций'),
	(4,'ru','SITE NAME','Yona CMS Русская версия'),
	(5,'ru','Главная','Главная'),
	(6,'ru','Новости','Новости'),
	(7,'ru','Контакты','Контакты'),
	(8,'en','Ошибка валидации формы','Form validation fails'),
	(9,'en','Подробнее','Read more'),
	(10,'en','Назад к перечню публикаций','Back to the publications list'),
	(11,'en','SITE NAME','Yona CMS'),
	(12,'en','Главная','Home'),
	(13,'en','Новости','News'),
	(14,'en','Контакты','Contacts'),
	(15,'uk','Ошибка валидации формы','Помилка валідації форми'),
	(16,'uk','Подробнее','Детальніше'),
	(17,'uk','Назад к перечню публикаций','Повернутись до переліку публікацій'),
	(18,'uk','SITE NAME','Yona CMS Українська версія'),
	(19,'uk','Главная','Головна'),
	(20,'uk','Новости','Новини'),
	(21,'uk','Контакты','Контакти'),
	(22,'ru','Статьи','Статьи'),
	(23,'en','Статьи','Articles'),
	(24,'uk','Статьи','Статті'),
	(25,'en','Home','Home'),
	(26,'en','News','News'),
	(27,'en','Articles','Articles'),
	(28,'en','Contacts','Contacts'),
	(29,'en','Admin','Admin'),
	(30,'en','YonaCms Admin Panel','YonaCms Admin Panel'),
	(31,'en','Back к перечню публикаций','Back to publications list'),
	(32,'en','Страница №','Page num.'),
	(33,'ru','Home','Главная'),
	(34,'ru','News','Новости'),
	(35,'ru','Articles','Статьи'),
	(36,'ru','Contacts','Контакты'),
	(37,'ru','Admin','Админка'),
	(38,'ru','YonaCms Admin Panel','Административная панель YonaCms'),
	(39,'ru','Back к перечню публикаций','Назад к перечню публикаций'),
	(40,'ru','Страница №','Страница №'),
	(41,'uk','Home','Головна'),
	(42,'uk','News','Новини'),
	(43,'uk','Articles','Статті'),
	(44,'uk','Contacts','Контакти'),
	(45,'uk','Admin','Адмінка'),
	(46,'uk','YonaCms Admin Panel','Адміністративна панель YonaCms'),
	(47,'uk','Back к перечню публикаций','Назад до переліку публікацій'),
	(48,'uk','Страница №','Сторінка №'),
	(49,'en','Полная версия','Full version'),
	(50,'en','Мобильная версия','Mobile version'),
	(51,'en','Services','Services'),
	(52,'en','Printing','Printing'),
	(53,'en','Design','Design'),
	(54,'ru','Полная версия','Полная версия'),
	(55,'ru','Мобильная версия','Мобильная версия'),
	(56,'ru','Services','Services'),
	(57,'ru','Printing','Printing'),
	(58,'ru','Design','Design'),
	(59,'uk','Полная версия','Повна версія'),
	(60,'uk','Мобильная версия','Мобільна версія'),
	(61,'uk','Services','Services'),
	(62,'uk','Printing','Printing'),
	(63,'uk','Design','Design'),
	(64,'en','Latest news','Latest news'),
	(65,'ru','Latest news','Последние новости'),
	(66,'uk','Latest news','Останні новини'),
	(67,'en','Entries not found','Entries not found'),
	(68,'en','Back to publications list','Back to publications list'),
	(69,'uk','Entries not found','Записів не знайдено'),
	(70,'uk','Back to publications list','Повернутись до переліку публікацій'),
	(71,'ru','Entries not found','Записи не найдены'),
	(72,'ru','Back to publications list','Обратно к перечню публикаций');

/*!40000 ALTER TABLE `translate` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tree_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tree_category`;

CREATE TABLE `tree_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `root` enum('articles','news') NOT NULL DEFAULT 'articles',
  `parent_id` int(11) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `depth` tinyint(2) NOT NULL DEFAULT '0',
  `left_key` int(11) DEFAULT NULL,
  `right_key` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `tree_category_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `tree_category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tree_category` WRITE;
/*!40000 ALTER TABLE `tree_category` DISABLE KEYS */;

INSERT INTO `tree_category` (`id`, `root`, `parent_id`, `slug`, `depth`, `left_key`, `right_key`, `created_at`, `updated_at`)
VALUES
	(15,'articles',NULL,'computers',1,2,7,'2015-05-19 16:46:38','2015-05-20 13:31:24'),
	(16,'articles',NULL,'software',1,14,21,'2015-05-19 16:47:32','2015-05-20 13:31:25'),
	(17,'articles',NULL,'gadgets',1,8,13,'2015-05-19 16:47:45','2015-05-20 13:31:25'),
	(18,'articles',16,'microsoft',2,17,18,'2015-05-19 17:23:44','2015-05-20 13:31:25'),
	(19,'articles',16,'oracle',2,19,20,'2015-05-19 17:24:00','2015-05-20 13:31:25'),
	(20,'articles',16,'google',2,15,16,'2015-05-19 17:24:24','2015-05-20 13:31:25'),
	(21,'articles',15,'netbooks',2,3,4,'2015-05-19 17:24:49','2015-05-20 13:31:25'),
	(22,'articles',15,'laptops',2,5,6,'2015-05-19 17:30:49','2015-05-20 13:31:25'),
	(23,'articles',17,'smartpfone',2,9,10,'2015-05-19 17:32:06','2015-05-20 13:31:25'),
	(24,'articles',17,'tablet',2,11,12,'2015-05-19 17:32:53','2015-05-20 13:31:25'),
	(25,'news',NULL,'world',1,2,3,'2015-05-19 17:33:04','2015-05-20 15:24:45'),
	(26,'news',NULL,'business',1,6,11,'2015-05-19 17:33:11','2015-05-20 15:24:45'),
	(27,'news',NULL,'politics',1,4,5,'2015-05-19 17:33:16','2015-05-20 15:24:45'),
	(28,'news',26,'real-estate',2,7,8,'2015-05-19 17:33:30','2015-05-20 15:24:45'),
	(29,'news',26,'investitions',2,9,10,'2015-05-19 17:33:54','2015-05-20 15:24:45'),
	(30,'news',NULL,'life',1,12,17,'2015-05-20 15:24:05','2015-05-20 15:24:45'),
	(31,'news',30,'health',2,13,14,'2015-05-20 15:24:22','2015-05-20 15:24:45'),
	(32,'news',30,'family',2,15,16,'2015-05-20 15:24:42','2015-05-20 15:24:45');

/*!40000 ALTER TABLE `tree_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tree_category_translate
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tree_category_translate`;

CREATE TABLE `tree_category_translate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foreign_id` int(11) NOT NULL,
  `lang` varchar(20) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`id`),
  KEY `foreign_id` (`foreign_id`),
  KEY `lang` (`lang`),
  CONSTRAINT `tree_category_translate_ibfk_1` FOREIGN KEY (`foreign_id`) REFERENCES `tree_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tree_category_translate_ibfk_2` FOREIGN KEY (`lang`) REFERENCES `language` (`iso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tree_category_translate` WRITE;
/*!40000 ALTER TABLE `tree_category_translate` DISABLE KEYS */;

INSERT INTO `tree_category_translate` (`id`, `foreign_id`, `lang`, `key`, `value`)
VALUES
	(14,15,'en','title','Computers'),
	(15,16,'en','title','Software'),
	(16,17,'en','title','Gadgets'),
	(17,18,'en','title','Microsoft'),
	(18,19,'en','title','Oracle'),
	(19,20,'en','title','Google'),
	(20,21,'en','title','Netbooks'),
	(21,22,'en','title','Laptops'),
	(22,23,'en','title','Smartpfone'),
	(23,24,'en','title','Tablet'),
	(24,25,'en','title','World'),
	(25,26,'en','title','Business'),
	(26,27,'en','title','Politics'),
	(27,28,'en','title','Real estate'),
	(28,29,'en','title','Investitions'),
	(29,30,'en','title','Life'),
	(30,31,'en','title','Health'),
	(31,32,'en','title','Family');

/*!40000 ALTER TABLE `tree_category_translate` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table widget
# ------------------------------------------------------------

DROP TABLE IF EXISTS `widget`;

CREATE TABLE `widget` (
  `id` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `html` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `widget` WRITE;
/*!40000 ALTER TABLE `widget` DISABLE KEYS */;

INSERT INTO `widget` (`id`, `title`, `html`)
VALUES
	('phone','Phone in header','<div class=\"phone\">+1 (001) 555-44-33</div>');

/*!40000 ALTER TABLE `widget` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
