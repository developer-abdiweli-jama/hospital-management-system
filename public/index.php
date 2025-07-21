<?php
declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

// Load environment
(Dotenv\Dotenv::createImmutable(__DIR__.'/../'))->load();

// Error handling
if ($_ENV['APP_DEBUG'] === 'true') {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

// Session
session_start();

// Initialize router
$router = new App\Core\Router();
require __DIR__.'/../routes/web.php';
$router->dispatch();