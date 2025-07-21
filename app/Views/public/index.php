<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arba Minch General Hospital - Premier healthcare provider offering 24/7 emergency services and specialized medical care in Ethiopia">
    <title>Home - Arba Minch General Hospital</title>
    <!-- Preload Critical Resources -->
    <link rel="preload" href="/assets/images/Logo.png" as="image">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <!-- Stylesheets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/assets/css/style.css?v=1.2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Open Graph Tags -->
    <meta property="og:title" content="Arba Minch General Hospital">
    <meta property="og:description" content="Leading the way in medical excellence with 24/7 emergency care and specialized services.">
    <meta property="og:image" content="/assets/images/Logo.png">
    <meta property="og:url" content="https://www.arbaminchhospital.com">
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
                <a href="/contact" class="text-gray-700 hover:text-blue-600 font-semibold">Contact</a>
            </div>
            <div class="flex space-x-2">
                <a href="/login" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700">Login</a>
                <a href="/register" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold border border-blue-600 hover:bg-blue-50">Signup</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content text-white px-4">
            <p class="text-lg font-semibold tracking-wider">CARING FOR LIFE</p>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mt-4 leading-tight">
                Leading the Way<br>
                <span class="text-3xl sm:text-4xl font-semibold">in Medical Excellence</span>
            </h1>
            <div class="mt-8 space-x-4">
                <a href="/services" class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition-all duration-300">Our Services</a>
                <a href="#appointment" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold border border-blue-600 hover:bg-blue-50 transition-all duration-300">Book an Appointment</a>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="container mx-auto my-12 p-4">
        <h2 class="section-title">Our Services</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="service-card p-6">
                <h3 class="font-bold text-xl">Free Checkup</h3>
                <p class="mt-2">Comprehensive health assessments for all patients.</p>
            </div>
            <div class="service-card p-6">
                <h3 class="font-bold text-xl">5-Star Care</h3>
                <p class="mt-2">Premium healthcare services with patient comfort in mind.</p>
            </div>
            <div class="service-card p-6">
                <h3 class="font-bold text-xl">Cardiogram</h3>
                <p class="mt-2">Advanced heart diagnostics for accurate treatment.</p>
            </div>
            <div class="service-card p-6">
                <h3 class="font-bold text-xl">DNA Testing</h3>
                <p class="mt-2">Genetic testing for personalized healthcare.</p>
            </div>
            <div class="service-card p-6">
                <h3 class="font-bold text-xl">Blood Bank</h3>
                <p class="mt-2">Safe and reliable blood donation services.</p>
            </div>
        </div>
    </section>

    <!-- Our Specialties Section -->
    <section class="bg-blue-50 py-12">
        <div class="container mx-auto p-4">
            <h2 class="section-title text-3xl font-bold text-center mb-8">Our Specialties</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <div class="specialty-card bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <i class="fas fa-brain text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold">Neurology</h3>
                    <p class="text-gray-600 mt-2">Brain and nervous system care.</p>
                </div>
                <div class="specialty-card bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <i class="fas fa-bone text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold">Orthopedics</h3>
                    <p class="text-gray-600 mt-2">Bone and joint health.</p>
                </div>
                <div class="specialty-card bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <i class="fas fa-microscope text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold">Oncology</h3>
                    <p class="text-gray-600 mt-2">Cancer diagnosis and treatment.</p>
                </div>
                <div class="specialty-card bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <i class="fas fa-ear-listen text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold">ENT</h3>
                    <p class="text-gray-600 mt-2">Ear, nose, and throat care.</p>
                </div>
                <div class="specialty-card bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <i class="fas fa-eye text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold">Ophthalmology</h3>
                    <p class="text-gray-600 mt-2">Eye care and surgery.</p>
                </div>
                <div class="specialty-card bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <i class="fas fa-heartbeat text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold">Cardiology</h3>
                    <p class="text-gray-600 mt-2">Heart and vascular health.</p>
                </div>
                <div class="specialty-card bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <i class="fas fa-lungs text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold">Pulmonology</h3>
                    <p class="text-gray-600 mt-2">Lung and respiratory care.</p>
                </div>
                <div class="specialty-card bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <i class="fas fa-kidneys text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold">Renal Medicine</h3>
                    <p class="text-gray-600 mt-2">Kidney health and dialysis.</p>
                </div>
                <div class="specialty-card bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <i class="fas fa-stomach text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold">Gastroenterology</h3>
                    <p class="text-gray-600 mt-2">Digestive system care.</p>
                </div>
                <div class="specialty-card bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <i class="fas fa-bladder text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold">Urology</h3>
                    <p class="text-gray-600 mt-2">Urinary tract health.</p>
                </div>
                <div class="specialty-card bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <i class="fas fa-allergies text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold">Dermatology</h3>
                    <p class="text-gray-600 mt-2">Skin, hair, and nail care.</p>
                </div>
                <div class="specialty-card bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <i class="fas fa-female text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold">Gynaecology</h3>
                    <p class="text-gray-600 mt-2">Women's reproductive health.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Book an Appointment Section -->
    <section id="appointment" class="container mx-auto my-12 p-4">
        <h2 class="section-title">Book an Appointment</h2>
        <form class="bg-white p-6 rounded-lg shadow-md" method="POST" action="/appointments/book">
            <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <input type="text" placeholder="Name" class="p-2 border rounded custom-input" name="name" required>
                <select class="p-2 border rounded custom-select" name="gender" required>
                    <option value="">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <input type="email" placeholder="Email" class="p-2 border rounded custom-input" name="email" required>
                <input type="tel" placeholder="Phone" class="p-2 border rounded custom-input" name="phone" required>
                <input type="date" class="p-2 border rounded custom-input" name="date" required>
                <input type="time" class="p-2 border rounded custom-input" name="time" required>
                <select class="p-2 border rounded custom-select" name="doctor" required>
                    <option value="">Select Doctor</option>
                    <?php // Dynamic doctor list populated by interactivity.js ?>
                </select>
                <select class="p-2 border rounded custom-select" name="department" required>
                    <option value="">Select Department</option>
                    <?php // Dynamic department list populated by interactivity.js ?>
                </select>
                <textarea placeholder="Reason for Appointment" class="p-2 border rounded custom-input col-span-2" name="reason"></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full font-semibold mt-4 custom-button">SUBMIT</button>
        </form>
    </section>

    <!-- Our Doctors Section -->
    <section class="container mx-auto my-12 p-4">
        <h2 class="section-title text-3xl font-bold text-center mb-8">Our Doctors</h2>
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

    <!-- Get in Touch Section -->
    <section class="bg-white text-blue-900 py-12">
        <div class="container mx-auto p-4">
            <h2 class="section-title text-center text-3xl font-bold mb-8">Get in Touch</h2>
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