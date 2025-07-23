<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Arba Minch General Hospital for inquiries, appointments, or emergency services. We're here to assist you 24/7.">
    <title>Contact Us - Arba Minch General Hospital</title>
    <!-- Preload Critical Resources -->
    <link rel="preload" href="/assets/images/Logo.png" as="image">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <!-- Stylesheets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/assets/css/style.css?v=1.4">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Open Graph Tags -->
    <meta property="og:title" content="Contact Arba Minch General Hospital">
    <meta property="og:description" content="Reach out to us for any healthcare needs or inquiries. We're available 24/7.">
    <meta property="og:image" content="/assets/images/Logo.png">
    <meta property="og:url" content="https://www.arbaminchhospital.com/contact">
</head>
<body>
    <!-- Top Navigation Bar -->
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

    <!-- Navbar -->
    <nav class="bg-white shadow-md" aria-label="Main Navigation">
        <div class="container mx-auto flex justify-between items-center p-4 flex-wrap">
            <div class="flex space-x-8 flex-wrap">
                <a href="/" class="text-gray-700 hover:text-blue-600 font-semibold">Home</a>
                <a href="/about" class="text-gray-700 hover:text-blue-600 font-semibold">About Us</a>
                <a href="/services" class="text-gray-700 hover:text-blue-600 font-semibold">Services</a>
                <a href="/doctors" class="text-gray-700 hover:text-blue-600 font-semibold">Doctors</a>
                <a href="/contact" class="text-blue-600 font-semibold">Contact</a>
            </div>
            <div class="flex space-x-2">
                <a href="/login" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700">Login</a>
                <a href="/register" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold border border-blue-600 hover:bg-blue-50">Signup</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section bg-contact-images">
        <div class="hero-overlay"></div>
        <div class="hero-content text-white px-4">
            <p class="text-lg font-semibold tracking-wider">GET IN TOUCH</p>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mt-4 leading-tight">
                We're Here<br>
                <span class="text-3xl sm:text-4xl font-semibold">to Assist You</span>
            </h1>
            <div class="mt-8">
                <a href="#contact-form" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition-all duration-300">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact-form" class="container mx-auto my-12 p-4">
        <?php require_once __DIR__ . '/components/alert.php'; ?>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="section-title">Send Us a Message</h2>
            <form method="POST" action="/contact/submit" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
                <input type="text" placeholder="Full Name" class="p-2 border rounded custom-input" name="name" required>
                <input type="email" placeholder="Email" class="p-2 border rounded custom-input" name="email" required>
                <input type="tel" placeholder="Phone" class="p-2 border rounded custom-input" name="phone" required>
                <select name="department_id" class="p-2 border rounded custom-select">
                    <option value="">Select Department (Optional)</option>
                    <?php
                    $config = require APP_PATH . 'config/database.php';
                    $db = new PDO(
                        "mysql:host={$config['host']};dbname={$config['database']};charset={$config['charset']}",
                        $config['user'],
                        $config['password']
                    );
                    $stmt = $db->query("SELECT id, name FROM departments");
                    while ($dept = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<option value='{$dept['id']}'>" . htmlspecialchars($dept['name']) . "</option>";
                    }
                    ?>
                </select>
                <input type="text" placeholder="Subject" class="p-2 border rounded custom-input" name="subject" required>
                <textarea placeholder="Your Message" class="p-2 border rounded custom-input col-span-2" name="message" rows="5" required></textarea>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full font-semibold mt-4 custom-button col-span-2">Submit</button>
            </form>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="bg-blue-50 py-12">
        <div class="container mx-auto p-4">
            <h2 class="section-title text-center text-3xl font-bold mb-8">Contact Information</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center" style="color: #1F2B6C;">
                    <i class="fas fa-phone-alt text-4xl mb-4"></i>
                    <h3 class="font-bold text-xl mb-4">Contact</h3>
                    <p class="mt-2">(+251) 681-812-255</p>
                    <p class="mt-2">(+251) 666-331-894</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center" style="color: #1F2B6C;">
                    <i class="fas fa-map-marker-alt text-4xl mb-4"></i>
                    <h3 class="font-bold text-xl mb-4">Location</h3>
                    <p class="mt-2">0123 Arba Minch City</p>
                    <p class="mt-2">9876, Arba Minch Ethiopia</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center" style="color: #1F2B6C;">
                    <i class="fas fa-envelope text-4xl mb-4"></i>
                    <h3 class="font-bold text-xl mb-4">Email & Working Hours</h3>
                    <p class="mt-2">arbaminchgh@moh.et</p>
                    <p class="mt-2">Mon-Sat 00:00-23:00</p>
                    <p class="mt-2">Sunday Emergency only</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-6">
        <div class="container mx-auto p-4 flex justify-between items-center flex-wrap">
            <div>
                <h3 class="font-bold text-xl">Important Links</h3>
                <ul class="mt-2">
                    <li><a href="/contact" class="hover:text-blue-300">Contact Us</a></li>
                    <li><a href="/about" class="hover:text-blue-300">About Us</a></li>
                    <li><a href="/doctors" class="hover:text-blue-300">Doctors</a></li>
                    <li><a href="/services" class="hover:text-blue-300">Services</a></li>
                    <li><a href="/" class="hover:text-blue-300">Home</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold text-xl">Newsletter</h3>
                <form class="mt-2">
                    <input type="email" placeholder="Enter your email address" class="p-2 rounded text-black">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded ml-2">Subscribe</button>
                </form>
            </div>
            <div>
                <h3 class="font-bold text-xl">Contact Information</h3>
                <p class="mt-2">Call: (+251) 681-812-255</p>
                <p class="mt-2">Email: arbaminchgh@moh.et</p>
                <p class="mt-2">Address: 9876 Arba Minch City, Ethiopia</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <p>© 2025 Arba Minch General Hospital. All Rights Reserved by HIRGAL NEXUS</p>
        </div>
    </footer>
    <script src="/assets/js/form_validation.js"></script>
    <script src="/assets/js/interactivity.js"></script>
</body>
</html>