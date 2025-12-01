<?php

    require_once "../../models/ServicoModel.php";
    class ServicoController{
        private $model;

        public function __construct()
        {
            $this->model = new ServicoModel();
        }

        public function findId($id){
            return $this->model->buscarId($id);
        }
    }

?>