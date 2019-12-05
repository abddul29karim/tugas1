# SQL-Front 5.1  (Build 4.16)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: database
# ------------------------------------------------------
# Server version 5.5.5-10.4.8-MariaDB

#
# Source for table biodata
#

DROP TABLE IF EXISTS `biodata`;
CREATE TABLE `biodata` (
  `nik` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `hobi` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table biodata
#

LOCK TABLES `biodata` WRITE;
/*!40000 ALTER TABLE `biodata` DISABLE KEYS */;
INSERT INTO `biodata` VALUES (22,'abdul karim','1994-10-29','kemanggisan','baca buku','foto.jpg');
/*!40000 ALTER TABLE `biodata` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table login
#

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `user` int(11) NOT NULL AUTO_INCREMENT,
  `pass` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table login
#

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (11,'aa');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table pendidikan
#

DROP TABLE IF EXISTS `pendidikan`;
CREATE TABLE `pendidikan` (
  `sekolah` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `masuk` year(4) DEFAULT NULL,
  `lulus` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table pendidikan
#

LOCK TABLES `pendidikan` WRITE;
/*!40000 ALTER TABLE `pendidikan` DISABLE KEYS */;
INSERT INTO `pendidikan` VALUES ('sman 24','ipa',2009,2012);
INSERT INTO `pendidikan` VALUES ('akper pelni','kesehatan',2012,2015);
INSERT INTO `pendidikan` VALUES ('univ budi luhur','TI',2016,2020);
/*!40000 ALTER TABLE `pendidikan` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table pengalaman
#

DROP TABLE IF EXISTS `pengalaman`;
CREATE TABLE `pengalaman` (
  `pt` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `dari` year(4) DEFAULT NULL,
  `sampai` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table pengalaman
#

LOCK TABLES `pengalaman` WRITE;
/*!40000 ALTER TABLE `pengalaman` DISABLE KEYS */;
INSERT INTO `pengalaman` VALUES ('PT GMH','SPV',2016,2019);
/*!40000 ALTER TABLE `pengalaman` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tujuan
#

DROP TABLE IF EXISTS `tujuan`;
CREATE TABLE `tujuan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table tujuan
#

LOCK TABLES `tujuan` WRITE;
/*!40000 ALTER TABLE `tujuan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tujuan` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
