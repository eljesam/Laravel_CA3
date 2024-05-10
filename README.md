# My Amazing Blogging Platform

Welcome to my amazing blogging platform built with Laravel 8! This project provides a complete solution for creating and managing a blog with ease.

## About the Project

This project is aimed at simplifying the process of creating and managing a blog. It includes features such as user authentication, creating, editing, and deleting blog posts, commenting on posts, and more. Plus it is all about Dinosaurs!

## Requirements

Before getting started, ensure that your system meets the following requirements:

- PHP 7.3 or higher
- Node 12.13.0 or higher
- Composer
- MySQL database

## Getting Started

1. Clone the repository:
   ```bash
   git clone git@github.com:GlitchWhale/ServerSideCA1.git
   cd your_repository
   ```

2. Create a `.env` file by copying the example file:
   ```bash
   cp .env.example .env
   ```

3. Install PHP dependencies:
   ```bash
   composer install
   ```

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Clear cache and configuration:
   ```bash
   php artisan cache:clear && php artisan config:clear
   ```

6. Configure the database:
   - Create a MySQL database for the project.
   - Update the `.env` file with your database credentials.

7. Run database migrations:
   ```bash
   php artisan migrate
   ```

8. Seed the database with sample data (optional):
   ```bash
   php artisan db:seed
   ```

9. Start the development server:
   ```bash
   php artisan serve
   ```

10. Visit `http://localhost:8000` in your browser to access the application.

## Contributing
I guess you can contribute to this project but im not sure you would do that haha

## Extra Details
D00258836 SD2B Bianca Valicec

