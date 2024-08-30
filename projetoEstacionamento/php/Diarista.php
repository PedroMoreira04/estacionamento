<?php

namespace Projeto\projetoEstacionamento\PHP;





class Diarista{
    private string $nome;
    private string $telefone;
    private string $endereco;
    private string $carro;
    private string $placa;
    private string $cor;
    private string $preco;


    public function __construct(
    string $nome,
    string $telefone,
    string $endereco,
    string $carro,
    string $placa,
    string $cor,
    string $preco){


        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->carro = $carro;
        $this->placa = $placa;
        $this->cor = $cor;
        $this->preco =$preco;
    }


    public function __get(string $name):mixed{
        return $this-> $name;
    }//fim do get

    public function __set(string $name, mixed $value):void
    {
        $this->name = $value;
    }//fim do set

    public function imprimir():string

{

    return 
    "<br><br>Nome: ".$this->nome. 
    "<br>Telefone: ".$this->telefone. 
    "<br>Endereço: ".$this->endereco. 
    "<br>Carro: ".$this->carro. 
    "<br>Placa: ".$this->placa. 
    "<br>Cor: ".$this->cor. 
    "<br>Preço: ".$this->preco; }

    
    // Função para calcular o valor a ser pago
function calcularValor(int $horaInicial, int $horaFinal) {
    // Verifica se o número de horas é maior que 1
    $horas = $horaFinal - $horaInicial;
    if ($horas > 1) {
        // Calcula o valor total baseado em R$ 10,00 por hora
        return $horas * 10;
    } else {
        // Se o número de horas for 1 ou menos, o valor é R$ 5,00
        return 5;
    }
}

}   


?>