-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 22/07/2023 às 12:37
-- Versão do servidor: 10.5.20-MariaDB
-- Versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id20335726_secretme`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carteiro`
--

CREATE TABLE `carteiro` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `mensagem` varchar(5000) NOT NULL,
  `id_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carteiro`
--

INSERT INTO `carteiro` (`id`, `nome`, `mensagem`, `id_user`) VALUES
(38, 'Ailton martins nunes', 'isso é uma caluniaa!!!!!', '27'),
(39, 'jose do frango', 'vai um frango ai?\r\n', '27'),
(51, 'Anonymous', 'O site e ruim', '30'),
(52, 'Anonymous', 'Ohhhh, funciona', '30'),
(60, 'Davi', 'Vai toma no cu', '33'),
(61, 'Seu pai', 'O que é o capitalismo a não ser uma maneira de lucrar com a perca dos outros?\r\n', '33'),
(62, 'Davi ', 'Preto safado', '33'),
(64, 'daw', 'dwa', '34'),
(65, 'dwa', 'daw', '34'),
(69, 'Hwjuw', 'Hahaua', '36');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `email`, `senha`) VALUES
(25, 'ugauga', 'uga@gmail.com', '123'),
(26, 'Leo Ramos ', 'leo.ramires@gmail.com', '12345678'),
(27, 'joao', 'gustavobrabo@f', '1234'),
(28, 'arthur', 'arthur2006.teixeira@gmail.com', '123'),
(29, 'ugauga', 'contaconvidada001@gmail.com', '123'),
(30, 'Anonymous', 'edson.gimenes1310@gmail.com', 'admin'),
(31, 'naruto', 'sempai@gmail.com', '123'),
(32, 'fabio de melo', 'fabio@gmail.com', '123'),
(33, 'Davi', 'lopesdavi436@gmail.com', '12345'),
(34, 'frantz', 'frantz@gmail.com', '123'),
(35, 'Kaua', 'kaua@gmail.com', '123'),
(36, 'Murillo', 'murillocarvalho6064@gmail.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carteiro`
--
ALTER TABLE `carteiro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carteiro`
--
ALTER TABLE `carteiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
