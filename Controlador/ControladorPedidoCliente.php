<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControladorPedidoCliente
 *
 * @author Nicolás
 */

include_once '../Modelo/Interfaces/InterfazPedidoCliente.php';
include_once '../Modelo/Pedido.php';
include_once '../Modelo/Cliente.php';

class ControladorPedidoCliente implements InterfazPedidoCliente {
    private array $pedidos = array();
    
    public function crearPedido(Pedido $pedido) {
        $this->pedidos[] = $pedido;
    }
    
    public function consultarPedidos() {
        return $this->pedidos;
    }
}

if(isset($_POST{"telefono"}) && isset($_POST{"nombre"}) && isset($_POST{"apellido"}) && isset($_POST{"direccion"})){
    $telefono = $_POST{"telefono"};
    $nombre = $_POST{"nombre"};
    $apellido = $_POST{"apellido"};
    $direccion = $_POST{"direccion"};
    $_SESSION["user"] = serialize(new Cliente($telefono, $nombre, $apellido, $direccion));
}

