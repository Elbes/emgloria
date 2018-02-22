-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 19-Jan-2018 às 14:05
-- Versão do servidor: 5.5.58-0ubuntu0.14.04.1
-- PHP Version: 7.1.12-3+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emgloria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id_banner` int(10) UNSIGNED NOT NULL,
  `banner_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validade` date NOT NULL,
  `banner_obs` text COLLATE utf8mb4_unicode_ci,
  `prioridade` int(11) NOT NULL,
  `imagen_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_usuario_cadastro` int(10) UNSIGNED NOT NULL,
  `id_usuario_atualizacao` int(11) DEFAULT NULL,
  `dhs_cadastro` timestamp NULL DEFAULT NULL,
  `dhs_atualizacao` timestamp NULL DEFAULT NULL,
  `dhs_exclusao_logica` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_banner`
--

INSERT INTO `tb_banner` (`id_banner`, `banner_nome`, `validade`, `banner_obs`, `prioridade`, `imagen_banner`, `id_usuario_cadastro`, `id_usuario_atualizacao`, `dhs_cadastro`, `dhs_atualizacao`, `dhs_exclusao_logica`) VALUES
(5, 'teste', '2018-01-15', 'gdg', 2, '1514999461_banner-img-3.jpg', 5, NULL, '2018-01-03 18:11:01', '2018-01-03 18:16:07', NULL),
(6, 'Elbes Alves', '2018-01-28', 'bdfb', 1, '1514999617_banner-img-2.jpg', 5, NULL, '2018-01-03 18:13:37', '2018-01-03 18:14:56', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ministerio`
--

CREATE TABLE `tb_ministerio` (
  `id_ministerio` int(11) NOT NULL,
  `nome_ministerio` varchar(150) DEFAULT NULL,
  `texto_ministerio` text,
  `obs_ministerio` varchar(200) DEFAULT NULL,
  `lider_ministerio` varchar(60) DEFAULT NULL,
  `colider_ministerio` varchar(60) DEFAULT NULL,
  `id_usuario_cadastro` int(11) DEFAULT NULL,
  `id_usuario_atualizacao` int(11) DEFAULT NULL,
  `dhs_cadastro` timestamp NULL DEFAULT NULL,
  `dhs_atualizacao` timestamp NULL DEFAULT NULL,
  `dhs_exclusao_logica` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_ministerio`
--

INSERT INTO `tb_ministerio` (`id_ministerio`, `nome_ministerio`, `texto_ministerio`, `obs_ministerio`, `lider_ministerio`, `colider_ministerio`, `id_usuario_cadastro`, `id_usuario_atualizacao`, `dhs_cadastro`, `dhs_atualizacao`, `dhs_exclusao_logica`) VALUES
(24, 'LOUVOR', '<p><strong>csdfsdf</strong></p>', NULL, 'dfhdfh', 'dhdf', 5, NULL, '2018-01-05 19:29:58', '2018-01-05 19:40:42', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_perfil`
--

CREATE TABLE `tb_perfil` (
  `id_perfil` int(11) NOT NULL,
  `nome_perfil` varchar(100) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `dhs_cadastro` datetime DEFAULT NULL,
  `dhs_atualizacao` datetime DEFAULT NULL,
  `dhs_exclusao_logica` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_perfil`
--

INSERT INTO `tb_perfil` (`id_perfil`, `nome_perfil`, `descricao`, `dhs_cadastro`, `dhs_atualizacao`, `dhs_exclusao_logica`) VALUES
(1, 'Administrador Geral', 'ADMG', '2017-12-13 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `telefone` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(60) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `id_perfil` int(11) NOT NULL,
  `dhs_cadastro` datetime DEFAULT NULL,
  `dhs_atualizacao` datetime DEFAULT NULL,
  `dhs_exclusao_logica` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nome`, `telefone`, `email`, `senha`, `id_perfil`, `dhs_cadastro`, `dhs_atualizacao`, `dhs_exclusao_logica`) VALUES
(5, 'Elbes', NULL, 'elbes2009@gmail.com', '$2y$10$KDxAQLZQrMLqvcHhzHoIvueJVcl4bqQsEpxldNcp1SAOjhaEsSW2C', 1, '2017-12-14 08:50:06', '2017-12-14 08:50:06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id_banner`),
  ADD KEY `ta_banner_id_usuario_cadastro_foreign` (`id_usuario_cadastro`);

--
-- Indexes for table `tb_ministerio`
--
ALTER TABLE `tb_ministerio`
  ADD PRIMARY KEY (`id_ministerio`);

--
-- Indexes for table `tb_perfil`
--
ALTER TABLE `tb_perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_tb_usuarios_tb_perfil_idx` (`id_perfil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id_banner` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_ministerio`
--
ALTER TABLE `tb_ministerio`
  MODIFY `id_ministerio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_perfil`
--
ALTER TABLE `tb_perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD CONSTRAINT `fk_tb_usuarios_tb_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `tb_perfil` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
