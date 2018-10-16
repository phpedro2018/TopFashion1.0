-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Set-2018 às 15:24
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_vn`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `contato` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `contato`) VALUES
(1, 'Antonio da Silva', '021.365.965-21', '(85) 9.9856-6253'),
(2, 'Maria José', '215.362.632-52', '(85) 9.9985-6322'),
(3, 'Francisco Tavares', '215.365.999-62', '(85) 9.9877.3332'),
(4, 'Paulo da Silva', '015.963.965-41', '(85) 9.6523.6325'),
(5, 'Pedro Henrique ', '026.064.383-10', '(85) 9.8566.9157'),
(6, 'Maria Paula', '352.165.169-16', '(49) 6.7494.9468');

-- --------------------------------------------------------

--
-- Estrutura da tabela `kits`
--

CREATE TABLE `kits` (
  `id` int(11) NOT NULL,
  `kit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `kits`
--

INSERT INTO `kits` (`id`, `kit`) VALUES
(10000, 'Beca / Capelo / Fita Azul Piscina'),
(10012, 'Terno Fino Cor Cinza Carpane G'),
(10013, 'Vestido Kids Petit Cherry Amarelo '),
(10014, 'Vestido Balanço Chifron Vermelho '),
(10015, 'Vestido Crepe Veludo Beatrice'),
(10016, 'Vestido Rodado Vinha - Cor Azul '),
(10017, 'Vestido Rodado Vinha - Cor Rosa Claro'),
(10018, 'Vestido Balanço Chifron - Cor Preto'),
(10019, 'Vestido Sereia Íris - Cor Verde'),
(10020, 'Calça Social Masculina Colombo - Cor Cinza Lisa 38  '),
(10021, 'Calça Social Masculina Colombo - Cor Cinza Lisa 42'),
(10022, 'Infantil social Menino - Calça/Camisa/Sapato- Malwee Cor Preto Tam. 8 anos'),
(10023, 'Infantil social Menino - Calça/Camisa/Sapato- Malwee Cor Preto Tam. 10 anos'),
(10024, 'Formanda - Vestido Precious Scala'),
(10025, 'Formanda - Vestido Rock Jovani'),
(10026, 'Formanda - Vestido Chic Blue Papell'),
(10027, 'Trajes - Terno azul - Camargo Clelebration Classic Fit'),
(10028, 'Blazer Carpani Cinza '),
(10029, 'Vestido Rosa Rendado Vitoria Secret');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `id_kit` int(11) NOT NULL,
  `data_retirada` date NOT NULL,
  `data_entrega` date NOT NULL,
  `nome_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id`, `id_kit`, `data_retirada`, `data_entrega`, `nome_cliente`) VALUES
(12, 10000, '2017-12-22', '2017-12-30', 'Antonio da Silva'),
(15, 10012, '2017-12-22', '2017-12-29', 'Maria José'),
(16, 10025, '2017-12-26', '2018-01-02', 'Maria José'),
(17, 10018, '2017-12-26', '2017-12-31', 'Francisco Tavares'),
(18, 10027, '2017-12-26', '2018-01-01', 'Pedro Henrique '),
(20, 10022, '2017-12-27', '2017-12-31', 'Maria José'),
(21, 10025, '2018-01-16', '2018-01-30', 'Pedro Henrique '),
(22, 10028, '2018-02-06', '2018-02-10', 'Paulo da Silva'),
(24, 10029, '2018-08-01', '2018-08-10', 'Maria José');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`) VALUES
(1, 'Antonio', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kits`
--
ALTER TABLE `kits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kits`
--
ALTER TABLE `kits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10030;
--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
