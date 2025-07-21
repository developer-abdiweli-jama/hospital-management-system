<?php
namespace App\Controllers\Auth;

use App\Core\Controller;
use App\Models\User;

class RegisterController extends Controller {
    public function index() {
        $this->view('auth/register', ['title' => 'Register - Arba Minch General Hospital']);
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->validateCsrfToken($_POST['csrf_token'])) {
            $data = [
                'full_name' => filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING),
                'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'role' => filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING)
            ];
            $userModel = new User();
            if ($userModel->createUser($data)) {
                $this->redirect('/login');
            } else {
                $this->view('auth/register', ['title' => 'Register - Arba Minch General Hospital', 'error' => 'Registration failed']);
            }
        } else {
            $this->view('auth/register', ['title' => 'Register - Arba Minch General Hospital', 'error' => 'Invalid CSRF token']);
        }
    }
}
?>