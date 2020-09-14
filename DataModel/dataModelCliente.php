<?php
require_once("..\Model\Cliente.php");
require_once("..\Dao\sql.php"); 

class DataModelCliente {

    public function inserir(Cliente $cli){
        $sql = new Sql();   
        $result = $sql->select("call sp_cliente_insert(:NOME, :TIPOCLIENTE, :CPF, :RG, :CNPJ, :TEL, :CEL, :CEP, :LOGRADOURO, 
        :NUMERO, :COMPLEMENTO, :BAIRRO, :CODCIDADE) ",    
         array(
         ':NOME'=>$cli->getNome(), 
         ':TIPOCLIENTE'=>$cli->getTipoCliente(),  
         ':CPF'=>$cli->getCpf(), 
         ':RG'=>$cli->getRg(), 
         ':CNPJ'=>$cli->getCnpj(),
         ':TEL'=>$cli->getTel(), 
         ':CEL'=>$cli->getCel(),
         ':CEP'=>$cli->getCep(), 
         ':LOGRADOURO'=>$cli->getLogradouro(), 
         ':NUMERO'=>$cli->getNumero(), 
         ':COMPLEMENTO'=>$cli->getComplemento(),
         ':BAIRRO'=>$cli->getBairro(), 
         ':CODCIDADE'=>$cli->getCodCidade()
         ));
         echo json_encode($result);
    }

    public function alterar(Cliente $cli){

    }

    public function deletar($codigo){

    }

    public function listar ($codigo ){

    }

    public function listarTodos(){
        $sql = new Sql();   
        $result = $sql->select("SELECT * FROM clientes");
        echo json_encode($result);
    }

}

?>
