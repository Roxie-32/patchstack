# Project SetUp

- Run git clone <https://github.com/Roxie-32/patchstack.git>.

- Move into your project directory by running cd patchstack

- Run 'composer install' to install all the project dependencies

- Run 'composer copy:env' to create a .env file in the project root

> If the above does not work(which usually occurs if your terminal is not one of the unix-based terminals like bash, zsh etc), Manually Create a .env file at the root of the project directory and copy the content of .env.example.

- Updated the .env file with the necessary variables.

## Database Setup

- Update the .env file with the Database credentials
- Run `php artisan migrate --seed` to migrate the database tables and also seed the tables with some dummy data.

## Start Application

- Run `php artisan serve` to start the application development server
- Run `php artisan route:list` to list all the available route that exists in the application
Sip some coffee while going through the code, you will enjoy it 😅

## Extra

Every endpoint has a single `_invoke()`  RequestHandler. Each Request Handlers are associated with ACtions to be performed.
I acknowledge that this codebase could be improved. I also included some nice-to-haves like Laravel IDE helper and Larastan level 8 rules. Run `/vendor/bin/phpstan analyse` to analyze the project.

## Documentation

All endpoints have been documented in [Postman](https://documenter.getpostman.com/view/12913860/VUxNSUAB) to see how requests can be made and how a sample response looks like.
