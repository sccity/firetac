<?php

namespace App;

class Router
{
    protected $routes = [];

    private function addRoute($route, $controller, $action, $method)
    {
        $this->routes[$method][$route] = ['controller' => $controller, 'action' => $action];
    }

    public function get($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "GET");
    }

    public function post($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "POST");
    }

    public function dispatch()
    {
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method = $_SERVER['REQUEST_METHOD'];

        try {
            if (isset($this->routes[$method][$uri])) {
                $controller = $this->routes[$method][$uri]['controller'];
                $action = $this->routes[$method][$uri]['action'];

                $controllerInstance = new $controller();
                $controllerInstance->$action();
            } else {
                throw new \Exception("No route found for URI: $uri");
            }
        } catch (\Exception $e) {
            // Redirect to a custom error page
            http_response_code(404); // Set HTTP status code to 404
            include __DIR__ . '/Views/error.php'; // Custom error page
        }
    }
}