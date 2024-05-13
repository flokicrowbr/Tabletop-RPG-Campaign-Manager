<?php
include ('db.php');

?>

<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RPG de Mesa</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="js/main.js"></script>

	<nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
  <img src="img/rpgdemesa.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="index.php"><i class="fa fa-light fa-user"></i> Personagens</a>
        <a class="nav-link active" href="skills.php"><i class="fa fa-light fa-book-quran"></i> Habilidades</a>
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

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  <i class="fa fa-plus"></i> Adicionar Habilidade</button>





		<!-- Inicio tabela -->
		<hr>
		<table class="table table-bordered table-striped table-hover" id="mySkillTable">
			<thead>
				<tr>
					<th class="text-center" scope="col">ID</th> <!-- ID da Habilidade  -->
					<th class="text-center" scope="col">Habilidade</th> <!-- Nome da Habilidade  -->
					<th class="text-center" scope="col">Dano</th>
					<th class="text-center" scope="col">EST</th>
					<th class="text-center" scope="col">Nivel</th>
					<th class="text-center" scope="col">Elemento</th>
					<th class="text-center" scope="col">Tipo de Acao</th>
					<th class="text-center" scope="col">Classe</th>
					<th class="text-center" scope="col">Descricao</th>
					<th class="text-center" scope="col">Opcoes</th>

				</tr>
			</thead>
			<?php

			$get_data = "SELECT * FROM skill_db order by 1 desc";
			$run_data = mysqli_query($con, $get_data);
			$i = 0;
			while ($row = mysqli_fetch_array($run_data)) {
				$sl = ++$i;
				$id = $row['id'];
				$skill_name = $row['skill_name'];
				$skill_dmg = $row['skill_dmg'];
				$skill_est_cost = $row['skill_est_cost'];
				$skill_lv = $row['skill_lv'];
				$skill_def = $row['skill_def'];
				$skill_duration = $row['skill_duration'];
				$skill_range = $row['skill_range'];
				$skill_act_type = $row['skill_act_type'];
				$skill_element = $row['skill_element'];
				$skill_class = $row['skill_class'];
				$skill_description = $row['skill_description'];
				$skill_effect = $row['skill_effect'];
				echo "

				<tr>
				<td class='text-center'>$id</td>
				<td class='text-center'><b>$skill_name</b></td>
				<td class='text-center'>$skill_dmg</td>
				<td class='text-center'>$skill_est_cost</td>
				<td class='text-center'>$skill_lv</td>
				<td class='text-center'>$skill_element</td>
				<td class='text-center'>$skill_act_type</td>
				<td class='text-center'>$skill_class</td>

				</td>
                <td class='text-center'>
				<b>Defesa: </b>$skill_def &nbsp;&nbsp; <b>Duracao: </b>$skill_duration &nbsp;&nbsp; <b>Alcance: </b>$skill_range	
				<br><br>
				$skill_description<br> 
				<b>$skill_effect</b></td>

			
				<td class='text-center'>
				
					<span>
					<a href='#' class='btn btn-warning mr-3 edituser' data-bs-toggle='modal' data-bs-target='#edit_skill$id' title='Editar'><i class='fa fa-pencil-square-o fa-lg'></i></a>
					<a href='#' class='btn btn-danger deleteuser' title='Deletar'>
					<i class='fa fa-trash fa-lg' data--bs-toggle='modal' data-bs-target='#$id' style='' aria-hidden='true'></i>
			   </a>
					</span>
					
				</td>
			</tr>


        		";
			}

			?>

<?php

$get_data = "SELECT * FROM skill_db";
$run_data = mysqli_query($con, $get_data);

