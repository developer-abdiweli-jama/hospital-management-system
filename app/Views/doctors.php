<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Meet the expert doctors at Arba Minch General Hospital, specializing in various medical fields to provide top-quality care.">
    <title>Doctors - Arba Minch General Hospital</title>
    <!-- Preload Critical Resources -->
    <link rel="preload" href="/assets/images/Logo.png" as="image">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <!-- Stylesheets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/assets/css/style.css?v=1.3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Open Graph Tags -->
    <meta property="og:title" content="Doctors at Arba Minch General Hospital">
    <meta property="og:description" content="Our team of skilled doctors is dedicated to your health and well-being.">
    <meta property="og:image" content="/assets/images/Logo.png">
    <meta property="og:url" content="https://www.arbaminchhospital.com/doctors">
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
                <a href="/doctors" class="text-blue-600 font-semibold">Doctors</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 font-semibold">Contact</a>
            </div>
            <div class="flex space-x-2">
                <a href="/login" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700">Login</a>
                <a href="/register" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold border border-blue-600 hover:bg-blue-50">Signup</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section bg-doctors-images">
        <div class="hero-overlay"></div>
        <div class="hero-content text-white px-4">
            <p class="text-lg font-semibold tracking-wider">OUR DOCTORS</p>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mt-4 leading-tight">
                Expert Care from<br>
                <span class="text-3xl sm:text-4xl font-semibold">Our Dedicated Team</span>
            </h1>
            <div class="mt-8">
                <a href="#doctors" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition-all duration-300">Meet Our Doctors</a>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section id="doctors" class="container mx-auto my-12 p-4">
        <h2 class="section-title text-3xl font-bold text-center mb-8">Our Expert Doctors</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="doctor-card bg-white shadow-lg rounded-lg overflow-hidden relative group">
                <img src="/assets/images/Doctor1.png" alt="Dr. Afework Yohannes - Neurologist" class="w-full h-[400px] object-cover object-top" loading="lazy">
                <div class="p-4">
                    <h3 class="text-xl font-bold">Dr. Afework Yohannes</h3>
                    <p class="text-gray-600">Neurologist</p>
                    <div class="rating-stars text-yellow-400 mt-2">★★★★☆</div>
                </div>
                <div class="absolute inset-0 bg-white p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out overflow-y-auto">
                    <img src="/assets/images/Doctor1.png" alt="Dr. Afework Yohannes - Neurologist" class="w-full h-[400px] object-cover object-top mb-4">
                    <h3 class="text-xl font-bold mb-2">Dr. Afework Yohannes</h3>
                    <p class="text-gray-700 mb-2">Neurologist</p>
                    <p class="text-gray-600 mb-4">With over 15 years of experience, Dr. Afework specializes in diagnosing and treating disorders of the nervous system.</p>
                    <p class="text-gray-600 mb-4"><strong>Department:</strong> Neurology</p>
                    <p class="text-gray-600 mb-4"><strong>Education:</strong> MD, PhD in Neurology</p>
                    <p class="text-gray-600 mb-4"><strong>Experience:</strong> 15+ years</p>
                    <div class="flex justify-start space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="doctor-card bg-white shadow-lg rounded-lg overflow-hidden relative group">
                <img src="/assets/images/Doctor4.jpg" alt="Drs. Hanna Yohanes - Obstetrician" class="w-full h-[400px] object-cover object-top" loading="lazy">
                <div class="p-4">
                    <h3 class="text-xl font-bold">Drs. Hanna Yohanes</h3>
                    <p class="text-gray-600">Obstetrician</p>
                    <div class="rating-stars text-yellow-400 mt-2">★★★★☆</div>
                </div>
                <div class="absolute inset-0 bg-white p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out overflow-y-auto">
                    <img src="/assets/images/Doctor4.jpg" alt="Drs. Hanna Yohanes - Obstetrician" class="w-full h-[400px] object-cover object-top mb-4">
                    <h3 class="text-xl font-bold mb-2">Drs. Hanna Yohanes</h3>
                    <p class="text-gray-700 mb-2">Obstetrician</p>
                    <p class="text-gray-600 mb-4">Drs. Hanna provides expert care for expecting mothers, ensuring safe pregnancies and deliveries.</p>
                    <p class="text-gray-600 mb-4"><strong>Department:</strong> Obstetrics and Gynecology</p>
                    <p class="text-gray-600 mb-4"><strong>Education:</strong> MD, Board Certified in Obstetrics</p>
                    <p class="text-gray-600 mb-4"><strong>Experience:</strong> 8+ years</p>
                    <div class="flex justify-start space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="doctor-card bg-white shadow-lg rounded-lg overflow-hidden relative group">
                <img src="/assets/images/Doctor3.jpg" alt="Dr. Abebe Jemal - Orthopedic Surgeon" class="w-full h-[400px] object-cover object-top" loading="lazy">
                <div class="p-4">
                    <h3 class="text-xl font-bold">Dr. Abebe Jemal</h3>
                    <p class="text-gray-600">Orthopedic Surgeon</p>
                    <div class="rating-stars text-yellow-400 mt-2">★★★★☆</div>
                </div>
                <div class="absolute inset-0 bg-white p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out overflow-y-auto">
                    <img src="/assets/images/Doctor3.jpg" alt="Dr. Abebe Jemal - Orthopedic Surgeon" class="w-full h-[400px] object-cover object-top mb-4">
                    <h3 class="text-xl font-bold mb-2">Dr. Abebe Jemal</h3>
                    <p class="text-gray-700 mb-2">Orthopedic Surgeon</p>
                    <p class="text-gray-600 mb-4">Specializing in bone and joint health, Dr. Abebe offers advanced surgical and non-surgical treatments for musculoskeletal conditions.</p>
                    <p class="text-gray-600 mb-4"><strong>Department:</strong> Orthopedics</p>
                    <p class="text-gray-600 mb-4"><strong>Education:</strong> MD, Fellowship in Orthopedic Surgery</p>
                    <p class="text-gray-600 mb-4"><strong>Experience:</strong> 12+ years</p>
                    <div class="flex justify-start space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-envelope"></i></a>
                    </div>
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