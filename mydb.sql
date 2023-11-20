-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/11/2023 às 23:20
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
-- Banco de dados: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `conselheiro`
--

CREATE TABLE `conselheiro` (
  `id_conselheiro` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `foto` text DEFAULT NULL,
  `sobre` text DEFAULT NULL,
  `mandato` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `conselheiro`
--

INSERT INTO `conselheiro` (`id_conselheiro`, `nome`, `email`, `senha`, `telefone`, `foto`, `sobre`, `mandato`) VALUES
(9, 'Maria Silva', 'fabiano@gmail.com', '202cb962ac59075b964b07152d234b70', '55984364641', '2.jpg', 'dou a bunda todos os dias', '2020/23'),
(10, 'João Santos', 'joao@gmail.com', '202cb962ac59075b964b07152d234b70', '531312', '1.jpg', 'Com paixão pela educação e justiça social, João trouxe inovação aos conselhos tutelares, promovendo projetos educativos e colaborando com escolas para garantir um futuro promissor para cada criança sob sua responsabilidade.', '2020/23'),
(11, 'Ana Oliveira', 'ana@gmail.com', '202cb962ac59075b964b07152d234b70', '13132132', '4.png', 'Inspirada pela igualdade de gênero, Ana destacou-se como conselheira tutelar, trabalhando incansavelmente para combater o abuso e a exploração de meninas, empoderando-as e promovendo a igualdade desde a infância.', '2020/23'),
(12, 'Carlos Mendes', 'carlos@gmail.com', '202cb962ac59075b964b07152d234b70', '421342', '3.png', 'Defensor ferrenho dos direitos das crianças com deficiência, Carlos dedicou sua carreira a garantir acessibilidade e inclusão, desafiando estigmas e promovendo uma sociedade mais inclusiva para todos.', '2020/23'),
(13, 'Laura Almeida', 'laura@gmail.com', '202cb962ac59075b964b07152d234b70', '13231231', '5.png', 'dvogada de formação, Laura trouxe uma abordagem jurídica única ao seu papel como conselheira tutelar, utilizando seu conhecimento legal para garantir que cada criança receba a proteção e os cuidados necessários para um desenvolvimento saudável.', '2020/23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `denuncia`
--

CREATE TABLE `denuncia` (
  `tipo` varchar(45) NOT NULL,
  `id_denuncia` int(11) NOT NULL,
  `nome_vitima` varchar(45) DEFAULT NULL,
  `nome_pai_vitima` varchar(45) DEFAULT NULL,
  `nome_mae_vitima` varchar(45) DEFAULT NULL,
  `endereco_vitima` varchar(70) DEFAULT NULL,
  `escola_vitima` varchar(45) DEFAULT NULL,
  `idade_vitima` decimal(10,0) DEFAULT NULL,
  `genero_vitima` enum('M','F') DEFAULT NULL,
  `relato` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `denuncia`
--

INSERT INTO `denuncia` (`tipo`, `id_denuncia`, `nome_vitima`, `nome_pai_vitima`, `nome_mae_vitima`, `endereco_vitima`, `escola_vitima`, `idade_vitima`, `genero_vitima`, `relato`) VALUES
('4', 5, 'Luiz', 'Soares', 'Luiza', 'Rua dos bobos n 0', 'dell', 8, 'F', 'Ao decorrer deste mês o pai do Luís está fazendo ele trabalhar de forma ilegal na oficina dele pois ele é menor de idade'),
('13', 6, 'awdawda', 'dwadaw', 'dawdaw', 'wdada', 'dwadaw', 12, 'F', 'dawdawdawdaw'),
('2', 7, 'awdwaddaw', 'dawdwa', 'dawdaw', 'dawdaw', 'awd', 0, 'F', 'dadaw'),
('18', 8, 'dwa', 'awd', 'wda', 'dwa', 'dawd', 1, 'M', 'wdawddaw'),
('2', 9, 'Luiz', 'Soares', 'Luiza', 'Rua dos bobos n 0', 'dell', 12, 'M', 'doi ajdawdawdaw'),
('2', 10, '', '', '', '', '', 0, 'F', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `encaminhamento`
--

CREATE TABLE `encaminhamento` (
  `id` int(11) NOT NULL,
  `medida_protetiva_id_medida` int(11) NOT NULL,
  `data_encaminhamento` date NOT NULL,
  `observacoes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `encaminhamento`
--

INSERT INTO `encaminhamento` (`id`, `medida_protetiva_id_medida`, `data_encaminhamento`, `observacoes`) VALUES
(2, 18, '2023-11-02', 'wdnahubdawdwa'),
(3, 6, '2023-11-16', 'jorge alo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `medida_protetiva`
--

CREATE TABLE `medida_protetiva` (
  `id_medida` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `medida_protetiva`
--

INSERT INTO `medida_protetiva` (`id_medida`, `nome`) VALUES
(1, 'Pedido de Certidão de Nascimento\r\n'),
(2, 'Pedido de Histórico Escolar\r\n\r\n'),
(3, 'Acompanhamento Familiar'),
(4, 'Termo de responsabilidade'),
(5, 'Termo de Compromisso\r\n'),
(6, 'Advertência'),
(7, 'Encaminhamento Psicológico'),
(8, 'Encaminhamento ao CREAS'),
(9, 'Encaminhamento ao CRAS'),
(10, 'Encaminhamento SMED'),
(11, 'Encaminhamento CAPS AD'),
(12, 'Encaminhamento ao ESF'),
(13, 'Encaminhamento à Defensoria.\r\n'),
(14, 'Encaminhamento ao MP'),
(15, 'Encaminhamento à Delegacia'),
(17, 'Acolhimento Institucional'),
(18, 'Pedido de Vaga Escolar.'),
(19, 'Acolhimento Institucional'),
(20, 'Pedido de Vaga Escolar.'),
(21, 'Outros ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `motivo`
--

CREATE TABLE `motivo` (
  `id_motivo` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `motivo`
--

INSERT INTO `motivo` (`id_motivo`, `nome`) VALUES
(1, 'Desaparecimento/Fuga'),
(2, 'Abuso Sexual'),
(3, 'Violência Sexual'),
(4, 'Exploração do Trabalho Infantil'),
(5, 'Bullying'),
(8, 'Negligência'),
(9, 'Maus tratos'),
(10, 'Abandono'),
(11, 'Agressões'),
(12, 'Drogadição'),
(13, 'Alienação Parental'),
(14, 'Uso de Bebida por Adolescente'),
(15, 'Ato Infracional(crime)'),
(16, 'Conflito Familar'),
(17, 'Comportamento'),
(18, 'Exploração sexual'),
(19, 'Problemas Psiquiátricos na Família'),
(20, 'Comportamento Depressivo e Suicida'),
(21, 'Responsáveis Usuários ou Dependentes.'),
(22, 'Outros (relatar)');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vitima`
--

CREATE TABLE `vitima` (
  `id_vitma` int(11) DEFAULT NULL,
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `nome_pai` varchar(45) DEFAULT NULL,
  `nome_mae` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `escola` varchar(45) DEFAULT NULL,
  `ano` char(10) DEFAULT NULL,
  `idade` decimal(10,0) DEFAULT NULL,
  `genero` enum('M','F') DEFAULT NULL,
  `data_nascimento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `vitima`
--

INSERT INTO `vitima` (`id_vitma`, `cpf`, `nome`, `nome_pai`, `nome_mae`, `endereco`, `escola`, `ano`, `idade`, `genero`, `data_nascimento`) VALUES
(NULL, '033.925.550-10', 'teco', 'awd', 'dawdaw', 'Rua dos bobos n 0', '2121', '1', NULL, 'F', '2023-11-09'),
(NULL, '1212', '', '', '', '', '', '', NULL, 'M', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `conselheiro`
--
ALTER TABLE `conselheiro`
  ADD PRIMARY KEY (`id_conselheiro`),
  ADD UNIQUE KEY `id_Conselheiro_UNIQUE` (`id_conselheiro`);

--
-- Índices de tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`id_denuncia`);

--
-- Índices de tabela `encaminhamento`
--
ALTER TABLE `encaminhamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Chamados_has_medida_protetiva_medida_protetiva1_idx` (`medida_protetiva_id_medida`);

--
-- Índices de tabela `medida_protetiva`
--
ALTER TABLE `medida_protetiva`
  ADD PRIMARY KEY (`id_medida`);

--
-- Índices de tabela `motivo`
--
ALTER TABLE `motivo`
  ADD PRIMARY KEY (`id_motivo`);

--
-- Índices de tabela `vitima`
--
ALTER TABLE `vitima`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conselheiro`
--
ALTER TABLE `conselheiro`
  MODIFY `id_conselheiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `id_denuncia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `encaminhamento`
--
ALTER TABLE `encaminhamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `medida_protetiva`
--
ALTER TABLE `medida_protetiva`
  MODIFY `id_medida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `motivo`
--
ALTER TABLE `motivo`
  MODIFY `id_motivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
