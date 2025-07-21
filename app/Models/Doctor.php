<?php
namespace App\Models;

use App\Core\Model;

class Doctor extends Model {
    protected $table = 'doctors';

    public function getAllDoctors() {
        $stmt = $this->db->query("SELECT * FROM $this->table");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>