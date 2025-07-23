<?php
namespace App\Controllers\Auth;

use App\Core\Controller;

class RegisterController extends Controller {
    protected $db;

    public function __construct() {
        $config = require APP_PATH . 'config/database.php';
        $this->db = new \PDO(
            "mysql:host={$config['host']};dbname={$config['database']};charset={$config['charset']}",
            $config['user'],
            $config['password']
        );
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function showRegisterForm() {
        $csrf_token = $this->generateCsrfToken();
        $this->render('public/register', ['csrf_token' => $csrf_token]);
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['csrf_token']) || !$this->validateCsrfToken($_POST['csrf_token'])) {
                $_SESSION['alert'] = ['type' => 'error', 'message' => 'Invalid CSRF token'];
                $this->redirect('register');
            }

            $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);

            if ($password !== $confirm_password) {
                $_SESSION['alert'] = ['type' => 'error', 'message' => 'Passwords do not match'];
                $this->redirect('register');
            }

            if (!in_array($role, ['Doctor', 'Patient'])) {
                $_SESSION['alert'] = ['type' => 'error', 'message' => 'Invalid role selected'];
                $this->redirect('register');
            }

            if (strlen($password) < 8) {
                $_SESSION['alert'] = ['type' => 'error', 'message' => 'Password must be at least 8 characters long'];
                $this->redirect('register');
            }

            try {
                $stmt = $this->db->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
                $stmt->execute(['email' => $email]);
                if ($stmt->fetchColumn() > 0) {
                    $_SESSION['alert'] = ['type' => 'error', 'message' => 'Email already registered'];
                    $this->redirect('register');
                }

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $this->db->prepare("
                    INSERT INTO users (full_name, email, password, role, created_at)
                    VALUES (:full_name, :email, :password, :role, NOW())
                ");
                $stmt->execute([
                    'full_name' => $full_name,
                    'email' => $email,
                    'password' => $hashed_password,
                    'role' => $role
                ]);

                if ($role === 'Doctor') {
                    $user_id = $this->db->lastInsertId();
                    $stmt = $this->db->prepare("
                        INSERT INTO doctors (user_id, specialty, created_at)
                        VALUES (:user_id, :specialty, NOW())
                    ");
                    $stmt->execute([
                        'user_id' => $user_id,
                        'specialty' => 'General' // Default, update later if needed
                    ]);
                }

                $_SESSION['alert'] = ['type' => 'success', 'message' => 'Registration successful! Please log in.'];
                $this->redirect('login');
            } catch (\PDOException $e) {
                $_SESSION['alert'] = ['type' => 'error', 'message' => 'Registration failed. Please try again.'];
                $this->redirect('register');
            }
        }
    }
}
?>