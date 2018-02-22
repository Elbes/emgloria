-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: emgloria
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `tb_banner`
--

DROP TABLE IF EXISTS `tb_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_banner` (
  `id_banner` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `banner_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validade` date NOT NULL,
  `banner_obs` text COLLATE utf8mb4_unicode_ci,
  `prioridade` int(11) NOT NULL,
  `imagen_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_usuario_cadastro` int(10) unsigned NOT NULL,
  `id_usuario_atualizacao` int(11) DEFAULT NULL,
  `dhs_cadastro` timestamp NULL DEFAULT NULL,
  `dhs_atualizacao` timestamp NULL DEFAULT NULL,
  `dhs_exclusao_logica` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_banner`),
  KEY `ta_banner_id_usuario_cadastro_foreign` (`id_usuario_cadastro`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_banner`
--

LOCK TABLES `tb_banner` WRITE;
/*!40000 ALTER TABLE `tb_banner` DISABLE KEYS */;
INSERT INTO `tb_banner` VALUES (7,'Primeiro banner','2018-02-23','fsf',2,'1518540827_banner-img-2.jpg',5,NULL,'2018-02-13 14:53:47','2018-02-13 14:58:44',NULL),(8,'Segundo banner','2018-02-23','dd',3,'1518540859_banner-img-3.jpg',5,NULL,'2018-02-13 14:54:19','2018-02-13 14:54:19',NULL),(9,'Terceiro bnner','2018-05-24','sfsf',1,'1518540898_img-1.jpg',5,NULL,'2018-02-13 14:54:58','2018-02-13 14:56:35',NULL);
/*!40000 ALTER TABLE `tb_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_devocional`
--

DROP TABLE IF EXISTS `tb_devocional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_devocional` (
  `id_devocional` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `id_usuario_cadastro` int(11) DEFAULT NULL,
  `dhs_cadastro` timestamp NULL DEFAULT NULL,
  `dhs_atualizacao` timestamp NULL DEFAULT NULL,
  `dhs_exclusao_logica` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_devocional`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_devocional`
--

LOCK TABLES `tb_devocional` WRITE;
/*!40000 ALTER TABLE `tb_devocional` DISABLE KEYS */;
INSERT INTO `tb_devocional` VALUES (1,'TíTULO DEVOCINAL 1','Texto devocional 1',NULL,'2018-02-13 16:35:30','2018-02-13 17:16:51',NULL),(2,'TíTULO DEVOCINAL 2','Lorem ipsum aptent diam congue ante curabitur cubilia porttitor, placerat morbi consequat auctor iaculis dictumst tortor integer, vitae dictum nostra morbi dictum consectetur nunc. vitae malesuada ultrices libero nullam porttitor dapibus ut primis rutrum tristique lobortis est ultricies, id elit et bibendum fermentum mollis quam tempor metus tristique lacus pellentesque. laoreet quis sociosqu accumsan massa auctor netus semper hac litora neque elit turpis id etiam urna elementum, tortor sed fermentum odio torquent quisque habitasse sollicitudin feugiat nulla torquent sapien eu facilisis venenatis. ac imperdiet vulputate purus habitasse dolor facilisis erat accumsan fermentum, mauris bibendum nibh laoreet nec cursus gravida volutpat sollicitudin facilisis, quisque laoreet nisi duis sollicitudin risus eget vivamus. \r\n\r\n	Aliquam quisque integer phasellus gravida ut in sed, pharetra quis litora elit vestibulum id, metus porttitor fringilla consequat habitasse etiam sed, nisl tempor convallis adipiscing curae. lobortis himenaeos eget pellentesque consectetur primis nec etiam neque, gravida et nulla leo ac quam elementum sapien mauris, bibendum quisque curabitur fermentum suscipit cursus massa. at ultrices aenean quam dictum aliquet eu fermentum aliquam lacus, mollis himenaeos aliquet condimentum mauris nam vulputate. commodo nullam sapien placerat donec primis purus sem accumsan, orci nulla dictum eu et nibh etiam class mi, etiam fames orci sit magna elementum vulputate. \r\n\r\n	Eget conubia nunc amet taciti phasellus pharetra sapien, adipiscing accumsan rutrum vel id convallis inceptos, potenti at felis gravida egestas at. mollis ac bibendum imperdiet proin aliquet adipiscing maecenas luctus ultrices aliquam, nec congue egestas turpis tempor porttitor primis lorem aliquam turpis, volutpat sem posuere convallis platea ornare vivamus ornare curabitur. urna neque ipsum velit etiam vitae sodales eget aliquam, aenean elementum facilisis ut nulla libero augue, quisque nunc tellus consectetur lobortis imperdiet etiam. magna ligula nullam at nibh dui vulputate, rhoncus habitant etiam magna tristique neque posuere, lorem facilisis eu blandit vehicula. \r\n\r\n	Lacus lectus congue nam aenean sociosqu fringilla, consectetur leo adipiscing orci cras lectus sit, curabitur convallis lorem dapibus semper. lobortis pharetra accumsan morbi nunc hac vehicula sapien laoreet tellus sagittis, habitasse iaculis cubilia in curabitur malesuada ultrices suspendisse urna, at sollicitudin phasellus adipiscing quis nisl suscipit sociosqu volutpat. sollicitudin et justo quisque consequat etiam suscipit mi tortor porttitor suspendisse, sollicitudin metus quisque lacus cursus mattis laoreet erat. mauris aliquam lorem auctor feugiat felis diam non aenean mattis varius, purus mauris curabitur cursus phasellus purus senectus mattis gravida tempor vestibulum, cubilia phasellus tristique vivamus sagittis elementum cursus ligula non. \r\n\r\n	Integer class orci ipsum dictumst consequat cursus enim litora lacus, etiam quisque proin vestibulum semper feugiat vulputate nullam neque adipiscing, nec conubia ut egestas auctor nibh egestas dolor. tristique ante tellus neque nullam pretium potenti donec leo class, taciti pellentesque netus donec ac habitasse dictumst consectetur, ad velit elit ultricies eu ultrices pharetra placerat. tellus primis elit risus donec sapien habitasse molestie mauris ultricies rhoncus, mollis inceptos faucibus vehicula auctor vulputate primis arcu a, augue curae nam ullamcorper per egestas viverra ut morbi. sapien sociosqu nullam massa viverra scelerisque orci quis taciti, consectetur viverra vivamus dictum enim adipiscing risus, blandit dictum platea fames phasellus eros tristique.',NULL,'2018-02-13 16:57:39','2018-02-13 17:32:19',NULL);
/*!40000 ALTER TABLE `tb_devocional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_galeria`
--

DROP TABLE IF EXISTS `tb_galeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_galeria` (
  `id_galeria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_imagem` varchar(60) DEFAULT NULL,
  `tipo_imagem` varchar(45) DEFAULT NULL,
  `obs_imagem` varchar(250) DEFAULT NULL,
  `dhs_cadastro` timestamp NULL DEFAULT NULL,
  `dhs_atualizacao` timestamp NULL DEFAULT NULL,
  `dhs_exclusao_logica` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_galeria`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_galeria`
--

LOCK TABLES `tb_galeria` WRITE;
/*!40000 ALTER TABLE `tb_galeria` DISABLE KEYS */;
INSERT INTO `tb_galeria` VALUES (13,'1518529690_img-4.jpg','Amor que move','asdsa','2018-02-13 11:48:10','2018-02-13 11:49:37',NULL),(14,'1518529727_img-3.jpg','Geral','adasd','2018-02-13 11:48:47','2018-02-13 11:48:47',NULL),(15,'1518529741_img-2.jpg','Geral','sda','2018-02-13 11:49:01','2018-02-13 11:49:01',NULL),(16,'1518530483_gallery-img-7.jpg','Amor que move','sdada','2018-02-13 12:01:23','2018-02-22 20:02:25',NULL);
/*!40000 ALTER TABLE `tb_galeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_ministerio`
--

DROP TABLE IF EXISTS `tb_ministerio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_ministerio` (
  `id_ministerio` int(11) NOT NULL AUTO_INCREMENT,
  `nome_ministerio` varchar(150) DEFAULT NULL,
  `texto_ministerio` text,
  `obs_ministerio` varchar(200) DEFAULT NULL,
  `lider_ministerio` varchar(60) DEFAULT NULL,
  `colider_ministerio` varchar(60) DEFAULT NULL,
  `id_usuario_cadastro` int(11) DEFAULT NULL,
  `id_usuario_atualizacao` int(11) DEFAULT NULL,
  `dhs_cadastro` timestamp NULL DEFAULT NULL,
  `dhs_atualizacao` timestamp NULL DEFAULT NULL,
  `dhs_exclusao_logica` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_ministerio`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_ministerio`
--

LOCK TABLES `tb_ministerio` WRITE;
/*!40000 ALTER TABLE `tb_ministerio` DISABLE KEYS */;
INSERT INTO `tb_ministerio` VALUES (24,'LOUVOR','<p><strong>csdfsdf</strong></p>',NULL,'dfhdfh','dhdf',5,NULL,'2018-01-05 19:29:58','2018-01-05 19:40:42',NULL);
/*!40000 ALTER TABLE `tb_ministerio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_perfil`
--

DROP TABLE IF EXISTS `tb_perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_perfil` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `nome_perfil` varchar(100) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `dhs_cadastro` datetime DEFAULT NULL,
  `dhs_atualizacao` datetime DEFAULT NULL,
  `dhs_exclusao_logica` datetime DEFAULT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_perfil`
--

LOCK TABLES `tb_perfil` WRITE;
/*!40000 ALTER TABLE `tb_perfil` DISABLE KEYS */;
INSERT INTO `tb_perfil` VALUES (1,'Administrador Geral','ADMG','2017-12-13 00:00:00',NULL,NULL);
/*!40000 ALTER TABLE `tb_perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_programacao`
--

DROP TABLE IF EXISTS `tb_programacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_programacao` (
  `id_programacao` int(11) NOT NULL AUTO_INCREMENT,
  `dia_programacao` varchar(45) DEFAULT NULL,
  `texto_programacao` varchar(150) DEFAULT NULL,
  `prioridade` int(11) DEFAULT NULL,
  `id_usuario_cadastro` int(11) DEFAULT NULL,
  `dhs_cadastro` timestamp NULL DEFAULT NULL,
  `dhs_atualizacao` timestamp NULL DEFAULT NULL,
  `dhs_exclusao_logica` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_programacao`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_programacao`
--

LOCK TABLES `tb_programacao` WRITE;
/*!40000 ALTER TABLE `tb_programacao` DISABLE KEYS */;
INSERT INTO `tb_programacao` VALUES (1,'Domingo','CULTO EVANGELÍSTICO',1,NULL,'2018-02-22 18:54:17','2018-02-22 19:58:53',NULL),(2,'Domingo','ESCOLA BÍBLICA DOMINICAL',2,NULL,'2018-02-22 19:00:10','2018-02-22 19:52:21',NULL),(3,'Sexta-Feira','CULTO DOS JOVENS',3,NULL,'2018-02-22 19:00:36','2018-02-22 19:44:02',NULL);
/*!40000 ALTER TABLE `tb_programacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_sobre`
--

DROP TABLE IF EXISTS `tb_sobre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_sobre` (
  `id_sobre` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `id_usuario_atualizacao` int(11) DEFAULT NULL,
  `dhs_cadastro` timestamp NULL DEFAULT NULL,
  `dhs_atualizacao` timestamp NULL DEFAULT NULL,
  `dhs_exclusao_logica` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_sobre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_sobre`
--

LOCK TABLES `tb_sobre` WRITE;
/*!40000 ALTER TABLE `tb_sobre` DISABLE KEYS */;
INSERT INTO `tb_sobre` VALUES (1,'Missão','Texto da Missão aqui',NULL,NULL,'2018-02-12 17:19:54',NULL),(2,'Visão','Texto da Visão aqui. Falta atulizar',NULL,NULL,'2018-02-12 17:33:37',NULL);
/*!40000 ALTER TABLE `tb_sobre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `telefone` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(60) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `id_perfil` int(11) NOT NULL,
  `dhs_cadastro` datetime DEFAULT NULL,
  `dhs_atualizacao` datetime DEFAULT NULL,
  `dhs_exclusao_logica` datetime DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_tb_usuarios_tb_perfil_idx` (`id_perfil`),
  CONSTRAINT `fk_tb_usuarios_tb_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `tb_perfil` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuarios`
--

LOCK TABLES `tb_usuarios` WRITE;
/*!40000 ALTER TABLE `tb_usuarios` DISABLE KEYS */;
INSERT INTO `tb_usuarios` VALUES (5,'Elbes',NULL,'elbes2009@gmail.com','$2y$10$KDxAQLZQrMLqvcHhzHoIvueJVcl4bqQsEpxldNcp1SAOjhaEsSW2C',1,'2017-12-14 08:50:06','2017-12-14 08:50:06',NULL);
/*!40000 ALTER TABLE `tb_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-22 23:43:31
