# Library-Database
In order to execute this file please 
1. Download/clone this repository into yourlocal wamp directory (e.g. C:\wamp64\www)
2. Start WAMP and make sure all services are operational 
3. import the [Library Database](LibDatabase.sql) or run the script in phpMyAdmin
4. Locate the Database.php file [here](config/Database.php) and insert your dbname and password in the appropriate line commented new user
4. Assuming no default setting have been changed you should be able to access the website from [here](http://localhost/Library-Database/views/signin.php)
5. Navigate as you would any website

## Testing
#### Tools used: Selenium, Composer, PHPUnit

1. Download composer from [here](https://getcomposer.org/Composer-Setup.exe)
2. Run `composer require` then `composer dump-autoload -o` in the Library-Database directory to set up your environment. This will use the composer.json file included to install the required pachages
3. Navigate to the [chromedriver](https://sites.google.com/a/chromium.org/chromedriver/) website to get the  latest stable chrome driver version. Download and extract to a new directory called selenium. This directorys parent should be the Library-Database.
4. Open a terminal and `.\selenium\chromedriver --port=4444`
5. Open another terminal and run `./vendor/bin/phpunit ./tests/<testfile>.php`. Include `--filter <testMethod>` before `./tests/<testfile>.php` to test specific methods

## NOTES when looking at the files:
1. Primary focus of files are in the views
2. make sure to change ur password and username parameters in the database.php file in the config to the one you have currently for your server connection

## Functionalities:
1. can login and signup
2. read main files
3. view the files

## Resources
Helpful resourses that helped with this website
- [Online Web Tutor](https://www.youtube.com/watch?v=NmFmx6aLTIE)
- [Traversey Media: PHP REST API From Scratch [1] - Database & Read](https://www.youtube.com/watch?v=OEWXbpUMODk)
- [traversey Media: What Is A RESTful API? Explanation of REST & HTTP](https://www.youtube.com/watch?v=Q-BpqyOT3a8)
- [Code of Ninja](https://codeofaninja.com/2014/06/php-object-oriented-crud-example-oop.html)

Note the commits may not be accurate as some files were moved into new directories and refactored (renamed), as well as moved through other channels.
