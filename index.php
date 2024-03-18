<?php
include('db.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>RPG de Mesa</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</head>
<body style="background-color: #dfdfe8">
<div class="container">
<center><img src="img/rpgdemesa.png" class="rounded mx-auto d-block" alt="rpgdemesa"></center>
</div>
	<div class="container">
	<h2 class="text-center"></h2><br><br>
<!-- Remover
	<a href="#" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
-->
	<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
  <i class="fa fa-plus"></i> Adicionar Personagem</button>
  <a href="skills.php" class="btn btn-primary"><i class="fa fa-light fa-book-quran"></i> Habilidades</a>
  <a href="#" class="btn btn-primary"><i class="fa fa-light fa-suitcase"></i> Itens</a>
  <a href="#" class="btn btn-primary"><i class="fa fa-light fa-flask"></i> Alquimia</a>

  <!-- Remover
  <a href="#" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> Exportar em PDF</a>
-->
  <hr>
		<table class="table table-bordered table-striped table-hover" id="myTable">
		<thead>
			<tr>
			   <th class="text-center" scope="col">ID</th> 				<!-- ID do Personagem  -->
				<th class="text-center" scope="col">Nome</th>				<!-- Nome do Personagem  -->
				<th class="text-center" scope="col">Ouro</th>
				<th class="text-center" scope="col">Nivel</th>
				<th class="text-center" scope="col">HP / EST</th>
				<th class="text-center" scope="col">Equipamentos</th>
				<th class="text-center" scope="col">Mao D / Mao E</th>
				<th class="text-center" scope="col">Opcoes</th>

			</tr>
		</thead>
			<?php

        	$get_data = "SELECT * FROM players_table order by 1 desc";
        	$run_data = mysqli_query($con,$get_data);
			$i = 0;
        	while($row = mysqli_fetch_array($run_data))
        	{
				$sl = ++$i;
				$id = $row['id'];
				$u_gold = $row['u_gold'];
				$u_name = $row['u_name'];
				$u_l_name = $row['u_l_name'];
				$u_level = $row['u_level'];
				$u_exp = $row['u_exp'];
				$u_a_hp = $row['u_a_hp'];
				$u_t_hp = $row['u_t_hp'];
				$u_a_est = $row['u_a_est'];
				$u_t_est = $row['u_t_est'];
				$u_helm = $row['u_helm'];
				$u_helmdef = $row['u_helmdef'];
				$u_helmdur = $row['u_helmdur'];
				$u_armor = $row['u_armor'];
				$u_armordef = $row['u_armordef'];
				$u_armordur = $row['u_armordur'];
				$u_arms = $row['u_arms'];
				$u_armsdef = $row['u_armsdef'];
				$u_armsdur = $row['u_armsdur'];
				$u_legs = $row['u_legs'];
				$u_legsdef = $row['u_legsdef'];
				$u_legsdur = $row['u_legsdur'];
				$u_righthand = $row['u_righthand'];
				$u_righthandnum = $row['u_righthandnum'];
				$u_righthanddur = $row['u_righthanddur'];
				$u_lefthandnum = $row['u_lefthandnum'];
				$u_lefthanddur = $row['u_lefthanddur'];
				$u_extraequipnum = $row['u_extraequipnum'];
				$u_extraequipdur = $row['u_extraequipdur'];
        		$image = $row['image'];

        		echo "

				<tr>
				<td class='text-center'>$sl</td>
				<td class='text-center'>$u_name   $u_l_name</td>
				<td class='text-center'>$u_gold</td>
				<td class='text-center'>$u_level</td>
				<td class='text-right'><b>HP: </b> &nbsp; $u_a_hp &nbsp;  / &nbsp;  $u_t_hp <br> <b>EST:</b> &nbsp; $u_a_est &nbsp;  / &nbsp;  $u_t_est</td>
				<td class='text-right'><b>$u_helm:</b> &nbsp; $u_helmdef &nbsp;  / &nbsp;  $u_helmdur <br>
										<b>$u_armor:</b> &nbsp; $u_armordef &nbsp;  / &nbsp;  $u_armordur <br>
										<b>$u_arms:</b> &nbsp; $u_armsdef &nbsp;  / &nbsp;  $u_armsdur <br>
										<b>$u_legs:</b> &nbsp; $u_legsdef &nbsp;  / &nbsp;  $u_legsdur <br>
				</td>
				<td class='text-center'><b>$u_righthand</b> <br> $u_righthandnum <br> <b>$u_righthand</b><br> $u_righthandnum</td>

			
				<td class='text-center'>
				
					<span>
					<a href='#' class='btn btn-success mr-3 profile' data-toggle='modal' data-target='#view$id' title='Ficha'><i class='fa fa-address-card' aria-hidden='true'></i></a>
					<a href='#' class='btn btn-warning mr-3 edituser' data-toggle='modal' data-target='#edit$id' title='Editar'><i class='fa fa-pencil-square-o fa-lg'></i></a>
					<a href='#' class='btn btn-primary mr-3 itembag' data-toggle='modal' data-target='#edit$id' title='Inventario'><i class='fa fa-suitcase fa-lg'></i></a>
					<br><br>
					<a href='#' class='btn btn-info mr-3 skills' data-toggle='modal' data-target='#edit$id' title='Habilidades'><i class='fa fa-book-quran fa-lg'></i></a>
					<a href='#' class='btn btn-alchemy mr-3 alchemy' data-toggle='modal' data-target='#edit$id' title='Alquimia'><i class='fa fa-flask fa-lg'></i></a>
					<a href='#' class='btn btn-danger deleteuser' title='Deletar'>
					<i class='fa fa-trash fa-lg' data-toggle='modal' data-target='#$id' style='' aria-hidden='true'></i>
			   </a>
					</span>
					
					
					
				</td>
			</tr>


        		";
        	}

        	?>

			
			
		</table>
		<form method="post" action="export.php">
			<!-- Remover
     <input type="submit" name="export" class="btn btn-success" value="Exportar" /> 
		-->
    </form>
	</div>


	<!---Adicionado modal---->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal conteudo-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		<center><img src="img/rpgdemesa.png" width="300px" height="180px" alt=""></center>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">
			
			<!-- Teste de Modal  -->
			
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">Ouro</label>
<input type="text" class="form-control" name="u_gold" placeholder="Quantidade de ouro." maxlength="12" required>
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Nivel</label>
<input type="level" class="form-control" name="user_level" placeholder="Nivel do personagem." maxlength="3" required>
</div>
</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="firstname">Nome</label>
<input type="text" class="form-control" name="u_name" placeholder="Nome do Personagem">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputState">Sexo</label>
<select id="inputState" name="user_gender" class="form-control">
  <option selected>Escolha...</option>
  <option>Homem</option>
  <option>Mulher</option>
  <option>Indefinido</option>
</select>
</div>
<div class="form-group col-md-12">
<label for="inputPassword4">Date de Nascimento</label>
<input type="date" class="form-control" name="user_dob" placeholder="Date of Birth">
</div>
</div>


			


        	<div class="form-group">
        		<label>Imagem</label>
        		<input type="file" name="image" class="form-control" >
        	</div>

        	
        	 <input type="submit" name="submit" class="btn btn-info btn-large" value="Salvar">
        	
        	
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>


<!------DELETE modal---->




<!-- Modal -->
<?php

$get_data = "SELECT * FROM players_table";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	echo "

<div id='$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>Você tem certeza??</h4>
      </div>
      <div class='modal-body'>
        <a href='delete.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
      </div>
      
    </div>

  </div>
</div>


	";
	
}


