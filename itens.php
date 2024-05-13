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
        <a class="nav-link" href="skills.php"><i class="fa fa-light fa-book-quran"></i> Habilidades</a>
        <a class="nav-link active" href="itens.php"><i class="fa fa-light fa-suitcase"></i> Itens</a>
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
  <i class="fa fa-plus"></i> Adicionar Itens</button>





		<!-- Inicio tabela -->
		<hr>
		<table class="table table-bordered table-striped table-hover" id="myItemTable">
			<thead>
				<tr>
					<th class="text-center" scope="col">ID</th> <!-- ID da Habilidade  -->
					<th class="text-center" scope="col">Item</th> <!-- Nome da Habilidade  -->
					<th class="text-center" scope="col">Tipo de Item/Classe</th>
					<th class="text-center" scope="col">Descricao/Preco/Peso/Efeito</th>
					<th class="text-center" scope="col">Opcoes</th>

				</tr>
			</thead>
			<?php

			$get_item_data = "SELECT * FROM item_db order by 1 desc";
			$run_item_data = mysqli_query($con, $get_item_data);
			$i = 0;
			while ($row = mysqli_fetch_array($run_item_data)) {
				$pi = ++$i;
                $item_id = $row['item_id'];
                $item_name = $row['item_name'];
                $item_price = $row['item_price'];
                $item_type = $row['item_type'];
                $item_weight_class = $row['item_weight_class'];
                $item_weight = $row['item_weight'];
                $item_class = $row['item_class'];
                $item_effect = $row['item_effect'];
                $item_durability = $row['item_durability'];
                $item_rarity = $row['item_rarity'];
                $item_recipe01 = $row['item_recipe01'];
                $item_recipe02 = $row['item_recipe02'];
                $item_recipe03 = $row['item_recipe03'];
                $item_recipe04 = $row['item_recipe04'];
                $item_recipe_qt01 = $row['item_recipe_qt01'];
                $item_recipe_qt02 = $row['item_recipe_qt02'];
                $item_recipe_qt03 = $row['item_recipe_qt03'];
                $item_recipe_qt04 = $row['item_recipe_qt04'];
                $item_description = $row['item_description'];
				echo "

				<tr>
                <td class='text-center'>$pi</td>
                <td class='text-center'>$item_name</td>
                <td class='text-center'>
				<b>Tipo:</b> $item_type <br>
				<b>Classe:</b> $item_class <br>
                
				
                </td>
                <td class='text-center'>
				$item_weight_class: $item_weight &nbsp; &nbsp; Preco: $item_price &nbsp; &nbsp; <b>Raridade:</b> $item_rarity &nbsp; &nbsp; <b>Durabilidade:</b> $item_durability <br><br>
				$item_description <br>
				<b>$item_effect</b> <br>
                ";
                if($item_recipe_qt01 > 0 && $item_recipe01 != ''){
                echo "
				<b>Receita:</b><br>
                Item 1: $item_recipe_qt01 x &nbsp;&nbsp; $item_recipe01 <br>
                ";
                };
                if($item_recipe_qt02 > 0 && $item_recipe02 != ''){
                echo "
                Item 2: $item_recipe_qt02 x &nbsp;&nbsp; $item_recipe02<br>
                ";
                };
                if($item_recipe_qt03 > 0  && $item_recipe03 != ''){
                echo "
                Item 3: $item_recipe_qt03 x &nbsp;&nbsp; $item_recipe03<br>
                ";
                };
                if($item_recipe_qt04 > 0  && $item_recipe04 != ''){
                echo "
                Item 4: $item_recipe_qt04 x &nbsp;&nbsp; $item_recipe04<br>
                ";
                };

                echo "
				</td>



			
				<td class='text-center'>
				
					<span>
					<a href='#' class='btn btn-warning mr-3 edituser' data-bs-toggle='modal' data-bs-target='#edit_item$item_id' title='Editar'><i class='fa fa-pencil-square-o fa-lg'></i></a>
					<a href='#' class='btn btn-danger deleteuser' title='Deletar'>
					<i class='fa fa-trash fa-lg' data--bs-toggle='modal' data-bs-target='#$item_id' style='' aria-hidden='true'></i>
			   </a>
					</span>
					
				</td>
			</tr>


        		";
			}

			?>

