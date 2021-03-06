<?php
    namespace App\Model;
class Cliente {
    private $FCodcliente;
    private $FNome;
    private $FTipoCliente;
    private $FCpf;
    private $FRg;
    private $FCnpj; 
    private $FTel; 
    private $FCel; 
    private $FCep;
    private $FLogradouro;
    private $FNumero; 
    private $FComplemento;
    private $FBairro;
    private $FCodCidade;

    //Setters
    public function setCodCliente($FCodcliente){
        $this->codCliente=$FCodcliente;
    }
    public function  setNome($FNome){
        $this->nome=$FNome;
    }
    public function  setTipoCliente( $FTipoCliente ){
        $this->tipoCliente=$FTipoCliente;
    }
    public function  setCpf($FCpf){
        $this->cpf= str_replace("-","",str_replace(".","",$FCpf));
    }
    public function  setRg($FRg){
        $this->rg= str_replace("-","", str_replace(".","", $FRg));
    }
    public function  setCnpj($FCnpj){
        $this->cnpj=$FCnpj;
    }
    public function  setTel($FTel){
        $this->tel= str_replace("-","", str_replace(")","", str_replace("(","", $FTel)));
    }
    public function  setCel($FCel){
        $this->cel= str_replace("-","", str_replace(")","", str_replace("(","", $FCel))); ;
    }
    public function  setCep($FCep){
        $this->cep= str_replace("-","",$FCep);
    }
    public function  setLogradouro($FLogradouro){
        $this->logradouro=$FLogradouro;
    }
    public function  setNumero($FNumero){
        $this->numero=$FNumero;
    }
    public function  setComplemento($FComplemento){
        $this->complemento=$FComplemento;
    }
    public function  setBairro($FBairro){
        $this->bairro=$FBairro;
    }
    public function  setCodCidade($FCodCidade){
        $this->codCidade=$FCodCidade;
    }
      
    //Getters
    public function  getCodCliente(){
        return $this->codCliente;
    }
    public function  getNome(){
        return $this->nome;      
    }
    public function  getTipoCliente(){
        return $this->tipoCliente;
    }
    public function  getCpf(){
        return $this->cpf;
    }
    public function  getRg(){
        return $this->rg;
    }
    public function  getCnpj(){
        return $this->cnpj;
    }
    public function  getTel(){
        return $this->tel;
    }
    public function  getCel(){
        return $this->cel;
    }    
    public function  getCep(){
        return $this->cep;
    }
    public function  getLogradouro(){
        return $this->logradouro;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getComplemento(){
        return $this->complemento;
    }
    public function  getBairro(){
        return $this->bairro;
    }
    public function getCodCidade(){
        return $this->codCidade;
    }
    
    /*
    function inserir(Cliente $cli){
       // echo json_encode($cli);
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
    */
    public function __toString(){
        return json_encode(array(

            "nome"=>$this->getNome(),
            "tipoCliente"=>$this->getTipoCliente(),
            "tel"=>$this->getTel(),
            "cel"=>$this->getCel(), 
            "cpf"=>$this->getCpf(), 
            "rg"=>$this->getRg(), 
            "cnpj"=>$this->getCnpj(), 
            "cep"=>$this->getCep(), 
            "logradouro"=>$this->getLogradouro(), 
            "numero"=>$this->getNumero(), 
            "complemento"=>$this->getComplemento(), 
            "bairro"=>$this->getBairro(), 
            "codcid"=>$this->getCodCidade()  

        ));
    }
}


?>
