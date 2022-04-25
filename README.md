# Backend Prueba BackBone

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs)

Install all the dependencies using composer

    composer install   

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations & seeder (**Set the database connection in .env before migrating**)

    php artisan migrate:fresh --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**
    
    composer install    
    cp .env.example .env
    php artisan key:generate
    php artisan migrate:fresh --seed    
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan serve

----------

## Folders

- `app` - Contains all the Eloquent models
- `app/Http/Controllers/Api` - Contains all the controllers
- `app/Http/Controllers/Api` - Contains all the api controllers
- `app/Http/Requests` - Contains all the form requests
- `app/Http/Requests/Api` - Contains all the api form requests
- `config` - Contains all the application configuration files
- `database/factories` - Contains the model factory for all the models
- `database/migrations` - Contains all the database migrations
- `database/seeds` - Contains the database seeder
- `routes` - Contains all the api routes defined in web.php file

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------

## Testing

Run the laravel development server

    php artisan serve

The api can now be accessed at

    http://localhost:8000

## Test Unit
use Phpunit for testing the entire application

    php artisan test

## Technical Test

Based on new experiences I decided to do the challenge with Eloquent and proceeded to do the following steps:

- SOLID principles were used in its programming architecture.
- [Download and clean shares] (https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/CodigoPostal_Exportar.aspx).
- Create the corresponding migrations, models and seeders.
- Unit Test tests were carried out to verify the correct functioning of the API

    
    
