## About BitPanda Test One

This is a simple project given as part of the hiring process of BitPanda.

## Requirements
1. Install PHP `7.4 or higher (8.*)` See download link here: https://www.php.net/downloads.php
2. Install `Composer` See the download link here: https://getcomposer.org/download/
3. Install `MySQL` See the download here: https://www.mysql.com/downloads/

## Run test
In the root of project, run `vendor/bin/phpunit`

## Set Up
1. In the root folder of this app and run `composer install` (NB: Make sure composer is install globally or you might need to run it as `composer.phar install`)
2. If there is no `.env` already, then Save `env.example` as `.env`.
3. Create a database in your local mysql server call  `bitpanda_test_two_db` in your mysql local server (you can use tools like sequel pro or mysql workbench to make it easier)
4. Run Migrations `php artisan migrate` in the root of project folder.
5. Run Seed `php artisan db:seed` in the root of project folder.
6. In your terminal, cd into root of this project and run `php artisan serve`
7. Copy the url as display in your terminal after the command you run in step 3. (It is always in the form: `http://127.0.0.1:8000`). Pay attention to the port


## API Endpoints
NB: Take note of the Base URL especially the  and replace accordingly when you run the `php artisan serve`
1. `GET` REQUEST: Transactions: `http://127.0.0.1:8001/api/transactions?source=csv` The query parameter of `source` is optional. The possible values for the `source` parameter is: `mysql` and `csv`. The default is `mysql`. 
