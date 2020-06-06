<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author Nicolás
 */
include_once 'Persona.php';

class Cliente extends Persona{
    private string $direccion;
    
    public function __construct(int $telefono, string $nombre, string $apellido, string $direccion) {
        parent::__construct($telefono, $nombre, $apellido);
        $this->setDireccion($direccion);
        
    }
    public function getNombre() {
      return parent::getNombre();
    }
    public function getDireccion() {
        return $this->direccion;
    }
    
    public function setDireccion(string $direccion) {
        if(isset($direccion)){
            if(strlen($direccion) <= 150){
                $this->direccion = $direccion;
            }
        }
    }
}
