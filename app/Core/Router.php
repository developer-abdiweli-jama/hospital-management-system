<?php
namespace App\Core;

class Router {
    protected $routes = [];

    public function get($uri, $handler) {
        $this->routes['GET'][$uri] = $handler;
    }

    public function post($uri, $handler) {
        $this->routes['POST'][$uri] = $handler;
    }

    public function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes[$method] as $route => $handler) {
            if ($route === $uri) {
                return $this->callHandler($handler);
            }
        }

        http_response_code(404);
        echo '404 Not Found';
    }

    protected function callHandler($handler) {
        if (is_callable($handler)) {
            return $handler();
        }
        
        if (is_string($handler)) {
            list($controller, $method) = explode('@', $handler);
            $controller = "App\\Controllers\\{$controller}";
            
            if (class_exists($controller)) {
                $controllerInstance = new $controller;
                
                if (method_exists($controllerInstance, $method)) {
                    return $controllerInstance->$method();
                }
            }
        }

        throw new \Exception("Invalid handler");
    }
}