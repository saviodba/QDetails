<?php
    
    require_once("..\Model\Cliente.php");
    require_once("..\Dao\sql.php");
    //echo "Nome: ". $_POST["nome"] ."</br>";
    //echo "Endereço: ". $_POST["logradouro"];
    
    $cliente = new Cliente();

    $cliente->setNome($_POST["nome"] );
    $cliente->setTipoCliente("F");   
    $cliente->setCpf($_POST["cpf"]);
    $cliente->setRg($_POST["rg"]);
    $cliente->setCnpj(""); 
    $cliente->setTel($_POST["tel"] ); 
    $cliente->setCel($_POST["cel"]); 
    $cliente->setCep($_POST["cep"]);
    $cliente->setLogradouro($_POST["logradouro"]);
    $cliente->setNumero($_POST["numero"]); 
    $cliente->setComplemento($_POST["complemento"]);
    $cliente->setBairro($_POST["bairro"]);
    $cliente->setCodCidade(0);
    
    $cliente->inserir($cliente);
    //echo json_encode($cliente);
?>
