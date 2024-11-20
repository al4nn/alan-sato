-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20/11/2024 às 00:29
-- Versão do servidor: 8.3.0
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `modulo_8`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Geral'),
(2, 'Esportes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `momento_registro` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `categoria_id` int NOT NULL,
  `conteudo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `categoria_id`, `conteudo`) VALUES
(1, 'Minha notícia geral', 1, 'Meu texto de exemplo'),
(2, 'Minha notícia geral 2', 1, 'Meu texto de exemplo 2'),
(3, 'Notícia de esporte', 2, 'Proin placerat sit amet tellus pellentesque blandit. Suspendisse vehicula rutrum eros, eget semper est suscipit quis. Cras velit massa, ornare nec elementum ut, imperdiet et orci. Nulla tempor justo sed enim ornare, tristique sollicitudin lorem aliquet. Phasellus tincidunt elementum ipsum ut luctus. Donec eros ligula, consequat vel auctor vel, consectetur a felis. Donec sit amet finibus odio. Vestibulum eu quam sed ex ullamcorper auctor. Aliquam metus nisl, ornare at nulla et, lacinia congue lectus. Ut convallis erat iaculis dolor cursus, id sodales leo semper.'),
(4, 'Outra notícia de esporte', 2, 'Proin placerat sit amet tellus pellentesque blandit. Suspendisse vehicula rutrum eros, eget semper est suscipit quis. Cras velit massa, ornare nec elementum ut, imperdiet et orci. Nulla tempor justo sed enim ornare, tristique sollicitudin lorem aliquet. Phasellus tincidunt elementum ipsum ut luctus. Donec eros ligula, consequat vel auctor vel, consectetur a felis. Donec sit amet finibus odio. Vestibulum eu quam sed ex ullamcorper auctor. Aliquam metus nisl, ornare at nulla et, lacinia congue lectus. Ut convallis erat iaculis dolor cursus, id sodales leo semper. 2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
