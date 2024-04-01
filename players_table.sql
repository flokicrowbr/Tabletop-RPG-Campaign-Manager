-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de gera��o: 01-Abr-2024 �s 18:33
-- Vers�o do servidor: 10.4.21-MariaDB
-- vers�o do PHP: 8.0.10

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
-- Estrutura da tabela `item_db`
--

CREATE TABLE `item_db` (
  `item_id` int(10) NOT NULL,
  `item_name` text NOT NULL,
  `item_price` int(11) DEFAULT NULL,
  `item_type` text DEFAULT NULL,
  `item_weight` int(11) DEFAULT NULL,
  `item_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `u_strScore` int(3) NOT NULL DEFAULT 10,
  `u_dexScore` int(3) NOT NULL DEFAULT 10,
  `u_wisScore` int(3) NOT NULL DEFAULT 10,
  `u_conScore` int(3) NOT NULL DEFAULT 10,
  `u_chaScore` int(3) NOT NULL DEFAULT 10,
  `u_intScore` int(3) NOT NULL DEFAULT 10,
  `u_agiScore` int(3) NOT NULL DEFAULT 10,
  `u_strCoef` int(3) NOT NULL,
  `u_dexCoef` int(3) NOT NULL,
  `u_wisCoef` int(3) NOT NULL,
  `u_conCoef` int(3) NOT NULL,
  `u_chaCoef` int(3) NOT NULL,
  `u_intCoef` int(3) NOT NULL,
  `u_agiCoef` int(3) NOT NULL,
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

INSERT INTO `players_table` (`id`, `u_name`, `u_level`, `u_exp`, `u_gold`, `u_strScore`, `u_dexScore`, `u_wisScore`, `u_conScore`, `u_chaScore`, `u_intScore`, `u_agiScore`, `u_strCoef`, `u_dexCoef`, `u_wisCoef`, `u_conCoef`, `u_chaCoef`, `u_intCoef`, `u_agiCoef`, `u_l_name`, `u_race`, `u_class`, `u_a_hp`, `u_t_hp`, `u_a_est`, `u_t_est`, `u_birthday`, `u_gender`, `u_helm`, `u_helmdef`, `u_helmdur`, `u_armor`, `u_armordef`, `u_armordur`, `u_arms`, `u_armsdef`, `u_armsdur`, `u_legs`, `u_legsdef`, `u_legsdur`, `u_righthand`, `u_righthandnum`, `u_righthanddur`, `u_lefthand`, `u_lefthandnum`, `u_lefthanddur`, `u_extraequip`, `u_extraequipnum`, `u_extraequipdur`, `u_dist`, `u_village`, `file`, `staff_id`, `image`, `uploaded`) VALUES
(104, 'Hofnir', 2, 381, 537, 14, 13, 11, 14, 9, 10, 13, 2, 1, 0, 2, -1, 0, 1, '', 'Bruxo', 'Bruxo', 62, 62, 35, 60, '', 'Homem', 'Nenhum', 0, 0, 'Armadura de Gato', 14, 10, 'Armadura de Gato', 6, 6, 'Armadura de Gato', 6, 6, 'Espada de Prata de Bruxo', '1d6+2 (Prata 3d6)', 10, 'Nenhum', '', 0, '', '', 0, '', '', '', '', 'token_1 (2).png', '2024-03-17 14:38:14'),
(105, 'Juan', 7, 10000, 500, 16, 13, 12, 12, 12, 14, 14, 0, 0, 0, 0, 0, 0, 0, '', 'Humano', 'Homem de Armas', 20, 20, 20, 20, '2024-03-08', 'Homem', 'Capuz blindado', 14, 3, 'Jaquetao de Tecido duplo', 8, 3, 'Braceiras de tecido duplo', 8, 3, 'Calcas lyrianas de couro', 16, 3, 'Espada Longa de Ferro', '2d6+2', 10, '', '', 0, '', '', 0, 'test', '', '', '', 'juan1.jpg', '2022-08-23 22:14:30'),
(110, 'Lilith', 2, 344, 320, 14, 9, 10, 10, 10, 10, 10, 2, -1, 0, 0, 0, 0, 0, '', 'Elfo', 'Mago', 50, 50, 47, 67, '', 'Mulher', 'Nenhum', 0, 0, 'Nenhum', 0, 0, 'Nenhum', 0, 0, 'Nenhum', 0, 0, 'Arco Curto', '3d6+3 (10m)', 2, '', '', 0, '', '', 0, '', '', '', '', 'token_1 (3).png', '2024-03-17 14:39:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `player_skill`
--

CREATE TABLE `player_skill` (
  `entry_id` int(11) NOT NULL,
  `player_id` int(11) DEFAULT NULL,
  `skill_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `player_skill`
--

INSERT INTO `player_skill` (`entry_id`, `player_id`, `skill_id`) VALUES
(1, 104, 1),
(2, 104, 3),
(3, 104, 4),
(4, 105, 5),
(17, 110, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `skill_db`
--

CREATE TABLE `skill_db` (
  `id` int(10) NOT NULL,
  `skill_name` text NOT NULL,
  `skill_dmg` text DEFAULT NULL,
  `skill_est_cost` int(11) DEFAULT NULL,
  `skill_lv` text DEFAULT NULL,
  `skill_def` text DEFAULT NULL,
  `skill_duration` text DEFAULT NULL,
  `skill_range` text DEFAULT NULL,
  `skill_act_type` text DEFAULT NULL,
  `skill_element` text DEFAULT NULL,
  `skill_class` text DEFAULT NULL,
  `skill_description` text DEFAULT NULL,
  `skill_effect` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `skill_db`
--

INSERT INTO `skill_db` (`id`, `skill_name`, `skill_dmg`, `skill_est_cost`, `skill_lv`, `skill_def`, `skill_duration`, `skill_range`, `skill_act_type`, `skill_element`, `skill_class`, `skill_description`, `skill_effect`) VALUES
(1, 'Cenlly Graig', '1d6', 5, 'Iniciante', 'Esquivar/Bloquear', 'imediata', '5m', 'Principal', 'Terra', 'Mago', 'Cenlly Graig arremessa pedras afiadas contra o seu oponente. Por cada ponto obtido acima da defesa de seu oponente (m�ximo de 10), voc�\r\nprovoca 1d6 de dano. Cada jogada conta como o seu pr�prio ataque.', '* Lan�ar Magia acima do valor de Resistir � Magia do alvo (M�ximo de 10)'),
(2, 'Espelho de Afan', '', 3, 'Iniciante', 'Nenhuma', 'ativo (2 EST)', '10m', 'Jogada Bonus', 'Misturado', 'Mago', 'criado pelo talentoso mago de Aedirn, Afan de Gulet, o espelho de Afan cria 1d10 c�pias ilus�rias de quem conjurou. Essas c�pias s�o intang�veis,\r\nmas iguais ao conjurador e controladas pela mente. Controlar as c�pias n�o requer uma a��o e elas n�o podem ir al�m do alcance do feiti�o.', ''),
(3, 'P� para Cegar', '', 3, 'Iniciante', 'Esquivar/Bloquear', '1d10 rodadas', '4m', 'Principal', 'Misturado', 'Mago', 'p� para cegar permite a voc� arremessar um p� m�gico nos olhos de seu alvo, o que o cega enquanto durar o feiti�o.', ''),
(4, 'Desfazer', '', 0, 'Iniciante', 'Nenhuma', 'imediata', '10m', 'Hibrido', 'Misturado', 'Mago', 'Desfazer permite que voc� anule um feiti�o/ritual/hex dentro do alcance do feiti�o Desfazer.\r\nEste feiti�o pode ser lan�ado como a��o defensiva\r\npara bloquear ataques m�gicos com ou sem componentes f�sicos. Para cancelar um efeito m�gico, voc� deve gastar metade dos pontos de Estamina que o\r\noponente usou para conjurar a magia e fazer uma jogada de Lan�ar Feiti�os que derrote a jogada dele.', 'Pode ser usada como a��o principal/bonus/defesa'),
(5, 'Glamour', '', 5, 'Iniciante', 'Nenhuma', '1d6 horas', 'voc� mesmo', 'Jogada Bonus', 'Misturado', 'Mago', 'Glamour permite a voc� lan�ar uma ilus�o � sua volta que o faz parecer muito bonito.', 'Este feiti�o lhe d� +3 em Sedu��o, Carisma e Lideran�a.'),
(6, 'B�ssola M�gica', '', 3, 'Iniciante', 'Nenhuma', '1d6 horas', 'voc� mesmo', 'Jogada Bonus', 'Misturado', 'Mago', 'a b�ssola m�gica permite a voc� determinar instantaneamente a dire��o de algum lugar j� visitado. Pode tamb�m indicar onde fica o Norte.', ''),
(7, 'Manipula��o da Mente', '', 3, 'Iniciante', 'Resistir Magia', '1d10 rodadas', '5m', 'Jogada Bonus', 'Misturado', 'Mago', 'a manipula��o da mente permite a voc� for�ar um alvo a sentir uma das seguintes emo��es: �dio, amor, depress�o ou euforia enquanto durar\r\no feiti�o.', ''),
(8, 'Invocar Cajado', '', 2, 'Iniciante', 'Nenhuma', 'imediata', 'voc� mesmo', 'Jogada Bonus', 'Misturado', 'Mago', 'invocar cajado permite a voc� desmaterializar o seu cajado e transport�-lo para algum lugar que visitou ou por perto de voc�. Voc� pode\r\nlan�ar o feiti�o novamente para invocar o cajado de volta.', ''),
(9, 'Telepatia', '', 2, 'Iniciante', 'Nenhuma', 'ativo (1 EST)', '10m', 'Jogada Bonus', 'Misturado', 'Mago', 'a telepatia permite a voc� se comunicar telepaticamente com outra pessoa, enquanto durar o feiti�o. A telepatia cruza as barreiras idiom�ticas.', ''),
(10, 'Codi Bywyd', '', 2, 'Iniciante', 'Nenhuma', 'imediata', '4m', 'Jogada Bonus', 'Terra', 'Mago', 'Codi Bywyd faz crescer uma planta pequena desde a semente at� a maturidade em um turno. Isso permite que voc� cultive ervas e plantas\r\nalqu�micas, mas n�o permite plantas maiores como �rvores.', ''),
(11, 'Adenydd', '', 4, 'Iniciante', 'Nenhuma', 'ativa (2 EST)', 'voc� mesmo', 'Jogada Bonus', 'Ar', 'Mago', 'Adenydd permite a voc� ficar um pouco mais leve e ter a capacidade de planar enquanto em queda. Isso significa que para cada 2m de queda, voc�\r\nviaja 2m em uma dire��o. Se voc� chegar ao ch�o antes do feiti�o terminar, voc� n�o sofre dano.', ''),
(12, 'Aenye', '4d6', 5, 'Iniciante', 'Esquivar/Bloquear', 'imediata', '12m', 'Principal', 'Fogo', 'Mago', 'Aenye permite que voc� arremesse uma bola de puro fogo contra um oponente no alcance do feiti�o. Essa bola de fogo provoca 4d6 de dano.\r\n', 'Tem uma chance de 75% de p�r fogo no alvo.'),
(13, 'Granizo de Carys', '1d6', 3, 'Iniciante', 'Esquivar/Bloquear', 'imediata', '5m', 'Principal', 'Agua', 'Mago', 'Assim chamado em homenagem ao seu criador, Carys de Cintra, este feiti�o atira pequenas esferas de gelo em alta velocidade em 1 oponente. A cada\r\n1 ponto obtido acima do valor de Esquivar/Bloquear de seu oponente (m�ximo 5), voc� faz 1d6 de dano e tem uma chance de 25% de congelar o seu\r\noponente.', 'Cada jogada conta como um ataque separado ao determinar local e dano causado.'),
(14, 'Feiti�o de Diagn�stico', '', 3, 'Iniciante', 'Nenhuma', 'imediata', '5m', 'Jogada Bonus', 'Terra', 'Mago', 'o feiti�o de diagn�stico permite que voc� avalie rapidamente a Vitalidade de algu�m e determine quantos Pontos de Vida ainda tem, quais\r\nferimentos cr�ticos possui e se est� doente ou envenenado.', ''),
(15, 'Espinho de Barro', '5d6', 5, 'Iniciante', 'Esquivar/Bloquear', 'imediata', '6m', 'Principal', 'Terra', 'Mago', 'o espinho de barro cria uma estalagmite para perfurar o alvo. Esse espinho provoca 5d6 de dano e permanece at� ser destru�do. Pode ser\r\ndestru�do com 20 pontos de dano.', ''),
(16, 'Sopro de Korath', '3d6', 2, 'Iniciante', 'Esquivar/Bloquear', 'imediata', 'cone de 3m', 'Principal', 'Terra', 'Mago', 'o sopro de Korath quebra uma pedra pr�xima ou superf�cie de terra e dispara areia quente num cone de 3m � sua frente. ', 'Os oponentes\r\nnessa �rea que falharem em sua defesa ficam cegos por 1d6 rodadas.'),
(17, 'Pena de Luthien', '', 2, 'Iniciante', 'Nenhuma', 'imediata', '.', 'Jogada Bonus', 'Terra', 'Mago', 'chamada assim em homenagem ao seu inventor, Luthien de Ebbing, a pena de Luthien pode escrever ou desenhar em qualquer superf�cie\r\ns�lida.', ''),
(18, 'Cura M�gica', '', 10, 'Iniciante', 'Nenhuma', 'imediata', '2m', 'Jogada Bonus', 'Terra', 'Mago', 'a cura m�gica estimula a cura natural de um alvo numa taxa de 3 + Coeficiente Intelig�ncia + 1d6 Isso dura at� terminar o feiti�o. Pode ser usado\r\ntamb�m repetidamente para curar um ferimento cr�tico.', ''),
(19, 'Pris�o de Talfryn', '', 3, 'Iniciante', 'Esquivar', 'at� ser destruido', '10m', 'Jogada Bonus', 'Terra', 'Mago', 'a pris�o de Talfryn ganhou este nome por causa de Talfryn de Nazair, um cavaleiro trai�oeiro que foi aprisionado por tr�s dias no jardim do\r\nmago Drystan. O feiti�o permite a voc� prender o alvo com ra�zes. As ra�zes aguentam 15 pontos de dano at� romperem. ', 'Um teste de Esquivar/Escapar deve ser feito num ND igual ao seu teste original de Lan�ar Feiti�os para escapar.'),
(20, 'Bolsa de Ar', '', 3, 'Iniciante', 'Nenhuma', 'imediata', '5m', 'Jogada Bonus', 'Ar', 'Mago', 'a bolsa de ar permite que voc� crie um bols�o de ar fresco em baixo da �gua ou numa �rea onde normalmente n�o h� ar puro. A bolsa\r\ntem um raio de 1m enquanto durar o feiti�o.', ''),
(21, 'Sopro de Bronwyn', '1d6', 2, 'Iniciante', 'Esquivar', 'imediata', '5m', 'Principal', 'Ar', 'Mago', 'o sopro de Bronwyn foi chamado assim em homenagem a um mago e saqueador de Skellige, Bronwyn Certeiro. O feiti�o permite que\r\nderrube um alvo a um n�mero de metros igual ao n�mero de pontos que voc� obteve acima da defesa do oponente. ', 'Este ataque s� provoca 1d6 de dano, mas se o seu oponente acertar alguma coisa, ele sofre dano de colis�o.'),
(22, 'Arejar', '', 2, 'Iniciante', 'Nenhuma', 'ativa (2 EST)', 'raio de 4m', 'Jogada Bonus', 'Ar', 'Mago', 'arejar permite que se limpe de qualquer fuma�a, veneno ou polui��o do ar em uma �rea com raio de 4m (com voc� no centro), enquanto\r\ndurar o feiti�o.', ''),
(23, 'Abrigo de Urien', '', 3, 'Iniciante', 'Nenhuma', '1d6 horas', 'raio de 8m', 'Jogada Bonus', 'Ar', 'Mago', 'o abrigo de Urien, criado pelo mago n�utico do ar, Urien de Cidaris, permite que voc� anule os efeitos extremos do clima num raio de 8m (centrado em voc�). Isso remove calor extremo, frio extremo, chuva e neve.', ''),
(24, 'Tempestade Est�tica', '', 5, 'Iniciante', 'Nenhuma', '2d6 rodadas', 'raio de 5m', 'Principal', 'Ar', 'Mago', 'a tempestade est�tica permite a voc� infundir eletricidade num raio de 5 metros centrado em voc�. Qualquer pessoa nesta �rea (excluindo voc�)\r\nque estiver usando armadura de metal ou carregando armas de metal sofre 2d6 pontos de dano por rodada, caso n�o estiver usando nada met�lico 1d6.', '2d6 por rodada (Com metais) 1d6 por rodada (Sem metais)'),
(25, 'Telecinese', '', 3, 'Iniciante', 'Nenhuma', 'ativa (2 EST)', '5m', 'Hibrido', 'Ar', 'Mago', 'a telecinese permite a voc� erguer e manipular um objeto (at� 5 FAR para cada 1 ponto de Lan�ar Feiti�os) como se o estivesse segurando.', 'O peso do objeto ou poder de dano influencia no dano.'),
(26, 'Z�firo', '1d6', 5, 'Iniciante', 'Nenhuma', 'imediata', '2m', 'Principal', 'Ar', 'Mago', 'o z�firo permite que voc� dispare um golpe de vento que atinge qualquer um a 2m de voc� e empurrando por um n�mero de metros igual ao n�mero\r\nde pontos obtidos acima de sua defesa. Esse ataque s� provoca 1d6 de dano, mas se o seu oponente acertar alguma coisa, ele sofre dano de colis�o.', 'Dano de colis�o adicional 1d6.'),
(27, 'Aine Verseos', '', 1, 'Iniciante', 'Nenhuma', 'ativa (2 EST)', 'raio de 4m', 'Jogada Bonus', 'Fogo', 'Mago', 'Aine Verseos cria uma �rea de luz ofuscante num raio de 4 metros centrado em voc�.', ''),
(28, 'Marca de Fogo', '1d6', 4, 'Iniciante', 'Nenhuma', 'imediata', '8m', 'Principal', 'Fogo', 'Mago', 'a marca de fogo permite que voc� marque um alvo com um s�mbolo simples ou palavra em qualquer parte de seu corpo exposto. Isso provoca\r\n1d6 de dano ao alvo e deixa uma cicatriz grande e permanente.', ''),
(29, 'Tormento de Cadfan', '2d6', 4, 'Iniciante', 'Nenhuma', '1d6 rodadas', '8m', 'Principal', 'Fogo', 'Mago', 'o tormento de Cadfan, assim chamado em homenagem ao mago e ferreiro Cadfan de Ebbing, permite que voc� superaque�a um item de metal\r\nfazendo o portador derrub�-lo ou sofrer 2d6 no membro que estava em contato com o item.', 'O feiti�o pode tamb�m aquecer armas para provocar +2d6 de dano e uma chance de 50% de incendiar um alvo.'),
(30, 'Lampejo M�gico', '', 2, 'Iniciante', 'Resistir Magia', 'imediata', 'raio de 8m', 'Jogada Bonus', 'Fogo', 'Mago', 'o lampejo m�gico cria um flash de luz ofuscante acima de voc�. Todos que estiverem dentro do raio de 8 m devem fazer um teste de Resistir a\r\nMagia ou ficar cego por 1d6 rodadas. ', 'Esse lampejo pode ser visto a 10 quil�metros.'),
(31, 'Erguer Chamas', '1d6 ~ 2d6', 3, 'Iniciante', 'Nenhuma', 'ativa (1 ~ 2 EST) por quadro', '', 'Hibrido', 'Fogo', 'Mago', 'erguer chamas permite que voc� espalhe fogo (se j� houver algum j� no local como fogueiras, tochas,etc) � velocidade de 2m por rodada\r\nem qualquer dire��o, diminuir este fogo para uma chama fraca (baixando o dano de fogo em 1d6), ou intensifica-lo (aumentar o dano de fogo para 2d6).', 'Fogo Baixo: Dano de 1d6 por quadro de fogo ao redor do alvo por turno, e 2d6 no quadro do alvo.\r\n.\r\nFogo Alto: Dano de 2d6 por quadro de fogo ao redor do alvo por turno, e 3d6 no quadro do alvo.\r\nFazer teste de Lan�ar Feiti�o a cada turno para conseguir manter o fogo alto.'),
(32, 'Tanio Ilchar', '3d6', 3, 'Iniciante', 'Esquivar', 'imediata', '8m', 'Principal', 'Fogo', 'Mago', 'Tanio Ilchar cria uma rajada de fogo em uma �rea de 2m por 2m.', 'Tem uma chance de 80% de incendiar um alvo que est� na �rea em chamas.'),
(33, 'Onda de Fogo', '3d6', 4, 'Iniciante', 'Esquivar/Bloquear', 'imediata', 'cone de 3m', 'Principal', 'Fogo', 'Mago', 'a onda de fogo dispara um cone de fogo de 3m em uma dire��o e provoca dano de 3d6 a qualquer um que n�o conseguir esquivar-se ou bloquear. ', 'Tem 50% de chance de incendiar um alvo.'),
(34, 'Controle da �gua', '', 5, 'Iniciante', 'Definido pelo mestre', 'ativa (2 EST)', '10m', 'Jogada Bonus', 'Agua', 'Mago', 'o controle da �gua permite que voc� controle a velocidade com que uma corrente de �gua se move e a dire��o do movimento, enquanto durar o\r\nfeiti�o. Isso pode ser usado para diminuir a velocidade de alvos que nadam pela metade, aumentar a velocidade de navios pela metade, ou atrasar ou cessar\r\ncorrentes de rios.', ''),
(35, 'Maldi��o de Sedna', '', 5, 'Iniciante', 'Esquivar', 'ativa (2 EST)', '12m', 'Jogada Bonus', 'Agua', 'Mago', 'recebeu este nome por causa do turbulento Abismo de Sedna, o qual � considerado um destino suicida para navios, a Maldi��o de Sedna cria um\r\nredemoinho poderoso em uma �rea de 4 metros. Qualquer um que estiver a 5 metros deve fazer um teste de Nadar igual ao seu teste de Lan�ar Feiti�os ou\r\nser� arrastado para baixo da �gua.', 'Essa pessoa deve fazer um teste a cada rodada ou permanece embaixo da �gua, onde come�ar� a sufocar.'),
(36, 'N�voa de Dormyn', '', 3, 'Iniciante', 'Nenhuma', 'ativa (2 EST)', 'raio de 10m', 'Jogada Bonus', 'Agua', 'Mago', 'criado por Dormyn de Gemmera, a n�voa de Dormyn cria uma �rea de n�voa tensa com um raio de 10 metros, com centro em voc�, que faz qualquer\r\num ter -3 em Percep��o e limita o alcance de vis�o a 4 metros.', ''),
(37, 'Aguaceiro', '', 2, 'Iniciante', 'Nenhuma', 'ativa (2 EST)', '8m', 'Jogada Bonus', 'Agua', 'Mago', 'o aguaceiro cria uma �rea de chuva com um raio de 20 metros que apaga qualquer fogo que atingir.', 'Este feiti�o age contra os efeitos de fogo e aumenta o dano de habilidades de raio derivadas de ar.'),
(38, 'Ch�o de Gelo', '', 2, 'Iniciante', 'Esquivar', '2d10 rodadas', '10m', 'Jogada Bonus', 'Agua', 'Mago', 'o ch�o de gelo permite que voc� crie uma �rea de 2 metros quadrados de gelo. Qualquer pessoa que cruzar essa �rea deve fazer um teste de Atletismo\r\nnum ND igual a seu teste de Lan�ar Feiti�os ou vai trope�ar no gelo.', ''),
(39, 'Puro Dwr', '', 2, 'Iniciante', 'Nenhuma', '1d10 rodadas', '4m', 'Jogada Bonus', 'Agua', 'Mago', 'puro dwr permite que voc� purifique 1 metro c�bico de �gua. Isso retira veneno e doen�a, mas n�o for�a coisas vivas a sa�rem. Se for lan�ado em\r\numa pequena parte de um grande corpo de �gua polu�da, a �gua come�ar� a ficar polu�da novamente depois que o feiti�o terminar.', ''),
(40, 'Rhewi', '', 2, 'Iniciante', 'Esquivar', '1d10 rodadas', '8m', 'Jogada Bonus', 'Agua', 'Mago', 'Rhewi cria uma camada grossa de gelo em volta do alvo enquanto durar o feiti�o. O alvo � considerado congelado. Se usado em um alvo n�o vivo, o alvo n�o pode ser manipulado ou movido.', ''),
(41, 'T�cnica de Eilhart', '', 12, 'Profissional', 'Resistir Magia', 'imediata', '3m', 'Jogada Bonus', 'Misturado', 'Mago', 'nomeado em homenagem � sua criadora, Phillipa Eilhart, este feiti�o cruel permite que voc� penetre a mente de seu alvo e arranque informa��es.\r\nSe tiver sucesso em seu teste de Lan�ar Feiti�os, voc� ganha um peda�o de informa��o do alvo. Se o alvo vacilar em sua defesa, a sua INT � reduzida em 1 permanentemente.', ''),
(42, 'Ilus�o', '', 8, 'Profissional', 'Resistir Magia', 'ativo (4 EST)', '20m', 'Jogada Bonus', 'Misturado', 'Mago', 'permite criar qualquer ilus�o visual dentro de um alcance de 20 metros\r\na partir de voc�. Qualquer um que falhar num teste de Resistir a Magia v� a ilus�o\r\ne acredita nela. No entanto a ilus�o n�o pode ser tocada, cheirada ou escutada.', ''),
(43, 'Teletransporte', '', 10, 'Profissional', 'Nenhuma', 'imediata', 'N/C', 'Jogada Bonus', 'Misturado', 'Mago', 'permite que voc� se teletransporte instantaneamente para um local conhecido.\r\nVoc� n�o pode levar outra pessoa junto e s� pode transportar os itens guardados\r\nem voc� ou em suas m�os. Tentar teletransportar com uma pessoa simplesmente\r\ndeixa esta pessoa para tr�s. Teletransporte requer uma jogada de Lan�ar\r\nFeiti�os com ND:15. ', 'Se voc� errar, vai parar num local aleat�rio a 1d10 kms de\r\ndist�ncia.'),
(44, 'Teoria de Elgan', '', 10, 'Profissional', 'Nenhuma', '2d10 rodadas', '8m', 'Jogada Bonus', 'Terra', 'Mago', 'descoberta por Elgan de Verden, que viajou para o cora��o de Mahakam e trabalhou durante anos estudando a magia da terra. O feiti�o permite que voc� magnetize um objeto de metal a 8 metros de dist�ncia. Qualquer coisa de metal a 2m de dist�ncia � atra�da e gruda no objeto magnetizado. � necess�rio um teste de F�sico com ND: 18 para retirar o objeto. Todo metal que grudar em armas ou armaduras de algu�m conta contra o FAR deles.\r\n', ''),
(45, 'Rhwystr Graig', '', 15, 'Profissional', 'Nenhuma', 'at� ser destru�da', '20m', 'Jogada Bonus', 'Terra', 'Mago', 'Rhwystr Graig permite que voc� crie uma parede de pedra de 2m por 3m com 30 pontos de PP em qualquer lugar dentro de 10m em qualquer lado. Essa parede permanece at� ser destru�da.', ''),
(46, 'Terremoto de Stammelford', '', 12, 'Profissional', 'Esquivar', '1d10 rodadas', '30m', 'Jogada Bonus', 'Terra', 'Mago', 'o terremoto de Stammelford permite que voc� fa�a estremecer o ch�o em\r\numa �rea de 10m e crie um terreno dentado e acidentado que faz todo mundo na\r\n�rea ter um -2 em Reflexo e um -3 em MA. Pequenas estruturas sobre o ch�o destru�do tem uma chance de 10% de desmoronar. A cada rodada, uma criatura na �rea do feiti�o deve fazer uma jogada de Atletismo ou afunda no ch�o que desmorona, fazendo-a sufocar at� conseguir sucesso no teste de Atletismo para escapar. Depois que o feiti�o terminar, o ch�o para de tremer, mas permanece destru�do.', ''),
(47, 'Trov�o de Alzur', '8d6', 15, 'Profissional', 'Esquivar', 'imediata', '25m', 'Principal', 'Ar', 'Mago', 'o trov�o de Alzur permite que voc� dispare um poderoso rel�mpago num alvo, provocando 8d6 de dano e uma chance de 75% de p�r fogo no alvo. O trov�o de Alzur consegue viajar em linha reta atrav�s dos alvos. Para cada alvo atravessado, o dano ao pr�ximo alvo diminui em 1d6.', ''),
(48, 'Gwynt Troelli', '', 12, 'Profissional', 'Nenhuma', 'ativo (4 EST)', 'raio de 10m', 'Jogada Bonus', 'Ar', 'Mago', 'Gwynt Troelli cria uma barreira de vento � sua volta que bloqueia ataques a dist�ncia e proj�teis. Qualquer ataque com proj�til deve derrotar o seu teste de Lan�ar Feiti�os. Se eles fracassarem, a barreira joga o proj�til a 8m de dist�ncia numa dire��o aleat�ria.', ''),
(49, 'Sufocar', '1d10', 14, 'Profissional', 'Resistir Magia', 'ativo (4 EST)', '10m', 'Principal', 'Ar', 'Mago', 'sufocar um alvo por 1d10 de dano por turno. O sufocamento termina se o conjurador for atingido por uma arma ou pare de focar no feiti�o. ', 'Enquanto est� sufocando, o alvo fica desequilibrado.'),
(50, 'Escudo de Demetia', '2d6', 12, 'Profissional', 'Nenhuma', 'ativo (4 EST)', '10m', 'Jogada Bonus', 'Fogo', 'Mago', 'O escudo de Demetia permite que voc� crie um escudo de puro fogo m�gico � sua volta que bloqueia um n�mero de feiti�os de �gua igual a 2 vezes o seu valor de per�cia de Lan�ar Feiti�os. Os proj�teis que entram no escudo s�o destru�dos, e as\r\ncriaturas vivas n�o podem entrar na �rea do escudo ou sair sem serem afetados pelo fogo.', 'Ficar dentro da �rea do escudo causa 2d6 de dano + 50% chance de incendiar.'),
(51, 'V�rtice Flamejante', '5d6', 15, 'Profissional', 'Esquivar', 'ativo (4 EST)', 'raio de 10m', 'Principal', 'Fogo', 'Mago', 'permite criar um tornado flamejante de 2m de largura. Voc� pode direcionar o tornado por um n�mero de metros igual ao seu valor de per�cia de Lan�ar Feiti�os uma vez por turno. Se passar por cima ou trombar com um alvo, fa�a uma jogada de Lan�ar Feiti�os contra a jogada de Esquivar/ Escapar dele. Se ele fracassar, sofre\r\n5d6 de dano e tem 50% de chance de pegar fogo. O v�rtice n�o vai al�m do alcance do feiti�o.', ''),
(52, 'Seirff Haul', '1d6', 10, 'Profissional', 'Esquivar', 'ativo (4 EST)', '', 'Jogada Bonus', 'Fogo', 'Mago', 'Seirff Haul cria 1d6 de serpentes de fogo m�gico que atacam o alvo. O alvo � agarrado e incendiado at� ele fazer um teste de Esquivar/Escapar contra o seu teste de Lan�ar Feiti�os. Toda rodada que o alvo falhar no teste, o ND aumenta em 1 ponto conforme as serpentes apertam mais.', 'Cada serpente de fogo causa 1d6 de Dano'),
(53, 'Anialwch', '4d6', 8, 'Profissional', 'Resistir Magia', 'imediata', '10m', 'Principal', 'Agua', 'Mago', 'Anialwch permite que voc� absorva uma quantidade de l�quido do corpo do alvo, provocando dano e deixando-o exausto. O feiti�o provoca 4d6 de dano que n�o pode ser bloqueado por armadura ou escudo. ', 'A desidrata��o extrema cria fadiga e tamb�m baixa a EST do alvo em 4d6.'),
(54, 'Tempestade de Granizo de Merigold', '2d6', 15, 'Profissional', 'Esquivar', 'ativo (4 EST)', 'raio de 30m', 'Principal', 'Agua', 'Mago', 'assim chamada em homenagem � sua criadora Triss Merigold, ex-conselheira do Rei Foltest de Tem�ria, permite criar uma tempestade de granizo que engloba a �rea do feiti�o. Quem estiver na tempestade deve, a cada rodada, fazer um teste de Esquivar/Escapar com ND igual ao teste de Lan�ar Feiti�os ou sofrer 2d6 de dano a uma parte do corpo.', ''),
(55, 'Ondas de Naglfar', '4d6', 10, 'Profissional', 'Esquivar/Bloquear', 'imediata', 'raio de 3m', 'Principal', 'Agua', 'Mago', 'criado por um mago que diz ter testemunhado a Ca�ada Selvagem, este feiti�o cria uma onda de gelo m�gico que se espalha em 3m em todas as dire��es a partir de onde voc� est�.', 'Quem n�o se esquivar ou bloquear o feiti�o � congelado e sofre 4d6 de dano.'),
(56, 'Comando Mental', '', 25, 'Mestre', 'Resistir Magia', 'at� a tarefa ser feita', '10m', 'Jogada Bonus', 'Misturado', 'Mago', 'permite plantar uma ordem na mente de um alvo. Esse comando deve ser executado perfeitamente pelo alvo.', 'Se o comando for alguma coisa que a pessoa nunca faria, ela tem +5 no teste de Resistir a Magia.'),
(57, 'Portal Vertical', '', 22, 'Mestre', 'Nenhuma', 'ativo (6 EST)', 'N/C', 'Jogada Bonus', 'Misturado', 'Mago', 'o portal vertical cria um portal flutuante de 1m por 2m at� 10m de voc�. Atravessar o portal faz com que voc� se teletransporte para qualquer lugar que se lembre. O portal pode teletransportar qualquer coisa que couber nele. Se voc� encerrar o\r\nportal enquanto algo est� parcialmente dentro dele, o portal corta o objeto (ou criatura) em dois. A pessoa fica desmembrada, como se fosse um Ferimento Cr�tico. Voc� pode criar um portal at� um local desconhecido, como em Teletransporte.', ''),
(58, 'Polimorfismo', '', 22, 'Mestre', 'Nenhuma', 'at� ser lan�ado novamente', 'voc� mesmo', 'Jogada Bonus', 'Terra', 'Mago', 'o polimorfismo permite que voc� tome a forma de uma serpente, um gato, um p�ssaro ou um cachorro. Enquanto estiver nessa forma, voc� tem as estat�sticas f�sicas do animal (ver Besti�rio). Quaisquer itens que estiverem com voc� s�o transformados junto. Voc� deve lan�ar o feiti�o novamente para voltar � forma humana.', ''),
(59, 'Transmuta��o', '', 25, 'Mestre', 'Nenhuma', 'permanente', '2m', 'Jogada Bonus', 'Terra', 'Mago', 'a transmuta��o permite que voc� mude as propriedades de um mineral ou metal. Voc� pode transformar uma unidade de metal em qualquer outro metal, ou transformar uma pedra preciosa imperfeita em uma pedra preciosa perfeita,\r\nadequada para magia. ', 'Dimer�tio e outros metais em contato com dimer�tio n�o s�o criados ou transformados por este feiti�o.'),
(60, 'Dervixe', '1d6', 22, 'Mestre', 'Esquivar', 'ativo (6 EST)', 'raio de 2m', 'Principal', 'Ar', 'Mago', 'Criado por um mago misterioso de Ofier, dervixe permite que voc� crie um tornado de 2m � sua volta. Esse tornado redireciona imediatamente ataques a dist�ncia, como Gwynt Troelli, e age como um feiti�o de Z�firo contra qualquer um a 2m de voc�.', 'Voc� n�o pode correr quando estiver dentro do tornado ou fazer ataques para fora dele. Mas se voc� se mover a 2m do alvo, ele ser� afetado pelo Z�firo.'),
(61, 'Tempestade de Raios', '8d6', 25, 'Mestre', 'Esquivar', 'ativo (6 EST)', '', 'Principal', 'Ar', 'Mago', 'permite que voc� crie uma tempestade de raios. Os raios atingem a �rea de maneira aleat�ria. Qualquer um (exceto voc�) que estiver nela tem uma chance de 35% de ser atingido por um raio. ', 'Se algu�m falhar no teste, dever� fazer um teste de Esquivar/Escapar ou sofrer 8d6 de dano no tronco e ter uma chance de 75% de ser incendiado.'),
(62, 'Fogo de Melgar', '4d6', 25, 'Mestre', 'Esquivar/Bloquear', 'ativo (6 EST)', 'raio de 40m', 'Principal', 'Fogo', 'Mago', 'este feiti�o � conhecido por semear o caos nos campos do Vale do Pontar. O fogo de Melgar permite que voc� fa�a chover bolas de fogo do c�u sobre uma �rea imensa. Qualquer um (exceto voc�) que estiver na �rea tem uma chance de 75% de ser atingido por uma bola de fogo.', ' Se perderem o teste, eles devem defender, contra um ND igual ao seu teste de Lan�ar Feiti�os ou sofrer 4d6 de dano a um local aleat�rio e ter 75% chance de ser incendiado.'),
(63, 'Efeito Espelho', '10d6', 25, 'Mestre', 'Esquivar/Bloquear', 'imediata', '20m', 'Principal', 'Fogo', 'Mago', 'o efeito espelho cria um raio de luz cegante que provoca 10d6 de dano.\r\nEsse raio pode ser desviado e bloqueado (destr�i o que bloqueia), mas n�o pode\r\nser deslocado por vento e s� pode ser desviado com uma superf�cie reflexiva,\r\nque ainda sofre dano. ', 'O raio refletido dispara em dire��o aleat�ria. Este feiti�o usa raios do sol e n�o pode ser usado onde os raios do sol n�o penetram. Com a luz da lua ou em dias nublados, ele provoca metade do dano.'),
(64, 'Partir �gua', '', 25, 'Mestre', 'Nenhuma', 'ativo (6 EST)', 'raio de 10m', 'Jogada Bonus', 'Agua', 'Mago', 'partir �gua permite que voc� crie uma �rea aberta de at� 10m/100m/10m\r\nnum corpo d��gua. Peixes, monstros e outras criaturas na �gua s�o puxadas junto\r\ncom a �gua formando paredes. Voc� pode entrar e sair destas paredes facilmente\r\nsem perturb�-las, da mesma maneira que voc� faria ao entrar e sair de qualquer corpo d��gua (rio, piscina, mar).', ' Se usado quando estiver na �gua, o efeito empurra o conjurador do feiti�o para a parede tamb�m. A �rea pode ser invocada em qualquer orienta��o, at� na vertical.'),
(65, 'Tryferi Gaeaf', '5d6', 22, 'Mestre', 'Esquivar/Bloquear', '1d10 rodadas', '20m', 'Principal', 'Agua', 'Mago', 'Permite que voc� dispare um n�mero de estacas de gelo de 2m igual a\r\nmetade de seu valor de per�cia de Lan�ar Feiti�os, contra quantos alvos quiser\r\ndentro do alcance definido. Essas estacas provocam 5d6 pontos de dano e, se\r\natravessarem armadura, congelam o oponente e provocam 2 de dano a cada\r\nrodada at� serem removidos, seja com um teste de F�sico ND:20 ou provocando\r\n20 pontos de dano a elas. Do contr�rio essas estacas t�m a dura��o do feiti�o.\r\nCada ataque � resolvido separadamente.', ''),
(66, 'Yrden', '', 0, 'Iniciante', 'Nenhuma', '5 rodadas', 'raio de 3m', 'Jogada Bonus', 'Bruxo', 'Bruxo', 'Yrden cria um c�rculo m�gico grande no ch�o � sua volta. Qualquer\r\ncoisa que pisar dentro do c�rculo sofre uma negativa em Destreza e Esquiva\r\n(igual ao n�mero de EST gasto) at� deixar o c�rculo. Qualquer criatura\r\nincorp�rea que entrar no c�rculo se torna corp�rea.', 'Armadilha M�gica: Yrden cria agora uma armadilha m�gica que leva uma rodada\r\npara ser preparada. Esta armadilha ataca usando o seu Lan�ar Feiti�os e INT e provoca 3d6 de dano. A armadilha faz um ataque contra o alvo (somente inimigo) mais pr�ximo a cada rodada.'),
(67, 'Quen', '', 0, 'Iniciante', 'Nenhuma', '10 rodadas ou at� ficar exausto', 'voc� mesmo', 'Jogada Bonus', 'Bruxo', 'Bruxo', 'Quen cria um escudo com 5 Pontos de Vida por ponto de Estamina gasto para proteger voc�. Se voc� falhar (ou escolher n�o fazer ou ser incapaz de) em se defender contra um ataque ou efeito que causa dano, o dano � primeiro aplicado ao escudo de Quen. Dano letal e n�o-letal reduz os Pontos de Vida do escudo de Quen\r\nde maneira igual. Se o escudo ficar com 0 de Vitalidade, qualquer dano restante � aplicado em voc�, como de costume, e deve perfurar a sua armadura e resist�ncias a dano para impactar os seus Pontos de Vida ou Estamina como qualquer outro ataque. Quen pode ser usado contra qualquer feiti�o que possa ser Bloqueado, mas\r\n� ineficaz contra dano causado por feiti�os que n�o podem ser Bloqueados ou contra dano causado por envenenamento, doen�a ou sufocamento por falta de oxig�nio na �rea. Voc� n�o pode lan�ar Quen novamente at� o seu atual escudo de Quen tiver esgotado ou a dura��o terminar.', 'Quen agora cria um escudo luminoso � sua volta. O escudo tem 10 PV por cada ponto de Estamina gasto. A cada rodada depois da primeira, voc� deve gastar um n�mero de EST igual a quantidade inicial de EST usada para manter o escudo levantado. O escudo ativo s� protege voc�, mas voc� pode colocar uma\r\noutra pessoa no escudo, se ficarem espremidos. Quando estiver com o\r\nescudo ativo, nada tang�vel consegue passar para dentro ou para fora sem\r\ndestruir o escudo primeiro e voc� deve se mover devagar para manter\r\no escudo erguido, o que significa que n�o consegue correr. Quando o escudo\r\nse esgota ou � derrubado, qualquer coisa adjacente a voc� � empurrada\r\na 2 m e sofre 1d6 de dano ao tronco. Isso inclui objetos, mob�lia e\r\naliados. Qualquer coisa fixa no ch�o ou mais pesada do que 226 kg n�o �\r\nempurrada, mas sofre dano.'),
(68, 'Aard', '1d3', 0, 'Iniciante', 'Esquivar', 'imediata', 'cone de 3m', 'Jogada Bonus', 'Bruxo', 'Bruxo', 'Aard dispara uma onda de for�a telecin�tica, causando 1d3 de dano, desequilibrando criaturas com uma chance de 10% delas serem derrubadas/prostradas. A porcentagem sobe em 10% por cada ponto de EST gasto, caso o oponente cair no ch�o deve rolar 1d10 para cada alvo para verificar o que eles bateram ao cair no ch�o.', ''),
(69, 'Varredura Aard', '1d6', 0, 'Iniciante', 'Esquivar', 'imediata', 'raio de 4m', 'Jogada Bonus', 'Bruxo', 'Bruxo', 'Aard agora explode a for�a telecin�tica � sua volta. Por cada ponto de EST gasto, tudo que � pego pela explos�o tem uma chance de 10% de ser derrubado e ficar\r\ndesequilibrado. A explos�o vai em todas as dire��es como uma esfera.\r\nCriaturas que voam e s�o atingidas por Varredura Aard s�o derrubadas do ar. Jogue 1d10 para cada alvo derrubado para verificar onde foi ferido, e 1d6 para o dano.', ''),
(70, 'Igni', '1d6', 0, 'Iniciante', 'Esquivar/Bloquear', 'imediata', 'cone de 3m', 'Principal', 'Bruxo', 'Bruxo', 'Igni dispara uma onda de fa�scas e fogo que provoca 1d6 de dano por ponto de EST gasto e tem uma chance de 50% de incendiar qualquer coisa atingida. Igni sempre\r\nprovoca dano ao tronco, a menos que usado � queima-roupa. Quando usado � queima-roupa, Igni pode ser mirado em locais do corpo.', ''),
(71, 'Igni Labareda de Fogo', '1d6 por EST', 0, 'Iniciante', 'Esquivar/Bloquear', 'ativo (Metade da EST gasta)', '3m', 'Principal', 'Bruxo', 'Bruxo', 'Igni agora produz uma labareda constante de fa�scas e fogo que sai da sua m�o faz 1d6 de dano por ponto de EST gasto, e tem uma chance de 75% de p�r fogo no oponente.\r\nA labareda de fogo deve ser mantida a cada rodada com um n�mero de pontos de EST igual a 1/2 do n�mero de pontos de EST gastos para lan�ar o sinal. Voc� pode trocar\r\nde alvos em seu turno.', ''),
(72, 'Axii', '', 0, 'Iniciante', 'Resistir Magia', 'at� ser superado', '8m', 'Jogada Bonus', 'Bruxo', 'Bruxo', 'Axii atordoa o oponente at� que ele consiga fazer um teste de resist�ncia a Atordoamento em -1. Por cada 2 pontos de EST adicionais gastos depois de 1, o teste de resist�ncia a Atordoamento fica mais dif�cil em 1 ponto.', ''),
(73, 'Marionete', '', 0, 'Iniciante', 'Resistir Magia', 'at� ser removido ou acabar EST', '8m', 'Jogada Bonus', 'Bruxo', 'Bruxo', 'Axii agora controla a mente de um oponente, tornando-o um aliado por um n�mero de rodadas igual ao n�mero de pontos de EST gastos no sinal. A cada rodada, o\r\nalvo pode fazer uma jogada de Resistir a Magia contra o seu teste de Lan�ar Feiti�os para tentar se livrar.', ''),
(74, '1', '1', 1, 'Iniciante', 'Esquivar/Bloquear', '1', '1', 'Principal', 'Misturado', 'Mago', '1', '1');

--
-- �ndices para tabelas despejadas
--

--
-- �ndices para tabela `item_db`
--
ALTER TABLE `item_db`
  ADD PRIMARY KEY (`item_id`);

--
-- �ndices para tabela `players_table`
--
ALTER TABLE `players_table`
  ADD PRIMARY KEY (`id`);

--
-- �ndices para tabela `player_skill`
--
ALTER TABLE `player_skill`
  ADD PRIMARY KEY (`entry_id`);

--
-- �ndices para tabela `skill_db`
--
ALTER TABLE `skill_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `item_db`
--
ALTER TABLE `item_db`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `players_table`
--
ALTER TABLE `players_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de tabela `player_skill`
--
ALTER TABLE `player_skill`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `skill_db`
--
ALTER TABLE `skill_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
