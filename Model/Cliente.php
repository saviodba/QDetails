<?php

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
        $this->cpf=$FCpf;
    }
    public function  setRg($FRg){
        $this->rg=$FRg;
    }
    public function  setCnpj($FCnpj){
        $this->cnpj=$FCnpj;
    }
    public function  setTel($FTel){
        $this->tel=$FTel;
    }
    public function  setCel($FCel){
        $this->cel=$FCel;
    }
    public function  setCep($FCep){
        $this->cep=$FCep;
    }
    public function  setLogradouro($FLogradouro){
        $this->logradrouro=$FLogradouro;
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
        return $this->FNome;      
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
        return $this->FTel;
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
    
    function inserir(Cliente $cli){
        echo json_encode($cli);
      /*  $sql = new Sql();
       
        $resultado = $sql->select("CALL sp_cliente_insert (:nome, :tipoCli, :tel, :cel, :cpf, :rg, 
            :cnpj, :cep, :logradouro, :numero, :complemento, :bairro, :codcid)",
        array(
            ':nome'=>$cli->getNome(), 
            ':tipoCli'=>$cli->getTipoCliente(), 
            ':tel'=>$cli->getTel(), 
            ':cel'=>$cli->getCel(), 
            ':cpf'=>$cli->getCpf(), 
            ':rg'=>$cli->getRg(), 
            ':cnpj'=>$cli->getCnpj(), 
            ':cep'=>$cli->getCep(), 
            ':logradouro'=>$cli->getLogradouro(), 
            ':numero'=>$cli->getNumero(), 
            ':complemento'=>$cli->getComplemento(), 
            ':bairro'=>$cli->getBairro(), 
            ':codcid'=>$cli->getCodCidade()
        ));
        echo json_encode($resultado);*/
    }
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
