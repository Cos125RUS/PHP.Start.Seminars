<?php

namespace Geekbrains\Application1\Domain\Controllers;

class Controller
{

    public function __construct()
    {
        $_SESSION['count'] = isset($_SESSION['count']) ? (int)$_SESSION['count'] + 1 : 1;
    }
}