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
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `noticias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `eliminado` tinyint DEFAULT NULL,
  `portada` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `titulo_UNIQUE` (`titulo`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (150,'Concierto Factoría Sound Avilés','The Electric Buffalo en concierto','El próximo<b> 23 de marzo,</b> The Electric Buffalo se subirá a las tablas de la <b>Factoría Cultural, en Avilés</b>, lugar emblemático por donde los mejores artistas internacionales pasan a mostrar sus trabajos. La banda está encantada de que los promotores hayan querido, en este primer ciclo de conciertos del año, que Patrolman sea presentado allí.<br>Si no tienes tus entradas, en este enlace puedes obtenerlas:<br>\r\n<a href=\"https://uniticket.janto.es/palaciovaldes/public/janto/main.php#\" target=\"_blank\" class=\"enlace-negro\">Compra aquí tus entradas</a>                                                            ','9e75a4f24afbfeec80412c2aec867ab9.jpg','2024-02-26','2024-02-20',NULL,NULL),(151,'Nominación Mejor Disco Rock','Premios Amas','El próximo 23 de febrero tendrá lugar la ceremonia de entrega de los Premios Amas de la Música Asturiana, a los que la banda está nominada en la categoría de “mejor disco Rock”.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;','c2dd22f8d13a9a75385b1fb7414dd08d.jpg','2024-02-26','2024-02-12',NULL,NULL),(152,'Patrolman, Premio Amas Mejor Disco Rock','Patrolman ha recibido el premio al mejor disco amas 2023','Patrolman ha recibido el premio al mejor disco amas 2023. Patrolman ha recibido el premio al mejor disco amas 2023 Patrolman ha recibido el premio al mejor disco amas 2023 Patrolman ha recibido el premio al mejor disco amas 2023.','5bf8ee5c560dd05103788fcc1918419a.jpg','2024-02-26','2024-02-24',NULL,NULL);
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-03 20:48:37
