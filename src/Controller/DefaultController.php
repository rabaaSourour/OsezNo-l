<?php

namespace App\Controller;

class DefaultController
{
    public function __call($method, $arguments) : void
    {
        require_once __DIR__ . '/../View/' . $method . '.php';
    }
}