<?php
namespace App\Core;

class Router {
    protected $routes = [];

    public function __construct() {
        // Constructor can initialize default routes if needed
    }

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    public function dispatch() {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        $method = $_SERVER['REQUEST_METHOD'];

        if (array_key_exists($uri, $this->routes[$method])) {
            $this->callAction(
                ...explode('@', $this->routes[$method][$uri])
            );
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }

    protected function callAction($controller, $action) {
        $controller = "App\\Controllers\\{$controller}";
        
        if (!class_exists($controller)) {
            throw new \Exception("Controller {$controller} not found");
        }

        $controllerInstance = new $controller();

        if (!method_exists($controllerInstance, $action)) {
            throw new \Exception("Method {$action} not found in {$controller}");
        }

        return $controllerInstance->$action();
    }
}