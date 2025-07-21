<?php
// Only define constants if they don't exist
defined('BASE_PATH') || define('BASE_PATH', realpath(dirname(__DIR__)));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');
defined('VIEW_PATH') || define('VIEW_PATH', APP_PATH . '/Views');
defined('STORAGE_PATH') || define('STORAGE_PATH', BASE_PATH . '/storage');
defined('LOG_PATH') || define('LOG_PATH', STORAGE_PATH . '/logs');

defined('BASE_URL') || define('BASE_URL', 'http://localhost/hospital-management-system/public/');
defined('ASSET_URL') || define('ASSET_URL', BASE_URL . 'assets/');

defined('ENVIRONMENT') || define('ENVIRONMENT', $_ENV['APP_ENV'] ?? 'production');
defined('DEBUG_MODE') || define('DEBUG_MODE', ENVIRONMENT === 'development');