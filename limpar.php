<?php
session_start();
remover_tarefas_concluidas($con);
session_destroy();
header('Location: index.php');
?>