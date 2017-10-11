<?php

    require_once "classes/Funcionario.php";
    require_once "classes/Data.php";
    require_once "classes/Gerente.php";
    require_once "classes/ControleBonificacoes.php";


    $jorge = new Gerente(nomeimformado:"JOge Samba");
    $jorge->setSalario(3000);


    $bruno = new Funcionario("Bruno Pinheiro");
    $seguranca->setDepartamento("Segurança Cofre");
    $seguranca->setSalario(3000);
    $seguranca->setCPF("0980989898");
    $seguranca->setDataEntrada($dataEntrada);


    $seguranca->recebeAumento(0.5);

    $seguranca->mostra();


