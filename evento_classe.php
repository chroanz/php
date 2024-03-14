<?php
  class Evento{
    
    public $nome;
    public $data;
    public $vagas;
    public $tema;
    public $local;
    public $descricao;

    public function meuEvento(){
      echo "O meu evento se chama $this->nome, ocorrerá na data $this->data no local $this->local, o tema é $this->tema, e tem $this->vagas vagas restantes.\nDescrição: $this->descricao\n\n";      
    }
    public function inscricao(){
      if($this->vagas > 0){
        echo "Inscrição realizada com sucesso!\n\n";
        $this->vagas--;  
      }
      else{
        echo "Não há mais vagas disponíveis!\n\n";
      }
       
    }
    public function vagasRestantes(){
      if($this->vagas > 0){
        echo "Ainda há $this->vagas vagas disponíveis!\n\n";
      }
      else{
        echo "Não há mais vagas disponíveis!\n\n";
      }
    }
  }

  $acolhida = new Evento();
    $acolhida->nome = "Acolhida";
    $acolhida->data = "14/03/2024";
    $acolhida->vagas = 100;
    $acolhida->tema = "Recepção de novos alunos";
    $acolhida->local = "Auditório da UniFAP";
    $acolhida->descricao = "Acolhida de alunos que estão no primeiro semestre";
  
  $acolhida->meuEvento();
  $acolhida->inscricao();
  $acolhida->vagasRestantes();
