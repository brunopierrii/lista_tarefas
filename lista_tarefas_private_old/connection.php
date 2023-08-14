<?php


class Connection
{
    private $host = '127.0.0.1';
    private $dbname = 'lista_tarefas';
    private $user = 'root';
    private $pass = 'matrix';

    public function open()
    {
        try {
            
            $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user, $this->pass);
            
            return $conn;
            
        } catch (PDOException $e){
            echo '<p>'.$e->getMessage().'</p';
        }
    }
}