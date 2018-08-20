<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
Restful API using Laravel 5.6

# Quick start Guide

## Installation

**1. Clone this repo:**

```sh
git clone git@gitlab.com:mu-website-services/shark-api.git
```

**2. Install the dependencies:**

```sh
composer install
```

**3. Create application key:**

```bash
php artisan key:generate
```

**4. Setup database config `.env`**

```sh
...

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contact
DB_USERNAME=your-mysql-username
DB_PASSWORD=your-mysql-password

...
```

**5. Running Database Migration**

```sh
php artisan migrate
```

**6. Running Database Seeder**

```sh
php artisan db:seed
```

**7. Running Development Server**

```sh
php artisan serve
```

> Please open the following url `localhost:8000`