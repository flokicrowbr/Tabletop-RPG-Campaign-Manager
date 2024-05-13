<?php
include ('db.php');

?>

<!DOCTYPE html>
<html>

<head>
	<title>RPG de Mesa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/card.css">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	
	<script src="js/main.js"></script>
	

	<nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
  <img src="img/rpgdemesa.png" alt="Logo" width="80" height="50" class="d-inline-block align-text-top">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php"><i class="fa fa-light fa-user"></i> Personagens</a>
        <a class="nav-link" href="skills.php"><i class="fa fa-light fa-book-quran"></i> Habilidades</a>
        <a class="nav-link" href="itens.php"><i class="fa fa-light fa-suitcase"></i> Itens</a>
        <a class="nav-link" href="#"><i class="fa fa-light fa-flask"></i> Alquimia</a>
      </div>
    </div>

  </div>
</nav>

</head>

<body style="background-color: #dfdfe8">
	<div class="container">
		
	</div>
	<div class="container">
		<h2 class="text-center"></h2><br><br>
		<!-- Remover
	<a href="#" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
-->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
		<i class="fa fa-plus"></i> Adicionar Personagem</button>
<!-- Remover
		<a href="skills.php" class="btn btn-primary"><i class="fa fa-light fa-book-quran"></i> Habilidades</a>
		<a href="itens.php" class="btn btn-primary"><i class="fa fa-light fa-suitcase"></i> Itens</a>
		<a href="#" class="btn btn-primary"><i class="fa fa-light fa-flask"></i> Alquimia</a>

		
  <a href="#" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> Exportar em PDF</a>
