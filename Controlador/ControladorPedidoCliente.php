<?php
session_start();
include_once '../Modelo/Pedido.php';
include_once '../Modelo/Cliente.php';

if(true){
    $telefono = $_POST["telefono"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $_SESSION["user"] = serialize(new Cliente($telefono, $nombre, $apellido, $direccion));
}

header("Location: ../Vista/MenuCliente.php");
