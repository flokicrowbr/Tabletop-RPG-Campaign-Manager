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

function updateModifiers() {
  

  var strScore = document.getElementById("strScore").value;
  document.getElementById("strMod").value = Math.floor((strScore - 10) / 2);

  var dexScore = document.getElementById("dexScore").value;
  document.getElementById("dexMod").value = Math.floor((dexScore - 10) / 2);

  var wisScore = document.getElementById("wisScore").value;
  document.getElementById("wisMod").value = Math.floor((wisScore - 10) / 2);

  var conScore = document.getElementById("conScore").value;
  document.getElementById("conMod").value = Math.floor((conScore - 10) / 2);

  var chaScore = document.getElementById("chaScore").value;
  document.getElementById("chaMod").value = Math.floor((chaScore - 10) / 2);

  var intScore = document.getElementById("intScore").value;
  document.getElementById("intMod").value = Math.floor((intScore - 10) / 2);

  var agiScore = document.getElementById("agiScore").value;
  document.getElementById("agiMod").value = Math.floor((agiScore - 10) / 2);

  setSkills();
  enableArmor();
  updateAC();
}