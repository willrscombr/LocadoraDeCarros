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
       //echo $this->nome;
       //$conn =  ConnectionBD::getAvailableDrivers();
       //print_r($conn);
       $sql = "select * from Cliente";
       $result = $conn->exec(sql);
       print_r($result->fetchAll());
       
       if($conn){
          // $conn->prepare("INSERT INTO Cliente(codcliente, nome, cpf, email, fone, endereco) VALUES".
            //                " ($this->codcliente,$this->nome,$this->cpf,$this->email,$this->fone,$this->endereco)");
            
           $conn->execute();
           echo "Deu certo";
           
       }
      /* try{
           $conn = ConnectionBD::getAvailableDrivers();
           $stmt = $conn->exec("INSERT INTO Cliente(codcliente, nome, cpf, email, fone, endereco) VALUES".
                            " ($this.codcliente,$this->nome,$this->cpf,$this->email,$this->fone,$this->endereco)");
           echo stmt;
           $retorno = 'Try executado';
       }  catch (Exception $exc){
           $retorno =  'catch executado';
           die();
       }
       return $retorno;*/
       
   }
   
   
}
