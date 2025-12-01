<?php

    require_once "../../models/ContatoModel.php";
    class ContatoController{
        private $model;

        public function __construct()
        {
            $this->model = new ContatoModel();
        }

        public function add(Contato $c){
            return $this->model->create($c);
        }

    }

?>