<?php

namespace App\Controller;

class HomeController
{
    public function home(): void
    {
        require_once __DIR__ . '/../View/home.php';
    }
}
