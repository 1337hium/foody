## ToDo
- edit .env.sample

## About FoodY

Rezeptverwaltung Self-Hosted!

## Installing

- Clone this Repo
- cp .env.example .env
- change Database Credentials
- Change APP_URL
- composer install
- sudo chown -R www-data:www-data foody
- `php artisan migrate`
- `php artisan key:generate`

- routes/web.php change Line 18 to 'Auth::routes(['register' => true]);'
- got to https://your.app.url/register and register your user
- change routes/web.php back to false

Once you are set running, go back to .env and change

`APP_DEBUG=true`

to

`APP_DEBUG=false`

This will prevent the error screen to show in case of error and will just return a code 500.



