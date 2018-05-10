-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: emgloria
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
INSERT INTO `tb_devocional` VALUES (1,'A VIDA','<p><strong>at ultrices aenean quam dictum aliquet eu fermentum aliquam lacus</strong>, mollis himenaeos aliquet condimentum mauris nam vulputate. commodo nullam sapien placerat donec primis purus sem accumsan, orci nulla dictum eu et nibh etiam class mi, etiam fames orci sit magna elementum vulputate. Eget conubia nunc amet taciti phasellus pharetra sapien, adipiscing accumsan rutrum vel id convallis inceptos, potenti at felis gravida egestas at. mollis ac bibendum imperdiet proin aliquet adipiscing maecenas luctus ultrices aliquam, nec congue egestas turpis tempor porttitor primis lorem aliquam turpis, volutpat sem posuere convallis platea ornare vivamus ornare curabitur. urna neque ipsum velit etiam vitae sodales eget aliquam, aenean elementum facilisis ut nulla libero augue, quisque nunc tellus consectetur lobortis imperdiet etiam. magna ligula nullam at nibh dui vulputate, rhoncus habitant etiam magna tristique neque posuere, lorem facilisis eu blandit vehicula. Lacus lectus congue nam aenean sociosqu fringilla</p>',NULL,'2018-02-13 16:35:30','2018-04-03 10:27:25',NULL),(2,'TíTULO DEVOCINAL 2','Lorem ipsum aptent diam congue ante curabitur cubilia porttitor, placerat morbi consequat auctor iaculis dictumst tortor integer, vitae dictum nostra morbi dictum consectetur nunc. vitae malesuada ultrices libero nullam porttitor dapibus ut primis rutrum tristique lobortis est ultricies, id elit et bibendum fermentum mollis quam tempor metus tristique lacus pellentesque. laoreet quis sociosqu accumsan massa auctor netus semper hac litora neque elit turpis id etiam urna elementum, tortor sed fermentum odio torquent quisque habitasse sollicitudin feugiat nulla torquent sapien eu facilisis venenatis. ac imperdiet vulputate purus habitasse dolor facilisis erat accumsan fermentum, mauris bibendum nibh laoreet nec cursus gravida volutpat sollicitudin facilisis, quisque laoreet nisi duis sollicitudin risus eget vivamus. \r\n\r\n	Aliquam quisque integer phasellus gravida ut in sed, pharetra quis litora elit vestibulum id, metus porttitor fringilla consequat habitasse etiam sed, nisl tempor convallis adipiscing curae. lobortis himenaeos eget pellentesque consectetur primis nec etiam neque, gravida et nulla leo ac quam elementum sapien mauris, bibendum quisque curabitur fermentum suscipit cursus massa. at ultrices aenean quam dictum aliquet eu fermentum aliquam lacus, mollis himenaeos aliquet condimentum mauris nam vulputate. commodo nullam sapien placerat donec primis purus sem accumsan, orci nulla dictum eu et nibh etiam class mi, etiam fames orci sit magna elementum vulputate.',NULL,'2018-02-13 16:57:39','2018-03-29 12:48:56',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_galeria`
--

LOCK TABLES `tb_galeria` WRITE;
/*!40000 ALTER TABLE `tb_galeria` DISABLE KEYS */;
INSERT INTO `tb_galeria` VALUES (13,'1518529690_img-4.jpg','Amor que move','asdsa','2018-02-13 11:48:10','2018-02-13 11:49:37',NULL),(14,'1518529727_img-3.jpg','Geral','adasd','2018-02-13 11:48:47','2018-02-13 11:48:47',NULL),(15,'1518529741_img-2.jpg','Geral','sda','2018-02-13 11:49:01','2018-02-13 11:49:01',NULL),(16,'1518530483_gallery-img-7.jpg','Geral','sdada','2018-02-13 12:01:23','2018-03-13 14:02:49',NULL),(17,'1520961973_ch-15.jpg','Geral',NULL,'2018-03-13 14:26:13','2018-03-13 14:26:13',NULL),(18,'1520961980_ch-26.jpg','Geral',NULL,'2018-03-13 14:26:20','2018-03-13 14:26:20',NULL),(19,'1520961988_ch-14.jpg','Geral',NULL,'2018-03-13 14:26:28','2018-03-13 14:26:28',NULL),(20,'1522785641_IMG_9586[1].JPG','Geral','casf','2018-04-03 17:00:41','2018-04-03 17:00:41',NULL);
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
INSERT INTO `tb_ministerio` VALUES (24,'LOUVOR','<p>fsdfhklsdf Donec augue sem, pellentesque at ullamcorper vitae, dictum eget nee. Integer nec magna urna, at fringilla turpis. Nam tincidunt lectus ut ante voutpat mattis at sed nisl. Etiam justo lacus, laoreet id posuere ac, cursuisl. Nulla ullamcorper volutpat sem vitae commodo. Curabitur volutpatn metus viverra condimentum. Nam adipiscing tellus et odio suscipit ut hendrerit metus aliquet.</p>',NULL,'dfhdfh','dhdf',5,NULL,'2018-01-05 19:29:58','2018-04-02 16:42:26',NULL);
/*!40000 ALTER TABLE `tb_ministerio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pastores`
--

DROP TABLE IF EXISTS `tb_pastores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pastores` (
  `id_pastor` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pastor` varchar(100) DEFAULT NULL,
  `foto_pastor` varchar(150) DEFAULT NULL,
  `funcao_pastor` varchar(100) DEFAULT NULL,
  `obs_pastor` text,
  `dhs_cadastro` datetime DEFAULT NULL,
  `dhs_atualizacao` datetime DEFAULT NULL,
  `dhs_exclusao_logica` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pastor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pastores`
--

LOCK TABLES `tb_pastores` WRITE;
/*!40000 ALTER TABLE `tb_pastores` DISABLE KEYS */;
INSERT INTO `tb_pastores` VALUES (3,'Cleydival','1522684283_ch-7.jpg','Pastor Titular','texto sobre Cleydival dsvf n hac habitasse platea dictumst. Aliquam dictum felis a purus cursus inorttitor libero vulputate. Vestibulum ante ipsum primis in faucibus orci luctus etultric posuere cubilia Curae.','2018-04-02 12:51:06','2018-04-02 15:07:10',NULL),(4,'Wesley','1522684318_ch-18.jpg','Pastor Substituto - Líder de Casais','hac habitasse platea dictumst. Aliquam dictum felis a purus cursus inorttitor libero vulputate. Vestibulum ante ipsum primis in faucibus orci luctus etultric posuere cubilia Curae. hac habitasse platea dictumst. Aliquam dictum felis a purus cursus inorttitor libero vulputate. Vestibulum ante ipsum primis in faucibus orci luctus etultric posuere cubilia Curae.','2018-04-02 12:51:58','2018-04-03 15:19:02',NULL),(5,'Robson','1522692582_ch-20.jpg','Pastor da EBD','hac habitasse platea dictumst. Aliquam dictum felis a purus cursus inorttitor libero vulputate. Vestibulum ante ipsum primis in faucibus orci luctus etultric posuere cubilia Curae.\r\n hac habitasse platea dictumst. Aliquam dictum felis a purus cursus inorttitor libero vulputate. Vestibulum ante ipsum primis in faucibus orci luctus etultric posuere cubilia Curae.','2018-04-02 15:09:42','2018-04-02 15:09:42',NULL);
/*!40000 ALTER TABLE `tb_pastores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pedidos_oracao`
--

DROP TABLE IF EXISTS `tb_pedidos_oracao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pedidos_oracao` (
  `id_pedidos_oracao` int(11) NOT NULL AUTO_INCREMENT,
  `nome_solicitante` varchar(100) DEFAULT NULL,
  `telefone_solicitante` varchar(45) DEFAULT NULL,
  `email_solicitante` varchar(60) DEFAULT NULL,
  `oracao_pedido` text,
  `dhs_cadastro` datetime DEFAULT NULL,
  `dhs_atualizacao` datetime DEFAULT NULL,
  `dhs_exclusao_logica` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pedidos_oracao`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pedidos_oracao`
--

LOCK TABLES `tb_pedidos_oracao` WRITE;
/*!40000 ALTER TABLE `tb_pedidos_oracao` DISABLE KEYS */;
INSERT INTO `tb_pedidos_oracao` VALUES (1,'dfsdf','sdfsdf','sdfsd','sdfsdf','2018-04-09 15:50:52','2018-04-09 15:50:52',NULL),(2,'dfsdf','sdfsdf','sdfsd','sdfsdf','2018-04-09 15:52:18','2018-04-09 15:52:18',NULL),(3,'dfsdf','sdfsd','sdfsd','sdfsdf','2018-04-09 15:53:18','2018-04-09 15:53:18',NULL),(4,'dfsdf','sdfsd','sdfsd','sdfsdf','2018-04-09 15:53:28','2018-04-09 15:53:28',NULL),(5,'dsd','asdasd','asdsa','asdasd','2018-04-09 15:54:12','2018-04-09 15:54:12',NULL),(6,'dsd','asdasd','asdsa','asdasd','2018-04-09 15:56:54','2018-04-09 15:56:54',NULL);
/*!40000 ALTER TABLE `tb_pedidos_oracao` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_perfil`
--

LOCK TABLES `tb_perfil` WRITE;
/*!40000 ALTER TABLE `tb_perfil` DISABLE KEYS */;
INSERT INTO `tb_perfil` VALUES (1,'Administrador Geral','ADMG','2017-12-13 00:00:00',NULL,NULL),(2,'Administrador do Site','ADM Site',NULL,NULL,NULL);
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
  `hora_programacao` varchar(5) DEFAULT NULL,
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
INSERT INTO `tb_programacao` VALUES (1,'Domingo','19:00','CULTO EVANGELÍSTICO',1,NULL,'2018-02-22 18:54:17','2018-04-02 16:15:00',NULL),(2,'Domingo','09:30','ESCOLA BÍBLICA DOMINICAL',2,NULL,'2018-02-22 19:00:10','2018-04-02 16:15:08',NULL),(3,'Sexta-Feira','22:00','CULTO DOS JOVENS',3,NULL,'2018-02-22 19:00:36','2018-04-02 16:15:43',NULL);
/*!40000 ALTER TABLE `tb_programacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_recupera_senha`
--

DROP TABLE IF EXISTS `tb_recupera_senha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_recupera_senha` (
  `id_troca_sehna` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilizado` tinyint(1) DEFAULT NULL,
  `dhs_cadastro` timestamp NULL DEFAULT NULL,
  `dhs_atualizacao` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_troca_sehna`),
  KEY `tb_recupera_senha_email_index` (`email`(191))
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_recupera_senha`
--

LOCK TABLES `tb_recupera_senha` WRITE;
/*!40000 ALTER TABLE `tb_recupera_senha` DISABLE KEYS */;
INSERT INTO `tb_recupera_senha` VALUES (11,5,'elbes2009@gmail.com','16288942905ac65b488c27e4.26747934',0,'2018-04-05 14:22:16','2018-04-05 14:22:16'),(12,5,'elbes2009@gmail.com','4806456735ac65c3c9eb9c1.21682611',0,'2018-04-05 14:26:20','2018-04-05 14:26:20'),(13,5,'elbes2009@gmail.com','15859274165ac65e132f4686.44696228',0,'2018-04-05 14:34:11','2018-04-05 14:34:11'),(14,5,'elbes2009@gmail.com','4107986935ac65e648eebf5.71263554',0,'2018-04-05 14:35:32','2018-04-05 14:35:32'),(15,5,'elbes2009@gmail.com','17546863735ac65e73b691c3.20301789',0,'2018-04-05 14:35:47','2018-04-05 14:35:47'),(16,5,'elbes2009@gmail.com','12128692125ac65e928e9819.99662665',0,'2018-04-05 14:36:18','2018-04-05 14:36:18'),(17,5,'elbes2009@gmail.com','11040990115ac65eccd980e7.63410217',0,'2018-04-05 14:37:16','2018-04-05 14:37:16'),(18,5,'elbes2009@gmail.com','6351643625ac65f2cbd9ab3.57203449',0,'2018-04-05 14:38:52','2018-04-05 14:38:52'),(19,5,'elbes2009@gmail.com','18250604315ac65f8f879b89.17374637',0,'2018-04-05 14:40:31','2018-04-05 14:40:31'),(20,5,'elbes2009@gmail.com','12937665225ac66019647555.87406353',0,'2018-04-05 14:42:49','2018-04-05 14:42:49'),(21,5,'elbes2009@gmail.com','426021405ac6602f5b5901.59181094',0,'2018-04-05 14:43:11','2018-04-05 14:43:11'),(22,5,'elbes2009@gmail.com','4216433465ac66034ab1be1.13966993',0,'2018-04-05 14:43:16','2018-04-05 14:43:16'),(23,5,'elbes2009@gmail.com','7389920345ac660452410b3.71868520',0,'2018-04-05 14:43:33','2018-04-05 14:43:33'),(24,5,'elbes2009@gmail.com','18195501735ac66077828d93.20590597',0,'2018-04-05 14:44:23','2018-04-05 14:44:23'),(25,5,'elbes2009@gmail.com','3914029755ac76d3dee3d38.94519873',0,'2018-04-06 09:51:09','2018-04-06 09:51:09'),(26,5,'elbes2009@gmail.com','17243326555ac76d65b83fc5.73973347',0,'2018-04-06 09:51:49','2018-04-06 09:51:49'),(27,5,'elbes2009@gmail.com','187062445ac783bbc27648.16647448',0,'2018-04-06 11:27:07','2018-04-06 11:27:07'),(28,5,'elbes2009@gmail.com','15248255835ac783e518fcc7.88608859',0,'2018-04-06 11:27:49','2018-04-06 11:27:49'),(29,5,'elbes2009@gmail.com','11053167665ac7842dbc6304.25303176',0,'2018-04-06 11:29:01','2018-04-06 11:29:01'),(30,5,'elbes2009@gmail.com','5764511455ac784440aefb9.50960294',0,'2018-04-06 11:29:24','2018-04-06 11:29:24'),(31,5,'elbes2009@gmail.com','12083554325ac78494e54e73.09795925',0,'2018-04-06 11:30:44','2018-04-06 11:30:44'),(32,5,'elbes2009@gmail.com','105051495ac78804a705f3.92210334',0,'2018-04-06 11:45:24','2018-04-06 11:45:24'),(33,5,'elbes2009@gmail.com','4371628795ac7881a88b1c7.23391980',0,'2018-04-06 11:45:46','2018-04-06 11:45:46'),(34,5,'elbes2009@gmail.com','8012047555ac78944b223f5.54021229',0,'2018-04-06 11:50:44','2018-04-06 11:50:44'),(35,5,'elbes2009@gmail.com','14530664055ac78a02998968.39502722',0,'2018-04-06 11:53:54','2018-04-06 11:53:54'),(36,5,'elbes2009@gmail.com','5445556815ac7b0a0bf6533.44437252',0,'2018-04-06 14:38:40','2018-04-06 14:38:40'),(37,5,'elbes2009@gmail.com','18151947475ac7b0b541abb8.37681678',0,'2018-04-06 14:39:01','2018-04-06 14:39:01'),(38,5,'elbes2009@gmail.com','15389141755ac7b219cfbfd1.69081587',0,'2018-04-06 14:44:57','2018-04-06 14:44:57'),(39,5,'elbes2009@gmail.com','2534066285ac7b34a82ee47.63795210',0,'2018-04-06 14:50:02','2018-04-06 14:50:02'),(40,5,'elbes2009@gmail.com','6718353585ac7b35d2cd260.08227129',0,'2018-04-06 14:50:21','2018-04-06 14:50:21'),(41,5,'elbes2009@gmail.com','470500085acb759adac224.37548870',0,'2018-04-09 11:15:54','2018-04-09 11:15:54');
/*!40000 ALTER TABLE `tb_recupera_senha` ENABLE KEYS */;
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
INSERT INTO `tb_sobre` VALUES (1,'Missão','<p style=\"text-align: center;\"><span style=\"font-size:16px\">&ldquo;Ide por todo o mundo, pregai o evangelho a toda criatura&rdquo; (Marcos 16:15). &ldquo;Portanto, ide, ensinai todas as na&ccedil;&otilde;es . . . ensinando-as a guardar todas as coisas que eu vos tenho mandado; e eis que eu estou convosco todos os dias, at&eacute; &agrave; consuma&ccedil;&atilde;o dos s&eacute;culos&rdquo; (Mateus 28:19-20).</span></p>',NULL,NULL,'2018-04-03 11:33:52',NULL),(2,'Visão','<p style=\"text-align: center;\"><span style=\"font-size:16px\">A vis&atilde;o da nossa igreja est&aacute; pautada em sentimentos que Deus foi colocando ao longo do tempo no cora&ccedil;&atilde;o de sua lideran&ccedil;a. Queremos ser uma igreja que cresce em dire&ccedil;&atilde;o a Deus, num compromisso s&eacute;rio com Ele.</span></p>',NULL,NULL,'2018-04-03 15:11:10',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuarios`
--

LOCK TABLES `tb_usuarios` WRITE;
/*!40000 ALTER TABLE `tb_usuarios` DISABLE KEYS */;
INSERT INTO `tb_usuarios` VALUES (5,'Elbes','61-991068109','elbes2009@gmail.com','$2y$10$48Ifdme8RWjgE/bv.A9Y0.ftmvwmISqoKQ9tnGov3dbRjrc2DZ71i',1,'2017-12-14 08:50:06','2018-04-04 16:58:49',NULL),(6,'Stephane da Cunha Franco','61993142436','stephanebio@gmail.com','$2y$10$SVCn6jpWH.H5UjTw/b/IW.yv3B16BppwtSA5bFDVcyaEOalKKzoqm',2,'2018-04-04 16:35:39','2018-04-04 16:59:13',NULL);
/*!40000 ALTER TABLE `tb_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_video`
--

DROP TABLE IF EXISTS `tb_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `nome_video` varchar(150) DEFAULT NULL,
  `tipo_video` varchar(45) DEFAULT NULL,
  `obs_video` varchar(250) DEFAULT NULL,
  `dhs_cadastro` timestamp NULL DEFAULT NULL,
  `dhs_atualizacao` timestamp NULL DEFAULT NULL,
  `dhs_exclusao_logica` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_video`
--

LOCK TABLES `tb_video` WRITE;
/*!40000 ALTER TABLE `tb_video` DISABLE KEYS */;
INSERT INTO `tb_video` VALUES (19,'1520961592_papo_de_saude.mp4','Amor que move',NULL,'2018-03-13 14:19:52','2018-03-16 16:30:18',NULL),(21,'1520961640_Curso SEI Parte II - Estrutura do SEI.mp4','Geral',NULL,'2018-03-13 14:20:40','2018-03-13 14:20:40',NULL),(22,'1525976200_Curso SEI Parte II - Estruturcao basica do SEI.mp4','Geral','sfasfas hkjsdhf','2018-05-10 15:16:40','2018-05-10 15:16:40',NULL),(23,'1525976254_Curso_SEI_Parte_II_-_Estruturcao_basica_do_SEI.mp4','Geral','gfhgfh','2018-05-10 15:17:34','2018-05-10 15:17:34',NULL);
/*!40000 ALTER TABLE `tb_video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-10 19:55:01
