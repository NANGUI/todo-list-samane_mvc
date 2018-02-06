<?php

class TodoDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Liste permettant de récupérer toutes les todos
     * 
     * @return List
     */
    public function listTodos()
    {
        $sql = "SELECT * FROM todos";

        return $this->db->query($sql)->fetchAll();
    }

    /**
     * Fonction permettant d'insérer
     */
    public function addTodo($val)
    {
        $sql = "INSERT INTO todos VALUES (null,'$val')";

        $this->db->exec($sql);
        return $this->db->lastInsertId();
    }

    /**
     * Fonction permettant de recuperer la todo par rapport à l'ID
     */
    public function getById($id) 
    {
        $sql = "SELECT * FROM todos WHERE id = $id";
        
        return $this->db->query($sql)->fetchObject();
    }

    public function updateTodo($id, $text)
    {
        $sql = "UPDATE todos SET text='$text' WHERE id = $id";

        return $this->db->exec($sql);
    }

    public function deleteTodo($id)
    {
        $sql = "DELETE FROM todos WHERE id = $id";

        return $this->db->exec($sql);
    }
}