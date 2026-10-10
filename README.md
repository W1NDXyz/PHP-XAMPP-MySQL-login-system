# 🔐 PHP & XAMPP Login System

> A beginner-friendly authentication system built with **PHP, Apache, MySQL/MariaDB, HTML, CSS, and JavaScript**, developed locally using **XAMPP**.

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Apache](https://img.shields.io/badge/Apache-Web%20Server-D22128?style=for-the-badge&logo=apache&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-Markup-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-Styling-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-Frontend-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![XAMPP](https://img.shields.io/badge/XAMPP-Local%20Development-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)

---

## 📌 Project Overview

This project is a PHP-based user authentication system developed to understand how a web application processes user input, communicates with a relational database, and manages authenticated sessions.

Starting from the fundamentals of PHP and HTML forms, the project has evolved to incorporate security practices commonly used in backend development.

The main objective is not simply to create a working login page, but to understand the complete authentication process.

### 🔄 Authentication Flow

```text
                 User
                  │
                  ▼
           Login / Register
                  │
                  │ HTTP POST
                  ▼
          ┌───────────────┐
          │  PHP Backend  │
          │               │
          │ Input Checks  │
          │ CSRF Check    │
          └───────┬───────┘
                  │
                  ▼
          ┌───────────────┐
          │ PDO Database  │
          │   Queries     │
          └───────┬───────┘
                  │
                  ▼
          ┌───────────────┐
          │ MySQL /       │
          │ MariaDB       │
          └───────┬───────┘
                  │
                  ▼
          Verify Password Hash
                  │
             ┌────┴────┐
             ▼         ▼
           Valid     Invalid
             │         │
             ▼         ▼
        Create       Reject
        Session      Login
             │
             ▼
       Protected Dashboard
```

---

## 🎯 Project Objectives

| # | Objective | Description |
|---:|---|---|
| 1 | PHP Fundamentals | Understand variables, conditions, functions, arrays, and server-side execution |
| 2 | HTTP | Understand GET, POST, requests, and responses |
| 3 | Form Handling | Process and validate data submitted through HTML forms |
| 4 | Database | Design a relational database and manage user records |
| 5 | Database Connectivity | Connect PHP to MySQL using PDO |
| 6 | Authentication | Implement user registration and login |
| 7 | Password Security | Hash and verify passwords securely |
| 8 | Session Management | Maintain and protect authenticated sessions |
| 9 | Web Security | Learn about SQL injection, XSS, CSRF, and session security |
| 10 | Backend Architecture | Understand how frontend, backend, and database components interact |

---

## 🧠 What I Am Learning

This project provides a practical foundation for **Backend Development, Full Stack Development, and Cybersecurity**.

```text
                  Web Application
                         │
           ┌─────────────┼─────────────┐
           ▼             ▼             ▼
        Frontend       Backend      Database
           │             │             │
        HTML / CSS      PHP        MySQL
           │             │             │
       JavaScript       PDO        SQL Queries
                         │
                         ▼
                   Authentication
                         │
            ┌────────────┼────────────┐
            ▼            ▼            ▼
         Sessions      Hashing      Security
```

The learning process follows a practical cycle:

**Learn → Build → Test → Review → Improve**

---

## 🛠️ Technology Stack

| Technology | Purpose |
|---|---|
| **PHP** | Server-side programming and authentication logic |
| **Apache** | Web server provided by XAMPP |
| **MySQL / MariaDB** | Relational database for user records |
| **phpMyAdmin** | Browser-based database management |
| **PDO** | PHP database access layer with prepared statements |
| **HTML5** | Web page structure and forms |
| **CSS3** | Interface styling |
| **JavaScript** | Client-side interactions |
| **XAMPP** | Local development environment |
| **Git** | Version control |
| **GitHub** | Source code hosting and documentation |
| **Gitleaks** | Local and Git-history secret scanning |

---

## 🖥️ Development Environment

The application is developed locally on Windows using XAMPP.

```text
Windows
   │
   ▼
  XAMPP
   │
   ├── Apache
   │     │
   │     ▼
   │    PHP
   │     │
   │     └─────────────┐
   │                   │
   └── MySQL / MariaDB │
                       ▼
                 Web Application
                       │
                       ▼
                Authentication
```

### Local application URL

```text
http://localhost/1.PHP+Xampp/public/login.php
```

> This URL is for the current local directory layout. It is not a public production deployment.

---

## 📂 Project Structure

The current project is organized into configuration, database, shared backend logic, and public-facing pages.

```text
1.PHP+Xampp/
│
├── config/
│   └── database.php
│
├── database/
│   └── database.sql
│
├── includes/
│   ├── auth.php
│   ├── security_headers.php
│   └── session.php
│
├── public/
│   ├── css/
│   ├── js/
│   ├── dashboard.php
│   ├── login.php
│   ├── logout.php
│   └── register.php
│
├── .gitignore
└── README.md
```

### Directory responsibilities

| Directory / File | Responsibility |
|---|---|
| `config/database.php` | Creates the PDO database connection |
| `database/database.sql` | Defines the database schema |
| `includes/auth.php` | Checks authentication and account status |
| `includes/security_headers.php` | Applies selected HTTP security headers |
| `includes/session.php` | Centralizes session configuration and timeout handling |
| `public/login.php` | Processes login requests |
| `public/register.php` | Processes registration requests |
| `public/dashboard.php` | Displays the protected dashboard |
| `public/logout.php` | Ends the authenticated session |
| `public/css/` | Contains stylesheet assets |
| `public/js/` | Contains JavaScript assets |
| `.gitignore` | Excludes selected local files from Git |

**Architecture note:** For stronger isolation, a production deployment should configure the web server's document root to point to `public/`, keeping configuration and shared PHP files outside the publicly served directory.

---

## 🔄 Application Pipeline

A typical login request follows this sequence:

```text
01. User opens the login page
              ↓
02. Browser sends an HTTP GET request
              ↓
03. Apache receives the request
              ↓
04. PHP generates the page
              ↓
05. User submits login credentials
              ↓
06. Browser sends an HTTP POST request
              ↓
07. PHP validates the request and CSRF token
              ↓
08. PDO queries the database
              ↓
09. PHP verifies the stored password hash
              ↓
10. PHP checks the account status
              ↓
11. Session ID is regenerated
              ↓
12. Authenticated session is established
              ↓
13. User is redirected to the dashboard
```

If authentication fails, the application rejects the login and returns an appropriate error message.

---

## 🌐 How PHP Works

PHP is a **server-side programming language**. It executes on the web server, not directly in the browser.

Example:

```php
<?php

$name = "W1NDX";

echo "Hello " . $name;

?>
```

The browser receives the generated output:

```text
Hello W1NDX
```

The execution flow is:

```text
Browser Request
      │
      ▼
    Apache
      │
      ▼
      PHP
      │
      ▼
Generated HTML Response
      │
      ▼
    Browser
```

This is the key distinction between server-side programming and client-side technologies such as HTML, CSS, and JavaScript.

---

## 🗄️ Database Design

The application uses a database named `dblogin_system` and a `users` table.

### Users table

| Column | Type | Purpose |
|---|---|---|
| `id` | INT | Unique user identifier |
| `username` | VARCHAR(50) | Unique username |
| `email` | VARCHAR(100) | Unique email address |
| `password_hash` | VARCHAR(255) | Stores the password hash |
| `status` | ENUM | Account status: `active`, `inactive`, or `suspended` |
| `create_at` | TIMESTAMP | Account creation time |
| `update_at` | TIMESTAMP | Last automatic update time |

The table uses **InnoDB** and **utf8mb4**.

Conceptually:

```text
dblogin_system
      │
      ▼
    users
      │
      ├── id
      ├── username
      ├── email
      ├── password_hash
      ├── status
      ├── create_at
      └── update_at
```

Example record:

| id | username | email | password_hash |
|---:|---|---|---|
| 1 | example_user | user@example.com | `$2y$...` |

The displayed hash is illustrative, not a real account credential.

> **Important:** Passwords must not be stored as plaintext. The database stores a password hash generated by PHP.

---

## 🔐 Password Security

Password hashing is one of the core security features of this project.

### ❌ Insecure approach

```text
username: example_user
password: mypassword123
```

Saving the original password directly in the database exposes users if the database is compromised.

### ✅ Recommended approach

PHP provides `password_hash()` to create a password hash and `password_verify()` to verify a submitted password.

```text
User Password
      │
      ▼
password_hash()
      │
      ▼
Password Hash
      │
      ▼
Database
```

During login:

```text
Submitted Password
        │
        ▼
Retrieve Stored Hash
        │
        ▼
password_verify()
        │
    ┌───┴────┐
    ▼        ▼
  Valid    Invalid
    │        │
    ▼        ▼
 Continue   Reject
```

The application also uses `password_needs_rehash()` to determine whether an existing password hash should be upgraded.

---

## 🛡️ SQL Injection Protection

The application uses **PDO prepared statements** for database queries involving user input.

### ❌ Unsafe example

```php
$sql = "SELECT * FROM users WHERE email = '$email'";
```

Directly inserting user-controlled input into an SQL statement can allow an attacker to alter the query.

### ✅ Safer approach

```php
$sql = "SELECT * FROM users WHERE email = :email";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    "email" => $email
]);
```

Prepared statements separate SQL structure from parameter values, helping prevent SQL injection through those parameters.

```text
User Input
    │
    ▼
Prepared Statement
    │
    ▼
Database Query
```

---

## 🔑 Authentication vs Authorization

These concepts serve different purposes.

| Concept | Meaning | Example |
|---|---|---|
| Authentication | Verifies who the user is | Checking login credentials |
| Authorization | Determines what the user may do | Restricting an administrative action |

The current application checks authentication and verifies that the user's account remains active.

More advanced role-based authorization can be added in a future iteration.

---

## 🍪 Session Management

HTTP is stateless. PHP sessions allow the application to associate subsequent requests with an authenticated user.

Conceptually:

```text
Login
  │
  ▼
Verify Credentials
  │
  ▼
Regenerate Session ID
  │
  ▼
Store Authenticated User ID
  │
  ▼
Access Dashboard
  │
  ▼
Check Session and Account Status
```

The session implementation includes:

- HTTP-only session cookies.
- `SameSite=Lax` cookie configuration.
- Session ID regeneration after successful login.
- An idle timeout.
- Centralized session initialization.

The current local HTTP configuration does not enable the `Secure` cookie flag. HTTPS deployments should use secure cookie settings.

---

## 🚪 Logout

Logging out should invalidate the authenticated session so that subsequent requests cannot continue using it.

```text
Dashboard
    │
    ▼
  Logout
    │
    ▼
Invalidate Session
    │
    ▼
Redirect to Login
```

The application destroys the session during logout. Future hardening can include CSRF protection for the logout action and explicit expiration of the session cookie.

---

## 🛡️ Security Features

The project incorporates several security practices during development.

| Feature | Purpose |
|---|---|
| Password hashing | Avoids storing plaintext passwords |
| PDO prepared statements | Helps prevent SQL injection |
| Input validation | Rejects invalid registration data |
| Output escaping | Helps prevent reflected or stored XSS when used in the appropriate output context |
| CSRF tokens | Protects supported state-changing forms against cross-site request forgery |
| Session ID regeneration | Helps prevent session fixation during login |
| Session timeout | Ends sessions after a period of inactivity |
| Account-status checks | Prevents inactive or suspended accounts from authenticating |
| Login rate limiting | Limits repeated failed attempts within the implemented session-based mechanism |
| Generic login errors | Avoids unnecessarily revealing whether an account exists |
| Security headers | Applies selected browser security policies |
| Error logging | Keeps detailed database exceptions out of user-facing responses |
| Secret scanning | Uses Gitleaks to scan files and Git history for potential secrets |

### Security testing notes

Gitleaks reported no leaks in the scans previously run against the working directory and Git history. This is a useful check, but it does not prove that the application is free from all secrets or security vulnerabilities.

The login rate limiter is session-based and is a learning implementation, not a complete production-grade defense against distributed attacks.

> This project is intended for learning and local development. It has not been represented as independently audited or production-ready.

---

## 🧪 Testing Strategy

The following areas have been tested during development, according to the project's development notes.

| Test Area | Expected Result |
|---|---|
| Registration validation | Invalid or missing input is rejected |
| Duplicate account | Existing username or email is handled |
| Password hashing | Password is stored as a hash |
| Valid login | Correct credentials establish a session |
| Invalid login | Incorrect credentials are rejected |
| CSRF validation | Invalid or missing tokens are rejected on protected forms |
| SQL injection | User input is handled through prepared statements |
| XSS output | User-controlled output is escaped where appropriate |
| Protected dashboard | Unauthenticated access is redirected |
| Account status | Non-active accounts are rejected |
| Session ID regeneration | Session ID changes after successful login |
| Idle timeout | An expired idle session is invalidated on a subsequent request |
| Logout | Authenticated session is destroyed |
| Security headers | Selected headers are returned by the server |

These checks describe the project's reported testing, not a substitute for a comprehensive security assessment.

---

## 🧰 Local Setup

### 1. Install XAMPP

Install XAMPP with Apache, PHP, MySQL/MariaDB, and phpMyAdmin.

### 2. Start the services

Open the XAMPP Control Panel and start:

```text
Apache  → Running
MySQL   → Running
```

### 3. Place the project in `htdocs`

The current project directory is:

```text
C:\xampp\htdocs\1.PHP+Xampp\
```

### 4. Create the database

1. Open `http://localhost/phpmyadmin/`.
2. Import `database/database.sql`.
3. Confirm that the `dblogin_system` database and `users` table exist.

If the SQL file does not create the database automatically, create `dblogin_system` first and then import the table definition.

### 5. Check the database configuration

Open `config/database.php` and verify the host, database name, username, and password for your local XAMPP installation.

A typical local configuration may use `localhost` and the XAMPP `root` account. A blank root password is a local-development convention in some installations, not a recommended production setting.

### 6. Open the application

Visit:

```text
http://localhost/1.PHP+Xampp/public/login.php
```

You can register a test account and then test login, dashboard access, and logout.

---

## 🧭 Development Progress

The project has progressed beyond the initial PHP form stage.

| Phase | Topic | Status |
|---|---|---|
| 01 | XAMPP and local environment | ✅ Completed |
| 02 | PHP fundamentals and form handling | ✅ Practiced |
| 03 | Database schema and PDO connection | ✅ Implemented |
| 04 | Registration and validation | ✅ Implemented |
| 05 | Password hashing and verification | ✅ Implemented |
| 06 | Login and session authentication | ✅ Implemented |
| 07 | Protected dashboard and logout | ✅ Implemented |
| 08 | CSRF protection for registration and login | ✅ Implemented |
| 09 | SQL injection and output-escaping practices | ✅ Implemented |
| 10 | Session configuration and idle timeout | ✅ Implemented |
| 11 | Account-status authorization checks | ✅ Implemented |
| 12 | Security headers and cache-control headers | ✅ Implemented |
| 13 | Secret scanning with Gitleaks | ✅ Scanned |
| 14 | Comprehensive automated security testing | ⬜ Future improvement |
| 15 | HTTPS deployment and production hardening | ⬜ Future improvement |

Statuses describe development progress and reported checks; they do not imply that every possible edge case has been verified.

---

## 🚀 Future Improvements

Potential improvements include:

- [ ] Add automated tests for authentication and session behavior.
- [ ] Add CSRF protection to the logout action.
- [ ] Review session-cookie expiration and cleanup behavior.
- [ ] Improve login rate limiting beyond session-based tracking.
- [ ] Add password reset with secure, time-limited tokens.
- [ ] Add user profile management.
- [ ] Introduce role-based authorization if required.
- [ ] Review Content Security Policy (CSP) before deployment.
- [ ] Configure HTTPS and production cookie settings.
- [ ] Configure Apache so only the `public/` directory is web-accessible.
- [ ] Add structured security and authentication event logging.
- [ ] Perform a documented security review before any public deployment.

---

## 📚 Key Concepts Learned

```text
PHP
├── Variables and Conditions
├── Functions and Arrays
├── Forms and Request Methods
└── Error Handling

Database
├── Relational Schema
├── Primary and Unique Keys
├── SQL Queries
└── PDO Prepared Statements

Authentication
├── Registration
├── Password Hashing
├── Password Verification
├── Session Management
└── Account Status Checks

Web Security
├── SQL Injection Prevention
├── XSS Output Escaping
├── CSRF Protection
├── Session Security
├── Rate Limiting
└── HTTP Security Headers
```

---

## 🎓 Learning Philosophy

This project follows a simple development cycle:

```text
       ┌─────────────┐
       │    LEARN    │
       │ Understand  │
       │ the concept │
       └──────┬──────┘
              ▼
       ┌─────────────┐
       │    BUILD    │
       │ Implement   │
       │ the feature │
       └──────┬──────┘
              ▼
       ┌─────────────┐
       │    TEST     │
       │ Check normal│
       │ and bad input│
       └──────┬──────┘
              ▼
       ┌─────────────┐
       │   IMPROVE   │
       │ Review and  │
       │ fix issues  │
       └──────┬──────┘
              └────────► Repeat
```

The objective is to understand **why the code works, how it can fail, and how to improve its security**, rather than simply copying code from tutorials.

---

## 👨‍💻 Author

**W1NDX**

Diploma in Information Technology  
Focus: Application & Web Development

Current learning interests:

- Backend and Full Stack Development
- Cybersecurity
- PHP and MySQL
- Web Application Security

---

## 📄 Project Purpose

This repository is primarily a learning project for local development and experimentation. It is not a claim of production readiness or an independent security audit.

---

## ⭐ Learning Goals

> **Build it. Understand it. Test it. Secure it.**

The goal is to understand how the browser, HTTP, web server, PHP backend, database, authentication, and session security work together—and to use those foundations in more advanced software development and cybersecurity projects.
