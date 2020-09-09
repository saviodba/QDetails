<?php
$telefone = "(11) 2254-3515";

$tel2 =  str_replace("-","", str_replace(")","", str_replace("(","",$telefone))) ;
var_dump(trim(  $tel2 ));



?>
