<?php

    require_once "../../models/ContatoModel.php";
    class ClienteController{
        private $model;

        public function __construct()
        {
            $this->model = new ContatoModel();
        }

        // public function read(){
        //     return $this->model->read();
        // }

        public function add(Contato $c){
            return $this->model->create($c);
        }

        // public function findId($id){
        //     return $this->model->buscarId($id);
        // }

        // public function edit(Contato $c){
        //     return $this->model->update($c);
        // }
    }

?>