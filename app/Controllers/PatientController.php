<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Auth;
use App\Models\Appointment;

class PatientController extends Controller {
    public function dashboard() {
        if (!Auth::isLoggedIn() || Auth::getUserRole() !== 'Patient') {
            $this->redirect('/login');
        }
        $appointmentModel = new Appointment();
        $appointments = $appointmentModel->getAppointmentsByPatient(Auth::getUserId());
        $this->view('dashboard/patient', ['title' => 'Patient Dashboard', 'appointments' => $appointments]);
    }

    public function bookAppointment() {
        if (!Auth::isLoggedIn() || Auth::getUserRole() !== 'Patient') {
            $this->redirect('/login');
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->validateCsrfToken($_POST['csrf_token'])) {
            $appointmentModel = new Appointment();
            $data = [
                'patient_id' => Auth::getUserId(),
                'doctor_id' => filter_input(INPUT_POST, 'doctor', FILTER_SANITIZE_NUMBER_INT),
                'department_id' => filter_input(INPUT_POST, 'department', FILTER_SANITIZE_NUMBER_INT),
                'date' => filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING),
                'time' => filter_input(INPUT_POST, 'time', FILTER_SANITIZE_STRING),
                'reason' => filter_input(INPUT_POST, 'reason', FILTER_SANITIZE_STRING),
                'status' => 'Pending'
            ];
            $appointmentModel->createAppointment($data);
            // Log to storage/logs/appointments.log
            $logMessage = date('Y-m-d H:i:s') . " - Appointment Booked: Patient ID {$data['patient_id']}, Doctor ID {$data['doctor_id']}\n";
            file_put_contents(__DIR__ . '/../../storage/logs/appointments.log', $logMessage, FILE_APPEND);
            $this->redirect('/dashboard/patient');
        } else {
            $this->redirect('/dashboard/patient');
        }
    }
}
?>