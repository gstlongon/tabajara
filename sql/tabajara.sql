-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/11/2023 às 23:39
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tabajara`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrador`
--

CREATE TABLE `administrador` (
  `cnpj` int(11) NOT NULL,
  `razao_social` varchar(255) NOT NULL,
  `nome_fantasia` varchar(255) NOT NULL,
  `endereco_rua` varchar(255) NOT NULL,
  `endereco_bairro` varchar(255) NOT NULL,
  `endereco_numero` varchar(10) NOT NULL,
  `endereco_cep` varchar(10) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `endereco_complemento` varchar(10) NOT NULL,
  `endereco_cidade` varchar(50) NOT NULL,
  `endereco_estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `administrador`
--

INSERT INTO `administrador` (`cnpj`, `razao_social`, `nome_fantasia`, `endereco_rua`, `endereco_bairro`, `endereco_numero`, `endereco_cep`, `telefone`, `email`, `usuario`, `senha`, `endereco_complemento`, `endereco_cidade`, `endereco_estado`) VALUES
(2, '', '', '', '', '', '', '', '', 'gu', '123', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `nome` varchar(50) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`nome`, `categoria_id`) VALUES
('pizzas', 1),
('lanches', 2),
('pratos', 3),
('sobremesas', 4),
('bebidas', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `telefone` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `endereco_rua` varchar(255) NOT NULL,
  `endereco_bairro` varchar(255) NOT NULL,
  `endereco_numero` varchar(255) NOT NULL,
  `endereco_cep` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `valor` float(4,2) NOT NULL,
  `status_item` int(1) NOT NULL,
  `descricao` varchar(90) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `promocao` int(11) NOT NULL,
  `valor_promocao` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `item`
--

INSERT INTO `item` (`item_id`, `nome`, `categoria_id`, `valor`, `status_item`, `descricao`, `foto`, `promocao`, `valor_promocao`) VALUES
(1, 'X-Burguer', 2, 25.00, 1, 'Pão, Maionese, Hamburguer, Queijo', 'X-Burguer.png', 0, 0.00),
(2, 'Calabresa', 1, 22.00, 1, 'Molho de tomate, mussarela, calabresa fatiada, cebola e orégano', 'Calabresa.png', 1, 26.00),
(3, 'Mussarela', 1, 20.00, 1, 'Molho de tomate, camada dupla de mussarela e orégano', 'Mussarela.png', 0, 0.00),
(4, 'X-Burguer Duplo', 2, 26.00, 1, 'Pão, Maionese, 2 Hamburguers, Queijo', 'X-Burguer Duplo.png', 0, 0.00),
(5, 'Tilapia Grelhada', 3, 25.00, 1, 'Arroz com Legumes, Batatas cozidas, Salada e Tilapia grelhada', 'Tilapia Grelhada.png', 0, 0.00),
(6, 'Bife a Cavalo', 3, 26.00, 1, 'Arroz, Feijão, Batatas fritas, Salada, Bife e Ovo frito', 'Bife a Cavalo.png', 0, 0.00),
(7, 'Milkshake de Morango', 4, 23.00, 1, 'Sorvete de morango, leite, calda de morango, morangos', 'Milkshake de Morango.png', 0, 0.00),
(8, 'Milkshake de Chocolate', 4, 23.00, 1, 'Sorvete de chocolate, leite, calda de brigadeiro, Nutella®', 'Milkshake de Chocolate.png', 0, 0.00),
(9, 'Garrafa de Água', 5, 3.00, 1, 'Água sem gás - 500 ml', 'Garrafa de Água.png', 0, 0.00),
(10, 'Cerveja long neck Heineken', 5, 7.00, 1, 'Cerveja long neck Heineken - 350 ml', 'Cerveja long neck Heineken.png', 0, 0.00),
(35, 'Smirnoff Ice', 5, 16.00, 1, 'alcoólica 5% 275ml.', 'Smirnoff Ice.jpg', 0, 0.00),
(36, 'coca', 5, 25.00, 1, 'Molho de tomate, camada dupla de mussarela e orégano', '654de064dd46b.jpg', 0, 0.00);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`cnpj`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`telefone`);

--
-- Índices de tabela `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `fk_categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `cnpj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `telefone` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_PesCarro` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`),
  ADD CONSTRAINT `fk_categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
