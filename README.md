# Boilerplate Laravel Vue2

## Installation

Install composer packages:
```shell
composer update
```

Copy and rename .env.example to .env and generate key:
```shell
php artisan key:generate
```
Set database environtment. and migrate & seed:
```shell
php artisan migrate:refresh --seed
```
Install node modules:
```shell
npm install
```

## Development

Artisan:
```shell
php artisan serve
```
Watch:
```shell
npm run watch
```

## Spesification

1. Laravel 8
2. PHP 7.4
3. Node 16 lts
4. Vue 2 as Component (not SPA)
5. Bootstrap 5.3

