<?php

require_once "Conexao.php";
require_once "Venda.php";

class VendaModel{
    private $table = "vendas";

    public function create(Venda $v){
        try{
            $sql = "INSERT INTO $this->table (nome_servico,nome_empresa,nome_responsavel,email,telefone,obs) VALUES (?, ?, ?, ?, ?, ?)";

            $stmt = Conexao::getConn()->prepare($sql);

            $stmt->bindValue(1, $v->getNome_servico());
            $stmt->bindValue(2, $v->getNome_empresa());
            $stmt->bindValue(3, $v->getNome_responsavel());
            $stmt->bindValue(4, $v->getEmail());
            $stmt->bindValue(5, $v->getTelefone());
            $stmt->bindValue(6, $v->getObs());

            return $stmt->execute();
        } catch (PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Numero: " . $e->getCode();
        }
    }
}
?>