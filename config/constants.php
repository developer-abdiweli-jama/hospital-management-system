<?php
// Base URLs
define('BASE_URL', 'https://www.arbaminchhospital.com');
define('BASE_PATH', __DIR__ . '/../');

// Directory paths
define('APP_PATH', BASE_PATH . 'app/');
define('VIEW_PATH', APP_PATH . 'Views/');
define('STORAGE_PATH', BASE_PATH . 'storage/');
define('LOG_PATH', STORAGE_PATH . 'logs/');

// Environment
define('ENVIRONMENT', getenv('APP_ENV') ?: 'production');

// Security
define('APP_KEY', getenv('APP_KEY') ?: 'your-secret-key-here');

// Debugging
define('DEBUG_MODE', ENVIRONMENT === 'development');