<?php
require_once  "model/notemodel.php";
class notecontroller
{
    public $titulo;
    public $view;

    public function __construct()
    {
        $this->view = 'list_note';
        $this->titulo = '';
        $this->noteObj = new notemodel();
    }

    public function list()
    {
        $this->titulo = 'listado de notas';
        return $this->noteObj->getNotes();
    }

    public function edit($id = null)
    {
        $this->titulo = 'Editar nota';
        $this->view = 'Edit Note';
        if (isset($_GET["id"]))  $id = $_GET['id'];
        return $this->noteObj->getNoteById($id);
    }

    public function save()
    {
    }
}
