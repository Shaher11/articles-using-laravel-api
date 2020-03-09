# This is a simple Article project with title and body using Laravel & API

## we are going to us Laravel, APIs and Vuejs. 


## Installation

Clone this repository

```bash
https://github.com/Shaher11/articles-using-laravel-api.git
```


Now install composer

```bash
composer install
```

Generate key on .env file

```bash
cp .env.example .env
php artisan key:generate
```

To migrate the database

```bash
php artisan migrate
```

You can add some fake data using Seeder

```bash
php artisan db:seed
```