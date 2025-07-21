<?php
// Start session and load CSRF token function
session_start();
if (!function_exists('generate_csrf_token')) {
    function generate_csrf_token() {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arba Minch General Hospital - Premier healthcare provider in Ethiopia">
    <title><?php echo isset($data['title']) ? htmlspecialchars($data['title']) : 'Arba Minch General Hospital'; ?></title>
    <link rel="preload" href="/assets/images/Logo.png" as="image">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/assets/css/style.css?v=1.4">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta property="og:title" content="<?php echo isset($data['title']) ? htmlspecialchars($data['title']) : 'Arba Minch General Hospital'; ?>">
    <meta property="og:description" content="Leading healthcare services in Ethiopia">
    <meta property="og:image" content="/assets/images/Logo.png">
    <meta property="og:url" content="https://www.arbaminchhospital.com<?php echo $_SERVER['REQUEST_URI']; ?>">
</head>
<body>
    <header class="bg-blue-900 text-white py-2">
        <div class="container mx-auto flex justify-between items-center text-sm flex-wrap px-4">
            <div class="flex items-center space-x-4">
                <img src="/assets/images/Logo.png" alt="Arba Minch General Hospital Logo" class="h-10">
                <span class="font-bold text-xl">ARBA-MINCH-GH</span>
            </div>
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-6 text-center sm:text-left mt-2 sm:mt-0">
                <div class="flex items-center space-x-2">
                    <span class="font-bold">EMERGENCY:</span>
                    <span>(+251) 681-812-255</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="font-bold">WORK HOURS:</span>
                    <span>24/7</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="font-bold">LOCATION:</span>
                    <span>0123 Arba Minch City</span>
                </div>
            </div>
        </div>
    </header>
    <nav class="bg-white shadow-md" aria-label="Main Navigation">
        <div class="container mx-auto flex justify-between items-center p-4 flex-wrap">
            <div class="flex space-x-8 flex-wrap">
                <a href="/" class="text-gray-700 hover:text-blue-600 font-semibold <?php echo $_SERVER['REQUEST_URI'] === '/' ? 'text-blue-600' : ''; ?>">Home</a>
                <a href="/about" class="text-gray-700 hover:text-blue-600 font-semibold <?php echo $_SERVER['REQUEST_URI'] === '/about' ? 'text-blue-600' : ''; ?>">About Us</a>
                <a href="/services" class="text-gray-700 hover:text-blue-600 font-semibold <?php echo $_SERVER['REQUEST_URI'] === '/services' ? 'text-blue-600' : ''; ?>">Services</a>
                <a href="/doctors" class="text-gray-700 hover:text-blue-600 font-semibold <?php echo $_SERVER['REQUEST_URI'] === '/doctors' ? 'text-blue-600' : ''; ?>">Doctors</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 font-semibold <?php echo $_SERVER['REQUEST_URI'] === '/contact' ? 'text-blue-600' : ''; ?>">Contact</a>
            </div>
            <div class="flex space-x-2">
                <?php if (\App\Core\Auth::isLoggedIn()): ?>
                    <a href="/dashboard/<?php echo strtolower(\App\Core\Auth::getUserRole()); ?>" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700">Dashboard</a>
                    <a href="/logout" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold border border-blue-600 hover:bg-blue-50">Logout</a>
                <?php else: ?>
                    <a href="/login" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700">Login</a>
                    <a href="/register" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold border border-blue-600 hover:bg-blue-50">Signup</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>