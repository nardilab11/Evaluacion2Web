<?php
    session_start();
    include_once '../Controlador/ControladorPedidoCliente.php';
    
    $cliente = unserialize($_SESSION["user"]);
    echo ($cliente->getNombre());