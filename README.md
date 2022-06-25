## About This project
### (Run all the commands in the project directory)
### step 1:
* Create MySql database `paprica` with `utf8-bin` encoding.
### step 2:
* Run local server: `php artisan serve`  (make sure you have apache + MySql running).
### step 3:
* Run migrations: `php artisan migrate:fresh`.
### step 4:
* Create symbolic links to upload images: `php artisan storage:link`.
### step 5:
* Type `127.0.0.1:8000` in your browser

#### Open the browser console to see the error messages 
