<?php

class Servico{
    private int $id;
    private string $nome_servico;
    private string $valor;

    
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNome()
    {
        return $this->nome_servico;
    }
    public function setNome($nome_servico)
    {
        $this->nome_servico = $nome_servico;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }
}