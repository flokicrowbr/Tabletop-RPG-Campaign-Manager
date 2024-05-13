
function UpdateINFO(personagemId) {
    
  var helm = document.querySelector(`[helmClassById="${personagemId}"]`).value;
  if (helm == 'Capuz de Arqueiro de Verden') {
    document.querySelector(`[helmdefById="${personagemId}"]`).value = 3;
  } else if (helm == 'Capuz de tecido duplo') {
    document.querySelector(`[helmdefById="${personagemId}"]`).value = 5;
  } else if (helm == 'Capuz com protecao de olhos') {
    document.querySelector(`[helmdefById="${personagemId}"]`).value = 8;
  } else if (helm == 'Touca de Cota de malha') {
    document.querySelector(`[helmdefById="${personagemId}"]`).value = 12;
  } else if (helm == 'Capuz blindado') {
    document.querySelector(`[helmdefById="${personagemId}"]`).value = 14;
  } else if (helm == 'Armet temeriano') {
    document.querySelector(`[helmdefById="${personagemId}"]`).value = 16;
  } else if (helm == 'Grande elmo') {
    document.querySelector(`[helmdefById="${personagemId}"]`).value = 20;
  } else if (helm == 'Elmo Skellige') {
    document.querySelector(`[helmdefById="${personagemId}"]`).value = 25;
  } else if (helm == 'Elmo Nilfgardiano') {
    document.querySelector(`[helmdefById="${personagemId}"]`).value = 30;
  } else if (helm == 'Nenhum') {
    document.querySelector(`[helmdefById="${personagemId}"]`).value = 0;
  }

  var armor = document.querySelector(`[armorClassById="${personagemId}"]`).value;
  if (armor == 'Jaquetao') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 3;
  } else if (armor == 'Jaquetao de Aedirn') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 5;
  } else if (armor == 'Jaquetao de Tecido duplo') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 8;
  } else if (armor == 'Couraca') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 12;
  } else if (armor == 'Armadura de alabardeiro redaniano') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 14;
  } else if (armor == 'Jaqueta lyriana de couro') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 16;
  } else if (armor == 'Armadura de placa') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 20;
  } else if (armor == 'Armadura pesada da ilha hindar') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 25;
  } else if (armor == 'Armadura de placa nilfgardiana') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 30;
  } else if (armor == 'Armadura de Urso') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 20;
  } else if (armor == 'Armadura de Gato') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 6;
  } else if (armor == 'Armadura de Grifo') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 16;
  } else if (armor == 'Armadura de Manticora') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 12;
  } else if (armor == 'Armadura de Vibora') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 8;
  } else if (armor == 'Armadura de Lobo') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 14;
  } else if (armor == 'Armadura de Corvo') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 10;
  } else if (armor == 'Nenhum') {
    document.querySelector(`[armordefById="${personagemId}"]`).value = 0;
  }

  var arms = document.querySelector(`[armsClassById="${personagemId}"]`).value;
  if (arms == 'Braceiras da cavalaria') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 3;
  } else if (arms == 'Braceiras acolchoadas') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 5;
  } else if (arms == 'Braceiras de tecido duplo') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 8;
  } else if (arms == 'Braceiras blindadas') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 12;
  } else if (arms == 'Armadura de Bracos Redanianas') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 14;
  } else if (arms == 'Braceiras Lyrianas de couro') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 16;
  } else if (arms == 'Armadura de Placas para braco') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 20;
  } else if (arms == 'Braceiras pesadas de hindar') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 25;
  } else if (arms == 'Armadura de bracos nilfgardianas') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 30;
  } else if (arms == 'Armadura de Urso') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 20;
  } else if (arms == 'Armadura de Gato') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 6;
  } else if (arms == 'Armadura de Grifo') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 16;
  } else if (arms == 'Armadura de Manticora') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 12;
  } else if (arms == 'Armadura de Vibora') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 8;
  } else if (arms == 'Armadura de Lobo') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 14;
  } else if (arms == 'Armadura de Corvo') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 10;
  } else if (arms == 'Nenhum') {
    document.querySelector(`[armsdefById="${personagemId}"]`).value = 0;
  }
 
}

