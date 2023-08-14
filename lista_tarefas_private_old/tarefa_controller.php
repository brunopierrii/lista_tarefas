<?php
require '../../lista_tarefas_private/tarefa.model.php';
require '../../lista_tarefas_private/tarefa.service.php';
require '../../lista_tarefas_private/connection.php';

$conn = new Connection();


$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if($acao == 'inserir'){


    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);    
    
    $tarefaService = new TarefaService($conn, $tarefa);
    $tarefaService->insert();

    header('Location: nova_tarefa.php?inclusao=1');

} elseif($acao == 'listar') {

    $tarefaService = new TarefaService($conn);
    $tarefas = $tarefaService->show();
}



