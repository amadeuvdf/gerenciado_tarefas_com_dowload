<?php 
session_start();

include "banco.php";
include "includes/ajustes.php";

$tarefa = array(
    'id' => 0,
    'nome' => '',
    'descricao' => '',
    'prazo' => '',
    'prioridade' => 1,
    'concluida' => ''
);

$tarefa = buscar_tarefa($con, $_GET['id']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar</title>
</head>
<body>
    <h1>Editar tarefa das Tarefas</h1>
    <fieldset>
        <legend>Sua Tarefa:</legend>
        <?php include('includes/formulario_editar.php') ?>
    </fieldset>
    <br />
        <div class="menu_botao">
            <div>Voltar a pagina de gerenciamento</div>
            <button onclick="window.location='index.php'">Tarefas</button>
        </div>

</body>
</html>