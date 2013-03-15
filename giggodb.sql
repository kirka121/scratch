-- MySQL dump 10.13  Distrib 5.5.27, for Win32 (x86)
--
-- Host: localhost    Database: giggo
-- ------------------------------------------------------
-- Server version	5.5.27-log

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
-- Table structure for table `giggo_active_guests`
--

DROP TABLE IF EXISTS `giggo_active_guests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `giggo_active_guests` (
  `ip` varchar(15) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `giggo_active_guests`
--

LOCK TABLES `giggo_active_guests` WRITE;
/*!40000 ALTER TABLE `giggo_active_guests` DISABLE KEYS */;
INSERT INTO `giggo_active_guests` VALUES ('127.0.0.1',1363313044);
/*!40000 ALTER TABLE `giggo_active_guests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `giggo_active_users`
--

DROP TABLE IF EXISTS `giggo_active_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `giggo_active_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `giggo_active_users`
--

LOCK TABLES `giggo_active_users` WRITE;
/*!40000 ALTER TABLE `giggo_active_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `giggo_active_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `giggo_banned_users`
--

DROP TABLE IF EXISTS `giggo_banned_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `giggo_banned_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `giggo_banned_users`
--

LOCK TABLES `giggo_banned_users` WRITE;
/*!40000 ALTER TABLE `giggo_banned_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `giggo_banned_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `giggo_users`
--

DROP TABLE IF EXISTS `giggo_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `giggo_users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `userid` varchar(32) DEFAULT NULL,
  `userlevel` tinyint(1) unsigned NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `giggo_users`
--

LOCK TABLES `giggo_users` WRITE;
/*!40000 ALTER TABLE `giggo_users` DISABLE KEYS */;
INSERT INTO `giggo_users` VALUES ('kirka','c47fe7baa30e167fd8713601a6ecd85a','adbe930f51738843cfb42e5aa7bac360',9,'kirka121@gmail.com',1363313034,NULL,NULL),('test2','f5d1278e8109edd94e1e4197e04873b9','0',1,'asda@asda.com',1363129963,NULL,NULL),('test3','f5d1278e8109edd94e1e4197e04873b9','0',1,'sdas@asda.com',1363129987,NULL,NULL),('test4','f5d1278e8109edd94e1e4197e04873b9','0',1,'asdas@asda.com',1363130041,NULL,NULL),('test6','f5d1278e8109edd94e1e4197e04873b9','0',1,'asda@asdas.com',1363178938,NULL,NULL),('test7','f5d1278e8109edd94e1e4197e04873b9','0',1,'tester@tester.ca',1363180406,NULL,NULL),('tester','f5d1278e8109edd94e1e4197e04873b9','0',1,'tester@tester.com',1363305043,'asdas','asdasda');
/*!40000 ALTER TABLE `giggo_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-03-15  9:31:45
