-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jun-2022 às 02:55
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conversas`
--

CREATE TABLE `conversas` (
  `cod_conversa` int(11) NOT NULL,
  `usuario` longtext NOT NULL,
  `destino` varchar(100) NOT NULL,
  `conversa` longtext NOT NULL,
  `dt_hora` datetime NOT NULL,
  `time` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emoticons`
--

CREATE TABLE `emoticons` (
  `cod_emoticon` int(11) NOT NULL,
  `caminho` varchar(255) NOT NULL,
  `flg_ativo` int(11) NOT NULL,
  `atalho` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `emoticons`
--

INSERT INTO `emoticons` (`cod_emoticon`, `caminho`, `flg_ativo`, `atalho`) VALUES
(4, 'beer_mug.bmp', 1, '[beer]'),
(5, 'crego.bmp', 1, '[bb]'),
(6, 'icon1.bmp', 1, '[sorriso]'),
(7, 'icon10.bmp', 1, '[mala]'),
(8, 'icon11.bmp', 1, '[direita]'),
(9, 'icon12.bmp', 1, '[amor]'),
(10, 'icon13.bmp', 1, '[atencao]'),
(11, 'icon14.bmp', 1, '[duvida]'),
(12, 'icon15.bmp', 1, '[alegre]'),
(13, 'icon16.bmp', 1, '[bobo]'),
(14, 'icon17.bmp', 1, '[feliz]'),
(15, 'icon18.bmp', 1, '[lingua]'),
(16, 'icon19.bmp', 1, '[triste]'),
(17, 'icon2.bmp', 1, '[desconfiado]'),
(18, 'icon20.bmp', 1, '[feliz2]'),
(19, 'icon21.bmp', 1, '[feliz3]'),
(20, 'icon22.bmp', 1, '[pirata]'),
(21, 'icon23.bmp', 1, '[choro]'),
(23, 'icon25.bmp', 1, '[triste2]'),
(24, 'icon26.bmp', 1, '[timido]'),
(25, 'icon27.bmp', 1, '[ninja]'),
(26, 'icon28.bmp', 1, '[nerd]'),
(27, 'icon29.bmp', 1, '[do]'),
(28, 'icon3.bmp', 1, '[sono]'),
(29, 'icon30.bmp', 1, '[feliz1]'),
(30, 'icon31.bmp', 1, '[zangado]'),
(31, 'icon32.bmp', 1, '[espanto]'),
(32, 'icon33.bmp', 1, '[espanto2]'),
(33, 'icon34.bmp', 1, '[assovio]'),
(34, 'icon35.bmp', 1, '[ok]'),
(35, 'icon36.bmp', 1, '[bad]'),
(36, 'icon37.bmp', 1, '[alegre1]'),
(37, 'icon38.bmp', 1, '[alegre2]'),
(38, 'icon39.bmp', 1, '[confuso]'),
(39, 'icon4.bmp', 1, '[bobo1]'),
(40, 'icon40.bmp', 1, '[aff]'),
(41, 'icon41.bmp', 1, '[do1]'),
(42, 'icon42.bmp', 1, '[capeta]'),
(43, 'icon43.bmp', 1, '[do2]'),
(44, 'icon45.bmp', 1, '[aff1]'),
(45, 'icon49.bmp', 1, '[aff2]'),
(46, 'icon5.bmp', 1, '[espanto1]'),
(47, 'icon52.bmp', 1, '[feliz4]'),
(48, 'icon56.bmp', 1, '[serio1]'),
(49, 'icon57.bmp', 1, '[bjo]'),
(50, 'icon6.bmp', 1, '[alegre3]'),
(51, 'icon60.bmp', 1, '[espanto3]'),
(52, 'icon61.bmp', 1, '[segredo]'),
(53, 'icon65.bmp', 1, '[duvida1]'),
(54, 'icon7.bmp', 1, '[bravo]'),
(55, 'icon72.bmp', 1, '[zangado1]'),
(56, 'icon8.bmp', 1, '[malestar]'),
(57, 'icon9.bmp', 1, '[triste3]'),
(58, 'icon99.bmp', 1, '[:O]'),
(59, 'martini.bmp', 1, '[martini]'),
(60, 'rockin.bmp', 1, '[rockin]'),
(61, 'rockinr.bmp', 1, '[rockinrow]'),
(62, 'thumbs_down.bmp', 1, '[negativo]'),
(63, 'thumbs_up.bmp', 1, '[positivo]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `online`
--

CREATE TABLE `online` (
  `cod_online` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(10) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `descricao`) VALUES
(1, 'Vítima'),
(2, 'Advogada'),
(3, 'Agente Social'),
(4, 'Psicóloga'),
(5, 'Terapeuta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` longtext NOT NULL,
  `dt_ult_acesso` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `conversas`
--
ALTER TABLE `conversas`
  ADD PRIMARY KEY (`cod_conversa`);

--
-- Índices para tabela `emoticons`
--
ALTER TABLE `emoticons`
  ADD PRIMARY KEY (`cod_emoticon`),
  ADD UNIQUE KEY `caminho` (`caminho`),
  ADD UNIQUE KEY `caminho_2` (`caminho`),
  ADD UNIQUE KEY `caminho_3` (`caminho`),
  ADD UNIQUE KEY `atalho` (`atalho`);

--
-- Índices para tabela `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`cod_online`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conversas`
--
ALTER TABLE `conversas`
  MODIFY `cod_conversa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `emoticons`
--
ALTER TABLE `emoticons`
  MODIFY `cod_emoticon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `online`
--
ALTER TABLE `online`
  MODIFY `cod_online` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1460;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
