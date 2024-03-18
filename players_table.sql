-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Mar-2024 às 14:08
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
-- Banco de dados: `user`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `players_table`
--

CREATE TABLE `players_table` (
  `id` int(10) NOT NULL,
  `u_name` text NOT NULL,
  `u_level` int(10) NOT NULL,
  `u_exp` int(10) NOT NULL,
  `u_gold` int(8) NOT NULL,
  `u_strScore` int(3) NOT NULL,
  `u_dexScore` int(3) NOT NULL,
  `u_wisScore` int(3) NOT NULL,
  `u_conScore` int(3) NOT NULL,
  `u_chaScore` int(3) NOT NULL,
  `u_intScore` int(3) NOT NULL,
  `u_agiScore` int(3) NOT NULL,
  `u_l_name` text NOT NULL,
  `u_race` varchar(20) NOT NULL,
  `u_class` varchar(20) NOT NULL,
  `u_a_hp` int(10) NOT NULL,
  `u_t_hp` int(10) NOT NULL,
  `u_a_est` int(10) NOT NULL,
  `u_t_est` int(10) NOT NULL,
  `u_birthday` text NOT NULL,
  `u_gender` varchar(6) NOT NULL,
  `u_helm` text NOT NULL DEFAULT 'Nenhum',
  `u_helmdef` int(12) NOT NULL,
  `u_helmdur` int(12) NOT NULL,
  `u_armor` text NOT NULL DEFAULT 'Nenhum',
  `u_armordef` int(12) NOT NULL,
  `u_armordur` int(12) NOT NULL,
  `u_arms` text NOT NULL DEFAULT 'Nenhum',
  `u_armsdef` int(12) NOT NULL,
  `u_armsdur` int(12) NOT NULL,
  `u_legs` text NOT NULL DEFAULT 'Nenhum',
  `u_legsdef` int(12) NOT NULL,
  `u_legsdur` int(12) NOT NULL,
  `u_righthand` text NOT NULL DEFAULT 'Nenhum',
  `u_righthandnum` text NOT NULL,
  `u_righthanddur` int(12) NOT NULL,
  `u_lefthand` text NOT NULL DEFAULT 'Nenhum',
  `u_lefthandnum` text NOT NULL,
  `u_lefthanddur` int(12) NOT NULL,
  `u_extraequip` text NOT NULL,
  `u_extraequipnum` text NOT NULL,
  `u_extraequipdur` int(12) NOT NULL,
  `u_dist` text NOT NULL,
  `u_village` text NOT NULL,
  `file` longblob NOT NULL,
  `staff_id` varchar(12) NOT NULL,
  `image` varchar(150) NOT NULL,
  `uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `players_table`
--

INSERT INTO `players_table` (`id`, `u_name`, `u_level`, `u_exp`, `u_gold`, `u_strScore`, `u_dexScore`, `u_wisScore`, `u_conScore`, `u_chaScore`, `u_intScore`, `u_agiScore`, `u_l_name`, `u_race`, `u_class`, `u_a_hp`, `u_t_hp`, `u_a_est`, `u_t_est`, `u_birthday`, `u_gender`, `u_helm`, `u_helmdef`, `u_helmdur`, `u_armor`, `u_armordef`, `u_armordur`, `u_arms`, `u_armsdef`, `u_armsdur`, `u_legs`, `u_legsdef`, `u_legsdur`, `u_righthand`, `u_righthandnum`, `u_righthanddur`, `u_lefthand`, `u_lefthandnum`, `u_lefthanddur`, `u_extraequip`, `u_extraequipnum`, `u_extraequipdur`, `u_dist`, `u_village`, `file`, `staff_id`, `image`, `uploaded`) VALUES
(104, 'Hofnir', 1, 0, 500, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, '', 'Homem', 'Nenhum', 0, 0, 'Nenhum', 0, 0, 'Nenhum', 0, 0, 'Nenhum', 0, 0, 'Nenhum', '', 0, 'Nenhum', '', 0, '', '', 0, '', '', '', '', '', '2024-03-17 14:38:14'),
(105, 'Juan', 7, 10000, 500, 16, 13, 12, 12, 12, 14, 14, '', 'Humano', 'Homem de Armas', 20, 20, 20, 20, '2024-03-08', 'Homem', 'Capuz blindado', 14, 3, 'Jaquetao de Tecido duplo', 8, 3, 'Braceiras de tecido duplo', 8, 3, 'Calcas lyrianas de couro', 16, 3, 'Espada Longa de Ferro', '2d6+2', 10, '', '', 0, '', '', 0, 'test', '', '', '', 'juan1.jpg', '2022-08-23 22:14:30'),
(110, 'Lilith', 1, 355, 500, 10, 10, 10, 10, 10, 10, 10, '', 'Elfo', 'Mago', 50, 50, 67, 67, '', 'Mulher', 'Capuz de Arqueiro de Verden', 0, 0, 'Jaquetao', 0, 0, 'Braceiras da cavalaria', 0, 0, 'Calcas de cavalaria', 0, 0, 'Nenhum', '', 0, '', '', 0, '', '', 0, '', '', '', '', 'token_1 (3).png', '2024-03-17 14:39:17');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `players_table`
--
ALTER TABLE `players_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `players_table`
--
ALTER TABLE `players_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
