<?php
   
   namespace Projeto\projetoEstacionaemnto\PHP;
    require_once('Diarista.php');

    use  Projeto\projetoEstacionamento\PHP\ControlCliente;
    use Projeto\projetoEstacionamento\PHP\Diarista;
 
 
 
 
 
 
?>
<Doctype HTML>
    <HTML lang="PT-BR">
 
        <head>
            <meta charset="UTF-8">
        </head>
 
        <body>
            <form method="POST">
                <label>Nome</label>
                <input type="text" id="nome" name="nome"/><br><br>
 
                <label>Telefone:</label>
                <input type="number" id="telefone" name="telefone"/><br><br>
 
                <label>Endereço</label>
                <input type="text" id="endereco" name="endereco"/><br><br>
 
                <label>Carro:</label>
                <input type="text" id="carro" name="carro"/><br><br>
 
                <label>Informe a placa:</label>
                <input type="text" id="placa" name="placa"/><br><br>
 
                <label>Cor:</label>
                <input type="text" id="cor" name="cor"/><br><br>

                <label>Preço Total</label>
                <input type="number" id="preco" name="preco"/><br><br>
                <button>Finalizar

                
                
                
                
                
                <?php
                    try{
                        $diaristanovo = new Diarista(   "Luis","119678000","Marechal","Gol G5","ytuj-9087","Preto","90");
                $nome  = $_POST['nome'];
                $telefone =  $_POST['telefone'];
                $endereco =  $_POST['endereco'];
                $carro =  $_POST['carro'];
                $placa =  $_POST['placa'];
                $cor =  $_POST['cor'];
                $preco =  $_POST['preco'];
                $diaristanovo =  new Diarista(
                                    $nome,
                                    $telefone,
                                    $endereco,
                                    $carro,
                                    $placa,
                                    $cor,
                                    $preco
                                   );
                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch
                ?>
                </button><br><br>
                <?php   
                ?>
            </form>
        </body>
</HTML>
 
</body>
</html>