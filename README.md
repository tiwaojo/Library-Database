# Library-Database (Laravel Version)
Requirements
-run this in a wamp server or any server as long as it has a PHP verison
-need to download Composer package manager in order to run certain commands https://getcomposer.org/download/
-MySQL database to hold the SQL database
In order to execute this file please 
1. Download/clone this repository into yourlocal wamp directory (e.g. C:\wamp64\www)
2. Start WAMP and make sure all services are operational 
3. import the [Library Database](LibDatabase.sql) or run the script in phpMyAdmin
4. make sure in the .env example, your MySQL credentials are correct to your MySQL user and password settings
5. in the terminal of the libdatabase folder, run composer install will make sure to download all the dependencies
6. run php artisan key:generate to generate a key to your .env file
7. run composer install
8. also for the authentication run php artisan migrate to make the user table in the lib database




## Functionalities:
1. can login and signup
2. read main files
3. view the files

## Resources
Helpful resourses that helped with this website
https://laravel.com/docs/8.x

Note the commits may not be accurate as some files were moved into new directories and refactored (renamed), as well as moved through other channels.
