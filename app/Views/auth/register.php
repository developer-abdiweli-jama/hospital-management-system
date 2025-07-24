<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Arba Minch General Hospital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/Css/style.css">
    <style>
        .gradient-bg { background: linear-gradient(135deg, #1F2B6C, #159EEC); }
        .custom-input:focus { border-color: #3B82F6; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2); }
        .custom-button:hover { transform: translateY(-2px); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        .transition-all { transition: all 0.3s ease; }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-2xl p-8 max-w-md w-full mx-4 transition-all transform hover:scale-105">
        <div class="text-center mb-6">
            <img src="<?php echo BASE_URL; ?>assets/images/Logo.png" alt="Arba Minch General Hospital Logo" class="h-16 mx-auto">
            <h1 class="text-2xl font-bold text-blue-900 mt-2">ARBA-MINCH-GH</h1>
            <p class="text-gray-600">Create an account to get started.</p>
        </div>
        <?php if (isset($_SESSION['alert'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    <li><?php echo htmlspecialchars($_SESSION['alert']['message']); ?></li>
                </ul>
            </div>
            <?php unset($_SESSION['alert']); ?>
        <?php endif; ?>
        <form method="POST" action="/register" class="space-y-4">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="name" name="full_name" placeholder="Enter your full name" class="w-full p-3 border border-gray-300 rounded-lg custom-input transition-all focus:outline-none" required>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full p-3 border border-gray-300 rounded-lg custom-input transition-all focus:outline-none" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" class="w-full p-3 border border-gray-300 rounded-lg custom-input transition-all focus:outline-none" required>
                <p class="text-xs text-gray-500 mt-1">Password must be at least 8 characters long.</p>
            </div>
            <div>
                <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" class="w-full p-3 border border-gray-300 rounded-lg custom-input transition-all focus:outline-none" required>
            </div>
            <div>
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select id="role" name="role" class="w-full p-3 border border-gray-300 rounded-lg custom-input transition-all focus:outline-none" required>
                    <option value="" disabled selected>Select your role</option>
                    <option value="patient">Patient</option>
                    <option value="doctor">Doctor</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold mt-6 custom-button transition-all hover:bg-blue-700">
                Register
            </button>
        </form>
        <p class="text-center mt-6 text-gray-600">
            Already have an account? <a href="<?php echo BASE_URL; ?>login" class="text-blue-600 hover:underline">Log in</a>.
        </p>
    </div>
    <script src="<?php echo BASE_URL; ?>assets/js/form_validation.js"></script>
</body>
</html>