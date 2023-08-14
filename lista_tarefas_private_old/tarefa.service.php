<?php


class TarefaService
{
    private $conn;
    private $tarefa;
    const PENDENTE = 1;
    const REALIZADO = 2;

    public function __construct(Connection $conn, Tarefa $tarefa)
    {
        $this->conn = $conn->open();
        $this->tarefa = $tarefa;
    }

    public function insert()
    {
        $query = 'INSERT INTO tb_tarefas(id_status, tarefa, data_cadastrado) values (:id_status, :tarefa, :data_cadastrado)';
        $conn = $this->conn->prepare($query);
        
        $tarefa = $this->tarefa->__get('tarefa');

        $conn->bindValue(':id_status', TarefaService::PENDENTE);
        $conn->bindValue(':tarefa', $tarefa);
        $conn->bindValue(':data_cadastrado', date('Y-m-d H:i:s'));

        $conn->execute();

    }

    public function show()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}