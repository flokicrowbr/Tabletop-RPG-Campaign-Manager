<?php
//Conexão database
include('db.php');

//Adicionar data ao database
if(isset($_POST['submit'])){
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
	

  	$insert_data = "INSERT INTO 
	skill_db(skill_name, skill_dmg, skill_est_cost, skill_lv, skill_def, skill_duration, skill_range, skill_act_type, skill_element, skill_class, skill_description, skill_effect)
	VALUES ('$skill_name','$skill_dmg','$skill_est_cost','$skill_lv','$skill_def','$skill_duration','$skill_range','$skill_act_type','$skill_element','$skill_class','$skill_description','$skill_effect')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:skills.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>
