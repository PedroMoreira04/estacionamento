<?php

 namespace Projeto\projetoEstacionamento\PHP;

 use Projeto\projetoEstacionamento\PHP\MensalistaNovo;
 
 

class MensalistaNovo{
    
     private string $nome;
     private string $telefone;
     private string $endereco;
     private string $carro;
     private string $placa;
     private string $cor;
     private string $dataP;
     private string $valorMensal;



      public function __construct( $nome,
                           $telefone,
                           $endereco,
                           $carro,
                           $placa,
                           $cor, 
                           $dataP,
                           $valorMensal)
     {
       
         $this->nome = $nome;
         $this->telefone = $telefone;
         $this->endereco = $endereco;
         $this->carro = $carro;
         $this->placa = $placa;
         $this->cor = $cor;
         $this->dataP = $dataP;
         $this->valorMensal = $valorMensal;

     }//fim do construtor

     public function __get(string $name):mixed
     {
         return $this->name;
     }//fim do get

     public function __set(string $name, mixed $value):void
     {
         $this->name = $value;
     }//fim do set

     public function imprimir():string
     {
         
         return  "<br><br>Nome: ".$this->nome.
                 "<br>Telefone: ".$this->telefone.
                 "<br>Endereço: ".$this->endereco.
                 "<br>Carro: ".$this->carro.
                 "<br>Placa: ".$this->placa.
                 "<br>Cor: ".$this->cor.
                 "<br>Data de Pagamento: ".$this->dataP.
                 "<br>Valor Mensal: ".$this->valorMensal;

                 

     }//fim do imprimir

 }//fim da classe Cliente
?>