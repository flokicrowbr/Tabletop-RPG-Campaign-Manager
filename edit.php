<?php
include('db.php');

$id = $_GET['id'];

//Atualizando imagem anterior
if(isset($_GET['id'])){
    $edit_id = $_GET['id'];
    $edit_query = "SELECT * FROM players_table WHERE id = $edit_id";
    $edit_query_run = mysqli_query($con, $edit_query);
    if(mysqli_num_rows($edit_query_run) > 0){
        $edit_row = mysqli_fetch_array($edit_query_run);
      
        $e_image = $edit_row['image'];
     
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
	$u_gold = $_POST['card_no'];
	$u_strScore = $_POST['user_strScore'];
	$u_dexScore = $_POST['user_dexScore'];
	$u_wisScore = $_POST['user_wisScore'];
	$u_conScore = $_POST['user_conScore'];
	$u_chaScore = $_POST['user_chaScore'];
	$u_intScore = $_POST['user_intScore'];
	$u_agiScore = $_POST['user_agiScore'];

	$u_name = $_POST['user_first_name'];
	$u_race = $_POST['user_race'];
	$u_class = $_POST['user_class'];
	$u_a_hp = $_POST['u_a_hp'];
	$u_birthday = $_POST['user_dob'];
	$u_gender = $_POST['user_gender'];
	$u_helm = $_POST['user_helm'];
	$u_helmdef = $_POST['user_helmdef'];
	$u_helmdur = $_POST['user_helmdur'];
	$u_armor = $_POST['user_armor'];
	$u_armordef = $_POST['user_armordef'];
	$u_armordur = $_POST['user_armordur'];
	$u_arms = $_POST['user_arms'];
	$u_armsdef = $_POST['user_armsdef'];
	$u_armsdur = $_POST['user_armsdur'];
	$u_legs = $_POST['user_legs'];
	$u_legsdef = $_POST['user_legsdef'];
	$u_legsdur = $_POST['user_legsdur'];
	$u_righthand = $_POST['user_righthand'];
	$u_righthandnum = $_POST['user_righthandnum'];
	$u_righthanddur = $_POST['user_righthanddur'];
	$u_lefthand = $_POST['user_lefthand'];
	$u_lefthandnum = $_POST['user_lefthandnum'];
	$u_lefthanddur = $_POST['user_lefthanddur'];
	$u_extraequip = $_POST['user_extraequip'];
	$u_extraequipnum = $_POST['user_extraequipnum'];
	$u_extraequipdur = $_POST['user_extraequipdur'];
	$u_level = $_POST['user_level'];
	$u_exp = $_POST['user_exp'];
	$u_dist = $_POST['dist'];
	$u_village = $_POST['village'];
	$u_t_hp = $_POST['u_t_hp'];
	$u_family = $_POST['family'];
	$u_a_est = $_POST['u_a_est'];
	$u_t_est = $_POST['u_t_est'];
	
	$msg = "";
	$image = $_FILES['image']['name'];
	if(empty($image)){
	    $image = $e_image;
	}
	$target = "upload_images/".basename($image);


	$update = "UPDATE players_table SET u_gold='$u_gold', u_strScore='$u_strScore', u_dexScore='$u_dexScore', u_wisScore='$u_wisScore', u_conScore='$u_conScore', u_chaScore='$u_chaScore', u_intScore='$u_intScore', u_agiScore='$u_agiScore', u_name = '$u_name', u_race = '$u_race', u_class = '$u_class', u_a_hp = '$u_a_hp', u_t_hp = '$u_t_hp', u_helm = '$u_helm', u_helmdef = '$u_helmdef', u_helmdur = '$u_helmdur', u_armor = '$u_armor', u_armordef = '$u_armordef', u_armordur = '$u_armordur', u_arms = '$u_arms', u_armsdef = '$u_armsdef', u_armsdur = '$u_armsdur', u_legs = '$u_legs', u_legsdef = '$u_legsdef', u_legsdur = '$u_legsdur', u_righthand = '$u_righthand', u_righthandnum = '$u_righthandnum', u_righthanddur = '$u_righthanddur', u_lefthand = '$u_lefthand', u_lefthandnum = '$u_lefthandnum', u_lefthanddur = '$u_lefthanddur', u_extraequip = '$u_extraequip', u_extraequipnum = '$u_extraequipnum', u_extraequipdur = '$u_extraequipdur', u_birthday = '$u_birthday', u_gender = '$u_gender', u_level = '$u_level', u_exp = '$u_exp', u_dist = '$u_dist', u_village = '$u_village', u_family = '$u_family', u_a_est = '$u_a_est', u_t_est = '$u_t_est', image = '$image' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
           move_uploaded_file($_FILES['image']['tmp_name'], $target);
           echo "<script>
            alert('Successo! Salvo com sucesso!');
            window.location.href='index.php';
            </script>";
	}else{
		echo "Não atualizado";
	}
}

?>
