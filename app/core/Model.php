<?php
namespace App\Core;

class Model {
    protected $db;

    public function __construct() {
        $config = require APP_PATH . 'config/database.php';
        try {
            $this->db = new \PDO(
                "mysql:host={$config['host']};dbname={$config['database']};charset={$config['charset']}",
                $config['user'],
                $config['password']
            );
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die('Database connection failed: ' . $e->getMessage());
        }
    }
}
?>