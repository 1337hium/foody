## About FoodY

Self-Hosted Recipe management!
Im not a Webdev (as you can see in the code ;) ) but i love thinkering. So here we are, it "works", but it isn't professional.
If you want to change it, go ahead an fork it :)

"Demo" https://foody2.3473.ch

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
- mkdir public/upload/tumb


## ToDo
- [ ] Do we need the original pictures?
- [x] change "add" Layout
- [ ] change filtering
- [ ] clean routes
- [ ] clean code
- [ ] Multiuser?
- [ ] ?