function UpdateINFO2(personagemId) {
  var legs = document.querySelector(`[legsClassById="${personagemId}"]`).value;
  if (legs == 'Calcas de cavalaria') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 3;
  } else if (legs == 'Calcas acolchoadas') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 5;
  } else if (legs == 'Calcas de tecido duplo') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 8;
  } else if (legs == 'Calcas blindadas') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 12;
  } else if (legs == 'Grevas redaniana') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 14;
  } else if (legs == 'Calcas lyrianas de couro') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 16;
  } else if (legs == 'Grevas de placa') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 20;
  } else if (legs == 'Chausses pesadas de hindas') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 25;
  } else if (legs == 'Grevas Nilfgardianas') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 30;
  } else if (legs == 'Armadura de Urso') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 20;
  } else if (legs == 'Armadura de Gato') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 6;
  } else if (legs == 'Armadura de Grifo') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 16;
  } else if (legs == 'Armadura de Manticora') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 12;
  } else if (legs == 'Armadura de Vibora') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 8;
  } else if (legs == 'Armadura de Lobo') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 14;
  } else if (legs == 'Armadura de Corvo') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 10;
  } else if (legs == 'Nenhum') {
    document.querySelector(`[legsdefById="${personagemId}"]`).value = 0;
  }

  var righthand = document.querySelector(`[RHandById="${personagemId}"]`).value;

  if (righthand == 'Espada Longa de Ferro') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '2d6+2';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Espada de Cavaleiro') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '2d6+4';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Gleddyf') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '3d6+2';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '5';
  } else if (righthand == 'Falcione do Cacador') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '3d6+2';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Krigsverd') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '4d6+4';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Esboda') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '5d6';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Kord') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '5d6 (Sangramento 25%)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Lamina de Vicovaro') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '5d6+4 (Balanceada)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '15';
  } else if (righthand == 'Torrwr') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '6d6 (Sangramento 50%)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '15';
  } else if (righthand == 'Espada de Aco de Bruxo') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '4d6+2';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '15';
  } else if (righthand == 'Espada de Prata de Bruxo') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '1d6+2 (Prata 3d6)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Adaga') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '1d6';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '3';
  } else if (righthand == 'Estilete') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '2d6+2 (Porte Velado)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '3';
  } else if (righthand == 'Punhal') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '2d6+2 (Sangramento 25%)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '3';
  } else if (righthand == 'Jambiya') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '2d6 (Sangramento 25%)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '3';
  } else if (righthand == 'Machado de Mao') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '2d6+1';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Machado de Batalha') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '5d6';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Machado Berserker') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '6d6 (Ablativa)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '15';
  } else if (righthand == 'Soqueira') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '1d6 (Adiciona a Soco)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '1';
  } else if (righthand == 'Maca') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '5d6';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '5';
  } else if (righthand == 'Martelo das Terras Altas') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '6d6+2 (Atordoamento)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Lanca') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '3d6 (Longo Alcance)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '5';
  } else if (righthand == 'Acha de Arma') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '4d6+2 (Longo Alcance)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Alabarda Vermelha') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '6d6+3 (Longo Alcance)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Cajado') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '1d6+2 (Foco 1)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '5';
  } else if (righthand == 'Cajado de Pastor') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '2d6 (Foco 1)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '5';
  } else if (righthand == 'Cajado de Ferro') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '3d6 (Foco 2)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Cajado de Cristal') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '2d6+2 (Foco 3)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Arco Curto') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '3d6+3 (10m)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '2';
  } else if (righthand == 'Arco Longo') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '4d6 (20m)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '2';
  } else if (righthand == 'Arco de Guerra') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '6d6 (30m)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '3';
  } else if (righthand == 'Besta de Mao') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '2d6+2 (10m)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '2';
  } else if (righthand == 'Besta') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '4d6+2 (15m)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '2';
  } else if (righthand == 'Besta de Cacador de Monstros') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = '6d6 (20m)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '4';
  } else if (righthand == 'Escudo de Madeira') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = 'DEF 4';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '4';
  } else if (righthand == 'Broquel de Aco') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = 'DEF 6';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '6';
  } else if (righthand == 'Escudo Temeriano') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = 'DEF 8';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '8';
  } else if (righthand == 'Escudo de Saqueador Skellige') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = 'DEF 10';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '10';
  } else if (righthand == 'Escudo Kaedweni') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = 'DEF 14';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '14';
  } else if (righthand == 'Escudo Lagrima de Aco') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = 'DEF 16';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '16';
  } else if (righthand == 'Pavise') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = 'DEF 20 (Cobertura Completa)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '20';
  } else if (righthand == 'Pavise Nilfgardiano') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = 'DEF 25 (Cobertura Completa)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '25';
  } else if (righthand == 'Escudo Pipa Nilfgardiano') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = 'DEF 30 (Cobertura Completa)';
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = '30';
  } else if (righthand == 'Nenhum') {
    document.querySelector(`[rhanddmgById="${personagemId}"]`).value = 0;
    document.querySelector(`[rhanddurById="${personagemId}"]`).value = 0;
  }

  //Mao esquerda

  var lefthand = document.querySelector(`[LHandById="${personagemId}"]`).value;

  if (lefthand == 'Espada Longa de Ferro') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '2d6+2';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Espada de Cavaleiro') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '2d6+4';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Gleddyf') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '3d6+2';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '5';
  } else if (lefthand == 'Falcione do Cacador') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '3d6+2';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Krigsverd') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '4d6+4';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Esboda') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '5d6';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Kord') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '5d6 (Sangramento 25%)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Lamina de Vicovaro') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '5d6+4 (Balanceada)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '15';
  } else if (lefthand == 'Torrwr') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '6d6 (Sangramento 50%)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '15';
  } else if (lefthand == 'Espada de Aco de Bruxo') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '4d6+2';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '15';
  } else if (lefthand == 'Espada de Prata de Bruxo') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '1d6+2 (Prata 3d6)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Adaga') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '1d6';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '3';
  } else if (lefthand == 'Estilete') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '2d6+2 (Porte Velado)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '3';
  } else if (lefthand == 'Punhal') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '2d6+2 (Sangramento 25%)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '3';
  } else if (lefthand == 'Jambiya') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '2d6 (Sangramento 25%)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '3';
  } else if (lefthand == 'Machado de Mao') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '2d6+1';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Machado de Batalha') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '5d6';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Machado Berserker') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '6d6 (Ablativa)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '15';
  } else if (lefthand == 'Soqueira') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '1d6 (Adiciona a Soco)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '1';
  } else if (lefthand == 'Maca') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '5d6';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '5';
  } else if (lefthand == 'Martelo das Terras Altas') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '6d6+2 (Atordoamento)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Lanca') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '3d6 (Longo Alcance)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '5';
  } else if (lefthand == 'Acha de Arma') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '4d6+2 (Longo Alcance)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Alabarda Vermelha') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '6d6+3 (Longo Alcance)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Cajado') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '1d6+2 (Foco 1)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '5';
  } else if (lefthand == 'Cajado de Pastor') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '2d6 (Foco 1)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '5';
  } else if (lefthand == 'Cajado de Ferro') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '3d6 (Foco 2)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Cajado de Cristal') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '2d6+2 (Foco 3)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Arco Curto') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '3d6+3 (10m)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '2';
  } else if (lefthand == 'Arco Longo') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '4d6 (20m)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '2';
  } else if (lefthand == 'Arco de Guerra') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '6d6 (30m)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '3';
  } else if (lefthand == 'Besta de Mao') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '2d6+2 (10m)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '2';
  } else if (lefthand == 'Besta') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '4d6+2 (15m)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '2';
  } else if (lefthand == 'Besta de Cacador de Monstros') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = '6d6 (20m)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '4';
  } else if (lefthand == 'Escudo de Madeira') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = 'DEF 4';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '4';
  } else if (lefthand == 'Broquel de Aco') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = 'DEF 6';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '6';
  } else if (lefthand == 'Escudo Temeriano') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = 'DEF 8';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '8';
  } else if (lefthand == 'Escudo de Saqueador Skellige') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = 'DEF 10';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '10';
  } else if (lefthand == 'Escudo Kaedweni') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = 'DEF 14';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '14';
  } else if (lefthand == 'Escudo Lagrima de Aco') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = 'DEF 16';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '16';
  } else if (lefthand == 'Pavise') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = 'DEF 20 (Cobertura Completa)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '20';
  } else if (lefthand == 'Pavise Nilfgardiano') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = 'DEF 25 (Cobertura Completa)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '25';
  } else if (lefthand == 'Escudo Pipa Nilfgardiano') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = 'DEF 30 (Cobertura Completa)';
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = '30';
  } else if (lefthand == 'Nenhum') {
    document.querySelector(`[lhanddmgById="${personagemId}"]`).value = 0;
    document.querySelector(`[lhanddurById="${personagemId}"]`).value = 0;
  }

  //var extra1 = document.getElementById("equippedExtra1").value;
}

