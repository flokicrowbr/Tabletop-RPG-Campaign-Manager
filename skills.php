<?php
include('db.php');

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RPG de Mesa</title>
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

    <a href="index.php" class="btn btn-primary"><i class="fa fa-light fa-backward"></i> Voltar</a>
	<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
  	<i class="fa fa-plus"></i> Adicionar Habilidade</button>
    <a href="#" class="btn btn-primary"><i class="fa fa-light fa-suitcase"></i> Itens</a>
    <a href="#" class="btn btn-primary"><i class="fa fa-light fa-flask"></i> Alquimia</a>



  
    <!-- Inicio tabela -->
    <hr>
		<table class="table table-bordered table-striped table-hover" id="mySkillTable">
		<thead>
			<tr>
			   <th class="text-center" scope="col">ID</th> 				<!-- ID da Habilidade  -->
				<th class="text-center" scope="col">Habilidade</th>				<!-- Nome da Habilidade  -->
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
        	$run_data = mysqli_query($con,$get_data);
			$i = 0;
        	while($row = mysqli_fetch_array($run_data))
        	{
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
				<td class='text-center'>$sl</td>
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
					<a href='#' class='btn btn-warning mr-3 edituser' data-toggle='modal' data-target='#edit_skill$id' title='Editar'><i class='fa fa-pencil-square-o fa-lg'></i></a>
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

<!----edição de dados--->

<?php

$get_data = "SELECT * FROM skill_db";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
	{
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

<div id='edit_skill$id' class='modal fade' role='dialog'>
	<div class='modal-dialog'>

		<!-- Modal content-->
		<div class='modal-content'>

				<div class='modal-header'>
				
					<button type='button' class='close' data-dismiss='modal'>&times;</button>
					<h4 class='modal-title text-center'>Editar Habilidade</h4> 
				</div>

				<div class='modal-body'>
					<form action='edit_skill.php?id=$id' method='post' enctype='multipart/form-data'>
				
					
					<div class='form-group col-md-6'>
					<label for='inputSkill'>Habilidade</label>
					<input type='text' class='form-control' name='skill_name' placeholder='Nome da Habilidade' maxlength='40' required value='$skill_name'>
					</div>

					<div class='form-group col-md-6'>
					<label for='inputDmg'>Dano</label>
					<input type='text' class='form-control' name='skill_dmg' placeholder='Dano da Habilidade' maxlength='20' value='$skill_dmg'>
					</div>

					<div class='form-group col-md-4'>
					<label for='skill_est_cost'>Custo de Est</label>
					<input type='text' class='form-control' name='skill_est_cost' placeholder='Custo de EST' value='$skill_est_cost'>
					</div>

					<div class='form-group col-md-4'>
					<label for='skill_duration'>Duracao</label>
					<input type='text' class='form-control' name='skill_duration' placeholder='Duracao da Habilidade' required value='$skill_duration'>
					</div>

					<div class='form-group col-md-4'>
					<label for='skill_range'>Alcance</label>
					<input type='text' class='form-control' name='skill_range' placeholder='Alcance da Habilidade' value='$skill_range'>
					</div>

					<div class='form-group col-md-6'>
					<label for='inputElement'>Elemento</label>
					<select id='inputElement' name='skill_element' class='form-control' required value='$skill_element'>
					  <option selected>$skill_element</option>
					  <option>Misturado</option>
					  <option>Fogo</option>
					  <option>Agua</option>
					  <option>Ar</option>
					  <option>Terra</option>
					  <option>Bruxo</option>
					</select>
					</div>
					
					<div class='form-group col-md-6'>
					<label for='inputDef'>Defesa</label>
					<select id='inputDef' name='skill_def' class='form-control' required value='$skill_def'>
					  <option selected>$skill_def</option>
					  <option>Nenhuma</option>
					  <option>Esquivar/Bloquear</option>
					  <option>Resistir Magia</option>
					  <option>Esquivar</option>
					  <option>Definido pelo mestre</option>
					</select>
					</div>

					<div class='form-group col-md-6'>
					<label for='inputLv'>Nivel</label>
					<select id='inputLv' name='skill_lv' class='form-control' required value='$skill_lv'>
					  <option selected>$skill_lv</option>
					  <option>Iniciante</option>
					  <option>Profissional</option>
					  <option>Mestre</option>
					</select>
					</div>

					<div class='form-group col-md-6'>
					<label for='inputAct'>Tipo de Acao</label>
					<select id='inputAct' name='skill_act_type' class='form-control' required value='$skill_act_type'>
					  <option selected>$skill_act_type</option>
					  <option>Principal</option>
					  <option>Jogada Bonus</option>
					  <option>Defesa</option>
					  <option>Hibrido</option>
					</select>
					</div>

					<div class='form-group col-md-12'>
					<label for='inputClass'>Classe</label>
					<select id='inputClass' name='skill_class' class='form-control' required value='$skill_class'>
					  <option selected>$skill_class</option>
					  <option>Mago</option>
					  <option>Clerigo</option>
					  <option>Druida</option>
					  <option>Bruxo</option>
					  <option>Homem de Armas</option>
					  <option>Ladino</option>
					</select>
					</div>

					<div class='form-group'>
					<label for='skill_description'>Descricao</label>
						<textarea class='form-control' name='skill_description' rows='5' value='$skill_description'>$skill_description</textarea>
					</div>

					<div class='form-group'>
					<label for='skill_effect'>Efeito Adicional</label>
						<textarea class='form-control' name='skill_effect' rows='2' value='$skill_effect'>$skill_effect</textarea>
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

		<form method="post" action="export.php">
			<!-- Remover
     <input type="submit" name="export" class="btn btn-success" value="Exportar" /> 
		-->
    </form>
	</div>
    <!-- Fim tabela -->


<!------DELETE modal---->
<!-- Modal -->
<?php

$get_data = "SELECT * FROM skill_db";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
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
        <form action="add_skill.php" method="POST" enctype="multipart/form-data">
			
			<!-- Teste de Modal  -->
			
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputSkill">Habilidade</label>
<input type="text" class="form-control" name="skill_name" placeholder="Nome da Habilidade" maxlength="40" required>
</div>
<div class="form-group col-md-6">
<label for="inputDmg">Dano</label>
<input type="text" class="form-control" name="skill_dmg" placeholder="Dano da Habilidade" maxlength="20">
</div>
</div>


<div class="form-row">
<div class="form-group col-md-4">
<label for="skill_est_cost">Custo de Est</label>
<input type="text" class="form-control" name="skill_est_cost" placeholder="Custo de EST">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="skill_duration">Duracao</label>
<input type="text" class="form-control" name="skill_duration" placeholder="Duracao da Habilidade" required>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="skill_range">Alcance</label>
<input type="text" class="form-control" name="skill_range" placeholder="Alcance da Habilidade">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputElement">Elemento</label>
<select id="inputElement" name="skill_element" class="form-control" required>
  <option selected>Escolha...</option>
  <option>Misturado</option>
  <option>Fogo</option>
  <option>Agua</option>
  <option>Ar</option>
  <option>Terra</option>
  <option>Bruxo</option>
</select>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputDef">Defesa</label>
<select id="inputDef" name="skill_def" class="form-control" required>
  <option selected>Escolha...</option>
  <option>Nenhuma</option>
  <option>Esquivar/Bloquear</option>
  <option>Resistir Magia</option>
  <option>Esquivar</option>
  <option>Definido pelo mestre</option>
</select>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputLv">Nivel</label>
<select id="inputLv" name="skill_lv" class="form-control" required>
  <option selected>Escolha...</option>
  <option>Iniciante</option>
  <option>Profissional</option>
  <option>Mestre</option>
</select>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputAct">Tipo de Acao</label>
<select id="inputAct" name="skill_act_type" class="form-control" required>
  <option selected>Escolha...</option>
  <option>Principal</option>
  <option>Jogada Bonus</option>
  <option>Defesa</option>
  <option>Hibrido</option>
</select>
</div>

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputClass">Classe</label>
<select id="inputClass" name="skill_class" class="form-control" required>
  <option selected>Escolha...</option>
  <option>Mago</option>
  <option>Clerigo</option>
  <option>Druida</option>
  <option>Bruxo</option>
  <option>Homem de Armas</option>
  <option>Ladino</option>
</select>
</div>

<div class="form-group">
		<label for="skill_description">Descricao</label>
			<textarea class='form-control' name='skill_description' rows='5'></textarea>
		</div>
</div>

<div class="form-group">
		<label for="skill_effect">Efeito Adicional</label>
			<textarea class='form-control' name='skill_effect' rows='2'></textarea>
		</div>
</div>
			
        </form>
      </div>
      <div class="modal-footer">
      <input type="submit" name="submit" class="btn btn-info btn-large" value="Salvar">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>






<script src="js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#mySkillTable').DataTable();

    });
</script>

</body>
</html>