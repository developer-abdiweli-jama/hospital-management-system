<?php
// Debugging - remove in production
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Load environment
require __DIR__ . '/../vendor/autoload.php';
if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
    die('Error: vendor/autoload.php not found. Run "composer install" in the project root.');
}
if (file_exists(__DIR__ . '/../.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
} else {
    die('Error: .env file not found. Create one in the project root.');
}

// Load constants
if (!file_exists(__DIR__ . '/../config/constants.php')) {
    die('Error: config/constants.php not found. Create or check the file.');
}
require_once __DIR__ . '/../config/constants.php';

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verify Router class exists
if (!class_exists('App\Core\Router')) {
    die('Error: App\Core\Router class not found. Check app/Core/Router.php and composer.json autoload.');
}

// Initialize Router
$router = new App\Core\Router();

// Debug route
$router->get('/healthcheck', function() {
    echo "System is alive!";
    echo "<pre>";
    print_r([
        'BASE_URL' => defined('BASE_URL') ? BASE_URL : 'Not defined',
        'PATHS' => [
            'APP' => defined('APP_PATH') ? APP_PATH : 'Not defined',
            'VIEWS' => defined('VIEW_PATH') ? VIEW_PATH : 'Not defined'
        ],
        'ENV' => $_ENV
    ]);
    echo "</pre>";
});

// Load main routes
if (!file_exists(__DIR__ . '/../routes/web.php')) {
    die('Error: routes/web.php not found. Please check the file path.');
}
require_once __DIR__ . '/../routes/web.php';

// Dispatch with error logging
try {
    $router->dispatch();
} catch (Exception $e) {
    error_log('Dispatch error: ' . $e->getMessage());
    echo "An error occurred. Check logs at " . (defined('LOG_PATH') ? LOG_PATH : 'app/storage/logs/');
}
?>