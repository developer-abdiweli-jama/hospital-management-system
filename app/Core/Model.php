<?php
namespace App\Core;

class Model {
    protected $db;
    protected static $connection = null;

    public function __construct() {
        if (self::$connection === null) {
            $this->connect();
        }
        $this->db = self::$connection;
    }

    protected function connect() {
        $config = require APP_PATH . '../config/database.php';
        $dbConfig = $config['connections']['mysql'];

        try {
            self::$connection = new \PDO(
                "mysql:host={$dbConfig['host']};" .
                "port={$dbConfig['port']};" .
                "dbname={$dbConfig['database']};" .
                "charset={$dbConfig['charset']}",
                $dbConfig['username'],
                $dbConfig['password'],
                $dbConfig['options']
            );
            
            // Additional attributes can be set here if needed
            self::$connection->setAttribute(
                \PDO::ATTR_EMULATE_PREPARES, 
                $dbConfig['options'][\PDO::ATTR_EMULATE_PREPARES]
            );

        } catch (\PDOException $e) {
            if (DEBUG_MODE) {
                throw new \Exception('Database connection failed: ' . $e->getMessage());
            } else {
                error_log('Database connection error: ' . $e->getMessage());
                throw new \Exception('Database connection error. Please try again later.');
            }
        }
    }

    // Common database methods that child classes can use
    protected function query($sql, $params = []) {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    protected function fetchAll($sql, $params = []) {
        return $this->query($sql, $params)->fetchAll(\PDO::FETCH_ASSOC);
    }

    protected function fetchOne($sql, $params = []) {
        return $this->query($sql, $params)->fetch(\PDO::FETCH_ASSOC);
    }

    protected function lastInsertId() {
        return $this->db->lastInsertId();
    }
}