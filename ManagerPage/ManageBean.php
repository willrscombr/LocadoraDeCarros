<?php
require '../modelo/Locacao.php';


$objcliente = new Locacao();
//print_r($_POST);
$objcliente->setCodcliente('NULL');
$objcliente->setNome($_POST['nome']);
$objcliente->setCpf($_POST['cpf']);
$objcliente->setEmail($_POST['email']);
$objcliente->setFone($_POST['fone']);
$objcliente->setEndereco($_POST['endereco']);
$objcliente->setCarro($_POST['carro']);
$objcliente->setDtretirada($_POST['dtretirada']);
$objcliente->setDtdevolucao($_POST['dtdevolucao']);
//print_r($objcliente);
$retorno = $objcliente->inserir();
print_r($retorno);