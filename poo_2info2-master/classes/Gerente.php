<?php

require_once "Funcionario.php";

class Gerente extends Funcionario
{
    public $senhaCofre;
    public $quantidadeFuncionariosGerenciados;

    function __construct($nomeInformado)
    {
        parent::__construct($nomeInformado);
    }

    public function getBonificacao() {

    }
}

//Crianças, nao façam isso em casa

$adolfo = new Gerente("Adolfo Chaves");