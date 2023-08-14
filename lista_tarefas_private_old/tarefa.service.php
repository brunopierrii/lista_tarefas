<?php


class TarefaService
{
    private $conn;
    private $tarefa;
    const PENDENTE = 1;
    const REALIZADO = 2;

    public function __construct(Connection $conn, Tarefa $tarefa = null)
    {
        $this->conn = $conn->open();
        $this->tarefa = !is_null($tarefa) ? $tarefa->__get('tarefa') : null;
    }

    public function insert()
    {
        $query = 'INSERT INTO tb_tarefas(tarefa) values (:tarefa)';
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':tarefa', $this->tarefa);
        $stmt->execute();
    }

    public function show()
    {
        $query = 'SELECT * FROM tb_tarefas;';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}