while ($row = mysqli_fetch_array($run_data)) {
	$id = $row['id'];
	$skill_name = $row['skill_name'];
	$skill_dmg = $row['skill_dmg'];
	$skill_est_cost = $row['skill_est_cost'];
	$skill_lv = $row['skill_lv'];
	$skill_def = $row['skill_def'];
	$skill_duration = $row['skill_duration'];
	$skill_range = $row['skill_range'];
	$skill_act_type = $row['skill_act_type'];
	$skill_element = $row['skill_element'];
	$skill_class = $row['skill_class'];
	$skill_description = $row['skill_description'];
	$skill_effect = $row['skill_effect'];
	echo "

<div class='modal fade' id='edit_skill$id' tabindex='-1' aria-labelledby='myModal'>
<div class='modal-dialog modal-lg'>

<!-- Modal content-->
<div class='modal-content'>

		<div class='modal-header'>
		
		<h4 class='modal-title text-center'>Editar Habilidade</h4>
		<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Fechar'></button>
			 
		</div>

		<div class='modal-body'>
			<form action='edit_skill.php?id=$id' method='post' enctype='multipart/form-data'>
		
			
				<div class='container text-center'>
					<div class='row grid gap-0 row-gap-2'>
					


						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Habilidade</span>
									<input type='text' class='form-control' name='skill_name'
									placeholder='Nome da Habilidade' maxlength='40' required value='$skill_name'>
							</div>
						</div>

						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Dano</span>
									<input type='text' class='form-control' name='skill_dmg'
									placeholder='Nenhum' maxlength='20' value='$skill_dmg'>
							</div>
						</div>
					
						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Est</span>
									<input type='text' class='form-control' name='skill_est_cost'
									placeholder='Nenhum' maxlength='20' required value='$skill_est_cost'>
							</div>
						</div>

						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Duracao</span>
									<input type='text' class='form-control' name='skill_duration'
									placeholder='Duracao da Habilidade' maxlength='20' required value='$skill_duration'>
							</div>
						</div>

						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Alcance</span>
									<input type='text' class='form-control' name='skill_range'
									placeholder='Alcance da Habilidade' maxlength='20' required value='$skill_range'>
							</div>
						</div>

						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Elemento</span>
									<select id='inputElement' name='skill_element' class='form-select' required value='$skill_element'>
										<option selected>$skill_element</option>
											<option>Misturado</option>
											<option>Fogo</option>
											<option>Agua</option>
											<option>Ar</option>
											<option>Terra</option>
											<option>Bruxo</option>
											<option>Nenhum</option>
									</select>
							</div>
						</div>

					<div class='col-12 col-md-6'>
						<div class='input-group'>
							<span class='input-group-text'>Defesa</span>
								<select id='inputDef' name='skill_def' class='form-select' required value='$skill_def'>
									<option selected>$skill_def</option>
										<option>Nenhuma</option>
										<option>Esquivar/Bloquear</option>
										<option>Resistir Magia</option>
										<option>Esquivar</option>
										<option>Definido pelo mestre</option>
								</select>
						</div>
					</div>

					<div class='col-12 col-md-6'>
						<div class='input-group'>
							<span class='input-group-text'>Nivel</span>
								<select id='inputLv' name='skill_lv' class='form-select' required value='$skill_lv'>
									<option selected>$skill_lv</option>
										<option>Iniciante</option>
										<option>Profissional</option>
										<option>Mestre</option>
								</select>
						</div>
					</div>

					<div class='col-12 col-md-6'>
						<div class='input-group'>
							<span class='input-group-text'>Tipo de Acao</span>
								<select id='inputLv' name='skill_act_type' class='form-select' required value='$skill_act_type'>
									<option selected>$skill_act_type</option>
										<option>Principal</option>
										<option>Jogada Bonus</option>
										<option>Defesa</option>
										<option>Hibrido</option>
								</select>
						</div>
					</div>

					<div class='col-12 col-md-6'>
						<div class='input-group'>
							<span class='input-group-text'>Classe</span>
								<select id='inputClass' name='skill_class' class='form-select' required value='$skill_class'>
									<option selected>$skill_class</option>
										<option>Mago</option>
										<option>Clerigo</option>
										<option>Druida</option>
										<option>Bruxo</option>
										<option>Homem de Armas</option>
										<option>Ladino</option>
										<option>Basica</option>
								</select>
						</div>
					</div>

					<div class='form-group'>
					<label for='skill_description'>Descricao</label>
						<textarea class='form-control' name='skill_description' rows='5' value='$skill_description'>$skill_description</textarea>
					</div>

					<div class='form-group'>
					<label for='skill_effect'>Efeito Adicional</label>
						<textarea class='form-control' name='skill_effect' rows='2' value='$skill_effect'>$skill_effect</textarea>
					</div>

					<div class='col-12 col-md-12'>
					";
					?>
					<img src="img/cards/<?php echo "$skill_name"?>.png" onerror="this.src='img/cards/01.png'">
					<?php
					echo "
					</div>

					</div>
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

";
}
?>