function UpdateLV(personagemId) {  
  var b_exp = document.querySelector(`[expById="${personagemId}"]`).value;
  var level = document.querySelector(`[levelById="${personagemId}"]`).value;

  if (b_exp >= 1 && b_exp <= 199) {
    level = '1';
    document.querySelector(`[levelById="${personagemId}"]`).value = 1;
  }else if (b_exp >= 200 && b_exp <= 399) {
    level = '2';
    document.querySelector(`[levelById="${personagemId}"]`).value = 2;
  }else if (b_exp >= 400 && b_exp <= 799) {
    level = '3';
    document.querySelector(`[levelById="${personagemId}"]`).value = 3;
  }else if (b_exp >= 800 && b_exp <= 1599) {
    level = '4';
    document.querySelector(`[levelById="${personagemId}"]`).value = 4;
  }else if (b_exp >= 1600 && b_exp <= 3199) {
    level = '5';
    document.querySelector(`[levelById="${personagemId}"]`).value = 5;
  }else if (b_exp >= 3200 && b_exp <= 6399) {
    level = '6';
    document.querySelector(`[levelById="${personagemId}"]`).value = 6;
  }else if (b_exp >= 6400 && b_exp <= 12799) {
    level = '7';
    document.querySelector(`[levelById="${personagemId}"]`).value = 7;
  }else if (b_exp >= 12800 && b_exp <= 25599) {
    level = '8';
    document.querySelector(`[levelById="${personagemId}"]`).value = 8;
  }else if (b_exp >= 25600 && b_exp <= 51199) {
    level = '9';
    document.querySelector(`[levelById="${personagemId}"]`).value = 9;
  }else if (b_exp >= 51200 && b_exp <= 102399) {
    level = '10';
    document.querySelector(`[levelById="${personagemId}"]`).value = 10;
  }
}

