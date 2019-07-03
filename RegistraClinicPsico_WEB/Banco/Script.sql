CREATE DATABASE PSICO DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE PSICO;

CREATE TABLE Paciente(
	
IDPACIENTE INT(11) AUTO_INCREMENT PRIMARY KEY,
NOMEPACIENTE VARCHAR(255) NOT NULL,
CPFPACIENTE VARCHAR(255) NOT NULL,
RGPACIENTE  VARCHAR(255) NOT NULL,
SEXOPACIENTE  VARCHAR(255) NOT NULL,
TELEFONEPACIENTE  VARCHAR(255) NOT NULL,
TELEFONEOPCIONALPACIENTE  VARCHAR(255) NOT NULL,
ESTADOCIVIL VARCHAR(255) NOT NULL,

CIDADEPACIENTE VARCHAR(255) NOT NULL,
BAIRROPACIENTE VARCHAR(255) NOT NULL,
RUAPACIENTE VARCHAR(255) NOT NULL,
ENDERECO VARCHAR(255) NOT NULL,

RESPONSAVEL VARCHAR(255) NOT NULL,
SITUACAOPACIENTE VARCHAR(255) NOT NULL,
TIPOPACIENTE VARCHAR(255) NOT NULL,
QUEIXAPRINCIPAL VARCHAR(255) NOT NULL,
DISPONIBILIDADE VARCHAR(255) NOT NULL,
SETORDEENCAMINHAMENTO VARCHAR(255) NOT NULL,
CONTRARREFERENCIA VARCHAR(255) NOT NULL,
OUTROS VARCHAR(255) NOT NULL)ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;