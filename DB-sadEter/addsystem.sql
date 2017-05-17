-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/02/2017 às 17:13
-- Versão do servidor: 5.6.24
-- Versão do PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `addsystem`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nascimento` date NOT NULL,
  `turma_codigo` int(11) NOT NULL,
  `sexo` char(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `aluno`
--

INSERT INTO `aluno` (`codigo`, `nome`, `email`, `nascimento`, `turma_codigo`, `sexo`) VALUES
(1, 'Ivanielson Cabral Galdino', 'ivanielson2011@gmail.com', '1989-09-06', 1, 'Masculino'),
(2, 'André Francisco', 'andrefvfrancisco@gmail.com', '1989-10-05', 1, 'Masculino'),
(11, 'Saulo Artur', 'sauloartur@hotmail.com', '1986-12-06', 1, 'Masculino'),
(12, 'Rodolfo Lima', 'rodolfo@gmail.com', '1989-03-06', 1, 'Masculino');

-- --------------------------------------------------------

--
-- Estrutura para tabela `coordenador`
--

CREATE TABLE IF NOT EXISTS `coordenador` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` char(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `coordenador`
--

INSERT INTO `coordenador` (`codigo`, `nome`, `email`, `nascimento`, `sexo`) VALUES
(1, 'Édna Araujo Sena', 'edna@eter.org.br', '1982-02-05', 'Feminino'),
(2, 'Aldenir Apolinário Bazílio da Silva', 'aldenir@eter.org.br', '1986-01-03', 'Masculino'),
(3, 'Joselito de Sousa Moraes', 'joselitomoraes@eter.org.br', '1984-06-02', 'Masculino'),
(4, 'Renata Cavalcanti Cordeiro', 'renata@eter.org.br', '1988-05-09', 'Feminino'),
(5, 'Vandelson Lima de Carvalho', 'Vandelson.carvalho@ete.org.br', '1974-09-05', 'Masculino'),
(6, 'Éder Rotondano', 'eder@eter.org.br', '1972-10-09', 'Masculino');

-- --------------------------------------------------------

--
-- Estrutura para tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8 NOT NULL,
  `coordenador_codigo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `curso`
--

INSERT INTO `curso` (`codigo`, `nome`, `coordenador_codigo`) VALUES
(1, 'Técnico em Informática', 2),
(2, 'Técnico em Eletrônica', 1),
(3, 'Técnico em Agroecologia', 3),
(4, 'Técnico em Equipamentos Biomédicos', 4),
(5, 'Técnico em Enfermagem', 4),
(6, 'Técnico em Logística', 5),
(7, 'Técnico em Segurança do Trabalho', 6),
(8, 'Técnico em Telecomunicações', 2),
(9, 'Técnico em Transações Imobiliárias', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `codigo` int(11) NOT NULL,
  `nome_base` varchar(60) CHARACTER SET utf8 NOT NULL,
  `modulo` int(11) NOT NULL,
  `curso_codigo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `disciplina`
--

INSERT INTO `disciplina` (`codigo`, `nome_base`, `modulo`, `curso_codigo`) VALUES
(1, 'Projeto de Redes de Computadores', 3, 1),
(2, 'Comunicação de Dados', 3, 1),
(3, 'Sistemas Operacionais de Redes', 3, 1),
(4, 'Administração de Serviços de Redes', 3, 1),
(5, 'Desenvolvimento para Redes', 3, 1),
(6, 'Web design e desenvolvimento para Internet', 3, 1),
(7, 'Códigos, Linguagens e Suas Tecnologias (Inglês)', 3, 1),
(8, 'Códigos, Linguagens e Suas Tecnologias (Português)', 3, 1),
(9, 'Qualidade nos Serviços', 3, 1),
(10, 'Empreendedorismo', 3, 1),
(11, 'Elementos de Eletricidade', 2, 1),
(12, 'Ferramentas de Instalação', 2, 1),
(13, 'Eletrônica Analógica Básica', 2, 1),
(14, 'Eletrônica Digital e Microprocessadores', 2, 1),
(15, 'Redes de Computadores', 2, 1),
(16, 'Infraestrutura de Redes de Computadores', 2, 1),
(17, 'Desenvolvimento de Aplicativos com Banco de Dados', 2, 1),
(18, 'Códigos, Linguagens e Suas Tecnologias (Inglês)', 2, 1),
(19, 'Códigos, Linguagens e Suas Tecnologias (Português)', 2, 1),
(20, 'Saúde e Segurança do Trabalho', 2, 1),
(21, 'Organização Empresarial', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplina_has_professor`
--

CREATE TABLE IF NOT EXISTS `disciplina_has_professor` (
  `codigo_disciplina_professor` int(11) NOT NULL,
  `disciplina_codigo` int(11) NOT NULL,
  `professor_codigo` int(11) NOT NULL,
  `turma_codigo` int(11) NOT NULL,
  `periodo` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `dataInicioAvaliacao` date DEFAULT NULL,
  `dataFimAvaliacao` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `disciplina_has_professor`
--

INSERT INTO `disciplina_has_professor` (`codigo_disciplina_professor`, `disciplina_codigo`, `professor_codigo`, `turma_codigo`, `periodo`, `dataInicioAvaliacao`, `dataFimAvaliacao`) VALUES
(1, 1, 2, 1, '2015.2', '2015-12-09', '2015-12-10'),
(3, 2, 2, 1, '2015.2', '0000-00-00', '0000-00-00'),
(4, 7, 1, 1, '2015.2', '0000-00-00', '0000-00-00'),
(5, 8, 1, 1, '2015.2', '0000-00-00', '0000-00-00'),
(6, 3, 2, 1, '2015.2', '0000-00-00', '0000-00-00'),
(7, 4, 2, 1, '2015.2', '0000-00-00', '0000-00-00'),
(8, 10, 3, 1, '2015.2', NULL, NULL),
(9, 9, 3, 1, '2015.2', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_12_183243_create_alunos_table', 1),
('2015_11_12_183300_create_coordenadors_table', 1),
('2015_11_12_183313_create_professors_table', 1),
('2015_12_12_035657_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` char(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `professor`
--

INSERT INTO `professor` (`codigo`, `nome`, `email`, `nascimento`, `sexo`) VALUES
(1, 'Fernanda Floriano', 'fer_uk2000@yahoo.co.uk', '1985-10-05', 'Feminino'),
(2, 'William Araujo de Oliveira', 'william.eter@gmail.com', '1985-04-03', 'Masculino'),
(3, 'Agelica Souto', 'angelicalopes.souto@gmail.com', '1982-03-06', 'Feminino');

-- --------------------------------------------------------

--
-- Estrutura para tabela `resposta_avaliacao`
--

CREATE TABLE IF NOT EXISTS `resposta_avaliacao` (
  `codigo` int(11) NOT NULL,
  `resposta1` varchar(15) CHARACTER SET utf8 NOT NULL,
  `resposta2` varchar(15) CHARACTER SET utf8 NOT NULL,
  `resposta3` varchar(15) CHARACTER SET utf8 NOT NULL,
  `resposta4` varchar(15) CHARACTER SET utf8 NOT NULL,
  `resposta5` varchar(15) CHARACTER SET utf8 NOT NULL,
  `resposta6` varchar(15) CHARACTER SET utf8 NOT NULL,
  `resposta7` varchar(15) CHARACTER SET utf8 NOT NULL,
  `resposta8` varchar(15) CHARACTER SET utf8 NOT NULL,
  `resposta9` varchar(15) CHARACTER SET utf8 NOT NULL,
  `resposta10` varchar(15) CHARACTER SET utf8 NOT NULL,
  `resposta11` varchar(15) CHARACTER SET utf8 NOT NULL,
  `resposta12` varchar(15) CHARACTER SET utf8 NOT NULL,
  `resposta13` varchar(15) CHARACTER SET utf8 NOT NULL,
  `resposta14` varchar(15) CHARACTER SET utf8 NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci,
  `aluno_codigo` int(11) NOT NULL,
  `codigo_disciplina_professor` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `resposta_avaliacao`
--

INSERT INTO `resposta_avaliacao` (`codigo`, `resposta1`, `resposta2`, `resposta3`, `resposta4`, `resposta5`, `resposta6`, `resposta7`, `resposta8`, `resposta9`, `resposta10`, `resposta11`, `resposta12`, `resposta13`, `resposta14`, `comentario`, `aluno_codigo`, `codigo_disciplina_professor`) VALUES
(1, 'Quase Sempre', 'Nunca', 'Não', 'Sim', 'Sim', 'Sim', 'Precisa Melhora', 'Raramente', 'Sim', 'Quase Sempre', 'Sim', 'Precisa Melhora', 'Algumas Vezes', 'Sim', 'muito ruim', 1, 6),
(3, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', '', 1, 4),
(5, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', '', 1, 7),
(6, 'Sim', 'Sim', 'Sim', 'Sim', 'Quase Sempre', 'Quase Sempre', 'Sim', 'Quase Sempre', 'Sim', 'Sim', 'Sim', 'Algumas Vezes', 'Sim', 'Algumas Vezes', 'Excelente professor!', 2, 6),
(7, 'Raramente', 'Precisa Melhora', 'Algumas Vezes', 'Sim', 'Não', 'Algumas Vezes', 'Sim', 'Raramente', 'Nunca', 'Não', 'Algumas Vezes', 'Quase Sempre', 'Nunca', 'Algumas Vezes', '', 11, 6),
(8, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', '', 12, 6),
(9, 'Sim', 'Quase Sempre', 'Sim', 'Sim', 'Algumas Vezes', 'Sim', 'Não', 'Raramente', 'Sim', 'Algumas Vezes', 'Não', 'Precisa Melhora', 'Sim', 'Sim', '', 1, 1),
(10, 'Sim', 'Quase Sempre', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Quase Sempre', 'Quase Sempre', 'Sim', 'Sim', 'Sim', '', 1, 5),
(11, 'Sim', 'Sim', 'Sim', 'Quase Sempre', 'Sim', 'Sim', 'Sim', 'Quase Sempre', 'Sim', 'Quase Sempre', 'Sim', 'Sim', 'Sim', 'Sim', '', 1, 8),
(13, 'Sim', 'Sim', 'Sim', 'Precisa Melhora', 'Sim', 'Quase Sempre', 'Sim', 'Precisa Melhora', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', '', 1, 9),
(14, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Raramente', 'Sim', 'Quase Sempre', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', '', 2, 9),
(17, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', '', 1, 3),
(18, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', '', 2, 5),
(19, 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', '', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `codigo` int(11) NOT NULL,
  `turno` varchar(45) CHARACTER SET utf8 NOT NULL,
  `periodo` char(6) CHARACTER SET utf8 NOT NULL,
  `curso_codigo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `turma`
--

INSERT INTO `turma` (`codigo`, `turno`, `periodo`, `curso_codigo`) VALUES
(1, 'Noite', '2015.2', 1),
(2, 'Noite', '2015.2', 2),
(3, 'Noite', '2015.2', 3),
(4, 'Noite', '2015.2', 4),
(5, 'Noite', '2015.2', 5),
(6, 'Noite', '2015.2', 6),
(7, 'Noite', '2015.2', 7),
(8, 'Noite', '2015.2', 8),
(9, 'Noite', '2015.2', 9),
(10, 'Manhã', '2015.2', 1),
(11, 'Tarde', '2015.2', 1),
(12, 'Manhã', '2015.2', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `tipo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ivanielson Cabral Galdino', 'ivanielson2011@gmail.com', '$2y$10$5XRwJNDTuS/3CJVaoLfd7e.XTyCmkmMYKfIhJ/y6qqrIgZg0SCWcy', 'Aluno', '6d9XnKrpKQHXPQy1zTCjjZ1z9xGoOUiIMKm2wdTfUM61HigBQRrHfVQJBZmo', '2015-12-04 18:20:27', '2017-02-18 02:34:12'),
(2, 'Ivanielson Cabral', 'ivanielson2011@hotmail.com', '$2y$10$1Gkt5DnIfM3Syy3MJw6IFeNY3xTZ529.wiXbzxfJmcHzGiiuE5I/W', 'Professor', 'erAWSZtPLZgxzQqGGMX7tdIchB3zJWsMSphKIHU4W7HZ9vrSNPiR0rnAYajY', '2015-12-04 23:13:09', '2015-12-22 23:11:01'),
(3, 'André Francisco', 'andrefvfrancisco@gmail.com', '$2y$10$74TvTfmGFb7ZRQXeTs8rVOXcQVkGOFSAhIYoqimL1nlltO39GgTmy', 'Aluno', 'SNDkTzvb12pK572iDu4rRKDfvKr7V0ExFxn7dCJIPfUNAZ79QqBLaTau7hib', '2015-12-14 21:37:29', '2017-02-18 02:35:07'),
(4, 'Saulo Artur', 'sauloartur@hotmail.com', '$2y$10$Euzhc0iBpCdzwz51dX0IvOzeXdS2HLQzHCTMvau/vpeU9BkS7.98q', 'Aluno', 'ObX1DgJ51XWMe69qfYUnrVCfQb20A3EFrbDdHei9xzbOBerkgcouexObXmg5', '2015-12-14 21:42:08', '2015-12-14 21:44:00'),
(7, 'Aldenir', 'aldenir@eter.org.br', '$2y$10$4brMpR2RkdNMvfFQ3D4kGegxYgJ878DDFjuE49GQq51Q5FAD302EW', 'Coordenador', 'eMOv60IHkjdidYbiVA9kyGs2xLSHp7y0MB9hzcuuVXZ9wKy3ToBI6hBTIIsn', '2015-12-18 17:14:03', '2017-02-22 20:04:01'),
(8, 'Rodolfo Lima', 'rodolfo@gmail.com', '$2y$10$c7a.enH4QyzDGvDaIwft5uY3.UfwAcuxg867lBF//YHv.gVSQa8Py', 'Aluno', 's9EZBm29IXdlLED1GbZ2w7KpQmOwtjp7f8FMdT4iOHfskwDeGiXLVtPGTUpj', '2015-12-22 04:58:58', '2015-12-22 05:02:20'),
(9, 'William Araújo', 'william.eter@gmail.com', '$2y$10$.LpfjTTjq6QlWHBtU3s9RuweRTBLgGARxd9.ZI0mcjHH9Qch.GK1i', 'Professor', 'a769kzg0BAWN6PMRwvqjlFb6bqvgUIH62esEdnyXBwn2QsaHvG1o1exLc7mi', '2015-12-22 05:02:59', '2017-02-22 20:06:20');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`codigo`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `email_2` (`email`), ADD UNIQUE KEY `email_3` (`email`), ADD KEY `fk_turma` (`turma_codigo`);

--
-- Índices de tabela `coordenador`
--
ALTER TABLE `coordenador`
  ADD PRIMARY KEY (`codigo`), ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`codigo`), ADD KEY `fk_coordenador` (`coordenador_codigo`);

--
-- Índices de tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`codigo`), ADD KEY `fk_curso_dis` (`curso_codigo`);

--
-- Índices de tabela `disciplina_has_professor`
--
ALTER TABLE `disciplina_has_professor`
  ADD PRIMARY KEY (`codigo_disciplina_professor`), ADD KEY `fk_disciplina_has_professor_professor1_idx` (`professor_codigo`), ADD KEY `fk_disciplina_has_professor_disciplina1_idx` (`disciplina_codigo`), ADD KEY `fk_disciplina_has_professor_turma1_idx` (`turma_codigo`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Índices de tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`codigo`), ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `resposta_avaliacao`
--
ALTER TABLE `resposta_avaliacao`
  ADD PRIMARY KEY (`codigo`), ADD UNIQUE KEY `resposta_aluno` (`aluno_codigo`,`codigo_disciplina_professor`), ADD KEY `fk_avaliacao_aluno1_idx` (`aluno_codigo`), ADD KEY `fk_avaliacao_disciplina_has_professor1_idx` (`codigo_disciplina_professor`);

--
-- Índices de tabela `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Índices de tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`codigo`), ADD KEY `fk_curso` (`curso_codigo`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de tabela `coordenador`
--
ALTER TABLE `coordenador`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de tabela `disciplina_has_professor`
--
ALTER TABLE `disciplina_has_professor`
  MODIFY `codigo_disciplina_professor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `resposta_avaliacao`
--
ALTER TABLE `resposta_avaliacao`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `aluno`
--
ALTER TABLE `aluno`
ADD CONSTRAINT `fk_turma` FOREIGN KEY (`turma_codigo`) REFERENCES `turma` (`codigo`);

--
-- Restrições para tabelas `curso`
--
ALTER TABLE `curso`
ADD CONSTRAINT `fk_coordenador` FOREIGN KEY (`coordenador_codigo`) REFERENCES `coordenador` (`codigo`);

--
-- Restrições para tabelas `disciplina`
--
ALTER TABLE `disciplina`
ADD CONSTRAINT `fk_curso_dis` FOREIGN KEY (`curso_codigo`) REFERENCES `curso` (`codigo`);

--
-- Restrições para tabelas `disciplina_has_professor`
--
ALTER TABLE `disciplina_has_professor`
ADD CONSTRAINT `fk_disciplina_has_professor_disciplina1` FOREIGN KEY (`disciplina_codigo`) REFERENCES `disciplina` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_disciplina_has_professor_professor1` FOREIGN KEY (`professor_codigo`) REFERENCES `professor` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_disciplina_has_professor_turma1` FOREIGN KEY (`turma_codigo`) REFERENCES `turma` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `resposta_avaliacao`
--
ALTER TABLE `resposta_avaliacao`
ADD CONSTRAINT `fk_avaliacao_aluno1` FOREIGN KEY (`aluno_codigo`) REFERENCES `aluno` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_avaliacao_disciplina_has_professor1` FOREIGN KEY (`codigo_disciplina_professor`) REFERENCES `disciplina_has_professor` (`codigo_disciplina_professor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `turma`
--
ALTER TABLE `turma`
ADD CONSTRAINT `fk_curso` FOREIGN KEY (`curso_codigo`) REFERENCES `curso` (`codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
