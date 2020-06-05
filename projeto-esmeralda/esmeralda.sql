-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jun-2020 às 15:47
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `esmeralda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atualizacoes`
--

CREATE TABLE `atualizacoes` (
  `id` int(10) NOT NULL,
  `data_hora` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atualizacoes`
--

INSERT INTO `atualizacoes` (`id`, `data_hora`) VALUES
(1, '05/06/2020 15:15'),
(2, '05/06/2020 15:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `soros`
--

CREATE TABLE `soros` (
  `id` int(10) NOT NULL,
  `nome_hospital` varchar(100) NOT NULL,
  `soro` varchar(100) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `geolocalizacao` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `soros`
--

INSERT INTO `soros` (`id`, `nome_hospital`, `soro`, `quantidade`, `geolocalizacao`) VALUES
(1, 'teste', 'Soro antibotrópico', 2, 'teste'),
(4, 'Teste2', 'Soro anticrotálico', 10, 'teste'),
(5, 'teste3', 'Soro anticrotálico', 5, 'tt'),
(6, 'teste', 'Soro antilonomia', 6, 'teste'),
(7, 'São Raimundo', 'Soro antibotrópico-laquético', 7, ''),
(8, 'São Raimundo', 'Soro antibotrópico-laquético', 7, ''),
(9, 'São Raimundo', 'Soro antilaquético', 7, 'Testando123'),
(10, 'TesteHora', 'Soro antilaquético', 2, 'TesteHora'),
(11, 'Tesnate', 'Soro antielapídico', 3, 'Testando123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atualizacoes`
--
ALTER TABLE `atualizacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `soros`
--
ALTER TABLE `soros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atualizacoes`
--
ALTER TABLE `atualizacoes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `soros`
--
ALTER TABLE `soros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
