<?php
    require_once("vendor/autoload.php");    
    use Rain\Tpl;
    use App\Controller\controllerCliente;

    $config = array(
        "tpl_dir"       => "App/Templates/",
        "cache_dir"     => "cache/"
    );

    Tpl::configure( $config );
    $tpl = new Tpl;
    
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        $lista = new ControllerCliente();
        $jsonResult = json_decode( $lista->listarClientes(), true ); 
        
     
        foreach ($jsonResult as $value) {
            //$tpl->assign( "retorno", $retorno );
            $tpl->assign( "codigo", $value["codcliente"]);
            $tpl->assign( "nome", "Sávio Pereira");// = $value["nome"];   
            $tpl->tipo = $value["tipoCliente"];
            $tpl->endereco = $value["logradouro"];   
            $tpl->numero = $value["numero"];   
        }  
            

    }
			
    $tpl->draw("lista-clientes");
    
?>