<?php

$get_item_data = "SELECT * FROM item_db";
$run_item_data = mysqli_query($con, $get_item_data);

while ($row = mysqli_fetch_array($run_item_data)) {
	$item_id = $row['item_id'];
	$item_name = $row['item_name'];
	$item_price = $row['item_price'];
	$item_type = $row['item_type'];
	$item_weight_class = $row['item_weight_class'];
	$item_weight = $row['item_weight'];
	$item_class = $row['item_class'];
	$item_effect = $row['item_effect'];
	$item_durability = $row['item_durability'];
	$item_rarity = $row['item_rarity'];
	$item_recipe01 = $row['item_recipe01'];
	$item_recipe02 = $row['item_recipe02'];
	$item_recipe03 = $row['item_recipe03'];
	$item_recipe04 = $row['item_recipe04'];
	$item_recipe_qt01 = $row['item_recipe_qt01'];
	$item_recipe_qt02 = $row['item_recipe_qt02'];
	$item_recipe_qt03 = $row['item_recipe_qt03'];
	$item_recipe_qt04 = $row['item_recipe_qt04'];
	$item_description = $row['item_description'];
	echo "

<div class='modal fade' id='edit_item$item_id' tabindex='-1' aria-labelledby='myModal'>
<div class='modal-dialog modal-lg'>

<!-- Modal content-->
<div class='modal-content'>

		<div class='modal-header'>
		
		<h4 class='modal-title text-center'>Editar Item</h4>
		<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Fechar'></button>
			 
		</div>

		<div class='modal-body'>
			<form action='edit_item.php?id=$item_id' method='post' enctype='multipart/form-data'>
		
			
				<div class='container text-center'>
					<div class='row grid gap-0 row-gap-2'>
					


						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Item</span>
									<input type='text' class='form-control' name='item_name'
									placeholder='Nome do Item' maxlength='40' required value='$item_name'>
							</div>
						</div>

						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Preco</span>
									<input type='number' class='form-control' name='item_price'
									placeholder='Nenhum' maxlength='20' value='$item_price'>
							</div>
						</div>
					
						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Tipo de Item</span>
									<select id='inputItemType' name='item_type' class='form-select' required value='$item_type'>
										<option selected>$item_type</option>
										<option>Ingrediente</option>
										<option>Pocao</option>
										<option>Oleo</option>
										<option>Veiculo</option>
										<option>Kits</option>
										<option>Geral</option>
										<option>Contentores</option>
										<option>Comidas</option>
										<option>Bebidas</option>
										<option>Roupas</option>
										<option>Servicos</option>
										<option>Hospedagem</option>
										<option>Partes de Monstro</option>
										<optgroup id='equipmentsMenu' value='Equipamentos' label='Equipamentos'>
										</optgroup>
										<optgroup id='optionsWeapons' value='Armas' label='Armas'>
											<option>Adaga</option>
											<option>Espada</option>
											<option>Machado</option>
											<option>Clava</option>
											<option>Lanca</option>
											<option>Cajado</option>
											<option>Arcos</option>
											<option>Bestas</option>
											<option>Municao</option>
										</optgroup>
										<optgroup id='armorsMenu' value='Armaduras' label='Armaduras'>
											<option>Cabeca</option>
											<option>Meio</option>
											<option>Braco</option>
											<option>Perna</option>
											<option>Escudo</option>
										</optgroup>
									</select>
							</div>
						</div>

						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Classe do Item</span>
									<select id='inputItemClass' name='item_class' class='form-select' required value='$item_class'>
										<option selected>$item_class</option>
                                        <option>Natureza</option>
                                        <option>Alquimia</option>
                                        <option>Forja</option>
                                        <option>Costura</option>
                                        <option>Culinaria</option>
                                        <option>NPC</option>
									</select>
							</div>
						</div>

						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Classe de Peso</span>
									<select id='inputItemWeightClass' name='item_weight_class' class='form-select' required value='$item_weight_class'>
										<option selected>$item_weight_class</option>
										<option>Levissimo</option>
										<option>Leve</option>
										<option>Medio</option>
										<option>Pesado</option>
										<option>Extremamente Pesado</option>
									</select>
							</div>
						</div>

						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Peso</span>
									<input type='number' class='form-control' name='item_weight'
									placeholder='Peso' maxlength='20' value='$item_weight'>
							</div>
						</div>

						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Durabilidade</span>
									<input type='number' class='form-control' name='item_durability'
									placeholder='Durabilidade' maxlength='20' value='$item_durability'>
							</div>
						</div>

						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Raridade</span>
									<select id='inputRarirty' name='item_rarity' class='form-select' required value='$item_rarity'>
										<option selected>$item_rarity</option>
										<option>Comum</option>
										<option>Incomum</option>
										<option>Raro</option>
										<option>Epico</option>
										<option>Lendario</option>
									</select>
							</div>
						</div>

						<div class='form-group'>
						<label for='item_description'>Descricao</label>
							<textarea class='form-control' name='item_description' rows='3'>$item_description</textarea>
						</div>

						<div class='form-group'>
						<label for='item_effect'>Efeito</label>
							<textarea class='form-control' name='item_effect' rows='2'>$item_effect</textarea>
						</div>

						

						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Ingrediente</span>
									<select id='inputItemIngredient01' name='item_recipe01' class='form-select' value='$item_recipe01'>
										<option selected>$item_recipe01</option>
										<option>Nenhum</option>
										";
										// Query para obter os ingredientes
										$get_ingredients = "SELECT item_name FROM item_db where item_type = 'Ingrediente'";
										$run_ingredients = mysqli_query($con, $get_ingredients);
								
										while ($row_ingredients = mysqli_fetch_array($run_ingredients)) {
											$ingredients_list = $row_ingredients['item_name'];
								
											echo "<option value='$ingredients_list'>$ingredients_list</option>";
										}
										echo "
									</select>
							</div>
						</div>

						<div class='col-12 col-md-6'>
							<div class='input-group'>
								<span class='input-group-text'>Quantidade</span>
									<input type='number' class='form-control' name='item_recipe_qt01'
									placeholder='Quantidade' maxlength='5' value='$item_recipe_qt01'>
							</div>
						</div>


						<div class='col-12 col-md-6'>
						<div class='input-group'>
							<span class='input-group-text'>Ingrediente</span>
								<select id='inputItemIngredient02' name='item_recipe02' class='form-select' value='$item_recipe02'>
									<option selected>$item_recipe02</option>
									<option>Nenhum</option>
									";
									// Query para obter os ingredientes
									$get_ingredients = "SELECT item_name FROM item_db where item_type = 'Ingrediente'";
									$run_ingredients = mysqli_query($con, $get_ingredients);
							
									while ($row_ingredients = mysqli_fetch_array($run_ingredients)) {
										$ingredients_list = $row_ingredients['item_name'];
							
										echo "<option value='$ingredients_list'>$ingredients_list</option>";
									}
									echo "
								</select>
						</div>
					</div>

					<div class='col-12 col-md-6'>
						<div class='input-group'>
							<span class='input-group-text'>Quantidade</span>
								<input type='number' class='form-control' name='item_recipe_qt02'
								placeholder='Quantidade' maxlength='5' required value='$item_recipe_qt02'>
						</div>
					</div>


					<div class='col-12 col-md-6'>
					<div class='input-group'>
						<span class='input-group-text'>Ingrediente</span>
							<select id='inputItemIngredient03' name='item_recipe03' class='form-select' value='$item_recipe03'>
								<option selected>$item_recipe03</option>
								<option>Nenhum</option>
								";
								// Query para obter os ingredientes
								$get_ingredients = "SELECT item_name FROM item_db where item_type = 'Ingrediente'";
								$run_ingredients = mysqli_query($con, $get_ingredients);
						
								while ($row_ingredients = mysqli_fetch_array($run_ingredients)) {
									$ingredients_list = $row_ingredients['item_name'];
						
									echo "<option value='$ingredients_list'>$ingredients_list</option>";
								}
								echo "
							</select>
					</div>
				</div>

				<div class='col-12 col-md-6'>
					<div class='input-group'>
						<span class='input-group-text'>Quantidade</span>
							<input type='number' class='form-control' name='item_recipe_qt03'
							placeholder='Quantidade' maxlength='5' required value='$item_recipe_qt03'>
					</div>
				</div>


				<div class='col-12 col-md-6'>
				<div class='input-group'>
					<span class='input-group-text'>Ingrediente</span>
						<select id='inputItemIngredient04' name='item_recipe04' class='form-select' value='$item_recipe04'>
							<option selected>$item_recipe04</option>
							<option>Nenhum</option>
							";
							// Query para obter os ingredientes
							$get_ingredients = "SELECT item_name FROM item_db where item_type = 'Ingrediente'";
							$run_ingredients = mysqli_query($con, $get_ingredients);
					
							while ($row_ingredients = mysqli_fetch_array($run_ingredients)) {
								$ingredients_list = $row_ingredients['item_name'];
					
								echo "<option value='$ingredients_list'>$ingredients_list</option>";
							}
							echo "
						</select>
				</div>
			</div>

			<div class='col-12 col-md-6'>
				<div class='input-group'>
					<span class='input-group-text'>Quantidade</span>
						<input type='number' class='form-control' name='item_recipe_qt04'
						placeholder='Quantidade' maxlength='5' value='$item_recipe_qt04'>
				</div>
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
					<h5 class="modal-title">Adicionar Item</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
				</div>
				<div class="modal-body">
					<form action="add_item.php" method="POST" enctype="multipart/form-data">

						<!-- ADD Item content  -->
						<div class="container text-center">
							<div class="row grid gap-0 row-gap-2">

							<div class="col-12 col-md-6">
								<div class="input-group">
									<span class="input-group-text">Item</span>
										<input type="text" class="form-control" name="item_name"
										placeholder="Nome do Item" maxlength='40'>
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="input-group">
									<span class="input-group-text">Preco</span>
										<input type="number" class="form-control" name="item_price"
										placeholder="Nenhum" maxlength='20'>
								</div>
							</div>

							<div class="col-12 col-md-6">
							<div class="input-group">
								<span class="input-group-text">Tipo de Item</span>
									<select id="inputItemType" name="item_type" class="form-select" required>
										<option selected>Escolha..</option>
										<option>Ingrediente</option>
										<option>Pocao</option>
										<option>Oleo</option>
										<option>Veiculo</option>
										<option>Kits</option>
										<option>Geral</option>
										<option>Contentores</option>
										<option>Comidas</option>
										<option>Bebidas</option>
										<option>Roupas</option>
										<option>Servicos</option>
										<option>Hospedagem</option>
										<option>Partes de Monstro</option>
										<optgroup id="equipmentsMenu" value="Equipamentos" label="Equipamentos">
										</optgroup>
										<optgroup id="optionsWeapons" value="Armas" label="Armas">
											<option>Adaga</option>
											<option>Espada</option>
											<option>Machado</option>
											<option>Clava</option>
											<option>Lanca</option>
											<option>Cajado</option>
											<option>Arcos</option>
											<option>Bestas</option>
											<option>Municao</option>
										</optgroup>
										<optgroup id="armorsMenu" value="Armaduras" label="Armaduras">
											<option>Cabeca</option>
											<option>Meio</option>
											<option>Braco</option>
											<option>Perna</option>
											<option>Escudo</option>
										</optgroup>
									</select>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="input-group">
								<span class="input-group-text">Classe do Item</span>
									<select id="inputItemClass" name="item_class" class="form-select" required>
										<option selected>Escolha..</option>
                                        <option>Natureza</option>
                                        <option>Alquimia</option>
                                        <option>Forja</option>
                                        <option>Costura</option>
                                        <option>Culinaria</option>
                                        <option>NPC</option>
									</select>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="input-group">
								<span class="input-group-text">Classe de Peso</span>
									<select id="inputItemWeightClass" name="item_weight_class" class="form-select" required >
										<option selected>Escolha..</option>
										<option>Levissimo</option>
										<option>Leve</option>
										<option>Medio</option>
										<option>Pesado</option>
										<option>Extremamente Pesado</option>
									</select>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="input-group">
								<span class="input-group-text">Peso</span>
									<input type="number" class="form-control" name="item_weight"
									placeholder="Peso" maxlength='3'>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="input-group">
								<span class="input-group-text">Durabilidade</span>
									<input type="number" class="form-control" name="item_durability"
									placeholder="Durabilidade" maxlength='3'>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="input-group">
								<span class="input-group-text">Raridade</span>
									<select id="inputRarirty" name="item_rarity" class="form-select" required>
										<option selected>Escolha..</option>
										<option>Comum</option>
										<option>Incomum</option>
										<option>Raro</option>
										<option>Epico</option>
										<option>Lendario</option>
									</select>
							</div>
						</div>

						<div class="form-group">
						<label for="item_description">Descricao</label>
							<textarea class="form-control" name="item_description" rows='3'></textarea>
						</div>

						<div class="form-group">
						<label for="item_effect">Efeito</label>
							<textarea class="form-control" name="item_effect" rows='2'></textarea>
						</div>

						<div class="col-12 col-md-6">
							<div class="input-group">
								<span class="input-group-text">Ingrediente</span>
									<select id="inputItemIngredient01" name="item_recipe01" class="form-select">
										<option selected>Escolha..</option>
										<option>Nenhum</option>
									</select>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="input-group">
								<span class="input-group-text">Quantidade</span>
									<input type="number" class="form-control" name="item_recipe_qt01"
									placeholder="Quantidade" maxlength='5'>
							</div>
						</div>


						<div class="col-12 col-md-6">
						<div class="input-group">
							<span class="input-group-text">Ingrediente</span>
								<select id="inputItemIngredient02" name="item_recipe02" class="form-select">
									<option selected>Escolha..</option>
									<option>Nenhum</option>
								</select>
						</div>
					</div>

					<div class="col-12 col-md-6">
						<div class="input-group">
							<span class="input-group-text">Quantidade</span>
								<input type="number" class="form-control" name="item_recipe_qt02"
								placeholder="Quantidade" maxlength='5'>
						</div>
					</div>


					<div class="col-12 col-md-6">
					<div class="input-group">
						<span class="input-group-text">Ingrediente</span>
							<select id="inputItemIngredient03" name="item_recipe03" class="form-select">
								<option selected>Escolha..</option>
								<option>Nenhum</option>
							</select>
					</div>
				</div>

				<div class="col-12 col-md-6">
					<div class="input-group">
						<span class="input-group-text">Quantidade</span>
							<input type="number" class="form-control" name="item_recipe_qt03"
							placeholder="Quantidade" maxlength='5'>
					</div>
				</div>


				<div class="col-12 col-md-6">
				<div class="input-group">
					<span class="input-group-text">Ingrediente</span>
						<select id="inputItemIngredient04" name="item_recipe04" class="form-select">
							<option selected>Escolha..</option>
							<option>Nenhum</option>
						</select>
				</div>
			</div>

			<div class="col-12 col-md-6">
				<div class="input-group">
					<span class="input-group-text">Quantidade</span>
						<input type="number" class="form-control" name="item_recipe_qt04"
						placeholder="Quantidade" maxlength='5'>
				</div>
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

	$get_data = "SELECT * FROM item_db";
	$run_data = mysqli_query($con, $get_data);

	while ($row = mysqli_fetch_array($run_data)) {
		$item_id = $row['item_id'];
		$item_name = $row['item_name'];
		echo "

<div id='$item_id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>Voce tem certeza que deseja deletar <b>'$item_name'</b> ??</h4>
      </div>
      <div class='modal-body'>
        <a href='delete_item.php?id=$item_id' class='btn btn-danger' style='margin-left:250px'>Deletar</a>
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
			$('#myItemTable').DataTable();

		});
	</script>

</body>

</html>