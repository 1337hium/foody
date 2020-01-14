## About FoodY

Self-Hosted Recipe management!
Im not a Webdev (as you can see in the code ;) ) but i love thinkering. So here we are, it "works", but it isn't professional.
If you want to change it, go ahead an fork it :)

"Demo" https://foody2.3473.ch

## Installing

- Clone this Repo
- Set the DocumentRoot in your VirtualHost to the `public` Directory
- cp .env.example .env
- change Database Credentials
- Change APP_URL
- composer install
- sudo chown -R www-data:www-data foody
- `php artisan key:generate`
- If you Use MariaDB, add following to app/Providers/AppServiceProvider.php
```php
<?php
use Illuminate\Support\Facades\Schema;

public function boot()
{
    Schema::defaultStringLength(191);
}
```
- `php artisan migrate`
- routes/web.php change Line 18 to 'Auth::routes(['register' => true]);'
- got to https://your.app.url/register and register your user
- change routes/web.php back to false
- mkdir public/upload/tumb


## ToDo
- [ ] Do we need the original pictures?
- [x] change "add" Layout
- [ ] change filtering
- [ ] clean routes
- [ ] clean code
- [ ] Multiuser?
- [ ] ?
