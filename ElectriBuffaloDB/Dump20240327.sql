DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Discos'),(2,'Camisetas');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenidos`
--

DROP TABLE IF EXISTS `contenidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contenidos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) DEFAULT NULL,
  `texto` text,
  `fecha_creacion` date DEFAULT NULL,
  `titulo` varchar(100) NOT NULL,
  `portada` tinyint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenidos`
--

LOCK TABLES `contenidos` WRITE;
/*!40000 ALTER TABLE `contenidos` DISABLE KEYS */;
INSERT INTO `contenidos` VALUES (1,'79f97cdc6b65fb7b7ba890cd877b3c02.jpg','<p>Este trabajo, el tercero de su andadura por los sinuosos senderos del rock, se eleva como una plegaria y acaba constituyendo un exorcismo de todos los demonios aparecidos tras la muerte, en 2016, de Alejandro “Espina” Blanco, miembro fundador de la banda y también bajista de Ilegales durante 20 años.</p><p>Patrolman (Boomerang Discos) es, con toda la autoridad, un disco de rock con mayúsculas. La producción, a cargo del también miembro de la banda Sergio “Tutu”, no da opción a la especulación. Las canciones, el arma secreta del cuarteto, suenan como una apisonadora con rodillo de seda, y esa voz, quizá una de las mejores de España, se deja oír con ese timbre precioso, delicado pero no sensiblero y seguro sin ser arrogante, de los que saben perfectamente qué se traen entre manos.</p>','2024-03-04','Patrolman',1);
/*!40000 ALTER TABLE `contenidos` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discos`
--

LOCK TABLES `discos` WRITE;
/*!40000 ALTER TABLE `discos` DISABLE KEYS */;
INSERT INTO `discos` VALUES (4,'Patrolman','2023','VINILO','Boomerang','<p>Este trabajo, el tercero de su andadura por los sinuosos senderos del rock, se eleva como una plegaria y acaba constituyendo un exorcismo de todos los demonios aparecidos tras la muerte, en 2016, de Alejandro “Espina” Blanco, miembro fundador de la banda y también bajista de Ilegales durante 20 años.<br>Patrolman (Boomerang Discos) es, con toda la autoridad, un disco de rock con mayúsculas. La producción, a cargo del también miembro de la banda Sergio “Tutu”, no da opción a la especulación. Las canciones, el arma secreta del cuarteto, suenan como una apisonadora con rodillo de seda, y esa voz, quizá una de las mejores de España, se deja oír con ese timbre precioso, delicado pero no sensiblero y seguro sin ser arrogante, de los que saben perfectamente qué se traen entre manos. Esa voz que canaliza los esfuerzos de la banda hacia el corazón del oyente y lo hace palpitar gracias a un voltaje emocional de primer orden que va in crescendo porque todo el álbum está grabado en memoria de Alejandro. El título, Patrolman (“Patrullero”), era lo primero que salía de la boca de Alejandro cuando te lo encontrabas por ahí: “¡Qué pasa, patrullero!”, soltaba, siempre con una enorme sonrisa en la cara.<br>El disco está planteado en dos caras muy reconocibles que permiten degustar en primer y segundo plato. En la cara A mandan las canciones que funcionarían perfectamente con una guitarra acústica al calor de una hoguera. Es una delicatessen rock. Canciones de dura piel y alma de pura nobleza; quizá exceptuando You know how, pieza con influencias sureñas que podría ser digna de los legendarios Lynyrd Skynyrd. La cara B, sin embargo, muestra a la banda estallando en riffs más duros, menos amables, que permiten al cuarteto destapar su volcán interior, dar una lección magistral de cómo tejer instrumentos y construir un edificio de rock, y terminar rematando el álbum con una joya llamada Walking behind<br>Hay artistas y hay artesanos, pero The Electric Buffalo son ambas cosas a la vez. Es un disco donde se destilan años de oficio, pero con ese pellizco que les diferencia y les eleva a los cielos, igual que al añorado Alejandro.</p><p class=\"alinear-derecha\">-Igor Paskual-</p>','3442ef45ea308694869a2cfc166af626.jpg','2024-02-29',NULL),(5,'Hidin\' from the butcher','2009','CD','Ouroboros Records','Este primer trabajo de la banda, editado en 2009 en formato CD, está, desgraciadamente, descatalogado. Álvaro Bárcena, Jandro Espina y Wilón DeCalle desgranan 10 temas cercanos a la órbita del rock sureño, pero con tintes muy particulares, donde sonidos más folkies, psicodélicos e incluso pop se entremezclan dando como resultado unas canciones con mucha personalidad y con unas marcadas influencias de bandas como Gov’t Mule.El más puro eclecticismo es la marca de la casa del trío, que presume de hacer temas sin atender a etiquetas ni estilos, aunque la seña de identidad de “lo americano” se puede distinguir con nitidez en todos los cortes del disco. Hidin’ from the butcher es, sin duda, un debut a la altura de las expectativas que muchos habíamos depositado en esta banda, cuando las noticias sobre su nacimiento corrieron como la espuma por los mentideros del rock asturiano.-JL Moreno-                                        ','77cd0cd3a17629c84bae777c42084683.jpg','2024-02-29','<div>Músicos:</div><div><br></div><ul><li>Álvaro “Daddy” Bárcena: guitarra acústica, eléctrica y 12-cuerdas, pedal steel y voz</li><li>Alejandro Blanco: bajo</li><li>Wilón DeCalle: batería y coros</li><li>José Ramón Feito:: piano, hammond, rhodes y wurlitzer</li><li>Angel Ruíz: banjo</li><li>Dani “Desmond” Sevillano: ingeniero de sonido</li></ul><div>Fotos: Iris Benítez</div><div><br></div><div>Artwork: Wilón DeCalle</div><div><br></div><div>Todas las canciones compuestas por The Electric Buffalo.</div><div><br></div><div>Grabado, mezclado y masterizado en Eclipse Estudios (Oviedo) por Dani “Desmond” Sevillano en septiembre de 2015.</div><div><br></div><div>Producido por Dani “Desmond” Sevillano y The Electric Buffalo</div>                    '),(6,'Keepin\'it Warm','2016','CD','Boomerang Discos','Keepin’ it warm, editado por Boomerang Discos, supone el esperado regreso discográfico de la banda asturiana formada por Álvaro Bárcena (guitarra y voz), Alejandro Espina (bajo) y Wilón deCalle (batería). Ocho canciones con olor a clásicos, en las que, siempre desde la alargada (¡y ancha!) sombra de Warren Haynes y sus Gov’t Mule, pasando por las enseñanzas del viejo Neil Young, Little Feat o los caballeros sureños de apellido Allman, hasta los caminos de algunos contemporáneos como Derek Trucks (y Susan Tedeschi) o Blackberry Smoke, el trío continúa recorriendo las enredadas carreteras del rock, recogiendo pequeños matices, arreglos e intenciones de décadas de música popular para sacar de la coctelera un sonido personal, magnético e inevitablemente absorvente, la mezcla perfecta de sutileza, emoción, tradición, energía y modernidad.<br>Canciones como Your reasons, Wide Screen o el incontestable himno Hotel Bar, hacen de Keepin’ it warm un disco repleto de grandes historias en las que predominan las afueras de los corazones solitarios, la rabiosa melancolía del perdedor orgulloso y la mirada certera, crítica y reflexiva sobre un mundo que se derrumba y encuentra, de manera autoreferencial y reivindicativa, su única salvación en el rock and roll. Todo ello decorado con la búsqueda de un sonido imperecedero, mezcla infalible de potencia, autenticidad y nostálgica dulzura. De ahí esa declaración de intenciones del título, esa labor de mantener caliente no sólo el corazón y la pasión de la banda sino la sangre de todos aquellos que les escuchen.<br><p class=\"alinear-derecha\">-Pablo Moro-</p>                                                         ','873d1341fbf3a3919c370822c74d530d.jpg','2024-03-01',NULL);
/*!40000 ALTER TABLE `discos` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `musicos`
--

LOCK TABLES `musicos` WRITE;
/*!40000 ALTER TABLE `musicos` DISABLE KEYS */;
INSERT INTO `musicos` VALUES (2,'Wilón','DeCalle','Wilón DeCalle','11a48006434f8dabddcb00a5fa928ef8.jpg','<b>Wilón DeCalle</b> (Oviedo, 25 de septiembre de 1976) fue el encargado de producir el groove en bandas como <b>Los Bruscos</b> o <b>The Real McCoyson</b> y actualmente lo es en <b>Deville & La Fuerza</b>, <b>Montefurado </b>o <b>Gestido</b>, además del Búfalo Eléctrico. Ha grabado con multitud de artistas y bandas asturianas. No entiende una palabra de economía (algo que quiere remediar) y siente profunda admiración por Bobby Caldwell, Matt Abts y Jaime Beláustegui.<br>                                                                                ','Oviedo','1976-09-25'),(3,'Álvaro ','\"Daddy\" Bárcena','Daddy','cb47379dd69eb75341391ae3f5e8e978.jpg','<b>Álvaro “Daddy” Bárcen</b>a (Oviedo, 22 de abril de 1977) es guitarrista de sesión, compositor y productor de una infinidad de grupos en los <b>Mercury Studios</b> de Agüera (Las Regueras, Asturias). Guitarrista de bandas asturianas míticas como <b>Amon Ra</b> o <b>Los Bruscos</b>, ahora también se dedica a componer bandas sonoras. Varios Premios AMAS y un Premio OH! de teatro lo acreditan como un profesional muy efectivo.                                        ','Oviedo','1977-04-22'),(4,'Sergio','\"Tutu\" Rodríguez','Tutu','19bd8d185f110402f80770bb44086211.jpg','<b>Sergio “Tutu” Rodríguez</b> (Gijón, 6 de marzo de 1974), bajista, productor y enamorado de Miles Davis, es el actual encargado de las cuatro cuerdas en la legendaria banda de blues-rock nacional <b>Los Deltonos</b> , actividad que compagina con la regencia de <b>Tutu Estudios</b> en Corvera (Asturias). Ahí produjo el último disco de la manada, además de los trabajos de una innumerable lista de grupos de toda España.                                        ','Gijón','1974-03-06'),(5,'Samuel','\"Stone\" Rodríguez','Stone','139fa453d0161d998ddff1f580b80e9d.jpg','<b>“Stone” Sam Rodríguez</b> (Oviedo, 26 de febrero de 1976) pianista de carrera con cierta precocidad, ingresa en el Conservatorio a los 8 años. Adorador de Chick Corea, es un tipo realmente camaleónico con las teclas. Ha grabado discos con <b>Bacotexo</b>, <b>Ángel Miguel & The Travellers</b>, <b>Black Beans</b>, <b>El Malo</b>, <b>Alejandra Burgos</b>, <b>Rossaleda Jazz Quartet</b>, <b>Sinatra & Jobim Project</b>...                                        ','Oviedo','1976-02-26');
/*!40000 ALTER TABLE `musicos` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (150,'Concierto Factoría Sound Avilés','The Electric Buffalo en concierto','El próximo<b> 23 de marzo,</b> The Electric Buffalo se subirá a las tablas de la <b>Factoría Cultural, en Avilés</b>, lugar emblemático por donde los mejores artistas internacionales pasan a mostrar sus trabajos. La banda está encantada de que los promotores hayan querido, en este primer ciclo de conciertos del año, que Patrolman sea presentado allí.<br>Si no tienes tus entradas, en este enlace puedes obtenerlas:<br>\r\n<a href=\"https://uniticket.janto.es/palaciovaldes/public/janto/main.php#\" target=\"_blank\" class=\"enlace-negro\">Compra aquí tus entradas</a>                                                                                ','9e75a4f24afbfeec80412c2aec867ab9.jpg','2024-02-26','2024-02-11',NULL,NULL),(151,'Nominación Mejor Disco Rock 2023','Premios Amas','El próximo 23 de febrero tendrá lugar la ceremonia de entrega de los Premios Amas de la Música Asturiana, a los que la banda está nominada en la categoría de “mejor disco Rock”.                                                       ','c2dd22f8d13a9a75385b1fb7414dd08d.jpg','2024-02-26','2024-02-11',NULL,NULL),(152,'Patrolman, Premio Amas Mejor Disco Rock','Patrolman ha recibido el premio al mejor disco amas 2023','<p>Muchísimas gracias a todo el mundo que participó en la votación y consideró que nuestro trabajo merecía ser premiado. Nos hace mucha ilusión este premio y, aunque no podemos olvidar que de premios no se vive, sí que ayuda un poco y reconforta el espíritu para continuar la marcha en un mundo musical con una clase trabajadora, es decir, todas las personas que hacen sus canciones en sus locales de ensayo, cada vez más golpeada por las condiciones que impone el mercado.</p><p>Los efectos ya se están notando claramente en la pelea diaria para conseguir unas condiciones dignas con algunas salas de conciertos, con precios de alquiler totalmente desorbitados y con personal que, en ocasiones, no está cualificado. La responsabilidad del que contrata ese personal, y no del propio personal -cada uno se gana la vida como puede-, por sacar el máximo beneficio con la mínima inversión es clave. La forma de capitalismo más atroz se ha apoderado de este negocio porque, obviamente, hay posibilidad de negocio. Pero este negocio, curiosamente, se apoya sobre la voluntad de los propios artistas, músicos y compositores, sobre su cabezonería por dar forma a sus inquietudes, sean del tipo que sean, y sacarlas hacia afuera en forma de canciones. Sin esa cabezonería, a la que algunos románticos llaman amor al arte, no hay nada. Ni música, ni canciones, ni negocio. Esto hay que repetirlo: sin músicos no hay negocio. Y es justo decirlo también: no todas las salas son iguales. Ni todos los promotores. Todavía hay algunas salas y promotores que dan prioridad a otras cosas antes que al beneficio económico.</p><p>Las estancias en los hoteles, las comidas fuera de casa, la gasolina para los desplazamientos... Todo es, en la práctica, casi inabordable económicamente para que una banda en España, de manera independiente, pueda conseguir hacerse un público como se hacía hace 20, 30 o 40 años, es decir, a base de carretera. España se ha convertido en un país preparado para que los turistas se gasten su dinero -cuanto más, mejorla mayor parte del año. Pero los sueldos en el resto de países de la UE, de donde proceden muchos de esos turistas, no son los sueldos que tenemos aquí, en España. 1000 euros en Suecia, Dinamarca, Alemania o Francia no valen lo mismo que aquí, por mucho que nos quieran decir que sí.</p><p>A nosotros, la gente trabajadora de España, todo nos cuesta mucho dinero.</p><p>Si a todo esto juntamos una legislación laboral en materia musical/artística del todo anticuada, muy poco flexible y, sobre todo, con poco contacto con la realidad de la propia actividad musical, la mezcla es más peligrosa que el tándem Bush-Cheney.</p><p>¿Cuál es el panorama actual? Pues la triste realidad es que, si quieres trabajar en la música, si quieres intentar hacerte un público y conseguir vivir casi dignamente de tus canciones, necesitas otro trabajo para poder INTENTARLO. Nada nuevo bajo el sol, por otra parte, si echamos un vistazo alrededor: parte de la clase trabajadora en otros sectores sin relación con la música está en igual situación, empalmando dos -o tres- trabajos de media jornada o por horas o, en el caso de trabajadores autónomos, trabajando fines de semana, festivos o con meses sin poder tomarse un descanso. Hay trabajo, sí, pero se paga mal y a deshora.</p><p>En resumen, la clase trabajadora española está en situación precaria, porque así lo está el trabajo, y el mundo musical no es ajeno a ello. De nosotros depende intentar contener este asalto.</p><p>En fin, para concluir quisiéramos agradecer a todas y cada una de las personas que acudís no solo a nuestros conciertos, sino de todas las bandas -sean locales, nacionales o internacionales- que presentan sus trabajos aquí, que no os resignáis a ver cómo la creatividad se muere para que florezca el beneficio económico y que, con vuestro grano de arena, por poca cosa que parezca, aportáis el otro gran soporte sobre el que se asienta todo el show business.</p><p>Muchas gracias. De corazón.</p><p class=\"alinear-derecha\">- Álvaro, Tutu, Sam y Wilón -                                                                                                   </p>                    ','5bf8ee5c560dd05103788fcc1918419a.jpg','2024-02-26','2024-02-24',NULL,NULL),(154,'Sold Out en la Factoría Cultural de Avilés','Entradas agotadas','<p>¡Gracias, familia!</p><p>Nos hace mucha ilusión anunciar que habéis completado el aforo disponible para el concierto del próximo <b>sábado, 23 de marzo</b> en la Factoría Cultural de Avilés.</p><p>¡Va a estar lleno! Y, la verdad, no nos lo esperábamos. Prometemos sudar la camisa de cuadros como siempre... O quizá un poco más, debido al subidón y las ganas de estampida que tenemos ahora mismo. ¡Oh, sí!<br></p><p>Este sábado a las 21:00.</p><p>¡Nos vemos allí!                                        </p>                                                            ','a03dc949a747cc65373c8e510f92b55c.jpg','2024-03-25','2024-03-17',NULL,NULL);
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Patrolman','b385033a3bdc06e0bd1d82963a9ce218.jpg',20.00,'2024-03-02',1,'2023','VINILO','Boomerang Records','<p>Personal:</p><ul><li><b>Álvaro “Daddy” Bárcena</b>: guitarra acústica y eléctrica, pedal steel y voz</li><li><b>Sergio “Tutu” Rodríguez</b>: bajo / ingeniero de sonido</li><li><b>“Stone” Sam Rodríguez</b>: teclados, hammond y wurlitzer</li><li><b>Wilón DeCalle</b>: batería y percusión</li><li><b>Sil Fernández</b>: coros</li><li><b>Juan Yagüe</b>: guitarra acústica y bouzouki</li><li><b>Cristina Gestido</b>: viola</li></ul><p>Fotos: Wesley, Manfred, Dena Flows y Eloy Beltené</p><p>Artwork y diseño carpeta: Ossobüko Studio</p><p>Todas las canciones compuestas por <b>The Electric Buffalo</b>.</p><p>Grabado y mezclado en <b>Tutu Estudios</b> (Corvera) y masterizado por <b>Dani “Desmond” Sevillano</b> entre septiembre y octubre de 2022.</p><p>Producido por <b>Sergio “Tutu” Rodríguez                                                                                                    </b></p>                                        ','<p>Este trabajo, el tercero de su andadura por los sinuosos senderos del rock, se eleva como una plegaria y acaba constituyendo un exorcismo de todos los demonios aparecidos tras la muerte, en 2016, de Alejandro “Espina” Blanco, miembro fundador de la banda y también bajista de Ilegales durante 20 años.</p><p>Patrolman (Boomerang Discos) es, con toda la autoridad, un disco de rock con mayúsculas. La producción, a cargo del también miembro de la banda Sergio “Tutu”, no da opción a la especulación. Las canciones, el arma secreta del cuarteto, suenan como una apisonadora con rodillo de seda, y esa voz, quizá una de las mejores de España, se deja oír con ese timbre precioso, delicado pero no sensiblero y seguro sin ser arrogante, de los que saben perfectamente qué se traen entre manos. Esa voz que canaliza los esfuerzos de la banda hacia el corazón del oyente y lo hace palpitar gracias a un voltaje emocional de primer orden que va in crescendo porque todo el álbum está grabado en memoria de Alejandro. El título, Patrolman (“Patrullero”), era lo primero que salía de la boca de Alejandro cuando te lo encontrabas por ahí: “¡Qué pasa, patrullero!”, soltaba, siempre con una enorme sonrisa en la cara.</p><p>El disco está planteado en dos caras muy reconocibles que permiten degustar en primer y segundo plato. En la cara A mandan las canciones que funcionarían perfectamente con una guitarra acústica al calor de una hoguera. Es una delicatessen rock. Canciones de dura piel y alma de pura nobleza; quizá exceptuando You know how, pieza con influencias sureñas que podría ser digna de los legendarios Lynyrd Skynyrd. La cara B, sin embargo, muestra a la banda estallando en riffs más duros, menos amables, que permiten al cuarteto destapar su volcán interior, dar una lección magistral de cómo tejer instrumentos y construir un edificio de rock, y terminar rematando el álbum con una joya llamada Walking behind.</p><p>Hay artistas y hay artesanos, pero The Electric Buffalo son ambas cosas a la vez. Es un disco donde se destilan años de oficio, pero con ese pellizco que les diferencia y les eleva a los cielos, igual que al añorado Alejandro.</p><p class=\"alinear-derecha\">-Igor Paskual-                                                                                                                                                                                                                                                                                                                                                                                            </p>                    ','','',50),(5,'Hidin\' from the butcher','c4b3fdc47a48d5d1e01eb6fcfb2c20e5.jpg',12.00,'2024-03-03',1,'2009','CD','Ouroboros Records','<p>Personal:</p><ul><li><b>Álvaro “Daddy” Bárcena</b>: guitarra acústica y eléctrica, mandolina y voz</li><li><b>Alejandro Blanco</b>: bajo</li><li><b>Wilón DeCalle</b>: batería</li><li><b>Chus “Crocodile Crazy Hammond” Neira</b>: teclados y hammond</li><li><b>Manfred</b>: voz en “Don’t rock the boat” y coros</li><li><b>Mary Page</b>: coros</li><li><b>Dani “Desmond” Sevillano</b>: ingeniero de sonido</li></ul><p>Fotos: Manfred</p><p>Artwork: Wilón DeCalle</p><p>Todas las canciones compuestas por <b>The Electric Buffalo</b>.</p><p>Grabado, mezclado y masterizado en <b>Eclipse Estudios</b> (Oviedo) por Dani “Desmond” Sevillano entre diciembre de 2008 y marzo de 2009.</p><p>Producido por <b>Dani “Desmond” Sevillano y The Electric Buffalo                                        </b></p>                    ','<p>Este primer trabajo de la banda, editado en 2009 en formato CD, está, desgraciadamente, descatalogado. Álvaro Bárcena, Jandro Espina y Wilón DeCalle desgranan 10 temas cercanos a la órbita del rock sureño, pero con tintes muy particulares, donde sonidos más folkies, psicodélicos e incluso pop se entremezclan dando como resultado unas canciones con mucha personalidad y con unas marcadas influencias de bandas como Gov’t Mule.</p><p>El más puro eclecticismo es la marca de la casa del trío, que presume de hacer temas sin atender a etiquetas ni estilos, aunque la seña de identidad de “lo americano” se puede distinguir con nitidez en todos los cortes del disco. Hidin’ from the butcher es, sin duda, un debut a la altura de las expectativas que muchos habíamos depositado en esta banda, cuando las noticias sobre su nacimiento corrieron como la espuma por los mentideros del rock asturiano.</p><p class=\"alinear-derecha\">-JL Moreno-</p>                    ','','',0),(6,'Keepin\'it Warm','f737915294b78083e720d6db25a7414a.jpg',12.00,'2024-03-03',1,'2013','CD',' Boomerang Discos','<p>Personal:</p><ul><li><b>Álvaro “Daddy” Bárcena</b>: guitarra acústica, eléctrica y 12-cuerdas, pedal steel y voz</li><li><b>Alejandro Blanco</b>: bajo</li><li><b>Wilón DeCalle</b>: batería y coros</li><li><b>José Ramón Feito</b>: piano, hammond, rhodes y wurlitzer</li><li><b>Angel Ruíz</b>: banjo</li><li><b>Dani “Desmond” Sevillano</b>: ingeniero de sonido</li></ul><p>Fotos: <b>Iris Benítez</b></p><p>Artwork: <b>Wilón DeCalle</b></p><p>Todas las canciones compuestas por <b>The Electric Buffalo</b>.</p><p>Grabado, mezclado y masterizado en <b>Eclipse Estudios</b> (Oviedo) por Dani “Desmond” Sevillano en septiembre de 2015.</p><p>Producido por <b>Dani “Desmond” Sevillano y The Electric Buffalo</b>.</p>                                        ','<p>Keepin’ it warm, editado por Boomerang Discos, supone el esperado regreso discográfico de la banda asturiana formada por Álvaro Bárcena (guitarra y voz), Alejandro Espina (bajo) y Wilón deCalle (batería). Ocho canciones con olor a clásicos, en las que, siempre desde la alargada (¡y ancha!) sombra de Warren Haynes y sus Gov’t Mule, pasando por las enseñanzas del viejo Neil Young, Little Feat o los caballeros sureños de apellido Allman, hasta los caminos de algunos contemporáneos como Derek Trucks (y Susan Tedeschi) o Blackberry Smoke, el trío continúa recorriendo las enredadas carreteras del rock, recogiendo pequeños matices, arreglos e intenciones de décadas de música popular para sacar de la coctelera un sonido personal, magnético e inevitablemente absorvente, la mezcla perfecta de sutileza, emoción, tradición, energía y modernidad.</p><p>Canciones como Your reasons, Wide Screen o el incontestable himno Hotel Bar, hacen de Keepin’ it warm un disco repleto de grandes historias en las que predominan las afueras de los corazones solitarios, la rabiosa melancolía del perdedor orgulloso y la mirada certera, crítica y reflexiva sobre un mundo que se derrumba y encuentra, de manera autoreferencial y reivindicativa, su única salvación en el rock and roll. Todo ello decorado con la búsqueda de un sonido imperecedero, mezcla infalible de potencia, autenticidad y nostálgica dulzura. De ahí esa declaración de intenciones del título, esa labor de mantener caliente no sólo el corazón y la pasión de la banda sino la sangre de todos aquellos que les escuchen.</p><p class=\"alinear-derecha\">-Pablo Moro-                                                            </p>                    ','','',0),(7,'Beisbolera Logo','88ff66161088e9d2b9b922896ad43ade.jpg',12.00,'2024-03-03',2,'','','','Camiseta modelo beisbolera con el logo y mangas negras de la talla S','                                        ','Negro','S',10),(8,'Logo Fondo Negro','59f44326267f0e5149cc487ae45e3921.jpg',12.00,'2024-03-03',2,'','','','Camiseta de fondo negro con logo blanco','                    ','Negro','XL',10),(9,'Logo Fondo Rojo','fed28211ff9fde13008e7d64b74782d8.jpg',12.00,'2024-03-03',2,'','','','Camiseta de fondo rojo con el logo en blanco                    ','                                        ','Rojo','L',5),(10,'Beisbolera Logo','7d962a1761949d7133c46543cdb6ef75.jpg',12.00,'2024-03-13',2,'','','','Camiseta modelo beisbolera con el logo y mangas negras de la talla XXL','                                                                                                    ','Negro','XXL',5);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin'),(2,'user');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `dni` varchar(12) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` char(60) DEFAULT NULL,
  `token` varchar(60) DEFAULT NULL,
  `idrol` int DEFAULT NULL,
  `confirmado` tinyint DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `dni_UNIQUE` (`dni`),
  KEY `fk_usuario_rol_idx` (`idrol`),
  CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`idrol`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Pilar','Fernandez','10880331C','626340144','correo@correo.com','$2y$10$Y5icNUR1KovdiCqJBlJS/uMosCf8pr5GpLwyRfqV3bey2QDBdTix6','',1,1,'2024-02-23'),(26,'Lola','Flores','111','666222111','pilarfnieto@gmail.com','$2y$10$LR3PUZO4q0GDMKwMGqSRk.XRL2wBfAoYuDnoWU3Fp1f3z5XHbkkhG','6601c4043ee5e',2,1,'2024-03-17'),(27,'Pepe','Pérez','222','666999777','pepe@pepe.com','$2y$10$Yr4Gy2cqWKcb9LLdT0ai1OyH17QhbrdBrP3ezqBNHzT5mISlWLRjq','',2,1,'2024-03-17'),(28,'Juanito','Valderrama','333','666444111','juanito@juanito.com','$2y$10$15rQs2stT9BpxJP4VvWBluDAFrVPwhmwV.kGn0OL6CBDJ2tGA69KS','',2,1,'2024-03-20'),(30,'Laura','Pausini','444','555777111','laura@laura.com','$2y$10$i77ZNbtoUBZII5OK4w/CvutnBf7EST6XjK/TTYP2blrKxdl1PzltO','65fe00add7e45',2,1,'2024-03-20'),(34,'Dolores','García','888','666999444','dolores@dolores.com','$2y$10$ryEb9JqQS3cGh.8M6b1OZO2CFTly2meTjaCMDC8eGdDV3SFUsY8Lu','',2,1,'2024-03-22');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-27 13:24:05
