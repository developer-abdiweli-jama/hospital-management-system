<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Arba Minch General Hospital</title>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .gradient-bg { background: linear-gradient(135deg, #1F2B6C, #159EEC); }
        .custom-input:focus { border-color: #3B82F6; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2); }
        .custom-button:hover { transform: translateY(-2px); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        .transition-all { transition: all 0.3s ease; }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-2xl p-8 max-w-md w-full mx-4 transition-all transform hover:scale-105">
        <div class="text-center mb-6">
            <img src="<?php echo BASE_URL; ?>assets/images/Logo.png" alt="Arba Minch General Hospital Logo" class="h-16 mx-auto">
            <h1 class="text-2xl font-bold text-blue-900 mt-2">ARBA-MINCH-GH</h1>
            <p class="text-gray-600">Welcome back! Please log in to continue.</p>
        </div>
        <?php if (isset($_SESSION['alert'])): ?>
            <div class="mb-4"><?php include __DIR__ . '/../layouts/components/alert.php'; ?></div>
        <?php endif; ?>
        <form action="/login" method="POST" class="space-y-4">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
            <div>
                <input type="email" name="email" id="email" placeholder="Email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition">Login</button>
        </form>
        <p class="text-center text-gray-600 mt-4">
            Don't have an account? <a href="<?php echo BASE_URL; ?>register" class="text-blue-600 hover:underline">Sign up.</a>
        </p>
    </div>
    <script src="<?php echo BASE_URL; ?>assets/js/form_validation.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/interactivity.js"></script>
</body>
</html>