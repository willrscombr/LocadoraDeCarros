<?php
require '../modelo/Cliente.php';

$objcliente = new CLiente();

//print_r($_POST);
$objcliente->setCodcliente(NULL);
$objcliente->setNome($_POST['nome']);
$objcliente->setCpf($_POST['cpf']);
$objcliente->setEmail($_POST['email']);
$objcliente->setFone($_POST['fone']);
$objcliente->setEndereco($_POST['endereco']);
//print_r($objcliente);
$objcliente->inserir();



