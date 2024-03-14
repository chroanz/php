<?php

class Salgado{

  public $nome;
  public $preco;
  public $recheio;
  public $peso;

  public function meuSalgado(){
    echo "O meu salgado é $this->nome, seu preço é $this->preco, o recheio é $this->recheio e o peso é $this->peso";
  }

}

$salgado = new Salgado();

$salgado->nome = "Coxinha";
$salgado->preco = "R$ 10,00";
$salgado->recheio = "Frango";
$salgado->peso = "300g";

$salgado->meuSalgado();
