# 🔐 PHP & XAMPP Login System

> A beginner-friendly authentication system built with **PHP, Apache, MySQL, HTML, CSS, and JavaScript**, developed locally using **XAMPP**.

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Apache](https://img.shields.io/badge/Apache-Web%20Server-D22128?style=for-the-badge&logo=apache&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-Markup-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-Styling-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-Frontend-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![XAMPP](https://img.shields.io/badge/XAMPP-Local%20Development-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)

---

## 📌 Project Overview

This project is a simple **user authentication system** created to understand how a traditional PHP backend communicates with a MySQL database.

The project starts from a basic login form and gradually develops into a more secure authentication system.

The main purpose is not only to make a login page work, but to understand the complete backend flow:

```text
User
 │
 │ Enter username + password
 ▼
┌─────────────────────┐
│    Login Form       │
│     HTML/CSS        │
└──────────┬──────────┘
           │
           │ HTTP POST
           ▼
┌─────────────────────┐
│     PHP Backend     │
│                     │
│ • Receive input     │
│ • Validate input    │
│ • Process login     │
└──────────┬──────────┘
           │
           │ SQL Query
           ▼
┌─────────────────────┐
│       MySQL         │
│                     │
│      users          │
│ ┌─────────────────┐ │
│ │ id              │ │
│ │ username        │ │
│ │ password_hash   │ │
│ └─────────────────┘ │
└──────────┬──────────┘
           │
           │ User record
           ▼
┌─────────────────────┐
│     PHP Backend     │
│                     │
│ password_verify()   │
└──────────┬──────────┘
           │
       ┌───┴────┐
       │        │
    Success    Failed
       │        │
       ▼        ▼
  Dashboard   Error
```

---

# 🎯 Project Objectives

The project is designed around several learning objectives.

| # | Objective | Description |
|---|---|---|
| 1 | PHP Fundamentals | Understand PHP syntax, variables, conditions, functions and server-side execution |
| 2 | HTTP | Understand GET, POST, requests and responses |
| 3 | Form Handling | Learn how PHP receives data submitted from HTML forms |
| 4 | Database | Learn how MySQL stores application data |
| 5 | Database Connectivity | Connect PHP to MySQL using PDO |
| 6 | Authentication | Build a functional login and registration system |
| 7 | Password Security | Store passwords using secure hashing |
| 8 | Sessions | Maintain authenticated user sessions |
| 9 | Security | Understand SQL Injection, XSS, CSRF and authentication security |
| 10 | Backend Architecture | Learn how frontend, backend and database components interact |

---

# 🧠 What I Am Learning

This project is being developed as a practical foundation for **Full Stack Development, Backend Development, and Cybersecurity**.

The main technologies and concepts are:

```text
                    Web Application
                          │
          ┌───────────────┼───────────────┐
          ▼               ▼               ▼
       Frontend         Backend        Database
          │               │               │
       HTML/CSS          PHP             MySQL
          │               │               │
     JavaScript          PDO          SQL Queries
                          │
                          ▼
                     Authentication
                          │
              ┌───────────┼───────────┐
              ▼           ▼           ▼
           Sessions    Hashing      Security
```

---

# 🛠️ Technology Stack

| Technology | Purpose |
|---|---|
| **PHP** | Server-side programming and backend logic |
| **Apache** | Web server used to execute PHP |
| **MySQL** | Relational database |
| **phpMyAdmin** | Web interface for managing MySQL |
| **HTML5** | Page structure |
| **CSS3** | User interface styling |
| **JavaScript** | Client-side interactions |
| **PDO** | PHP database access layer |
| **XAMPP** | Local development environment |
| **Git** | Version control |
| **GitHub** | Source code hosting and documentation |

---

# 🖥️ Development Environment

The project runs locally using XAMPP.

```text
Windows
   │
   ▼
┌─────────────────────────────┐
│            XAMPP            │
│                             │
│  ┌───────────┐ ┌─────────┐ │
│  │  Apache   │ │  MySQL  │ │
│  └─────┬─────┘ └────┬────┘ │
└────────┼─────────────┼──────┘
         │             │
         ▼             ▼
       PHP           Database
         │             │
         └──────┬──────┘
                ▼
          Web Application
```

### Default local URL

```text
http://localhost/
```

---

# 📂 Project Structure

The project will gradually evolve into the following structure:

```text
login-system/
│
├── config/
│   └── database.php
│
├── public/
│   ├── index.php
│   ├── login.php
│   ├── register.php
│   ├── dashboard.php
│   └── logout.php
│
├── includes/
│   ├── auth.php
│   ├── header.php
│   └── footer.php
│
├── css/
│   └── style.css
│
├── js/
│   └── script.js
│
├── database/
│   └── database.sql
│
└── README.md
```

> **Note:** The structure will be introduced progressively during development. The initial version of the project may contain fewer files.

---

# 🔄 Application Pipeline

The complete authentication pipeline is:

```text
┌──────────────┐
│    Browser   │
└──────┬───────┘
       │
       │ HTTP Request
       ▼
┌──────────────┐
│    Apache    │
│  Web Server  │
└──────┬───────┘
       │
       │ Execute PHP
       ▼
┌──────────────┐
│     PHP      │
│   Backend    │
└──────┬───────┘
       │
       │ PDO
       ▼
┌──────────────┐
│    MySQL     │
│   Database   │
└──────┬───────┘
       │
       │ Result
       ▼
┌──────────────┐
│     PHP      │
│ Authentication│
└──────┬───────┘
       │
       ▼
┌────────────────────────┐
│ Session / Response     │
└───────────┬────────────┘
            │
            ▼
        Dashboard
```

---

# 🌐 How PHP Works

PHP is a **server-side programming language**.

For example:

```php
<?php

$name = "Tun Feng";

echo "Hello " . $name;

?>
```

The browser does not execute the PHP code directly.

Instead:

```text
Browser
   │
   │ Request
   ▼
Apache
   │
   │ Execute
   ▼
PHP
   │
   │ Generate HTML
   ▼
Browser
```

The browser eventually receives something similar to:

```html
Hello Max
```

This is an important distinction between **client-side** and **server-side** programming.

---

# 🧩 PHP Fundamentals

## Variables

PHP variables begin with `$`.

```php
$name = "Max";
$age = 33;
```

Example:

```php
<?php

$name = "Max";

echo "Hello " . $name;

?>
```

Output:

```text
Hello Max
```

---

## Conditional Statements

PHP can make decisions using `if` and `else`.

```php
<?php

$username = "admin";

if ($username == "admin") {
    echo "Welcome Admin";
} else {
    echo "Welcome User";
}

?>
```

Authentication systems rely heavily on conditional logic.

For example:

```text
Is the user authenticated?
        │
    ┌───┴───┐
   YES      NO
    │        │
    ▼        ▼
Dashboard   Login
```

---

# 📮 HTTP POST

Login forms normally use the `POST` method.

Example:

```html
<form method="POST">

    <input type="text" name="username">

    <input type="password" name="password">

    <button type="submit">
        Login
    </button>

</form>
```

PHP can receive the submitted information through:

```php
$username = $_POST["username"];
$password = $_POST["password"];
```

The request flow becomes:

```text
User enters data
       │
       ▼
HTML Form
       │
       │ POST
       ▼
PHP
       │
       ▼
$_POST
       │
       ▼
Backend processing
```

---

# 🗄️ Database Design

The authentication system will use a `users` table.

## Users Table

| Column | Type | Purpose |
|---|---|---|
| `id` | INT | Unique user identifier |
| `username` | VARCHAR | User's username |
| `email` | VARCHAR | User's email address |
| `password_hash` | VARCHAR | Securely hashed password |
| `created_at` | TIMESTAMP | Account creation time |

Conceptually:

```text
users
│
├── id
├── username
├── email
├── password_hash
└── created_at
```

Example record:

| id | username | email | password_hash |
|---:|---|---|---|
| 1 | admin | admin@example.com | `$2y$...` |

> The actual password should **never** be stored as plain text.

---

# 🔐 Password Security

One of the most important concepts in this project is password security.

### ❌ Bad approach

```text
username: admin
password: 123456
```

Storing this directly in the database is unsafe.

### ✅ Correct approach

The password is transformed using a password hashing algorithm:

```text
User Password
     │
     │ password_hash()
     ▼
Password Hash
     │
     ▼
Database
```

During login:

```text
User enters password
        │
        ▼
Retrieve password hash
        │
        ▼
password_verify()
        │
    ┌───┴───┐
   TRUE    FALSE
    │        │
    ▼        ▼
 Login     Reject
```

PHP provides:

```php
password_hash()
```

for creating secure password hashes and:

```php
password_verify()
```

for verifying passwords.

---

# 🛡️ SQL Injection Protection

The project will use **PDO prepared statements** rather than directly inserting user input into SQL queries.

### ❌ Unsafe

```php
$sql = "SELECT * FROM users
        WHERE username = '$username'";
```

User input is being inserted directly into the SQL statement.

### ✅ Safer

```php
$sql = "SELECT * FROM users
        WHERE username = :username";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    "username" => $username
]);
```

The principle is:

```text
User Input
    │
    ▼
Prepared Statement
    │
    ▼
Database
```

This helps protect the application against **SQL Injection**.

---

# 🔑 Authentication vs Authorization

These two concepts are important in backend development.

| Concept | Meaning | Example |
|---|---|---|
| Authentication | Who are you? | Login with username/password |
| Authorization | What are you allowed to do? | Admin can delete users |

Example:

```text
User
 │
 │ Login
 ▼
Authentication
 │
 ▼
Who is this user?
 │
 ▼
Authorization
 │
 ├── Normal User
 │
 └── Administrator
```

The login system primarily starts with **authentication**, while authorization will be introduced later.

---

# 🍪 Sessions

HTTP is stateless.

Without a session, PHP does not automatically remember that the user logged in.

We will use PHP sessions:

```php
session_start();

$_SESSION["user_id"] = $user["id"];
```

The concept is:

```text
Login
  │
  ▼
Credentials verified
  │
  ▼
Create Session
  │
  ▼
Session contains user ID
  │
  ▼
User accesses Dashboard
  │
  ▼
PHP checks Session
```

If the session does not exist:

```text
Dashboard
   │
   ▼
Session exists?
   │
 ┌─┴──┐
YES   NO
 │     │
 ▼     ▼
Allow  Login
```

---

# 🚪 Logout

When the user logs out, the session should be destroyed.

Conceptually:

```text
Dashboard
    │
    ▼
 Logout
    │
    ▼
Destroy Session
    │
    ▼
Login Page
```

Example:

```php
session_start();

session_unset();
session_destroy();

header("Location: login.php");
exit;
```

---

# 🧱 Authentication Architecture

The intended architecture is:

```text
                 ┌───────────────┐
                 │    Browser    │
                 └───────┬───────┘
                         │
                         ▼
                 ┌───────────────┐
                 │  Login Page   │
                 │ HTML + CSS    │
                 └───────┬───────┘
                         │
                      POST
                         │
                         ▼
                 ┌───────────────┐
                 │  PHP Backend  │
                 └───────┬───────┘
                         │
             ┌───────────┼───────────┐
             │           │           │
             ▼           ▼           ▼
        Validation      PDO      Authentication
                         │
                         ▼
                 ┌───────────────┐
                 │     MySQL     │
                 │    users      │
                 └───────────────┘
                         │
                         ▼
                  Password Hash
                         │
                         ▼
                 password_verify()
                         │
                    ┌────┴────┐
                    ▼         ▼
                  Valid     Invalid
                    │         │
                    ▼         ▼
                 Session    Error
                    │
                    ▼
                Dashboard
```

---

# 📋 Development Roadmap

The project will be developed in stages.

| Phase | Topic | Status |
|---|---|---|
| 01 | XAMPP installation | 🟡 Learning |
| 02 | PHP fundamentals | 🟡 Learning |
| 03 | HTML login form | 🟡 Learning |
| 04 | HTTP GET / POST | 🟡 Learning |
| 05 | MySQL database | ⬜ Planned |
| 06 | PHP → MySQL connection | ⬜ Planned |
| 07 | Registration | ⬜ Planned |
| 08 | Password hashing | ⬜ Planned |
| 09 | Login authentication | ⬜ Planned |
| 10 | PHP sessions | ⬜ Planned |
| 11 | Dashboard | ⬜ Planned |
| 12 | Logout | ⬜ Planned |
| 13 | Input validation | ⬜ Planned |
| 14 | SQL Injection protection | ⬜ Planned |
| 15 | XSS protection | ⬜ Planned |
| 16 | CSRF protection | ⬜ Planned |
| 17 | Authentication security | ⬜ Planned |
| 18 | Project documentation | ⬜ Planned |

---

# 📊 Current Project Progress

```text
PHP Fundamentals       ██████████░░░░░░░░░░  50%
HTML Forms             ████████░░░░░░░░░░░░  40%
HTTP / POST            ██████░░░░░░░░░░░░░░  30%
MySQL                  ░░░░░░░░░░░░░░░░░░░░   0%
PDO                    ░░░░░░░░░░░░░░░░░░░░   0%
Authentication         ░░░░░░░░░░░░░░░░░░░░   0%
Sessions               ░░░░░░░░░░░░░░░░░░░░   0%
Security               ░░░░░░░░░░░░░░░░░░░░   0%
```

> Progress percentages are personal learning milestones, not application test coverage.

---

# 🧪 Testing Strategy

The project will eventually include basic functional and security testing.

| Test Area | Example |
|---|---|
| Valid Login | Correct username + password |
| Invalid Login | Incorrect password |
| Empty Input | Username/password missing |
| Invalid Username | Unknown account |
| SQL Injection | Malicious SQL input |
| XSS | Script injection attempt |
| Session | Access dashboard without login |
| Logout | Session correctly destroyed |
| Password | Password is never stored as plaintext |

Example authentication test:

```text
                    Login Request
                         │
                         ▼
                 Validate Input
                         │
                         ▼
                 Find User
                         │
                         ▼
              Verify Password Hash
                         │
                  ┌──────┴──────┐
                  ▼             ▼
                Valid          Invalid
                  │             │
                  ▼             ▼
               Session         Error
                  │
                  ▼
              Dashboard
```

---

# ⚠️ Security Considerations

Security is treated as part of the development process rather than something added at the end.

The project will focus on:

### 1. Password Hashing

Never store plaintext passwords.

```php
password_hash()
password_verify()
```

### 2. Prepared Statements

Protect database queries against SQL Injection.

```php
$pdo->prepare();
```

### 3. Input Validation

Never blindly trust user input.

```text
User Input
    ↓
Validate
    ↓
Sanitize / Process
    ↓
Application
```

### 4. Session Security

Authentication state must be managed carefully.

### 5. XSS Protection

Output should be escaped appropriately when displaying user-controlled data.

### 6. CSRF Protection

State-changing requests should use CSRF protection.

### 7. Error Handling

Sensitive information should not be exposed through error messages.

---

# 🧰 Local Setup

## 1. Install XAMPP

Install XAMPP with:

- Apache
- MySQL
- PHP
- phpMyAdmin

---

## 2. Start Apache and MySQL

Open the XAMPP Control Panel.

Start:

```text
Apache  → Running
MySQL   → Running
```

---

## 3. Create Project Directory

Place the project inside:

```text
C:\xampp\htdocs\
```

For example:

```text
C:\xampp\htdocs\login-system\
```

---

## 4. Open the Project

Open:

```text
http://localhost/login-system/
```

---

# 📦 Database Setup

The database will eventually be created using phpMyAdmin.

Example database:

```text
login_system
```

Example table:

```text
users
```

Basic relationship:

```text
login_system
     │
     ▼
   users
     │
 ┌───┼──────────────────┐
 ▼   ▼                  ▼
id username        password_hash
```

A SQL export file will eventually be stored here:

```text
database/database.sql
```

This allows the database structure to be reproduced on another machine.

---

# 🔧 Example PHP Code

## Basic PHP

```php
<?php

$name = "Max";

echo "Hello " . $name;

?>
```

---

## Conditional Logic

```php
<?php

$username = "admin";

if ($username == "admin") {

    echo "Welcome Admin";

} else {

    echo "Welcome User";

}

?>
```

---

## Receiving POST Data

```php
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "Username: " . $username;

}

?>
```

> This example is for learning the HTTP request flow. Production authentication should additionally validate input and avoid directly displaying untrusted data.

---

# 🧭 Request Lifecycle

A typical login request follows this sequence:

```text
01. User opens login page
            ↓
02. Browser sends HTTP GET
            ↓
03. Apache receives request
            ↓
04. Apache executes PHP
            ↓
05. PHP generates HTML
            ↓
06. Browser displays login page
            ↓
07. User enters credentials
            ↓
08. Browser sends HTTP POST
            ↓
09. PHP receives $_POST
            ↓
10. PHP validates input
            ↓
11. PHP queries MySQL
            ↓
12. MySQL returns user
            ↓
13. PHP verifies password
            ↓
14. Session is created
            ↓
15. User is redirected
            ↓
16. Dashboard
```

Understanding this lifecycle is one of the primary goals of this project.

---

# 📚 Key Concepts Learned

By completing this project, I aim to understand:

```text
PHP
├── Variables
├── Data Types
├── Conditions
├── Loops
├── Functions
├── Arrays
├── Forms
├── GET / POST
├── Sessions
└── Error Handling

MySQL
├── Database
├── Tables
├── Primary Keys
├── INSERT
├── SELECT
├── UPDATE
├── DELETE
└── Relationships

Backend
├── HTTP
├── Routing
├── Validation
├── Authentication
├── Authorization
└── Sessions

Security
├── Password Hashing
├── SQL Injection
├── XSS
├── CSRF
├── Session Security
└── Input Validation
```

---

# 🎓 Learning Philosophy

This project follows a **learn → build → test → secure** workflow.

```text
        ┌─────────────┐
        │   LEARN     │
        │ Understand  │
        │ the concept │
        └──────┬──────┘
               │
               ▼
        ┌─────────────┐
        │    BUILD    │
        │ Implement   │
        │ the feature │
        └──────┬──────┘
               │
               ▼
        ┌─────────────┐
        │    TEST     │
        │ Check normal│
        │ + bad input │
        └──────┬──────┘
               │
               ▼
        ┌─────────────┐
        │   SECURE    │
        │ Fix security│
        │ weaknesses  │
        └──────┬──────┘
               │
               └──────────► Repeat
```

The objective is to understand **why the code works**, rather than simply copying code from tutorials.

---

# 🚀 Future Improvements

Potential future features include:

- [ ] User registration
- [ ] Login
- [ ] Logout
- [ ] User dashboard
- [ ] Remember-me functionality
- [ ] Forgot password
- [ ] Password reset
- [ ] User profile
- [ ] Role-based authorization
- [ ] Admin dashboard
- [ ] Login attempt tracking
- [ ] Account lockout / rate limiting
- [ ] CSRF tokens
- [ ] Improved session security
- [ ] Audit logging
- [ ] Responsive UI
- [ ] REST API
- [ ] Deployment to a production server

---

# 📈 Project Evolution

The project is intentionally developed from simple concepts toward a more realistic backend system.

```text
Stage 1
Basic PHP
   │
   ▼
Stage 2
HTML + PHP
   │
   ▼
Stage 3
Forms + POST
   │
   ▼
Stage 4
MySQL
   │
   ▼
Stage 5
PDO
   │
   ▼
Stage 6
Registration
   │
   ▼
Stage 7
Password Hashing
   │
   ▼
Stage 8
Login Authentication
   │
   ▼
Stage 9
Sessions
   │
   ▼
Stage 10
Security Hardening
   │
   ▼
Stage 11
Production-Ready Architecture
```

---

# 💡 Why This Project Matters

A login page may look simple from the frontend:

```text
┌─────────────────────────┐
│        LOGIN            │
│                         │
│ Username                │
│ ┌─────────────────────┐ │
│ │                     │ │
│ └─────────────────────┘ │
│                         │
│ Password                │
│ ┌─────────────────────┐ │
│ │ •••••••••           │ │
│ └─────────────────────┘ │
│                         │
│      [ LOGIN ]          │
│                         │
└─────────────────────────┘
```

However, the backend involves several important concepts:

```text
Frontend
   │
   ▼
HTTP
   │
   ▼
PHP
   │
   ├── Validation
   │
   ├── Authentication
   │
   ├── Sessions
   │
   ▼
PDO
   │
   ▼
MySQL
   │
   ▼
Security
```

This makes a login system a useful beginner project because it introduces many of the fundamental concepts required for professional backend development.

---

# 👨‍💻 Author

**W1NDX**

Diploma in Information Technology  
Focus: Application & Web Development

Current learning direction:

- Full Stack Development
- Backend Development
- Cybersecurity
- PHP
- MySQL
- Web Application Security

---

# 📄 License

This project is created primarily for **learning and educational purposes**.

You are welcome to study, modify, and extend the project.

---

# ⭐ Learning Goals

> **Build it. Understand it. Test it. Secure it.**

The final goal is not simply to create a working login page.

The goal is to understand how a web application works from:

```text
Browser
   ↓
HTTP
   ↓
Web Server
   ↓
PHP
   ↓
Database
   ↓
Authentication
   ↓
Session
   ↓
Security
```

and eventually apply these principles to larger full-stack and cybersecurity projects.
