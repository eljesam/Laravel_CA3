# Our very own Goodreads

Hello! This is our own goodread where we can share opinions on certain books and allow the users to give their own opinion.

## About the Project

This project is all about honest book reviews and comments. This project also allows the user to create an account, add books to a reading list and add their own comments to books they have read. Each different user has different privileges based on their account type, e.g admins can manage users on the page as well as the posts, a simple user can add comments and add reviews and a guest user can only read reviews that are already posted.

## Requirements

Before getting started, ensure that your system meets the following requirements:

- PHP 7.3 or higher
- Node 12.13.0 or higher
- Composer
- MySQL database

## Getting Started

1. Create the respository ,
 named: 'Laravel_CA3'
and create diffeent branches

2. Create a `.env` file by copying the example file
  

3. Install PHP dependencies:
  
   composer install
 

4. Generate the application key:
  
   php artisan key:generate
   

5. Clear cache and configuration:
   
   php artisan cache:clear && php artisan config:clear
   

6. Configure the database:
   - Create a MySQL database for the project.
   - Update the `.env` file with your database credentials.

7. Run database migrations:
  
   php artisan migrate
  

8. Seed the database with sample data (optional):
   
   php artisan db:seed
  

9. Start the development server:
  
   php artisan serve
   

10. Visit  in your browser to access the application.

## Contributers
Bianca Valicec
Eljesa Mesi

## Extra Details
D00258836 SD2B Bianca Valicec
D00251881 SD2B Eljesa Mesi