?>


<!-- Ver modal  -->
<?php 

// <!-- perfil modal inicio -->
$get_data = "SELECT * FROM players_table";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	$u_gold = $row['u_gold'];
	$strScore = $row['u_strScore'];
	$dexScore = $row['u_dexScore'];
	$wisScore = $row['u_wisScore'];
	$conScore = $row['u_conScore'];
	$chaScore = $row['u_chaScore'];
	$intScore = $row['u_intScore'];
	$agiScore = $row['u_agiScore'];
	$u_name = $row['u_name'];
	$name2 = $row['u_l_name'];
	$u_a_hp = $row['u_a_hp'];
	$u_t_hp = $row['u_t_hp'];
	$u_a_est = $row['u_a_est'];
	$u_t_est = $row['u_t_est'];
	$gender = $row['u_gender'];
	$race = $row['u_race'];
	$class = $row['u_class'];
	$helm = $row['u_helm'];
	$helm_def = $row['u_helmdef'];
	$helm_dur = $row['u_helmdur'];
	$armor = $row['u_armor'];
	$armor_def = $row['u_armordef'];
	$armor_dur = $row['u_armordur'];
	$arms = $row['u_arms'];
	$arms_def = $row['u_armsdef'];
	$arms_dur = $row['u_armsdur'];
	$legs = $row['u_legs'];
	$legs_def = $row['u_legsdef'];
	$legs_dur = $row['u_legsdur'];
	$righthand = $row['u_righthand'];
	$righthandnum = $row['u_righthandnum'];
	$righthanddur = $row['u_righthanddur'];
	$lefthand = $row['u_lefthand'];
	$lefthandnum = $row['u_lefthandnum'];
	$lefthanddur = $row['u_lefthanddur'];
	$extraequip = $row['u_extraequip'];
	$extraequipnum = $row['u_extraequipnum'];
	$extraequipdur = $row['u_extraequipdur'];
	$Bday = $row['u_birthday'];
	$level = $row['u_level'];
	$exp = $row['u_exp'];
	$village = $row['u_village'];
	$dist = $row['u_dist'];
	$time = $row['uploaded'];
	
	$image = $row['image'];
	echo "

		<div class='modal fade' id='view$id' tabindex='-1' role='dialog' aria-labelledby='userViewModalLabel' aria-hidden='true'>
		<div class='modal-dialog'>
			<div class='modal-content'>
			<div class='modal-header'>
				<h5 class='modal-title' id='exampleModalLabel'>Perfil <i class='fa fa-user-circle-o' aria-hidden='true'></i></h5>
				<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
				<span aria-hidden='true'>&times;</span>
				</button>
			</div>
			<div class='modal-body'>
			<div class='container' id='profile'> 
				<div class='row'>
					<div class='col-sm-4 col-md-2'>
						<img src='upload_images/$image' class='img-circle' alt='' style='width: 150px; height: 150px;' ><br>
		
						<i class='fa fa-coins' aria-hidden='true'></i> $u_gold<br>
						<i class='fa fa-user' aria-hidden='true'></i> $level  <br>
						Data de Criacao : $time
					</div>
					<div class='col-sm-3 col-md-6'>
						<h3 class='text-primary'>$u_name $name2</h3>
						<p class='text-secondary'>
						<strong>HP:</strong> $u_a_hp	/ $u_t_hp<br>
						<strong>EST:</strong> $u_a_est	/ $u_t_est<br>
						<strong>Aadhar :</strong> <br>
						<i class='fa fa-venus-mars' aria-hidden='true'></i> $gender
						<br />
						<i class='fa fa-venus-mars' aria-hidden='true'></i> $race
						<br />
						<i class='fa fa-venus-mars' aria-hidden='true'></i> $class
						<br />
						<i class='fa fa-envelope-o' aria-hidden='true'></i> $helm
						<br />
						<div class='card' style='width: 18rem;'>
						<i class='fa fa-users' aria-hidden='true'></i> Familiy :
								<div class='card-body'>
								<p> Var </p>
								</div>
						</div>
						
						<i class='fa fa-home' aria-hidden='true'> Address : </i> $village, var, <br> var - var
						<br />
						</p>
						<!-- Split button -->
					</div>
				</div>

			</div>   
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
			</div>
			</form>
			</div>
		</div>
		</div> 


    ";
}


