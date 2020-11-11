# Symfony 5 web application **libraries**

## Getting started

###To get it working, follow these steps:

- Clone the repository from github
    ```git
    https://github.com/SyntaxErrorLineNULL/artvisio.git
  ```

- Download Composer dependencies

- Make sure you have Composer <a href=https://getcomposer.org/download/> Composer installed</a> and then run:
`````composer log
    composer install
`````

Create config .env file
````dotenv
###> symfony/framework-bundle ###
    APP_ENV=prod|dev status 
    APP_SECRET=d890b007c9d73ee3839fa16c798ecb46
###> Config databese variable ###
   DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=mariadb-10.4.11
````

You may alternatively need to run php composer.phar install, depending on how you installed Composer.

+ create a database
+ run migrations

````bash
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    'if you don't want to work with an empty project, you can add data to the table'
    php bin/console doctrine:fixtures:load
````

Start the built-in web server

You can use Nginx or Apache, but the built-in web server works great:
````bash
php -S 127.0.0.1:8000 -t public
        or
symfony server:start
````

##### Now check out the site at https://127.0.0.1:8000
