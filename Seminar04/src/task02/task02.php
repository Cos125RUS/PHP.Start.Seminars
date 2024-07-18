<?php

require('../../vendor/autoload.php');

use App\Code\task02\PhysicalProduct;
use App\Code\task02\DigitalProduct;
use App\Code\task02\WeightProduct;

$prod1 = new WeightProduct(200, 1.5);
$prod2 = new PhysicalProduct(3000, 1);
$prod3 = new DigitalProduct(3000, 1);

echo $prod1->totalPrice() . PHP_EOL;
echo $prod2->totalPrice() . PHP_EOL;
echo $prod3->totalPrice() . PHP_EOL;