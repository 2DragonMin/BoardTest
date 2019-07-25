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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES (3,'dkssua01','dhkdals01'),(4,'ddd','test'),(6,'345345','345123'),(8,'123456','4444'),(10,'123','123'),(12,'dhkdals01','dddd'),(13,'test','1234');
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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (2,'dkssua01',15,'12345'),(3,'',15,'234234234'),(4,'dkssua01',15,'1233'),(5,'dkssua01',15,'124124'),(6,'dkssua01',15,'2352'),(7,'dkssua01',15,'55555'),(8,'dkssua01',15,'42342'),(9,'dkssua01',15,'5555'),(10,'dkssua01',15,'4234234'),(11,'dkssua01',15,'124124'),(12,'dkssua01',15,'53554545'),(13,'dkssua01',15,'234234'),(14,'dkssua01',15,'555555555555'),(15,'dkssua01',15,'345345'),(16,'dkssua01',15,'346'),(17,'dkssua01',14,'5555'),(18,'dkssua01',13,'456456'),(19,'dkssua01',15,'124'),(20,'dkssua01',15,'4444'),(21,'dkssua01',14,'345345345'),(22,'dkssua01',15,'addasd'),(23,'dkssua01',17,'ㄴㄷㅇㄷㅇㄴㄱㄱㄹ'),(24,'dkssua01',17,'ㅌㅊㄾ'),(25,'dkssua01',0,'123123'),(26,'dkssua01',0,'124123'),(27,'dkssua01',0,'4444'),(28,'dkssua01',0,''),(29,'dkssua01',0,''),(30,'dkssua01',0,''),(31,'dkssua01',0,''),(32,'dkssua01',0,''),(33,'dkssua01',0,''),(34,'dkssua01',0,''),(35,'dkssua01',0,''),(36,'dkssua01',0,''),(37,'dkssua01',0,'234235'),(38,'dkssua01',15,'11111'),(39,'dkssua01',15,''),(40,'dkssua01',15,'11111'),(41,'dkssua01',19,'123124'),(42,'dkssua01',19,'4444'),(43,'dkssua01',19,'235345'),(44,'dkssua01',19,'345456456'),(45,'dkssua01',19,'111'),(46,'dkssua01',19,'1234234'),(47,'dkssua01',19,''),(48,'dkssua01',19,''),(49,'dkssua01',19,''),(50,'dkssua01',19,''),(51,'dkssua01',19,'555'),(52,'dkssua01',19,'234'),(53,'dkssua01',19,'555'),(54,'dkssua01',19,'11111'),(55,'dkssua01',19,'1111'),(56,'dkssua01',19,'5555'),(57,'dkssua01',19,'444'),(58,'dkssua01',19,'333'),(59,'dkssua01',19,'124234345'),(60,'dkssua01',19,'5555'),(61,'dkssua01',19,'11111111111111111111'),(62,'dkssua01',19,'1111111'),(63,'dkssua01',19,'345345'),(64,'dkssua01',17,'sfdfgdfg'),(65,'dkssua01',17,'asdasfsdf'),(66,'dkssua01',19,'ㄷㅈㅅㄷㄳ');
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
  `title` varchar(20) NOT NULL,
  `contents` varchar(512) DEFAULT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `depth` int(11) NOT NULL,
  `grpNum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `story`
--

LOCK TABLES `story` WRITE;
/*!40000 ALTER TABLE `story` DISABLE KEYS */;
INSERT INTO `story` VALUES (1,'123','123','2019-07-22 08:44:06',0,1),(3,'111','123123','2019-07-22 08:44:21',0,3),(4,'333','333','2019-07-22 08:44:27',0,4),(5,'4444444','44`1313','2019-07-22 08:44:31',0,5),(6,'4545','454545','2019-07-22 08:44:37',0,6),(7,'124','12345','2019-07-22 08:44:43',0,7),(8,'124555555555','12355','2019-07-22 08:44:50',0,8),(9,'4444444','445555','2019-07-22 08:44:57',0,9),(10,'4535','345354','2019-07-22 08:45:03',0,10),(11,'34534511111','345345345555','2019-07-22 08:45:10',0,11),(12,'55123','1412333','2019-07-22 08:45:13',0,12),(13,'123444','44','2019-07-22 08:45:17',0,13),(14,'124555345435','345345346','2019-07-22 08:45:22',0,14),(15,'dddddddddddddddddddd','dddddddddddddddddd','2019-07-22 08:45:27',0,15),(16,'맘마미야','맘마미야','2019-07-22 08:45:32',0,16),(17,'안녕하세요 ㅎㅎ','처음뵙겠습니다.','2019-07-22 08:45:37',0,17),(18,'123123','23333','2019-07-22 08:45:41',0,18),(19,'45235','34ㅅㄷ4ㅅ','2019-07-22 08:45:48',0,19),(20,'6666','555','2019-07-23 02:45:45',1,6),(21,'333','333','2019-07-23 04:08:48',1,19),(22,'444','444','2019-07-24 05:37:49',2,19),(23,'555','555','2019-07-24 05:37:53',3,19),(24,'반가워요','반갑습니다.','2019-07-24 05:52:56',1,17);
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

-- Dump completed on 2019-07-25  9:03:18
