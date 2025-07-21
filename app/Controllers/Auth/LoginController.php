<?php
namespace App\Controllers\Auth;

use App\Core\Controller;
use App\Core\Auth;
use App\Models\User;

class LoginController extends Controller {
    public function index() {
        $this->view('auth/login', ['title' => 'Login - Arba Minch General Hospital']);
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->validateCsrfToken($_POST['csrf_token'])) {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'];
            $userModel = new User();
            $user = $userModel->findByEmail($email);
            if ($user && password_verify($password, $user['password'])) {
                Auth::login($user);
                $this->redirect('/dashboard/' . strtolower($user['role']));
            } else {
                $this->view('auth/login', ['title' => 'Login - Arba Minch General Hospital', 'error' => 'Invalid credentials']);
            }
        } else {
            $this->view('auth/login', ['title' => 'Login - Arba Minch General Hospital', 'error' => 'Invalid CSRF token']);
        }
    }

    public function logout() {
        Auth::logout();
        $this->redirect('/login');
    }
}
?>