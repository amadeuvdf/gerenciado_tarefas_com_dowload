<?php
include "banco.php";
remover_tarefa($con, $_GET['id']);

header('Location: index.php');

?>