<?php
    session_start();
    include_once '../Modelo/Cliente.php';
    
    $cliente = unserialize($_SESSION["user"]);
    echo ($cliente->getNombre());