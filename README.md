What to do after cloning a laravel project:

clone the project
in the project folder:

composer install

copy .env.example and rename to .env

make a new database 

add your personal (database) data to .env
php artisan key:generate

php artisan migrate:fresh --seed

if you get a date related error just retry the migration 
