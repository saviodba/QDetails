<?php
   namespace App\controllerCliente;

    /*
    require_once("..\DataModel\dataModelCliente.php");
    require_once("..\Model\Cliente.php");
    require_once("..\Interface\interfaces.php");
    */ 
    require_once("vendor/autoload.php");

    use \App\DataModelCliente;
    use \Model\Cliente;

    class ControllerCliente 
    {
        public function inserirCliente(Cliente $cliente )
        {                    
            dataModelCliente::inserir($cliente);    
        }

        public function listarClientes(){
            return dataModelCliente::listarTodos();
        }
    }
?>
