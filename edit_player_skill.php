<?php
//Conexуo database
include('db.php');

// Query para converter as variaveis para inserчуo




//Adicionar data ao database
if(isset($_POST['submit'])){

    $ps_skill_id = $_POST['user_skill'];
    $player_id_for = $_POST['char_id'];

    $get_skillfor = "SELECT id, skill_name FROM skill_db WHERE skill_name = '$ps_skill_id'";
    $run_skillfor = mysqli_query($con, $get_skillfor);

    while ($row_skillfor = mysqli_fetch_array($run_skillfor)) {

        $id = $row_skillfor['id'];
        $skill_name = $row_skillfor['skill_name'];
    


    $insert_data = "INSERT INTO player_skill(player_id, skill_id) VALUES ('$player_id_for','$id')";
    $run_data = mysqli_query($con,$insert_data);
}


  	if($run_data){
  		header('location:index.php');
  	}else{
  		echo "Data not insert";
  	}

}


?>