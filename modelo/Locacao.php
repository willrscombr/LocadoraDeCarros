<?php
require '../controller/Connection.php';

class Locacao {
   public $codcliente;
   public $nome;
   public $cpf;
   public $email;
   public $fone;
   public $endereco;
   public $carro;
   public $dtretirada;
   public $dtdevolucao;
   
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
       return $this->endereco;
   }

   function getCarro() {
       return $this->carro;
   }

   function getDtretirada() {
       return $this->dtretirada;
   }

   function getDtdevolucao() {
       return $this->dtdevolucao;
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

   function setCarro($carro) {
       $this->carro = $carro;
   }

   function setDtretirada($dtretirada) {
       $this->dtretirada = $dtretirada;
   }

   function setDtdevolucao($dtdevolucao) {
       $this->dtdevolucao = $dtdevolucao;
   }

   function inserir(){
       $conn = new Connection();
       $pdo = $conn->conectar();
       $sql = "INSERT INTO `locacao`(`codlocacao`, `nome`, `cpf`, `email`, `fone`, `endereco`, `carro`, `dataretirada`, `datadevolucao`) VALUES ( '$this->codcliente','$this->nome', '$this->cpf', '$this->email', '$this->fone', '$this->endereco', '$this->carro', '$this->dtretirada', '$this->dtdevolucao')";
       $sql2 = "INSERT INTO `locacao`(`codlocacao`, `nome`, `cpf`, `email`, `fone`, `endereco`, `carro`, `dataretirada`, `datadevolucao`) VALUES ( 'NULL','WIlton', '04802833113', 'wilton@gmail.com', '65492345905', 'ipora', 'gol', '22/09/2015', '22/09/2015')";
       
       //print_r($sql);
       $stmt = $pdo->prepare($sql);
       return $stmt->execute();
       
       }
   
}
