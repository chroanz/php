<?php
  class Professor{
    public $nome;
    private $salario;

    public function meuNome(){
      echo "O meu nome é $this->nome\n\n";
    }

    public function insereSalario(float $salario){
      $this->salario = $salario;
    }

    public function meuSalario(){
      echo "O meu salário é $this->salario\n\n";
    }
  }

  $professor = new Professor();
  $professor->insereSalario(99999999);
  $professor->meuSalario();
  