-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Abr-2024 às 18:33
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
(1, 'Cenlly Graig', '1d6', 5, 'Iniciante', 'Esquivar/Bloquear', 'imediata', '5m', 'Principal', 'Terra', 'Mago', 'Cenlly Graig arremessa pedras afiadas contra o seu oponente. Por cada ponto obtido acima da defesa de seu oponente (máximo de 10), você\r\nprovoca 1d6 de dano. Cada jogada conta como o seu próprio ataque.', '* Lançar Magia acima do valor de Resistir á Magia do alvo (Máximo de 10)'),
(2, 'Espelho de Afan', '', 3, 'Iniciante', 'Nenhuma', 'ativo (2 EST)', '10m', 'Jogada Bonus', 'Misturado', 'Mago', 'criado pelo talentoso mago de Aedirn, Afan de Gulet, o espelho de Afan cria 1d10 cópias ilusórias de quem conjurou. Essas cópias são intangíveis,\r\nmas iguais ao conjurador e controladas pela mente. Controlar as cópias não requer uma ação e elas não podem ir além do alcance do feitiço.', ''),
(3, 'Pó para Cegar', '', 3, 'Iniciante', 'Esquivar/Bloquear', '1d10 rodadas', '4m', 'Principal', 'Misturado', 'Mago', 'pó para cegar permite a você arremessar um pó mágico nos olhos de seu alvo, o que o cega enquanto durar o feitiço.', ''),
(4, 'Desfazer', '', 0, 'Iniciante', 'Nenhuma', 'imediata', '10m', 'Hibrido', 'Misturado', 'Mago', 'Desfazer permite que você anule um feitiço/ritual/hex dentro do alcance do feitiço Desfazer.\r\nEste feitiço pode ser lançado como ação defensiva\r\npara bloquear ataques mágicos com ou sem componentes físicos. Para cancelar um efeito mágico, você deve gastar metade dos pontos de Estamina que o\r\noponente usou para conjurar a magia e fazer uma jogada de Lançar Feitiços que derrote a jogada dele.', 'Pode ser usada como ação principal/bonus/defesa'),
(5, 'Glamour', '', 5, 'Iniciante', 'Nenhuma', '1d6 horas', 'você mesmo', 'Jogada Bonus', 'Misturado', 'Mago', 'Glamour permite a você lançar uma ilusão à sua volta que o faz parecer muito bonito.', 'Este feitiço lhe dá +3 em Sedução, Carisma e Liderança.'),
(6, 'Bússola Mágica', '', 3, 'Iniciante', 'Nenhuma', '1d6 horas', 'você mesmo', 'Jogada Bonus', 'Misturado', 'Mago', 'a bússola mágica permite a você determinar instantaneamente a direção de algum lugar já visitado. Pode também indicar onde fica o Norte.', ''),
(7, 'Manipulação da Mente', '', 3, 'Iniciante', 'Resistir Magia', '1d10 rodadas', '5m', 'Jogada Bonus', 'Misturado', 'Mago', 'a manipulação da mente permite a você forçar um alvo a sentir uma das seguintes emoções: ódio, amor, depressão ou euforia enquanto durar\r\no feitiço.', ''),
(8, 'Invocar Cajado', '', 2, 'Iniciante', 'Nenhuma', 'imediata', 'você mesmo', 'Jogada Bonus', 'Misturado', 'Mago', 'invocar cajado permite a você desmaterializar o seu cajado e transportá-lo para algum lugar que visitou ou por perto de você. Você pode\r\nlançar o feitiço novamente para invocar o cajado de volta.', ''),
(9, 'Telepatia', '', 2, 'Iniciante', 'Nenhuma', 'ativo (1 EST)', '10m', 'Jogada Bonus', 'Misturado', 'Mago', 'a telepatia permite a você se comunicar telepaticamente com outra pessoa, enquanto durar o feitiço. A telepatia cruza as barreiras idiomáticas.', ''),
(10, 'Codi Bywyd', '', 2, 'Iniciante', 'Nenhuma', 'imediata', '4m', 'Jogada Bonus', 'Terra', 'Mago', 'Codi Bywyd faz crescer uma planta pequena desde a semente até a maturidade em um turno. Isso permite que você cultive ervas e plantas\r\nalquímicas, mas não permite plantas maiores como árvores.', ''),
(11, 'Adenydd', '', 4, 'Iniciante', 'Nenhuma', 'ativa (2 EST)', 'você mesmo', 'Jogada Bonus', 'Ar', 'Mago', 'Adenydd permite a você ficar um pouco mais leve e ter a capacidade de planar enquanto em queda. Isso significa que para cada 2m de queda, você\r\nviaja 2m em uma direção. Se você chegar ao chão antes do feitiço terminar, você não sofre dano.', ''),
(12, 'Aenye', '4d6', 5, 'Iniciante', 'Esquivar/Bloquear', 'imediata', '12m', 'Principal', 'Fogo', 'Mago', 'Aenye permite que você arremesse uma bola de puro fogo contra um oponente no alcance do feitiço. Essa bola de fogo provoca 4d6 de dano.\r\n', 'Tem uma chance de 75% de pôr fogo no alvo.'),
(13, 'Granizo de Carys', '1d6', 3, 'Iniciante', 'Esquivar/Bloquear', 'imediata', '5m', 'Principal', 'Agua', 'Mago', 'Assim chamado em homenagem ao seu criador, Carys de Cintra, este feitiço atira pequenas esferas de gelo em alta velocidade em 1 oponente. A cada\r\n1 ponto obtido acima do valor de Esquivar/Bloquear de seu oponente (máximo 5), você faz 1d6 de dano e tem uma chance de 25% de congelar o seu\r\noponente.', 'Cada jogada conta como um ataque separado ao determinar local e dano causado.'),
(14, 'Feitiço de Diagnóstico', '', 3, 'Iniciante', 'Nenhuma', 'imediata', '5m', 'Jogada Bonus', 'Terra', 'Mago', 'o feitiço de diagnóstico permite que você avalie rapidamente a Vitalidade de alguém e determine quantos Pontos de Vida ainda tem, quais\r\nferimentos críticos possui e se está doente ou envenenado.', ''),
(15, 'Espinho de Barro', '5d6', 5, 'Iniciante', 'Esquivar/Bloquear', 'imediata', '6m', 'Principal', 'Terra', 'Mago', 'o espinho de barro cria uma estalagmite para perfurar o alvo. Esse espinho provoca 5d6 de dano e permanece até ser destruído. Pode ser\r\ndestruído com 20 pontos de dano.', ''),
(16, 'Sopro de Korath', '3d6', 2, 'Iniciante', 'Esquivar/Bloquear', 'imediata', 'cone de 3m', 'Principal', 'Terra', 'Mago', 'o sopro de Korath quebra uma pedra próxima ou superfície de terra e dispara areia quente num cone de 3m à sua frente. ', 'Os oponentes\r\nnessa área que falharem em sua defesa ficam cegos por 1d6 rodadas.'),
(17, 'Pena de Luthien', '', 2, 'Iniciante', 'Nenhuma', 'imediata', '.', 'Jogada Bonus', 'Terra', 'Mago', 'chamada assim em homenagem ao seu inventor, Luthien de Ebbing, a pena de Luthien pode escrever ou desenhar em qualquer superfície\r\nsólida.', ''),
(18, 'Cura Mágica', '', 10, 'Iniciante', 'Nenhuma', 'imediata', '2m', 'Jogada Bonus', 'Terra', 'Mago', 'a cura mágica estimula a cura natural de um alvo numa taxa de 3 + Coeficiente Inteligência + 1d6 Isso dura até terminar o feitiço. Pode ser usado\r\ntambém repetidamente para curar um ferimento crítico.', ''),
(19, 'Prisão de Talfryn', '', 3, 'Iniciante', 'Esquivar', 'até ser destruido', '10m', 'Jogada Bonus', 'Terra', 'Mago', 'a prisão de Talfryn ganhou este nome por causa de Talfryn de Nazair, um cavaleiro traiçoeiro que foi aprisionado por três dias no jardim do\r\nmago Drystan. O feitiço permite a você prender o alvo com raízes. As raízes aguentam 15 pontos de dano até romperem. ', 'Um teste de Esquivar/Escapar deve ser feito num ND igual ao seu teste original de Lançar Feitiços para escapar.'),
(20, 'Bolsa de Ar', '', 3, 'Iniciante', 'Nenhuma', 'imediata', '5m', 'Jogada Bonus', 'Ar', 'Mago', 'a bolsa de ar permite que você crie um bolsão de ar fresco em baixo da água ou numa área onde normalmente não há ar puro. A bolsa\r\ntem um raio de 1m enquanto durar o feitiço.', ''),
(21, 'Sopro de Bronwyn', '1d6', 2, 'Iniciante', 'Esquivar', 'imediata', '5m', 'Principal', 'Ar', 'Mago', 'o sopro de Bronwyn foi chamado assim em homenagem a um mago e saqueador de Skellige, Bronwyn Certeiro. O feitiço permite que\r\nderrube um alvo a um número de metros igual ao número de pontos que você obteve acima da defesa do oponente. ', 'Este ataque só provoca 1d6 de dano, mas se o seu oponente acertar alguma coisa, ele sofre dano de colisão.'),
(22, 'Arejar', '', 2, 'Iniciante', 'Nenhuma', 'ativa (2 EST)', 'raio de 4m', 'Jogada Bonus', 'Ar', 'Mago', 'arejar permite que se limpe de qualquer fumaça, veneno ou poluição do ar em uma área com raio de 4m (com você no centro), enquanto\r\ndurar o feitiço.', ''),
(23, 'Abrigo de Urien', '', 3, 'Iniciante', 'Nenhuma', '1d6 horas', 'raio de 8m', 'Jogada Bonus', 'Ar', 'Mago', 'o abrigo de Urien, criado pelo mago náutico do ar, Urien de Cidaris, permite que você anule os efeitos extremos do clima num raio de 8m (centrado em você). Isso remove calor extremo, frio extremo, chuva e neve.', ''),
(24, 'Tempestade Estática', '', 5, 'Iniciante', 'Nenhuma', '2d6 rodadas', 'raio de 5m', 'Principal', 'Ar', 'Mago', 'a tempestade estática permite a você infundir eletricidade num raio de 5 metros centrado em você. Qualquer pessoa nesta área (excluindo você)\r\nque estiver usando armadura de metal ou carregando armas de metal sofre 2d6 pontos de dano por rodada, caso não estiver usando nada metálico 1d6.', '2d6 por rodada (Com metais) 1d6 por rodada (Sem metais)'),
(25, 'Telecinese', '', 3, 'Iniciante', 'Nenhuma', 'ativa (2 EST)', '5m', 'Hibrido', 'Ar', 'Mago', 'a telecinese permite a você erguer e manipular um objeto (até 5 FAR para cada 1 ponto de Lançar Feitiços) como se o estivesse segurando.', 'O peso do objeto ou poder de dano influencia no dano.'),
(26, 'Zéfiro', '1d6', 5, 'Iniciante', 'Nenhuma', 'imediata', '2m', 'Principal', 'Ar', 'Mago', 'o zéfiro permite que você dispare um golpe de vento que atinge qualquer um a 2m de você e empurrando por um número de metros igual ao número\r\nde pontos obtidos acima de sua defesa. Esse ataque só provoca 1d6 de dano, mas se o seu oponente acertar alguma coisa, ele sofre dano de colisão.', 'Dano de colisão adicional 1d6.'),
(27, 'Aine Verseos', '', 1, 'Iniciante', 'Nenhuma', 'ativa (2 EST)', 'raio de 4m', 'Jogada Bonus', 'Fogo', 'Mago', 'Aine Verseos cria uma área de luz ofuscante num raio de 4 metros centrado em você.', ''),
(28, 'Marca de Fogo', '1d6', 4, 'Iniciante', 'Nenhuma', 'imediata', '8m', 'Principal', 'Fogo', 'Mago', 'a marca de fogo permite que você marque um alvo com um símbolo simples ou palavra em qualquer parte de seu corpo exposto. Isso provoca\r\n1d6 de dano ao alvo e deixa uma cicatriz grande e permanente.', ''),
(29, 'Tormento de Cadfan', '2d6', 4, 'Iniciante', 'Nenhuma', '1d6 rodadas', '8m', 'Principal', 'Fogo', 'Mago', 'o tormento de Cadfan, assim chamado em homenagem ao mago e ferreiro Cadfan de Ebbing, permite que você superaqueça um item de metal\r\nfazendo o portador derrubá-lo ou sofrer 2d6 no membro que estava em contato com o item.', 'O feitiço pode também aquecer armas para provocar +2d6 de dano e uma chance de 50% de incendiar um alvo.'),
(30, 'Lampejo Mágico', '', 2, 'Iniciante', 'Resistir Magia', 'imediata', 'raio de 8m', 'Jogada Bonus', 'Fogo', 'Mago', 'o lampejo mágico cria um flash de luz ofuscante acima de você. Todos que estiverem dentro do raio de 8 m devem fazer um teste de Resistir a\r\nMagia ou ficar cego por 1d6 rodadas. ', 'Esse lampejo pode ser visto a 10 quilômetros.'),
(31, 'Erguer Chamas', '1d6 ~ 2d6', 3, 'Iniciante', 'Nenhuma', 'ativa (1 ~ 2 EST) por quadro', '', 'Hibrido', 'Fogo', 'Mago', 'erguer chamas permite que você espalhe fogo (se já houver algum já no local como fogueiras, tochas,etc) à velocidade de 2m por rodada\r\nem qualquer direção, diminuir este fogo para uma chama fraca (baixando o dano de fogo em 1d6), ou intensifica-lo (aumentar o dano de fogo para 2d6).', 'Fogo Baixo: Dano de 1d6 por quadro de fogo ao redor do alvo por turno, e 2d6 no quadro do alvo.\r\n.\r\nFogo Alto: Dano de 2d6 por quadro de fogo ao redor do alvo por turno, e 3d6 no quadro do alvo.\r\nFazer teste de Lançar Feitiço a cada turno para conseguir manter o fogo alto.'),
(32, 'Tanio Ilchar', '3d6', 3, 'Iniciante', 'Esquivar', 'imediata', '8m', 'Principal', 'Fogo', 'Mago', 'Tanio Ilchar cria uma rajada de fogo em uma área de 2m por 2m.', 'Tem uma chance de 80% de incendiar um alvo que está na área em chamas.'),
(33, 'Onda de Fogo', '3d6', 4, 'Iniciante', 'Esquivar/Bloquear', 'imediata', 'cone de 3m', 'Principal', 'Fogo', 'Mago', 'a onda de fogo dispara um cone de fogo de 3m em uma direção e provoca dano de 3d6 a qualquer um que não conseguir esquivar-se ou bloquear. ', 'Tem 50% de chance de incendiar um alvo.'),
(34, 'Controle da Água', '', 5, 'Iniciante', 'Definido pelo mestre', 'ativa (2 EST)', '10m', 'Jogada Bonus', 'Agua', 'Mago', 'o controle da água permite que você controle a velocidade com que uma corrente de água se move e a direção do movimento, enquanto durar o\r\nfeitiço. Isso pode ser usado para diminuir a velocidade de alvos que nadam pela metade, aumentar a velocidade de navios pela metade, ou atrasar ou cessar\r\ncorrentes de rios.', ''),
(35, 'Maldição de Sedna', '', 5, 'Iniciante', 'Esquivar', 'ativa (2 EST)', '12m', 'Jogada Bonus', 'Agua', 'Mago', 'recebeu este nome por causa do turbulento Abismo de Sedna, o qual é considerado um destino suicida para navios, a Maldição de Sedna cria um\r\nredemoinho poderoso em uma área de 4 metros. Qualquer um que estiver a 5 metros deve fazer um teste de Nadar igual ao seu teste de Lançar Feitiços ou\r\nserá arrastado para baixo da água.', 'Essa pessoa deve fazer um teste a cada rodada ou permanece embaixo da água, onde começará a sufocar.'),
(36, 'Névoa de Dormyn', '', 3, 'Iniciante', 'Nenhuma', 'ativa (2 EST)', 'raio de 10m', 'Jogada Bonus', 'Agua', 'Mago', 'criado por Dormyn de Gemmera, a névoa de Dormyn cria uma área de névoa tensa com um raio de 10 metros, com centro em você, que faz qualquer\r\num ter -3 em Percepção e limita o alcance de visão a 4 metros.', ''),
(37, 'Aguaceiro', '', 2, 'Iniciante', 'Nenhuma', 'ativa (2 EST)', '8m', 'Jogada Bonus', 'Agua', 'Mago', 'o aguaceiro cria uma área de chuva com um raio de 20 metros que apaga qualquer fogo que atingir.', 'Este feitiço age contra os efeitos de fogo e aumenta o dano de habilidades de raio derivadas de ar.'),
(38, 'Chão de Gelo', '', 2, 'Iniciante', 'Esquivar', '2d10 rodadas', '10m', 'Jogada Bonus', 'Agua', 'Mago', 'o chão de gelo permite que você crie uma área de 2 metros quadrados de gelo. Qualquer pessoa que cruzar essa área deve fazer um teste de Atletismo\r\nnum ND igual a seu teste de Lançar Feitiços ou vai tropeçar no gelo.', ''),
(39, 'Puro Dwr', '', 2, 'Iniciante', 'Nenhuma', '1d10 rodadas', '4m', 'Jogada Bonus', 'Agua', 'Mago', 'puro dwr permite que você purifique 1 metro cúbico de água. Isso retira veneno e doença, mas não força coisas vivas a saírem. Se for lançado em\r\numa pequena parte de um grande corpo de água poluída, a água começará a ficar poluída novamente depois que o feitiço terminar.', ''),
(40, 'Rhewi', '', 2, 'Iniciante', 'Esquivar', '1d10 rodadas', '8m', 'Jogada Bonus', 'Agua', 'Mago', 'Rhewi cria uma camada grossa de gelo em volta do alvo enquanto durar o feitiço. O alvo é considerado congelado. Se usado em um alvo não vivo, o alvo não pode ser manipulado ou movido.', ''),
(41, 'Técnica de Eilhart', '', 12, 'Profissional', 'Resistir Magia', 'imediata', '3m', 'Jogada Bonus', 'Misturado', 'Mago', 'nomeado em homenagem à sua criadora, Phillipa Eilhart, este feitiço cruel permite que você penetre a mente de seu alvo e arranque informações.\r\nSe tiver sucesso em seu teste de Lançar Feitiços, você ganha um pedaço de informação do alvo. Se o alvo vacilar em sua defesa, a sua INT é reduzida em 1 permanentemente.', ''),
(42, 'Ilusão', '', 8, 'Profissional', 'Resistir Magia', 'ativo (4 EST)', '20m', 'Jogada Bonus', 'Misturado', 'Mago', 'permite criar qualquer ilusão visual dentro de um alcance de 20 metros\r\na partir de você. Qualquer um que falhar num teste de Resistir a Magia vê a ilusão\r\ne acredita nela. No entanto a ilusão não pode ser tocada, cheirada ou escutada.', ''),
(43, 'Teletransporte', '', 10, 'Profissional', 'Nenhuma', 'imediata', 'N/C', 'Jogada Bonus', 'Misturado', 'Mago', 'permite que você se teletransporte instantaneamente para um local conhecido.\r\nVocê não pode levar outra pessoa junto e só pode transportar os itens guardados\r\nem você ou em suas mãos. Tentar teletransportar com uma pessoa simplesmente\r\ndeixa esta pessoa para trás. Teletransporte requer uma jogada de Lançar\r\nFeitiços com ND:15. ', 'Se você errar, vai parar num local aleatório a 1d10 kms de\r\ndistância.'),
(44, 'Teoria de Elgan', '', 10, 'Profissional', 'Nenhuma', '2d10 rodadas', '8m', 'Jogada Bonus', 'Terra', 'Mago', 'descoberta por Elgan de Verden, que viajou para o coração de Mahakam e trabalhou durante anos estudando a magia da terra. O feitiço permite que você magnetize um objeto de metal a 8 metros de distância. Qualquer coisa de metal a 2m de distância é atraída e gruda no objeto magnetizado. É necessário um teste de Físico com ND: 18 para retirar o objeto. Todo metal que grudar em armas ou armaduras de alguém conta contra o FAR deles.\r\n', ''),
(45, 'Rhwystr Graig', '', 15, 'Profissional', 'Nenhuma', 'até ser destruída', '20m', 'Jogada Bonus', 'Terra', 'Mago', 'Rhwystr Graig permite que você crie uma parede de pedra de 2m por 3m com 30 pontos de PP em qualquer lugar dentro de 10m em qualquer lado. Essa parede permanece até ser destruída.', ''),
(46, 'Terremoto de Stammelford', '', 12, 'Profissional', 'Esquivar', '1d10 rodadas', '30m', 'Jogada Bonus', 'Terra', 'Mago', 'o terremoto de Stammelford permite que você faça estremecer o chão em\r\numa área de 10m e crie um terreno dentado e acidentado que faz todo mundo na\r\nárea ter um -2 em Reflexo e um -3 em MA. Pequenas estruturas sobre o chão destruído tem uma chance de 10% de desmoronar. A cada rodada, uma criatura na área do feitiço deve fazer uma jogada de Atletismo ou afunda no chão que desmorona, fazendo-a sufocar até conseguir sucesso no teste de Atletismo para escapar. Depois que o feitiço terminar, o chão para de tremer, mas permanece destruído.', ''),
(47, 'Trovão de Alzur', '8d6', 15, 'Profissional', 'Esquivar', 'imediata', '25m', 'Principal', 'Ar', 'Mago', 'o trovão de Alzur permite que você dispare um poderoso relâmpago num alvo, provocando 8d6 de dano e uma chance de 75% de pôr fogo no alvo. O trovão de Alzur consegue viajar em linha reta através dos alvos. Para cada alvo atravessado, o dano ao próximo alvo diminui em 1d6.', ''),
(48, 'Gwynt Troelli', '', 12, 'Profissional', 'Nenhuma', 'ativo (4 EST)', 'raio de 10m', 'Jogada Bonus', 'Ar', 'Mago', 'Gwynt Troelli cria uma barreira de vento à sua volta que bloqueia ataques a distância e projéteis. Qualquer ataque com projétil deve derrotar o seu teste de Lançar Feitiços. Se eles fracassarem, a barreira joga o projétil a 8m de distância numa direção aleatória.', ''),
(49, 'Sufocar', '1d10', 14, 'Profissional', 'Resistir Magia', 'ativo (4 EST)', '10m', 'Principal', 'Ar', 'Mago', 'sufocar um alvo por 1d10 de dano por turno. O sufocamento termina se o conjurador for atingido por uma arma ou pare de focar no feitiço. ', 'Enquanto está sufocando, o alvo fica desequilibrado.'),
(50, 'Escudo de Demetia', '2d6', 12, 'Profissional', 'Nenhuma', 'ativo (4 EST)', '10m', 'Jogada Bonus', 'Fogo', 'Mago', 'O escudo de Demetia permite que você crie um escudo de puro fogo mágico à sua volta que bloqueia um número de feitiços de água igual a 2 vezes o seu valor de perícia de Lançar Feitiços. Os projéteis que entram no escudo são destruídos, e as\r\ncriaturas vivas não podem entrar na área do escudo ou sair sem serem afetados pelo fogo.', 'Ficar dentro da área do escudo causa 2d6 de dano + 50% chance de incendiar.'),
(51, 'Vórtice Flamejante', '5d6', 15, 'Profissional', 'Esquivar', 'ativo (4 EST)', 'raio de 10m', 'Principal', 'Fogo', 'Mago', 'permite criar um tornado flamejante de 2m de largura. Você pode direcionar o tornado por um número de metros igual ao seu valor de perícia de Lançar Feitiços uma vez por turno. Se passar por cima ou trombar com um alvo, faça uma jogada de Lançar Feitiços contra a jogada de Esquivar/ Escapar dele. Se ele fracassar, sofre\r\n5d6 de dano e tem 50% de chance de pegar fogo. O vórtice não vai além do alcance do feitiço.', ''),
(52, 'Seirff Haul', '1d6', 10, 'Profissional', 'Esquivar', 'ativo (4 EST)', '', 'Jogada Bonus', 'Fogo', 'Mago', 'Seirff Haul cria 1d6 de serpentes de fogo mágico que atacam o alvo. O alvo é agarrado e incendiado até ele fazer um teste de Esquivar/Escapar contra o seu teste de Lançar Feitiços. Toda rodada que o alvo falhar no teste, o ND aumenta em 1 ponto conforme as serpentes apertam mais.', 'Cada serpente de fogo causa 1d6 de Dano'),
(53, 'Anialwch', '4d6', 8, 'Profissional', 'Resistir Magia', 'imediata', '10m', 'Principal', 'Agua', 'Mago', 'Anialwch permite que você absorva uma quantidade de líquido do corpo do alvo, provocando dano e deixando-o exausto. O feitiço provoca 4d6 de dano que não pode ser bloqueado por armadura ou escudo. ', 'A desidratação extrema cria fadiga e também baixa a EST do alvo em 4d6.'),
(54, 'Tempestade de Granizo de Merigold', '2d6', 15, 'Profissional', 'Esquivar', 'ativo (4 EST)', 'raio de 30m', 'Principal', 'Agua', 'Mago', 'assim chamada em homenagem à sua criadora Triss Merigold, ex-conselheira do Rei Foltest de Teméria, permite criar uma tempestade de granizo que engloba a área do feitiço. Quem estiver na tempestade deve, a cada rodada, fazer um teste de Esquivar/Escapar com ND igual ao teste de Lançar Feitiços ou sofrer 2d6 de dano a uma parte do corpo.', ''),
(55, 'Ondas de Naglfar', '4d6', 10, 'Profissional', 'Esquivar/Bloquear', 'imediata', 'raio de 3m', 'Principal', 'Agua', 'Mago', 'criado por um mago que diz ter testemunhado a Caçada Selvagem, este feitiço cria uma onda de gelo mágico que se espalha em 3m em todas as direções a partir de onde você está.', 'Quem não se esquivar ou bloquear o feitiço é congelado e sofre 4d6 de dano.'),
(56, 'Comando Mental', '', 25, 'Mestre', 'Resistir Magia', 'até a tarefa ser feita', '10m', 'Jogada Bonus', 'Misturado', 'Mago', 'permite plantar uma ordem na mente de um alvo. Esse comando deve ser executado perfeitamente pelo alvo.', 'Se o comando for alguma coisa que a pessoa nunca faria, ela tem +5 no teste de Resistir a Magia.'),
(57, 'Portal Vertical', '', 22, 'Mestre', 'Nenhuma', 'ativo (6 EST)', 'N/C', 'Jogada Bonus', 'Misturado', 'Mago', 'o portal vertical cria um portal flutuante de 1m por 2m até 10m de você. Atravessar o portal faz com que você se teletransporte para qualquer lugar que se lembre. O portal pode teletransportar qualquer coisa que couber nele. Se você encerrar o\r\nportal enquanto algo está parcialmente dentro dele, o portal corta o objeto (ou criatura) em dois. A pessoa fica desmembrada, como se fosse um Ferimento Crítico. Você pode criar um portal até um local desconhecido, como em Teletransporte.', ''),
(58, 'Polimorfismo', '', 22, 'Mestre', 'Nenhuma', 'até ser lançado novamente', 'você mesmo', 'Jogada Bonus', 'Terra', 'Mago', 'o polimorfismo permite que você tome a forma de uma serpente, um gato, um pássaro ou um cachorro. Enquanto estiver nessa forma, você tem as estatísticas físicas do animal (ver Bestiário). Quaisquer itens que estiverem com você são transformados junto. Você deve lançar o feitiço novamente para voltar à forma humana.', ''),
(59, 'Transmutação', '', 25, 'Mestre', 'Nenhuma', 'permanente', '2m', 'Jogada Bonus', 'Terra', 'Mago', 'a transmutação permite que você mude as propriedades de um mineral ou metal. Você pode transformar uma unidade de metal em qualquer outro metal, ou transformar uma pedra preciosa imperfeita em uma pedra preciosa perfeita,\r\nadequada para magia. ', 'Dimerítio e outros metais em contato com dimerítio não são criados ou transformados por este feitiço.'),
(60, 'Dervixe', '1d6', 22, 'Mestre', 'Esquivar', 'ativo (6 EST)', 'raio de 2m', 'Principal', 'Ar', 'Mago', 'Criado por um mago misterioso de Ofier, dervixe permite que você crie um tornado de 2m à sua volta. Esse tornado redireciona imediatamente ataques a distância, como Gwynt Troelli, e age como um feitiço de Zéfiro contra qualquer um a 2m de você.', 'Você não pode correr quando estiver dentro do tornado ou fazer ataques para fora dele. Mas se você se mover a 2m do alvo, ele será afetado pelo Zéfiro.'),
(61, 'Tempestade de Raios', '8d6', 25, 'Mestre', 'Esquivar', 'ativo (6 EST)', '', 'Principal', 'Ar', 'Mago', 'permite que você crie uma tempestade de raios. Os raios atingem a área de maneira aleatória. Qualquer um (exceto você) que estiver nela tem uma chance de 35% de ser atingido por um raio. ', 'Se alguém falhar no teste, deverá fazer um teste de Esquivar/Escapar ou sofrer 8d6 de dano no tronco e ter uma chance de 75% de ser incendiado.'),
(62, 'Fogo de Melgar', '4d6', 25, 'Mestre', 'Esquivar/Bloquear', 'ativo (6 EST)', 'raio de 40m', 'Principal', 'Fogo', 'Mago', 'este feitiço é conhecido por semear o caos nos campos do Vale do Pontar. O fogo de Melgar permite que você faça chover bolas de fogo do céu sobre uma área imensa. Qualquer um (exceto você) que estiver na área tem uma chance de 75% de ser atingido por uma bola de fogo.', ' Se perderem o teste, eles devem defender, contra um ND igual ao seu teste de Lançar Feitiços ou sofrer 4d6 de dano a um local aleatório e ter 75% chance de ser incendiado.'),
(63, 'Efeito Espelho', '10d6', 25, 'Mestre', 'Esquivar/Bloquear', 'imediata', '20m', 'Principal', 'Fogo', 'Mago', 'o efeito espelho cria um raio de luz cegante que provoca 10d6 de dano.\r\nEsse raio pode ser desviado e bloqueado (destrói o que bloqueia), mas não pode\r\nser deslocado por vento e só pode ser desviado com uma superfície reflexiva,\r\nque ainda sofre dano. ', 'O raio refletido dispara em direção aleatória. Este feitiço usa raios do sol e não pode ser usado onde os raios do sol não penetram. Com a luz da lua ou em dias nublados, ele provoca metade do dano.'),
(64, 'Partir Água', '', 25, 'Mestre', 'Nenhuma', 'ativo (6 EST)', 'raio de 10m', 'Jogada Bonus', 'Agua', 'Mago', 'partir água permite que você crie uma área aberta de até 10m/100m/10m\r\nnum corpo d’água. Peixes, monstros e outras criaturas na água são puxadas junto\r\ncom a água formando paredes. Você pode entrar e sair destas paredes facilmente\r\nsem perturbá-las, da mesma maneira que você faria ao entrar e sair de qualquer corpo d’água (rio, piscina, mar).', ' Se usado quando estiver na água, o efeito empurra o conjurador do feitiço para a parede também. A área pode ser invocada em qualquer orientação, até na vertical.'),
(65, 'Tryferi Gaeaf', '5d6', 22, 'Mestre', 'Esquivar/Bloquear', '1d10 rodadas', '20m', 'Principal', 'Agua', 'Mago', 'Permite que você dispare um número de estacas de gelo de 2m igual a\r\nmetade de seu valor de perícia de Lançar Feitiços, contra quantos alvos quiser\r\ndentro do alcance definido. Essas estacas provocam 5d6 pontos de dano e, se\r\natravessarem armadura, congelam o oponente e provocam 2 de dano a cada\r\nrodada até serem removidos, seja com um teste de Físico ND:20 ou provocando\r\n20 pontos de dano a elas. Do contrário essas estacas têm a duração do feitiço.\r\nCada ataque é resolvido separadamente.', ''),
(66, 'Yrden', '', 0, 'Iniciante', 'Nenhuma', '5 rodadas', 'raio de 3m', 'Jogada Bonus', 'Bruxo', 'Bruxo', 'Yrden cria um círculo mágico grande no chão à sua volta. Qualquer\r\ncoisa que pisar dentro do círculo sofre uma negativa em Destreza e Esquiva\r\n(igual ao número de EST gasto) até deixar o círculo. Qualquer criatura\r\nincorpórea que entrar no círculo se torna corpórea.', 'Armadilha Mágica: Yrden cria agora uma armadilha mágica que leva uma rodada\r\npara ser preparada. Esta armadilha ataca usando o seu Lançar Feitiços e INT e provoca 3d6 de dano. A armadilha faz um ataque contra o alvo (somente inimigo) mais próximo a cada rodada.'),
(67, 'Quen', '', 0, 'Iniciante', 'Nenhuma', '10 rodadas ou até ficar exausto', 'você mesmo', 'Jogada Bonus', 'Bruxo', 'Bruxo', 'Quen cria um escudo com 5 Pontos de Vida por ponto de Estamina gasto para proteger você. Se você falhar (ou escolher não fazer ou ser incapaz de) em se defender contra um ataque ou efeito que causa dano, o dano é primeiro aplicado ao escudo de Quen. Dano letal e não-letal reduz os Pontos de Vida do escudo de Quen\r\nde maneira igual. Se o escudo ficar com 0 de Vitalidade, qualquer dano restante é aplicado em você, como de costume, e deve perfurar a sua armadura e resistências a dano para impactar os seus Pontos de Vida ou Estamina como qualquer outro ataque. Quen pode ser usado contra qualquer feitiço que possa ser Bloqueado, mas\r\né ineficaz contra dano causado por feitiços que não podem ser Bloqueados ou contra dano causado por envenenamento, doença ou sufocamento por falta de oxigênio na área. Você não pode lançar Quen novamente até o seu atual escudo de Quen tiver esgotado ou a duração terminar.', 'Quen agora cria um escudo luminoso à sua volta. O escudo tem 10 PV por cada ponto de Estamina gasto. A cada rodada depois da primeira, você deve gastar um número de EST igual a quantidade inicial de EST usada para manter o escudo levantado. O escudo ativo só protege você, mas você pode colocar uma\r\noutra pessoa no escudo, se ficarem espremidos. Quando estiver com o\r\nescudo ativo, nada tangível consegue passar para dentro ou para fora sem\r\ndestruir o escudo primeiro e você deve se mover devagar para manter\r\no escudo erguido, o que significa que não consegue correr. Quando o escudo\r\nse esgota ou é derrubado, qualquer coisa adjacente a você é empurrada\r\na 2 m e sofre 1d6 de dano ao tronco. Isso inclui objetos, mobília e\r\naliados. Qualquer coisa fixa no chão ou mais pesada do que 226 kg não é\r\nempurrada, mas sofre dano.'),
(68, 'Aard', '1d3', 0, 'Iniciante', 'Esquivar', 'imediata', 'cone de 3m', 'Jogada Bonus', 'Bruxo', 'Bruxo', 'Aard dispara uma onda de força telecinética, causando 1d3 de dano, desequilibrando criaturas com uma chance de 10% delas serem derrubadas/prostradas. A porcentagem sobe em 10% por cada ponto de EST gasto, caso o oponente cair no chão deve rolar 1d10 para cada alvo para verificar o que eles bateram ao cair no chão.', ''),
(69, 'Varredura Aard', '1d6', 0, 'Iniciante', 'Esquivar', 'imediata', 'raio de 4m', 'Jogada Bonus', 'Bruxo', 'Bruxo', 'Aard agora explode a força telecinética à sua volta. Por cada ponto de EST gasto, tudo que é pego pela explosão tem uma chance de 10% de ser derrubado e ficar\r\ndesequilibrado. A explosão vai em todas as direções como uma esfera.\r\nCriaturas que voam e são atingidas por Varredura Aard são derrubadas do ar. Jogue 1d10 para cada alvo derrubado para verificar onde foi ferido, e 1d6 para o dano.', ''),
(70, 'Igni', '1d6', 0, 'Iniciante', 'Esquivar/Bloquear', 'imediata', 'cone de 3m', 'Principal', 'Bruxo', 'Bruxo', 'Igni dispara uma onda de faíscas e fogo que provoca 1d6 de dano por ponto de EST gasto e tem uma chance de 50% de incendiar qualquer coisa atingida. Igni sempre\r\nprovoca dano ao tronco, a menos que usado à queima-roupa. Quando usado à queima-roupa, Igni pode ser mirado em locais do corpo.', ''),
(71, 'Igni Labareda de Fogo', '1d6 por EST', 0, 'Iniciante', 'Esquivar/Bloquear', 'ativo (Metade da EST gasta)', '3m', 'Principal', 'Bruxo', 'Bruxo', 'Igni agora produz uma labareda constante de faíscas e fogo que sai da sua mão faz 1d6 de dano por ponto de EST gasto, e tem uma chance de 75% de pôr fogo no oponente.\r\nA labareda de fogo deve ser mantida a cada rodada com um número de pontos de EST igual a 1/2 do número de pontos de EST gastos para lançar o sinal. Você pode trocar\r\nde alvos em seu turno.', ''),
(72, 'Axii', '', 0, 'Iniciante', 'Resistir Magia', 'até ser superado', '8m', 'Jogada Bonus', 'Bruxo', 'Bruxo', 'Axii atordoa o oponente até que ele consiga fazer um teste de resistência a Atordoamento em -1. Por cada 2 pontos de EST adicionais gastos depois de 1, o teste de resistência a Atordoamento fica mais difícil em 1 ponto.', ''),
(73, 'Marionete', '', 0, 'Iniciante', 'Resistir Magia', 'até ser removido ou acabar EST', '8m', 'Jogada Bonus', 'Bruxo', 'Bruxo', 'Axii agora controla a mente de um oponente, tornando-o um aliado por um número de rodadas igual ao número de pontos de EST gastos no sinal. A cada rodada, o\r\nalvo pode fazer uma jogada de Resistir a Magia contra o seu teste de Lançar Feitiços para tentar se livrar.', ''),
(74, '1', '1', 1, 'Iniciante', 'Esquivar/Bloquear', '1', '1', 'Principal', 'Misturado', 'Mago', '1', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `item_db`
--
ALTER TABLE `item_db`
  ADD PRIMARY KEY (`item_id`);

--
-- Índices para tabela `players_table`
--
ALTER TABLE `players_table`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `player_skill`
--
ALTER TABLE `player_skill`
  ADD PRIMARY KEY (`entry_id`);

--
-- Índices para tabela `skill_db`
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
