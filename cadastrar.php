<?php
include "index.php";

if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $_SESSION['lista_tarefas'] = array();
    $tarefa = array();

    $tarefa['tarefa'] = "cadastrar";

    $tarefa['nome'] = $_GET['nome'];

    if(isset($_GET['descricao'])) {
        $tarefa['descricao'] = $_GET['descricao'];
    } else {
        $tarefa['descricao'] = '';
    }
    if(isset($_GET['prazo'])) {
        $tarefa['prazo'] = $_GET['prazo'];
    } else {
        $tarefa['prazo'] = "-";
    }

    $tarefa['prioridade'] = $_GET['prioridade'];
    
    if (isset($_GET['concluida'])) {
        $tarefa['concluida'] = '1';
    } else {
        $tarefa['concluida'] = '0';
    }
    
   gravar_tarefa($con, $tarefa);

}

unset($tarefa);
session_destroy();
header('Location: index.php');

?>