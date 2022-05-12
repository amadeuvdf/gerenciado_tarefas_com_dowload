<?php 

function traduz_prioridades($codigo) {
    $prioridade = '';

    if ($codigo == '1') {
        $prioridade = 'Baixa';
    } else if($codigo == '2') {
        $prioridade = 'Media';
    } else if($codigo == '3'){
        $prioridade = 'Alta';
    } else {
        $prioridade = '--';
    }
    return $prioridade;
}

function traduz_data_exibir($data){
    if($data == "" || $data == "0000-00-00 00:00:00"){
        return "";
    }

    $dados_com_hr = explode(" ", $data);
    $data_sem_hora = explode("-", $dados_com_hr[0]);

    $data_exibir = "{$data_sem_hora[2]}/{$data_sem_hora[1]}/{$data_sem_hora[0]}";
    return $data_exibir;
}

function traduz_concluidas($concluida) {
    if($concluida == '1') {
        return 'SIM';
    }

    return 'NÃO';

}


?>