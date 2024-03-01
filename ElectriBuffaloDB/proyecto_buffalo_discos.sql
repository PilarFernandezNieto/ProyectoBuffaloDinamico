-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: proyecto_buffalo
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `discos`
--

DROP TABLE IF EXISTS `discos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `anio_edicion` varchar(45) DEFAULT NULL,
  `formato` varchar(45) DEFAULT NULL,
  `sello` varchar(45) DEFAULT NULL,
  `informacion` longtext,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `textos` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discos`
--

LOCK TABLES `discos` WRITE;
/*!40000 ALTER TABLE `discos` DISABLE KEYS */;
INSERT INTO `discos` VALUES (4,'Patrolman','2023','VINILO','Boomerang','<p>Este trabajo, el tercero de su andadura por los sinuosos senderos del rock, se eleva como una plegaria y acaba constituyendo un exorcismo de todos los demonios aparecidos tras la muerte, en 2016, de Alejandro “Espina” Blanco, miembro fundador de la banda y también bajista de Ilegales durante 20 años.<br>Patrolman (Boomerang Discos) es, con toda la autoridad, un disco de rock con mayúsculas. La producción, a cargo del también miembro de la banda Sergio “Tutu”, no da opción a la especulación. Las canciones, el arma secreta del cuarteto, suenan como una apisonadora con rodillo de seda, y esa voz, quizá una de las mejores de España, se deja oír con ese timbre precioso, delicado pero no sensiblero y seguro sin ser arrogante, de los que saben perfectamente qué se traen entre manos. Esa voz que canaliza los esfuerzos de la banda hacia el corazón del oyente y lo hace palpitar gracias a un voltaje emocional de primer orden que va in crescendo porque todo el álbum está grabado en memoria de Alejandro. El título, Patrolman (“Patrullero”), era lo primero que salía de la boca de Alejandro cuando te lo encontrabas por ahí: “¡Qué pasa, patrullero!”, soltaba, siempre con una enorme sonrisa en la cara.<br>El disco está planteado en dos caras muy reconocibles que permiten degustar en primer y segundo plato. En la cara A mandan las canciones que funcionarían perfectamente con una guitarra acústica al calor de una hoguera. Es una delicatessen rock. Canciones de dura piel y alma de pura nobleza; quizá exceptuando You know how, pieza con influencias sureñas que podría ser digna de los legendarios Lynyrd Skynyrd. La cara B, sin embargo, muestra a la banda estallando en riffs más duros, menos amables, que permiten al cuarteto destapar su volcán interior, dar una lección magistral de cómo tejer instrumentos y construir un edificio de rock, y terminar rematando el álbum con una joya llamada Walking behind<br>Hay artistas y hay artesanos, pero The Electric Buffalo son ambas cosas a la vez. Es un disco donde se destilan años de oficio, pero con ese pellizco que les diferencia y les eleva a los cielos, igual que al añorado Alejandro.</p><p class=\"alinear-derecha\">-Igor Paskual-</p>','3442ef45ea308694869a2cfc166af626.jpg','2024-02-29',NULL),(5,'Hidin\' from the butcher','2009','CD','Ouroboros Records','Este primer trabajo de la banda, editado en 2009 en formato CD, está, desgraciadamente, descatalogado. Álvaro Bárcena, Jandro Espina y Wilón DeCalle desgranan 10 temas cercanos a la órbita del rock sureño, pero con tintes muy particulares, donde sonidos más folkies, psicodélicos e incluso pop se entremezclan dando como resultado unas canciones con mucha personalidad y con unas marcadas influencias de bandas como Gov’t Mule.El más puro eclecticismo es la marca de la casa del trío, que presume de hacer temas sin atender a etiquetas ni estilos, aunque la seña de identidad de “lo americano” se puede distinguir con nitidez en todos los cortes del disco. Hidin’ from the butcher es, sin duda, un debut a la altura de las expectativas que muchos habíamos depositado en esta banda, cuando las noticias sobre su nacimiento corrieron como la espuma por los mentideros del rock asturiano.-JL Moreno-                                        ','77cd0cd3a17629c84bae777c42084683.jpg','2024-02-29','<div>Músicos:</div><div><br></div><ul><li>Álvaro “Daddy” Bárcena: guitarra acústica, eléctrica y 12-cuerdas, pedal steel y voz</li><li>Alejandro Blanco: bajo</li><li>Wilón DeCalle: batería y coros</li><li>José Ramón Feito:: piano, hammond, rhodes y wurlitzer</li><li>Angel Ruíz: banjo</li><li>Dani “Desmond” Sevillano: ingeniero de sonido</li></ul><div>Fotos: Iris Benítez</div><div><br></div><div>Artwork: Wilón DeCalle</div><div><br></div><div>Todas las canciones compuestas por The Electric Buffalo.</div><div><br></div><div>Grabado, mezclado y masterizado en Eclipse Estudios (Oviedo) por Dani “Desmond” Sevillano en septiembre de 2015.</div><div><br></div><div>Producido por Dani “Desmond” Sevillano y The Electric Buffalo</div>                    '),(6,'Keepin\'it Warm','2016','CD','Boomerang Discos','Keepin’ it warm, editado por Boomerang Discos, supone el esperado regreso discográfico de la banda asturiana formada por Álvaro Bárcena (guitarra y voz), Alejandro Espina (bajo) y Wilón deCalle (batería). Ocho canciones con olor a clásicos, en las que, siempre desde la alargada (¡y ancha!) sombra de Warren Haynes y sus Gov’t Mule, pasando por las enseñanzas del viejo Neil Young, Little Feat o los caballeros sureños de apellido Allman, hasta los caminos de algunos contemporáneos como Derek Trucks (y Susan Tedeschi) o Blackberry Smoke, el trío continúa recorriendo las enredadas carreteras del rock, recogiendo pequeños matices, arreglos e intenciones de décadas de música popular para sacar de la coctelera un sonido personal, magnético e inevitablemente absorvente, la mezcla perfecta de sutileza, emoción, tradición, energía y modernidad.<br>Canciones como Your reasons, Wide Screen o el incontestable himno Hotel Bar, hacen de Keepin’ it warm un disco repleto de grandes historias en las que predominan las afueras de los corazones solitarios, la rabiosa melancolía del perdedor orgulloso y la mirada certera, crítica y reflexiva sobre un mundo que se derrumba y encuentra, de manera autoreferencial y reivindicativa, su única salvación en el rock and roll. Todo ello decorado con la búsqueda de un sonido imperecedero, mezcla infalible de potencia, autenticidad y nostálgica dulzura. De ahí esa declaración de intenciones del título, esa labor de mantener caliente no sólo el corazón y la pasión de la banda sino la sangre de todos aquellos que les escuchen.<br><p class=\"alinear-derecha\">-Pablo Moro-</p>                                                         ','873d1341fbf3a3919c370822c74d530d.jpg','2024-03-01',NULL);
/*!40000 ALTER TABLE `discos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-01 21:14:53
