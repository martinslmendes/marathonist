# Marathonist

First of all, create `.env` file at the root folder using `.env.example` as model and configure the database connection parameters.

Then, run the following commands:

```console
composer install
npm install
npm run build
php artisan key:generate
```
At the root folder, under `storage/framework`, create `cache`, `sessions` and `views` folders

```console
mkdir storage/framework/cache
mkdir storage/framework/sessions
mkdir storage/framework/views
```

To run the application locally, run `php artisan serve` optionally using `--host` to set the desired IP address.