<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciador</title>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>

    <br />
    <fieldset>
        <legend>Tarefas</legend>
        <?php include('includes/tabela.php')?>
    </fieldset>
    <br />
    <div class="menu_botao">
        <div>Acesso a pagina de cadastro</div>
        <button onclick="window.location='template_formulario.php'">Cadastrar</button>
    </div>
    <br />
    <div class="menu_botao">
        <div>Gerar a planilha</div>
        <button onclick="window.location='gerar_planilha.php'">Planilha</button>
    </div>
    <br />
    <div class="menu_botao">
        <div>Limpar Tarefas concluidas</div>
        <button onclick="window.location='limpar.php'">Limpar</button>
    </div>
    <br />
</body>
</html>