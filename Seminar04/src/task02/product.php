<?php

namespace App\Code\task02;

abstract class Product
{
    protected float $price;

    /**
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    abstract function totalPrice();
}