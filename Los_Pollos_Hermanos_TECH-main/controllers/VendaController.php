<?php

    require_once "../../models/VendaModel.php";
    class VendaController{
        private $model;

        public function __construct()
        {
            $this->model = new VendaModel();
        }

        public function add(Venda $v){
            return $this->model->create($v);
        }
    }

?>