<?php

//Conectando a classe ao projeto
    namespace Projeto\projetoEstacionamento\PHP;

    //Colocar qual classe eu utilizar
    require_once("Entradasaida.php");
    require_once("MensalistaNovo.php");
    require_once("Funcionario.php");
    require_once("Diarista.php");

    
 


    //Mostrar quem eu vou usar - reforço
    Use Projeto\projetoEstacionamento\PHP\Entradasaida;
    Use Projeto\projetoEstacionamento\PHP\MensalistaNovo;
    use Projeto\projetoEstacionamento\PHP\Funcionario;
    use Projeto\projetoEstacionamento\PHP\Diarista;


    //Instanciar o codigo

    $entradasaida1 = new Entradasaida(989898,"04/12/2004","12:00","05/12/2004","12:00",27.65,"ferrari","Pedro","11999999999","239.908.870-09");

    echo $entradasaida1-> imprimir();


    $mensal = new MensalistaNovo("Henrique","1197869056","lauro gomes","Corsa Wind","tdpt-8960","Branco","10/09",150);
     
    echo $mensal-> imprimir();


    //Instanciar o codigo


    $funcionario1 = new Funcionario(908765,"Larissa","21/03/2005",1190876543," Rua itatiba ","R$ 2,400","Atendente");

    echo $funcionario1-> imprimir();


    $diarista1 = new Diarista("Luis","119678000","Marechal","Gol G5","ytuj-9087","Preto","90");
     
    echo $diarista1-> imprimir();
   
    echo "<br>O valor a ser pago é: ".$diarista1->calcularValor(11,20);


?>