-->
		<hr>
		<table class="table table-bordered table-light table-striped table-hover" id="myTable">
		
			<thead>
				<tr>
				
					<th class="hidemob text-center" scope="col">ID</th> <!-- ID do Personagem  -->
					<th class="hidemob text-center" scope="col">Nome</th> <!-- Nome do Personagem  -->
					<th class="hidemob text-center" scope="col">Ouro</th>
					<th class="hidemob text-center" scope="col">Nivel</th>
					<th class="hidemob text-center" scope="col">HP / EST</th>
					<th class="hidemob text-center" scope="col">Equipamentos</th>
					<th class="hidemob text-center" scope="col">Mao D / Mao E</th>
					<th class="hidemob text-center" scope="col">Opcoes</th>
				</tr>
			</thead>
		



			<?php

			$get_data = "SELECT * FROM players_table order by 1 desc";
			$run_data = mysqli_query($con, $get_data);
			$i = 0;
			while ($row = mysqli_fetch_array($run_data)) {
				$sl = ++$i;
				$id = $row['id'];
				$u_gold = $row['u_gold'];
				$u_name = $row['u_name'];
				$u_race = $row['u_race'];
				$u_class = $row['u_class'];
				$u_l_name = $row['u_l_name'];
				$u_level = $row['u_level'];
				$u_exp = $row['u_exp'];
				$u_a_hp = $row['u_a_hp'];
				$u_t_hp = $row['u_t_hp'];
				$u_a_est = $row['u_a_est'];
				$u_t_est = $row['u_t_est'];
				$u_t_vigor = $row['u_t_vigor'];
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
				$u_lefthand = $row['u_lefthand'];
				$u_lefthandnum = $row['u_lefthandnum'];
				$u_lefthanddur = $row['u_lefthanddur'];
				$u_extraequipnum = $row['u_extraequipnum'];
				$u_extraequipdur = $row['u_extraequipdur'];
				$u_strCoef = $row['u_strCoef'];
				$u_dexCoef = $row['u_dexCoef'];
				$u_wisCoef = $row['u_wisCoef'];
				$u_conCoef = $row['u_conCoef'];
				$u_chaCoef = $row['u_chaCoef'];
				$u_intCoef = $row['u_intCoef'];
				$u_agiCoef = $row['u_agiCoef'];
				$u_gender = $row['u_gender'];
				$image = $row['image'];

				echo "

				<div class='parent'>
				<div class='card'>

					<div class='content-box-$u_gender'>
					
					
					
					
						<span class='card-title'>
						<span class='tags'>ID: $sl</span>
						<span class='tags'>LV: $u_level</span>
						<span class='tags'>EXP: $u_exp</span>
						<span class='tags'>$$u_gold</span>
						<span class='tags'>HP: $u_a_hp/$u_t_hp</span>
						<span class='tags'>ST: $u_a_est/$u_t_est</span>

						";
						if($u_t_vigor > 0){
							echo "
							<span class='tags'>Vigor: $u_t_vigor</span>
							";
						}
						echo "

						";
						if($u_race != $u_class){
							echo "
							<span class='tags'>$u_race</span>
							";
						}
						echo "
						
						<span class='tags'>$u_class</span>
						</span>
						
						
						<div class='coef-box-$u_gender'>
						<span class='name'>Atributos</span>
						</div>
						<br>
						

						<p class='card-content'>

						";
						if($u_strCoef >= 1){
							echo "
							<span class='tags'>FOR: $u_strCoef</span>
							";
						};
						echo "

						";
						if($u_dexCoef >= 1){
							echo "
							<span class='tags'>DES: $u_dexCoef</span>
							";
						};
						echo "

						";
						if($u_wisCoef >= 1){
							echo "
							<span class='tags'>SAB: $u_wisCoef</span>
							";
						};
						echo "

						";
						if($u_conCoef >= 1){
							echo "
							<span class='tags'>CON: $u_conCoef</span>
							";
						};
						echo "

						";
						if($u_chaCoef >= 1){
							echo "
							<span class='tags'>CAR: $u_chaCoef</span>
							";
						};
						echo "

						";
						if($u_intCoef >= 1){
							echo "
							<span class='tags'>INT: $u_intCoef</span>
							";
						};
						echo "

						";
						if($u_agiCoef >= 1){
							echo "
							<span class='tags'>AGI: $u_agiCoef</span>
							";
						};
						echo "
						
						<br>
						</p>

						<div class='coef-box-$u_gender'>
						<span class='name'>Equipamentos</span>
						</div>
						<br>

						<p class='card-content'>
						";
						if($u_helm != 'Nenhum'){
							echo "
							<span class='tags'>$u_helm <br> $u_helmdef &nbsp;  / &nbsp;  $u_helmdur</span>
							";
						};
						echo "

						";
						if($u_armor != 'Nenhum'){
							echo "
							<span class='tags'>$u_armor <br> $u_armordef &nbsp;  / &nbsp;  $u_armordur</span>
							";
						};
						echo "

						";
						if($u_arms != 'Nenhum'){
							echo "
							<span class='tags'>$u_arms <br> $u_armsdef &nbsp;  / &nbsp;  $u_armsdur</span>
							";
						};
						echo "

						";
						if($u_legs != 'Nenhum'){
							echo "
							<span class='tags'>$u_legs <br> $u_legsdef &nbsp;  / &nbsp;  $u_legsdur</span>
							";
						};
						echo "

						";
						if($u_righthand != 'Nenhum'){
							echo "
							<span class='tags'>$u_righthand <br> $u_righthandnum</span>
							";
						};
						echo "

						";
						if($u_lefthand != 'Nenhum'){
							echo "
							<span class='tags'>$u_lefthand <br> $u_lefthandnum</span>
							";
						};
						echo "

						</p>

						<div class='coef-box-$u_gender'>
						<span class='name'>Habilidades</span>
						</div>
						<br>

						
						";


							
			// Query para obter as habilidades do Personagem
			$get_allskill = '
			select
			ps.entry_id,
			ps.player_id,
			ps.skill_id,
			sd.id,
			sd.skill_name,
			sd.skill_dmg,
			sd.skill_est_cost, 
			sd.skill_lv,
			sd.skill_def,
			sd.skill_duration,
			sd.skill_range, 
			sd.skill_act_type, 
			sd.skill_element, 
			sd.skill_class, 
			sd.skill_description, 
			sd.skill_effect 
			from skill_db sd
			inner join player_skill ps on sd.id = ps.skill_id
			order by ps.player_id ASC
			;
			';
			$run_allskill = mysqli_query($con, $get_allskill);
			while ($row_allskill = mysqli_fetch_array($run_allskill)) {
				$ps_entry_id = $row_allskill['entry_id'];
				$ps_player_id = $row_allskill['player_id'];
	
				$ps_skill_id = $row_allskill['skill_id'];
				$sd_id = $row_allskill['id'];
				$sd_skill_name = $row_allskill['skill_name'];
				$sd_skill_dmg = $row_allskill['skill_dmg'];
				$sd_skill_est_cost = $row_allskill['skill_est_cost'];
				$sd_skill_lv = $row_allskill['skill_lv'];
				$sd_skill_def = $row_allskill['skill_def'];
				$sd_skill_duration = $row_allskill['skill_duration'];
				$sd_skill_range = $row_allskill['skill_range'];
				$sd_skill_act_type = $row_allskill['skill_act_type'];
				$sd_skill_element = $row_allskill['skill_element'];
				$sd_skill_class = $row_allskill['skill_class'];
				$sd_skill_description = $row_allskill['skill_description'];
				$sd_skill_effect = $row_allskill['skill_effect'];
				
				
				if ($ps_player_id == $id) {
					
					echo "
				

					
					<span class='see-more-skill' data-bs-toggle='modal' data-bs-target='#exampleModal' data-var='$sd_skill_name'>$sd_skill_name</span>

					";

				};

			}

			echo"
			<div class='coef-box-$u_gender'>
			<span class='name'>Pericias</span>
			</div>
			<br>
			";

				echo "


						<br><br>
						<span class='see-more' data-bs-toggle='modal' data-bs-target='#edit$id'>Editar</span>
						<span class='hidemob see-more' data-bs-toggle='modal' data-bs-target='#skill$id'>Habilidades</span>
						<span class='hidemob see-more' data-bs-toggle='modal' data-bs-target='#$id'>Deletar</span>
					</div>
					<div class='name-box-$u_gender'>
						<span class='name'>$u_name</span>
						
					</div>

					
				</div>
				</div>

				
				<br><br>
				<tr>
				
				<td class='hidemob text-center'>$sl</td>
				<td class='hidemob text-center'><b>$u_name</b></td>
				<td class='hidemob text-center'>$u_gold</td>
				<td class='hidemob text-center'>$u_level</td>
				<td class='hidemob text-right'><b>HP: </b> &nbsp; $u_a_hp &nbsp;  / &nbsp;  $u_t_hp <br> <b>EST:</b> &nbsp; $u_a_est &nbsp;  / &nbsp;  $u_t_est</td>
				<td class='hidemob text-right'><b>$u_helm:</b> &nbsp; $u_helmdef &nbsp;  / &nbsp;  $u_helmdur <br>
										<b>$u_armor:</b> &nbsp; $u_armordef &nbsp;  / &nbsp;  $u_armordur <br>
										<b>$u_arms:</b> &nbsp; $u_armsdef &nbsp;  / &nbsp;  $u_armsdur <br>
										<b>$u_legs:</b> &nbsp; $u_legsdef &nbsp;  / &nbsp;  $u_legsdur <br>
				</td>
				<td class='hidemob text-center'><b>$u_righthand</b> <br> $u_righthandnum <br> <b>$u_righthand</b><br> $u_righthandnum</td>

			
				<td class='hidemob text-center'>
				
					<span>
					<a href='#' class='btn btn-success mr-3 profile' data-bs-toggle='modal' data-bs-target='#view$id' title='Ficha'><i class='fa fa-address-card' aria-hidden='true'></i></a>
					<a href='#' class='btn btn-warning mr-3 edituser' data-bs-toggle='modal' data-bs-target='#edit$id' title='Editar'><i class='fa fa-pencil-square-o fa-lg'></i></a>
					<!--
					<a href='#' class='btn btn-primary mr-3 itembag' data-toggle='modal' data-bs-target='#inventory$id' title='Inventario'><i class='fa fa-suitcase fa-lg'></i></a>
					<br><br>
					-->
					<a href='#' class='btn btn-info mr-3 skills' data-bs-toggle='modal' data-bs-target='#skill$id' title='Habilidades'><i class='fa fa-book-quran fa-lg'></i></a>
					<!--
					<a href='#' class='btn btn-alchemy mr-3 alchemy' data-toggle='modal' data-bs-target='#alchemy$id' title='Alquimia'><i class='fa fa-flask fa-lg'></i></a>
					-->
					<a href='#' class='btn btn-danger deleteuser' title='Deletar'>
					<i class='fa fa-trash fa-lg' data-bs-toggle='modal' data-bs-target='#$id' style='' aria-hidden='true'></i>
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
	<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-fullscreen-xl-down modal-dialog-scrollable">

			<!-- Modal conteudo-->
			<div class="modal-content">
				<div class="modal-header">
				
					<h5 class="modal-title">Adicionar Personagem</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>

					
				</div>
				<div class="modal-body">
					<form action="add.php" method="POST" enctype="multipart/form-data">

						<!-- Teste de Modal  -->
						
						<div class="container text-center">
						<div class="row grid gap-0 row-gap-2">
						
						
						<div class="col-6 col-md-6">
							<div class="input-group">
								<span class="input-group-text">Nome</span>
								<input type="text" class="form-control" name="u_name" placeholder="Nome do Personagem">
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="input-group">
								<span class="input-group-text">Nivel</span>
								<input type="number" class="form-control" name="user_level" placeholder="Nivel">
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="input-group">
								<span class="input-group-text">Ouro</span>
								<input type="number" class="form-control" name="u_gold" placeholder="Ouro">
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="input-group">
							<span class="input-group-text">Sexo</span>
							<select id="inputState" name="user_gender" class="form-select">
							<option selected>Escolha...</option>
								<option>Homem</option>
								<option>Mulher</option>
								<option>Indefinido</option>
							</select>
							</div>
						</div>



						<div class="col-12 col-md-12">
							<div class="input-group">
								<span class="input-group-text">Raca</span>
								<select id="inputState" name="user_race" class="form-select">
									<option selected>Escolha...</option>
									<option>Humano</option>
									<option>Elfo</option>
									<option>Anao</option>
									<option>Bruxo</option>
								</select>


								<span class="input-group-text">Classe</span>
								<select id="inputState" name="user_class" class="form-select">
									<option selected>Escolha...</option>
									<option>Bruxo</option>
									<option>Homem de Armas</option>
									<option>Bardo</option>
									<option>Ladino</option>
									<option>Mago</option>
								</select>
							</div>
						</div>
						


						</div>
						</div>


						





						<div class="form-group">
							
							<label for="file" class="labelFile"><span><svg xml:space="preserve" viewBox="0 0 184.69 184.69" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
      id="Capa_1" version="1.1" width="60px" height="60px">
      <g>
        <g>
          <g>
            <path
              d="M149.968,50.186c-8.017-14.308-23.796-22.515-40.717-19.813
				C102.609,16.43,88.713,7.576,73.087,7.576c-22.117,0-40.112,17.994-40.112,40.115c0,0.913,0.036,1.854,0.118,2.834
				C14.004,54.875,0,72.11,0,91.959c0,23.456,19.082,42.535,42.538,42.535h33.623v-7.025H42.538
				c-19.583,0-35.509-15.929-35.509-35.509c0-17.526,13.084-32.621,30.442-35.105c0.931-0.132,1.768-0.633,2.326-1.392
				c0.555-0.755,0.795-1.704,0.644-2.63c-0.297-1.904-0.447-3.582-0.447-5.139c0-18.249,14.852-33.094,33.094-33.094
				c13.703,0,25.789,8.26,30.803,21.04c0.63,1.621,2.351,2.534,4.058,2.14c15.425-3.568,29.919,3.883,36.604,17.168
				c0.508,1.027,1.503,1.736,2.641,1.897c17.368,2.473,30.481,17.569,30.481,35.112c0,19.58-15.937,35.509-35.52,35.509H97.391
				v7.025h44.761c23.459,0,42.538-19.079,42.538-42.535C184.69,71.545,169.884,53.901,149.968,50.186z"
              style="fill:#010002;"
            ></path>
          </g>
          <g>
            <path
              d="M108.586,90.201c1.406-1.403,1.406-3.672,0-5.075L88.541,65.078
				c-0.701-0.698-1.614-1.045-2.534-1.045l-0.064,0.011c-0.018,0-0.036-0.011-0.054-0.011c-0.931,0-1.85,0.361-2.534,1.045
				L63.31,85.127c-1.403,1.403-1.403,3.672,0,5.075c1.403,1.406,3.672,1.406,5.075,0L82.296,76.29v97.227
				c0,1.99,1.603,3.597,3.593,3.597c1.979,0,3.59-1.607,3.59-3.597V76.165l14.033,14.036
				C104.91,91.608,107.183,91.608,108.586,90.201z"
              style="fill:#010002;"
            ></path>
          </g>
        </g>
      </g></svg></span>
  <p>Clique aqui para procurar sua imagem!</p></label
>
<input class="input" name="image" id="file" type="file" />

						</div>


						
					<div class="modal-footer">
						<button type="submit" name="submit" class="btn btn-info btn-large">Salvar</button>
						<button type="button" class="btn btn-default" data-bs-dismiss="modal">Fechar</button>
					</div>

					</form>
				</div>

			</div>

		</div>
	</div>


	<!------DELETE modal---->




	<!-- Modal -->
	<?php

	$get_data = "SELECT * FROM players_table";
	$run_data = mysqli_query($con, $get_data);

	while ($row = mysqli_fetch_array($run_data)) {
		$id = $row['id'];
		$u_name = $row['u_name'];
		echo "

<div id='$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-bs-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>Voce tem certeza que deseja deletar <b>'$u_name'</b> ??</h4>
      </div>
      <div class='modal-body'>
        <a href='delete.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Deletar</a>
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
	$run_data = mysqli_query($con, $get_data);

	while ($row = mysqli_fetch_array($run_data)) {
		$id = $row['id'];
		$u_gold = $row['u_gold'];
		$strScore = $row['u_strScore'];
		$dexScore = $row['u_dexScore'];
		$wisScore = $row['u_wisScore'];
		$conScore = $row['u_conScore'];
		$chaScore = $row['u_chaScore'];
		$intScore = $row['u_intScore'];
		$agiScore = $row['u_agiScore'];
		$strCoef = $row['u_strCoef'];
		$dexCoef = $row['u_dexCoef'];
		$wisCoef = $row['u_wisCoef'];
		$conCoef = $row['u_conCoef'];
		$chaCoef = $row['u_chaCoef'];
		$intCoef = $row['u_intCoef'];
		$agiCoef = $row['u_agiCoef'];
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
		$u_info = $row['u_info'];
		$u_city = $row['u_city'];
		$time = $row['uploaded'];

		$image = $row['image'];
		echo "

		<div class='modal fade' id='view$id' tabindex='-1' role='dialog' aria-labelledby='userViewModalLabel' aria-hidden='true'>
		<div class='modal-dialog modal-fullscreen'>
			<div class='modal-content'>
			<div class='modal-header'>
				<h5 class='modal-title' id='exampleModalLabel'>Perfil</h5>
				<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Fechar'></button>
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
						
						<i class='fa fa-home' aria-hidden='true'> Address : </i> $u_info, var, <br> var - var
						<br />
						</p>
						<!-- Split button -->
					</div>
				</div>

			</div>   
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fechar</button>
			</div>
			</form>
			</div>
		</div>
		</div> 


    ";
	}


	// <!-- perfil modal termino -->
	

	?>

	<!----habilidades inicio--->
	<?php
	$get_players = "SELECT * FROM players_table";
	$run_players = mysqli_query($con, $get_players);

	while ($row_players = mysqli_fetch_array($run_players)) {

		$id = $row_players['id'];
		$u_name = $row_players['u_name'];
		$u_class = $row_players['u_class'];

		echo "
        <div id='skill$id' class='modal fade' role='dialog'>
            <div class='modal-dialog modal-fullscreen modal-fullscreen-md-down'>
                <!-- Modal content-->
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h4 class='modal-title text-center'>Habilidades de <b>$u_name</b></h4> 
						<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>

                        <form action='edit_player_skill.php?id=$id' method='post' enctype='multipart/form-data'>
                            <div class='form-row'>


							<div class='form-group col-md-4'>
							<label for='char_id'> </label>
							<input type='hidden' class='form-control' name='char_id' placeholder='ID' value='$id'>
							</div>

                                <div class='form-group col-md-12'>
                                    <label for='Skill'>Espaco de Habilidade</label>
                                    <select name='user_skill' class='form-control' id='user_skill'>
										<option selected>Nada</option>
                                        <option value='Nenhum'>Nenhum</option>
                                        <optgroup id='optionsMenu' value='Opcoes' label='Opcoes'>
 
                                        </optgroup>
			
										
										<optgroup id='mixedSkill' value='Misturado' label='Misturado'>
										";

		// Query para obter as habilidades misturadas
		
		$get_skills_mixed = "SELECT skill_name FROM skill_db where skill_element = 'Misturado'";
		$run_skills_mixed = mysqli_query($con, $get_skills_mixed);

		while ($row_skills_mixed = mysqli_fetch_array($run_skills_mixed)) {
			$skill_mixed = $row_skills_mixed['skill_name'];
			

			echo "<option value='$skill_mixed'>$skill_mixed</option>";
			
		}
	
		echo "
										
										</optgroup>
										<optgroup id='fireSkill' value='Fogo' label='Fogo'>

										";

		// Query para obter as habilidades de Fogo
		$get_skills_fire = "SELECT skill_name FROM skill_db where skill_element = 'Fogo'";
		$run_skills_fire = mysqli_query($con, $get_skills_fire);

		while ($row_skills_fire = mysqli_fetch_array($run_skills_fire)) {
			$skill_fire = $row_skills_fire['skill_name'];

			echo "<option value='$skill_fire'>$skill_fire</option>";
		}

		echo "

										</optgroup>
										<optgroup id='windSkill' value='Ar' label='Ar'>
										
										";

		// Query para obter as habilidades de Ar
		$get_skills_wind = "SELECT skill_name FROM skill_db where skill_element = 'Ar'";
		$run_skills_wind = mysqli_query($con, $get_skills_wind);

		while ($row_skills_wind = mysqli_fetch_array($run_skills_wind)) {
			$skill_wind = $row_skills_wind['skill_name'];

			echo "<option value='$skill_wind'>$skill_wind</option>";
		}

		echo "
										
										</optgroup>
                                        <optgroup id='waterSkill' value='Agua' label='Agua'>
										
										";

		// Query para obter as habilidades de Agua
		$get_skills_water = "SELECT skill_name FROM skill_db where skill_element = 'Agua'";
		$run_skills_water = mysqli_query($con, $get_skills_water);

		while ($row_skills_water = mysqli_fetch_array($run_skills_water)) {
			$skill_water = $row_skills_water['skill_name'];

			echo "<option value='$skill_water'>$skill_water</option>";
		}

		echo "
										
										</optgroup>
                                        <optgroup id='earthSkill' value='Terra' label='Terra'>
										
										";

		// Query para obter as habilidades de Terra
		$get_skills_earth = "SELECT skill_name FROM skill_db where skill_element = 'Terra'";
		$run_skills_earth = mysqli_query($con, $get_skills_earth);

		while ($row_skills_earth = mysqli_fetch_array($run_skills_earth)) {
			$skill_earth = $row_skills_earth['skill_name'];

			echo "<option value='$skill_earth'>$skill_earth</option>";
		}

		echo "
										
										</optgroup>
                                        <optgroup id='witcherSkill' value='Terra' label='Bruxo'>
										
										";

		// Query para obter as habilidades de Bruxo
		$get_skills_witcher = "SELECT skill_name FROM skill_db where skill_element = 'Bruxo'";
		$run_skills_witcher = mysqli_query($con, $get_skills_witcher);

		while ($row_skills_witcher = mysqli_fetch_array($run_skills_witcher)) {
			$skill_witcher = $row_skills_witcher['skill_name'];

			echo "<option value='$skill_witcher'>$skill_witcher</option>";
		}

		echo "
										
										</optgroup>
										
                                    </select>
									
                                </div>
								
								
								<hr>
								<table class='table table-bordered table-striped table-hover' id='skillTable'>
								<thead>
								
								<th class='text-center' scope='col'>Habilidade</th>
								<th class='text-center' scope='col'>Dano</th>
								<th class='text-center' scope='col'>Nivel</th>
								<th class='text-center' scope='col'>Acao</th>
								<th class='text-center' scope='col'>Descricao da Habilidade</th>
								<th class='text-center' scope='col'>Opcoes</th>

								</thead>
								
								

								";
		// Query para obter as habilidades do Personagem
		$get_allskill = '
								select
								ps.entry_id,
								ps.player_id,
								ps.skill_id,
								sd.id,
								sd.skill_name,
								sd.skill_dmg,
								sd.skill_est_cost, 
								sd.skill_lv,
								sd.skill_def,
								sd.skill_duration,
								sd.skill_range, 
								sd.skill_act_type, 
								sd.skill_element, 
								sd.skill_class, 
								sd.skill_description, 
								sd.skill_effect 
								from skill_db sd
								inner join player_skill ps on sd.id = ps.skill_id
								order by ps.player_id ASC
								;
								';
		$run_allskill = mysqli_query($con, $get_allskill);
		$i = 0;
		$y = 0;

		while ($row_allskill = mysqli_fetch_array($run_allskill)) {
			$ps_entry_id = $row_allskill['entry_id'];
			$ps_player_id = $row_allskill['player_id'];

			$ps_skill_id = $row_allskill['skill_id'];
			$sd_id = $row_allskill['id'];
			$sd_skill_name = $row_allskill['skill_name'];
			$sd_skill_dmg = $row_allskill['skill_dmg'];
			$sd_skill_est_cost = $row_allskill['skill_est_cost'];
			$sd_skill_lv = $row_allskill['skill_lv'];
			$sd_skill_def = $row_allskill['skill_def'];
			$sd_skill_duration = $row_allskill['skill_duration'];
			$sd_skill_range = $row_allskill['skill_range'];
			$sd_skill_act_type = $row_allskill['skill_act_type'];
			$sd_skill_element = $row_allskill['skill_element'];
			$sd_skill_class = $row_allskill['skill_class'];
			$sd_skill_description = $row_allskill['skill_description'];
			$sd_skill_effect = $row_allskill['skill_effect'];

			/*if ($ps_player_id !== $id){
													break;
											}*/



			if ($ps_player_id == $id) {
				echo "		
									<tr>								
								
								<td class='text-center'>$sd_skill_name</td>
								<td class='text-center'>$sd_skill_dmg</td>
								<td class='text-center'>$sd_skill_lv</td>
								<td class='text-center'>$sd_skill_act_type</td>
								<td class='text-center'>
								<b>Defesa:</b> $sd_skill_def &nbsp;	&nbsp; <b>Duracao:</b> $sd_skill_duration &nbsp; &nbsp; <br>
								<b>Alcance:</b> $sd_skill_range &nbsp; &nbsp; <b>Est:</b> $sd_skill_est_cost<br>
								<b>Elemento:</b> $sd_skill_element<br>
								$sd_skill_description <br>
								<b>$sd_skill_effect</b>
								
								</td>
								<td class='text-center'>
								<span>
								";
								?>
								<?php
								$get_data = "SELECT * FROM player_skill";
								$run_data = mysqli_query($con, $get_data);
								
								while ($row = mysqli_fetch_array($run_data)) {
									$entry_id = $row['entry_id'];
									$skill_id = $row['skill_id'];
									
								}
								
								?>
								<?php 
								echo "
								<a href='delete_skill_fp.php?id=$ps_entry_id' class='btn btn-danger deleteuserskill' title='Deletar'><i class='fa fa-trash fa-lg'></i></a>
								</span>
								</td>
								";
			}
		}
		echo "
								</tr>
							
								</table>
								</hr>
								
								
									
                            </div>
							<input type='submit' name='submit' class='btn btn-info btn-large' value='Salvar'>
							<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fechar</button>
                        </form>
                    </div>
                    <div class='modal-footer'>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    ";
	}
	?>
	<!----habilidades fim--->

	<!-- Delete de skill -->
	<?php

	$get_data = "SELECT * FROM player_skill";
	$run_data = mysqli_query($con, $get_data);

	while ($row = mysqli_fetch_array($run_data)) {
		$entry_id = $row['entry_id'];
		$skill_id = $row['skill_id'];
		echo "

<div id='#del$ps_entry_id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>Voce tem certeza que deseja deletar essa habilidade?  ??</h4>
      </div>
      <div class='modal-body'>
        <a href='delete_skill_fp.php?id=$ps_entry_id' class='btn btn-danger' style='margin-left:250px'>Deletar</a>
      </div>
      
    </div>

  </div>
</div>


	";

	}

	?>
<!-- Delete de skill fim -->

	<!----edição de dados--->

	<?php

	$get_data = "SELECT * FROM players_table";
	$run_data = mysqli_query($con, $get_data);

	while ($row = mysqli_fetch_array($run_data)) {
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
		$strCoef = $row['u_strCoef'];
		$dexCoef = $row['u_dexCoef'];
		$wisCoef = $row['u_wisCoef'];
		$conCoef = $row['u_conCoef'];
		$chaCoef = $row['u_chaCoef'];
		$intCoef = $row['u_intCoef'];
		$agiCoef = $row['u_agiCoef'];
		$u_name = $row['u_name'];
		$name2 = $row['u_l_name'];
		$race = $row['u_race'];
		$class = $row['u_class'];
		$u_a_hp = $row['u_a_hp'];
		$u_t_hp = $row['u_t_hp'];
		$u_a_est = $row['u_a_est'];
		$u_t_est = $row['u_t_est'];
		$u_t_vigor = $row['u_t_vigor'];
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
		$conFisico = $row['u_conFisico'];
		$intLFeitico = $row['u_intLFeitico'];
		$Bday = $row['u_birthday'];
		$u_info = $row['u_info'];
		$time = $row['uploaded'];
		$image = $row['image'];
		echo "

<div class='modal fade' id='edit$id' tabindex='-1' aria-labelledby='EditModalLabel' aria-hidden='true'>

  <div class='modal-dialog modal-xl modal-fullscreen-xl-down modal-dialog-scrollable'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
			  <h1 class='modal-title fs-5' id='Edit'>Editar: $u_name / $class / $race / LV: $level</h1>
	 		 <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
             
      </div>

      <div class='modal-body'>
        <form action='edit.php?id=$id' method='post' enctype='multipart/form-data'>


		<div class='row'>
			<div class='col-6 col-md-6'>
			<!-- 
			<img src = 'upload_images/$image' class='img-circle' style='width:150px; height:150px'>
			-->
			</div>
	 	</div>

		<!-- Accordion -->
		<div class='accordion' id='accordionExample'>
		<div class='accordion-item'>
		  <h2 class='accordion-header'>
			<button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
			  Personagem #
			</button>
		  </h2>
		  <div id='collapseOne' class='accordion-collapse collapse show' data-bs-parent='#accordionExample'>
			<div class='accordion-body'>
			  
			<div class='container text-center'>

			<div class='row grid gap-0 row-gap-2'>
			<div class='col-12 col-md-3'>
			<div class='input-group'>
			<span class='input-group-text'>Nome</span>
			<input type='text' class='form-control' name='user_first_name' placeholder='Nome do Personagem' value='$u_name'>
			</div>
			
			</div>
			<div class='col-12 col-md-4'>
			
			<div class='input-group'>
			<span class='input-group-text'>Level</span>
			<input type='number' id='classLevel' levelById='$id' class='form-control' name='user_level' placeholder='Nivel.' maxlength='2' value='$level' personagemId='$id' required>
			<span class='input-group-text'>EXP</span>
			<input type='number' class='form-control' name='user_exp' placeholder='EXP do Personagem.' id='b_exp' expById='$id' maxlength='6' onchange='UpdateLV($id)' value='$exp' required>
			</div>
			
			</div>
			<div class='col-6 col-md-3'>
			
			<div class='input-group'>
			<span class='input-group-text'>Sexo</span>
			<select id='inputState' name='user_gender' class='form-select' value='$gender'>
			  <option selected>$gender</option>
			  <option>Homem</option>
			  <option>Mulher</option>
			  <option>Indefinido</option>
			</select>
			</div>
			
			</div>
	
			<div class='col-6 col-md-2'>
	
			<div class='input-group'>
			<span class='input-group-text'>Idade</span>
			<input type='number' class='form-control' name='b_age' placeholder='Idade' id='b_age' maxlength='6' value='$Bday'>
			</div>
	
			</div>
	
			<div class='col-12 col-md-8'>
	
			<div class='input-group'>
			<span class='input-group-text'>Raca</span>
			<select id='inputState' name='user_race' class='form-select' value='$race'>
			  <option selected>$race</option>
			  <option>Humano</option>
			  <option>Elfo</option>
			  <option>Anao</option>
			  <option>Bruxo</option>
			</select>
			<span class='input-group-text'>Classe</span>
			<select id='inputState' name='user_class' class='form-select' value='$class'>
			<option selected>$class</option>
			<option>Bruxo</option>
			<option>Homem de Armas</option>
			<option>Bardo</option>
			<option>Ladino</option>
			<option>Mago</option>
			</select>
			</div>
	
			</div>
	
			<div class='col-12 col-md-4'>
	
			<div class='input-group'>

			";

				$u_t_vigor = ($wisScore + $intScore +$level) /8 *$intLFeitico;

			echo "

			<span class='input-group-text'>Vigor</span>
			<input type='number' class='form-control' name='u_t_vigor' placeholder='Vigor' value='$u_t_vigor' readonly>
			</div>
	
			</div>
	
			<div class='col-12 col-md-6'>
	
			";

			$myclass = $class;

			if($class = 'Bruxo'){
				$classModifier1['Bruxo'] = 9;
			}
			if($class = 'Mago'){
				$classModifier1['Mago'] = 5;
			}
			if($class = 'Bardo'){
				$classModifier1['Bardo'] = 2;
			}
			if($class = 'Homem de Armas'){
				$classModifier1['Homem de Armas'] = 9;
			}
			if($class = 'Ladino'){
				$classModifier1['Ladino'] = 0;
			}

				$u_t_hp = ($conFisico + $conScore ) /2 *5 + $classModifier1[$myclass];

			echo "
			<div class='input-group'>
			<span class='input-group-text'>HP</span>
			<input type='number' class='form-control' name='u_a_hp' placeholder='HP Atual' aria-label='HP Atual' value='$u_a_hp'>
			<span class='input-group-text'>/</span>
			<input type='number' class='form-control' name='u_t_hp' placeholder='HP Total' aria-label='HP Total' value='$u_t_hp' readonly>
			
			</div>
	
			</div>
			<!--
			<div class='col-6 col-md-6'>
			<span class='input-group-text'>
			<span class='btn btn-success' onclick='healHP();'>+HP</span>
			<span class='btn btn-danger' onclick='takeDamage();'>-HP</span>
			</span>
			<input type='number' class='form-control' placeholder='HP +-' aria-label='HP +-' id='modHP'>
			</div>
			-->
	
			<div class='col-12 col-md-6'>

			";

			if($class = 'Bruxo'){
				$classModifier2['Bruxo'] = 15;
			}
			if($class = 'Mago'){
				$classModifier2['Mago'] = 15;
			}
			if($class = 'Bardo'){
				$classModifier2['Bardo'] = 0;
			}
			if($class = 'Homem de Armas'){
				$classModifier2['Homem de Armas'] = 9;
			}
			if($class = 'Ladino'){
				$classModifier2['Ladino'] = 10;
			}

				$u_t_est = ($conFisico + $conScore ) /2 *5 + $classModifier2[$myclass];

			echo "
			<div class='input-group'>
			<span class='input-group-text'>EST</span>
			<input type='number' class='form-control' name='u_a_est' placeholder='EST Atual' aria-label='EST Atual' value='$u_a_est'>
			<span class='input-group-text'>/</span>
			<input type='number' class='form-control' name='u_t_est' placeholder='EST Total' aria-label='EST Total' value='$u_t_est' readonly>

			 </div>
	
			</div>

			<!--
			<span class='input-group-text'>
			
			<span class='btn btn-primary' onclick='healEST();'>+EST</span>
			<span class='btn btn-danger' onclick='takeDamageEST();'>-EST</span>
			</span>
			<input type='number' class='form-control' placeholder='EST +-' aria-label='EST +-' id='modEST'>
			-->
	
	
			<div class='col-6 col-md-6'>
			<div class='input-group'>
			<span class='input-group-text'>Cidade</span>
			<input type='text' class='form-control' name='u_city' placeholder='Onde o personagem nasceu' value='$u_city'>
			</div>
			</div>

			<div class='col-6 col-md-6'>
			<div class='input-group'>
			<span class='input-group-text'>Ouro</span>
			<input type='number' class='form-control' name='u_gold' placeholder='Ouro' value='$u_gold'>
			</div>
			</div>
	
		
	
			 </div>
	
			</div>
			
			</div>
		  </div>
		</div>
		<div class='accordion-item'>
		  <h2 class='accordion-header'>
			<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'>
			  Equipamentos #
			</button>
		  </h2>
		  <div id='collapseTwo' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
			<div class='accordion-body'>

			<!-- Elmo-->
			<div class='container text-center'>
			<div class='row grid gap-0 row-gap-3'>
			<div class='col-12 col-md-6' name='Elmo'>
	
			<div class='input-group'>
			<span class='input-group-text'>Elmo</span>
			<select name='user_helm' class='form-select' id='equippedHelm' helmClassById='$id' value='$helm' onchange='UpdateINFO($id)'>
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
	
			</div>

			<div class='col-12 col-md-6' name='Defhelm'>
			
			<div class='input-group'>
			<span class='input-group-text'>Defesa</span>
			<input type='number' id='helmClass' class='form-control' helmdefById='$id' name='user_helmdef' maxlength='12' placeholder='0. ' value='$helm_def' personagemId='$id'>
			<span class='input-group-text'>Durabilidade</span>
			<input type='number' id='elmoDur' class='form-control' name='user_helmdur' maxlength='12' placeholder='0. ' value='$helm_dur'>
			</div>

			</div>


			

			<div class='col-12 col-md-6' name='Armadura'>
				<div class='input-group'>
				<span class='input-group-text'>Armadura</span>
				<select name='user_armor' class='form-select' id='equippedArmor' armorClassById='$id' value='$armor' onchange='UpdateINFO($id)'>
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
			</div>

			<div class='col-12 col-md-6' name='Defarmor'>
			<div class='input-group'>
			<span class='input-group-text'>Defesa</span>
			<input type='number' id='armorClass' class='form-control' armordefById='$id' name='user_armordef' maxlength='12' placeholder='0. ' value='$armor_def' personagemId='$id'>
			<span class='input-group-text'>Durabilidade</span>
			<input type='number' id='armorDur' class='form-control' name='user_armordur' maxlength='12' placeholder='0. ' value='$armor_dur'>
			</div>
			</div>

			<div class='col-12 col-md-6' name='Braceiras'>
				<div class='input-group'>
				<span class='input-group-text'>Braceiras</span>
				<select name='user_arms' class='form-select' id='equippedArms' armsClassById='$id' value='$arms' onchange='UpdateINFO($id)'>
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
			</div>

			<div class='col-12 col-md-6' name='Defarms'>
			<div class='input-group'>
			<span class='input-group-text'>Defesa</span>
			<input type='number' id='armsClass' class='form-control' armsdefById='$id' name='user_armsdef' maxlength='12' placeholder='0. ' value='$arms_def' personagemId='$id'>
			<span class='input-group-text'>Durabilidade</span>
			<input type='number' id='armsDur' class='form-control' name='user_armsdur' maxlength='12' placeholder='0. ' value='$arms_dur'>
			</div>
			</div>


			<div class='col-12 col-md-6' name='Perneiras'>
			
				<div class='input-group'>
				<span class='input-group-text'>Perneiras</span>
				<select name='user_legs' class='form-select' id='equippedLegs' legsClassById='$id' value='$legs' onchange='UpdateINFO2($id)'>
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
			
			</div>

			<div class='col-12 col-md-6' name='Defarms'>
			<div class='input-group'>
			<span class='input-group-text'>Defesa</span>
			<input type='number' id='legsClass' class='form-control' legsdefById='$id' name='user_legsdef' maxlength='12' placeholder='0. ' value='$legs_def' personagemId='$id'>
			<span class='input-group-text'>Durabilidade</span>
			<input type='number' id='legsDur' class='form-control' name='user_legsdur' maxlength='12' placeholder='0. ' value='$legs_dur'>
			</div>
			</div>

			<div class='row'>
			<div class='col-12 col-md-12'>
			<div class='input-group'>
			<span class='input-group-text'>Mao Direita</span>
			<select name='user_righthand' class='form-select' id='equippedRHand' RHandById='$id' value='$righthand' onchange='UpdateINFO2($id)'>
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

			</div>

			<div class='col-12 col-md-12'>
			<div class='input-group'>
			<span class='input-group-text'>Durabil.</span>
			<input type='number' id='righthanddur' class='form-control' rhanddurById='$id' name='user_righthanddur' maxlength='12' placeholder='0. ' value='$righthanddur' personagemId='$id'>
			<span class='input-group-text'>/</span>
			<input type='number' id='righthandadur' class='form-control' name='user_righthandadur' maxlength='12' placeholder='0. ' value='$righthanddur'>
			<span class='input-group-text'>Atual</span>
			</div>
			</div>


			<div class='col-12 col-md-12'>
			<div class='input-group'>
			<span class='input-group-text'>Efeito</span>
			<input type='text' id='rhandClass' class='form-control' rhanddmgById='$id' name='user_righthandnum' maxlength='12' placeholder='0. ' value='$righthandnum' personagemId='$id'>
			</div>

			  </div>
			</div>

<!-- Mao esquerda -->

<div class='row'>
<div class='col-12 col-md-12'>
<div class='input-group'>
<span class='input-group-text'>Mao Esquerda</span>
<select name='user_lefthand' class='form-select' id='equippedLHand' LHandById='$id' value='$lefthand' onchange='UpdateINFO2($id)'>
<option selected>$lefthand</option>
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

</div>

<div class='col-12 col-md-12'>
<div class='input-group'>
<span class='input-group-text'>Durabil.</span>
<input type='number' id='lefthanddur' class='form-control' lhanddurById='$id' name='user_lefthanddur' maxlength='12' placeholder='0. ' value='$lefthanddur' personagemId='$id'>
<span class='input-group-text'>/</span>
<input type='number' id='lefthandadur' class='form-control' name='user_lefthandadur' maxlength='12' placeholder='0. ' value='$lefthanddur'>
<span class='input-group-text'>Atual</span>
</div>
</div>


<div class='col-12 col-md-12'>
<div class='input-group'>
<span class='input-group-text'>Efeito</span>
<input type='text' id='lhandClass' class='form-control' lhanddmgById='$id' name='user_lefthandnum' maxlength='12' placeholder='0. ' value='$lefthandnum' personagemId='$id'>
</div>

  </div>
</div>

			</div>
	

			<div class='form-row'>
	
	
	
	
	
	
			</div>
	

			</div>
		  </div>
		</div>
		<div class='accordion-item'>
		  <h2 class='accordion-header'>
			<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree' aria-expanded='false' aria-controls='collapseThree'>
			  Atributos #
			</button>
		  </h2>
		  <div id='collapseThree' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
			<div class='accordion-body'>



<table class='table'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Atributo</th>
      <th scope='col'>Coeficiente</th>
      <th scope='col'>Pontos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>Forca</th>
	  <div class='container text-center'>
	  <div class='row'>
	  <div class='col-9 col-md-9'>
      <td><input type='number' name='user_strScore' value='$strScore' id='strScore' strScore='$id' class='form-control' min='1' max='30' onchange='updateModifiers($id)'></td>
	  <td><input type='number' name='user_strCoef' value='$strCoef' id='strMod' strMod='$id' class='form-control' personagemId='$id' min='-5' max='10'></td>
      <td><input type='number' value='0' id='strPoints' class='form-control' min='0' max='30'></td>
	  </div>
	  </div>
	  </div>
    </tr>
    <tr>
      <th scope='row'>Destreza</th>
	  <div class='container text-center'>
	  <div class='row'>
	  <div class='col-9 col-md-9'>
	  <td><input type='number' name='user_dexScore' value='$dexScore' id='dexScore' dexScore='$id' class='form-control' min='1' max='30' onchange='updateModifiers($id)'></td>
	  <td><input type='number' name='user_dexCoef' value='$dexCoef' id='dexMod' dexMod='$id' class='form-control' personagemId='$id' min='-5' max='10'></td>
	  <td><input type='number' value='0' id='dexPoints' class='form-control' min='0' max='30'></td>
	  </div>
	  </div>
	  </div>
    </tr>
    <tr>
      <th scope='row'>Sabedoria</th>
	  <div class='container text-center'>
	  <div class='row'>
	  <div class='col-9 col-md-9'>
	  <td><input type='number' name='user_wisScore' value='$wisScore' id='wisScore' wisScore='$id' class='form-control' min='1' max='30' onchange='updateModifiers($id)'></td>
	  <td><input type='number' name='user_wisCoef' value='$wisCoef' id='wisMod' wisMod='$id' class='form-control' personagemId='$id' min='-5' max='10'></td>
	  <td><input type='number' value='0' id='wisPoints' class='form-control' min='0' max='30'></td>
	  </div>
	  </div>
	  </div>
    </tr>
    <tr>
      <th scope='row'>Constituicao</th>
	  <div class='container text-center'>
	  <div class='row'>
	  <div class='col-9 col-md-9'>
	  <td><input type='number' name='user_conScore' value='$conScore' id='conScore' conScore='$id' class='form-control' min='1' max='30' onchange='updateModifiers($id)'></td>
	  <td><input type='number' name='user_conCoef' value='$conCoef' id='conMod' conMod='$id' class='form-control' personagemId='$id' min='-5' max='10'></td>
	  <td><input type='number' value='0' id='conPoints' class='form-control' min='0' max='30'></td>
	  </div>
	  </div>
	  </div>
    </tr>
    <tr>
      <th scope='row'>Carisma</th>
	  <div class='container text-center'>
	  <div class='row'>
	  <div class='col-9 col-md-9'>
	  <td><input type='number' name='user_chaScore' value='$chaScore' id='chaScore' chaScore='$id' class='form-control' min='1' max='30' onchange='updateModifiers($id)'></td>
	  <td><input type='number' name='user_chaCoef' value='$chaCoef' id='chaMod' chaMod='$id' class='form-control' personagemId='$id' min='-5' max='10'></td>
	  <td><input type='number' value='0' id='chaPoints' class='form-control' min='0' max='30'></td>
	  </div>
	  </div>
	  </div>
    </tr>
    <tr>
      <th scope='row'>Inteligencia</th>
	  <div class='container text-center'>
	  <div class='row'>
	  <div class='col-9 col-md-9'>
	  <td><input type='number' name='user_intScore' value='$intScore' id='intScore' intScore='$id' class='form-control' min='1' max='30' onchange='updateModifiers($id)'></td>
	  <td><input type='number' name='user_intCoef' value='$intCoef' id='intMod' intMod='$id' class='form-control' personagemId='$id' min='-5' max='10'></td>
	  <td><input type='number' value='0' id='intPoints' class='form-control' min='0' max='30'></td>
	  </div>
	  </div>
	  </div>
    </tr>
    <tr>
      <th scope='row'>Agilidade</th>
	  <div class='container text-center'>
	  <div class='row'>
	  <div class='col-9 col-md-9'>
	  <td><input type='number' name='user_agiScore' value='$agiScore' id='agiScore' agiScore='$id' class='form-control' min='1' max='30' onchange='updateModifiers($id)'></td>
	  <td><input type='number' name='user_agiCoef' value='$agiCoef' id='agiMod' agiMod='$id' class='form-control' personagemId='$id' min='-5' max='10'></td>
	  <td><input type='number' value='0' id='agiPoints' class='form-control' min='0' max='30'></td>
	  </div>
	  </div>
	  </div>
    </tr>

  </tbody>
</table>
			
			
			</div>
		  </div>
		</div>

		
		<div class='accordion-item'>
		  <h2 class='accordion-header'>
			<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour' aria-expanded='false' aria-controls='collapseFour'>
			  Pericias #
			</button>
		  </h2>
		  <div id='collapseFour' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
			<div class='accordion-body'>



			<div class='accordion' id='accordionSTR'>
			<div class='accordion-item'>
			  <h2 class='accordion-header'>
				<button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSTR' aria-expanded='true' aria-controls='collapseSTR'>
				  Forca
				</button>
			  </h2>
			  <div id='collapseSTR' class='accordion-collapse collapse show' data-bs-parent='#accordionSTR'>
				<div class='accordion-body'>
				  
				<div class='container text-center'>
				<div class='row grid gap-0 row-gap-3'>

				<h3>Forca</h3>

				<div class='col-6 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Bloquear</span>
				<input type='number' id='strBloquear' class='form-control' name='strBloquear' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-6 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Brigar</span>
				<input type='number' id='strBrigar' class='form-control' name='strBrigar' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-6 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Cajado/Lanca</span>
				<input type='number' id='strCajadoLanca' class='form-control' name='strCajadoLanca' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-6 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Coragem</span>
				<input type='number' id='strCoragem' class='form-control' name='strCoragem' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-6 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Esgrima</span>
				<input type='number' id='strEsgrima' class='form-control' name='strEsgrima' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-6 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Fisico</span>
				<input type='number' id='strFisico' class='form-control' name='strFisico' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-6 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Intimidacao</span>
				<input type='number' id='strIntimidacao' class='form-control' name='strIntimidacao' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-6 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Laminas Curtas</span>
				<input type='number' id='strLaminasCurtas' class='form-control' name='strLaminasCurtas' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-6 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Resistir Coercao</span>
				<input type='number' id='strResistirCoercao' class='form-control' name='strResistirCoercao' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-6 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Tolerancia</span>
				<input type='number' id='strTolerancia' class='form-control' name='strTolerancia' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>

				</div>
				</div>

				</div>
			  </div>
			</div>
			<div class='accordion-item'>
			  <h2 class='accordion-header'>
				<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseDES' aria-expanded='false' aria-controls='collapseDES'>
				  Destreza
				</button>
			  </h2>
			  <div id='collapseDES' class='accordion-collapse collapse' data-bs-parent='#accordionDES'>
				<div class='accordion-body'>

				<div class='container text-center'>
				<div class='row grid gap-0 row-gap-3'>

				<h3>Destreza</h3>

				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Abrir Trancas</span>
				<input type='number' id='desAbrirTrancas' class='form-control' name='desAbrirTrancas' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Acrobacia</span>
				<input type='number' id='desAcrobacia' class='form-control' name='desAcrobacia' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Arco e Flecha</span>
				<input type='number' id='desArcoFlecha' class='form-control' name='desArcoFlecha' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Atletismo </span>
				<input type='number' id='desAtletismo' class='form-control' name='desAtletismo' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Furtividade</span>
				<input type='number' id='desFurtividade' class='form-control' name='desFurtividade' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Hab c/ 2 Maos</span>
				<input type='number' id='desHab2Maos' class='form-control' name='desHab2Maos' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Prestidigitacao</span>
				<input type='number' id='desPrestidigitacao' class='form-control' name='desPrestidigitacao' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Reflexo/Esquivar</span>
				<input type='number' id='desReflexoEsquivar' class='form-control' name='desReflexoEsquivar' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>


				</div>
				</div>
				
				</div>
			  </div>
			</div>
			<div class='accordion-item'>
			  <h2 class='accordion-header'>
				<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSAB' aria-expanded='false' aria-controls='collapseSAB'>
				  Sabedoria
				</button>
			  </h2>
			  <div id='collapseSAB' class='accordion-collapse collapse' data-bs-parent='#accordionSAB'>
				<div class='accordion-body'>

				<div class='container text-center'>
				<div class='row grid gap-0 row-gap-3'>

				<h3>Forca</h3>

				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Bloquear</span>
				<input type='number' id='strBloquear' class='form-control' name='strBloquear' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Brigar</span>
				<input type='number' id='strBrigar' class='form-control' name='strBrigar' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Cajado/Lanca</span>
				<input type='number' id='strCajadoLanca' class='form-control' name='strCajadoLanca' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Coragem</span>
				<input type='number' id='strCoragem' class='form-control' name='strCoragem' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Esgrima</span>
				<input type='number' id='strEsgrima' class='form-control' name='strEsgrima' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Fisico</span>
				<input type='number' id='strFisico' class='form-control' name='strFisico' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Intimidacao</span>
				<input type='number' id='strIntimidacao' class='form-control' name='strIntimidacao' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Laminas Curtas</span>
				<input type='number' id='strLaminasCurtas' class='form-control' name='strLaminasCurtas' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Resistir Coercao</span>
				<input type='number' id='strResistirCoercao' class='form-control' name='strResistirCoercao' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Tolerancia</span>
				<input type='number' id='strTolerancia' class='form-control' name='strTolerancia' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>

				</div>
				</div>

				</div>
			  </div>
			</div>

			<div class='accordion-item'>
			  <h2 class='accordion-header'>
				<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseCON' aria-expanded='false' aria-controls='collapseCON'>
				  Constituicao
				</button>
			  </h2>
			  <div id='collapseCON' class='accordion-collapse collapse' data-bs-parent='#accordionCON'>
				<div class='accordion-body'>

				<div class='container text-center'>
				<div class='row grid gap-0 row-gap-3'>

				<h3>Constituicao</h3>

				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Fisico</span>
				<input type='number' id='conFisico' class='form-control' name='conFisico' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Tolerancia</span>
				<input type='number' id='conTolerancia' class='form-control' name='conTolerancia' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Intimidacao</span>
				<input type='number' id='conIntimidacao' class='form-control' name='conIntimidacao' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	

				</div>
				</div>

				</div>
			  </div>
			</div>

			<div class='accordion-item'>
			  <h2 class='accordion-header'>
				<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseCAR' aria-expanded='false' aria-controls='collapseCAR'>
				  Carisma
				</button>
			  </h2>
			  <div id='collapseCAR' class='accordion-collapse collapse' data-bs-parent='#accordionCAR'>
				<div class='accordion-body'>

				<div class='container text-center'>
				<div class='row grid gap-0 row-gap-3'>

				<h3>Carisma</h3>

				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Aparencia e Estilo</span>
				<input type='number' id='carAparenciaEstilo' class='form-control' name='carAparenciaEstilo' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Belas Artes</span>
				<input type='number' id='carBelasArtes' class='form-control' name='carBelasArtes' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Lideranca</span>
				<input type='number' id='carLideranca' class='form-control' name='carLideranca' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Ludibriar/Enganar</span>
				<input type='number' id='carLudibriarEnganar' class='form-control' name='carLudibriarEnganar' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Percepcao Humana</span>
				<input type='number' id='carPercepcaoHumana' class='form-control' name='carPercepcaoHumana' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Persuasao</span>
				<input type='number' id='carPersuasao' class='form-control' name='carPersuasao' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Seducao</span>
				<input type='number' id='carSeducao' class='form-control' name='carSeducao' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	

				</div>
				</div>

				</div>
			  </div>
			</div>

			<div class='accordion-item'>
			  <h2 class='accordion-header'>
				<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseINT' aria-expanded='false' aria-controls='collapseINT'>
				  Inteligencia
				</button>
			  </h2>
			  <div id='collapseINT' class='accordion-collapse collapse' data-bs-parent='#accordionINT'>
				<div class='accordion-body'>

				<div class='container text-center'>
				<div class='row grid gap-0 row-gap-3'>

				<h3>Inteligencia</h3>

				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Historia e Geografia</span>
				<input type='number' id='intHistoriaGeografia' class='form-control' name='intHistoriaGeografia' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Investigacao</span>
				<input type='number' id='intInvestigacao' class='form-control' name='intInvestigacao' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Lancar Feiticos(2)</span>
				<input type='number' id='intLancarFeiticos' class='form-control' name='intLancarFeiticos' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Natureza</span>
				<input type='number' id='intNatureza' class='form-control' name='intNatureza' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Taticas(2)</span>
				<input type='number' id='intTaticas' class='form-control' name='intTaticas' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>

				</div>
				</div>

				</div>
			  </div>
			</div>

			<div class='accordion-item'>
			  <h2 class='accordion-header'>
				<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseAGI' aria-expanded='false' aria-controls='collapseAGI'>
				  Agilidade
				</button>
			  </h2>
			  <div id='collapseAGI' class='accordion-collapse collapse' data-bs-parent='#accordionAGI'>
				<div class='accordion-body'>

				<div class='container text-center'>
				<div class='row grid gap-0 row-gap-3'>

				<h3>Forca</h3>

				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Bloquear</span>
				<input type='number' id='strBloquear' class='form-control' name='strBloquear' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Brigar</span>
				<input type='number' id='strBrigar' class='form-control' name='strBrigar' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Cajado/Lanca</span>
				<input type='number' id='strCajadoLanca' class='form-control' name='strCajadoLanca' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Coragem</span>
				<input type='number' id='strCoragem' class='form-control' name='strCoragem' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Esgrima</span>
				<input type='number' id='strEsgrima' class='form-control' name='strEsgrima' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Laminas Curtas</span>
				<input type='number' id='strLaminasCurtas' class='form-control' name='strLaminasCurtas' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>
	
				<div class='col-3 col-md-3'>
				<div class='input-group'>
				<span class='input-group-text'>Resistir Coercao</span>
				<input type='number' id='strResistirCoercao' class='form-control' name='strResistirCoercao' maxlength='3' placeholder='0. ' value='0'>
				</div>
				</div>

				</div>
				</div>

				</div>
			  </div>
			</div>


		  </div>

			

			

			

			</div>
		  </div>
		</div>

		<div class='accordion-item'>
		  <h2 class='accordion-header'>
			<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive' aria-expanded='false' aria-controls='collapseFive'>
			  Habilidades #
			</button>
		  </h2>
		  <div id='collapseFive' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
			<div class='accordion-body'>
			  
			
			  <hr>
			  <table class='table table-bordered table-striped table-hover' id='skillTable'>
			  <thead>
			  
			  <th class='text-center' scope='col'>Habilidade</th>
			  <th class='text-center' scope='col'>Informacoes</th>

			  </thead>
			  ";

			// Query para obter as habilidades do Personagem
			$get_allskill = '
			select
			ps.entry_id,
			ps.player_id,
			ps.skill_id,
			sd.id,
			sd.skill_name,
			sd.skill_dmg,
			sd.skill_est_cost, 
			sd.skill_lv,
			sd.skill_def,
			sd.skill_duration,
			sd.skill_range, 
			sd.skill_act_type, 
			sd.skill_element, 
			sd.skill_class, 
			sd.skill_description, 
			sd.skill_effect 
			from skill_db sd
			inner join player_skill ps on sd.id = ps.skill_id
			order by ps.player_id ASC
			;
			';
			$run_allskill = mysqli_query($con, $get_allskill);
			while ($row_allskill = mysqli_fetch_array($run_allskill)) {
				$ps_entry_id = $row_allskill['entry_id'];
				$ps_player_id = $row_allskill['player_id'];
	
				$ps_skill_id = $row_allskill['skill_id'];
				$sd_id = $row_allskill['id'];
				$sd_skill_name = $row_allskill['skill_name'];
				$sd_skill_dmg = $row_allskill['skill_dmg'];
				$sd_skill_est_cost = $row_allskill['skill_est_cost'];
				$sd_skill_lv = $row_allskill['skill_lv'];
				$sd_skill_def = $row_allskill['skill_def'];
				$sd_skill_duration = $row_allskill['skill_duration'];
				$sd_skill_range = $row_allskill['skill_range'];
				$sd_skill_act_type = $row_allskill['skill_act_type'];
				$sd_skill_element = $row_allskill['skill_element'];
				$sd_skill_class = $row_allskill['skill_class'];
				$sd_skill_description = $row_allskill['skill_description'];
				$sd_skill_effect = $row_allskill['skill_effect'];


				if ($ps_player_id == $id) {
					echo "

					";
					?>
					<img src="img/cards/<?php echo "$sd_skill_name"?>.png" width='330' height='470' onerror="this.src='img/cards/01.png'">
					<?php
					echo "


										<tr>								
									
									<td class='text-center'>$sd_skill_name</td>
									<td class='text-center'>
									<b>Dano:</b> $sd_skill_dmg &nbsp;	&nbsp; <b>Nivel:</b> $sd_skill_lv &nbsp; &nbsp; <b>Defesa:</b> $sd_skill_def &nbsp;	&nbsp; <b>Duracao:</b> $sd_skill_duration &nbsp; &nbsp; <br>
									<b>Alcance:</b> $sd_skill_range &nbsp; &nbsp; <b>Est:</b> $sd_skill_est_cost &nbsp; &nbsp; <b>Elemento:</b> $sd_skill_element	&nbsp; &nbsp; <b>Acao:</b> $sd_skill_act_type <br><br>
									$sd_skill_description <br>
									<b>$sd_skill_effect</b>
									
									</td>
									
									<span>
									";
				}
		}
			  echo "
			  </tr>
							
			  </table>
			  </hr>

			 </div>
		  </div>
		</div>

		<div class='accordion-item'>
		  <h2 class='accordion-header'>
			<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSix' aria-expanded='false' aria-controls='collapseSix'>
			  Inventario #
			</button>
		  </h2>
		  <div id='collapseSix' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
			<div class='accordion-body'>
			<strong>Hello World.</strong> 
			</div>
		  </div>
		</div>


		<!-- Magician -->
		";
		if($class == 'Mago'){
			echo "
			
			<div class='accordion-item'>
			<h2 class='accordion-header'>
			  <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeven' aria-expanded='false' aria-controls='collapseSeven'>
				Mago #
			  </button>
			</h2>
			<div id='collapseSeven' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
			  <div class='accordion-body'>
			  <strong>Hello World.</strong> 
			  </div>
			</div>
		  </div>

			";
		};
		echo "
		<div class='accordion-item'>
		  <h2 class='accordion-header'>
			<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeven' aria-expanded='false' aria-controls='collapseSeven'>
			  Teste #
			</button>
		  </h2>
		  <div id='collapseSeven' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
			<div class='accordion-body'>
			<strong>Hello World.</strong> 
			</div>
		  </div>
		</div>

	  </div>
	  <!-- Accordion -->		

		
		
		<div class='form-row'>

		";
		if($class == 'Mago'){
			echo "
			<tr></tr>
			";
		};
		echo "


		
			

	  
		<!-- Atributos Fim -->

	
		<div class='form-group'>
		<label for='u_info'>Informacoes Importantes</label>
			<textarea class='form-control' name='u_info' rows='3'>$u_info</textarea>
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

	<script src="js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#skillTable').DataTable();

		});
	</script>
<script>
$('.btn-stats').click(function() {
    $('.stats').toggle();
  });
</script>

<script>
$('.btn-equips').click(function() {
    $('.equips').toggle();
  });
</script>


</body>

</html>