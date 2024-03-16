-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: proyecto_buffalo
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `musicos`
--

DROP TABLE IF EXISTS `musicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `musicos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `biografia` text,
  `origen` varchar(45) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `musicos`
--

LOCK TABLES `musicos` WRITE;
/*!40000 ALTER TABLE `musicos` DISABLE KEYS */;
INSERT INTO `musicos` VALUES (2,'Wilón','DeCalle','Wilón DeCalle','11a48006434f8dabddcb00a5fa928ef8.jpg','<b>Wilón DeCalle</b> (Oviedo, 25 de septiembre de 1976) fue el encargado de producir el groove en bandas como <b>Los Bruscos</b> o <b>The Real McCoyson</b> y actualmente lo es en <b>Deville & La Fuerza</b>, <b>Montefurado </b>o <b>Gestido</b>, además del Búfalo Eléctrico. Ha grabado con multitud de artistas y bandas asturianas. No entiende una palabra de economía (algo que quiere remediar) y siente profunda admiración por Bobby Caldwell, Matt Abts y Jaime Beláustegui.<br>                                                                                ','Oviedo','1976-09-25'),(3,'Álvaro ','\"Daddy\" Bárcena','Daddy','cb47379dd69eb75341391ae3f5e8e978.jpg','<b>Álvaro “Daddy” Bárcen</b>a (Oviedo, 22 de abril de 1977) es guitarrista de sesión, compositor y productor de una infinidad de grupos en los <b>Mercury Studios</b> de Agüera (Las Regueras, Asturias). Guitarrista de bandas asturianas míticas como <b>Amon Ra</b> o <b>Los Bruscos</b>, ahora también se dedica a componer bandas sonoras. Varios Premios AMAS y un Premio OH! de teatro lo acreditan como un profesional muy efectivo.                                        ','Oviedo','1977-04-22'),(4,'Sergio','\"Tutu\" Rodríguez','Tutu','19bd8d185f110402f80770bb44086211.jpg','<b>Sergio “Tutu” Rodríguez</b> (Gijón, 6 de marzo de 1974), bajista, productor y enamorado de Miles Davis, es el actual encargado de las cuatro cuerdas en la legendaria banda de blues-rock nacional <b>Los Deltonos</b> , actividad que compagina con la regencia de <b>Tutu Estudios</b> en Corvera (Asturias). Ahí produjo el último disco de la manada, además de los trabajos de una innumerable lista de grupos de toda España.                                        ','Gijón','1974-03-06'),(5,'Samuel','\"Stone\" Rodríguez','Stone','139fa453d0161d998ddff1f580b80e9d.jpg','<b>“Stone” Sam Rodríguez</b> (Oviedo, 26 de febrero de 1976) pianista de carrera con cierta precocidad, ingresa en el Conservatorio a los 8 años. Adorador de Chick Corea, es un tipo realmente camaleónico con las teclas. Ha grabado discos con <b>Bacotexo</b>, <b>Ángel Miguel & The Travellers</b>, <b>Black Beans</b>, <b>El Malo</b>, <b>Alejandra Burgos</b>, <b>Rossaleda Jazz Quartet</b>, <b>Sinatra & Jobim Project</b>...                                        ','Oviedo','1976-02-26');
/*!40000 ALTER TABLE `musicos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-16 18:58:05
