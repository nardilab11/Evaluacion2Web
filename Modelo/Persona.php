<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author Nicolás
 */
 abstract class Persona {
    private int $telefono;
    private string $nombre;
    private string $apellido;
    
    protected function __construct(int $telefono, string $nombre, string $apellido) {
        $this->setTelefono($telefono);
        $this->setNombre($nombre);
        $this->setApellido($apellido);
    }
    
    protected function getTelefono(){
        return $this->telefono;
    }
    
    protected function setTelefono(int $telefono) {
        if(isset($telefono)){
            if(strlen($telefono) == 9){
                $this->telefono = $telefono;
            }
        }
    }
    
    protected function getNombre(){
        return $this->nombre;
    }
    
    protected function setNombre(string $nombre) {
        if(isset($nombre)){
            if(strlen($nombre) <= 50){
                $this->nombre = $nombre;
            }
        }
    }
    
    protected function getApellido(){
        return $this->apellido;
    }
    
    protected function setApellido(string $apellido) {
        if(isset($apellido)){
            if(strlen($apellido) <= 50){
                $this->apellido = $apellido;
            }
        }
    }
}
