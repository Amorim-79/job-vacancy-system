-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: Dez 12, 2020 as 01:11 AM
-- Versão do Servidor: 5.1.54
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `job-vacancy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `idCandidates` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `city` varchar(45) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `country` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `postalCode` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `genre` varchar(1) NOT NULL,
  `interest` varchar(45) NOT NULL,
  `permission` varchar(45) NOT NULL DEFAULT 'candidate',
  PRIMARY KEY (`idCandidates`),
  UNIQUE KEY `idcompany_UNIQUE` (`idCandidates`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `candidates`
--

INSERT INTO `candidates` (`idCandidates`, `name`, `email`, `password`, `phone`, `city`, `uf`, `country`, `address`, `postalCode`, `age`, `genre`, `interest`, `permission`) VALUES
(1, 'Nova Testada', 'nova@nova.com', '12345', '11888888885', 'MIGRACAO', 'SP', 'Brasil', 'R MIGRACAO', '99999-999', 23, 'M', '1', 'candidate'),
(2, 'Nova 1', 'nova2@nova2.com', '12345', '11888888888', 'MIGRACAO', 'SP', 'Brasil', 'R MIGRACAO', '99999-999', 23, 'M', '1', 'candidate'),
(5, 'Candidato ultima', 'nova3@nova3.com', '123456', '11888888888', 'MIGRACAO', 'SP', 'Brasil', 'R MIGRACAO', '99999-999', 25, 'F', '2', 'candidate'),
(7, 'Candidato ultima', 'nova3@nova4.com', '12345678', '11888888888', 'MIGRACAO', 'SP', 'Brasil', 'R MIGRACAO', '99999-999', 25, 'F', '2', 'candidate'),
(8, 'Candidato ultima vez', 'nova3@nova5.com', '789456', '11888888888', 'MIGRACAO', 'SP', 'Brasil', 'R MIGRACAO', '99999-999', 25, 'F', '2', 'candidate');

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidates_vacancy`
--

CREATE TABLE IF NOT EXISTS `candidates_vacancy` (
  `idCandidates` int(11) NOT NULL,
  `idVacancy` int(11) NOT NULL,
  `idCompany` int(11) NOT NULL,
  PRIMARY KEY (`idCandidates`,`idVacancy`),
  KEY `idVacancy_idx` (`idVacancy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `candidates_vacancy`
--

INSERT INTO `candidates_vacancy` (`idCandidates`, `idVacancy`, `idCompany`) VALUES
(1, 7, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `idCategories` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`idCategories`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`idCategories`, `name`) VALUES
(1, 'Tecnologia'),
(2, 'Finanças'),
(3, 'Recursos Humanos'),
(4, 'Administração'),
(5, 'Marketing');

-- --------------------------------------------------------

--
-- Estrutura da tabela `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `idCompany` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `city` varchar(45) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `country` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `postalCode` varchar(45) NOT NULL,
  `permission` varchar(45) NOT NULL DEFAULT 'company',
  PRIMARY KEY (`idCompany`),
  UNIQUE KEY `idcompany_UNIQUE` (`idCompany`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `companies`
--

INSERT INTO `companies` (`idCompany`, `name`, `email`, `password`, `phone`, `city`, `uf`, `country`, `address`, `postalCode`, `permission`) VALUES
(3, 'Empresa UNG 3', 'empresa@ung.com', '123456', '11922222229', 'Guarulhos', 'SP', 'Brasil', 'Praça teste', '00001-000', 'company');

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `idmessages` int(11) NOT NULL AUTO_INCREMENT,
  `idCandidate` int(11) NOT NULL,
  `idCompany` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `idOrigin` int(11) NOT NULL,
  PRIMARY KEY (`idmessages`),
  UNIQUE KEY `idmessages_UNIQUE` (`idmessages`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `messages`
--

INSERT INTO `messages` (`idmessages`, `idCandidate`, `idCompany`, `message`, `date`, `idOrigin`) VALUES
(1, 1, 3, 'Oi', '2020-12-12 02:07:17', 3),
(2, 1, 3, 'tudo bem', '2020-12-11 02:07:14', 3),
(5, 1, 3, 'nova aqui', '2020-12-11 02:32:57', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacancies`
--

CREATE TABLE IF NOT EXISTS `vacancies` (
  `idVacancy` int(11) NOT NULL AUTO_INCREMENT,
  `idCompany` int(11) NOT NULL,
  `nameCompany` varchar(65) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `salary` decimal(15,2) NOT NULL,
  `interest` int(45) NOT NULL,
  `maxCandidates` int(11) NOT NULL,
  `qtdCandidates` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idVacancy`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `vacancies`
--

INSERT INTO `vacancies` (`idVacancy`, `idCompany`, `nameCompany`, `name`, `description`, `salary`, `interest`, `maxCandidates`, `qtdCandidates`) VALUES
(7, 3, 'Empresa UNG', 'Desenvolvedor Frontend Júnior', 'Habilidades\r\nBootstrap, JavaScript, CSS, jQuery\r\n\r\nO que nós buscamos\r\nManutenção do site atual, criação de landing page, criação de email mkt, resolver problemas de scripts front, Noções de UX/UI.\r\nTrabalhamos de acordo com a tendência do mercado, portanto existe bastante alteração de layout.\r\n\r\nPrincipais responsabilidades\r\nLógica de programação\r\nOrganização Pessoal\r\nTer portifólio\r\nVontade de aprender\r\n\r\nDescrição da empresa\r\nA Toyshow A Maior Loja Geek da América Latina - The Best Collections ® é um revendedor especializado em produtos colecionáveis licenciados há mais de 3 anos, tendo como foco colecionadores e admiradores desta cultura pop de todas as idades.\r\nCom Intuito de oferecer produtos de qualidade tanto nacional como importado, a Toyshow oferece uma variedade de mais de 3 mil produtos, contando com Actions Figures, estátuas, brinquedos, miniaturas, carros, quadrinhos, livraria, acessórios e arte e decoração, onde crianças e adultos possam dividir e desfrutar o mesmo Mundo.', 3200.00, 1, 60, 1),
(8, 3, 'Empresa UNG', 'Analista de TI', 'Desenvolver suporte e manutenção de computadores e equipamentos eletrônicos.', 1600.00, 1, 16, 0),
(9, 3, 'Empresa UNG', 'Analista de TI', 'Desenvolver suporte e manutenção de computadores e equipamentos eletrônicos.', 1700.00, 1, 18, 0),
(10, 3, 'Empresa UNG', 'Analista de TI', 'Desenvolver suporte e manutenção de computadores e equipamentos eletrônicos.', 2000.00, 1, 21, 0),
(11, 3, 'Empresa UNG', 'Analista de TI', 'Desenvolver suporte e manutenção de computadores e equipamentos eletrônicos.', 2200.00, 1, 36, 0);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `candidates_vacancy`
--
ALTER TABLE `candidates_vacancy`
  ADD CONSTRAINT `idCandidates` FOREIGN KEY (`idCandidates`) REFERENCES `candidates` (`idCandidates`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idVacancy` FOREIGN KEY (`idVacancy`) REFERENCES `vacancies` (`idVacancy`) ON DELETE NO ACTION ON UPDATE NO ACTION;
