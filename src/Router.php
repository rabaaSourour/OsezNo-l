<?php

namespace App;

use App\Database\DbConnection;

class Router
{
    private array $routes = [];

    public function add(string $method, string $path, string $action): void
    {
        $this->routes[] = ['method' => $method, 'path' => $path, 'action' => $action];
    }

    public function handleRequest(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $pdo = DbConnection::getPdo();
        
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $uri) {
                [$controller, $method] = explode('::', $route['action']);
                $controllerInstance = new $controller($pdo);
                $controllerInstance->$method();
                return;
            }
        }

        http_response_code(404);
        echo "404 - Page not found";
    }
}

