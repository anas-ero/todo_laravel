A simple multi-user Todo application built with **Laravel**, **MySQL**

Each user can register, log in, and manage their **own private list of tasks**.  
Authentication, authorization, and data ownership are handled properly on the backend.

## Features
- User registration & login (session-based auth)
- Each user has their **own todos**
- Create, mark as complete, and delete tasks
- Protected routes (guests cannot access todos)

## Installation & Setup
### 1. Clone the repository
### 2. Install dependencies
composer install
npm install
### 3. Environment setup
cp .env.example .env
php artisan key:generate
(Update the .env file with database credentials)
### 4. Run migrations
php artisan migrate
### 5. Run the app
php artisan serv
npm run dev