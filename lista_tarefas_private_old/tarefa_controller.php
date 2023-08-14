<?php

require '../../lista_tarefas_private/tarefa.model.php';
require '../../lista_tarefas_private/tarefa.service.php';
require '../../lista_tarefas_private/connection.php';

$tarefa = new Tarefa();
$tarefa->__set('tarefa', $_POST['tarefa']);

$conn = new Connection();

$tarefaService = new TarefaService($conn, $tarefa);

$tarefaService->insert();

echo '<pre>';
var_dump($tarefaService);
echo '</pre>';




