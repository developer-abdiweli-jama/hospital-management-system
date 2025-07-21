<?php
namespace App\Core;

class Auth {
    public static function login($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_role'] = $user['role'];
    }

    public static function logout() {
        session_destroy();
    }

    public static function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }

    public static function getUserId() {
        return $_SESSION['user_id'] ?? null;
    }

    public static function getUserRole() {
        return $_SESSION['user_role'] ?? null;
    }
}
?>