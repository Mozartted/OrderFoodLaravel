#RebirthLaravel

###A cake ordering site structure constructed with laravel
RebirthLaravel is a site project built off laravel, it emulates an ordering system for a cake ordering site....

>Just do it (For the love of Cake)

###Project Descriptions
The project is a catering and confectionary platform for catering services. it features a custom ordering system and portfolio
the Idea is to help provide catering services to customers via the platform as well as help expand the reach of the confectionary
businesses.

###Installation
####Setting up project
* Clone or download the project
* Composer is required to run or test this project. if you don't have composer installed, check out [the composer site](https://getcomposer.org)
* Run the following commands in the terminal or command prompt, in the projects directory
```shell
    composer install --no-scripts
```
This shpould install the nessecary packages required in the composer.json file.
* This project comes with a sample database in sqlite, looking to switch the database?,
  * create your database via mySQL or SQLite
  * edit the app/config/database.php file and set the database default to your database type
  * edit the ENV variables appropraitely
    * Setting DB_CONNECTION to your database type
    * Setting DB_HOST to your host
    * Setting DB_DATABASE to your database name
    * Setting DB_USERNAME to your username
    * Setting DB_PASSWORD to your database password
  * Run the Migrations to create the database tables and fields
  ```shell
    php artisan migrate --path database/migrations/migrations1
  ```
  ```shell
    php artisan migrate --path database/migrations/migrations2
  ```
  ```shell
    php artisan migrate --path database/migrations/migrations3
  ```
  ```shell
    php artisan migrate --path database/migrations/migrations4
  ```

* Run the following command to start the server to demo the project.
```shell
    php artisan serve
```


## License
The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
