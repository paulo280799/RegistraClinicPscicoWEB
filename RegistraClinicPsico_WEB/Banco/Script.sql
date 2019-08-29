-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 29-Ago-2019 às 23:24
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`IDALUNO`, `NOMEALUNO`, `MATRICULAALUNO`, `CPFALUNO`, `RGALUNO`, `SEXOALUNO`, `TELEFONEALUNO`, `DATANASCIMENTOALUNO`, `ESTADOALUNO`, `CIDADEALUNO`, `BAIRROALUNO`, `RUAALUNO`, `NUMCASAALUNO`, `EMAILALUNO`, `COMPLEMENTOALUNO`, `TURMAALUNO`) VALUES
(3, 'Aluno', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`IDPACIENTE`, `NOMEPACIENTE`, `IDADEPACIENTE`, `CPFPACIENTE`, `RGPACIENTE`, `SEXOPACIENTE`, `TELEFONEPACIENTE`, `TELEFONEOPCIONALPACIENTE`, `ESTADOCIVIL`, `CIDADEPACIENTE`, `BAIRROPACIENTE`, `RUAPACIENTE`, `ENDERECO`, `RESPONSAVEL`, `SITUACAOPACIENTE`, `TIPOPACIENTE`, `QUEIXAPRINCIPAL`, `DISPONIBILIDADE`, `SETORDEENCAMINHAMENTO`, `CONTRARREFERENCIA`, `OUTROS`) VALUES
(1, 'Paciente 001', 30, '31231231231', '31231231', '', '', '', '', 'IcÃ³', 'Centro', 'Rua da Pai', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `supervisor`
--

DROP TABLE IF EXISTS `supervisor`;
CREATE TABLE IF NOT EXISTS `supervisor` (
  `idSupervisor` int(11) NOT NULL AUTO_INCREMENT,
  `bairroSupervisor` varchar(550) DEFAULT NULL,
  `cidadeSupervisor` varchar(500) DEFAULT NULL,
  `complementoSupervisor` varchar(300) DEFAULT NULL,
  `cpfSupervisor` varchar(20) DEFAULT NULL,
  `dataNascimentoSupervisor` varchar(15) DEFAULT NULL,
  `emailSupervisor` varchar(50) DEFAULT NULL,
  `enderecoNumeroSupervisor` varchar(16) DEFAULT NULL,
  `enderecoSupervisor` varchar(550) DEFAULT NULL,
  `especializacaoSupervisor` varchar(50) DEFAULT NULL,
  `estadoSupervisor` varchar(20) DEFAULT NULL,
  `nomeSupervisor` varchar(500) NOT NULL,
  `rgSupervisor` varchar(50) DEFAULT NULL,
  `sexoSupervisor` varchar(10) DEFAULT NULL,
  `telefoneSupervisor` varchar(20) DEFAULT NULL,
  `turmaSupervisor` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idSupervisor`)
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `loginUsuario`, `nomeUsuario`, `senhaUsuario`, `tipoUsuario`) VALUES
(7, 'danylo', 'Danylo Alysson Dias de Aquino', 'admin', 'Administrador'),
(9, 'teste', 'Teste', 'teste', 'Funcionario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vincularalunosupervisor`
--

DROP TABLE IF EXISTS `vincularalunosupervisor`;
CREATE TABLE IF NOT EXISTS `vincularalunosupervisor` (
  `idVincularAlunosSupervisor` int(11) NOT NULL AUTO_INCREMENT,
  `dataInicioSupervisao` date DEFAULT NULL,
  `aluno_idAluno` int(11) DEFAULT NULL,
  `supervisor_idSupervisor` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVincularAlunosSupervisor`),
  KEY `FK_iamtqc06nq8uq4o73r5ajw0uw` (`aluno_idAluno`),
  KEY `FK_espcv5e9bc814dryitant0sv` (`supervisor_idSupervisor`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vincularalunosupervisor`
--

INSERT INTO `vincularalunosupervisor` (`idVincularAlunosSupervisor`, `dataInicioSupervisao`, `aluno_idAluno`, `supervisor_idSupervisor`) VALUES
(4, '2019-08-01', 3, 1),
(5, '2019-08-25', 3, 1),
(6, '2020-10-30', 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vincularpacientealuno`
--

DROP TABLE IF EXISTS `vincularpacientealuno`;
CREATE TABLE IF NOT EXISTS `vincularpacientealuno` (
  `idVincularPacienteAluno` int(11) NOT NULL AUTO_INCREMENT,
  `dataInicioAtendimento` date NOT NULL,
  `aluno_idAluno` int(11) NOT NULL,
  `paciente_idPaciente` int(11) NOT NULL,
  PRIMARY KEY (`idVincularPacienteAluno`),
  KEY `aluno_idAluno` (`aluno_idAluno`),
  KEY `paciente_idPaciente` (`paciente_idPaciente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `vincularalunosupervisor`
--
ALTER TABLE `vincularalunosupervisor`
  ADD CONSTRAINT `FK_espcv5e9bc814dryitant0sv` FOREIGN KEY (`supervisor_idSupervisor`) REFERENCES `supervisor` (`idSupervisor`),
  ADD CONSTRAINT `FK_iamtqc06nq8uq4o73r5ajw0uw` FOREIGN KEY (`aluno_idAluno`) REFERENCES `aluno` (`IDALUNO`);

--
-- Limitadores para a tabela `vincularpacientealuno`
--
ALTER TABLE `vincularpacientealuno`
  ADD CONSTRAINT `vincularpacientealuno_ibfk_1` FOREIGN KEY (`aluno_idAluno`) REFERENCES `aluno` (`IDALUNO`),
  ADD CONSTRAINT `vincularpacientealuno_ibfk_2` FOREIGN KEY (`paciente_idPaciente`) REFERENCES `paciente` (`IDPACIENTE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
