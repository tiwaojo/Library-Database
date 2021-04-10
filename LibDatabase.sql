-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: librarydatabase
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `author` (
  `Author_Id` int NOT NULL,
  `A_FName` varchar(45) NOT NULL,
  `A_LName` varchar(45) NOT NULL,
  `A_BDate` datetime DEFAULT NULL,
  `A_Country` varchar(45) NOT NULL,
  PRIMARY KEY (`Author_Id`),
  UNIQUE KEY `Author_Id_UNIQUE` (`Author_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `author`
--

LOCK TABLES `author` WRITE;
/*!40000 ALTER TABLE `author` DISABLE KEYS */;
INSERT INTO `author` VALUES (5,'Lewis','Tate','2020-09-27 00:00:00','Cameroon'),(6,'Mark','Rutledge','2020-08-25 00:00:00','Kyrgyzstan'),(7,'Brooke','Jones','2021-03-23 00:00:00','Åland Islands'),(8,'Alexa','Aguilar','2021-09-23 00:00:00','Tunisia'),(9,'Fatima','Stevens','2020-09-21 00:00:00','Switzerland'),(10,'Nomlanga','Wilkinson','2021-03-22 00:00:00','Bahrain');
/*!40000 ALTER TABLE `author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book` (
  `ISBN` int NOT NULL,
  `Book_Title` varchar(45) NOT NULL,
  `Publisher_Id` int NOT NULL,
  `Genre_Id` int NOT NULL,
  `Library_Id` int NOT NULL,
  `Author_Id` int NOT NULL,
  PRIMARY KEY (`ISBN`),
  UNIQUE KEY `ISBN_UNIQUE` (`ISBN`),
  UNIQUE KEY `Book_Title_UNIQUE` (`Book_Title`),
  KEY `publisher_id_idx` (`Publisher_Id`),
  KEY `gener_id_idx` (`Genre_Id`),
  KEY `library_id_idx` (`Library_Id`),
  KEY `author_id_idx` (`Author_Id`),
  KEY `genre_id_idx` (`Genre_Id`),
  CONSTRAINT `author_id` FOREIGN KEY (`Author_Id`) REFERENCES `author` (`Author_Id`),
  CONSTRAINT `genre_id` FOREIGN KEY (`Genre_Id`) REFERENCES `genre` (`Genre_Id`),
  CONSTRAINT `library_id` FOREIGN KEY (`Library_Id`) REFERENCES `library` (`Library_Id`),
  CONSTRAINT `publisher_id` FOREIGN KEY (`Publisher_Id`) REFERENCES `publisher` (`Publisher_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (4,'Data Smart',5,6,4,9),(5,'Fundamentals of Wavelets',6,1,2,10),(6,'Superfreakonomics',3,3,3,7),(7,'God Created the Integers',4,5,1,8),(8,'The Nature of Statistical Learning Theory',1,2,5,5),(9,'Orientalism',2,4,6,6),(10,'Blade Runner',4,4,4,5);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `Employees_Id` int NOT NULL,
  `E_FName` varchar(45) NOT NULL,
  `E_LName` varchar(45) NOT NULL,
  `E_BDate` datetime NOT NULL,
  `E_Email` varchar(255) NOT NULL,
  `E_Address` varchar(255) NOT NULL,
  `E_Username` varchar(16) NOT NULL,
  `E_Password` varchar(32) NOT NULL,
  `Library_Id` int NOT NULL,
  PRIMARY KEY (`Employees_Id`),
  UNIQUE KEY `Employees_Id_UNIQUE` (`Employees_Id`),
  UNIQUE KEY `E_Password_UNIQUE` (`E_Password`),
  KEY `library_id_idx` (`Library_Id`),
  CONSTRAINT `FK_library_id` FOREIGN KEY (`Library_Id`) REFERENCES `library` (`Library_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Cathleen','Bennett','2020-08-04 04:14:00','orci.luctus.et@Quisquepurus.ca','Ap #760-2714 Sed St.','posuere','SIP86QSZ1ZJ',1),(2,'Russell','Whitfield','2021-01-14 17:46:00','Cras@temporest.ca','P.O. Box 467, 5880 Cum Avenue','eu','DSY60JWC4RR',1),(3,'Claudia','Francis','2020-01-19 23:56:00','gravida@duinectempus.com','5831 Vitae Rd.','massa.','XAZ86VOE0XT',3),(4,'Josiah','Bullock','2020-06-01 23:30:00','elit.Nulla@enimcondimentum.com','7221 Magna. Rd.','adipiscing,','WOH82GGH4HF',6),(5,'Lila','Rivers','2020-01-10 08:09:00','sed.dictum@erosturpis.net','802-4249 Turpis St.','Donec','DON67FNT0NS',3),(6,'Keelie','Mckee','2020-07-24 05:58:00','risus.a.ultricies@eget.org','9082 Ante. Av.','eu','HLX20EEZ0BW',2);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `employees at library 1`
--

DROP TABLE IF EXISTS `employees at library 1`;
/*!50001 DROP VIEW IF EXISTS `employees at library 1`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `employees at library 1` AS SELECT 
 1 AS `Employees_Id`,
 1 AS `E_FName`,
 1 AS `E_LName`,
 1 AS `E_Email`,
 1 AS `E_Username`,
 1 AS `E_Password`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `find all horror books`
--

DROP TABLE IF EXISTS `find all horror books`;
/*!50001 DROP VIEW IF EXISTS `find all horror books`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `find all horror books` AS SELECT 
 1 AS `Book_Title`,
 1 AS `ISBN`,
 1 AS `Genre_Name`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `genre` (
  `Genre_Id` int NOT NULL,
  `Genre_Name` varchar(45) NOT NULL,
  PRIMARY KEY (`Genre_Id`),
  UNIQUE KEY `Genre_Name_UNIQUE` (`Genre_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` VALUES (6,'Adventure'),(2,'Fantasy'),(1,'Fiction'),(5,'Horror'),(4,'Mystery'),(3,'Romance');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `library`
--

DROP TABLE IF EXISTS `library`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `library` (
  `Library_Id` int NOT NULL,
  `Library_Name` varchar(45) NOT NULL,
  `Library_Address` varchar(255) NOT NULL,
  PRIMARY KEY (`Library_Id`),
  UNIQUE KEY `Library_Id_UNIQUE` (`Library_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `library`
--

LOCK TABLES `library` WRITE;
/*!40000 ALTER TABLE `library` DISABLE KEYS */;
INSERT INTO `library` VALUES (1,'Accumsan Neque Et Corporation','141-7723 Vulputate, St.'),(2,'Curabitur Massa LLP','P.O. Box 707, 7683 Quis St.'),(3,'Lorem Eu Company','5290 Euismod Ave'),(4,'Ac Feugiat Foundation','229-3190 Quisque Street'),(5,'Ligula Inc.','510-6923 Lobortis. St.'),(6,'Elit Consulting','814-5623 Dictum Street');
/*!40000 ALTER TABLE `library` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loaned_book`
--

DROP TABLE IF EXISTS `loaned_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loaned_book` (
  `Loan_Id` int NOT NULL,
  `ISBN` int NOT NULL,
  `Members_Id` int NOT NULL,
  `Date_Loaned` datetime DEFAULT NULL,
  `Loan_Status` tinyint NOT NULL,
  `Due_Date` datetime NOT NULL,
  PRIMARY KEY (`Loan_Id`),
  UNIQUE KEY `ISBN_UNIQUE` (`ISBN`),
  UNIQUE KEY `Loan_Id_UNIQUE` (`Loan_Id`),
  KEY `isbn_idx` (`ISBN`),
  KEY `Members_Id_idx` (`Members_Id`),
  CONSTRAINT `isbn` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`),
  CONSTRAINT `Members_Id` FOREIGN KEY (`Members_Id`) REFERENCES `members` (`Members_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loaned_book`
--

LOCK TABLES `loaned_book` WRITE;
/*!40000 ALTER TABLE `loaned_book` DISABLE KEYS */;
INSERT INTO `loaned_book` VALUES (1,4,100,'2019-01-24 00:00:00',0,'2020-01-11 00:00:00'),(2,5,101,'2019-10-11 00:00:00',1,'2021-02-22 00:00:00'),(3,6,102,'2019-06-29 00:00:00',0,'2020-01-16 00:00:00'),(4,7,103,'2019-11-23 00:00:00',1,'2021-06-23 00:00:00'),(5,8,103,'2019-09-24 00:00:00',1,'2021-06-04 00:00:00'),(6,9,105,'2019-09-18 00:00:00',0,'2019-12-08 00:00:00');
/*!40000 ALTER TABLE `loaned_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `members` (
  `Members_Id` int NOT NULL,
  `M_FName` varchar(45) NOT NULL,
  `M_LName` varchar(45) NOT NULL,
  `M_BDate` datetime NOT NULL,
  `M_Email` varchar(255) NOT NULL,
  `M_Address` varchar(255) NOT NULL,
  `M_Sex` char(1) NOT NULL,
  `M_Username` varchar(16) NOT NULL,
  `M_Password` varchar(32) NOT NULL,
  `M_PNumber` bigint NOT NULL,
  PRIMARY KEY (`Members_Id`),
  UNIQUE KEY `M_Password_UNIQUE` (`M_Password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (100,'Dai','Chambers','2003-10-22 00:00:00','ornare.lectus.ante@tellusPhaselluselit.edu','P.O. Box 914, 5908 Aenean Rd.','M','Aliq','Utzdfgvear',16010207956),(101,'Amery','Hayden','2012-04-20 00:00:00','Phasellus.dolor.elit@Loremipsumdolor.ca','P.O. Box 469, 593 Aliquam Ave','F','Mauris','nisl',16400821881),(102,'Harper','Ewing','2018-11-01 00:00:00','tellus@rutrumlorem.org','P.O. Box 137, 9570 Aliquam St.','F','nec','vitae',12355661223),(103,'Brittany','Cooper','2010-03-23 00:00:00','Duis.mi.enim@aodiosemper.net','1431 Enim Avenue','M','pellen','elit.',16101129760),(104,'Aaron','Chambers','2018-05-10 00:00:00','ac.nulla@aodio.ca','1295 Tristique St.','M','gravida','venenatis',162506031992),(105,'Gloria','Howard','2009-11-27 00:00:00','Etiam.ligula.tortor@pharetrafelis.co.uk','P.O. Box 835, 6086 Faucibus Av.','F','ante.','dui',164501130795);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publisher`
--

DROP TABLE IF EXISTS `publisher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publisher` (
  `Publisher_Id` int NOT NULL,
  `Publisher_Name` varchar(45) NOT NULL,
  `Publisher_Address` varchar(45) NOT NULL,
  PRIMARY KEY (`Publisher_Id`),
  UNIQUE KEY `Publisher_Id_UNIQUE` (`Publisher_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publisher`
--

LOCK TABLES `publisher` WRITE;
/*!40000 ALTER TABLE `publisher` DISABLE KEYS */;
INSERT INTO `publisher` VALUES (1,'Non Arcu LLC','Ap #542-8778 Vulputate Av.'),(2,'Lectus Quis Massa Limited','6969 Cum Rd.'),(3,'Nisi Cum Sociis Corp.','Ap #534-7618 Est Avenue'),(4,'Praesent Luctus Curabitur PC','8242 Arcu. Road'),(5,'Sem Elit Inc.','4766 Ornare. St.'),(6,'Bibendum Ullamcorper Institute','Ap #193-2610 Ac Road');
/*!40000 ALTER TABLE `publisher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `view 10`
--

DROP TABLE IF EXISTS `view 10`;
/*!50001 DROP VIEW IF EXISTS `view 10`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `view 10` AS SELECT 
 1 AS `ISBN`,
 1 AS `Book_Title`,
 1 AS `Publisher_Id`,
 1 AS `Genre_Id`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view 4`
--

DROP TABLE IF EXISTS `view 4`;
/*!50001 DROP VIEW IF EXISTS `view 4`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `view 4` AS SELECT 
 1 AS `M_FName`,
 1 AS `M_LName`,
 1 AS `M_Email`,
 1 AS `M_Address`,
 1 AS `M_Sex`,
 1 AS `Loan_Id`,
 1 AS `Date_Loaned`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `employees at library 1`
--

/*!50001 DROP VIEW IF EXISTS `employees at library 1`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `employees at library 1` AS select `employees`.`Employees_Id` AS `Employees_Id`,`employees`.`E_FName` AS `E_FName`,`employees`.`E_LName` AS `E_LName`,`employees`.`E_Email` AS `E_Email`,`employees`.`E_Username` AS `E_Username`,`employees`.`E_Password` AS `E_Password` from `employees` where (`employees`.`Library_Id` = 1) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `find all horror books`
--

/*!50001 DROP VIEW IF EXISTS `find all horror books`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `find all horror books` AS select `book`.`Book_Title` AS `Book_Title`,`book`.`ISBN` AS `ISBN`,`genre`.`Genre_Name` AS `Genre_Name` from (`genre` left join `book` on((`book`.`Genre_Id` = `genre`.`Genre_Id`))) where (`genre`.`Genre_Name` = 'Horror') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view 10`
--

/*!50001 DROP VIEW IF EXISTS `view 10`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view 10` AS select distinct `book`.`ISBN` AS `ISBN`,`book`.`Book_Title` AS `Book_Title`,`book`.`Publisher_Id` AS `Publisher_Id`,`book`.`Genre_Id` AS `Genre_Id` from `book` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view 4`
--

/*!50001 DROP VIEW IF EXISTS `view 4`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view 4` AS select `members`.`M_FName` AS `M_FName`,`members`.`M_LName` AS `M_LName`,`members`.`M_Email` AS `M_Email`,`members`.`M_Address` AS `M_Address`,`members`.`M_Sex` AS `M_Sex`,`loaned_book`.`Loan_Id` AS `Loan_Id`,`loaned_book`.`Date_Loaned` AS `Date_Loaned` from (`members` left join `loaned_book` on((`loaned_book`.`Members_Id` = `members`.`Members_Id`))) union select `members`.`M_FName` AS `M_FName`,`members`.`M_LName` AS `M_LName`,`members`.`M_Email` AS `M_Email`,`members`.`M_Address` AS `M_Address`,`members`.`M_Sex` AS `M_Sex`,`loaned_book`.`Loan_Id` AS `Loan_Id`,`loaned_book`.`Date_Loaned` AS `Date_Loaned` from (`loaned_book` left join `members` on((`loaned_book`.`Members_Id` = `members`.`Members_Id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-18 22:17:38
