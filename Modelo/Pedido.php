<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pedido
 *
 * @author Nicolás
 */
class Pedido {
    private Cliente $cliente;
    private Repartidor $repartidor;
    private array $menus;
    private string $fecha;
    private int $monto;
    
    public function __construct(Cliente $cliente, Repartidor $repartidor) {
        $this->setCliente($cliente);
        $this->setRepartidor($repartidor);
        $this->menus = array();
        date_default_timezone_set("America/Santiago");
        $this->fecha = date("j/n/Y - g:i a");
        //poner el $GET para recibir las cantidad de menus de cada uno y multiplicar
        $this->monto = 0;
    }
    
    public function getCliente() {
        return $this->cliente;
    }
    
    public function setCliente(Cliente $cliente) {
        $this->cliente = $cliente;
    }
    
    public function getRepartidor() {
        return $this->repartidor;
    }
    
    public function setRepartidor(Repartidor $repartidor) {
        $this->repartidor = $repartidor;
    }
    
    public function getMenus() {
        return $this->menus;
    }
    
    public function setMenus(array $menus) {
        $this->menus = $menus;
    }
    
    public function getFecha() {
        return $this->fecha;
    }
    
    public function getMonto() {
        return $this->monto;
    }
}
