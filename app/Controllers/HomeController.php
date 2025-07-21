<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
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

    public function index() {
        $this->render('public/index');
    }

    public function about() {
        $this->render('public/about');
    }

    public function services() {
        $this->render('public/services');
    }

    public function doctors() {
        $this->render('public/doctors');
    }

    public function contact() {
        $csrf_token = $this->generateCsrfToken();
        $this->render('public/contact', ['csrf_token' => $csrf_token]);
    }

    public function contactSubmit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['csrf_token']) || !$this->validateCsrfToken($_POST['csrf_token'])) {
                $_SESSION['alert'] = ['type' => 'error', 'message' => 'Invalid CSRF token'];
                $this->redirect('contact');
            }

            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
            $department_id = filter_input(INPUT_POST, 'department_id', FILTER_SANITIZE_NUMBER_INT) ?: null;
            $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
            $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

            try {
                $stmt = $this->db->prepare("
                    INSERT INTO contact_inquiries (name, email, phone, department_id, subject, message, created_at)
                    VALUES (:name, :email, :phone, :department_id, :subject, :message, NOW())
                ");
                $stmt->execute([
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'department_id' => $department_id,
                    'subject' => $subject,
                    'message' => $message
                ]);

                $_SESSION['alert'] = ['type' => 'success', 'message' => 'Your message has been sent successfully!'];
            } catch (\PDOException $e) {
                $_SESSION['alert'] = ['type' => 'error', 'message' => 'Failed to send message. Please try again.'];
            }
            $this->redirect('contact');
        }
    }

    public function dashboard() {
        $this->render('dashboard/admin');
    }
}
?>