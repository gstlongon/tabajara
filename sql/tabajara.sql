-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/11/2023 às 22:54
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `item`
--

INSERT INTO `item` (`item_id`, `nome`, `categoria_id`, `valor`, `status_item`, `descricao`, `foto`, `promocao`, `valor_promocao`) VALUES
(58, 'Mussarela', 1, 25.00, 1, 'Molho de tomate, camada dupla de mussarela e orégano.', 'mussarela.png', 0, 0.00),
(59, 'Calabresa', 1, 26.00, 1, 'Molho de tomate, mussarela, calabresa fatiada, cebola e orégano.', 'calabresa.png', 0, 0.00),
(60, 'Quatro Queijos', 1, 28.00, 1, 'Molho de tomate, camadas de mussarela, provolone, parmessão, gorgonzola e orégano.', 'quatroqueijos.png', 0, 0.00),
(62, 'Brasileira', 1, 30.00, 1, 'Molho de tomate, mussarela, calabresa picada, palmito, champignon, azeitonas e orégano.', 'brasileira.png', 0, 0.00),
(63, 'Portuguesa', 1, 29.00, 0, 'Molho de tomate, mussarela, presunto, ovos, cebolas, pimentão, azeitona  e orégano.', 'portuguesa.png', 0, 0.00),
(64, 'Moda da Casa', 1, 35.00, 1, 'Molho de tomate, mussarela, carne de sol, tomates em cubos, coentro, cebola, azeitona, cat', 'modadacasa.png', 0, 0.00),
(65, 'Banana com canela', 1, 24.00, 1, 'Mussarela, banana, canela e açúcar.', 'bananacomcanela.png', 0, 0.00),
(66, 'Chocolate com morango', 1, 25.00, 1, 'Creme de leite, lascas de chocolate e morangos', 'chocolatecommorango.png', 0, 0.00),
(67, 'X-Burguer', 2, 23.00, 1, 'Pão, Maionese, Hamburguer, Queijo.', 'x-burguer.png', 0, 0.00),
(68, 'X-Burguer Duplo', 2, 26.00, 1, 'Pão, Maionese, 2 Hamburguers, Queijo.', 'x-burguerduplo.png', 0, 0.00),
(69, 'X-Burguer Cheddar Bacon', 2, 28.00, 1, 'Pão, Maionese, Hamburguer, Queijo Cheddar, Bacon.\r\n', 'x-burguercheddarbacon.png', 0, 0.00),
(70, 'X-Burguer Salada Bacon', 2, 30.00, 1, 'Pão, Maionese, Hamburguer, Queijo, Alface, Tomate, Bacon.', 'x-burguersaladabacon.png', 0, 0.00),
(71, 'X-Burguer Triplo Cheddar', 2, 34.00, 1, 'Pão, Maionese, 3 Hamburguers, Queijo Cheddar', 'x-burguertriplocheddar.png', 0, 0.00),
(72, 'X-Burguer Tudo', 2, 35.00, 1, 'Pão, Maionese, Hamburguer, Queijo, Alface, Tomate, Bacon, Calabresa, Ovo.', 'x-burguertudo.png', 0, 0.00),
(73, 'Prato de tilapia Grelhada', 3, 25.00, 1, 'Arroz com Legumes, Batatas cozidas, Salada e Tilapia grelhada.', 'pratodetilapiagrelhada.png', 0, 0.00),
(74, 'Prato de Bife a Cavalo', 3, 26.00, 1, 'Arroz, Feijão, Batatas fritas, Salada, Bife e Ovo frito.', 'pratodebifeacavalo.png', 0, 0.00),
(75, 'Prato com Carne do Tabajaras', 3, 28.00, 1, 'Arroz Temperado, Salada e Carne do Tabajaras.', 'pratocomcarnedotabajaras.png', 0, 0.00),
(76, 'Prato de Macarrão', 3, 21.00, 1, 'Macarrão e Carne Moida.', 'pratodemacarrao.png', 0, 0.00),
(77, 'Prato Peruano', 3, 31.00, 0, 'Arroz Temperado, Salada, Feijao Peruano e Camarão.', 'pratoperuano.png', 0, 0.00),
(78, 'Prato de Ceviche Atum', 3, 36.00, 1, 'Ceviche Atum com tempero Peruano.', 'pratodecevicheatum.png', 0, 0.00),
(79, 'Milkshake de Morango', 4, 10.00, 1, 'Sorvete de morango, leite, calda de morango, morangos.', 'milkshakedemorango.png', 0, 0.00),
(80, 'Milkshake de Nutella', 4, 12.00, 1, 'Sorvete de chocolate, leite, calda de brigadeiro, Nutella®.', 'milkshakedenutella.png', 0, 0.00),
(81, 'Pettit Gateau', 4, 21.00, 1, 'Petit Gateau com calda de Nutella, acompanha morangos, avelas granuladas.', 'pettitgateau.png', 0, 0.00),
(82, 'Cheesecake Frutas Vermelhas', 4, 21.00, 1, 'Cheesecake recheado de frutas vermelhas, coberto com ganache de chocolate branco.', 'cheesecakefrutasvermelhas.png', 0, 0.00),
(83, 'Coupe Chocolat', 4, 29.00, 1, 'Recheio de creme de pave de chocolate branco, mesclado com avelas granuladas.', 'coupechocolat.png', 0, 0.00),
(84, 'Garrafa de Agua', 5, 5.00, 1, 'Agua sem gas - 500 ml.', 'garrafadeagua.png', 0, 0.00),
(85, 'Coca Cola lata', 5, 8.00, 1, 'Refrigerante Coca Cola lata - 350ml.', 'cocacolalata.png', 0, 0.00),
(86, 'Fanta lata', 5, 8.00, 1, 'Refrigerante Fanta lata - 350ml.', 'fantalata.png', 0, 0.00),
(87, 'Sprite lata', 5, 8.00, 1, 'Refrigerante Sprite lata - 350ml.', 'spritelata.png', 0, 0.00),
(88, 'Suco de laranja', 5, 10.00, 1, 'Suco natural de laranja - 500ml.', 'sucodelaranja.png', 0, 0.00),
(89, 'Suco de Morango', 5, 10.00, 1, 'Suco natural de morango - 500ml.', 'sucodemorango.png', 0, 0.00);

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
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `telefone` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

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
