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
    public function  setFRg($FRg){
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
    public function  setLogradouro($FLogradouro){
        $this->logradrouro=$FLogradouro;
    }
    public function  setNumero($FNumero){
        $this->numero=$FNumero;
    }
    public function  setCodComplemento($FComplemento){
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
    public function  getFRg(){
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
    public function  getLogradouro(){
        return $this->logradouro;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getCodComplemento(){
        return $this->complemento;
    }
    public function  getBairro(){
        return $this->bairro;
    }
    public function getCodCidade(){
        return $this->codCidade;
    }

    public function exibir(){
        return array(
        "nome"=>$this->getNome(),
        "tipoCliente"=>$this->getTipoCliente(),
        "tel"=>$this->getTel()
        );
    }
}


?>
