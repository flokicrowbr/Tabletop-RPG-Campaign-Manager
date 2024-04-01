<?php
include('db.php');

$id = $_GET['id'];

//Atualizando imagem anterior
if(isset($_GET['id'])){
    $edit_id = $_GET['id'];
    $edit_query = "SELECT * FROM skill_db WHERE id = $edit_id";
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
	$skill_name = $_POST['skill_name'];
	$skill_dmg = $_POST['skill_dmg'];
	$skill_est_cost = $_POST['skill_est_cost'];
	$skill_lv = $_POST['skill_lv'];
	$skill_def = $_POST['skill_def'];
	$skill_duration = $_POST['skill_duration'];
	$skill_range = $_POST['skill_range'];
	$skill_act_type = $_POST['skill_act_type'];
	$skill_element = $_POST['skill_element'];
	$skill_class = $_POST['skill_class'];
	$skill_description = $_POST['skill_description'];
	$skill_effect = $_POST['skill_effect'];
	
	$msg = "";
	$update = "UPDATE skill_db SET skill_name='$skill_name', skill_dmg='$skill_dmg', skill_est_cost='$skill_est_cost', skill_lv='$skill_lv', skill_def='$skill_def', skill_duration='$skill_duration', skill_range='$skill_range', skill_act_type='$skill_act_type', skill_element='$skill_element', skill_class='$skill_class', skill_description='$skill_description', skill_effect='$skill_effect' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
           echo "<script>
            alert('Successo! Salvo com sucesso!');
            window.location.href='skills.php';
            </script>";
	}else{
		echo "Não atualizado";
	}
}

?>
