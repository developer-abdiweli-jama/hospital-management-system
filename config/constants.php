<?php
// Load environment variables from .env if available
if (file_exists(__DIR__ . '/../.env')) {
    $env = parse_ini_file(__DIR__ . '/../.env');
    foreach ($env as $key => $value) {
        putenv("$key=$value");
    }
}

// Base URL for the application
define('BASE_URL', getenv('BASE_URL') ?: 'http://localhost/hospital-management-system/public/');

// Paths
define('APP_PATH', rtrim(realpath(__DIR__ . '/../app/'), '/') . '/');
define('VIEW_PATH', APP_PATH . 'Views/');
define('CONFIG_PATH', APP_PATH . 'config');
define('LOG_PATH', APP_PATH . 'storage/logs/');

// Database configuration
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_NAME', getenv('DB_NAME') ?: 'hospital_management');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DEBUG_MODE', getenv('DEBUG') ?: true);
?>