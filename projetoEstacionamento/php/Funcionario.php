<?php
//Definindo o Projeto e as Pastas
namespace Projeto\projetoEstacionamento\PHP;
//Específica qual classe eu vou utilizar
use Projeto\projetoEstacionamento\PHP\Funcionario;

class Funcionario{
   
    private int $codigoFunc;
    private string $nomeFunc;
    private string $dataNasc;
    private int $telefoneFunc;
    private string $enderecoFunc;
    private string $salario;
    private string $cargo;
    

    public function __construct(

        int $codigoFunc,
        string $nomeFunc,
        string $dataNasc,
        int $telefoneFunc,
        string $enderecoFunc,
        string $salario,
        string $cargo
    ){

        $this->codigoFunc = $codigoFunc;
        $this->nomeFunc = $nomeFunc;
        $this->dataNasc = $dataNasc;
        $this->telefoneFunc = $telefoneFunc;
        $this->enderecoFunc = $enderecoFunc;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function __get(string $name):mixed
    {
        return $this->$name;
    }//fim do get

    public function __set(string $name, mixed $value):void
    {
        $this->name = $value;
    }//fim do set

    public function imprimir():string
    {



        return 
        "<br><br><br>Código de Funcionário: ".$this->codigoFunc.
        "<br>Nome: ".$this->nomeFunc.
        "<br>Data de Nascimento: ".$this->dataNasc.
        "<br>Telefone: ".$this->telefoneFunc.
        "<br>Endereço: ".$this->enderecoFunc.
        "<br>Salário: ".$this->salario.
        "<br>Cargo do Funcionário: ".$this->cargo;
      

        

}//fim do imprimir

}//fim da classe Cliente
















?>