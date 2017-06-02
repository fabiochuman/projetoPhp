<?php

class Pessoa
{
    private $nome, $cpf, $endereco;

    public function __construct($nome, $cpf, $endereco)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    public function getNome(){return $this->nome;}
    public function getCpf(){return $this->cpf;}
    public function getEndereco(){return $this->endereco;}
}