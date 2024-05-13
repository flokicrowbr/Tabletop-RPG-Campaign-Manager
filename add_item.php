<?php
//Conexão database
include('db.php');

//Adicionar dados de itens ao database
if(isset($_POST['submit'])){
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

    $insert_data = "INSERT INTO 
    item_db(item_name, item_price, item_type, item_weight_class, item_weight, item_class, item_effect, item_durability, item_rarity, item_recipe01, item_recipe02, item_recipe03, item_recipe04, item_recipe_qt01, item_recipe_qt02, item_recipe_qt03, item_recipe_qt04, item_description)
    VALUES ('$item_name', '$item_price', '$item_type', '$item_weight_class', '$item_weight', '$item_class', '$item_effect', '$item_durability', '$item_rarity', '$item_recipe01', '$item_recipe02', '$item_recipe03', '$item_recipe04', '$item_recipe_qt01', '$item_recipe_qt02', '$item_recipe_qt03', '$item_recipe_qt04', '$item_description')";
    $run_data = mysqli_query($con,$insert_data);

    if($run_data){
        header('location:itens.php');
    }else{
        echo "Data not insert";
    }

}
?>