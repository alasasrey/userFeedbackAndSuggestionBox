<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# User Feedback and Suggestion Box

A Laravel-based web application that allows authenticated users to submit feedback and suggestions. Designed to support service-related industries (e.g., laundry) with features like service selection, feedback management, and admin moderation.

## 🚀 Features

- User authentication like (Login, Signup)
- Feedback, suggestion, and service submission form
- Service selection like (Wash & Fold, Dry Cleaning, Garment Care, Pickup & Delivery, Multiple Services)
- Admin dashboard to manage feedback, suggestions, and service

## 📸 Screenshots

<p align="center">
<img src="screenshots\login.png" width="400" alt="Login">
<img src="screenshots\signup.png" width="400" alt="Signup">
<img src="screenshots\home1.png" width="400" alt="Home1">
<img src="screenshots\home2.png" width="400" alt="Home2">
<img src="screenshots\home3.png" width="400" alt="Home3">
<img src="screenshots\home4.png" width="400" alt="Home4">
<img src="screenshots\home5.png" width="400" alt="Home5">
<img src="screenshots\home6.png" width="400" alt="Home6">
<img src="screenshots\admin-dashboard.png" width="400" alt="Admi1n Dashboard">
<img src="screenshots\admin-edit-dashboard.png" width="400" alt="Admin Edit Dashboard">
</p>

## 🛠️ Technologies Used

- **Laravel** (PHP Framework)
- **Blade** (Template Engine)
- **MySQL** (Database)
- **CSS** (Styling)

## 📦 Installation

Follow these steps to set up the project locally:

1. **Clone the repository**
    ```bash
    git clone https://github.com/alasasrey/userFeedbackAndSuggestionBox.git
    cd userFeedbackAndSuggestionBox

2. **Install dependencies**
    ```bash
    composer install
    npm install

3. **Create and configure .env file**
    ```bash
    cp .env.example .env
    php artisan key:generate

4. **Set up your database**
    In .env, configure your DB settings:
    ```bash
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password

5. **Run migrations**
    ```bash
    php artisan migrate

6. **Serve the application**
   ```bash
    php artisan serve

## 👤 Admin Access

To access the admin dashboard here the steps:

1. **Go to the database folder to find the AdminUserSeeder.php here is the folder structure to find it:**
   ```bash
   database\seeders\AdminUserSeeder.php

2. **Here is the code for the AdminUserSeeder, as you can see you can edit your admin email and your admin password if you want:**
   ```bash
   User::create([
       'name' => 'Admin User',
       //this is your admin email change it if you want
       'email' => 'admin@admin',
       //this is your admin password change it if you want
       'password' => bcrypt('admin_123'),
       'is_admin' => true,
   ]);
   
4. **Write this in your cmd to add the admin user to the database:**
   ```bash
   cd userFeedbackAndSuggestionBox
   php artisan db:seed AdminUserSeeder

5. **After that go the login page and login, in the home page as you can see in the nav bar there is the Admin Dashboard click it to access the admin dashboard:**

    <img src="screenshots\home1.png" width="400" alt="Home1">


## 🧪 Testing

You can write and run tests using Laravel's built-in PHPUnit:    
```bash 
php artisan test
```

## 📁 Project Structure Overview

```bash
resources/views/         # Blade templates (home, login, signup, etc.)
routes/web.php           # Web routes
app/Http/Controllers/    # Controllers for user and admin
database/migrations/     # DB structure
public/                  # Public assets
```

## 🙌 Contributing

1. Fork the repo
2. Create your feature branch (git checkout -b feature/FeatureName)
3. Commit your changes (git commit -m "your commit message")
4. Push to the branch (git push origin feature/FeatureName)
5. Open a pull request  

## Made with ❤️ by:

1. ALAS-AS, REY M.
2. ALBIOS, JEMLEN I. 
3. SAPAN, RUFFA MAE S.

    
