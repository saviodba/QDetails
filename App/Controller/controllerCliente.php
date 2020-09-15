<?php
   namespace App\Controller;

    /*
    require_once("..\DataModel\dataModelCliente.php");
    require_once("..\Model\Cliente.php");
    require_once("..\Interface\interfaces.php");
    */ 
    use App\DataModel\dataModelCliente;
    use App\Model\Cliente;

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
