<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Nicolás
 */
interface InterfazPedidoCliente {
    public function crearPedido(Pedido $pedido);
    public function consultarPedidos();
    
}
