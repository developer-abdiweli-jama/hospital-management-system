<?php
if (!function_exists('env')) {
    function env($key, $default = null) {
        return $_ENV[$key] ?? $default;
    }
}

if (!function_exists('view')) {
    function view($path, $data = []) {
        extract($data);
        require VIEW_PATH . str_replace('.', '/', $path) . '.php';
    }
}