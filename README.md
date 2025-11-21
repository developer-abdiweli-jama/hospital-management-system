# 🌑🏥 Hospital Management System

<p align="center">
  <img src="https://dummyimage.com/1200x400/0f0f0f/ffffff&text=🌑🏥+Hospital+Management+System" alt="Hospital Management System - Dark Banner" />
</p>

<p align="center">
  <strong>A modern web-based platform built with PHP and MySQL for efficient hospital operations.</strong>
</p>

<p align="center">
  Role-Based Dashboards • Secure Authentication • Appointment Scheduling • Responsive UI
</p>

<p align="center">
  <a href="https://hospital-management-system.example.com"><strong>🚀 Live Demo</strong></a> •
  <a href="#-features">Features</a> •
  <a href="#-tech-stack">Tech Stack</a> •
  <a href="#-installation--setup">Install</a>
</p>

---

## 🏷️ Badges

<p align="center">
  <img src="https://img.shields.io/github/stars/developer-abdiweli-jama/hospital-management-system?style=for-the-badge&color=yellow&labelColor=0d0d0d" />
  <img src="https://img.shields.io/github/forks/developer-abdiweli-jama/hospital-management-system?style=for-the-badge&color=yellow&labelColor=0d0d0d" />
  <img src="https://img.shields.io/github/issues/developer-abdiweli-jama/hospital-management-system?style=for-the-badge&color=orange&labelColor=0d0d0d" />
  <img src="https://img.shields.io/github/license/developer-abdiweli-jama/hospital-management-system?style=for-the-badge&color=yellow&labelColor=0d0d0d" />
  <img src="https://img.shields.io/badge/PRs-Welcome-00ff88?style=for-the-badge&labelColor=0d0d0d" />
</p>

### 🧰 Tech Versions

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.0-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/Tailwind-3.4-38B2AC?style=for-the-badge&logo=tailwindcss&logoColor=white" />
  <img src="https://img.shields.io/badge/Composer-2.7-885630?style=for-the-badge&logo=composer&logoColor=white" />
  <img src="https://img.shields.io/badge/Font_Awesome-6-528DD7?style=for-the-badge&logo=fontawesome&logoColor=white" />
</p>

---

## 📸 Preview

<p align="center">
  <img src="https://dummyimage.com/1600x900/0f172a/ffffff&text=Home+Page+%E2%80%94+Dark+Mode+Coming+Soon" width="100%" />
</p>

<p align="center">
  <img src="https://dummyimage.com/1600x900/0f172a/ffffff&text=Appointment+Booking+Flow" width="100%" />
</p>

<p align="center">
  <img src="https://dummyimage.com/1600x900/0f172a/ffffff&text=Admin+Dashboard+%E2%80%94+Manage+Users+%26+Records" width="100%" />
</p>

> ⚡ Real screenshots and GIFs will be added as development continues.

---

## 🎯 Features

### 👤 Patient Features
* Secure registration and login
* Browse doctors and book appointments
* View personal medical records
* Submit contact inquiries

### 🩺 Doctor Features
* Manage appointments and schedules
* Access patient records securely
* Update availability

### 🛡️ Admin Features
* User and doctor management
* Oversee appointments and inquiries
* System-wide controls and logs

### 🔒 Security & Design
* CSRF protection and password hashing
* Responsive, mobile-friendly UI with Tailwind CSS
* Scalable database with audit logs

### 🔜 Coming Soon
* Email notifications for appointments
* Integration with payment gateways
* Advanced analytics dashboard
* Mobile app companion

---

## 🛠 Tech Stack

| Layer      | Technologies                          |
|------------|---------------------------------------|
| Backend    | PHP, MySQL, Composer                  |
| Frontend   | HTML5, Tailwind CSS, Font Awesome     |
| Database   | MySQL with Migrations                 |
| Security   | CSRF Tokens, Bcrypt Hashing           |
| Tools      | Git, Apache/Nginx, PDO                |

---

## 📁 Project Structure

```bash
hospital-management-system/
├── public/
│   ├── assets/
│   ├── css/
│   ├── js/
│   └── index.php
├── src/
│   ├── controllers/
│   ├── models/
│   ├── views/
│   └── utils/
├── sql/
│   └── schema.sql
├── storage/
│   ├── logs/
│   └── uploads/
├── .env.example
├── composer.json
└── README.md
```

---

## ⚙️ Installation & Setup

```bash
# Clone project
git clone https://github.com/developer-abdiweli-jama/hospital-management-system.git
cd hospital-management-system
```

### Backend Setup

```bash
composer install
cp .env.example .env
```

Update `.env` with your database credentials.

### Database Setup

```bash
mysql -u root -p hospital_db < sql/schema.sql
```

### Storage Setup

```bash
mkdir -p storage/logs storage/uploads
chmod 777 storage/logs storage/uploads
```

---

## 🔑 Environment Variables

```env
DB_HOST=localhost
DB_NAME=hospital_db
DB_USER=root
DB_PASS=your_secure_password
DB_CHARSET=utf8mb4
APP_ENV=development
APP_DEBUG=true
```

---

## 🚀 Running the App

### Using Built-in Server

```bash
php -S localhost:8000 -t public
```

### With Apache/Nginx
Configure your web server to serve the `public/` directory as the document root.

Access at `http://localhost:8000`. Use default credentials (update in `schema.sql`):
- Admin: `admin@hospital.com` / `password123`
- Doctor: `afework@hospital.com` / `password123`
- Patient: `patient@hospital.com` / `password123`

---

## 🛤 Roadmap

| Status | Feature                  | ETA      |
|--------|--------------------------|----------|
| ✅     | Core dashboards          | Live    |
| ✅     | Appointment booking      | Dec 2026|
| 🔄    | Email notifications      | Jan 2027|
| 🔄    | Payment integration      | Jan 2027|
| ⏳    | Analytics dashboard      | Feb 2027|
| ⏳    | Mobile responsiveness    | Q1 2027 |

---

## 🤝 Contributing

1. Fork the repo
2. Create a branch (`git checkout -b feat/add-feature`)
3. Commit (`git commit -m 'add: new feature'`)
4. Push and create a PR

---

## 🎥 Tutorial Reference

Project inspired by modern PHP best practices and hospital management needs.

---

## 👤 Author

**Abdiweli Jama Abdullahi**  
Full-Stack Developer • HIRGAL NEXUS  
* GitHub: [https://github.com/developer-abdiweli-jama](https://github.com/developer-abdiweli-jama)  
* LinkedIn: [https://www.linkedin.com/in/abdiweli-jamac-60ab44207](https://www.linkedin.com/in/abdiweli-jamac-60ab44207)  
* Email: [abdiwelijama@gmail.com](mailto:abdiwelijama@gmail.com)

<p align="center"><strong>⭐ Star this project if you like it!</strong></p>
