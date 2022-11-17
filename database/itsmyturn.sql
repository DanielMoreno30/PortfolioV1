CREATE DATABASE  IF NOT EXISTS `itsmyturn` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `itsmyturn`;
-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: itsmyturn
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `nombre`
--

DROP TABLE IF EXISTS `nombre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nombre` (
  `idnombre` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido1` varchar(60) NOT NULL,
  `apellido2` varchar(60) NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `fechanacimiento` varchar(60) NOT NULL,
  `telefono` varchar(60) NOT NULL,
  PRIMARY KEY (`idnombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nombre`
--

LOCK TABLES `nombre` WRITE;
/*!40000 ALTER TABLE `nombre` DISABLE KEYS */;
INSERT INTO `nombre` VALUES (1,'Daniel','Moreno','Fernandez',23,'danimoreno80@gmail.com','30/12/1998','666671785');
/*!40000 ALTER TABLE `nombre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `softskills`
--

DROP TABLE IF EXISTS `softskills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `softskills` (
  `id` int(11) NOT NULL,
  `skill1` varchar(45) NOT NULL,
  `skill2` varchar(45) NOT NULL,
  `skill3` varchar(45) NOT NULL,
  `skill4` varchar(45) NOT NULL,
  `skill5` varchar(45) NOT NULL,
  `skill6` varchar(45) NOT NULL,
  `skill7` varchar(45) NOT NULL,
  `skill8` varchar(45) NOT NULL,
  `skill9` varchar(45) NOT NULL,
  `skill10` varchar(45) NOT NULL,
  `skill11` varchar(45) NOT NULL,
  `skill12` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `softskills`
--

LOCK TABLES `softskills` WRITE;
/*!40000 ALTER TABLE `softskills` DISABLE KEYS */;
INSERT INTO `softskills` VALUES (1,'Responsabilidad','Trabajo en Equipo','Aprendizaje por proyectos','Uso de Modelo–vista–controlador','Empatía','Liderazgo','Capacidad de comunicación','Capacidad de Persuasión','Pensamiento analítico','Persona Puntual','Flexibilidad','Motivación');
/*!40000 ALTER TABLE `softskills` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-24 23:32:17
