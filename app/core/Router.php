<?php

namespace App\Core;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get($uri, $controllerAction)
    {
        $this->routes['GET'][$uri] = $controllerAction;
    }

    public function post($uri, $controllerAction)
    {
        $this->routes['POST'][$uri] = $controllerAction;
    }

    public function dispatch($uri, $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            $this->callAction(
                ...$this->routes[$method][$uri]
            );
            return;
        }

        // A real app would have a 404 page
        http_response_code(404);
        echo '404 Not Found';
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controllerInstance = new $controller();

        if (!method_exists($controllerInstance, $action)) {
            throw new \Exception("{$controller} does not respond to the {$action} action.");
        }

        $controllerInstance->$action();
    }
}
