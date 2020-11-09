-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2020 às 13:13
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aed`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `primeiro`
--

CREATE TABLE `primeiro` (
  `id` int(10) NOT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `materia` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` text COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_1` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_2` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_3` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_4` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_5` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_6` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_7` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_8` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_9` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_10` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_11` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_12` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_13` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_14` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_15` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_16` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_17` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_18` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_19` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_20` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_21` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_22` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_23` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_24` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_25` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_26` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_27` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_28` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_29` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_30` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_31` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_32` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_33` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_34` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_35` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_36` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_37` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_38` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_39` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_40` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_41` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_42` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datahora` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `primeiro`
--

INSERT INTO `primeiro` (`id`, `nome`, `materia`, `imagem`, `pergunta_1`, `pergunta_2`, `pergunta_3`, `pergunta_4`, `pergunta_5`, `pergunta_6`, `pergunta_7`, `pergunta_8`, `pergunta_9`, `pergunta_10`, `pergunta_11`, `pergunta_12`, `pergunta_13`, `pergunta_14`, `pergunta_15`, `pergunta_16`, `pergunta_17`, `pergunta_18`, `pergunta_19`, `pergunta_20`, `pergunta_21`, `pergunta_22`, `pergunta_23`, `pergunta_24`, `pergunta_25`, `pergunta_26`, `pergunta_27`, `pergunta_28`, `pergunta_29`, `pergunta_30`, `pergunta_31`, `pergunta_32`, `pergunta_33`, `pergunta_34`, `pergunta_35`, `pergunta_36`, `pergunta_37`, `pergunta_38`, `pergunta_39`, `pergunta_40`, `pergunta_41`, `pergunta_42`, `datahora`) VALUES
(0, 'italo', 'Português', 'URL DA IMAGEM', '1. Questão', '', '', '', '', '2.Questão', '3.Coloque V para verdadeiro e F para falso.', '', '', '', '', '4. Questão', '', '', '', '', '5.	Escreva por extenso os números 9,7,0 e 8. ', '6. Questão', '', '', '', '', '7.Coloque V para verdadeiro e F para falso.', '', '', '', '', '8. Marque a seqüência correta:', '', '', '', '', '9.Coloque V para verdadeiro e F para falso.', '', '', '', '', '10. Questão', '', '', '', '', '2020-11-09 12:06:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quarto`
--

CREATE TABLE `quarto` (
  `ID` int(10) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `materia` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` text COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_1` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_2` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_3` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_4` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_5` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_6` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_7` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_8` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_9` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_10` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_11` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_12` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_13` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_14` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_15` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_16` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_17` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_18` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_19` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_20` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_21` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_22` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_23` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_24` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_25` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_26` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_27` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_28` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_29` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_30` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_31` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_32` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_33` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_34` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_35` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_36` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_37` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_38` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_39` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_40` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_41` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_42` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datahora` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quinto`
--

CREATE TABLE `quinto` (
  `ID` int(10) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `materia` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` text COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_1` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_2` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_3` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_4` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_5` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_6` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_7` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_8` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_9` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_10` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_11` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_12` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_13` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_14` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_15` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_16` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_17` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_18` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_19` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_20` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_21` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_22` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_23` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_24` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_25` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_26` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_27` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_28` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_29` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_30` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_31` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_32` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_33` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_34` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_35` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_36` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_37` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_38` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_39` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_40` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_41` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_42` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datahora` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE `resposta` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `materia` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `resposta_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_11` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_12` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_13` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_14` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_15` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_16` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_17` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_18` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta_19` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horaconclusao` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `resposta`
--

INSERT INTO `resposta` (`id`, `UserId`, `nome`, `materia`, `cpf`, `resposta_1`, `resposta_2`, `resposta_3`, `resposta_4`, `resposta_5`, `resposta_6`, `resposta_7`, `resposta_8`, `resposta_9`, `resposta_10`, `resposta_11`, `resposta_12`, `resposta_13`, `resposta_14`, `resposta_15`, `resposta_16`, `resposta_17`, `resposta_18`, `resposta_19`, `horaconclusao`) VALUES
(1, 0, 'italo', 'Português', '03123656944', 'A', '222222222', 'Verdadeiro', 'Verdadeiro', 'Verdadeiro', 'Verdadeiro', 'A', '55555555555555555555555', 'A', 'Verdadeiro', 'Verdadeiro', 'Verdadeiro', 'Verdadeiro', 'A', 'Verdadeiro', 'Verdadeiro', 'Verdadeiro', 'Verdadeiro', 'A', '2020-11-06 19:55:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `segundo`
--

CREATE TABLE `segundo` (
  `ID` int(10) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `materia` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` text COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_1` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_2` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_3` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_4` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_5` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_6` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_7` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_8` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_9` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_10` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_11` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_12` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_13` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_14` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_15` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_16` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_17` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_18` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_19` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_20` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_21` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_22` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_23` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_24` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_25` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_26` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_27` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_28` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_29` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_30` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_31` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_32` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_33` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_34` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_35` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_36` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_37` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_38` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_39` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_40` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_41` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_42` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datahora` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `terciero`
--

CREATE TABLE `terciero` (
  `ID` int(10) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `materia` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` text COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_1` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_2` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_3` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_4` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_5` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_6` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_7` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_8` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_9` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_10` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_11` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_12` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_13` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_14` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_15` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_16` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_17` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_18` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_19` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_20` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_21` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_22` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_23` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_24` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_25` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_26` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_27` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_28` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_29` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_30` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_31` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_32` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_33` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_34` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_35` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_36` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_37` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_38` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_39` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_40` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_41` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `pergunta_42` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datahora` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `cep` int(9) NOT NULL,
  `rua` text NOT NULL,
  `bairro` text NOT NULL,
  `cidade` text NOT NULL,
  `uf` text NOT NULL,
  `msg` text NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT 0,
  `niveis_acesso_id` int(11) NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `UserId`, `nome`, `email`, `senha`, `usuario`, `cpf`, `cep`, `rua`, `bairro`, `cidade`, `uf`, `msg`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 1, 'italo', 'pombo@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'italo', '000.222.855-66', 0, '', '', '', '', '', 1, 2, '2020-11-09 12:13:39', '0000-00-00 00:00:00'),
(2, 2, 'erica', 'erikamamk@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'erica', '000.000.000-00', 0, '', '', '', '', '', 1, 2, '2020-11-06 18:04:21', '0000-00-00 00:00:00'),
(3, 3, 'beta', 'beta@beta.com', 'e10adc3949ba59abbe56e057f20f883e', 'beta', '000.000.000-01', 0, '', '', '', '', '', 1, 3, '2020-11-06 18:04:23', '0000-00-00 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `primeiro`
--
ALTER TABLE `primeiro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `segundo`
--
ALTER TABLE `segundo`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `resposta`
--
ALTER TABLE `resposta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