function TakeDamage() {
  var amount = document.getElementById("modHP").value;
  var currentHP = document.getElementById("currentHP").value;
  if ((currentHP - amount) >= 0) {
    document.getElementById("currentHP").value = currentHP - amount;
  } else {
    document.getElementById("currentHP").value = 0;
  }
}

function HealHP() {
  var amount = parseInt(document.getElementById("modHP").value);
  var currentHP = parseInt(document.getElementById("currentHP").value);
  var maxHP = parseInt(document.getElementById("maxHP").value);
  if((currentHP + amount) <= maxHP) {
    document.getElementById("currentHP").value = currentHP + amount;
  } else {
    document.getElementById("currentHP").value = maxHP;
  }
}

function updateModifiers(personagemId) {
  

  var strScore = document.querySelector(`[strScore="${personagemId}"]`).value;
  document.querySelector(`[strMod="${personagemId}"]`).value = Math.floor((strScore - 10) / 2);

  var dexScore = document.querySelector(`[dexScore="${personagemId}"]`).value;
  document.querySelector(`[dexMod="${personagemId}"]`).value = Math.floor((dexScore - 10) / 2);

  var wisScore = document.querySelector(`[wisScore="${personagemId}"]`).value;
  document.querySelector(`[wisMod="${personagemId}"]`).value = Math.floor((wisScore - 10) / 2);

  var conScore = document.querySelector(`[conScore="${personagemId}"]`).value;
  document.querySelector(`[conMod="${personagemId}"]`).value = Math.floor((conScore - 10) / 2);

  var chaScore = document.querySelector(`[chaScore="${personagemId}"]`).value;
  document.querySelector(`[chaMod="${personagemId}"]`).value = Math.floor((chaScore - 10) / 2);

  var intScore = document.querySelector(`[intScore="${personagemId}"]`).value;
  document.querySelector(`[intMod="${personagemId}"]`).value = Math.floor((intScore - 10) / 2);

  var agiScore = document.querySelector(`[agiScore="${personagemId}"]`).value;
  document.querySelector(`[agiMod="${personagemId}"]`).value = Math.floor((agiScore - 10) / 2);

  setSkills();
  enableArmor();
  updateAC();
}

function show(e) {
  if (e.classList.contains("glyphicon-plus")) { //se tem olho aberto
    e.classList.remove("glyphicon-plus"); //remove classe olho aberto
    e.classList.add("glyphicon-minus"); //coloca classe olho fechado
  } else {
    e.classList.remove("glyphicon-minus"); //remove classe olho fechado
    e.classList.add("glyphicon-plus"); //coloca classe olho aberto
  }
}

function show2(e) {
  if (e.classList.contains("glyphicon-plus")) { //se tem olho aberto
    e.classList.remove("glyphicon-plus"); //remove classe olho aberto
    e.classList.add("glyphicon-minus"); //coloca classe olho fechado
  } else {
    e.classList.remove("glyphicon-minus"); //remove classe olho fechado
    e.classList.add("glyphicon-plus"); //coloca classe olho aberto
  }
}
