-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: 10.10.5.23    Database: gitoffice
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `allowances`
--

DROP TABLE IF EXISTS `allowances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `allowances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double(8,2) NOT NULL,
  `value_type` enum('flat','percentage') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'percentage',
  `designations_id` bigint(20) unsigned NOT NULL,
  `wef` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `allowances_designations_id_foreign` (`designations_id`),
  CONSTRAINT `allowances_designations_id_foreign` FOREIGN KEY (`designations_id`) REFERENCES `designations` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `allowances`
--

LOCK TABLES `allowances` WRITE;
/*!40000 ALTER TABLE `allowances` DISABLE KEYS */;
INSERT INTO `allowances` VALUES (1,'Special Allowance',15.00,'percentage',5,'2023-01-01',NULL,'active','2023-09-23 05:18:33','2023-09-23 05:18:33'),(2,'Special Allowance',15.00,'percentage',5,'2023-01-01',NULL,'active','2023-09-23 05:20:41','2023-09-23 05:20:41'),(3,'Special Allowance',15.00,'percentage',5,'2023-01-01',NULL,'active','2023-09-23 05:21:26','2023-09-23 05:21:26'),(4,'Special Allowance',15.00,'percentage',5,'2023-01-01',NULL,'active','2023-09-23 05:21:51','2023-09-23 05:21:51'),(5,'Autonomouns Allowance',400.00,'flat',5,'2023-02-01',NULL,'active','2023-09-23 05:23:43','2023-09-23 05:23:43'),(6,'Autonomouns Allowance',700.00,'flat',5,'2023-02-01',NULL,'active','2023-09-23 05:23:55','2023-09-23 05:35:26'),(7,'Special Insentive Asso',15.00,'percentage',6,'2023-01-01',NULL,'active','2023-09-23 05:24:48','2023-09-23 05:24:48'),(8,'Special Insentive Asso',15.00,'percentage',6,'2023-01-01','2023-09-23','inactive','2023-09-23 05:25:21','2023-09-23 05:40:07'),(9,'Autonomous Allowance',1000.00,'flat',5,'2023-01-01',NULL,'active','2023-09-23 05:26:12','2023-09-23 05:26:12'),(10,'Dean Allowance',10000.00,'flat',3,'2023-01-01',NULL,'active','2023-09-30 06:25:21','2023-09-30 06:25:21');
/*!40000 ALTER TABLE `allowances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `association_staff`
--

DROP TABLE IF EXISTS `association_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `association_staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `association_id` bigint(20) unsigned NOT NULL,
  `staff_id` bigint(20) unsigned NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `association_staff_associations_id_foreign` (`association_id`),
  KEY `association_staff_staff_id_foreign` (`staff_id`),
  CONSTRAINT `association_staff_associations_id_foreign` FOREIGN KEY (`association_id`) REFERENCES `associations` (`id`),
  CONSTRAINT `association_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=280 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `association_staff`
--

LOCK TABLES `association_staff` WRITE;
/*!40000 ALTER TABLE `association_staff` DISABLE KEYS */;
INSERT INTO `association_staff` VALUES (14,5,11,'2009-09-24',NULL,NULL,NULL,'active',NULL,NULL),(15,5,12,'2017-07-01',NULL,NULL,NULL,'active',NULL,NULL),(16,5,13,'2005-07-16',NULL,NULL,NULL,'active',NULL,NULL),(17,5,14,'2018-12-02',NULL,NULL,NULL,'active',NULL,NULL),(18,5,15,'2022-10-03',NULL,NULL,NULL,'active',NULL,NULL),(19,5,16,'1989-09-05',NULL,NULL,NULL,'active',NULL,NULL),(20,5,17,'2023-01-03',NULL,NULL,NULL,'active',NULL,NULL),(21,5,18,'2016-11-02',NULL,NULL,NULL,'active',NULL,NULL),(22,5,19,'2023-01-09',NULL,NULL,NULL,'active',NULL,NULL),(23,5,20,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(24,5,21,'2023-04-09',NULL,NULL,NULL,'active',NULL,NULL),(25,5,22,'2022-10-10',NULL,NULL,NULL,'active',NULL,NULL),(26,5,23,'2009-05-10',NULL,NULL,NULL,'active',NULL,NULL),(27,5,24,'2011-09-28',NULL,NULL,NULL,'active',NULL,NULL),(28,5,25,'2003-11-15',NULL,NULL,NULL,'active',NULL,NULL),(29,5,26,'2012-10-16',NULL,NULL,NULL,'active',NULL,NULL),(30,5,27,'2012-10-16',NULL,NULL,NULL,'active',NULL,NULL),(31,5,28,'2005-08-18',NULL,NULL,NULL,'active',NULL,NULL),(32,5,29,'2013-05-03',NULL,NULL,NULL,'active',NULL,NULL),(33,5,30,'2013-02-11',NULL,NULL,NULL,'active',NULL,NULL),(34,5,31,'2006-08-07',NULL,NULL,NULL,'active',NULL,NULL),(35,5,32,'2008-03-01',NULL,NULL,NULL,'active',NULL,NULL),(36,5,33,'2013-11-07',NULL,NULL,NULL,'active',NULL,NULL),(37,5,34,'2012-01-12',NULL,NULL,NULL,'active',NULL,NULL),(38,5,35,'2013-12-26',NULL,NULL,NULL,'active',NULL,NULL),(39,5,36,'2012-05-16',NULL,NULL,NULL,'active',NULL,NULL),(40,5,37,'2014-01-09',NULL,NULL,NULL,'active',NULL,NULL),(41,5,38,'2012-07-16',NULL,NULL,NULL,'active',NULL,NULL),(42,5,39,'2014-01-09',NULL,NULL,NULL,'active',NULL,NULL),(43,5,40,'2013-03-15',NULL,NULL,NULL,'active',NULL,NULL),(44,5,41,'2014-01-10',NULL,NULL,NULL,'active',NULL,NULL),(45,5,42,'2013-09-14',NULL,NULL,NULL,'active',NULL,NULL),(46,5,43,'2014-08-01',NULL,NULL,NULL,'active',NULL,NULL),(47,5,44,'2013-02-13',NULL,NULL,NULL,'active',NULL,NULL),(48,5,45,'2014-02-15',NULL,NULL,NULL,'active',NULL,NULL),(49,5,46,'2005-07-06',NULL,NULL,NULL,'active',NULL,NULL),(50,5,47,'2014-09-02',NULL,NULL,NULL,'active',NULL,NULL),(51,5,48,'2013-09-02',NULL,NULL,NULL,'active',NULL,NULL),(52,5,49,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(53,5,50,'2015-02-18',NULL,NULL,NULL,'active',NULL,NULL),(54,5,51,'2013-03-05',NULL,NULL,NULL,'active',NULL,NULL),(55,5,52,'2006-02-06',NULL,NULL,NULL,'active',NULL,NULL),(56,5,53,'2015-02-18',NULL,NULL,NULL,'active',NULL,NULL),(57,5,54,'2015-07-01',NULL,NULL,NULL,'active',NULL,NULL),(58,5,55,'2015-11-02',NULL,NULL,NULL,'active',NULL,NULL),(59,5,56,'2015-07-06',NULL,NULL,NULL,'active',NULL,NULL),(60,5,57,'2015-12-01',NULL,NULL,NULL,'active',NULL,NULL),(61,5,58,'2014-08-16',NULL,NULL,NULL,'active',NULL,NULL),(62,5,59,'2015-08-20',NULL,NULL,NULL,'active',NULL,NULL),(63,5,60,'2023-05-23',NULL,NULL,NULL,'active',NULL,NULL),(64,5,61,'2013-02-13',NULL,NULL,NULL,'active',NULL,NULL),(65,5,62,'2016-07-15',NULL,NULL,NULL,'active',NULL,NULL),(66,5,63,'2009-01-01',NULL,NULL,NULL,'active',NULL,NULL),(67,5,64,'2017-07-03',NULL,NULL,NULL,'active',NULL,NULL),(68,5,65,'2016-09-08',NULL,NULL,NULL,'active',NULL,NULL),(69,5,66,'2015-11-03',NULL,NULL,NULL,'active',NULL,NULL),(70,5,67,'2022-10-21',NULL,NULL,NULL,'active',NULL,NULL),(71,5,68,'2015-11-16',NULL,NULL,NULL,'active',NULL,NULL),(72,5,69,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(73,5,70,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(74,5,71,'2017-07-07',NULL,NULL,NULL,'active',NULL,NULL),(75,5,72,'2012-11-06',NULL,NULL,NULL,'active',NULL,NULL),(76,5,73,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(77,5,74,'2019-09-11',NULL,NULL,NULL,'active',NULL,NULL),(78,5,75,'2010-04-12',NULL,NULL,NULL,'active',NULL,NULL),(79,5,76,'1989-03-04',NULL,NULL,NULL,'active',NULL,NULL),(80,5,77,'1997-09-02',NULL,NULL,NULL,'active',NULL,NULL),(81,5,78,'2010-09-14',NULL,NULL,NULL,'active',NULL,NULL),(82,5,79,'2019-09-20',NULL,NULL,NULL,'active',NULL,NULL),(83,5,80,'1998-09-21',NULL,NULL,NULL,'active',NULL,NULL),(84,5,81,'2004-03-01',NULL,NULL,NULL,'active',NULL,NULL),(85,5,82,'1996-03-09',NULL,NULL,NULL,'active',NULL,NULL),(86,5,83,'2014-12-01',NULL,NULL,NULL,'active',NULL,NULL),(87,5,84,'1997-09-03',NULL,NULL,NULL,'active',NULL,NULL),(88,5,85,'2019-09-16',NULL,NULL,NULL,'active',NULL,NULL),(89,5,86,'2022-08-01',NULL,NULL,NULL,'active',NULL,NULL),(90,5,87,'2021-02-01',NULL,NULL,NULL,'active',NULL,NULL),(91,5,88,'1997-02-11',NULL,NULL,NULL,'active',NULL,NULL),(92,5,89,'2023-07-17',NULL,NULL,NULL,'active',NULL,NULL),(93,5,90,'2023-10-03',NULL,NULL,NULL,'active',NULL,NULL),(94,5,91,'2023-06-05',NULL,NULL,NULL,'active',NULL,NULL),(95,5,92,'1999-10-30',NULL,NULL,NULL,'active',NULL,NULL),(96,5,93,'2010-09-21',NULL,NULL,NULL,'active',NULL,NULL),(97,5,94,'2008-08-14',NULL,NULL,NULL,'active',NULL,NULL),(98,5,95,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(99,5,96,'1996-03-01',NULL,NULL,NULL,'active',NULL,NULL),(100,5,97,'2019-01-01',NULL,NULL,NULL,'active',NULL,NULL),(101,5,98,'2001-10-01',NULL,NULL,NULL,'active',NULL,NULL),(102,5,99,'2010-09-09',NULL,NULL,NULL,'active',NULL,NULL),(103,5,100,'2022-08-01',NULL,NULL,NULL,'active',NULL,NULL),(104,5,101,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(105,5,102,'2012-08-03',NULL,NULL,NULL,'active',NULL,NULL),(106,5,103,'2006-03-09',NULL,NULL,NULL,'active',NULL,NULL),(107,5,104,'2007-08-06',NULL,NULL,NULL,'active',NULL,NULL),(108,5,105,'2016-10-24',NULL,NULL,NULL,'active',NULL,NULL),(109,5,106,'1999-10-29',NULL,NULL,NULL,'active',NULL,NULL),(110,5,107,'2004-04-08',NULL,NULL,NULL,'active',NULL,NULL),(111,5,108,'2021-03-01',NULL,NULL,NULL,'active',NULL,NULL),(112,5,109,'2004-08-16',NULL,NULL,NULL,'active',NULL,NULL),(113,5,110,'2023-05-22',NULL,NULL,NULL,'active',NULL,NULL),(114,5,111,'2003-06-13',NULL,NULL,NULL,'active',NULL,NULL),(115,5,112,'2013-02-13',NULL,NULL,NULL,'active',NULL,NULL),(116,5,113,'2023-08-21',NULL,NULL,NULL,'active',NULL,NULL),(117,5,114,'2013-02-15',NULL,NULL,NULL,'active',NULL,NULL),(118,5,115,'2023-10-10',NULL,NULL,NULL,'active',NULL,NULL),(119,5,116,'2011-05-16',NULL,NULL,NULL,'active',NULL,NULL),(120,5,117,'1998-01-01',NULL,NULL,NULL,'active',NULL,NULL),(121,5,118,'2007-04-02',NULL,NULL,NULL,'active',NULL,NULL),(122,5,119,'2007-05-28',NULL,NULL,NULL,'active',NULL,NULL),(123,5,120,'2003-09-17',NULL,NULL,NULL,'active',NULL,NULL),(124,5,121,'2023-10-09',NULL,NULL,NULL,'active',NULL,NULL),(125,5,122,'2008-08-14',NULL,NULL,NULL,'active',NULL,NULL),(126,5,123,'2007-07-17',NULL,NULL,NULL,'active',NULL,NULL),(127,5,124,'2002-07-11',NULL,NULL,NULL,'active',NULL,NULL),(128,5,125,'2007-03-05',NULL,NULL,NULL,'active',NULL,NULL),(129,5,126,'2006-08-01',NULL,NULL,NULL,'active',NULL,NULL),(130,5,127,'2023-06-01',NULL,NULL,NULL,'active',NULL,NULL),(131,5,128,'2007-07-02',NULL,NULL,NULL,'active',NULL,NULL),(132,5,129,'2010-09-13',NULL,NULL,NULL,'active',NULL,NULL),(133,5,130,'2009-08-03',NULL,NULL,NULL,'active',NULL,NULL),(134,5,131,'2006-04-17',NULL,NULL,NULL,'active',NULL,NULL),(135,5,132,'2022-10-27',NULL,NULL,NULL,'active',NULL,NULL),(136,5,133,'2010-11-08',NULL,NULL,NULL,'active',NULL,NULL),(137,5,134,'2017-09-01',NULL,NULL,NULL,'active',NULL,NULL),(138,5,135,'2017-02-11',NULL,NULL,NULL,'active',NULL,NULL),(139,5,136,'2007-09-04',NULL,NULL,NULL,'active',NULL,NULL),(140,5,137,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(141,5,138,'2012-08-02',NULL,NULL,NULL,'active',NULL,NULL),(142,5,139,'2008-08-18',NULL,NULL,NULL,'active',NULL,NULL),(143,5,140,'2011-11-21',NULL,NULL,NULL,'active',NULL,NULL),(144,5,141,'2019-09-11',NULL,NULL,NULL,'active',NULL,NULL),(145,5,142,'2010-03-18',NULL,NULL,NULL,'active',NULL,NULL),(146,5,143,'2009-08-05',NULL,NULL,NULL,'active',NULL,NULL),(147,5,144,'2010-08-20',NULL,NULL,NULL,'active',NULL,NULL),(148,5,145,'2012-07-16',NULL,NULL,NULL,'active',NULL,NULL),(149,5,146,'2009-09-07',NULL,NULL,NULL,'active',NULL,NULL),(150,5,147,'2013-07-19',NULL,NULL,NULL,'active',NULL,NULL),(151,5,148,'2022-03-02',NULL,NULL,NULL,'active',NULL,NULL),(152,5,149,'2013-09-16',NULL,NULL,NULL,'active',NULL,NULL),(153,5,150,'2022-03-04',NULL,NULL,NULL,'active',NULL,NULL),(154,5,151,'2014-08-01',NULL,NULL,NULL,'active',NULL,NULL),(155,5,152,'2015-02-03',NULL,NULL,NULL,'active',NULL,NULL),(156,5,153,'2022-03-07',NULL,NULL,NULL,'active',NULL,NULL),(157,5,154,'2014-02-01',NULL,NULL,NULL,'active',NULL,NULL),(158,5,155,'2011-11-02',NULL,NULL,NULL,'active',NULL,NULL),(159,5,156,'1993-02-09',NULL,NULL,NULL,'active',NULL,NULL),(160,5,157,'2022-08-24',NULL,NULL,NULL,'active',NULL,NULL),(161,5,158,'2011-12-15',NULL,NULL,NULL,'active',NULL,NULL),(162,5,159,'2012-09-13',NULL,NULL,NULL,'active',NULL,NULL),(163,5,160,'2010-08-02',NULL,NULL,NULL,'active',NULL,NULL),(164,5,161,'2013-02-15',NULL,NULL,NULL,'active',NULL,NULL),(165,5,162,'2016-04-26',NULL,NULL,NULL,'active',NULL,NULL),(166,5,163,'2012-10-12',NULL,NULL,NULL,'active',NULL,NULL),(167,5,164,'2011-10-01',NULL,NULL,NULL,'active',NULL,NULL),(168,5,165,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(169,5,166,'2013-05-20',NULL,NULL,NULL,'active',NULL,NULL),(170,5,167,'2016-08-01',NULL,NULL,NULL,'active',NULL,NULL),(171,5,168,'2022-03-02',NULL,NULL,NULL,'active',NULL,NULL),(172,5,169,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(173,5,170,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(174,5,171,'2016-08-01',NULL,NULL,NULL,'active',NULL,NULL),(175,5,172,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(176,5,173,'2013-09-21',NULL,NULL,NULL,'active',NULL,NULL),(177,5,174,'2023-05-08',NULL,NULL,NULL,'active',NULL,NULL),(178,5,175,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(179,5,176,'2016-09-15',NULL,NULL,NULL,'active',NULL,NULL),(180,5,177,'2023-06-01',NULL,NULL,NULL,'active',NULL,NULL),(181,5,178,'2007-09-04',NULL,NULL,NULL,'active',NULL,NULL),(182,5,179,'2013-11-29',NULL,NULL,NULL,'active',NULL,NULL),(183,5,180,'2007-09-14',NULL,NULL,NULL,'active',NULL,NULL),(184,5,181,'2006-02-06',NULL,NULL,NULL,'active',NULL,NULL),(185,5,182,'2014-08-18',NULL,NULL,NULL,'active',NULL,NULL),(186,5,183,'2002-06-05',NULL,NULL,NULL,'active',NULL,NULL),(187,5,184,'2017-04-18',NULL,NULL,NULL,'active',NULL,NULL),(188,5,185,'1997-08-24',NULL,NULL,NULL,'active',NULL,NULL),(189,5,186,'2014-08-11',NULL,NULL,NULL,'active',NULL,NULL),(190,5,187,'2005-08-22',NULL,NULL,NULL,'active',NULL,NULL),(191,5,188,'2017-08-31',NULL,NULL,NULL,'active',NULL,NULL),(192,5,189,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(193,5,190,'2007-09-03',NULL,NULL,NULL,'active',NULL,NULL),(194,5,191,'2014-09-12',NULL,NULL,NULL,'active',NULL,NULL),(195,5,192,'2017-09-08',NULL,NULL,NULL,'active',NULL,NULL),(196,5,193,'2000-12-26',NULL,NULL,NULL,'active',NULL,NULL),(197,5,194,'2014-09-12',NULL,NULL,NULL,'active',NULL,NULL),(198,5,195,'2013-02-15',NULL,NULL,NULL,'active',NULL,NULL),(199,5,196,'2017-10-11',NULL,NULL,NULL,'active',NULL,NULL),(200,5,197,'2007-09-03',NULL,NULL,NULL,'active',NULL,NULL),(201,5,198,'2007-04-02',NULL,NULL,NULL,'active',NULL,NULL),(202,5,199,'2008-08-12',NULL,NULL,NULL,'active',NULL,NULL),(203,5,200,'2017-10-23',NULL,NULL,NULL,'active',NULL,NULL),(204,5,201,'1993-10-20',NULL,NULL,NULL,'active',NULL,NULL),(205,5,202,'2013-07-22',NULL,NULL,NULL,'active',NULL,NULL),(206,5,203,'2019-06-01',NULL,NULL,NULL,'active',NULL,NULL),(207,5,204,'2016-01-04',NULL,NULL,NULL,'active',NULL,NULL),(208,5,205,'2013-02-14',NULL,NULL,NULL,'active',NULL,NULL),(209,5,206,'2011-10-01',NULL,NULL,NULL,'active',NULL,NULL),(210,5,207,'2016-01-16',NULL,NULL,NULL,'active',NULL,NULL),(211,5,208,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(212,5,209,'2016-08-01',NULL,NULL,NULL,'active',NULL,NULL),(213,5,210,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(214,5,211,'2021-10-04',NULL,NULL,NULL,'active',NULL,NULL),(215,5,212,'2016-08-02',NULL,NULL,NULL,'active',NULL,NULL),(216,5,213,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(217,5,214,'2007-09-09',NULL,NULL,NULL,'active',NULL,NULL),(218,5,215,'2013-02-06',NULL,NULL,NULL,'active',NULL,NULL),(219,5,216,'2003-09-22',NULL,NULL,NULL,'active',NULL,NULL),(220,5,217,'2017-07-05',NULL,NULL,NULL,'active',NULL,NULL),(221,5,218,'2006-05-05',NULL,NULL,NULL,'active',NULL,NULL),(222,5,219,'2021-10-11',NULL,NULL,NULL,'active',NULL,NULL),(223,5,220,'1996-03-01',NULL,NULL,NULL,'active',NULL,NULL),(224,5,221,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(225,5,222,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(226,5,223,'2023-05-08',NULL,NULL,NULL,'active',NULL,NULL),(227,5,224,'2021-10-18',NULL,NULL,NULL,'active',NULL,NULL),(228,5,225,'2012-08-21',NULL,NULL,NULL,'active',NULL,NULL),(229,5,226,'2023-05-08',NULL,NULL,NULL,'active',NULL,NULL),(230,5,227,'2013-02-15',NULL,NULL,NULL,'active',NULL,NULL),(231,5,228,'2002-09-21',NULL,NULL,NULL,'active',NULL,NULL),(232,5,229,'2021-11-15',NULL,NULL,NULL,'active',NULL,NULL),(233,5,230,'2011-06-03',NULL,NULL,NULL,'active',NULL,NULL),(234,5,231,'2023-10-03',NULL,NULL,NULL,'active',NULL,NULL),(235,5,232,'2001-09-18',NULL,NULL,NULL,'active',NULL,NULL),(236,5,233,'2003-09-29',NULL,NULL,NULL,'active',NULL,NULL),(237,5,234,'2005-06-15',NULL,NULL,NULL,'active',NULL,NULL),(238,5,235,'2006-11-13',NULL,NULL,NULL,'active',NULL,NULL),(239,5,236,'2007-03-01',NULL,NULL,NULL,'active',NULL,NULL),(240,5,237,'2010-03-03',NULL,NULL,NULL,'active',NULL,NULL),(241,5,238,'2007-09-03',NULL,NULL,NULL,'active',NULL,NULL),(242,5,239,'2008-04-15',NULL,NULL,NULL,'active',NULL,NULL),(243,5,240,'2016-08-10',NULL,NULL,NULL,'active',NULL,NULL),(244,5,241,'1989-08-26',NULL,NULL,NULL,'active',NULL,NULL),(245,5,242,'2016-09-15',NULL,NULL,NULL,'active',NULL,NULL),(246,5,243,'2004-03-01',NULL,NULL,NULL,'active',NULL,NULL),(247,5,244,'2001-09-18',NULL,NULL,NULL,'active',NULL,NULL),(248,5,245,'2000-04-10',NULL,NULL,NULL,'active',NULL,NULL),(249,5,246,'2004-08-20',NULL,NULL,NULL,'active',NULL,NULL),(250,5,247,'2019-04-01',NULL,NULL,NULL,'active',NULL,NULL),(251,5,248,'2004-03-01',NULL,NULL,NULL,'active',NULL,NULL),(252,5,249,'2022-08-16',NULL,NULL,NULL,'active',NULL,NULL),(253,5,250,'1987-07-23',NULL,NULL,NULL,'active',NULL,NULL),(254,5,251,'2023-02-01',NULL,NULL,NULL,'active',NULL,NULL),(255,5,252,'2023-05-02',NULL,NULL,NULL,'active',NULL,NULL),(256,5,253,'2011-01-11',NULL,NULL,NULL,'active',NULL,NULL),(257,5,254,'2017-09-01',NULL,NULL,NULL,'active',NULL,NULL),(258,5,255,'2006-09-19',NULL,NULL,NULL,'active',NULL,NULL),(259,5,256,'2023-10-03',NULL,NULL,NULL,'active',NULL,NULL),(260,5,257,'2012-04-02',NULL,NULL,NULL,'active',NULL,NULL),(261,5,258,'2007-07-04',NULL,NULL,NULL,'active',NULL,NULL),(262,5,259,'2019-04-01',NULL,NULL,NULL,'active',NULL,NULL),(263,5,260,'2004-03-01',NULL,NULL,NULL,'active',NULL,NULL),(264,5,261,'2023-08-01',NULL,NULL,NULL,'active',NULL,NULL),(265,5,262,'2008-04-03',NULL,NULL,NULL,'active',NULL,NULL),(266,5,263,'2011-11-10',NULL,NULL,NULL,'active',NULL,NULL),(267,5,264,'2005-08-13',NULL,NULL,NULL,'active',NULL,NULL),(268,5,265,'1999-11-02',NULL,NULL,NULL,'active',NULL,NULL),(269,5,266,'2014-07-15',NULL,NULL,NULL,'active',NULL,NULL),(270,5,267,'2012-02-06',NULL,NULL,NULL,'active',NULL,NULL),(271,5,268,'2018-02-01',NULL,NULL,NULL,'active',NULL,NULL),(272,5,269,'2004-12-17',NULL,NULL,NULL,'active',NULL,NULL),(273,5,270,'2006-08-07',NULL,NULL,NULL,'active',NULL,NULL),(274,5,271,'2011-10-01',NULL,NULL,NULL,'active',NULL,NULL),(275,5,272,'2010-06-01',NULL,NULL,NULL,'active',NULL,NULL),(276,5,273,'2015-08-25',NULL,NULL,NULL,'active',NULL,NULL),(277,5,274,'2019-03-01',NULL,NULL,NULL,'active',NULL,NULL),(278,5,275,'2006-08-10',NULL,NULL,NULL,'active',NULL,NULL),(279,5,276,'2016-01-16',NULL,NULL,NULL,'active',NULL,NULL);
/*!40000 ALTER TABLE `association_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `associations`
--

DROP TABLE IF EXISTS `associations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `associations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `asso_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `associations`
--

LOCK TABLES `associations` WRITE;
/*!40000 ALTER TABLE `associations` DISABLE KEYS */;
INSERT INTO `associations` VALUES (1,'Visiting','active','2023-09-11 05:16:07','2023-09-13 00:31:04'),(2,'Adjunct','active','2023-09-11 05:26:09','2023-09-13 00:30:44'),(4,'Contractual (Full Time)','active','2023-09-13 00:32:39','2023-10-06 02:51:12'),(5,'Probationary','active','2023-09-13 00:33:02','2023-09-13 00:33:02'),(6,'Confirmed','active','2023-09-13 00:33:20','2023-09-13 00:33:20'),(7,'Temporary (non teaching)','active','2023-09-22 05:40:40','2023-09-22 05:40:40'),(8,'Transfered','active','2023-10-06 02:40:25','2023-10-06 02:40:25'),(9,'Retired','active','2023-10-06 02:40:59','2023-10-06 02:40:59'),(10,'Resigned','active','2023-10-06 02:42:39','2023-10-06 02:42:39');
/*!40000 ALTER TABLE `associations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_publications`
--

DROP TABLE IF EXISTS `book_publications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_publications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `book_publications_staff_id_foreign` (`staff_id`),
  CONSTRAINT `book_publications_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_publications`
--

LOCK TABLES `book_publications` WRITE;
/*!40000 ALTER TABLE `book_publications` DISABLE KEYS */;
/*!40000 ALTER TABLE `book_publications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `castecategories`
--

DROP TABLE IF EXISTS `castecategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `castecategories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `caste_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion_id` bigint(20) unsigned NOT NULL,
  `subcastes_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `castecategories_religion_id_foreign` (`religion_id`),
  CONSTRAINT `castecategories_religion_id_foreign` FOREIGN KEY (`religion_id`) REFERENCES `religions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `castecategories`
--

LOCK TABLES `castecategories` WRITE;
/*!40000 ALTER TABLE `castecategories` DISABLE KEYS */;
INSERT INTO `castecategories` VALUES (5,'Brahmin',1,'Brahmin','--','--','active','2023-09-09 06:20:43','2023-09-09 06:20:43'),(6,'Lingayat',1,'Jangama','GM','GM','active','2023-09-11 02:16:08','2023-10-11 02:21:28'),(8,'Lingayat',1,'Ganiga','OBC','2A','active','2023-09-25 02:18:53','2023-10-03 00:06:08'),(9,'Maratha',1,'Maratha','OBC','IIIB','active','2023-10-16 05:25:46','2023-10-16 05:25:46'),(10,'Maratha',1,'Maratha','General','-','active','2023-11-28 03:03:19','2023-11-28 03:03:19'),(11,'Jain',1,'Jain','-','-','active','2023-11-28 03:04:52','2023-11-28 03:04:52'),(12,'Jain',1,'Chaturtha','-','-','active','2023-11-28 03:06:06','2023-11-28 03:06:06'),(13,'Kurbur',1,'Kurbur','-','-','active','2023-11-28 03:07:19','2023-11-28 03:07:19'),(14,'Panchal',1,'Panchal','-','-','active','2023-11-28 03:07:50','2023-11-28 03:07:50'),(15,'GSB',1,'GSB','-','-','active','2023-11-28 03:08:19','2023-11-28 03:08:19'),(16,'Shimpi',1,'Shimpi','-','-','active','2023-11-28 03:08:41','2023-11-28 03:08:41'),(17,'Hindu ST',1,'ST','-','-','active','2023-11-28 03:09:13','2023-11-28 03:09:13'),(18,'Devang',1,'Devang','-','-','active','2023-11-28 03:10:20','2023-11-28 03:10:20'),(19,'Devang',1,'Devang','-','-','active','2023-11-28 03:10:20','2023-11-28 03:10:20'),(20,'Lingayat',1,'Lingayat','-','-','active','2023-11-28 03:21:08','2023-11-28 03:21:08'),(21,'Lingayat',1,'Panchamsali','-','-','active','2023-11-28 04:29:47','2023-11-28 04:29:47'),(22,'Lingayat',1,'Ganiger','-','-','active','2023-11-28 04:30:41','2023-11-28 04:30:41'),(23,'Brahmin',1,'Madava','-','-','active','2023-11-28 04:31:30','2023-11-28 04:31:30'),(24,'Lingayat',1,'Kurnvirshettar','-','-','active','2023-11-28 04:31:55','2023-11-28 04:31:55'),(25,'Brahmin',1,'Smarth','-','-','inactive','2023-11-28 04:32:21','2023-11-28 04:34:31'),(26,'Lingayat',1,'Veerashaiva','-','-','active','2023-11-28 04:32:27','2023-11-28 04:32:27'),(27,'Brahmin',1,'Daivadny Brahmin','-','-','active','2023-11-28 04:33:09','2023-11-28 04:33:09'),(28,'Samgar',1,'Samgar','-','-','active','2023-11-28 04:33:20','2023-11-28 04:33:20'),(29,'Brahmin',1,'Vaishanav','-','-','active','2023-11-28 04:33:46','2023-11-28 04:33:46'),(30,'Brahmin',1,'Smarth','-','-','active','2023-11-28 04:34:16','2023-11-28 04:34:16'),(31,'Daivadnya',1,'Daivadnya','-','-','active','2023-11-28 04:34:31','2023-11-28 04:34:31'),(32,'Kole',1,'Kole','-','-','active','2023-11-28 04:35:16','2023-11-28 04:35:16'),(33,'Hanabar',1,'Hanabar','-','-','active','2023-11-28 04:36:05','2023-11-28 04:36:05'),(34,'SC',1,'Holer','-','-','active','2023-11-28 04:37:06','2023-11-28 04:37:06'),(35,'ST',1,'Nayik','-','-','active','2023-11-28 04:37:46','2023-11-28 04:41:56'),(36,'Maratha - konkan',1,'Maratha','-','-','active','2023-11-28 04:43:36','2023-11-28 04:43:36'),(37,'Rajput',1,'Rajput','-','-','active','2023-11-28 04:44:10','2023-11-28 04:44:10'),(38,'Nhavi',1,'Nhavi','-','-','active','2023-11-28 04:44:59','2023-11-28 04:44:59'),(39,'Bedar',1,'Bedar','-','-','active','2023-11-28 04:46:00','2023-11-28 04:46:00'),(40,'Kurbar',1,'Kurbar','-','2A','active','2023-11-28 04:48:21','2023-11-28 04:48:21'),(41,'SC - Bhangi',1,'Bhangi','-','-','active','2023-11-28 04:49:11','2023-11-28 04:49:11'),(42,'Panchal',1,'Panchal','-','-','active','2023-11-28 04:51:21','2023-11-28 04:51:21'),(43,'SC - Nayak',1,'Nayak','-','-','active','2023-11-28 04:53:22','2023-11-28 04:53:22'),(44,'OBC',1,'OBC','-','2A','active','2023-11-28 05:30:53','2023-11-28 05:30:53'),(45,'SC - Lamani',1,'Lamani','-','-','active','2023-11-28 05:31:29','2023-11-28 05:31:29'),(46,'Jain',4,'Digambar','-','-','active','2023-11-28 05:45:11','2023-11-28 05:45:11'),(47,'Digambar',4,'Chaturttha','-','-','active','2023-11-28 05:45:18','2023-11-28 05:45:18'),(48,'Brahmin',1,'Kota','-','-','active','2023-11-28 05:46:03','2023-11-28 05:46:03'),(49,'SC',1,'SC','-','-','active','2023-11-28 05:56:46','2023-11-28 05:56:46'),(50,'Jain',4,'Pancham','-','-','active','2023-11-28 06:12:23','2023-11-28 06:12:23'),(51,'Brahmin',1,'Konkanastha','-','-','active','2023-11-29 00:36:26','2023-11-29 00:36:26'),(52,'Hindu',1,'Bhavasar Kshatriya','-','-','active','2023-11-29 00:57:15','2023-11-29 00:57:15'),(53,'Lingayat',1,'Banajiga','-','-','active','2023-11-29 01:08:03','2023-11-29 01:08:03'),(54,'Hindu',1,'\'Kayastha','-','-','active','2023-11-29 01:12:21','2023-11-29 01:12:21'),(55,'Hindu',1,'Hanabar','-','-','active','2023-11-29 01:12:47','2023-11-29 01:13:10'),(56,'Brahmin',1,'Saraswat','-','-','active','2023-11-29 01:20:31','2023-11-29 01:20:31'),(57,'Maratha',1,'Kshatriya','-','-','active','2023-11-29 01:26:35','2023-11-29 01:26:35'),(58,'JAIN',1,'DIGAMBAR','-','-','active','2023-11-29 01:31:38','2023-11-29 01:31:38'),(59,'Ganiga',1,'-','-','-','active','2023-11-29 01:37:50','2023-11-29 01:37:50'),(60,'SC',1,'Mahar','-','-','active','2023-11-29 01:42:50','2023-11-29 01:42:50'),(61,'Hindu',1,'Nair','-','-','active','2023-11-29 01:44:00','2023-11-29 01:44:00'),(62,'Gavali',1,'Gavali','-','1','active','2023-11-29 02:14:20','2023-11-29 02:14:20'),(63,'Kuruhin shetty',1,'-','-','-','active','2023-11-29 02:39:52','2023-11-29 02:39:52'),(64,'Hindu',1,'Vishwakarma','-','-','active','2023-11-29 02:45:02','2023-11-29 02:45:02'),(65,'Kumbhar',1,'Kumbhar','-','-','active','2023-11-29 02:45:49','2023-11-29 02:45:49'),(66,'Hindu',1,'Namdev Shimpi','-','-','active','2023-11-29 04:12:47','2023-11-29 04:12:47'),(67,'Hindu',1,'Gouda Saraswat Brahmin','-','-','active','2023-11-29 04:22:55','2023-11-29 04:22:55'),(68,'Christian',7,'Christian','-','-','active','2023-11-29 04:38:11','2023-11-29 04:38:11'),(69,'Daivadnya',1,'-','-','-','active','2023-11-29 05:15:53','2023-11-29 05:15:53'),(70,'Hindu',1,'Brahmin- Deshastha','-','-','active','2023-11-29 05:31:05','2023-11-29 05:31:05'),(71,'kumbhar',1,'cat-2a','-','-','active','2023-11-29 05:54:37','2023-11-29 05:54:37'),(72,'Hindu',1,'Reddy-Lingayat','-','-','active','2023-11-29 05:58:29','2023-11-29 05:58:29'),(73,'SC',1,'Madiga','-','-','active','2023-12-01 00:10:14','2023-12-01 00:10:14'),(74,'ST',1,'Medar','-','-','active','2023-12-01 00:25:19','2023-12-01 00:25:19');
/*!40000 ALTER TABLE `castecategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chapters`
--

DROP TABLE IF EXISTS `chapters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chapters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `book_publications_id` bigint(20) unsigned NOT NULL,
  `staff_id` bigint(20) unsigned NOT NULL,
  `chapter_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_page_no` int(11) NOT NULL,
  `end_page_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chapters_book_publications_id_foreign` (`book_publications_id`),
  KEY `chapters_staff_id_foreign` (`staff_id`),
  CONSTRAINT `chapters_book_publications_id_foreign` FOREIGN KEY (`book_publications_id`) REFERENCES `book_publications` (`id`),
  CONSTRAINT `chapters_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chapters`
--

LOCK TABLES `chapters` WRITE;
/*!40000 ALTER TABLE `chapters` DISABLE KEYS */;
/*!40000 ALTER TABLE `chapters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `co_authors_gits`
--

DROP TABLE IF EXISTS `co_authors_gits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `co_authors_gits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) unsigned NOT NULL,
  `publications_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `co_authors_gits_staff_id_foreign` (`staff_id`),
  KEY `co_authors_gits_publications_id_foreign` (`publications_id`),
  CONSTRAINT `co_authors_gits_publications_id_foreign` FOREIGN KEY (`publications_id`) REFERENCES `publications` (`id`),
  CONSTRAINT `co_authors_gits_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `co_authors_gits`
--

LOCK TABLES `co_authors_gits` WRITE;
/*!40000 ALTER TABLE `co_authors_gits` DISABLE KEYS */;
/*!40000 ALTER TABLE `co_authors_gits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `co_authors_others`
--

DROP TABLE IF EXISTS `co_authors_others`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `co_authors_others` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `publications_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `co_authors_others_publications_id_foreign` (`publications_id`),
  CONSTRAINT `co_authors_others_publications_id_foreign` FOREIGN KEY (`publications_id`) REFERENCES `publications` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `co_authors_others`
--

LOCK TABLES `co_authors_others` WRITE;
/*!40000 ALTER TABLE `co_authors_others` DISABLE KEYS */;
/*!40000 ALTER TABLE `co_authors_others` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `combining_leave_rules`
--

DROP TABLE IF EXISTS `combining_leave_rules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `combining_leave_rules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `leave_rules_id` bigint(20) unsigned NOT NULL,
  `combined_with` bigint(20) unsigned NOT NULL,
  `sandwiching` enum('Bothside','Oneside') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `wef` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `combining_leave_rules_leave_rules_id_foreign` (`leave_rules_id`),
  KEY `combining_leave_rules_combined_with_foreign` (`combined_with`),
  CONSTRAINT `combining_leave_rules_combined_with_foreign` FOREIGN KEY (`combined_with`) REFERENCES `leave_rules` (`id`),
  CONSTRAINT `combining_leave_rules_leave_rules_id_foreign` FOREIGN KEY (`leave_rules_id`) REFERENCES `leave_rules` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `combining_leave_rules`
--

LOCK TABLES `combining_leave_rules` WRITE;
/*!40000 ALTER TABLE `combining_leave_rules` DISABLE KEYS */;
INSERT INTO `combining_leave_rules` VALUES (2,1,7,'Oneside','Active','2023-01-01','2023-11-29 04:09:06',NULL),(3,1,4,'Bothside','Active','2023-01-01','2023-11-29 04:09:06',NULL),(4,2,6,'Bothside','Active','2023-01-01','2023-11-29 04:09:42',NULL);
/*!40000 ALTER TABLE `combining_leave_rules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conferences_attendee_staff`
--

DROP TABLE IF EXISTS `conferences_attendee_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conferences_attendee_staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) unsigned NOT NULL,
  `conferences_attendee_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `conferences_attendee_staff_staff_id_foreign` (`staff_id`),
  KEY `conferences_attendee_staff_conferences_attendee_id_foreign` (`conferences_attendee_id`),
  CONSTRAINT `conferences_attendee_staff_conferences_attendee_id_foreign` FOREIGN KEY (`conferences_attendee_id`) REFERENCES `conferences_attendees` (`id`),
  CONSTRAINT `conferences_attendee_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conferences_attendee_staff`
--

LOCK TABLES `conferences_attendee_staff` WRITE;
/*!40000 ALTER TABLE `conferences_attendee_staff` DISABLE KEYS */;
/*!40000 ALTER TABLE `conferences_attendee_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conferences_attendees`
--

DROP TABLE IF EXISTS `conferences_attendees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conferences_attendees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attended_as` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `no_of_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paper_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsored` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `sponsored_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `weblink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conferences_attendees`
--

LOCK TABLES `conferences_attendees` WRITE;
/*!40000 ALTER TABLE `conferences_attendees` DISABLE KEYS */;
/*!40000 ALTER TABLE `conferences_attendees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conferences_conducteds`
--

DROP TABLE IF EXISTS `conferences_conducteds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conferences_conducteds` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_participants` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsored` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsoring_agency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weblink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conferences_conducteds`
--

LOCK TABLES `conferences_conducteds` WRITE;
/*!40000 ALTER TABLE `conferences_conducteds` DISABLE KEYS */;
/*!40000 ALTER TABLE `conferences_conducteds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consolidated_teaching_pay_staff`
--

DROP TABLE IF EXISTS `consolidated_teaching_pay_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consolidated_teaching_pay_staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) unsigned NOT NULL,
  `consolidated_teaching_pay_id` bigint(20) unsigned NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consolidated_teaching_pay_staff_staff_id_foreign` (`staff_id`),
  KEY `ctp_ctp_id_fk` (`consolidated_teaching_pay_id`),
  CONSTRAINT `consolidated_teaching_pay_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`),
  CONSTRAINT `ctp_ctp_id_fk` FOREIGN KEY (`consolidated_teaching_pay_id`) REFERENCES `consolidated_teaching_pay_staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consolidated_teaching_pay_staff`
--

LOCK TABLES `consolidated_teaching_pay_staff` WRITE;
/*!40000 ALTER TABLE `consolidated_teaching_pay_staff` DISABLE KEYS */;
/*!40000 ALTER TABLE `consolidated_teaching_pay_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consolidated_teaching_pays`
--

DROP TABLE IF EXISTS `consolidated_teaching_pays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consolidated_teaching_pays` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pay` double unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consolidated_teaching_pays`
--

LOCK TABLES `consolidated_teaching_pays` WRITE;
/*!40000 ALTER TABLE `consolidated_teaching_pays` DISABLE KEYS */;
/*!40000 ALTER TABLE `consolidated_teaching_pays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consultancies`
--

DROP TABLE IF EXISTS `consultancies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consultancies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) unsigned NOT NULL,
  `no_of_faculties` int(11) NOT NULL,
  `faculty_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consultancy_carried` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acadamic_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consultancies_staff_id_foreign` (`staff_id`),
  CONSTRAINT `consultancies_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultancies`
--

LOCK TABLES `consultancies` WRITE;
/*!40000 ALTER TABLE `consultancies` DISABLE KEYS */;
/*!40000 ALTER TABLE `consultancies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `create_leave_rule_configrations`
--

DROP TABLE IF EXISTS `create_leave_rule_configrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `create_leave_rule_configrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `create_leave_rule_configrations`
--

LOCK TABLES `create_leave_rule_configrations` WRITE;
/*!40000 ALTER TABLE `create_leave_rule_configrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `create_leave_rule_configrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department_staff`
--

DROP TABLE IF EXISTS `department_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department_staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `department_id` bigint(20) unsigned NOT NULL,
  `staff_id` bigint(20) unsigned NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive','closed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `department_staff_departments_id_foreign` (`department_id`),
  KEY `department_staff_staff_id_foreign` (`staff_id`),
  CONSTRAINT `department_staff_departments_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  CONSTRAINT `department_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=282 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department_staff`
--

LOCK TABLES `department_staff` WRITE;
/*!40000 ALTER TABLE `department_staff` DISABLE KEYS */;
INSERT INTO `department_staff` VALUES (16,8,11,'2009-09-24',NULL,NULL,NULL,'active',NULL,NULL),(17,8,12,'2017-07-01',NULL,NULL,NULL,'active',NULL,NULL),(18,8,13,'2005-07-16',NULL,NULL,NULL,'active',NULL,NULL),(19,8,14,'2018-12-02',NULL,NULL,NULL,'active',NULL,NULL),(20,8,15,'2022-10-03',NULL,NULL,NULL,'active',NULL,NULL),(21,7,16,'1989-09-05',NULL,NULL,NULL,'active',NULL,NULL),(22,8,17,'2023-01-03',NULL,NULL,NULL,'active',NULL,NULL),(23,1,18,'2016-11-02',NULL,NULL,NULL,'active',NULL,NULL),(24,8,19,'2023-01-09',NULL,NULL,NULL,'active',NULL,NULL),(25,1,20,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(26,8,21,'2023-04-09',NULL,NULL,NULL,'active',NULL,NULL),(27,2,22,'2022-10-10',NULL,NULL,NULL,'active',NULL,NULL),(28,8,23,'2009-05-10',NULL,NULL,NULL,'active',NULL,NULL),(29,8,24,'2011-09-28',NULL,NULL,NULL,'active',NULL,NULL),(30,2,25,'2003-11-15',NULL,NULL,NULL,'active',NULL,NULL),(31,1,26,'2012-10-16',NULL,NULL,NULL,'active',NULL,NULL),(32,1,27,'2012-10-16',NULL,NULL,NULL,'active',NULL,NULL),(33,2,28,'2005-08-18',NULL,NULL,NULL,'active',NULL,NULL),(34,8,29,'2013-05-03',NULL,NULL,NULL,'active',NULL,NULL),(35,1,30,'2013-02-11',NULL,NULL,NULL,'active',NULL,NULL),(36,7,31,'2006-08-07',NULL,NULL,NULL,'active',NULL,NULL),(37,8,32,'2008-03-01',NULL,NULL,NULL,'active',NULL,NULL),(38,8,33,'2013-11-07',NULL,NULL,NULL,'active',NULL,NULL),(39,7,34,'2012-01-12',NULL,NULL,NULL,'active',NULL,NULL),(40,8,35,'2013-12-26',NULL,NULL,NULL,'active',NULL,NULL),(41,7,36,'2012-05-16',NULL,NULL,NULL,'active',NULL,NULL),(42,8,37,'2014-01-09',NULL,NULL,NULL,'active',NULL,NULL),(43,7,38,'2012-07-16',NULL,NULL,NULL,'active',NULL,NULL),(44,8,39,'2014-01-09',NULL,NULL,NULL,'active',NULL,NULL),(45,7,40,'2013-03-15',NULL,NULL,NULL,'active',NULL,NULL),(46,8,41,'2014-01-10',NULL,NULL,NULL,'active',NULL,NULL),(47,7,42,'2013-09-14',NULL,NULL,NULL,'active',NULL,NULL),(48,8,43,'2014-08-01',NULL,NULL,NULL,'active',NULL,NULL),(49,1,44,'2013-02-13',NULL,NULL,NULL,'active',NULL,NULL),(50,7,45,'2014-02-15',NULL,NULL,NULL,'active',NULL,NULL),(51,8,46,'2005-07-06',NULL,NULL,NULL,'active',NULL,NULL),(52,8,47,'2014-09-02',NULL,NULL,NULL,'active',NULL,NULL),(53,8,48,'2013-09-02',NULL,NULL,NULL,'active',NULL,NULL),(54,1,49,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(55,7,50,'2015-02-18',NULL,NULL,NULL,'active',NULL,NULL),(56,8,51,'2013-03-05',NULL,NULL,NULL,'active',NULL,NULL),(57,1,52,'2006-02-06',NULL,NULL,NULL,'active',NULL,NULL),(58,7,53,'2015-02-18',NULL,NULL,NULL,'active',NULL,NULL),(59,8,54,'2015-07-01',NULL,NULL,NULL,'active',NULL,NULL),(60,8,55,'2015-11-02',NULL,NULL,NULL,'active',NULL,NULL),(61,8,56,'2015-07-06',NULL,NULL,NULL,'active',NULL,NULL),(62,8,57,'2015-12-01',NULL,NULL,NULL,'active',NULL,NULL),(63,7,58,'2014-08-16',NULL,NULL,NULL,'active',NULL,NULL),(64,8,59,'2015-08-20',NULL,NULL,NULL,'active',NULL,NULL),(65,8,60,'2023-05-23',NULL,NULL,NULL,'active',NULL,NULL),(66,8,61,'2013-02-13',NULL,NULL,NULL,'active',NULL,NULL),(67,8,62,'2016-07-15',NULL,NULL,NULL,'active',NULL,NULL),(68,8,63,'2009-01-01',NULL,NULL,NULL,'active',NULL,NULL),(69,8,64,'2017-07-03',NULL,NULL,NULL,'active',NULL,NULL),(70,1,65,'2016-09-08',NULL,NULL,NULL,'active',NULL,NULL),(71,8,66,'2015-11-03',NULL,NULL,NULL,'active',NULL,NULL),(72,8,67,'2022-10-21',NULL,NULL,NULL,'active',NULL,NULL),(73,8,68,'2015-11-16',NULL,NULL,NULL,'active',NULL,NULL),(74,8,69,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(75,1,70,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(76,8,71,'2017-07-07',NULL,NULL,NULL,'active',NULL,NULL),(77,8,72,'2012-11-06',NULL,NULL,NULL,'active',NULL,NULL),(78,8,73,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(79,1,74,'2019-09-11',NULL,NULL,NULL,'active',NULL,NULL),(80,1,75,'2010-04-12',NULL,NULL,NULL,'active',NULL,NULL),(81,7,76,'1989-03-04',NULL,NULL,NULL,'active',NULL,NULL),(82,1,77,'1997-09-02',NULL,NULL,NULL,'active',NULL,NULL),(83,7,78,'2010-09-14',NULL,NULL,NULL,'active',NULL,NULL),(84,1,79,'2019-09-20',NULL,NULL,NULL,'active',NULL,NULL),(85,1,80,'1998-09-21',NULL,NULL,NULL,'active',NULL,NULL),(86,2,81,'2004-03-01',NULL,NULL,NULL,'active',NULL,NULL),(87,1,82,'1996-03-09',NULL,NULL,NULL,'active',NULL,NULL),(88,7,83,'2014-12-01',NULL,NULL,NULL,'active',NULL,NULL),(89,1,84,'1997-09-03',NULL,NULL,NULL,'active',NULL,NULL),(90,1,85,'2019-09-16',NULL,NULL,NULL,'active',NULL,NULL),(91,7,86,'2022-08-01',NULL,NULL,NULL,'active',NULL,NULL),(92,1,87,'2021-02-01',NULL,NULL,NULL,'active',NULL,NULL),(93,1,88,'1997-02-11',NULL,NULL,NULL,'active',NULL,NULL),(94,7,89,'2023-07-17',NULL,NULL,NULL,'active',NULL,NULL),(95,7,90,'2023-10-03',NULL,NULL,NULL,'active',NULL,NULL),(96,2,91,'2023-06-05',NULL,NULL,NULL,'active',NULL,NULL),(97,1,92,'1999-10-30',NULL,NULL,NULL,'active',NULL,NULL),(98,7,93,'2010-09-21',NULL,NULL,NULL,'active',NULL,NULL),(99,1,94,'2008-08-14',NULL,NULL,NULL,'active',NULL,NULL),(100,7,95,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(101,1,96,'1996-03-01',NULL,NULL,NULL,'active',NULL,NULL),(102,2,97,'2019-01-01',NULL,NULL,NULL,'active',NULL,NULL),(103,2,98,'2001-10-01',NULL,NULL,NULL,'active',NULL,NULL),(104,7,99,'2010-09-09',NULL,NULL,NULL,'active',NULL,NULL),(105,1,100,'2022-08-01',NULL,NULL,NULL,'active',NULL,NULL),(106,7,101,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(107,7,102,'2012-08-03',NULL,NULL,NULL,'active',NULL,NULL),(108,1,103,'2006-03-09',NULL,NULL,NULL,'active',NULL,NULL),(109,2,104,'2007-08-06',NULL,NULL,NULL,'active',NULL,NULL),(110,1,105,'2016-10-24',NULL,NULL,NULL,'active',NULL,NULL),(111,2,106,'1999-10-29',NULL,NULL,NULL,'active',NULL,NULL),(112,1,107,'2004-04-08',NULL,NULL,NULL,'active',NULL,NULL),(113,7,108,'2021-03-01',NULL,NULL,NULL,'active',NULL,NULL),(114,1,109,'2004-08-16',NULL,NULL,NULL,'active',NULL,NULL),(115,1,110,'2023-05-22',NULL,NULL,NULL,'active',NULL,NULL),(116,1,111,'2003-06-13',NULL,NULL,NULL,'active',NULL,NULL),(117,7,112,'2013-02-13',NULL,NULL,NULL,'active',NULL,NULL),(118,1,113,'2023-08-21',NULL,NULL,NULL,'active',NULL,NULL),(119,7,114,'2013-02-15',NULL,NULL,NULL,'active',NULL,NULL),(120,1,115,'2023-10-10',NULL,NULL,NULL,'active',NULL,NULL),(121,1,116,'2011-05-16',NULL,NULL,NULL,'active',NULL,NULL),(122,7,117,'1998-01-01',NULL,NULL,NULL,'active',NULL,NULL),(123,2,118,'2007-04-02',NULL,NULL,NULL,'active',NULL,NULL),(124,2,119,'2007-05-28',NULL,NULL,NULL,'active',NULL,NULL),(125,1,120,'2003-09-17',NULL,NULL,NULL,'active',NULL,NULL),(126,1,121,'2023-10-09',NULL,NULL,NULL,'active',NULL,NULL),(127,1,122,'2008-08-14',NULL,NULL,NULL,'active',NULL,NULL),(128,2,123,'2007-07-17',NULL,NULL,NULL,'active',NULL,NULL),(129,2,124,'2002-07-11',NULL,NULL,NULL,'active',NULL,NULL),(130,2,125,'2007-03-05',NULL,NULL,NULL,'active',NULL,NULL),(131,1,126,'2006-08-01',NULL,NULL,NULL,'active',NULL,NULL),(132,1,127,'2023-06-01',NULL,NULL,NULL,'active',NULL,NULL),(133,2,128,'2007-07-02',NULL,NULL,NULL,'active',NULL,NULL),(134,2,129,'2010-09-13',NULL,NULL,NULL,'active',NULL,NULL),(135,1,130,'2009-08-03',NULL,NULL,NULL,'active',NULL,NULL),(136,9,131,'2006-04-17',NULL,NULL,NULL,'active',NULL,NULL),(137,2,132,'2022-10-27',NULL,NULL,NULL,'active',NULL,NULL),(138,2,133,'2010-11-08',NULL,NULL,NULL,'active',NULL,NULL),(139,9,134,'2017-09-01',NULL,NULL,NULL,'active',NULL,NULL),(140,2,135,'2017-02-11',NULL,NULL,NULL,'active',NULL,NULL),(141,2,136,'2007-09-04',NULL,NULL,NULL,'active',NULL,NULL),(142,2,137,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(143,9,138,'2012-08-02',NULL,NULL,NULL,'active',NULL,NULL),(144,2,139,'2008-08-18',NULL,NULL,NULL,'active',NULL,NULL),(145,2,140,'2011-11-21',NULL,NULL,NULL,'active',NULL,NULL),(146,9,141,'2019-09-11',NULL,NULL,NULL,'active',NULL,NULL),(147,1,142,'2010-03-18',NULL,NULL,NULL,'active',NULL,NULL),(148,2,143,'2009-08-05',NULL,NULL,NULL,'active',NULL,NULL),(149,1,144,'2010-08-20',NULL,NULL,NULL,'active',NULL,NULL),(150,1,145,'2012-07-16',NULL,NULL,NULL,'active',NULL,NULL),(151,2,146,'2009-09-07',NULL,NULL,NULL,'active',NULL,NULL),(152,1,147,'2013-07-19',NULL,NULL,NULL,'active',NULL,NULL),(153,9,148,'2022-03-02',NULL,NULL,NULL,'active',NULL,NULL),(154,2,149,'2013-09-16',NULL,NULL,NULL,'active',NULL,NULL),(155,9,150,'2022-03-04',NULL,NULL,NULL,'active',NULL,NULL),(156,1,151,'2014-08-01',NULL,NULL,NULL,'active',NULL,NULL),(157,2,152,'2015-02-03',NULL,NULL,NULL,'active',NULL,NULL),(158,9,153,'2022-03-07',NULL,NULL,NULL,'active',NULL,NULL),(159,2,154,'2014-02-01',NULL,NULL,NULL,'active',NULL,NULL),(160,1,155,'2011-11-02',NULL,NULL,NULL,'active',NULL,NULL),(161,2,156,'1993-02-09',NULL,NULL,NULL,'active',NULL,NULL),(162,9,157,'2022-08-24',NULL,NULL,NULL,'active',NULL,NULL),(163,2,158,'2011-12-15',NULL,NULL,NULL,'active',NULL,NULL),(164,1,159,'2012-09-13',NULL,NULL,NULL,'active',NULL,NULL),(165,2,160,'2010-08-02',NULL,NULL,NULL,'active',NULL,NULL),(166,2,161,'2013-02-15',NULL,NULL,NULL,'active',NULL,NULL),(167,2,162,'2016-04-26',NULL,NULL,NULL,'active',NULL,NULL),(168,1,163,'2012-10-12',NULL,NULL,NULL,'active',NULL,NULL),(169,2,164,'2011-10-01',NULL,NULL,NULL,'active',NULL,NULL),(170,9,165,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(171,1,166,'2013-05-20',NULL,NULL,NULL,'active',NULL,NULL),(172,2,167,'2016-08-01',NULL,NULL,NULL,'active',NULL,NULL),(173,2,168,'2022-03-02',NULL,NULL,NULL,'active',NULL,NULL),(174,2,169,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(175,9,170,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(176,2,171,'2016-08-01',NULL,NULL,NULL,'active',NULL,NULL),(177,2,172,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(178,1,173,'2013-09-21',NULL,NULL,NULL,'active',NULL,NULL),(179,2,174,'2023-05-08',NULL,NULL,NULL,'active',NULL,NULL),(180,9,175,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(181,2,176,'2016-09-15',NULL,NULL,NULL,'active',NULL,NULL),(182,2,177,'2023-06-01',NULL,NULL,NULL,'active',NULL,NULL),(183,5,178,'2007-09-04',NULL,NULL,NULL,'active',NULL,NULL),(184,1,179,'2013-11-29',NULL,NULL,NULL,'active',NULL,NULL),(185,23,180,'2007-09-14',NULL,NULL,NULL,'active',NULL,NULL),(186,5,181,'2006-02-06',NULL,NULL,NULL,'active',NULL,NULL),(187,1,182,'2014-08-18',NULL,NULL,NULL,'active',NULL,NULL),(188,23,183,'2002-06-05',NULL,NULL,NULL,'active',NULL,NULL),(189,2,184,'2017-04-18',NULL,NULL,NULL,'active',NULL,NULL),(190,5,185,'1997-08-24',NULL,NULL,NULL,'active',NULL,NULL),(191,1,186,'2014-08-11',NULL,NULL,NULL,'active',NULL,NULL),(192,23,187,'2005-08-22',NULL,NULL,NULL,'active',NULL,NULL),(193,2,188,'2017-08-31',NULL,NULL,NULL,'active',NULL,NULL),(194,5,189,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(195,23,190,'2007-09-03',NULL,NULL,NULL,'active',NULL,NULL),(196,1,191,'2014-09-12',NULL,NULL,NULL,'active',NULL,NULL),(197,2,192,'2017-09-08',NULL,NULL,NULL,'active',NULL,NULL),(198,23,193,'2000-12-26',NULL,NULL,NULL,'active',NULL,NULL),(199,1,194,'2014-09-12',NULL,NULL,NULL,'active',NULL,NULL),(200,5,195,'2013-02-15',NULL,NULL,NULL,'active',NULL,NULL),(201,2,196,'2017-10-11',NULL,NULL,NULL,'active',NULL,NULL),(202,23,197,'2007-09-03',NULL,NULL,NULL,'active',NULL,NULL),(203,1,198,'2007-04-02',NULL,NULL,NULL,'active',NULL,NULL),(204,23,199,'2008-08-12',NULL,NULL,NULL,'active',NULL,NULL),(205,2,200,'2017-10-23',NULL,NULL,NULL,'active',NULL,NULL),(206,5,201,'1993-10-20',NULL,NULL,NULL,'active',NULL,NULL),(207,1,202,'2013-07-22',NULL,NULL,NULL,'active',NULL,NULL),(208,2,203,'2019-06-01',NULL,NULL,NULL,'active',NULL,NULL),(209,1,204,'2016-01-04',NULL,NULL,NULL,'active',NULL,NULL),(210,5,205,'2013-02-14',NULL,NULL,NULL,'active',NULL,NULL),(211,23,206,'2011-10-01',NULL,NULL,NULL,'active',NULL,NULL),(212,1,207,'2016-01-16',NULL,NULL,NULL,'active',NULL,NULL),(213,5,208,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(214,1,209,'2016-08-01',NULL,NULL,NULL,'active',NULL,NULL),(215,23,210,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(216,2,211,'2021-10-04',NULL,NULL,NULL,'active',NULL,NULL),(217,1,212,'2016-08-02',NULL,NULL,NULL,'active',NULL,NULL),(218,23,213,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(219,6,214,'2007-09-09',NULL,NULL,NULL,'active',NULL,NULL),(220,23,215,'2013-02-06',NULL,NULL,NULL,'active',NULL,NULL),(221,6,216,'2003-09-22',NULL,NULL,NULL,'active',NULL,NULL),(222,1,217,'2017-07-05',NULL,NULL,NULL,'active',NULL,NULL),(223,23,218,'2006-05-05',NULL,NULL,NULL,'active',NULL,NULL),(224,2,219,'2021-10-11',NULL,NULL,NULL,'active',NULL,NULL),(225,1,220,'1996-03-01',NULL,NULL,NULL,'active',NULL,NULL),(226,6,221,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(227,23,222,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(228,23,223,'2023-05-08',NULL,NULL,NULL,'active',NULL,NULL),(229,2,224,'2021-10-18',NULL,NULL,NULL,'active',NULL,NULL),(230,6,225,'2012-08-21',NULL,NULL,NULL,'active',NULL,NULL),(231,23,226,'2023-05-08',NULL,NULL,NULL,'active',NULL,NULL),(232,6,227,'2013-02-15',NULL,NULL,NULL,'active',NULL,NULL),(233,6,228,'2002-09-21',NULL,NULL,NULL,'active',NULL,NULL),(234,2,229,'2021-11-15',NULL,NULL,NULL,'active',NULL,NULL),(235,6,230,'2011-06-03',NULL,NULL,NULL,'active',NULL,NULL),(236,23,231,'2023-10-03',NULL,NULL,NULL,'active',NULL,NULL),(237,6,232,'2001-09-18',NULL,NULL,NULL,'active',NULL,NULL),(238,6,233,'2003-09-29',NULL,NULL,NULL,'active',NULL,NULL),(239,6,234,'2005-06-15',NULL,NULL,NULL,'active',NULL,NULL),(240,6,235,'2006-11-13',NULL,NULL,NULL,'active',NULL,NULL),(241,6,236,'2007-03-01',NULL,NULL,NULL,'active',NULL,NULL),(242,5,237,'2010-03-03',NULL,NULL,NULL,'active',NULL,NULL),(243,6,238,'2007-09-03',NULL,NULL,NULL,'active',NULL,NULL),(244,6,239,'2008-04-15',NULL,NULL,NULL,'active',NULL,NULL),(245,6,240,'2016-08-10',NULL,NULL,NULL,'active',NULL,NULL),(246,5,241,'1989-08-26',NULL,NULL,NULL,'active',NULL,NULL),(247,6,242,'2016-09-15',NULL,NULL,NULL,'active',NULL,NULL),(248,17,243,'2004-03-01',NULL,NULL,NULL,'active',NULL,NULL),(249,5,244,'2001-09-18',NULL,NULL,NULL,'active',NULL,NULL),(250,17,245,'2000-04-10',NULL,NULL,NULL,'active',NULL,NULL),(251,5,246,'2004-08-20',NULL,NULL,NULL,'active',NULL,NULL),(252,13,247,'2019-04-01',NULL,NULL,NULL,'active',NULL,NULL),(253,17,248,'2004-03-01',NULL,NULL,NULL,'active',NULL,NULL),(254,14,249,'2022-08-16',NULL,NULL,NULL,'active',NULL,NULL),(255,5,250,'1987-07-23',NULL,NULL,NULL,'active',NULL,NULL),(256,13,251,'2023-02-01',NULL,NULL,NULL,'active',NULL,NULL),(257,14,252,'2023-05-02',NULL,NULL,NULL,'active',NULL,NULL),(258,17,253,'2011-01-11',NULL,NULL,NULL,'active',NULL,NULL),(259,14,254,'2017-09-01',NULL,NULL,NULL,'active',NULL,NULL),(260,5,255,'2006-09-19',NULL,NULL,NULL,'active',NULL,NULL),(261,13,256,'2023-10-03',NULL,NULL,NULL,'active',NULL,NULL),(262,12,257,'2012-04-02',NULL,NULL,NULL,'active',NULL,NULL),(263,5,258,'2007-07-04',NULL,NULL,NULL,'active',NULL,NULL),(264,12,259,'2019-04-01',NULL,NULL,NULL,'active',NULL,NULL),(265,17,260,'2004-03-01',NULL,NULL,NULL,'active',NULL,NULL),(266,13,261,'2023-08-01',NULL,NULL,NULL,'active',NULL,NULL),(267,17,262,'2008-04-03',NULL,NULL,NULL,'active',NULL,NULL),(268,17,263,'2011-11-10',NULL,NULL,NULL,'active',NULL,NULL),(269,5,264,'2005-08-13',NULL,NULL,NULL,'active',NULL,NULL),(270,15,265,'1999-11-02',NULL,NULL,NULL,'active',NULL,NULL),(271,17,266,'2014-07-15',NULL,NULL,NULL,'active',NULL,NULL),(272,17,267,'2012-02-06',NULL,NULL,NULL,'active',NULL,NULL),(273,17,268,'2018-02-01',NULL,NULL,NULL,'active',NULL,NULL),(274,15,269,'2004-12-17',NULL,NULL,NULL,'active',NULL,NULL),(275,5,270,'2006-08-07',NULL,NULL,NULL,'active',NULL,NULL),(276,17,271,'2011-10-01',NULL,NULL,NULL,'active',NULL,NULL),(277,15,272,'2010-06-01',NULL,NULL,NULL,'active',NULL,NULL),(278,17,273,'2015-08-25',NULL,NULL,NULL,'active',NULL,NULL),(279,17,274,'2019-03-01',NULL,NULL,NULL,'active',NULL,NULL),(280,5,275,'2006-08-10',NULL,NULL,NULL,'active',NULL,NULL),(281,15,276,'2016-01-16',NULL,NULL,NULL,'active',NULL,NULL);
/*!40000 ALTER TABLE `department_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_shortname` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoe` date NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `departments_dept_shortname_unique` (`dept_shortname`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Mechanical Engineering','ME','1979-08-01','active',NULL,'2023-09-09 01:18:45',NULL),(2,'Electronics and Communication Engineering','EC','1979-08-01','active',NULL,NULL,NULL),(3,'Master of Computer Applications','MCA','1999-08-01','active','2023-09-08 02:58:21','2023-09-08 02:58:21',NULL),(5,'Computer Science and Engineering','CS','1885-08-01','active','2023-09-08 03:01:14','2023-09-08 03:01:14',NULL),(6,'Information Science & Engineering','ISE','2000-09-01','active','2023-09-08 04:20:52','2023-09-08 04:20:52',NULL),(7,'Electrtical and Electronics Engineering','EEE','1987-08-01','active','2023-09-08 04:37:56','2023-09-08 04:37:56',NULL),(8,'Civil Engineering','CV','1987-08-01','active','2023-09-08 05:03:13','2023-09-08 05:03:13',NULL),(9,'Aeronautical Engineering','AE','2015-08-01','active','2023-09-08 05:20:39','2023-09-09 00:57:10',NULL),(11,'IT Cell','IT','2023-08-01','active','2023-09-08 05:22:04','2023-09-09 01:44:56',NULL),(12,'Mathematics','Maths','1979-08-01','active','2023-09-08 05:24:52','2023-09-09 00:29:51',NULL),(13,'Physics','Phy','1979-08-01','active','2023-09-08 05:37:34','2023-09-09 01:19:03',NULL),(14,'Chemistry','Chem','1979-08-01','active','2023-09-08 06:06:20','2023-09-09 04:53:25',NULL),(15,'Office','Off','1987-01-01','active','2023-09-09 00:42:27','2023-10-06 02:41:03',NULL),(16,'Library','Lib','1979-01-01','active','2023-10-06 02:41:49','2023-10-06 02:41:49',NULL),(17,'Architecture','ARCH','1995-08-01','active','2023-10-06 02:42:26','2023-10-06 02:42:26',NULL),(18,'Vehicle Maintenance','VM','1995-08-01','active','2023-10-06 02:44:10','2023-10-06 02:44:10',NULL),(19,'Civil Maintanence','CM','1995-10-01','active','2023-10-06 02:44:42','2023-10-06 02:44:42',NULL),(20,'Exam Section','ES','2015-08-01','active','2023-10-06 02:45:23','2023-10-06 02:45:23',NULL),(21,'Sports','SP','2000-01-01','active','2023-10-06 02:45:55','2023-10-06 02:45:55',NULL),(22,'Industry Institute Partnership Cell','IIPC','2018-01-01','active','2023-10-06 02:46:54','2023-10-06 02:46:54',NULL),(23,'Computer Center','CC','2002-01-01','active','2023-10-06 02:47:27','2023-10-06 02:47:27',NULL),(24,'Master of Business Administration','MBA','2015-08-01','active','2023-10-06 02:48:24','2023-10-06 02:48:24',NULL),(25,'EPMC','EPMC','2015-06-01','active','2023-10-06 02:49:17','2023-10-06 02:49:17',NULL),(26,'IT CELL','it cell','2023-06-01','inactive','2023-11-28 02:57:00','2023-11-28 02:57:14',NULL);
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designation_ntcpayscale`
--

DROP TABLE IF EXISTS `designation_ntcpayscale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `designation_ntcpayscale` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `designation_id` bigint(20) NOT NULL,
  `ntcpayscale_id` bigint(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designation_ntcpayscale`
--

LOCK TABLES `designation_ntcpayscale` WRITE;
/*!40000 ALTER TABLE `designation_ntcpayscale` DISABLE KEYS */;
INSERT INTO `designation_ntcpayscale` VALUES (1,29,1,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(2,30,1,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(3,9,1,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(4,8,1,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(5,29,2,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(6,30,2,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(7,9,2,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(8,8,2,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(9,17,3,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(10,17,4,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(11,31,5,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(12,12,5,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(13,31,6,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(14,12,6,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(15,33,7,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(16,33,8,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(17,23,9,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(18,22,9,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(19,13,9,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(20,21,9,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(21,23,10,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(22,22,10,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(23,13,10,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(24,21,10,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(25,16,11,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(26,16,12,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(27,41,13,'2023-01-01',NULL,NULL,'GCR 01','active',NULL,NULL),(28,18,14,'2023-01-02',NULL,NULL,'GCR 01','active',NULL,NULL),(29,8,14,'2023-01-02',NULL,NULL,'GCR 01','active',NULL,NULL),(30,15,15,'2023-01-02',NULL,NULL,'GCR 01','active',NULL,NULL),(31,15,16,'2023-01-02',NULL,NULL,'GCR 01','active',NULL,NULL);
/*!40000 ALTER TABLE `designation_ntcpayscale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designation_ntpayscale`
--

DROP TABLE IF EXISTS `designation_ntpayscale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `designation_ntpayscale` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `designation_id` bigint(20) unsigned NOT NULL,
  `ntpayscale_id` bigint(20) unsigned NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `designation_ntpayscales_designations_id_foreign` (`designation_id`),
  KEY `designation_ntpayscales_ntpayscales_id_foreign` (`ntpayscale_id`),
  CONSTRAINT `designation_ntpayscales_designations_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`),
  CONSTRAINT `designation_ntpayscales_ntpayscales_id_foreign` FOREIGN KEY (`ntpayscale_id`) REFERENCES `ntpayscales` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designation_ntpayscale`
--

LOCK TABLES `designation_ntpayscale` WRITE;
/*!40000 ALTER TABLE `designation_ntpayscale` DISABLE KEYS */;
INSERT INTO `designation_ntpayscale` VALUES (1,29,1,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(2,30,1,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(3,9,1,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(4,8,1,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(5,18,2,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(6,17,3,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(7,31,4,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(8,12,4,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(9,11,5,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(10,32,6,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(11,10,6,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(12,33,7,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(13,23,8,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(14,22,8,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(15,13,8,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(16,21,8,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(17,16,9,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(18,14,10,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(19,15,11,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL),(20,19,12,'2023-01-01',NULL,NULL,'GC1','active',NULL,NULL);
/*!40000 ALTER TABLE `designation_ntpayscale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designation_staff`
--

DROP TABLE IF EXISTS `designation_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `designation_staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `designation_id` bigint(20) unsigned NOT NULL,
  `staff_id` bigint(20) unsigned NOT NULL,
  `dept_id` bigint(20) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr_close` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `designation_staff_designations_id_foreign` (`designation_id`),
  KEY `designation_staff_staff_id_foreign` (`staff_id`),
  CONSTRAINT `designation_staff_designations_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`),
  CONSTRAINT `designation_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=297 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designation_staff`
--

LOCK TABLES `designation_staff` WRITE;
/*!40000 ALTER TABLE `designation_staff` DISABLE KEYS */;
INSERT INTO `designation_staff` VALUES (31,26,11,NULL,'2009-09-24',NULL,NULL,NULL,NULL,'active',NULL,NULL),(32,5,12,NULL,'2017-07-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(33,16,13,NULL,'2005-07-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(34,5,14,NULL,'2018-12-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(35,6,15,NULL,'2022-10-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(36,26,16,NULL,'1989-09-05',NULL,NULL,NULL,NULL,'active',NULL,NULL),(37,6,17,NULL,'2023-01-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(38,16,18,NULL,'2016-11-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(39,6,19,NULL,'2023-01-09',NULL,NULL,NULL,NULL,'active',NULL,NULL),(40,13,20,NULL,'2008-12-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(41,6,21,NULL,'2023-04-09',NULL,NULL,NULL,NULL,'active',NULL,NULL),(42,6,22,NULL,'2022-10-10',NULL,NULL,NULL,NULL,'active',NULL,NULL),(43,26,23,NULL,'2009-05-10',NULL,NULL,NULL,NULL,'active',NULL,NULL),(44,27,24,NULL,'2011-09-28',NULL,NULL,NULL,NULL,'active',NULL,NULL),(45,6,25,NULL,'2003-11-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(46,13,26,NULL,'2012-10-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(47,13,27,NULL,'2012-10-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(48,26,28,NULL,'2005-08-18',NULL,NULL,NULL,NULL,'active',NULL,NULL),(49,26,29,NULL,'2013-05-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(50,13,30,NULL,'2013-02-11',NULL,NULL,NULL,NULL,'active',NULL,NULL),(51,26,31,NULL,'2006-08-07',NULL,NULL,NULL,NULL,'active',NULL,NULL),(52,26,32,NULL,'2008-03-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(53,26,33,NULL,'2013-11-07',NULL,NULL,NULL,NULL,'active',NULL,NULL),(54,26,34,NULL,'2012-01-12',NULL,NULL,NULL,NULL,'active',NULL,NULL),(55,26,35,NULL,'2013-12-26',NULL,NULL,NULL,NULL,'active',NULL,NULL),(56,6,36,NULL,'2012-05-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(57,26,37,NULL,'2014-01-09',NULL,NULL,NULL,NULL,'active',NULL,NULL),(58,26,38,NULL,'2012-07-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(59,26,39,NULL,'2014-01-09',NULL,NULL,NULL,NULL,'active',NULL,NULL),(60,26,40,NULL,'2013-03-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(61,26,41,NULL,'2014-01-10',NULL,NULL,NULL,NULL,'active',NULL,NULL),(62,26,42,NULL,'2013-09-14',NULL,NULL,NULL,NULL,'active',NULL,NULL),(63,5,43,NULL,'2014-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(64,13,44,NULL,'2013-02-13',NULL,NULL,NULL,NULL,'active',NULL,NULL),(65,26,45,NULL,'2014-02-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(66,16,46,NULL,'2005-07-06',NULL,NULL,NULL,NULL,'active',NULL,NULL),(67,5,47,NULL,'2014-09-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(68,16,48,NULL,'2013-09-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(69,13,49,NULL,'2012-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(70,26,50,NULL,'2015-02-18',NULL,NULL,NULL,NULL,'active',NULL,NULL),(71,16,51,NULL,'2013-03-05',NULL,NULL,NULL,NULL,'active',NULL,NULL),(72,21,52,NULL,'2006-02-06',NULL,NULL,NULL,NULL,'active',NULL,NULL),(73,26,53,NULL,'2015-02-18',NULL,NULL,NULL,NULL,'active',NULL,NULL),(74,5,54,NULL,'2015-07-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(75,16,55,NULL,'2015-11-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(76,5,56,NULL,'2015-07-06',NULL,NULL,NULL,NULL,'active',NULL,NULL),(77,16,57,NULL,'2015-12-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(78,26,58,NULL,'2014-08-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(79,26,59,NULL,'2015-08-20',NULL,NULL,NULL,NULL,'active',NULL,NULL),(80,16,60,NULL,'2023-05-23',NULL,NULL,NULL,NULL,'active',NULL,NULL),(81,13,61,NULL,'2013-02-13',NULL,NULL,NULL,NULL,'active',NULL,NULL),(82,5,62,NULL,'2016-07-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(83,13,63,NULL,'2009-01-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(84,5,64,NULL,'2017-07-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(85,41,65,NULL,'2016-09-08',NULL,NULL,NULL,NULL,'active',NULL,NULL),(86,13,66,NULL,'2015-11-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(87,5,67,NULL,'2022-10-21',NULL,NULL,NULL,NULL,'active',NULL,NULL),(88,13,68,NULL,'2015-11-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(89,8,69,NULL,'2008-12-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(90,8,70,NULL,'2008-12-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(91,5,71,NULL,'2017-07-07',NULL,NULL,NULL,NULL,'active',NULL,NULL),(92,13,72,NULL,'2012-11-06',NULL,NULL,NULL,NULL,'active',NULL,NULL),(93,13,73,NULL,'2012-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(94,13,74,NULL,'2019-09-11',NULL,NULL,NULL,NULL,'active',NULL,NULL),(95,26,75,NULL,'2010-04-12',NULL,NULL,NULL,NULL,'active',NULL,NULL),(96,16,76,NULL,'1989-03-04',NULL,NULL,NULL,NULL,'active',NULL,NULL),(97,26,77,NULL,'1997-09-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(98,16,78,NULL,'2010-09-14',NULL,NULL,NULL,NULL,'active',NULL,NULL),(99,16,79,NULL,'2019-09-20',NULL,NULL,NULL,NULL,'active',NULL,NULL),(100,26,80,NULL,'1998-09-21',NULL,NULL,NULL,NULL,'active',NULL,NULL),(101,26,81,NULL,'2004-03-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(102,26,82,NULL,'1996-03-09',NULL,NULL,NULL,NULL,'active',NULL,NULL),(103,16,83,NULL,'2014-12-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(104,26,84,NULL,'1997-09-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(105,15,85,NULL,'2019-09-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(106,16,86,NULL,'2022-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(107,16,87,NULL,'2021-02-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(108,26,88,NULL,'1997-02-11',NULL,NULL,NULL,NULL,'active',NULL,NULL),(109,16,89,NULL,'2023-07-17',NULL,NULL,NULL,NULL,'active',NULL,NULL),(110,16,90,NULL,'2023-10-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(111,7,91,NULL,'2023-06-05',NULL,NULL,NULL,NULL,'active',NULL,NULL),(112,26,92,NULL,'1999-10-30',NULL,NULL,NULL,NULL,'active',NULL,NULL),(113,13,93,NULL,'2010-09-21',NULL,NULL,NULL,NULL,'active',NULL,NULL),(114,8,94,NULL,'2008-08-14',NULL,NULL,NULL,NULL,'active',NULL,NULL),(115,13,95,NULL,'2008-12-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(116,26,96,NULL,'1996-03-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(117,7,97,NULL,'2019-01-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(118,26,98,NULL,'2001-10-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(119,13,99,NULL,'2010-09-09',NULL,NULL,NULL,NULL,'active',NULL,NULL),(120,16,100,NULL,'2022-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(121,13,101,NULL,'2012-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(122,13,102,NULL,'2012-08-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(123,26,103,NULL,'2006-03-09',NULL,NULL,NULL,NULL,'active',NULL,NULL),(124,26,104,NULL,'2007-08-06',NULL,NULL,NULL,NULL,'active',NULL,NULL),(125,30,105,NULL,'2016-10-24',NULL,NULL,NULL,NULL,'active',NULL,NULL),(126,26,106,NULL,'1999-10-29',NULL,NULL,NULL,NULL,'active',NULL,NULL),(127,26,107,NULL,'2004-04-08',NULL,NULL,NULL,NULL,'active',NULL,NULL),(128,13,108,NULL,'2021-03-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(129,26,109,NULL,'2004-08-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(130,16,110,NULL,'2023-05-22',NULL,NULL,NULL,NULL,'active',NULL,NULL),(131,26,111,NULL,'2003-06-13',NULL,NULL,NULL,NULL,'active',NULL,NULL),(132,13,112,NULL,'2013-02-13',NULL,NULL,NULL,NULL,'active',NULL,NULL),(133,16,113,NULL,'2023-08-21',NULL,NULL,NULL,NULL,'active',NULL,NULL),(134,13,114,NULL,'2013-02-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(135,16,115,NULL,'2023-10-10',NULL,NULL,NULL,NULL,'active',NULL,NULL),(136,27,116,NULL,'2011-05-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(137,8,117,NULL,'1998-01-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(138,26,118,NULL,'2007-04-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(139,26,119,NULL,'2007-05-28',NULL,NULL,NULL,NULL,'active',NULL,NULL),(140,26,120,NULL,'2003-09-17',NULL,NULL,NULL,NULL,'active',NULL,NULL),(141,16,121,NULL,'2023-10-09',NULL,NULL,NULL,NULL,'active',NULL,NULL),(142,26,122,NULL,'2008-08-14',NULL,NULL,NULL,NULL,'active',NULL,NULL),(143,6,123,NULL,'2007-07-17',NULL,NULL,NULL,NULL,'active',NULL,NULL),(144,16,124,NULL,'2002-07-11',NULL,NULL,NULL,NULL,'active',NULL,NULL),(145,16,125,NULL,'2007-03-05',NULL,NULL,NULL,NULL,'active',NULL,NULL),(146,26,126,NULL,'2006-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(147,13,127,NULL,'2023-06-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(148,6,128,NULL,'2007-07-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(149,16,129,NULL,'2010-09-13',NULL,NULL,NULL,NULL,'active',NULL,NULL),(150,26,130,NULL,'2009-08-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(151,16,131,NULL,'2006-04-17',NULL,NULL,NULL,NULL,'active',NULL,NULL),(152,6,132,NULL,'2022-10-27',NULL,NULL,NULL,NULL,'active',NULL,NULL),(153,13,133,NULL,'2010-11-08',NULL,NULL,NULL,NULL,'active',NULL,NULL),(154,30,134,NULL,'2017-09-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(155,16,135,NULL,'2017-02-11',NULL,NULL,NULL,NULL,'active',NULL,NULL),(156,26,136,NULL,'2007-09-04',NULL,NULL,NULL,NULL,'active',NULL,NULL),(157,13,137,NULL,'2008-12-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(158,13,138,NULL,'2012-08-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(159,26,139,NULL,'2008-08-18',NULL,NULL,NULL,NULL,'active',NULL,NULL),(160,13,140,NULL,'2011-11-21',NULL,NULL,NULL,NULL,'active',NULL,NULL),(161,13,141,NULL,'2019-09-11',NULL,NULL,NULL,NULL,'active',NULL,NULL),(162,26,142,NULL,'2010-03-18',NULL,NULL,NULL,NULL,'active',NULL,NULL),(163,26,143,NULL,'2009-08-05',NULL,NULL,NULL,NULL,'active',NULL,NULL),(164,26,144,NULL,'2010-08-20',NULL,NULL,NULL,NULL,'active',NULL,NULL),(165,26,145,NULL,'2012-07-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(166,26,146,NULL,'2009-09-07',NULL,NULL,NULL,NULL,'active',NULL,NULL),(167,26,147,NULL,'2013-07-19',NULL,NULL,NULL,NULL,'active',NULL,NULL),(168,16,148,NULL,'2022-03-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(169,26,149,NULL,'2013-09-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(170,16,150,NULL,'2022-03-04',NULL,NULL,NULL,NULL,'active',NULL,NULL),(171,26,151,NULL,'2014-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(172,26,152,NULL,'2015-02-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(173,16,153,NULL,'2022-03-07',NULL,NULL,NULL,NULL,'active',NULL,NULL),(174,26,154,NULL,'2014-02-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(175,26,155,NULL,'2011-11-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(176,6,156,NULL,'1993-02-09',NULL,NULL,NULL,NULL,'active',NULL,NULL),(177,16,157,NULL,'2022-08-24',NULL,NULL,NULL,NULL,'active',NULL,NULL),(178,13,158,NULL,'2011-12-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(179,26,159,NULL,'2012-09-13',NULL,NULL,NULL,NULL,'active',NULL,NULL),(180,26,160,NULL,'2010-08-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(181,13,161,NULL,'2013-02-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(182,6,162,NULL,'2016-04-26',NULL,NULL,NULL,NULL,'active',NULL,NULL),(183,26,163,NULL,'2012-10-12',NULL,NULL,NULL,NULL,'active',NULL,NULL),(184,9,164,NULL,'2011-10-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(185,13,165,NULL,'2022-04-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(186,26,166,NULL,'2013-05-20',NULL,NULL,NULL,NULL,'active',NULL,NULL),(187,6,167,NULL,'2016-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(188,13,168,NULL,'2022-03-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(189,16,169,NULL,'2022-04-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(190,13,170,NULL,'2022-04-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(191,6,171,NULL,'2016-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(192,13,172,NULL,'2022-04-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(193,26,173,NULL,'2013-09-21',NULL,NULL,NULL,NULL,'active',NULL,NULL),(194,13,174,NULL,'2023-05-08',NULL,NULL,NULL,NULL,'active',NULL,NULL),(195,13,175,NULL,'2022-04-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(196,6,176,NULL,'2016-09-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(197,13,177,NULL,'2023-06-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(198,16,178,NULL,'2007-09-04',NULL,NULL,NULL,NULL,'active',NULL,NULL),(199,26,179,NULL,'2013-11-29',NULL,NULL,NULL,NULL,'active',NULL,NULL),(200,16,180,NULL,'2007-09-14',NULL,NULL,NULL,NULL,'active',NULL,NULL),(201,16,181,NULL,'2006-02-06',NULL,NULL,NULL,NULL,'active',NULL,NULL),(202,5,182,NULL,'2014-08-18',NULL,NULL,NULL,NULL,'active',NULL,NULL),(203,16,183,NULL,'2002-06-05',NULL,NULL,NULL,NULL,'active',NULL,NULL),(204,5,184,NULL,'2017-04-18',NULL,NULL,NULL,NULL,'active',NULL,NULL),(205,8,185,NULL,'1997-08-24',NULL,NULL,NULL,NULL,'active',NULL,NULL),(206,26,186,NULL,'2014-08-11',NULL,NULL,NULL,NULL,'active',NULL,NULL),(207,16,187,NULL,'2005-08-22',NULL,NULL,NULL,NULL,'active',NULL,NULL),(208,5,188,NULL,'2017-08-31',NULL,NULL,NULL,NULL,'active',NULL,NULL),(209,16,189,NULL,'2012-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(210,16,190,NULL,'2007-09-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(211,26,191,NULL,'2014-09-12',NULL,NULL,NULL,NULL,'active',NULL,NULL),(212,5,192,NULL,'2017-09-08',NULL,NULL,NULL,NULL,'active',NULL,NULL),(213,16,193,NULL,'2000-12-26',NULL,NULL,NULL,NULL,'active',NULL,NULL),(214,26,194,NULL,'2014-09-12',NULL,NULL,NULL,NULL,'active',NULL,NULL),(215,16,195,NULL,'2013-02-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(216,5,196,NULL,'2017-10-11',NULL,NULL,NULL,NULL,'active',NULL,NULL),(217,16,197,NULL,'2007-09-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(218,26,198,NULL,'2007-04-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(219,16,199,NULL,'2008-08-12',NULL,NULL,NULL,NULL,'active',NULL,NULL),(220,5,200,NULL,'2017-10-23',NULL,NULL,NULL,NULL,'active',NULL,NULL),(221,8,201,NULL,'1993-10-20',NULL,NULL,NULL,NULL,'active',NULL,NULL),(222,26,202,NULL,'2013-07-22',NULL,NULL,NULL,NULL,'active',NULL,NULL),(223,26,203,NULL,'2019-06-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(224,5,204,NULL,'2016-01-04',NULL,NULL,NULL,NULL,'active',NULL,NULL),(225,13,205,NULL,'2013-02-14',NULL,NULL,NULL,NULL,'active',NULL,NULL),(226,16,206,NULL,'2011-10-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(227,5,207,NULL,'2016-01-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(228,13,208,NULL,'2012-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(229,5,209,NULL,'2016-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(230,13,210,NULL,'2008-12-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(231,6,211,NULL,'2021-10-04',NULL,NULL,NULL,NULL,'active',NULL,NULL),(232,5,212,NULL,'2016-08-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(233,13,213,NULL,'2008-12-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(234,16,214,NULL,'2007-09-09',NULL,NULL,NULL,NULL,'active',NULL,NULL),(235,18,215,NULL,'2013-02-06',NULL,NULL,NULL,NULL,'active',NULL,NULL),(236,16,216,NULL,'2003-09-22',NULL,NULL,NULL,NULL,'active',NULL,NULL),(237,5,217,NULL,'2017-07-05',NULL,NULL,NULL,NULL,'active',NULL,NULL),(238,18,218,NULL,'2006-05-05',NULL,NULL,NULL,NULL,'active',NULL,NULL),(239,5,219,NULL,'2021-10-11',NULL,NULL,NULL,NULL,'active',NULL,NULL),(240,5,220,NULL,'1996-03-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(241,16,221,NULL,'2012-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(242,16,222,NULL,'2022-04-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(243,16,223,NULL,'2023-05-08',NULL,NULL,NULL,NULL,'active',NULL,NULL),(244,5,224,NULL,'2021-10-18',NULL,NULL,NULL,NULL,'active',NULL,NULL),(245,16,225,NULL,'2012-08-21',NULL,NULL,NULL,NULL,'active',NULL,NULL),(246,16,226,NULL,'2023-05-08',NULL,NULL,NULL,NULL,'active',NULL,NULL),(247,16,227,NULL,'2013-02-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(248,26,228,NULL,'2002-09-21',NULL,NULL,NULL,NULL,'active',NULL,NULL),(249,5,229,NULL,'2021-11-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(250,9,230,NULL,'2011-06-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(251,13,231,NULL,'2023-10-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(252,26,232,NULL,'2001-09-18',NULL,NULL,NULL,NULL,'active',NULL,NULL),(253,26,233,NULL,'2003-09-29',NULL,NULL,NULL,NULL,'active',NULL,NULL),(254,26,234,NULL,'2005-06-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(255,26,235,NULL,'2006-11-13',NULL,NULL,NULL,NULL,'active',NULL,NULL),(256,26,236,NULL,'2007-03-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(257,7,237,NULL,'2010-03-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(258,26,238,NULL,'2007-09-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(259,26,239,NULL,'2008-04-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(260,5,240,NULL,'2016-08-10',NULL,NULL,NULL,NULL,'active',NULL,NULL),(261,26,241,NULL,'1989-08-26',NULL,NULL,NULL,NULL,'active',NULL,NULL),(262,5,242,NULL,'2016-09-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(263,26,243,NULL,'2004-03-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(264,26,244,NULL,'2001-09-18',NULL,NULL,NULL,NULL,'active',NULL,NULL),(265,26,245,NULL,'2000-04-10',NULL,NULL,NULL,NULL,'active',NULL,NULL),(266,26,246,NULL,'2004-08-20',NULL,NULL,NULL,NULL,'active',NULL,NULL),(267,8,247,NULL,'2019-04-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(268,26,248,NULL,'2004-03-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(269,16,249,NULL,'2022-08-16',NULL,NULL,NULL,NULL,'active',NULL,NULL),(270,26,250,NULL,'1987-07-23',NULL,NULL,NULL,NULL,'active',NULL,NULL),(271,16,251,NULL,'2023-02-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(272,16,252,NULL,'2023-05-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(273,5,253,NULL,'2011-01-11',NULL,NULL,NULL,NULL,'active',NULL,NULL),(274,30,254,NULL,'2017-09-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(275,26,255,NULL,'2006-09-19',NULL,NULL,NULL,NULL,'active',NULL,NULL),(276,16,256,NULL,'2023-10-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(277,13,257,NULL,'2012-04-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(278,26,258,NULL,'2007-07-04',NULL,NULL,NULL,NULL,'active',NULL,NULL),(279,18,259,NULL,'2019-04-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(280,26,260,NULL,'2004-03-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(281,8,261,NULL,'2023-08-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(282,26,262,NULL,'2008-04-03',NULL,NULL,NULL,NULL,'active',NULL,NULL),(283,5,263,NULL,'2011-11-10',NULL,NULL,NULL,NULL,'active',NULL,NULL),(284,26,264,NULL,'2005-08-13',NULL,NULL,NULL,NULL,'active',NULL,NULL),(285,16,265,NULL,'1999-11-02',NULL,NULL,NULL,NULL,'active',NULL,NULL),(286,26,266,NULL,'2014-07-15',NULL,NULL,NULL,NULL,'active',NULL,NULL),(287,5,267,NULL,'2012-02-06',NULL,NULL,NULL,NULL,'active',NULL,NULL),(288,16,268,NULL,'2018-02-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(289,12,269,NULL,'2004-12-17',NULL,NULL,NULL,NULL,'active',NULL,NULL),(290,26,270,NULL,'2006-08-07',NULL,NULL,NULL,NULL,'active',NULL,NULL),(291,9,271,NULL,'2011-10-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(292,12,272,NULL,'2010-06-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(293,26,273,NULL,'2015-08-25',NULL,NULL,NULL,NULL,'active',NULL,NULL),(294,33,274,NULL,'2019-03-01',NULL,NULL,NULL,NULL,'active',NULL,NULL),(295,26,275,NULL,'2006-08-10',NULL,NULL,NULL,NULL,'active',NULL,NULL),(296,12,276,NULL,'2016-01-16',NULL,NULL,NULL,NULL,'active',NULL,NULL);
/*!40000 ALTER TABLE `designation_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designations`
--

DROP TABLE IF EXISTS `designations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `designations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `design_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isadditional` tinyint(4) NOT NULL DEFAULT 0,
  `isvacational` enum('Vacational','Non-Vacational') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Vacational',
  `emp_type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0-teaching\r\n1-non teaching',
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `designations_design_name_unique` (`design_name`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designations`
--

LOCK TABLES `designations` WRITE;
/*!40000 ALTER TABLE `designations` DISABLE KEYS */;
INSERT INTO `designations` VALUES (1,'HoD',1,'Non-Vacational','Teaching','active','2023-09-09 04:29:39','2023-09-13 00:11:14'),(2,'Principal',1,'Non-Vacational','Teaching','active','2023-09-09 04:32:19','2023-09-13 00:11:21'),(3,'Dean-Administration',1,'Non-Vacational','Teaching','active','2023-09-09 04:52:45','2023-10-20 00:16:24'),(4,'Section Head (Non-Teaching)',1,'Non-Vacational','Non-Teaching','active','2023-09-12 23:47:25','2023-10-19 23:42:26'),(5,'Assistant Professor',0,'Vacational','Teaching','active','2023-09-13 00:12:41','2023-09-13 00:12:41'),(6,'Associate Professor',0,'Vacational','Teaching','active','2023-09-13 00:12:52','2023-09-13 00:12:52'),(7,'Professor',0,'Vacational','Teaching','active','2023-09-13 00:13:04','2023-09-13 00:13:04'),(8,'Peons',0,'Non-Vacational','Non-Teaching','active','2023-09-13 02:10:28','2023-09-13 02:12:39'),(9,'Helpers',0,'Non-Vacational','Non-Teaching','active','2023-09-13 02:13:19','2023-09-13 02:13:19'),(10,'Office Superintendent',0,'Non-Vacational','Non-Teaching','active','2023-09-14 04:28:06','2023-09-23 00:09:00'),(11,'First Division Assistant',0,'Non-Vacational','Non-Teaching','active','2023-09-14 04:28:39','2023-09-15 02:55:35'),(12,'Second Division Assistant',0,'Non-Vacational','Non-Teaching','active','2023-09-14 04:29:08','2023-09-14 04:29:08'),(13,'Mechanic',0,'Non-Vacational','Non-Teaching','active','2023-09-14 04:29:37','2023-09-14 04:29:37'),(14,'Instructor',0,'Non-Vacational','Non-Teaching','active','2023-09-14 04:29:54','2023-09-14 04:29:54'),(15,'Foreman',0,'Non-Vacational','Non-Teaching','active','2023-09-14 04:30:06','2023-09-14 04:30:06'),(16,'Assistant Instructor',0,'Non-Vacational','Non-Teaching','active','2023-09-14 04:31:04','2023-09-14 04:31:04'),(17,'Driver',0,'Non-Vacational','Non-Teaching','active','2023-09-14 04:32:20','2023-09-14 04:32:20'),(18,'Attender',0,'Non-Vacational','Non-Teaching','active','2023-09-14 04:32:58','2023-09-16 01:42:27'),(19,'System Analyst',0,'Non-Vacational','Non-Teaching','active','2023-09-14 04:33:21','2023-09-14 04:33:21'),(20,'Network Administrator',0,'Non-Vacational','Non-Teaching','active','2023-09-14 04:35:47','2023-09-14 04:35:47'),(21,'Moulder',0,'Non-Vacational','Non-Teaching','active','2023-09-14 23:59:51','2023-09-14 23:59:51'),(22,'Electrician',0,'Non-Vacational','Non-Teaching','active','2023-09-15 00:27:16','2023-09-15 00:27:16'),(23,'Carpenter',0,'Non-Vacational','Non-Teaching','active','2023-09-15 00:47:59','2023-09-15 01:21:05'),(24,'Physical Education Director',0,'Non-Vacational','Non-Teaching','active','2023-09-16 01:44:47','2023-09-16 01:44:47'),(25,'Lady Physical Education Director',0,'Non-Vacational','Non-Teaching','active','2023-09-30 06:28:58','2023-09-30 06:28:58'),(26,'Lecturer',0,'Non-Vacational','Teaching','active','2023-10-03 00:00:05','2023-10-03 00:00:05'),(27,'Senior Scale Lecturer',0,'Non-Vacational','Teaching','active','2023-10-03 00:03:23','2023-10-03 00:03:23'),(28,'Senior Grade lecturer',0,'Non-Vacational','Teaching','active','2023-10-06 02:53:31','2023-10-06 02:53:31'),(29,'Ayas',0,'Non-Vacational','Non-Teaching','active','2023-10-09 04:04:23','2023-10-09 04:04:23'),(30,'Cleaners',0,'Non-Vacational','Non-Teaching','active','2023-10-09 04:04:57','2023-10-09 04:04:57'),(31,'RECEPTIONIST',0,'Non-Vacational','Non-Teaching','active','2023-10-09 04:47:08','2023-10-09 04:47:08'),(32,'Accounts',0,'Non-Vacational','Non-Teaching','active','2023-10-09 06:08:38','2023-10-09 06:08:38'),(33,'ASSISTANT LIBRARIAN',0,'Non-Vacational','Non-Teaching','active','2023-10-09 06:09:33','2023-10-09 06:09:33'),(36,'Dean Student Affairs',1,'Non-Vacational','Teaching','active','2023-10-20 00:17:29','2023-10-20 00:17:29'),(37,'Dean Research & Development',1,'Non-Vacational','Teaching','active','2023-10-20 00:17:54','2023-10-20 00:17:54'),(38,'Dean Academics Statutory',1,'Non-Vacational','Teaching','active','2023-10-20 00:18:23','2023-10-20 00:18:23'),(39,'Dean Academics Development',1,'Non-Vacational','Teaching','active','2023-10-20 00:18:43','2023-10-20 00:18:43'),(40,'Dean Infrastructure',1,'Non-Vacational','Teaching','active','2023-10-20 00:19:06','2023-10-20 00:19:06'),(41,'welder',0,'Vacational','Non-Teaching','active','2023-11-28 23:48:17','2023-11-28 23:57:26');
/*!40000 ALTER TABLE `designations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expert_talk_conducteds`
--

DROP TABLE IF EXISTS `expert_talk_conducteds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expert_talk_conducteds` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) unsigned NOT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semister` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_of_talk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resource_person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `expert_talk_conducteds_staff_id_foreign` (`staff_id`),
  CONSTRAINT `expert_talk_conducteds_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expert_talk_conducteds`
--

LOCK TABLES `expert_talk_conducteds` WRITE;
/*!40000 ALTER TABLE `expert_talk_conducteds` DISABLE KEYS */;
/*!40000 ALTER TABLE `expert_talk_conducteds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_achievements`
--

DROP TABLE IF EXISTS `general_achievements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `general_achievements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) unsigned NOT NULL,
  `award` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `general_achievements_staff_id_foreign` (`staff_id`),
  CONSTRAINT `general_achievements_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_achievements`
--

LOCK TABLES `general_achievements` WRITE;
/*!40000 ALTER TABLE `general_achievements` DISABLE KEYS */;
/*!40000 ALTER TABLE `general_achievements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leave_rules`
--

DROP TABLE IF EXISTS `leave_rules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leave_rules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `longname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortname` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_entitlement` int(11) NOT NULL,
  `min` float NOT NULL,
  `max` int(11) NOT NULL,
  `vacation_type` enum('Vacational','Non-vacational') COLLATE utf8mb4_unicode_ci NOT NULL,
  `carry_forwardable` enum('Yes','No','','') COLLATE utf8mb4_unicode_ci DEFAULT 'No',
  `cf_wef` date DEFAULT NULL,
  `cf_gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encashable` tinyint(1) DEFAULT NULL,
  `enc_wef` date DEFAULT NULL,
  `enc_gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_encashable` int(11) NOT NULL,
  `max_carry_forwardable` int(11) DEFAULT NULL,
  `gap` int(11) DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leave_rules`
--

LOCK TABLES `leave_rules` WRITE;
/*!40000 ALTER TABLE `leave_rules` DISABLE KEYS */;
INSERT INTO `leave_rules` VALUES (1,'Casual Leave','CL',15,0.5,3,'Vacational','No',NULL,'GCR1',0,'2023-01-01','GCR2',0,0,0,'active','2023-11-29 06:28:59','2023-11-29 06:28:59'),(2,'Casual Leave','CL',15,0.5,3,'Non-vacational','No','2023-01-01','GCR1',0,'2023-01-01','GCR1',0,0,0,'active','2023-11-29 04:09:42','2023-11-29 04:09:42'),(3,'Earned Leave','EL',10,3,10,'Vacational','No','2023-01-01','GCR1',0,'2023-01-01','GCR2',0,0,0,'active','2023-11-29 01:56:50','2023-11-29 01:56:50'),(4,'Restricted Holiday','RH',2,1,2,'Vacational','No',NULL,'GCR1',0,'2023-01-01','GCR2',0,0,0,'active','2023-11-29 01:57:40','2023-11-29 01:57:40'),(5,'Earned Leave','EL',15,3,15,'Non-vacational','Yes','2023-01-01','GCR1',1,'2023-01-01','GCR1',240,240,0,'active','2023-11-29 01:57:53','2023-11-29 01:57:53'),(6,'Restricted Holiday','RH',2,1,2,'Non-vacational','No','2023-01-01','GCR1',0,'2023-01-01',NULL,0,0,0,'active','2023-11-29 01:58:27','2023-11-29 01:58:27'),(7,'Duty Leave GIT','DL GIT',5,1,5,'Vacational','No','2023-01-01','GCR1',0,'2023-01-01','GCR1',0,0,0,'active','2023-11-29 02:00:03','2023-11-29 02:00:03');
/*!40000 ALTER TABLE `leave_rules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leaveentitlements`
--

DROP TABLE IF EXISTS `leaveentitlements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leaveentitlements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `leave_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leaveentitlements`
--

LOCK TABLES `leaveentitlements` WRITE;
/*!40000 ALTER TABLE `leaveentitlements` DISABLE KEYS */;
/*!40000 ALTER TABLE `leaveentitlements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mgmtmembers`
--

DROP TABLE IF EXISTS `mgmtmembers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mgmtmembers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `member_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `level` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mgmtmembers`
--

LOCK TABLES `mgmtmembers` WRITE;
/*!40000 ALTER TABLE `mgmtmembers` DISABLE KEYS */;
/*!40000 ALTER TABLE `mgmtmembers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (18,'2014_10_12_000000_create_users_table',1),(19,'2014_10_12_100000_create_password_reset_tokens_table',1),(20,'2019_08_19_000000_create_failed_jobs_table',1),(21,'2019_12_14_000001_create_personal_access_tokens_table',1),(22,'2023_08_22_110846_create_departments_table',1),(23,'2023_08_22_110916_create_religions_table',1),(24,'2023_08_22_111011_create_castecategories_table',1),(25,'2023_08_22_111035_create_designations_table',1),(26,'2023_08_22_111120_create_associations_table',1),(27,'2023_08_22_111252_create_mgmtmembers_table',1),(28,'2023_08_22_111328_create_leaveentitlements_table',1),(29,'2023_08_22_111359_create_salaryheads_table',1),(30,'2023_08_22_111417_create_payscales_table',1),(31,'2023_08_22_111430_create_tdsheads_table',1),(32,'2023_08_22_111442_create_renumerationheads_table',1),(33,'2023_08_22_111500_create_qualifications_table',1),(34,'2023_08_22_111508_create_staff_table',1),(35,'2023_09_16_063950_create_ntpayscales_table',2),(36,'2023_09_16_064107_create_ntcpayscales_table',3),(37,'2023_09_16_064202_create_xntdesign_payscales_table',4),(38,'2023_09_16_064510_create_xntcdesign_payscales_table',4),(40,'2023_09_16_094531_create_designation_ntcpayscales_table',5),(41,'2023_09_16_094519_create_designation_ntpayscales_table',6),(42,'2023_09_23_080241_create_allowances_table',7),(43,'2023_09_26_071240_create_association_staff_table',8),(44,'2023_09_26_071811_create_department_staff_table',8),(45,'2023_09_26_072233_create_designation_staff_table',8),(46,'2023_09_26_073133_create_staff_teaching_payscale_table',8),(47,'2023_09_27_073839_create_ntpayscale_staff_table',9),(48,'2023_09_27_074034_create_ntcpayscale_staff_table',9),(49,'2023_10_27_072758_create_leave_rules_table',10),(50,'2023_10_31_070850_create_create_leave_rule_configrations_table',10),(51,'2023_11_09_052948_create_qualification_staffs_table',10),(52,'2023_11_17_102221_create_table_combine_leave_rules',10),(53,'2023_11_22_092033_create_book_publications_table',10),(54,'2023_11_22_092841_create_chapters_table',10),(55,'2023_11_22_100257_create_consultancies_table',10),(56,'2023_11_22_101535_create_expert_talk_conducteds_table',10),(57,'2023_11_22_102251_create_general_achievements_table',10),(58,'2023_11_22_105448_create_professional_activity_conducteds_table',11),(59,'2023_11_22_110850_create_professional_activity_resource_people_table',11),(60,'2023_11_22_111323_create_publications_table',11),(61,'2023_11_22_112254_create_co_authors_gits_table',11),(62,'2023_11_22_112706_create_co_authors_others_table',11),(63,'2023_11_24_073446_create_consolidated_teaching_pay_table',11),(64,'2023_11_25_045414_create_professional_activity_attendees_table',11),(65,'2023_11_27_111437_create_conferences_attendees_table',11),(66,'2023_11_27_111612_create_conferences_conducteds_table',11),(67,'2023_11_28_050006_create_conferences_attendee_staff_table',11),(68,'2023_11_28_081328_create_consolidated_teaching_pay_table',12);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ntcpayscale_staff`
--

DROP TABLE IF EXISTS `ntcpayscale_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ntcpayscale_staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) unsigned NOT NULL,
  `ntcpayscale_id` bigint(20) unsigned NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ntcpayscale_staff_staff_id_foreign` (`staff_id`),
  KEY `ntcpayscale_staff_ntcpayscale_id_foreign` (`ntcpayscale_id`),
  CONSTRAINT `ntcpayscale_staff_ntcpayscale_id_foreign` FOREIGN KEY (`ntcpayscale_id`) REFERENCES `ntcpayscales` (`id`),
  CONSTRAINT `ntcpayscale_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ntcpayscale_staff`
--

LOCK TABLES `ntcpayscale_staff` WRITE;
/*!40000 ALTER TABLE `ntcpayscale_staff` DISABLE KEYS */;
INSERT INTO `ntcpayscale_staff` VALUES (2,13,11,'2005-07-16',NULL,NULL,NULL,'active',NULL,NULL),(3,18,11,'2016-11-02',NULL,NULL,NULL,'active',NULL,NULL),(4,20,9,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(5,26,9,'2012-10-16',NULL,NULL,NULL,'active',NULL,NULL),(6,27,9,'2012-10-16',NULL,NULL,NULL,'active',NULL,NULL),(7,30,9,'2013-02-11',NULL,NULL,NULL,'active',NULL,NULL),(8,44,9,'2013-02-13',NULL,NULL,NULL,'active',NULL,NULL),(9,46,11,'2005-07-06',NULL,NULL,NULL,'active',NULL,NULL),(10,48,11,'2013-09-02',NULL,NULL,NULL,'active',NULL,NULL),(11,49,9,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(12,51,11,'2013-03-05',NULL,NULL,NULL,'active',NULL,NULL),(13,52,9,'2006-02-06',NULL,NULL,NULL,'active',NULL,NULL),(14,55,11,'2015-11-02',NULL,NULL,NULL,'active',NULL,NULL),(15,57,11,'2015-12-01',NULL,NULL,NULL,'active',NULL,NULL),(16,60,11,'2023-05-23',NULL,NULL,NULL,'active',NULL,NULL),(17,61,9,'2013-02-13',NULL,NULL,NULL,'active',NULL,NULL),(18,65,13,'2016-09-08',NULL,NULL,NULL,'active',NULL,NULL),(19,66,9,'2015-11-03',NULL,NULL,NULL,'active',NULL,NULL),(20,68,9,'2015-11-16',NULL,NULL,NULL,'active',NULL,NULL),(21,69,1,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(22,70,1,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(23,72,9,'2012-11-06',NULL,NULL,NULL,'active',NULL,NULL),(24,73,9,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(25,74,9,'2019-09-11',NULL,NULL,NULL,'active',NULL,NULL),(26,76,11,'1989-03-04',NULL,NULL,NULL,'active',NULL,NULL),(27,78,11,'2010-09-14',NULL,NULL,NULL,'active',NULL,NULL),(28,79,11,'2019-09-20',NULL,NULL,NULL,'active',NULL,NULL),(29,83,11,'2014-12-01',NULL,NULL,NULL,'active',NULL,NULL),(30,85,15,'2019-09-16',NULL,NULL,NULL,'active',NULL,NULL),(31,86,11,'2022-08-01',NULL,NULL,NULL,'active',NULL,NULL),(32,87,11,'2021-02-01',NULL,NULL,NULL,'active',NULL,NULL),(33,89,11,'2023-07-17',NULL,NULL,NULL,'active',NULL,NULL),(34,90,11,'2023-10-03',NULL,NULL,NULL,'active',NULL,NULL),(35,93,9,'2010-09-21',NULL,NULL,NULL,'active',NULL,NULL),(36,94,1,'2008-08-14',NULL,NULL,NULL,'active',NULL,NULL),(37,95,9,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(38,99,9,'2010-09-09',NULL,NULL,NULL,'active',NULL,NULL),(39,100,11,'2022-08-01',NULL,NULL,NULL,'active',NULL,NULL),(40,101,9,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(41,102,9,'2012-08-03',NULL,NULL,NULL,'active',NULL,NULL),(42,105,1,'2016-10-24',NULL,NULL,NULL,'active',NULL,NULL),(43,108,9,'2021-03-01',NULL,NULL,NULL,'active',NULL,NULL),(44,110,11,'2023-05-22',NULL,NULL,NULL,'active',NULL,NULL),(45,112,9,'2013-02-13',NULL,NULL,NULL,'active',NULL,NULL),(46,113,11,'2023-08-21',NULL,NULL,NULL,'active',NULL,NULL),(47,114,9,'2013-02-15',NULL,NULL,NULL,'active',NULL,NULL),(48,115,11,'2023-10-10',NULL,NULL,NULL,'active',NULL,NULL),(49,117,1,'1998-01-01',NULL,NULL,NULL,'active',NULL,NULL),(50,121,11,'2023-10-09',NULL,NULL,NULL,'active',NULL,NULL),(51,124,11,'2002-07-11',NULL,NULL,NULL,'active',NULL,NULL),(52,125,11,'2007-03-05',NULL,NULL,NULL,'active',NULL,NULL),(53,127,9,'2023-06-01',NULL,NULL,NULL,'active',NULL,NULL),(54,129,11,'2010-09-13',NULL,NULL,NULL,'active',NULL,NULL),(55,131,11,'2006-04-17',NULL,NULL,NULL,'active',NULL,NULL),(56,133,9,'2010-11-08',NULL,NULL,NULL,'active',NULL,NULL),(57,134,1,'2017-09-01',NULL,NULL,NULL,'active',NULL,NULL),(58,135,11,'2017-02-11',NULL,NULL,NULL,'active',NULL,NULL),(59,137,9,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(60,138,9,'2012-08-02',NULL,NULL,NULL,'active',NULL,NULL),(61,140,9,'2011-11-21',NULL,NULL,NULL,'active',NULL,NULL),(62,141,9,'2019-09-11',NULL,NULL,NULL,'active',NULL,NULL),(63,148,11,'2022-03-02',NULL,NULL,NULL,'active',NULL,NULL),(64,150,11,'2022-03-04',NULL,NULL,NULL,'active',NULL,NULL),(65,153,11,'2022-03-07',NULL,NULL,NULL,'active',NULL,NULL),(66,157,11,'2022-08-24',NULL,NULL,NULL,'active',NULL,NULL),(67,158,9,'2011-12-15',NULL,NULL,NULL,'active',NULL,NULL),(68,161,9,'2013-02-15',NULL,NULL,NULL,'active',NULL,NULL),(69,164,1,'2011-10-01',NULL,NULL,NULL,'active',NULL,NULL),(70,165,9,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(71,168,9,'2022-03-02',NULL,NULL,NULL,'active',NULL,NULL),(72,169,11,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(73,170,9,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(74,172,9,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(75,175,9,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(76,177,9,'2023-06-01',NULL,NULL,NULL,'active',NULL,NULL),(77,178,11,'2007-09-04',NULL,NULL,NULL,'active',NULL,NULL),(78,180,11,'2007-09-14',NULL,NULL,NULL,'active',NULL,NULL),(79,181,11,'2006-02-06',NULL,NULL,NULL,'active',NULL,NULL),(80,183,11,'2002-06-05',NULL,NULL,NULL,'active',NULL,NULL),(81,185,1,'1997-08-24',NULL,NULL,NULL,'active',NULL,NULL),(82,187,11,'2005-08-22',NULL,NULL,NULL,'active',NULL,NULL),(83,189,11,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(84,190,11,'2007-09-03',NULL,NULL,NULL,'active',NULL,NULL),(85,193,11,'2000-12-26',NULL,NULL,NULL,'active',NULL,NULL),(86,195,11,'2013-02-15',NULL,NULL,NULL,'active',NULL,NULL),(87,197,11,'2007-09-03',NULL,NULL,NULL,'active',NULL,NULL),(88,199,11,'2008-08-12',NULL,NULL,NULL,'active',NULL,NULL),(89,201,1,'1993-10-20',NULL,NULL,NULL,'active',NULL,NULL),(90,205,9,'2013-02-14',NULL,NULL,NULL,'active',NULL,NULL),(91,206,11,'2011-10-01',NULL,NULL,NULL,'active',NULL,NULL),(92,208,9,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(93,210,9,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(94,213,9,'2008-12-01',NULL,NULL,NULL,'active',NULL,NULL),(95,214,11,'2007-09-09',NULL,NULL,NULL,'active',NULL,NULL),(96,215,14,'2013-02-06',NULL,NULL,NULL,'active',NULL,NULL),(97,216,11,'2003-09-22',NULL,NULL,NULL,'active',NULL,NULL),(98,218,14,'2006-05-05',NULL,NULL,NULL,'active',NULL,NULL),(99,221,11,'2012-08-01',NULL,NULL,NULL,'active',NULL,NULL),(100,222,11,'2022-04-01',NULL,NULL,NULL,'active',NULL,NULL),(101,223,11,'2023-05-08',NULL,NULL,NULL,'active',NULL,NULL),(102,225,11,'2012-08-21',NULL,NULL,NULL,'active',NULL,NULL),(103,226,11,'2023-05-08',NULL,NULL,NULL,'active',NULL,NULL),(104,227,11,'2013-02-15',NULL,NULL,NULL,'active',NULL,NULL),(105,230,1,'2011-06-03',NULL,NULL,NULL,'active',NULL,NULL),(106,231,9,'2023-10-03',NULL,NULL,NULL,'active',NULL,NULL),(107,247,1,'2019-04-01',NULL,NULL,NULL,'active',NULL,NULL),(108,249,11,'2022-08-16',NULL,NULL,NULL,'active',NULL,NULL),(109,251,11,'2023-02-01',NULL,NULL,NULL,'active',NULL,NULL),(110,252,11,'2023-05-02',NULL,NULL,NULL,'active',NULL,NULL),(111,254,1,'2017-09-01',NULL,NULL,NULL,'active',NULL,NULL),(112,256,11,'2023-10-03',NULL,NULL,NULL,'active',NULL,NULL),(113,257,9,'2012-04-02',NULL,NULL,NULL,'active',NULL,NULL),(114,259,14,'2019-04-01',NULL,NULL,NULL,'active',NULL,NULL),(115,261,1,'2023-08-01',NULL,NULL,NULL,'active',NULL,NULL),(116,265,11,'1999-11-02',NULL,NULL,NULL,'active',NULL,NULL),(117,268,11,'2018-02-01',NULL,NULL,NULL,'active',NULL,NULL),(118,269,5,'2004-12-17',NULL,NULL,NULL,'active',NULL,NULL),(119,271,1,'2011-10-01',NULL,NULL,NULL,'active',NULL,NULL),(120,272,5,'2010-06-01',NULL,NULL,NULL,'active',NULL,NULL),(121,274,7,'2019-03-01',NULL,NULL,NULL,'active',NULL,NULL),(122,276,5,'2016-01-16',NULL,NULL,NULL,'active',NULL,NULL);
/*!40000 ALTER TABLE `ntcpayscale_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ntcpayscales`
--

DROP TABLE IF EXISTS `ntcpayscales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ntcpayscales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `basepay` bigint(20) NOT NULL,
  `allowance` int(11) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `wef` date NOT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `closedon` date DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ntcpayscales`
--

LOCK TABLES `ntcpayscales` WRITE;
/*!40000 ALTER TABLE `ntcpayscales` DISABLE KEYS */;
INSERT INTO `ntcpayscales` VALUES (1,10000,3000,1,'2023-01-01','GC1',NULL,'active','2023-11-28 04:24:35','2023-11-28 04:24:35'),(2,10500,3000,2,'2023-01-01','GC1',NULL,'active','2023-11-28 04:25:24','2023-11-28 04:25:24'),(3,12000,3000,1,'2023-01-01','GC1',NULL,'active','2023-11-28 04:34:17','2023-11-28 04:34:17'),(4,12500,3000,2,'2023-01-01','GC1',NULL,'active','2023-11-28 04:34:50','2023-11-28 04:34:50'),(5,13000,3000,1,'2023-01-01','GC1',NULL,'active','2023-11-28 04:35:47','2023-11-28 04:35:47'),(6,13500,3000,2,'2023-01-01','GC1',NULL,'active','2023-11-28 04:47:25','2023-11-28 04:47:25'),(7,14000,3000,1,'2023-01-01','GC1',NULL,'active','2023-11-28 04:48:34','2023-11-28 04:48:34'),(8,14500,3000,2,'2023-01-01','GC1',NULL,'active','2023-11-28 04:49:11','2023-11-28 04:49:11'),(9,12000,3000,1,'2023-01-01','GC1',NULL,'active','2023-11-28 04:50:47','2023-11-28 04:50:47'),(10,12250,3000,2,'2023-01-01','GC1',NULL,'active','2023-11-28 04:51:52','2023-11-28 04:51:52'),(11,13000,3000,1,'2023-01-01','GC1',NULL,'active','2023-11-28 04:52:44','2023-11-28 04:52:44'),(12,13500,3000,2,'2023-01-01','GC1',NULL,'active','2023-11-28 04:53:22','2023-11-28 04:53:22'),(13,10000,3000,1,'2023-01-01','GCR 01',NULL,'active','2023-11-29 00:01:59','2023-11-29 00:01:59'),(14,10000,3000,1,'2023-01-02','GCR 01',NULL,'active','2023-11-29 00:08:51','2023-11-29 00:08:51'),(15,12000,3000,1,'2023-01-02','GCR 01',NULL,'active','2023-11-29 00:50:09','2023-11-29 00:50:09'),(16,12500,3000,2,'2023-01-02','GCR 01',NULL,'active','2023-11-29 00:51:07','2023-11-29 00:51:07');
/*!40000 ALTER TABLE `ntcpayscales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ntpayscale_staff`
--

DROP TABLE IF EXISTS `ntpayscale_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ntpayscale_staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) unsigned NOT NULL,
  `ntpayscale_id` bigint(20) unsigned NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT 1,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ntpayscale_staff_staff_id_foreign` (`staff_id`),
  KEY `ntpayscale_staff_ntpayscale_id_foreign` (`ntpayscale_id`),
  CONSTRAINT `ntpayscale_staff_ntpayscale_id_foreign` FOREIGN KEY (`ntpayscale_id`) REFERENCES `ntpayscales` (`id`),
  CONSTRAINT `ntpayscale_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ntpayscale_staff`
--

LOCK TABLES `ntpayscale_staff` WRITE;
/*!40000 ALTER TABLE `ntpayscale_staff` DISABLE KEYS */;
/*!40000 ALTER TABLE `ntpayscale_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ntpayscales`
--

DROP TABLE IF EXISTS `ntpayscales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ntpayscales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payband` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wef` date NOT NULL,
  `closedon` date DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ntpayscales`
--

LOCK TABLES `ntpayscales` WRITE;
/*!40000 ALTER TABLE `ntpayscales` DISABLE KEYS */;
INSERT INTO `ntpayscales` VALUES (1,'KLS Pay Scale','11000-300-14000-350-17500-400-21500','2023-01-01',NULL,'active','2023-10-09 04:32:52','2023-10-09 04:32:52'),(2,'KLS Pay Scale','11500-300-14500-350-18000-400-22000','2023-01-01',NULL,'active','2023-10-09 04:42:14','2023-10-09 04:42:14'),(3,'KLS Pay Scale','13000-300-16000-350-19500-400-23500','2023-01-01',NULL,'active','2023-10-09 04:45:31','2023-10-09 04:45:31'),(4,'KLS Pay Scale','14000-350-17500-400-21500-450-26000','2023-01-01',NULL,'active','2023-10-09 06:00:33','2023-10-09 06:00:33'),(5,'KLS Pay Scale','15500-400-19500-450-24000-500-29000','2023-01-01',NULL,'active','2023-10-09 06:02:59','2023-10-09 06:02:59'),(6,'KLS Pay Scale','19500-450-24000-500-29000-550-34500','2023-01-01',NULL,'active','2023-10-09 06:15:14','2023-10-09 06:15:14'),(7,'KLS Pay Scale','15500-400-19500-450-24000-500-29000','2023-01-01',NULL,'active','2023-10-09 06:17:16','2023-10-09 06:17:16'),(8,'KLS Pay Scale','12500-350-16000-400-20000-450-24500','2023-01-01',NULL,'active','2023-10-09 06:19:03','2023-10-09 06:19:03'),(9,'KLS Pay Scale','14500-400-18500-450-23000-500-28000','2023-01-01',NULL,'active','2023-10-09 06:19:55','2023-10-09 06:19:55'),(10,'KLS Pay Scale','18000-450-22000-450-26500-500-31500','2023-01-01',NULL,'active','2023-10-09 06:20:53','2023-10-09 06:20:53'),(11,'KLS Pay Scale','18500-450-23000-500-28000-550-33500','2023-01-01',NULL,'active','2023-10-09 06:21:37','2023-10-09 06:21:37'),(12,'KLS Pay Scale','27000-500-32000-550-37500-600-43500','2023-01-01',NULL,'active','2023-10-09 06:23:02','2023-10-09 06:23:02');
/*!40000 ALTER TABLE `ntpayscales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professional_activity_attendees`
--

DROP TABLE IF EXISTS `professional_activity_attendees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professional_activity_attendees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('Local','National','International') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('Workshop','FDP','Seminar','webinar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsored` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professional_activity_attendees`
--

LOCK TABLES `professional_activity_attendees` WRITE;
/*!40000 ALTER TABLE `professional_activity_attendees` DISABLE KEYS */;
/*!40000 ALTER TABLE `professional_activity_attendees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professional_activity_conducteds`
--

DROP TABLE IF EXISTS `professional_activity_conducteds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professional_activity_conducteds` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('Local','National','International') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('Workshop','Seminar','Webinar','FDP','STTP','Certification_Program') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsored` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsoring_agency_name_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professional_activity_conducteds`
--

LOCK TABLES `professional_activity_conducteds` WRITE;
/*!40000 ALTER TABLE `professional_activity_conducteds` DISABLE KEYS */;
/*!40000 ALTER TABLE `professional_activity_conducteds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professional_activity_resource_people`
--

DROP TABLE IF EXISTS `professional_activity_resource_people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professional_activity_resource_people` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `resource_person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professional_activity_resource_people`
--

LOCK TABLES `professional_activity_resource_people` WRITE;
/*!40000 ALTER TABLE `professional_activity_resource_people` DISABLE KEYS */;
/*!40000 ALTER TABLE `professional_activity_resource_people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publications`
--

DROP TABLE IF EXISTS `publications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `journal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paper` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `publications_staff_id_foreign` (`staff_id`),
  CONSTRAINT `publications_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publications`
--

LOCK TABLES `publications` WRITE;
/*!40000 ALTER TABLE `publications` DISABLE KEYS */;
/*!40000 ALTER TABLE `publications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qualification_staff`
--

DROP TABLE IF EXISTS `qualification_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qualification_staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `qualification_id` bigint(20) unsigned NOT NULL,
  `staff_id` bigint(20) unsigned NOT NULL,
  `qualification_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_university` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` float NOT NULL,
  `yop` date NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `qualification_staffs_qualifications_id_foreign` (`qualification_id`),
  KEY `qualification_staffs_staff_id_foreign` (`staff_id`),
  CONSTRAINT `qualification_staffs_qualifications_id_foreign` FOREIGN KEY (`qualification_id`) REFERENCES `qualifications` (`id`),
  CONSTRAINT `qualification_staffs_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qualification_staff`
--

LOCK TABLES `qualification_staff` WRITE;
/*!40000 ALTER TABLE `qualification_staff` DISABLE KEYS */;
/*!40000 ALTER TABLE `qualification_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qualifications`
--

DROP TABLE IF EXISTS `qualifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qualifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `qual_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qual_shortname` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qualifications`
--

LOCK TABLES `qualifications` WRITE;
/*!40000 ALTER TABLE `qualifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `qualifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `religions`
--

DROP TABLE IF EXISTS `religions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `religions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `religion_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `religions`
--

LOCK TABLES `religions` WRITE;
/*!40000 ALTER TABLE `religions` DISABLE KEYS */;
INSERT INTO `religions` VALUES (1,'Hindu','active',NULL,NULL),(3,'Islam','active','2023-09-09 01:38:25','2023-09-09 02:03:00'),(4,'Jainism','active','2023-09-09 01:40:19','2023-09-09 01:40:19'),(6,'Buddhism','active','2023-09-09 01:40:49','2023-09-09 01:40:49'),(7,'Christian','active','2023-11-28 04:46:33','2023-11-28 04:46:33');
/*!40000 ALTER TABLE `religions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `renumerationheads`
--

DROP TABLE IF EXISTS `renumerationheads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `renumerationheads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('UG','PG') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'UG',
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `renumerationheads`
--

LOCK TABLES `renumerationheads` WRITE;
/*!40000 ALTER TABLE `renumerationheads` DISABLE KEYS */;
/*!40000 ALTER TABLE `renumerationheads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salaryheads`
--

DROP TABLE IF EXISTS `salaryheads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salaryheads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `salary_head` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salaryheads`
--

LOCK TABLES `salaryheads` WRITE;
/*!40000 ALTER TABLE `salaryheads` DISABLE KEYS */;
/*!40000 ALTER TABLE `salaryheads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `fname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `religion_id` bigint(20) unsigned NOT NULL,
  `castecategory_id` bigint(20) unsigned NOT NULL,
  `gender` enum('female','male','others') COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_increment` date DEFAULT NULL,
  `date_of_superanuation` date NOT NULL,
  `date_of_confirmation` date DEFAULT NULL,
  `bloodgroup` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_card` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adhar_card` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactno` bigint(20) DEFAULT NULL,
  `aicte_id` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vtu_id` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `esi_no` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `un_no` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_no` bigint(21) DEFAULT NULL,
  `emergency_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_type` enum('Teaching','Non-Teaching') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Teaching',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `staff_castecategory_id_foreign` (`castecategory_id`),
  KEY `staff_religion_id_foreign` (`religion_id`),
  KEY `staff_user_id_foreign` (`user_id`),
  CONSTRAINT `staff_castecategory_id_foreign` FOREIGN KEY (`castecategory_id`) REFERENCES `castecategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `staff_religion_id_foreign` FOREIGN KEY (`religion_id`) REFERENCES `religions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `staff_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=277 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (11,29,'Vaibhav','R','Chate','Plot No. 134, Jaya Nagar, near Hindalaga Road, Belgaum.','Plot No. 134, Jaya Nagar, near Hindalaga Road, Belgaum.','1984-01-05','2009-09-24',1,29,'male',NULL,'2042-01-31',NULL,'AB+',NULL,NULL,7406475096,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 04:53:06','2023-11-28 04:53:06'),(12,34,'Vikas','L','Gingine','272 / E, Mahatma Phule Road, Shahapur, Belagavi','203, Sharada Apartment, Nagal Park, Kolhapur-416 003','1989-10-02','2017-07-01',1,10,'male',NULL,'2047-10-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 05:10:56','2023-11-28 05:10:56'),(13,35,'B','S','Ingole','H. No. 4056, Kangral Galli, Belgaum.','H. No. 4056, Kangral Galli, Belgaum.','1984-01-01','2005-07-16',1,10,'male',NULL,'2042-10-31',NULL,'B+',NULL,'369056514892',9611955539,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 05:14:21','2023-11-28 05:14:21'),(14,36,'Nitendra','Nagesh','Palankar','6th cross, Radha Krishna Marg, Hindwadi,  Belagavi-590 006','6th cross, Radha Krishna Marg, Hindwadi,  Belagavi-590 006','1988-12-03','2018-12-02',1,27,'male',NULL,'2046-03-31',NULL,'A+',NULL,NULL,9964545852,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 05:19:33','2023-11-28 05:19:33'),(15,37,'Madhusudan','G','Kalibhat','House No.25/D, Somwarpeth, Tilakwadi, Belagavi 590006.','House No.25/D, Somwarpeth, Tilakwadi, Belagavi 590006.','1987-12-24','2022-10-03',1,5,'male',NULL,'2045-12-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 05:23:54','2023-11-28 05:23:54'),(16,38,'Deepak','B','Kulkarni','Flat No. 12, Maharaja Residency Swamy Vivekanand Road, Angol, Belgaum.','Flat No. 12, Maharaja Residency Swamy Vivekanand Road, Angol, Belgaum.','1966-02-10','1989-09-05',1,5,'male',NULL,'2024-02-29',NULL,'B+','ADUPK3362Q','589966350407',9480456340,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 05:34:13','2023-11-28 05:34:13'),(17,39,'Shivamanth','S','Angadi','House No.129,Hothepeth, near Navodaya School 587287','House No.129,Hothepeth, near Navodaya School 587287','1986-06-30','2023-01-03',1,44,'male',NULL,'2044-06-30',NULL,'B+',NULL,NULL,7984785248,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 05:35:53','2023-11-28 05:35:53'),(18,40,'Mahesh','M','Kaddyagol','H. No. 266, Vittal Nagar, Honnihal, Post  : Balekundri, Tq & Dist :  Belagavi-591 103','H. No. 1, Kurbur galli, Honnihal, Post  : Balekundri, Tq & Dist :  Belagavi-591 103','1993-10-06','2016-11-02',1,13,'male',NULL,'2051-10-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 05:36:38','2023-11-28 05:36:38'),(19,41,'Leeladhar','S','Pammar','House No.697/D-23, Patribasava Nagar, 3rd Cross, Bailhongal Town Belagavi  591102','House No.697/D-23, Patribasava Nagar, 3rd Cross, Bailhongal Town Belagavi  591102','1985-07-15','2023-01-09',1,45,'male',NULL,'2043-07-31',NULL,'B+',NULL,NULL,8956424579,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 05:40:13','2023-11-28 05:40:13'),(20,42,'Vinayak','B','Badiger','Laxmi nivas, H. No. 11, Cross No.  15, Gokul Nagar, Mutaga, Belguam.','Laxmi nivas, H. No. 11, Cross No.  15, Gokul Nagar, Mutaga, Belguam.','1977-08-21','2008-12-01',1,14,'male',NULL,'2035-08-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 05:44:24','2023-11-28 05:44:24'),(21,43,'Shweta','S','Patil','House No.B.C.127,havelock road camp, Belagavi 590001','House No.B.C.127,havelock road camp, Belagavi 590001','1978-04-02','2023-04-09',4,46,'female',NULL,'2036-04-30',NULL,'B+',NULL,NULL,8095882666,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 05:49:33','2023-11-28 05:49:33'),(22,44,'Ramesh','-','Bantwal','Dhavalagiri, Vijaynagar LO Padil, Bannur,Puttur,DK 574203','Dhavalagiri, Vijaynagar LO Padil, Bannur,Puttur,DK 574203','1966-09-15','2022-10-10',1,48,'male',NULL,'2024-09-30',NULL,'B+','AXZPR6416K','989588933652',8310797126,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 05:51:14','2023-11-28 05:51:14'),(23,45,'Raghunath','R','Deshpande','Shri Chidambar Krupa, Plot No. 2574, Mandoli  Road, Bhavani Nagar, Belgaum.','Shri Chidambar Krupa, Plot No. 2574, Mandoli  Road, Bhavani Nagar, Belgaum.','1981-06-01','2009-05-10',1,25,'male',NULL,'2039-06-30',NULL,'AB+',NULL,NULL,9448230448,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 05:54:21','2023-11-28 05:54:21'),(24,46,'Kanchan','B','Kanagali','H. No. 4805/24, S.S.  Samabrekar Building, 3rd Main, Shivaji Nagar, Belgaum.','H. No. 4805/24, S.S.  Samabrekar Building, 3rd Main, Shivaji Nagar, Belgaum.','1979-02-03','2011-09-28',1,20,'female',NULL,'2037-02-28',NULL,'O+',NULL,NULL,9480539679,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 05:58:58','2023-11-28 05:58:58'),(25,47,'Vani','P','Datar','Maheshwari, G-4, 10th Cross, Bhagyanagar, Hindwadi, Belgaum.','17.02.2018. Flat No. 301, Druvankur Residency, Hindu nagar, Belagavi.','1981-11-07','2003-11-15',1,5,'female',NULL,'2039-07-31',NULL,'O+','ALHPD7365H','829073481984',9480001656,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:00:09','2023-11-28 06:00:09'),(26,48,'Dharma','C','Madiger','6th cross, Gokul Nagar, Mutaga, Belgaum','6th cross, Gokul Nagar, Mutaga, Belgaum','1991-08-02','2012-10-16',1,49,'male',NULL,'2049-08-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 06:02:01','2023-11-28 06:02:01'),(27,49,'Suraj','S','Balikai','Laxmi Nagar, 2nd Cross, Kakari, Belgaum-591 113','Laxmi Nagar, 2nd Cross, Kakari, Belgaum-591 113','1994-06-24','2012-10-16',1,11,'male',NULL,'2052-06-30',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 06:06:38','2023-11-28 06:06:38'),(28,50,'Parag','V','Datar','Flat No. 301, Druvankur Residency, Hindu nagar, Belagavi','Flat No. 301, Druvankur Residency, Hindu nagar, Belagavi','1980-05-08','2005-08-18',1,5,'male',NULL,'2038-05-31',NULL,'B+','ALHPD7390J','986759834116',9481007639,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:08:09','2023-11-28 06:08:09'),(29,51,'Archana','S','Shagoti','W/o Arjun Virupaxi, Plot No. 18, Sector No. 5, Shri NAGAR, Belgaum.,','W/o Arjun Virupaxi, Plot No. 18, Sector No. 5, Shri NAGAR, Belgaum.,','1988-07-01','2013-05-03',1,20,'female',NULL,'2046-07-31',NULL,'O+',NULL,NULL,9886044742,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:09:09','2023-11-28 06:09:09'),(30,52,'Sanjeev','A','Khanapuri','At :  Yelimunnoli, Tq  :  Hukkeri,  Belgaum.','At :  Yelimunnoli, Tq  :  Hukkeri,  Belgaum.','1988-06-27','2013-02-11',1,11,'male',NULL,'2046-06-30',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 06:10:29','2023-11-28 06:10:29'),(31,53,'Abhaykumar','D','Janaj','C/o V.B. Shirur, Plot No. 7,  Sl. No. 89/1, Adarsha Nagar, Belgaum.','C/o V.B. Shirur, Plot No. 7,  Sl. No. 89/1, Adarsha Nagar, Belgaum.','1968-06-15','2006-08-07',4,46,'female',NULL,'2026-06-26',NULL,'B+','AHNPJ8056D','271602713771',9480398581,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:14:29','2023-11-28 06:14:29'),(32,54,'Rajendra','S','Thakai','Pushparaj, H. No. 741/E6, 1st Cross, Vidyanagar, Angol, Belgaum.','Pushparaj, H. No. 741/E6, 1st Cross, Vidyanagar, Angol, Belgaum.','1979-03-19','2008-03-01',4,50,'male',NULL,'2037-03-31',NULL,'O+',NULL,NULL,9986697291,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:15:35','2023-11-28 06:15:35'),(33,55,'Rajani','S','Togarsi','C/o A.V. Togarsi, Plot No. 271, Ist stage, 1st cross, Hanuman nagar, Belgaum-590 001','D / o S.V. Togarsi, Highschool road,  Po : Rattihalli,  Tq  :  Hirekerur-581 116','1989-07-26','2013-11-07',1,20,'female',NULL,'2047-07-31',NULL,'A+',NULL,NULL,95382974541,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:20:01','2023-11-28 06:20:44'),(34,56,'Rahul','-','Suryavanshi','Plot No. 776, Khanapur Road, Near Big Bazaar, Tilakwadi, Belghaum','Plot No. 776, Khanapur Road, Near Big Bazaar, Tilakwadi, Belghaum','1986-12-13','2012-01-12',1,10,'female',NULL,'2044-12-31',NULL,'A+','CJRPS4979J','773742412181',7411439644,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:20:08','2023-11-28 06:20:08'),(35,57,'Keerti','M','Nashimath','925, Kuvempu Nagar, Belgaum.','Guru prasad Nilaya,  Siddarameshwar Colony, 7th cross, Jamakhandi, Bagalkot.','1988-11-25','2013-12-26',1,20,'female',NULL,'2046-11-30',NULL,'A+',NULL,NULL,7204313708,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:24:26','2023-11-28 06:24:26'),(36,58,'Balawant','K','Patil','H, No. 2702, Kala Prasad,  Udyambag  Road, Angol,  Belgaum.','H, No. 2702, Kala Prasad,  Udyambag  Road, Angol,  Belgaum.','1982-11-24','2012-05-16',1,10,'female',NULL,'2040-11-30',NULL,'A+','BKMPP8821M','249514819068',9972403678,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:25:31','2023-11-28 06:25:31'),(37,59,'Sujay','C','Deshpande','H. No. 305, Flat S-1, 2nd Floor, Sai Srushti Apartments, Roy Road, Tilakwadi, Belagavi.','H. No. 309 / A, G-2, Gurukrupa appartment, Roy Road, Tilakwadi, Belgaum-590 006.','1988-07-18','2014-01-09',1,5,'male',NULL,'2046-07-31',NULL,'A+',NULL,NULL,7829558350,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:28:16','2023-11-28 06:28:16'),(38,60,'Avinasha','V','Deshpande','Shrinivas Nilaya, Block-B, 2nd Cross, Charantimath Garden, Dharwad','Shrinivas Nilaya, Block-B, 2nd Cross, Charantimath Garden, Dharwad','1982-07-22','2012-07-16',1,5,'male',NULL,'2040-07-31',NULL,'B-','BLAPD4486K','361933433444',9663356371,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:30:33','2023-11-28 06:30:33'),(39,61,'Nitin','A','Deshpande','Plot No. 33, Sector 8, CTS 6373, M.M. Extension, Anyaneya Nagar, Belgaum-590 016','Plot No. 33, Sector 8, CTS 6373, M.M. Extension, Anyaneya Nagar, Belgaum-590 016','1988-03-14','2014-01-09',1,5,'male',NULL,'2046-03-31',NULL,'A+',NULL,NULL,7795822625,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:32:08','2023-11-28 06:32:08'),(40,62,'Sudhakar','C','J','Shubha Ganga Nilaya, Basaveshwar Street, Jayanagar,  Chickmangalur-577101','Shubha Ganga Nilaya, Basaveshwar Street, Jayanagar,  Chickmangalur-577101','1988-03-13','2013-03-15',1,20,'male',NULL,'2046-03-31',NULL,'O+','CQUPS6782F','211857331402',8105281894,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:34:36','2023-11-28 06:34:36'),(41,63,'Basavaraj','S','Saunshi','Primary school backside,  At post : Maranabeed,  Tq :  Hangal,   Dist  : Haveri-581 101','Primary school backside,  At post : Maranabeed,  Tq :  Hangal,   Dist  : Haveri-581 101','1987-06-01','2014-01-10',1,20,'male',NULL,'2045-06-30',NULL,'null',NULL,NULL,8904259703,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 06:35:38','2023-11-28 06:35:38'),(42,64,'Sateesh','N','Doddamani','C/o Rajiv Yadhalli, Mahantesh Nilay CTS No. 4856 / 100, 1st main 4th cross, Sadashiva nagar, Belgaum','Bhagyashree  laxmi nilay, At : Salahalli,   Tq : Ramadurga, Dist :  Belgaum','1985-07-25','2013-09-14',1,20,'male',NULL,'2043-07-31',NULL,'A-','AUTPD3493K','564385060413',9591209938,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 23:20:04','2023-11-28 23:20:04'),(43,65,'Namrata','M','Angadi','D / o M.B. Angadi,  C/o C. G. Belagavi Teacher, H. No. 705 / B, Shettagar Chawl, Near Bharat Talkies, Bailhongal-591 102','D / o M.B. Angadi,  C/o C. G. Belagavi Teacher, H. No. 705 / B, Shettagar Chawl, Near Bharat Talkies, Bailhongal-591 102','1988-01-27','2014-08-01',1,20,'female',NULL,'2046-01-31',NULL,'O+',NULL,NULL,8147231096,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 23:20:22','2023-11-28 23:20:22'),(44,66,'Hanmant','R','Kulkarni','PloT No. 156, Laxmi Nivas, KSRTC colony, Shindoli, Belgaum.','PloT No. 156, Laxmi Nivas, KSRTC colony, Shindoli, Belgaum.','1984-07-30','2013-02-13',1,5,'male',NULL,'2042-07-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 23:22:16','2023-11-28 23:22:16'),(45,67,'Rudresh','B','Magadum','S/o Babu R Magadum, At post  :  Amminabhavi, Tq  :  Hukkeri, Dist  :  Belgaum-591 236','S/o Babu R Magadum, At post  :  Amminabhavi, Tq  :  Hukkeri, Dist  :  Belgaum-591 236','1987-07-09','2014-02-15',1,20,'male',NULL,'2045-07-31',NULL,'B+','BWRPM9247F','689520342446',7760174652,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 23:24:51','2023-11-28 23:24:51'),(46,68,'Shri. B','S','Ingole','H. No. 4056, Kangral Galli, Belgaum.','H. No. 4056, Kangral Galli, Belgaum.','1984-10-27','2005-07-06',1,10,'male',NULL,'2042-10-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 23:28:11','2023-11-28 23:28:11'),(47,69,'Uma','G','Hullur','W / o Dr. Prashant G.J.,  S.S. No.  215 /A, Block No. 10, Anand Nagar, 1st Cross, Belgaum - 590 003','W / o Dr. Prashant G.J.,  S.S. No.  215 /A, Block No. 10, Anand Nagar, 1st Cross, Belgaum - 590 003','1977-11-06','2014-09-02',1,20,'female',NULL,'2035-11-30',NULL,'A+',NULL,NULL,9481009194,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 23:28:13','2023-11-28 23:28:13'),(48,70,'Mr. Amol','K','Gadkari','H. No. 141, Voshnu galli, M-Vadagaon, Belgaum.','H. No. 141, Voshnu galli, M-Vadagaon, Belgaum.','1984-01-04','2013-09-02',1,10,'male',NULL,'2042-01-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 23:32:32','2023-11-28 23:32:32'),(49,71,'Ganapati','G','Hegde','C/o B.s. Badiger, No. 35, near KLE College, Angol,  Belguam.','C/o B.s. Badiger, No. 35, near KLE College, Angol,  Belguam.','1985-05-21','2012-08-01',1,15,'male',NULL,'2043-05-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 23:32:52','2023-11-28 23:32:52'),(50,73,'Ramesh','G','B','C/o Iranna Makanur, 2nd Main, 2nd  cross,  Ishwar Nagar,  Ranebennur-581 115','S/o Basararah G.C, Baligatte,  At post : Byalahal, Chitradurga-577 541','1986-07-30','2015-02-18',1,20,'male',NULL,'2044-07-31',NULL,'AB+','BFDPB6330K','436050871420',9986586838,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 23:33:58','2023-11-28 23:33:58'),(51,74,'Ms. Laxmi','K','Chougule','H. No. 828 / 3, Pawar Chawl,  Vaccine Depot Road, Tilakwadi, Belgaum.','H. No. 828 / 3, Pawar Chawl,  Vaccine Depot Road, Tilakwadi, Belgaum.','1974-09-07','2013-03-05',1,10,'female',NULL,'2032-09-30',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 23:37:20','2023-11-28 23:37:20'),(52,75,'Veerabhadra','G','Kamashetti','H. No. 63, Shahapur Galli,  Dhamane, Belgaum.','H. No. 63, Shahapur Galli,  Dhamane, Belgaum.','1985-08-20','2006-02-06',1,20,'male',NULL,'2043-08-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 23:39:20','2023-11-28 23:39:20'),(53,76,'Nikhil','R','Chitragar','H. No. 187 / 2B, 3rd cross, Vivekanand Nagar, Gokak-591 307','H. No. 187 / 2B, 3rd cross, Vivekanand Nagar, Gokak-591 307','1988-04-24','2015-02-18',1,5,'male',NULL,'2046-04-30',NULL,'O+','ANLPC6123A','713768364759',9036855485,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 23:40:40','2023-11-28 23:40:40'),(54,77,'Pavan','V','Gudi','5th Cross, Chidambar Nagar, Belagavi-590 008','H. No. 40, Srinagar, Unkal,, Hubali-580 031.','1987-12-17','2015-07-01',1,5,'male',NULL,'2045-12-31',NULL,'null',NULL,NULL,9036267704,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 23:41:22','2023-11-28 23:41:22'),(55,78,'Mr.Sandeep','R','Mathad','H. No. L.I.G-25, Ashok Nagar,  Belagavi-590 016.','H. No. L.I.G-25, Ashok Nagar,  Belagavi-590 016.','1983-07-08','2015-11-02',1,5,'male',NULL,'2041-07-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 23:41:25','2023-11-28 23:41:25'),(56,79,'Somnath','M','Khot','C/O  S.N. Birje, Plot No. 2042, Sector No. 9, M.M. Extension, Belagavi-590 016','C/O  S.N. Birje, Plot No. 2042, Sector No. 9, M.M. Extension, Belagavi-590 016','1986-11-09','2015-07-06',1,20,'male',NULL,'2044-11-30',NULL,'O+',NULL,NULL,9449321519,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 23:45:15','2023-11-28 23:45:15'),(57,80,'Mr. Sanjay','R','Sullad','H. No. 469 / 12-A, Gunjatkar Buiilding, Shiv-shakti Nagar, Angol,  Belagavi-590 006.','H. No. 469 / 12-A, Gunjatkar Buiilding, Shiv-shakti Nagar, Angol,  Belagavi-590 006.','1991-01-21','2015-12-01',1,20,'male',NULL,'2049-01-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 23:45:32','2023-11-28 23:45:32'),(58,81,'Vinay','J','Shetty','H. No. 182, Mallapur, Karwar Road,  Kerwadi-5981 400','H. No. 182, Mallapur, Karwar Road,  Kerwadi-5981 400','1988-05-21','2014-08-16',1,5,'male',NULL,'2046-05-31',NULL,'null','CXGPS7517H','412984366102',9482377709,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 23:46:17','2023-11-28 23:46:17'),(59,82,'Vikhyat','S','Katti','30 /A, Subhash Chandra Nagar, Angol Extension, Belagavi-590 006.','30 /A, Subhash Chandra Nagar, Angol Extension, Belagavi-590 006.','1987-11-26','2015-08-20',1,20,'male',NULL,'2045-11-30',NULL,'null',NULL,NULL,8088007011,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 23:50:16','2023-11-28 23:50:16'),(60,83,'Mr.Gajanan','L','Melge','House No.400,Khanapur Belagavi, Road Garlagunji, Garalgunji-Khanapur Belagavi  591302','House No.400,Khanapur Belagavi, Road Garlagunji, Garalgunji-Khanapur Belagavi  591302','1994-07-18','2023-05-23',1,10,'male',NULL,'2052-07-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 23:54:03','2023-11-28 23:54:03'),(61,84,'Mr. Dattatraya','B','Mahajan','PloT No. 156, Laxmi Nivas, KSRTC colony, Shindoli, Belgaum.','PloT No. 156, Laxmi Nivas, KSRTC colony, Shindoli, Belgaum.','1987-11-01','2013-02-13',1,5,'male',NULL,'2045-11-30',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-28 23:56:58','2023-11-28 23:56:58'),(62,85,'Shashank','S','Bangi','Shanta Nilaya, Ganeshour Galli, Shahapur, Belagavi','C/o C.S. Bangi Advocate, Mudhol Road, Jamakhandi','9991-11-09','2016-07-15',1,20,'male',NULL,'2049-11-30',NULL,'A+',NULL,NULL,9036587871,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-28 23:57:05','2023-11-28 23:57:05'),(63,86,'Shri. Nagesh','B','Handigol','Plot No. 64, Hindalnagar, Near Ganapati Temple, Shindoli, Belgaum.','Plot No. 64, Hindalnagar, Near Ganapati Temple, Shindoli, Belgaum.','1982-07-12','2009-01-01',1,5,'male',NULL,'2040-07-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:01:34','2023-11-29 00:01:34'),(64,87,'Sachin','R','Kulkarni','S/o Ramesh Kulkarni, Kanakdas Badavane, Plot No. 46, Sanjivani Nivas, 3rd  stage, Vijaypur.','S/o Ramesh Kulkarni, Kanakdas Badavane, Plot No. 46, Sanjivani Nivas, 3rd  stage, Vijaypur.','1989-11-18','2017-07-03',1,5,'male',NULL,'2047-11-30',NULL,'A-',NULL,NULL,9742980992,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 00:03:13','2023-11-29 00:03:13'),(65,88,'Akshay','M','Khatavkar','At post  :  Naganwadi,  Tq :  Chandgad, Dist  :  Kolhapur','At post  :  Naganwadi,  Tq :  Chandgad, Dist  :  Kolhapur','1994-05-27','2016-09-08',1,16,'male',NULL,'2052-05-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:05:24','2023-11-29 00:05:24'),(66,89,'Mr. Shridhar','R','Hulikavi','Flat No. 1, Mayura Residency, 4th Cross Byhagyanagar,  Belagavi-590 006.','Flat No. 1, Mayura Residency, 4th Cross Byhagyanagar,  Belagavi-590 006.','1986-02-13','2015-11-03',1,5,'male',NULL,'2044-02-29',NULL,'AB+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:08:42','2023-11-29 00:08:42'),(67,90,'Kartik','R','Kulkarni','Plot No.104, Sector No.5, Krishna Kunj, Shree nagar, MM Extension Belagavi 590016','Plot No.104, Sector No.5, Krishna Kunj, Shree nagar, MM Extension Belagavi 590016','1944-10-14','2022-10-21',1,5,'male',NULL,'2052-10-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 00:12:08','2023-11-29 00:12:08'),(68,91,'Mr. Avadhoot','A','Daptardar','H. No. 315 /2, Patil Gali, Vadagaon, Belagavi-590 005','H. No. 315 /2, Patil Gali, Vadagaon, Belagavi-590 005','1989-10-05','2015-11-16',1,5,'male',NULL,'2047-10-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:12:17','2023-11-29 00:12:17'),(69,92,'Shri. Sachin','A','Kadad','H. No. 269/A, Konwal Galli, Mahaveer Nagar, Angol, Belgaum.','H. No. 269/A, Konwal Galli, Mahaveer Nagar, Angol, Belgaum.','1983-03-23','2008-12-01',1,12,'male',NULL,'2041-03-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:16:02','2023-11-29 00:16:02'),(70,93,'V','L','Katti','H. No. 125, Vaze Galli, Vaze  Chal, Vadagaon, Belgaum.','H. No. 125, Vaze Galli, Vaze  Chal, Vadagaon, Belgaum.','1972-12-17','2008-12-01',1,5,'male',NULL,'2030-12-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:18:48','2023-11-29 00:18:48'),(71,94,'K','P','Thejaswi','Vrushab Giri, 3rd Cross, A Block, Basaveshwar Nagar, Tq &  Dist  :  Haveri-581 110.','Vrushab Giri, 3rd Cross, A Block, Basaveshwar Nagar, Tq &  Dist  :  Haveri-581 110.','1992-06-18','2017-07-07',1,20,'male',NULL,'2050-06-30',NULL,'null',NULL,NULL,7204523446,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 00:19:29','2023-11-29 00:19:29'),(72,95,'Mr. Ashish','J','Balikai','H. No. 568/3, Bhendigeri Chal, near Marathi  School No. 34, Raghunath Peth, Angol','H.No.851,\" Ahimsa\", 4th Cross Vasant Vihar colony, 2nd Stage Rani Channamma Nagar, Belagavi 590006','1984-01-13','2012-11-06',1,11,'male',NULL,'2042-01-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:20:35','2023-11-29 00:20:35'),(73,96,'Mr.  Bharma','I','Hanji','Halegudaganatti,  Po :Yamakanmardi Tq  :  Hukkeri,   Dist  :  Belgaum.','Halegudaganatti,  Po :Yamakanmardi Tq  :  Hukkeri,   Dist  :  Belgaum.','1992-02-05','2012-08-01',1,20,'male',NULL,'2050-02-28',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:25:29','2023-11-29 00:25:29'),(74,97,'Balesh','B','Hagedal','347, Ganesh Vandana Apartment, Nehru Road, Tilakwadi, Belagavi-590 006.','347, Ganesh Vandana Apartment, Nehru Road, Tilakwadi, Belagavi-590 006.','1993-06-01','2019-09-11',1,17,'male',NULL,'2051-06-30',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:27:49','2023-11-29 00:27:49'),(75,98,'Harshit','B','Kulkarni','H. No. 138, Koppal Building, 5th cross, Devasthan Marg, Chidambag Nagar, Belgaum','H. No. 138, Koppal Building, 5th cross, Devasthan Marg, Chidambag Nagar, Belgaum','1986-09-20','2010-04-12',1,25,'male',NULL,'2044-09-30',NULL,'B+',NULL,NULL,9742123761,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 00:28:08','2023-11-29 00:28:08'),(76,99,'Shri. B','S','Kalburgi','Plat No. 1, 3rd Floor, Tejashwita  Complex, CTS No. 1489,  Deshpande Galli, Belgaum.','Plat No. 1, 3rd Floor, Tejashwita  Complex, CTS No. 1489,  Deshpande Galli, Belgaum.','1969-03-27','1989-03-04',1,21,'male',NULL,'2027-03-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:33:11','2023-11-29 00:33:11'),(77,100,'J','K','Kittur','C/o K.V. Dharwarkar, 1136, Ananrtshayan Galli, Belgaum','C/o K.V. Dharwarkar, 1136, Ananrtshayan Galli, Belgaum','1966-08-21','1997-09-02',1,5,'male',NULL,'2024-08-31',NULL,'B+',NULL,NULL,9449735400,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 00:35:21','2023-11-29 00:35:21'),(78,101,'Shri Balveer','S','Hebballi','H. No. 1996, Ganapat Galli, Belgaum.','H. No. 1996, Ganapat Galli, Belgaum.','1974-09-11','2010-09-14',1,22,'male',NULL,'2032-09-30',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:37:01','2023-11-29 00:37:01'),(79,102,'Prakash','G','Kamashetti','H. No. 63, Shahapur Galli,  Dhamane, Belgaum.','H. No. 63, Shahapur Galli,  Dhamane, Belgaum.','1989-07-10','2019-09-20',1,20,'male',NULL,'2047-07-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:37:58','2023-11-29 00:37:58'),(80,103,'S','-','Shivakumar','No. 50, Saptagiri, 5th   Cross, Krishi Colony, Bhagyanagar, Belguam','No. 50, Saptagiri, 5th   Cross, Krishi Colony, Bhagyanagar, Belguam','1966-01-17','1998-09-21',1,20,'male',NULL,'2024-01-31',NULL,'O+',NULL,NULL,9448543666,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 00:39:18','2023-11-29 00:39:18'),(81,104,'Supriya','-','Shanabhag','Vaikunta, 4877/24, Jadhav Nagar, Belgaum','Vaikunta, 4877/24, Jadhav Nagar, Belgaum','1978-06-05','2004-03-01',1,51,'female',NULL,'2036-06-30',NULL,'O+','BADPS4609D','764613566831',9480001656,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 00:40:17','2023-11-29 00:40:17'),(82,105,'Maharudra','S','Patil','Surabhi, Plot No. 13,  Scheme 13, Doordarshan Nagar, Belgaum.','Surabhi, Plot No. 13,  Scheme 13, Doordarshan Nagar, Belgaum.','1969-10-30','1996-03-09',1,21,'male',NULL,'2027-10-31',NULL,'O+',NULL,NULL,9880354230,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 00:44:41','2023-11-29 00:44:41'),(83,106,'Shri Raghavendra','G','Harihar','Block No.3, Pruthvi Towers, Maruti Nagar, Airport Road, next to S.C.Motors, Belagavi 590016','House No.11, tejaswinagar, Dharwad -580002','1968-07-04','2014-12-01',1,5,'male',NULL,'2026-07-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:49:29','2023-11-29 00:49:29'),(84,107,'Venkatesh','N','Satwik','Plot No. 53, 7th cross, Gokul Nagar, Mutaga, Belgaum.','Plot No. 53, 7th cross, Gokul Nagar, Mutaga, Belgaum.','1974-06-02','1997-09-03',1,29,'male',NULL,'2032-06-30',NULL,'O+',NULL,NULL,9611606975,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 00:50:51','2023-11-29 00:50:51'),(85,108,'Vinayak','T','Hendre','At post  :  Tadas,  TQ   :  Shiggaon, Dist  :  Haveri.','At post  :  Tadas,  TQ   :  Shiggaon, Dist  :  Haveri.','1987-04-30','2019-09-16',1,16,'male',NULL,'2045-04-30',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:55:50','2023-11-29 00:55:50'),(86,109,'Shridhar','M','Jagelekar','House No.1023,Main Road, Jyoti Nagar, Kangrali-KH Belagavi -590010','House No.1023,Main Road, Jyoti Nagar, Kangrali-KH Belagavi -590010','1980-07-10','2022-08-01',1,10,'male',NULL,'2038-07-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 00:56:42','2023-11-29 00:56:42'),(87,110,'Vijay','-','Shirvalkar','Plot No.23,survey No.205,OM YASH Building Kanakadas colony,ambedkar Nagar, Near Somangiri Talav Anagol,Tilakwadi -Belagavi','Plot No.23,survey No.205,OM YASH Building Kanakadas colony,ambedkar Nagar, Near Somangiri Talav Anagol,Tilakwadi -Belagavi','1976-01-18','2021-02-01',1,10,'male',NULL,'2034-01-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:02:51','2023-11-29 01:04:37'),(88,111,'Anupama','N','Kallol','1096/C, Bhagarati, Anantshayan Galli, Belgaum.','1096/C, Bhagarati, Anantshayan Galli, Belgaum.','1968-06-27','1997-02-11',1,5,'female',NULL,'2026-06-30',NULL,'A+',NULL,NULL,9880354230,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:02:55','2023-11-29 01:02:55'),(89,112,'Pradeep','Vishnu','Patil','House No.351, Mahadwar Road , C.R.No.3, Belagavi 590003','House No.351, Mahadwar Road , C.R.No.3, Belagavi 590003','1996-11-18','2023-07-17',1,10,'male',NULL,'2054-11-30',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:04:06','2023-11-29 01:04:06'),(90,113,'Akshay','B','Patil','House No.1175, Margai Galli Kakati Belagavi 591113','House No.1175, Margai Galli Kakati Belagavi 591113','1995-04-11','2023-10-03',1,20,'male',NULL,'2053-04-30',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:07:46','2023-11-29 01:07:46'),(91,114,'P','V','Gopikrishna','H. No. 191, Shri Gajanan Krupa, Chidambar Nagar, Belgaum.','H. No. 191, Shri Gajanan Krupa, Chidambar Nagar, Belgaum.','1965-04-05','2023-06-05',1,52,'male',NULL,'2036-06-30',NULL,'AB+','ADMPP4645H','293660862948',9480422336,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:08:02','2023-11-29 01:08:02'),(92,115,'Mahantesh','M','Nadakatti','A-402, Ganesh Park Appts., 2nd Cross, Bhagyanagar, Tilakwadi, Belgaum.','A-402, Ganesh Park Appts., 2nd Cross, Bhagyanagar, Tilakwadi, Belgaum.','1968-03-16','1999-10-30',1,21,'male',NULL,'2026-03-31',NULL,'A+',NULL,NULL,9986157902,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:12:19','2023-11-29 01:12:19'),(93,116,'Shri Gururaj','M','Saudatti','Plot No. 39, Near Parvati Nagar, Babu Tarapad Colony, Udyambag, Belgaum.','Plot No. 39, Near Parvati Nagar, Babu Tarapad Colony, Udyambag, Belgaum.','1981-06-11','2010-09-21',1,5,'male',NULL,'2039-06-30',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:12:37','2023-11-29 01:12:37'),(94,117,'Devendra','-','Karennavar','H. No. 427, Patil Galli, Khanapur Road, Macchhe, Belgaum.','H. No. 427, Patil Galli, Khanapur Road, Macchhe, Belgaum.','1990-06-01','2008-08-14',1,13,'male',NULL,'2048-06-30',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:14:57','2023-11-29 01:14:57'),(95,118,'Shri. Sharath','R','Joshi','Plot No. 289, Rajaram, 2nd Cross, Chidambar nagar, Belgaum.','Plot No. 289, Rajaram, 2nd Cross, Chidambar nagar, Belgaum.','1981-06-01','2008-12-01',1,5,'male',NULL,'2039-06-30',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:15:25','2023-11-29 01:15:25'),(96,119,'Anand','V','Kulkarni','CTS No. 329/A, Roy Road, Tilakwadi, Belgaum.','CTS No. 329/A, Roy Road, Tilakwadi, Belgaum.','1967-06-25','1996-03-01',1,25,'male',NULL,'2025-06-30',NULL,'AB+',NULL,NULL,8277639393,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:17:16','2023-11-29 01:17:16'),(97,120,'Saurav','-','Mitra','202, Emerald apartment, CTS 2192, 2193, Bhau Daajiba Desai Colony, 2nd Cross, Hanuman Nagar, Belagavi-590 019.','202, Emerald apartment, CTS 2192, 2193, Bhau Daajiba Desai Colony, 2nd Cross, Hanuman Nagar, Belagavi-590 019.','1978-02-19','2019-01-01',1,54,'male',NULL,'2036-02-29',NULL,'A+','\'AGGPM2333Q','\'655887172809',9987981133,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:17:37','2023-11-29 01:17:37'),(98,121,'Suresh','C','Kuri','C/o GLB Patil, Plot No. 1963, Sector 9, Malamaruti  Extention Belgaum.','C/o GLB Patil, Plot No. 1963, Sector 9, Malamaruti  Extention Belgaum.','1973-06-01','2001-10-01',1,55,'male',NULL,'2031-06-30',NULL,'B+','ANYPK8046M','350239922397',8147793262,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:21:48','2023-11-29 01:21:48'),(99,122,'Shri Iranna','V','Gadadegoudra','S. No. 30, Gurudev Galli, Laxmi nagar, Vadagaon, Belguam.','S. No. 30, Gurudev Galli, Laxmi nagar, Vadagaon, Belguam.','1984-01-21','2010-09-09',1,24,'male',NULL,'2042-01-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:21:57','2023-11-29 01:21:57'),(100,123,'Mahantesh','B','Badiger','c/o N.B.Chikkamth,27/4 Anagol,Belagavi 590006','c/o N.B.Chikkamth,27/4 Anagol,Belagavi 590006','1976-03-02','2022-08-01',1,20,'male',NULL,'2034-03-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:23:23','2023-11-29 01:23:23'),(101,124,'Mr. Rajshekhar','B','Lakkundi','H. No. 17/1, Malaprabha Nagar, Vadagaon, Belgaum.','H. No. 17/1, Malaprabha Nagar, Vadagaon, Belgaum.','1990-01-26','2012-08-01',1,18,'male',NULL,'2048-01-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:25:32','2023-11-29 01:25:32'),(102,125,'Mr. Sagar','A','Patil','H. No. 50, Shivalingeshwar Colony, Sahidri Nagar,  Belgaum.','H. No. 50, Shivalingeshwar Colony, Sahidri Nagar,  Belgaum.','1992-06-11','2012-08-03',1,32,'male',NULL,'2050-06-30',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:28:48','2023-11-29 01:28:48'),(103,126,'Dr. Vinayak','R','Malik','H. No. 3475, Samadevi  Complex, Samadevi Galli, Behind Saraswat Bank, Belgaum.','H. No. 3475, Samadevi  Complex, Samadevi Galli, Behind Saraswat Bank, Belgaum.','1980-07-01','2006-03-09',1,56,'male',NULL,'2038-07-31',NULL,'A+',NULL,NULL,9886406375,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:29:13','2023-11-29 01:29:13'),(104,127,'Anil','B','Gavade','Shri Durga Residency Apprts., Flat No. UG/1, Shivaji Colony, Shanti Nagar Main Road, Tilakwadi, Belgaum.','Shri Durga Residency Apprts., Flat No. UG/1, Shivaji Colony, Shanti Nagar Main Road, Tilakwadi, Belgaum.','1978-07-05','2007-08-06',1,57,'male',NULL,'2036-07-31',NULL,'null','AJYPG5564G','991752610455',9986471271,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:29:32','2023-11-29 01:29:32'),(105,128,'Darshan','Y','Sonolkar','H. No. 366, Laxmi Galli, Hangaraga,  Mandoli, Belagavi','H. No. 366, Laxmi Galli, Hangaraga,  Mandoli, Belagavi','1995-05-20','2016-10-24',1,10,'male',NULL,'2053-05-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:32:24','2023-11-29 01:32:24'),(106,129,'Satish','p','Deshpande','Plot No. 10, 5th Cross,  Dwaraka Nagar, Tilakwadi, Belgaum.','Plot No. 10, 5th Cross,  Dwaraka Nagar, Tilakwadi, Belgaum.','1968-12-09','1999-10-29',1,25,'male',NULL,'2026-12-31',NULL,'B+','AEEPD1911M','945637250172',9945456070,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:32:48','2023-11-29 01:32:48'),(107,130,'Dr.Vivek','V','Kulkarni','Plot No. 51, Naragundkar Colony, Guruprasad Colony, Belgaum.','Plot No. 51, Naragundkar Colony, Guruprasad Colony, Belgaum.','1977-07-05','2004-04-08',1,25,'male',NULL,'2035-07-31',NULL,'B+',NULL,NULL,9448014163,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:33:11','2023-11-29 01:33:11'),(108,131,'Mr.Bhushan','S','Bhendigeri','H. No. 50, Shivalingeshwar Colony, Sahidri Nagar,  Belgaum.','H. No. 50, Shivalingeshwar Colony, Sahidri Nagar,  Belgaum.','1997-03-08','2021-03-01',1,58,'male',NULL,'2055-03-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:36:18','2023-11-29 01:36:18'),(109,132,'Sanjeev','H','Kulkarni','H. No. 205, Kamadhenu Residency 3rd Cross, Bhagyanagar, Tilakwadi, Belgaum','H. No. 205, Kamadhenu Residency 3rd Cross, Bhagyanagar, Tilakwadi, Belgaum','1977-12-20','2004-08-16',1,25,'male',NULL,'2035-12-31',NULL,'O+',NULL,NULL,9448590405,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:36:55','2023-11-29 01:36:55'),(110,133,'Mahantesh','-','Kurani','S/O Sadashiv, At Post Yalimunoli, Yalimanoli, Belagavi 591309','S/O Sadashiv, At Post Yalimunoli, Yalimanoli, Belagavi 591309','1991-07-31','2023-05-22',1,20,'male',NULL,'2049-07-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:37:47','2023-11-29 01:37:47'),(111,134,'Shrikant','M','Bapat','C/o S.A. Patil, Plot No. 71/1, 2nd cross, Chidambag Nagar, Tilakwadi, Belgaum.','C/o S.A. Patil, Plot No. 71/1, 2nd cross, Chidambag Nagar, Tilakwadi, Belgaum.','1976-06-09','2003-06-13',1,25,'male',NULL,'2034-06-30',NULL,'A+',NULL,NULL,9972944982,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:40:59','2023-11-29 01:40:59'),(112,135,'Mr.  Ganesh','P','Lokur','C/o Chandrakant Patil, 381, Ganapat Galli, Angol,  Belgaum-590 007','C/o Chandrakant Patil, 381, Ganapat Galli, Angol,  Belgaum-590 007','1984-09-20','2013-02-13',1,59,'male',NULL,'2042-09-30',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:41:37','2023-11-29 01:41:37'),(113,136,'Nagaraj','-','Sontakki','House No.17,Malaprabha Nagar, Vadagaon, Belagavi 590005','House No.17,Malaprabha Nagar, Vadagaon, Belagavi 590005','1997-05-24','2023-08-21',1,18,'male',NULL,'2055-05-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:42:44','2023-11-29 01:42:44'),(114,137,'Mr.  Deepak','S','Pingat','Maruti Galli, Kakati, Belgaum.','Maruti Galli, Kakati, Belgaum.','1985-08-03','2013-02-15',1,10,'male',NULL,'2043-08-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:45:05','2023-11-29 01:45:05'),(115,138,'Sambhaji','S','Tarihalkar','House No.23, at Tirthkunde, Laxmi Galli, Near Santi Bastwad, Khanapur Belagavi 590014','House No.23, at Tirthkunde, Laxmi Galli, Near Santi Bastwad, Khanapur Belagavi 590014','1996-06-21','2023-10-10',1,10,'male',NULL,'2054-06-30',NULL,'O-',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:47:15','2023-11-29 01:47:15'),(116,139,'Arunkumar','-','P','No. 413, Besides Karnataka Forest Nursery, 2nd Stage, Rani Channamma Nagar, Belgaum','No. 413, Besides Karnataka Forest Nursery, 2nd Stage, Rani Channamma Nagar, Belgaum','1980-04-16','2011-05-16',1,61,'male',NULL,'2038-04-30',NULL,'O+',NULL,NULL,9448160877,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:49:00','2023-11-29 01:49:00'),(117,140,'Ms.  R','M','Yellurkar','588, Raj hans Galli, Angol, Belgaum.','588, Raj hans Galli, Angol, Belgaum.','1969-02-02','1998-01-01',1,13,'female',NULL,'2027-02-28',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:49:12','2023-11-29 01:49:12'),(118,141,'Vikrant','K','Shende','Plot No. 44, 4th Cross,  Ambedkar Nagar, Belgaum.','Plot No. 44, 4th Cross,  Ambedkar Nagar, Belgaum.','1978-07-15','2007-04-02',1,60,'male',NULL,'2036-07-31',NULL,'null','AETPV2619D','284060359891',9480537694,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:49:31','2023-11-29 01:49:31'),(119,142,'Giridhar','S','Sudi','S-2, Geetanjali Apprts., Rani Channamma Nagar, 1ST Stage, Belgaum.','S-2, Geetanjali Apprts., Rani Channamma Nagar, 1ST Stage, Belgaum.','1972-10-26','2007-05-28',1,29,'male',NULL,'2030-10-31',NULL,'O+','BNPPS0610D','778372075633',9738533405,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:53:23','2023-11-29 01:53:23'),(120,143,'Basavaraj','S','Jagati','805, Shree, Vasant Vihar Colony, 2nd stage, Rani Channamma  Nagar, Belgaum.','805, Shree, Vasant Vihar Colony, 2nd stage, Rani Channamma  Nagar, Belgaum.','1977-04-01','2003-09-17',1,24,'male',NULL,'2035-04-30',NULL,'B+',NULL,NULL,9845480758,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 01:53:36','2023-11-29 01:53:36'),(121,144,'Bahubali','S','Bakhedi','House No.9/b, Shastri Galli, Near Basavan Gudi,Basavan Kudachi, Belagavi 591124','House No.9/b, Shastri Galli, Near Basavan Gudi,Basavan Kudachi, Belagavi 591124','1994-11-20','2023-10-09',4,46,'male',NULL,'2052-11-30',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 01:58:41','2023-11-29 01:58:41'),(122,145,'Sachin','C','Kulkarni','Plot No. 5, Sugumna Appts., Mangalwar peth, Tilakwadi, Belguam.','Plot No. 5, Sugumna Appts., Mangalwar peth, Tilakwadi, Belguam.','1979-05-25','2008-08-14',1,25,'male',NULL,'2035-05-31',NULL,'O+',NULL,NULL,9886367506,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:00:04','2023-11-29 02:00:04'),(123,146,'Anupama','S','Awati','9th Cross, Bhagyanagar,  Tilakwadi, Belgaum.','9th Cross, Bhagyanagar,  Tilakwadi, Belgaum.','1973-05-30','2007-07-17',1,12,'female',NULL,'2031-05-31',NULL,'null','AEQPA2525N','989439839080',9464440109,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:00:30','2023-11-29 02:00:30'),(124,147,'Shri. Ranjit','B','Mokashi','H. No. 1107, Anantshayan Galli, Tilak Chouck, Belguam.','H. No. 1107, Anantshayan Galli, Tilak Chouck, Belguam.','1973-10-30','2002-07-11',1,10,'male',NULL,'2031-10-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:00:37','2023-11-29 02:00:37'),(125,148,'Mrs.Laxmi','A','Deshpande','Plot No. 34, Veerupax, Babu  Tarapad Nagar,  near Parvati Nagar, Udyambag, Belgaum.','Plot No. 34, Veerupax, Babu  Tarapad Nagar,  near Parvati Nagar, Udyambag, Belgaum.','1979-01-01','2007-03-05',1,5,'female',NULL,'2037-01-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:03:58','2023-11-29 02:03:58'),(126,149,'Gururaj','D','Gokak','H. No. 1735, Otari Galli,  Chikkodi.','H. No. 1735, Otari Galli,  Chikkodi.','1979-07-03','2006-08-01',1,29,'male',NULL,'2037-07-31',NULL,'O+',NULL,NULL,9448050777,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:04:05','2023-11-29 02:04:05'),(127,150,'Parasharam','Gangaram','Holkar','S/O Gangaram, House No.Kanakdas Colony, Ambedkar Nagar, Angol Belagavi Tilakwadi  Hukkeri Belagavi 590006','S/O Gangaram, House No.Kanakdas Colony, Ambedkar Nagar, Angol Belagavi Tilakwadi  Hukkeri Belagavi 590006','1977-07-20','2023-06-01',1,13,'male',NULL,'2035-07-31',NULL,'AB+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:04:15','2023-11-29 02:04:15'),(128,151,'Bhagyashri','R','Pandurangi','C/o B.V. Datar, 3rd Cross, Ganesh Marg, Hindwadi, Belgaum.','C/o B.V. Datar, 3rd Cross, Ganesh Marg, Hindwadi, Belgaum.','1976-07-04','2007-07-02',1,29,'female',NULL,'2034-07-31',NULL,'null','AINPP5438Q','401734275284',9980685658,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:05:14','2023-11-29 02:05:14'),(129,152,'Shri Prakash','S','Halannavar','Rani Channamma Road,  At Post  :  Kakati, Belgaum.','Rani Channamma Road,  At Post  :  Kakati, Belgaum.','1975-07-23','2010-09-13',1,13,'male',NULL,'2033-07-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:08:13','2023-11-29 02:08:13'),(130,153,'Vinayak','V','Kulkarni','Plot No. 58, Shrinidhi,  Yeashwant Cihar, Nanawadi, Belgaum.','Plot No. 58, Shrinidhi,  Yeashwant Cihar, Nanawadi, Belgaum.','1985-01-01','2009-08-03',1,25,'male',NULL,'2043-01-31',NULL,'B+',NULL,NULL,9972454903,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:09:59','2023-11-29 02:09:59'),(131,154,'Dhirendra','K','Katti','H. No. 288/1, Agarkar Road, Tilakwadi, Belgaum.','H. No. 288/1, Agarkar Road, Tilakwadi, Belgaum.','1967-07-04','2006-04-17',1,5,'male',NULL,'2025-07-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:10:03','2023-11-29 02:10:03'),(132,155,'Sujata','N','Bhavikatti','W/O S.M Hanchinal, Basava Nilaya, Near Vijaya Nagar High School, Vzakkalagiri, gadag- 582101','W/O S.M Hanchinal, Basava Nilaya, Near Vijaya Nagar High School, Vzakkalagiri, gadag- 582101','1981-05-14','2022-10-27',1,20,'female',NULL,'2039-05-31',NULL,'AB+','AOYPB3078F','211127430066',2535642542,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:12:04','2023-11-29 02:12:04'),(133,156,'Shri Uday','-','Inchal','H. No. 18, plot galli, Kakati, Belguam.','H. No. 18, plot galli, Kakati, Belguam.','1986-07-30','2010-11-08',1,20,'male',NULL,'2044-07-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:12:23','2023-11-29 02:12:23'),(134,157,'Sunil','-','Koramaddi','No. 83, 1st cross, Shivaji Road, Bhavani Nagar,  Belagavi.','No. 83, 1st cross, Shivaji Road, Bhavani Nagar,  Belagavi.','1989-06-25','2017-09-01',1,62,'male',NULL,'2047-06-30',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:16:38','2023-11-29 02:16:38'),(135,158,'Mr. Sachin','A','Patil','H. No. 364, Patil Galli, Angol, Belagavi.','H. No. 364, Patil Galli, Angol, Belagavi.','1988-10-17','2017-02-11',1,11,'male',NULL,'2046-10-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:17:29','2023-11-29 02:17:29'),(136,159,'Veena','B','Deshmukh','143, Gurukrupa, 2nd  Cross Vidya nagar, Belgaum.','143, Gurukrupa, 2nd  Cross Vidya nagar, Belgaum.','1969-04-26','2007-09-04',1,29,'female',NULL,'2027-04-30',NULL,'O+','AMDPD2820N','561623615670',9916508826,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:19:40','2023-11-29 02:19:40'),(137,160,'Shri. Santosh','B','Patil','At :Gudaganatti,  Post :Yamkanmardi TQ :  Hukkeri','At :Gudaganatti,  Post :Yamkanmardi TQ :  Hukkeri','1983-06-10','2008-12-01',1,33,'male',NULL,'2041-06-30',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:22:08','2023-11-29 02:22:08'),(138,161,'Vyasraj','R','Kulkarni','Plot No. 4, Vakratunda Residency, Kore galli,  Shahapur, Belguam.','Plot No. 4, Vakratunda Residency, Kore galli,  Shahapur, Belguam.','1986-04-26','2012-08-02',1,5,'male',NULL,'2044-04-30',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:22:19','2023-11-29 02:22:19'),(139,162,'Aashish','A','Gadgil','75/B, Vidyanagar, 4th cross, Angolmal, Belgaum.','75/B, Vidyanagar, 4th cross, Angolmal, Belgaum.','1986-05-21','2008-08-18',1,51,'male',NULL,'2044-05-31',NULL,'O+','AQHPG1185D','481631459741',9449292671,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:26:02','2023-11-29 02:26:02'),(140,163,'Shri. Ganesh','P','Bandi','S.B. Kamble Building, Choudeshwari Beedi,   Sonar Galli, Vadagaon, Belguam','S.B. Kamble Building, Choudeshwari Beedi,   Sonar Galli, Vadagaon, Belguam','1984-07-31','2011-11-21',1,20,'male',NULL,'2042-07-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:27:14','2023-11-29 02:27:14'),(141,164,'Dileep','-','Chougule','At : Karlakatta,  Post  :  Sambrani, Tq :  Haliyal (U. K) - 581329','At : Karlakatta,  Post  :  Sambrani, Tq :  Haliyal (U. K) - 581329','1986-04-30','2019-09-11',1,10,'male',NULL,'2044-04-30',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:27:49','2023-11-29 02:27:49'),(142,165,'Shreenidhi','R','Kulkarni','140, 6th cross, Chidambar Nagar, Belgaum.','140, 6th cross, Chidambar Nagar, Belgaum.','1983-06-14','2010-03-18',1,29,'female',NULL,'2041-06-30',NULL,'O+',NULL,NULL,8147401081,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:28:00','2023-11-29 02:28:00'),(143,166,'Abhishek','-','Deshmukh','Tejaswi, H. No. 260, 3rd  Cross, Sant Rajaram Marg, Chidambar Nagar, Belgaum.','Tejaswi, H. No. 260, 3rd  Cross, Sant Rajaram Marg, Chidambar Nagar, Belgaum.','1984-05-24','2009-08-05',1,29,'male',NULL,'2042-05-31',NULL,'null','AMVPA0789P','832818156082',9164503748,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:29:42','2023-11-29 02:29:42'),(144,167,'Geetanjali','S','Guggari','Plat No. 308, Gilginchi  Apprts, Somwarpeth, Tilakwadi, Belgaum.','Plat No. 308, Gilginchi  Apprts, Somwarpeth, Tilakwadi, Belgaum.','1967-07-02','2010-08-20',1,20,'female',NULL,'2027-07-31',NULL,'B+',NULL,NULL,9480737680,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:32:00','2023-11-29 02:32:00'),(145,168,'Ganesh','R','Chate','PlotNo. 134, Jay nagar,  Adjenct to Hindalga Road, Belgaum.','PlotNo. 134, Jay nagar,  Adjenct to Hindalga Road, Belgaum.','1986-09-21','2012-07-16',1,5,'male',NULL,'2044-09-30',NULL,'AB+',NULL,NULL,9964658103,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:35:54','2023-11-29 02:35:54'),(146,169,'Shailesh','M','Keshkamat','Flat, S/2, Hari Om Ashraya, CTS 2424/A, Kacheri Galli, Shahapur, Belgaum.','Flat, S/2, Hari Om Ashraya, CTS 2424/A, Kacheri Galli, Shahapur, Belgaum.','1978-07-29','2009-09-07',1,56,'male',NULL,'2036-07-31',NULL,'null','AMKPK3571G','311551133327',9449624168,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:38:45','2023-11-29 02:38:45'),(147,170,'Vinay','M','Murgod','Plot No. 57, Ashirwad, Autonagar, Belgaum590 016','H. No. 1079, Kotambari Galli, Bailhongal, Belgaum-591 102.','1988-05-29','2013-07-19',1,20,'male',NULL,'2046-05-31',NULL,'A+',NULL,NULL,9742429273,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:40:25','2023-11-29 02:40:25'),(148,171,'Sandeep','S','Bandi','\'c/o Subhash Kulkarni, House,Tilakwadi, belagavi','\'c/o Subhash Kulkarni, House,Tilakwadi, belagavi','1991-02-06','2022-03-02',1,63,'male',NULL,'2049-02-28',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:42:45','2023-11-29 02:42:45'),(149,172,'Snehal','Sagar','Santaji','H. No. 4064 / A, Kangral galli, Belgaum-590 001','H. No. 4064 / A, Kangral galli, Belgaum-590 001','1987-11-18','2013-09-16',1,10,'female',NULL,'2045-11-30',NULL,'O-','CFXPK8501G','811284336664',8549826723,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:45:23','2023-11-29 02:45:23'),(150,173,'Rangarao','Bajirao','Kumbar','A1/PO: yellimunnoli , Tal:Hukkeri, District Belagavi, Karnataka 591309','A1/PO: yellimunnoli , Tal:Hukkeri, District Belagavi, Karnataka 591309','1978-07-01','2022-03-04',1,65,'male',NULL,'2036-07-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:48:09','2023-11-29 02:48:09'),(151,174,'Veena','D','Badiger','C / o  Dr. Vilash. S. Pattar Dept. of Periodoutist KLE  VK Institute of dental Science, JNMC campus, Nehru Nagar, Belgaum.','D / o  D.M. Badiger, Sampada Building, Ramanagar, Dharwad','1987-07-14','2014-08-01',1,64,'female',NULL,'2045-07-31',NULL,'B+',NULL,NULL,8147526764,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:48:29','2023-11-29 02:48:29'),(152,175,'Nikhil','J','Inamdar','H. No. 6052, Gurudatt Nivas, Shivaji colony, Tilakwadi, Belgaum.','H. No. 6052, Gurudatt Nivas, Shivaji colony, Tilakwadi, Belgaum.','1987-02-13','2015-02-03',1,5,'male',NULL,'2045-02-28',NULL,'O+','ACYPI6358M','467525927829',9880940397,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 02:48:54','2023-11-29 02:48:54'),(153,176,'Sourabh','S','Inamdar','A1/PO: yellimunnoli , Tal:Hukkeri, District Belagavi, Karnataka 591309','A1/PO: yellimunnoli , Tal:Hukkeri, District Belagavi, Karnataka 591309','1996-06-30','2022-03-07',1,5,'male',NULL,'2054-06-30',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 02:52:27','2023-11-29 02:52:27'),(154,177,'Praveen','U','Kalkundri','Plot No. 16, Maratha Colony near SBI, ATM, Tilakwadi,  Belgaum-590 006','Plot No. 16, Maratha Colony near SBI, ATM, Tilakwadi,  Belgaum-590 006','1985-11-21','2014-02-01',1,10,'male',NULL,'2043-11-30',NULL,'B+','BRYPK6864J','774848942883',9844158801,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:00:41','2023-11-29 04:00:41'),(155,178,'Suraj','J','Patil','Trimurthy, CCB No. 52,  Mahadwar Road, Cross No.3, Belgaum.','Trimurthy, CCB No. 52,  Mahadwar Road, Cross No.3, Belgaum.','1978-09-20','2011-11-02',1,10,'male',NULL,'2036-09-30',NULL,'A+',NULL,NULL,9980432774,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:04:57','2023-11-29 04:04:57'),(156,179,'Maya','B','Upadhye (Chougule)','434, Devendra Building, Cangress Road,  Near Ist railway gate, Tilakwadi,  Belgaum-590 006','434, Devendra Building, Cangress Road,  Near Ist railway gate, Tilakwadi,  Belgaum-590 006','1967-04-21','1993-02-09',1,11,'female',NULL,'2025-04-30',NULL,'O+','AADPU5458K','891153091523',9480344144,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:08:24','2023-11-29 04:08:24'),(157,180,'Shivashankar','C','Jotawar','# 350,Naikwadi,PO : Maradimath, Taluka : Gokak, 591231 Dist.Belagavi','# 350,Naikwadi,PO : Maradimath, Taluka : Gokak, 591231 Dist.Belagavi','1970-01-08','2022-08-24',1,20,'male',NULL,'2028-01-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:09:08','2023-11-29 04:09:08'),(158,181,'Shri. Shivanand','K','Nerli','Rajaram Nagar, Udyambag, Belgaum.','Rajaram Nagar, Udyambag, Belgaum.','1986-12-08','2011-12-15',1,20,'male',NULL,'2044-12-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:09:28','2023-11-29 04:09:28'),(159,182,'Rajeev','K','Tavildar','Mayura Residency, Flat No 10, 4th cross, Bhagyanagar, Belgaum - 5900006','Mayura Residency, Flat No 10, 4th cross, Bhagyanagar, Belgaum - 5900006','1984-04-14','2012-09-13',1,5,'male',NULL,'2042-04-30',NULL,'O+',NULL,NULL,9972712121,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:09:33','2023-11-29 04:09:33'),(160,183,'Deepak','Shrinivas','Kulkarni','H. No. 1426, Basavan Galli,  Belagavi.','H. No. 1426, Basavan Galli,  Belagavi.','1984-05-08','2010-08-02',1,5,'male',NULL,'2042-05-31',NULL,'B+','BPEPK9031B','587098130826',8050504897,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:12:22','2023-11-29 04:12:22'),(161,184,'Mr. Anmol','J','Balikai','H. No. 568/3, Bhendigeri Chal, near Marathi School No. 34, Raghunath Peth, Angol,  Belgaum.','H. No. 568/3, Bhendigeri Chal, near Marathi School No. 34, Raghunath Peth, Angol,  Belgaum.','1981-12-20','2013-02-15',1,11,'male',NULL,'2039-12-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:14:06','2023-11-29 04:14:06'),(162,185,'Uttam','U','Deshpnade','CCB 46, Adarsha Nagar, 5th Cross, Hindwadi, Belagavi-590 009','CCB 46, Adarsha Nagar, 5th Cross, Hindwadi, Belagavi-590 009','1983-10-05','2016-04-26',1,5,'male',NULL,'2041-10-31',NULL,'O-','ANUPD9203D','350006440496',9880167092,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:15:55','2023-11-29 04:15:55'),(163,186,'Tushar','T','Hawal','3471/28/ Samadevi  Galli, Belgaum.','3471/28/ Samadevi  Galli, Belgaum.','1987-11-18','2012-10-12',1,66,'male',NULL,'2045-11-30',NULL,'AB+',NULL,NULL,9738854380,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:15:59','2023-11-29 04:15:59'),(164,187,'Mr. Umesh','M','Birje','Ward no :05 Ambedkar nagar angol belagaum.','Ward no :05 Ambedkar nagar angol belagaum.','1984-07-28','2011-10-01',1,10,'male',NULL,'2042-07-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:19:03','2023-11-29 04:19:03'),(165,188,'Mahesh','R','Katabugol','\'House No.201, kanakdas Galli, Angol Belagavi 590006','\'House No.201, kanakdas Galli, Angol Belagavi 590006','1994-05-31','2022-04-01',1,40,'male',NULL,'2052-05-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:19:08','2023-11-29 04:19:08'),(166,189,'Anand','Anil','Kulkarni','68, Main Road, Hindwadi, Belgaum-590 011','68, Main Road, Hindwadi, Belgaum-590 011','1986-07-03','2013-05-20',1,5,'female',NULL,'2044-07-21',NULL,'A+',NULL,NULL,7829352835,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:19:56','2023-11-29 04:19:56'),(167,190,'Balbheem','N','Nadpurohit','1st Floor, 1st cross, Jai Malhar Building, Anand Nagar, Vadagaon, Belagavi-590 005.','Plot No. 34, Survey No. 102, Sambaji Nagar, Vadagaon,  Belagavi-590 005','1985-09-29','2016-08-01',1,5,'male',NULL,'2043-09-30',NULL,'O+','AFZPN7161H','985353937518',9620340708,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:20:16','2023-11-29 04:20:16'),(168,191,'Mr. Bharat','C','Hundre','Khadarwad Cross, Devendra Nagar, Udyambag, Belagavi-590 008.','Khadarwad Cross, Devendra Nagar, Udyambag, Belagavi-590 008.','1998-05-24','2022-03-02',1,10,'male',NULL,'2056-05-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:22:35','2023-11-29 04:22:35'),(169,192,'Mr.Mahesh','R','Patil','\'House No.147,1st Stage, RC Nagar Belgaum 590006','\'House No.147,1st Stage, RC Nagar Belgaum 590006','1995-12-19','2022-04-01',1,33,'male',NULL,'2053-12-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:26:09','2023-11-29 04:26:09'),(170,193,'Bharama','Kuber','Nayak','\'House No.290/B, Valmiki Galli, Majagaon Belagavi 590006','\'House No.290/B, Valmiki Galli, Majagaon Belagavi 590006','1988-07-29','2022-04-01',1,43,'male',NULL,'2046-07-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:26:13','2023-11-29 04:26:13'),(171,194,'Sneha','S','Nargundkar','Plot No. 22, Vinayak Nagar, Hindalaga Road, Belagavi-591 108','M-O-2, Housing Board colony, Curti, Ponda, Goa-403 401','1988-05-03','2016-08-01',1,67,'female',NULL,'2046-05-31',NULL,'O+','AJOPN4874C','790644398102',9422605808,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:27:55','2023-11-29 04:27:55'),(172,195,'Mr.Vinay','N','Marihal','House No.3855,Kotwal Galli, belagavi','House No.3855,Kotwal Galli, belagavi','1990-08-23','2022-04-01',1,20,'male',NULL,'2048-08-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:29:33','2023-11-29 04:29:33'),(173,196,'Prashant','P','Kakkamari','Plot No. 531, 2nd stage, Ranichannamma nagar, Belguam-590 006','Plot No. 531, 2nd stage, Ranichannamma nagar, Belguam-590 006','1988-05-01','2013-09-21',1,27,'male',NULL,'2046-05-31',NULL,'null',NULL,NULL,8762813269,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:31:23','2023-11-29 04:31:23'),(174,197,'Mr.Praveen','Chandrakant','Sattyennavar','Plot No.70,9th Corss, Gokul Nagar, Mutaga, Belagavi','Plot No.70,9th Corss, Gokul Nagar, Mutaga, Belagavi','1990-08-15','2023-05-08',1,34,'male',NULL,'2048-08-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:32:55','2023-11-29 04:32:55'),(175,198,'Prakash','Huchchappa','Bellad','\'Plot No.05,new 3rd Cross, Samarth Nagar,Manickbag Belagavi','\'Plot No.05,new 3rd Cross, Samarth Nagar,Manickbag Belagavi','1992-01-14','2022-04-01',1,20,'male',NULL,'2050-01-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:33:55','2023-11-29 04:33:55'),(176,199,'Sagar','S','Santaji','Plot No. 4, 4th Cross, New Good Shed Road,  Belagavi-590 001','Plot No. 4, 4th Cross, New Good Shed Road,  Belagavi-590 001','1991-07-20','2016-09-15',1,10,'male',NULL,'2049-07-31',NULL,'B+','DRTPS5152N','345546534908',8951137898,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:34:42','2023-11-29 04:34:42'),(177,200,'Mr.Neminath','Mahaveer','Padmannavar','House No.1403/B, Basavan Galli, Belagavi 590001','House No.1403/B, Basavan Galli, Belagavi 590001','1983-11-17','2023-06-01',1,58,'male',NULL,'2041-11-30',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:38:09','2023-11-29 04:38:09'),(178,201,'Shivappa','B','Ullagaddi','H. No. 145,  Mukund  Building, Jere galli, Angol, Belgaum','H. No. 145,  Mukund  Building, Jere galli, Angol, Belgaum','1977-03-10','2007-09-04',1,20,'male',NULL,'2035-03-31',NULL,'AB+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:39:29','2023-11-29 04:39:29'),(179,202,'Kiran','D','Kattimani','H. No. 44, Hosa Oni, Mission Compound, Karwar Road, Hubli- 29','H. No. 44, Hosa Oni, Mission Compound, Karwar Road, Hubli- 29','1986-12-08','2013-11-29',7,68,'male',NULL,'2044-12-31',NULL,'null',NULL,NULL,8951640346,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:42:05','2023-11-29 04:42:05'),(180,203,'Shri. Shridhar','R','Latkar','H. No. 1717/1A-2, Kelkar Bhag,  Belgaum.','H. No. 1717/1A-2, Kelkar Bhag,  Belgaum.','1977-07-06','2007-09-14',1,5,'male',NULL,'2035-07-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:44:00','2023-11-29 04:44:00'),(181,204,'Vaishnavi','R','Mathad','104, Nikhila Apprts., Guruwar peth, Tilakwadi, Belguam.','104, Nikhila Apprts., Guruwar peth, Tilakwadi, Belguam.','1979-03-29','2006-02-06',1,5,'female',NULL,'2037-03-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:44:28','2023-11-29 04:44:28'),(182,205,'Mahesh','A','Kori','C/o Mahanth Krupa, Opp. Kerudi Hospital, Extension area, Bagalkot-587 101','C/o Mahanth Krupa, Opp. Kerudi Hospital, Extension area, Bagalkot-587 101','1979-08-05','2014-08-18',1,20,'male',NULL,'2037-08-31',NULL,'null',NULL,NULL,8050928970,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:47:05','2023-11-29 04:47:05'),(183,206,'Shri. Shekhar','M','Katamble','43, Shivaja Colony, Tilakwadi, Belgaum.','43, Shivaja Colony, Tilakwadi, Belgaum.','1974-02-23','2002-06-05',1,10,'male',NULL,'2032-02-29',NULL,'AB+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:49:24','2023-11-29 04:49:24'),(184,207,'Pratijanya','S','Ajawan','Plot No. 58, Yashwant Vihar  colony, Nanawadi, Belagav,','Plot No. 58, Yashwant Vihar  colony, Nanawadi, Belagav,','1990-04-18','2017-04-18',1,20,'female',NULL,'2048-04-30',NULL,'A-','AVRPD5272B','619062413387',9591119949,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:49:29','2023-11-29 04:49:29'),(185,208,'Mukund','R','Kulkarni','C/o R.H. Kulkarni, H. No. 226, Near 2nd Railway gate,  Tilakwadi, Belgaum.','C/o R.H. Kulkarni, H. No. 226, Near 2nd Railway gate,  Tilakwadi, Belgaum.','1975-11-26','1997-08-24',1,5,'male',NULL,'2033-11-30',NULL,'AB+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:50:26','2023-11-29 04:50:26'),(186,209,'Yogita','N','Potdar','Plot No. 33, Mahabableshwar Nagar, Near Hindalaga Ganapati Temple, Belgaum','Plot No. 33, Mahabableshwar Nagar, Near Hindalaga Ganapati Temple, Belgaum','1985-07-16','2014-08-11',1,10,'female',NULL,'2043-06-30',NULL,'O+',NULL,NULL,9741456237,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:52:56','2023-11-29 04:52:56'),(187,210,'Shri. Basavaraj','N','Chougula','Plot No. 94, 1st Stage, Rani  Channamma nagar, Belgaum.','Plot No. 94, 1st Stage, Rani  Channamma nagar, Belgaum.','1978-07-04','2005-08-22',1,20,'male',NULL,'2036-07-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:53:04','2023-11-29 04:53:04'),(188,211,'Vaidehi','P','Deshpande','Plot No. 58, Yashwant Vihar  colony, Nanawadi, Belagav,','Plot No. 58, Yashwant Vihar  colony, Nanawadi, Belagav,','1989-04-05','2017-08-31',1,5,'female',NULL,'2047-04-30',NULL,'AB-','AVRPD5272B','619062413387',9591119949,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:53:51','2023-11-29 04:53:51'),(189,212,'Tanvi','Durgesh','Gangodkar','H. No. 111, Shah Buidling, Mangalwar peth, Tilakwadi, Belgaum.','H. No. 111, Shah Buidling, Mangalwar peth, Tilakwadi, Belgaum.','1990-04-02','2012-08-01',1,5,'female',NULL,'2048-04-30',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:56:04','2023-11-29 04:56:04'),(190,213,'Shri. Mahesh','S','Moogbasav','381, C/o Chandrakant Patil, Tanaji Galli,  Near Ganesh Temple, Angol, Belgaum.','381, C/o Chandrakant Patil, Tanaji Galli,  Near Ganesh Temple, Angol, Belgaum.','1972-06-01','2007-09-03',1,20,'male',NULL,'2030-06-30',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 04:58:25','2023-11-29 04:58:25'),(191,214,'Akhil','A','Deshpande','\"Sai Deep\", Plot No. 111 / 1 / 1B, Dwarkanagar, Ist  cross, Mandoli Road., Belgaum','\"Sai Deep\", Plot No. 111 / 1 / 1B, Dwarkanagar, Ist  cross, Mandoli Road., Belgaum','1988-03-31','2014-09-12',1,5,'male',NULL,'2046-03-31',NULL,'A+',NULL,NULL,9008479574,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 04:59:28','2023-11-29 04:59:28'),(192,215,'Ramesh','B','Koti','Ward No. 4, Nekar Galli, Bilagi, Bagalkot-587 116.','Ward No. 4, Nekar Galli, Bilagi, Bagalkot-587 116.','1984-03-25','2017-09-08',1,20,'male',NULL,'2042-03-31',NULL,'O+','BLBPK5759H','295050686791',9535953509,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:00:24','2023-11-29 05:00:24'),(193,216,'Shri.Shrinivas','M','Kulkarni','Shrinivas Building, Hindu Nagar,  Angol, Belgaum.','Shrinivas Building, Hindu Nagar,  Angol, Belgaum.','1974-07-22','2000-12-26',1,23,'male',NULL,'2032-07-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:02:36','2023-11-29 05:02:36'),(194,217,'Prajakta','S','Patil','16 / 2, \"Brahma\", ChidambarNagar,  Belgaum-590 006','16 / 2, \"Brahma\", ChidambarNagar,  Belgaum-590 006','1990-01-16','2014-09-12',1,10,'female',NULL,'2048-01-31',NULL,'A+',NULL,NULL,9538312226,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:03:21','2023-11-29 05:03:21'),(195,218,'Rajesh','P','Shrikhande','CCB No. 231, Sambhaji Nagar, Vadagaon, Belgaum.','CCB No. 231, Sambhaji Nagar, Vadagaon, Belgaum.','1990-02-03','2013-02-15',1,28,'male',NULL,'2048-02-29',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:04:23','2023-11-29 05:04:23'),(196,219,'Priyanka','D','Joshi','Ward No. 4, Nekar Galli, Bilagi, Bagalkot-587 116.','Ward No. 4, Nekar Galli, Bilagi, Bagalkot-587 116.','1985-07-14','2017-10-11',1,20,'female',NULL,'2043-07-31',NULL,'A+','AOLPJ6582K','644186790525',8904577163,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:05:13','2023-11-29 05:05:13'),(197,220,'Mr. Rajendra','S','Deshpande','Shalgar Apprts.,1st Floor, F-4,  Acharya Galli, Shahapur, Belgaum.','Shalgar Apprts.,1st Floor, F-4,  Acharya Galli, Shahapur, Belgaum.','1986-05-03','2007-09-03',1,5,'male',NULL,'2044-05-31',NULL,'B-',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:05:30','2023-11-29 05:05:30'),(198,221,'Roopa','K','Rao','Krishna Kunj, 9th Cross Bhagyanagar,  Tilakwadi, Belgaum.','Krishna Kunj, 9th Cross Bhagyanagar,  Tilakwadi, Belgaum.','1984-01-28','2007-04-02',1,5,'female',NULL,'2042-01-31',NULL,'A+',NULL,NULL,9611001232,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:07:02','2023-11-29 05:07:02'),(199,222,'Shri.Vinayak','V','Simu','H. No. 283, Maruti Galli, Angol, Belguam.','H. No. 283, Maruti Galli, Angol, Belguam.','1982-07-22','2008-08-12',1,10,'male',NULL,'2040-07-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:09:23','2023-11-29 05:09:23'),(200,223,'Vishweshkumar','K','Aithal','C / O V.I. Kundangar, H No. 889 / A, Eshavasyam, Near Shri Ram Mandir, Acharya galli, Shahapur, Belagavi-590 003.','Skanda Shankar, Plot No. 96, 2nd cross, Daneshwar Nagar, Vidyagiri,  Dharwad-580 004.','1990-10-22','2017-10-23',1,5,'male',NULL,'2048-10-31',NULL,'O+','BHAPA3500M','239950260917',8123553947,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:09:43','2023-11-29 05:09:43'),(201,224,'Ashwin','S','Karekar','H. No. 3348/D, Gondhali Galli, Belgaum.','H. No. 3348/D, Gondhali Galli, Belgaum.','1975-10-02','1993-10-20',1,10,'male',NULL,'2033-10-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:11:08','2023-11-29 05:11:08'),(202,225,'Vivekkumar','G','Tivari','H. No. 26, 3rd floor, Behind Ganapati Temple, Rajdhani Colony, Gokul Road, Hubli-580 030','H. No. 26, 3rd floor, Behind Ganapati Temple, Rajdhani Colony, Gokul Road, Hubli-580 030','1986-03-23','2013-07-22',1,5,'male',NULL,'2044-03-31',NULL,'null',NULL,NULL,9590138899,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:11:52','2023-11-29 05:11:52'),(203,226,'Jyothi','B','R','H. No. 293 / 8, Maradimath, Gokak=591231','H. No. 293 / 8, Maradimath, Gokak=591231','1991-04-22','2019-06-01',1,20,'female',NULL,'2049-04-30',NULL,'B+','APVPJ9681E',NULL,7829545971,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:15:58','2023-11-29 05:15:58'),(204,227,'Shrirangnath','-','Avadhani','H. No. 15 /A, Pratiksha, Kavi plots, Station Road, Bijapur Railway Station, Bijapur-586 101','H. No. 15 /A, Pratiksha, Kavi plots, Station Road, Bijapur Railway Station, Bijapur-586 101','1989-07-02','2016-01-04',1,5,'male',NULL,'2047-01-31',NULL,'O+',NULL,NULL,9008878759,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:16:02','2023-11-29 05:16:02'),(205,228,'Praveen','B','Parmaj','H. No. 321/A, Mahaveer nagar, Udyambag, Khanapur Road, Belgaum.','H. No. 321/A, Mahaveer nagar, Udyambag, Khanapur Road, Belgaum.','1986-02-19','2013-02-14',1,11,'male',NULL,'2044-02-29',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:17:30','2023-11-29 05:17:30'),(206,229,'Shri. Nagaraj','D','Pattar','H. No. 1065, Rameshwar Nagar, Macchhe, Belgaum.','H. No. 1065, Rameshwar Nagar, Macchhe, Belgaum.','1987-03-15','2011-10-01',1,69,'male',NULL,'2045-03-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:19:40','2023-11-29 05:19:40'),(207,230,'Pradnya','H','Kulkarni','W / o Harshit B Kulkarni, Guru Krupa, Flat No. 204, Hem Ashraya Apartment, Kaivalya Nagar, Belagavi','W / o Harshit B Kulkarni, Guru Krupa, Flat No. 204, Hem Ashraya Apartment, Kaivalya Nagar, Belagavi','1989-01-17','2016-01-16',1,5,'female',NULL,'2047-01-31',NULL,'B+',NULL,NULL,9538570964,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:19:42','2023-11-29 05:19:42'),(208,231,'Aditya','Anand','Dev','H. No. 1495, Basavan Galli, Shahapur,  Belgaum','H. No. 1495, Basavan Galli, Shahapur,  Belgaum.','1994-05-07','2012-08-01',1,5,'male',NULL,'2052-05-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:21:52','2023-11-29 05:21:52'),(209,232,'Venkatesh','-','Deshpande','Plot No. 480, Scheme No. 13, Near Ganapati Temple, T.V. Centre,  Belagavi-590 001.','Plot No. 480, Scheme No. 13, Near Ganapati Temple, T.V. Centre,  Belagavi-590 001.','1987-10-31','2016-08-01',1,5,'male',NULL,'2045-10-31',NULL,'null',NULL,NULL,9740414350,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:25:00','2023-11-29 05:25:00'),(210,233,'Shri. Shrinivas','S','Mahajan','Laxmi Niavas, Plot No. 156, KSRTC Colony, Shindoli, Belgaum.','Laxmi Niavas, Plot No. 156, KSRTC Colony, Shindoli, Belgaum.','1970-07-14','2008-12-01',1,25,'male',NULL,'2028-07-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:25:32','2023-11-29 05:25:32'),(211,234,'Gajanan','P','Kadam','205, Ambica landmark, 2nd cross, Bhagyanagar, Belagavi-590 006.','Plot No. 2, Krishna, Syndicate Bank Colony, Babale Galli, Angol, Belagavi-590 007.','1963-09-04','2021-10-04',1,10,'male',NULL,'2036-10-31',NULL,'O+','AFJPP1799K',NULL,9448030009,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:27:55','2023-11-29 05:27:55'),(212,235,'Praveen','-','Mirji','Sector No. 32, Plot No. 59, Navanagar,  Bagalkot-587 101','Sector No. 32, Plot No. 59, Navanagar,  Bagalkot-587 101','1980-07-22','2016-08-02',1,5,'male',NULL,'2038-07-31',NULL,'A+',NULL,NULL,9900531456,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:29:28','2023-11-29 05:29:28'),(213,236,'Shri. Anand','G','Kulkarni','Bhagyashree Building, 10th Cross, Bhagyanagar, Belgaum.','Bhagyashree Building, 10th Cross, Bhagyanagar, Belgaum.','1984-01-05','2008-12-01',1,23,'male',NULL,'2042-01-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:29:49','2023-11-29 05:29:49'),(214,237,'Seema','K','Sawant','H. No. 53/1, Hosur, Basawan galli, Shahapur, Belgaum.','H. No. 53/1, Hosur, Basawan galli, Shahapur, Belgaum.','1985-02-02','2007-09-09',1,10,'female',NULL,'2043-02-28',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:30:18','2023-11-29 05:30:18'),(215,238,'Shri. Raghvendra','K','Shinagi','Rajaram Nagar, Udyambag, Belgaum.','Rajaram Nagar, Udyambag, Belgaum.','1989-11-02','2013-02-06',1,35,'male',NULL,'2047-11-30',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:34:00','2023-11-29 05:34:00'),(216,239,'Sanjay','-','Alagwadi','Krishnai Sankul, H. No. 1050, Anantshayan Galli, Belgaum.','Krishnai Sankul, H. No. 1050, Anantshayan Galli, Belgaum.','1974-09-09','2003-09-22',1,23,'male',NULL,'2032-09-30',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:35:53','2023-11-29 05:35:53'),(217,240,'Manjunath','G','A','H. No. 429, 7th Cross, ITI Layout, 3rd Stage, Opp. R.R. Arch, Mysore Road, Banalore-560 0039','S/o Avalappa Goravinakalahalli, Laxmipura(P), Srinivasapura (TQ),  Kolar-563 135','1985-06-01','2017-07-05',1,20,'male',NULL,'2043-06-30',NULL,'A+',NULL,NULL,7026723766,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:36:22','2023-11-29 05:36:22'),(218,241,'Smt. Radkhika','K','Neraserkar','Rajaram nagar, (b), GIT Road, Udyambag, Belgaum.','Rajaram nagar, (b), GIT Road, Udyambag, Belgaum.','1974-05-28','2006-05-05',1,10,'female',NULL,'2032-05-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:39:19','2023-11-29 05:39:19'),(219,242,'Snehal','D','Kulkarni','Plot No.34,\'Nilesh\',Hindalga Road, Vinayak Nagar, Belagavi 591108','Plot No.34,\'Nilesh\',Hindalga Road, Vinayak Nagar, Belagavi 591108','1991-07-04','2021-10-11',1,70,'female',NULL,'2049-07-31',NULL,'AB-','EGEPK3869P','776657035613',9740825609,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:39:29','2023-11-29 05:39:29'),(220,243,'Shri. Mahesh','M','Sattigeri','397/8, Savarkar Road, Tilakwadi, Belgaum.','397/8, Savarkar Road, Tilakwadi, Belgaum.','1968-07-04','1996-03-01',1,5,'male',NULL,'2026-07-31',NULL,'null',NULL,NULL,9449702248,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:40:50','2023-11-29 05:40:50'),(221,244,'Prabhakar','B','Lakkundi','381, C/o Chandrakant Patil, Tanaji Galli, Near Ganesh Temple Angol, Belgaum.','381, C/o Chandrakant Patil, Tanaji Galli, Near Ganesh Temple Angol, Belgaum.','1985-06-17','2012-08-01',1,20,'male',NULL,'2043-06-30',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:41:26','2023-11-29 05:41:26'),(222,245,'Mr.Rahul','R','Patil','Shivaji Nagar,Khadarwadi, Udyambag, Belagavi 590008','Shivaji Nagar,Khadarwadi, Udyambag, Belagavi 590008','1996-06-03','2022-04-01',1,10,'male',NULL,'2054-06-30',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:43:11','2023-11-29 05:43:11'),(223,246,'Mr.Kush','Appaya','Patil','House No.143,Laxmi Galli,Honaga, Belagavi 591156','House No.143,Laxmi Galli,Honaga, Belagavi 591156','1987-03-09','2023-05-08',1,10,'male',NULL,'2045-03-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:48:17','2023-11-29 05:48:17'),(224,247,'Santosh','S','Kulkarni','Venkatramana, Plot No.262, Sant Rajaram Marg, 3rd Cross, Chidambar Nagar, Belagavi-590006','Venkatramana, Plot No.262, Sant Rajaram Marg, 3rd Cross, Chidambar Nagar, Belagavi-590006','1992-06-22','2021-10-18',1,29,'male',NULL,'2050-06-30',NULL,'B+','EIYPK6499D','414437202480',9481322678,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:49:11','2023-11-29 05:49:11'),(225,248,'Manisha','R','Mokashi','H. No. 1107, Anantshayan Galli, Tilak Chouck, Belguam.','H. No. 1107, Anantshayan Galli, Tilak Chouck, Belguam.','1976-10-12','2012-08-21',1,10,'female',NULL,'2034-10-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:49:26','2023-11-29 05:49:26'),(226,249,'Mrs.Deepa','M','Badiger','House No.520, \'Pancharatna \" Building, Mahaveer nagar, Khanapur road, Belagavi','House No.520, \'Pancharatna \" Building, Mahaveer nagar, Khanapur road, Belagavi','1995-02-14','2023-05-08',1,14,'female',NULL,'2053-02-28',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:52:33','2023-11-29 05:52:33'),(227,250,'Amruta','-','Ghadashi {Giri}','31/A, Laxmi Nagar,  Ganeshpur, Belgaum.','31/A, Laxmi Nagar,  Ganeshpur, Belgaum.','1988-02-21','2013-02-15',1,10,'female',NULL,'2046-02-28',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:53:48','2023-11-29 05:53:48'),(228,251,'Dr. Harish','H','Kenchannavar','Plot No. 27, 2nd Stage,  Kaveri Nagar, Belguam.','Plot No. 27, 2nd Stage,  Kaveri Nagar, Belguam.','1978-01-14','2002-09-21',1,22,'male',NULL,'2036-01-31',NULL,'null',NULL,NULL,9901375126,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:54:48','2023-11-29 05:54:48'),(229,252,'Prasann','D','Kulkarni','House No.35,Matru Pitru Krupa, Sindolli Cross, Basavan Kudachi, Belagavi 591124','House No.35,Matru Pitru Krupa, Sindolli Cross, Basavan Kudachi, Belagavi 591124','1986-07-27','2021-11-15',1,5,'male',NULL,'2044-07-31',NULL,'B+','BFSPK3325N','417436040584',9036849123,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 05:56:33','2023-11-29 05:56:33'),(230,253,'Shubhangi','-','Kangralkar','1254, Basavan Galli, Shahapur, Belgaum.','1254, Basavan Galli, Shahapur, Belgaum.','1978-07-02','2011-06-03',1,10,'female',NULL,'2036-07-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:58:06','2023-11-29 05:58:06'),(231,254,'Mr.Sainath','-','Kumbhar','House No.612, Shivaji Nagar, At Post Garalgunji Taluka Khanapur Belagavi 591302','House No.612, Shivaji Nagar, At Post Garalgunji Taluka Khanapur Belagavi 591302','1999-04-15','2023-10-03',1,71,'male',NULL,'2057-04-30',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-29 05:58:18','2023-11-29 05:58:18'),(232,255,'Padmavati','S','Dandannavar','H. No. 2372, Mahantesh Nagar, Belgaum.','H. No. 2372, Mahantesh Nagar, Belgaum.','1973-12-10','2001-09-18',1,72,'female',NULL,'2031-12-31',NULL,'null',NULL,NULL,9886230332,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 06:02:21','2023-11-29 06:02:21'),(233,256,'Rakesh','-','Kadkol','308, Rani Channamma Nagar, 1st Stage, Belguam.','308, Rani Channamma Nagar, 1st Stage, Belguam.','1973-07-24','2003-09-29',1,29,'male',NULL,'2031-07-31',NULL,'null',NULL,NULL,8277552389,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 06:06:06','2023-11-29 06:06:06'),(234,257,'Shri.Pandurang','S','Upparamani','Plot No. 1683, Mahaveer Nagar, Peeranwadi,  Udyambag, Belguam.','Plot No. 1683, Mahaveer Nagar, Peeranwadi,  Udyambag, Belguam.','1967-01-30','2005-06-15',1,21,'male',NULL,'2025-01-31',NULL,'AB+',NULL,NULL,9242266764,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 06:11:09','2023-11-29 06:11:09'),(235,258,'Shri. Kadayya','S','Mathad','Plot No. 965, Mahaveer  Nagar, Khadarwadi Road, Udyambag, Belguam.','Plot No. 965, Mahaveer  Nagar, Khadarwadi Road, Udyambag, Belguam.','1983-07-16','2006-11-13',1,20,'male',NULL,'2041-07-31',NULL,'A+',NULL,NULL,9844665758,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 06:15:23','2023-11-29 06:15:23'),(236,259,'Shri. Sudhindra','K','Madi','T-9, Star Towars, Opp.  Canara Bank, near RPD Cross, Tilakwadi, Belgaum.','T-9, Star Towars, Opp.  Canara Bank, near RPD Cross, Tilakwadi, Belgaum.','1968-02-02','2007-03-01',1,5,'male',NULL,'2026-02-28',NULL,'null',NULL,NULL,9986766543,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 06:18:36','2023-11-29 06:18:36'),(237,260,'Vijay','S','Rajpurohit','No. 51, Chidambar Nagar, Angol, Belgaum.','No. 51, Chidambar Nagar, Angol, Belgaum.','1975-05-23','2010-03-03',1,25,'male',NULL,'2033-05-31',NULL,'B+','ADVPR3004P','510863169614',9242109675,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 06:19:36','2023-11-29 06:19:36'),(238,261,'Neelakanth','-','Karekar','C/o S.K. Kakatikar, H. No.  1352, Plot No. 7, Saraswati Nagar, 3rd Cross, Ganeshpur, Belgaum.','C/o S.K. Kakatikar, H. No.  1352, Plot No. 7, Saraswati Nagar, 3rd Cross, Ganeshpur, Belgaum.','1984-11-23','2007-09-03',1,27,'male',NULL,'2042-11-30',NULL,'null',NULL,NULL,9916609481,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 06:21:36','2023-11-29 06:21:36'),(239,262,'Sudhindra','B','Deshpande','Plot No. 77, Rani  Channamma Nagar, Belgaum.','Plot No. 77, Rani  Channamma Nagar, Belgaum.','1982-10-19','2008-04-15',1,5,'male',NULL,'2040-10-30',NULL,'null',NULL,NULL,9035280717,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 06:24:23','2023-11-29 06:24:23'),(240,263,'Shubha','-','Sanu','H. No. 2748, Wangibol, Mahadwar  Road, Kolhapur-416 012','H. No. 2748, Wangibol, Mahadwar  Road, Kolhapur-416 012','1979-09-02','2016-08-10',1,5,'female',NULL,'2037-09-30',NULL,'O+',NULL,NULL,9405040949,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 06:29:09','2023-11-29 06:29:09'),(241,264,'M','M','Math','\"B\" wing, 204, Ganesh Park, 2nd Cross Bhagyanagar, Tilakwadi, Belgaum.','\"B\" wing, 204, Ganesh Park, 2nd Cross Bhagyanagar, Tilakwadi, Belgaum.','1967-07-22','1989-08-26',1,24,'male',NULL,'2025-07-31',NULL,'A+','ACVPM1986C','998647745685',9945001309,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 06:30:24','2023-11-29 06:30:24'),(242,265,'Shrivatsa','D','Perur','H. No.  122 /B/2, Vipaynagar, Bubli-32','H. No.  122 /B/2, Vipaynagar, Bubli-32','1992-07-10','2016-09-15',1,5,'male',NULL,'2050-07-31',NULL,'null',NULL,NULL,9845371193,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-29 06:34:34','2023-11-29 06:34:34'),(243,266,'Dr. Roopali','D','Kavilkar','H. No. 38, Shri Shivaleela, Ashraya Colony, Nanawadi, Belguam.','H. No. 38, Shri Shivaleela, Ashraya Colony, Nanawadi, Belguam.','1971-09-04','2004-03-01',4,46,'female',NULL,'2029-09-30',NULL,'AB+',NULL,NULL,9341123755,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-30 23:30:41','2023-11-30 23:30:41'),(244,267,'Kiran','K','Tangod','S/O Shankar Pirappa Upparamani, Sy.No.321/1a, FF1, Kalpavruksha Apartment, Mahaveer Nagar, Post Udyambag','S/O Shankar Pirappa Upparamani, Sy.No.321/1a, FF1, Kalpavruksha Apartment, Mahaveer Nagar, Post Udyambag','1976-11-07','2001-09-18',1,29,'male',NULL,'2034-11-30',NULL,'B+','AEQPT0041J','449515758694',4565852365,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-30 23:31:28','2023-11-30 23:31:28'),(245,268,'Ms. Nishita','R','Tadkodkar','Flat No. 404, \"A\" wing, Nasco elegence, 4th cross, Bhagyanagar, Tilakwadi, Belgaum.','Flat No. 404, \"A\" wing, Nasco elegence, 4th cross, Bhagyanagar, Tilakwadi, Belgaum.','1971-11-16','2000-04-10',1,5,'female',NULL,'2029-11-30',NULL,'A+',NULL,NULL,9886842529,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-30 23:34:26','2023-11-30 23:34:26'),(246,269,'Sanjeev','S','Sannakki','H. No. 140, Ratanashree,  Guruprasad Nagar, Belgaum','H. No. 140, Ratanashree,  Guruprasad Nagar, Belgaum','1975-08-15','2004-08-20',1,53,'male',NULL,'2033-08-31',NULL,'O+','BBTPS6288P','754255728835',9448853277,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-30 23:35:51','2023-11-30 23:35:51'),(247,270,'Shivappa','-','Balekundri','Rajaram nagar, A ,  Udyambag, Belgaum','Rajaram nagar, A ,  Udyambag, Belgaum','1985-07-31','2019-04-01',1,20,'male',NULL,'2043-07-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-30 23:37:15','2023-11-30 23:37:15'),(248,271,'Shri.Ritesh','S','Dharmayat','Plot No. 20, Scheme No. 40, Double Road, Hanuman  Nagar, Belguam','Plot No. 20, Scheme No. 40, Double Road, Hanuman  Nagar, Belguam','1974-05-31','2004-03-01',1,20,'male',NULL,'2032-05-31',NULL,'B+',NULL,NULL,9448989390,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-30 23:38:19','2023-11-30 23:38:19'),(249,272,'Mrs.Swati','S','Kanbargi','277/1A,F.No.-14 Nagesh Appartment Agarkar Road, Tilkawadi, Belagavi','277/1A,F.No.-14 Nagesh Appartment Agarkar Road, Tilkawadi, Belagavi','1989-01-06','2022-08-16',1,10,'female',NULL,'2047-01-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-30 23:38:39','2023-11-30 23:38:39'),(250,273,'D','A','Kulkarni','Plot No. 66, Shrinivas, Guruprasad Nagar, Belgaum.','Plot No. 66, Shrinivas, Guruprasad Nagar, Belgaum.','1965-09-13','1987-07-23',1,25,'male',NULL,'2023-09-30',NULL,'A-','AETPK7590Q','461798886734',9845486735,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-30 23:40:27','2023-11-30 23:40:27'),(251,274,'Somayya','-','Pujeri','H.No.119,Kailas Nagar, Sulebhavi, Taluka Dist.Belagavi 591103','H.No.119,Kailas Nagar, Sulebhavi, Taluka Dist.Belagavi 591103','1994-07-15','2023-02-01',1,26,'male',NULL,'2052-07-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-30 23:42:33','2023-11-30 23:42:33'),(252,275,'Mrs.Rutuja','Devappa','Bastwadkar','h.No.610 A, Ganapat Galli, Khadarwadi- Belagavi 5900014','h.No.610 A, Ganapat Galli, Khadarwadi- Belagavi 5900014','2000-12-30','2023-05-02',1,10,'female',NULL,'2058-12-31',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-30 23:43:16','2023-11-30 23:43:16'),(253,276,'Shri Amit','V','Prasadi','C/o Uday Arakeri, Plot No.  46, Saraf Colony, Tilakwadi, Belguam.','C/o Uday Arakeri, Plot No.  46, Saraf Colony, Tilakwadi, Belguam.','1975-08-30','2011-01-11',1,20,'male',NULL,'2033-08-31',NULL,'null',NULL,NULL,9448964011,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-30 23:45:08','2023-11-30 23:45:08'),(254,277,'Mr. Sandeep','-','More','No. 585, Gurudev Galli, Laxmi Nagar, Badagaon, Belagavi','No. 585, Gurudev Galli, Laxmi Nagar, Badagaon, Belagavi','1982-07-22','2017-09-01',1,10,'male',NULL,'2040-07-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-30 23:47:20','2023-11-30 23:47:20'),(255,278,'Kuldeep','P','Sambrekar','H. No. 215/5, Somnath Bldg., Anand Nagar, Yellur Road, Vadagaon, Belguam','H. No. 215/5, Somnath Bldg., Anand Nagar, Yellur Road, Vadagaon, Belguam','1984-12-15','2006-09-19',1,10,'male',NULL,'2042-12-31',NULL,'O+','BNMPS9984H','637193506365',9900969887,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-30 23:47:31','2023-11-30 23:47:31'),(256,279,'Amol','Vivek','Zende','House No.115/2, Vaze Gali Vadagaon Belagavi 590005','House No.115/2, Vaze Gali Vadagaon Belagavi 590005','1990-07-23','2023-10-03',1,38,'male',NULL,'2048-07-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-30 23:50:23','2023-11-30 23:50:23'),(257,280,'Mr. Vinay','Arvind','Deshpande','Plot No. 14, Shri Padmalaya, Gul Mohar Colony, Bhagyanagar,  Belguam.','Plot No. 14, Shri Padmalaya, Gul Mohar Colony, Bhagyanagar,  Belguam.','1982-06-25','2012-04-02',1,5,'male',NULL,'2040-06-30',NULL,'B+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-30 23:52:44','2023-11-30 23:52:44'),(258,281,'Umesh','M','Kulkarni','Shri Sadaguru Krupa, Plat  No. 16, Kalkamb Maruti Mandir, Belguam.','Shri Sadaguru Krupa, Plat  No. 16, Kalkamb Maruti Mandir, Belguam.','1985-05-30','2007-07-04',1,25,'male',NULL,'2043-05-31',NULL,'O-','AVPPK8102R','589761931059',9449927661,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-30 23:53:40','2023-11-30 23:53:40'),(259,282,'Mr. Mahesh','G','Kangralkar','H. No. 1254-A, Basaan Galli, Shahpaur, Belagavi.','H. No. 1254-A, Basaan Galli, Shahpaur, Belagavi.','1974-07-22','2019-04-01',1,10,'male',NULL,'2032-07-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-30 23:55:43','2023-11-30 23:55:43'),(260,283,'Ms. Shruti','-','Mutkekar','H. No. 12167, Dharmaji sankul,  1st floor, Pangul Galli, Belgaum.','H. No. 12167, Dharmaji sankul,  1st floor, Pangul Galli, Belgaum.','1980-11-26','2004-03-01',1,10,'female',NULL,'2038-11-30',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-11-30 23:57:42','2023-11-30 23:57:42'),(261,284,'Uday','-','Birje','House No.138, Sambhaji Road, Khasabag Belagavi, Belagavi Shahapur','House No.138, Sambhaji Road, Khasabag Belagavi, Belagavi Shahapur','1986-12-18','2023-08-01',1,10,'male',NULL,'2044-12-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-11-30 23:58:56','2023-11-30 23:58:56'),(262,285,'Mrs. Geetha','M','Sambrekar','H. No. 41/B, Adarshnagar,  1st cross, Vadagaon, Belgaum.','H. No. 41/B, Adarshnagar,  1st cross, Vadagaon, Belgaum.','1967-04-21','2008-04-03',1,10,'female',NULL,'2025-04-30',NULL,'A+',NULL,NULL,9844866232,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-12-01 00:01:27','2023-12-01 00:01:27'),(263,286,'Ms. Jyoti','S','Patil','H. No. 202, Unity Apprts., Shivalaya Road, Sadashiv Nagar, Belgaum.','H. No. 202, Unity Apprts., Shivalaya Road, Sadashiv Nagar, Belgaum.','1977-09-10','2011-11-10',1,11,'female',NULL,'2035-09-30',NULL,'B+',NULL,NULL,9481322893,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-12-01 00:06:30','2023-12-01 00:06:30'),(264,287,'Gouri','S','Khadabadi','Plot No. 824, Sector No. 5, Shri Nagar, Malmaruti Extention, Belguam.','Plot No. 824, Sector No. 5, Shri Nagar, Malmaruti Extention, Belguam.','1983-07-18','2005-08-13',1,20,'female',NULL,'2041-07-31',NULL,'O+','AVPPK1693M','428881021024',9986726750,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-12-01 00:06:34','2023-12-01 00:06:34'),(265,288,'Shri. Upendra','A','Joshi','C/o N.K. Shirpurkar, Kalamruta, Hindu Nagar, near 3rd  Railway  gate, Belgaum.','C/o N.K. Shirpurkar, Kalamruta, Hindu Nagar, near 3rd  Railway  gate, Belgaum.','1975-08-20','1999-11-02',1,23,'male',NULL,'2033-08-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-12-01 00:11:57','2023-12-01 00:11:57'),(266,289,'Mrs. Pratiksha','-','Navelkar','Niti, CCB-82, Mrutyunjaya Nagar, Khanapur Road, Tilakwadi, Belgaum-590 006','Niti, CCB-82, Mrutyunjaya Nagar, Khanapur Road, Tilakwadi, Belgaum-590 006','1972-10-04','2014-07-15',1,15,'female',NULL,'2030-10-31',NULL,'O+',NULL,NULL,9449624484,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-12-01 00:12:12','2023-12-01 00:12:12'),(267,290,'Mrs. Anagha','-','Garagatti','121, Math Galli, Hosur,  Shahapur, Belgaum','121, Math Galli, Hosur,  Shahapur, Belgaum','1977-07-22','2012-02-06',1,11,'female',NULL,'2035-07-31',NULL,'O+',NULL,NULL,9535769557,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-12-01 00:17:13','2023-12-01 00:17:13'),(268,291,'Shivani','Jitendra','Kalkhembkar','Plot No. 32, Ashirwad Building,  Subhandra Chandra Nagar, Tilakwadi, Belagavi-590006.','Plot No. 32, Ashirwad Building,  Subhandra Chandra Nagar, Tilakwadi, Belagavi-590006.','1995-08-04','2018-02-01',1,10,'female',NULL,'2053-08-31',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-12-01 00:17:23','2023-12-01 00:17:23'),(269,292,'Chandrahas','G','Janagonda','Banashankar\" Plot No.13,8th Cross, Bhagyanagar,Belagavi 590006','Banashankar\" Plot No.13,8th Cross, Bhagyanagar,Belagavi 590006','1980-05-28','2004-12-17',1,26,'male',NULL,'2038-05-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-12-01 00:17:42','2023-12-01 00:17:42'),(270,293,'Arati','S','Shahapurkar','H. No. 2087, Kore Galli,  Shahapur, Belgaum.','H. No. 2087, Kore Galli,  Shahapur, Belgaum.','1978-06-01','2006-08-07',1,73,'female',NULL,'2036-06-30',NULL,'O+','BNKPS0740M','453554817491',9972944497,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-12-01 00:18:16','2023-12-01 00:18:16'),(271,294,'Vidya','V','Katti','H. No. 125, Vaze Galli, Vaze Chal, Vadagaon, Belgaum.','H. No. 125, Vaze Galli, Vaze Chal, Vadagaon, Belgaum.','1983-05-22','2011-10-01',1,5,'female',NULL,'2041-05-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-12-01 00:21:45','2023-12-01 00:21:45'),(272,295,'Ms. Pratibha','G','Desai','Sai Shradha, Plot No. 11, Budha Scheme No. 8, Near 2nd Railway  Gate, Tilakwadi, Belgaum.','Sai Shradha, Plot No. 11, Budha Scheme No. 8, Near 2nd Railway  Gate, Tilakwadi, Belgaum.','1974-11-06','2010-06-01',1,36,'female',NULL,'2032-11-30',NULL,'O+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-12-01 00:23:45','2023-12-01 00:23:45'),(273,296,'Ms. Spurti','S','Khemlapure','Flot No. 406, Gilganchi Apartment, Somwat Peth, Tilakwadi,  Belagavi-590 006.','Flot No. 406, Gilganchi Apartment, Somwat Peth, Tilakwadi,  Belagavi-590 006.','1992-01-01','2015-08-25',4,46,'female',NULL,'2050-01-30',NULL,'B+',NULL,NULL,9742785797,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-12-01 00:24:36','2023-12-01 00:24:36'),(274,297,'Medha','V','Kulkarni','Plot No. 128, Renuka krupa,  4th Cross, Devasthan Marg, Chidambar Nagar, Tilakwadi, Belagavi-590 006.','Plot No. 128, Renuka krupa,  4th Cross, Devasthan Marg, Chidambar Nagar, Tilakwadi, Belagavi-590 006.','1980-07-18','2019-03-01',1,5,'female',NULL,'2038-07-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-12-01 00:26:38','2023-12-01 00:26:38'),(275,298,'Ramesh','A','Medar','Survey No. 42/2, Plat No. 5, Teachers Colony, Khasbag,  Belgaum.','Survey No. 42/2, Plat No. 5, Teachers Colony, Khasbag,  Belgaum.','1984-11-21','2006-08-10',1,74,'male',NULL,'2042-11-30',NULL,'A+','AQLPM5042P','416030594585',9886254987,NULL,NULL,NULL,NULL,NULL,NULL,'Teaching','2023-12-01 00:28:14','2023-12-01 00:28:14'),(276,299,'Mr. Bhushan','R','Maraganache','H. No. 87 / B,  Kalmeshwar Galli, Belagavi.','H. No. 87 / B,  Kalmeshwar Galli, Belagavi.','1994-05-27','2016-01-16',1,10,'male',NULL,'2052-05-31',NULL,'A+',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Non-Teaching','2023-12-01 00:30:40','2023-12-01 00:30:40');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff_teaching_payscale`
--

DROP TABLE IF EXISTS `staff_teaching_payscale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff_teaching_payscale` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) unsigned NOT NULL,
  `teaching_payscale_id` bigint(20) unsigned NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `staff_teaching_payscale_staff_id_foreign` (`staff_id`),
  KEY `staff_teaching_payscale_teaching_payscales_id_foreign` (`teaching_payscale_id`),
  CONSTRAINT `staff_teaching_payscale_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`),
  CONSTRAINT `staff_teaching_payscale_teaching_payscales_id_foreign` FOREIGN KEY (`teaching_payscale_id`) REFERENCES `teaching_payscales` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff_teaching_payscale`
--

LOCK TABLES `staff_teaching_payscale` WRITE;
/*!40000 ALTER TABLE `staff_teaching_payscale` DISABLE KEYS */;
INSERT INTO `staff_teaching_payscale` VALUES (17,11,9,'2009-09-24',NULL,NULL,NULL,'active',NULL,NULL),(18,12,2,'2017-07-01',NULL,NULL,NULL,'active',NULL,NULL),(19,14,2,'2018-12-02',NULL,NULL,NULL,'active',NULL,NULL),(20,15,6,'2022-10-03',NULL,NULL,NULL,'active',NULL,NULL),(21,16,9,'1989-09-05',NULL,NULL,NULL,'active',NULL,NULL),(22,17,6,'2023-01-03',NULL,NULL,NULL,'active',NULL,NULL),(23,19,6,'2023-01-09',NULL,NULL,NULL,'active',NULL,NULL),(24,21,6,'2023-04-09',NULL,NULL,NULL,'active',NULL,NULL),(25,22,6,'2022-10-10',NULL,NULL,NULL,'active',NULL,NULL),(26,23,9,'2009-05-10',NULL,NULL,NULL,'active',NULL,NULL),(27,24,10,'2011-09-28',NULL,NULL,NULL,'active',NULL,NULL),(28,25,6,'2003-11-15',NULL,NULL,NULL,'active',NULL,NULL),(29,28,9,'2005-08-18',NULL,NULL,NULL,'active',NULL,NULL),(30,29,9,'2013-05-03',NULL,NULL,NULL,'active',NULL,NULL),(31,31,9,'2006-08-07',NULL,NULL,NULL,'active',NULL,NULL),(32,32,9,'2008-03-01',NULL,NULL,NULL,'active',NULL,NULL),(33,33,9,'2013-11-07',NULL,NULL,NULL,'active',NULL,NULL),(34,34,9,'2012-01-12',NULL,NULL,NULL,'active',NULL,NULL),(35,35,9,'2013-12-26',NULL,NULL,NULL,'active',NULL,NULL),(36,36,6,'2012-05-16',NULL,NULL,NULL,'active',NULL,NULL),(37,37,9,'2014-01-09',NULL,NULL,NULL,'active',NULL,NULL),(38,38,9,'2012-07-16',NULL,NULL,NULL,'active',NULL,NULL),(39,39,9,'2014-01-09',NULL,NULL,NULL,'active',NULL,NULL),(40,40,9,'2013-03-15',NULL,NULL,NULL,'active',NULL,NULL),(41,41,9,'2014-01-10',NULL,NULL,NULL,'active',NULL,NULL),(42,42,9,'2013-09-14',NULL,NULL,NULL,'active',NULL,NULL),(43,43,2,'2014-08-01',NULL,NULL,NULL,'active',NULL,NULL),(44,45,9,'2014-02-15',NULL,NULL,NULL,'active',NULL,NULL),(45,47,2,'2014-09-02',NULL,NULL,NULL,'active',NULL,NULL),(46,50,9,'2015-02-18',NULL,NULL,NULL,'active',NULL,NULL),(47,53,9,'2015-02-18',NULL,NULL,NULL,'active',NULL,NULL),(48,54,2,'2015-07-01',NULL,NULL,NULL,'active',NULL,NULL),(49,56,2,'2015-07-06',NULL,NULL,NULL,'active',NULL,NULL),(50,58,9,'2014-08-16',NULL,NULL,NULL,'active',NULL,NULL),(51,59,9,'2015-08-20',NULL,NULL,NULL,'active',NULL,NULL),(52,62,2,'2016-07-15',NULL,NULL,NULL,'active',NULL,NULL),(53,64,2,'2017-07-03',NULL,NULL,NULL,'active',NULL,NULL),(54,67,2,'2022-10-21',NULL,NULL,NULL,'active',NULL,NULL),(55,71,2,'2017-07-07',NULL,NULL,NULL,'active',NULL,NULL),(56,75,9,'2010-04-12',NULL,NULL,NULL,'active',NULL,NULL),(57,77,9,'1997-09-02',NULL,NULL,NULL,'active',NULL,NULL),(58,80,9,'1998-09-21',NULL,NULL,NULL,'active',NULL,NULL),(59,81,9,'2004-03-01',NULL,NULL,NULL,'active',NULL,NULL),(60,82,9,'1996-03-09',NULL,NULL,NULL,'active',NULL,NULL),(61,84,9,'1997-09-03',NULL,NULL,NULL,'active',NULL,NULL),(62,88,9,'1997-02-11',NULL,NULL,NULL,'active',NULL,NULL),(63,91,11,'2023-06-05',NULL,NULL,NULL,'active',NULL,NULL),(64,92,9,'1999-10-30',NULL,NULL,NULL,'active',NULL,NULL),(65,96,9,'1996-03-01',NULL,NULL,NULL,'active',NULL,NULL),(66,97,11,'2019-01-01',NULL,NULL,NULL,'active',NULL,NULL),(67,98,9,'2001-10-01',NULL,NULL,NULL,'active',NULL,NULL),(68,103,9,'2006-03-09',NULL,NULL,NULL,'active',NULL,NULL),(69,104,9,'2007-08-06',NULL,NULL,NULL,'active',NULL,NULL),(70,106,9,'1999-10-29',NULL,NULL,NULL,'active',NULL,NULL),(71,107,9,'2004-04-08',NULL,NULL,NULL,'active',NULL,NULL),(72,109,9,'2004-08-16',NULL,NULL,NULL,'active',NULL,NULL),(73,111,9,'2003-06-13',NULL,NULL,NULL,'active',NULL,NULL),(74,116,10,'2011-05-16',NULL,NULL,NULL,'active',NULL,NULL),(75,118,9,'2007-04-02',NULL,NULL,NULL,'active',NULL,NULL),(76,119,9,'2007-05-28',NULL,NULL,NULL,'active',NULL,NULL),(77,120,9,'2003-09-17',NULL,NULL,NULL,'active',NULL,NULL),(78,122,9,'2008-08-14',NULL,NULL,NULL,'active',NULL,NULL),(79,123,6,'2007-07-17',NULL,NULL,NULL,'active',NULL,NULL),(80,126,9,'2006-08-01',NULL,NULL,NULL,'active',NULL,NULL),(81,128,6,'2007-07-02',NULL,NULL,NULL,'active',NULL,NULL),(82,130,9,'2009-08-03',NULL,NULL,NULL,'active',NULL,NULL),(83,132,6,'2022-10-27',NULL,NULL,NULL,'active',NULL,NULL),(84,136,9,'2007-09-04',NULL,NULL,NULL,'active',NULL,NULL),(85,139,9,'2008-08-18',NULL,NULL,NULL,'active',NULL,NULL),(86,142,9,'2010-03-18',NULL,NULL,NULL,'active',NULL,NULL),(87,143,9,'2009-08-05',NULL,NULL,NULL,'active',NULL,NULL),(88,144,9,'2010-08-20',NULL,NULL,NULL,'active',NULL,NULL),(89,145,9,'2012-07-16',NULL,NULL,NULL,'active',NULL,NULL),(90,146,9,'2009-09-07',NULL,NULL,NULL,'active',NULL,NULL),(91,147,9,'2013-07-19',NULL,NULL,NULL,'active',NULL,NULL),(92,149,9,'2013-09-16',NULL,NULL,NULL,'active',NULL,NULL),(93,151,9,'2014-08-01',NULL,NULL,NULL,'active',NULL,NULL),(94,152,9,'2015-02-03',NULL,NULL,NULL,'active',NULL,NULL),(95,154,9,'2014-02-01',NULL,NULL,NULL,'active',NULL,NULL),(96,155,9,'2011-11-02',NULL,NULL,NULL,'active',NULL,NULL),(97,156,6,'1993-02-09',NULL,NULL,NULL,'active',NULL,NULL),(98,159,9,'2012-09-13',NULL,NULL,NULL,'active',NULL,NULL),(99,160,9,'2010-08-02',NULL,NULL,NULL,'active',NULL,NULL),(100,162,6,'2016-04-26',NULL,NULL,NULL,'active',NULL,NULL),(101,163,9,'2012-10-12',NULL,NULL,NULL,'active',NULL,NULL),(102,166,9,'2013-05-20',NULL,NULL,NULL,'active',NULL,NULL),(103,167,6,'2016-08-01',NULL,NULL,NULL,'active',NULL,NULL),(104,171,6,'2016-08-01',NULL,NULL,NULL,'active',NULL,NULL),(105,173,9,'2013-09-21',NULL,NULL,NULL,'active',NULL,NULL),(106,176,6,'2016-09-15',NULL,NULL,NULL,'active',NULL,NULL),(107,182,2,'2014-08-18',NULL,NULL,NULL,'active',NULL,NULL),(108,184,2,'2017-04-18',NULL,NULL,NULL,'active',NULL,NULL),(109,186,9,'2014-08-11',NULL,NULL,NULL,'active',NULL,NULL),(110,188,2,'2017-08-31',NULL,NULL,NULL,'active',NULL,NULL),(111,191,9,'2014-09-12',NULL,NULL,NULL,'active',NULL,NULL),(112,192,2,'2017-09-08',NULL,NULL,NULL,'active',NULL,NULL),(113,194,9,'2014-09-12',NULL,NULL,NULL,'active',NULL,NULL),(114,196,2,'2017-10-11',NULL,NULL,NULL,'active',NULL,NULL),(115,198,9,'2007-04-02',NULL,NULL,NULL,'active',NULL,NULL),(116,200,2,'2017-10-23',NULL,NULL,NULL,'active',NULL,NULL),(117,202,9,'2013-07-22',NULL,NULL,NULL,'active',NULL,NULL),(118,203,9,'2019-06-01',NULL,NULL,NULL,'active',NULL,NULL),(119,204,2,'2016-01-04',NULL,NULL,NULL,'active',NULL,NULL),(120,207,2,'2016-01-16',NULL,NULL,NULL,'active',NULL,NULL),(121,209,2,'2016-08-01',NULL,NULL,NULL,'active',NULL,NULL),(122,211,6,'2021-10-04',NULL,NULL,NULL,'active',NULL,NULL),(123,212,2,'2016-08-02',NULL,NULL,NULL,'active',NULL,NULL),(124,217,2,'2017-07-05',NULL,NULL,NULL,'active',NULL,NULL),(125,219,2,'2021-10-11',NULL,NULL,NULL,'active',NULL,NULL),(126,220,2,'1996-03-01',NULL,NULL,NULL,'active',NULL,NULL),(127,224,2,'2021-10-18',NULL,NULL,NULL,'active',NULL,NULL),(128,228,9,'2002-09-21',NULL,NULL,NULL,'active',NULL,NULL),(129,229,2,'2021-11-15',NULL,NULL,NULL,'active',NULL,NULL),(130,232,9,'2001-09-18',NULL,NULL,NULL,'active',NULL,NULL),(131,233,9,'2003-09-29',NULL,NULL,NULL,'active',NULL,NULL),(132,234,9,'2005-06-15',NULL,NULL,NULL,'active',NULL,NULL),(133,235,9,'2006-11-13',NULL,NULL,NULL,'active',NULL,NULL),(134,236,9,'2007-03-01',NULL,NULL,NULL,'active',NULL,NULL),(135,237,11,'2010-03-03',NULL,NULL,NULL,'active',NULL,NULL),(136,238,9,'2007-09-03',NULL,NULL,NULL,'active',NULL,NULL),(137,239,9,'2008-04-15',NULL,NULL,NULL,'active',NULL,NULL),(138,240,2,'2016-08-10',NULL,NULL,NULL,'active',NULL,NULL),(139,241,9,'1989-08-26',NULL,NULL,NULL,'active',NULL,NULL),(140,242,2,'2016-09-15',NULL,NULL,NULL,'active',NULL,NULL),(141,243,9,'2004-03-01',NULL,NULL,NULL,'active',NULL,NULL),(142,244,9,'2001-09-18',NULL,NULL,NULL,'active',NULL,NULL),(143,245,9,'2000-04-10',NULL,NULL,NULL,'active',NULL,NULL),(144,246,9,'2004-08-20',NULL,NULL,NULL,'active',NULL,NULL),(145,248,9,'2004-03-01',NULL,NULL,NULL,'active',NULL,NULL),(146,250,9,'1987-07-23',NULL,NULL,NULL,'active',NULL,NULL),(147,253,2,'2011-01-11',NULL,NULL,NULL,'active',NULL,NULL),(148,255,9,'2006-09-19',NULL,NULL,NULL,'active',NULL,NULL),(149,258,9,'2007-07-04',NULL,NULL,NULL,'active',NULL,NULL),(150,260,9,'2004-03-01',NULL,NULL,NULL,'active',NULL,NULL),(151,262,9,'2008-04-03',NULL,NULL,NULL,'active',NULL,NULL),(152,263,2,'2011-11-10',NULL,NULL,NULL,'active',NULL,NULL),(153,264,9,'2005-08-13',NULL,NULL,NULL,'active',NULL,NULL),(154,266,9,'2014-07-15',NULL,NULL,NULL,'active',NULL,NULL),(155,267,2,'2012-02-06',NULL,NULL,NULL,'active',NULL,NULL),(156,270,9,'2006-08-07',NULL,NULL,NULL,'active',NULL,NULL),(157,273,9,'2015-08-25',NULL,NULL,NULL,'active',NULL,NULL),(158,275,9,'2006-08-10',NULL,NULL,NULL,'active',NULL,NULL);
/*!40000 ALTER TABLE `staff_teaching_payscale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tdsheads`
--

DROP TABLE IF EXISTS `tdsheads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tdsheads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tdsheads`
--

LOCK TABLES `tdsheads` WRITE;
/*!40000 ALTER TABLE `tdsheads` DISABLE KEYS */;
/*!40000 ALTER TABLE `tdsheads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teaching_payscales`
--

DROP TABLE IF EXISTS `teaching_payscales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teaching_payscales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `payscale_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basepay` double(8,2) NOT NULL,
  `maxpay` double(8,2) NOT NULL,
  `designations_id` bigint(20) unsigned NOT NULL,
  `agp` double(8,2) NOT NULL,
  `da` double(8,2) NOT NULL,
  `hra` double(8,2) NOT NULL,
  `cca` double(8,2) NOT NULL,
  `wef` date NOT NULL,
  `closedon` date DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payscales_designation_id_foreign` (`designations_id`),
  CONSTRAINT `payscales_designation_id_foreign` FOREIGN KEY (`designations_id`) REFERENCES `designations` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teaching_payscales`
--

LOCK TABLES `teaching_payscales` WRITE;
/*!40000 ALTER TABLE `teaching_payscales` DISABLE KEYS */;
INSERT INTO `teaching_payscales` VALUES (1,'7th payscale',165000.00,395000.00,5,60000.00,100.00,10.00,200.00,'2023-01-01','2023-09-22','inactive','2023-09-22 02:55:08','2023-09-22 05:12:14'),(2,'6th payscale',15600.00,39100.00,5,6000.00,70.00,5.00,80.00,'2023-01-03',NULL,'active','2023-09-23 02:08:20','2023-09-23 02:39:43'),(3,'6th payscale',15600.00,39100.00,5,7000.00,70.00,5.00,80.00,'2023-01-01',NULL,'active','2023-09-23 02:39:06','2023-09-23 02:39:31'),(4,'6th payscale',15600.00,39100.00,5,8000.00,70.00,5.00,80.00,'2023-01-01',NULL,'active','2023-09-23 02:46:05','2023-09-23 02:46:05'),(5,'6th payscale',15600.00,39100.00,5,6000.00,70.00,6.00,80.00,'2023-01-03',NULL,'inactive','2023-09-23 02:46:37','2023-10-09 00:30:14'),(6,'6th payscale',37400.00,67000.00,6,9000.00,70.00,5.00,80.00,'2023-01-01',NULL,'active','2023-09-23 02:47:10','2023-10-09 00:29:06'),(7,'6th payscale',15600.00,39100.00,5,8000.00,70.00,5.00,80.00,'2023-01-01','2023-09-23','inactive','2023-09-23 02:47:26','2023-09-23 02:47:39'),(9,'5th PayScale',8000.00,13500.00,26,275.00,176.00,8.00,80.00,'1994-01-01',NULL,'active','2023-10-03 00:09:27','2023-10-09 00:36:38'),(10,'5th PayScale',10000.00,15200.00,27,325.00,176.00,8.00,80.00,'1994-01-01',NULL,'active','2023-10-03 00:11:26','2023-10-03 00:11:26'),(11,'6th payscale',37400.00,67000.00,7,10000.00,70.00,5.00,80.00,'2023-01-01',NULL,'active','2023-11-29 00:52:46','2023-11-29 00:52:46');
/*!40000 ALTER TABLE `teaching_payscales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=300 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'itcell@git.edu',NULL,'$2y$10$uIxRcCmyBPOWcNIs.EGcougnnyh6DqfaRaaXwyG5YHN5DyXcl0lG2','Super Admin','Active',NULL,NULL,NULL),(2,'os_estb@git.edu',NULL,'$2y$10$bkglLwpip36CNGFL.VO5zuAQGoA7A/n2R2AqopDhreDl.TWYwPiKS','Establishment','Active',NULL,NULL,NULL),(3,'os_admin@git.edu',NULL,'$2y$10$MxHGVLqrhoZmDk5zRx.YdOxeNyMhYqyOgevtueK0IuIfJ8nPJoMLG','Admission','Active',NULL,NULL,NULL),(4,'os_accts@git.edu',NULL,'$2y$10$yefZWRhcocpmVloZGQYn2uNDMwUFBfVr40Z.C2/D6EqILExfRRYCS','Accounts','Active',NULL,NULL,NULL),(29,'vrchate@git.edu',NULL,'$2y$10$s8Fzsals05quVU5m0rnaUOApQI8ua5LO6ORuslh/aJWTcfVai/wzu','teaching','Active',NULL,'2023-11-28 04:53:06','2023-11-28 04:53:06'),(32,'bsingole@git.edu',NULL,'$2y$10$x72Y9G4qW8NorqCdl9ypvO0rkpcloKkxE2i1wXO1NLIbyfCbiMc9e','non-teaching','Active',NULL,'2023-11-28 05:02:47','2023-11-28 05:02:47'),(34,'vlgingine@git.edu',NULL,'$2y$10$GyOYYFQ9h10.o0lwgmpvMe1wkkD9UyPO.VqxUE69knL5pL3OM6IFy','teaching','Active',NULL,'2023-11-28 05:10:56','2023-11-28 05:10:56'),(35,'bsingole1@git.edu',NULL,'$2y$10$OGSKFPlPfbKfb5MkXiujIedIbO.4JudyIxqESU70Ge.nIYuwM1ziu','non-teaching','Active',NULL,'2023-11-28 05:14:21','2023-11-28 05:14:21'),(36,'nnpalankar@git.edu',NULL,'$2y$10$9b3VEmZG6cBeFsgHwN55GOYWnxZDMGnd9FmsvNlvtu0w90Pf4.vze','teaching','Active',NULL,'2023-11-28 05:19:33','2023-11-28 05:19:33'),(37,'mgkalibha@git.edu',NULL,'$2y$10$6rOrIWcpaWent7AYSNsbqOfw7X9Pa87lnotmQcte0ZF3LI8EHlMO.','teaching','Active',NULL,'2023-11-28 05:23:54','2023-11-28 05:23:54'),(38,'dbkulkarni@git.edu',NULL,'$2y$10$6WDdfsqauq44EOAaO4IvTOTbp4pWohvKTBK9AnaIfB9jnGRiPQlbi','teaching','Active',NULL,'2023-11-28 05:34:13','2023-11-28 05:34:13'),(39,'ssangadi@git.edu',NULL,'$2y$10$wGS3KD8EpUZtgSD0kVNw2uNJPg0XPf3tkC9ayXghHwa.G9V9IyfTq','teaching','Active',NULL,'2023-11-28 05:35:53','2023-11-28 05:35:53'),(40,'mmkadyagol@git.edu',NULL,'$2y$10$2zzJ7ezYjuowlgjuHbY5PuiAZWL/oLQZqH9y/RYzNaa..qUcYKN9.','non-teaching','Active',NULL,'2023-11-28 05:36:38','2023-11-28 05:36:38'),(41,'lspammar@git.edu',NULL,'$2y$10$XKkAsDJQLOT/vtXS2fXQ8OzCBi.jAP1v8NSnRbIjDxAmwFjh5TWzC','teaching','Active',NULL,'2023-11-28 05:40:13','2023-11-28 05:40:13'),(42,'vbbadiger@git.edu',NULL,'$2y$10$Vqt7e1/KOgXTXQae/1Il4OaOPjBHYiRlWxqawQqQwYIVm2p6Sl9Ke','non-teaching','Active',NULL,'2023-11-28 05:44:24','2023-11-28 05:44:24'),(43,'shpatil@git.edu',NULL,'$2y$10$rR66m6ruzYg06vqtPNeei.UY54j4LGLBq7Ar7Jjz42GWssjNM6E2S','teaching','Active',NULL,'2023-11-28 05:49:33','2023-11-28 05:49:33'),(44,'rbantwal@git.edu',NULL,'$2y$10$1PQ/1ULxjPCaG1oxi.q5Keu1GsWRoLPFNk4LlmtOF3ffS0i6NYCMy','teaching','Active',NULL,'2023-11-28 05:51:14','2023-11-28 05:51:14'),(45,'rddeshpande@git.edu',NULL,'$2y$10$Y8qeoUmzhyKB96zjwH4KD.4Ozk4FaldaUgYgCV5LHwP4nDbCBbVy6','teaching','Active',NULL,'2023-11-28 05:54:21','2023-11-28 05:54:21'),(46,'kkkanagali@git.edu',NULL,'$2y$10$9QzRcJ1p1Ggs2c/1ebuFtuLCSIyQju5RE1.1xL2Ph7Gi7S/AfDFMS','teaching','Active',NULL,'2023-11-28 05:58:58','2023-11-28 05:58:58'),(47,'vanidatar@git.edu',NULL,'$2y$10$ldMKfEYEDieJisGTkk/MQ.B7eUkPNRnEDeKvYDlfL0OTD2eYUuH66','teaching','Active',NULL,'2023-11-28 06:00:09','2023-11-28 06:00:09'),(48,'dcmadiger@git.edu',NULL,'$2y$10$rCRusedSqYVT1yv092M72eH1UVf.7K5TPWhUvkr6nbQrUiuxTKx5m','non-teaching','Active',NULL,'2023-11-28 06:02:01','2023-11-28 06:02:01'),(49,'ssbalikai@git.edu',NULL,'$2y$10$xZZ0BXjf.IgtGOTYcNJK..7EBR9m/zD1XcTXhu2DrvDG8hqAsjbFO','non-teaching','Active',NULL,'2023-11-28 06:06:38','2023-11-28 06:06:38'),(50,'pvdatar@git.edu',NULL,'$2y$10$nSRU55sA6dlsc3Ba4RQ.MuzDJarhsdY4f6GwseJYg/GLTvAmXMhWK','teaching','Active',NULL,'2023-11-28 06:08:09','2023-11-28 06:08:09'),(51,'anshagoti@git.edu',NULL,'$2y$10$XbfpKucUBZqcMRpoIFT.X.PB80vyeOIbej4Fx4s2iLE6IiNABnlq.','teaching','Active',NULL,'2023-11-28 06:09:09','2023-11-28 06:09:09'),(52,'SAKhanapuri@git.edu',NULL,'$2y$10$tnp2Ou3E2ew.S7cMEOpBDe56rP2JlZSsUvxetbP1vnxxT9hUQlRZG','non-teaching','Active',NULL,'2023-11-28 06:10:29','2023-11-28 06:10:29'),(53,'adjanaj@git.edu',NULL,'$2y$10$Hetmy1QRBqnuBju40x7CyOe7YG4f6wG/ONrylNwIdPJ5/KPYNXJiG','teaching','Active',NULL,'2023-11-28 06:14:29','2023-11-28 06:14:29'),(54,'rjthakai@git.edu',NULL,'$2y$10$ADLPndSri4im5MAsvKPLreXddqyLZ2u.gH0QuRbdVPfG7O2YmjNMe','teaching','Active',NULL,'2023-11-28 06:15:35','2023-11-28 06:15:35'),(55,'rstogarsi@git.edu',NULL,'$2y$10$Ge5YLMF/1Xox9iSqgHtEL.4TAJaWbg57iRyJV76nx8W9ugH8WDuea','teaching','Active',NULL,'2023-11-28 06:20:01','2023-11-28 06:20:01'),(56,'rahulsuryavanshi@git.edu',NULL,'$2y$10$j15jkG4Qa3Uh9o//v.T6QOI1trPprErmDjZbZJtdruBgNDrR8jpAS','teaching','Active',NULL,'2023-11-28 06:20:08','2023-11-28 06:20:08'),(57,'kmnashimath@git.edu',NULL,'$2y$10$RJW6MFqTFclh8WNwLRYHBu/BhbxAQgPalOI4ulmv6AZg6u61C3iAO','teaching','Active',NULL,'2023-11-28 06:24:26','2023-11-28 06:24:26'),(58,'balwant@git.edu',NULL,'$2y$10$D/iw0lHY.RTHN8s7CoxjWOzfFl0NLb4v68wsvLHiDBW5RdpwjPHfe','teaching','Active',NULL,'2023-11-28 06:25:31','2023-11-28 06:25:31'),(59,'scdeshpande@git.edu',NULL,'$2y$10$zbK0VW79nXq8NZNmV1jXYuUQA5wcOFRji6SXA9/3sanuBDBaRU8e6','teaching','Active',NULL,'2023-11-28 06:28:16','2023-11-28 06:28:16'),(60,'avdeshpande@git.edu',NULL,'$2y$10$9.ogvtaTiVbbMaNaYLzzxeHoIUosNK1PrUsigfBi/qL8jNZt67TBO','teaching','Active',NULL,'2023-11-28 06:30:33','2023-11-28 06:30:33'),(61,'nadeshpande@git.edu',NULL,'$2y$10$rEjGPkP9GPVlNN0ScWYk7.5uVAUn9cPEOnYWoeb/GfZo/lRimSR0K','teaching','Active',NULL,'2023-11-28 06:32:08','2023-11-28 06:32:08'),(62,'cjsudhakar@git.edu',NULL,'$2y$10$PLGfOwkqzdfKY6VgtUzRgeV7U43OZXdpW6rmgXb0gRqDPHBszcBwe','teaching','Active',NULL,'2023-11-28 06:34:36','2023-11-28 06:34:36'),(63,'bssaunshi@git.edu',NULL,'$2y$10$WXLLiE9cMJ16URVnKDDz9OH5VDV9TxpqBnNFFGqxRPU38Owm8dztC','teaching','Active',NULL,'2023-11-28 06:35:37','2023-11-28 06:35:37'),(64,'sndodamani@git.edu',NULL,'$2y$10$eJq6Y9/fh1UxbF/e8xXNvOFdWtS59dW7jh5dyQBxKSJzqu39YLp9y','teaching','Active',NULL,'2023-11-28 23:20:04','2023-11-28 23:20:04'),(65,'nmangadi@git.edu',NULL,'$2y$10$eSWkCLDXzw9FO.4Mn4Z0ye6VJJNs31Yn7EPHAYQBGD.3Gd32jFJ.K','teaching','Active',NULL,'2023-11-28 23:20:22','2023-11-28 23:20:22'),(66,'hrkulkarni@git.edu',NULL,'$2y$10$SmyBJ2xKLNvwdkgunYsDG.aqFc0mGrEzGnm9Gm5zzwhBIA/FXD.5G','non-teaching','Active',NULL,'2023-11-28 23:22:16','2023-11-28 23:22:16'),(67,'rbmagadum@git.edu',NULL,'$2y$10$z7HLoLEu6N4U8EehWzAk..fsYFTj.HJZSXpPHy.aRq8S5BQ5oMFbi','teaching','Active',NULL,'2023-11-28 23:24:51','2023-11-28 23:24:51'),(68,'bsingole.@git.edu',NULL,'$2y$10$5FTxwAee1uHoXci0fEaqCe4dE/0v1NXESHoHEXPeaTKezoKD6oAUi','non-teaching','Active',NULL,'2023-11-28 23:28:11','2023-11-28 23:28:11'),(69,'ughullur@git.edu',NULL,'$2y$10$Rf/IOrJQQjsBqdWu16RmUO/BMlQKsT1iNcEAYE2tvuNw6lHT/PsYu','teaching','Active',NULL,'2023-11-28 23:28:13','2023-11-28 23:28:13'),(70,'Akgadkari@git.edu',NULL,'$2y$10$.hzQzTO2SglpDcRM0KolceuY53A8W72kVghcBIsNcUCE3v/B0rxb2','non-teaching','Active',NULL,'2023-11-28 23:32:32','2023-11-28 23:32:32'),(71,'gghegde@git.edu',NULL,'$2y$10$jwDGb6JQgb3TcLDV5p6TuOvm1pV58Auq.t5bWXeXH9q7I.y2hnscO','non-teaching','Active',NULL,'2023-11-28 23:32:52','2023-11-28 23:32:52'),(73,'rameshgb@git.edu',NULL,'$2y$10$QYxniY6vX0XYyzMaFnokaeWssXqS6lahhbgZHCNTo2gWSn9wSSKPW','teaching','Active',NULL,'2023-11-28 23:33:58','2023-11-28 23:33:58'),(74,'lkchougule@git.edu',NULL,'$2y$10$IseVt5cFBzHmgTMRXjLQkOHvPr0NDfQYKtTqYVLI87UgyJvDljk86','non-teaching','Active',NULL,'2023-11-28 23:37:20','2023-11-28 23:37:20'),(75,'vgkamashetty@git.edu',NULL,'$2y$10$yqeYF/RuyHR9x.loL0JcjuGWTg2ZXobPHGndu6PzqSc7lrZdLo5Iq','non-teaching','Active',NULL,'2023-11-28 23:39:20','2023-11-28 23:39:20'),(76,'nrchitragar@git.edu',NULL,'$2y$10$vvjY5XSSJ9vuKYJmdQByRu7IdFIBLn5NNnr.VLhNOOSmxk/oIjG9u','teaching','Active',NULL,'2023-11-28 23:40:40','2023-11-28 23:40:40'),(77,'pvgudi@git.edu',NULL,'$2y$10$IWmIFNyBTI2tF9XEQKWOGOo.tyGZRVTbBnvQWRBri1WI23Ar1Ux7e','teaching','Active',NULL,'2023-11-28 23:41:22','2023-11-28 23:41:22'),(78,'srmathad@git.edu',NULL,'$2y$10$2bWozAltB93RYZeOAGShe.uZxfM23H/5q.i6bAnRsMNzExJp//P4e','non-teaching','Active',NULL,'2023-11-28 23:41:25','2023-11-28 23:41:25'),(79,'smkhot@git.edu',NULL,'$2y$10$Y51t6OnqWU3J2xv14VxSnu5JlQqxCm6QYTmx.fp6HRIb20COU1qrq','teaching','Active',NULL,'2023-11-28 23:45:15','2023-11-28 23:45:15'),(80,'srsullad@git.edu',NULL,'$2y$10$u.Z3SQ43o4KZx.2wY3gyZ.2QPxMo34VzRiJykLY0.DuDDExyakZti','non-teaching','Active',NULL,'2023-11-28 23:45:32','2023-11-28 23:45:32'),(81,'vjshetty@git.edu',NULL,'$2y$10$EdkIJQRKL3HiH78HcVIRNOSIEHt9oEGPP6YF0Pk5jPPJcP5QrL0ly','teaching','Active',NULL,'2023-11-28 23:46:17','2023-11-28 23:46:17'),(82,'vskatti@git.edu',NULL,'$2y$10$hEOg23Dtexc7k5LHBBPLV.7sRO2i6/3KuiXH3goezmDKQDxGLXWoq','teaching','Active',NULL,'2023-11-28 23:50:16','2023-11-28 23:50:16'),(83,'glmelge@git.edu',NULL,'$2y$10$NGs9sGSqqzfXYYrYoKCWm.v4opctFmxnVFnxfdnHMp/lTUBEK2iSq','non-teaching','Active',NULL,'2023-11-28 23:54:03','2023-11-28 23:54:03'),(84,'dbmahajan@git.edu',NULL,'$2y$10$I.NBfswhzQsBkAWGcOp9oerc0mhhKbj5bP0bGOwF1LRk/1KNndtiO','non-teaching','Active',NULL,'2023-11-28 23:56:58','2023-11-28 23:56:58'),(85,'scbangi@git.edu',NULL,'$2y$10$ja0r/vu4YD0WSB.yVykRKOy/pFkq0zUR2dXQFrHxoB7kIyWwv06Sy','teaching','Active',NULL,'2023-11-28 23:57:05','2023-11-28 23:57:05'),(86,'nbhandigol@git.edu',NULL,'$2y$10$3HZRsme5O083TB/t/xSL/etagKKJRrym.j5IUKkuAAMHH9iIWyISS','non-teaching','Active',NULL,'2023-11-29 00:01:34','2023-11-29 00:01:34'),(87,'srkulkarni1@git.edu',NULL,'$2y$10$yusGtJw2imNWAbh2Yotg4.Y4ZN6Hzk85qmZ3ObaFIRIbjiXF6tPeq','teaching','Active',NULL,'2023-11-29 00:03:13','2023-11-29 00:03:13'),(88,'amkhatavakar@git.edu',NULL,'$2y$10$qgJ6XU7J70lcwc831nR7lewmBdqRxiK6c.38UC4Fs6pMYuSdiGwQi','non-teaching','Active',NULL,'2023-11-29 00:05:24','2023-11-29 00:05:24'),(89,'srhulikavi@git.edu',NULL,'$2y$10$HNcnvu10HESQvmUne92byeKatDIVBgn/3bvlkU9gYvsnloUmkWmhe','non-teaching','Active',NULL,'2023-11-29 00:08:42','2023-11-29 00:08:42'),(90,'krkulkarni@git.edu',NULL,'$2y$10$i3G2FpjtpZs.cMF1OJQV3ePTlo7XXFpxRwAs6VCQO4nCP6hmZXSg2','teaching','Active',NULL,'2023-11-29 00:12:08','2023-11-29 00:12:08'),(91,'aadaptadar@git.edu',NULL,'$2y$10$exUOHESwl6mN/bxGYMaxgOxGLnENHAOZTp9O2Fl1IkXfJGDiXzqby','non-teaching','Active',NULL,'2023-11-29 00:12:17','2023-11-29 00:12:17'),(92,'sakadad@git.edu',NULL,'$2y$10$eKA4cUxOd0iz1QedgV3Xs.OuLtkikB4tC3fyDRYX/P57eRZlk5KZi','non-teaching','Active',NULL,'2023-11-29 00:16:02','2023-11-29 00:16:02'),(93,'VLKatti@git.edu',NULL,'$2y$10$DLQJKVE49933bQnZg1p0n.xYeQKhv.16w/cwEZMiu2qvNTFKOnHtC','non-teaching','Active',NULL,'2023-11-29 00:18:48','2023-11-29 00:18:48'),(94,'kpthejaswi@git.edu',NULL,'$2y$10$c4Sx7KauBNO5iWZ2.kot2u2eMxMmSPzisnkpLypxK8MGDHnFrgfW6','teaching','Active',NULL,'2023-11-29 00:19:29','2023-11-29 00:19:29'),(95,'ajbalikai@git.edu',NULL,'$2y$10$LZAreJJhyGgeSHbEGaTCeeae9MbJGidn5qjiKWcGD5ujml36JGzhO','non-teaching','Active',NULL,'2023-11-29 00:20:35','2023-11-29 00:20:35'),(96,'bihanji@git.edu',NULL,'$2y$10$yax26eGgulJhHqRwUhtVLOdB5Wj/OEPPhkvfh4IZe.vUvlvoRXzWq','non-teaching','Active',NULL,'2023-11-29 00:25:29','2023-11-29 00:25:29'),(97,'bbhagedal@git.edu',NULL,'$2y$10$AFfhmn8ToYa6rjDFz4WDI.5LluJ8Fys9C9A.dAbqU2JYWSgP/qjbq','non-teaching','Active',NULL,'2023-11-29 00:27:49','2023-11-29 00:27:49'),(98,'hbkulkarni@git.edu',NULL,'$2y$10$EqbVlzNtaP0z18583n8tzOFohTEkBCtjHGgApWA7t3Xq.7D6WR9zC','teaching','Active',NULL,'2023-11-29 00:28:08','2023-11-29 00:28:08'),(99,'bskalburgi@git.edu',NULL,'$2y$10$Bstn4oSiCmjYMvSd2rynFeooAOMHVsVhopP9O7bY1UoRF3/5uXI16','non-teaching','Active',NULL,'2023-11-29 00:33:11','2023-11-29 00:33:11'),(100,'jkk@git.edu',NULL,'$2y$10$ZRYUPH4e9nyc2kAiWHPpwuJ6MVCwxwePmhfiwjT5fKdpfYBtIPsDK','teaching','Active',NULL,'2023-11-29 00:35:21','2023-11-29 00:35:21'),(101,'bshebballi@git.edu',NULL,'$2y$10$KcfJ2qYE7zSi.eYbcw2Vx.ipIWXfkTVkVYU35082GRipTJmQ8i1zu','non-teaching','Active',NULL,'2023-11-29 00:37:01','2023-11-29 00:37:01'),(102,'pgkamashetti@git.edu',NULL,'$2y$10$2N5JWf8/56kVeQ.c.DQPUOYcUHMDarEv7RiFAY1sqKV0eLZUDBFYq','non-teaching','Active',NULL,'2023-11-29 00:37:58','2023-11-29 00:37:58'),(103,'sshivakumar@git.edu',NULL,'$2y$10$54fRPcCcVWpCpyZHvy0CdeH2dtla1xhF65uSWGw87a7bOZSTqcU.a','teaching','Active',NULL,'2023-11-29 00:39:18','2023-11-29 00:39:18'),(104,'ssshanbhag@git.edu',NULL,'$2y$10$BjegE6vX7J5fWkKjY59KT.B5SS7sC9dlqvZiYh8/Tsdg2WJhXqbra','teaching','Active',NULL,'2023-11-29 00:40:17','2023-11-29 00:40:17'),(105,'mspatil@git.edu',NULL,'$2y$10$.oHY5ebPpWVrpUDwIeG.UO0SK5MDHrn34RHM5ZV8CXjq7aRTHlPkS','teaching','Active',NULL,'2023-11-29 00:44:41','2023-11-29 00:44:41'),(106,'rgharihar@git.edu',NULL,'$2y$10$E6FFfX4ZGt5pkSBgTVjM4eevbH4jmNtaow8dX9RxjeTPZ4Z0C1a4.','non-teaching','Active',NULL,'2023-11-29 00:49:29','2023-11-29 00:49:29'),(107,'v_satwik@git.edu',NULL,'$2y$10$vxx0uVxlMIqgKLPgVwhA0ee8F1TlxN4pGYwpDK6Xh2rErRZkAAl.a','teaching','Active',NULL,'2023-11-29 00:50:51','2023-11-29 00:50:51'),(108,'vthendre@git.edu',NULL,'$2y$10$mH7Ag0g2utW7nnmzwzA17eoxkkVmn9Wexa49xkp/PrPRTKus07Tr6','non-teaching','Active',NULL,'2023-11-29 00:55:50','2023-11-29 00:55:50'),(109,'smjalagekar@git.edu',NULL,'$2y$10$By0YAAtTgY.bOR4Rc7YohOc.T6naZMmcSVgwgkkg7IzruZNoaKc8S','non-teaching','Active',NULL,'2023-11-29 00:56:42','2023-11-29 00:56:42'),(110,'vcshirvalkar@git.edu',NULL,'$2y$10$Ii667o0qcUEuVYM1wzYBUeA0/t7MFSQzBQQFozc8fEiUBEO25JMJy','non-teaching','Active',NULL,'2023-11-29 01:02:51','2023-11-29 01:02:51'),(111,'ankallol@git.edu',NULL,'$2y$10$ufuenWEU.nDxLQLOHZUzNuSGh8xFxkcxYbkFuKRnzM5OmEv5W1JIe','teaching','Active',NULL,'2023-11-29 01:02:55','2023-11-29 01:02:55'),(112,'pvpatil@git.edu',NULL,'$2y$10$r.hRcMJhh72.bDriBCfyPe2YZw2gFTeAjBH1y91vHBSjyqqbeLQZq','non-teaching','Active',NULL,'2023-11-29 01:04:06','2023-11-29 01:04:06'),(113,'abpatil@git.edu',NULL,'$2y$10$A1JylLUFT0nkp6/itk.YWu0eJr8G5HaxRlYjuD91qiwexaRTnS1Sy','non-teaching','Active',NULL,'2023-11-29 01:07:46','2023-11-29 01:07:46'),(114,'pvgopikrishna@git.edu',NULL,'$2y$10$wSGJD78zkRXsrU/RkfOlyepTfDIBJkuqu3HDQb53jAQn6M/6xBX4a','teaching','Active',NULL,'2023-11-29 01:08:02','2023-11-29 01:08:02'),(115,'mnadakatti@git.edu',NULL,'$2y$10$yN0.Fjgq79FBAgxMOe2xaOhgpF36OdxQHmSFNTKSKkwDXDUErkdma','teaching','Active',NULL,'2023-11-29 01:12:19','2023-11-29 01:12:19'),(116,'gmsaudatti@git.edu',NULL,'$2y$10$mnx8gxdEdWucmMjPre3RLOdKAEQpmJXhJjEKfs7Na.BNbNFZqeG4q','non-teaching','Active',NULL,'2023-11-29 01:12:37','2023-11-29 01:12:37'),(117,'dkarennavar@git.edu',NULL,'$2y$10$OYurRi.BfTXkNg7eLCt04eF2rl4IyotdAwp2PHsiW01OPd7r73grK','non-teaching','Active',NULL,'2023-11-29 01:14:57','2023-11-29 01:14:57'),(118,'srjosh@git.edu',NULL,'$2y$10$64Iu86lBGn2oFUS4Eqm7LuhLki9arqUoWvI1w6QAGldDBx9FU2x0i','non-teaching','Active',NULL,'2023-11-29 01:15:25','2023-11-29 01:15:25'),(119,'agkulkarni@git.edu',NULL,'$2y$10$98hTagrDuID/swxotfgjOe8Hdwr2Fyx8sDcCwFIBoiYAM/Qs1CQa.','teaching','Active',NULL,'2023-11-29 01:17:16','2023-11-29 01:17:16'),(120,'smitra@git.edu',NULL,'$2y$10$IqDzMi47xhGcrAyDhQPrEO9O2VFmAxfeh6mPsCRvJA6mzPSqfXSse','teaching','Active',NULL,'2023-11-29 01:17:37','2023-11-29 01:17:37'),(121,'sureshkuri@git.edu',NULL,'$2y$10$4.h1CUh9UKPPn2f0fl6o4eeUnq8jwJEv.zApj8xD.UTtWKQKtAdYu','teaching','Active',NULL,'2023-11-29 01:21:48','2023-11-29 01:21:48'),(122,'ivgadadegoudra@git.edu',NULL,'$2y$10$nqbypcv7S6la4OwavrSi.OH9PTIRh1nuCSlLDDIyrkJxsDsPIGyb.','non-teaching','Active',NULL,'2023-11-29 01:21:57','2023-11-29 01:21:57'),(123,'mbbadiger@git.edu',NULL,'$2y$10$GlWGe0Ds/RYVmDf7Tfj7n.7e72ilSLsivlNCAFqcF9DxenxxO04JC','non-teaching','Active',NULL,'2023-11-29 01:23:23','2023-11-29 01:23:23'),(124,'rblakkundi@git.edu',NULL,'$2y$10$iMzxZ2cxidrTsjzxBDkvrO8tjsBnPm8XxEKJUvz8ie7qHqDA2f/pm','non-teaching','Active',NULL,'2023-11-29 01:25:32','2023-11-29 01:25:32'),(125,'sapatil@git.edu',NULL,'$2y$10$KoAxkJCf8O7.e119aoC6We1IuEF8bG.WkN.MHIiFIROxTO/M1lCDy','non-teaching','Active',NULL,'2023-11-29 01:28:48','2023-11-29 01:28:48'),(126,'vrm@git.edu',NULL,'$2y$10$JkIn34xC7rq63JcHMK71lucO5EOHOKgJ8QP7/TIKk1WQOjri.x/Q2','teaching','Active',NULL,'2023-11-29 01:29:13','2023-11-29 01:29:13'),(127,'abgavade@git.edu',NULL,'$2y$10$Tu4Jkb1apv5cTxFs43mNSerjYBTzOofHWHbhFcMGOI30J4plR2H2m','teaching','Active',NULL,'2023-11-29 01:29:32','2023-11-29 01:29:32'),(128,'dysonolkar@git.edu',NULL,'$2y$10$tbEXfzoQqFe/N5AYiOW2ou0Q8aIE5qcOcVHzDuaBpF5u4Fw7/8fgm','non-teaching','Active',NULL,'2023-11-29 01:32:24','2023-11-29 01:32:24'),(129,'spdeshpande@git.edu',NULL,'$2y$10$9Y2YS1PhyhVnT/kNPfEB/O0SmplW9uhZswoKhEWRRAp2ONdDVFLSO','teaching','Active',NULL,'2023-11-29 01:32:48','2023-11-29 01:32:48'),(130,'vvkulkarni@git.edu',NULL,'$2y$10$wSnzl6PxTcYxmE9F8W/vcukf.IxI/.TevIQb64tqna1N126fyVcwu','teaching','Active',NULL,'2023-11-29 01:33:11','2023-11-29 01:33:11'),(131,'bsbhendigeri@git.edu',NULL,'$2y$10$XxaSTWD84PtGYyv2skZ/fev1tn2VK3czrgHxpDykB8By/FmsYWRte','non-teaching','Active',NULL,'2023-11-29 01:36:18','2023-11-29 01:36:18'),(132,'shkulkarni@git.edu',NULL,'$2y$10$j8dkqHweVdL/tvRPLGsHJOMl.d6ZIP09495tJDBDgvU8LpBpdFpnu','teaching','Active',NULL,'2023-11-29 01:36:55','2023-11-29 01:36:55'),(133,'mskurani@git.edu',NULL,'$2y$10$0ot94QDA83OAZFTST4GTReXt2y52uWPQ8svNCpC93HEEmri6tAWvS','non-teaching','Active',NULL,'2023-11-29 01:37:47','2023-11-29 01:37:47'),(134,'smbapat@git.edu',NULL,'$2y$10$xcWaRdIZKi1SHypxUZAQh.Fkqp.dmPpyPdBJUbiOru.vafodIo4bO','teaching','Active',NULL,'2023-11-29 01:40:59','2023-11-29 01:40:59'),(135,'gplokur@git.edu',NULL,'$2y$10$IDhzplQ4KZnTjYj2J8Bdn.1/M1eeseGA1B2EK9p9ESx0HX04c6Cpe','non-teaching','Active',NULL,'2023-11-29 01:41:37','2023-11-29 01:41:37'),(136,'nrsontakki@git.edu',NULL,'$2y$10$VEzSuneuwj5OvzgxSPWFrehziuozuTYgBWR/lGnt9fo8msvf24FYK','non-teaching','Active',NULL,'2023-11-29 01:42:44','2023-11-29 01:42:44'),(137,'dspingat@git.edu',NULL,'$2y$10$i0CYo29Bns1JH09QaFrgo.WHYmoUJJCrSG/fiki1WEebADIXfDXM2','non-teaching','Active',NULL,'2023-11-29 01:45:05','2023-11-29 01:45:05'),(138,'sstarihalkar@git.edu',NULL,'$2y$10$Dd8zyQrl.5HqcLmVdncQJupO3f0cuTQUwC72DdbgzfpJuWgGTiA3G','non-teaching','Active',NULL,'2023-11-29 01:47:15','2023-11-29 01:47:15'),(139,'akp@git.edu',NULL,'$2y$10$X0odFHf/0H6Qs3z416kWr.dwk1ERyESmVmbDp42yzDyY/rJ5WdDgy','teaching','Active',NULL,'2023-11-29 01:49:00','2023-11-29 01:49:00'),(140,'rmyellurkar@git.edu',NULL,'$2y$10$gX10dkf9xenL6oXQxsOLWOhlNoAAe90IP0dO2v/hl3.gXAiMmU.Ke','non-teaching','Active',NULL,'2023-11-29 01:49:12','2023-11-29 01:49:12'),(141,'vikrant_shende@git.edu',NULL,'$2y$10$tAJLt61mBbnAc0VaR2jvi.y1jkGcG871uckjxyjxZUUfZweSSC3Qe','teaching','Active',NULL,'2023-11-29 01:49:31','2023-11-29 01:49:31'),(142,'giridharsudi@git.edu',NULL,'$2y$10$py7zgyz6LzM1DFwiZR/Nb.zaUmy4d3WG34tNRRkQC9NYO/Y9gkkaC','teaching','Active',NULL,'2023-11-29 01:53:23','2023-11-29 01:53:23'),(143,'bsjagati@git.edu',NULL,'$2y$10$KMvYUXZDIuxqsGgp2.leae0jVsLA3Jg7Rr2QoxLq0xpVeeTv6U/dC','teaching','Active',NULL,'2023-11-29 01:53:36','2023-11-29 01:53:36'),(144,'bsbakhedi@git.edu',NULL,'$2y$10$xeyPxybNU9/Wq/.KzwjUlO6Y.XQRYn3oOZYUKNC4AIQD7USoOumQG','non-teaching','Active',NULL,'2023-11-29 01:58:41','2023-11-29 01:58:41'),(145,'sckulkarni@git.edu',NULL,'$2y$10$KfIE6OfZT.m6IDFjtTfl/ueL4OiTAytJyfHUZ5ImCOGx8O1M1sgW2','teaching','Active',NULL,'2023-11-29 02:00:04','2023-11-29 02:00:04'),(146,'asawati@git.edu',NULL,'$2y$10$KYyX8bdlZB5MI1wz8GmWieqNsV9QkSxqqqYg8wFx9iVIm6CDLeUXq','teaching','Active',NULL,'2023-11-29 02:00:30','2023-11-29 02:00:30'),(147,'rbmokashi@git.edu',NULL,'$2y$10$IJ3/TYpkOvrOa7ZLN/Mcqu6QTqFKToW1fVka9KOP/P8Z8GhSLVfL6','non-teaching','Active',NULL,'2023-11-29 02:00:37','2023-11-29 02:00:37'),(148,'ladeshpande@git.edu',NULL,'$2y$10$aacYR0FXn99EPH9l9uZTHO9Wy5ocujUun8/igXG6Ef2IYna.Lf/Pi','non-teaching','Active',NULL,'2023-11-29 02:03:58','2023-11-29 02:03:58'),(149,'gdgokak@git.edu',NULL,'$2y$10$qtTRcz/Jb22xy99u62aCyukHvY6o51/Li9USNVt7IPsPrX7vF6qxi','teaching','Active',NULL,'2023-11-29 02:04:05','2023-11-29 02:04:05'),(150,'pgholkar@git.edu',NULL,'$2y$10$U8sKqGeJl/ImULE42dIDsu8QXapN2g888lF3Wc1pj8ETN1PGt49kC','non-teaching','Active',NULL,'2023-11-29 02:04:15','2023-11-29 02:04:15'),(151,'brpandurangi@git.edu',NULL,'$2y$10$GvdffthEkTAj6DXOkB64XOlImMlCydPV1bxXLGEzAdwpEuylYXdjO','teaching','Active',NULL,'2023-11-29 02:05:14','2023-11-29 02:05:14'),(152,'pshalannavar@git.edu',NULL,'$2y$10$Nj1SAyrF7tYQ99XdPqVZ8u8B..aY8w5I1/IBbRpopSGkK80dqfwk.','non-teaching','Active',NULL,'2023-11-29 02:08:13','2023-11-29 02:08:13'),(153,'vk@git.edu',NULL,'$2y$10$2JXfe.1Jau5MsnbXbI/H4uXNQ1dEhMpwln2KZGIV8bequgBFyDfoy','teaching','Active',NULL,'2023-11-29 02:09:59','2023-11-29 02:09:59'),(154,'dkkatti@git.edu',NULL,'$2y$10$CrrJWbXp59n7g5zyRrp2KurbSKjk40QGS9IJUzRJV8IkZ0NLrYILK','non-teaching','Active',NULL,'2023-11-29 02:10:03','2023-11-29 02:10:03'),(155,'snbhavikatti@git.edu',NULL,'$2y$10$qtIq8DZJN9Sfz65a69aj..KNNNTm6HOgnSJV95zOpZKndWLrecEBS','teaching','Active',NULL,'2023-11-29 02:12:04','2023-11-29 02:12:04'),(156,'uinchal@git.edu',NULL,'$2y$10$BboN/ia0yHZ9Go1EVcKjpOmKcSnoX49rVaHG1PrfGYWDn0yWGGkfG','non-teaching','Active',NULL,'2023-11-29 02:12:23','2023-11-29 02:12:23'),(157,'sKoramaddi@git.edu',NULL,'$2y$10$sKSr7psnpdskJKOrYkqtxu/zhH6yeKT8j3bZPNTF5oQ0PEpekoFY.','non-teaching','Active',NULL,'2023-11-29 02:16:38','2023-11-29 02:16:38'),(158,'sapatil1@git.edu',NULL,'$2y$10$iZtGUj..BQVOALHfsgY6Yus0YtqXnRn5/1M3ikvIcIwxUXxWMoN4i','non-teaching','Active',NULL,'2023-11-29 02:17:29','2023-11-29 02:17:29'),(159,'vbdeshmukh@git.edu',NULL,'$2y$10$OAar4CCu8GYSgwnorYFmZ.GHuQ/nY2H9ZcMg48PBfZjP2ja0HP62q','teaching','Active',NULL,'2023-11-29 02:19:40','2023-11-29 02:19:40'),(160,'sbpatil@git.edu',NULL,'$2y$10$oQdg2zwHBx0W8wFjGv8FPOWCB1XnXFv3ionsDhANvxxNUqG9UIX6e','non-teaching','Active',NULL,'2023-11-29 02:22:08','2023-11-29 02:22:08'),(161,'vrkulkarni@git.edu',NULL,'$2y$10$ANboVkASV0vOQbHQxjNgDOu3c55f5rgRCff2PcKDtKRDYTaacdkDm','non-teaching','Active',NULL,'2023-11-29 02:22:19','2023-11-29 02:22:19'),(162,'aagadgil@git.edu',NULL,'$2y$10$WeVDftkszYGJFn1U2PJ5Bu1qZfI4g7nFHJyoN41PUZQSbGMOB.gx6','teaching','Active',NULL,'2023-11-29 02:26:02','2023-11-29 02:26:02'),(163,'gpbandi@git.edu',NULL,'$2y$10$oTqRUnMm4u6atgHF9fjffuJPddAA0Zazd4Cj0YCRobgFnBQfZE1vi','non-teaching','Active',NULL,'2023-11-29 02:27:14','2023-11-29 02:27:14'),(164,'ddchougale@git.edu',NULL,'$2y$10$HZUwYsXL5QTKxgkeH4Z4wuNvY1YyZLT5/4M.9basZtuq9h6aWqAey','non-teaching','Active',NULL,'2023-11-29 02:27:49','2023-11-29 02:27:49'),(165,'srkulkarni@git.edu',NULL,'$2y$10$TuIKynkTrAyW1feyk1ue/OnHjQxhApO5romdP6fN51GIWsR3o1YBm','teaching','Active',NULL,'2023-11-29 02:28:00','2023-11-29 02:28:00'),(166,'abhishekd@git.edu',NULL,'$2y$10$Yl2Pcsm0PXAyBCk9/yS0luPtanztd1BehdZe.qEr46MtviyYAwsxO','teaching','Active',NULL,'2023-11-29 02:29:42','2023-11-29 02:29:42'),(167,'gsguggari@git.edu',NULL,'$2y$10$vyrn4zaPPWHwjRGztbH.0Ocmtk25cOA92WlMInwtkmR9I6nMhPDp6','teaching','Active',NULL,'2023-11-29 02:32:00','2023-11-29 02:32:00'),(168,'ganeshchate@git.edu',NULL,'$2y$10$b6zYRmrLHvLP00rWLWAgNeqgtp.Cg28k4uZKLG9QgzJ2VEvwMr8E.','teaching','Active',NULL,'2023-11-29 02:35:54','2023-11-29 02:35:54'),(169,'smkeshkamat@git.edu',NULL,'$2y$10$ajfdvTAZt9slde.Oig3rquta3hz30HNtAgxAIJjvs5LtRTb.2ujuS','teaching','Active',NULL,'2023-11-29 02:38:45','2023-11-29 02:38:45'),(170,'vmmurgod@git.edu',NULL,'$2y$10$OreOq/eNalXP3fvuchq8nuF2rb1Vt8.RGrxJriUkUrDqe7S2QjODC','teaching','Active',NULL,'2023-11-29 02:40:25','2023-11-29 02:40:25'),(171,'ssbandi@git.edu',NULL,'$2y$10$A2HMq4.ogGsAPU.FG4ymP.6JLANRlSe2vDwmqZOFZMgfuUZKZixMC','non-teaching','Active',NULL,'2023-11-29 02:42:45','2023-11-29 02:42:45'),(172,'sssantaji@git.edu',NULL,'$2y$10$VmpF.CnGJ.qRESwCmh955.8fhANtjGTz.jJbBaGS/lREWRc3/EtAK','teaching','Active',NULL,'2023-11-29 02:45:23','2023-11-29 02:45:23'),(173,'rbkumbar@git.edu',NULL,'$2y$10$p/LyPAJhzKMmuOW3FmciveHM5Qx71ILYottNQ2PR3CpsRQSpdsnWy','non-teaching','Active',NULL,'2023-11-29 02:48:09','2023-11-29 02:48:09'),(174,'vbadiger@git.edu',NULL,'$2y$10$D5LPIuj94eMUIZ9n6vfwQOaveuGJVlHsucCfXAkGBfPVGUyLqankW','teaching','Active',NULL,'2023-11-29 02:48:29','2023-11-29 02:48:29'),(175,'njinamdar@git.edu',NULL,'$2y$10$7XucATki/odjOywhiW0JYen4HV.dllhGl03S1mvCXUoToCJzSjPhO','teaching','Active',NULL,'2023-11-29 02:48:54','2023-11-29 02:48:54'),(176,'ssinamdar@git.edu',NULL,'$2y$10$76O6PBUpp7xfZm2sdaAg1.rYhSfComkClbiMa.TMdfAoZuWE6fKBC','non-teaching','Active',NULL,'2023-11-29 02:52:27','2023-11-29 02:52:27'),(177,'pukalkundri@git.edu',NULL,'$2y$10$h.rPeMx0NrDVF7kxZ4wXVuCRjLrVWXJsBBuxmXOQL/ZrF6Akb.1Ym','teaching','Active',NULL,'2023-11-29 04:00:41','2023-11-29 04:00:41'),(178,'sjpatil@git.edu',NULL,'$2y$10$LOvLRsh8i2pU3kUb6wzu2.qXxVTwh4fwsRoK3ZYkly21IkEUpFSSS','teaching','Active',NULL,'2023-11-29 04:04:57','2023-11-29 04:04:57'),(179,'mbchaugule@git.edu',NULL,'$2y$10$ix8Gq7W9qgSnoRvfljwJsuZ0S2t0YO06.qrh5vZJ04nUW2a0TA306','teaching','Active',NULL,'2023-11-29 04:08:24','2023-11-29 04:08:24'),(180,'scjotawar@git.edu',NULL,'$2y$10$X3zVxVcfEBTB.g.CPOTd/O.52aI4QMIX9Acu4Diu4gtqVlu19IQSS','non-teaching','Active',NULL,'2023-11-29 04:09:08','2023-11-29 04:09:08'),(181,'sknerli@git.edu',NULL,'$2y$10$PpwpDufrZ1Ak7DcglMBWE.ktYlVJKZ2QyQxL/fDitOyvd39RPIOiG','non-teaching','Active',NULL,'2023-11-29 04:09:28','2023-11-29 04:09:28'),(182,'rktavildar@git.edu',NULL,'$2y$10$CELu36dt4hD/nl4sA5OKk.CDgl0ntsQyDryXqGWbU25n6XmHUUSCe','teaching','Active',NULL,'2023-11-29 04:09:33','2023-11-29 04:09:33'),(183,'dskulkarni@git.edu',NULL,'$2y$10$AGnOMuPxhWaTRraG8MV56uZ2gG/PsEthvOL4AX8VC.XbPWjsueOHu','teaching','Active',NULL,'2023-11-29 04:12:22','2023-11-29 04:12:22'),(184,'anmol_jb@git.edu',NULL,'$2y$10$iziyYPRw35hmjDZCgmoRKukCVZupM0PTquylMg5VaC9aQfReDS8Tq','non-teaching','Active',NULL,'2023-11-29 04:14:06','2023-11-29 04:14:06'),(185,'uudeshpande@git.edu',NULL,'$2y$10$urHdmrrfDYaXPjXC9voyBe2cEPKxkiBVsZsAQYB9QnXr4AVm.Hhq2','teaching','Active',NULL,'2023-11-29 04:15:55','2023-11-29 04:15:55'),(186,'tthawal@git.edu',NULL,'$2y$10$e.vfazSvRLWrNb2SSB3NUeY5lbpNVT.IFhBX1LVQviWUypXwtms32','teaching','Active',NULL,'2023-11-29 04:15:58','2023-11-29 04:15:58'),(187,'umbirje@git.edu',NULL,'$2y$10$2DfaEPhzd/VwDFtbN87ZzO.4fEPIFJukkmOHS4gNHd2U3mAS3NR5W','non-teaching','Active',NULL,'2023-11-29 04:19:03','2023-11-29 04:19:03'),(188,'mrkatabugol@git.edu',NULL,'$2y$10$RTs0IAmFpEVCdOvq6uB/COE0tHG6KWSFCIBUogSxDLG.J5RqnrEyO','non-teaching','Active',NULL,'2023-11-29 04:19:08','2023-11-29 04:19:08'),(189,'aakulkarni@git.edu',NULL,'$2y$10$K//0PxLsVkiSY5s2bfKleeSgb.7uMxiRtuGj8m.tVShCnT/WjQgqK','teaching','Active',NULL,'2023-11-29 04:19:56','2023-11-29 04:19:56'),(190,'bnnadpurohit@git.edu',NULL,'$2y$10$lVb/zKJAhDz8TtY5JuRdR.wiNT9b/E2GCjZx16P8V0CBK.LKWQDBy','teaching','Active',NULL,'2023-11-29 04:20:16','2023-11-29 04:20:16'),(191,'bchundre@git.edu',NULL,'$2y$10$UceircT8B9QAVAPim.TwXuRjszgG60dol1M/Mh9cC9h/aBsJGXphm','non-teaching','Active',NULL,'2023-11-29 04:22:35','2023-11-29 04:22:35'),(192,'mrpatil@git.edu',NULL,'$2y$10$7lrML0J5LtT7NGvjRAiUxOlwJKOVMe.jGcQF9qxN8oiqseDsf2xk.','non-teaching','Active',NULL,'2023-11-29 04:26:09','2023-11-29 04:26:09'),(193,'bknayak@git.edu',NULL,'$2y$10$2acS71VhicQv4ROZujI6ZOqjg2IwmuGfZkprTFzn6z8.oOjjgdob.','non-teaching','Active',NULL,'2023-11-29 04:26:13','2023-11-29 04:26:13'),(194,'ssnargundkar@git.edu',NULL,'$2y$10$BrJGp3H/tFMn49ZsQmQ5f.heEHjdu0y4T.EvtTI4xNQq3uxtb7FYW','teaching','Active',NULL,'2023-11-29 04:27:55','2023-11-29 04:27:55'),(195,'vnmarihal@git.edu',NULL,'$2y$10$O1riXE6JjQBntgkJe2vquuqP0C6dIDbbPSey0sxh7WtvZPjSF/sOG','non-teaching','Active',NULL,'2023-11-29 04:29:33','2023-11-29 04:29:33'),(196,'ppkakamari@git.edu',NULL,'$2y$10$4j0xghepnrbX4zqEkK86A.u6BTaFmW4rGt7962uksEJYgr1a1U6d.','teaching','Active',NULL,'2023-11-29 04:31:23','2023-11-29 04:31:23'),(197,'pcsattyennavar@git.edu',NULL,'$2y$10$F7wvafwWnfgjRVJM3cRrp.embIHQ8wnO2x3GUYYfUrTL0HMWax91C','non-teaching','Active',NULL,'2023-11-29 04:32:55','2023-11-29 04:32:55'),(198,'phbellad@git.edu',NULL,'$2y$10$4adlG3Hc/gAA/t5ygNxI9.t5JYHVTdLwZbPyHepJWwugpWR0Ya0f.','non-teaching','Active',NULL,'2023-11-29 04:33:55','2023-11-29 04:33:55'),(199,'sssantaji1@git.edu',NULL,'$2y$10$Xs7txgBHNqn5oarkbLFMquXWF3ftkDtAZBoMfpkeHpeEYIJQLXzeK','teaching','Active',NULL,'2023-11-29 04:34:42','2023-11-29 04:34:42'),(200,'nmpadmannavar@git.edu',NULL,'$2y$10$81zvnfPWPnnRk4vlMp/CxeKLcZqw408tQrJ2DASSaHk0fwB0hXwUG','non-teaching','Active',NULL,'2023-11-29 04:38:09','2023-11-29 04:38:09'),(201,'shivappa@git.edu',NULL,'$2y$10$G3cnIKMBXgxjAKbzNLk.ruPHUM42b3W9OHe8VKjCppL1VSWWTHXsa','non-teaching','Active',NULL,'2023-11-29 04:39:29','2023-11-29 04:39:29'),(202,'kdkattimani@git.edu',NULL,'$2y$10$HQmki7yHw38kCfWUts65.ulCP6f8KW8rCyNRrgbXWgYOr33oqjj2m','teaching','Active',NULL,'2023-11-29 04:42:05','2023-11-29 04:42:05'),(203,'srlatkar@git.edu',NULL,'$2y$10$E/WyjRyDCH2ahcxUEJGGUuUGG7mVNhdjbjb3SwVtCpaEbc8MFsTj6','non-teaching','Active',NULL,'2023-11-29 04:44:00','2023-11-29 04:44:00'),(204,'vrmathad@git.edu',NULL,'$2y$10$gBEbSQ1grBAo8VuPT3h/4eM7YoDaTVd98V5ONJEGmqY2R5B7lguUC','non-teaching','Active',NULL,'2023-11-29 04:44:28','2023-11-29 04:44:28'),(205,'maheshkori@git.edu',NULL,'$2y$10$59CaA.AvfRzhb1Y5eVq5W.ZUv0Pj5nFRvrJyBpc4aM4NJUmNhavI6','teaching','Active',NULL,'2023-11-29 04:47:05','2023-11-29 04:47:05'),(206,'smkatamble@git.edu',NULL,'$2y$10$DqmkXKmQTjQCcfJm.wKnruKmEKBrXYr7AIycOHvJ3XdFeLfEoS5CK','non-teaching','Active',NULL,'2023-11-29 04:49:24','2023-11-29 04:49:24'),(207,'psajawan@git.edu',NULL,'$2y$10$5QAjC014d345jihQUngoGeHOoWto9Mg71AusZyukopfvpBSYSOMw.','teaching','Active',NULL,'2023-11-29 04:49:29','2023-11-29 04:49:29'),(208,'mrkulkarni@git.edu',NULL,'$2y$10$HxRkw2Wy6EArh50TnGf1peWvbu9eFPGhsI7nN3uwW6//kwwdpd.vi','non-teaching','Active',NULL,'2023-11-29 04:50:26','2023-11-29 04:50:26'),(209,'ynpotdar@git.edu',NULL,'$2y$10$YX6TG1CYxewVLopp5rVrNOADBAMY41PHoaPE6/HvEvKfpPnwHNuqq','teaching','Active',NULL,'2023-11-29 04:52:56','2023-11-29 04:52:56'),(210,'bnchougula@git.edu',NULL,'$2y$10$0U0fGHRE2d/m2ehR/HN1POGFMYfZQnR7JpJKO42eiWdbhR1f9heVa','non-teaching','Active',NULL,'2023-11-29 04:53:04','2023-11-29 04:53:04'),(211,'vpdeshpande@git.edu',NULL,'$2y$10$dPvCfVF0xNSoBN55w8.26e/3Ahfmn/4uWvkjmpBS3TwrV523rv9gi','teaching','Active',NULL,'2023-11-29 04:53:51','2023-11-29 04:53:51'),(212,'tdgangodkar@git.edu',NULL,'$2y$10$PZ2akgs8gfBgMD52lKhRlONdP5sGFFyMFRoAiN4Q0EBsAh2j4AGCy','non-teaching','Active',NULL,'2023-11-29 04:56:04','2023-11-29 04:56:04'),(213,'maheshsm@git.edu',NULL,'$2y$10$orlY6/C28Uxou0kDe2HSTeOk8OdVWV9v6OntvxTc7WlYET.Fg8vIu','non-teaching','Active',NULL,'2023-11-29 04:58:25','2023-11-29 04:58:25'),(214,'aadeshpande@git.edu',NULL,'$2y$10$0KjCR/AsVO9k/.AW3GxZ1OocCz4P17AwZEfIqA2n1qzwTcU6AFP5C','teaching','Active',NULL,'2023-11-29 04:59:28','2023-11-29 04:59:28'),(215,'rbkoti@git.edu',NULL,'$2y$10$3V8Ti/J9kZd8iLTikXPPY.JLXgEKVACyNhOZX1Knb9O8T6oUGMhEC','teaching','Active',NULL,'2023-11-29 05:00:24','2023-11-29 05:00:24'),(216,'shrinivas@git.edu',NULL,'$2y$10$iLbIsGOaTVxvXS2YC2lzeuVxOspI0jD1SThsLO056nU7JczNt3eHW','non-teaching','Active',NULL,'2023-11-29 05:02:36','2023-11-29 05:02:36'),(217,'prajakta.mech@git.edu',NULL,'$2y$10$Gobc08C2Qxz/Xc297vrA1u1DMpAUJKJ/lEv31Im9YoY8fFE5id/We','teaching','Active',NULL,'2023-11-29 05:03:21','2023-11-29 05:03:21'),(218,'rpshrikhande@git.edu',NULL,'$2y$10$MbjHWcaW8toG5gw1kHum1uaWVUTgnKQa2LANnLvl8VfqCnThsY1Qy','non-teaching','Active',NULL,'2023-11-29 05:04:23','2023-11-29 05:04:23'),(219,'pdjoshi@git.edu',NULL,'$2y$10$UIwHzUmEbhkn4KQRwZ7GVueUE5cCXGoX2DKNwz5bRMXLrFhyCtWvO','teaching','Active',NULL,'2023-11-29 05:05:13','2023-11-29 05:05:13'),(220,'rsdeshpande@git.edu',NULL,'$2y$10$CPiQHoE5fXy9tUp5AWvfuuPAtBwnZH272P4ESbyySCis9cCtN1ehe','non-teaching','Active',NULL,'2023-11-29 05:05:30','2023-11-29 05:05:30'),(221,'rooparao@git.edu',NULL,'$2y$10$pCyXJrVhSbRaJG0/lirnte1eC0nTXenjXtWNMlVMeCmJMdxMQTB76','teaching','Active',NULL,'2023-11-29 05:07:02','2023-11-29 05:07:02'),(222,'vvsimu@git.edu',NULL,'$2y$10$DdzVc4Zf0S.o7PL2S.0bC.4HQRcIjuwafXxuqBcBNedvuu5Z5eTmW','non-teaching','Active',NULL,'2023-11-29 05:09:23','2023-11-29 05:09:23'),(223,'vkaithal@git.edu',NULL,'$2y$10$PYSgCkzBStBbIfGXQM68Oe/L6kC1KZrbxjhgPn3mElr9.cYmgH9v2','teaching','Active',NULL,'2023-11-29 05:09:43','2023-11-29 05:09:43'),(224,'askarekar@git.edu',NULL,'$2y$10$Zoptt3cC7ICuR0qbE98SLelmHniMS5GvWnpZpluJgNFGO.9gttywu','non-teaching','Active',NULL,'2023-11-29 05:11:08','2023-11-29 05:11:08'),(225,'vgtiwary@git.edu',NULL,'$2y$10$/230CDd3.4DkA618TbpPGeYbVeMSSOL3FLIddtLL4ccvNTjND2.hu','teaching','Active',NULL,'2023-11-29 05:11:52','2023-11-29 05:11:52'),(226,'jyothibr@git.edu',NULL,'$2y$10$08rJpU.EaTFSQII5.2cvwO7k.6tika.lOPrL9fwy8sQF4WT6yjvqm','teaching','Active',NULL,'2023-11-29 05:15:58','2023-11-29 05:15:58'),(227,'spavadhani@git.edu',NULL,'$2y$10$.5cWgMAQz9NeTc/oLMYZhubuS/Hp2NWxHermqL3KzIVFpZayM6Ay.','teaching','Active',NULL,'2023-11-29 05:16:02','2023-11-29 05:16:02'),(228,'pbparamaj@git.edu',NULL,'$2y$10$RYZvUDb0shyUmjAo/59.relbUwhgyqyd36Zbamp1IZlOMSf5VKxnG','non-teaching','Active',NULL,'2023-11-29 05:17:30','2023-11-29 05:17:30'),(229,'nagrajpattar@git.edu',NULL,'$2y$10$sXQAkvRJbmSd1jh1eSlt6uYHHf22afFfmKg9T8PAxPFqrkLXBJv9m','non-teaching','Active',NULL,'2023-11-29 05:19:40','2023-11-29 05:19:40'),(230,'phkulkarni@git.edu',NULL,'$2y$10$GhhNqhgsPOIA7uSFDY4aLeHWMG.2lui7/tD90k0WBl3DlYZGO1Dte','teaching','Active',NULL,'2023-11-29 05:19:42','2023-11-29 05:19:42'),(231,'aadev@git.edu',NULL,'$2y$10$EOhz2sYHa2XiRj1b6rogjOobhJd2oRns9VpptFcpihsYtlH1ZxT5C','non-teaching','Active',NULL,'2023-11-29 05:21:52','2023-11-29 05:21:52'),(232,'vvdeshpande1@git.edu',NULL,'$2y$10$11UgqqU02WwF296ujawSQOyJqDGH/DRXbq5I7auBsW8BVkfCOMnFa','teaching','Active',NULL,'2023-11-29 05:25:00','2023-11-29 05:25:00'),(233,'ssmahajan@git.edu',NULL,'$2y$10$oGc/XSsHtcqwkJotepwXEerOrFt2hzPT1WwZDa5KtKSNTZlSqyrta','non-teaching','Active',NULL,'2023-11-29 05:25:32','2023-11-29 05:25:32'),(234,'gpkadam@git.edu',NULL,'$2y$10$LuTyZrBCOuayLoknGpBrtOqGNfjR8JujjUkZI9EBeMTJfAiKqXZuS','teaching','Active',NULL,'2023-11-29 05:27:55','2023-11-29 05:27:55'),(235,'ppmirji@git.edu',NULL,'$2y$10$lcXvNrDkyieq3r4InO2WJ.YIZm374v44NHp.AsGGhwbAlA6yFKVB.','teaching','Active',NULL,'2023-11-29 05:29:28','2023-11-29 05:29:28'),(236,'agkulkarni1@git.edu',NULL,'$2y$10$OMqOfQCMAOAYKLEUk6F41.dlx/dBMNqDFVTMpaS2elG4UOVYIWGnu','non-teaching','Active',NULL,'2023-11-29 05:29:49','2023-11-29 05:29:49'),(237,'sksawant@git.edu',NULL,'$2y$10$Zc2cCAL63ibTKOvss9wxZOkZz4Wt0Gqe4q2GzEt/bwhMSGVaX8wqK','non-teaching','Active',NULL,'2023-11-29 05:30:18','2023-11-29 05:30:18'),(238,'rkshinagi@git.edu',NULL,'$2y$10$MpMLEVSJHC0RRfpvOBQ42OdFjU0uN.tji7AB6A9UD6D0pHe26DmXC','non-teaching','Active',NULL,'2023-11-29 05:34:00','2023-11-29 05:34:00'),(239,'salagwadi@git.edu',NULL,'$2y$10$ZK.vE5yTtV9FcxuVZaHZDue9qS46K5lirAEyb8TfkmrFNEcId6ghy','non-teaching','Active',NULL,'2023-11-29 05:35:53','2023-11-29 05:35:53'),(240,'manjunathm@git.edu',NULL,'$2y$10$H3u2NDTcCe9J4N.HMhajb.mgqAL3iXmEEbzRFgf6y5Yst/s9/Nt.m','teaching','Active',NULL,'2023-11-29 05:36:22','2023-11-29 05:36:22'),(241,'rkneraserkar@git.edu',NULL,'$2y$10$rgH0UYYO.ZJXQyI0dCAWK.QtIl123clZW.5P1V9cCWD37bs1ANscS','non-teaching','Active',NULL,'2023-11-29 05:39:19','2023-11-29 05:39:19'),(242,'sdkulkarni@git.edu',NULL,'$2y$10$0G2Ab2Glu4hHngdkHjjyQOevsAghUeRoBwcdr0VnorEqNua4gt.zK','teaching','Active',NULL,'2023-11-29 05:39:29','2023-11-29 05:39:29'),(243,'mmsattigeri@git.edu',NULL,'$2y$10$PyMRy9NmdYpN.gdUZci46eWF7rpg9Jj5RTcdHDh3CEp.L3VC8BD6a','teaching','Active',NULL,'2023-11-29 05:40:50','2023-11-29 05:40:50'),(244,'pblakkundi@git.edu',NULL,'$2y$10$oMAgVpUDNSraDXzMmdTEj.s8dxc1ZcXTIC0OVbztg86yyC.uBLpt6','non-teaching','Active',NULL,'2023-11-29 05:41:26','2023-11-29 05:41:26'),(245,'rrpatil@git.edu',NULL,'$2y$10$M9gkQUwfJZkchj38YeV.2.UsSnl7eEeOAlvJbfzrakP6Axgw6fCGK','non-teaching','Active',NULL,'2023-11-29 05:43:11','2023-11-29 05:43:11'),(246,'kapatil@git.edu',NULL,'$2y$10$TB9hq.lAPS31e6UCTu4O2.sEec0HV97SUsqfdxPzRVuquJH1uECzu','non-teaching','Active',NULL,'2023-11-29 05:48:17','2023-11-29 05:48:17'),(247,'sskulkarni@git.edu',NULL,'$2y$10$.YupE.fTA/wlKMPtZAAJEO4OJ0pQIG.yObPkoIEmnayJtPPACHYIq','teaching','Active',NULL,'2023-11-29 05:49:11','2023-11-29 05:49:11'),(248,'mrmokashi@git.edu',NULL,'$2y$10$gH6MYdk/Gd5CDm9nVwtvDuKjDrrCfyLFDiluleyAL31BczqL7xnAO','non-teaching','Active',NULL,'2023-11-29 05:49:26','2023-11-29 05:49:26'),(249,'dmbadiger@git.edu',NULL,'$2y$10$hQIkOlXAWyOTJT.28MpY7OjmS/pXE45xxTACkbXxS2cwU8prZxPbm','non-teaching','Active',NULL,'2023-11-29 05:52:33','2023-11-29 05:52:33'),(250,'avghadashi@git.edu',NULL,'$2y$10$IOSkStp4pYGxRZV8Xyw8v.6KBwhPKmtis2VRGFI1NGTOH20DWfVyG','non-teaching','Active',NULL,'2023-11-29 05:53:48','2023-11-29 05:53:48'),(251,'harishhk@git.edu',NULL,'$2y$10$HVzbSDY.N8KuFF5uXnvh4Ohz.wVUUAz4CGgzJRASSXwBqX11i3JES','teaching','Active',NULL,'2023-11-29 05:54:48','2023-11-29 05:54:48'),(252,'pdkulkarni@git.edu',NULL,'$2y$10$aW.ntx7ps5Rd3xmnkVGEFeV.Gfn8MhZbOmymmnvQe0BCSZoU.9ryG','teaching','Active',NULL,'2023-11-29 05:56:33','2023-11-29 05:56:33'),(253,'skangralkar@git.edu',NULL,'$2y$10$egypTd/wnXDI/iKPblVSceI7OIj2qN8cN7dnqnJOsv8sg8/VwfgI2','non-teaching','Active',NULL,'2023-11-29 05:58:06','2023-11-29 05:58:06'),(254,'skumbhar@git.edu',NULL,'$2y$10$qFVvdequZqvOnM4KKb.VJOiRPcAqEdz.14xJSRjO4x3dGaqkUOW1G','non-teaching','Active',NULL,'2023-11-29 05:58:18','2023-11-29 05:58:18'),(255,'padmad@git.edu',NULL,'$2y$10$SzZ87aEYoQWaANfpt86UiO8iBrVKypAH7HYVXokuagM4zGVjW/fl.','teaching','Active',NULL,'2023-11-29 06:02:21','2023-11-29 06:02:21'),(256,'rjkadkol@git.edu',NULL,'$2y$10$qvUOWXLC75Aw.0qmSccRr.lWzCP781lN/IDlHvDb.ZsNGEv4XJvoK','teaching','Active',NULL,'2023-11-29 06:06:06','2023-11-29 06:06:06'),(257,'psupparamani@git.edu',NULL,'$2y$10$Rr4sLW5aYzvo9rgqvnJRbOCQ1baR8RF1Nk5XucYcPmfPojs28M.V6','teaching','Active',NULL,'2023-11-29 06:11:09','2023-11-29 06:11:09'),(258,'mathadks@git.edu',NULL,'$2y$10$bT9iycs6ru6gbF5sz4/Ib..K/Z9nR1VM5TxXrEQKJ8q2/GMiLPHq2','teaching','Active',NULL,'2023-11-29 06:15:23','2023-11-29 06:15:23'),(259,'sudhirmadi@git.edu',NULL,'$2y$10$jvxFpzv0wdgzhfQLkNaIaObcUPB2XrF.20vbkjH0wYVEePIiMi4qi','teaching','Active',NULL,'2023-11-29 06:18:36','2023-11-29 06:18:36'),(260,'vsrajpurohit@git.edu',NULL,'$2y$10$hjvF5x3Vj1FwEohjtAqtQeQh1crnXVkJDXziu36s9a1BYN7MSlH2K','teaching','Active',NULL,'2023-11-29 06:19:36','2023-11-29 06:19:36'),(261,'nkarekar@git.edu',NULL,'$2y$10$HQfFhdKTZXeJYRDvJrNZkeQP24B/m7gzS3usZnRB/4PimErZFflTa','teaching','Active',NULL,'2023-11-29 06:21:36','2023-11-29 06:21:36'),(262,'sbdeshpande@git.edu',NULL,'$2y$10$tf.F4PxfTt.BqI9mij8FUucjjWa8YXRXyrIKPuc8Mf.c6tyMQlX32','teaching','Active',NULL,'2023-11-29 06:24:23','2023-11-29 06:24:23'),(263,'sgsanu@git.edu',NULL,'$2y$10$h/HL1Y4qRO0iCfH0.e/mTOsH7ammsQ126OWTHvyZlE/NgBFRKkYpS','teaching','Active',NULL,'2023-11-29 06:29:09','2023-11-29 06:29:09'),(264,'mmmath@git.edu',NULL,'$2y$10$soaYpi9Gcv1mibSy./wFVOhH8mUzNqPwcI24U0FvGoT2cC9QHlS5e','teaching','Active',NULL,'2023-11-29 06:30:24','2023-11-29 06:30:24'),(265,'@git.edu',NULL,'$2y$10$edTy4QISStoyU5j2ADj1Y.TadooVPzb9Qh.upoLYD4375hB0BwvHG','teaching','Active',NULL,'2023-11-29 06:34:34','2023-11-29 06:34:34'),(266,'rdkavilkar@git.edu',NULL,'$2y$10$4xfAMDiIRH1O.QIOOn99henfToCD2F6EMVdBBYZqvz0F7KIuUbPhW','teaching','Active',NULL,'2023-11-30 23:30:41','2023-11-30 23:30:41'),(267,'kirankt@git.edu',NULL,'$2y$10$1etjVxJQjvWAwctVzSbZueZXUGMJE/1F59s4hYGq2bp4ZFHFVIC6q','teaching','Active',NULL,'2023-11-30 23:31:28','2023-11-30 23:31:28'),(268,'nrtadkodkar@git.edu',NULL,'$2y$10$ErvWip1aEKk5GjG2xPtO0O2pIsdi0UCcXBefERAG1nwvtPyYZBbbu','teaching','Active',NULL,'2023-11-30 23:34:26','2023-11-30 23:34:26'),(269,'sannakkisanjeev@git.edu',NULL,'$2y$10$MxYR56TL6Qrq3GWdWkCIN.XHF/iQzqFgsy6NgcZ5AcZTTHddhJKkO','teaching','Active',NULL,'2023-11-30 23:35:51','2023-11-30 23:35:51'),(270,'sbalekundri@git.edu',NULL,'$2y$10$kO1L0enlGqLxG.4hkR2zXODAi/bJwH.NzIlHGtlQ11atxIzTF0nya','non-teaching','Active',NULL,'2023-11-30 23:37:15','2023-11-30 23:37:15'),(271,'rsdharmayat@git.edu',NULL,'$2y$10$X6dz2Hc/wK1Afaz3Ev3pOuHJSbRcNbbSP2JEI5GRlr4RhdWqSXDR2','teaching','Active',NULL,'2023-11-30 23:38:19','2023-11-30 23:38:19'),(272,'sskanbargi@git.edu',NULL,'$2y$10$gF/x3jfVQ53mYXADwakgbe.2QVeCN4DnL6hfN6JMwhOxYYSC135Ka','non-teaching','Active',NULL,'2023-11-30 23:38:39','2023-11-30 23:38:39'),(273,'dakulkarni@git.edu',NULL,'$2y$10$Hpo4JDgwRTbIBPuPZl1rUOwgIGNZcJEIm/jiEoQiifnrSZR67mchG','teaching','Active',NULL,'2023-11-30 23:40:27','2023-11-30 23:40:27'),(274,'smpujeri@git.edu',NULL,'$2y$10$TB8DgvLpu1NR5VtVJLMOVepAu7HWZ9WN57Y6Ur6TmgJ2QrTz14EHu','non-teaching','Active',NULL,'2023-11-30 23:42:33','2023-11-30 23:42:33'),(275,'rdbastwadkar@git.edu',NULL,'$2y$10$OqjhJNiAMewj4Ua3mm8RNOxPjMnot8rSQ.2BYyWjzzEed5Pd3mtu6','non-teaching','Active',NULL,'2023-11-30 23:43:16','2023-11-30 23:43:16'),(276,'avprasadi@git.edu',NULL,'$2y$10$JjiAwlKseZ6fJ1wCSNuNb.NxPOYXJkEK5TpcCwGzZtSXf7Z9wFmdu','teaching','Active',NULL,'2023-11-30 23:45:07','2023-11-30 23:45:07'),(277,'smore@git.edu',NULL,'$2y$10$iU/JibleFGxge.HwUZD47OTTf9b0Z6eHuCxPyi63OaJ1sI6fbiEoe','non-teaching','Active',NULL,'2023-11-30 23:47:20','2023-11-30 23:47:20'),(278,'kpsambrekar@git.edu',NULL,'$2y$10$vH4XP/Zlo30z4z0Ot.jh5e0Zpo64JFsmjoK1.YG3f.PMsesTLtQ6S','teaching','Active',NULL,'2023-11-30 23:47:31','2023-11-30 23:47:31'),(279,'avzende@git.edu',NULL,'$2y$10$6Xm6RRcXM2sQTLuIjRHApeufw3cyQHBj4XP2PBYPACJLSaJb/7tQa','non-teaching','Active',NULL,'2023-11-30 23:50:23','2023-11-30 23:50:23'),(280,'vadeshpande@git.edu',NULL,'$2y$10$RVj8qRCfglzq8CxFSowDgeKPn4huxIwNf7IyCto5O.640VJvA7nYq','non-teaching','Active',NULL,'2023-11-30 23:52:44','2023-11-30 23:52:44'),(281,'umesh_k@git.edu',NULL,'$2y$10$5EdY51IhetTK2/t5V66XJOv/DNJRPlu.aaVtgi7kGYfY6aDW/eDW6','teaching','Active',NULL,'2023-11-30 23:53:40','2023-11-30 23:53:40'),(282,'mgkangralkar@git.edu',NULL,'$2y$10$ianWGnFEEI7FKeDDV5Im2.RZJhDVeFHlBCjPTAvQjjcMlgWoVu6ve','non-teaching','Active',NULL,'2023-11-30 23:55:43','2023-11-30 23:55:43'),(283,'smutkekar@git.edu',NULL,'$2y$10$oTsLgucTtD7ktoegOoT5xuKp7Fd25V1CR3GhwgsmKfdI8YOOIUWHC','teaching','Active',NULL,'2023-11-30 23:57:42','2023-11-30 23:57:42'),(284,'uabirje@git.edu',NULL,'$2y$10$6ql38SfIcrCuN41bwLBwPe8Enc276j8oGFrWDL9DCeZXJfdF0GKMO','non-teaching','Active',NULL,'2023-11-30 23:58:56','2023-11-30 23:58:56'),(285,'gmsambrekar@git.edu',NULL,'$2y$10$yhIEWLWNrRyGgAewZ99bbez8kh6f5OLXUJFFCFuBEVVP0TTaw/Q4O','teaching','Active',NULL,'2023-12-01 00:01:27','2023-12-01 00:01:27'),(286,'jyothipatil@git.edu',NULL,'$2y$10$PU.P0i.g54whEnqdFk9JauaaeGE/JyOvCk64O0rN584iFJrRVI.xO','teaching','Active',NULL,'2023-12-01 00:06:30','2023-12-01 00:06:30'),(287,'gskhadabadi@git.edu',NULL,'$2y$10$skYBa5UIXf0txTQSRuOp6.fOfDPUbBeL21rkCD9VTs/og4sLV0ATi','teaching','Active',NULL,'2023-12-01 00:06:34','2023-12-01 00:06:34'),(288,'upendra@git.edu',NULL,'$2y$10$lwFzn7ynCOUikC5qe12gZuB0GbtkDZvof0eP7OegaRSqCzj0NANMW','non-teaching','Active',NULL,'2023-12-01 00:11:57','2023-12-01 00:11:57'),(289,'pnnavelkar@git.edu',NULL,'$2y$10$GjEKsQFWSI1fQFwqHI7P7eLj8azqGM5Haeno8kbmwwyxvVUJfo3iO','teaching','Active',NULL,'2023-12-01 00:12:12','2023-12-01 00:12:12'),(290,'argargatti@git.edu',NULL,'$2y$10$R6AADn8vkL.yPkocq0tbDOAfAkSpx6UAdtXrN1TZgAYDZxW/YwPIC','teaching','Active',NULL,'2023-12-01 00:17:13','2023-12-01 00:17:13'),(291,'sjkalkhambkar@git.edu',NULL,'$2y$10$e/2wTWrDbYIcWuSA.NN.H.HumFULTInHxEnRGn85X5SuaUnqn5oH6','non-teaching','Active',NULL,'2023-12-01 00:17:23','2023-12-01 00:17:23'),(292,'cgjanagonda@git.edu',NULL,'$2y$10$TXDH.Lz2uqLfXIUSwgmh9eFw2p8mAyGCkWZ253GW9Xao2F/nGUOmm','non-teaching','Active',NULL,'2023-12-01 00:17:42','2023-12-01 00:17:42'),(293,'asshahapurkar@git.edu',NULL,'$2y$10$ujWUKEuYD9cCoLIB4oYQvuNdf/9RBBZfttFhStE/UBKQbz1VNWtBK','teaching','Active',NULL,'2023-12-01 00:18:16','2023-12-01 00:18:16'),(294,'vvatti@git.edu',NULL,'$2y$10$5yDWnNkTRVHyCn5iy4GpTOO6X1fJE9R9CfSzJJlU6HnYJR0QUhbzW','non-teaching','Active',NULL,'2023-12-01 00:21:45','2023-12-01 00:21:45'),(295,'pgdesai@git.edu',NULL,'$2y$10$bL9PmyxwiM2WFEWCL.oROe2nUibMUdZ3O9/Fbm.5WiX9IMC9JF6Wu','non-teaching','Active',NULL,'2023-12-01 00:23:45','2023-12-01 00:23:45'),(296,'sskhemlapure@git.edu',NULL,'$2y$10$/OjcRynJ2AIfB9OE/hY7Se0/lCCAXSNOhtl2Wdh5OoPMNTh3loXtu','teaching','Active',NULL,'2023-12-01 00:24:36','2023-12-01 00:24:36'),(297,'mvkulkarni1@git.edu',NULL,'$2y$10$st3RUi9d9NUORh0mauDEHOKZKwtJXQjetZEHI9xkhDxGIQ9uDVHCi','non-teaching','Active',NULL,'2023-12-01 00:26:38','2023-12-01 00:26:38'),(298,'ramedar@git.edu',NULL,'$2y$10$P8DabK9NNeYaq1.NspPKuOS0bY20BvgCspEkbjJz6ngz9kOoywVnG','teaching','Active',NULL,'2023-12-01 00:28:14','2023-12-01 00:28:14'),(299,'brmaraganache@git.edu',NULL,'$2y$10$xvVOFFiiFuwrKmvX.9qbvevtQt2ZUYcJ1O3aNuQYmBBG3rr3WtTcm','non-teaching','Active',NULL,'2023-12-01 00:30:40','2023-12-01 00:30:40');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-01 11:31:22
