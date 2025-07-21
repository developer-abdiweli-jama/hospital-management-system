<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Auth;
use App\Models\Appointment;

class DoctorController extends Controller {
    public function dashboard() {
        if (!Auth::isLoggedIn() || Auth::getUserRole() !== 'Doctor') {
            $this->redirect('/login');
        }
        $appointmentModel = new Appointment();
        $appointments = $appointmentModel->getAppointmentsByDoctor(Auth::getUserId());
        $this->view('dashboard/doctor', ['title' => 'Doctor Dashboard', 'appointments' => $appointments]);
    }
}
?>