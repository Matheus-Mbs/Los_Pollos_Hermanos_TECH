<?php

require_once "Conexao.php";
require_once "Contato.php";

class ContatoModel{
    private $table = "contatos";


    public function create(Contato $c){
        try{
            $sql = "INSERT INTO $this->table (nome,telefone,email,mensagem) VALUES (?, ?, ?, ?)";

            $stmt = Conexao::getConn()->prepare($sql);

            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getTelefone());
            $stmt->bindValue(3, $c->getEmail());
            $stmt->bindValue(4, $c->getMensagem());


            return $stmt->execute();
        } catch (PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Numero: " . $e->getCode();
        }
    }
}
?>