// <!-- perfil modal termino -->


?>





<!----edição de dados--->

<?php

$get_data = "SELECT * FROM players_table";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	$level = $row['u_level'];
	$exp = $row['u_exp'];
	$u_gold = $row['u_gold'];
	$strScore = $row['u_strScore'];
	$dexScore = $row['u_dexScore'];
	$wisScore = $row['u_wisScore'];
	$conScore = $row['u_conScore'];
	$chaScore = $row['u_chaScore'];
	$intScore = $row['u_intScore'];
	$agiScore = $row['u_agiScore'];
	$u_name = $row['u_name'];
	$name2 = $row['u_l_name'];
	$race = $row['u_race'];
	$class = $row['u_class'];
	$u_a_hp = $row['u_a_hp'];
	$u_t_hp = $row['u_t_hp'];
	$u_a_est = $row['u_a_est'];
	$u_t_est = $row['u_t_est'];
	$gender = $row['u_gender'];
	$helm = $row['u_helm'];
	$helm_def = $row['u_helmdef'];
	$helm_dur = $row['u_helmdur'];
	$armor = $row['u_armor'];
	$armor_def = $row['u_armordef'];
	$armor_dur = $row['u_armordur'];
	$arms = $row['u_arms'];
	$arms_def = $row['u_armsdef'];
	$arms_dur = $row['u_armsdur'];
	$legs = $row['u_legs'];
	$legs_def = $row['u_legsdef'];
	$legs_dur = $row['u_legsdur'];
	$righthand = $row['u_righthand'];
	$righthandnum = $row['u_righthandnum'];
	$righthanddur = $row['u_righthanddur'];
	$lefthand = $row['u_lefthand'];
	$lefthandnum = $row['u_lefthandnum'];
	$lefthanddur = $row['u_lefthanddur'];
	$extraequip = $row['u_extraequip'];
	$extraequipnum = $row['u_extraequipnum'];
	$extraequipdur = $row['u_extraequipdur'];
	$Bday = $row['u_birthday'];
	$village = $row['u_village'];
	$time = $row['uploaded'];
	$image = $row['image'];
	echo "

