<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de planilha</title>
</head>
<body>
    <?php 
    include "banco.php"; 
    include "includes/ajustes.php"; //funcoes
    $arquivo = "tarefa.xls";//definindo o nome do arquivo
    $lista_tarefas = buscar_tarefas($con); //lista do banco de dados


        $html = '';
        $html .= '<table border="1">';
        $html .= '<tr>';
        $html .= '<td>ID</td>';
        $html .= '<td>nome</td>';
        $html .= '<td>descrição</td>';
        $html .= '<td>Prazo</td>';
        $html .= '<td>Prioridade</td>';
        $html .= '<td>Concluido</td>';
        $html .= '</tr>';
        foreach($lista_tarefas as $tarefa){
            $html .= '<tr>';
            $html .= '<td>'.$tarefa['nome'].'</td>';
            $html .= '<td>'.$tarefa['descricao'].'</td>';
            $html .= '<td>'.traduz_data_exibir($tarefa['prazo']).'</td>';
            $html .= '<td>'.traduz_prioridades($tarefa['prioridade']).'</td>';
            $html .= '<td>'.traduz_concluidas($tarefa['concluida']).'</td>';
            $html .= '</tr>';
        }
        $html .= '</table>';

        //vai "imprimir" a tabela em excel (da um erro mas abre)
        header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header ("Last_modified: " . gmdate("D, d M YH:j:s") . " GMT");
        header ("Cache-Control: no-cache, must-revalidate");
        header ("Pragma: no-cache");
        header ("Content-type: application/x-msexcel");
        header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
        header ("Content-Discription: PHP Generated Data" );

        echo $html;
        exit;
    ?>
</body>
</html>