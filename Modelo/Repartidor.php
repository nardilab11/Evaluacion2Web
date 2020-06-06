<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Repartidor
 *
 * @author Nicolás
 */
include_once 'Persona.php';

class Repartidor extends Persona{
    
    public function __construct(int $telefono, string $nombre, string $apellido) {
        parent::__construct($telefono, $nombre, $apellido);
    }
}