<div id='edit$id' class='modal fade' role='dialog'>
  <div class='modal-lg'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
             <button type='button' class='close' data-dismiss='modal'>&times;</button>
             <h4 class='modal-title text-center'>Editar Ficha</h4> 
      </div>

      <div class='modal-body'>
        <form action='edit.php?id=$id' method='post' enctype='multipart/form-data'>

		<div class='form-group col-md-4'>
		<label for='firstname'>Nome</label>
		<input type='text' class='form-control' name='user_first_name' placeholder='Nome do Personagem' value='$u_name'>
		</div>

		<div class='form-group col-md-2'>
		<label for='inputLV'>Nivel</label>
		<input type='number' id='classLevel' levelById='$id' class='form-control' name='user_level' placeholder='Nivel.' maxlength='2' value='$level' personagemId='$id' required>
		</div>
		<div class='form-group col-md-2'>
		<label for='inputEXP'>EXP</label>
		<input type='number' class='form-control' name='user_exp' placeholder='EXP do Personagem.' id='b_exp' expById='$id' maxlength='6' onchange='UpdateLV($id)' value='$exp' required>
		</div>

		<div class='form-row'>
		<div class='form-group col-md-2'>
		<label for='inputEmail4'>Ouro</label>
		<input type='number' class='form-control' name='card_no' placeholder='Ouro.' maxlength='12' value='$u_gold' required>
		</div>
		</div>

		<div class='form-row'>
		<div class='form-group col-md-2'>
		<label for='inputState'>Sexo</label>
		<select id='inputState' name='user_gender' class='form-control' value='$gender'>
		  <option selected>$gender</option>
		  <option>Homem</option>
		  <option>Mulher</option>
		  <option>Indefinido</option>
		</select>
		</div>
		</div>
		
		<div class='form-row'>
		<div class='form-group col-md-5'>
		<label for='inputState'>Raca</label>
		<select id='inputState' name='user_race' class='form-control' value='$race'>
		  <option selected>$race</option>
		  <option>Humano</option>
		  <option>Elfo</option>
		  <option>Anao</option>
		  <option>Bruxo</option>
		</select>
		</div>

		<div class='form-group col-md-5'>
		<label for='inputState'>Classe</label>
		<select id='inputState' name='user_class' class='form-control' value='$class'>
		  <option selected>$class</option>
		  <option>Bruxo</option>
		  <option>Homem de Armas</option>
		  <option>Bardo</option>
		  <option>Ladino</option>
		  <option>Mago</option>
		</select>
		</div>

		<div class='form-group col-md-2'>
		<label for='currentHP'>Vigor</label>
		<input type='number' class='form-control' name='u_a_hp' placeholder='Vigor' value='$u_a_hp'>
		</div>

		
		</div>
		
		
		
		<div class='form-row'>
		<div class='form-group col-md-3'>
		<label for='currentHP'>HP Atual</label>
		<input type='number' class='form-control' name='u_a_hp' placeholder='HP Atual' value='$u_a_hp'>
		</div>
		<div class='form-group col-md-3'>
		<label for='maxHP'>HP Total</label>
		<input type='number' class='form-control' name='u_t_hp' placeholder='HP Total' value='$u_t_hp'>
		</div>


		<div class='form-group col-md-3'>
		<label for='modHP'>Modificador</label>
		<input type='number' class='form-control' id='modHP'>
		</div>
		
		<div class='form-group col-md-3'>
		<label for='buttonHP'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<span class='btn btn-danger' onclick='takeDamage();'>Dano HP</span>
		<span class='btn btn-success' onclick='healHP();'>Recuperar</span>
		</div>


		<div class='form-group col-md-3'>
		<label for='currentEST'>EST Atual</label>
		<input type='number' class='form-control' id='currentHP' name='u_a_est' placeholder='EST Atual' value='$u_a_est'>
		</div>

		<div class='form-group col-md-3'>
		<label for='maxEST'>EST Total</label>
		<input type='number' class='form-control' name='u_t_est' placeholder='EST Total' value='$u_t_est'>
		</div>

		<div class='form-group col-md-3'>
		<label for='modHP'>Modificador</label>
		<input type='number' class='form-control' id='modHP'>
		</div>
		
		<div class='form-group col-md-3'>
		<label for='buttonHP'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<span class='btn btn-primary' onclick='takeDamage();'>Usar EST</span>
		<span class='btn btn-success' onclick='healHP();'>Recuperar</span>
		</div>

		
		<!-- Elmo-->
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='helm'>Elmo</label>
		<select name='user_helm' class='form-control' id='equippedHelm' helmClassById='$id' value='$helm' onchange='UpdateINFO($id)'>
		<option selected>$helm</option>
		<optgroup id='optionsMenu' value='Opçoes' label='Opcoes'>
        <option value='Nenhum'>Nenhum</option>
        <optgroup id='lightHelm' value='Elmo Leve' label='Elmo Leve'>
        <option value='Capuz de Arqueiro de Verden'>Capuz de Arqueiro de Verden</option>
        <option value='Capuz de tecido duplo'>Capuz de tecido duplo</option>
        <option value='Capuz com protecao de olhos'>Capuz com protecao de olhos</option>
        </optgroup>
        <optgroup id='mediumHelm' value='Elmo Medio' label='Elmo Media'>
        <option value='Touca de Cota de malha'>Touca de Cota de malha</option>
        <option value='Capuz blindado'>Capuz blindado</option>
        <option value='Armet temeriano'>Armet temeriano</option>
        </optgroup>
        <optgroup id='heavyHelm' value='Elmo Pesado' label='Elmo Pesada'>
        <option value='Grande elmo'>Grande elmo</option>
		<option value='Elmo Skellige'>Elmo Skellige</option>
		<option value='Elmo Nilfgardiano'>Elmo Nilfgardiano</option>
        </optgroup>
      </select>

		</div>
		<div class='form-group col-md-3'>
		<label for='helm_def'>Defesa</label>
		<input type='number' id='helmClass' class='form-control' helmdefById='$id' name='user_helmdef' maxlength='12' placeholder='0. ' value='$helm_def' personagemId='$id'>
		</div>

		<div class='form-group col-md-3'>
		<label for='helm_dur'>Durabilidade</label>
		<input type='number' id='elmoDur' class='form-control' name='user_helmdur' maxlength='12' placeholder='0. ' value='$helm_dur'>
		</div>
		</div>
		<!-- Elmo Fim-->

		<!-- Armaduras Inicio-->
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='armor'>Armadura</label>
		<select name='user_armor' class='form-control' id='equippedArmor' armorClassById='$id' value='$armor' onchange='UpdateINFO($id)'>
		<option selected>$armor</option>
		<optgroup id='optionsMenu' value='Opçoes' label='Opcoes'>
        <option value='Nenhum'>Nenhum</option>
        <optgroup id='lightArmor' value='Armadura Leve' label='Armadura Leve'>
        <option value='Jaquetao'>Jaquetao</option>
        <option value='Jaquetao de Aedirn'>Jaquetao de Aedirn</option>
        <option value='Jaquetao de Tecido duplo'>Jaquetao de Tecido duplo</option>
        </optgroup>
        <optgroup id='mediumArmor' value='Armadura Media' label='Armadura Media'>
        <option value='Couraca'>Couraca</option>
        <option value='Armadura de alabardeiro redaniano'>Armadura de alabardeiro redaniano</option>
        <option value='Jaqueta lyriana de couro'>Jaqueta lyriana de couro</option>
        </optgroup>
        <optgroup id='heavyArmor' value='Armadura Pesada' label='Armadura Pesada'>
        <option value='Armadura de placa'>Armadura de placa</option>
		<option value='Armadura pesada da ilha hindar'>Armadura pesada da ilha hindar</option>
		<option value='Armadura de placa nilfgardiana'>Armadura de placa nilfgardiana</option>
        </optgroup>
        <optgroup id='witcherArmor' value='Armadura de Bruxo' label='Armadura de Bruxo'>
        <option value='Armadura de Urso'>Armadura de Urso</option>
		<option value='Armadura de Gato'>Armadura de Gato</option>
		<option value='Armadura de Grifo'>Armadura de Grifo</option>
		<option value='Armadura de Manticora'>Armadura de Manticora</option>
		<option value='Armadura de Vibora'>Armadura de Vibora</option>
		<option value='Armadura de Lobo'>Armadura de Lobo</option>
		<option value='Armadura de Corvo'>Armadura de Corvo</option>
        </optgroup>
      </select>

		</div>
		<div class='form-group col-md-3'>
		<label for='armor_def'>Defesa</label>
		<input type='number' id='armorClass' class='form-control' armordefById='$id' name='user_armordef' maxlength='12' placeholder='0. ' value='$armor_def' personagemId='$id'>
		</div>

		<div class='form-group col-md-3'>
		<label for='armor_dur'>Durabilidade</label>
		<input type='number' id='armorDur' class='form-control' name='user_armordur' maxlength='12' placeholder='0. ' value='$armor_dur'>
		</div>
		</div>

		<!-- Armaduras Fim-->


		<!-- Bracos Inicio-->

		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='arms'>Braceiras</label>
		<select name='user_arms' class='form-control' id='equippedArms' armsClassById='$id' value='$arms' onchange='UpdateINFO($id)'>
		<option selected>$arms</option>
		<optgroup id='optionsMenu' value='Opçoes' label='Opcoes'>
        <option value='Nenhum'>Nenhum</option>
        <optgroup id='lightArms' value='Braceiras Leve' label='Braceiras Leve'>
        <option value='Braceiras da cavalaria'>Braceiras da cavalaria</option>
        <option value='Braceiras acolchoadas'>Braceiras acolchoadas</option>
        <option value='Braceiras de tecido duplo'>Braceiras de tecido duplo</option>
        </optgroup>
        <optgroup id='mediumArms' value='Braceiras Media' label='Braceiras Media'>
        <option value='Braceiras blindadas'>Braceiras blindadas</option>
        <option value='Armadura de Bracos Redanianas'>Armadura de Bracos Redanianas</option>
        <option value='Braceiras Lyrianas de couro'>Braceiras Lyrianas de couro</option>
        </optgroup>
        <optgroup id='heavyArms' value='Braceiras Pesada' label='Braceiras Pesada'>
        <option value='Armadura de Placas para braco'>Armadura de Placas para braco</option>
		<option value='Braceiras pesadas de hindar'>Braceiras pesadas de hindar</option>
		<option value='Armadura de bracos nilfgardianas'>Armadura de bracos nilfgardianas</option>
        </optgroup>
        <optgroup id='witcherArmor' value='Armadura de Bruxo' label='Armadura de Bruxo'>
        <option value='Armadura de Urso'>Armadura de Urso</option>
		<option value='Armadura de Gato'>Armadura de Gato</option>
		<option value='Armadura de Grifo'>Armadura de Grifo</option>
		<option value='Armadura de Manticora'>Armadura de Manticora</option>
		<option value='Armadura de Vibora'>Armadura de Vibora</option>
		<option value='Armadura de Lobo'>Armadura de Lobo</option>
		<option value='Armadura de Corvo'>Armadura de Corvo</option>
        </optgroup>
      </select>

		</div>
		<div class='form-group col-md-3'>
		<label for='arms_def'>Defesa</label>
		<input type='number' id='armsClass' class='form-control' armsdefById='$id' name='user_armsdef' maxlength='12' placeholder='0. ' value='$arms_def' personagemId='$id'>
		</div>

		<div class='form-group col-md-3'>
		<label for='arms_dur'>Durabilidade</label>
		<input type='number' id='armsDur' class='form-control' name='user_armsdur' maxlength='12' placeholder='0. ' value='$arms_dur'>
		</div>
		</div>

		<!-- Bracos Fim-->

		<!-- Pernas Inicio-->

		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='legs'>Perneiras</label>
		<select name='user_legs' class='form-control' id='equippedLegs' legsClassById='$id' value='$legs' onchange='UpdateINFO2($id)'>
		<option selected>$legs</option>
		<optgroup id='optionsMenu' value='Opçoes' label='Opcoes'>
        <option value='Nenhum'>Nenhum</option>
        <optgroup id='lightLegs' value='Perneiras Leve' label='Perneiras Leve'>
        <option value='Calcas de cavalaria'>Calcas de cavalaria</option>
        <option value='Calcas acolchoadas'>Calcas acolchoadas</option>
        <option value='Calcas de tecido duplo'>Calcas de tecido duplo</option>
        </optgroup>
        <optgroup id='mediumLegs' value='Perneiras Media' label='Perneiras Media'>
        <option value='Calcas blindadas'>Calcas blindadas</option>
        <option value='Grevas redaniana'>Grevas redaniana</option>
        <option value='Calcas lyrianas de couro'>Calcas lyrianas de couro</option>
        </optgroup>
        <optgroup id='heavyLegs' value='Perneiras Pesada' label='Perneiras Pesada'>
        <option value='Grevas de placa'>Grevas de placa</option>
		<option value='Chausses pesadas de hindas'>Chausses pesadas de hindas</option>
		<option value='Grevas Nilfgardianas'>Grevas Nilfgardianas</option>
        </optgroup>
        <optgroup id='witcherArmor' value='Armadura de Bruxo' label='Armadura de Bruxo'>
        <option value='Armadura de Urso'>Armadura de Urso</option>
		<option value='Armadura de Gato'>Armadura de Gato</option>
		<option value='Armadura de Grifo'>Armadura de Grifo</option>
		<option value='Armadura de Manticora'>Armadura de Manticora</option>
		<option value='Armadura de Vibora'>Armadura de Vibora</option>
		<option value='Armadura de Lobo'>Armadura de Lobo</option>
		<option value='Armadura de Corvo'>Armadura de Corvo</option>
        </optgroup>
      </select>

		</div>
		<div class='form-group col-md-3'>
		<label for='legs_def'>Defesa</label>
		<input type='number' id='legsClass' class='form-control' legsdefById='$id' name='user_legsdef' maxlength='12' placeholder='0. ' value='$legs_def' personagemId='$id'>
		</div>

		<div class='form-group col-md-3'>
		<label for='legs_dur'>Durabilidade</label>
		<input type='number' id='legsDur' class='form-control' name='user_legsdur' maxlength='12' placeholder='0. ' value='$legs_dur'>
		</div>
		</div>

		<!-- Pernas Fim-->


		<!-- Mao Direita Inicio-->
		<div class='form-row'>
		<div class='form-group col-md-4'>
		<label for='righthand'>Mao Direita</label>
		<select name='user_righthand' class='form-control' id='equippedRHand' RHandById='$id' value='$righthand' onchange='UpdateINFO2($id)'>
		<option selected>$righthand</option>
		<optgroup id='optionsMenu' value='Opçoes' label='Opcoes'>
        <option value='Nenhum'>Nenhum</option>
        <optgroup id='sword' value='Espadas' label='Espadas'>
        <option value='Espada Longa de Ferro'>Espada Longa de Ferro</option>
        <option value='Espada de Cavaleiro'>Espada de Cavaleiro</option>
        <option value='Gleddyf'>Gleddyf</option>
		<option value='Falcione do Cacador'>Falcione do Cacador</option>
		<option value='Krigsverd'>Krigsverd</option>
		<option value='Esboda'>Esboda</option>
		<option value='Kord'>Kord</option>
		<option value='Lamina de Vicovaro'>Lamina de Vicovaro</option>
		<option value='Torrwr'>Torrwr</option>
		<option value='Espada de Aco de Bruxo'>Espada de Aco de Bruxo</option>
		<option value='Espada de Prata de Bruxo'>Espada de Prata de Bruxo</option>
        </optgroup>
        <optgroup id='dagger' value='Adagas' label='Adagas'>
        <option value='Adaga'>Adaga</option>
        <option value='Estilete'>Estilete</option>
        <option value='Punhal'>Punhal</option>
		<option value='Jambiya'>Jambiya</option>
        </optgroup>
        <optgroup id='axe' value='Machados' label='Machados'>
        <option value='Machado de Mao'>Machado de Mao</option>
		<option value='Machado de Batalha'>Machado de Batalha</option>
		<option value='Machado Berserker'>Machado Berserker</option>
        </optgroup>
        <optgroup id='concusive' value='Concusivas' label='Concusivas'>
        <option value='Soqueira'>Soqueira</option>
		<option value='Maca'>Maca</option>
		<option value='Martelo das Terras Altas'>Martelo das Terras Altas</option>
        </optgroup>
        <optgroup id='spear' value='Lancas' label='Lancas'>
        <option value='Lanca'>Lanca</option>
		<option value='Acha de Arma'>Acha de Arma</option>
		<option value='Alabarda Vermelha'>Alabarda Vermelha</option>
        </optgroup>
        </optgroup>
        <optgroup id='staff' value='Cajado' label='Cajado'>
        <option value='Cajado'>Cajado</option>
		<option value='Cajado de Pastor'>Cajado de Pastor</option>
		<option value='Cajado de Ferro'>Cajado de Ferro</option>
		<option value='Cajado de Cristal'>Cajado de Cristal</option>
        </optgroup>
        <optgroup id='distance' value='Arcos e Bestas' label='Arcos e Bestas'>
        <option value='Arco Curto'>Arco Curto</option>
		<option value='Arco Longo'>Arco Longo</option>
		<option value='Arco de Guerra'>Arco de Guerra</option>
		<option value='Besta de Mao'>Besta de Mao</option>
		<option value='Besta'>Besta</option>
		<option value='Besta de Cacador de Monstros'>Besta de Cacador de Monstros</option>
        </optgroup>
        <optgroup id='shield' value='Escudos' label='Escudos'>
        <option value='Escudo de Madeira'>Escudo de Madeira</option>
		<option value='Broquel de Aco'>Broquel de Aco</option>
		<option value='Escudo Temeriano'>Escudo Temeriano</option>
		<option value='Escudo de Saqueador Skellige'>Escudo de Saqueador Skellige</option>
		<option value='Escudo Kaedweni'>Escudo Kaedweni</option>
		<option value='Escudo Lagrima de Aco'>Escudo Lagrima de Aco</option>
		<option value='Pavise'>Pavise</option>
		<option value='Pavise Nilfgardiano'>Pavise Nilfgardiano</option>
		<option value='Escudo Pipa Nilfgardiano'>Escudo Pipa Nilfgardiano</option>
        </optgroup>

      </select>

		</div>
		<div class='form-group col-md-4'>
		<label for='righthandnum'>Efeito</label>
		<input type='text' id='rhandClass' class='form-control' rhanddmgById='$id' name='user_righthandnum' maxlength='12' placeholder='0. ' value='$righthandnum' personagemId='$id'>
		</div>

		<div class='form-group col-md-2'>
		<label for='righthanddur'>Dur. Total</label>
		<input type='number' id='righthanddur' class='form-control' rhanddurById='$id' name='user_righthanddur' maxlength='12' placeholder='0. ' value='$righthanddur' personagemId='$id'>
		</div>

		<div class='form-group col-md-2'>
		<label for='righthandadur'>Dur. Atual</label>
		<input type='number' id='righthandadur' class='form-control' name='user_righthandadur' maxlength='12' placeholder='0. ' value='0'>
		</div>

		</div>

		<!-- Mao Direita Fim-->


		<!-- Mao Esquerda Inicio-->

		<!-- Mao Esquerda Fim-->


		<!-- Equipamento Adicional Inicio-->

		<!-- Equipamento Adicional Fim-->


		<!-- Fim Equipamentos -->

		<!-- Atributos Inicio -->
		<table class='table'>
		<th class='text-center'><b>Tipo</b></th>
        <th class='text-center'><b>Atributo</b></th>
        <th class='text-center'><b>Coeficiente</b></th>
		<th class='text-center'><b>Pontos de Pericia</b></th>

        <tr>
          <td class='text-center'>Forca</td>
          <td><input type='number' name='user_strScore' value='$strScore' id='strScore' class='form-control' min='1' max='30' onchange='updateModifiers()'></td>
          <td><input type='number' value='0' id='strMod' class='form-control' min='-5' max='10'></td>
		  <td><input type='number' value='0' id='strPoints' class='form-control' min='0' max='30'></td>
        </tr>
        <tr>
          <td class='text-center'>Destreza</td>
          <td><input type='number' name='user_dexScore' value='$dexScore' id='dexScore' class='form-control' min='1' max='30' onchange='updateModifiers()'></td>
          <td><input type='number' value='0' id='dexMod' class='form-control' min='-5' max='10'></td>
		  <td><input type='number' value='0' id='dexPoints' class='form-control' min='0' max='30'></td>
        </tr>
        <tr>
          <td class='text-center'>Sabedoria</td>
          <td><input type='number' name='user_wisScore' value='$wisScore' id='wisScore' class='form-control' min='1' max='30' onchange='updateModifiers()'></td>
          <td><input type='number' value='0' id='wisMod' class='form-control' min='-5' max='10'></td>
		  <td><input type='number' value='0' id='wisPoints' class='form-control' min='0' max='30'></td>
        </tr>
        <tr>
          <td class='text-center'>Constituicao</td>
          <td><input type='number' name='user_conScore' value='$conScore' id='conScore' class='form-control' min='1' max='30' onchange='updateModifiers()'></td>
          <td><input type='number' value='0' id='conMod' class='form-control' min='-5' max='10'></td>
		  <td><input type='number' value='0' id='conPoints' class='form-control' min='0' max='30'></td>
        </tr>
        <tr>
          <td class='text-center'>Carisma</td>
          <td><input type='number' name='user_chaScore' value='$chaScore' id='chaScore' class='form-control' min='1' max='30' onchange='updateModifiers()'></td>
          <td><input type='number' value='0' id='chaMod' class='form-control' min='-5' max='10'></td>
		  <td><input type='number' value='0' id='chaPoints' class='form-control' min='0' max='30'></td>
        </tr>
        <tr>
          <td class='text-center'>Inteligencia</td>
          <td><input type='number' name='user_intScore' value='$intScore' id='intScore' class='form-control' min='1' max='30' onchange='updateModifiers()'></td>
          <td><input type='number' value='0' id='intMod' class='form-control' min='-5' max='10'></td>
		  <td><input type='number' value='0' id='intPoints' class='form-control' min='0' max='30'></td>
        </tr>
        <tr>
          <td class='text-center'>Agilidade</td>
          <td><input type='number' name='user_agiScore' value='$agiScore' id='agiScore' class='form-control' min='1' max='30' onchange='updateModifiers()'></td>
          <td><input type='number' value='0' id='agiMod' class='form-control' min='-5' max='10'></td>
		  <td><input type='number' value='0' id='agiPoints' class='form-control' min='0' max='30'></td>
        </tr>
      </table>
		<!-- Atributos Fim -->

		<div class='form-group col-md-12'>
		<label for='inputPassword4'>Data de Nascimento</label>
		<input type='date' class='form-control' name='user_dob' placeholder='Date of Birth' value='$Bday'>
		</div>

		
		
		<div class='form-group'>
		<label for='family'>Informacoes Importantes</label>
			<textarea class='form-control' name='family' rows='3'>$village</textarea>
		</div>
		
		
		
		<div class='form-group'>
		<label for='inputAddress'>Cidade</label>
		<input type='text' class='form-control' name='village' placeholder='Onde o personagem nasceu' value='$village'>
		</div>

		</div>
		   	

        	<div class='form-group'>
        		<label>Imagem</label>
        		<input type='file' name='image' class='form-control'>
        		<img src = 'upload_images/$image' class='img-circle' style='width:150px; height:150px'>
        	</div>
			</div>
        	
        	
			 <div class='modal-footer'>
			 <input type='submit' name='submit' class='btn btn-info btn-large' value='Salvar'>
			 <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
		 </div>


        </form>
      </div>

    </div>

  </div>
</div>


	";
}


?>


<script src="js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>

</body>
</html>
