<?php

require_once "Conexao.php";
require_once "Servico.php";

class ServicoModel{
    private $table = "servicos";

    public function buscarId(int $id){
        $stmt = conexao::getConn()->prepare("select * from $this->table where id = $id");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Servico');
        $stmt->execute();
        return $stmt->fetch();
    }
}
?>