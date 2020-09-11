<?php
    require_once("..\DataModel\dataModelCliente.php");
    require_once("..\Model\Cliente.php");
    require_once("..\Interface\interfaces.php");
    class ControllerCliente implements Clientes {
        public function inserirCliente(){        
        $cliente = new Cliente();

        $cliente->setNome($_POST["nome"] );
        $cliente->setTipoCliente($_POST["tipoCli"] );
       
        (empty($_POST["cpf"])) ? $cliente->setCpf("") : $cliente->setCpf($_POST["cpf"]);
        (empty($_POST["rg"]) ) ? $cliente->setRg(""): $cliente->setRg($_POST["rg"]);    
        (empty($_POST["cnpj"]) ) ? $cliente->setCnpj(""): $cliente->setCnpj($_POST["cnpj"]);
         
        $cliente->setTel($_POST["tel"] ); 
        $cliente->setCel($_POST["cel"]); 
        $cliente->setCep($_POST["cep"]);
        $cliente->setLogradouro($_POST["logradouro"]);
        $cliente->setNumero($_POST["numero"]); 
        $cliente->setComplemento($_POST["complemento"]);
        $cliente->setBairro($_POST["bairro"]);
        $cliente->setCodCidade($_POST["codcidade"]);
        
        dataModelCliente::inserir($cliente);    
    }
}
?>
