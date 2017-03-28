-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Mar-2017 às 04:41
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desafio_web`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mercadoria`
--

CREATE TABLE `mercadoria` (
  `Codigo_Mercadoria` int(11) NOT NULL,
  `Tipo_Mercadoria` varchar(120) NOT NULL,
  `Nome_Mercadoria` varchar(120) NOT NULL,
  `QTD_Mercadoria` int(11) NOT NULL,
  `Preco` float NOT NULL,
  `Tipo_Negocio` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mercadoria`
--

INSERT INTO `mercadoria` (`Codigo_Mercadoria`, `Tipo_Mercadoria`, `Nome_Mercadoria`, `QTD_Mercadoria`, `Preco`, `Tipo_Negocio`) VALUES
(3, 'teste3 ', 'teste3', 3, 3.1, 'venda'),
(5, 'teste 4', 'teste 4', 4, 4, 'compra'),
(6, 'teste 5', 'teste 5', 80, 4, 'compra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mercadoria`
--
ALTER TABLE `mercadoria`
  ADD PRIMARY KEY (`Codigo_Mercadoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mercadoria`
--
ALTER TABLE `mercadoria`
  MODIFY `Codigo_Mercadoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
