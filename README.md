## To run locally

1. you need php and composer previously installed on your machine

2. run: `composer install` to install dependences

3. copy, paste and rename the '.env.example' file to '.env' and change all variables that you need

4. run: `php artisan key:generate` to generate an base64 key to set into APP_KEY variable into '.env' file

5. run: `php artisan serve` to run into localhost:8000

done!

## To run in heroku:

1. run: `php artisan key:generate --show`, copy it and paste into '.env' file into APP_KEY variable

2. set the same APP_KEY key and value into Config Vars on your heroku app

3. connect your github repo into heroku on Deploy tab

4. enable automatic deploys

4. deploy branch master

enjoy!