<?php

namespace App\Code\task02;

class PhysicalProduct extends Product
{
    protected int $count;

    /**
     * @param int $count
     */
    public function __construct(float $price, int $count)
    {
        parent::__construct($price);
        $this->count = $count;
    }


    function totalPrice(): float|int
    {
        return $this->price * $this->count;
    }
}