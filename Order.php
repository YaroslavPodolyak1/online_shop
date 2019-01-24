<?php

interface Order
{
    /**
     * Создать заказ
     *
     * @param Order $order
     * @param array $products
     *
     * @return Order
     */
    public function create(Order $order, array $products): Order;
    
}