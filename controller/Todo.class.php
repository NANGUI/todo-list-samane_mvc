<?php

class Todo extends Controller
{
    /**
     * Constructeur de la classe
     */
    public function __construct()
    {
        parent::__construct();
        //Appel du model
        require_once 'model/TodoDB.php';
    }

    /**
     * Fonction permettant de retourner la page index
     * 
     * @return view
     */
    public function index()
    {
        $todoDB = new TodoDB();

        $data['todos'] = $todoDB->listTodos();
        return $this->view->load("todo/index", $data);
    }

    /**
     * Fonction permettant d'insérer une Todo
     */
    public function addTodo()
    {
        $todoDB = new TodoDB();
		//Récupération des données qui viennent du formulaire view/test/addTest (à créer)
        if (isset($_POST['text'])) {
            extract($_POST);
            if (!empty($text)) {
                $ok = $todoDB->addTodo($text);
                $data['ok'] = $ok;
            }
        }
        
        $this->index();
    }

    public function editTodo() 
    {
        $todoDB = new TodoDB();

        if(isset($_GET['id'])) {
            extract($_GET);
            
            $data['todo'] = $todoDB->getById($id);

            return $this->view->load('todo/edit', $data);
        }
    }

    public function updateTodo()
    {
        // var_dump($_POST );
        // die();
        $todoDB = new TodoDB();

        if(isset($_POST['id'])) {
            if($_POST['text']) {
                extract($_POST);
                $todoDB->updateTodo($id, $text);
            }
        }
        $this->index();
    }

    public function deleteTodo()
    {
        $todoDB = new TodoDB();

        if(isset($_GET['id'])) {
            extract($_GET);
            $todoDB->deleteTodo($id);
        }
        $this->index();
    }
}