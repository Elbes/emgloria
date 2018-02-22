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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_banner`
--

LOCK TABLES `tb_banner` WRITE;
/*!40000 ALTER TABLE `tb_banner` DISABLE KEYS */;
INSERT INTO `tb_banner` VALUES (5,'teste','2018-01-15','gdg',2,'1514999461_banner-img-3.jpg',5,NULL,'2018-01-03 18:11:01','2018-01-03 18:16:07',NULL),(6,'Elbes Alves','2018-01-28','bdfb',1,'1514999617_banner-img-2.jpg',5,NULL,'2018-01-03 18:13:37','2018-01-03 18:14:56',NULL);
/*!40000 ALTER TABLE `tb_banner` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_galeria`
--

LOCK TABLES `tb_galeria` WRITE;
/*!40000 ALTER TABLE `tb_galeria` DISABLE KEYS */;
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

-- Dump completed on 2018-02-02 18:31:09
