<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastrar tarefa de Tarefas</h1>
    <fieldset>
        <legend>Nova Tarefa:</legend>
        <?php include('includes/formulario_cadastrar.php') ?>
    </fieldset>
    <br />
        <div class="menu_botao">
            <div>Voltar a pagina de gerenciamento</div>
            <button onclick="window.location='index.php'">Tarefas</button>
        </div>

</body>
</html>