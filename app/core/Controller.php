<?php
namespace App\Core;

class Controller {
    protected function render($view, $data = []) {
        extract($data);
        require_once VIEW_PATH . $view . '.php';
    }

    protected function redirect($url) {
        header('Location: ' . BASE_URL . $url);
        exit;
    }

    protected function generateCsrfToken() {
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    protected function validateCsrfToken($token) {
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }
}
?>