function UpdateINFO() {
    
    var helm = document.getElementById("equippedHelm").value;
    if (helm == 'Capuz de Arqueiro de Verden') {
      document.getElementById("helmClass").value = 3;
    } else if (helm == 'Capuz de tecido duplo') {
      document.getElementById("helmClass").value = 5;
    } else if (helm == 'Capuz com protecao de olhos') {
      document.getElementById("helmClass").value = 8;
    } else if (helm == 'Touca de Cota de malha') {
        document.getElementById("helmClass").value = 12;
    } else if (helm == 'Capuz blindado') {
        document.getElementById("helmClass").value = 14;
    } else if (helm == 'Armet temeriano') {
        document.getElementById("helmClass").value = 16;
    } else if (helm == 'Grande elmo') {
        document.getElementById("helmClass").value = 20;
    } else if (helm == 'Elmo Skellige') {
        document.getElementById("helmClass").value = 25;
    } else if (helm == 'Elmo Nilfgardiano') {
        document.getElementById("helmClass").value = 30;
    } else if (helm == 'Nenhum') {
        document.getElementById("helmClass").value = 0;
    }

    var armor = document.getElementById("equippedArmor").value;
    if (armor == 'Jaquetao') {
      document.getElementById("armorClass").value = 3;
    } else if (armor == 'Jaquetao de Aedirn') {
      document.getElementById("armorClass").value = 5;
    } else if (armor == 'Jaquetao de Tecido duplo') {
      document.getElementById("armorClass").value = 8;
    } else if (armor == 'Couraca') {
      document.getElementById("armorClass").value = 12;
    } else if (armor == 'Armadura de alabardeiro redaniano') {
      document.getElementById("armorClass").value = 14;
    } else if (armor == 'Jaqueta lyriana de couro') {
      document.getElementById("armorClass").value = 16;
    } else if (armor == 'Armadura de placa') {
      document.getElementById("armorClass").value = 20;
    } else if (armor == 'Armadura pesada da ilha hindar') {
      document.getElementById("armorClass").value = 25;
    } else if (armor == 'Armadura de placa nilfgardiana') {
      document.getElementById("armorClass").value = 30;
    } else if (armor == 'Armadura de Urso') {
      document.getElementById("armorClass").value = 20;
    } else if (armor == 'Armadura de Gato') {
      document.getElementById("armorClass").value = 6;
    } else if (armor == 'Armadura de Grifo') {
      document.getElementById("armorClass").value = 16;
    } else if (armor == 'Armadura de Manticora') {
      document.getElementById("armorClass").value = 12;
    } else if (armor == 'Armadura de Vibora') {
      document.getElementById("armorClass").value = 8;
    } else if (armor == 'Armadura de Lobo') {
      document.getElementById("armorClass").value = 14;
    } else if (armor == 'Armadura de Corvo') {
      document.getElementById("armorClass").value = 10;
    } else if (armor == 'Nenhum') {
      document.getElementById("armorClass").value = 0;
    }

    var arms = document.getElementById("equippedArms").value;
    if (arms == 'Braceiras da cavalaria') {
      document.getElementById("armsClass").value = 3;
    } else if (arms == 'Braceiras acolchoadas') {
      document.getElementById("armsClass").value = 5;
    } else if (arms == 'Braceiras de tecido duplo') {
      document.getElementById("armsClass").value = 8;
    } else if (arms == 'Braceiras blindadas') {
      document.getElementById("armsClass").value = 12;
    } else if (arms == 'Armadura de Bracos Redanianas') {
      document.getElementById("armsClass").value = 14;
    } else if (arms == 'Braceiras Lyrianas de couro') {
      document.getElementById("armsClass").value = 16;
    } else if (arms == 'Armadura de Placas para braco') {
      document.getElementById("armsClass").value = 20;
    } else if (arms == 'Braceiras pesadas de hindar') {
      document.getElementById("armsClass").value = 25;
    } else if (arms == 'Armadura de bracos nilfgardianas') {
      document.getElementById("armsClass").value = 30;
    } else if (arms == 'Armadura de Urso') {
      document.getElementById("armsClass").value = 20;
    } else if (arms == 'Armadura de Gato') {
      document.getElementById("armsClass").value = 6;
    } else if (arms == 'Armadura de Grifo') {
      document.getElementById("armsClass").value = 16;
    } else if (arms == 'Armadura de Manticora') {
      document.getElementById("armsClass").value = 12;
    } else if (arms == 'Armadura de Vibora') {
      document.getElementById("armsClass").value = 8;
    } else if (arms == 'Armadura de Lobo') {
      document.getElementById("armsClass").value = 14;
    } else if (arms == 'Armadura de Corvo') {
      document.getElementById("armsClass").value = 10;
    } else if (arms == 'Nenhum') {
      document.getElementById("armsClass").value = 0;
    }
   
  }

  function UpdateINFO2() {
    var legs = document.getElementById("equippedLegs").value;
    if (legs == 'Calcas de cavalaria') {
      document.getElementById("legsClass").value = 3;
    } else if (legs == 'Calcas acolchoadas') {
      document.getElementById("legsClass").value = 5;
    } else if (legs == 'Calcas de tecido duplo') {
      document.getElementById("legsClass").value = 8;
    } else if (legs == 'Calcas blindadas') {
      document.getElementById("legsClass").value = 12;
    } else if (legs == 'Grevas redaniana') {
      document.getElementById("legsClass").value = 14;
    } else if (legs == 'Calcas lyrianas de couro') {
      document.getElementById("legsClass").value = 16;
    } else if (legs == 'Grevas de placa') {
      document.getElementById("legsClass").value = 20;
    } else if (legs == 'Chausses pesadas de hindas') {
      document.getElementById("legsClass").value = 25;
    } else if (legs == 'Grevas Nilfgardianas') {
      document.getElementById("legsClass").value = 30;
    } else if (legs == 'Armadura de Urso') {
      document.getElementById("legsClass").value = 20;
    } else if (legs == 'Armadura de Gato') {
      document.getElementById("legsClass").value = 6;
    } else if (legs == 'Armadura de Grifo') {
      document.getElementById("legsClass").value = 16;
    } else if (legs == 'Armadura de Manticora') {
      document.getElementById("legsClass").value = 12;
    } else if (legs == 'Armadura de Vibora') {
      document.getElementById("legsClass").value = 8;
    } else if (legs == 'Armadura de Lobo') {
      document.getElementById("legsClass").value = 14;
    } else if (legs == 'Armadura de Corvo') {
      document.getElementById("legsClass").value = 10;
    } else if (legs == 'Nenhum') {
      document.getElementById("legsClass").value = 0;
    }

    var righthand = document.getElementById("equippedRHand").value;

    if (righthand == 'Espada Longa de Ferro') {
      document.getElementById("rhandClass").value = '2d6+2';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Espada de Cavaleiro') {
      document.getElementById("rhandClass").value = '2d6+4';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Gleddyf') {
      document.getElementById("rhandClass").value = '3d6+2';
      document.getElementById("righthanddur").value = '5';
    } else if (righthand == 'Falcione do Cacador') {
      document.getElementById("rhandClass").value = '3d6+2';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Krigsverd') {
      document.getElementById("rhandClass").value = '4d6+4';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Esboda') {
      document.getElementById("rhandClass").value = '5d6';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Kord') {
      document.getElementById("rhandClass").value = '5d6 (Sangramento 25%)';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Lamina de Vicovaro') {
      document.getElementById("rhandClass").value = '5d6+4 (Balanceada)';
      document.getElementById("righthanddur").value = '15';
    } else if (righthand == 'Torrwr') {
      document.getElementById("rhandClass").value = '6d6 (Sangramento 50%)';
      document.getElementById("righthanddur").value = '15';
    } else if (righthand == 'Espada de Aco de Bruxo') {
      document.getElementById("rhandClass").value = '4d6+2';
      document.getElementById("righthanddur").value = '15';
    } else if (righthand == 'Espada de Prata de Bruxo') {
      document.getElementById("rhandClass").value = '1d6+2 (Prata 3d6)';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Adaga') {
      document.getElementById("rhandClass").value = '1d6';
      document.getElementById("righthanddur").value = '3';
    } else if (righthand == 'Estilete') {
      document.getElementById("rhandClass").value = '2d6+2 (Porte Velado)';
      document.getElementById("righthanddur").value = '3';
    } else if (righthand == 'Punhal') {
      document.getElementById("rhandClass").value = '2d6+2 (Sangramento 25%)';
      document.getElementById("righthanddur").value = '3';
    } else if (righthand == 'Jambiya') {
      document.getElementById("rhandClass").value = '2d6 (Sangramento 25%)';
      document.getElementById("righthanddur").value = '3';
    } else if (righthand == 'Machado de Mao') {
      document.getElementById("rhandClass").value = '2d6+1';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Machado de Batalha') {
      document.getElementById("rhandClass").value = '5d6';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Machado Berserker') {
      document.getElementById("rhandClass").value = '6d6 (Ablativa)';
      document.getElementById("righthanddur").value = '15';
    } else if (righthand == 'Soqueira') {
      document.getElementById("rhandClass").value = '1d6 (Adiciona a Soco)';
      document.getElementById("righthanddur").value = '1';
    } else if (righthand == 'Maca') {
      document.getElementById("rhandClass").value = '5d6';
      document.getElementById("righthanddur").value = '5';
    } else if (righthand == 'Martelo das Terras Altas') {
      document.getElementById("rhandClass").value = '6d6+2 (Atordoamento)';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Lanca') {
      document.getElementById("rhandClass").value = '3d6 (Longo Alcance)';
      document.getElementById("righthanddur").value = '5';
    } else if (righthand == 'Acha de Arma') {
      document.getElementById("rhandClass").value = '4d6+2 (Longo Alcance)';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Alabarda Vermelha') {
      document.getElementById("rhandClass").value = '6d6+3 (Longo Alcance)';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Cajado') {
      document.getElementById("rhandClass").value = '1d6+2 (Foco 1)';
      document.getElementById("righthanddur").value = '5';
    } else if (righthand == 'Cajado de Pastor') {
      document.getElementById("rhandClass").value = '2d6 (Foco 1)';
      document.getElementById("righthanddur").value = '5';
    } else if (righthand == 'Cajado de Ferro') {
      document.getElementById("rhandClass").value = '3d6 (Foco 2)';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Cajado de Cristal') {
      document.getElementById("rhandClass").value = '2d6+2 (Foco 3)';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Arco Curto') {
      document.getElementById("rhandClass").value = '3d6+3 (10m)';
      document.getElementById("righthanddur").value = '2';
    } else if (righthand == 'Arco Longo') {
      document.getElementById("rhandClass").value = '4d6 (20m)';
      document.getElementById("righthanddur").value = '2';
    } else if (righthand == 'Arco de Guerra') {
      document.getElementById("rhandClass").value = '6d6 (30m)';
      document.getElementById("righthanddur").value = '3';
    } else if (righthand == 'Besta de Mao') {
      document.getElementById("rhandClass").value = '2d6+2 (10m)';
      document.getElementById("righthanddur").value = '2';
    } else if (righthand == 'Besta') {
      document.getElementById("rhandClass").value = '4d6+2 (15m)';
      document.getElementById("righthanddur").value = '2';
    } else if (righthand == 'Besta de Cacador de Monstros') {
      document.getElementById("rhandClass").value = '6d6 (20m)';
      document.getElementById("righthanddur").value = '4';
    } else if (righthand == 'Escudo de Madeira') {
      document.getElementById("rhandClass").value = 'DEF 4';
      document.getElementById("righthanddur").value = '4';
    } else if (righthand == 'Broquel de Aco') {
      document.getElementById("rhandClass").value = 'DEF 6';
      document.getElementById("righthanddur").value = '6';
    } else if (righthand == 'Escudo Temeriano') {
      document.getElementById("rhandClass").value = 'DEF 8';
      document.getElementById("righthanddur").value = '8';
    } else if (righthand == 'Escudo de Saqueador Skellige') {
      document.getElementById("rhandClass").value = 'DEF 10';
      document.getElementById("righthanddur").value = '10';
    } else if (righthand == 'Escudo Kaedweni') {
      document.getElementById("rhandClass").value = 'DEF 14';
      document.getElementById("righthanddur").value = '14';
    } else if (righthand == 'Escudo Lagrima de Aco') {
      document.getElementById("rhandClass").value = 'DEF 16';
      document.getElementById("righthanddur").value = '16';
    } else if (righthand == 'Pavise') {
      document.getElementById("rhandClass").value = 'DEF 20 (Cobertura Completa)';
      document.getElementById("righthanddur").value = '20';
    } else if (righthand == 'Pavise Nilfgardiano') {
      document.getElementById("rhandClass").value = 'DEF 25 (Cobertura Completa)';
      document.getElementById("righthanddur").value = '25';
    } else if (righthand == 'Escudo Pipa Nilfgardiano') {
      document.getElementById("rhandClass").value = 'DEF 30 (Cobertura Completa)';
      document.getElementById("righthanddur").value = '30';
    } else if (righthand == 'Nenhum') {
      document.getElementById("rhandClass").value = 0;
      document.getElementById("righthanddur").value = 0;
    }

    var extra1 = document.getElementById("equippedExtra1").value;
  }

  function UpdateLV() {

    var b_exp = document.getElementById("b_exp").value;
    

    if (b_exp >= 1 && b_exp <= 199) {
      document.getElementById("classLevel").value = 1;
    }else if (b_exp >= 200 && b_exp <= 399) {
      document.getElementById("classLevel").value = 2;
    }else if (b_exp >= 400 && b_exp <= 799) {
      document.getElementById("classLevel").value = 3;
    }else if (b_exp >= 800 && b_exp <= 1599) {
      document.getElementById("classLevel").value = 4;
    }else if (b_exp >= 1600 && b_exp <= 3199) {
      document.getElementById("classLevel").value = 5;
    }else if (b_exp >= 3200 && b_exp <= 6399) {
      document.getElementById("classLevel").value = 6;
    }else if (b_exp >= 6400 && b_exp <= 12799) {
      document.getElementById("classLevel").value = 7;
    }else if (b_exp >= 12800 && b_exp <= 25599) {
      document.getElementById("classLevel").value = 8;
    }else if (b_exp >= 25600 && b_exp <= 51199) {
      document.getElementById("classLevel").value = 9;
    }else if (b_exp >= 51200 && b_exp <= 102399) {
      document.getElementById("classLevel").value = 10;
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