<?php
include('db.php');

$id = $_GET['id'];

//Atualizando imagem anterior
if(isset($_GET['id'])){
    $edit_id = $_GET['id'];
    $edit_query = "SELECT * FROM item_db WHERE item_id = $edit_id";
    $edit_query_run = mysqli_query($con, $edit_query);
    if(mysqli_num_rows($edit_query_run) > 0){
        $edit_row = mysqli_fetch_array($edit_query_run);
      
        //$e_image = $edit_row['image'];
     
    }
    else{
        // header('local: index.php');
        echo "Error1";
    }
}
else{
    // header("local: index.php");
    echo "Error2";
}

//Atualização
if(isset($_POST['submit']))
{
	$item_name = $_POST['item_name'];
	$item_price = $_POST['item_price'];
	$item_type = $_POST['item_type'];
	$item_weight_class = $_POST['item_weight_class'];
	$item_weight = $_POST['item_weight'];
	$item_class = $_POST['item_class'];
	$item_effect = $_POST['item_effect'];
	$item_durability = $_POST['item_durability'];
	$item_rarity = $_POST['item_rarity'];
	$item_recipe01 = $_POST['item_recipe01'];
	$item_recipe02 = $_POST['item_recipe02'];
	$item_recipe03 = $_POST['item_recipe03'];
	$item_recipe04 = $_POST['item_recipe04'];
	$item_recipe_qt01 = $_POST['item_recipe_qt01'];
	$item_recipe_qt02 = $_POST['item_recipe_qt02'];
	$item_recipe_qt03 = $_POST['item_recipe_qt03'];
	$item_recipe_qt04 = $_POST['item_recipe_qt04'];
	$item_description = $_POST['item_description'];
	
	$msg = "";
	$update = "UPDATE item_db SET item_name='$item_name', item_price='$item_price', item_type='$item_type', item_weight_class='$item_weight_class', item_weight='$item_weight', item_class='$item_class', item_effect='$item_effect', item_durability='$item_durability', item_rarity='$item_rarity', item_recipe01='$item_recipe01', item_recipe02='$item_recipe02', item_recipe03='$item_recipe03', item_recipe04='$item_recipe04', item_recipe_qt01='$item_recipe_qt01', item_recipe_qt02='$item_recipe_qt02', item_recipe_qt03='$item_recipe_qt03', item_recipe_qt04='$item_recipe_qt04', item_description='$item_description' WHERE item_id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
           echo "<script>
            alert('Successo! Salvo com sucesso!');
            window.location.href='itens.php';
            </script>";
	}else{
		echo "Não atualizado";
	}
}

?>
