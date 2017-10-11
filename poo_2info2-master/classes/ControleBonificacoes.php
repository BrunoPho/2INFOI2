<?php

class ControleBonificacoes
{
  private $totalpago = 0;

  public function registra(Funcionario $funcionario){
      $this->totalpago += $funcionario->getBonificacao();
  }

    public function getTotalPago(): float {
        return $this->totalpago;

}

    public function mostra(){
      echo "O total de bonificações pagas ";
        $this->getTotalPago();
    }
}