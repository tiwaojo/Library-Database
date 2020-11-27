# Library-Database
In order to execute this file please 
1. Download/clone this repository into yourlocal wamp directory (e.g. C:\wamp64\www)
2. Start WAMP and make sure all services are operational 
3. import the [Library Database](LibDatabase.sql) or run the script in phpMyAdmin
4. Locate the Database.php file [here](config/Database.php) and insert your dbname and password in the appropriate line commented new user
4. Assuming no default setting have been changed you should be able to access the website from [here](http://localhost/Library-Database/views/signin.php)
5. Navigate as you would any website


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
