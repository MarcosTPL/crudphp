-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jul-2022 às 01:23
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `my_formulario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` smallint(6) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL,
  `senha` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `sexo` char(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `cidade` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `estado` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `endereco` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `telefone`, `sexo`, `data_nasc`, `cidade`, `estado`, `endereco`) VALUES
(1, 'Marcos Tulio Pereira Lima', 'tulinhoplima15@gmail.com', '123', '971420104', 'masculino', '1996-11-22', 'Betim', 'MG', 'tal'),
(2, 'Pedro Gabriel', 'pedro@gmail.com', '1234', '35915709', 'masculino', '2002-04-07', 'Betim', 'MG', 'tal'),
(3, 'João Vitor', 'joao@gmail.com', '123', '35915709', 'masculino', '2000-01-07', 'Betim', 'MG', 'tal'),
(4, 'Carla Pereira', 'carla@gmail.com', '123', '35915709', 'feminino', '1991-03-10', 'Contagem', 'MG', 'tal'),
(5, 'Leticia Fernanda', 'leticia@gmail.com', '123', '35915709', 'feminino', '1985-09-25', 'SP', 'SP', 'tal');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
