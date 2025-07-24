<?php
namespace App\Controllers\Auth;

use App\Core\Controller;
use App\Models\User;

class RegisterController extends Controller {
    public function showRegisterForm() {
        return $this->render('auth/register', ['csrf_token' => $this->generateCsrfToken()]);
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['csrf_token']) || !$this->validateCsrfToken($_POST['csrf_token'])) {
                $_SESSION['alert'] = ['type' => 'error', 'message' => 'Invalid CSRF token'];
                return $this->redirect('register');
            }

            $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $confirm_password = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);
            $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING) ?? 'patient';

            if ($password !== $confirm_password) {
                $_SESSION['alert'] = ['type' => 'error', 'message' => 'Passwords do not match'];
                return $this->redirect('register');
            }

            if (strlen($password) < 8) {
                $_SESSION['alert'] = ['type' => 'error', 'message' => 'Password must be at least 8 characters long'];
                return $this->redirect('register');
            }

            $userModel = new User();
            $existingUser = $userModel->fetchOne("SELECT * FROM users WHERE email = :email", ['email' => $email]);

            if ($existingUser) {
                $_SESSION['alert'] = ['type' => 'error', 'message' => 'Email already registered'];
                return $this->redirect('register');
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $userModel->query(
                "INSERT INTO users (full_name, email, password, role) VALUES (:full_name, :email, :password, :role)",
                ['full_name' => $full_name, 'email' => $email, 'password' => $hashedPassword, 'role' => $role]
            );

            $_SESSION['alert'] = ['type' => 'success', 'message' => 'Registration successful. Please log in.'];
            return $this->redirect('login');
        }
    }
}
?>