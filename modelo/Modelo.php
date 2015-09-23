<?php
require '../controller/ConectionBD.php';

class Modelo {
   
    protected function inserir($objeto){
        try {
            $atributos = get_class_vars($objeto);
             $con =  new  ConnectionBD();
             $stmt = $con->prepare($statement);
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

       
        
    }
}
