<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Doctor;

class HomeController extends Controller {
    public function index() {
        $this->view('public/index', ['title' => 'Home - Arba Minch General Hospital']);
    }

    public function about() {
        $this->view('public/about', ['title' => 'About Us - Arba Minch General Hospital']);
    }

    public function services() {
        $this->view('public/services', ['title' => 'Services - Arba Minch General Hospital']);
    }

    public function doctors() {
        $doctorModel = new Doctor();
        $doctors = $doctorModel->getAllDoctors();
        $this->view('public/doctors', ['title' => 'Doctors - Arba Minch General Hospital', 'doctors' => $doctors]);
    }

    public function contact() {
        $this->view('public/contact', ['title' => 'Contact Us - Arba Minch General Hospital']);
    }

    public function contactSubmit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->validateCsrfToken($_POST['csrf_token'])) {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
            $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
            $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

            // Simulate saving to database (replace with actual DB logic)
            // Log to storage/logs/contact.log
            $logMessage = date('Y-m-d H:i:s') . " - Contact Form: $name, $email, $phone, $subject, $message\n";
            file_put_contents(__DIR__ . '/../../storage/logs/contact.log', $logMessage, FILE_APPEND);

            // Return JSON for AJAX
            header('Content-Type: application/json');
            echo json_encode(['status' => 'success', 'message' => 'Message sent successfully']);
            exit;
        } else {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => 'Invalid CSRF token']);
            exit;
        }
    }
}
?>