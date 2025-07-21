<?php
require __DIR__.'/../vendor/autoload.php';

// Load environment
if (file_exists(__DIR__.'/../.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();
}

// Initialize router
$router = new App\Core\Router();

// Load routes
require __DIR__.'/../routes/web.php';

echo "PHP is working!";
exit;
// Dispatch the request
$router->dispatch();