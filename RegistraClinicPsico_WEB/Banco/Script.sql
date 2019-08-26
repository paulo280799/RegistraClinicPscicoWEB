-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 03-Ago-2019 às 12:13
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
-- Database: `psico`
--
CREATE DATABASE IF NOT EXISTS `psico` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `psico`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `IDALUNO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMEALUNO` varchar(255) NOT NULL,
  `MATRICULAALUNO` varchar(255) NOT NULL,
  `CPFALUNO` varchar(255) NOT NULL,
  `RGALUNO` varchar(255) NOT NULL,
  `SEXOALUNO` varchar(255) NOT NULL,
  `TELEFONEALUNO` varchar(255) NOT NULL,
  `DATANASCIMENTOALUNO` varchar(255) NOT NULL,
  `ESTADOALUNO` varchar(255) NOT NULL,
  `CIDADEALUNO` varchar(255) NOT NULL,
  `BAIRROALUNO` varchar(255) NOT NULL,
  `RUAALUNO` varchar(255) NOT NULL,
  `NUMCASAALUNO` varchar(255) NOT NULL,
  `EMAILALUNO` varchar(255) NOT NULL,
  `COMPLEMENTOALUNO` varchar(255) NOT NULL,
  `TURMAALUNO` varchar(255) NOT NULL,
  PRIMARY KEY (`IDALUNO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `IDPACIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `NOMEPACIENTE` varchar(255) NOT NULL,
  `IDADEPACIENTE` int(11) NOT NULL,
  `CPFPACIENTE` varchar(255) NOT NULL,
  `RGPACIENTE` varchar(255) NOT NULL,
  `SEXOPACIENTE` varchar(255) NOT NULL,
  `TELEFONEPACIENTE` varchar(255) NOT NULL,
  `TELEFONEOPCIONALPACIENTE` varchar(255) NOT NULL,
  `ESTADOCIVIL` varchar(255) NOT NULL,
  `CIDADEPACIENTE` varchar(255) NOT NULL,
  `BAIRROPACIENTE` varchar(255) NOT NULL,
  `RUAPACIENTE` varchar(255) NOT NULL,
  `ENDERECO` varchar(255) NOT NULL,
  `RESPONSAVEL` varchar(255) NOT NULL,
  `SITUACAOPACIENTE` varchar(255) NOT NULL,
  `TIPOPACIENTE` varchar(255) NOT NULL,
  `QUEIXAPRINCIPAL` varchar(255) NOT NULL,
  `DISPONIBILIDADE` varchar(255) NOT NULL,
  `SETORDEENCAMINHAMENTO` varchar(255) NOT NULL,
  `CONTRARREFERENCIA` varchar(255) NOT NULL,
  `OUTROS` varchar(255) NOT NULL,
  PRIMARY KEY (`IDPACIENTE`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `supervisor`
--

DROP TABLE IF EXISTS `SUPERVISOR`;
CREATE TABLE IF NOT EXISTS `SUPERVISOR` (
  `IDSUPERVISOR` int(11) NOT NULL AUTO_INCREMENT,
  `NOMESUPERVISOR` varchar(255) NOT NULL,
  `CPFSUPERVISOR` varchar(255) NOT NULL,
  `RGSUPERVISOR` varchar(255) NOT NULL,
  `DATANASCIMENTOSUPERVISOR` varchar(255) NOT NULL,
  `SEXOSUPERVISOR` varchar(255) NOT NULL,
  `TELEFONESUPERVISOR` varchar(255) NOT NULL,
  `ESTADOSUPERVISOR` varchar(255) NOT NULL,
  `CIDADESUPERVISOR` varchar(255) NOT NULL,
  `BAIRROSUPERVISOR` varchar(255) NOT NULL,
  `RUASUPERVISOR` varchar(255) NOT NULL,
  `NUMCASASUPERVISOR` varchar(255) NOT NULL,
  `COMPLEMENTOSUPERVISOR` varchar(255) NOT NULL,
  `EMAILSUPERVISOR` varchar(255) NOT NULL,
  `TURMASUPERVISOR` varchar(255) NOT NULL,
  `ESPECIALIZACAOSUPERVISOR` varchar(255) NOT NULL,
  PRIMARY KEY (`IDSUPERVISOR`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `supervisor`
--

INSERT INTO `supervisor` (`idSupervisor`, `bairroSupervisor`, `cidadeSupervisor`, `complementoSupervisor`, `cpfSupervisor`, `dataNascimentoSupervisor`, `emailSupervisor`, `enderecoNumeroSupervisor`, `enderecoSupervisor`, `especializacaoSupervisor`, `estadoSupervisor`, `nomeSupervisor`, `rgSupervisor`, `sexoSupervisor`, `telefoneSupervisor`, `turmaSupervisor`) VALUES
(1, 'Centro', 'Pereiro', 'Casa', '123123123', '2019-08-02', 'dadasda@dadsa', '1234', 'RUa', 'Loucura', 'CearÃ¡', 'Danylo', '231231eqweq', 'M', '131231231231', 'Turma da quebrada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `loginUsuario` varchar(255) DEFAULT NULL,
  `nomeUsuario` varchar(255) DEFAULT NULL,
  `senhaUsuario` varchar(255) DEFAULT NULL,
  `tipoUsuario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
INSERT INTO `agenda`(`IDAGENDA`, `DATAAGENDA`, `HORAAGENDA`, `IDPACIENTE`) VALUES ('4','2019-08-27','12:45','4') 
 SELECT agenda.DATAAGENDA, agenda.HORAAGENDA, paciente.NOMEPACIENTE, paciente.CPFPACIENTE FROM agenda AS agenda JOIN paciente AS paciente ON agenda.IDPACIENTE = paciente.IDPACIENTE AND HORAAGENDA='';