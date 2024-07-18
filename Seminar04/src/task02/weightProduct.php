<?php

namespace App\Code\task02;

class WeightProduct extends Product
{
    protected float $weight;

    /**
     * @param float $weight
     */
    public function __construct(float $price, float $weight)
    {
        parent::__construct($price);
        $this->weight = $weight;
    }


    function totalPrice(): float|int
    {
        return $this->weight * $this->price;
    }
}