<!----edição de dados fim--->

		</table>

		<!----edição de dados--->
	<!---Adicionado modal---->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">

			<!-- Modal conteudo-->
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Adicionar Habilidade</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
				</div>
				<div class="modal-body">
					<form action="add_skill.php" method="POST" enctype="multipart/form-data">

						<!-- ADD Skill content  -->
						<div class="container text-center">
							<div class="row grid gap-0 row-gap-2">
								<div class="col-12 col-md-6">
									<div class="input-group">
										<span class="input-group-text">Habilidade</span>
											<input type="text" class="form-control" name="skill_name"
											placeholder="Nome da Habilidade" maxlength="40" required>
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-group">
										<span class="input-group-text">Dano</span>
											<input type="text" class="form-control" name="skill_dmg"
											placeholder="Dano da Habilidade" maxlength="20">
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-group">
										<span class="input-group-text">EST</span>
											<input type="text" class="form-control" name="skill_est_cost"
											placeholder="Custo de Est" maxlength="20">
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-group">
										<span class="input-group-text">Duracao</span>
											<input type="text" class="form-control" name="skill_duration"
											placeholder="Duracao" maxlength="20" required>
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-group">
										<span class="input-group-text">Alcance</span>
											<input type="text" class="form-control" name="skill_range"
											placeholder="Alcance da Habilidade" maxlength="20" required>
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-group">
										<span class="input-group-text">Elemento</span>
											<select id="inputElement" name="skill_element" class="form-select" required>
												<option selected>Escolha...</option>
													<option>Misturado</option>
													<option>Fogo</option>
													<option>Agua</option>
													<option>Ar</option>
													<option>Terra</option>
													<option>Bruxo</option>
													<option>Nenhum</option>
											</select>
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-group">
										<span class="input-group-text">Defesa</span>
											<select id="inputDef" name="skill_def" class="form-select" required>
												<option selected>Escolha...</option>
													<option>Nenhuma</option>
														<option>Esquivar/Bloquear</option>
														<option>Resistir Magia</option>
														<option>Esquivar</option>
														<option>Definido pelo mestre</option>
											</select>
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-group">
										<span class="input-group-text">Nivel</span>
											<select id="inputLv" name="skill_lv" class="form-select" required>
												<option selected>Escolha...</option>
														<option>Iniciante</option>
														<option>Profissional</option>
														<option>Mestre</option>
											</select>
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-group">
										<span class="input-group-text">Tipo de Acao</span>
											<select id="inputAct" name="skill_act_type" class="form-select" required>
												<option selected>Escolha...</option>
													<option>Principal</option>
													<option>Jogada Bonus</option>
													<option>Defesa</option>
													<option>Hibrido</option>
											</select>
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-group">
										<span class="input-group-text">Classe</span>
											<select id="inputClass" name="skill_class" class="form-select" required>
												<option selected>Escolha...</option>
														<option>Mago</option>
														<option>Clerigo</option>
														<option>Druida</option>
														<option>Bruxo</option>
														<option>Homem de Armas</option>
														<option>Ladino</option>
														<option>Basica</option>
											</select>
									</div>
								</div>

								<div class="form-group">
									<label for="skill_description">Descricao</label>
									<textarea class='form-control' name='skill_description'
									rows='5'></textarea>
								</div>

								<div class="form-group">
									<label for="skill_effect">Efeito Adicional</label>
									<textarea class='form-control' name='skill_effect' rows='2'></textarea>
								</div>




							</div>
						</div>

						<div class="modal-footer">
							<button type="submit" name="submit" class="btn btn-info btn-large">Salvar</button>
							<button type="button" class="btn btn-default" data-bs-dismiss="modal">Fechar</button>
						</div>

						</form>
						</div>




		<form method="post" action="export.php">
			<!-- Remover
	 <input type="submit" name="export" class="btn btn-success" value="Exportar" /> 
		-->
		</form>
	</div>
	</div>
	</div>
	<!-- Fim tabela -->


	<!------DELETE modal---->
	<!-- Modal -->
	<?php

	$get_data = "SELECT * FROM skill_db";
	$run_data = mysqli_query($con, $get_data);

	while ($row = mysqli_fetch_array($run_data)) {
		$id = $row['id'];
		$skill_name = $row['skill_name'];
		echo "

<div id='$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>Voce tem certeza que deseja deletar <b>'$skill_name'</b> ??</h4>
      </div>
      <div class='modal-body'>
        <a href='delete_skill.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Deletar</a>
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
			$('#mySkillTable').DataTable();

		});
	</script>

</body>

</html>