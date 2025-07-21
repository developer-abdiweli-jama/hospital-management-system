<?php
     namespace App\Controllers;

     use App\Core\Controller;
     use App\Models\Doctor;

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
             $this->view('public/contact', ['title' => 'Contact Us - Arba Minch General Hospital', 'db' => $this->db]);
         }

         public function contactSubmit() {
             if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->validateCsrfToken($_POST['csrf_token'])) {
                 $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                 $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                 $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
                 $department_id = filter_input(INPUT_POST, 'department_id', FILTER_SANITIZE_NUMBER_INT) ?: null;
                 $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
                 $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

                 $stmt = $this->db->prepare("INSERT INTO contact_inquiries (name, email, phone, department_id, subject, message) VALUES (:name, :email, :phone, :department_id, :subject, :message)");
                 $stmt->execute([
                     'name' => $name,
                     'email' => $email,
                     'phone' => $phone,
                     'department_id' => $department_id,
                     'subject' => $subject,
                     'message' => $message
                 ]);

                 header('Content-Type: application/json');
                 echo json_encode(['status' => 'success', 'message' => 'Message sent successfully']);
                 exit;
             } else {
                 header('Content-Type: application/json');
                 echo json_encode(['status' => 'error', 'message' => 'Invalid CSRF token']);
                 exit;
             }
         }

         public function dashboard() {
             if (!\App\Core\Auth::isLoggedIn() || \App\Core\Auth::getUserRole() !== 'Admin') {
                 $this->redirect('/login');
             }
             $this->view('dashboard/admin', ['title' => 'Admin Dashboard']);
         }
     }
     ?>