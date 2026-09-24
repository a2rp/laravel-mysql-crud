# Laravel MySQL CRUD

A Laravel product management application with resource routes, Blade views, validation, pagination, and MySQL-ready Eloquent persistence.

## Features

- Product create, read, update, and delete workflow
- Resourceful Laravel routes and controller actions
- Eloquent model and migration for product records
- Request validation, CSRF protection, flash messages, and pagination
- Responsive Blade interface with local branding
- Vite-managed CSS and JavaScript assets

## Tech Stack

- Laravel 10 and PHP 8.1+
- Blade, Eloquent, and Laravel Sanctum
- MySQL-compatible database
- Vite

## Run Locally

Install PHP, Composer, Node.js, and MySQL, then run:

npm install
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
npm run build
php artisan serve

Set the database values in .env before running the migration. Product routes are available at /products.

This is a server-rendered Laravel application and is not deployed to GitHub Pages. Use a PHP and MySQL-capable host for production.

## Future Direction

Authentication, image uploads, search, filters, and role-based catalog management can be added without changing the core product resource flow.

## Links

- Portfolio: https://www.ashishranjan.net
- GitHub: https://github.com/a2rp
- CodePen: https://codepen.io/ash1198
- LinkedIn: https://www.linkedin.com/in/aashishranjan
- Facebook: https://www.facebook.com/theash.ashish/
- YouTube: https://www.youtube.com/@ashishranjan-ashz?sub_confirmation=1
- Email: mailto:ash.ranjan09@gmail.com

## Support

- Support: https://a2rp-donation-page.netlify.app/
- Buy Me A Coffee: https://buymeacoffee.com/a2rp
- Patreon: https://patreon.com/a2rp