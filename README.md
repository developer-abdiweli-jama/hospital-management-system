Hospital Management System

A web-based application built with PHP and MySQL to manage hospital operations, including user authentication, appointment scheduling, and contact inquiries.

## Features
- **Role-Based Access**: Admin, Doctor, and Patient dashboards with tailored functionalities.
- **Appointment Booking**: Patients can book appointments with doctors via a dynamic form.
- **Contact Form**: Submit inquiries saved to the database with optional department selection.
- **Responsive Design**: Uses Tailwind CSS and Font Awesome for a modern, mobile-friendly UI.
- **Secure Authentication**: CSRF protection and password hashing for user login/register.
- **Patient Records**: View medical records in the patient dashboard.
- **Scalable Database**: Supports audit logs and more.

## Requirements
- PHP >= 7.4
- MySQL >= 5.7
- Composer
- Web server (e.g., Apache, Nginx, or PHP’s built-in server)

## Installation
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/developer-abdiweli-jama/hospital-management-system.git
   cd hospital-management-system
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   ```

3. **Set Up Environment**:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update `.env` with your database credentials:
     ```env
     DB_HOST=localhost
     DB_NAME=hospital_db
     DB_USER=root
     DB_PASS=your_secure_password
     DB_CHARSET=utf8mb4
     APP_ENV=development
     APP_DEBUG=true
     ```

4. **Import Database Schema**:
   ```bash
   mysql -u root -p hospital_db < sql/schema.sql
   ```

5. **Create Storage Directories**:
   ```bash
   mkdir -p storage/logs storage/uploads
   chmod 777 storage/logs storage/uploads
   ```

6. **Run the Application**:
   - Use PHP’s built-in server:
     ```bash
     php -S localhost:8000 -t public
     ```
   - Or configure Apache/Nginx to serve `public/` as the document root.

7. **Access the Application**:
   - Visit `http://localhost:8000`.
   - Use sample accounts (after updating `schema.sql` with valid passwords):
     - Admin: `admin@hospital.com` / `password123`
     - Doctor: `afework@hospital.com` / `password123`
     - Patient: `patient@hospital.com` / `password123`

## Usage
- **Public Pages**: Navigate to Home, About, Services, Doctors, or Contact.
- **Login/Register**: Access dashboards via `/login` or `/register`.
- **Patient Dashboard**: Book appointments and view medical records.
- **Doctor Dashboard**: View and manage appointments.
- **Admin Dashboard**: Manage users and doctors.
- **Contact Form**: Submit inquiries at `/contact`.

## Contributing
Contributions are welcome! Please:
1. Fork the repository.
2. Create a feature branch (`git checkout -b feature/YourFeature`).
3. Commit changes (`git commit -m 'Add YourFeature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a pull request.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact
For inquiries, contact the developer at [your.email@example.com](mailto:abdiwelijamac@gmail.com).
