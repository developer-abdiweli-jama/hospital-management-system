<?php
namespace App\Core\Exceptions;

class Handler {
    public static function handle(\Throwable $e) {
        if ($_ENV['APP_DEBUG'] === 'true') {
            echo "<h1>Error: {$e->getMessage()}</h1>";
            echo "<pre>{$e->getTraceAsString()}</pre>";
        } else {
            error_log($e->getMessage());
            echo "An error occurred. Please try again later.";
        }
        exit;
    }
}