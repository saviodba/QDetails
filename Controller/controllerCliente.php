<?php
    require_once("..\DataModel\dataModelCliente.php");
    require_once("..\Model\Cliente.php");
    require_once("..\Interface\interfaces.php");
    class ControllerCliente implements Clientes 
    {
        public function inserirCliente(Cliente $cliente )
        {                    
            dataModelCliente::inserir($cliente);    
        }
    }
?>
