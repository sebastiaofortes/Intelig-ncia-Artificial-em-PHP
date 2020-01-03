-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 01/01/2019 às 23h13min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `ia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `regras`
--

CREATE TABLE IF NOT EXISTS `regras` (
  `nome` varchar(30) DEFAULT NULL,
  `var1` varchar(10) DEFAULT NULL,
  `val1` varchar(100) DEFAULT NULL,
  `condicao` varchar(40) DEFAULT NULL,
  `var2` varchar(10) DEFAULT NULL,
  `val2` varchar(100) DEFAULT NULL,
  `peso` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `regras`
--

INSERT INTO `regras` (`nome`, `var1`, `val1`, `condicao`, `var2`, `val2`, `peso`) VALUES
('regra1', 'amibiente', 'poeira', 'entao', 'epi', ' mascara', 50),
('regra2', 'amibiente', ' risco queda de objetos', 'entao', 'epi', ' botina', 50),
('regra3', 'risco', 'queda objeto', 'entao', 'epi', ' botina', 50),
('regra4', 'amibiente', 'poeira', 'entao', 'epi', ' oculos', 50),
('regra5', 'amibiente', ' gas', 'nao', 'epi', ' oculos', 40);

-- --------------------------------------------------------

--
-- Estrutura da tabela `variaveis`
--

CREATE TABLE IF NOT EXISTS `variaveis` (
  `nome` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `valores` varchar(300) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `variaveis`
--

INSERT INTO `variaveis` (`nome`, `valores`) VALUES
('epi', 'luva, mascara, oculos, botina'),
('amibiente', 'poeira, gas, risco queda de objetos'),
('risco', 'queda objeto, escorregao');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
