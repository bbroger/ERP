-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 24-Nov-2015 às 00:50
-- Versão do servidor: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ocaeira`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `nome` varchar(50) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `complemento` varchar(40) NOT NULL,
  `n` varchar(10) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `cep` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela de Clientes';

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`nome`, `cpf`, `telefone`, `nascimento`, `sexo`, `email`, `rua`, `complemento`, `n`, `bairro`, `cidade`, `estado`, `cep`) VALUES
('test', 22, '', '1970-01-01', 'f', '', '', '', '', '', '', '', ''),
('Felipe Alves', 909, 'asas', '1970-01-01', 'f', '', '', '', '', '', '', '', ''),
('Talitha Tabatha de Barros', 11111, '873878378783', '1989-06-18', 'f', '', 'fe', 'ef', 'fe', '', '', '', ''),
('Felipe Alves da Costa', 4441643322, '88 94472628', '1992-06-06', 'm', 'felipealvescosta@live.com', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `operacao`
--

CREATE TABLE IF NOT EXISTS `operacao` (
  `id_operacao` bigint(100) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabele de Operações';

--
-- Extraindo dados da tabela `operacao`
--

INSERT INTO `operacao` (`id_operacao`, `data`) VALUES
(1, '2015-11-23 21:58:34'),
(2, '2015-11-23 22:38:42'),
(3, '2015-11-23 23:39:06'),
(4, '2015-11-23 23:40:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `nome` varchar(40) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `descricao` varchar(40) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `sessao` varchar(10) NOT NULL,
  `preco_compra` float NOT NULL,
  `preco_venda` float NOT NULL,
  `data_vencimento` date NOT NULL,
  `imagem` varchar(40) NOT NULL,
  `codigo` bigint(40) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nome`, `marca`, `descricao`, `quantidade`, `sessao`, `preco_compra`, `preco_venda`, `data_vencimento`, `imagem`, `codigo`, `data_cadastro`) VALUES
('produto', '', '', 7, '0', 5.9, 6.9, '1970-01-01', 'bio-pic.jpg', 1, '2015-11-23 15:28:50'),
('mesa', 'o caeira', 'mais um', 3, '0', 2.8, 3, '1970-01-01', '2012-11-12 16.44.59.jpg', 2, '2015-11-23 15:29:04'),
('Snicker', 'Snickers', 'Chocolate', 2, '0', 0, 2, '2016-04-04', '7506174500207', 3, '2015-11-23 15:29:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sistema`
--

CREATE TABLE IF NOT EXISTS `sistema` (
`id` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sistema`
--

INSERT INTO `sistema` (`id`, `nome`, `usuario`, `senha`) VALUES
(1, 'Felipe Alves da Costa', 'felipe', '123'),
(2, 'Talitha Tabatha de Barros', 'ttb', '123'),
(3, 'Felipe Alves da Costa', 'Felipe Alves', 'felipe007');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE IF NOT EXISTS `vendas` (
  `operacao` bigint(100) NOT NULL,
  `codigo` varchar(30) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `preco` float NOT NULL,
  `total` float NOT NULL,
`id_venda` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`operacao`, `codigo`, `nome`, `quantidade`, `preco`, `total`, `id_venda`, `data`) VALUES
(1, '1', 'produto', 0, 6.9, 4, 45, '2015-11-23 21:58:39'),
(1, '2', 'mesa', 0, 3, 10, 46, '2015-11-23 21:58:41'),
(1, '3', 'Snicker', 0, 2, 20, 47, '2015-11-23 21:58:44'),
(1, '3', 'Snicker', 0, 2, 2, 48, '2015-11-23 21:59:07'),
(1, '2', 'mesa', 0, 3, 5, 49, '2015-11-23 22:32:18'),
(1, '1', 'produto', 0, 6.9, 0, 50, '2015-11-23 22:32:49'),
(1, '1', 'produto', 0, 6.9, 0, 51, '2015-11-23 22:34:45'),
(2, '1', 'produto', 0, 6.9, 10, 52, '2015-11-23 22:39:32'),
(2, '2', 'mesa', 0, 3, 0, 53, '2015-11-23 22:43:01'),
(2, '1', 'produto', 0, 6.9, 0, 54, '2015-11-23 22:46:08'),
(2, '2', 'mesa', 0, 3, 0, 55, '2015-11-23 22:46:23'),
(2, '2', 'mesa', 4, 3, 12, 56, '2015-11-23 22:48:41'),
(2, '2', 'mesa', 4, 3, 12, 57, '2015-11-23 22:49:05'),
(2, '1', 'produto', 2, 6.9, 13.8, 58, '2015-11-23 22:49:18'),
(2, '1', 'produto', 2, 6.9, 13.8, 59, '2015-11-23 22:49:32'),
(3, '1', 'produto', 1, 6.9, 6.9, 60, '2015-11-23 23:39:19'),
(3, '3', 'Snicker', 3, 2, 6, 61, '2015-11-23 23:39:28'),
(3, '2', 'mesa', 5, 3, 15, 62, '2015-11-23 23:39:40'),
(4, '1', 'produto', 2, 6.9, 13.8, 63, '2015-11-23 23:41:10'),
(4, '2', 'mesa', 1, 3, 3, 64, '2015-11-23 23:41:16'),
(4, '2', 'mesa', 2, 3, 6, 65, '2015-11-23 23:41:21'),
(4, '2', 'mesa', 2, 3, 6, 66, '2015-11-23 23:41:26'),
(4, '', '', 1, 0, 0, 67, '2015-11-23 23:41:54'),
(4, '1', 'produto', 1, 6.9, 6.9, 68, '2015-11-23 23:42:07'),
(4, '1', 'produto', 1, 6.9, 6.9, 69, '2015-11-23 23:42:12'),
(4, '1', 'produto', 1, 6.9, 6.9, 70, '2015-11-23 23:42:35'),
(4, '1', 'produto', 1, 6.9, 6.9, 71, '2015-11-23 23:43:32'),
(4, '1', 'produto', 1, 6.9, 6.9, 72, '2015-11-23 23:43:37'),
(4, '1', 'produto', 1, 6.9, 6.9, 73, '2015-11-23 23:45:22'),
(4, '1', 'produto', 1, 6.9, 6.9, 74, '2015-11-23 23:45:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `operacao`
--
ALTER TABLE `operacao`
 ADD PRIMARY KEY (`id_operacao`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
 ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `sistema`
--
ALTER TABLE `sistema`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
 ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sistema`
--
ALTER TABLE `sistema`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
