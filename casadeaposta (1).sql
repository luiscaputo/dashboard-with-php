-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 11-Maio-2021 às 22:41
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casadeaposta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `campeonatos`
--

DROP TABLE IF EXISTS `campeonatos`;
CREATE TABLE IF NOT EXISTS `campeonatos` (
  `idCampeonato` int(11) NOT NULL AUTO_INCREMENT,
  `Campeonato` varchar(50) NOT NULL,
  `PaisId` int(11) DEFAULT NULL,
  `DesportoId` int(11) DEFAULT NULL,
  `dataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `tipoCampeonato` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCampeonato`),
  KEY `PaisId` (`PaisId`),
  KEY `DesportoId` (`DesportoId`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `campeonatos`
--

INSERT INTO `campeonatos` (`idCampeonato`, `Campeonato`, `PaisId`, `DesportoId`, `dataCriacao`, `dataAtualizacao`, `tipoCampeonato`) VALUES
(1, 'LaLiga', NULL, 1, '2021-01-21 00:51:36', '2021-01-21 00:51:36', 'nacional'),
(2, 'Serie A', NULL, 1, '2021-01-21 00:51:52', '2021-01-21 00:51:52', 'nacional'),
(3, 'Premier Legue', NULL, 1, '2021-01-21 00:52:13', '2021-01-21 00:52:13', 'nacional'),
(4, 'Liga Nos', NULL, 1, '2021-01-21 00:52:33', '2021-01-21 00:52:33', 'nacional'),
(5, 'NBA', NULL, 2, '2021-01-21 00:54:01', '2021-01-21 00:54:01', 'internacional'),
(11, 'Osvaldo Snir', 1, 2, '2021-05-09 15:57:34', '2021-05-09 15:57:34', NULL),
(7, 'CampeonatoTenis', NULL, 3, '2021-01-21 01:49:04', '2021-01-21 01:49:04', NULL),
(8, 'ChampionsLegue', NULL, 1, '2021-01-27 00:18:19', '2021-01-27 00:18:19', 'internacional'),
(9, 'LuÃ­s Afonso Caputo', 1, 2, '2021-05-09 15:00:26', '2021-05-09 15:00:26', NULL),
(10, 'Er divise', 1, 2, '2021-05-09 15:22:32', '2021-05-09 15:22:32', 'nacional');

-- --------------------------------------------------------

--
-- Estrutura da tabela `codigos`
--

DROP TABLE IF EXISTS `codigos`;
CREATE TABLE IF NOT EXISTS `codigos` (
  `idCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo` varchar(50) NOT NULL,
  `ClassificacaoCodigoId` int(11) NOT NULL,
  `dataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idCodigo`),
  KEY `CodigoId` (`ClassificacaoCodigoId`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `codigos`
--

INSERT INTO `codigos` (`idCodigo`, `Codigo`, `ClassificacaoCodigoId`, `dataCriacao`, `dataAtualizacao`) VALUES
(1, '1', 1, '2021-01-28 18:22:02', '2021-01-28 18:22:02'),
(2, 'X', 1, '2021-01-28 18:22:16', '2021-01-28 18:22:16'),
(3, '2', 1, '2021-01-28 18:22:28', '2021-01-28 18:22:28'),
(4, '1', 2, '2021-01-28 18:27:01', '2021-01-28 18:27:01'),
(5, 'X', 2, '2021-01-28 18:27:18', '2021-01-28 18:27:18'),
(6, '2', 2, '2021-01-28 18:27:33', '2021-01-28 18:27:33'),
(7, '1', 3, '2021-01-28 18:28:19', '2021-01-28 18:28:19'),
(8, 'X', 3, '2021-01-28 18:28:26', '2021-01-28 18:28:26'),
(9, '2', 3, '2021-01-28 18:28:33', '2021-01-28 18:28:33'),
(11, '1', 4, '2021-01-28 18:30:57', '2021-01-28 18:30:57'),
(12, 'X', 4, '2021-01-28 18:31:08', '2021-01-28 18:31:08'),
(13, '2', 4, '2021-01-28 18:31:20', '2021-01-28 18:31:20'),
(14, '1.5', 5, '2021-01-28 22:34:27', '2021-01-28 22:34:27'),
(15, '2.5', 5, '2021-01-28 22:35:26', '2021-01-28 22:35:26'),
(16, '3.5', 5, '2021-01-28 22:35:38', '2021-01-28 22:35:38'),
(17, '1.5', 9, '2021-01-28 22:36:28', '2021-01-28 22:36:28'),
(18, '2.5', 9, '2021-01-28 22:36:41', '2021-01-28 22:36:41'),
(19, '3.5', 9, '2021-01-28 22:36:48', '2021-01-28 22:36:48'),
(20, '1era', 6, '2021-01-28 22:37:46', '2021-01-28 22:37:46'),
(21, '2nd', 6, '2021-01-28 22:38:00', '2021-01-28 22:38:00'),
(22, 'X', 6, '2021-01-28 22:38:14', '2021-01-28 22:38:14'),
(23, 'SIM', 7, '2021-01-28 22:38:52', '2021-01-28 22:38:52'),
(24, 'NAO', 7, '2021-01-28 22:39:07', '2021-01-28 22:39:07'),
(25, '1X', 8, '2021-01-28 22:39:36', '2021-01-28 22:39:36'),
(26, '12', 8, '2021-01-28 22:39:50', '2021-01-28 22:39:50'),
(27, 'X2', 8, '2021-01-28 22:40:04', '2021-01-28 22:40:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `codigospartida`
--

DROP TABLE IF EXISTS `codigospartida`;
CREATE TABLE IF NOT EXISTS `codigospartida` (
  `IdCodigosPartida` int(11) NOT NULL AUTO_INCREMENT,
  `codigoId` int(11) NOT NULL,
  `PartidaId` int(11) NOT NULL,
  `valor` float DEFAULT NULL,
  `DataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `DataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdCodigosPartida`),
  KEY `codigoId` (`codigoId`),
  KEY `PartidaId` (`PartidaId`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `codigospartida`
--

INSERT INTO `codigospartida` (`IdCodigosPartida`, `codigoId`, `PartidaId`, `valor`, `DataCriacao`, `DataAtualizacao`) VALUES
(1, 1, 1, 1.2, '2021-04-10 23:39:40', '2021-04-10 23:39:40'),
(2, 2, 1, 2.3, '2021-04-10 23:40:26', '2021-04-10 23:40:26'),
(3, 3, 1, 1, '2021-04-10 23:50:53', '2021-04-10 23:50:53'),
(4, 4, 1, 0.2, '2021-04-10 23:56:10', '2021-04-10 23:56:10'),
(5, 5, 1, 3.1, '2021-04-11 00:03:20', '2021-04-11 00:03:20'),
(6, 5, 2, 2.4, '2021-04-11 00:04:10', '2021-04-11 00:04:10'),
(7, 1, 2, 3.1, '2021-04-26 18:22:43', '2021-04-26 18:22:43'),
(8, 2, 2, 1.3, '2021-04-26 18:23:12', '2021-04-26 18:23:12'),
(9, 3, 2, 2.1, '2021-04-26 18:23:12', '2021-04-26 18:23:12'),
(10, 1, 3, 2.3, '2021-04-27 13:49:32', '2021-04-27 13:49:32'),
(11, 2, 3, 3.4, '2021-04-27 13:49:32', '2021-04-27 13:49:32'),
(12, 3, 3, 3.1, '2021-04-27 13:49:32', '2021-04-27 13:49:32'),
(13, 1, 7, 4.5, '2021-04-28 16:57:24', '2021-04-28 16:57:24'),
(14, 2, 7, 3.5, '2021-04-28 16:57:25', '2021-04-28 16:57:25'),
(15, 3, 7, 3.1, '2021-04-28 16:57:25', '2021-04-28 16:57:25'),
(16, 0, 0, 1.2, '2021-04-28 17:12:18', '2021-04-28 17:12:18'),
(17, 1, 1, 2, '2021-05-10 14:12:11', '2021-05-10 14:12:11'),
(18, 1, 1, 2.1, '2021-05-10 14:50:09', '2021-05-10 14:50:09'),
(19, 1, 2, 2.1, '2021-05-10 14:51:13', '2021-05-10 14:51:13'),
(20, 1, 1, 2.1, '2021-05-10 15:24:16', '2021-05-10 15:24:16'),
(21, 2, 1, 2.1, '2021-05-10 15:26:42', '2021-05-10 15:26:42'),
(22, 26, 2, 2.1, '2021-05-10 15:27:04', '2021-05-10 15:27:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `continente`
--

DROP TABLE IF EXISTS `continente`;
CREATE TABLE IF NOT EXISTS `continente` (
  `idContinente` int(11) NOT NULL AUTO_INCREMENT,
  `Continente` varchar(50) NOT NULL,
  `dataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idContinente`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `continente`
--

INSERT INTO `continente` (`idContinente`, `Continente`, `dataCriacao`, `dataAtualizacao`) VALUES
(1, 'Europa', '2021-05-09 15:04:40', '2021-05-09 15:04:40'),
(2, 'Europa', '2021-05-10 10:02:43', '2021-05-10 10:02:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `desportos`
--

DROP TABLE IF EXISTS `desportos`;
CREATE TABLE IF NOT EXISTS `desportos` (
  `idDesporto` int(11) NOT NULL AUTO_INCREMENT,
  `Desporto` varchar(50) NOT NULL,
  `dataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idDesporto`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `desportos`
--

INSERT INTO `desportos` (`idDesporto`, `Desporto`, `dataCriacao`, `dataAtualizacao`) VALUES
(1, 'Futebol', '2021-01-20 01:34:36', '2021-01-20 01:34:36'),
(2, 'Basketbol', '2021-01-20 01:34:52', '2021-01-20 01:34:52'),
(3, 'Tenis', '2021-01-20 01:35:05', '2021-01-20 01:35:05'),
(4, 'Box', '2021-01-20 01:37:02', '2021-01-20 01:37:02'),
(5, 'Andebol', '2021-01-20 01:37:26', '2021-01-20 01:37:26'),
(6, 'FutebolAmericano', '2021-01-20 01:37:55', '2021-01-20 01:37:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `divisao`
--

DROP TABLE IF EXISTS `divisao`;
CREATE TABLE IF NOT EXISTS `divisao` (
  `idDivisao` int(11) NOT NULL AUTO_INCREMENT,
  `Divisao` varchar(50) NOT NULL,
  `dataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idDivisao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `divisaocampeonatos`
--

DROP TABLE IF EXISTS `divisaocampeonatos`;
CREATE TABLE IF NOT EXISTS `divisaocampeonatos` (
  `idDivisaoCampeonatos` int(11) NOT NULL AUTO_INCREMENT,
  `CampeonatoId` int(11) DEFAULT NULL,
  `DivisaoId` int(11) DEFAULT NULL,
  `dataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idDivisaoCampeonatos`),
  KEY `CampeonatoId` (`CampeonatoId`),
  KEY `DivisaoId` (`DivisaoId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipas`
--

DROP TABLE IF EXISTS `equipas`;
CREATE TABLE IF NOT EXISTS `equipas` (
  `idEquipa` int(11) NOT NULL AUTO_INCREMENT,
  `Equipa` varchar(50) NOT NULL,
  `PaisId` int(11) DEFAULT NULL,
  `dataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `campeonatoId` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEquipa`),
  KEY `PaisId` (`PaisId`),
  KEY `campeonatoId` (`campeonatoId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `equipas`
--

INSERT INTO `equipas` (`idEquipa`, `Equipa`, `PaisId`, `dataCriacao`, `dataAtualizacao`, `campeonatoId`) VALUES
(1, 'Barcelona', 1, '2021-05-10 09:59:58', '2021-05-10 09:59:58', 1),
(2, 'Real Betis', 1, '2021-05-10 10:00:08', '2021-05-10 10:00:08', 1),
(3, '<z', 1, '2021-05-10 10:00:51', '2021-05-10 10:00:51', 1),
(4, 'Manchester City', 2, '2021-05-10 10:04:56', '2021-05-10 10:04:56', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipascampeonatos`
--

DROP TABLE IF EXISTS `equipascampeonatos`;
CREATE TABLE IF NOT EXISTS `equipascampeonatos` (
  `idEquipasCampeonatos` int(11) NOT NULL AUTO_INCREMENT,
  `EquipaId` int(11) DEFAULT NULL,
  `CampeonatoId` int(11) DEFAULT NULL,
  `dataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idEquipasCampeonatos`),
  KEY `EquipaId` (`EquipaId`),
  KEY `CampeonatoId` (`CampeonatoId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `idEstado` int(11) NOT NULL AUTO_INCREMENT,
  `Estado` varchar(50) NOT NULL,
  `dataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idEstado`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`idEstado`, `Estado`, `dataCriacao`, `dataAtualizacao`) VALUES
(1, 'Activo', '2021-01-19 00:11:34', '2021-01-19 00:11:34'),
(2, 'Fechado', '2021-01-19 00:11:53', '2021-01-19 00:11:53'),
(3, 'Directo', '2021-04-10 17:13:25', '2021-04-10 17:13:25'),
(4, 'Em espera', '2021-04-27 15:59:56', '2021-04-27 15:59:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha`
--

DROP TABLE IF EXISTS `ficha`;
CREATE TABLE IF NOT EXISTS `ficha` (
  `Idficha` int(11) NOT NULL AUTO_INCREMENT,
  `Partidaid` int(11) NOT NULL,
  `EquipaCasa` varchar(50) NOT NULL,
  `EquipaVisita` varchar(50) NOT NULL,
  `Clasificacao` varchar(50) NOT NULL,
  `Codigo` varchar(20) NOT NULL,
  `Valor` float DEFAULT NULL,
  `EstadoId` int(11) DEFAULT NULL,
  `ValorTotal` float DEFAULT NULL,
  `pessoaId` int(11) DEFAULT NULL,
  `CodigoFicha` varchar(10) DEFAULT NULL,
  `GanhosPossiveis` float DEFAULT NULL,
  `Probavilidade` float DEFAULT NULL,
  PRIMARY KEY (`Idficha`),
  UNIQUE KEY `CodigoFicha` (`CodigoFicha`),
  KEY `Partidaid` (`Partidaid`),
  KEY `EstadoId` (`EstadoId`),
  KEY `pessoaId` (`pessoaId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ficha`
--

INSERT INTO `ficha` (`Idficha`, `Partidaid`, `EquipaCasa`, `EquipaVisita`, `Clasificacao`, `Codigo`, `Valor`, `EstadoId`, `ValorTotal`, `pessoaId`, `CodigoFicha`, `GanhosPossiveis`, `Probavilidade`) VALUES
(1, 3, 'Sporting ', 'Rio Ave', '1X2', 'X', 3.4, 4, 200, 0, '9023675523', 14400, 72),
(2, 7, 'PSG ', 'MAN CITY', '1X2', '2', 3.1, 4, 400, 0, '9526819213', 7200, 18);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

DROP TABLE IF EXISTS `imagens`;
CREATE TABLE IF NOT EXISTS `imagens` (
  `IdImagens` int(11) NOT NULL AUTO_INCREMENT,
  `Designacao` varchar(50) NOT NULL,
  `CaminhoIMG` varchar(50) NOT NULL,
  `EstadoId` int(11) DEFAULT NULL,
  `dataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdImagens`),
  KEY `EstadoId` (`EstadoId`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`IdImagens`, `Designacao`, `CaminhoIMG`, `EstadoId`, `dataCriacao`, `dataAtualizacao`) VALUES
(1, 'Futebol', 'Assets/img/futebol.png', NULL, '2021-01-20 01:25:07', '2021-01-20 01:25:07'),
(2, 'Basketbol', 'Assets/img/Basketbol.png', NULL, '2021-01-20 01:25:45', '2021-01-20 01:25:45'),
(3, 'Tenis', 'Assets/img/tenis.png', NULL, '2021-01-20 01:26:07', '2021-01-20 01:26:07'),
(4, 'Andebol', 'Assets/img/Andebol.png', NULL, '2021-01-20 01:26:52', '2021-01-20 01:26:52'),
(5, 'Box', 'Assets/img/Box.png', NULL, '2021-01-20 01:27:17', '2021-01-20 01:27:17'),
(6, 'FutebolAmericano', 'Assets/img/FutebolAmericano.png', NULL, '2021-01-20 01:28:38', '2021-01-20 01:28:38'),
(7, 'CorridaMotorisado', 'Assets/img/CorridaMotorisado.png', NULL, '2021-01-20 01:29:51', '2021-01-20 01:29:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `idPais` int(11) NOT NULL AUTO_INCREMENT,
  `Pais` varchar(50) NOT NULL,
  `continenteId` int(11) DEFAULT NULL,
  `dataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idPais`),
  KEY `continenteId` (`continenteId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pais`
--

INSERT INTO `pais` (`idPais`, `Pais`, `continenteId`, `dataCriacao`, `dataAtualizacao`) VALUES
(1, 'Espanha', 1, '2021-05-09 15:05:16', '2021-05-09 15:05:16'),
(2, 'Englaterra', 2, '2021-05-10 10:03:33', '2021-05-10 10:03:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `partidas`
--

DROP TABLE IF EXISTS `partidas`;
CREATE TABLE IF NOT EXISTS `partidas` (
  `idPartida` int(11) NOT NULL AUTO_INCREMENT,
  `Equipa_Casa` varchar(50) NOT NULL,
  `Equipa_Visita` varchar(50) NOT NULL,
  `Hora_da_Partida` time NOT NULL,
  `data_da_partida` date DEFAULT NULL,
  `CampeonatoId` int(11) DEFAULT NULL,
  `dataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `EstadoId` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPartida`),
  KEY `CampeonatoId` (`CampeonatoId`),
  KEY `EstadoId` (`EstadoId`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `partidas`
--

INSERT INTO `partidas` (`idPartida`, `Equipa_Casa`, `Equipa_Visita`, `Hora_da_Partida`, `data_da_partida`, `CampeonatoId`, `dataCriacao`, `dataAtualizacao`, `EstadoId`) VALUES
(2, 'Porto', 'Benfica', '14:00:00', '2021-01-19', 4, '2021-01-19 01:57:10', '2021-01-19 01:57:10', 3),
(3, 'Sporting', 'Rio Ave', '14:30:00', '2021-01-20', 4, '2021-01-19 01:59:58', '2021-01-19 01:59:58', NULL),
(4, 'Espanhol', 'Atletico Madrid', '14:30:00', '2021-01-20', 1, '2021-01-19 02:05:56', '2021-01-19 02:05:56', 2),
(6, 'Boa Vista', 'D. Aves', '20:45:00', '2021-01-29', 4, '2021-01-28 09:07:38', '2021-01-28 09:07:38', NULL),
(7, 'PSG', 'MAN CITY', '20:00:00', '2021-04-28', 8, '2021-04-28 16:52:16', '2021-04-28 16:52:16', 1),
(8, 'Barcelona', 'Real Betis', '10:20:00', '2021-05-25', 1, '2021-05-10 10:53:53', '2021-05-10 10:53:53', 1),
(9, 'Barcelona', 'Manchester City', '12:00:00', '2021-02-14', 1, '2021-05-10 10:55:42', '2021-05-10 10:55:42', 1),
(10, 'Barcelona', 'Real Betis', '15:00:00', '2022-05-15', 3, '2021-05-10 11:51:10', '2021-05-10 11:51:10', 1),
(12, 'Barcelona', 'Real Betis', '05:05:00', '5555-05-05', 3, '2021-05-10 11:55:13', '2021-05-10 11:55:13', 1),
(13, 'Barcelona', 'Manchester City', '12:57:00', '2021-05-06', 3, '2021-05-10 11:57:15', '2021-05-10 11:57:15', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE IF NOT EXISTS `pessoa` (
  `IdPessoa` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Apelido` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `DataNascimento` date DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `NIF` varchar(14) DEFAULT NULL,
  `NomeUtilizador` varchar(50) DEFAULT NULL,
  `PalavraPasse` varchar(10) DEFAULT NULL,
  `TipoPessoaId` int(11) DEFAULT NULL,
  `CaminhoImg` varchar(50) DEFAULT NULL,
  `DataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `DataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdPessoa`),
  KEY `TipoPessoaId` (`TipoPessoaId`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`IdPessoa`, `Nome`, `Apelido`, `EMAIL`, `DataNascimento`, `sexo`, `NIF`, `NomeUtilizador`, `PalavraPasse`, `TipoPessoaId`, `CaminhoImg`, `DataCriacao`, `DataAtualizacao`) VALUES
(9, 'Adilson', 'Kassopa', 'adilsonkassopa@gmail.com', '2000-09-27', NULL, NULL, 'adilsonkassopa', '123', 2, NULL, '2021-04-09 10:44:35', '2021-04-09 10:44:35'),
(12, 'Leonel', 'Kassopa', 'adilsonkassopa@gmail.com', '2000-08-29', NULL, NULL, 'Leonelkassopa', '1234', 2, NULL, '2021-04-09 10:57:32', '2021-04-09 10:57:32'),
(13, 'Adilson', 'Kassopa', 'adilsonkassopa@gmail.com', '2001-09-28', NULL, NULL, 'adilsonkassopa', '345A', 2, NULL, '2021-04-09 10:59:13', '2021-04-09 10:59:13'),
(14, 'Lucas', 'Lucas ', 'lucaswandy@gmail.com', '2001-08-06', NULL, NULL, 'lucasWandy', '1234', 2, NULL, '2021-04-12 13:21:10', '2021-04-12 13:21:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocoes`
--

DROP TABLE IF EXISTS `promocoes`;
CREATE TABLE IF NOT EXISTS `promocoes` (
  `IdPromocoes` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(50) DEFAULT NULL,
  `Descricao` text NOT NULL,
  `CaminhoImagem` varchar(50) NOT NULL,
  `DataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `DataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdPromocoes`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `promocoes`
--

INSERT INTO `promocoes` (`IdPromocoes`, `Titulo`, `Descricao`, `CaminhoImagem`, `DataCriacao`, `DataAtualizacao`) VALUES
(1, 'Aposta Desporto', 'Só jogas esta slot na Betclic, onde poderás ganhar bónus e rodadas grátis!', 'img/Promocoes/Promocao1.jpg', '2021-02-05 20:10:33', '2021-02-05 20:10:33'),
(2, 'Aposta futsal', 'Só jogas esta slot na Betclic, onde poderás ganhar bónus e rodadas grátis!', 'img/Promocoes/Promocao2.jpg', '2021-02-05 20:11:09', '2021-02-05 20:11:09'),
(3, 'Joga a SORTE', 'Só jogas esta slot na Betclic, onde poderás ganhar bónus e rodadas grátis!', 'img/Promocoes/Promocao3.jpg', '2021-02-05 20:11:17', '2021-02-05 20:11:17'),
(4, 'Apostas Desportivas', 'Só jogas esta slot na Betclic, onde poderás ganhar bónus e rodadas grátis!', 'img/Promocoes/Promocao4.jpg', '2021-02-05 20:11:53', '2021-02-05 20:11:53'),
(5, 'Pontos de Venda', 'Só jogas esta slot na Betclic, onde poderás ganhar bónus e rodadas grátis!', 'img/Promocoes/Promocao5.jpg', '2021-02-05 20:12:10', '2021-02-05 20:12:10'),
(6, 'Aposte Online', 'Só jogas esta slot na Betclic, onde poderás ganhar bónus e rodadas grátis!', 'img/Promocoes/Promocao6.jpg', '2021-02-05 22:35:19', '2021-02-05 22:35:19'),
(7, 'Aposta ao vivo', 'Só jogas esta slot na Betclic, onde poderás ganhar bónus e rodadas grátis!', 'img/Promocoes/Promocao7.jpg', '2021-02-05 22:35:36', '2021-02-05 22:35:36'),
(8, 'Estamos de volta', 'Só jogas esta slot na Betclic, onde poderás ganhar bónus e rodadas grátis!', 'img/Promocoes/Promocao8.jpg', '2021-02-05 22:35:54', '2021-02-05 22:35:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipocodigo`
--

DROP TABLE IF EXISTS `tipocodigo`;
CREATE TABLE IF NOT EXISTS `tipocodigo` (
  `idTipoCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `Classificacao` varchar(50) NOT NULL,
  `dataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idTipoCodigo`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipocodigo`
--

INSERT INTO `tipocodigo` (`idTipoCodigo`, `Classificacao`, `dataCriacao`, `dataAtualizacao`) VALUES
(1, '1X2', '2021-01-28 18:10:08', '2021-01-28 18:10:08'),
(2, 'HANDICAP 0:1', '2021-01-28 18:10:50', '2021-01-28 18:10:50'),
(3, 'HANDICAP 1:0', '2021-01-28 18:11:11', '2021-01-28 18:11:11'),
(4, 'RESULTADO INTERVALO', '2021-01-28 18:11:50', '2021-01-28 18:11:50'),
(5, 'ABAIXO', '2021-01-28 18:12:26', '2021-01-28 18:12:26'),
(6, 'PARTE COM MAIS GOLOS', '2021-01-28 18:12:53', '2021-01-28 18:12:53'),
(7, 'AMBAS MARCAM', '2021-01-28 18:13:07', '2021-01-28 18:13:07'),
(8, 'DUPLA CHANCE', '2021-01-28 18:13:31', '2021-01-28 18:13:31'),
(9, 'ACIMA', '2021-01-28 22:32:08', '2021-01-28 22:32:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipopessoa`
--

DROP TABLE IF EXISTS `tipopessoa`;
CREATE TABLE IF NOT EXISTS `tipopessoa` (
  `idTipoPessoa` int(11) NOT NULL AUTO_INCREMENT,
  `Pessoa` varchar(50) NOT NULL,
  `DataCriacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `DataAtualizacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idTipoPessoa`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipopessoa`
--

INSERT INTO `tipopessoa` (`idTipoPessoa`, `Pessoa`, `DataCriacao`, `DataAtualizacao`) VALUES
(9, 'Administrador', '2021-04-08 01:41:33', '2021-04-08 01:41:33'),
(10, 'usuario', '2021-04-08 01:41:56', '2021-04-08 01:41:56');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_partidacodigo`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_partidacodigo`;
CREATE TABLE IF NOT EXISTS `vw_partidacodigo` (
`idPartida` int(11)
,`idCodigo` int(11)
,`Codigo` varchar(50)
,`ClassificacaoCodigoId` int(11)
,`Valor` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_partidacodigoaposta`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_partidacodigoaposta`;
CREATE TABLE IF NOT EXISTS `vw_partidacodigoaposta` (
`idPartida` int(1)
,`Codigo` int(1)
,`Classificacao` int(1)
,`valor` int(1)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_partidacodigo`
--
DROP TABLE IF EXISTS `vw_partidacodigo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_partidacodigo`  AS  select `p`.`idPartida` AS `idPartida`,`c`.`idCodigo` AS `idCodigo`,`c`.`Codigo` AS `Codigo`,`c`.`ClassificacaoCodigoId` AS `ClassificacaoCodigoId`,`cp`.`valor` AS `Valor` from ((`partidas` `p` join `codigospartida` `cp` on((`p`.`idPartida` = `cp`.`PartidaId`))) join `codigos` `c` on((`c`.`idCodigo` = `cp`.`codigoId`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_partidacodigoaposta`
--
DROP TABLE IF EXISTS `vw_partidacodigoaposta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_partidacodigoaposta`  AS  select 1 AS `idPartida`,1 AS `Codigo`,1 AS `Classificacao`,1 AS `valor` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
