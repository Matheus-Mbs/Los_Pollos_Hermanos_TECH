<?php

class Venda{
    private int $id;
    private string $nome_servico;
    private string $nome_empresa;
    private string $nome_responsavel;
    private string $telefone;
    private string $email;
    private string $obs;


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNome_servico()
    {
        return $this->nome_servico;
    }
    public function setNome_servico($nome_servico)
    {
        $this->nome_servico = $nome_servico;

        return $this;
    }

    public function getNome_empresa()
    {
        return $this->nome_empresa;
    }
    public function setNome_empresa($nome_empresa)
    {
        $this->nome_empresa = $nome_empresa;

        return $this;
    }

    public function getNome_responsavel()
    {
        return $this->nome_responsavel;
    }
    public function setNome_responsavel($nome_responsavel)
    {
        $this->nome_responsavel = $nome_responsavel;

        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getObs()
    {
        return $this->obs;
    }
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }
}