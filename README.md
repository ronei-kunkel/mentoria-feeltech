## To run locally

1. you need php and composer previously installed on your machine

2. run `composer install` to install dependences

3. run: `php artisan serve` to run into localhost:8000

done!

## To run in heroku:

1. run: `php artisan key:generate --show`, copy it and paste into .env file into APP_KEY variable

2. set the same APP_KEY key and value into PATH_VARS on your heroku app

3. connect your github repo into heroku on Deploy tab

4. enable automatic deploys

4. deploy branch master

enjoy!
