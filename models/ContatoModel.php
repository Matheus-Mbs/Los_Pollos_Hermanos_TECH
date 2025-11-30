<?php

require_once "Conexao.php";
require_once "Contato.php";

class ContatoModel{
    private $table = "contatos";

    // public function read(){
    //     $stmt = conexao::getConn()->prepare("select * from $this->table");
    //     $stmt->setFetchMode(PDO::FETCH_CLASS, 'Cliente');
    //     $stmt->execute();
    //     return $stmt->fetchAll();
    // }

    // public function buscarId(int $id){
    //     $stmt = conexao::getConn()->prepare("select * from $this->table where id = $id");
    //     $stmt->setFetchMode(PDO::FETCH_CLASS, 'Cliente');
    //     $stmt->execute();
    //     return $stmt->fetch();
    // }

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

    // public function update(Cliente $c){
    //     try{
    //         $sql = "update $this->table set nome=?, email=?, cpf=?, salario=?, sexo=?, data=?, obs=? where id=?";

    //         $stmt = Conexao::getConn()->prepare($sql);

    //         $stmt->bindValue(1, $c->getNome());
    //         $stmt->bindValue(2, $c->getEmail());
    //         $stmt->bindValue(3, $c->getCpf());
    //         $stmt->bindValue(4, $c->getSalario());
    //         $stmt->bindValue(5, $c->getSexo());
    //         $stmt->bindValue(6, $c->getData());
    //         $stmt->bindValue(7, $c->getObs());
    //         $stmt->bindValue(8, $c->getId());

    //         return $stmt->execute();
    //     } catch (PDOException $e){
    //         echo "Erro: " . $e->getMessage();
    //         echo "Numero: " . $e->getCode();
    //     }
    // }
}
?>