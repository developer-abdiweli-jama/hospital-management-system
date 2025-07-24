<?php
namespace App\Controllers\Auth;

use App\Core\Controller;
use App\Models\User;

class LoginController extends Controller {
    public function showLoginForm() {
        return $this->render('auth/login', ['csrf_token' => $this->generateCsrfToken()]);
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['csrf_token']) || !$this->validateCsrfToken($_POST['csrf_token'])) {
                $_SESSION['alert'] = ['type' => 'error', 'message' => 'Invalid CSRF token'];
                return $this->redirect('login');
            }

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

            $userModel = new User();
            $user = $userModel->fetchOne("SELECT * FROM users WHERE email = :email", ['email' => $email]);

            if ($user && password_verify($password, $user['password'])) {
                \App\Core\Auth::login($user);
                switch ($user['role']) {
                    case 'Admin':
                        return $this->redirect('dashboard/admin');
                    case 'Doctor':
                        return $this->redirect('dashboard/doctor');
                    case 'Patient':
                        return $this->redirect('dashboard/patient');
                    default:
                        return $this->redirect('unauthorized');
                }
            } else {
                $_SESSION['alert'] = ['type' => 'error', 'message' => 'Invalid email or password'];
                return $this->redirect('login');
            }
        }
    }

    public function logout() {
        \App\Core\Auth::logout();
        return $this->redirect('login');
    }
}
?>