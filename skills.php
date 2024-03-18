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
    <a href="skills.php" class="btn btn-primary"><i class="fa fa-light fa-book-quran"></i> Habilidades</a>
    <a href="#" class="btn btn-primary"><i class="fa fa-light fa-suitcase"></i> Itens</a>
    <a href="#" class="btn btn-primary"><i class="fa fa-light fa-flask"></i> Alquimia</a>

    
        </div>
</body>
</html>