<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?php echo isset($BASE_URL) ? $BASE_URL : '/'; ?>assets/Css/style.css">
    <style>
        .gradient-bg { background: linear-gradient(135deg, #1F2B6C, #159EEC); }
        .custom-input:focus { border-color: #3B82F6; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2); }
        .custom-button:hover { transform: translateY(-2px); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        .transition-all { transition: all 0.3s ease; }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-2xl p-8 max-w-md w-full mx-4 text-center transition-all transform hover:scale-105">
        <h2 class="text-2xl font-bold text-gray-800">404 - Page Not Found</h2>
        <p class="text-gray-600 mt-4">The page you are looking for does not exist.</p>
        <a href="<?php echo isset($BASE_URL) ? $BASE_URL : '/'; ?>" class="mt-6 inline-block bg-blue-600 text-white py-3 px-4 rounded-lg font-semibold custom-button transition-all hover:bg-blue-700">Back to Home</a>
    </div>
</body>
</html>