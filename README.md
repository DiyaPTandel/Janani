# Janani – Pregnancy Tracker

Janani is a **Pregnancy Tracker Website** built with PHP & MySQL.  
It helps **expecting mothers, their families, and doctors** track pregnancy progress, manage appointments, and monitor reports.

Supports **four roles**: Patient, Family, Doctor, and Admin.  
Each role has access to different features in the system.

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
- Track their pregnancy progress  
- View and book appointments with doctors  
- View their own medical reports and history  

**Family**
- Register and login  
- Track pregnancy progress for a family member  
- Book appointments on behalf of the patient  
- View patient reports and appointment history  

**Doctor (Implemented by Me)**
- Login and manage their own panel  
- View scheduled appointments and patient lists  
- Add prescriptions for expecting mothers  
- Upload and manage medical reports (lab tests, scans, etc.)  
- Schedule and manage appointments  
- Update patient visit status after consultations  
- Filter appointments by date, patient, or pregnancy stage  

**Admin**
- Login  
- Manage all users (patients, family, doctors)  
- View all appointments in the system  
- Assign doctors to patients if needed  

> **Note:** The **Doctor Panel**, including prescription management, report uploads, and appointment scheduling, is fully implemented by me.

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
- Multi-role Pregnancy Tracker demonstrating role-based access.  
- Doctor Panel is the main contribution, showcasing **real-world logic for prenatal care**.  
- PHP Version: 7/8  
- MySQL Version: 5.x or 8.x

