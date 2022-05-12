<?php 
session_start(); 

include "banco.php";
include "includes/ajustes.php";

$lista_tarefas = buscar_tarefas($con);


include "template_gerenciador.php";


?>