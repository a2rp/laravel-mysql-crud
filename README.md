# Laravel MySQL CRUD

A server-rendered Laravel product catalog with create, read, update, and delete workflows, validation, pagination, and MySQL-backed persistence.

![Product Manager preview](public/preview.png)

## Features

- List and paginate product records
- Create, view, edit, and delete products
- Validate product names and details on the server
- Eloquent model and migration for MySQL-compatible databases
- CSRF protection and escaped Blade output
- Responsive Blade interface with Vite-managed styling

## Stack

- Laravel 10 and PHP 8.1
- Blade and Eloquent
- MySQL
- Vite

## Run locally

This repository currently targets PHP 8.1 and Laravel 10. Install PHP, Composer, Node.js, and MySQL. Then:

```powershell
Copy-Item .env.example .env
composer install
php artisan key:generate
```

Create the database configured by `DB_DATABASE` in `.env`, then run:

```powershell
php artisan migrate
npm install
npm run build
php artisan serve
```

Open [http://localhost:8000/products](http://localhost:8000/products). The root URL redirects to the product list.

## Runtime support

This is a legacy learning project. Laravel 10's security support ended on February 4, 2025, and PHP 8.1 reached end of life on December 31, 2025. Before using this app in production, upgrade to a supported Laravel release and PHP version, regenerate `composer.lock`, then review the app and run its test suite. Laravel 13 requires PHP 8.3 or newer.

- [Laravel release support policy](https://laravel.com/docs/releases#support-policy)
- [PHP supported versions](https://www.php.net/supported-versions.php)

## Production note

The product routes are public and have no authentication or authorization. This project is a CRUD learning example; add access control and deploy only with a supported Laravel/PHP stack before using it for real product data.

## Links

- Portfolio: [ashishranjan.net](https://www.ashishranjan.net)
- GitHub: [a2rp](https://github.com/a2rp)
- CodePen: [ash1198](https://codepen.io/ash1198)
- LinkedIn: [Ashish Ranjan](https://www.linkedin.com/in/aashishranjan)
- Email: [ash.ranjan09@gmail.com](mailto:ash.ranjan09@gmail.com)

## Support

- [Support page](https://a2rp-donation-page.netlify.app/)
- [Buy Me a Coffee](https://buymeacoffee.com/a2rp)
- [Patreon](https://patreon.com/a2rp)
