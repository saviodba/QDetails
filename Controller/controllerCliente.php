<?php

    require_once("..\Model\Cliente.php");
    echo "Nome: ". $_POST["nome"] ."</br>";
    echo "Endereço: ". $_POST["endereco"];
    
    /*function cliente(){
    $cli = new Cliente();
    $cli->setNome("Sávio Pereira");
    $cli->setTipoCliente("F");
    $cli->setTel("11986217465");
    
    print_r($cli->exibir());
    }*/

?>
