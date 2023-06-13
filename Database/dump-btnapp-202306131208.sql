-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: btnapp
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `billpc`
--

DROP TABLE IF EXISTS `billpc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `billpc` (
  `id` int NOT NULL AUTO_INCREMENT,
  `castmob` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `btnbill` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date` date DEFAULT (curdate()),
  `product_id` varchar(10) DEFAULT NULL,
  `promake` varchar(20) DEFAULT NULL,
  `promod` varchar(10) DEFAULT NULL,
  `prosn` varchar(10) DEFAULT NULL,
  `proqty` varchar(2) DEFAULT NULL,
  `prorate` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prowarrenty` date DEFAULT NULL,
  `prohsn` varchar(10) DEFAULT NULL,
  `proammount` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billpc`
--

LOCK TABLES `billpc` WRITE;
/*!40000 ALTER TABLE `billpc` DISABLE KEYS */;
INSERT INTO `billpc` VALUES (1,'9609423342','BTN/22/23/',NULL,'1','Intel','H61','ork4461','1','3450.00','0000-00-00',' ddd//444','3450'),(2,'9609423342','BTN/22/23/',NULL,'1','Intel','H61','ork4461','1','3450.00','0000-00-00',' ddd//444','3450'),(3,'9609423342','BTN/22/23/',NULL,'1','Intel','H61','ork4461','1','3450.00','0000-00-00',' ddd//444','3450'),(4,'9609423342','BTN/22/23/',NULL,'1','Intel','H61','ork4461','1','3450.00','0000-00-00',' ddd//444','3450'),(5,'9609423342','BTN/22/23/',NULL,'1','Intel','H61','ork4461','1','3450.00','0000-00-00',' ddd//444','3450'),(6,'9609423342','BTN/22/23/',NULL,'1','Intel','H61','ork4461','1','3450.00','0000-00-00',' ddd//444','3450'),(7,'9609423342','BTN/22/23/',NULL,'1','Intel','H61','ork4461','1','3450.00','2026-06-12',' ddd//444','3450'),(8,'9609423342','BTN/22/23/','2023-06-12','1','Intel','H61','ork4461','1','3450.00','2026-06-12',' ddd//444','3450'),(9,'9609423342','BTN/22/23/002','2023-06-12','1','Intel','H61','ork4461','1','3450.00','2026-06-12',' ddd//444','3450'),(10,'9609423342','BTN/22/23/002','2023-06-12','1','Intel','H61','ork4461','1','3450.00','2026-06-12',' ddd//444','3450'),(11,'8900089798','BTN/22/23/003','2023-06-12','1','Intel','62','www','2','6900.00','2026-06-12',' 5555/566q','3450'),(12,'8900089798','BTN/22/23/003','2023-06-12','2','Gigabyte','ddd','wewfv','1','3333.00','2026-06-12',' 5555/566q','3333'),(13,'8900089798','BTN/22/23/003','2023-06-12','8','Logitech','hhh','fff','1','100.00','2026-06-12',' ','100'),(14,'8900089798','BTN/22/23/003','2023-06-12','1','Intel','62','www','2','3450','2026-06-12',' 5555/566q','6900.00'),(15,'8900089798','BTN/22/23/003','2023-06-12','2','Gigabyte','ddd','wewfv','1','3333','2026-06-12',' 5555/566q','3333.00'),(16,'8900089798','BTN/22/23/003','2023-06-12','8','Logitech','hhh','fff','1','100','2026-06-12',' ','100.00'),(17,'9609423342','BTN/22/23/010','0000-00-00','1','Intel','H61','7436vyb cs','1','1231','2026-06-12',' jjj','1231.00'),(18,'9609423342','BTN/22/23/013','0000-00-00','1','Intel','H61','eeeee','2','1123','2026-06-13',' HSN/SAC','2246.00'),(19,'9609423342','BTN/22/23/015','2023-06-13','2','Gigabyte','tt','eeeee','1','3333','2026-06-13',' 5555/566q','3333.00');
/*!40000 ALTER TABLE `billpc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brandmain`
--

DROP TABLE IF EXISTS `brandmain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brandmain` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brandmain`
--

LOCK TABLES `brandmain` WRITE;
/*!40000 ALTER TABLE `brandmain` DISABLE KEYS */;
INSERT INTO `brandmain` VALUES (1,'ASUS','motherboard',1),(2,'Gigabyte','motherboard',1),(3,'MSI','motherboard',1),(4,'ASRock','motherboard',1),(5,'Biostar','motherboard',1),(6,'Intel','motherboard',1),(7,'Zotac','motherboard',1),(8,'ECS','motherboard',1),(9,'Mercury','motherboard',1),(10,'Zebronics','motherboard',1),(11,'Seagate','HDD',1),(12,'Western Digital','HDD',1),(13,'Toshiba','HDD',1),(14,'Hitachi','HDD',1),(15,'Samsung','HDD',1),(16,'Samsung','SSD',1),(17,'Kingston','SSD',1),(18,'Western Digital','SSD',1),(19,'Crucial','SSD',1),(20,'Adata','SSD',1),(21,'Corsair','RAM',1),(22,'G.Skill','RAM',1),(23,'Kingston','RAM',1),(24,'Crucial','RAM',1),(25,'ADATA','RAM',1),(26,'Transcend','RAM',1),(27,'Samsung','RAM',1),(28,'Hynix','RAM',1),(29,'Corsair','smps',1),(30,'Cooler Master','smps',1),(31,'Antec','smps',1),(32,'Zebronics','smps',1),(33,'Intex','smps',1),(34,'Frontech','smps',1),(35,'EVM','ssd',1),(36,'Seagate','ssd',1),(37,'Dell','monitor',1),(38,'HP','monitor',1),(39,'LG','monitor',1),(40,'Samsung','monitor',1),(41,'BenQ','monitor',1),(42,'AOC','monitor',1),(43,'ViewSonic','monitor',1),(44,'Philips','monitor',1),(45,'Asus','monitor',1),(46,'Frontech','monitor',1),(47,'Logitech','Keyboard',1),(48,'Logitech','Mouse',1),(49,'Dell','Keyboard',1),(50,'Dell','Mouse',1),(51,'HP','Keyboard',1),(52,'HP','Mouse',1),(53,'Microsoft','Keyboard',1),(54,'Microsoft','Mouse',1),(55,'Zebronics','Keyboard',1),(56,'Zebronics','Mouse',1),(57,'Lenovo','Keyboard',1),(58,'Lenovo','Mouse',1),(59,'Frontech','Keyboard',1),(60,'Frontech','Mouse',1),(61,'APC','UPS',1),(62,'Numeric','UPS',1),(63,'Luminous','UPS',1),(64,'Microtek','UPS',1),(65,'Frontech','UPS',1),(66,'Zebronics','UPS',1),(67,'HP','Printer',1),(68,'Canon','Printer',1),(69,'Epson','Printer',1),(70,'Brother','Printer',1),(71,'Samsung','Printer',1),(72,'TVS','Keyboard',1),(73,'TVS','Mouse',1),(74,'Intel','CPU',1),(75,'AMD','CPU',1),(76,'Nvidia','gcard',1),(77,'AMD','gcard',1),(78,'Gigabyte','gcard',1),(79,'ASUS','gcard',1),(80,'MSI','gcard',1),(81,'ZOTAC','gcard',1),(82,'Sapphire','gcard',1),(83,'PowerColor','gcard',1),(84,'EVGA','gcard',1),(85,'XFX','gcard',1);
/*!40000 ALTER TABLE `brandmain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientmain`
--

DROP TABLE IF EXISTS `clientmain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientmain` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `mob` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientmain`
--

LOCK TABLES `clientmain` WRITE;
/*!40000 ALTER TABLE `clientmain` DISABLE KEYS */;
INSERT INTO `clientmain` VALUES (1,'hgy','1234567890','kustav@live.com','Home','Building no 1240\r\nWay no 277 Ghsla Sanniah\r\nSultanate of Oman',''),(2,'Amita Kar','8900089798','trisha9851@gmail.com','Home','C/O Dr. Aloke Ranjan Sarbadhikary Vill:- Bhursit Brahamanpara PO: Munshirhut\r\nDist: Howrah',''),(3,'kustav','9609423342','fdt@dxxe.com','Home','rcrctrcxtxct',''),(4,'Kustav Chatterjee','9735210415','kustav@live.com','Home','Building no 1240\r\nWay no 277 Ghsla Sanniah\r\nSultanate of Oman','dcsadv');
/*!40000 ALTER TABLE `clientmain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoice` (
  `year` varchar(6) DEFAULT NULL,
  `num` varchar(10) DEFAULT NULL,
  `type` varchar(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice`
--

LOCK TABLES `invoice` WRITE;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
INSERT INTO `invoice` VALUES ('22/23/','15','T');
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoicemain`
--

DROP TABLE IF EXISTS `invoicemain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoicemain` (
  `id` int NOT NULL AUTO_INCREMENT,
  `billno` varchar(20) DEFAULT NULL,
  `refbill` varchar(10) DEFAULT NULL,
  `cgst` varchar(10) DEFAULT NULL,
  `sgst` varchar(10) DEFAULT NULL,
  `subtotal` varchar(10) DEFAULT NULL,
  `total` varchar(10) DEFAULT NULL,
  `castmob` varchar(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoicemain`
--

LOCK TABLES `invoicemain` WRITE;
/*!40000 ALTER TABLE `invoicemain` DISABLE KEYS */;
INSERT INTO `invoicemain` VALUES (36,'BTN/22/23/010','','110.79','110.79','1231.00','1452.58',NULL,NULL),(38,'BTN/22/23/015','','299.97','299.97','3333.00','3932.94','9609423342','2023-06-13');
/*!40000 ALTER TABLE `invoicemain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prod`
--

DROP TABLE IF EXISTS `prod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prod` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `type` varchar(1) DEFAULT NULL,
  `status` varchar(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prod`
--

LOCK TABLES `prod` WRITE;
/*!40000 ALTER TABLE `prod` DISABLE KEYS */;
INSERT INTO `prod` VALUES (1,'CPU','cpu','1','1'),(2,'Motherboard','motherboard','1','1'),(3,'Hard Disk','hard-disk','1','1'),(4,'SSD','ssd','1','1'),(5,'RAM','ram','1','1'),(6,'SMPS','smps','1','1'),(7,'Monitor','monitor','1','1'),(8,'Keyboard','keyboard','1','1'),(9,'Mouse','mouse','1','1'),(10,'UPS','ups','1','1'),(11,'Printer','printer','1','1'),(12,'Graphic Card','gcard','1','1'),(13,'Pendrive','pendrive','1','1'),(14,'Router','router','1','1'),(15,'Additonal Hardware 1','addhard1','1','1'),(16,'Additonal Hardware 2','addhard2','1','1'),(17,'Keyboard Mouse Combo','keymouse','1','1');
/*!40000 ALTER TABLE `prod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `role` int DEFAULT NULL,
  `photo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Super','Admin','admin@btn','$2y$10$Wey.hEgNBa4of0CSvOjNUuSxxqyhx5sOeLrxeF.TvtArU1zkmt7De',1,1,'default.jpg'),(2,'Atanu','Sasmal','atanu@btn','$2y$10$Wey.hEgNBa4of0CSvOjNUuSxxqyhx5sOeLrxeF.TvtArU1zkmt7De',1,2,'default.jpg');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'btnapp'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-13 12:08:27
