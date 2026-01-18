# Janani

A doctor/patient management system built with PHP & MySQL.  
Supports **four roles**: Patient, Family, Doctor, and Admin.  
Each role has access to different features within the system.

---

## Tech Stack
- Backend: PHP 7/8
- Frontend: HTML, CSS, JavaScript
- Database: MySQL
- Server: XAMPP/WAMP

---

## Features by Role

**Patient**
- Register and login  
- View available doctors  
- Book appointments  
- View their own appointments and visit history  

**Family**
- Register and login   
- View patient appointments and history  

**Doctor (Implemented by Me)**
- Login and manage their own panel  
- View scheduled appointments and patient lists  
- Add prescriptions for patients  
- Upload and manage patient reports (lab tests, scans, etc.)  
- Schedule new appointments and manage existing ones  
- Update patient visit status after consultations  
- Filter appointments by date or patient  

**Admin**
- Login  
- Manage all users (patients, family, doctors)  
- View all appointments in the system  
- Assign doctors to patients if needed  

> **Note:** The Doctor Panel, including prescription management, report uploads, and appointment scheduling, is fully implemented by me.

---

## Database Setup
1. Open phpMyAdmin and create a database named `janani`.  
2. Import `db/schema.sql` (if available) to create tables.  
3. Update `config.php` with your database credentials.

---

## Setup & Run
1. Place the project folder inside `htdocs` (XAMPP/WAMP).  
2. Start Apache & MySQL from XAMPP/WAMP.  
3. Open a browser and go to:
http://localhost/Janani/index.php


---

## Notes
- Multi-role system demonstrating role-based access.  
- Doctor panel is the main contribution, showcasing **real-world logic**.  
- PHP Version: 7/8  
- MySQL Version: 5.x or 8.x
