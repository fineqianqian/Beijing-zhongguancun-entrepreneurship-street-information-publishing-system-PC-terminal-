-- MySQL dump 10.13  Distrib 5.5.20, for Win32 (x86)
--
-- Host: localhost    Database: myphp
-- ------------------------------------------------------
-- Server version	5.5.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `active`
--

DROP TABLE IF EXISTS `active`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `active` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `regdate` varchar(20) NOT NULL,
  `img` varchar(800) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `active`
--

LOCK TABLES `active` WRITE;
/*!40000 ALTER TABLE `active` DISABLE KEYS */;
INSERT INTO `active` VALUES (1,'ddd',2,'dd','2017-06-19','active/Hydrangeas.jpg'),(2,'cccc',1,'ccccc','2017-06-20','active/IMG_0061.JPG'),(3,'xx',1,'xx','2017-06-20','active/IMG_0061.JPG'),(4,'ttt',1,'tttt','2017-06-20','active/IMG_0921.JPG'),(5,'sss',1,'ss','2017-06-20','active/IMG_0885.JPG'),(6,'中关村活动',1,'中央社会主义学院民主党派干部到访创业大街','2017-06-21','active/bng3.png');
/*!40000 ALTER TABLE `active` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jigou`
--

DROP TABLE IF EXISTS `jigou`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jigou` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `regdate` varchar(20) NOT NULL,
  `img` varchar(800) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jigou`
--

LOCK TABLES `jigou` WRITE;
/*!40000 ALTER TABLE `jigou` DISABLE KEYS */;
INSERT INTO `jigou` VALUES (1,'ddd',2,'dd','2017-06-19','jigou/Hydrangeas.jpg'),(9,'xxx',1,'xxxx','2017-06-20','jigou/IMG_0884.JPG'),(10,'sssssssss',1,'ssssssssssss','2017-06-20','jigou/IMG_0885.JPG'),(11,'xxx',1,'xxxx','2017-06-20','jigou/IMG_0885.JPG'),(12,'xxxxxxxxxxx',1,'xxxxxxxxxxxxxxx','2017-06-20','jigou/IMG_0885.JPG'),(13,'ssssssssss',1,'sssssssssssssssssss','2017-06-20','jigou/IMG_0884.JPG'),(14,'1',1,'1','2017-06-20','jigou/18.JPG'),(15,'s',1,'s','2017-06-20','jigou/IMG_0884.JPG'),(16,'u',1,'uuu','2017-06-20','jigou/IMG_0884.JPG'),(17,'创业邦',1,'最懂创业者，离资本最近','2017-06-20','jigou/55adb1f0922cf.jpg'),(18,'拓荒族',1,'集办公、营销孵化功能三位一体的企业发 属生态圈','2017-06-20','jigou/568cd5343f525.gif'),(19,'洋葱投',1,'洋葱投致力于创业者打造一个全方位、宽 领域、多元化的创投服务平台','2017-06-20','jigou/55bb29cd76b19.gif'),(20,'可可豆创新孵化平台',1,'可可豆创新孵化平台隶属于洛可可创新设计集团','2017-06-20','jigou/568cd5343f525.gif'),(21,'3W咖啡',1,'互联网主题馆','2017-06-21','jigou/5382d939c6df0.gif'),(22,'中科金',1,'为科技企业提供多元化、多层次','2017-06-21','jigou/56b2ab8db9bea.jpg'),(23,'车库咖啡',1,'成立于2011年4月，是中关村创业大街上最早的一批的创业主体咖啡之一','2017-06-21','jigou/5382d949c32e6.gif');
/*!40000 ALTER TABLE `jigou` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `regdate` varchar(20) NOT NULL,
  `img` varchar(800) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (34,'[大街访谈]对话Founders Space创始人...',1,'3月15日，由北京大学创业训练营、中心前沿经济与中关村创业大街联合主办的“创业私奔·硅谷顶级孵化器Foude...','2017-06-20','upload/53ab76be33b4d.gif'),(35,'你好',1,'对对对','2017-06-20','upload/55adb1f0922cf.jpg'),(36,'全国妇联领导调研中关村创业大街',1,'11111111111111111111111','2017-06-21','upload/53ab76be33b4d.gif'),(37,'民革中央建言：搭建青年创业就业服务平台',1,'民革中央建言：搭建青年创业就业服务平台','2017-06-21','upload/568cd5343f525.gif'),(38,'[大街访谈]对话Founders Space创始人...',1,'[大街访谈]对话Founders Space创始人...','2017-06-21','upload/55adb1f0922cf.jpg'),(39,'北京大学创业训练营、中心前沿经济',1,'北京大学创业训练营、中心前沿经济','2017-06-21','upload/568cd5343f525.gif');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `regdate` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'asd','123','568980281@qq.com','2017-06-19'),(2,'qwe','123','568980281@qq.com','2017-06-19'),(3,'qqqq','qqqqqq','qq@qq.qq','2017-06-19');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-21 10:55:01
