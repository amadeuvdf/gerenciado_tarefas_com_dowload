<?php

$bdServidor  = '127.0.0.1';
$dbUsuario = 'usuarioTeste';
$dbSenha = 'usuarioTeste';
$dbBanco = 'tarefas';

$con = mysqli_connect($bdServidor, $dbUsuario, $dbSenha, $dbBanco);

if (mysqli_connect_errno()) {
    echo "erro ao conectar ao banco de dados";
    die();
}

function buscar_tarefas($con) {
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($con, $sqlBusca);

    $tarefas = array();
    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }
    return $tarefas;
}

function gravar_tarefa($con, $tarefa){
    if($tarefa['prazo'] == '-'){
        $sqlGravar = "INSERT INTO 
            tarefas (nome, descricao, prioridade, concluida) 
            VALUES('{$tarefa['nome']}','{$tarefa['descricao']}','{$tarefa['prioridade']}','{$tarefa['concluida']}')";
    } else {
        $sqlGravar = "INSERT INTO 
        tarefas (nome, descricao, prioridade, prazo, concluida) 
        VALUES('{$tarefa['nome']}','{$tarefa['descricao']}','{$tarefa['prioridade']}','{$tarefa['prazo']}','{$tarefa['concluida']}')";
    }
    
    mysqli_query($con, $sqlGravar);
}

function buscar_tarefa($con, $id) {
    $sqlBusca = 'SELECT  * FROM tarefas WHERE id = ' . $id;
    $resultado = mysqli_query($con, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function editar_tarefa($con, $tarefa){
    $sqlEditor = "UPDATE tarefas SET 
    nome = '{$tarefa['nome']}', descricao = '{$tarefa['descricao']}', prioridade = '{$tarefa['prioridade']}', concluida = '{$tarefa['concluida']}' 
    WHERE id = {$tarefa['id']}";

    mysqli_query($con, $sqlEditor);

}

function remover_tarefas_concluidas($con) {
    $sqlRemover = "DELETE FROM tarefas WHERE concluida = 1";

    mysqli_query($con, $sqlRemover);
}

function remover_tarefa($con, $id) {
    $sqlRemover = "DELETE FROM tarefas WHERE id = {$id}";

    mysqli_query($con, $sqlRemover);
}



?>