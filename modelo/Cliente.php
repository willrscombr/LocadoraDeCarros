<?php
require '../controller/Conectionmysql.php';

class Cliente {
   public $codcliente;
   public $nome;
   public $cpf;
   public $email;
   public $fone;
   public $endereco;
   
   function getCodcliente() {
       return $this->codcliente;
   }

   function getNome() {
       return $this->nome;
   }

   function getCpf() {
       return $this->cpf;
   }

   function getEmail() {
       return $this->email;
   }

   function getFone() {
       return $this->fone;
   }

   function getEndereco() {
       return $this->endereço;
   }

   function setCodcliente($codcliente) {
       $this->codcliente = $codcliente;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setCpf($cpf) {
       $this->cpf = $cpf;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setFone($fone) {
       $this->fone = $fone;
   }

   function setEndereco($endereco) {
       $this->endereco = $endereco;
   }


   function inserir(){
        echo "Itens inseridos";
   }
   
   
}
