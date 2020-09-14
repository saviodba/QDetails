<?php
  /*  require_once("vendor/autoload.php");    
    use \Rain\Tpl;

    $config = array(
        "tpl_dir"       => "Templates/",
        "cache_dir"     => "cache/"
    );

    Tpl::configure( $config );
    $tpl = new Tpl;
    
    if ($_SERVER["REQUEST_METHOD"] == "GET"){

        $cliente = new Cliente();

       

    }
	//$tpl->assign( "retorno", $retorno );		
    $tpl->draw( "lista-cliente" );*/
    
    
    require __DIR__ ."/vendor/autoload.php"; 
    
    use App\Controller\controllerCliente;
    
    $lista = new Controller\ControllerCliente();
    $jsonResult = $lista->listarClientes(); 
    echo $jsonResult;
?>
