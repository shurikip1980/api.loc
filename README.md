## System info

- mysql 5.6.*
- 7.2.5
- apache 2.4

## Install app

- Copy `.env.example` to `.evn`
- Change databases connection and mail user, password in `.evn`
- Change `APP_URL` and `APP_NAME` in `.evn`
- Key generate `php artisan key:generate`
- Composer install `composer install`
- Composer autoload `composer dumpautoload` or `composer dump-autoload`
- Migration `php artisan migrate`
- Seeds `php artisan db:seed`
- Install frontend dependencies yarn install
