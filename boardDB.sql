-- MySQL dump 10.16  Distrib 10.1.40-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db
-- ------------------------------------------------------
-- Server version	10.1.40-MariaDB-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `Num` int(4) NOT NULL AUTO_INCREMENT,
  `Id` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Num`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES (3,'dkssua01','dhkdals01'),(4,'ddd','test'),(6,'345345','345123'),(8,'123456','4444'),(10,'123','123'),(11,'dhkdals01','dydals89'),(12,'ymlee','$2y$10$AiF89B0RRMN6Je9TugmT6uUZ2QoQk/fOayantoT6/nMY7RovSe0NG'),(13,'ymlee2','$2y$10$HfDXKpBuxqJ3GGILWt9TEOaArY0m8jAGRbz4lJ7B0mVhRwH80/3tm'),(14,'yyy','$2y$10$RZTfbYSlnyIMzODLCYf1lOzB0hc2ODFZG7jPbJ7QT..X0CbLC58JO'),(15,'xxx','$2y$10$ZROesLHfk3Jc8.8MKFaQ3OJTI5GYSTnRl.RdR98lrSII77ilr8UcK');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `board`
--

DROP TABLE IF EXISTS `board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `board` (
  `number` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `hit` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `board`
--

LOCK TABLES `board` WRITE;
/*!40000 ALTER TABLE `board` DISABLE KEYS */;
INSERT INTO `board` VALUES (1,'test','test','admin','1234','2019-07-01 16:29:45',0);
/*!40000 ALTER TABLE `board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `cno` int(20) NOT NULL AUTO_INCREMENT,
  `uid` varchar(20) NOT NULL,
  `pid` int(20) NOT NULL,
  `comment` varchar(512) NOT NULL,
  PRIMARY KEY (`cno`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (2,'dkssua01',15,'12345'),(3,'',15,'234234234'),(4,'dkssua01',15,'1233'),(5,'dkssua01',15,'124124'),(6,'dkssua01',15,'2352'),(7,'dkssua01',15,'55555'),(8,'dkssua01',15,'42342'),(9,'dkssua01',15,'5555'),(10,'dkssua01',15,'4234234'),(11,'dkssua01',15,'124124'),(12,'dkssua01',15,'53554545'),(13,'dkssua01',15,'234234'),(14,'dkssua01',15,'555555555555'),(15,'dkssua01',15,'345345'),(16,'dkssua01',15,'346'),(17,'dkssua01',14,'5555'),(18,'dkssua01',13,'456456'),(19,'dkssua01',15,'124'),(20,'dkssua01',15,'4444'),(21,'dkssua01',14,'345345345'),(22,'dkssua01',15,'addasd'),(23,'dkssua01',17,'ㄴㄷㅇㄷㅇㄴㄱㄱㄹ'),(24,'dkssua01',17,'ㅌㅊㄾ'),(38,'dkssua01',15,'11111'),(39,'dkssua01',15,''),(40,'dkssua01',15,'11111'),(41,'dkssua01',19,'123124'),(42,'dkssua01',19,'4444'),(43,'dkssua01',19,'235345'),(44,'dkssua01',19,'345456456'),(45,'dkssua01',19,'111'),(46,'dkssua01',19,'1234234'),(47,'dkssua01',19,''),(48,'dkssua01',19,''),(49,'dkssua01',19,''),(50,'dkssua01',19,''),(51,'dkssua01',19,'555'),(52,'dkssua01',19,'234'),(53,'dkssua01',19,'555'),(54,'dkssua01',19,'11111'),(55,'dkssua01',19,'1111'),(56,'dkssua01',19,'5555'),(57,'dkssua01',19,'444'),(58,'dkssua01',19,'333'),(59,'dkssua01',19,'124234345'),(60,'dkssua01',19,'5555'),(61,'dkssua01',19,'11111111111111111111'),(62,'dkssua01',19,'1111111'),(63,'dkssua01',19,'345345'),(64,'dkssua01',17,'sfdfgdfg'),(65,'dkssua01',17,'asdasfsdf'),(66,'dkssua01',19,'ㄷㅈㅅㄷㄳ'),(67,'dkssua01',21,'1111'),(68,'dkssua01',21,'2222'),(69,'dkssua01',19,'4124124'),(70,'dkssua01',19,'1242423444'),(71,'dkssua01',19,'5555555555555555555555555555'),(72,'dkssua01',17,'123124'),(73,'dkssua01',17,'4234'),(74,'dkssua01',17,'12523535'),(75,'dkssua01',17,'345345'),(76,'dkssua01',17,'11111112'),(77,'dkssua01',16,'1111'),(78,'dkssua01',16,'4234234'),(79,'dkssua01',16,'3445'),(80,'dkssua01',16,'234'),(86,'dkssua01',27,'434345'),(87,'dkssua01',27,'123```111');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentSt`
--

DROP TABLE IF EXISTS `commentSt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commentSt` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `contents` varchar(512) DEFAULT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `grpNum` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentSt`
--

LOCK TABLES `commentSt` WRITE;
/*!40000 ALTER TABLE `commentSt` DISABLE KEYS */;
INSERT INTO `commentSt` VALUES (1,'345','345','2019-07-22 06:05:29',0),(2,'345345','3546456','2019-07-22 07:52:16',19),(3,'19댓','19ㅂ너꺼','2019-07-23 00:15:38',0),(4,'19번글','19번 댓글','2019-07-23 00:19:12',0),(5,'19번글','1919','2019-07-23 00:20:01',0);
/*!40000 ALTER TABLE `commentSt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` varchar(16) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `permit` tinyint(3) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES ('test','test','2019-07-01 16:24:13',0);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `story`
--

DROP TABLE IF EXISTS `story`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `story` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `contents` text NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `depth` int(11) NOT NULL,
  `grpNum` int(11) NOT NULL,
  `upFile` varchar(255) DEFAULT NULL,
  `hashFile` varchar(255) DEFAULT NULL,
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `story`
--

LOCK TABLES `story` WRITE;
/*!40000 ALTER TABLE `story` DISABLE KEYS */;
INSERT INTO `story` VALUES (1,'123','123','2019-07-22 08:44:06',0,1,NULL,NULL,0),(3,'111','123123','2019-07-22 08:44:21',0,3,NULL,NULL,0),(4,'333','333','2019-07-22 08:44:27',0,4,NULL,NULL,0),(5,'4444444','44`1313','2019-07-22 08:44:31',0,5,NULL,NULL,0),(6,'4545','454545','2019-07-22 08:44:37',0,6,NULL,NULL,0),(7,'124','12345','2019-07-22 08:44:43',0,7,NULL,NULL,0),(8,'124555555555','12355','2019-07-22 08:44:50',0,8,NULL,NULL,0),(9,'4444444','445555','2019-07-22 08:44:57',0,9,NULL,NULL,0),(10,'4535','345354','2019-07-22 08:45:03',0,10,NULL,NULL,0),(11,'34534511111','345345345555','2019-07-22 08:45:10',0,11,NULL,NULL,0),(12,'55123','1412333','2019-07-22 08:45:13',0,12,NULL,NULL,0),(13,'123444','44','2019-07-22 08:45:17',0,13,NULL,NULL,0),(14,'124555345435','345345346','2019-07-22 08:45:22',0,14,NULL,NULL,0),(15,'dddddddddddddddddddd','dddddddddddddddddd','2019-07-22 08:45:27',0,15,NULL,NULL,0),(16,'맘마미야','맘마미야','2019-07-22 08:45:32',0,16,NULL,NULL,0),(17,'안녕하세요 ㅎㅎ','처음뵙겠습니다.','2019-07-22 08:45:37',0,17,NULL,NULL,0),(18,'123123','23333','2019-07-22 08:45:41',0,18,NULL,NULL,0),(19,'45235','34ㅅㄷ4ㅅ','2019-07-22 08:45:48',0,19,NULL,NULL,0),(20,'6666','555','2019-07-23 02:45:45',1,6,NULL,NULL,0),(21,'333','333','2019-07-23 04:08:48',1,19,NULL,NULL,0),(22,'444','444','2019-07-24 05:37:49',2,19,NULL,NULL,0),(23,'555','555','2019-07-24 05:37:53',3,19,NULL,NULL,0),(24,'반가워요','반갑습니다.','2019-07-24 05:52:56',1,17,NULL,NULL,0),(25,'111111111','11111','2019-07-25 00:55:26',0,25,NULL,NULL,0),(26,'asdasd','<p><strong>asfasfasf</strong></p>','2019-07-25 04:09:03',0,26,NULL,NULL,0),(27,'test','<h1 style=\"text-align: center;\"><em>asdasdasdasdasd</em></h1>','2019-07-25 04:09:35',0,27,NULL,NULL,0),(28,'2423242341112123123','<p>124234234234</p>','2019-07-26 07:24:29',0,28,'list.PNG','06f7aed0894ed93be39d0017dedfee49',0),(29,'`1231ㅁㄴㅇㄴㅁㄴㅇ','','2019-07-26 08:44:45',0,29,'','',0),(30,'<ㅁㄴㅇㅁㄴㅇ','<p>ㄴㅇ</p>','2019-07-26 08:45:00',0,30,'','',0),(31,'<<<ㅁㄹㄴㅇㄹ<<','<p>ㅁㄴㅇ</p>','2019-07-26 08:46:06',0,31,'','',0),(32,'<<ㅁㄴㅇㄴ>>','<p>ㅁㅇㄹㄴㅇㄹ</p>','2019-07-26 08:46:47',0,32,'','',0),(33,'`1234234','<p>234234</p>','2019-07-26 08:47:02',0,33,'index.PNG','defef98ef40e01761d50bcb3943d9eca',0),(34,':ㅁㄴㅇㅁㄴㅇ','<p>ㅁㄴㅇㅁㄴㅇ</p>','2019-07-26 08:47:14',0,34,'index.PNG','defef98ef40e01761d50bcb3943d9eca',0),(35,'<<ㅁ<ㅇ11```:::ㅁㄴㅇㅁㄴㅇ','<p>ㄴㄴㅇㄹ</p>','2019-07-26 08:48:44',0,35,'','',0),(36,': ㅁㄴㅇㅁㄴㅇ','<p>ㄴㅇ</p>','2019-07-26 08:48:54',0,36,'','',0),(37,'<<<>>>>>!$!!#$@*&(#ㅣ','','2019-07-31 01:04:41',0,37,'','',1),(38,'::::::: ::','<p>ㄹ1123ㄹㅇㅁㄹ</p>','2019-07-26 08:54:10',0,38,'','',0),(39,'<< 111','<p>12312123</p>','2019-07-26 08:54:23',0,39,'','',0),(40,'\'\'\'','<p>1111</p>','2019-07-29 00:23:53',0,40,'index.PNG','defef98ef40e01761d50bcb3943d9eca_2019-07-29 09:23:53',0),(41,'\"\"\"\"\"\"\"\"','<p>asdasd</p>','2019-07-31 00:53:53',0,41,'','',4),(42,'222111','<p>23123123</p>','2019-07-31 01:04:43',0,42,'','',24),(43,'<<<','<p>dd</p>','2019-07-31 00:53:50',0,43,'','',2),(44,'<script>alert(\'aa\');</script>','<p>ㄴㅇㅁㄴㅇ</p>','2019-07-29 08:42:45',0,44,'','',1),(45,'234','<p>234</p>','2019-07-31 01:06:46',0,45,'','',2),(46,'234124123','<p>12234235</p>','2019-07-31 01:06:57',0,46,'','',1),(47,'123123','<p>123123</p>','2019-07-31 01:09:57',0,47,'list.PNG','cfe1181f1a7637abc1bedfc478fc98a8',1),(48,'Test','<p>Test</p>','2019-07-31 01:16:28',0,48,'','',5),(49,'T222Tttest','<p>w234234</p>','2019-07-31 01:16:55',0,49,'list.PNG','0f827743081650aece9a6024335cdd02',2),(50,'124234','','2019-07-31 10:18:36',0,50,'','',1),(51,'14234','','2019-07-31 10:22:58',0,51,'','',0),(52,'14234','<p>134124</p>','2019-07-31 10:23:40',0,52,'list.PNG','1943ddcf99e9655de6923b3da2697173',2),(53,'235242424364611123','<p>124124123125236</p>','2019-07-31 10:24:44',0,53,'index.PNG','70ee2ef3de357431c02596d06b236287',1),(54,'rqwrwer','<p>werwer</p>','2019-07-31 10:24:47',0,54,'list.PNG','ecc5d64c1f25723e3141847ba82075bb',1);
/*!40000 ALTER TABLE `story` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-01  9:44:17
