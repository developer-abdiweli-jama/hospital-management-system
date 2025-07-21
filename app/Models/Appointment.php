<?php
namespace App\Models;

use App\Core\Model;

class Appointment extends Model {
    protected $table = 'appointments';

    public function createAppointment($data) {
        $stmt = $this->db->prepare("INSERT INTO $this->table (patient_id, doctor_id, department_id, appointment_date, appointment_time, reason, status) VALUES (:patient_id, :doctor_id, :department_id, :date, :time, :reason, :status)");
        return $stmt->execute($data);
    }

    public function getAppointmentsByPatient($patientId) {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE patient_id = :patient_id");
        $stmt->execute(['patient_id' => $patientId]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getAppointmentsByDoctor($doctorId) {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE doctor_id = :doctor_id");
        $stmt->execute(['doctor_id' => $doctorId]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>