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
        $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_]+)', $route['path']);
        if ($route['method'] === $method && preg_match('#^' . $pattern . '$#', $uri, $matches)) {
            // Si l'URL contient un paramètre dynamique, récupérez-le
            [$controller, $method] = explode('::', $route['action']);
            $controllerInstance = new $controller($pdo);
            $parameters = array_slice($matches, 1); // Récupérer les paramètres depuis l'URL

            // Passer les paramètres dynamiques à la méthode du contrôleur
            $controllerInstance->$method(...$parameters);
            return;
        }
    }

    http_response_code(404);
    echo "404 - Page not found";
}

}
