<?php
namespace App\Core;

class Controller {
    protected function view($view, $data = []) {
        extract($data);
        require_once VIEW_PATH . $view . '.php';
    }

    protected function redirect($url) {
        header('Location: ' . BASE_URL . $url);
        exit;
    }

    protected function validateCsrfToken($token) {
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }
}
?>