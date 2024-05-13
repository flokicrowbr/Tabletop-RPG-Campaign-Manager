<?php
//Conexão database
include('db.php');

//Adicionar data ao database
if(isset($_POST['submit'])){
	$u_gold = $_POST['u_gold'];
	$u_name = $_POST['u_name'];
	$u_gender = $_POST['user_gender'];
	$u_level = $_POST['user_level'];
	$race = $_POST['user_race'];
	$class = $_POST['user_class'];
	
	//upload de imagem
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "upload_images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Imagem enviada com sucesso";
  	}else{
  		$msg = "Falha ao enviar imagem";
  	}

  	$insert_data = "INSERT INTO players_table(u_gold, u_name, u_gender, u_level, u_race, u_class, image,uploaded) VALUES ('$u_gold','$u_name','$u_birthday','$u_gender','$u_level','$race','$class','$image',NOW())";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:index.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>
