<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Doctor;

class ApiController extends Controller {
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

    public function getDoctors() {
        $doctorModel = new Doctor();
        $doctors = $doctorModel->getAllDoctors();
        header('Content-Type: application/json');
        echo json_encode($doctors);
    }

    public function getDepartments() {
        $stmt = $this->db->query("SELECT id, name FROM departments");
        $departments = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        header('Content-Type: application/json');
        echo json_encode($departments);
    }
}
?>