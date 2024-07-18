<?php

namespace App\Code\task02;

class DigitalProduct extends PhysicalProduct
{
    function totalPrice(): float|int
    {
        return parent::totalPrice() / 2;
    }
}