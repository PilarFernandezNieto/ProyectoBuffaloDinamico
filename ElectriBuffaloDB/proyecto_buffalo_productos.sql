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
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `precio` decimal(5,2) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `idcategoria` int DEFAULT NULL,
  `anio_edicion` varchar(10) DEFAULT NULL,
  `formato` varchar(45) DEFAULT NULL,
  `sello` varchar(100) DEFAULT NULL,
  `informacion` text,
  `texto` text,
  `color` varchar(45) DEFAULT NULL,
  `talla` char(4) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_producto_categoria_idx` (`idcategoria`),
  CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Patrolman','b385033a3bdc06e0bd1d82963a9ce218.jpg',20.00,'2024-03-02',1,'2023','VINILO','Boomerang Records','<p>Personal:</p><ul><li><b>Álvaro “Daddy” Bárcena</b>: guitarra acústica y eléctrica, pedal steel y voz</li><li><b>Sergio “Tutu” Rodríguez</b>: bajo / ingeniero de sonido</li><li><b>“Stone” Sam Rodríguez</b>: teclados, hammond y wurlitzer</li><li><b>Wilón DeCalle</b>: batería y percusión</li><li><b>Sil Fernández</b>: coros</li><li><b>Juan Yagüe</b>: guitarra acústica y bouzouki</li><li><b>Cristina Gestido</b>: viola</li></ul><p>Fotos: Wesley, Manfred, Dena Flows y Eloy Beltené</p><p>Artwork y diseño carpeta: Ossobüko Studio</p><p>Todas las canciones compuestas por <b>The Electric Buffalo</b>.</p><p>Grabado y mezclado en <b>Tutu Estudios</b> (Corvera) y masterizado por <b>Dani “Desmond” Sevillano</b> entre septiembre y octubre de 2022.</p><p>Producido por <b>Sergio “Tutu” Rodríguez                                                                                                    </b></p>                                        ','<p>Este trabajo, el tercero de su andadura por los sinuosos senderos del rock, se eleva como una plegaria y acaba constituyendo un exorcismo de todos los demonios aparecidos tras la muerte, en 2016, de Alejandro “Espina” Blanco, miembro fundador de la banda y también bajista de Ilegales durante 20 años.</p><p>Patrolman (Boomerang Discos) es, con toda la autoridad, un disco de rock con mayúsculas. La producción, a cargo del también miembro de la banda Sergio “Tutu”, no da opción a la especulación. Las canciones, el arma secreta del cuarteto, suenan como una apisonadora con rodillo de seda, y esa voz, quizá una de las mejores de España, se deja oír con ese timbre precioso, delicado pero no sensiblero y seguro sin ser arrogante, de los que saben perfectamente qué se traen entre manos. Esa voz que canaliza los esfuerzos de la banda hacia el corazón del oyente y lo hace palpitar gracias a un voltaje emocional de primer orden que va in crescendo porque todo el álbum está grabado en memoria de Alejandro. El título, Patrolman (“Patrullero”), era lo primero que salía de la boca de Alejandro cuando te lo encontrabas por ahí: “¡Qué pasa, patrullero!”, soltaba, siempre con una enorme sonrisa en la cara.</p><p>El disco está planteado en dos caras muy reconocibles que permiten degustar en primer y segundo plato. En la cara A mandan las canciones que funcionarían perfectamente con una guitarra acústica al calor de una hoguera. Es una delicatessen rock. Canciones de dura piel y alma de pura nobleza; quizá exceptuando You know how, pieza con influencias sureñas que podría ser digna de los legendarios Lynyrd Skynyrd. La cara B, sin embargo, muestra a la banda estallando en riffs más duros, menos amables, que permiten al cuarteto destapar su volcán interior, dar una lección magistral de cómo tejer instrumentos y construir un edificio de rock, y terminar rematando el álbum con una joya llamada Walking behind.</p><p>Hay artistas y hay artesanos, pero The Electric Buffalo son ambas cosas a la vez. Es un disco donde se destilan años de oficio, pero con ese pellizco que les diferencia y les eleva a los cielos, igual que al añorado Alejandro.</p><p class=\"alinear-derecha\">-Igor Paskual-                                                                                                                                                                                                                                                                                                                                                                                            </p>                    ','','',50),(5,'Hidin\' from the butcher','c4b3fdc47a48d5d1e01eb6fcfb2c20e5.jpg',12.00,'2024-03-03',1,'2009','CD','Ouroboros Records','<p>Personal:</p><ul><li><b>Álvaro “Daddy” Bárcena</b>: guitarra acústica y eléctrica, mandolina y voz</li><li><b>Alejandro Blanco</b>: bajo</li><li><b>Wilón DeCalle</b>: batería</li><li><b>Chus “Crocodile Crazy Hammond” Neira</b>: teclados y hammond</li><li><b>Manfred</b>: voz en “Don’t rock the boat” y coros</li><li><b>Mary Page</b>: coros</li><li><b>Dani “Desmond” Sevillano</b>: ingeniero de sonido</li></ul><p>Fotos: Manfred</p><p>Artwork: Wilón DeCalle</p><p>Todas las canciones compuestas por <b>The Electric Buffalo</b>.</p><p>Grabado, mezclado y masterizado en <b>Eclipse Estudios</b> (Oviedo) por Dani “Desmond” Sevillano entre diciembre de 2008 y marzo de 2009.</p><p>Producido por <b>Dani “Desmond” Sevillano y The Electric Buffalo                                        </b></p>                    ','<p>Este primer trabajo de la banda, editado en 2009 en formato CD, está, desgraciadamente, descatalogado. Álvaro Bárcena, Jandro Espina y Wilón DeCalle desgranan 10 temas cercanos a la órbita del rock sureño, pero con tintes muy particulares, donde sonidos más folkies, psicodélicos e incluso pop se entremezclan dando como resultado unas canciones con mucha personalidad y con unas marcadas influencias de bandas como Gov’t Mule.</p><p>El más puro eclecticismo es la marca de la casa del trío, que presume de hacer temas sin atender a etiquetas ni estilos, aunque la seña de identidad de “lo americano” se puede distinguir con nitidez en todos los cortes del disco. Hidin’ from the butcher es, sin duda, un debut a la altura de las expectativas que muchos habíamos depositado en esta banda, cuando las noticias sobre su nacimiento corrieron como la espuma por los mentideros del rock asturiano.</p><p class=\"alinear-derecha\">-JL Moreno-</p>                    ','','',0),(6,'Keepin\'it Warm','f737915294b78083e720d6db25a7414a.jpg',12.00,'2024-03-03',1,'2013','CD',' Boomerang Discos','<p>Personal:</p><ul><li><b>Álvaro “Daddy” Bárcena</b>: guitarra acústica, eléctrica y 12-cuerdas, pedal steel y voz</li><li><b>Alejandro Blanco</b>: bajo</li><li><b>Wilón DeCalle</b>: batería y coros</li><li><b>José Ramón Feito</b>: piano, hammond, rhodes y wurlitzer</li><li><b>Angel Ruíz</b>: banjo</li><li><b>Dani “Desmond” Sevillano</b>: ingeniero de sonido</li></ul><p>Fotos: <b>Iris Benítez</b></p><p>Artwork: <b>Wilón DeCalle</b></p><p>Todas las canciones compuestas por <b>The Electric Buffalo</b>.</p><p>Grabado, mezclado y masterizado en <b>Eclipse Estudios</b> (Oviedo) por Dani “Desmond” Sevillano en septiembre de 2015.</p><p>Producido por <b>Dani “Desmond” Sevillano y The Electric Buffalo</b>.</p>                                        ','<p>Keepin’ it warm, editado por Boomerang Discos, supone el esperado regreso discográfico de la banda asturiana formada por Álvaro Bárcena (guitarra y voz), Alejandro Espina (bajo) y Wilón deCalle (batería). Ocho canciones con olor a clásicos, en las que, siempre desde la alargada (¡y ancha!) sombra de Warren Haynes y sus Gov’t Mule, pasando por las enseñanzas del viejo Neil Young, Little Feat o los caballeros sureños de apellido Allman, hasta los caminos de algunos contemporáneos como Derek Trucks (y Susan Tedeschi) o Blackberry Smoke, el trío continúa recorriendo las enredadas carreteras del rock, recogiendo pequeños matices, arreglos e intenciones de décadas de música popular para sacar de la coctelera un sonido personal, magnético e inevitablemente absorvente, la mezcla perfecta de sutileza, emoción, tradición, energía y modernidad.</p><p>Canciones como Your reasons, Wide Screen o el incontestable himno Hotel Bar, hacen de Keepin’ it warm un disco repleto de grandes historias en las que predominan las afueras de los corazones solitarios, la rabiosa melancolía del perdedor orgulloso y la mirada certera, crítica y reflexiva sobre un mundo que se derrumba y encuentra, de manera autoreferencial y reivindicativa, su única salvación en el rock and roll. Todo ello decorado con la búsqueda de un sonido imperecedero, mezcla infalible de potencia, autenticidad y nostálgica dulzura. De ahí esa declaración de intenciones del título, esa labor de mantener caliente no sólo el corazón y la pasión de la banda sino la sangre de todos aquellos que les escuchen.</p><p class=\"alinear-derecha\">-Pablo Moro-                                                            </p>                    ','','',0),(7,'Beisbolera Logo','88ff66161088e9d2b9b922896ad43ade.jpg',12.00,'2024-03-03',2,'','','','Camiseta modelo beisbolera con el logo y mangas negras de la talla S','                                        ','Negro','S',10),(8,'Logo Fondo Negro','59f44326267f0e5149cc487ae45e3921.jpg',12.00,'2024-03-03',2,'','','','Camiseta de fondo negro con logo blanco','                    ','Negro','XL',10),(9,'Logo Fondo Rojo','fed28211ff9fde13008e7d64b74782d8.jpg',12.00,'2024-03-03',2,'','','','Camiseta de fondo rojo con el logo en blanco                    ','                                        ','Rojo','L',5),(10,'Beisbolera Logo','7d962a1761949d7133c46543cdb6ef75.jpg',12.00,'2024-03-13',2,'','','','Modelo beisbolera con el logo en negro de la talla M                    ','                                                            ','Negro','M',5);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-16 18:58:04
