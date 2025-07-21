<?php
// Debugging - remove after fix
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Load environment FIRST
require __DIR__.'/../vendor/autoload.php';
if (file_exists(__DIR__.'/../.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();
}

// Load constants ONCE
require_once __DIR__.'/../config/constants.php';

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Initialize Router
$router = new App\Core\Router();

// Simple test route - add this before including web.php
$router->get('/healthcheck', function() {
    echo "System is alive!";
    echo "<pre>";
    print_r([
        'BASE_URL' => BASE_URL,
        'PATHS' => [
            'APP' => APP_PATH,
            'VIEWS' => VIEW_PATH
        ],
        'ENV' => $_ENV
    ]);
    echo "</pre>";
});

// Load main routes
require_once __DIR__.'/../routes/web.php';

// Dispatch
$router->dispatch();