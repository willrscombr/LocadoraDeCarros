<?php

class Carro {
   protected $modelo;
   protected $ano;
   protected $marca;
   protected $placa;
   protected $kilometragem;
   protected $valoraluguel;
   
   function getModelo() {
       return $this->modelo;
   }

   function getAno() {
       return $this->ano;
   }

   function getMarca() {
       return $this->marca;
   }

   function getPlaca() {
       return $this->placa;
   }

   function getKilometragem() {
       return $this->kilometragem;
   }

   function setModelo($modelo) {
       $this->modelo = $modelo;
   }

   function setAno($ano) {
       $this->ano = $ano;
   }

   function setMarca($marca) {
       $this->marca = $marca;
   }

   function setPlaca($placa) {
       $this->placa = $placa;
   }

   function setKilometragem($kilometragem) {
       $this->kilometragem = $kilometragem;
   }
   function getValoraluguel() {
       return $this->valoraluguel;
   }

   function setValoraluguel($valoraluguel) {
       $this->valoraluguel = $valoraluguel;
   }
   




}
